<?php
session_start();
require('../tutoForum/actions/topic/AAH-showSearchQuestionsAction.php');
include '../tutoForum/includes/head.php';
?>


<!-- En appuyant sur rechercher on verra dans l'URL ?search=mot entré avec des + entre les mots -->
<main class="column centerAlign">
    <?php include '../tutoForum/includes/navbar.php'; ?>

    <section class="section-center column centerJust centerAlign">

        <form method="GET" class="shadow-green row centerJust centerAlign marginSearch">

            <div class="form-search neumorph-form">
                <div class="row centerJust centerAlign">
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

<div>
    <a class="flex centerAll return-btn" href="#header">
        <span class="span-btn">R</span>
        <span class="span-btn">E</span>
        <span class="span-btn">T</span>
        <span class="span-btn">O</span>
        <span class="span-btn">U</span>
        <span class="span-btn">R</span>
    </a>
</div>

<?php include '../tutoForum/includes/footer.php'; ?>