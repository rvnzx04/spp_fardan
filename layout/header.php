<?php include 'config.php';
// if (!isset($_SESSION['id_admin'])) {
// 	header('location:login_admin.php');
// }


?>

<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8" />
	<title>SPP - Website pembayaran SPP</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png" />

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css" />
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />


	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

		* {
			font-family: 'Poppins',
				sans-serif;
		}
	</style>

</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top" style="position: sticky;">
		<div class="container-sm">
			<img src="register.png" alt="" srcset="" width="6%">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php">DASHBOARD</a>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
							DATA MASTER
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<li><a class="dropdown-item" href="tambah_siswa.php">Siswa</a></li>
							<li><a class="dropdown-item" href="tambah_kelas.php">Kelas</a></li>
							<li><a class="dropdown-item" href="tambah_thn_ajaran.php">Tahun Ajaran</a></li>
							<li><a class="dropdown-item" href="tambah_admin.php">Admin</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tabel_siswa.php">PEMBAYARAN</a>
					</li>
					<li class="nav-item mr-3">
						<a class="nav-link" href="laporan.php">LAPORAN</a>
					</li>
					<li class="nav-item">
						<a class="btn btn-outline-danger" href="layout/proses_logout.php">LOGOUT <i class="icon-copy ion-arrow-right-c"></i></a>
					</li>

				</ul>
			</div>
		</div>
	</nav>


	<div class="mobile-menu-overlay"></div>