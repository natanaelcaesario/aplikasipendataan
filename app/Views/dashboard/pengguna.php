<?= $this->extend('dashboard/dashboard') ?>

<?= $this->section('content') ?>
<?php $session = session();
$errors = $session->getFlashdata('errors');
$success = $session->getFlashData('success');
?>
<!--Heading -->
<div class="card mb-4 wow fadeIn">
    <!--Card content-->
    <div class="card-body d-sm-flex justify-content-between">
        <h4 class="mb-2 mb-sm-0 pt-1">
            <p class="text-left"> <a href="dashboard">Dashboard</a></p>


        </h4>
    </div>
</div>
<?php if ($errors != null) : ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $errors  ?>
    </div>
<?php endif ?>
<?php if ($success != null) :  ?>
    <div class="alert alert-success" role="alert">
        <?php echo $success  ?>
    </div>
<?php endif  ?>
<div class="row wow fadeIn">
    <div class="col-md-12 mb-4">
        <!--Card-->
        <div class="card">
            <div class="card-header py-3">

                <h4 class="text-primary">Table Data Sertifikat</h4>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NPM</th>
                                <th>Universitas</th>
                                <th>Kompetisi</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomer = 1;
                            foreach ($semua as $a) :  ?>
                                <tr class="text-center">
                                    <td><?= $nomer++ ?></td>
                                    <td><?= $a->nama ?></td>
                                    <td><?= $a->npm ?></td>
                                    <td><?= $a->universitas ?></td>
                                    <td><?= $a->nama_kompetisi ?></td>
                                    <td>
                                        <form action="pengguna" method="POST">
                                            <a href="hapusdata/<?= $a->id_data ?>" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                            <input type="text" name="id_data" hidden value="<?= $a->id_data ?>">
                                            <button type="submit" class="btn btn-primary btn-sm" id="button">
                                                <i class=" fa fa-edit" aria-hidden="true"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            <?php endforeach  ?>

                        </tbody>
                    </table>

                </div>

            </div>
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#centralModalLGInfoDemo">Tambah Data Baru
                <!--Grid column-->
            </button>
        </div>
        <!--Grid row-->
    </div>
</div>









<!-- modal form -->
<!-- Central Modal Large Info-->
<div class="modal fade" id="centralModalLGInfoDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-notify modal-primary" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Tambah Data</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <form action="<?= current_url() ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">

                    <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                    <br>
                    <input type="text" class="form-control" placeholder="NPM Anda" name="npm" required>
                    <br>
                    <input type="text" class="form-control" placeholder="Universitas Anda" name="universitas" required>
                    <br>
                    <input type="text" class="form-control" placeholder="Nama Kompetisi" name="nama_kompetisi" required>
                    <br>
                    <input type="date" class="form-control" placeholder="Tanggal" name="tanggal">
                    <br>
                    <label for="">Sertifikat</label>
                    <br>
                    <input type="file" class="form-control" name="sertifikat" required>
                    <br>
                    <label for="">Bukti Daftar</label>
                    <br>
                    <input type="file" class="form-control" name="bukti_daftar" required>

                </div>

                <!--Footer-->
                <div class="modal-footer">
                    <a role="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">Cancel</a>
                    <button type="SUBMIT" class="btn btn-primary">Tambah Data
                    </button>
                </div>
            </form>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Large Info-->

<?= $this->endSection() ?>