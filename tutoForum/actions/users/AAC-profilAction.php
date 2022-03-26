<?php

require('actions/database.php');

$membre = $_SESSION['roles'] === "membre";

// Check if session id exists
if (isset($_SESSION['id'])) {

    //requête sur l'utilisateur pour son id
    $requser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
     //execute avec $getid 
    $requser->execute(array($_SESSION['id']));
    //affichage des données en allant les chercher
    $userInfo = $requser->fetch();
}