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
        return view('Home', [
            "data" => $this->announce->list()
        ]);
    }

    /**
     * Function show()
     * Condition => Recevoir id de l'annonce
     */
    public function show(Request $resquest, $id)
    {
        return view("Announce", [
            "annonce" => $this->announce->show($id)
        ]);
    }

    /**
     * Function create()
     * Création et enregistrement d'une annonce
     */
    public function create(StoreAnnounceRequest $request)
    {
        $annonce = Announce::create([
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
        ]);

        Categorie::create([
             'nom' => $request->categorie,
             'announce_id' => $annonce->id
        ]);

        return redirect('/')->with('status', 'Votre annonce a été crée avec succès.');
    }
}
