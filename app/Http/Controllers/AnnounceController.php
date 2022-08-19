<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAnnounceRequest;
use App\Repositories\AnnounceRepository;

class AnnounceController extends Controller
{
    protected $announceRepository;

    public function __construct(AnnounceRepository $announce)
    {
        $this->announceRepository = $announce;
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
            'annonces' => $this->announceRepository->list() 
        ]);
    }

    /**
     * Function show()
     * Condition => Recevoir id de l'annonce
     */
    public function show(Request $resquest, $id)
    {
        return view("annonces.Announce", [
            "annonce" => $this->announceRepository->show($id)
        ]);
    }

    /**
     * Function create()
     * Création et enregistrement d'une annonce
     */
    public function create(StoreAnnounceRequest $request)
    {
        $this->announceRepository->createAnnounce($request);
        return redirect('/announces')->with('status', 'Votre annonce a été crée avec succès.');
    }

    public function createForm() {
        return view('annonces.Create');
    }
}
