<?php
$servername = "localhost"; // ou l'adresse de votre serveur
$username = "admindb";        // nom d'utilisateur pour se connecter à MySQL
$password = "Cours@945";            // mot de passe pour MySQL
$dbname = "users_db";      // nom de la base de données

// Crée la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifie la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}
?>
