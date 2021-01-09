<?= $this->extend('index') ?>

<?= $this->section('content') ?>
<main class="mt-5 pt-5 mb-5">
    <!--Section: Cards-->
    <section class="" style="margin-top:50px">
        <div class="container text-center">
            <div class="row">
                <?php foreach ($kompetisi as $a) : ?>
                    <div class="col-lg-4" style="padding:30px">
                        <!-- Card Narrower -->
                        <div class="card card-cascade narrower">
                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="uploads/kompetisi/<?= $a->gambar ?>" alt="Card image cap">

                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Label -->
                                <h5 class="font-weight-bolder text-dark pb-2 pt-1"><?= $a->nama_kompetisi ?><br><?= $a->tingkat_kompetisi ?></h5>
                                <p></p>
                                <!-- Title -->
                                <p><?= $a->keterangan ?></p>
                                <!-- Text -->
                            </div>
                        </div>
                        <!-- Card Narrower -->
                    </div>
                <?php endforeach ?>
            </div>
            <a href="" class="btn btn-block">Mulai</a>
        </div>
        <!--Grid row-->
    </section>
</main>

<script>
    $("#1").removeClass('active');
    $("#2").removeClass('active');
    $("#3").removeClass('active');
    $("#4").removeClass('active');
    $("#5").addClass('active');
</script>
<?= $this->endSection() ?>