<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use App\Models\Projet;
use App\Models\User;
use App\Models\TaskStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    //public function index(Request $request)
    //{
    //    $query = Tache::with(['Projet', 'assignee', 'status']);

    //    // Filtrage
    //    if ($request->has('status')) {
    //        $query->where('status_id', $request->status);
    //    }

    //    if ($request->has('Projet')) {
    //        $query->where('Project_id', $request->Projet);
    //    }

    //    if ($request->has('assigned_to')) {
    //        $query->where('assigned_to', $request->assigned_to);
    //    }

    //    // Si l'utilisateur n'est pas admin, limiter aux tâches qui le concernent
    //    if (!Auth::user()->isAdmin()) {
    //        $query->where(function ($q) {
    //            $q->where('assigned_to', Auth::id())
    //                ->orWhere('created_by', Auth::id())
    //                ->orWhereHas('Projet', function ($p) {
    //                    $p->where('department_id', Auth::user()->department_id);
    //                });
    //        });
    //    }

    //    $Taches = $query->orderBy('due_date')->paginate(1);

    //    // Pour les filtres du formulaire
    //    $Projets = Projet::orderBy('name')->get();
    //    $users = User::orderBy('name')->get();
    //    $statuses = TaskStatus::orderBy('order')->get();

    //    return view('admin.tache', compact('Taches', 'Projets', 'users', 'statuses'));
    //}

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
        $Taches = $query->orderBy('due_date')->paginate(15);

        // Récupérer les projets, utilisateurs et statuts pour les filtres
        $Projets = Projet::orderBy('name')->get();
        $users = User::orderBy('username')->get();
        $statuses = TaskStatus::orderBy('order')->get();

        return view('admin.tache', compact('Taches', 'Projets', 'users', 'statuses'))->with('notify', [
            'type' => 'success',
            'message' => 'Tâche crée avec succès.'
        ]);
    }

    public function create()
    {
        $Projets = Projet::orderBy('name')->get();
        $users = User::orderBy('username')->get();
        $status = TaskStatus::orderBy('name')->get();
        return view('admin.create_tache', compact('Projets', 'users', 'status'));
    }

    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'priority' => 'required|integer',
            'description' => 'nullable|string',
            'due_date' => 'required|date',
            'project_id' => 'required|exists:projets,id',
            'assigned_to' => 'required|exists:users,id',
            'status_id' => 'required|exists:task_statuses,id',
        ]);

        // Création de la tâche
        $task = new Tache();
        $task->title = $validated['title'];
        $task->priority = $validated['priority'];
        $task->description = $validated['description'];
        $task->due_date = $validated['due_date'];
        $task->project_id = $validated['project_id'];
        $task->assigned_to = $validated['assigned_to'];
        $task->created_by = auth()->user()->id; // Créateur est l'utilisateur authentifié
        $task->status_id = $validated['status_id'];
        $task->save();

        // Rediriger vers la page de la liste des tâches
        return redirect()->route('taches')->with('notify', [
            'type' => 'success',
            'message' => 'Tâche créée avec succès'
        ]);
    }



    public function show(Tache $Tache)
    {
        // Vérifier si l'utilisateur a accès à cette tâche
        $this->authorize('view', $Tache);

        $Tache->load(['Projet', 'assignee', 'creator', 'status', 'comments.user']);

        return view('Taches.show', compact('Tache'));
    }

    public function update(Request $request, Tache $task)
    {
        if ($task->status_id == 1) {

            return back()->with('notify', [
                'type' => 'error',
                'message' => 'La tâche ne peut pas être modifiée car son statut est complété.'
            ]);
        }
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'required|date',
            'priority' => 'required|integer|in:1,2,3,4',
            'status_id' => 'required|exists:task_statuses,id',
            'project_id' => 'required|exists:projets,id',
            'assignee_id' => 'nullable|exists:users,id',
        ]);


        $task->fill($validated);

        // Sauvegarder la tâche
        $task->save(); 

        return back()->with('notify', [
            'type' => 'success',
            'message' => 'Tâche mise à jour avec succès'
        ]);
    }


    public function edit(Request $request, Tache $Tache)
    {
        // Vérifier si l'utilisateur peut modifier cette tâche
        $this->authorize('update', $Tache);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'Project_id' => 'nullable|exists:Projets,id',
            'assigned_to' => 'nullable|exists:users,id',
            'status_id' => 'required|exists:Tache_statuses,id',
            'priority' => 'required|integer|min:1|max:5',
            'due_date' => 'nullable|date',
        ]);

        // Si la tâche est marquée comme terminée
        if ($request->has('completed') && $request->completed) {
            $validated['completed_at'] = now();
        } elseif ($request->has('uncomplete') && $request->uncomplete) {
            $validated['completed_at'] = null;
        }

        $Tache->update($validated);

        return redirect()->route('Taches.show', $Tache)
            ->with('notify', [
            'type' => 'success',
            'message' => 'Tâche mise à jour avec succès!'
        ]);
    }

    public function destroy($id)
    {
        Tache::findOrFail($id)->delete();
        return back()->with('notify', [
            'type' => 'success',
            'message' => 'Tâche supprimée avec succès'
        ]);

    }


    public function toggleComplete(Tache $Tache)
    {
        // Vérifier si l'utilisateur peut modifier cette tâche
        $this->authorize('update', $Tache);

        if ($Tache->completed_at) {
            $Tache->completed_at = null;
            $message = 'Tâche marquée comme non terminée';
        } else {
            $Tache->completed_at = now();
            $message = 'Tâche marquée comme terminée';
        }

        $Tache->save();

        return back()->with('notify', [
            'type' => 'success',
            'message' => 'Tâche supprimé avec succès'
        ]);

    }
}
