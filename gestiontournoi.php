<?php 
    session_start(); // Démarrage de la session
    require_once 'config.php'; // On inclut la connexion à la base de données
    // Préparation de la requête
    $requete = $bdd->prepare("SELECT TOUR_ID FROM TOURNOI");
    // Exécution de la requête
    $requete->execute();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion de Tournoi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <h1 class="text-center text-white">Gérer un tournoi</h1>
</header>

<div class="container">
    <div class="row">
        <div class="login-form">
            <form action="function/inscription_traitement.php" method="post">
                <div class="form-group">
                    <label for="listetournoi">Liste Tournoi</label>
                    <select name="listetournoi">
                        <option value="">-- Sélectionnez un tournoi --</option>
                        <?php
                        // Parcours des résultats
                        foreach ($requete as $listetournoi) {
                            echo "<option value=\"{$listetournoi['TOUR_ID']}\">{$listetournoi['TOUR_ID']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Rejoindre</button>
                </div>   
            </form>
    
            <div class="d-grid gap-2 col-4 mx-auto">
                <path d="M5.5 12.5H19.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12.5 5.5L19.5 12.5L12.5 19.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg></button>
            </div>
        </div>
    </div>
</div>

</body>
</html>
