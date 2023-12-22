<?php
require 'config.php'; // On inclut la connexion à la base de données

// Récupérer les données de la table UTILISATEUR
$query = "SELECT * FROM UTILISATEUR";
$stmt = $bdd->query($query);
$utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Utilisateurs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Liste des Utilisateurs</h2>
            

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <?php
                        foreach ($utilisateurs[0] as $column => $value) {
                            echo "<th>{$column}</th>";
                        }
                        ?>
                    </tr>
                </thead>
                
                
                <tbody>
                    <?php
                    foreach ($utilisateurs as $utilisateur) {
                        echo "<tr>";
                        foreach ($utilisateur as $value) {
                            echo "<td>{$value}</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>