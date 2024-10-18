<?php
include('config/db.php'); // Inclure la connexion à la base de données

if (isset($_GET['query'])) {
  $query = htmlspecialchars(trim($_GET['query'])); // Récupérer et nettoyer l'entrée utilisateur

  // Préparer la requête SQL pour rechercher dans les destinations
  $sql = "SELECT * FROM destinations WHERE title LIKE :query OR description LIKE :query";
  $stmt = $conn->prepare($sql);
  $searchTerm = '%' . $query . '%';
  $stmt->bindParam(':query', $searchTerm, PDO::PARAM_STR);
  $stmt->execute();
  $destinations = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<?php include('includes/header.php'); ?>

<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h1 class="mb-5">Résultats de recherche pour "<?php echo htmlspecialchars($query); ?>"</h1>
    </div>
    <div class="row g-4 justify-content-center">
      <?php if (!empty($destinations)): ?>
        <?php foreach ($destinations as $destination): ?>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="package-item">
              <div class="overflow-hidden">
                <img class="img-fluid" src="uploads/<?php echo htmlspecialchars($destination['photo']); ?>"
                  alt="<?php echo htmlspecialchars($destination['title']); ?>" />
              </div>
              <div class="d-flex border-bottom">
                <small class="flex-fill text-center border-end py-2">
                  <i class="fa fa-map-marker-alt text-primary me-2"></i>
                  <?php echo htmlspecialchars($destination['title']); ?>
                </small>
              </div>
              <div class="text-center p-4">
                <h3 class="mb-3"><?php echo htmlspecialchars($destination['price']); ?> FCFA / Personne</h3>
                <p>
                  <?php
                  echo (strlen($destination['description']) > 100) ? substr(htmlspecialchars($destination['description']), 0, 100) . '...' : htmlspecialchars($destination['description']);
                  ?>
                </p>
                <!-- Champs date et heure sur la même ligne -->
                <div class="form-row align-items-center mb-3">
                  <div class="col-6 mb-2">
                    <div class="d-flex align-items-center">
                      <i class="fa fa-calendar-alt text-primary me-2"></i>
                      <input type="date" class="form-control destination-date">
                    </div>
                  </div>
                  <div class="col-6 mb-2">
                    <div class="d-flex align-items-center">
                      <i class="fa fa-clock text-primary me-2"></i>
                      <input type="time" class="form-control destination-time">
                    </div>
                  </div>
                </div>

                <!-- Champ nombre de personnes prenant toute la largeur -->
                <div class="form-row align-items-center mb-3">
                  <div class="col-12">
                    <div class="d-flex align-items-center">
                      <i class="fa fa-users text-primary me-2"></i>
                      <input type="number" class="form-control destination-people" placeholder="Nombre de personnes">
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-center mb-2">
                  <a href="booking.php?id=<?php echo htmlspecialchars($destination['id']); ?>&title=<?php echo urlencode($destination['title']); ?>&price=<?php echo htmlspecialchars($destination['price']); ?>&description=<?php echo urlencode($destination['description']); ?>&photo=<?php echo urlencode($destination['photo']); ?>"
                    class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px">Savoir plus</a>

                  <a class="btn btn-sm btn-primary px-3 whatsapp-btn" style="border-radius: 0 30px 30px 0"
                    onclick="sendToWhatsApp('<?php echo htmlspecialchars($destination['title']); ?>', '<?php echo htmlspecialchars($destination['price']); ?>', this)">
                    WhatsApp
                  </a>
                </div>

              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <div class="col-12 text-center">
          <h4>Aucune destination trouvée.</h4>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>