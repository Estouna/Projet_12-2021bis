<?php
require('actions/questions/publish-questionAction.php');
require('actions/users/securityAction.php');
include('includes/header.php');
?>

<body>
    <main class="column centerJust centerAlign">

        <form method="POST" class="column centerJust centerAlign">
            <div class="row centerJust margTop margBottom">
                <legend>Question</legend>
            </div>
            <div class="column centerJust">
                <label for="pseudo">Titre de la question</label>
                <textarea class="textarea1" name="title"></textarea>
            </div>
            <div class="column centerJust">
                <label for="lastname">Description de la question</label>
                <textarea class="textarea2" name="description"></textarea>
            </div>
            <div class="column centerJust">
                <label for="firstname">Contenu de la question</label>
                <textarea class="textarea3" name="content"></textarea>
            </div>
            <div>
                <button id="question" type="submit" name="validate">Publier</button>
                <li><a href="my-questions.php">Modifier mes questions</a></li>
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