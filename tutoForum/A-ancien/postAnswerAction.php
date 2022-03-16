<?php

require('actions/database.php');

// Vérifie si 'validate' est bien défini (si l'utilisateur a bien cliqué)
if (isset($_POST['validate'])) {

    //Vérifie si le textarea de la réponse n'est pas vide
    if (!empty($_POST['answer'])) {

        $user_answer = nl2br(htmlspecialchars($_POST['answer']));
        date_default_timezone_set('Europe/Paris');
        $answer_date = date('d/m/Y \à H:i');

        $insertAnswer = $bdd->prepare('INSERT INTO answers(id_auteur, pseudo_auteur, id_question, contenu, date_publication)VALUES(?, ?, ?, ?, ?)');
        $insertAnswer->execute(array(
            $_SESSION['id'],
            $_SESSION['pseudo'],
            $idOfTheQuestion,
            $user_answer,
            $answer_date
        ));

        $valide = "Message posté";
        header("Refresh: 2; URL=AAG-article.php?id=$_GET[id]");
        exit();

    } else {
        $erreur = "Veuillez saisir un message avant de répondre";
    }
}
