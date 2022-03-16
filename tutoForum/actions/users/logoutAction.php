<?php
session_start();
$_SESSION = [];
session_destroy();
header('Location: ../../AAB-login.php');
exit();

// Voir peut-être la version nouvelle techno qui ne détruit pas entièrement toute la session (panier, etc...)
