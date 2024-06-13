<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'listeId'];

    public function liste()
    {
        return $this->belongsTo(Liste::class, 'listeId');
    }
}
