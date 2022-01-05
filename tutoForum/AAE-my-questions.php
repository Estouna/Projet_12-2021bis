<?php
require('actions/users/securityAction.php');
require('actions/questions/my-questionsAction.php');
include 'includes/header.php';
include 'includes/footer.php';
?>


<main class="column centerAlign">

    <h1 class="h1TitleArticles">Mes questions</h1>
    <?php
    while ($question = $getAllMyQuestions->fetch()) {
    ?>
        <div class="blockModifQuestion column">
            <h5 class="titleQuestion">Titre : <?= $question['titre']; ?></h5>

            <div class="bodyQuestion">
                <p class="p-decription">Description : <?= $question['description'] ?></p>
                <div class="row gap">
                    <p class="p-auteur">Publier par <?= $question['pseudo_auteur'] ?></p>
                    <p class="p-date"> le <?= $question['date_publication'] ?></p>
                </div>
                <div class="row centerAlign centerJust">
                    <a class="link-acceder btn-green row centerJust centerAlign" href="#">AFFICHER</a>
                    <a class="link-modifier btn-green row centerJust centerAlign" href="AAF-edit-question.php?id=<?= $question['id'] ?>">MODIFIER</a>
                    <a class="link-supprimer row centerJust centerAlign" href="actions/questions/deleteQuestionAction.php?id=<?= $question['id'] ?>">SUPPRIMER</a>
                </div>
            </div>

        </div>
    <?php
    }
    ?>


</main>