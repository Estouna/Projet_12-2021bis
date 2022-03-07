<?php
require('actions-admin/AA-adminSecurityAction.php');
require('actions-admin/AB-adminProfilAction.php');
require('actions-admin/CB-edit-questionsMembersAction.php');
require('actions-admin/CC-getInfosOfEditedQuestionAction.php');
require('../functions/url_custom_encode.php');
include '../includes/head.php';
?>

<main class="column centerAlign">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include 'includes-admin/navbar-admin.php'; ?>

    <section class="section-center column centerAlign centerJust">



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
                        <label for="title">Titre du sujet</label>
                        <input class="textTitle neumorph-btn" name="title" value="<?= $question_title; ?>">
                    </div>

                    <div class="column">
                        <label for="description">Description du sujet</label>
                        <textarea class="textareaDescription neumorph-btn" name="description"><?= $question_description; ?></textarea>
                    </div>

                    <div class="column">
                        <label for="content">Contenu du sujet</label>
                        <textarea class="textareaContent neumorph-btn" name="content"><?= $question_content ?></textarea>
                    </div>
                </div>

                <div class="row gap centerJust centerAlign">
                    <a class="btn-afficher btn-green neumorph-btn row centerJust centerAlign" href="../CD-f-show-topics.php?titre=<?= url_custom_encode($question_title) ?>&id=<?= $_GET['id']; ?>">AFFICHER</a>
                    <input class="btn-modifier btn-green neumorph-btn" type="submit" name="validate" value="MODIFIER">
                    <a class="btn-effacer row centerJust centerAlign" onclick='return confirm(" Cette action est irréversible, êtes-vous sûr ? ")' href="actions-admin/CD-deleteQuestionAction.php?id=<?= $_GET['id']; ?>">EFFACER</a>
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

    </section>
</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../includes/footer.php'; ?>