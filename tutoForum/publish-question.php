<?php
require('actions/users/securityAction.php');
require('actions/questions/publish-questionAction.php');
include('includes/header.php');
?>

<body>
    <main class="column centerJust centerAlign">

        <form id="formTextarea" method="POST" class="column centerJust centerAlign">
            <div class="row centerJust margTop margBottom">
                <legend>Publier une question</legend>
            </div>
            <div class="column centerJust">
                <label for="title">Titre de la question</label>
                <input class="textTitle" name="title">
            </div>
            <div class="column centerJust">
                <label for="description">Description de la question</label>
                <textarea class="textarea2" name="description"></textarea>
            </div>
            <div class="column centerJust">
                <label for="content">Contenu de la question</label>
                <textarea class="textarea3" name="content"></textarea>
            </div>
            <div class="row gap centerJust centerAlign">
                <input id="question" type="submit" name="validate" value="Publier">
                <a class="a-modif" href="my-questions.php">Afficher mes questions</a>
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
</body>

</html>