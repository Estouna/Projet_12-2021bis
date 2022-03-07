<?php
require('../actions/database.php');

// On se sert de GET pour récupérer l'id dans l'URL et permettre de prendre la bonne réponse à modifier

// Vérifier si l'id de la réponse est bien passé en paramètre dans l'URL
if (isset($_GET['id']) and !empty($_GET['id'])) {

    $idOfAnswer = $_GET['id'];

    // ? est l'id récupérer dans l'URL
    // Vérifier si la réponse existe
    $checkIfAnswerExists = $bdd->prepare('SELECT * FROM answers WHERE id = ?');
    $checkIfAnswerExists->execute(array($idOfAnswer));

    // rowcount() compte le nombre de données récupérées et si supérieur à 0 c'est qu' on a récupéré une réponse
    if ($checkIfAnswerExists->rowCount() > 0) {
        

        // Récupérer les données de la réponse
        $answerInfos = $checkIfAnswerExists->fetch();
        if ($admin) {

            $answer_content = $answerInfos['contenu'];
            // Enlève les balises br affichées de description et contenu
            $answer_content = str_replace('<br />', '', $answer_content);
        } else {
            $erreur = "Vous n'êtes pas l'auteur de cette réponse";
        }
    } else {
        $erreur = "Aucune réponse n'a été trouvée";
    }
} else {
    $erreur = "Aucune réponse n'a été trouvée";
}