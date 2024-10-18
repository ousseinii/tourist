<?php
session_start();
include('../config/db.php');

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
  header("Location: admin.php");
  exit();
}

// Récupérer les destinations depuis la base de données
$sql = "SELECT * FROM destinations";
$stmt = $conn->prepare($sql);
$stmt->execute();
$destinations = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Récupérer le nom de l'utilisateur connecté
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gérer les destinations</title>
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
      <h2>Gérer les destinations</h2>
      <form action="logout.php" method="POST">
        <button type="submit" class="logout-btn">Se déconnecter</button>
      </form>
    </div>

    <!-- Tableau pour lister les destinations -->
    <div class="container mt-4">
      <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th>#</th>
            <th>Titre</th>
            <th>Photo</th>
            <th>Prix</th>
            <th>Description</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($destinations)): ?>
            <?php foreach ($destinations as $index => $destination): ?>
              <tr>
                <td><?php echo $index + 1; ?></td>
                <td><?php echo htmlspecialchars($destination['title']); ?></td>
                <td><img src="../uploads/<?php echo htmlspecialchars($destination['photo']); ?>" alt="photo" width="100">
                </td>
                <td><?php echo htmlspecialchars($destination['price']); ?> €</td>
                <td><?php echo htmlspecialchars($destination['description']); ?></td>
                <td>
                  <a href="view_destination.php?id=<?php echo $destination['id']; ?>"
                    class="btn btn-info btn-sm">Afficher</a>
                  <a href="edit_destination.php?id=<?php echo $destination['id']; ?>"
                    class="btn btn-warning btn-sm">Modifier</a>
                  <a href="delete_destination.php?id=<?php echo $destination['id']; ?>" class="btn btn-danger btn-sm"
                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette destination ?');">
                    Supprimer
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="6" class="text-center">Aucune destination trouvée</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Lien Bootstrap JS et jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>