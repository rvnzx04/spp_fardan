<?php include 'layout/header.php';


$no = 1;


if (isset($_GET['history'])) {
    $id = $_GET['history'];

    $query =  mysqli_query($conn, "SELECT * FROM pembayaran JOIN spp ON (spp.spp_id=pembayaran.id_spp) JOIN admin ON (admin.id_admin = pembayaran.id_admin) JOIN siswa ON(siswa.id_siswa = pembayaran.id_siswaFK) JOIN kelas ON(kelas.id_kelas = siswa.id_jurusan) JOIN bulan ON (bulan.id_bulan = pembayaran.id_bulan)  WHERE id_siswa  ='$id';");
    $ubah = mysqli_fetch_assoc($query);

    $id_siswa = $ubah['id_siswa'];
    $id_spp = $ubah['spp_id'];
    $thn_ajaran = $ubah['tahun_ajaran'];
    $nisn = $ubah['nisn'];
    $nama = $ubah['nama'];
    $kelas = $ubah['kelas'];
    $alamat = $ubah['alamat'];
    $no_tlp = $ubah['no_tlp'];
    $kelas = $ubah['kelas'];
    $tahun_ajaran = $ubah['tahun_ajaran'];
    $jurusan = $ubah['jurusan'];
    $id_jurusan = $ubah['id_kelas'];
    $nm_admin = $ubah['username'];
    $nm_bulan = $ubah['nama_bulan'];
}
?>

<!-- Export Datatable start -->
<div class="container-fluid">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
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
                            <a href="tabel_siswa.php" class="btn btn-secondary">
                                <span class="icon-copy ti-angle-double-left"></span> Kembali</button>
                            </a>
                    </div>
                </div>
            </div>


            <!-- form -->
            <div class="d-flex justify-content-center">
                <div class="col-md-4 mb-30">
                    <div class="card-box pricing-card-style2">
                        <div class="pricing-card-header">
                            <div class="pricing-icon">
                                <img src="vendors/images/icon-online-wallet.png" alt="" />
                            </div>
                            <div class="right text-center">
                                <div class="pricing-price">History Pembayaran</span></div>
                            </div>
                        </div>
                        <div class="pricing-card-body">
                            <div class="pricing-points">
                                <ul>
                                    <span style="">Nama : <?php echo $nama ?></span>
                                    <span style="float:right;">Kelas : <?php echo $kelas ?></span><br>
                                    <span style="">Admin : <?php echo $nm_admin ?></span>
                                    <span style="float:right;">Tahun Ajaran : <?php echo $tahun_ajaran ?> </span>
                                    <hr>
                                </ul>

                                <div class="d-flex justify-content-between">
                                    <p> BULAN BAYAR</p>
                                    <p> STATUS</p>
                                </div>
                                <hr class="shadow">

                                <tbody>
                                    <?php

                                    $query1 =  mysqli_query($conn, "SELECT * FROM pembayaran JOIN spp ON (spp.spp_id=pembayaran.id_spp) JOIN admin ON (admin.id_admin = pembayaran.id_admin) JOIN siswa ON(siswa.id_siswa = pembayaran.id_siswaFK) JOIN kelas ON(kelas.id_kelas = siswa.id_jurusan) JOIN bulan ON (bulan.id_bulan = pembayaran.id_bulan)  WHERE id_siswa  ='$id';");
                                    $no = 1;

                                    ?>
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
                    <div class=" mb-4"></div>


                    <!-- Datatable Setting js -->

                    <?php require 'layout/footer.php'; ?>