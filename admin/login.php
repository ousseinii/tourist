<?php
session_start();
include('../config/db.php');

// Initialiser la variable d'erreur
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Préparer la requête pour vérifier les informations d'identification
  $sql = "SELECT * FROM users WHERE username = :username";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':username', $username);
  $stmt->execute();

  // Vérifier si l'utilisateur existe
  if ($stmt->rowCount() > 0) {
    $user = $stmt->fetch(PDO::FETCH_ASSOC); // Récupérer les informations de l'utilisateur

    // Vérifier le mot de passe
    if (password_verify($password, $user['password'])) {
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;
      header("Location: admin_dashboard.php"); // Page d'admin après connexion
      exit(); // Terminer le script après la redirection
    } else {
      $error = "Nom d'utilisateur ou mot de passe incorrect.";
    }
  } else {
    $error = "Nom d'utilisateur ou mot de passe incorrect.";
  }
}

// Stocker l'erreur dans la session pour la récupérer dans le formulaire
if ($error) {
  $_SESSION['error'] = $error;
  header("Location: admin.php"); // Rediriger vers la page de connexion
  exit();
}
?>