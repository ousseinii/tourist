<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Page de connexion</title>
  <!-- Lien Bootstrap 4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center">Connexion</h2>

        <?php
        session_start();
        // Vérifier si une erreur est stockée dans la session
        if (isset($_SESSION['error'])) {
          echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error'] . '</div>';
          unset($_SESSION['error']); // Supprimer l'erreur après l'affichage
        }
        ?>

        <form action="login.php" method="POST">
          <div class="form-group">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Lien Bootstrap JS et jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>