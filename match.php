<?php
require 'config.php'; // On inclut la connexion à la base de données

// Récupérer les données de la table MATCHE
$query = "SELECT * FROM MATCHE";
$stmt = $bdd->query($query);
$matches = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Matchs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Liste des Matchs</h2>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <?php
                        foreach ($matches[0] as $column => $value) {
                            echo "<th>{$column}</th>";
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($matches as $match) {
                        echo "<tr>";
                        foreach ($match as $value) {
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
