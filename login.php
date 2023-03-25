<?php

require "layout/config.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Siswa</title>

    <link rel="stylesheet" href="src/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="register.png">


    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

        * {
            font-family: 'Poppins',
                sans-serif;
        }
    </style>
</head>

<body class="overflow-hidden">
    <!-- Alert -->



    <div class="container">
        <center>
            <img src="register.png" class=" mb-3" style="margin-top: 150px;" alt="" width="250">
            <form action="layout/proses_login.php" method="POST">
                <small style="font-style: italic;">Masukan Nis anda dengan benar!</small>

                <div class="col-6 mb-3 mt-2">
                    <?php if (isset($_SESSION['berhasil'])) :
                    ?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><?php echo $_SESSION['berhasil']; ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <?php
                        unset($_SESSION['berhasil']);
                    endif;
                    ?>

                    <!-- wrong -->
                    <?php if (isset($_SESSION['error'])) :
                    ?>


                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong><?php echo $_SESSION['error']; ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <?php
                        unset($_SESSION['error']);
                    endif;
                    ?>
                    <label for="exampleInputEmail1" class="form-label" style="float: left;">Nis</label>
                    <input type="text" name="nis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan nis anda" required>



                    <button type="submit" name="submit" class="btn btn-primary w-100 mt-3" style="float: right;">Login <span class="icon-copy ti-angle-double-right"></span></button>

                </div>


            </form>
        </center>
    </div>



    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>

    <!-- add sweet alert js & css in footer -->
    <script src="src/plugins/sweetalert2/sweetalert2.all.js"></script>
    <link rel="stylesheet" type="text/css" href="src/plugins/sweetalert2/sweetalert2.css" />
    <script src="src/plugins/sweetalert2/sweet-alert.init.js"></script>
</body>

</html>