<?php
$active = 'pembayaran';
include 'layout/header.php';




$no = 1;
$query = mysqli_query($conn, "SELECT * FROM siswa JOIN kelas ON (kelas.id_kelas=siswa.id_jurusan) JOIN spp ON (spp.spp_id=siswa.id_thn_ajaran) ORDER BY id_siswa ASC");
$view = mysqli_query($conn, "SELECT * FROM pembayaran JOIN spp ON (spp.spp_id=pembayaran.id_spp) JOIN admin ON (admin.id_admin = pembayaran.id_admin) JOIN siswa ON(siswa.id_siswa = pembayaran.id_siswaFK) JOIN kelas ON(kelas.id_kelas = siswa.id_jurusan) JOIN bulan ON (bulan.id_bulan = pembayaran.id_bulan) ORDER BY id_pembayaran ASC");
$nomor = 1;
$random = rand(100000000, 200000000);


// menambah siswa


?>

<!-- Export Datatable start -->

<div class="pd-ltr-20 xs-pd-20-10">
    <div class="pd-ltr-20 xs-pd-20-10">
        <?php if (isset($_SESSION['simpan'])) :
        ?>

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['simpan']; ?> <i class="icon-copy fi-check"></i></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <?php
            unset($_SESSION['simpan']);
        endif;
        ?>
        <div class="min-height-200px">
            <div class="page-header" data-aos="fade-left" data-aos-duration="1000">
                <div class="row">
                    <div class="col-md-6 col-sm-12">

                        <div class="title">

                            <h4>Pembayaran</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Pembayaran
                                </li>
                            </ol>
                        </nav>
                    </div>

                    <div class="col-md-6 col-sm-12 text-right">

                        <a href="#" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button">
                            <button alt="modal" class="btn btn-primary"><i class="icon-copy fa fa-plus"></i> Tambah Pembayaran</button>
                        </a>
                    </div>
                </div>

            </div>
            <!-- Simple Datatable start -->
            <div class="card-box mb-30" data-aos="fade-left" data-aos-duration="1000">
                <div class="pd-20">
                    <h4 class="text-blue h4">Data Siswa</h4>

                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th class="table-plus datatable-nosort" width="5%">No</th>
                                <th>Nis</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Bulan</th>
                                <th>Tahun Ajaran</th>

                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php foreach ($view as $result1) { ?>


                                <tr class="text-center">
                                    <td class="table-plus"><?= $no++; ?></td>
                                    <td><?= $result1['nisn'] ?></td>
                                    <td><?= $result1['nama'] ?></td>
                                    <td><?= $result1['kelas'], " " . $result1['jurusan']  ?></td>

                                    <td><?= $result1['nama_bulan'] ?></td>
                                    <td><?= $result1['tahun_ajaran'] ?></td>

                                    <td>
                                        <a href="view.php?history=<?= $result1['id_siswaFK'] ?>" class="btn-sm btn-warning"><i class="icon-copy bi bi-eye-fill"></i></a>


                                    </td>

                                <?php
                            }
                                ?>
                                </td>
                                </tr>



                </div>
            </div>

            </tbody>
            </table>

        </div>
    </div>
    <!-- Simple Datatable End -->

    <!-- Medium modal -->


    <div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Pembayaran
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Simple Datatable start -->


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


                            <?php foreach ($query as $result) { ?>


                                <tr class="text-center">
                                    <td class="table-plus"><?= $nomor++; ?></td>
                                    <td><?= $result['nisn'] ?></td>
                                    <td><?= $result['nama'] ?></td>
                                    <td><?= $result['kelas'] ?></td>
                                    <td><?= $result['jurusan'] ?></td>
                                    <td><?= $result['alamat'] ?></td>
                                    <td><?= $result['no_tlp'] ?></td>
                                    <td><?= $result['tahun_ajaran'] ?></td>
                                    <td>
                                        <a href="pembayaran.php?id=<?= $result['id_siswa']; ?>" class="btn-sm btn-primary"><i class="icon-copy fa fa-money" aria-hidden="true"></i></a>
                                    </td>

                                <?php
                            }
                                ?>
                                </td>
                                </tr>

                        </tbody>
                    </table>


                    <!-- Simple Datatable End -->


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