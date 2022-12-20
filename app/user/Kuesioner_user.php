<?php

require '../../config/functions.php';
require 'session.php';

if (isset($_POST["isi"])) {
    $nik = $_POST['nik'];
    $terisi = mysqli_query($conn, "SELECT nik FROM kuesioner_pekerjaan WHERE nik = '$nik'");
    if (mysqli_num_rows($terisi) === 1) {
        $error1 = true;
    } else {
        header("Location: kuesioner.php");
    }
}
if (isset($_POST["cetak"])) {
    $nik = $_POST['nik'];
    $terisi = mysqli_query($conn, "SELECT nik FROM kuesioner_pendidikan WHERE nik = '$nik'");
    if (mysqli_num_rows($terisi) === 1) {
        header("Location: ../CRUD/cetak_isikuesioner.php");
    } else {
        $error2 = true;
    }
}

$akun_alumni = mysqli_query($conn, "SELECT * FROM akun WHERE nik = '$_SESSION[nik]' ");
$user = mysqli_fetch_array($akun_alumni);

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

    <!-- Custom fonts for this template-->
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-text mx-3">Alumni</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard_user.php">
                    <i class="fas fa-home"></i>
                    <span>Beranda</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="datadiri_user.php">
                    <i class="fas fa-user-edit"></i>
                    <span>Data Diri</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Kuesioner_user.php">
                    <i class="fas fa-file-signature"></i>
                    <span>Kuesioner</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

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

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 ">Alumni</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profil_user.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <?= $user['username'] ?>
                                </a>
                                <div class="dropdown-divider"></div>
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
                        <h3 class="pl-3 pt-3">Kuesioner Alumni</h3>
                        <hr>
                        <form action="" method="POST">
                            <div class="pl-3" style="background-color: white;">
                                <input class="form-control fw-light" type="text" name="nik" value="<?= $user['nik'] ?>" readonly hidden>
                                <button class="btn btn-primary" type="submit" name="isi">Isi Kuesioner</button>
                                <button class="btn btn-info" type="submit" name="cetak">Cetak Kuesioner</button>
                                <br><br>
                            </div>
                        </form>
                        <br>
                        <?php if (isset($error1)) : ?>
                            <div class="text-center" style="background-color: #FDCDD5;">
                                <p class="fst-italic p-2" style="color: red;">Anda Sudah Mengisi Kuesioner !</p>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($error2)) : ?>
                            <div class="text-center" style="background-color: #FDCDD5;">
                                <p class="fst-italic p-2" style="color: red;">Anda Belum Mengisi Kuesioner !</p>
                            </div>
                        <?php endif; ?>
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