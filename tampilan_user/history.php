<?php include '../layout/config.php';
$id_siswa = $_SESSION['id_siswa'];
$query1 =  mysqli_query($conn, "SELECT * FROM pembayaran JOIN spp ON (spp.spp_id=pembayaran.id_spp) JOIN admin ON (admin.id_admin = pembayaran.id_admin) JOIN siswa ON(siswa.id_siswa = pembayaran.id_siswaFK) JOIN kelas ON(kelas.id_kelas = siswa.id_jurusan) JOIN bulan ON (bulan.id_bulan = pembayaran.id_bulan)  WHERE id_siswa  ='$id_siswa';");
$tampil = mysqli_fetch_assoc($query1);
$nama = $tampil['nama'];

$no = 1; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SMK BM3</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="../bm3.ico">
    <link href="aos.css" rel="stylesheet" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="../vendors/styles/style.css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3" data-aos="fade-down" data-aos-duration="1000">
        <div class="container">
            <img src="../bm3.png" class="img-rounded" alt="" srcset="" width="4%"> <a class="navbar-brand ml-2" href="#">SMK Bina Mandiri Multimedia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-auto" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto" style="text-transform: uppercase;">
                    <a class="nav-link" aria-current="page" href="index.php">Dashboard</a>
                    <a class="nav-link" href="index.php#services">Prestasi</a>
                    <a class="nav-link" href="#">About Us</a>
                    <a class="nav-link" href="#">Ekstrakulikuler</a>
                    <a class="nav-link active" href="#">History</a>

                </div>
            </div>
        </div>
    </nav>

    <section class="page-section" id="services">
        <h1 class="text-center " data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="300" data-aos-easing="ease-in-sine">HISTORY PEMBAYARAN</h1>
        <hr>
        <div class="d-flex justify-content-center mt-4">
            <div class="col-md-4 mb-30" data-aos="fade-right" data-aos-duration="1000">
                <div class="card-box pricing-card-style2 shadow">
                    <div class="pricing-card-header">
                        <div class="pricing-icon">
                            <img src="../vendors/images/icon-online-wallet.png" alt="" />
                        </div>
                        <div class="right text-center">
                            <div class="pricing-price">History Pembayaran</span></div>
                        </div>
                    </div>


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
                                <td><?= $tampil['nama_bulan'] ?><span class="badge bg-success" disable>Selesai</span>
                            </div>
                            <br>
                            </td>

                    </tbody>
                <?php } ?>
                </div>
            </div>

        </div>
        <div class=" mb-4"></div>

    </section>

    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#273036" fill-opacity="1" d="M0,0L48,16C96,32,192,64,288,69.3C384,75,480,53,576,48C672,43,768,53,864,74.7C960,96,1056,128,1152,138.7C1248,149,1344,139,1392,133.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
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