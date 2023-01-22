<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="row">
                <div class="row mb-5">
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="card h-100">
                            <img class="card-img-top" src="<?= base_url(); ?>assets/img/pasien2.png" alt="Card image cap">
                            <div class=" card-body">
                                <h5 class="card-title">Jumlah Pasien</h5>
                                <h4><?= $pasien; ?></h4>
                                <a href="<?= base_url('pasien') ?>" class="btn btn-outline-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="card h-100">
                            <img class="card-img-top" src="<?= base_url(); ?>assets/img/obat1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Jumlah Jenis Obat</h5>
                                <h4><?= $obat; ?></h4>
                                <a href="<?= base_url('obat') ?>" class="btn btn-outline-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="card h-100">
                            <img class="card-img-top" src="<?= base_url(); ?>assets/img/kunjungan1.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Jumlah Kunjungan</h5>
                                <h4><?= $d; ?></h4>
                                <a href="<?= base_url('kunjungan') ?>" class="btn btn-outline-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Examples -->
            </div>
        </div>
    </div>
</div>
<!-- / Content -->