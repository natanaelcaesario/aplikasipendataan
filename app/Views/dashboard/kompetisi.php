<?= $this->extend('dashboard/dashboard') ?>

<?= $this->section('content') ?>
<?php $session = session();
$errors = $session->getFlashdata('errors');
$success = $session->getFlashData('success');
?>
<!-- Heading -->
<div class="card mb-4 wow fadeIn">
    <!--Card content-->
    <div class="card-body d-sm-flex justify-content-between">

        <h4 class="mb-2 mb-sm-0 pt-1">

            <a href="dashboard">Dashboard</a>
            <span>/</span>
            <span>Halaman List Kompetisi</span>
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

                <h4 class="text-primary">List Kompetisi</h4>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kompetisi</th>
                                <th>Tingkat Kompetisi</th>
                                <th>Tanggal</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomer = 1;
                            foreach ($kompetisi as $a) :  ?>
                                <tr>
                                    <td>
                                        <?= $nomer++ ?>
                                    </td>
                                    <td>
                                        <?= $a->nama_kompetisi ?>
                                    </td>

                                    <td>
                                        <?= $a->tingkat_kompetisi ?>
                                    </td>
                                    <td>
                                        <?= $a->tanggal_kompetisi ?>
                                    </td>
                                    <td>
                                        <form action="editkompetisi" method="POST">
                                            <a href="hapuskompetisi/<?= $a->id_kompetisi ?>" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                            <input type="text" name="id_kompetisi" value="<?= $a->id_kompetisi ?>" hidden>
                                            <button type="submit" class="btn btn-primary btn-sm" id="button">
                                                <i class=" fa fa-edit" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
        <!--Grid row-->
    </div>
</div>
<div class="row wow fadeIn">

    <!--Grid column-->
    <div class="col-md-5 mb-4">

        <!--Card-->
        <div class="card border-unique shadow">
            <div class="card-header">Intro</div>
            <div class="card-body text-center">
                <img src="img/coba.svg" alt="" style="width: 180px;">
                <br>
                <p class="text-left">
                    <strong>Hallo <span class="text-warning"><?= $user['nama'] ?></span> </strong>! Selamat Datang Diaplikasi pengarsipan Aplikasi Untuk Kegiatan Pendataan Kompetisi Prodi Sistem Informasi<span class="text-primary"> Universitas Kristen Krida Wacana
                    </span>
                </p>
            </div>
        </div>
    </div>
    <!--/.Card-->
    <!--Grid column-->

    <div class="col-md-7 mb-4">
        <!--Card-->
        <div class="card border-unique shadow">
            <div class="card-header">Tambah Kompetisi</div>
            <form action="tambahkompetisi" method="POST" enctype="multipart/form-data">
                <div class="card-body text-left">
                    <input type="text" class="form-control" placeholder="Nama Kompetisi" name="nama_kompetisi">
                    <br>
                    <input type="text" class="form-control" placeholder="Tingkat Kompetisi" name="tingkat_kompetisi">
                    <br>
                    <input type="date" class="form-control" placeholder="Tanggal Kompetisi" name="tanggal_kompetisi">
                    <br>
                    <input type="text" class="form-control" placeholder="Keterangan" name="keterangan">
                    <br>
                    <label for="">Gambar</label>
                    <br>
                    <input type="file" name="gambar">
                    <hr>
                    <button class="btn btn-block btn-primary" type="SUBMIT">Upload Foto</button>
                </div>
            </form>
        </div>
        <br>

    </div>
    <!--/.Card-->



</div>
<!--Grid column-->


</div>
<!--Grid row-->

<script>
    $("#1").removeClass('active');
    $("#2").addClass('active');
    $("#3").removeClass('active');
    $("#4").removeClass('active');
</script>

<?= $this->endSection() ?>