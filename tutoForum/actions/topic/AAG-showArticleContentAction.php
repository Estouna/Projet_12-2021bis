<?php
require('actions/database.php');

// Vérifie si l'id de la question est rentrée dans l'URL
if (isset($_GET['id']) and !empty($_GET['id'])) {

    // Récupère l'identifiant de la question
    $idOfTheQuestion = $_GET['id'];

    // Vérifie si la question existe
    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfTheQuestion));

    if ($checkIfQuestionExists->rowCount() > 0) {

        // Récupère toutes les datas de la question
        $questionsInfos = $checkIfQuestionExists->fetch();

        // Stocke les datas de la question dans des variables propres
        $question_title = $questionsInfos['titre'];
        $question_content = $questionsInfos['contenu'];
        $question_id_author = $questionsInfos['id_auteur'];
        $question_pseudo_author = $questionsInfos['pseudo_auteur'];
        $question_publication_date = $questionsInfos['date_publication'];
    } else {
        $erreur = "Aucune question n'a été trouvée";
    }
} else {
    $erreur = "Aucune question n'a été trouvée";
}
