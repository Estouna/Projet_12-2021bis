<?php

require('../actions/database.php');

// Vérifie que l'id dans l'url existe
if (isset($_GET['id']) and !empty($_GET['id'])) {

    $get_id = $_GET['id'];
    $req_user = $bdd->prepare('SELECT * FROM users WHERE id = ?');
    $req_user->execute(array($get_id));
    $user = $req_user->fetch();

    // Vérifie si le membre existe
    if ($req_user->rowCount() > 0) {

        // Vérifie si le champ n'est pas vide et que le pseudo n'est pas le même
        if (isset($_POST['newPseudoMember']) and !empty($_POST['newPseudoMember']) and $_POST['newPseudoMember'] != $user['pseudo']) {

            //Vérifie le nombre de caractères
            $new_pseudoMember = htmlspecialchars($_POST['newPseudoMember']);
            $pseudolength = strlen($new_pseudoMember);
            if ($pseudolength <= 20) {

                // Vérifie si le pseudo n'existe pas déjà
                $checkIfPseudoAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
                $checkIfPseudoAlreadyExists->execute(array($new_pseudoMember));
                if ($checkIfPseudoAlreadyExists->rowCount() == 0) {

                    //requête sql pour update membres pseudo (WHERE id est très important sinon cela mettrait à jour tous les pseudos de la table membres)
                    $insert_pseudo = $bdd->prepare("UPDATE users SET pseudo = ? WHERE id = ?");
                    //envoi des nouveaux paramètres
                    $insert_pseudo->execute(array($new_pseudoMember, $_GET['id']));
                    $valide = "Vos modifications ont été prises en compte !";
                    header("Refresh: 3; URL=edit-profilMember.php?id=$_GET[id]");
                } else {
                    $erreur = "Ce pseudo existe déjà !";
                }
            } else {
                $erreur = "Votre pseudo ne doit pas dépasser 20 caractères !";
            }
        }

    } else {
        $erreur = "Aucun membre n'a été trouvé";
    }
} else {
    $erreur = "L'identifiant de l'utilisateur n'a pas été récupéré ";
}
