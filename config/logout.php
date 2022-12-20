<?php

session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('login', '', time() - 60 * 60);

header("Location: login.php");
exit;
