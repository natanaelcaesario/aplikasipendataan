<?= $this->extend('index') ?>
<?= $this->section('content') ?>
<?php $session = session();
$errors = $session->getFlashdata('errors');
$success = $session->getFlashData('success');
?>
<main class="mt-5 pt-5 ">
    <!--Section: Cards-->
    <section class="text-center">
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="card shadow border-warning bounceIn">
                        <div class="card-body">
                            <img src="img/logo.png" alt="" height="100rem">
                            <form action="<?= current_url() ?>" method="POST" class="text-left">
                                <br>
                                <h5 class="card-title  text-center"><b>HALAMAN LOGIN</b></h5>
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
                                <br>
                                <input type="email" class="form-control" name="username" placeholder="Username">
                                <br>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                <hr>
                                <button type="submit" class="btn btn-block btn-warning rounded">Login</button>
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
    $("#5").removeClass('active');
</script>
<?= $this->endSection() ?>