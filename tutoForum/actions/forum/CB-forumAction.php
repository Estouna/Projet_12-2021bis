<?php
require('actions/database.php');
require('functions/url_custom_encode.php');
require('functions/functions_forum.php');

// Check if categorie exists in URL
if (isset($_GET['categorie']) and !empty($_GET['categorie'])) {

    $get_categorie = htmlspecialchars($_GET['categorie']);

    // Create an array containing the categories with their id and names
    $categories = array();
    $req_categories = $bdd->query('SELECT * FROM f_category');
    while ($rc = $req_categories->fetch()) {
        array_push($categories, array($rc['id'], url_custom_encode($rc['name'])));
    }

    // Check that the category is in the array and get the id
    foreach ($categories as $cat) {
        if (in_array($get_categorie, $cat)) {
            $id_category = intval($cat[0]);
        }
    }

    // Check if category id exists
    if ($id_category) {

        // Check if souscategorie exists in URL
        if (isset($_GET['souscategorie']) and !empty($_GET['souscategorie'])) {

            $get_souscategorie = htmlspecialchars($_GET['souscategorie']);

            // Create an array containing the subcategories with their id and names
            $sub_categories = array();
            $req_sub_categories = $bdd->prepare('SELECT * FROM f_sub_category WHERE id_category = ?');
            $req_sub_categories->execute(array($id_category));
            while ($rsc = $req_sub_categories->fetch()) {
                array_push($sub_categories, array($rsc['id'], url_custom_encode($rsc['name'])));
            }

            // Check that the subcategory is in the array and get the id
            foreach ($sub_categories as $sc) {
                if (in_array($get_souscategorie, $sc)) {
                    $id_sub_category = intval($sc[0]);
                }
            }
        }

        // Request to retrieve data
        $req = "SELECT *, questions.id topic_base_id FROM questions 
            LEFT JOIN f_topics_categories ON questions.id = f_topics_categories.id_topic 
            LEFT JOIN f_category ON f_topics_categories.id_category = f_category.id 
            LEFT JOIN f_sub_category ON f_topics_categories.id_sub_category = f_sub_category.id 
            LEFT JOIN users ON questions.id_auteur = users.id
            WHERE f_category.id = ?";

        // Check if subcategory id exists (@ avoid displaying an error when there is no subcategory) 
        if (@$id_sub_category) {

            // Add the subcategory table to the query
            $req .= " AND f_sub_category.id = ?";

            // Array with category and subcategory id
            $execute_array = array($id_category, $id_sub_category);
        } else {

            // Array with category id
            $execute_array = array($id_category);
        }

        // Adding an order to the $req query
        $req .= " ORDER BY questions.id DESC";

        $topics = $bdd->prepare($req);
        $topics->execute($execute_array);
    } else {
        $erreur = "Catégorie introuvable...";
    }
} else {
    $erreur = "Aucune catégorie sélectionnée";
}
