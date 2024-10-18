<?php
include('../config/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $title = $_POST['title'];
  $price = $_POST['price'];
  $description = $_POST['description'];

  // Gérer l'upload de la photo
  if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
    // Créer le chemin du dossier uploads
    $target_dir = "../uploads/"; // Assure-toi que le dossier existe dans le répertoire parent de admin

    // Nettoyer le nom du fichier pour éviter les problèmes
    $photo = basename($_FILES['photo']['name']);
    $photo = preg_replace("/[^a-zA-Z0-9.]/", "_", $photo);  // Remplacer les caractères spéciaux
    $target_file = $target_dir . $photo;

    // Déplacer le fichier téléchargé vers le dossier cible
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
      // Préparer et exécuter la requête pour insérer dans la base de données
      $sql = "INSERT INTO destinations (title, photo, price, description) VALUES (:title, :photo, :price, :description)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':title', $title);
      $stmt->bindParam(':photo', $photo);  // Utiliser juste le nom du fichier, pas le chemin complet
      $stmt->bindParam(':price', $price);
      $stmt->bindParam(':description', $description);

      if ($stmt->execute()) {
        echo "La destination a été ajoutée avec succès.";
        header('location: manage_destinations.php');
      } else {
        echo "Erreur lors de l'ajout de la destination.";
      }
    } else {
      echo "Erreur lors du téléchargement de la photo.";
    }
  } else {
    echo "Erreur : Aucun fichier sélectionné ou problème avec le fichier.";
  }
}

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
    <a href="#">Ajouter une destination</a>
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
      <form action="" method="POST" enctype="multipart/form-data">
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
      </form>
    </div>
  </div>

  <!-- Lien Bootstrap JS et jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>