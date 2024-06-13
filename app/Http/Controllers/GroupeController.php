<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupeRequest;
use App\Models\Groupe;
use Illuminate\Http\Request;

class GroupeController extends Controller
{
    public function index(){
        $groupes=Groupe::all();
        return $groupes;
    }
    public function create(){
        return "";
    }
    public function store(GroupeRequest $groupe){
        $groupe=Groupe::create($groupe->validated());
    }
    public function delete(GroupeRequest $groupe){
        $groupe->delete();
    }
}
