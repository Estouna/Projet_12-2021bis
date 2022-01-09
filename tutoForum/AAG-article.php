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
                    <p>Publié par <?= '<a class="a-auteur" href="../tutoForum/profil2.php?id=' . $question_id_author . '">' . $question_pseudo_author . '</a> le ' . $question_publication_date; ?></p>
                </div>

            </div>

            <form method="POST" class="shadow-green column centerJust centerAlign post-margin">

                <div class="neumorph-form formAnswer">

                    <div class="column centerJust centerAlign">
                        <div class="column centerJust">
                            <label class="label-answer">Réponse</label>
                            <textarea name="answer" class="textareaContent neumorph-btn"></textarea>
                        </div>
                    </div>

                    <div class="answerButton row centerJust centerAlign">
                        <button class="btn-green neumorph-btn" type="submit" name="validate">REPONDRE</button>
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
            while ($answer = $getAllAnswersOfThisQuestion->fetch()) {
            ?>
                <div class="block-post show-content column centerJust post-margin">
                    <div class="title-post">
                        <h5>
                            <a class="a-title-post" href="../tutoForum/profil2.php?id=<?= $answer['id_auteur']; ?>"><?= $answer['pseudo_auteur']; ?></a>
                        </h5>
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
            ?>
        <?php
        } else {
        ?>

            <div class="block-post show-content column centerJust post-margin">
                <div class="title-post">
                    <h5><?= $question_title; ?></h5>
                </div>
                <div class="content-post">
                    <p><?= $question_content ?></p>
                </div>
                <div class="authorDate-post">
                    <p>Publié par <?= '<a class="a-auteur" href="../tutoForum/profil2.php?id=' . $question_id_author . '">' . $question_pseudo_author . '</a> le ' . $question_publication_date; ?></p>
                </div>

            </div>

            <?php
            while ($answer = $getAllAnswersOfThisQuestion->fetch()) {
            ?>
                <div class="block-post show-content column centerJust post-margin">
                    <div class="title-post">
                        <h5>
                            <a class="a-title-post" href="../tutoForum/profil2.php?id=<?= $answer['id_auteur']; ?>"><?= $answer['pseudo_auteur']; ?></a>
                        </h5>
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
        }
    }
    ?>






</main>
<?php include '../tutoForum/includes/footer.php'; ?>