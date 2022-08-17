<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreAnnounceRequest;
use App\Http\Requests\UpdateAnnounceRequest;
use App\Models\Categorie;

class AnnounceController extends Controller
{
    protected $announce;

    public function __construct()
    {
        $this->announce = new Announce();
    }
    public function index()
    {
        return view('Home');
    }

    /**
     * Function list()
     * Affiche toutes les annonces disponible en base de donnée
     */
    public function list() {
        return view('annonces.List', [
            'annonces' => $this->announce->list() 
        ]);
    }

    /**
     * Function show()
     * Condition => Recevoir id de l'annonce
     */
    public function show(Request $resquest, $id)
    {
        return view("annonces.Announce", [
            "annonce" => $this->announce->show($id)
        ]);
    }

    /**
     * Function create()
     * Création et enregistrement d'une annonce
     */
    public function create(StoreAnnounceRequest $request)
    {
        $imgFolder = $request->image->store('announces');

        $annonce = Announce::create([
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
            'image' => $imgFolder
        ]);

        Categorie::create([
             'nom' => $request->categorie,
             'announce_id' => $annonce->id
        ]);

        return redirect('/annonces')->with('status', 'Votre annonce a été crée avec succès.');
    }
}
