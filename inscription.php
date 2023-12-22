<?php 
    session_start(); // Démarrage de la session
    require_once 'config.php'; // On inclut la connexion à la base de données
     // Préparation de la requête
    $requete = $bdd->prepare("SELECT CLAS_NOM FROM CLASSE");
    // Exécution de la requête
    $requete->execute();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page d'inscription</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <h1 class="text-center text-white">Créer un compte</h1>
</header>

<div class="container">
    <div class="row">
            <div class="login-form">
            <form action="function/inscription_traitement.php" method="post">
                <div class="form-group">
                    <input type="text" name="nom" class="form-control" placeholder="Nom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="prenom" class="form-control" placeholder="Prenom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    
                <label for="classe">Classe</label>
                <select name="classe">
                    <option value="">-- Sélectionnez une classe --</option>
                    <?php
                    // Parcours des résultats
                        foreach ($requete as $classe) {
                            echo "<option value=\"{$classe['CLAS_NOM']}\">{$classe['CLAS_NOM']}</option>";
                        }
                    ?>
                </select>
            
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                </div>   
            </form>
    
    <div class="d-grid gap-2 col-4 mx-auto">
            <button type="submit" class="btn btn-primary">Connexion <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
            <path d="M5.5 12.5H19.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12.5 5.5L19.5 12.5L12.5 19.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg></button>
    </div>
        
        </div>
    </div>
</div>


</body>
</html>
