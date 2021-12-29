<?php
include 'includes/head.php';
require 'actions/signupAction.php';
?>

<body class="row centerJust centerAlign">

    <form method="POST" class="column centerJust centerAlign">


        <div class="column centerJust margTop margBottom">
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo">
        </div>
        <div class="column centerJust margTop margBottom">
            <label for="lastname">Nom</label>
            <input type="text" name="lastname">
        </div>
        <div class="column centerJust margTop margBottom">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname">
        </div>
        <div class="column centerJust margTop margBottom">
            <label for="password">Mot de passe</label>
            <input type="password" name="password">
        </div>
        <div class="margTop margBottom">
            <button type="submit" name="validate">S'inscrire</button>
        </div>

        <?php
        if (isset($errorMsg)) {
            echo '<p>' . $errorMsg . '</p>';
        }
        ?>

    </form>

</body>

</html>