<?php
require('actions/database.php');

// Check if session id exists
if (isset($_SESSION['id'])) {

    //requête sur l'utilisateur pour son id
    $requser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
    //execute avec $_SESSION['id']
    $requser->execute(array($_SESSION['id']));
    //affichage des données en allant les chercher
    $user = $requser->fetch();


    // Vérifie que le pseudo ne soit pas vide et si newPseudo est différent de pseudo
    if (isset($_POST['newPseudo']) and !empty($_POST['newPseudo']) and $_POST['newPseudo'] != $user['pseudo']) {
        //Vérifie le nombre de caractères
        $new_pseudo = htmlspecialchars($_POST['newPseudo']);
        $pseudolength = strlen($new_pseudo);
        if ($pseudolength <= 20) {

            // Vérifie si le pseudo n'existe pas déjà
            $checkIfPseudoAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
            $checkIfPseudoAlreadyExists->execute(array($new_pseudo));
            if ($checkIfPseudoAlreadyExists->rowCount() == 0) {

                //requête sql pour update membres pseudo (WHERE id est très important sinon cela mettrait à jour tous les pseudos de la table membres)
                $insert_pseudo = $bdd->prepare("UPDATE users SET pseudo = ? WHERE id = ?");
                //envoi des nouveaux paramètres
                $insert_pseudo->execute(array($new_pseudo, $_SESSION['id']));

                header("Location: AACB-edit-profile.php");
                exit();
            } else {
                $erreur = "Ce pseudo existe déjà !";
            }
        } else {
            $erreur = "Votre pseudo ne doit pas dépasser 20 caractères !";
        }
    }


    //vérifie le mail, s'il n'est pas vide
    if (isset($_POST['newMail']) and !empty($_POST['newMail']) and isset($_POST['newMail2']) and !empty($_POST['newMail2'])) {
        // si newmail est différent de mail
        if ($_POST['newMail'] != $user['mail']) {
            $new_mail = htmlspecialchars($_POST['newMail']);
            $new_mail2 = htmlspecialchars($_POST['newMail2']);
            //confirmation mail
            if ($new_mail == $new_mail2) {
                if (filter_var($new_mail, FILTER_VALIDATE_EMAIL)) {
                    // Vérifie si le mail est valide

                    // Vérifie si le mail n'existe pas déjà
                    $reqmail = $bdd->prepare("SELECT * FROM users WHERE mail = ?");
                    $reqmail->execute(array($new_mail));
                    $mailExist = $reqmail->rowCount();
                    if ($mailExist == 0) {
                        $insert_mail = $bdd->prepare("UPDATE users SET mail = ? WHERE id = ?");
                        //requête sql pour update membres mail (WHERE id est très important sinon cela mettrait à jour tous les mails de la table membres)
                        $insert_mail->execute(array($new_mail, $_SESSION['id']));

                        header("Location: AACB-edit-profile.php");
                        exit();
                    } else {
                        $erreur = "Cette adresse mail est déjà utilisée";
                    }
                } else {
                    $erreur = "Votre adresse mail n'est pas valide";
                }
            } else {
                $erreur = "Vos adresses mail ne correspondent pas";
            }
        } else {
            $erreur = "L'adresse entrée est la même qu'actuellement";
        }
    }


    //vérifie le mdp1, s'il n'est pas vide et si newmdp1 est différent de mdp1
    if (isset($_POST['newPassword']) and !empty($_POST['newPassword']) and isset($_POST['newPassword2']) and !empty($_POST['newPassword2'])) {
        $new_password = ($_POST['newPassword']);
        $new_password2 = ($_POST['newPassword2']);

        if ($new_password == $new_password2) {

            $new_password = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);
            $insert_password = $bdd->prepare("UPDATE users SET pass = ? WHERE id = ?");
            //requête sql pour update membres mot de passe (WHERE id est très important sinon cela mettrait à jour tous les mdp de la table membres)
            $insert_password->execute(array($new_password, $_SESSION['id']));

            header("Location: AACB-edit-profile.php");
            exit();
        } else {
            $erreur = "Vos deux mots de passe ne correspondent pas";
        }
    }

    if (isset($_POST['newPseudo']) and $_POST['newPseudo'] == $user['pseudo'] and $_POST['newMail'] == $user['mail'] and isset($_POST['newPassword']) and empty($_POST['newPassword']) and isset($_POST['newPassword2']) and empty($_POST['newPassword2'])) {
        $erreur = "Vous devez modifier un champ avant de cliquer";
    }
}
