<?php
require('actions/users/loginAction.php');
include 'includes/header.php';
?>

<body>
    <main class="column centerJust centerAlign">

        <form action="" method="POST" class="formLogin column centerJust centerAlign">

            <div class="container column">
                <div class="bloc-form column">
                    <div class="row centerJust">
                        <legend>Connexion</legend>
                    </div>
                    <div class="column">
                        <div class="labelInput column">
                            <label for="mailConnect">Email :</label>
                            <input type="email" class="input-form" name="mailConnect" placeholder="Email">
                        </div>
                        <div class="labelInput column">
                            <label for="passwordConnect">Mot de passe :</label>
                            <input type="password" class="input-form" name="passwordConnect" placeholder="Mot de passe">
                        </div>
                        <div class="labelInput column centerJust centerAlign">
                            <input id="connect" class="btn-green" type="submit" name="validate" value="SE CONNECTER">
                            <a class="a-signup" href="AAA-signup.php">Pas encore de compte ? S'incrire</a>
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

    </main>
</body>

</html>