<?php
require('../tutoForum/actions/users/securityAction.php');
require('../tutoForum/actions/questions/AAE-my-questionsAction.php');
include '../tutoForum/includes/head.php';
?>


<main class="column centerAlign">
    <?php include '../tutoForum/includes/navbar.php'; ?>

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
                    <a class="btn-afficher btn-green row centerJust centerAlign" href="../tutoForum/AAG-article.php?id=<?= $question['id']; ?>">AFFICHER</a>
                    <a class="btn-modifier btn-green row centerJust centerAlign" href="../tutoForum/AAF-edit-question.php?id=<?= $question['id'] ?>">MODIFIER</a>
                    <a class="btn-effacer row centerJust centerAlign" href="../tutoForum/actions/questions/deleteQuestionAction.php?id=<?= $question['id'] ?>">EFFACER</a>
                </div>
            </div>

        </div>
    <?php
    }
    ?>


</main>
<?php include '../tutoForum/includes/footer.php'; ?>