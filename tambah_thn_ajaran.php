<?php include 'layout/header.php';


$no = 1;
$query = mysqli_query($conn, "SELECT * FROM spp ORDER BY spp_id ASC");

$random = rand(100000000, 200000000);

?>

<!-- Export Datatable start -->
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>DataTable</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    DataTable
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">

                        <a href="#" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button">
                            <button alt="modal" class="btn btn-primary"><i class="icon-copy fa fa-plus"></i> Tambah Tahun Ajaran</button>
                        </a>
                    </div>
                </div>

            </div>
            <!-- Simple Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Data Table Simple</h4>

                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap table-bordered">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort" width="5%">No</th>
                                <th>Tahun Ajaran</th>
                                <th>Biaya SPP</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $result) { ?>

                                <tr class="text-center">
                                    <td class="table-plus"><?= $no++; ?></td>
                                    <td><?= $result['tahun_ajaran']; ?></td>
                                    <td><?= $result['nominal']; ?></td>
                                    <td>




                                        <button alt="modal" data-toggle="modal" data-target="#edit-modal<?= $no ?>" type="button" class="btn btn-success"><i class="dw dw-edit2"></i> Edit</button>


                                        <button alt="modal" class="btn btn-danger"><i class="dw dw-edit2"></i> Delete</button>

                                    </td>
                                </tr>

                                <!-- Medium modal -->


                                <div class="modal fade" id="edit-modal<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">
                                                    Tahun Ajaran
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                    ×
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="layout/proses.php">
                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Tahun Ajaran:</label>
                                                        <input name="thn_ajaran" type="text" class="form-control" id="recipient-name" value="<?= $result['tahun_ajaran']; ?>" readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Biaya SPP:</label>
                                                        <input name="spp" type="text" class="form-control" id="recipient-name" value="<?= $result['nominal']; ?>" readonly>
                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" name="submit2" class="btn btn-success">
                                                    Tambah
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
            </div>


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
                        Tahun Ajaran
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="layout/proses.php">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Tahun Ajaran:</label>
                            <input name="thn_ajaran" type="text" class="form-control" id="recipient-name" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Biaya SPP:</label>
                            <input name="spp" type="text" class="form-control" id="recipient-name" required>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" name="submit2" class="btn btn-success">
                        Tambah
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Datatable Setting js -->

<?php require 'layout/footer.php'; ?>