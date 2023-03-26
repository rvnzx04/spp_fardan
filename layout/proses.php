<?php

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

// edit siswa
if (isset($_POST['simpan_siswa'])) {

    $id_siswa = $_POST['id_siswa'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas_up'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $thn_ajaran = $_POST['thn_ajaran'];

    $query2 =  mysqli_query($conn, "UPDATE siswa SET nisn='$nis', nama='$nama',  kelas='$kelas',  id_jurusan='$jurusan',  alamat='$alamat',  no_tlp='$no_tlp',  id_thn_ajaran='$thn_ajaran' WHERE id_siswa='$id_siswa';");
    if ($query2 == true) {
        $_SESSION['simpan'] = "Data Berhasil Diperbarui";
        header('location:../tambah_siswa.php');
    }
}

// hapus siswa
if (isset($_GET['hapus_siswa'])) {
    $id_siswa = $_GET['hapus_siswa'];
    $delete = mysqli_query($conn, "DELETE FROM siswa WHERE id_siswa = '$id_siswa'");
    if ($delete == true) {
        $_SESSION['hapus_siswa'] = "Data Berhasil Dihapus";
        header("Location:../tambah_siswa.php");
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

// menambah data admin

if (isset($_POST['submit_admin'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "INSERT INTO admin VALUES(NULL, '$username', '$email', '$password')");
    if ($query == true) {
        $_SESSION['simpan_admin'] = "Berhasil Menambah Data";
        header('location:../tambah_admin.php');
    }
}

// edit admin
if (isset($_POST['edit_admin'])) {

    $id_admin = $_POST['id_admin'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query2 =  mysqli_query($conn, "UPDATE admin SET username='$username', email='$email', password='$password' WHERE id_admin='$id_admin';");
    if ($query2 == true) {
        $_SESSION['edit_admin'] = "Data Berhasil Diperbarui";
        header('location:../tambah_admin.php');
    }
}

// hapus admin
if (isset($_GET['hapus_admin'])) {
    $id_admin = $_GET['hapus_admin'];
    $delete = mysqli_query($conn, "DELETE FROM admin WHERE id_admin = '$id_admin'");
    if ($delete == true) {
        $_SESSION['hapus_admin'] = "Data Berhasil Dihapus";
        header("Location:../tambah_admin.php");
    }
}

// edit_kelas

if (isset($_POST['edit_kelas'])) {

    $id_kelas = $_POST['id_kelas'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];


    $query2 =  mysqli_query($conn, "UPDATE kelas SET kelas='$kelas', jurusan='$jurusan' WHERE id_kelas='$id_kelas';");
    if ($query2 == true) {
        $_SESSION['edit_admin'] = "Data Berhasil Diperbarui";
        header('location:../tambah_kelas.php');
    }
}
// hapus kelas
if (isset($_GET['hapus_kelas'])) {
    $id_kelas = $_GET['hapus_kelas'];
    $delete = mysqli_query($conn, "DELETE FROM kelas WHERE id_kelas = '$id_kelas'");
    if ($delete == true) {
        $_SESSION['hapus_kelas'] = "Data Berhasil Dihapus";
        header("Location:../tambah_kelas.php");
    }
}

// edit thn ajaran
if (isset($_POST['edit_spp'])) {

    $spp_id = $_POST['spp_id'];
    $thn_ajaran = $_POST['thn_ajaran'];
    $spp = $_POST['spp'];


    $query2 =  mysqli_query($conn, "UPDATE spp SET tahun_ajaran='$thn_ajaran', nominal='$spp' WHERE spp_id='$spp_id';");
    if ($query2 == true) {
        $_SESSION['edit_spp'] = "Data Berhasil Diperbarui";
        header('location:../tambah_thn_ajaran.php');
    }
}

if (isset($_GET['hapus_spp'])) {
    $spp_id = $_GET['hapus_spp'];
    $delete = mysqli_query($conn, "DELETE FROM spp WHERE spp_id = '$spp_id'");
    if ($delete == true) {
        $_SESSION['hapus_spp'] = "Data Berhasil Dihapus";
        header("Location:../tambah_thn_ajaran.php");
    }
}
