<?php
session_start();
require('../actions/database.php');

if (!$_SESSION['roles'] === "ADMIN" OR !$_SESSION['roles'] === "MODERATEUR") {
	header('Location: ../index.php');
	exit;
}
