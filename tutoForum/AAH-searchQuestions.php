<?php
session_start();
require('../tutoForum/actions/topic/AAH-showSearchQuestionsAction.php');
include '../tutoForum/includes/head.php';
?>


<!-- En appuyant sur rechercher on verra dans l'URL ?search=mot entré avec des + entre les mots -->
<main class="column centerAlign">
    <?php include '../tutoForum/includes/navbar.php'; ?>

    <section class="section-center column centerAll">

        <form method="GET" class="shadow-green row centerAll marginSearch">

            <div class="form-search neumorph-form">
                <div class="row centerAll">
                    <div>
                        <input type="search" name="search" class="barSearch">
                    </div>
                    <div>
                        <button class="btnSearch">Rechercher</button>
                    </div>
                </div>
            </div>

        </form>

        <?php
        // On crée une variable $question qui est = à $getAllQuestions (variable qui stocke toutes les posts récupérès) et on les met dans un tableau avec fetch()
        while ($question = $getAllQuestions->fetch()) {
        ?>
            <div class="shadow-green post-margin">
                <div class="block-subject show-content neumorph-subject column centerJust">

                    <div class="title-subject">
                        <h5>
                            <a class="a-subject" href="../tutoForum/AAG-article.php?id=<?= $question['id']; ?>"><?= $question['titre']; ?></a>
                        </h5>
                    </div>

                    <div class="description-subject">
                        <p>Description : <?= $question['description']; ?></p>
                    </div>

                    <div class="authorDate-subject">
                        <p>Publié par <a class="a-auteur" href="../tutoForum/AACA-publicProfil.php?id=<?= $question['id_auteur']; ?>"><?= $question['pseudo_auteur']; ?></a><?= ' le ' . $question['date_publication']; ?></p>
                    </div>

                </div>
            </div>


        <?php
        }
        ?>

    </section>
</main>

<div class="return-btn">
    <a class="a-btn" href="#header">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-square btn-arrow" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 9.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
        </svg>
    </a>
</div>

<?php include '../tutoForum/includes/footer.php'; ?>