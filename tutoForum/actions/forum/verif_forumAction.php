<?php
require('actions/database.php'); /* Connexion à la bdd */
require('functions/url_custom_encode.php'); /* Connexion à la bdd */



// Vérifie si catégorie existe dans l'URL
if (isset($_GET['categorie']) and !empty($_GET['categorie'])) {

	// Sécurisé avec htmlspecialchars
	$get_categorie = htmlspecialchars($_GET['categorie']);
	$categories = array();
	$req_categories = $bdd->query('SELECT * FROM f_category');
	while ($c = $req_categories->fetch()) {
		// On met toutes les catégories dans un tableau (array_push() considère array comme une pile, et empile les variables var, ... à la fin de array.)
		array_push($categories, array($c['id'], url_custom_encode($c['name'])));
	}

	foreach ($categories as $cat) {
		if (in_array($get_categorie, $cat)) {
			$id_categorie = intval($cat[0]);
		}
	}

	if ($id_categorie) {
		if (isset($_GET['souscategorie']) and !empty($_GET['souscategorie'])) {

			$get_souscategorie = htmlspecialchars($_GET['souscategorie']);

			$souscategories = array();
			$req_souscategories = $bdd->prepare('SELECT * FROM f_sub_category WHERE id_category = ?');
			$req_souscategories->execute(array($id_categorie));
			while ($c = $req_souscategories->fetch()) {
				array_push($souscategories, array($c['id'], url_custom_encode($c['name'])));
			}
			
			foreach ($souscategories as $cat) {
				if (in_array($get_souscategorie, $cat)) {
					$id_souscategorie = intval($cat[0]);
				}
			}
		}
		$req = "SELECT * FROM questions
	            LEFT JOIN f_topics_categories ON questions.id = f_topics_categories.id_topic 
	            LEFT JOIN f_category ON f_topics_categories.id_category = f_category.id
	            LEFT JOIN f_sub_category ON f_topics_categories.id_sub_category = f_sub_category.id 
	            LEFT JOIN users ON questions.id_auteur = users.id
	            WHERE f_category.id = ?";

		if (@$id_souscategorie) {
			$req .= " AND f_sub_category.id = ?";
			$exec_array = array($id_categorie, $id_souscategorie);
		} else {
			$exec_array = array($id_categorie);
		}

		$req .= " ORDER BY questions.id DESC";

		$topics = $bdd->prepare($req);
		$topics->execute($exec_array);
	} else {
		die('Erreur: Catégorie introuvable...');
	}
} else {
	die('Erreur: Aucune catégorie sélectionnée...');
}
