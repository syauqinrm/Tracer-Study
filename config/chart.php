<?php

require 'functions.php';

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Jejak Alumni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/794940d583.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #1C315E;">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="../index.php"><img src="../app/img/logo_polines_blu_speed.webp" width="200"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item fw-semibold" style="margin-right: 30px;">
                        <a class="nav-link fs-6 text-white" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item fw-semibold" style="margin-right: 30px;">
                        <a class="nav-link fs-6 text-white" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item fw-semibold" style="margin-right: 30px;">
                        <a class="nav-link fs-6 text-white" href="chart.php">Statistik Study</a>
                    </li>
                    <li class="nav-item " style="margin-right: 20px;">
                        <a class="btn bg-white fs-6 fw-semibold text-primary" style="border-radius: 50px; width: 100px;" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="mb-5">
        <div class="container shadow" style="align-items: center; background-color: white;">
            <h1 class="text-center mt-3 pt-5">JEJAK ALUMNI</h1>
            <hr>
            <div class="row align-items-center justify-content-center mt-3">
                <div class="col-md-10">
                    <div class="container">
                        <h5 class="text-center">Jumlah Alumni yang mengisi data</h5>
                        <canvas id="jumlah_alumni" width="20" height="8"></canvas>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center mt-5">
                <div class="col-md-5 mb-5 mr-2">
                    <div class="container">
                        <h5 class="text-center">Alumni yang melanjutkan pekerjaan</h5>
                        <canvas id="lanjut_kerja" width="5" height="5"></canvas>
                    </div>
                </div>
                <div class="col-md-5 mb-5 ml-2">
                    <div class="container">
                        <h5 class="text-center">Alumni yang melanjutkan pendidikan</h5>
                        <canvas id="lanjut_pendik" width="10" height="10"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer style="background-color: #2c2f33;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 mt-5">
                    <div class="text-center">
                        <img src="../app/img/Polines-White.webp" width="30%" alt="" srcset="">
                        <h2 class="mt-3">
                            <a class="text-white" href="https://www.instagram.com/PolinesOfficial/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            <a class="text-white" style="margin-left: 8px;" href="https://www.facebook.com/PolinesOfficial" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
                            <a class="text-white" style="margin-left: 8px;" href="https://www.youtube.com/@polinesofficial6171/" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                            <a class="text-white" style="margin-left: 8px;" href="https://twitter.com/PolinesOfficial" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a class="text-white" style="margin-left: 8px;" href="https://web.telegram.org/#/im?p=@polinesbot" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                        </h2>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-5">
                    <h4 class="fw-semibold text-white">Kontak</h4>
                    <hr class="text-white" width="100">
                    <p class="mt-3 text-white">Jl. Prof. Sudarto, Tembalang, Kec. Tembalang, Kota Semarang, Jawa <br> Tengah 50275
                    </p>
                    <p class="text-white">Tel. +62 24 7473417, 7499585, 7499586</p>
                    <p class="text-white">Fax. +62 24 7499586</p>
                    <p class="text-white">Email : sekretariat@polines.ac.id</p>
                </div>
                <div class="col-12 col-md-4 mt-5">
                    <h4 class="fw-semibold text-white">Tautan Penting</h4>
                    <hr class="text-white" width="200">
                    <ul class="list-unstyled">
                        <li class="mt-3">
                            <a href="../config/login.php" class="text-decoration-none text-white">Login</a>
                        </li>
                        <li class="mt-3">
                            <a href="profile.php" class="text-decoration-none text-white">Profile</a>
                        </li>
                        <li class="mt-3">
                        <li class="mt-3">
                            <a href="chart.php" class="text-decoration-none text-white">Statistik Study</a>
                        </li>
                        <li class="mt-3">
                            <a href="https://www.polines.ac.id/" target="_blank" class="text-decoration-none text-white">Politeknik Negeri Semarang</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="text-white">
            <p class="text-center text-white pb-2 m-0">&copy; 2022 Tracer Study Polines</p>
        </div>
    </footer>
    <script>
        var ctx = document.getElementById('jumlah_alumni').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Teknik Elektro', 'Teknik Mesin', 'Teknik Sipil', 'Akuntansi', 'Administrasi Bisnis'],
                datasets: [{
                    label: '',
                    data: [
                        <?php $jumlah_elektro = mysqli_query($conn, "SELECT * FROM data_alumni WHERE jurusan_alumni = 'Teknik Elektro'");
                        echo mysqli_num_rows($jumlah_elektro); ?>,
                        <?php $jumlah_mesin = mysqli_query($conn, "SELECT * FROM data_alumni WHERE jurusan_alumni = 'Teknik Mesin'");
                        echo mysqli_num_rows($jumlah_mesin); ?>,
                        <?php $jumlah_sipil = mysqli_query($conn, "SELECT * FROM data_alumni WHERE jurusan_alumni = 'Teknik Sipil'");
                        echo mysqli_num_rows($jumlah_sipil); ?>,
                        <?php $jumlah_akuntansi = mysqli_query($conn, "SELECT * FROM data_alumni WHERE jurusan_alumni = 'Akuntansi'");
                        echo mysqli_num_rows($jumlah_akuntansi); ?>,
                        <?php $jumlah_bisnis = mysqli_query($conn, "SELECT * FROM data_alumni WHERE jurusan_alumni = 'Administrasi Bisnis'");
                        echo mysqli_num_rows($jumlah_bisnis); ?>
                    ],
                    backgroundColor: [
                        'RGBA( 0, 255, 127, 1 )',
                        'RGBA( 0, 128, 128, 1 )',
                        'RGBA( 255, 99, 71, 1 )',
                        'RGBA( 235, 99, 71, 1 )',
                        'RGBA( 244, 164, 96, 1 )'
                    ],
                    borderColor: [
                        'RGBA( 0, 255, 127, 1 )',
                        'RGBA( 0, 128, 128, 1 )',
                        'RGBA( 255, 99, 71, 1 )',
                        'RGBA( 235, 99, 71, 1 )',
                        'RGBA( 244, 164, 96, 1 )'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var ctx = document.getElementById('lanjut_kerja').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Ya', 'Tidak'],
                datasets: [{
                    label: 'Jumlah Alumni yang lanjut bekerja',
                    data: [
                        <?php $jumlah_ya = mysqli_query($conn, "SELECT * FROM data_alumni WHERE lanjut_pekerjaan = 'Ya'");
                        echo mysqli_num_rows($jumlah_ya); ?>,
                        <?php $jumlah_tidak = mysqli_query($conn, "SELECT * FROM data_alumni WHERE lanjut_pekerjaan = 'Tidak'");
                        echo mysqli_num_rows($jumlah_tidak); ?>
                    ],
                    backgroundColor: [
                        'RGBA( 127, 255, 212, 1 )',
                        'RGBA( 0, 139, 139, 1 )'
                    ],
                    borderColor: [
                        'RGBA( 127, 255, 212, 1 )',
                        'RGBA( 0, 139, 139, 1 )'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var ctx = document.getElementById('lanjut_pendik').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Ya', 'Tidak'],
                datasets: [{
                    label: 'Jumlah Alumni yang lanjut pendidikan',
                    data: [
                        <?php $jumlah_ya = mysqli_query($conn, "SELECT * FROM data_alumni WHERE lanjut_pendidikan = 'Ya'");
                        echo mysqli_num_rows($jumlah_ya); ?>,
                        <?php $jumlah_tidak = mysqli_query($conn, "SELECT * FROM data_alumni WHERE lanjut_pendidikan = 'Tidak'");
                        echo mysqli_num_rows($jumlah_tidak); ?>
                    ],
                    backgroundColor: [
                        'RGBA( 240, 128, 128, 1 )',
                        'RGBA( 255, 127, 80, 1 )'
                    ],
                    borderColor: [
                        'RGBA( 240, 128, 128, 1 )',
                        'RGBA( 255, 127, 80, 1 )'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>

<!-- referensi 
https://www.malasngoding.com/membuat-grafik-dari-database-mysql-dan-php-dengan-chart-js/ -->