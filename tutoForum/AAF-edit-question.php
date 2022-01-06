<?php
require('actions/users/securityAction.php');
require('actions/questions/AAF-getInfosOfEditedQuestionAction.php');
require('actions/questions/AAF-edit-questionsAction.php');
include 'includes/header.php';
include 'includes/footer.php';
?>



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
                <input class="textTitle input-form" name="title" value="<?= $question_title; ?>">
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
                <input id="modifier" class="btn-green" type="submit" name="validate" value="MODIFIER">
                <a class="a-return a-links" href="AAE-my-questions.php">Retour</a>
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