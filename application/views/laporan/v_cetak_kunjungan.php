<?php

function tgl_indo($tanggal)
{
    $bulan = array(
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .table-bordered th,
        .table-bordered thead th,
        .table-bordered td {
            border: 1px solid #000;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="<?= base_url(); ?>assets/img/logo.jpg" style="float: left; height: 130px">

        <div style="font-size: 40px" class="text-center">PRAKTIK DOKTER UMUM</div>
        <div style="font-size: 20px" class="text-center">dr. Muhammad Irga</div>
        <div style="font-size: 20px" class="text-center">dr. Merta Arum P</div>
        <div style="font-size: 15px" class="text-center">Jl. Raya Tekad Blok IV, Kec. Pulau Panggung, Kabupaten Tanggamus, Lampung</div>

        <hr style="border: 0.5px solid black; margin: 17px 5px 10px 5px;">
        <h4 class="mb-4 mt-4">Laporan Data Kunjungan </h4>

        <table class="table table-bordered table-sm">
            <tr class="text-center">
                <th width=" 5%">No.</th>
                <th width="10%">Tanggal Kunjungan</th>
                <th width="15%">Nama Pasien</th>
                <th width="5%">Jenis Kelamin</th>
                <th width="5%">Umur</th>
            </tr>
            <?php $no = 1;
            foreach ($rekam_medis as $r) {
            ?>
                <tr>
                    <td class="text-center"><?= $no; ?></td>
                    <td><?= tgl_indo($r['tgl']); ?></td>
                    <td><?= $r['nama_pasien']; ?></td>
                    <td><?= $r['jenis_kelamin']; ?></td>
                    <td><?= $r['umur']; ?></td>
                </tr>
            <?php $no++;
            } ?>
        </table>
        <br>
        <table width=" 100%">
            <tr>
                <td></td>
                <td width="300px">
                    <p>Lampung, <?= date('d-m-Y'); ?></p>

                    Dokter,
                    <br><br><br><br>
                    <b>__________________________</b>
                    <br><br>
                </td>
            </tr>
        </table>
    </div>

</body>


</html>
<script>
    window.print();
</script>