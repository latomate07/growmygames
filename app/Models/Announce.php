<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'type'
    ];

    /**
     * function list()
     * Renvoie une liste de toutes les annonces
     */
    public function list() {
        return $this->latest()->paginate(4);
    }

    /**
     * categorie()
     * Retourne la catégorie de l'annonce
     */
    public function categorie() {
        return $this->belongsTo(Categorie::class);
    }

    /**
     * show()
     * Retourne tout les élements d'une annonce
     * Condition => Recevoir ID de l'annonce
     */
    public function show($id) {
        return $this->with('categorie')->findOrFail($id);
    }
}
