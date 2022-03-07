<?php
require('actions-admin/AA-adminSecurityAction.php');
require('actions-admin/CA-edit-profilMemberAction.php');
include '../includes/head.php';
?>

<main class="column centerAlign">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include 'includes-admin/navbar-admin.php'; ?>

    <section class="section-center column centerAlign centerJust">


        <div class="blockProfil blockProfilMember column centerAll">
            <!-- 
                ------------------------------ PAGE TITLE ------------------------------
            -->
            <div class="row margT-s margB-m">
                <legend>Modifier le profil</legend>
            </div>

            <div class="block_forms column centerAll">

                <form action="" method="POST" class="form_pseudo column centerAll">

                    <div class="container column centerJust centerAlign">

                        <div class="column centerAll">

                            <div class="row centerAll">
                                <div class="column centerAll margL-s margR-s">
                                    <P class="p-pseudoMailEdit">Pseudo actuel</P>
                                    <span class="name-EditProfil"><?= $user['pseudo']; ?></span>
                                </div>
                                <div class="column centerAll margL-s margR-s">
                                    <p class="p-pseudoMailEdit">Adresse mail</p>
                                    <span class="email-EditProfil"><?= $user['mail']; ?></span>
                                </div>
                                <div class="column centerAll margL-s margR-s">
                                    <p class="p-pseudoMailEdit">Rôle actuel</p>
                                    <span class="email-EditProfil"><?= $user['roles'] ?></span>
                                </div>
                            </div>

                            <div class="labelInput-edit column margT-m">
                                <label class="labelProfil-edit" for="newPseudoMember">Modifier le pseudo</label>
                                <input type="text" class="inputProfil-edit neumorph-btn" name="newPseudoMember" id="newPseudo" placeholder="Pseudo" />
                            </div>

                        </div>

                        <div>
                            <div class="row gap centerAll margL-s margT-m margB-m">
                                <input id="updateProfil" class="btn-green2 neumorph-btn" name="updateProfil" type="submit" value="MODIFIER" />
                                <a class="a-links" href="home-admin.php">Retour</a>
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

                <form action="" method="POST" class="form_role">

                    <div class="row centerAll">

                        <div class="block-role margR-s">
                            <div class="row centerAll">
                                <?php if ($user['roles'] === "MODERATEUR") { ?>
                                    <div>
                                        <input type="checkbox" id="checkbox_membre" name="checkbox_membre" value="membre">
                                        <label class="label-role" for="checkbox_membre">Membre</label>
                                    </div>
                                <?php } ?>
                                <?php if ($user['roles'] === "membre") { ?>
                                    <div>
                                        <input type="checkbox" id="checkbox_moderateur" name="checkbox_moderateur" value="MODERATEUR">
                                        <label class="label-role" for="checkbox_moderateur">Modérateur</label>
                                    </div>
                                <?php } ?>

                                <div class="row centerAll margL-s">
                                    <input id="updateRole" class="btn-modifRole" name="updateRole" type="submit" value="Modifier" />
                                </div>
                            </div>
                        </div>

                        <div class="block-banish margL-m">
                            <div class="blockBtn-banish row centerJust">
                                <a class="row centerAll btn-banish" onclick='return confirm(" Cette action est irréversible, êtes-vous sûr ? ")' href="actions-admin/CAB-banishUser.php?id=<?= $user['id']; ?>">Bannir</a>
                            </div>
                        </div>

                    </div>

                </form>
            </div>
        </div>

    </section>
</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../includes/footer.php'; ?>