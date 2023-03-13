<body>
    <section class="content">
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <!-- Bordered Table -->
                <div class="card">
                    <div class="row">
                        <h5 class="card-header">Rekam Medis</h5>
                        <div class="mx-2">
                            <a href="<?= base_url('kunjungan'); ?>" type="button" class=" mb-3 btn btn-primary"><i class='bx bx-chevron-left-square bx-fade-left'></i></i> Kembali</a>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <h5 class="card-header">Biodata Pasien</h5>
                                <div class="card-body">
                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-cell" style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <td>:</td>
                                                    <td><?= $d['nama_pasien']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Kelamin</th>
                                                    <td>:</td>
                                                    <td><?= $d['jenis_kelamin']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Umur</th>
                                                    <td>:</td>
                                                    <td><?= hitung_umur($d['tanggal']); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Alamat</th>
                                                    <td>:</td>
                                                    <td><?= $d['alamat']; ?></td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <h5 class="card-header">Riwayat Kunjungan</h5>
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-cell" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>tgl. Kunjungan</th>
                                                <th>Anamnesa</th>
                                                <th>Diagnosa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($riwayat as $r) { ?>
                                                <tr>
                                                    <td><?= $no; ?></td>
                                                    <td><?= $r['tgl']; ?></td>
                                                    <td><?= $r['anamnesa']; ?></td>
                                                    <td><?= $r['diagnosa']; ?></td>
                                                </tr>
                                            <?php $no++;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <h5 class="card-header">Catatan (Rekam Medis)</h5>
                                <form action="<?= base_url(); ?>kunjungan/insert_rm" method="POST">
                                    <input type="hidden" name="id" value="<?= $d['id_rm']; ?>">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Keluhan</label>
                                            <input type="text" value="<?= $d['keluhan']; ?>" name="keluhan" class="form-control" id="exampleFormControlInput1" placeholder="" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Anamnesis</label>
                                            <input type="text" name="anamnesa" value="<?= $d['anamnesa']; ?>" class="form-control" id="exampleFormControlInput1" placeholder="" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Diagnosis</label>
                                            <input type="text" name="diagnosa" value="<?= $d['diagnosa']; ?>" class="form-control" id="exampleFormControlInput1" placeholder="" />
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4">
                                <h5 class="card-header">Resep Obat</h5>

                                <?php if ($this->session->flashdata('success')) : ?>
                                    <div class="alert alert-danger">
                                        <?php echo $this->session->flashdata('error'); ?>
                                    </div>
                                <?php endif; ?>


                                <form action="<?= base_url(); ?>kunjungan/insert_resep" method="POST">
                                    <input type="hidden" name="id_rm" value="<?= $d['id_rm']; ?>">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-md-8">
                                                <select name="id_obat" id="" class="js-example-basic-single form-control" required>
                                                    <option value="" hidden>Pilih Obat</option>
                                                    <?php foreach ($obat as $r) { ?>
                                                        <option value="<?= $r['id_obat'] ?>"><?= $r['nama_obat']; ?> : <?= $r['sediaan']; ?> = <?= $r['stok']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-2">
                                                <input type="number" name="jumlah" class="form-control" id="" placeholder="" required />
                                            </div>
                                            <div class="col-md-2">
                                                <button type="submit" name="in-add" class="btn btn-sm btn-icon btn-primary">
                                                    <span class="tf-icons bx bx-plus-circle"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div class="card mb-4">
                                    <table class="table table-bordered table-sm">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Obat</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <?php $no = 1;
                                            foreach ($resep as $r) { ?>
                                                <tr>
                                                    <td><?= $no; ?></td>
                                                    <td><?= $r['nama_obat']; ?> : <?= $r['sediaan']; ?></td>
                                                    <td><?= $r['jumlah']; ?></td>
                                                    <td class="text-center">
                                                        <a href="<?= base_url() . 'kunjungan/hapus_resep/' . $r['id_resep'] . '/' . $r['id_rm']; ?>" class="text-danger">x</a>
                                                    </td>
                                                </tr>
                                            <?php $no++;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Bordered Table -->
                </div>
            </div>
    </section>