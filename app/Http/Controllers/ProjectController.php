<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Projet::with('department');

        // Filtrage
        if ($request->has('department')) {
            $query->where('department_id', $request->department);
        }

        if ($request->has('status')) {
            $query->where('status', $request->status);
        }

        // Si l'utilisateur n'est pas admin, limiter aux projets de son département
        if (!Auth::user()->isAdmin() && !Auth::user()->isManager()) {
            $query->where('department_id', Auth::user()->department_id);
        }

        $projects = $query->orderBy('name')->paginate(15);

        // Pour les filtres du formulaire
        $departments = Department::orderBy('name')->get();
        $statuses = [
            'not_started' => 'Non démarré',
            'in_progress' => 'En cours',
            'on_hold' => 'En pause',
            'completed' => 'Terminé'
        ];

        return view('admin.projet', compact('projects', 'departments', 'statuses'));
    }

    public function update(Request $request, Projet $projet)
    {
        // Validation des données envoyées par le formulaire
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'nullable|date',  
            'end_date' => 'nullable|date',    
            'department_id' => 'nullable|exists:departments,id', 
            'status' => 'required|in:not_started,in_progress,on_hold,completed',
        ]);

        $projet->fill($validated);

        $projet->save();

        return back()->with('notify', [
            'type' => 'success',
            'message' => 'Projet mis à jour avec succès',
        ]);
    }

    public function destroy($id)
    {
        Projet::findOrFail($id)->delete();
        return back()->with('notify', [
            'type' => 'success',
            'message' => 'Tâche supprimée avec succès'
        ]);
    }

    public function create()
    {
        $Departements = Department::orderBy('name')->get(); 

        return view('admin.create_project', compact('Departements'));
    }

    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|string|max:255', 
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'departement_id' => 'required|exists:departments,id',
        ]);

        // Création de la tâche
        $projet = new Projet();
        $projet->name = $validated['name']; 
        $projet->description = $validated['description'];
        $projet->start_date = $validated['start_date'];
        $projet->end_date = $validated['end_date'];
        $projet->department_id = $validated['departement_id']; 
        $projet->save();

        // Rediriger vers la page de la liste des tâches
        return redirect()->route('manage')->with('notify', [
            'type' => 'success',
            'message' => 'Projet crée avec succès'
        ]);
    }
}
