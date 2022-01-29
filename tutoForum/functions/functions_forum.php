<?php

// Récupère le pseudo dans la table users
function get_pseudo($id)
{
    // Les fonctions ne prennent en compte que les variables qui sont à l'intérieur de la fonction. Donc on déclare que la variable $bdd est ailleurs dans notre code, que c'est une variable global.
    global $bdd;
    $pseudo = $bdd->prepare('SELECT pseudo FROM users WHERE id = ?');
    $pseudo->execute(array($id));
    $pseudo = $pseudo->fetch()['pseudo'];
    return $pseudo;
}
