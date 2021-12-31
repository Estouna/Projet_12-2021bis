<?php
require('actions/database.php');

// Validation du formulaire
if (isset($_POST['validate'])) {

    // Vérifie si l'utilisateur a bien complété tous les champs
    if (!empty($_POST['pseudo']) and !empty($_POST['password'])) {

        // Les données de l'utilisateur
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        // Cette fois on ne crypte pas le mot de passe
        $user_password = htmlspecialchars($_POST['password']);
        // Vérifie si l'utilisateur existe en récupèrant les données utilisateur par le pseudo qui vient d'être rentré
        $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $checkIfUserExists->execute(array($user_pseudo));
        // rowCount() compte le nombre de données récupéré lors de la requête donc si supérieur à 0 l'utilisateur a bien été récupéré
        if ($checkIfUserExists->rowCount() > 0) {

            // Récupère les données de l'utilisateur
            $usersInfos = $checkIfUserExists->fetch();

            // Vérifie si le mot de passe est correct
            if (password_verify($user_password, $usersInfos['pass'])) {
                // Authentifie l'utilisateur sur le site et récupère ses données dans des variables globales session
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['id'];
                $_SESSION['lastname'] = $usersInfos['nom'];
                $_SESSION['firstname'] = $usersInfos['prenom'];
                $_SESSION['pseudo'] = $usersInfos['pseudo'];

                // Redirige vers la page d'accueil
                header('Location: index.php');
            } else {
                $errorMsg = "Votre mot de passe est incorrect";
            }
        } else {
            $errorMsg = "Votre pseudo est incorrect";
        }
    } else {
        $errorMsg = "Veuillez compléter tous les champs";
    }
}
