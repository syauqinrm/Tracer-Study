<?php

session_start();
require '../../config/functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../../config/login.php");
    exit;
}

// $id = $_GET["id"];
// $akunadmin = query("SELECT * FROM akunadmin WHERE id = $id")[0];

$akun_admin = mysqli_query($conn, "SELECT * FROM akunadmin WHERE id = '$_SESSION[id]' ");
$user = mysqli_fetch_array($akun_admin);

if (isset($_POST["submit"])) {

    if (ubah_akunadmin($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil diubah');
            document.location.href = '../admin/akun_admin.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal diubah');
            document.location.href = '../admin/akun_admin.php';
        </script>";
    }
}
