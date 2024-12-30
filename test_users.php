<?php

$host = 'localhost';
$dbname = 'users_db'; 
$username = 'admindb'; 
$password = 'Cours@945'; 

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $conn->query("SHOW GRANTS FOR '$username'@'localhost'");

    $stmt = $conn->query('SELECT 1');
    $result = $stmt->fetch();

    if ($result) {
        echo "<p>L'utilisateur '$username' a bien accès à la base de données et peut exécuter des requêtes.</p>";
    } else {
        echo "<p>Impossible d'exécuter une requête de test avec cet utilisateur. Vérifiez les droits.</p>";
    }
} catch (PDOException $e) {
    echo "<p>Erreur de connexion ou d'accès à la base de données : " . $e->getMessage() . "</p>";
}
?>
