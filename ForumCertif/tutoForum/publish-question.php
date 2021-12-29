<?php
require('actions/securityAction.php');
include 'includes/head.php';
include 'includes/navbar.php';
?>

<body>

    <h1>Inscription</h1>
    <form method="POST" class="column centerJust centerAlign">


        <div class="column centerJust margTop margBottom">
            <label for="pseudo">Titre de la question</label>
            <input type="text" name="title">
        </div>
        <div class="column centerJust margTop margBottom">
            <label for="lastname">Description de la question</label>
            <input type="text" name="lastname">
        </div>
        <div class="column centerJust margTop margBottom">
            <label for="firstname">Contenu de la question</label>
            <input type="text" name="firstname">
        </div>
        <div class="column centerJust margTop margBottom">
            <label for="password">Mot de passe</label>
            <input type="password" name="password">
        </div>
        <div class="margTop margBottom">
            <button type="submit" name="validate">S'inscrire</button>
        </div>
        <a href="login.php">J'ai déjà un compte</a>
        <?php
        if (isset($errorMsg)) {
            echo '<p>' . $errorMsg . '</p>';
        }
        ?>

    </form>

</body>

</html>