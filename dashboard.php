<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABzAi7z93XbJ1h2Qb7vL1pB5f5Lq39am5pIs5fb5c33ejo8y6f39OSf" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            padding-top: 50px;
        }

        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 600px;
            margin: auto;
        }

        .welcome-message {
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 20px;
        }

        .dashboard-text {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .btn-logout {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-logout:hover {
            background-color: #c82333;
        }

        .footer {
            text-align: center;
            margin-top: 50px;
            color: #6c757d;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="text-center">
        <h1 class="welcome-message">Bienvenue, <!-- Fonction PHP SESSION pour afficher l'identifiant-->!</h1>
        <p class="dashboard-text">Vous êtes connecté à votre tableau de bord.</p>
        <a href="logout.php" class="btn-logout">Se déconnecter</a>
    </div>
</div>



</body>
</html>
