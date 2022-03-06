<?php
require('actions-admin/AA-adminSecurityAction.php');
require('actions-admin/CA-edit-profilMemberAction.php');
include '../includes/head.php';
?>

<main class="column centerAlign">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include 'includes-admin/navbar-admin.php'; ?>

    <section class="section-center column centerAlign centerJust">


        <div class="blockProfil blockProfilMember">


            <form action="" method="POST" class="column centerAll">

                <div class="container column centerJust centerAlign">
                    <!-- 
                        ------------------------------ PAGE TITLE ------------------------------
                    -->
                    <div class="row margT-s margB-s">
                        <legend>Modifier le profil</legend>
                    </div>

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

                        <div class="labelInput-edit column margT-m margB-s">
                            <label class="labelProfil-edit" for="newPseudoMember">Modifier le pseudo</label>
                            <input type="text" class="inputProfil-edit neumorph-btn" name="newPseudoMember" id="newPseudo" placeholder="Pseudo" />
                        </div>

                    </div>

                    <div>
                        <div class="row gap centerAll margL-s margT-s">
                            <input id="updateProfil" class="btn-green neumorph-btn" name="updateProfil" type="submit" value="MODIFIER" />
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

                <div class="row spaceBetween">

                    <div class="margL-m">
                        <div class="column centerAll">
                            <legend class="legend-role">Rôle</legend>
                        </div>
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

                            <div class="row centerAll">
                                <input id="updateRole" class="btn-modifRole margL-s" name="updateRole" type="submit" value="Modifier" />
                            </div>
                        </div>
                    </div>

                    <div class="margR-m">
                        <div class="column centerAll">
                            <legend class="legend-role">Bannir</legend>
                        </div>
                        <div class="blockBtn-banish row centerJust">
                            <a class="row centerAll btn-banish" onclick='return confirm(" Cette action est irréversible, êtes-vous sûr ? ")' href="actions-admin/CAB-banishUser.php?id=<?= $user['id']; ?>">Bannir</a>
                        </div>
                    </div>
                </div>

            </form>
        </div>

    </section>
</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../includes/footer.php'; ?>