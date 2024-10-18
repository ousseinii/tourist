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
} else {
  header("Location: manage_destinations.php");
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Détails de la destination</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5">
    <h2><?php echo htmlspecialchars($destination['title']); ?></h2>
    <img src="../uploads/<?php echo htmlspecialchars($destination['photo']); ?>" class="img-fluid"
      alt="Photo de la destination">
    <p><strong>Prix:</strong> <?php echo htmlspecialchars($destination['price']); ?> €</p>
    <p><strong>Description:</strong> <?php echo nl2br(htmlspecialchars($destination['description'])); ?></p>
    <a href="manage_destinations.php" class="btn btn-primary">Retourner à la liste</a>
  </div>
</body>

</html>