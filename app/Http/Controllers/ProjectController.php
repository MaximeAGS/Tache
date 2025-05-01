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

    public function update(Request $request, Department $projet)
    {
        //if ($projet->status_id == 1) {

        //    return back()->with('notify', [
        //        'type' => 'error',
        //        'message' => 'La tâche ne peut pas être modifiée car son statut est complété.'
        //    ]);
        //}
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date', 
            'department_id' => 'required|exists:departments,id',
            'status' => 'required|in:not_started,in_progress,on_hold,completed' ,
 
        ]);


        $projet->fill($validated);

        // Sauvegarder la tâche
        $projet->save();

        return back()->with('notify', [
            'type' => 'success',
            'message' => 'Tâche mise à jour avec succès'
        ]);
    }
}
