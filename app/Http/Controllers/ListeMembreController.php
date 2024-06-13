<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListeMembreRequest;
use App\Models\ListeMembre;
use Illuminate\Http\Request;

class ListeMembreController extends Controller
{
    public function index(){
        $listeMembres=ListeMembre::all();
        return $listeMembres;
    }
    public function create(){
        return "";
    }
    public function store(ListeMembreRequest $listeMembre){
        $listeMembre=ListeMembre::create($listeMembre->validated());
    }
    public function delete(ListeMembreRequest $listeMembre){
        $listeMembre->delete();
    }
}
