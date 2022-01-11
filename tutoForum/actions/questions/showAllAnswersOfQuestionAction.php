<?php
require('actions/database.php');


// Récupère les données d'une réponse (table answers) qui possède l'identifiant de la question rentré en paramètre (dans l'URL)
//$getAllAnswersOfThisQuestion = $bdd->prepare('SELECT id_auteur, pseudo_auteur, id_question, contenu, date_publication FROM answers WHERE id_question = ? ORDER BY id ASC');
//$getAllAnswersOfThisQuestion->execute(array($idOfTheQuestion));


if (isset($_GET['id']) and !empty($_GET['id'])) {

    // Récupère l'identifiant de la question
    $idOfTheQuestion = $_GET['id'];

    // Vérifie si la question existe
    $getAllAnswersOfThisQuestion = $bdd->prepare('SELECT id_auteur, pseudo_auteur, id_question, contenu, date_publication FROM answers WHERE id_question = ? ORDER BY id ASC');
    $getAllAnswersOfThisQuestion->execute(array($idOfTheQuestion));
} else {
    $erreur = "Aucune question n'a été trouvée";
}
