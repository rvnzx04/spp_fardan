<?php
session_start();
include 'config.php';


// menambah data kelas

if (isset($_POST['submit'])) {

    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $query = mysqli_query($conn, "INSERT INTO kelas VALUES(NULL, '$kelas', '$jurusan')");
    if ($query == true) {

        header('location:../tambah_kelas.php');
    }
}


// meanmbah data tahun ajaran

if (isset($_POST['submit2'])) {

    $thn_ajaran = $_POST['thn_ajaran'];
    $spp = $_POST['spp'];

    $query = mysqli_query($conn, "INSERT INTO spp VALUES(NULL, '$thn_ajaran', '$spp')");
    if ($query == true) {

        header('location:../tambah_thn_ajaran.php');
    }
}

// menambah siswa
if (isset($_POST['tambah'])) {

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $thn_ajaran = $_POST['thn_ajaran'];

    $query = mysqli_query($conn, "INSERT INTO siswa VALUES(NULL, '$nis', '$nama', '$kelas', '$jurusan', '$alamat', '$no_tlp', '$thn_ajaran')");
    if ($query == true) {

        header('location:../tambah_siswa.php');
    }
}
// menambah pembayaran
if (isset($_POST['simpan'])) {

    $id_admin = $_POST['id_admin'];
    $id_siswa = $_POST['id_siswa'];
    $tgl_bayar = $_POST['tgl_bayar'];
    $bln_bayar = $_POST['bln_bayar'];
    $spp = $_POST['spp'];
    $jml_bayar = $_POST['jml_bayar'];
    $query = mysqli_query($conn, "INSERT INTO pembayaran VALUES(NULL, '$id_admin', '$id_siswa', '$tgl_bayar', '$bln_bayar', '$spp', '$jml_bayar','bayar')");
    if ($query == true) {
        $_SESSION['simpan'] = "Berhasil Melakukan Pembayaran";
        header('location:../tabel_siswa.php');
    }
}
