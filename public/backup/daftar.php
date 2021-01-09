<?= $this->extend('index') ?>
<?= $this->section('content') ?>
<main class="mt-2 pt-5 mb-5">
    <!--Section: Cards-->
    <section class="text-center">
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">

                    <div class="card shadow border-warning bounceIn">
                        <div class="card-body">
                            <img src="img/logo.png" alt="" height="100rem">
                            <form action="<?= current_url() ?>" method="POST" class=" text-left">
                                <br>
                                <h5 class="card-title  text-center"><b>HALAMAN DAFTAR</b></h5>
                                <input type="text" class="form-control" name="nama" placeholder="Nama">
                                <br>
                                <input type="email" class="form-control" name="username" placeholder="Email">
                                <br>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                <br>
                                <input type="password" class="form-control" name="repeatPassowrd" placeholder="Ulangi Password">
                                <hr>
                                <p>Sudah Punya Akun?<a href="login" class="text-warning"> Login</a></p>
                                <button type="SUBMIT" class="btn btn-block btn-warning rounded">Daftar</button>
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