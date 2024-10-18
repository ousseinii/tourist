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

  // Supprimer la destination de la base de données
  $sql = "DELETE FROM destinations WHERE id = :id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $destination_id);

  if ($stmt->execute()) {
    // Rediriger vers la page de gestion avec un message de succès
    header("Location: manage_destinations.php?message=deleted");
  } else {
    // Rediriger vers la page de gestion avec un message d'erreur
    header("Location: manage_destinations.php?message=error");
  }
} else {
  // Si aucun ID n'est passé, rediriger vers la page de gestion
  header("Location: manage_destinations.php");
}
?>