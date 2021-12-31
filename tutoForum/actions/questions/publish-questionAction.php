<?php

require('actions/database.php');

if (isset($_POST['validate'])) {

    if (!empty($_POST['title']) and !empty($_POST['description']) and !empty($_POST['content'])) {

        $question_title = htmlspecialchars($_POST['title']);
        // nl2br permet en php de rajouter des balises <br /> quand l'utilisateur saute une ligne
        $question_description = nl2br(htmlspecialchars($_POST['description']));
        $question_content = nl2br(htmlspecialchars($_POST['content']));
        // date() est une fonction qui permet de mettre une date facilement
        $question_date = date('d/m/Y');
        // Quand l'utilisateur s'est inscrit on a récupéré son id, son pseudo et son mail, même chose quand il se connecte, 
        // donc ici on peut les manipuler en incluant database.php qui déclare session_start()
        $question_id_author = $_SESSION['id'];
        $question_pseudo_author = $_SESSION['pseudo'];
        // A ce stade on a récupéré le titre, la description, le contenu, la date de création de la question puis l'id et le pseudo de l'utilisateur

        // Maintenant on doit tout insérer dans la bdd
        $insertQuestionOnWebsite = $bdd->prepare('INSERT INTO questions(titre, description, contenu, id_auteur, pseudo_auteur, date_publication)VALUES(?, ?, ?, ?, ?, ?)');
        // On aurait pu écrire aussi [] à la place d'array les deux sont la même chose
        $insertQuestionOnWebsite->execute(array(
                $question_title,
                $question_description,
                $question_content,
                $question_id_author,
                $question_pseudo_author,
                $question_date
            ));

        $valide = "Votre question a bien été publiée sur le site.";
    } else {
        $erreur = "Veuillez compléter tous les champs.";
    }
}
