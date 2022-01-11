<?php
require('../tutoForum/actions/users/securityAction.php');
include '../tutoForum/includes/head.php';
?>

<main class="column centerAlign">
    <?php include '../tutoForum/includes/navbar.php'; ?>
    <section class="section-center row centerJust centerAlign">

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
                            <a class="a-profil" href="../tutoForum/AAH-searchQuestions.php">Rechercher un sujet</a>
                            <a class="a-profil" href="../tutoForum/AAD-publish-question.php">Publier un sujet</a>
                            <a class="a-profil" href="../tutoForum/AAE-my-questions.php">Modifier mes sujets</a>
                            <a class="a-profil" href="../tutoForum/AAI-my-answers.php">Modifier mes commentaires</a>
                            <a class="a-profil a-deco" href="../tutoForum/actions/users/logoutAction.php">Se déconnecter</a>
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
    </section>

</main>
<?php include '../tutoForum/includes/footer.php'; ?>