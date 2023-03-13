<body>
    <section class="content">
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <?= form_open('sweet_alert/proses') ?>
                <!-- Bordered Table -->
                <div class="card">
                    <h5 class="card-header">Daftar Kunjungan</h5>
                    <div class="card-body">
                        <?php echo $this->session->flashdata('pesan'); ?>
                        <div class="table-responsive text-nowrap">
                            <a href="<?= base_url('kunjungan/tambah'); ?>" type="button" class=" mb-4 btn btn-primary" style="float:left;"><i class='menu-icon bx bx-book-add bx-flip-vertical bx-tada'></i> Tambah kunjungan</a>
                            <table class="table table-cell-border" id="datatables" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Kunjungan</th>
                                        <th>Nama Pasien</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Umur</th>
                                        <th class="text-center">Rekam Medis</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($kunjungan as $r) { ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $r['tgl']; ?></td>
                                            <td><?= $r['nama_pasien']; ?></td>
                                            <td><?= $r['jenis_kelamin']; ?></td>
                                            <td><?= hitung_umur($r['tanggal']); ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url(); ?>kunjungan/rekam/<?= $r['id_rm']; ?>" class="btn btn-success btn-sm">+</a>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="<?= base_url() . 'kunjungan/print/' . $r['id_rm']; ?>" target="_blank"><i class='bx bx-printer'></i></i> Print</a>
                                                        <a class="dropdown-item" href="<?= base_url() . 'kunjungan/edit/' . $r['id_rm']; ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                        <a class="dropdown-item" href="<?= base_url() . 'kunjungan/hapus/' . $r['id_rm']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="bx bx-trash me-1"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--/ Bordered Table -->
                <?= form_close() ?>
            </div>
        </div>
    </section>