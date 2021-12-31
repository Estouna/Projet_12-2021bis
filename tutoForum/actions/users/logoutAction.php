<?php
session_start();
$_SESSION = [];
session_destroy();
header('Location: ../../login.php');

// Voir peut-être la version nouvelle techno qui ne détruit pas entièrement toute la session (panier, etc...)
