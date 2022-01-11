<?php
require('../tutoForum/actions/users/securityAction.php');
require('../tutoForum/actions/questions/AAD-publish-questionAction.php');
include('../tutoForum/includes/head.php');
?>


<main class="column centerAlign">
    <?php include '../tutoForum/includes/navbar.php'; ?>
    <section class="section-center row centerJust centerAlign">
        <form method="POST" class="shadow-green column centerJust centerAlign">

            <div class="neumorph-form formTextarea form">

                <div class="column centerJust centerAlign">
                    <div class="row centerJust">
                        <legend>Publier une question</legend>
                    </div>

                    <div class="column">
                        <label for="title">Titre de la question</label>
                        <input class="textTitle neumorph-btn" name="title">
                    </div>

                    <div class="column">
                        <label for="description">Description de la question</label>
                        <textarea class="textareaDescription neumorph-btn" name="description"></textarea>
                    </div>

                    <div class="column">
                        <label for="content">Contenu de la question</label>
                        <textarea class="textareaContent neumorph-btn" name="content"></textarea>
                    </div>
                </div>

                <div class="row gap centerJust centerAlign">
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