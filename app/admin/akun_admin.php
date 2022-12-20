<?php

require '../../config/functions.php';
require 'session.php';

$akunadmin = query("SELECT * FROM akunadmin ORDER BY username ASC");

if (isset($_POST["cari"])) {
    $akunadmin = cari_akunadmin($_POST["keyword"]);
}

$akun_admin = mysqli_query($conn, "SELECT * FROM akunadmin WHERE id = '$_SESSION[id]' ");
$user = mysqli_fetch_array($akun_admin);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Akun Admin | Staff Admin</title>

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
                <div class="sidebar-brand-text mx-3">Staff Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="akun_alumni.php">
                    <i class="fas fa-user-alt"></i>
                    <span>Akun Alumni</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="akun_admin.php">
                    <i class="fas fa-user-cog"></i>
                    <span>Akun Admin</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="data_alumni.php">
                    <i class="fas fa-users"></i>
                    <span>Data Alumni</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kuesioner_alumni.php">
                    <i class="fas fa-file-signature"></i>
                    <span>Kuesioner Alumni</span></a>
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

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="POST" action="">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" autocomplete="off">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" name="cari">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 ">Admin</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profil_admin.php">
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
                    <div class="p-2" style="background-color: white;">
                        <h3 class="pl-2 pt-2" style="color: black;">Akun Admin</h3>
                        <hr>
                        <div class="pl-2" style="background-color: white;">
                            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#tambah_admin"><i class="fas fa-plus"></i> Akun Admin</a>
                            <br><br>
                        </div>
                        <table class="table table-bordered table-striped" style="color: black;" cellpadding="10" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Aksi</th>
                                </tr>
                                <?php $i = 1; ?>
                                <?php foreach ($akunadmin as $row) :
                                ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $row["id"]; ?></td>
                                        <td><?= $row["username"]; ?></td>
                                        <td><?= $row["password"]; ?></td>
                                        <td><a class="btn btn-warning" href="#" data-toggle="modal" data-target="#ubah_admin<?= $row["id"]; ?>"><i class="far fa-edit"></i></a>
                                            <a class="btn btn-danger" href="../CRUD/hapus_akunadmin.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin Ingin Menghapus ?');"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </thead>
                        </table>
                        <?php foreach ($akunadmin as $row) :
                        ?>
                            <!-- ubah akun admin -->
                            <div class="example-modal">
                                <div id="ubah_admin<?= $row["id"]; ?>" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 style="color:black; margin-left:95px;">Ubah Akun Admin</h3>
                                            </div>
                                            <div class="modal-body">
                                                <form action="../CRUD/ubah_akunadmin.php" method="POST">
                                                    <?php
                                                    $id = $row["id"];
                                                    $akunadmin = query("SELECT * FROM akunadmin WHERE id = $id")[0];
                                                    ?>
                                                    <table class="ml-5">
                                                        <tr>
                                                            <td><input type="hidden" name="id" value="<?= $akunadmin["id"]; ?>" required></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for="username">Username</label></td>
                                                            <td>:</td>
                                                            <td><input type="text" name="username" value="<?= $akunadmin["username"]; ?>" required></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for="password">Password</label></td>
                                                            <td>:</td>
                                                            <td><input type="text" name="password" value="<?= $akunadmin["password"]; ?>" required></td>
                                                        </tr>
                                                        <br>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td><button class="btn btn-primary mt-3 mb-5" type="submit" name="submit">Ubah Data</button></td>
                                                        </tr>
                                                    </table>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- tambah akun admin -->
                        <div class="example-modal">
                            <div id="tambah_admin" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 style="color:black; margin-left:95px;">Tambah Akun Admin</h3>
                                        </div>
                                        <div class="modal-body">
                                            <form action="../CRUD/tambah_akunadmin.php" method="POST">
                                                <table class="ml-5">
                                                    <tr>
                                                        <td><label for="username">Username</label></td>
                                                        <td>:</td>
                                                        <td><input type="text" name="username" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="password">Password</label></td>
                                                        <td>:</td>
                                                        <td><input type="text" name="password" required></td>
                                                    </tr>
                                                    <br>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td><button class="btn btn-primary mt-3 mb-5" type="submit" name="submit">Tambah Akun</button></td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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