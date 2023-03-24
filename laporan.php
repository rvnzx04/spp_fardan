<?php include 'layout/header.php';




$no = 1;
$query = mysqli_query($conn, "SELECT * FROM siswa JOIN kelas ON (kelas.id_kelas=siswa.id_jurusan) JOIN spp ON (spp.spp_id=siswa.id_thn_ajaran) ORDER BY id_siswa ASC");

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


        <form method="POST">
            <div class="card py-4 shadow-sm">
                <h4 class="text-center">CARI BERDASARKAN TANGGAL</h4>
                <h2 class=" pb-4 border-bottom"></h2>
                <tr>

                    <center>

                        <div class="col-md-2 waktu">
                            <div class="form-group">
                                <label>DARI TANGGAL : </label>
                                <td class="btn"><input type="date" class="form-control" name="dari_tgl" required="required"></td>
                            </div>
                        </div>
                        <div class="col-md-2 waktu ">
                            <div class="form-group ">
                                <label> SAMPAI TANGGAL : </label>
                                <td class="btn"><input type="date" class="form-control" name="sampai_tgl" required="required">
                                </td>
                            </div>
                            <input href="" type="submit" name="filter" value="Filter" class="btn btn-primary col-md-6"></input>
                        </div>
                    </center>
                </tr>
            </div>
        </form>
        <div class="card-box mb-30 mt-3">
            <div class="pd-20">
                <h4 class="text-blue h4">Data Siswa</h4>

            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap table-bordered">
                    <thead>

                        <tr class="text-center">
                            <th class="table-plus datatable-nosort" width="5%">No</th>
                            <th>Admin</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Tangggal Bayar</th>
                            <th>Bulan</th>

                            <th>Jumlah Bayar</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        if (isset($_POST['filter'])) {
                            $dari_tgl = mysqli_real_escape_string($conn, $_POST['dari_tgl']);
                            $sampai_tgl = mysqli_real_escape_string($conn, $_POST['sampai_tgl']);
                            $data_brg = mysqli_query($conn, "SELECT * FROM pembayaran JOIN spp ON (spp.spp_id=pembayaran.id_spp) JOIN admin ON (admin.id_admin = pembayaran.id_admin) JOIN siswa ON(siswa.id_siswa = pembayaran.id_siswaFK) JOIN kelas ON(kelas.id_kelas = siswa.id_jurusan) JOIN bulan ON (bulan.id_bulan = pembayaran.id_bulan) WHERE tgl_bayar BETWEEN '$dari_tgl' AND '$sampai_tgl'");
                        } else {

                            $data_brg = mysqli_query($conn, "SELECT * FROM pembayaran JOIN spp ON (spp.spp_id=pembayaran.id_spp) JOIN admin ON (admin.id_admin = pembayaran.id_admin) JOIN siswa ON(siswa.id_siswa = pembayaran.id_siswaFK) JOIN kelas ON(kelas.id_kelas = siswa.id_jurusan) JOIN bulan ON (bulan.id_bulan = pembayaran.id_bulan) ORDER BY id_pembayaran ASC");
                        }
                        while ($result1 = mysqli_fetch_array($data_brg)) {
                            $total += $result1['jumlah_bayar'];

                        ?>
                            <tr class="text-center">
                                <td class="table-plus"><?= $no++; ?></td>
                                <td><?= $result1['username'] ?></td>
                                <td><?= $result1['nama'] ?></td>
                                <td><?= $result1['kelas'], " " . $result1['jurusan']  ?></td>
                                <td><?= $result1['tgl_bayar'] ?></td>
                                <td><?= $result1['nama_bulan'] ?></td>

                                <td>Rp.<?= number_format($result1['jumlah_bayar'], 0, ',', '.') ?></td>
                            <?php
                        } ?>
                    <tfoot>
                        <tr>
                            <th colspan="5">
                            <th style="font-size:large;">Total Pendapatan:</th>
                            <th>Rp. <span name="total_belanja" id="total_belanja"><?php echo number_format($total, 0, ',', '.'); ?></span></th>
                        </tr>
                        </tbody>
                    </tfoot>
                    </td>
                    </tr>
            </div>
        </div>
        </tbody>
        </table>
    </div>
</div>
</div>


<!-- Datatable Setting js -->

<?php


require 'layout/footer.php'; ?>