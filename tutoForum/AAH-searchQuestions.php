<?php
session_start();
require('../tutoForum/actions/topic/AAH-showSearchQuestionsAction.php');
require('../tutoForum/functions/url_custom_encode.php');
include '../tutoForum/includes/head.php';
?>


<!-- En appuyant sur rechercher on verra dans l'URL ?search=mot entré avec des + entre les mots -->
<main class="column centerAlign">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar-green.php'; ?>

    <section class="section-center column centerAlign">

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
                            <a class="a-subject" href="../tutoForum/CD-f-show-topics.php?titre=<?= url_custom_encode($question['titre']) ?>&id=<?= $question['id']; ?>"><?= $question['titre']; ?></a>
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

    <a class="return-btn column centerAll" href="#header">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up btn-arrow" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
        </svg>
    </a>

</main>

<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../tutoForum/includes/footer.php'; ?>