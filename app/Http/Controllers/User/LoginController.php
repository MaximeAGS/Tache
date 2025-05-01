<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
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
        return view('user.login');
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
            
            if ($user->isAdmin() || $user->isManager()) {
                return redirect()->route('admin.index')->with('notify', ['type' => 'success', 'message' => "Bienvenue, $username !"]);
            }
            
            return redirect()->route('user.index')->with('notify', ['type' => 'success', 'message' => "Bienvenue, $username !"]);
        }
        
        return back()->with('notify', ['type' => 'error', 'message' => 'Les informations d\'identification sont incorrectes.'])
                 ->withInput($request->only('email'));
    }

    /**
     * Log the user out.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Logout()
    {
        Auth::logout();
        return redirect()->route('user.login');
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
        return view('user.index', compact('userCount', 'totalSalary', 'projectCount', 'taskCount'));
    }

    public function ShowRegisterForm()
    {
        return view('user.register'); 
    }

    public function Insert(Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ]);

        // Si la validation échoue, renvoyer les erreurs sous forme de message personnalisé
        if ($validator->fails()) {
            return redirect()->back()->with('notify', [
                'type' => 'error',
                'message' => $validator->errors()->first()
            ])->withInput();
        }

        // Créer l'utilisateur
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Authentifier l'utilisateur
        Auth::login($user);

        // Rediriger vers la page de connexion avec un message de succès
        return redirect()->route('user.login')->with('notify', [
            'type' => 'success',
            'message' => "Bienvenue, {$user->username}! Vous pouvez maintenant vous connecter."
        ]);
    }

}