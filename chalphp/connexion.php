<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
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
        #inscription-form {
            background-color: #fff;
            padding: 30px; 
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px; 
            margin-top: 50px; 
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        #form-header {
            margin-bottom: 20px;
        }
        input {
            width: 100%;
            padding: 15px; 
            margin-bottom: 15px; 
            box-sizing: border-box;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            padding: 15px; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
            font-size: 16px; 
        }
        #mot-de-passe-oublié {
            margin-top: 15px; 
            text-align: left;
            color: #007BFF;
        }
        h2 {
            color: #ffffff; 
        }
    </style>
</head>
<body>
    <h2>Formulaire de connexion</h2>
    <div id="inscription-form">
        <div id="form-header">
            
        </div>
        <form action="traitement_inscription.php" method="post">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="mot_de_passe">Mot de passe :</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required>

            
        </form>

        <p id="mot-de-passe-oublié">
            <a href="mot_de_passe_oublie.php">Mot de passe oublié ?</a>
        </p>
    </div>
    <button type="submit">Connexion</button>
</body>
</html>

