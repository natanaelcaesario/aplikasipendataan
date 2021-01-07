<?= $this->extend('index') ?>
<?= $this->section('content') ?>
<main class="mt-5 pt-5">
    <!--Section: Cards-->
    <section class="text-center">
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="card shadow border-warning bounceIn">
                        <div class="card-body">
                            <img src="img/logo.png" alt="" height="100rem">
                            <form action="" class=" text-left">
                                <br>
                                <h5 class="card-title  text-center"><b>HALAMAN LOGIN</b></h5>
                                <br>
                                <input type="text" class="form-control" placeholder="Username">
                                <br>
                                <input type="text" class="form-control" placeholder="Password">
                                <hr>
                                <p>Sudah Punya Akun?<a href="daftar" class="text-warning"> Daftar</a></p>
                                <button class="btn btn-block btn-warning rounded">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </section>
</main>
<script>
    $("#1").removeClass('active');
    $("#2").removeClass('active');
    $("#3").addClass('active');
    $("#4").removeClass('active');
</script>
<?= $this->endSection() ?>