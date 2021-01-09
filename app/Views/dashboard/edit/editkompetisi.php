<?= $this->extend('dashboard/dashboard') ?>

<?= $this->section('content') ?>
<!-- Heading -->
<div class="card mb-4 wow fadeIn">
    <!--Card content-->
    <div class="card-body d-sm-flex justify-content-between">

        <h4 class="mb-2 mb-sm-0 pt-1">

            <a href="dashboard">Dashboard</a>
            <span>/</span>
            <a href="kompetisi">Halaman Kompetisi</a>
            <span>/</span>
            <span>Halaman Kompetisi</span>
        </h4>
    </div>
</div>

<div class="row wow fadeIn">

    <!--Grid column-->
    <div class="col-md-5 mb-4">

        <!--Card-->
        <div class="card border-unique shadow">
            <div class="card-header">Informasi Kompetisi</div>
            <div class="card-body text-left">
                <?php foreach ($find as $a) : ?>
                    <p class="text-center">
                        <img src="uploads/kompetisi/<?= $a->gambar ?>" alt="" width="200rem">
                    </p>
                    <p>Nama Kompetisi : <?= $a->nama_kompetisi ?></p>
                    <p>Tingkat Kompetisi : <?= $a->tingkat_kompetisi ?></p>
                    <p>Tanggal : <?= $a->tanggal_kompetisi ?> </p>
                    <p>Keterangan : <?= $a->keterangan ?> </p>
                <?php endforeach  ?>
            </div>
        </div>
    </div>
    <!--/.Card-->
    <!--Grid column-->

    <div class="col-md-7 mb-4">
        <!--Card-->
        <div class="card border-unique shadow">
            <div class="card-header">Edit Kompetisi</div>
            <form action="updatekompetisi" method="POST">
                <div class="card-body text-left">
                    <input type="text" class="form-control" value="<?= $a->nama_kompetisi ?>" name="nama_kompetisi">
                    <input type="text" class="form-control" value="<?= $a->id_kompetisi ?>" name="id_kompetisi" hidden>
                    <br>
                    <input type="text" class="form-control" value="<?= $a->tingkat_kompetisi ?>" name="tingkat_kompetisi">
                    <br>
                    <input type="date" class="form-control" value="<?= $a->tanggal_kompetisi ?>" name="tanggal_kompetisi">
                    <br>
                    <input type="text" class="form-control" value="<?= $a->keterangan ?>" name="keterangan">
                    <br>
                    <button type="SUBMIT" class=" btn btn-block btn-primary">Upload Foto</button>
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