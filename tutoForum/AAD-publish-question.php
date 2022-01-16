<?php
require('../tutoForum/actions/users/securityAction.php');
require('../tutoForum/actions/topic/AAD-publish-questionAction.php');
include('../tutoForum/includes/head.php');
?>


<main class="column centerAlign">
    <?php include '../tutoForum/includes/navbar.php'; ?>
    <section class="section-center row centerJust centerAlign">
        <form method="POST" class="shadow-green column centerJust centerAlign">

            <div class="neumorph-form formTextarea form">

                <div class="column centerJust centerAlign">
                    <div class="row centerJust">
                        <legend>Publier un sujet</legend>
                    </div>

                    <div class="column">
                        <label for="title">Titre du sujet</label>
                        <input class="textTitle neumorph-btn" name="title">
                    </div>

                    <div class="column">
                        <label for="description">Description du sujet</label>
                        <textarea class="textareaDescription neumorph-btn" name="description"></textarea>
                    </div>

                    <div class="column">
                        <label for="content">Contenu du sujet</label>
                        <textarea class="textareaContent neumorph-btn" name="content"></textarea>
                    </div>
                </div>

                <div class="row gap centerAll">
                    <input id="publier" class="btn-green neumorph-btn" type="submit" name="validate" value="PUBLIER">
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
    </section>
    </form>
</main>
<?php include '../tutoForum/includes/footer.php'; ?>