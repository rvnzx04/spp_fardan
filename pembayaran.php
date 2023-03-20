<?php
include "layout/header.php";
$today = date("M")
?>
<style></style>
<!-- Export Datatable start -->
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
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
                    </div>
                </div>
            </div>
            <!-- Simple Datatable start -->

            <div class="col-md-6">
                <form action="layout/proses.php" method="POST">
                    <div class="form-group row">
                        <label class="col-sm-12 col-form-label">Nis</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" id="nis" name="nis" type="text" placeholder="Masukan NIS" onkeyup="autofill()" />
                        </div>
                    </div>
            </div>
            <div class="col-md-6">

                <div class="form-group row">
                    <label class="col-sm-12 col-form-label">Nama</label>
                    <div class="col-sm-12 col-md-10">
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" readonly>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div class="form-group row">
                    <label class="col-sm-12 col-form-label">Tanggal Bayar</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="tgl" type="date" placeholder="" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group ">
                    <label class="col-sm-12 col-form-label">Bulan</label>
                    <select class="custom-select col-10" name="" name="spp">
                        <option selected="">--Pilih Bulan--</option>

                        <?php


                        $sql = mysqli_query($conn, "SELECT * FROM bulan WHERE id_bulan NOT IN(SELECT id_bulan FROM pembayaran");

                        while ($dt = mysqli_fetch_array($sql)) {
                        ?>
                            <option value="<?php echo $dt['id_bulan'] ?>"><?php
                                                                            echo  $dt['nama_bulan'];
                                                                            ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label class="col-sm-10 col-form-label">Spp</label>
            <select class="custom-select col-10" name="" name="spp">
                <option selected="">--Pilih Spp--</option>

                <?php
                $sql = mysqli_query($conn, "SELECT * FROM spp ORDER BY spp_id ASC") or die(mysqli_error($conn));
                while ($dt = mysqli_fetch_array($sql)) {
                ?>
                    <option value="<?php echo $dt['spp_id'] ?>"><?php
                                                                echo  $dt['tahun_ajaran'], ' | ' . number_format($dt['nominal']);
                                                                ?>
                    </option>
                <?php } ?>
            </select>
        </div>


        <div class="col-md-6 mt-3">

            <div class="form-group row ">
                <label class="col-sm-12 col-form-label">Jumlah Bayar</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" name="jmlh_bayar" placeholder="Masukan Nominal Uang Pas!!" />
                    <small style="font-style: italic; color:red;">Masukan nominal uang pass!!</small>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" name="add">Simpan</button>
            <a href="pembayaran.php" class="btn btn-secondary">Kembali</a>



            <script src="jquery-1.12.4.min.js"></script>

            <script type="text/javascript">
                function autofill() {
                    var nis = $("#nis").val();
                    $.ajax({
                        url: 'ajax.php',
                        data: "nis=" + nis,
                    }).success(function(data) {
                        var json = data,
                            obj = JSON.parse(json);

                        $('#nama').val(obj.nama);

                    });
                }
            </script>


            </body>

            </html>