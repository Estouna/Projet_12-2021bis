<?php
require('../tutoForum/actions/users/securityAction.php');
require('../tutoForum/actions/topic/AAF-getInfosOfEditedQuestionAction.php');
require('../tutoForum/actions/topic/AAF-edit-questionsAction.php');
include '../tutoForum/includes/head.php';
?>



<main class="column centerAlign">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar.php'; ?>

    <section class="section-center column centerJust centerAlign">

        <?php
        if (isset($question_content)) {
        ?>
            <form method="POST" class="shadow-green column centerJust centerAlign">

                <div class="neumorph-form formTextarea form">

                    <div class="column centerJust centerAlign">
                        <!-- 
                            ------------------------------ PAGE TITLE ------------------------------
                        -->
                        <div class="row centerJust">
                            <legend>Modifier un sujet</legend>
                        </div>

                        <div class="column">
                            <label for="title">Titre de la question</label>
                            <input class="textTitle neumorph-btn" name="title" value="<?= $question_title; ?>">
                        </div>

                        <div class="column">
                            <label for="description">Description de la question</label>
                            <textarea class="textareaDescription neumorph-btn" name="description"><?= $question_description; ?></textarea>
                        </div>

                        <div class="column">
                            <label for="content">Contenu de la question</label>
                            <textarea class="textareaContent neumorph-btn" name="content"><?= $question_content ?></textarea>
                        </div>
                    </div>

                    <div class="row gap centerJust centerAlign">
                        <input id="modifier" class="btn-green neumorph-btn" type="submit" name="validate" value="MODIFIER">
                        <a class="a-links" href="../tutoForum/AAE-my-questions.php">Retour</a>
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
    </section>
<?php
        }
?>


</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../tutoForum/includes/footer.php'; ?>