<?php
require('actions/database.php');

// Ce fichier va stocker du code qu'on va inclure dans le fichier index.php (barre de recherche)

// Récupère les questions par défaut sans la recherche
// Récupère toutes les données de la table questions les classent par ordre du plus récent au moins récent et limite le nombre de question récupérée à 20
$getAllQuestions = $bdd->query('SELECT id, id_auteur, titre, description, pseudo_auteur, date_publication FROM questions ORDER BY id DESC LIMIT 0,20');

// Si la variable existe et que le champ de recherche n'est pas vide
if (isset($_GET['search']) and !empty($_GET['search'])) {

    // La recherche
    // Utiliser prepare/execute avec un ? serait trop précis, les recherches tapées devrait correspondre au mot près
    $usersSearch = $_GET['search'];

    // Récupère toute les questions qui correspondent à la recherche (en fonction du titre)
    // LIKE = comme ou ressemblant à. Les % équivaut à peu importe ce qu'il y a avant et après (1er % avant, la recherche de l'utilisateur et 2e % après) 
    $getAllQuestions = $bdd->query('SELECT id, id_auteur, titre, description, pseudo_auteur, date_publication FROM questions WHERE titre LIKE "%' . $usersSearch . '%" ORDER BY id DESC');
}
