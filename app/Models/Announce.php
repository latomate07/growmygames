<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Relation avec la catégorie - Une annonce a une catégorie
     */
    public function categorie() {
        return $this->hasOne(Categorie::class);
    }
}
