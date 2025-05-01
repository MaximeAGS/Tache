<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tache;
use App\Models\Projet;
use App\Models\User;
use App\Models\TaskStatus;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!auth()->check() || !auth()->user()->is_admin) {
                abort(403, 'Unauthorized action.');
            }
            return $next($request);
        });
    }


    public function Employee()
    {
        return view('admin.employee');
    }

    public function Leave()
    {
        return view('admin.leave');
    }

    public function Review()
    {
        return view('admin.review');
    }

    public function Report()
    {
        return view('admin.report');
    }
    
    

    public function Setting($section = 'profile')
    {
        return view('admin.setting', compact('section'));
    }

    public function Calendar()
    {
        return view('admin.calendar');
    }

    public function EditProfile()
    {
        return view('admin.profile');
    }

    public function storeProfilePhoto(Request $request)
    {
        // Validation de l'image
        $request->validate([
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Vérifier si le fichier est présent
        if ($request->hasFile('profile_photo')) {
            // Récupérer le fichier
            $file = $request->file('profile_photo');
    
            // Définir un nom pour l'image, par exemple : timestamp_image.jpg
            $filename = time() . '.' . $file->getClientOriginalExtension();
    
            // Stocker l'image dans le répertoire 'public/profile'
            $path = $file->storeAs('public/profile', $filename);
            
            $user = auth()->user();
            $user->profile_photo = $filename; 
            $user->save();
    
            return back()->with('notify', [
                'type' => 'success', 
                'message' => 'Photo de profil changée avec succès.'
            ]);
        }
    
        return back()->with('notify', [
            'type' => 'error', 
            'message' => 'Aucune image n\'a été téléchargée.'
        ]);
    }

    public function changePassword(Request $request)
    {
        // Validation des champs
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'min:8'],
            'repeat_password' => ['required'],
        ]);

        // Récupérer l'utilisateur authentifié
        $user = Auth::user();

        // Vérifier si le mot de passe actuel est correct
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('notify', [
                'type' => 'error',
                'message' => 'Le mot de passe actuel est incorrect.'
            ]);
        }

        // Vérifier si le nouveau mot de passe et le mot de passe répété sont identiques
        if ($request->new_password !== $request->repeat_password) {
            return back()->with('notify', [
                'type' => 'error',
                'message' => 'Les nouveaux mots de passe ne correspondent pas.'
            ]);
        }

        // Mettre à jour le mot de passe
        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return back()->with('notify', [
            'type' => 'success',
            'message' => 'Mot de passe modifié avec succès.'
        ]);
    }
    public function Tache(Request $request)
    {
        // Chargement des relations
        $query = Tache::with(['project', 'assignee', 'status', 'creator']);

        // Filtrage des tâches par statut
        if ($request->has('status')) {
            $query->where('status_id', $request->status);
        }

        // Filtrage des tâches par projet
        if ($request->has('Project')) {
            $query->where('project_id', $request->Project);  // Correction ici
        }

        // Filtrage des tâches par assigné
        if ($request->has('assigned_to')) {
            $query->where('assigned_to', $request->assigned_to);
        }

        // Si l'utilisateur n'est pas admin, filtrer les tâches qui le concernent
        if (!Auth::user()->isAdmin()) {
            $query->where(function ($q) {
                $q->where('assigned_to', Auth::id())
                    ->orWhere('created_by', Auth::id())
                    ->orWhereHas('project', function ($p) {
                        $p->where('department_id', Auth::user()->department_id);
                    });
            });
        }

        // Récupérer les tâches avec pagination
        $Taches = $query->orderBy('due_date')->paginate(1);

        // Récupérer les projets, utilisateurs et statuts pour les filtres
        $Projets = Projet::orderBy('name')->get();
        $users = User::orderBy('username')->get();
        $statuses = TaskStatus::orderBy('order')->get(); 
        
        return view('admin.tache', compact('Taches', 'Projets', 'users', 'statuses'))->with('notify', [
            'type' => 'success',
            'message' => 'Tâche crée avec succès.'
        ]);
    }


 
}
