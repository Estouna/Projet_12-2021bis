<?php
require('actions/users/securityAction.php');
require('actions/questions/getInfosOfEditedQuestionAction.php');
require('actions/questions/edit-questionsAction.php');
include 'includes/header.php';
?>


<body>
    <main class="column centerJust centerAlign">

        <?php
        if (isset($question_content)) {
        ?>
            <form id="formTextarea" method="POST" class="column centerJust centerAlign">
                <div class="row centerJust margTop margBottom">
                    <legend>Modifier une question</legend>
                </div>
                <div class="column centerJust">
                    <label for="title">Titre de la question</label>
                    <input class="textTitle" name="title" value="<?= $question_title; ?>">
                </div>
                <div class="column centerJust">
                    <label for="description">Description de la question</label>
                    <textarea class="textareaDescription" name="description"><?= $question_description; ?></textarea>
                </div>
                <div class="column centerJust">
                    <label for="content">Contenu de la question</label>
                    <textarea class="textareaContent" name="content"><?= $question_content ?></textarea>
                </div>
                <div class="row gap centerJust centerAlign">
                    <input id="question" type="submit" name="validate" value="Modifier">
                    <a class="a-modif" href="my-questions.php">Afficher mes questions</a>
                </div>
            </form>
        <?php
        }
        ?>

        <div class="message row centerJust centerAlign">
            <?php
            if (isset($erreur)) {
                echo '<div class="block-mess"><span class="red">' . $erreur . "</span></div>";
            }
            if (isset($valide)) {
                echo '<span class="green">' . $valide . "</span>";
            }

            ?>
        </div>

    </main>
</body>

</html>