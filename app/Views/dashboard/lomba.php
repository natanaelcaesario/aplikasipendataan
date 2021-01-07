<?= $this->extend('dashboard/dashboard') ?>

<?= $this->section('content') ?>
<!-- Heading -->
<div class="card mb-4 wow fadeIn">
    <!--Card content-->
    <div class="card-body d-sm-flex justify-content-between">

        <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="dashboard">Dashboard</a>
            <span>/</span>
            <span>Halaman Lomba</span>
        </h4>
    </div>
</div>
<div class="row wow fadeIn">
    <div class="col-md-12 mb-4">
        <!--Card-->
        <div class="card">
            <!--Card content-->
            <div class="card-body">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-secondary">DataTables Example</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Deadline Pembayaran</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Plat Motor</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--/.Card-->
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
</div>



<?= $this->endSection() ?>