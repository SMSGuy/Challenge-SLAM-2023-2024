<?php
session_start();
include 'config.php';
if(!isset($_SESSION['id'])){
    header('Location:index.php');
    die();
}

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation du Classement</title>
    <style>
    </style>
</head>
<body>

<nav>
    <a href="#">Accueil</a>
    <a href="#">Tournoi</a>
    <a href="#">Accès visiteur</a>
    <a href="#">Connexion</a>
</nav>

<div class="container">
    <h1>Consultation du Classement</h1>

    <div class="buttons-container">
        <a href="#" class="button selected">Equipes</a>
        <a href="#" class="button">Classement</a>
        <a href="#" class="button">Match</a>
        <a href="#" class="button">Rencontres</a>
    </div>

    <div>
        <h2 class="title">Classement</h2>
        <?php
        // affiche resultat
        while ($row = $result->fetch_assoc()) {
            echo "<p class='ranking'>" . $row['equipe'] . " - " . $row['total_points'] . " points</p>";
        }
        ?>
    </div>

    <a href="#" class="back-button">Retour</a>
</div>

</body>
</html>
