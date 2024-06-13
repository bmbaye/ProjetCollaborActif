@extends('layouts.app')

@section('content')
<div class="list-categorie">
    <form action="">
        <input type="text" name="" id="" placeholder="Nom Categorie">
        <button>Ajouter</button>
    </form>
    <table class="tab-categories">
        <thead>
            <tr>
                <th>Id</th>
                <th>Categorie</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>XXXXXXX</td>
                <td>XXXXXXX</td>
                <td>
                    <button class="del-member">Supprimer</button>
                </td>
            </tr>
            <tr>
                <td>XXXXXXX</td>
                <td>XXXXXXX</td>
                <td>
                    <button class="del-member">Supprimer</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
