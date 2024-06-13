<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Application Laravel</title>
    <!-- Ajoutez ici vos liens CSS et autres métadonnées -->
</head>
<body>
    <div class="header">
        <span class="logo"><img src="images/CollaborActif.png" alt="" width="90px" height="90px"></span>
        <div class="menu">
            <ul>
                <li><a href="">Listes</a></li>
                <li><a href="">Plannifier</a></li>
                <li><a href="">Ajouter Categorie</a></li>
            </ul>
            <div class="search">
                <input type="text" name="" id="" placeholder="Rechercher">
                <button>Ok</button>
            </div>
        </div>
    </div>
    <div class="contain">
        @yield('content')
    </div>
</body>
</html>
