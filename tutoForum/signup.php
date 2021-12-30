<?php
require 'actions/signupAction.php';
include 'includes/head.php';
include 'includes/navbar.php';
?>

<body class="column centerJust centerAlign">

    <form method="POST" id="formSignUp" class="column">

        <div class="container column">
            <div class="bloc-form column">

                <div class="row centerJust margTop margBottom">
                    <legend>Formulaire d'inscription</legend>
                </div>

                <div class="column centerH centerV">
                    <div class="column margTop margBottom">
                        <label for="pseudo">Nom d'utilisateur :</label>
                        <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" value="<?php if (isset($user_pseudo)) {
                                                                                                        echo $user_pseudo;
                                                                                                    } ?>" />
                    </div>
                    <div class="column margTop margBottom">
                        <label for="mail">Email :</label>
                        <input type="email" name="mail" id="mail" placeholder="laurent@gmail.com" value="<?php if (isset($user_email)) {
                                                                                                                echo $user_email;
                                                                                                            } ?>" />
                    </div>
                    <div class="column margTop margBottom">
                        <label for="mail2">Confirmation de l'email :</label>
                        <input type="email" name="mail2" id="mail2" placeholder="laurent@gmail.com" value="<?php if (isset($user_email2)) {
                                                                                                                echo $user_email2;
                                                                                                            } ?>" />
                    </div>
                    <div class="column margTop margBottom">
                        <label for="password">Mot de passe :</label>
                        <input type="password" name="password" id="password" placeholder="Mot de passe" />
                    </div>
                    <div class="column margTop margBottom">
                        <label for="password2">Confirmation du mot de passe :</label>
                        <input type="password" name="password2" id="password2" placeholder="Confirmation du mot de passe" />
                    </div>
                </div>

                <div class="column centerJust centerAlign margTop margBottom">
                    <input id="validate" name="validate" type="submit" value="Envoyer" />
                    <a href="login.php">J'ai déjà un compte</a>
                </div>
            </div>
        </div>

        <div class="message row centerJust centerAlign">
            <?php
            if (isset($erreur)) {
                echo '<span class="red">' . $erreur . "</span>";
            }
            if (isset($valide)) {
                echo '<span class="green">' . $valide . "</span>";
            }
            ?>
        </div>
    </form>


</body>

</html>