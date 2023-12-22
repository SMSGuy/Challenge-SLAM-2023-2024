<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
    <style>
        body {
            background-color: #333; 
            color: #fff; 
            font-family: Arial, sans-serif;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; 
            margin: 0;
        }

        #title {
            font-size: 36px;
            margin-top: 20px;
            margin-bottom: 100px; 
        }

        .button-contenaire {
            display: flex;
            justify-content: center;
        }

        .button {
            display: inline-block;
            padding: 10px 30px;
            margin: 10px;
            border-radius: 10px;
            text-decoration: none;
            color: #fff;
            cursor: pointer;
        }

        #inscriptionButton {
            background-color: #fff;
            color: #333;
            margin-right: 100px; 
        }

        #connexionButton {
            background-color: #007BFF;
        }

        #visiteurButton {
            border: none;
            background: none;
            color: #888;
            font-size: 14px;
            margin-top: 20px;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div id="title">Bienvenue sur le site d’organisation de tournoi </div>

    <div class="button-contenaire">
        <a href="inscription.php" class="button" id="inscriptionButton">Inscription</a>
        <a href="connexion.php" class="button" id="connexionButton">Connexion    →</a>
    </div>

    <a href="visiteur.php" id="visiteurButton">Accès Visiteur</a>

</body>
</html>