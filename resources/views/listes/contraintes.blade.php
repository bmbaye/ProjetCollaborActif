@extends('layouts.app')

@section('content')
    <div class="contraintes">
        <form action="">
            <div class="contrainte-1">
                <select name="" id="">
                    <option value="1">Nombre de groupes</option>
                    <option value="2">Nombre de membres par groupe</option>
                </select>
                <input type="number">
            </div>
            <div class="contrainte-2">
                <label for="">Qota maximal de Categorie par groupe</label>
                <input type="number">
            </div>
            <button>Enregistrer</button>
        </form>
    </div>
@endsection
