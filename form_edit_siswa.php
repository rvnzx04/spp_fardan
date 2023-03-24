<?php
include "layout/header.php";

if (isset($_GET['edit_siswa'])) {
    $id = $_GET['edit_siswa'];
    $query = mysqli_query($conn, "SELECT * FROM siswa JOIN kelas ON (kelas.id_kelas=siswa.id_jurusan) JOIN spp ON (spp.spp_id=siswa.id_thn_ajaran) WHERE id_siswa ='$id'");
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
}

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
                    <div class="col-md-6 col-sm-12 text-right">
                        <a href="tambah_siswa.php" class="btn btn-secondary  ">Kembali Ke Beranda</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="pd-10 card-box mb-30">
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="text-blue h4">Form Edit Siswa</h4>
                    <p class="mb-30">Data Siswa</p>
                </div>

            </div>
            <form action="layout/proses.php" method="POST">
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Nisn</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="nis" value="<?= $nisn ?>" readonly />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Nama</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="nama" placeholder="Masukan Nama" value="<?= $nama ?>" />
                        <input type="hidden" name="id_siswa" value="<?= $id_siswa ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Kelas</label>
                    <div class="col-sm-12 col-md-10">
                        <select class="custom-select col-12" name="kelas_up">
                            <option <?php if ($kelas == 'XII') {
                                        echo "selected";
                                    } ?> value="XII">XII</option>
                            <option <?php if ($kelas == 'XI') {
                                        echo "selected";
                                    } ?> value="XI">XI</option>
                            <option <?php if ($kelas == 'X') {
                                        echo "selected";
                                    } ?> value="X">X</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Jurusan</label>
                    <div class="col-sm-12 col-md-10">
                        <select class="custom-select col-12" name="jurusan">
                            <?php if (!$jurusan) {
                                echo "<option selected> --Pilih Jurusan-- </option>";
                            } else {
                                echo "<option value='$id_jurusan' selected> $jurusan </option> ";
                            } ?>
                            <!-- mengambil data di database -->
                            <?php
                            $sql = mysqli_query($conn, "SELECT * FROM kelas ORDER BY id_kelas ASC") or die(mysqli_error($conn));
                            while ($dt = mysqli_fetch_array($sql)) {
                            ?>
                                <?php if ($dt['id_kelas'] != $id_jurusan) : ?>
                                    <option value="<?php echo $dt['id_kelas'] ?>"><?php
                                                                                    echo $dt['jurusan'];
                                                                                    ?>
                                    </option>
                                <?php endif; ?>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="alamat" placeholder="Masukan Alamat!" value="<?= $alamat ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">No.Telp</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="no_tlp" placeholder="Masukan No.Telp" value="<?= $no_tlp ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Tahun Ajaran</label>
                    <div class="col-sm-12 col-md-10">
                        <select class="custom-select col-12" name="thn_ajaran">
                            <?php if (!$thn_ajaran) {
                                echo "<option selected> --Pilih SPP-- </option>";
                            } else {
                                echo "<option value='$id_spp' selected> $thn_ajaran </option> ";
                            } ?>
                            <!-- mengambil data di database -->
                            <?php
                            $sql = mysqli_query($conn, "SELECT * FROM spp ORDER BY spp_id ASC") or die(mysqli_error($conn));
                            while ($dt = mysqli_fetch_array($sql)) {
                            ?>
                                <?php if ($dt['spp_id'] != $id_spp) : ?>
                                    <option value="<?php echo $dt['spp_id'] ?>"><?php
                                                                                echo $dt['tahun_ajaran'];
                                                                                ?>
                                    </option>
                                <?php endif; ?>
                            <?php } ?>
                        </select>
                        <button type="submit" name="simpan_siswa" class="btn btn-success float-right mt-4 ">Simpan Perubahan <i class="icon-copy ion-checkmark-round"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- Default Basic Forms End -->


<?php
// edit siswa


include "layout/footer.php";

?>