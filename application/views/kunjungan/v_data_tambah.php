<body>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="row mx-1">
            <div class="container-xxl flex-grow-1 container-p-y">
                <a href="<?= base_url('kunjungan'); ?>" type="button" class=" mb-3 btn btn-primary"><i class='bx bx-chevron-left-square bx-fade-left'></i></i> Kembali</a>
                <!-- Basic Layout -->
                <div class="col-xxl">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Kunjungan Baru</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?= base_url('kunjungan/insert'); ?>">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Tangal Kunjungan</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tgl" class="form-control" id="basic-default-name" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Nama Pasien</label>
                                    <div class="col-sm-10">
                                        <select name="pasien" id="" class="js-example-basic-single form-control" required>
                                            <option value="" hidden>Pilih</option>
                                            <?php foreach ($pasien as $r) { ?>
                                                <option value="<?= $r['id_pasien'] ?>"><?= $r['nama_pasien']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>