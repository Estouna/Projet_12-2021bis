<?php
require('actions/database.php');

if (isset($_SESSION['id'])) {

    //requête sur l'utilisateur pour son id
    $requser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
     //execute avec $getid 
    $requser->execute(array($_SESSION['id']));
    //affichage des données en allant les chercher
    $userInfo = $requser->fetch();
}