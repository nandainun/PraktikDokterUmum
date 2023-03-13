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

        <div style="font-size: 40px" class="text-center px-4">PRAKTIK DOKTER UMUM</div>
        <div style="font-size: 20px" class="text-center px-4">dr. Muhammad Irga</div>
        <div style="font-size: 20px" class="text-center px-4">dr. Merta Arum P</div>
        <div style="font-size: 15px" class="text-center ">Jl. Raya Tekad Blok IV, Kec. Pulau Panggung, Kabupaten Tanggamus, Lampung</div>
        <hr style="border: 0.5px solid black; margin: 17px 5px 10px 5px;">

        <h4 class="mb-4 mt-4 text-center">Rekam Medis Pasien</h4>



        <table class="table table-borderless">
            <thead>
                <tr>
                    <th width="20%">Nama</th>
                    <td>:</td>
                    <td width="80%"><?= $d['nama_pasien']; ?></td>
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
        <table class="table table-bordered table-sm mb-4" style="width: 100%">
            <thead>
                <tr class="text-center">
                    <th width="12%">Tanggal</th>
                    <th width="50%">Anamnesis</th>
                    <th width="20%">Diagnosis</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $d['tgl']; ?></td>
                    <td><?= $d['anamnesa']; ?></td>
                    <td><?= $d['diagnosa']; ?></td>

                </tr>
            </tbody>
        </table>


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