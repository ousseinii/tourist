<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
  header("Location: admin.php");
  exit(); // Terminer le script après la redirection
}

// Récupérer le nom de l'utilisateur connecté
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ajouter une destination</title>
  <!-- Lien Bootstrap 4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    .sidebar {
      width: 250px;
      background-color: #343a40;
      color: white;
      padding-top: 20px;
      position: fixed;
      height: 100%;
    }

    .sidebar a {
      color: white;
      padding: 15px;
      display: block;
      text-decoration: none;
    }

    .sidebar a:hover {
      background-color: #495057;
    }

    .main-content {
      margin-left: 250px;
      padding: 20px;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f8f9fa;
      padding: 10px 20px;
      border-bottom: 1px solid #dee2e6;
    }

    .logout-btn {
      background-color: #dc3545;
      color: white;
      border: none;
      padding: 8px 16px;
      cursor: pointer;
      text-align: center;
    }

    .logout-btn:hover {
      background-color: #c82333;
    }
  </style>
</head>

<body>

  <!-- Navigation verticale (sidebar) -->
  <div class="sidebar">
    <h4 class="text-center">Mon Dashboard</h4>
    <a href="#">Accueil</a>
    <a href="manage_destinations.php">Gérer les destinations</a>
    <a href="add_destination.php">Ajouter une destination</a>
    <a href="#">Paramètres</a>
    <a href="#">Support</a>
  </div>

  <!-- Contenu principal -->
  <div class="main-content">
    <div class="header">
      <h2>Ajouter une nouvelle destination</h2>
      <form action="logout.php" method="POST">
        <button type="submit" class="logout-btn">Se déconnecter</button>
      </form>
    </div>

    <!-- Formulaire d'ajout de destination -->
    <div class="container mt-4">
      <!-- <form action="add_destination.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="title">Titre de la destination</label>
          <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="photo">Photo</label>
          <input type="file" name="photo" id="photo" class="form-control-file" required>
        </div>
        <div class="form-group">
          <label for="price">Prix (en €)</label>
          <input type="number" name="price" id="price" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Ajouter la destination</button>
      </form> -->
    </div>
  </div>

  <!-- Lien Bootstrap JS et jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>