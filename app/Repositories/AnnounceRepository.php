<?php
namespace App\Repositories;
use App\Models\Announce;
use App\Models\Categorie;

class AnnounceRepository 
{
    /**
     * function list()
     * Renvoie une liste de toutes les annonces
     */
    public function list() {
        return Announce::with('categorie')->latest()->paginate(4);
    }

    /**
     * show()
     * Retourne tout les élements d'une annonce
     * Condition => Recevoir ID de l'annonce
     */
    public function show($id) {
        return Announce::with('categorie')->findOrFail($id);
    }

    /**
     * createAnnounce()
     * Créer une annonce
     */
    public function createAnnounce($request) {
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
    }

    /**
     * searchAnnounce
     * Rechercher une annonce
     */
    public function searchAnnounce($key) {
        $query = Announce::with('categorie')
                        ->where('title', 'like', "%$key%")
                        ->orWhere('description', 'like', "%$key%")
                        ->paginate(5);
        return $query;
    }
}