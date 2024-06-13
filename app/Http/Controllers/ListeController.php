<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListeRequest;
use App\Models\Liste;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ListeController extends Controller
{
    public function index(){
        $listes=Liste::all();
        return $listes;
    }
    public function create(){
        return "";
    }
    public function store(ListeRequest $liste){
        $liste=Liste::create($liste->validated());
    }
    public function delete(ListeRequest $liste){
        $liste->delete();
    }
}
