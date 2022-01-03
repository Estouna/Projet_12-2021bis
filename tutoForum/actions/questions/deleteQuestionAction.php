<?php
session_start();
if (!isset($_SESSION['auth'])) {
    header('Location: AAB-login.php');
}

require('../database.php');

if (isset($_GET['id']) and !empty($_GET['id'])) {
    $idOfTheQuestion = $_GET['id'];

    $checkIfQuestionExists = $bdd->prepare('SELECT id_auteur FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfTheQuestion));

    if ($checkIfQuestionExists->rowCount() > 0) {

        $usersInfos = $checkIfQuestionExists->fetch();
        if ($usersInfos['id_auteur'] == $_SESSION['id']) {

            $deleteThisQuestion = $bdd->prepare('DELETE FROM questions WHERE id = ?');
            $deleteThisQuestion->execute(array($idOfTheQuestion));

            header('Location: ../../AAE-my-questions.php');
        } else {
            $erreur = "Vous n'avez pas le droit de supprimer une question qui ne vous appartient pas !";
        }
    } else {
        $erreur = "Aucune question n'a été trouvée";
    }
} else {
    $erreur = "Aucune question n'a été trouvée";
}
