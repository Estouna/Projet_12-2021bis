<?php
require('../actions/database.php');

// Valider le formulaire quand on clique sur modifier
if (isset($_POST['validate'])) {

    // Vérifier si les champs sont remplis
    if (!empty($_POST['content']) ) {

        // Les données à faire passer dans la requête
        $new_answer_content = nl2br(htmlspecialchars($_POST['content']));

        // Modifier les informations de la question qui possède l'id rentré en parmamètres dans l'URL
        // Mettre à jour la table questions en mettant à jour titre, description et contenu qui possède l'id ? (récupéré dans l'URL) 
        $editAnswerOnWebsite = $bdd->prepare('UPDATE answers SET contenu = ? WHERE id = ?');
        $editAnswerOnWebsite->execute(array($new_answer_content, $_GET['id'])); // si marche pas utiliser ($_GET['id']) à la place $idOfQuestion 

        header("Location: edit-answerMember.php?id=$_GET[id]");
        exit();

    } else {
        $erreur = "Veuillez compléter tous les champs.";
    }
}