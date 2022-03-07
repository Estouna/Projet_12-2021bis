<?php
require('actions-admin/AA-adminSecurityAction.php');
require('actions-admin/AB-adminProfilAction.php');
require('actions-admin/CD-edit-answersMembersAction.php');
require('actions-admin/CE-getInfosOfEditedAnswerAction.php');
require('../functions/url_custom_encode.php');
require('actions-admin/CF-showTitleTopic-answer.php');
include '../includes/head.php';
?>


<main class="column centerAlign">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include 'includes-admin/navbar-admin.php'; ?>

    <section class="section-center column centerJust centerAlign">
        <?php
        if (isset($answer_content)) {
        ?>
            <form method="POST" class="shadow-green column centerJust centerAlign">

                <div class="neumorph-form formTextarea form">
                    <div class="column centerJust centerAlign">
                        <!-- 
                            ------------------------------ PAGE TITLE ------------------------------
                        -->
                        <div class="row centerJust margB-s">
                            <legend class="legendMofifPost">Modifier le commentaire</legend>
                        </div>
                        <p class="p-dateEditAnswer">Date de publication : <?= $title['date_publication'] ?>

                        <div class="column centerJust margT-s">
                            <label for="content">Contenu du commentaire</label>
                            <textarea class="textareaContent neumorph-btn" name="content"><?= $answer_content ?></textarea>
                        </div>
                    </div>

                    <div class="row gap centerJust centerAlign">
                        <a class="btn-afficher btn-green neumorph-btn row centerJust centerAlign" href="../CD-f-show-topics.php?titre=<?= url_custom_encode($title['titre']) ?>&id=<?= $title['id_question']; ?>">AFFICHER</a>
                        <input id="modifier" class="btn-modifier btn-green neumorph-btn" type="submit" name="validate" value="MODIFIER">
                        <a class="btn-effacer row centerJust centerAlign" onclick='return confirm(" Cette action est irréversible, êtes-vous sûr ? ")' href="actions-admin/CE-deleteAnswerAction.php?id=<?= $_GET["id"] ?>">EFFACER</a>
                    </div>
                    <div class="row centerJust">
                        <a class="a-links-editTopic" href="home-admin.php">Retour</a>
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
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../includes/footer.php'; ?>