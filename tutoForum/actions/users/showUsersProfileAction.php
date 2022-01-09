<?php

require('actions/database.php');

// Vérifie si l'id de l'utilisateur est dans l'URL
if (isset($_GET['id']) and !empty($_GET['id'])) {

    // Récupère l'id dans l'URL
    $idOfUser = $_GET['id'];

    // Vérifie si l'utilisateur existe
    $checkIfUserExists = $bdd->prepare('SELECT pseudo, mail FROM users WHERE id = ?');
    $checkIfUserExists->execute(array($idOfUser));
    // Si supérieur à 0 l'utilisateur existe bien
    if($checkIfUserExists->rowCount() > 0){

        // Récupère les données de l'utilisateurs
        $usersInfos = $checkIfUserExists->fetch();

        $user_pseudo = $usersInfos['pseudo'];
        $user_mail = $usersInfos['mail'];

        // Récupère toutes les questions publiées par l'utilisateurs
        $getHisQuestions = $bdd->prepare('SELECT * FROM questions WHERE id_auteur = ? ORDER BY id DESC');
        $getHisQuestions->execute(array($idOfUser));
    } else {
        $erreur = "Aucun utilisateur trouvé";
    }
} else {
    $erreur = "Aucun utilisateur trouvé";
}
