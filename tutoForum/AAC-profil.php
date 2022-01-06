<?php
require('actions/users/securityAction.php');
include 'includes/header.php';
include 'includes/footer.php';
?>

<main class="column centerJust centerAlign">
    <?php
    if (isset($_SESSION['auth'])) {
    ?>
        <div class="blockProfil column">

            <div class="sectionTitle column centerJust centerAlign">
                <h1 class="titleH1-profil">Bienvenue</h1>
                <span class="nameProfil"><?= $_SESSION['pseudo'] ?></span>
            </div>

            <div class="blockBodyProfil column">

                <div class="row spaceBetween sectionBody1">
                    <div class="pseudoMail column centerJust gap">
                        <p class="p-profil">Pseudo : <?= $_SESSION['pseudo'] ?></p>
                        <p class="p-profil">Email : <?= $_SESSION['mail'] ?></p>
                    </div>
                    <div class="blockLinkProfil column centerJust gap">
                        <a class="a-publier a-links" href="AAD-publish-question.php">Publier</a>
                        <a class="a-publier a-links" href="AAE-my-questions.php">Modifier un message</a>
                        <a class="a-deco a-links" href="actions/users/logoutAction.php">Déconnexion</a>
                    </div>
                </div>
                <div class="row sectionBody2 centerJust centerAlign">
                </div>
            </div>
        </div>
    <?php
    } else {
        header('Location: AAB-login.php');
    }
    ?>

</main>