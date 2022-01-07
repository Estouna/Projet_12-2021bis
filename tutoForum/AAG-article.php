<?php
session_start();
require('../tutoForum/actions/questions/AAG-showArticleContentAction.php');
require('../tutoForum/actions/questions/postAnswerAction.php');
require('../tutoForum/actions/questions/showAllAnswersOfQuestionAction.php');
include '../tutoForum/includes/head.php';
?>

<main class="column centerAlign">
    <?php include '../tutoForum/includes/navbar.php'; ?>


    <?php
    if (isset($question_publication_date)) {

        if (isset($_SESSION['auth'])) {
    ?>


            <div class="block-post show-content column centerJust">
                <div class="title-post">
                    <h5><?= $question_title; ?></h5>
                </div>
                <div class="content-post">
                    <p><?= $question_content ?></p>
                </div>
                <div class="authorDate-post">
                    <p>Publié par <?= $question_pseudo_author . ' le ' . $question_publication_date ?></p>
                </div>

            </div>

            <form method="POST" class="form-show-answers block-post column centerJust centerAlign">

                <div class="answerTextarea column">
                    <label class="label-answer">Réponse</label>
                    <textarea name="answer" class="textarea-show-answers"></textarea>
                </div>

                <div class="answerButton row centerJust centerAlign">
                    <button class="btn-green" type="submit" name="validate">REPONDRE</button>
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
            </form>
            <?php
            while ($answer = $getAllAnswersOfThisQuestion->fetch()) {
            ?>
                <div class="block-post show-content column centerJust">
                    <div class="title-post">
                        <h5><?= $answer['pseudo_auteur']; ?></h5>
                    </div>
                    <div class="content-post">
                        <p><?= $answer['contenu']; ?></p>
                    </div>
                    <div class="authorDate-post">
                        <p>Publié par <?= $answer['pseudo_auteur'] . ' le ' . $answer['date_publication'] ?></p>
                    </div>

                </div>
            <?php
            }
        } else {
            ?>

            <div class="block-post show-content column centerJust">
                <div class="title-post">
                    <h5><?= $question_title; ?></h5>
                </div>
                <div class="content-post">
                    <p><?= $question_content ?></p>
                </div>
                <div class="authorDate-post">
                    <p>Publié par <?= $question_pseudo_author . ' le ' . $question_publication_date ?></p>
                </div>

            </div>

    <?php
        }
    }
    ?>






</main>
<?php include '../tutoForum/includes/footer.php'; ?>