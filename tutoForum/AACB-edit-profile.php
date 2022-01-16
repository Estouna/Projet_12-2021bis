<?php
require('../tutoForum/actions/users/securityAction.php');
require('actions/users/AACB-edit-profileAction.php');
include '../tutoForum/includes/head.php';
?>

<main class="column centerAlign">
    <?php include '../tutoForum/includes/navbar.php'; ?>

    <section class="section-center column centerAlign centerJust">



        <form action="" method="POST" class="blockProfil row centerJust">

            <div class="container column centerJust centerAlign">

                <div class="row">
                    <legend>Modifier mon profil</legend>
                </div>

                <div class="column">

                    <div class="column centerAlign">
                        <P class="p-pseudoMailEdit">Votre pseudo actuel</P>
                        <span class="name-EditProfil"><?php echo $user['pseudo']; ?></span>
                        <p class="p-pseudoMailEdit">Votre mail actuel</p>
                        <span class="email-EditProfil"><?php echo $user['mail']; ?></span>
                    </div>

                    <div class="flex wrap-edit">

                        <div class="labelInput-edit column">
                            <label class="labelProfil-edit" for="newPseudo">Modifier mon pseudo</label>
                            <input type="text" class="inputProfil-edit neumorph-btn" name="newPseudo" id="newPseudo" placeholder="Pseudo" />
                        </div>

                        <div class="labelInput-edit column centerJust">
                            <div class="column">
                                <label class="labelProfil-edit" for="newMail">Modifier mon email :</label>
                                <input type="email" class="inputProfil-edit neumorph-btn" name="newMail" id="newMail" placeholder="laurent@gmail.com" />
                            </div>

                            <div class="column">
                                <label class="labelProfil-edit" for="newMail2">Confirmation de l'email:</label>
                                <input type="email" class="inputProfil-edit neumorph-btn" name="newMail2" id="newMail2" placeholder="Confirmation de l'email" />
                            </div>
                        </div>


                        <div class="labelInput-edit column centerJust">
                            <div class="column">
                                <label class="labelProfil-edit" for="newPassword">Modifier mon mot de passe :</label>
                                <input type="password" class="inputProfil-edit neumorph-btn" name="newPassword" id="newPassword" placeholder="Mot de passe" />
                            </div>

                            <div class="column">
                                <label class="labelProfil-edit" for="newPassword2">Confirmation du mot de passe:</label>
                                <input type="password" class="inputProfil-edit neumorph-btn" name="newPassword2" id="newPassword2" placeholder="Confirmation du mot de passe" />
                            </div>
                        </div>

                    </div>

                </div>

                <div>
                    <div class="row gap centerAll">
                        <input id="updateProfil" class="btn-green neumorph-btn" name="updateProfil" type="submit" value="MODIFIER" />
                        <a class="a-links" href="../tutoForum//AAC-profil.php">Retour</a>
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