<?php 

namespace App\Repositories;

use App\Models\User;

class UserRepository 
{
    public function showAll() {
        return User::latest()->paginate(5);
    }

    public function showUser($id) {
        $user = User::findOrfail($id);
        if(! is_null($user)) {
            return view('profil', $user);
        } else {
            return redirect('/')->withErrors("Cet utilisateur n'existe pas");
        }
    }

    public function createUser($request) {
        $avatar = $request->avatar->store("users");

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
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

}
