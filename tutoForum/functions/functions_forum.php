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

/*
// Récupère les réponses par catégorie
function answer_nb_category($id_category)
{
    global $bdd;
    $nb = $bdd->prepare(
        'SELECT answers.id FROM answers 
        LEFT JOIN f_topics_categories ON f_topics_categories.id_topic = answers.id_question 
        WHERE f_topics_categories.id_category = ?'
    );
    $nb->execute(array($id_category));
    return $nb->rowCount();

    // Sélectionne l'id des réponses dans la table answers et joint la table f_topics_categories
    // joint l'id_topic de la table f_topics/catgories et l'id_questions (id_topic) de la table answersPerPage
    // à l'id_category de f_topics_categories
}
*/

// Récupère les réponses par topic
function reponse_nb_topic($id_topic)
{
    global $bdd;
    $nb = $bdd->prepare(
            'SELECT answers.id FROM answers 
        LEFT JOIN questions ON questions.id = answers.id_question 
        WHERE questions.id = ?'
        );
    $nb->execute(array($id_topic));
    return $nb->rowCount();
}

// Récupère les dernières réponses par topic
function last_answer_topic($id_topic)
{
    global $bdd;
    $ans = $bdd->prepare(
            'SELECT answers.* FROM answers 
            LEFT JOIN questions ON questions.id = answers.id_question 
            WHERE questions.id = ? ORDER BY answers.date_publication DESC LIMIT 0,1'
        );
    $ans->execute(array($id_topic));
    if ($ans->rowCount() > 0) {
        $ans = $ans->fetch();
        $last_ans = $ans['date_publication'];
        $last_ans .= ' de ' . get_pseudo($ans['id_auteur']);
    } else {
        $last_ans = 'Aucune réponse...';
    }
    return $last_ans;
}
