<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../../config/login.php");
    exit;
}

if (!$_SESSION["isAdmin"]) {
    header("Location: ../user/dashboard_user.php");
    exit;
}
