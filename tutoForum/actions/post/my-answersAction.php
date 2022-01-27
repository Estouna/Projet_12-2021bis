<?php
require('actions/database.php');
// Récupèrer les données de la table questions
$getAllMyAnswers = $bdd->prepare('SELECT * FROM answers WHERE id_auteur = ? ORDER BY id DESC');
// On peut utiliser $_SESSION['id'] car dans database.php on a session_start()
$getAllMyAnswers->execute(array($_SESSION['id']));