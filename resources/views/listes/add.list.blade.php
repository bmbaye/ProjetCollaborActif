@extends('layouts.app')

@section('content')
    <div class="add-list">
        <form action="" class="list-down"> 
            <label for="nomliste">Nom de la liste</label>
            <input type="text" id="nomliste">  
            <input type="file" id="idFile">

            <button>Ajouter liste</button>
        </form>
        <button class ="saisir-list">Saisir la liste</button>
        <button class ="telecharger-list">Telecharger la liste</button>
        <form action="" class="list-type">
            <label for="">Nom:</label>
            <input type="text" name="" id="">
            <label for="">Prenom:</label>
            <input type="text" name="" id="">
            <label for="">Categorie</label>
            <select name="" id="">
            </select>
            <button>Ajouter</button>
        </form>
    </div>
@endsection