<?php
require 'actions/users/signupAction.php';
include 'includes/header.php';
include 'includes/footer.php';
?>


<main class="column centerJust centerAlign">

    <form method="POST" id="formSignUp" class="column centerJust centerAlign">

        <div class="container column">
            <div class="bloc-form column">

                <div class="row centerJust">
                    <legend>Inscription</legend>
                </div>

                <div class="column">
                    <div class="labelInput column">
                        <label for="pseudo">Nom d'utilisateur :</label>
                        <input type="text" name="pseudo" id="pseudo" class="input-form" placeholder="Pseudo" value="<?php if (isset($user_pseudo)) {
                                                                                                                        echo $user_pseudo;
                                                                                                                    } ?>" />
                    </div>
                    <div class="labelInput column">
                        <label for="mail">Email :</label>
                        <input type="email" name="mail" id="mail" class="input-form" placeholder="laurent@gmail.com" value="<?php if (isset($user_email)) {
                                                                                                                                echo $user_email;
                                                                                                                            } ?>" />
                    </div>
                    <div class="labelInput column">
                        <label for="mail2">Confirmation de l'email :</label>
                        <input type="email" name="mail2" id="mail2" class="input-form" placeholder="laurent@gmail.com" value="<?php if (isset($user_email2)) {
                                                                                                                                    echo $user_email2;
                                                                                                                                } ?>" />
                    </div>
                    <div class="labelInput column">
                        <label for="password">Mot de passe :</label>
                        <input type="password" name="password" id="password" class="input-form" placeholder="Mot de passe" />
                    </div>
                    <div class="labelInput column">
                        <label for="password2">Confirmation du mot de passe :</label>
                        <input type="password" name="password2" id="password2" class="input-form" placeholder="Confirmation du mot de passe" />
                    </div>
                </div>

                <div class="labelInput column centerJust centerAlign">
                    <input id="signup" class="btn-green" name="validate" type="submit" value="ENVOYER" />
                    <a class="a-login a-links" href="AAB-login.php">J'ai déjà un compte</a>
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

</main>