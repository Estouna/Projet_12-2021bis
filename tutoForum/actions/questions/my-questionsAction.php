<?php
require('actions/database.php');
// Récupèrer les données de la table questions
$getAllMyQuestions = $bdd->prepare('SELECT id, titre, description, pseudo_auteur, date_publication FROM questions WHERE id_auteur = ? ORDER BY id DESC');
// On peut utiliser $_SESSION['id'] car dans database.php on a session_start()
$getAllMyQuestions->execute(array($_SESSION['id']));
