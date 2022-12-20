<?php

require '../../config/functions.php';
require 'session.php';

$akun_alumni = mysqli_query($conn, "SELECT * FROM akun WHERE nik = '$_SESSION[nik]' ");
$user = mysqli_fetch_array($akun_alumni);

$nik = $_SESSION["nik"];
$kuesioner = query("SELECT * FROM data_alumni WHERE nik = $nik")[0];

if (isset($_POST["submit"])) {

    if (tambah_kuesioner($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil dikirimkan');
            document.location.href = 'kuesioner_user.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal dikirimkan');
            document.location.href = 'kuesioner_user.php';
        </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kuesioner | Alumni</title>

    <script>
        function textk(x) {
            if (x == 0) document.getElementById("kerja").style.display = "block";
            else document.getElementById("kerja").style.display = "none";
            return;
        }

        function textp(x) {
            if (x == 0) document.getElementById("pendidikan").style.display = "block";
            else document.getElementById("pendidikan").style.display = "none";
            return;
        }
    </script>

    <!-- Custom fonts for this template-->
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="kuesioner_user.php">
                                <i class="fas fa-angle-double-left"></i>
                                <span class="mr-2 d-none d-lg-inline text-gray-600">Kembali</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 "><?= $user['username'] ?></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="../../config/logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div style="background-color: white; color: black;">
                        <div class="pl-3 pt-3 text-center">
                            <h2>Kuesioner Alumni</h2>
                        </div>
                        <hr>
                        <br>
                        <div class="pl-3 pb-5" style="background-color: white;">
                            <form action="" method="POST">
                                <div class="row justify-content-center">
                                    <div class="col-md-5">
                                        <input type="hidden" name="nik" id="nik" value="<?= $kuesioner['nik'] ?>">
                                        <div class="text-center">
                                            <h5>Kuesioner Pekerjaan</h5>
                                            <hr>
                                        </div>
                                        <label>1. Apakah saat ini anda sedang bekerja ?</label><br>
                                        <input type="radio" name="bekerja" value="Ya" onclick="textk(0)"> Ya
                                        <input type="radio" name="bekerja" value="Tidak" onclick="textk(1)"> Tidak
                                        <br><br>
                                        <div id="kerja">
                                            <label for="perusahaan">2. Apa nama perusahaan tempat anda bekerja ?</label><br>
                                            <input type="text" name="perusahaan" style="width: 500px;">
                                            <br><br>
                                            <label for="provinsi_perusahaan">3. Dimana provinsi perusahaan anda bekerja ?</label><br>
                                            <input type="text" name="provinsi_perusahaan" style="width: 500px;">
                                            <br><br>
                                            <label for="kota_perusahaan">4. Dimana kota perusahaan anda bekerja ?</label><br>
                                            <input type="text" name="kota_perusahaan" style="width: 500px;">
                                            <br><br>
                                            <label for="alamat_perusahaan">5. Alamat tempat perusahaan anda bekerja ?</label><br>
                                            <textarea name="alamat_perusahaan" id="alamat_perusahaan" cols="57" rows="2"></textarea>
                                            <br><br>
                                            <label for="alasan_k">6. Alasan Anda lanjut bekerja ?</label><br>
                                            <textarea name="alasan_k" id="alasan_k" cols="57" rows="2"></textarea>
                                            <br><br>
                                            <label for="memilih_k">7. Kenapa anda memilih perusahaan tersebut ?</label><br>
                                            <textarea name="memilih_k" id="memilih_k" cols="57" rows="2"></textarea>
                                            <br><br>
                                            <label for="email_perusahaan">8. Apa email perusahaan anda ?</label><br>
                                            <input type="text" name="email_perusahaan" style="width: 500px;">
                                            <br><br>
                                            <label for="jenis_perusahaan">9. Apa jenis perusahaan / instansi / lembaga / tempat anda bekerja ?</label><br>
                                            <input type="text" name="jenis_perusahaan" style="width: 500px;">
                                            <br><br>
                                            <br><br>
                                        </div>
                                        <div class="text-center">
                                            <h5>Kuesioner Pendidikan</h5>
                                            <hr>
                                        </div>
                                        <label>1. Apakah saat ini anda sedang berkuliah ?</label><br>
                                        <input type="radio" name="kuliah" value="Ya" onclick="textp(0)"> Ya
                                        <input type="radio" name="kuliah" value="Tidak" onclick="textp(1)"> Tidak
                                        <br><br>
                                        <div id="pendidikan">
                                            <label>2. Jenjang pendidikan yang sedang anda tempuh</label><br>
                                            <input type="radio" name="jenjang" value="D4"> D4
                                            <input type="radio" name="jenjang" value="S1"> S1
                                            <input type="radio" name="jenjang" value="S2"> S2
                                            <input type="radio" name="jenjang" value="S3"> S3
                                            <input type="radio" name="jenjang" value="" hidden checked>
                                            <br><br>
                                            <label for="kapan">3. Kapan anda mulai studi ?</label><br>
                                            <input type="text" name="kapan" style="width: 500px;">
                                            <br><br>
                                            <label for="alasan_p">4. Apa alasan anda melanjutkan pendidikan ?</label><br>
                                            <textarea name="alasan_p" id="alasan_p" cols="57" rows="2"></textarea>
                                            <br><br>
                                            <label for="nama">5. Nama Instansi pendidikan lanjut</label><br>
                                            <input type="text" name="nama" style="width: 500px;">
                                            <br><br>
                                            <label for="memilih_p">6. Kenapa anda memilih instansi pendidikan tersebut ?</label><br>
                                            <textarea name="memilih_p" id="memilih_p" cols="57" rows="2"></textarea>
                                            <br><br>
                                        </div>
                                        <button class="btn btn-primary" type="submit" name="submit">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan logout untuk mengakhiri sesi</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../../config/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../assets/js/sb-admin-2.min.js"></script>

</body>

</html>