<?php
require('../actions/database.php');

if ($_SESSION['roles'] === "ADMIN") {

    //requête sur l'utilisateur pour son id
    $requser = $bdd->query('SELECT * FROM users WHERE roles = "membre" ');
    //execute avec $getid 
    //affichage des données en allant les chercher
}
