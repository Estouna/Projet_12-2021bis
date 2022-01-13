<?php
require('../tutoForum/actions/users/securityAction.php');
require('../tutoForum/actions/topic/AAE-my-questionsAction.php');
include '../tutoForum/includes/head.php';
?>


<main class="column centerAlign">
    <?php include '../tutoForum/includes/navbar.php'; ?>

    <section class="section-center column centerJust centerAlign">
        <h1 class="h1TitleArticles">Mes sujets</h1>

        <?php
        while ($question = $getAllMyQuestions->fetch()) {
        ?>

            <div class="shadow-green post-margin">
                <div class="block-subject show-content neumorph-subject column centerJust">
                    <div class="title-subject">
                        <h5>Titre : <?= $question['titre']; ?></h5>
                    </div>
                    <div class="content-subject">
                        <p>Description : <?= $question['description'] ?></p>
                    </div>
                    <div class="authorDate-subject">
                        <p>Publier par <?= $question['pseudo_auteur'] . '</a> le ' . $question['date_publication'] ?></p>
                    </div>
                    <div class="modif-subject row centerAlign centerJust">
                        <a class="btn-afficher btn-green neumorph-btn row centerJust centerAlign" href="../tutoForum/AAG-article.php?id=<?= $question['id']; ?>">AFFICHER</a>
                        <a class="btn-modifier btn-green neumorph-btn row centerJust centerAlign" href="../tutoForum/AAF-edit-question.php?id=<?= $question['id'] ?>">MODIFIER</a>
                        <a class="btn-effacer row centerJust centerAlign" href="../tutoForum/actions/topic/deleteQuestionAction.php?id=<?= $question['id'] ?>">EFFACER</a>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>
    </section>


</main>
<?php include '../tutoForum/includes/footer.php'; ?>