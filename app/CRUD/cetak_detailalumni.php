<?php

session_start();
require '../../config/functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../../config/login.php");
    exit;
}

$nik = $_GET["nik"];
$detail_alumni = query("SELECT * FROM data_alumni WHERE nik = $nik")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Detail Alumni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
                        <td>: <?= $detail_alumni['nim']; ?></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>: <?= $detail_alumni['nik']; ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>: <?= $detail_alumni['nama']; ?></td>
                    </tr>
                    <tr>
                        <td>Tahun Lulus</td>
                        <td>: <?= $detail_alumni['tahun_lulus']; ?></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>: <?= $detail_alumni['jurusan_alumni']; ?></td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td>: <?= $detail_alumni['prodi_alumni']; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: <?= $detail_alumni['alamat']; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: <?= $detail_alumni['email_alumni']; ?></td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <td>: <?= $detail_alumni['nohp_alumni']; ?></td>
                    </tr>
                    <tr>
                        <td>Lanjut Pendidikan</td>
                        <td>: <?= $detail_alumni['lanjut_pendidikan']; ?></td>
                    </tr>
                    <tr>
                        <td>Perguruan Tinggi</td>
                        <td>: <?= $detail_alumni['univ_lanjut']; ?></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>: <?= $detail_alumni['jurusan_lanjut']; ?></td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td>: <?= $detail_alumni['prodi_lanjut']; ?></td>
                    </tr>
                    <tr>
                        <td>Gelar</td>
                        <td>: <?= $detail_alumni['gelar_lanjut']; ?></td>
                    </tr>
                    <tr>
                        <td>Lanjut Bekerja</td>
                        <td>: <?= $detail_alumni['lanjut_pekerjaan']; ?></td>
                    </tr>
                    <tr>
                        <td>Perusahaan</td>
                        <td>: <?= $detail_alumni['pt_lanjut']; ?></td>
                    </tr>
                    <tr>
                        <td>Bagian / Jabatan</td>
                        <td>: <?= $detail_alumni['bagian_lanjut']; ?></td>
                    </tr>
                    <tr>
                        <td>Sesuai dengan keahlian</td>
                        <td>: <?= $detail_alumni['sesuai']; ?></td>
                    </tr>
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