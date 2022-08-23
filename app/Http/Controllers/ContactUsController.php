<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\ContactUsRequest;
use App\Repositories\ContactUsRepository;

class ContactUsController extends Controller
{
    protected $contactUsRepo;

    public function __construct(ContactUsRepository $contactUsRepo)
    {
        $this->contactUsRepo = $contactUsRepo;
    }

    public function sendMessage(ContactUsRequest $request) {
        $admin = 20;

        // Si utilisateur connecté, envoyer le message
        if(Auth()->user()) {
            $this->contactUsRepo->send($request, $admin);
            return back()->with('success', 'Votre message a été envoyé avec succès !');
        }
        else {
            return back()->withErrors('Vous devez vous connecter avant de pouvoir soumettre un message.');
        }
    } 
}
