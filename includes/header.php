<?php
// Récupérer le nom de la page actuelle
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <title>Tourist - Travel Agency HTML Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    .package-item img {
      width: 100%;
      /* L'image prend toute la largeur */
      height: 250px;
      /* Hauteur fixe pour toutes les images */
      object-fit: cover;
      /* Maintient le ratio de l'image et coupe l'excédent */
      object-position: center;
      /* Centre l'image à l'intérieur du cadre */
    }

    .form-row {
      display: flex;
      flex-wrap: wrap;
    }

    .form-row .col-12,
    .form-row .col-sm-4 {
      margin-bottom: 10px;
    }

    .form-row .col-12 .form-control,
    .form-row .col-sm-4 .form-control {
      max-width: 100%;
    }

    @media (max-width: 575.98px) {
      .form-row .col-sm-4 {
        width: 100%;
      }
    }
  </style>
  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
      <span class="sr-only">Chargement</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Topbar Start -->
  <div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
      <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
        <div class="d-inline-flex align-items-center" style="height: 45px">
          <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York,
            USA</small>
          <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
          <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
        </div>
      </div>
      <div class="col-lg-4 text-center text-lg-end">
        <div class="d-inline-flex align-items-center" style="height: 45px">
          <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
              class="fab fa-twitter fw-normal"></i></a>
          <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
              class="fab fa-facebook-f fw-normal"></i></a>
          <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
              class="fab fa-linkedin-in fw-normal"></i></a>
          <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
              class="fab fa-instagram fw-normal"></i></a>
          <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
              class="fab fa-youtube fw-normal"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->

  <!-- Navbar & Hero Start -->
  <div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
      <a href="index.php" class="navbar-brand p-0">
        <h1 class="text-primary m-0">
          <i class="fa fa-map-marker-alt me-3"></i>Tourist
        </h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
          <!-- Vérifier si on est sur index.php -->
          <a href="index.php"
            class="nav-item nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Accueil</a>

          <!-- Vérifier si on est sur offres.php -->
          <a href="offres.php"
            class="nav-item nav-link <?php echo ($current_page == 'offres.php') ? 'active' : ''; ?>">Offres</a>

          <!-- Vérifier si on est sur service.php -->
          <a href="service.php"
            class="nav-item nav-link <?php echo ($current_page == 'service.php') ? 'active' : ''; ?>">Services</a>
        </div>

        <a href="https://wa.me/221785321933?text=Bonjour, je souhaite obtenir plus d'informations sur vos offres."
          target="_blank" class="btn btn-primary rounded-pill py-2 px-4">
          Contactez-nous
        </a>

      </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
      <div class="container py-5">
        <div class="row justify-content-center py-5">
          <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
              Enjoy Your Vacation With Us
            </h1>
            <p class="fs-4 text-white mb-4 animated slideInDown">
              Tempor erat elitr rebum at clita diam amet diam et eos erat
              ipsum lorem sit
            </p>
            <?php if (basename($_SERVER['PHP_SELF']) == 'index.php'): ?>
              <form action="search.php" method="GET" class="position-relative w-75 mx-auto animated slideInDown">
                <input name="query" id="searchBar" class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5"
                  type="text" placeholder="Ex: Thailand" required>
                <button type="submit" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
                  style="margin-top: 7px;">Rechercher</button>
              </form>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Navbar & Hero End -->