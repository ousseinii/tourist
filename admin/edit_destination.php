<?php
session_start();
include('../config/db.php');

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("Location: admin.php");
  exit();
}

// Vérifier si un ID de destination est passé dans l'URL
if (isset($_GET['id'])) {
  $destination_id = $_GET['id'];

  // Récupérer les informations de la destination
  $sql = "SELECT * FROM destinations WHERE id = :id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $destination_id);
  $stmt->execute();
  $destination = $stmt->fetch(PDO::FETCH_ASSOC);

  // Si aucune destination trouvée, rediriger
  if (!$destination) {
    header("Location: manage_destinations.php?message=notfound");
    exit();
  }

  // Si le formulaire est soumis, traiter la mise à jour
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $photo = $destination['photo']; // Garder l'ancienne photo par défaut

    // Gérer le téléchargement d'une nouvelle photo si elle est modifiée
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
      $target_dir = "../uploads/";
      $photo = basename($_FILES["photo"]["name"]);
      $target_file = $target_dir . $photo;

      if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        // Réussite du téléchargement
      } else {
        echo "Erreur lors du téléchargement de la photo.";
      }
    }

    // Mettre à jour la destination dans la base de données
    $sql = "UPDATE destinations SET title = :title, price = :price, description = :description, photo = :photo WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':photo', $photo);
    $stmt->bindParam(':id', $destination_id);

    if ($stmt->execute()) {
      header("Location: manage_destinations.php?message=updated");
    } else {
      echo "Erreur lors de la mise à jour.";
    }
  }
} else {
  header("Location: manage_destinations.php");
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Modifier la destination</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5">
    <h2>Modifier la destination</h2>
    <form action="edit_destination.php?id=<?php echo $destination['id']; ?>" method="POST"
      enctype="multipart/form-data">
      <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" class="form-control"
          value="<?php echo htmlspecialchars($destination['title']); ?>" required>
      </div>
      <div class="form-group">
        <label for="price">Prix</label>
        <input type="number" name="price" id="price" class="form-control"
          value="<?php echo htmlspecialchars($destination['price']); ?>" required>
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control" rows="4"
          required><?php echo htmlspecialchars($destination['description']); ?></textarea>
      </div>
      <div class="form-group">
        <label for="photo">Photo actuelle</label><br>
        <img src="../uploads/<?php echo htmlspecialchars($destination['photo']); ?>" width="150" alt="photo">
      </div>
      <div class="form-group">
        <label for="photo">Changer la photo</label>
        <input type="file" name="photo" id="photo" class="form-control-file">
      </div>
      <button type="submit" class="btn btn-success">Mettre à jour</button>
    </form>
  </div>
</body>

</html>