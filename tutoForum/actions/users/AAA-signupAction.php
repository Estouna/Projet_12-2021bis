<?php

require('actions/database.php');

// Check if submit exists
if (isset($_POST['validate'])) {

    // User-entered information secured with htmlspecialchars()
    $user_pseudo = htmlspecialchars($_POST['pseudo']);
    $user_email = htmlspecialchars($_POST['mail']);
    $user_email2 = htmlspecialchars($_POST['mail2']);
    $user_password = ($_POST['password']);
    $user_password2 = ($_POST['password2']);

    // Check if the fields are not empty
    if (!empty($_POST['pseudo']) and !empty($_POST['mail']) and !empty($_POST['mail2']) and !empty($_POST['password']) and !empty($_POST['password2'])) {

        // Check the number of characters
        $pseudolength = strlen($user_pseudo);
        if ($pseudolength <= 20) {

            // Check if the nickname already exists
            $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
            $checkIfUserAlreadyExists->execute(array($user_pseudo));
            if ($checkIfUserAlreadyExists->rowCount() == 0) {

                // Check if the emails are the same
                if ($user_email == $user_email2) {

                    // Check if the email is valid
                    if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {

                        // Check if the email already exists
                        $reqmail = $bdd->prepare("SELECT * FROM users WHERE mail = ?");
                        $reqmail->execute(array($user_email));
                        $mailExist = $reqmail->rowCount();
                        if ($mailExist == 0) {

                            // Check if the passwords are the same
                            if ($user_password == $user_password2) {

                                // Hash the password
                                $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

                                // Insert the member into the database
                                $insertmbr = $bdd->prepare("INSERT INTO users(pseudo, mail, pass) VALUES(?, ? ,?)");
                                $insertmbr->execute(array($user_pseudo, $user_email, $user_password));

                                // Retrieve user information
                                $getInfosOfThisUserReq = $bdd->prepare('SELECT id, pseudo, mail FROM users WHERE pseudo = ? AND mail = ?');
                                $getInfosOfThisUserReq->execute(array($user_pseudo, $user_email));
                                $usersInfos = $getInfosOfThisUserReq->fetch();

                                // Get data into session variables
                                $_SESSION['auth'] = true;
                                $_SESSION['id'] = $usersInfos['id'];
                                $_SESSION['pseudo'] = $usersInfos['pseudo'];
                                $_SESSION['mail'] = $usersInfos['mail'];

                                // Redirects user to login page
                                header('Location: AAB-login.php');
                                
                                exit();

                            } else {
                                $erreur = "Vos mots de passes ne correspondent pas";
                            }
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
                $erreur = "Ce pseudo existe déjà";
            }
        } else {
            $erreur = "Votre pseudo ne doit pas dépasser 20 caractères";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés";
    }
}
