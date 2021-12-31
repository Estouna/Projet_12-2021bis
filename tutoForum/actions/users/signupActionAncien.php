<?php

require('actions/database.php');
// require car s'il y a une erreur type "databse.php" le code qui va suivre va s'exécuter et ne sera pas sécurisé
// Validation du formulaire
if (isset($_POST['validate'])) {

    // Vérifie si l'utilisateur a bien complété tous les champs
    if (!empty($_POST['pseudo']) and !empty($_POST['lastname']) and !empty($_POST['firstname']) and !empty($_POST['password'])) {

        // Les données de l'utilisateur
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_lastname = htmlspecialchars($_POST['lastname']);
        $user_firstname = htmlspecialchars($_POST['firstname']);
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Vérifie si le pseudo existe déjà sur le site
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
        $checkIfUserAlreadyExists->execute(array($user_pseudo));

        // si rowcount() est égal à 0 (donc si il y a 0 pseudo identique)
        if ($checkIfUserAlreadyExists->rowCount() == 0) {

            // Insère l'utilisateur et ses propriétés
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo, nom, prenom, pass) VALUES(?, ?, ?, ?)');
            $insertUserOnWebsite->execute(array($user_pseudo, $user_lastname, $user_firstname, $user_password));

            // Récupère les informations de l'utilisateur
            $getInfosOfThisUserReq = $bdd->prepare('SELECT id, pseudo, nom, prenom FROM users WHERE nom = ? AND prenom = ? AND pseudo = ?');
            $getInfosOfThisUserReq->execute(array($user_lastname, $user_firstname, $user_pseudo));

            // on stocke ses données dans un tableau (fetch())
            $usersInfos = $getInfosOfThisUserReq->fetch();

            // Authentifie l'utilisateur sur le site et récupère ses données dans des variables globales session
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $usersInfos['id'];
            $_SESSION['lastname'] = $usersInfos['nom'];
            $_SESSION['firstname'] = $usersInfos['prenom'];
            $_SESSION['pseudo'] = $usersInfos['pseudo'];

            // On redirige l'utilisateur sur la page d'accueil
            header('Location: index.php');
        } else {
            $errorMsg = "L'utilisateur existe déjà sur le site";
        }
    } else {
        $errorMsg = "Veuillez compléter tous les champs";
    }
}
