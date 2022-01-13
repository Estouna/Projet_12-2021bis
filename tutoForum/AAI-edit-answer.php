<?php
require('../tutoForum/actions/users/securityAction.php');
require('../tutoForum/actions/post/getInfosOfEditedAnswerAction.php');
require('../tutoForum/actions/post/editAnswersAction.php');
include '../tutoForum/includes/head.php';
?>



<main class="column centerAlign">
    <?php include '../tutoForum/includes/navbar.php'; ?>

    <section class="section-center column centerJust centerAlign">
        <?php
        if (isset($answer_content)) {
        ?>
            <form method="POST" class="shadow-green column centerJust centerAlign">

                <div class="neumorph-form formTextarea form">
                    <div class="column centerJust centerAlign">
                        <div class="row centerJust">
                            <legend>Modifier un commentaire</legend>
                        </div>

                        <div class="column centerJust">
                            <label for="content">Contenu de la réponse</label>
                            <textarea class="textareaContent neumorph-btn" name="content"><?= $answer_content ?></textarea>
                        </div>
                    </div>

                    <div class="row gap centerJust centerAlign">
                        <input id="modifier" class="btn-green neumorph-btn" type="submit" name="validate" value="MODIFIER">
                        <a class="a-links" href="../tutoForum/AAI-my-answers.php">Retour</a>
                    </div>

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

                </div>

            </form>
        <?php
        }
        ?>

    </section>
</main>
<?php include '../tutoForum/includes/footer.php'; ?>