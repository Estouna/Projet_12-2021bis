<?php
require('actions/database.php');

// Récupère toutes les données de la table questions et les classent par ordre du plus récent au moins récent
$topics = $bdd->query('SELECT * FROM questions ORDER BY id DESC');

if(isset($_GET['category']) AND !empty($_GET['category'])){

    $category = htmlspecialchars($_GET['category']);

    $req = 'SELECT * FROM questions 
    LEFT JOIN f_topics_categories 
    ON questions.id = f_topics_categories.id_topic 
    LEFT JOIN f_category 
    ON f_topics_categories.id_category = f_category.id 
    LEFT JOIN f_sub_category 
    ON f_topics_categories.id_sub_category = f_sub_category.id 
    WHERE f_category.id = 1 AND f_sub_category.id = 2';

    $topics = $bdd->prepare($req);
}else{
    $erreur = "Aucune catégorie sélectionnée";
}