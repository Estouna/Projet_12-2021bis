<?php
session_start();

// renvoi vers login.php si l'on est pas authentifié (fichier à inclure sur les pages qui ne doivent pas être accessible si déconnecté)
if (!isset($_SESSION['auth'])) {
    header('Location: AAB-login.php');
    exit();
}

