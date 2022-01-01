<?php

require('actions/database.php');

// On se sert de GET pour récupérer l'id dans l'URL et permettre de prendre la bonne question à modifier
if (isset($_GET['id']) and !empty($_GET['id'])) {
    // On créé une varible pour l'id
    $idOfQuestion = $_GET['id'];

    // ? est l'id récupérer dans l'URL
    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfQuestion));

    // rowcount() compte le nombre de données récupérées et si supérieur à 0 c'est qu' on a récupéré une question
    if ($checkIfQuestionExists->rowCount() > 0) {
        $questionInfos = $checkIfQuestionExists->fetch();
        if ($questionInfos['id_auteur'] == $_SESSION['id']) {

            $question_title = $questionInfos['titre'];
            $question_description = $questionInfos['description'];
            $question_content = $questionInfos['contenu'];
            $question_date = $questionInfos['date_publication'];
        } else {
            $erreur = "Vous n'êtes pas l'auteur de cette question";
        }
    } else {
        $erreur = "Aucune question n'a été trouvée";
    }
} else {
    $erreur = "Aucune question n'a été trouvée";
}
