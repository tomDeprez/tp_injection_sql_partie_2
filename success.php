<?php
// Démarrage de la session
session_start();

// Si l'utilisateur n'est pas connecté, on le redirige vers la page de connexion
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

// Récupération des informations de l'utilisateur depuis la session
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connexion réussie</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center text-success">Connexion réussie !</h2>
                <p class="text-center">Bienvenue, <?php echo htmlspecialchars($user['username']); ?>.</p>
                
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Informations</th>
                            <th>Détails</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nom d'utilisateur</td>
                            <td><?php echo htmlspecialchars($user['username']); ?></td>
                        </tr>
                        <tr>
                            <td>Est administrateur</td>
                            <td><?php echo $user['is_admin'] ? 'Oui' : 'Non'; ?></td>
                        </tr>
                        <?php if ($user['flag']): ?>
                            <tr>
                                <td>Flag</td>
                                <td><?php echo htmlspecialchars($user['flag']); ?></td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
