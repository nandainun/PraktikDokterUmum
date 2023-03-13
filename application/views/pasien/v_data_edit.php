<body>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="row mx-1">
            <div class="container-xxl flex-grow-1 container-p-y">
                <a href="<?= base_url('pasien'); ?>" type="button" class=" mb-3 btn btn-primary"><i class='bx bx-chevron-left-square bx-fade-left'></i></i> Kembali</a>
                <!-- Basic Layout -->
                <div class="col-xxl">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Ubah Data Pasien</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?= base_url('pasien/update'); ?>">
                                <input type="hidden" name="id" value="<?= $r['id_pasien']; ?>">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Nama Pasien</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama_pasien" value="<?= $r['nama_pasien']; ?>" class="form-control" id="basic-default-name" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select name="jenis_kelamin" class="form-select" id="" required>
                                            <option value="<?= $r['jenis_kelamin']; ?>"><?= $r['jenis_kelamin']; ?></option>
                                            <option value="L">Laki - Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tanggal" value="<?= $r['tanggal']; ?>" class="form-control" id="" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Alergi</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="alergi" value="<?= $r['alergi']; ?>" class="form-control" id="" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-message">Alamat</label>
                                    <div class="col-sm-10">
                                        <input name="alamat" value="<?= $r['alamat']; ?>" id="" class="form-control" aria-describedby="basic-icon-default-message2" required></input>
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