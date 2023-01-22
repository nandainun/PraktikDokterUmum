<body>
    <section class="content">
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <!-- Bordered Table -->
                <div class="card">
                    <h4 class="card-header">Laporan Data Pasien</h4>
                    <div class="mb-3 card-body">
                        <form class="mb-3" method="post" action="<?= base_url('laporan/search') ?>" target="_blank">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="row mb-3">
                                            <label class="col-sm-12 col-form-label">Tanggal Awal</label>
                                            <div class="col-sm-10">
                                                <input type="date" name="keywordawal" class="form-control" placeholder="Tanggal Awal">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-12 col-form-label">Tanggal Akhir</label>
                                            <div class="col-sm-10">
                                                <input type="date" name="keywordakhir" class="form-control" placeholder="Tanggal Akhir">
                                            </div>
                                        </div>
                                        <!-- <label class="mb-3">Filter Tanggal</label>
                                        <div class="input-group">
                                            <label for="">Tanggal Awal :</label>
                                            <input type="date" name="keywordawal" class="form-control" placeholder="Tanggal Awal">
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Print">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>