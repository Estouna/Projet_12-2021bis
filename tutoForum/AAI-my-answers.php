<?php
require('../tutoForum/actions/users/securityAction.php');
require('../tutoForum/actions/questions/my-answersAction.php');
include '../tutoForum/includes/head.php';
?>


<main class="column centerAlign">
    <?php include '../tutoForum/includes/navbar.php'; ?>

    <h1 class="h1TitleArticles">Mes réponses</h1>
    <?php
    while ($answer = $getAllMyAnswers->fetch()) {
    ?>
        <div class="blockModifQuestion column">

            <div class="bodyQuestion">
                <p class="p-decription">Contenu : <?= $answer['contenu'] ?></p>
                <div class="row gap">
                    <p class="p-auteur">Publier par <?= $answer['pseudo_auteur'] ?></p>
                    <p class="p-date"> le <?= $answer['date_publication'] ?></p>
                </div>
                <div class="row centerAlign centerJust">
                    <a class="btn-afficher btn-green row centerJust centerAlign" href="../tutoForum/AAG-article.php?id=<?= $answer['id']; ?>">AFFICHER</a>
                    <a class="btn-modifier btn-green row centerJust centerAlign" href="../tutoForum/AAI-edit-answer.php?id=<?= $answer['id'] ?>">MODIFIER</a>
                    <a class="btn-effacer row centerJust centerAlign" href="../tutoForum/actions/questions/deleteAnswerAction.php?id=<?= $answer['id'] ?>">EFFACER</a>
                </div>
            </div>

        </div>
    <?php
    }
    ?>


</main>
<?php include '../tutoForum/includes/footer.php'; ?>