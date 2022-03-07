<?php
require('../../actions/database.php');

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

            // Supprime la question en fonction de son id rentré en paramètre
            $deleteThisQuestion = $bdd->prepare('DELETE FROM questions WHERE id = ?');
            $deleteThisQuestion->execute(array($idOfTheQuestion));

            // Redirige vers mes questions
            header('Location: ../home-admin.php');
    } else {
        $erreur = "Aucune sujet n'a été trouvée";
    }
} else {
    $erreur = "l'identifiant du sujet n'a pas été trouvé";
}
