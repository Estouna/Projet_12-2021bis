<?php
require('actions/database.php');

// Vérifie si le formulaire a été envoyé en controlant si $_POST['topic-validate'] existe
if (isset($_POST['topic-validate'])) {

    // Vérifie si les 3 champs existent
    if (isset($_POST['topic-title'], $_POST['topic-description'], $_POST['topic-content'])) {

        // Sécurise les champs
        $id_author = $_SESSION['id'];
        $pseudo_author = $_SESSION['pseudo'];
        $title = htmlspecialchars($_POST['topic-title']);
        $description = htmlspecialchars($_POST['topic-description']);
        $content = htmlspecialchars($_POST['topic-content']);
        date_default_timezone_set('Europe/Paris');
        $topic_date = date('d/m/Y \à H:i');
        // Vérifie si les champs ne sont pas vides
        if (!empty($title) and !empty($description) and !empty($content)) {

            // Limite le nombre de caractères du titre
            if (strlen($title) <= 70) {

                // Vérifie si la notification de mail est coché ou non (la case checkbox indique on ou off)
                if (isset($_POST['topic-checkbox'])) {
                    $notif_mail = 1;
                } else {
                    $notif_mail = 0;
                }
                // Prepare la requête ( NOW() signifie au moment où le message a été posté et on n'a plus besoin de spéccifier date_publication au moment de l'execute NOW() l'a déjà précisé)
                $insert = $bdd->prepare('INSERT INTO questions(id_auteur, pseudo_auteur, titre, description, contenu, notif_mail, date_publication) VALUES(?, ?, ?, ?, ?, ?, ?)');
                $insert->execute(array(
                    $id_author,
                    $pseudo_author,
                    $title,
                    $description,
                    $content,
                    $notif_mail,
                    $topic_date
                ));

                $valide = "Votre sujet a bien été publié sur le site.";
                header("Refresh: 2; URL=CCB-publish-topicForum.php");
            } else {
                $erreur = "Le titre ne doit pas dépasser 70 caractères";
            }
        } else {
            $erreur = "Veuillez compléter tous les champs";
        }
    }
}
