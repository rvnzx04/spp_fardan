<?php


include 'layout/config.php';

//variabel nim yang dikirimkan form.php
$nis = $_GET['nis'];

//mengambil data
$query = mysqli_query($conn, "SELECT * FROM siswa WHERE nisn='$nis'");

$userid = mysqli_fetch_array($query);
$data = array(
    'nama' =>  @$userid['nama']
);

//tampil data
echo json_encode($data);
