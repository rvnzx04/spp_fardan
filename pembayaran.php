<?php
include "layout/header.php";
$today = date("M");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM siswa JOIN kelas ON (kelas.id_kelas = siswa.id_jurusan)  WHERE id_siswa  ='$id';";
    $sql = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($sql);
    $id_siswa = $result['id_siswa'];
    $nama_siswa = $result['nama'];
    $nis = $result['nisn'];
    $kelas = $result['kelas'];
    $jurusan = $result['jurusan'];
}
?>
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
            <div class="container">
                <div class="card">
                    <h5 class="card-header"><i class="icon-copy ion-ios-folder"></i> Pembayaran Spp </h5>
                    <div class="card-body shadow-sm">
                        <form action="layout/proses.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Nis</label>
                                        <input type="text" id="nama" name="" class="form-control" placeholder="Nama" value="<?= $nis ?>" readonly>
                                        <input type="hidden" name="id_admin" value="<?= $_SESSION['id_admin']; ?>">
                                        <input type="hidden" name="id_siswa" value="<?= $id_siswa ?>">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Nama</label>
                                        <input type="text" id="nama" name="" class="form-control" placeholder="Nama" value="<?= $nama_siswa, ' | ' . $kelas, ' ' . $jurusan ?>" readonly>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Tanggal Bayar</label>
                                        <input class="form-control" name="tgl_bayar" type="date" placeholder="" required />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label class="form-label">Bulan</label>
                                        <select class="custom-select" name="bln_bayar" name="spp">
                                            <option selected="">--Pilih Bulan--</option>
                                            <?php
                                            $sql = mysqli_query($conn, "SELECT * FROM bulan WHERE id_bulan NOT IN(SELECT id_bulan FROM pembayaran WHERE id_siswa = '$id_siswa')");

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

                            <div class="row">
                                <div class="col-md-12">
                                    <label class="form-label">Spp</label>
                                    <select class="custom-select" name="spp">
                                        <option selected="">--Pilih Spp--</option>

                                        <?php
                                        $sql = mysqli_query($conn, "SELECT * FROM spp ORDER BY spp_id ASC") or die(mysqli_error($conn));
                                        while ($dt = mysqli_fetch_array($sql)) {
                                        ?>
                                            <option value="<?php echo $dt['spp_id'] ?>"><?php
                                                                                        echo  $dt['tahun_ajaran'], ' | Rp.' . number_format($dt['nominal']);
                                                                                        ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <div class="form-group  ">
                                        <label class="form-label">Jumlah Bayar</label>
                                        <input class="form-control" type="text" name="jml_bayar" placeholder="Masukan Nominal Uang" />
                                        <small style="font-style: italic; color:red;">Masukan nominal uang pass!!</small>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="simpan" class="btn btn-primary float-right ">Simpan <i class="icon-copy ion-log-in"></i></button>
                            <a href="tabel_siswa.php" class="btn btn-secondary float-right mr-3"><i class="icon-copy ion-arrow-return-left"></i> Kembali</a>
                        </form>
                    </div>
                </div>

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