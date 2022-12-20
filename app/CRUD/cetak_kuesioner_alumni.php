<?php

session_start();
require '../../config/functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../../config/login.php");
    exit;
}

$nik = $_GET["nik"];
$kuesioner1 = query("SELECT * FROM data_alumni WHERE nik = '$nik'")[0];
$kuesioner2 = query("SELECT * FROM kuesioner_pekerjaan WHERE nik = '$nik'")[0];
$kuesioner3 = query("SELECT * FROM kuesioner_pendidikan WHERE nik = '$nik'")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Detail Alumni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="text-center mt-5">
            <h2>Data Diri Alumni</h2>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <table>
                    <tr>
                        <td>NIM</td>
                        <td>: <?= $kuesioner1['nim']; ?></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>: <?= $kuesioner1['nik']; ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>: <?= $kuesioner1['nama']; ?></td>
                    </tr>
                </table>
                <br>
                <h6>Kuesioner Pekerjaan</h6>
                <br>
                <table width="310px">
                    <tbody width="310px">
                        <tr>
                            <td>Apakah saat ini anda sedang bekerja ?</td>
                        </tr>
                        <tr class="border border-dark">
                            <td><?= $kuesioner2['bekerja']; ?></td>
                        </tr>
                        <tr>
                            <td>Apa nama perusahaan tempat anda bekerja ?</td>
                        </tr>
                        <tr class="border border-dark">
                            <td><?= $kuesioner2['perusahaan']; ?></td>
                        </tr>
                        <tr>
                            <td>Dimana provinsi perusahaan anda bekerja ?</td>
                        </tr>
                        <tr class="border border-dark">
                            <td><?= $kuesioner2['provinsi_perusahaan']; ?></td>
                        </tr>
                        <tr>
                            <td>Dimana kota perusahaan anda bekerja ?</td>
                        </tr>
                        <tr class="border border-dark">
                            <td><?= $kuesioner2['kota_perusahaan']; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat tempat perusahaan anda bekerja</td>
                        </tr>
                        <tr class="border border-dark">
                            <td><?= $kuesioner2['alamat_perusahaan']; ?></td>
                        </tr>
                        <tr>
                            <td>Alasan anda bekerja di perusahaan tersebut</td>
                        </tr>
                        <tr class="border border-dark">
                            <td><?= $kuesioner2['alasan']; ?></td>
                        </tr>
                        <tr>
                            <td>Kenapa anda memilih perusahaan tersebut ?</td>
                        </tr>
                        <tr class="border border-dark">
                            <td><?= $kuesioner2['memilih']; ?></td>
                        </tr>
                        <tr>
                            <td>Apa email perusahaan anda ?</td>
                        </tr>
                        <tr class="border border-dark">
                            <td><?= $kuesioner2['email_perusahaan']; ?></td>
                        </tr>
                        <tr>
                            <td>Apa jenis perusahaan / instansi / lembaga tempat anda bekerja ?</td>
                        </tr>
                        <tr class="border border-dark">
                            <td><?= $kuesioner2['jenis_perusahaan']; ?></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <h6>Kuesioner Pendidikan</h6>
                <br>
                <table class="mb-5" width="310px">
                    <tbody width="310px">
                        <tr>
                            <td>Apakah saat ini anda sedang berkuliah ?</td>
                        </tr>
                        <tr class="border border-dark">
                            <td><?= $kuesioner3['kuliah']; ?></td>
                        </tr>
                        <tr>
                            <td>Jenjang pendidikan yang sedang anda tempuh ?</td>
                        </tr>
                        <tr class="border border-dark">
                            <td><?= $kuesioner3['jenjang']; ?></td>
                        </tr>
                        <tr>
                            <td>Kapan anda mulai studi ?</td>
                        </tr>
                        <tr class="border border-dark">
                            <td><?= $kuesioner3['kapan']; ?></td>
                        </tr>
                        <tr>
                            <td>Apa alasan anda melanjutkan pendidikan ?</td>
                        </tr>
                        <tr class="border border-dark">
                            <td><?= $kuesioner3['alasan']; ?></td>
                        </tr>
                        <tr>
                            <td>Nama instansi pendidikan lanjut ?</td>
                        </tr>
                        <tr class="border border-dark">
                            <td><?= $kuesioner3['nama']; ?></td>
                        </tr>
                        <tr>
                            <td>Kenapa anda memilih instansi pendidikan tersebut ?</td>
                        </tr>
                        <tr class="border border-dark">
                            <td><?= $kuesioner3['memilih']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        window.print();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>