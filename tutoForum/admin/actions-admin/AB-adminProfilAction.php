<?php
require('../actions/database.php');

if ($_SESSION['roles'] === "ADMIN") {

    // Récupère les données de la table users
    $requser = $bdd->query('SELECT * FROM users WHERE roles = "membre" ');
    $getAllQuestionsUsers = $bdd->query('SELECT * FROM questions WHERE id ORDER BY id_auteur ASC');
}
