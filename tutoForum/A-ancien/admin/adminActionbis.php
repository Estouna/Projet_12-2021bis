<?php
require('../actions/database.php');

	// Vérifie que type existe et qu'il soit = à membre
	if(isset($_GET['type']) AND $_GET['type'] == 'membre') {
		// Vérifie que confirme existe et qu'il n'est pas vide
	   if(isset($_GET['confirme']) AND !empty($_GET['confirme'])) {
		   // (int) pour convertir en un entier
	      $confirme = (int) $_GET['confirme'];
	      $req = $bdd->prepare('UPDATE users SET confirm = 1 WHERE id = ?');
	      $req->execute(array($confirme));
	   }
	   if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
	      $supprime = (int) $_GET['supprime'];
	      $req = $bdd->prepare('DELETE FROM users WHERE id = ?');
	      $req->execute(array($supprime));
	   }
	} elseif(isset($_GET['type']) AND $_GET['type'] == 'commentaire') {
	   if(isset($_GET['approuve']) AND !empty($_GET['approuve'])) {
	      $approuve = (int) $_GET['approuve'];
	      $req = $bdd->prepare('UPDATE questions SET approuve = 1 WHERE id = ?');
	      $req->execute(array($approuve));
	   }
	   if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
	      $supprime = (int) $_GET['supprime'];
	      $req = $bdd->prepare('DELETE FROM questions WHERE id = ?');
	      $req->execute(array($supprime));
	   }
	}

	// Récupère les membres du site à partir du plus récent avec une limite
	$users = $bdd->query('SELECT * FROM users ORDER BY id DESC LIMIT 0,5');
	$answers = $bdd->query('SELECT * FROM answers ORDER BY id DESC LIMIT 0,5');
