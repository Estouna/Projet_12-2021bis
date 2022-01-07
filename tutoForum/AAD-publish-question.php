<?php
require('../tutoForum/actions/users/securityAction.php');
require('../tutoForum/actions/questions/AAD-publish-questionAction.php');
include('../tutoForum/includes/head.php');
?>


<main class="column centerAlign">
<?php include '../tutoForum/includes/navbar.php'; ?>

    <form id="formTextarea" method="POST" class="form column centerJust centerAlign">
        <div class="row centerJust margTop margBottom">
            <legend>Publier une question</legend>
        </div>
        <div class="column centerJust">
            <label for="title">Titre de la question</label>
            <input class="textTitle" name="title">
        </div>
        <div class="column centerJust">
            <label for="description">Description de la question</label>
            <textarea class="textareaDescription" name="description"></textarea>
        </div>
        <div class="column centerJust">
            <label for="content">Contenu de la question</label>
            <textarea class="textareaContent" name="content"></textarea>
        </div>
        <div class="row gap centerJust centerAlign">
            <input id="publier" class="btn-green" type="submit" name="validate" value="PUBLIER">
            <a class="a-return a-links" href="../tutoForum/AAE-my-questions.php">Retour</a>
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
</main>
<?php include '../tutoForum/includes/footer.php'; ?>