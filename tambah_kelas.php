<?php include 'layout/header.php';


$no = 1;
$query = mysqli_query($conn, "SELECT * FROM kelas ORDER BY id_kelas ASC");
?>

<!-- Export Datatable start -->
<div class="container-fluid">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header" data-aos="fade-right" data-aos-duration="1000">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Data Kelas</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">
									Data Kelas
								</li>
							</ol>
						</nav>
					</div>
					<div class="col-md-6 col-sm-12 text-right">

						<a href="#" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button">
							<button alt="modal" class="btn btn-primary"><i class="icon-copy fa fa-plus"></i> Tambah Kelas</button>
						</a>
					</div>
				</div>

			</div>
			<!-- Simple Datatable start -->
			<div class="card-box mb-30" data-aos="fade-right" data-aos-duration="1000">
				<div class="pd-20">
					<h4 class="text-blue h4">Data Table Simple</h4>

				</div>
				<div class="pb-20">
					<table class="data-table table stripe hover nowrap table-bordered">
						<thead>
							<tr class="text-center">
								<th class="table-plus datatable-nosort" width="5%">No</th>
								<th width="30%">Kelas</th>
								<th width="45%">Jurusan</th>
								<th class="datatable-nosort">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($query as $result) { ?>

								<tr class="text-center">
									<td class="table-plus"><?= $no++; ?></td>
									<td><?= $result['kelas']; ?></td>
									<td><?= $result['jurusan']; ?></td>

									<td>
										<button alt="modal" data-toggle="modal" data-target="#edit-modal<?= $no ?>" type="button" class="btn-sm btn-success"><i class="icon-copy bi bi-pencil-square"></i> Edit</button>
										<a href="layout/proses.php?hapus_kelas=<?= $result['id_kelas']; ?>" class="btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin ingin menghapus???')"><i class="icon-copy bi bi-trash-fill"></i>Hapus</button>
									</td>
								</tr>

								<!-- Medium modal -->


								<div class="modal fade" id="edit-modal<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myLargeModalLabel">
													Data Kelas
												</h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
													×
												</button>
											</div>
											<div class="modal-body">
												<form method="post" action="layout/proses.php">
													<div class="mb-3">
														<select class="custom-select col-12" name="kelas">
															<option <?php if ($result['kelas'] == 'XII') {
																		echo "selected";
																	} ?> value="XII">XII</option>
															<option <?php if ($result['kelas'] == 'XI') {
																		echo "selected";
																	} ?> value="XI">XI</option>
															<option <?php if ($result['kelas'] == 'X') {
																		echo "selected";
																	} ?> value="X">X</option>

														</select>
													</div>
													<div class="mb-3">
														<label for="recipient-name" class="col-form-label">Jurusan:</label>
														<input name="jurusan" type="text" class="form-control" id="recipient-name" value="<?= $result['jurusan'] ?>">
														<input type="hidden" name="id_kelas" value="<?= $result['id_kelas'] ?>">
													</div>

											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">
													Close
												</button>
												<button type="submit" name="edit_kelas" class="btn btn-primary">
													Tambah
												</button>
												</form>
											</div>
										</div>
									</div>
								</div>
				</div>
			</div>

		<?php } ?>
		</tbody>
		</table>
		</div>
	</div>
	<!-- Simple Datatable End -->

	<!-- Medium modal -->


	<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myLargeModalLabel">
						Data Kelas
					</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						×
					</button>
				</div>
				<div class="modal-body">
					<form method="post" action="layout/proses.php">
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">kelas:</label>
							<select class="custom-select col-12" name="kelas">
								<option selected="">--Pilih Kelas--</option>
								<option value="XII">XII</option>
								<option value="X">XI</option>
								<option value="X">X</option>
							</select>
						</div>
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Jurusan:</label>
							<input name="jurusan" type="text" class="form-control" id="recipient-name">
						</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">
						Close
					</button>
					<button type="submit" name="submit" class="btn btn-primary">
						Tambah
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<!-- Datatable Setting js -->

<?php require 'layout/footer.php'; ?>