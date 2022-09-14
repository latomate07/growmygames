<?php 

namespace App\Repositories;

use App\Models\User;
use App\Jobs\WelcomeUserMailJob;
use Illuminate\Support\Facades\Hash;
use App\Notifications\UserRegisterNotification;

class UserRepository 
{
    /**
     * Function showAll()
     * Récupère et renvoi tout les derniers utilisateurs
     * Ayant le role => Webmaster
     */
    public function showAll() {
        $users = User::latest()->where('role', 'Webmaster')->paginate(5);
        return $users;
    }

    /**
     * Function showUser()
     * Récupère et renvoie les informations d'un utilisateur
     * Condition => Recevoir son ID
     */
    public function showUser($id) {
        $user = User::findOrfail($id);
        if(! is_null($user)) {
            return view('user/Account', $user);
        } else {
            return redirect('/')->withErrors("Cet utilisateur n'existe pas");
        }
    }

    /**
     * Function createUser
     * Créer un nouveau utilisateur
     * Condition => Recevoir son nom, email, password, role & son avatar
     */
    public function createUser($request) {
        $avatar = $request->avatar->store("users");

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'avatar' => $avatar
        ]);

        auth()->login($user); // Connectez l'utilisateur

        // Notifier l'utilisateur
        WelcomeUserMailJob::dispatch($user);
        
        return redirect('/')->with('success', 'Votre compte a été crée avec succès.');
    }

    public function editUser($request, $id) {
        $user = User::findOrfail($id);

        // return
    }

    /**
     * Function loginUser
     * Connecte un utilisateur
     * Condition => Recevoir son email et son mot de passe
     */
    public function loginUser($request) {
        $credentials = $request->only('email', 'password');

        if(Auth()->attempt($credentials)) {
            return redirect('/')->withSuccess('Bon retour parmi nous !');
        }

        return redirect('/connexion')->withErrors('Votre identifiant ou mot de passe est incorrect.');
    }

}
