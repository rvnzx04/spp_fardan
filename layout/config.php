<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'db_spp');

function get_total_attend($id_siswa1)
{
    global $conn;
    $Attend = $conn->query("SELECT * FROM pembayaran WHERE id_siswa = '$id_siswa1'");
    return mysqli_fetch_assoc($Attend);
    $id_siswa1 = $Attend['id_siswa'];
}
