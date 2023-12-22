<?php
require 'config.php'; // On inclut la connexion à la base de données
require 'connexion.php';
// Assurez-vous que l'utilisateur est connecté avant d'accéder à cette page
if (!isset($_SESSION['id'])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header('Location: index.php');
    exit();
}

// L'ID de l'utilisateur connecté est maintenant disponible dans $_SESSION['id']
$userId = $_SESSION['id'];

$query = "SELECT * FROM UTILISATEUR WHERE UTIL_ID = :id";
$stmt = $bdd->prepare($query);
$stmt->bindParam(':id', $userId);
$stmt->execute();

$user = $stmt->fetch(BDD::FETCH_ASSOC);

// Vérifiez si l'utilisateur existe
if (!$user) {
    // Rediriger vers une page d'erreur ou afficher un message approprié
    echo "Utilisateur non trouvé.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil de l'Utilisateur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Profil de l'Utilisateur</h2>

            <ul class="list-group">
                <li class="list-group-item"><strong>ID:</strong> <?php echo $user['UTIL_ID']; ?></li>
                <li class="list-group-item"><strong>Nom:</strong> <?php echo $user['UTIL_NOM']; ?></li>
                <li class="list-group-item"><strong>Prénom:</strong> <?php echo $user['UTIL_PRENOM']; ?></li>
                <li class="list-group-item"><strong>Email:</strong> <?php echo $user['UTIL_EMAIL']; ?></li>
            </ul>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
