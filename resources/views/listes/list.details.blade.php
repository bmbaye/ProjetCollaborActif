@extends('layouts.app')

@section('content')
    <div class="list-details">
        <button class="delete-liste">Supprimer</button>
        <div class="list-options">
            <a href="">Groupes</a>
            <a href="">Membres</a>
        </div>
        <div class="groupes">
            <table class="groupe">
                <caption>Groupe 1</caption>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Date de naissance</th>
                        <th>Categorie</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXX</td>
                    </tr>
                    <tr>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXX</td>
                    </tr>
                </tbody>
            </table>
            <table class="groupe">
                <caption>Groupe 1</caption>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Date de naissance</th>
                        <th>Categorie</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXX</td>
                    </tr>
                    <tr>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXX</td>
                    </tr>
                </tbody>
            </table>
            <table class="groupe">
                <caption>Groupe 1</caption>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Date de naissance</th>
                        <th>Categorie</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXX</td>
                    </tr>
                    <tr>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXX</td>
                    </tr>
                </tbody>
            </table>
            <table class="groupe">
                <caption>Groupe 1</caption>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Date de naissance</th>
                        <th>Categorie</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXX</td>
                    </tr>
                    <tr>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXX</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="membres">
            <button class="add-member">Ajouter Membre</button>
            <table class="tab-membres">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Date de naissance</th>
                        <th>Categorie</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXX</td>
                        <td>
                            <button class="del-member">Supprimer</button>
                            <button class="update-member">Modifier</button>
                        </td>
                    </tr>
                    <tr>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXXXX</td>
                        <td>XXXXX</td>
                        <td>
                            <button class="del-member">Supprimer</button>
                            <button class="update-member">Modifier</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="membres">
                <button class="add-member">Ajouter Membre</button>
                <table class="tab-membres">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Date de naissance</th>
                            <th>Categorie</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>XXXXXXX</td>
                            <td>XXXXXXX</td>
                            <td>XXXXXXX</td>
                            <td>XXXXX</td>
                            <td>
                                <button class="del-member">Supprimer</button>
                                <button class="update-member">Modifier</button>
                            </td>
                        </tr>
                        <tr>
                            <td>XXXXXXX</td>
                            <td>XXXXXXX</td>
                            <td>XXXXXXX</td>
                            <td>XXXXX</td>
                            <td>
                                <button class="del-member">Supprimer</button>
                                <button class="update-member">Modifier</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
@endsection