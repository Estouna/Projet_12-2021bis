<?php
require('../actions/database.php');

if (isset($_GET['id']) and !empty($_GET['id'])) {
// Valide le formulaire quand on clique sur modifier
if (isset($_POST['validate'])) {

    // Vérifier si les champs sont remplis
    if (!empty($_POST['title']) and !empty($_POST['description']) and !empty($_POST['content'])) {

        // Les données à faire passer dans la requête
        $new_question_title = htmlspecialchars($_POST['title']);
        $new_question_description = nl2br(htmlspecialchars($_POST['description']));
        $new_question_content = nl2br(htmlspecialchars($_POST['content']));

        // Modifier les informations de la question qui possède l'id rentré en parmamètres dans l'URL
        // Mettre à jour la table questions en mettant à jour titre, description et contenu qui possède l'id ? (récupéré dans l'URL) 
        $editQuestionOnWebsite = $bdd->prepare('UPDATE questions SET titre = ?, description = ?, contenu = ? WHERE id = ?');
        $editQuestionOnWebsite->execute(array($new_question_title, $new_question_description, $new_question_content, $_GET['id'])); // si marche pas utiliser ($_GET['id']) à la place $idOfQuestion 

        // Redirige vers la page d'affichage des questions de l'utilisateur
        header("Refresh: 2; URL=edit-topicMember.php?id=$_GET[id]");
        exit();
        
    } else {
        $erreur = "Veuillez modifier un champ avant de valider.";
    }
}
} else {
    $erreur = "L'identifiant du sujet n'a pas été récupéré ";
}