<?php
require('actions/database.php');
require('functions/url_custom_encode.php');
require('functions/functions_forum.php');

// Vérifie si catégorie existe dans l'URL
if (isset($_GET['categorie']) and !empty($_GET['categorie'])) {

    // Sécurisé avec htmlspecialchars
    $get_categorie = htmlspecialchars($_GET['categorie']);
    $categories = array();
    $req_categories = $bdd->query('SELECT * FROM f_category');
    while ($rc = $req_categories->fetch()) {
        // On met toutes les catégories dans un tableau (array_push() considère array comme une pile, et empile les variables var, ... à la fin de array.)
        array_push($categories, array($rc['id'], url_custom_encode($rc['name'])));
    }

    foreach ($categories as $cat) {
        // Vérifie les variables
        if (in_array($get_categorie, $cat)) {
            $id_category = intval($cat[0]);
        }
    }

    if ($id_category) {
        if (isset($_GET['souscategorie']) and !empty($_GET['souscategorie'])) {

            // Sécurisé avec htmlspecialchars
            $get_souscategorie = htmlspecialchars($_GET['souscategorie']);

            $sub_categories = array();
            $req_sub_categories = $bdd->prepare('SELECT * FROM f_sub_category WHERE id_category = ?');
            $req_sub_categories->execute(array($id_category));
            while ($rsc = $req_sub_categories->fetch()) {
                // On met toutes les catégories dans un tableau (array_push() considère array comme une pile, et empile les variables var, ... à la fin de array.)
                array_push($sub_categories, array($rsc['id'], url_custom_encode($rsc['name'])));
            }

            foreach ($sub_categories as $sc) {
                // Vérifie les variables
                if (in_array($get_souscategorie, $sc)) {
                    $id_sub_category = intval($sc[0]);
                }
            }
        }

        // Requête pour récupérer les données 
        // , questions.id topic_base_id est un alias (comme un champ copie) qui règle le problème avec l'id du lien la page CB-forumAction.php où l'id sélectionné n'était pas le bon, sans ce rajout l'id sélectionné était le dernier de la requête $req (users.id)
        $req = "SELECT *, questions.id topic_base_id FROM questions 
            LEFT JOIN f_topics_categories ON questions.id = f_topics_categories.id_topic 
            LEFT JOIN f_category ON f_topics_categories.id_category = f_category.id 
            LEFT JOIN f_sub_category ON f_topics_categories.id_sub_category = f_sub_category.id 
            LEFT JOIN users ON questions.id_auteur = users.id
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
        $req .= " ORDER BY questions.id DESC";

        $topics = $bdd->prepare($req);

        $topics->execute($execute_array);
    } else {
        $erreur = "Catégorie introuvable...";
    }
} else {
    $erreur = "Aucune catégorie sélectionnée";
}
