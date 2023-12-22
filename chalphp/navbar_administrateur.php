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

        .user-info {
            float: right;
            padding: 14px 16px;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="#">Classe</a>
    <a href="#">Tournoi</a>
    <a href="#">Administrateur</a>
    <div class="navbar-right">
        <div class="user-info">
            <span>Nom Prénom</span>
            <a href="#">Déconnexion</a>
        </div>
    </div>
</div>

</body>
</html>
