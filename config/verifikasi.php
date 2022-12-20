<?php

session_start();
require 'functions.php';


if (isset($_POST["verify"])) {
    $nik = $_POST["nik"];

    $verify = mysqli_query($conn, "SELECT * FROM akun WHERE nik = '$nik'");

    if (mysqli_num_rows($verify) === 1) {
        $row = mysqli_fetch_array($verify);

        $_SESSION['nik'] = $row['nik'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];

        $_SESSION["verify"] = true;

        header("Location: userpass.php");
        exit;
    }

    $error = true;
}

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
        <form method="POST" action="">
            <div class="form-group">
                <div class="text-center">
                    <label class="fw-bold mb-3">VERIFIKASI NIK UNTUK MENDAPATKAN USERNAME DAN
                        PASSWORD</label>
                    <br>
                </div>
                <input class="form-control fw-light" type="text" name="nik" placeholder="Masukkan NIK" required>
            </div>
            <br>
            <?php if (isset($error)) : ?>
                <div class="text-center" style="background-color: #FDCDD5;">
                    <p class="fst-italic p-2" style="color: red;">NIK tidak cocok !</p>
                </div>
            <?php endif; ?>
            <br>
            <div class="row">
                <div class="col-6">
                    <a href="login.php" class="btn fw-normal" style="border-color: #7289da; border: 5; color: #7289da; width: 100px; border-radius: 50px;">BACK</a>
                </div>
                <div class="col-6 text-end">
                    <button class="btn fw-normal" style="background-color: #7289da; color: white; width: 100px; border-radius: 50px;" type="submit" name="verify">VERIFY</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>