<?php
session_start();
require('../actions/database.php');

$moderateur = $_SESSION['roles'] === "MODERATEUR";

if (!$moderateur) {
	header('Location: ../index.php');
	exit;
}
