<?php
// Connexion à la base de données
include('config/db.php');

// Récupérer les destinations de manière aléatoire
$sql = "SELECT * FROM destinations ORDER BY RAND()";
$stmt = $conn->prepare($sql);
$stmt->execute();
$destinations = $stmt->fetchAll();
?>

<?php
include('includes/header.php');
?>

<!-- About Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px">
        <div class="position-relative h-100">
          <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover" />
        </div>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
        <h6 class="section-title bg-white text-start text-primary pe-3">
          About Us
        </h6>
        <h1 class="mb-4">
          Welcome to <span class="text-primary">Tourist</span>
        </h1>
        <p class="mb-4">
          Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
          diam amet diam et eos. Clita erat ipsum et lorem et sit.
        </p>
        <p class="mb-4">
          Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
          diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
          lorem sit clita duo justo magna dolore erat amet
        </p>
        <div class="row gy-2 gx-4 mb-4">
          <div class="col-sm-6">
            <p class="mb-0">
              <i class="fa fa-arrow-right text-primary me-2"></i>First Class
              Flights
            </p>
          </div>
          <div class="col-sm-6">
            <p class="mb-0">
              <i class="fa fa-arrow-right text-primary me-2"></i>Handpicked
              Hotels
            </p>
          </div>
          <div class="col-sm-6">
            <p class="mb-0">
              <i class="fa fa-arrow-right text-primary me-2"></i>5 Star
              Accommodations
            </p>
          </div>
          <div class="col-sm-6">
            <p class="mb-0">
              <i class="fa fa-arrow-right text-primary me-2"></i>Latest
              Model Vehicles
            </p>
          </div>
          <div class="col-sm-6">
            <p class="mb-0">
              <i class="fa fa-arrow-right text-primary me-2"></i>150 Premium
              City Tours
            </p>
          </div>
          <div class="col-sm-6">
            <p class="mb-0">
              <i class="fa fa-arrow-right text-primary me-2"></i>24/7
              Service
            </p>
          </div>
        </div>
        <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
      </div>
    </div>
  </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">
        Services
      </h6>
      <h1 class="mb-5">Our Services</h1>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item rounded pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
            <h5>WorldWide Tours</h5>
            <p>
              Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
              amet diam
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="service-item rounded pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
            <h5>Hotel Reservation</h5>
            <p>
              Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
              amet diam
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="service-item rounded pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-user text-primary mb-4"></i>
            <h5>Travel Guides</h5>
            <p>
              Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
              amet diam
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="service-item rounded pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
            <h5>Event Management</h5>
            <p>
              Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
              amet diam
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item rounded pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
            <h5>WorldWide Tours</h5>
            <p>
              Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
              amet diam
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="service-item rounded pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
            <h5>Hotel Reservation</h5>
            <p>
              Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
              amet diam
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="service-item rounded pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-user text-primary mb-4"></i>
            <h5>Travel Guides</h5>
            <p>
              Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
              amet diam
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="service-item rounded pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
            <h5>Event Management</h5>
            <p>
              Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
              amet diam
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Service End -->

<!-- Destination Start -->
<div class="container-xxl py-5 destination">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">
        Destination
      </h6>
      <h1 class="mb-5">Popular Destination</h1>
    </div>
    <div class="row g-3">
      <div class="col-lg-7 col-md-6">
        <div class="row g-3">
          <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
            <a class="position-relative d-block overflow-hidden" href="">
              <img class="img-fluid" src="img/destination-1.jpg" alt="" />
              <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                30% OFF
              </div>
              <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                Thailand
              </div>
            </a>
          </div>
          <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
            <a class="position-relative d-block overflow-hidden" href="">
              <img class="img-fluid" src="img/destination-2.jpg" alt="" />
              <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                25% OFF
              </div>
              <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                Malaysia
              </div>
            </a>
          </div>
          <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
            <a class="position-relative d-block overflow-hidden" href="">
              <img class="img-fluid" src="img/destination-3.jpg" alt="" />
              <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                35% OFF
              </div>
              <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                Australia
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px">
        <a class="position-relative d-block h-100 overflow-hidden" href="">
          <img class="img-fluid position-absolute w-100 h-100" src="img/destination-4.jpg" alt=""
            style="object-fit: cover" />
          <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
            20% OFF
          </div>
          <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
            Indonesia
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- Destination Start -->

<!-- Package Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">
        Packages
      </h6>
      <h1 class="mb-5">Awesome Packages</h1>
    </div>
    <div class="row g-4 justify-content-center">
      <?php foreach ($destinations as $destination): ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="package-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="uploads/<?php echo htmlspecialchars($destination['photo']); ?>"
                alt="<?php echo htmlspecialchars($destination['title']); ?>" />
            </div>
            <div class="d-flex border-bottom">
              <small class="flex-fill text-center border-end py-2"><i
                  class="fa fa-map-marker-alt text-primary me-2"></i><?php echo htmlspecialchars($destination['title']); ?></small>
            </div>
            <div class="text-center p-4">
              <h3 class="mb-0"><?php echo htmlspecialchars($destination['price']); ?> FCFA / Personne</h3>
              <p><?php echo htmlspecialchars(substr($destination['description'], 0, 100)) . '...'; ?></p>
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
            <i class="fa fa-check fa-3x text-white"></i>
          </div>
          <h5 class="mt-4">Choisir une destination</h5>
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
            <i class="fa fa-mobile fa-3x text-white"></i>
          </div>
          <h5 class="mt-4">Nous contactez</h5>
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
            <i class="fa fa-globe fa-3x text-white"></i>
          </div>
          <h5 class="mt-4">Allez à l'adventure</h5>
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

<!-- Team Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">
        Travel Guide
      </h6>
      <h1 class="mb-5">Meet Our Guide</h1>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item">
          <div class="overflow-hidden">
            <img class="img-fluid" src="img/team-1.jpg" alt="" />
          </div>
          <div class="position-relative d-flex justify-content-center" style="margin-top: -19px">
            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
          </div>
          <div class="text-center p-4">
            <h5 class="mb-0">Full Name</h5>
            <small>Designation</small>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="team-item">
          <div class="overflow-hidden">
            <img class="img-fluid" src="img/team-2.jpg" alt="" />
          </div>
          <div class="position-relative d-flex justify-content-center" style="margin-top: -19px">
            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
          </div>
          <div class="text-center p-4">
            <h5 class="mb-0">Full Name</h5>
            <small>Designation</small>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="team-item">
          <div class="overflow-hidden">
            <img class="img-fluid" src="img/team-3.jpg" alt="" />
          </div>
          <div class="position-relative d-flex justify-content-center" style="margin-top: -19px">
            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
          </div>
          <div class="text-center p-4">
            <h5 class="mb-0">Full Name</h5>
            <small>Designation</small>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="team-item">
          <div class="overflow-hidden">
            <img class="img-fluid" src="img/team-4.jpg" alt="" />
          </div>
          <div class="position-relative d-flex justify-content-center" style="margin-top: -19px">
            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
          </div>
          <div class="text-center p-4">
            <h5 class="mb-0">Full Name</h5>
            <small>Designation</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Team End -->

<?php
include('includes/footer.php');
?>