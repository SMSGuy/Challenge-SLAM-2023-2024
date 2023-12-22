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
            border-radius: 0px 0 50px 50px; /* Coin inférieur gauche arrondi */
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
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
    <a href="accueil.php">Accueil</a>
    <a href="tournoi.php">Tournoi</a>
    <div class="navbar-right">
        <a href="visiteur.php">Accès Visiteur</a>
        <a href="connexion.php">Page de Connexion</a>
    </div>
</div>

</body>
</html>
