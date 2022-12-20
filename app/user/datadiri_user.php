<?php

require '../../config/functions.php';
require 'session.php';

$akun_alumni = mysqli_query($conn, "SELECT * FROM akun WHERE nik = '$_SESSION[nik]' ");
$user = mysqli_fetch_array($akun_alumni);

$nik = $_SESSION["nik"];
$akunalumni = query("SELECT * FROM data_alumni WHERE nik = $nik")[0];

if (isset($_POST["submit"])) {

    if (ubah_datadiri($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil diubah');
            document.location.href = 'datadiri_user.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal diubah');
            document.location.href = 'datadiri_user.php';
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

    <title>Data Diri | Alumni</title>

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
            <li class="nav-item active">
                <a class="nav-link" href="datadiri_user.php">
                    <i class="fas fa-user-edit"></i>
                    <span>Data Diri</span></a>
            </li>
            <li class="nav-item">
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 ">
                                    Alumni
                                </span>
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
                <div class="container-fluid" style="color: black;">
                    <div style="background-color: white;">
                        <h3 class="pl-3 pt-3">Data Diri</h3>
                        <hr>
                        <form action="" method="POST">
                            <div class="row justify-content-center p-3">
                                <div class="col-md-6">
                                    <table>
                                        <tr>
                                            <td><label for="nim">NIM</label></td>
                                            <td>:</td>
                                            <td><input type="text" name="nim" value="<?= $akunalumni['nim'] ?>" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="nik">NIK</label></td>
                                            <td>:</td>
                                            <td><input type="text" value="<?= $akunalumni['nik'] ?>" disabled></td>
                                            <td><input type="hidden" name="nik" value="<?= $akunalumni['nik'] ?>"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="nama">Nama</label></td>
                                            <td>:</td>
                                            <td><input type="text" name="nama" value="<?= $akunalumni['nama'] ?>" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="tahun_lulus">Tahun Lulus</label></td>
                                            <td>:</td>
                                            <td><input type="text" name="tahun_lulus" value="<?= $akunalumni['tahun_lulus'] ?>" required></td>
                                        </tr>
                                        <tr>
                                            <td><label>Jurusan</label></td>
                                            <td>:</td>
                                            <td><select name="jurusan_alumni" value="<?= $akunalumni['jurusan_alumni'] ?>" required>
                                                    <option value="-" <?php
                                                                        ?> select>- Pilih -</option>
                                                    <option value="Teknik Elektro" <?php
                                                                                    if ($akunalumni['jurusan_alumni'] == "Teknik Elektro")
                                                                                        echo 'selected' ?>>Teknik Elektro</option>
                                                    <option value="Teknik Mesin" <?php
                                                                                    if ($akunalumni['jurusan_alumni'] == "Teknik Mesin")
                                                                                        echo 'selected' ?>>Teknik Mesin</option>
                                                    <option value="Teknik Sipil" <?php
                                                                                    if ($akunalumni['jurusan_alumni'] == "Teknik Sipil")
                                                                                        echo 'selected' ?>>Teknik Sipil</option>
                                                    <option value="Akuntansi" <?php
                                                                                if ($akunalumni['jurusan_alumni'] == "Akuntansi")
                                                                                    echo 'selected' ?>>Akuntansi</option>
                                                    <option value="Administrasi Bisnis" <?php
                                                                                        if ($akunalumni['jurusan_alumni'] == "Administrasi Bisnis")
                                                                                            echo 'selected' ?>>Administrasi Bisnis</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="prodi_alumni">Program Studi</label></td>
                                            <td>:</td>
                                            <td><input type="text" name="prodi_alumni" value="<?= $akunalumni['prodi_alumni'] ?>" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="alamat">Alamat</label></td>
                                            <td>:</td>
                                            <td><textarea name="alamat" id="alamat" required><?= $akunalumni['alamat'] ?></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><label for="email_alumni">Email</label></td>
                                            <td>:</td>
                                            <td><input type="text" name="email_alumni" value="<?= $akunalumni['email_alumni'] ?>" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="nohp_alumni">No HP</label></td>
                                            <td>:</td>
                                            <td><input type="text" name="nohp_alumni" value="<?= $akunalumni['nohp_alumni'] ?>" required></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table>
                                        <tr>
                                            <td><label>Lanjut Pendidikan</label></td>
                                            <td>:</td>
                                            <td><input type="radio" onclick="handleP(true)" name="lanjut_pendidikan" value="Ya" <?php if ($akunalumni['lanjut_pendidikan'] == "Ya")
                                                                                                                                    echo 'checked' ?> checked> Ya
                                                <input type="radio" onclick="handleP(false)" name="lanjut_pendidikan" value="Tidak" <?php if ($akunalumni['lanjut_pendidikan'] == "Tidak")
                                                                                                                                        echo 'checked' ?>> Tidak
                                            </td>

                                            <script>
                                                function handleP(params) {
                                                    if (params) {
                                                        document.getElementById("pendidikan1").style.display = "table-row";
                                                        document.getElementById("pendidikan2").style.display = "table-row";
                                                        document.getElementById("pendidikan3").style.display = "table-row";
                                                        document.getElementById("pendidikan4").style.display = "table-row";
                                                    } else {
                                                        document.getElementById("pendidikan1").style.display = "none";
                                                        document.getElementById("pendidikan2").style.display = "none";
                                                        document.getElementById("pendidikan3").style.display = "none";
                                                        document.getElementById("pendidikan4").style.display = "none";
                                                    }
                                                }
                                            </script>
                                        </tr>
                                        <div>
                                            <tr id="pendidikan1">
                                                <td><label for="univ_lanjut">Perguruan Tinggi</label></td>
                                                <td>:</td>
                                                <td><input type="text" name="univ_lanjut" value="<?= $akunalumni['univ_lanjut'] ?>"></td>
                                            </tr>
                                            <tr id="pendidikan2">
                                                <td><label for="jurusan_lanjut">Jurusan</label></td>
                                                <td>:</td>
                                                <td><input type="text" name="jurusan_lanjut" value="<?= $akunalumni['jurusan_lanjut'] ?>"></td>
                                            </tr>
                                            <tr id="pendidikan3">
                                                <td><label for="prodi_lanjut">Program Studi</label></td>
                                                <td>:</td>
                                                <td><input type="text" name="prodi_lanjut" value="<?= $akunalumni['prodi_lanjut'] ?>"></td>
                                            </tr>
                                            <tr id="pendidikan4">
                                                <td><label>Gelar</label></td>
                                                <td>:</td>
                                                <td>
                                                    <input type="radio" name="gelar_lanjut" value="D4" <?php
                                                                                                        if ($akunalumni['gelar_lanjut'] == "D4") echo 'checked' ?>> D4
                                                    <input type="radio" name="gelar_lanjut" value="S1" <?php
                                                                                                        if ($akunalumni['gelar_lanjut'] == "S1") echo 'checked' ?>> S1
                                                    <input type="radio" name="gelar_lanjut" value="S2" <?php
                                                                                                        if ($akunalumni['gelar_lanjut'] == "S2") echo 'checked' ?>> S2
                                                    <input type="radio" name="gelar_lanjut" value="S3" <?php
                                                                                                        if ($akunalumni['gelar_lanjut'] == "S3") echo 'checked' ?>> S3
                                                    <input type="radio" name="gelar_lanjut" value="-" <?php
                                                                                                        if ($akunalumni['gelar_lanjut'] == "-") echo 'checked' ?> hidden>
                                                    <!-- <select name="gelar_lanjut"
                                                    value="<?= $akunalumni['gelar_lanjut'] ?>" required>
                                                    <option value="-" <?php
                                                                        ?> select>- Pilih -</option>
                                                    <option value="D4" <?php
                                                                        if ($akunalumni['gelar_lanjut'] == "D4")
                                                                            echo 'selected' ?>>D4</option>
                                                    <option value="S1" <?php
                                                                        if ($akunalumni['gelar_lanjut'] == "S1")
                                                                            echo 'selected' ?>>S1</option>
                                                    <option value="S2" <?php
                                                                        if ($akunalumni['gelar_lanjut'] == "S2")
                                                                            echo 'selected' ?>>S2</option>
                                                    <option value="S3" <?php
                                                                        if ($akunalumni['gelar_lanjut'] == "S3")
                                                                            echo 'selected' ?>>S3</option>
                                                </select> -->
                                                </td>
                                            </tr>
                                        </div>
                                        <tr>
                                            <td><label>Lanjut Bekerja</label></td>
                                            <td>:</td>
                                            <td><input type="radio" onclick="handlek(true)" name="lanjut_pekerjaan" value="Ya" <?php if ($akunalumni['lanjut_pekerjaan'] == "Ya")
                                                                                                                                    echo 'checked' ?> checked> Ya
                                                <input type="radio" onclick="handlek(false)" name="lanjut_pekerjaan" value="Tidak" <?php if ($akunalumni['lanjut_pekerjaan'] == "Tidak")
                                                                                                                                        echo 'checked' ?>>
                                                Tidak
                                            </td>
                                            <script>
                                                function handlek(params) {
                                                    if (params) {
                                                        document.getElementById("kerja1").style.display = "table-row";
                                                        document.getElementById("kerja2").style.display = "table-row";
                                                        document.getElementById("kerja3").style.display = "table-row";
                                                        document.getElementById("kerja4").style.display = "table-row";
                                                    } else {
                                                        document.getElementById("kerja1").style.display = "none";
                                                        document.getElementById("kerja2").style.display = "none";
                                                        document.getElementById("kerja3").style.display = "none";
                                                        document.getElementById("kerja4").style.display = "none";
                                                    }
                                                }
                                            </script>
                                        </tr>
                                        <div>
                                            <tr id="kerja1">
                                                <td><label for="pt_lanjut">Perusahaan</label></td>
                                                <td>:</td>
                                                <td><input type="text" name="pt_lanjut" value="<?= $akunalumni['pt_lanjut'] ?>"></td>
                                            </tr>
                                            <tr id="kerja2">
                                                <td><label for="bagian_lanjut">Bagian / Jabatan</label></td>
                                                <td>:</td>
                                                <td><input type="text" name="bagian_lanjut" value="<?= $akunalumni['bagian_lanjut'] ?>"></td>
                                            </tr>
                                            <tr id="kerja3">
                                                <td><label>Sesuai dengan Keahlian</label></td>
                                                <td>:</td>
                                                <td><input type="radio" name="sesuai" value="Ya" <?php
                                                                                                    if ($akunalumni['sesuai'] == "Ya") echo 'checked' ?>> Ya
                                                    <input type="radio" name="sesuai" value="Tidak" <?php
                                                                                                    if ($akunalumni['sesuai'] == "Tidak") echo 'checked' ?>> Tidak
                                                    <input type="radio" name="sesuai" value="-" <?php
                                                                                                if ($akunalumni['sesuai'] == "-") echo 'checked' ?> hidden>
                                                </td>
                                            </tr>
                                        </div>
                                    </table>
                                    <button class="btn btn-primary" type="submit" name="submit">Ubah</button>
                                </div>
                            </div>
                        </form>
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