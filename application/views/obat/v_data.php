<body>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Bordered Table -->
            <div class="card">
                <h5 class="card-header">Daftar Obat</h5>
                <div class="card-body">
                    <?php echo $this->session->flashdata('pesan'); ?>
                    <div class="table-responsive text-nowrap">
                        <a href="<?= base_url('obat/tambah'); ?>" type="button" class=" mb-4 btn btn-primary" style="float:left;"><i class='menu-icon bx bx-book-add bx-flip-vertical bx-tada'></i> Tambah Obat</a>
                        <table class="table table-cell-border" id="datatables" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Obat</th>
                                    <th>Sediaan</th>
                                    <th>Dosis</th>
                                    <th>Keterangan</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($obat as $r) { ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $r['nama_obat']; ?></td>
                                        <td><?= $r['sediaan']; ?></td>
                                        <td><?= $r['dosis']; ?></td>
                                        <td><?= $r['keterangan']; ?></td>
                                        <td><?= $r['stok']; ?></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="<?= base_url() . 'obat/edit/' . $r['id_obat']; ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="<?= base_url() . 'obat/hapus/' . $r['id_obat']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="bx bx-trash me-1"></i> Delete</a>
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
        </div>