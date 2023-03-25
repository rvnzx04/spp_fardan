<?php include 'layout/header.php';
$no = 1;
$query = mysqli_query($conn, "SELECT * FROM siswa JOIN kelas ON (kelas.id_kelas=siswa.id_jurusan) JOIN spp ON (spp.spp_id=siswa.id_thn_ajaran) ORDER BY id_siswa ASC");

$random = rand(100000000, 200000000);


// menambah siswa


?>

<!-- Export Datatable start -->
<div class="xs-pd-20-10 pd-ltr-20">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header" data-aos="fade-right" data-aos-duration="1000">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>DataTable</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    DataTable
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a href="form-siswa.php" alt="modal" class="btn btn-primary"><i class="icon-copy fa fa-plus"></i> Tambah Siswa</a>
                    </div>
                </div>

            </div>
            <!-- Simple Datatable start -->
            <div class="card-box mb-30" data-aos="fade-right" data-aos-duration="1000">
                <div class="pd-20">
                    <h4 class="text-blue h4">Data Siswa</h4>

                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap table-bordered">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort" width="5%">No</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Alamat</th>
                                <th>No.Telp</th>
                                <th>Tahun Ajaran</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($result = mysqli_fetch_assoc($query)) { ?>

                                <tr class="text-center">
                                    <td class="table-plus"><?= $no++; ?></td>
                                    <td><?= $result['nisn'] ?></td>
                                    <td><?= $result['nama'] ?></td>
                                    <td><?= $result['kelas'] ?></td>
                                    <td><?= $result['jurusan'] ?></td>
                                    <td><?= $result['alamat'] ?></td>
                                    <td><?= $result['no_tlp'] ?></td>
                                    <td><?= $result['tahun_ajaran'] ?></td>
                                    <td>
                                        <a href="form_edit_siswa.php?edit_siswa=<?= $result['id_siswa'] ?>" class="btn btn-success"><i class="dw dw-edit2"></i> Edit</a>
                                        <a href="layout/proses.php?hapus_siswa=<?= $result['id_siswa'] ?>" onclick="return confirm('Apakah Anda Yakin ingin menghapus???')" class="btn btn-danger"><i class="dw dw-edit2"></i> Delete</a>
                                    </td>
                                </tr>

                                <!-- Medium modal -->


                                <div class="modal fade" id="edit-modal<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">
                                                    Data Siswa
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                    ×
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="layout/proses.php">
                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Nis:</label>
                                                        <input name="nis" type="text" class="form-control" id="recipient-name" value="<?= $result['nisn']; ?>" readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Nama:</label>
                                                        <input name="nama" type="text" class="form-control" id="recipient-name" value="<?= $result['nama']; ?>" required>
                                                    </div>
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
                                                        <select class="custom-select col-12" name="jurusan">
                                                            <?php if ($jurusan) {
                                                                echo "<option value='$id_jurusan' selected> $jurusan </option> ";
                                                            } else {
                                                                echo "<option selected> --Pilih Sub Spesialis-- </option>";
                                                            } ?>
                                                            <?php
                                                            $sql = mysqli_query($conn, "SELECT * FROM kelas WHERE id_kelas = '$no' ORDER BY id_kelas ASC") or die(mysqli_error($conn));
                                                            while ($dt = mysqli_fetch_array($sql)) {
                                                            ?>
                                                                ?>
                                                                <?php if ($dt['id_kelas'] != $id_jurusan) : ?>
                                                                    <option value="<?php echo $dt['id_kelas'] ?>"><?php
                                                                                                                    echo $dt['jurusan'];
                                                                                                                    ?>
                                                                    </option><?php endif; ?>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Alamat:</label>
                                                        <input name="alamat" type="text" class="form-control" id="recipient-name" value="<?= $result['alamat']; ?>" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">No. Telp:</label>
                                                        <input name="no_tlp" type="number" class="form-control" id="recipient-name" value="<?= $result['no_tlp']; ?>" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Tahun Ajaran:</label>
                                                        <input name="thn_ajaran" type="text" class="form-control" id="recipient-name" value="<?= $result['tahun_ajaran']; ?>" required>
                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" name="" class="btn btn-success">
                                                    Tambah
                                                </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                </div>
            </div>


            </tbody>
            </table>

        </div>

        <!-- Simple Datatable End -->

        <!-- Medium modal -->


        <div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">
                            Tambah Siswa
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="layout/proses.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="recipient-name" class="col-form-label">Nisn:</label>
                                    <input name="nis" type="text" class="form-control" id="recipient-name" value="<?= number_format($random); ?>" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama:</label>
                                    <input name="nama" type="text" class="form-control" id="recipient-name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <label>Kelas</label>
                                    <select class="form-control" name="kelas" id="id_spesialis" aria-label="Default select example" required>
                                        <optgroup label="Data Kelas">
                                            <?php
                                            $sql = mysqli_query($conn, "SELECT * FROM kelas ORDER BY id_kelas ASC") or die(mysqli_error($conn));
                                            while ($dt = mysqli_fetch_array($sql)) {
                                            ?>
                                                <option value="<?php echo $dt['id_kelas'] ?>"><?php
                                                                                                echo  $dt['kelas'], $dt['jurusan'];
                                                                                                ?>
                                                </option>
                                            <?php } ?>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="recipient-name" class="col-form-label">Alamat:</label>
                                    <input name="alamat" type="text" class="form-control" id="recipient-name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="recipient-name" class="col-form-label">No.Telp:</label>
                                    <input name="no_tlp" type="text" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label>Tahun Ajaran</label>
                                    <select class="selectpicker form-control" data-style="btn-outline-info" name="thn_ajaran">
                                        <optgroup label="Data Tahun ajaran">
                                            <?php
                                            $sql = mysqli_query($conn, "SELECT * FROM spp ORDER BY tahun_ajaran ASC") or die(mysqli_error($conn));
                                            while ($dt = mysqli_fetch_array($sql)) {
                                            ?>
                                                <option value="<?php echo $dt['spp_id'] ?>"><?php
                                                                                            echo $dt['tahun_ajaran'];
                                                                                            ?>
                                                </option>
                                            <?php } ?>
                                        </optgroup>
                                    </select>

                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" name="submit3" class="btn btn-success">
                                    Tambah
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Datatable Setting js -->

    <?php

    if (isset($_POST['submit3'])) {

        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $alamat = $_POST['alamat'];
        $no_tlp = $_POST['no_tlp'];
        $thn_ajaran = $_POST['thn_ajaran'];

        $query = mysqli_query($conn, "INSERT INTO siswa VALUES(NULL, '$nis', '$nama', '$kelas', '$alamat', '$no_tlp', '$thn_ajaran')");
        if ($query == true) {

            header('location:../tambah_siswa.php');
        }
    }


    require 'layout/footer.php'; ?>