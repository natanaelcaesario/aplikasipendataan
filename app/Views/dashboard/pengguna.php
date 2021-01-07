<?= $this->extend('dashboard/dashboard') ?>

<?= $this->section('content') ?>
<!-- Heading -->
<div class="card mb-4 wow fadeIn">
    <!--Card content-->
    <div class="card-body d-sm-flex justify-content-between">

        <h4 class="mb-2 mb-sm-0 pt-1">

            <a href="dashboard">Dashboard</a>
            <span>/</span>
            <span>Halaman Profil</span>
        </h4>
    </div>
</div>

<div class="row wow fadeIn">
    <!--Grid column-->
    <div class="col-md-7 mb-4">
        <!--Card-->
        <div class="card border-unique shadow">
            <div class="card-header">Input Data</div>
            <form action="">
                <div class="card-body text-center">
                    <input type="text" class="form-control" placeholder="Nama">
                    <br>
                    <input type="text" class="form-control" placeholder="Universitas">
                    <br>
                    <input type="text" class="form-control" placeholder="NPM">
                    <br>
                    <label for="">Nama Olimpiade</label>
                    <select name="" id="" class="form-control">
                        <option value="">Pilih</option>
                        <option value="">Coba1</option>
                        <option value="">Coba1</option>
                        <option value="">Coba1</option>
                    </select>
                    <br>
                    <button class="btn btn-block btn-primary">Submit Data</button>
                </div>
            </form>
        </div>
        <br>

    </div>
    <!--/.Card-->
    <!--Grid column-->
    <div class="col-md-5 mb-4">

        <!--Card-->
        <div class="card border-unique shadow">
            <div class="card-header">Profil Pengguna</div>
            <div class="card-body text-center">
                <img src="img/coba.svg" alt="" style="width: 180px;">
                <br>
                <p class="text-left">
                    <strong>Hallo ! Selamat Datang Diaplikasi pengarsipan kompetisi </strong>Prodi Sistem Informasi Universitas Kristen Dwipayana
                </p>
            </div>
        </div>
    </div>
    <!--/.Card-->


</div>
<!--Grid column-->

</div>
<!--Grid row-->



<?= $this->endSection() ?>