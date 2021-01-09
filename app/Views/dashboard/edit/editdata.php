<?= $this->extend('dashboard/dashboard') ?>

<?= $this->section('content') ?>


<!-- Heading -->
<div class="card mb-4 wow fadeIn">
    <!--Card content-->
    <div class="card-body d-sm-flex justify-content-between">

        <h4 class="mb-2 mb-sm-0 pt-1">

            <a href="dashboard">Dashboard</a>
            <span>/</span>
            <span>Halaman Peserta</span>
        </h4>
    </div>
</div>

<div class="row wow fadeIn">

    <!--Grid column-->
    <div class="col-md-5 mb-4">

        <!--Card-->
        <div class="card border-unique shadow">
            <div class="card-header">Informasi Peserta</div>
            <div class="card-body text-left">
                <?php foreach ($find as $data) :  ?>
                    <p>Nama Peserta : <?= $data->nama ?></p>
                    <p>NPM : <?= $data->npm ?></p>
                    <p>Universitas : <?= $data->universitas ?></p>
                    <p>Kompetisi : <?= $data->nama_kompetisi ?></p>
                    <p>Tanggal Daftar : <?= $data->tanggal ?> </p>
                    <p>Sertifikat :
                        <a target="_blank" href="uploads/sertifikat/<?= $data->sertifikat ?>">
                            <?php if ($data->sertifikat == null) {
                                echo "Tidak ada Sertifikat";
                            } else {
                                echo "Download";
                            } ?>
                        </a>
                        <a data-toggle="modal" data-target="#centralModalLGInfoDemo" class="text-dark" class="text-dark"><i class="fa fa-edit" aria-hidden="true"></i></a>
                        <a data-toggle="modal" data-target="#centralModalLGInfoDemo3" class="text-dark"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                    </p>
                    <p>Bukti Daftar :
                        <a target="_blank" href="uploads/buktidaftar/<?= $data->bukti_daftar ?>">
                            <?php if ($data->bukti_daftar == null) {
                                echo "Tidak ada bukti daftar";
                            } else {
                                echo "Download";
                            } ?>
                        </a>
                        <a data-toggle="modal" data-target="#centralModalLGInfoDemo2" class="text-dark"><i class="fa fa-edit" aria-hidden="true"></i></a>
                        <a data-toggle="modal" data-target="#centralModalLGInfoDemo4" class="text-dark"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                    </p>


            </div>
        </div>
    </div>
    <!--/.Card-->
    <!--Grid column-->

    <div class="col-md-7 mb-4">
        <!--Card-->
        <div class="card border-unique shadow">
            <div class="card-header">Edit Data Peserta</div>
            <form action="editdata" method="POST">
                <div class="card-body text-left">
                    <input type="text" value="<?= $data->id_data ?>" name="id" hidden>
                    <input type="text" class="form-control" name="nama" value="<?= $data->nama ?>">
                    <br>
                    <input type="text" class="form-control" name="npm" value="<?= $data->npm ?>">
                    <br>
                    <input type="text" class="form-control" name="universitas" value="<?= $data->universitas ?>">
                    <br>
                    <input type="text" class="form-control" name="nama_kompetisi" value="<?= $data->nama_kompetisi ?>">
                    <br>
                    <label for="">Tanggal Daftar/ Tanggal Kompetisi</label>
                    <input type="date" class="form-control" value="<?= $data->tanggal ?>" name="tanggal">
                    <hr>
                    <button type="SUBMIT" class="btn btn-block btn-primary">Upload Foto</button>
                </div>
            </form>
        </div>
        <br>

        <!-- Central Modal sertifikat-->
    <?php endforeach  ?>
    </div>
    <!--/.Card-->



</div>
<!--Grid column-->


</div>
<!--Grid row-->

<!-- Modal Sertifikat-->
<div class="modal fade" id="centralModalLGInfoDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-notify modal-primary" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Ganti Sertifikat Pengguna?</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <form action="gantisertifikat" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <br>
                    <label for="">Sertifikat</label>
                    <br>
                    <input type="text" value="<?= $data->id_data ?>" name="id_data" hidden>
                    <input type="file" name="sertifikat" required>
                    <br>
                </div>

                <!--Footer-->
                <div class="modal-footer">
                    <a role="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">Cancel</a>
                    <button type="SUBMIT" class="btn btn-primary">Ganti Sertifikat
                    </button>
                </div>
            </form>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal sertifikat-->



<!-- Modal Bukti Daftar-->
<div class="modal fade" id="centralModalLGInfoDemo2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-notify modal-primary" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Ganti Bukti Daftar Pengguna?</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <form action="gantibuktidaftar" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <br>
                    <label for="">Bukti Daftar</label>
                    <br>
                    <input type="text" value="<?= $data->id_data ?>" name="id_data" hidden>
                    <input type="file" name="bukti_daftar" required>
                    <br>
                </div>

                <!--Footer-->
                <div class="modal-footer">
                    <a role="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">Cancel</a>
                    <button type="SUBMIT" class="btn btn-primary">Ganti Bukti Daftar
                    </button>
                </div>
            </form>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal sertifikat-->
!-- hapus -->
<div class="modal fade" id="centralModalLGInfoDemo3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Hapus?</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->

            <div class="modal-body">
                <p>Apakah Anda Yakin ingin menghapus Sertifikat Pengguna ini?</p>
            </div>

            <!--Footer-->
            <div class="modal-footer">
                <form action="hapussertifikat" method="POST">
                    <input type="text" value="<?= $data->id_data ?>" name="id_data" hidden>
                    <button type="SUBMIT" class="btn btn-danger">Konfirmasi
                    </button>
                </form>
            </div>

        </div>
        <!--/.Content-->
    </div>
</div>

<!-- hapus -->
< <!-- hapus -->
    <div class="modal fade" id="centralModalLGInfoDemo4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-notify modal-danger" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Hapus?</p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!--Body-->

                <div class="modal-body">
                    <p>Apakah Anda Yakin ingin menghapus Bukti Pengguna ini?</p>
                </div>

                <!--Footer-->
                <div class="modal-footer">
                    <form action="hapusbuktidaftar" method="POST">
                        <input type="text" value="<?= $data->id_data ?>" name="id_data" hidden>
                        <button type="SUBMIT" class="btn btn-danger">Konfirmasi
                        </button>
                    </form>
                </div>

            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Central Modal sertifikat-->

    <script>
        $("#1").addClass('active');
        $("#2").removeClass('active');
        $("#3").removeClass('active');
        $("#4").removeClass('active');
    </script>

    <?= $this->endSection() ?>