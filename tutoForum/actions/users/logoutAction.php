<?php
session_start();

$_SESSION = [];
session_destroy();

header('Location: ../../AAB-login.php');
exit();
