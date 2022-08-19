<?php 

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository 
{
    public function showAll() {
        return User::latest()->paginate(5);
    }

    public function showUser($id) {
        $user = User::findOrfail($id);
        if(! is_null($user)) {
            return view('MyAccount', $user);
        } else {
            return redirect('/')->withErrors("Cet utilisateur n'existe pas");
        }
    }

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
        
        return redirect('/')->with('success', 'Votre compte a été crée avec succès.');
    }

    public function editUser($request, $id) {
        $user = User::findOrfail($id);

        // return
    }

    public function loginUser($request) {
        $credentials = $request->only('email', 'password');

        if(Auth()->attempt($credentials)) {
            return redirect('/')->withSuccess('Bon retour parmi nous !');
        }

        return redirect('/connexion')->withErrors('Votre identifiant ou mot de passe est incorrect.');
    }

}
