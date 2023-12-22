<?php 
    session_start(); // Démarrage de la session
    require_once 'config.php'; // On inclut la connexion à la base de données
     // Préparation de la requête
    $requete = $bdd->prepare("SELECT EQUI_ID, TOUR_ID, EQUI_NOM FROM EQUIPE");
    // Exécution de la requête
    $requete->execute();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <h1 class="text-center text-white">CONSULTATION EQUIPE TOURNOI</h1>
</header>

<div class="container">
    <div class="row">
            <div class="login-form">
            <form action="function/inscription_traitement.php" method="post">
                <div class="form-group">
                <label for="equipe">EQUIPE</label>
                <select name="equipe">
                    <option value="">-- Sélectionnez une équipe --</option>
                    <?php
                    // Parcours des résultats
                        foreach ($requete as $equipe) {
                            echo "<option value=\"{$equipe['EQUI_ID']}\">{$equipe['EQUI_ID']}</option>";
                        }
                    ?>
                </select>
                </div>
                    <button type="submit" class="btn btn-primary btn-block"> Afficher l'Equipe </button>
                </div>   
            </form>
        </div>
    </div>
</div>
</body>
</html>