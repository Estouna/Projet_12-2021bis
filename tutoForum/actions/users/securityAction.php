<?php
session_start();
if (!isset($_SESSION['auth'])) {
    header('Location: login.php');
}

// renvoi vers connexion si l'on est pas authentifié (fichier à inclure sur les pages qui ne doivent pas être accessible si déconnecté)
