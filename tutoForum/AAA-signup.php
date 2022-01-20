<?php
require '../tutoForum/actions/users/AAA-signupAction.php';
include '../tutoForum/includes/head.php';
?>


<main class="column centerAlign">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar.php'; ?>
    <section class="section-center row centerAll">

        <!-- 
            ------------------------------ REGISTRATION FORM ------------------------------
        -->
        <form method="POST" class="shadow-green column centerJust centerAlign">

            <div class="neumorph-form form">

                <div class="column centerJust centerAlign">
                    <!-- 
                         ------------------------------ PAGE TITLE ------------------------------
                     -->
                    <div class="row centerJust">
                        <legend>Inscription</legend>
                    </div>

                    <div class="column centerJust centerAlign">
                        <!-- 
                            ------------------------------ PSEUDO ------------------------------
                        -->
                        <div class="labelInput column">
                            <label for="pseudo">Nom d'utilisateur :</label>
                            <input type="text" name="pseudo" id="pseudo" class="input-form neumorph-btn" placeholder="Pseudo" value="<?php if (isset($user_pseudo)) {
                                                                                                                                            echo $user_pseudo;
                                                                                                                                        } ?>" />
                        </div>
                        <!-- 
                            ------------------------------ MAIL ------------------------------
                        -->
                        <div class="labelInput column">
                            <label for="mail">Email :</label>
                            <input type="email" name="mail" id="mail" class="input-form neumorph-btn" placeholder="laurent@gmail.com" value="<?php if (isset($user_email)) {
                                                                                                                                                    echo $user_email;
                                                                                                                                                } ?>" />
                        </div>
                        <!-- 
                            ------------------------------ MAIL CONFIRMATION ------------------------------
                        -->
                        <div class="labelInput column">
                            <label for="mail2">Confirmation de l'email :</label>
                            <input type="email" name="mail2" id="mail2" class="input-form neumorph-btn" placeholder="laurent@gmail.com" value="<?php if (isset($user_email2)) {
                                                                                                                                                    echo $user_email2;
                                                                                                                                                } ?>" />
                        </div>
                        <!-- 
                            ------------------------------ PASSWORD ------------------------------
                        -->
                        <div class="labelInput column">
                            <label for="password">Mot de passe :</label>
                            <input type="password" name="password" id="password" class="input-form neumorph-btn" placeholder="Mot de passe" />
                        </div>
                        <!-- 
                            ------------------------------ PASSWORD CONFIRMATION ------------------------------
                        -->
                        <div class="labelInput column">
                            <label for="password2">Confirmation du mot de passe :</label>
                            <input type="password" name="password2" id="password2" class="input-form neumorph-btn" placeholder="Confirmation du mot de passe" />
                        </div>
                    </div>
                    <!-- 
                        ------------------------------ BTN SUBMIT ------------------------------
                    -->
                    <div class="column centerJust centerAlign">
                        <input id="signup" class="btn-green neumorph-btn" name="validate" type="submit" value="ENVOYER" />
                        <a class="a-links" href="../tutoForum/AAB-login.php">J'ai déjà un compte</a>
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
            </div>

        </form>
    </section>
</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../tutoForum/includes/footer.php'; ?>