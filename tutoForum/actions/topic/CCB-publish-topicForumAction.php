<?php
require('actions/database.php');

// Vérifie si la catégorie est bien présente dans l'url
if (isset($_GET['categorie'])) {

    // Sécurise categorie
    $get_category = htmlspecialchars($_GET['categorie']);

    // Récupère les id des catégories
    $category = $bdd->prepare('SELECT * FROM f_category WHERE id = ?');
    $category->execute(array($get_category));

    // Vérifie si la catégorie existe
    $cat_exist = $category->rowCount();
    if ($cat_exist == 1) {
        $category = $category->fetch();
        $category = $category['name'];

        // Récupère les id des sous-catégories
        $sub_category = $bdd->prepare('SELECT * FROM f_sub_category WHERE id_category = ?');
        $sub_category->execute(array($get_category));


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
                $sub_category = htmlspecialchars($_POST['topic-SubCategory']);

                // Vérifie si les sous-catégories correspondent bien et fait passer l'id de la sous-catégorie lorsqu'on execute
                $verify_sc = $bdd->prepare('SELECT id FROM f_sub_category WHERE id = ? AND id_category = ?');
                $verify_sc->execute(array($sub_category, $get_category));

                // Vérifie que $verify_sc existe
                $verify_sc = $verify_sc->rowCount();
                if ($verify_sc == 1) {

                    // Vérifie si les champs ne sont pas vides
                    if (!empty($title) and !empty($description) and !empty($content)) {

                        // Limite le nombre de caractères du titre
                        if (strlen($title) <= 100) {

                            // Vérifie si la notification de mail est coché ou non (la case checkbox indique on ou off)
                            if (isset($_POST['topic-checkbox'])) {
                                $notif_mail = 1;
                            } else {
                                $notif_mail = 0;
                            }
                            // Prepare la requête signifie au moment où le message a été posté et on n'a plus besoin de spéccifier date_publication au moment de l'execute NOW() l'a déjà précisé)
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
                            // Récupère l'id du dernier topic (LIMIT 0,1)
                            $last_topic = $bdd->query('SELECT id FROM questions ORDER BY id DESC LIMIT 0,1');
                            $last_topic = $last_topic->fetch();
                            $id_topic = $last_topic['id'];
                            // Insertion des champs catégories
                            $insert = $bdd->prepare('INSERT INTO f_topics_categories(id_topic, id_category, id_sub_category) VALUES (?, ?, ?)');
                            $insert->execute(array($id_topic, $get_category, $sub_category));

                            $valide = "Votre sujet a bien été publié sur le site.";

                            header('Location: CA-forum-home.php');
                        } else {
                            $erreur = "Le titre ne doit pas dépasser 100 caractères";
                        }
                    } else {
                        $erreur = "Veuillez compléter tous les champs";
                    }
                } else {
                    $erreur = "Sous-catégorie invalide";
                }
            }
        }
    } else {
        $erreur = "Catégorie invalide";
    }
} else {
    $erreur = "Aucune catégorie définie...";
}
