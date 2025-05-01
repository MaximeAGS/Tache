<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tache;
use App\Models\Projet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Tâches assignées à l'utilisateur courant
        $assignedTaches = Tache::where('assigned_to', $user->id)
            ->whereNull('completed_at')
            ->orderBy('due_date')
            ->take(5)
            ->get();

        // Projets associés au département de l'utilisateur
        $Projets = Projet::where('department_id', $user->department_id)
            ->orderBy('end_date')
            ->take(5)
            ->get();

        // Statistiques
        $TacheStats = [
            'total' => Tache::where('assigned_to', $user->id)->count(),
            'completed' => Tache::where('assigned_to', $user->id)->whereNotNull('completed_at')->count(),
            'pending' => Tache::where('assigned_to', $user->id)->whereNull('completed_at')->count(),
        ];

        // Si l'utilisateur est admin ou manager, afficher des statistiques supplémentaires
        $adminStats = null;
        if ($user->isAdmin() || $user->isManager()) {
            $adminStats = [
                'totalUsers' => User::count(),
                'totalProjets' => Projet::count(),
                'totalTaches' => Tache::count(),
                'completedTaches' => Tache::whereNotNull('completed_at')->count(),
            ];
        }

        return view('admin.index', compact('assignedTaches', 'Projets', 'TacheStats', 'adminStats'));
    }
}
