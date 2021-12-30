<?php
require('actions/loginAction.php');
include 'includes/head.php';
include 'includes/navbar.php';
?>

<body class="column centerJust centerAlign">

    <form action="" method="POST" class="formLogin row">

        <div class="container column">
            <div class="bloc-form column">
                <div class="row centerJust margTop margBottom">
                    <legend>Connexion</legend>
                </div>
                <div class="column">
                    <div class="column margTop margBottom">
                        <label for="mailConnect">Email :</label>
                        <input type="email" name="mailConnect" placeholder="Email">
                    </div>
                    <div class="column margTop margBottom">
                        <label for="passwordConnect">Mot de passe :</label>
                        <input type="password" name="passwordConnect" placeholder="Mot de passe">
                    </div>
                    <div class="column centerJust centerAlign margTop margBottom">
                        <input id="seConnecter" type="submit" name="validate" value="Se connecter">
                        <a href="signup.php">S'incrire</a>
                    </div>
                </div>
            </div>
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



</body>

</html>