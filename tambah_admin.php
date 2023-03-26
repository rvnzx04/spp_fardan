<?php
$active = 'data_master';
include 'layout/header.php';


$no = 1;
$query = mysqli_query($conn, "SELECT * FROM admin ORDER BY id_admin ASC");
?>

<!-- Export Datatable start -->

<div class="pd-ltr-20 xs-pd-20-10">
    <div class="pd-ltr-20 xs-pd-20-10">
        <?php if (isset($_SESSION['edit_admin'])) :
        ?>

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['edit_admin']; ?> <i class="icon-copy fi-check"></i></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <?php
            unset($_SESSION['edit_admin']);
        endif;
        ?>

        <?php if (isset($_SESSION['hapus_admin'])) :
        ?>

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['hapus_admin']; ?> <i class="icon-copy fi-check"></i></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <?php
            unset($_SESSION['hapus_admin']);
        endif;
        ?>

        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Data Admin</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Data Admin
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">

                        <a href="#" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button">
                            <button alt="modal" class="btn btn-primary"><i class="icon-copy fa fa-plus"></i> Tambah Admin</button>
                        </a>
                    </div>
                </div>

            </div>
            <!-- Simple Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Data Admin</h4>

                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th class="table-plus datatable-nosort" width="5%">No</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $result) { ?>

                                <tr class="text-center">
                                    <td class="table-plus"><?= $no++; ?></td>
                                    <td><?= $result['username']; ?></td>
                                    <td><?= $result['email']; ?></td>
                                    <td><?= $result['password']; ?></td>

                                    <td>
                                        <button alt="modal" data-toggle="modal" data-target="#edit-modal<?= $no ?>" type="button" class="btn btn-success"><i class="dw dw-edit2"></i> Edit</button>
                                        <a href="layout/proses.php?hapus_admin=<?= $result['id_admin']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ingin menghapus???')"><i class="icon-copy bi bi-trash-fill"></i> Delete</button>
                                    </td>
                                </tr>

                                <!-- Medium modal -->


                                <div class="modal fade" id="edit-modal<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">
                                                    Data Admin
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                    ×
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="layout/proses.php">
                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Username:</label>
                                                        <input name="username" type="text" class="form-control" id="recipient-name" value="<?= $result['username']; ?>" required>
                                                        <input type="hidden" name="id_admin" value="<?= $result['id_admin'] ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Email:</label>
                                                        <input name="email" type="email" class="form-control" id="recipient-name" value="<?= $result['email']; ?>" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Password:</label>
                                                        <input name="password" type="password" class="form-control" id="recipient-name" value="<?= $result['password']; ?>" required>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" name="edit_admin" class="btn btn-success">
                                                    Simpan
                                                </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Simple Datatable End -->


                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Simple Datatable End -->

            <!-- Medium modal -->


            <div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">
                                Tambah Admin
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                ×
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="layout/proses.php">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Username:</label>
                                    <input name="username" type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                    <input name="email" type="email" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Password:</label>
                                    <input name="password" type="password" class="form-control" id="recipient-name">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" name="submit_admin" class="btn btn-primary">
                                Tambah
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Datatable Setting js -->

    <?php require 'layout/footer.php'; ?>