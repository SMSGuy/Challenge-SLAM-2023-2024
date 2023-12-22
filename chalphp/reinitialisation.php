<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Réunitialisation du mot de passe oublié</title>
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

        #reset-title {
            color: #fff;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            font-size: xx-large;
        }

        #reset-form {
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 60%;
            text-align: center;
            position: relative;
        }

        #reset-form input {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 15px;
            margin-top: 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 233px;
            height: 64px;
            font-size: xx-large;
        }

        #reset-form p {
            text-align: left;
            margin-bottom: 20px;
        }

        #reset-form label {
            text-align: left;
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div id="reset-title">Réunitialisation du mot de passe oublié</div>
    <div id="reset-form">
        <form action="traitement_reset.php" method="post">
            
            <label for="new_password">Nouveau mot de passe :</label>
            <input type="password" id="new_password" name="new_password" required>

            
            <label for="confirm_password">Confirmation du nouveau mot de passe :</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </form>
    </div>
    <button type="submit">Valider →</button>
</body>
</html>
