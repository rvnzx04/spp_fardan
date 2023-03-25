<?php
include "layout/header.php";


$random = rand(100000000, 200000000);
?>

<!-- Default Basic Forms Start -->
<div class="container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Data Siswa</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Form Siswa</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Tambah Siswa
                                </li>
                            </ol>
                        </nav>
                    </div>

                </div>

            </div>
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Default Basic Forms</h4>
                        <p class="mb-30">All bootstrap element classies</p>
                    </div>

                </div>
                <form action="layout/proses.php" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Nisn</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="nis" value="<?= number_format($random); ?>" readonly />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Nama</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="nama" placeholder="Masukan Nama" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Select</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="custom-select col-12" name="kelas">
                                <option selected="">--Pilih Kelas--</option>
                                <option value="XII">XII</option>
                                <option value="X">XI</option>
                                <option value="X">X</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Jurusan</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="custom-select col-12" name="jurusan">
                                <option selected="">--Pilih Jurusan--</option>

                                <?php
                                $sql = mysqli_query($conn, "SELECT * FROM kelas ORDER BY id_kelas ASC") or die(mysqli_error($conn));
                                while ($dt = mysqli_fetch_array($sql)) {
                                ?>
                                    <option value="<?php echo $dt['id_kelas'] ?>"><?php
                                                                                    echo  $dt['jurusan'];
                                                                                    ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="alamat" placeholder="Masukan Alamat!" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">No.Telp</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="no_tlp" placeholder="Masukan No.Telp" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Tahun Ajaran</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="custom-select col-12" name="thn_ajaran">
                                <option selected="">--Pilih Spp--</option>

                                <?php
                                $sql = mysqli_query($conn, "SELECT * FROM spp ORDER BY spp_id ASC") or die(mysqli_error($conn));
                                while ($dt = mysqli_fetch_array($sql)) {
                                ?>
                                    <option value="<?php echo $dt['spp_id'] ?>"><?php
                                                                                echo  $dt['tahun_ajaran'];
                                                                                ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>

                    <a href="tambah_siswa.php" class="btn btn-danger">kembali</a>

            </div>
            </form>
            </code></pre>
        </div>
    </div>
</div>
<!-- Default Basic Forms End -->


<?php
include "layout/footer.php";

?>