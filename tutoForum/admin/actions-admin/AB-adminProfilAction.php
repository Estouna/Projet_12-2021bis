<?php
require('../actions/database.php');

if ($_SESSION['roles'] === "ADMIN" OR $_SESSION['roles'] === "MODERATEUR") {

    // Récupère les données de la table users
    $requser = $bdd->query('SELECT * FROM users WHERE roles NOT IN ("ADMIN") ORDER BY roles DESC');
    $getAllQuestionsUsers = $bdd->query('SELECT * FROM questions WHERE id_auteur NOT IN ("1")  ORDER BY id_auteur ASC');
    $getAllAnswersUsers = $bdd->query('SELECT * FROM answers WHERE id_auteur NOT IN ("1") ORDER BY id_auteur ASC');
    
}
