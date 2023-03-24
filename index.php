<?php include 'layout/header.php';


$select_rows = mysqli_query($conn, "SELECT * FROM siswa ") or die('query failed');
$row_count = mysqli_num_rows($select_rows);

$select_rows2 = mysqli_query($conn, "SELECT * FROM admin ") or die('query failed');
$row_count2 = mysqli_num_rows($select_rows2);

$select_rows3 = mysqli_query($conn, "SELECT * FROM kelas ") or die('query failed');
$row_count3 = mysqli_num_rows($select_rows3);

$select_rows4 = mysqli_query($conn, "SELECT * FROM pembayaran ") or die('query failed');



?>
<style>
	body {
		background-color: #e6e6e6;
	}
</style>
<div class="xs-pd-20-10 pd-ltr-20">
	<?php if (isset($_SESSION['admin_login'])) :
	?>

		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong><?php echo $_SESSION['admin_login']; ?> <i class="icon-copy fi-check"></i></strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>

	<?php
		unset($_SESSION['admin_login']);
	endif;
	?>
</div>
<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">

		<div class="page-header">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="title">
						<h4>Dashboard</h4>
					</div>
					<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="index.html">Home</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">
								Dashboard
							</li>
						</ol>
					</nav>
				</div>


			</div>
		</div>


		<div class="title pb-20">


			<div class="row pb-10">
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"><?= $row_count ?></div>
								<div class="font-14 text-secondary weight-500">
									Jumlah Siswa
								</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#ffff">
									<i class="icon-copy fa fa-graduation-cap"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"><?= $row_count2 ?></div>
								<div class="font-14 text-secondary weight-500">
									Jumlah Admin
								</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="yellow">
									<span class="icon-copy bi bi-emoji-smile"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"><?= $row_count3 ?></div>
								<div class="font-14 text-secondary weight-500">
									Jumlah Kelas
								</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#ffff">
									<i class="icon-copy icon-copy fa fa-users" aria-hidden="true"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<?php
								$total = 0;
								while ($row_count5 = mysqli_fetch_array($select_rows4)) {
									$total += $row_count5['jumlah_bayar'];
								?>
								<?php } ?>
								<div class="weight-700 font-24 text-dark">Rp. <?php echo number_format($total, 0, ',', '.'); ?></div>
								<div class="font-14 text-secondary weight-500">Jumlah Pendapatan</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#09cc06">
									<i class="icon-copy fa fa-money" aria-hidden="true"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>
</div>


<?php include 'layout/footer.php'; ?>