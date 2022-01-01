<?php
require('actions/questions/my-questionsAction.php');
require('actions/users/securityAction.php');
include 'includes/header.php';
?>

<body>
    <main class="column centerAlign">

        <?php
        while ($question = $getAllMyQuestions->fetch()) {
        ?>
            <h1 class="h1TitleArticles">Articles</h1>
            <div class="blockModifQuestion column">
                <h5 class="titleQuestion">Titre : <?= $question['titre']; ?></h5>
                <div class="bodyQuestion">
                    <p class="p-decription">Description : <?= $question['description'] ?></p>
                    <div class="row gap">
                        <p class="p-auteur">Auteur : <?= $question['pseudo_auteur'] ?></p>
                        <p class="p-date">le <?= $question['date_publication'] ?></p>
                    </div>
                    <div class="row centerAlign centerJust">
                        <a class="link-acceder" href="#">Accéder à la question</a>
                        <a class="link-modifier" href="edit-question.php">Modifier la question</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>


    </main>
</body>

</html>