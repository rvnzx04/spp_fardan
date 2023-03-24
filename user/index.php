<?php

include '../layout/config.php';
$id_siswa = $_SESSION['id_siswa'];
$query1 =  mysqli_query($conn, "SELECT * FROM pembayaran JOIN spp ON (spp.spp_id=pembayaran.id_spp) JOIN admin ON (admin.id_admin = pembayaran.id_admin) JOIN siswa ON(siswa.id_siswa = pembayaran.id_siswaFK) JOIN kelas ON(kelas.id_kelas = siswa.id_jurusan) JOIN bulan ON (bulan.id_bulan = pembayaran.id_bulan)  WHERE id_siswa  ='$id_siswa';");
$tampil = mysqli_fetch_assoc($query1);
$nama = $tampil['nama'];

$no = 1;
?>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="../vendors/styles/core.css" />
<link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css" />
<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/responsive.bootstrap4.min.css" />
<link rel="stylesheet" type="text/css" href="../vendors/styles/style.css" />


<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

  * {
    font-family: 'Poppins',
      sans-serif;
  }
</style>

<!-- Bootstrap core CSS -->
<link href="../src/plugins/bootstrap/bootstrap.min.css" rel="stylesheet" />

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  body {
    background-color: #e6e6e6;
  }
</style>

<!-- Custom styles for this template -->
<link href="carousel.css" rel="stylesheet" />
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container">
        <img src="../register.png" alt="" srcset="" width="4%">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>

  <main>

    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner ">
        <div class="carousel-item active">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="color-white">First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
          <img class="d-block w-200" src="../bm3_2.JPG" alt="First slide" style="object-fit: cover;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../vendors/images/img4.jpg" alt="Second slide" style="object-fit: cover;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../vendors/images/img5.jpg" alt="Third slide" style="object-fit: cover;">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- <div class="d-flex justify-content-center">
      <div class="col-md-4 mb-30">
        <div class="card-box pricing-card-style2">
          <div class="pricing-card-header">
            <div class="pricing-icon">
              <img src="../vendors/images/icon-online-wallet.png" alt="" />
            </div>
            <div class="right text-center">
              <div class="pricing-price">History Pembayaran</span></div>
            </div>
          </div>
          <div class="pricing-card-body">
            <div class="pricing-points">

              <ul>
                <span style="">Nama : <?php echo $nama ?></span>
                <span style="float:right;">Kelas : <?php echo $tampil['kelas'] ?> </span><br>
                <span style="">Admin : <?php echo $tampil['username'] ?></span>
                <span style="float:right;">Tahun Ajaran : <?php echo $tampil['tahun_ajaran'] ?> </span>
                <hr>
              </ul>

              <div class="d-flex justify-content-between">
                <p> BULAN BAYAR</p>
                <p> STATUS</p>
              </div>
              <hr class="shadow">

              <tbody>


                <?php foreach ($query1 as $tampil) { ?>
                  <div class="d-flex justify-content-between">
                    <td><?= $tampil['nama_bulan'] ?><span class="badge badge-success">Selesai</span>
                  </div>
                  <br>
                  </td>

              </tbody>
            <?php } ?>
            </div>
          </div>

        </div>
        <div class=" mb-4"></div> -->

    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777" />
            <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>

          <h2>Heading</h2>
          <p>
            Some representative placeholder content for the three columns of
            text below the carousel. This is the first column.
          </p>
          <p>
            <a class="btn btn-secondary" href="#">View details &raquo;</a>
          </p>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777" />
            <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>

          <h2>Heading</h2>
          <p>
            Another exciting bit of representative placeholder content. This
            time, we've moved on to the second column.
          </p>
          <p>
            <a class="btn btn-secondary" href="#">View details &raquo;</a>
          </p>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777" />
            <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>

          <h2>Heading</h2>
          <p>
            And lastly this, the third column of representative placeholder
            content.
          </p>
          <p>
            <a class="btn btn-secondary" href="#">View details &raquo;</a>
          </p>
        </div>
        <!-- /.col-lg-4 -->
      </div>
      <!-- /.row -->

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider" />

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">
            First featurette heading.
            <span class="text-muted">It’ll blow your mind.</span>
          </h2>
          <p class="lead">
            Some great placeholder content for the first featurette here.
            Imagine some exciting prose here.
          </p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" />
            <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
          </svg>
        </div>
      </div>

      <hr class="featurette-divider" />

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">
            Oh yeah, it’s that good.
            <span class="text-muted">See for yourself.</span>
          </h2>
          <p class="lead">
            Another featurette? Of course. More placeholder content here to
            give you an idea of how this layout would work with some actual
            real-world content in place.
          </p>
        </div>
        <div class="col-md-5 order-md-1">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" />
            <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
          </svg>
        </div>
      </div>

      <hr class="featurette-divider" />

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">
            And lastly, this one. <span class="text-muted">Checkmate.</span>
          </h2>
          <p class="lead">
            And yes, this is the last block of representative placeholder
            content. Again, not really intended to be actually read, simply
            here to give you a better view of what this would look like with
            some actual content. Your content.
          </p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" />
            <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
          </svg>
        </div>
      </div>

      <hr class="featurette-divider" />

      <!-- /END THE FEATURETTES -->
    </div>
    <!-- /.container -->

    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>
        &copy; 2017–2021 Company, Inc. &middot;
        <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
      </p>
    </footer>
  </main>

  <script src="../vendors/scripts/core.js"></script>
  <script src="../vendors/scripts/script.min.js"></script>
  <script src="../vendors/scripts/process.js"></script>
  <script src="../vendors/scripts/layout-settings.js"></script>
</body>

</html>