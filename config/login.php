<?php

session_start();
require 'functions.php';

if (isset($_COOKIE['login'])) {
    if ($_COOKIE['login'] == 'true') {
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION["login"])) {
    if (isset($_SESSION['isAdmin'])) {
        header("Location: /study-tracer/app/admin/akun_alumni.php");
    } else {
        header("Location: /study-tracer/app/user/dashboard_user.php");
    }
    exit;
}


if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $login1 = mysqli_query($conn, "SELECT * FROM akunadmin WHERE username = '$username' AND password = '$password'");
    $login2 = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username' AND password = '$password'");

    if (mysqli_num_rows($login1) === 1) {
        $row1 = mysqli_fetch_array($login1);

        $_SESSION['id'] = $row1['id'];
        $_SESSION['username'] = $row1['username'];
        $_SESSION['password'] = $row1['password'];
        $_SESSION['isAdmin'] = true;

        $_SESSION["login"] = true;

        if (isset($_POST["remember"])) {
            setcookie('login', 'true', time() + 60 * 60);
        }

        header("Location: /study-tracer/app/admin/akun_alumni.php");
        exit;
    } else if (mysqli_num_rows($login2) === 1) {
        $row2 = mysqli_fetch_array($login2);

        $_SESSION['nik'] = $row2['nik'];
        $_SESSION['username'] = $row2['username'];
        $_SESSION['password'] = $row2['password'];
        $_SESSION['isAdmin'] = false;

        $_SESSION["login"] = true;

        if (isset($_POST["remember"])) {
            setcookie('login', 'true', time() + 60 * 60);
        }

        header("Location: /study-tracer/app/user/dashboard_user.php");
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
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background: url('../app/img/POLINES.jpg');
            background-size: cover;
        }

        .container {
            width: 30%;
            margin-top: 40px;
            padding: 40px;
            /* border-radius: 20px; */
            /* background-color: white; */
            background-color: rgba(255, 255, 255, 0.9);
        }
    </style>
</head>

<body style="background-color: #7289da; overflow: hidden;">
    <div class="container shadow">
        <div style="text-align: center;">
            <a href="../index.php"><img src="../app/img/POLINES LOGO.png" style="text-align: center; width: 220px;"></a>
            <h4 class="fw-semibold" style="color: darkblue;">Tracer Study</h4>
        </div>
        <hr>
        <form method="post" action="">
            <div class="form-group">
                <label class="fw-semibold" for="username">Username</label>
                <input class="form-control fw-light" type="text" name="username" placeholder="Masukkan Username" required>
            </div>
            <div class="form-group mt-2">
                <label class="fw-semibold" for="password">Password</label>
                <input class="form-control fw-light" type="password" name="password" placeholder="Masukkan Password" required>
            </div>
            <input type="checkbox" name="remember" id="remember" class="mt-3">
            <label for="remember">Remember Me</label>
            <?php if (isset($error)) : ?>
                <div class="text-center" style="background-color: #FDCDD5;">
                    <p class="fst-italic p-2" style="color: red;">Username / Password Salah !</p>
                </div>
            <?php endif; ?>
            <button class="btn fw-semibold mt-3 text-white" style="width: 100%; border-radius: 50px; background-color: #7289da;" type="submit" name="login">LOGIN</button>
            <br>
            <br>
            <div class="text-center"><a href="verifikasi.php">Dapatkan Username dan Password</a></div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>