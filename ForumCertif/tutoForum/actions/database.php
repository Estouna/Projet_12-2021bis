<?php
try {
    session_start();
    // A chaques fois que l'on accède à la bdd on lance session_start pour ne pas à avoir à le mettre sur chaques pages 
    $bdd = new PDO('mysql:host=localhost;dbname=certif_forum;charset=utf8;', 'root', '');
} catch (Exception $e) {
    die('Une erreur a été trouvée : ' . $e->getMessage());
}
