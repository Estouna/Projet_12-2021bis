<?php
require('actions/database.php');

// Récupère toutes les données de la table questions et les classent par ordre du plus récent au moins récent
$topics = $bdd->query('SELECT * FROM questions ORDER BY id DESC');

// Vérifie si catégorie existe dans l'URL
if (isset($_GET['categorie']) and !empty($_GET['categorie'])) {

    // Sécurisé avec htmlspecialchars
    $get_category = htmlspecialchars($_GET['categorie']);

    $categories = array();
    $req_categories = $bdd->query('SELECT * FROM f_category');
    while ($req_cat_fetch = $req_categories->fetch()) {
        // On met toutes les catégories dans un tableau (array_push() considère array comme une pile, et empile les variables var, ... à la fin de array.)
        array_push($categories, array($req_cat_fetch['id'], $req_cat_fetch['name']));
    }

    foreach ($categories as $cat) {
        // Vérifie les variables
        if (in_array($get_category, $cat)) {
            $id_category = intval($cat[0]);
        }
    }
    if (@$id_category) {
        if (isset($_GET['souscategorie']) and !empty($_GET['souscategorie'])) {
            $get_sub_category = htmlspecialchars($_GET['souscategorie']);

            $sub_categories = array();
            $req_sub_categories = $bdd->prepare('SELECT * FROM f_sub_category WHERE name = id_category = ?');
            $req_sub_categories->execute(array($id_category));
            while ($req_cat_fetch = $req_sub_categories->fetch()) {
                // On met toutes les catégories dans un tableau (array_push() considère array comme une pile, et empile les variables var, ... à la fin de array.)
                array_push($sub_categories, array($req_cat_fetch['id'], $req_cat_fetch['name']));
            }

            foreach ($sub_categories as $cat) {
                // Vérifie les variables
                if (in_array($get_category, $cat)) {
                    $id_sub_category = intval($cat[0]);
                }
            }
        }

        // Requête pour récupérer les données
        $req = "SELECT * FROM questions 
            LEFT JOIN f_topics_categories 
            ON questions.id = f_topics_categories.id_topic 
            LEFT JOIN f_category 
            ON f_topics_categories.id_category = f_category.id 
            LEFT JOIN f_sub_category 
            ON f_topics_categories.id_sub_category = f_sub_category.id 
            WHERE f_category.id = ?";

        // Vérifie si la sous-catégorie existe dans l'URL
        if (@$id_sub_category) {
            // Rajoute la sous-catégorie
            $req .= " AND f_sub_category.id = ?";
            // Affiche la catégorie et la sous-catégorie
            $execute_array = array($id_category, $id_sub_category);
        } else {
            // Si pas de sous catégorie on affiche la catégorie
            $execute_array = array($id_category);
        }

        $topics = $bdd->prepare($req);
        $topics->execute($execute_array);
    } else {
        $erreur = "Catégorie introuvable...";
    }
} else {
    $erreur = "Aucune catégorie sélectionnée";
}
