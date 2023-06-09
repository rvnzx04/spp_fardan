<?php include '../layout/config.php';
if (!isset($_SESSION['user'])) {
  header('location:../login.php');
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />

  <meta name="author" content="" />
  <title>SMK BM3</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="https://www.smkbm3.sch.id/storage/image/bm3.png" src />
  <link href="aos.css" rel="stylesheet" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles2.css" rel="stylesheet" />

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

    * {
      font-family: 'Poppins',
        sans-serif;

    }

    body {
      background-color: #e6e6e6;
    }
  </style>
</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container" data-aos="fade-down" data-aos-duration="1000">
      <img src="../bm3.png" class="img-rounded" style="margin-right: 18px;" alt="" srcset="" width="3%"> <a class="navbar-brand" href="#" style="color: white;">SMK Bina Mandiri Multimedia</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#" onClick="document.location.reload(true)">Dashboard</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#about">About Us</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="#team">Ekstrakulikuler</a></li>
          <li class="nav-item">
            <a class="nav-link" href="history.php">History</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-danger" href="proses_logout.php" onclick="return confirm('Apakah Anda Yakin ingin Keluar???')">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Masthead-->
  <header class="masthead" id="#home">
    <div class="container" data-aos="fade-up-right" data-aos-duration="1000">
      <div class="masthead-subheading">
        Welcome <?= $_SESSION['user']; ?> To SMK BINA MANDIRI MULTIMEDIA
      </div>
      <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
    </div>
  </header>
  <!-- Services-->

  <!-- Portfolio Grid-->
  <section class="page-section" style="  background-color: #e6e6e6;" id="portfolio">
    <div class="container" data-aos="zoom-in" data-aos-duration="1500">
      <hr />
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Prestasi</h2>
        <h3 class="section-subheading text-muted">
          Prestasi yang didapatkan
        </h3>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
          <!-- Portfolio item 1-->
          <div class="portfolio-item">
            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="../p1.jpg" alt="..." />
            </a>
            <div class="portfolio-caption">
              <div class="portfolio-caption-heading">Tim Fustsal</div>
              <div class="portfolio-caption-subheading text-muted">
                Juara 3
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <!-- Portfolio item 2-->
          <div class="portfolio-item">
            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="../p2.jpg" alt="..." />
            </a>
            <div class="portfolio-caption">
              <div class="portfolio-caption-heading">Explore</div>
              <div class="portfolio-caption-subheading text-muted">
                Graphic Design
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <!-- Portfolio item 3-->
          <div class="portfolio-item">
            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="../p6.jpg" alt="..." />
            </a>
            <div class="portfolio-caption">
              <div class="portfolio-caption-heading">Finish</div>
              <div class="portfolio-caption-subheading text-muted">
                Identity
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <!-- Portfolio item 4-->
          <div class="portfolio-item">
            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="../p4.jpg" alt="..." />
            </a>
            <div class="portfolio-caption">
              <div class="portfolio-caption-heading">Lines</div>
              <div class="portfolio-caption-subheading text-muted">
                Branding
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
          <!-- Portfolio item 5-->
          <div class="portfolio-item">
            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="../p5.jpg" alt="..." />
            </a>
            <div class="portfolio-caption">
              <div class="portfolio-caption-heading">Southwest</div>
              <div class="portfolio-caption-subheading text-muted">
                Website Design
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
          <!-- Portfolio item 6-->
          <div class="portfolio-item">
            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="../p3.png" alt="..." />
            </a>
            <div class="portfolio-caption">
              <div class="portfolio-caption-heading">Window</div>
              <div class="portfolio-caption-subheading text-muted">
                Photography
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About-->
  <section class="page-section bg-light" id="about">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">About</h2>
        <h3 class="section-subheading text-muted">
          Lorem ipsum dolor sit amet consectetur.
        </h3>
      </div>
      <ul class="timeline">
        <li>
          <div class="timeline-image">
            <img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." />
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>2009-2011</h4>
              <h4 class="subheading">Our Humble Beginnings</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt
                ut voluptatum eius sapiente, totam reiciendis temporibus qui
                quibusdam, recusandae sit vero unde, sed, incidunt et ea quo
                dolore laudantium consectetur!
              </p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-image">
            <img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." />
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>March 2011</h4>
              <h4 class="subheading">An Agency is Born</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt
                ut voluptatum eius sapiente, totam reiciendis temporibus qui
                quibusdam, recusandae sit vero unde, sed, incidunt et ea quo
                dolore laudantium consectetur!
              </p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-image">
            <img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." />
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>December 2015</h4>
              <h4 class="subheading">Transition to Full Service</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt
                ut voluptatum eius sapiente, totam reiciendis temporibus qui
                quibusdam, recusandae sit vero unde, sed, incidunt et ea quo
                dolore laudantium consectetur!
              </p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-image">
            <img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." />
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>July 2020</h4>
              <h4 class="subheading">Phase Two Expansion</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt
                ut voluptatum eius sapiente, totam reiciendis temporibus qui
                quibusdam, recusandae sit vero unde, sed, incidunt et ea quo
                dolore laudantium consectetur!
              </p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-image">
            <h4>
              Be Part
              <br />
              Of Our
              <br />
              Story!
            </h4>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- Team-->
  <section class="page-section" style="  background-color: #e6e6e6;" id="team">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Ekstrakulikuler</h2>
        <h3 class="section-subheading text-muted">
          Lorem ipsum dolor sit amet consectetur.
        </h3>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="../e4.png" alt="..." />
            <h4>Taekwondo</h4>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="../e2.png" alt="..." />
            <h4>Rohis</h4>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="../e3.png" alt="..." />
            <h4>Futsal</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
            eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam
            corporis ea, alias ut unde.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Clients-->
  <div class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3 col-sm-6 my-3">
          <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
        </div>
        <div class="col-md-3 col-sm-6 my-3">
          <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
        </div>
        <div class="col-md-3 col-sm-6 my-3">
          <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
        </div>
        <div class="col-md-3 col-sm-6 my-3">
          <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
        </div>
      </div>
    </div>
  </div>


  <!-- This is what your users will see when the form-->
  <!-- has successfully submitted-->
  <div class="d-none" id="submitSuccessMessage">
    <div class="text-center text-white mb-3">
      <div class="fw-bolder">Form submission successful!</div>
      To activate this form, sign up at
      <br />
      <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
    </div>
  </div>
  <!-- Submit error message-->
  <!---->
  <!-- This is what your users will see when there is-->
  <!-- an error submitting the form-->

  </div>
  </form>
  </div>
  </section>
  <!-- Footer-->
  <footer class="footer py-4 bg-dark">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 text-lg-start text-light">
          Copyright &copy; Fardan septian 2023
        </div>
        <div class="col-lg-4 my-3 my-lg-0">
          <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="col-lg-4 text-lg-end ">
          <a class="link-dark text-decoration-none me-3 text-light" href="#!">Privacy Policy</a>
          <a class="link-dark text-decoration-none text-light" href="#!">Terms of Use</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Portfolio Modals-->
  <!-- Portfolio item 1 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal">
          <img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">
                  Lorem ipsum dolor sit amet consectetur.
                </p>
                <img class="img-fluid d-block mx-auto" src="../p1.jpg" alt="..." />
                <p>
                  Use this area to describe your project. Lorem ipsum dolor
                  sit amet, consectetur adipisicing elit. Est blanditiis
                  dolorem culpa incidunt minus dignissimos deserunt repellat
                  aperiam quasi sunt officia expedita beatae cupiditate,
                  maiores repudiandae, nostrum, reiciendis facere nemo!
                </p>
                <ul class="list-inline">
                  <li>
                    <strong>Client:</strong>
                    Threads
                  </li>
                  <li>
                    <strong>Category:</strong>
                    Illustration
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Close Project
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 2 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal">
          <img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">
                  Lorem ipsum dolor sit amet consectetur.
                </p>
                <img class="img-fluid d-block mx-auto" src="../p2.jpg" alt="..." />
                <p>
                  Use this area to describe your project. Lorem ipsum dolor
                  sit amet, consectetur adipisicing elit. Est blanditiis
                  dolorem culpa incidunt minus dignissimos deserunt repellat
                  aperiam quasi sunt officia expedita beatae cupiditate,
                  maiores repudiandae, nostrum, reiciendis facere nemo!
                </p>
                <ul class="list-inline">
                  <li>
                    <strong>Client:</strong>
                    Explore
                  </li>
                  <li>
                    <strong>Category:</strong>
                    Graphic Design
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Close Project
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 3 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal">
          <img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">
                  Lorem ipsum dolor sit amet consectetur.
                </p>
                <img class="img-fluid d-block mx-auto" src="../p6.jpg" alt="..." />
                <p>
                  Use this area to describe your project. Lorem ipsum dolor
                  sit amet, consectetur adipisicing elit. Est blanditiis
                  dolorem culpa incidunt minus dignissimos deserunt repellat
                  aperiam quasi sunt officia expedita beatae cupiditate,
                  maiores repudiandae, nostrum, reiciendis facere nemo!
                </p>
                <ul class="list-inline">
                  <li>
                    <strong>Client:</strong>
                    Finish
                  </li>
                  <li>
                    <strong>Category:</strong>
                    Identity
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Close Project
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 4 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal">
          <img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">
                  Lorem ipsum dolor sit amet consectetur.
                </p>
                <img class="img-fluid d-block mx-auto" src="../p4.jpg" alt="..." />
                <p>
                  Use this area to describe your project. Lorem ipsum dolor
                  sit amet, consectetur adipisicing elit. Est blanditiis
                  dolorem culpa incidunt minus dignissimos deserunt repellat
                  aperiam quasi sunt officia expedita beatae cupiditate,
                  maiores repudiandae, nostrum, reiciendis facere nemo!
                </p>
                <ul class="list-inline">
                  <li>
                    <strong>Client:</strong>
                    Lines
                  </li>
                  <li>
                    <strong>Category:</strong>
                    Branding
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Close Project
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 5 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal">
          <img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">
                  Lorem ipsum dolor sit amet consectetur.
                </p>
                <img class="img-fluid d-block mx-auto" src="../p5.jpg" alt="..." />
                <p>
                  Use this area to describe your project. Lorem ipsum dolor
                  sit amet, consectetur adipisicing elit. Est blanditiis
                  dolorem culpa incidunt minus dignissimos deserunt repellat
                  aperiam quasi sunt officia expedita beatae cupiditate,
                  maiores repudiandae, nostrum, reiciendis facere nemo!
                </p>
                <ul class="list-inline">
                  <li>
                    <strong>Client:</strong>
                    Southwest
                  </li>
                  <li>
                    <strong>Category:</strong>
                    Website Design
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Close Project
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 6 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal">
          <img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">
                  Lorem ipsum dolor sit amet consectetur.
                </p>
                <img class="img-fluid d-block mx-auto" src="../p3.png" alt="..." />
                <p>
                  Use this area to describe your project. Lorem ipsum dolor
                  sit amet, consectetur adipisicing elit. Est blanditiis
                  dolorem culpa incidunt minus dignissimos deserunt repellat
                  aperiam quasi sunt officia expedita beatae cupiditate,
                  maiores repudiandae, nostrum, reiciendis facere nemo!
                </p>
                <ul class="list-inline">
                  <li>
                    <strong>Client:</strong>
                    Window
                  </li>
                  <li>
                    <strong>Category:</strong>
                    Photography
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Close Project
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <!-- * *                               SB Forms JS                               * *-->
  <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <script src="aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>