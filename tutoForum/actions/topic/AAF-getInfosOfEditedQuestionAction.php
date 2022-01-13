<?php

require('actions/database.php');

// On se sert de GET pour récupérer l'id dans l'URL et permettre de prendre la bonne question à modifier

// Vérifier si l'id de la question est bien passé en paramètre dans l'URL
if (isset($_GET['id']) and !empty($_GET['id'])) {

    $idOfQuestion = $_GET['id'];

    // ? est l'id récupérer dans l'URL
    // Vérifier si la question existe
    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfQuestion));

    // rowcount() compte le nombre de données récupérées et si supérieur à 0 c'est qu' on a récupéré une question
    if ($checkIfQuestionExists->rowCount() > 0) {

        // Récupérer les données de la question
        $questionInfos = $checkIfQuestionExists->fetch();
        if ($questionInfos['id_auteur'] == $_SESSION['id']) {

            $question_title = $questionInfos['titre'];
            $question_description = $questionInfos['description'];
            $question_content = $questionInfos['contenu'];
            // Enlève les balises br affichées de description et contenu
            $question_description = str_replace('<br />', '', $question_description);
            $question_content = str_replace('<br />', '', $question_content);
        } else {
            $erreur = "Vous n'êtes pas l'auteur de cette question";
        }
    } else {
        $erreur = "Aucune question n'a été trouvée";
    }
} else {
    $erreur = "Aucune question n'a été trouvée";
}
