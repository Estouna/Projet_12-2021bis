<?php
require('actions-admin/AA-adminSecurityAction.php');
require('actions-admin/CA-edit-profilMemberAction.php');
include '../includes/head.php';
?>

<main class="column centerAlign">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include 'includes-admin/navbar-admin.php'; ?>

    <section class="section-center column centerAlign centerJust">



        <form action="" method="POST" class="blockProfil column centerAll">

            <div class="container column centerJust centerAlign">
                <!-- 
                    ------------------------------ PAGE TITLE ------------------------------
                -->
                <div class="row">
                    <legend>Modifier le profil</legend>
                </div>

                <div class="column">

                    <div class="column centerAlign">
                        <P class="p-pseudoMailEdit">Le pseudo actuel</P>
                        <span class="name-EditProfil"><?= $user['pseudo']; ?></span>
                        <p class="p-pseudoMailEdit">Adresse mail actuelle</p>
                        <span class="email-EditProfil"><?= $user['mail']; ?></span>
                    </div>

                    <div class="labelInput-edit column">
                        <label class="labelProfil-edit" for="newPseudoMember">Modifier le pseudo</label>
                        <input type="text" class="inputProfil-edit neumorph-btn" name="newPseudoMember" id="newPseudo" placeholder="Pseudo" />
                    </div>

                </div>

                <div>
                    <div class="row gap centerAll">
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
            <div class="blockBtn-banish row flexEnd">
                <a class="row centerAll btn-banish" href="actions-admin/CAB-banishUser.php?id=<?= $user['id']; ?>">Bannir</a>
            </div>

        </form>

    </section>
</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../includes/footer.php'; ?>