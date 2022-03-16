<?php
require('actions/database.php');
require('functions/url_custom_encode.php');
require('functions/functions_forum.php');

// Vérifie que le titre et l'id du topic sont dans l'url
if (isset($_GET['titre'], $_GET['id']) and !empty($_GET['titre']) and !empty($_GET['id'])) {

	// Sécurise avec htmlspecialchars()
	$get_titre = htmlspecialchars($_GET['titre']);
	$get_id = htmlspecialchars($_GET['id']);

	// Récupère le titre de la question
	$original_title = $bdd->prepare('SELECT titre FROM questions WHERE id = ?');
	$original_title->execute(array($get_id));
	$original_title = $original_title->fetch()['titre'];

	// Si le titre dans l'url est égal au titre du topic
	if ($get_titre == url_custom_encode($original_title)) {

		// Récupère les données de questions
		$topic = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
		$topic->execute(array($get_id));
		$topic = $topic->fetch();

		
		// Si les champs existent
		if (isset($_POST['topic_answer_submit'], $_POST['topic_answer'])) {
			
			// nl2br() sert à prendre en compte les sauts de ligne, Sécurise avec htmlspecialchars()
			$answer = nl2br(htmlspecialchars($_POST['topic_answer']));
			
			// Si le textarea n'est pas vide
			if (!empty($answer)) {
				
				// Format date
				date_default_timezone_set('Europe/Paris');
				$answer_date = date('d/m/Y \à H:i');
				
				// Insert les données dans la table answers
				$insert = $bdd->prepare('INSERT INTO answers(id_question, id_auteur, pseudo_auteur, contenu, date_publication)VALUES(?, ?, ?, ?, ?)');
				$insert->execute(array(
					$get_id,
					$_SESSION['id'],
					$_SESSION['pseudo'],
					$answer,
					$answer_date
				));
				
				// $valide_rep = "Votre réponse a bien été postée";
				// Rafraîchit la page pour éviter de renvoyer le message en réactualisant la page
				unset($answer);
				header("Location: CD-f-show-topics.php?titre=$_GET[titre]&id=$_GET[id]&page=$_GET[page]");
				exit();
				
				// Efface les données saisies dans le champ textarea
			} else {
				$erreur_rep = "Votre réponse ne peut pas être vide !";
			}
		}

		// Pagination

		// Vérifie si la page existe dans l'url et si elle est supérieur à 1
		if(isset($_GET['page']) AND $_GET['page'] > 1) {

			// Réponses par page
			$answersPerPage = 8;
		 } else {
			$answersPerPage = 8;
		 }

		 // Récupère toutes les réponses par l'id du topic
		 $answersTotalReq = $bdd->prepare('SELECT * FROM answers WHERE id_question = ?');

		 // Execute un tableau avec toutes les id
		 $answersTotalReq->execute(array($get_id));

		 // Pour calculer le nombre d'entrées dans la table answers
		 $answersTotal = $answersTotalReq->rowCount();

		 // Le nombre total de réponses divisé par le nombre de réponses par page = le nombre de pages totales. 
		 // la fonction ceil() premet d'arrondir au nombre supérieur (afin d'éviter les nombres à virgule)
		 $pagesTotal = ceil($answersTotal/$answersPerPage);

		 // Vérifie si la variable de page existe dans l'url, 
		 // si elle n' est pas vide, 
		 // si elle est supérieur à 0 pour éviter l'erreur avec intval($_GET['page'] (qu'il n'affiche pas page=0)
		 // et si la page affichée dans l'url est inférieur ou égal au nombre total de pages pour renvoyer à la page 1 si on dépasse le nombre total de pages dans l'url
		 if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0 AND $_GET['page'] <= $pagesTotal) {

			// Sécurise $_GET['page'] en transformant les injections dans l'url en nombre (page=4)
			$_GET['page'] = intval($_GET['page']);
			// Une fois bien défini et sécurisé on passe $_GET['page'] en page courante ($currentPage)
			$currentPage = $_GET['page'];

			// Si la page n' est pas défini elle passe à 1
		 } else {
			$currentPage = 1;
		 }

		 // Défini le numéro de départ
		 $start = ($currentPage-1)*$answersPerPage;
		 // Récupère toutes les réponses par l'id du topic classé par ordre croissant et défini une limite de départ ($start) et jusqu'à quel nombre d'id on continue (ici 8)
		 $answers = $bdd->prepare('SELECT * FROM answers WHERE id_question = ? ORDER BY id ASC LIMIT '.$start.','.$answersPerPage);
	     $answers->execute(array($get_id));

	} else {
		$erreur = "Le titre ne correspond pas à son identifiant";
	}
} else {
	$erreur = "Erreur...";
}
