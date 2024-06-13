<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategorieRequest;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index(){
        $categories=Categorie::all();
        return $categories;
    }
    public function create(){
        return "";
    }
    public function store(CategorieRequest $categorie){
        $categorie=Categorie::create($categorie->validated());
    }
    public function delete(CategorieRequest $categorie){
        $categorie->delete();
    }
}
