<?php
session_start();
// Vérifie si l'utilisateur est authentifié
if (!isset($_SESSION['auth'])) {
    header('Location: ../../AAB-login.php');
}

require('../database.php');

// Vérifie si l'id est rentré en paramètre dans l'URL
if (isset($_GET['id']) and !empty($_GET['id'])) {

    // L'id de la réponse en paramètre
    $idOfTheAnswer = $_GET['id'];

    // Vérifie si la réponse existe
    $checkIfAnswerExists = $bdd->prepare('SELECT id_auteur FROM answers WHERE id = ?');
    $checkIfAnswerExists->execute(array($idOfTheAnswer));

    if ($checkIfAnswerExists->rowCount() > 0) {

        // Récupère les infos de la réponse
        $answersInfos = $checkIfAnswerExists->fetch();
        if ($answersInfos['id_auteur'] == $_SESSION['id']) {

            // Supprime la réponse en fonction de son id rentré en paramètre
            $deleteThisAnswer = $bdd->prepare('DELETE FROM answers WHERE id = ?');
            $deleteThisAnswer->execute(array($idOfTheAnswer));

            // Redirige vers mes réponses
            header('Location: ../../AAI-my-answers.php');
        } else {
            $erreur = "Vous n'avez pas le droit de supprimer une réponse qui ne vous appartient pas !";
        }
    } else {
        $erreur = "Aucune réponse n'a été trouvée";
    }
} else {
    $erreur = "Aucune réponse n'a été trouvée";
}