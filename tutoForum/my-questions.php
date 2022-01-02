<?php
require('actions/users/securityAction.php');
require('actions/questions/my-questionsAction.php');
include 'includes/header.php';
?>

<body>
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
                        <p class="p-auteur">Auteur : <?= $question['pseudo_auteur'] ?></p>
                        <p class="p-date">le <?= $question['date_publication'] ?></p>
                    </div>
                    <div class="row centerAlign centerJust">
                        <a class="link-acceder" href="#">Afficher</a>
                        <a class="link-modifier" href="edit-question.php?id=<?= $question['id'] ?>">Modifier</a>
                        <a class="link-supprimer" href="actions/questions/deleteQuestionAction.php?id=<?= $question['id'] ?>">Supprimer</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>


    </main>
</body>

</html>