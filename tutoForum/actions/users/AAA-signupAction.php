<?php

// require car s'il y a une erreur type "databse.php" le code qui va suivre va s'exécuter et ne sera pas sécurisé
require('actions/database.php');


if (isset($_POST['validate'])) {
    $user_pseudo = htmlspecialchars($_POST['pseudo']);
    $user_email = htmlspecialchars($_POST['mail']);
    $user_email2 = htmlspecialchars($_POST['mail2']);
    $user_password = ($_POST['password']);
    $user_password2 = ($_POST['password2']);

    if (!empty($_POST['pseudo']) and !empty($_POST['mail']) and !empty($_POST['mail2']) and !empty($_POST['password']) and !empty($_POST['password2']))
    //Si les champs sont remplis (!empty)
    {
        $pseudolength = strlen($user_pseudo);
        if ($pseudolength <= 20)
        //Vérifie le nombre de caractères
        {
            $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
            $checkIfUserAlreadyExists->execute(array($user_pseudo));
            if ($checkIfUserAlreadyExists->rowCount() == 0) {
                if ($user_email == $user_email2)
                //confirmation mail
                {
                    if (filter_var($user_email, FILTER_VALIDATE_EMAIL))
                    //Fonction qui vérifie que l'adresse mail est valide (quelqu'un qui s'y connait en HTML peut modifier le type email en type texte)
                    {
                        $reqmail = $bdd->prepare("SELECT * FROM users WHERE mail = ?");
                        $reqmail->execute(array($user_email));
                        $mailExist = $reqmail->rowCount();
                        if ($mailExist == 0) {
                            //vérifie si l'adresse mail n'existe pas déjà dans la bdd. On peut faire la même chose pour le pseudo
                            if ($user_password == $user_password2)
                            //confirmation mdp
                            {
                                $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                                $insertmbr = $bdd->prepare("INSERT INTO users(pseudo, mail, pass) VALUES(?, ? ,?)");
                                $insertmbr->execute(array($user_pseudo, $user_email, $user_password));
                                // $valide = "Votre compte a bien été créé ! <a class=\"meConnecter\" href=\"connexion.php\"> Me connecter</a>";

                                // Récupère les informations de l'utilisateur
                                $getInfosOfThisUserReq = $bdd->prepare('SELECT id, pseudo, mail FROM users WHERE pseudo = ? AND mail = ?');
                                $getInfosOfThisUserReq->execute(array($user_pseudo, $user_email));

                                // on stocke ses données dans un tableau (fetch())
                                $usersInfos = $getInfosOfThisUserReq->fetch();

                                // Authentifie l'utilisateur sur le site et récupère ses données dans des variables globales session
                                $_SESSION['auth'] = true;
                                $_SESSION['id'] = $usersInfos['id'];
                                $_SESSION['pseudo'] = $usersInfos['pseudo'];
                                $_SESSION['mail'] = $usersInfos['mail'];

                                // On redirige l'utilisateur sur la page login.php
                                header('Location: AAB-login.php');
                                exit();
                                
                            } else
                            {
                                $erreur = "Vos mots de passes ne correspondent pas";
                            }
                        } else
                        {
                            $erreur = "Cette adresse mail est déjà utilisée";
                        }
                    } else
                    {
                        $erreur = "Votre adresse mail n'est pas valide";
                    }
                } else
                {
                    $erreur = "Vos adresses mail ne correspondent pas";
                }
            } else {
                $erreur = "Ce pseudo existe déjà";
            }
        } else {
            $erreur = "Votre pseudo ne doit pas dépasser 20 caractères";
        }
    } else
    {
        $erreur = "Tous les champs doivent être complétés";
    }
}
