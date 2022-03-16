<?php
require('../../actions/database.php');

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

            // Supprime la réponse en fonction de son id rentré en paramètre
            $deleteThisAnswer = $bdd->prepare('DELETE FROM answers WHERE id = ?');
            $deleteThisAnswer->execute(array($idOfTheAnswer));

            // Redirige vers mes réponses
            header('Location: ../home-admin.php');
            exit();
            
    } else {
        $erreur = "Aucun commentaire n'a été trouvé";
    }
} else {
    $erreur = "L'identifiant du commentaire n'a pas été trouvé";
}