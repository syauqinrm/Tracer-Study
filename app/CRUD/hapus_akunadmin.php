<?php
session_start();
require '../../config/functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../../config/login.php");
    exit;
}

$id = $_GET["id"];

if (hapus_akunadmin($id) > 0) {
    echo "<script>
        alert('Data Berhasil dihapus');
        document.location.href = '../admin/akun_admin.php';
    </script>";
} else {
    echo "<script>
        alert('Data Gagal dihapus');
        document.location.href = '../admin/akun_admin.php';
    </script>";
}
