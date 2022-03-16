<?php
require('../../actions/database.php');

// Vérifie que l'id dans l'url existe
if (isset($_GET['id']) and !empty($_GET['id'])) {

    $get_id = $_GET['id'];
    $recup_user = $bdd->prepare('SELECT * FROM users WHERE id = ?');
    $recup_user->execute(array($get_id));

    // Vérifie si le membre existe
    if ($recup_user->rowCount() > 0) {

        // Bannir le membre
        $banishUser = $bdd->prepare("DELETE FROM users WHERE id = ?");
        $banishUser->execute(array($get_id));

        header('Location: ../home-admin.php');
        exit();

    } else {
        $erreur = "Aucun membre n'a été trouvé";
    }
} else {
    $erreur = "L'identifiant de l'utilisateur n'a pas été récupéré ";
}
