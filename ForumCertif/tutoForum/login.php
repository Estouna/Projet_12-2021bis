<?php
require('actions/loginAction.php');
include 'includes/head.php';
include 'includes/navbar.php';
?>

<body>
    <h1>Connexion</h1>
    <form method="POST" class="column centerJust centerAlign">


        <div class="column centerJust margTop margBottom">
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo">
        </div>
        <div class="column centerJust margTop margBottom">
            <label for="password">Mot de passe</label>
            <input type="password" name="password">
        </div>
        <div class="margTop margBottom">
            <button type="submit" name="validate">Se connecter</button>
        </div>
        <a href="signup.php">S'incrire</a>

        <?php
        if (isset($errorMsg)) {
            echo '<p>' . $errorMsg . '</p>';
        }
        ?>

    </form>



</body>

</html>