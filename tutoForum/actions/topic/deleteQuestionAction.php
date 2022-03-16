<?php
session_start();
// Vérifie si l'utilisateur est authentifié
if (!isset($_SESSION['auth'])) {
    header('Location: ../../AAB-login.php');
}

require('../database.php');

// Vérifie si l'id est rentré en paramètre dans l'URL
if (isset($_GET['id']) and !empty($_GET['id'])) {

    // L'id de la question en paramètre
    $idOfTheQuestion = $_GET['id'];

    // Vérifie si la question existe
    $checkIfQuestionExists = $bdd->prepare('SELECT id_auteur FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfTheQuestion));

    if ($checkIfQuestionExists->rowCount() > 0) {

        // Récupère les infos de la question
        $questionsInfos = $checkIfQuestionExists->fetch();
        if ($questionsInfos['id_auteur'] == $_SESSION['id']) {

            // Supprime la question en fonction de son id rentré en paramètre
            $deleteThisQuestion = $bdd->prepare('DELETE FROM questions WHERE id = ?');
            $deleteThisQuestion->execute(array($idOfTheQuestion));

            // Redirige vers mes questions
            header('Location: ../../AAE-my-questions.php');
            exit();
            
        } else {
            $erreur = "Vous n'avez pas le droit de supprimer une question qui ne vous appartient pas !";
        }
    } else {
        $erreur = "Aucune question n'a été trouvée";
    }
} else {
    $erreur = "Aucune question n'a été trouvée";
}
