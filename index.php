<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Page de connexion</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
            <?php if (isset($_GET['error'])): ?>
                <div class="alert alert-danger text-center" role="alert">
                    Nom d'utilisateur ou mot de passe incorrect.
                </div>
            <?php endif; ?>
            </div>
            <div class="col-12">
            <?php if (isset($_GET['sql'])): ?>
                <div class="alert alert-warning text-center" role="alert">
                    Requête SQL utilisée : <?php echo htmlspecialchars($_GET['sql']); ?>
                </div>
            <?php endif; ?>
            </div>
            <div class="col-md-4">
                <h2 class="text-center">Connexion</h2>
                <form action="login_process.php" method="POST">
                    <div class="form-group">
                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
