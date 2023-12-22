<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #333;
            border-radius: 0 0 50px 0; /* Coin inférieur gauche arrondi */
            overflow: hidden;
            color: #f2f2f2;
        }

        .navbar a {
            float: left;
            display: block;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar-right {
            float: right;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="#">Profil</a>
    <a href="#">Tournoi</a>
    <a href="#">Rencontre</a>
    <div class="navbar-right">
        <a href="#">Accès Visiteur</a>
        <a href="#">Page de Connexion</a>
    </div>
</div>

</body>
</html>
