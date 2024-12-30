<?php
session_start();

// fonction pour récupérer la page connexion.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['identifiants'];
    $pass = $_POST['mot_de_passe'];

    echo "Utilisateur: " . $user . "<br>";  
    echo "Mot de passe: " . $pass . "<br>";

    // Rechercher l'utilisateur dans la base de données
    $sql = "";// requête de la question 9
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "Utilisateur trouvé: " . $row['identifiants'] . "<br>";  // Débogage
        // Vérifier le mot de passe avec password_verify()
        if (password_verify($pass, $row['mot_de_passe'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['identifiants'] = $row['identifiants'];
            
// FOnction pour rediriger vers la page dashboard.php
            exit();
        } else {
            
            // Message pour dire que le mot de passe est incorrect. 
            header("Location: index.php?error=true");
            exit();
        }
    } else {
            // Message pour dire que l'identifiant n'existe pas ou est incorrect
            header("Location: index.php?error=true");
        exit();
    }
}

$conn->close();
?>
