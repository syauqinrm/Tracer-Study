<?php

session_start();
require '../../config/functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: ../../config/login.php");
    exit;
}

$nik = $_GET["nik"];

if (hapus_akunalumni($nik) > 0) {
    echo "<script>
        alert('Data Berhasil dihapus');
        document.location.href = '../admin/akun_alumni.php';
    </script>";
} else {
    echo "<script>
        alert('Data Gagal dihapus');
        document.location.href = '../admin/akun_alumni.php';
    </script>";
}
