<?php
session_start();
require('actions/database.php');

// Check if submit exists
if (isset($_POST['validate'])) {
    // Les données de l'utilisateur
    $mailConnect = htmlspecialchars($_POST['mailConnect']);
    $passwordConnect = ($_POST['passwordConnect']);
    // Vérifie si l'utilisateur a bien complété tous les champs
    if (!empty($mailConnect) and !empty($passwordConnect)) //Mettre d'autres options
    {   // Vérifie si l'utilisateur existe en récupèrant les données utilisateur par le pseudo qui vient d'être rentré
        $checkIfUserExists = $bdd->prepare("SELECT * FROM users WHERE mail = ?");
        $checkIfUserExists->execute(array($mailConnect));
        // "rowCount" = fonction qui permet de compter le nombre de colonnes (row = ligne/rangée count = compter)
        $userexist = $checkIfUserExists->rowCount();
        if ($userexist == 1) {
            // Si l'utilisateur existe, récupère ses données
            $usersInfos = $checkIfUserExists->fetch();

            // Vérifie si le mot de passe est correct
            if (password_verify($passwordConnect, $usersInfos['pass'])) {
                // Authentifie l'utilisateur sur le site et récupère ses données dans des variables globales session
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['id'];
                $_SESSION['pseudo'] = $usersInfos['pseudo'];
                $_SESSION['mail'] = $usersInfos['mail'];
                $_SESSION['roles'] = $usersInfos['roles'];
                // Redirige vers la page profil
                if ($_SESSION['roles'] === "ADMIN" || $_SESSION['roles'] === "MODERATEUR") {
                    header('Location: ../tutoForum/admin/home-admin.php ');
                    exit();
                }

                if ($_SESSION['roles'] === "membre") {
                    header('Location: AAC-profil.php');
                    exit();
                }

                
            } else {
                $erreur = "Votre mot de passe est incorrect";
            }
        } else {
            $erreur = "Adresse mail ou mot de passe incorrect";
        }
    } else {
        $erreur = "Veuillez compléter tous les champs";
    }
}
