<?php
session_start();
require('actions/questions/showSearchQuestionsAction.php');
include 'includes/header.php';
include 'includes/footer.php';
?>


<!-- En appuyant sur rechercher on verra dans l'URL ?search=mot entré avec des + entre les mots -->
<main class="column centerAlign">

    <div>
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
            <div class="row centerJust centerAlign">

                <div class="blockModifQuestion column">

                    <h5 class="titleQuestion">
                        <a class="a-post" href="AAG-article.php?id=<?= $question['id']; ?>"><?= $question['titre']; ?></a>
                    </h5>

                    <div class="bodyQuestion">
                        <p class="p-decription">Description : <?= $question['description']; ?></p>
                        <div class="card-footer row gap">
                            <p class="p-auteur">Publier par <?= $question['pseudo_auteur']; ?></p>
                            <p class="p-date">le <?= $question['date_publication']; ?></p>
                        </div>
                    </div>

                </div>
            </div>
        <?php
        }
        ?>
    </div>

</main>