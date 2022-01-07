<?php
session_start();
require('../tutoForum/actions/questions/AAH-showSearchQuestionsAction.php');
include '../tutoForum/includes/head.php';
?>


<!-- En appuyant sur rechercher on verra dans l'URL ?search=mot entré avec des + entre les mots -->
<main class="column centerAlign">
    <?php include '../tutoForum/includes/navbar.php'; ?>



    <form method="GET" class="form-search row centerJust centerAlign">

        <div class="row centerJust centerAlign">
            <div>
                <input type="search" name="search" class="barSearch">
            </div>
            <div>
                <button class="btnSearch">Rechercher</button>
            </div>
        </div>

    </form>

    <?php
    // On crée une variable $question qui est = à $getAllQuestions (variable qui stocke toutes les posts récupérès) et on les met dans un tableau avec fetch()
    while ($question = $getAllQuestions->fetch()) {
    ?>
        <div class="block-post column centerJust">

            <div class="title-post">
                <h5>
                    <a class="a-post" href="../tutoForum/AAG-article.php?id=<?= $question['id']; ?>"><?= $question['titre']; ?></a>
                </h5>
            </div>

            <div class="content-post">
                <p>Description : <?= $question['description']; ?></p>
            </div>

            <div class="authorDate-post">
                <p>Publié par <?= $question['pseudo_auteur']; ?></p>
                <p>le <?= $question['date_publication']; ?></p>
            </div>

        </div>



    <?php
    }
    ?>


</main>
<?php include '../tutoForum/includes/footer.php'; ?>