<?php
require_once 'config.php'; // On inclut la connexion à la base de données

// Vérifications si l'utilisateur est un superadmin
if (isset($_SESSION['util_supadmin']) && $_SESSION['util_supadmin'] === true) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page SuperAdmin</title>
</head>
<body>
    <h1>Page du SuperAdmin</h1>
    <p>Cette page est seulement accessible si vous êtes un superadmin <code>util_supadmin = true</code>.</p>
</body>
</html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>
