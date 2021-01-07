<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<!--/.Slides-->
<div style="margin-top:20px"></div>
<main class="mt-5 pt-5 mb-5">
    <!--Section: Cards-->
    <section class="text-center">
        <div class="container bounceIn">
            <div class="card mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/kampus.jpg" alt="..." class="img-fluid" style="padding:30px" />
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title text-left">Universitas Kristen Dwipayana</h5>
                            <hr>
                            <p class="card-text text-left">
                                This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates explicabo quod quidem architecto tempore beatae deleniti accusantium adipisci, in, mollitia maxime! Sed praesentium porro, culpa ipsam earum ab quae neque?
                            </p>
                            <p class="card-text text-left">
                                This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates explicabo quod quidem architecto tempore beatae deleniti accusantium adipisci, in, mollitia maxime! Sed praesentium porro, culpa ipsam earum ab quae neque?
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    $("#1").removeClass('active');
    $("#2").addClass('active');
    $("#3").removeClass('active');
    $("#4").removeClass('active');
</script>

<?= $this->endSection() ?>