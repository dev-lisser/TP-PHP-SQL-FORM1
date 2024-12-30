<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="text-center mt-5">Connexion</h2>
                <!-- Compléter l'attribut action et method-->
                <form action="#" method="#" class="border p-4 rounded">
                    <div class="mb-3">
                        <label for="identifiants" class="form-label">Identifiant</label>
                        <!-- Balise pour le champ Identifiant-->
                    </div>
                    <div class="mb-3">
                        <label for="mot_de_passe" class="form-label">Mot de passe</label>
                        <!-- Balise pour le champ Mot de passe-->
                        </div>
                        <!-- Balise pour le bouton Envoyer-->
                </form>
                <?php
                    if (isset($_GET['error'])) {
                        echo '<div class="alert alert-danger mt-3" role="alert">Identifiants incorrects.</div>';
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
