<body>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="row mx-1">
            <div class="container-xxl flex-grow-1 container-p-y">
                <a href="<?= base_url('obat'); ?>" type="button" class=" mb-3 btn btn-primary"><i class='bx bx-chevron-left-square bx-fade-left'></i></i> Kembali</a>
                <!-- Basic Layout -->
                <div class="col-xxl">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Tambah Obat</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?= base_url('obat/insert'); ?>">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Nama Obat</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama_obat" class="form-control" id="basic-default-name" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Sediaan</label>
                                    <div class="col-sm-10">
                                        <select name="sediaan" class="form-select" id="" required>
                                            <option selected hidden>Pilih</option>
                                            <option value="Tablet">Tablet</option>
                                            <option value="Pil">Pil</option>
                                            <option value="Kapsul">Kapsul</option>
                                            <option value="Salep">Salep</option>
                                            <option value="Sirup">Sirup</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Dosis</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="dosis" class="form-control" id="" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-message">Keterangan</label>
                                    <div class="col-sm-10">
                                        <textarea name="keterangan" id="" class="form-control" aria-describedby="basic-icon-default-message2" required></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Stok</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="stok" class="form-control" id="" required />
                                    </div>
                                </div>
                                <input type="hidden" name="tglmasuk_obat" value="<?php echo date("Y-m-d"); ?>">
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