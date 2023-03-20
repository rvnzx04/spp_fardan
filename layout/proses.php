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
