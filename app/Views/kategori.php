<?= $this->extend('index') ?>

<?= $this->section('content') ?>
<main class="mt-5 pt-5 mb-5">
    <!--Section: Cards-->
    <section class="" style="margin-top:50px">
        <div class="container text-center">
            <p class="text-center">
                <img src="img/logo.png" alt="">
            </p>
            <h3 class="text-center" style="font-weight:bolder">Aplikasi Untuk Kegiatan Pendataan Kompetisi</h3>
            <hr>
            <a href="dashboard" class="btn btn-unique">Mulai Arsip</a>
            <a href="olimpiade" class="btn btn-unique">Lihat Kompetisi</a>
            <br>

        </div>
        <!--Grid row-->
    </section>
</main>

<script>
    $("#1").addClass('active');
    $("#2").removeClass('active');
    $("#3").removeClass('active');
    $("#4").removeClass('active');
    $("#5").removeClass('active');
</script>
<?= $this->endSection() ?>