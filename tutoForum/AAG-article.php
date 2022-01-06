<?php
session_start();
require('actions/questions/AAG-showArticleContentAction.php');
include 'includes/header.php';
include 'includes/footer.php';
?>

<main class="column centerJust centerAlign">

    <div class="block-post column centerJust">
        <?php
        if (isset($question_publication_date)) {
        ?>

            <div class="title-post">
                <h3><?= $question_title; ?></h3>
            </div>
            <div class="content-post">
                <p><?= $question_content ?></p>
            </div>
            <div class="authorDate-post">
                <p><?= $question_pseudo_author . ' ' . $question_publication_date ?></p>
            </div>

        <?php
        }
        ?>
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


</main>