<?php
require('../tutoForum/actions/users/securityAction.php');
require('actions/users/AACB-edit-profileAction.php');
include '../tutoForum/includes/head.php';
?>




<main class="column centerAlign">
    <?php include '../tutoForum/includes/navbar.php'; ?>

    <section class="section-center row centerJust centerAlign">

        <form action="" method="POST" class="row centerH centerV">

            <div class="container column centerH centerV">
                <div class="bloc-form column centerH">

                    <div class="row centerH">
                        <legend>Edition de mon profil</legend>
                    </div>

                    <div class="column centerH centerV">
                        <div class="column">
                            <label for="newPseudo">Nom d'utilisateur :</label>
                            <input type="text" name="newPseudo" id="newPseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>" />
                        </div>

                        <div class="column">
                            <label for="newMail">Email :</label>
                            <input type="email" name="newMail" id="newMail" placeholder="laurent@gmail.com" value="<?php echo $user['mail']; ?>" />
                        </div>

                        <div class="column">
                            <label for="newMail2">Confirmation de l'email :</label>
                            <input type="email" name="newMail2" id="newMail2" placeholder="laurent@gmail.com" value="<?php echo $user['mail']; ?>" />
                        </div>


                        <div class="column">
                            <label for="newPassword">Mot de passe :</label>
                            <input type="password" name="newPassword" id="newPassword" placeholder="Mot de passe" />
                        </div>


                        <div class="column">
                            <label for="newPassword2">Confirmation du mot de passe :</label>
                            <input type="password" name="newPassword2" id="newPassword2" placeholder="Confirmation du mot de passe" />
                        </div>
                    </div>

                    <div class="row centerH">
                        <input id="updateProfil" name="updateProfil" type="submit" value="MODIFIER" />
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
            </div>
        </form>

    </section>
</main>
<?php include '../tutoForum/includes/footer.php'; ?>