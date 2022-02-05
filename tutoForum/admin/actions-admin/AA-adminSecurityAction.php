<?php
session_start();
require('../actions/database.php');

$admin = $_SESSION['roles'] === "ADMIN";

if (!$admin) {
	header('Location: ../index.php');
	exit;
}
