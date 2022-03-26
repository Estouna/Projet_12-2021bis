<?php
session_start();

// If no auth session
if (!isset($_SESSION['auth'])) {
    header('Location: AAB-login.php');
    exit();
}

