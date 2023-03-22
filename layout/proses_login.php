<?php
session_start();

require_once "config.php";

if (isset($_POST['submit'])) {
    $nis = mysqli_escape_string($conn, $_POST['nis']);


    $cek_user = mysqli_query($conn, "SELECT * FROM siswa WHERE nisn ='$nis'");

    $user_valid = mysqli_fetch_array($cek_user);

    if ($user_valid) {
        $_SESSION['id_siswa'] = $user_valid['id_siswa'];
        $_SESSION['user'] = $user_valid['nama'];
        $_SESSION['berhasil'] = "login berhasil";
        header("Location:../index.php");
    } else {
        $_SESSION['error'] = "nis anda tidak benar silahkan periksa kembali!";
        header('location:../login.php');
    }
}

if (isset($_POST['submit2'])) {
    $email = mysqli_escape_string($conn, $_POST['email']);
    $password = mysqli_escape_string(
        $conn,
        $_POST['password']
    );

    $cek_user = mysqli_query($conn, "SELECT * FROM admin WHERE email ='$email'");

    $user_valid = mysqli_fetch_array($cek_user);

    if ($user_valid) {

        if (mysqli_num_rows($cek_user) == 1) {

            if ($password == $user_valid['password']) {

                $_SESSION['id_admin'] = $user_valid['id_admin'];
                $_SESSION['username'] = $user_valid['username'];
                $_SESSION['admin_login'] = "Anda Berhasil Login Sebagai Admin";
                header("Location:../index.php");
            } else {
                $_SESSION['admin_error'] = "Password anda Salah!";
                header('location:../login_admin.php');
            }
        }
    } else {
        $_SESSION['admin_error'] = "Username dan password anda salah!";
        header('location:../login_admin.php');
    }
}
