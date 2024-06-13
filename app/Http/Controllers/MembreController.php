<?php

namespace App\Http\Controllers;

use App\Http\Requests\MembreRequest;
use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index(){
        $membres=Membre::all();
        return $membres;
    }
    public function create(){
        return "";
    }
    public function store(MembreRequest $membre){
        $membre=Membre::create($membre->validated());
    }
    public function delete(MembreRequest $membre){
        $membre->delete();
    }
}
