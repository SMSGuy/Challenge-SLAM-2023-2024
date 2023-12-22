<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        body {
            background-color: #000000;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h2 {
            color: #ffffff;
        }

        #inscription-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin-top: 20px;
        }

        .rower {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .colo {
            width: 48%;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        #conditions {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        #conditions input {
            margin-right: 5px;
        }

        #condition {
            font-size: 13px;
            margin-left: auto;
        }

        #annuler {
            background-color: #FF0000; 
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            margin-right: 100px;
        }
        .rower{
            display: flex;
            flex-direction: row;
            gap: 10px;
        }
    </style>
</head>
<body>
    <h2>Formulaire d'Inscription</h2>
    <div id="inscription-form">
        <form action="traitement_inscription.php" method="post">
            <div class="rower">
                <div class="colo">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>

                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" required>
                </div>
                <div id="class-info">
                    <label for="classe">Classe :</label>
                    <select id="classe" name="classe" required>
                        <option value="1A">1A</option>
                        <option value="1B">1B</option>
                        <option value="2A">2A</option>
                        <option value="2B">2B</option>
                    </select>
                </div>
            </div>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="mot_de_passe">Mot de passe :</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required>

            <div id="conditions">
                <input type="checkbox" id="accept_conditions" name="accept_conditions" required>
                <label for="accept_conditions" id="condition">J'accepte les conditions générales et la politique de confidentialité</label>
            </div>

            
        </form>
    </div>
    <div class="rower">
        <button id="annuler" type="button">Annuler</button>
        <button type="submit">S'inscrire</button>
    </div>
</body>
</html>
