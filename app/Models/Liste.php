<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liste extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'nombreMembre'];

    public function groupes()
    {
        return $this->hasMany(Groupe::class, 'listeId');
    }

    public function membres()
    {
        return $this->belongsToMany(Membre::class, 'liste_membres', 'listeId', 'membreId');
    }
}
