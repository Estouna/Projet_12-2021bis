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
			
			// Sécurise avec htmlspecialchars()
			$answer = htmlspecialchars($_POST['topic_answer']);
			
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
				
				// Rafraîchit la page pour éviter de renvoyer le message en réactualisant la page
				header("Refresh: 2; URL=CD-f-show-topics?titre=$_GET[titre]&id=$_GET[id]");
				
				$valide_rep = "Votre réponse a bien été postée";
				// Efface les données saisies dans le champ textarea
				unset($answer);
			} else {
				$erreur_rep = "Votre réponse ne peut pas être vide !";
			}
		}

		if(isset($_GET['page']) AND $_GET['page'] > 1) {
			$answersPerPage = 6;
		 } else {
			$answersPerPage = 5;
		 }
		 $answersTotalReq = $bdd->prepare('SELECT * FROM answers WHERE id_question = ?');
		 $answersTotalReq->execute(array($get_id));
		 $answersTotal = $answersTotalReq->rowCount();
		 $pagesTotal = ceil($answersTotal/$answersPerPage);
		 if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0 AND $_GET['page'] <= $pagesTotal) {
			$_GET['page'] = intval($_GET['page']);
			$currentPage = $_GET['page'];
		 } else {
			$currentPage = 1;
		 }
		 $start = ($currentPage-1)*$answersPerPage;

		$answers = $bdd->prepare('SELECT * FROM answers WHERE id_question = ? ORDER BY id ASC');
		$answers->execute(array($get_id));

	} else {
		$erreur = "Le titre ne correspond pas à son identifiant";
	}
} else {
	$erreur = "Erreur...";
}
