<?php
namespace App\Http\Controllers;

use App\Models\Liste;
use Illuminate\Http\Request;

class ListeController extends Controller
{
    public function index()
    {
        $listes = Liste::all();
        return view('listes.index', compact('listes'));
    }

    public function show(Liste $liste)
    {
        $groupes = $liste->groupes;
        return view('listes.show', compact('liste', 'groupes'));
    }

    public function membres(Liste $liste)
    {
        $membres = $liste->membres;
        return view('listes.membres', compact('liste', 'membres'));
    }
}
