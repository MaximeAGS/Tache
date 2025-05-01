<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Tache;
use App\Models\Projet;

class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function ShowLoginForm()
    {
        return view('admin.login');
    }

    /**
     * Handle login request.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        
        if (Auth::attempt($request->only('email', 'password'))) {
            session()->regenerate();
            $user = Auth::user();
            $username = $user->username ?? $user->firstname;
    
            if ($user->is_admin) {
                return redirect()->route('admin.index')->with('notify', [
                    'type' => 'success', 
                    'message' => "Bienvenue, $username !"
                ]);
            }
    
            return redirect()->route('user.index')->with('notify', [
                'type' => 'success', 
                'message' => "Bienvenue, $username !"
            ]);
        }
    
        return back()->with('notify', [
            'type' => 'error', 
            'message' => 'Les informations d\'identification sont incorrectes.'
        ])->withInput($request->only('email'));
    }

    /**
     * Log the user out.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function Index()
    {
        // Nombre d'utilisateurs
        $userCount = User::count();
    
        // Somme des salaires des utilisateurs
        $totalSalary = User::sum('salary');
    
        // Nombre de projets
        $projectCount = Projet::count();
    
        // Nombre de tâches
        $taskCount = Tache::count();
    
        // Passer toutes les variables à la vue
        return view('admin.index', compact('userCount', 'totalSalary', 'projectCount', 'taskCount'));
    }
    

}