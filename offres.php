<?php
include('config/db.php');

// Récupérer les destinations de la base de données
$sql = "SELECT * FROM destinations";
$stmt = $conn->prepare($sql);
$stmt->execute();
$destinations = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
include('includes/header.php');
?>

<!-- Package Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
      <h1 class="mb-5">Awesome Packages</h1>
    </div>

    <!-- Barre de recherche -->
    <div class="row justify-content-center mb-4">
      <div class="col-lg-6 col-md-8">
        <input type="text" class="form-control form-control border-1 rounded-pill w-100 py-3 ps-4 pe-5  border-primary"
          id="searchBar" placeholder="Rechercher une destination...">
      </div>
    </div>

    <div class="row g-4 justify-content-center" id="packageList">
      <?php foreach ($destinations as $destination): ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp package-item" data-wow-delay="0.1s"
          data-title="<?php echo htmlspecialchars($destination['title']); ?>">
          <div class="package-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="uploads/<?php echo htmlspecialchars($destination['photo']); ?>"
                alt="<?php echo htmlspecialchars($destination['title']); ?>" />
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2 lieu">
                <i class="fa fa-map-marker-alt text-primary me-2"></i>
                <?php echo htmlspecialchars($destination['title']); ?>
              </small>
            </div>
            <div class="text-center p-4">
              <h3 class="mb-3 prix"><?php echo htmlspecialchars($destination['price']); ?> FCFA / Personne</h3>
              <!-- Description tronquée -->
              <p class="description" data-full-text="<?php echo htmlspecialchars($destination['description']); ?>">
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
    </div>
  </div>
</div>

<!-- Package End -->

<!-- Process Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">
        Process
      </h6>
      <h1 class="mb-5">3 Easy Steps</h1>
    </div>
    <div class="row gy-5 gx-4 justify-content-center">
      <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="position-relative border border-primary pt-5 pb-4 px-4">
          <div
            class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
            style="width: 100px; height: 100px">
            <i class="fa fa-globe fa-3x text-white"></i>
          </div>
          <h5 class="mt-4">Choose A Destination</h5>
          <hr class="w-25 mx-auto bg-primary mb-1" />
          <hr class="w-50 mx-auto bg-primary mt-0" />
          <p class="mb-0">
            Tempor erat elitr rebum clita dolor diam ipsum sit diam amet
            diam eos erat ipsum et lorem et sit sed stet lorem sit
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
        <div class="position-relative border border-primary pt-5 pb-4 px-4">
          <div
            class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
            style="width: 100px; height: 100px">
            <i class="fa fa-dollar-sign fa-3x text-white"></i>
          </div>
          <h5 class="mt-4">Pay Online</h5>
          <hr class="w-25 mx-auto bg-primary mb-1" />
          <hr class="w-50 mx-auto bg-primary mt-0" />
          <p class="mb-0">
            Tempor erat elitr rebum clita dolor diam ipsum sit diam amet
            diam eos erat ipsum et lorem et sit sed stet lorem sit
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
        <div class="position-relative border border-primary pt-5 pb-4 px-4">
          <div
            class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
            style="width: 100px; height: 100px">
            <i class="fa fa-plane fa-3x text-white"></i>
          </div>
          <h5 class="mt-4">Fly Today</h5>
          <hr class="w-25 mx-auto bg-primary mb-1" />
          <hr class="w-50 mx-auto bg-primary mt-0" />
          <p class="mb-0">
            Tempor erat elitr rebum clita dolor diam ipsum sit diam amet
            diam eos erat ipsum et lorem et sit sed stet lorem sit
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Process Start -->

<?php
include('includes/footer.php');
?>