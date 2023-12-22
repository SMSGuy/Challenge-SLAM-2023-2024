<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Visiteur</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: black;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        #container {
            width: 50%;
            background-color: white;
            border: 2px solid white;
            padding: 20px;
            text-align: center;
            border-radius: 15px;
        }

        h1 {
            margin-top: 0;
            color: white;
        }

        p {
            margin-top: 20px;
            color: black;
        }

        #suivant-btn {
            background-color: blue; /* Fond bleu */
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            margin-top: 20px;
            border-radius: 10px; /* Coins arrondis */
            text-decoration: none; 
            width: 100px;
        }

        #suivant-btn img {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <h1>Bienvenue, visiteur!</h1>
    <div id="container">
        <p>Pas besoin d’avoir un compte pour accéder en tant que visiteur. Cela signifie que vous pouvez uniquement consulter les tournois.</p>
        <p>Les tournois sont organisés par l'administrateur du site. Vous pouvez consulter la liste des tournois en cours et terminés.</p>
        <a href="consultation_tournois.php" id="suivant-btn">Suivant →</a>
    </div>
</body>

</html>


