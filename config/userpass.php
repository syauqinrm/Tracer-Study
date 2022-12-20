<?php

session_start();
require 'functions.php';

if (!isset($_SESSION["verify"])) {
    header("Location: verifikasi.php");
    exit;
}

$nik = $_SESSION["nik"];
$verifikasi = query("SELECT * FROM akun WHERE nik = $nik")[0];


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verifikasi NIK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background: url('../app/img/POLINES.jpg');
            background-size: cover;
        }

        .container {
            width: 50%;
            margin-top: 90px;
            box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
            padding: 40px;
            /* border-radius: 20px; */
            /* background-color: white; */
            background-color: rgba(255, 255, 255, 0.9);
        }
    </style>
</head>

<body style="background-color: #7289da; overflow: hidden;">
    <div class="container">
        <div style="text-align: center;">
            <a href="../index.php"><img src="../app/img/POLINES LOGO.png" style="text-align: center; width: 150px;"></a>
            <h3 class="fw-semibold" style="color: darkblue;">Tracer Study</h3>
        </div>
        <hr>
        <div class="align-items-center justify-content-center">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <table>
                        <tr>
                            <td><label for="nik">NIK </label></td>
                            <td><span style="margin-left: 5px;">:</span></td>
                            <td><span style="margin-left: 10px;"><?= $verifikasi['nik'] ?></span></td>
                        </tr>
                        <tr>
                            <td><label for="username">Username </label></td>
                            <td><span style="margin-left: 5px;">:</span></td>
                            <td><span style="margin-left: 10px;"><?= $verifikasi['username'] ?></span></td>
                        </tr>
                        <tr>
                            <td><label for="nik">Password </label></td>
                            <td><span style="margin-left: 5px;">:</span></td>
                            <td><span style="margin-left: 10px;"><?= $verifikasi['password'] ?></span> </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 text-start">
                <a class="btn fw-normal" href="verifikasi.php" style="border-color: #7289da; border: 5; color: #7289da; width: 100px; border-radius: 50px;">BACK</a>
            </div>
            <div class="col-md-6 text-end">
                <a class="btn fw-normal" href="login.php" style="background-color: #7289da; color: white; width: 100px; border-radius: 50px;">LOGIN</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>