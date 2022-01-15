<?php
require('../tutoForum/actions/users/securityAction.php');
require('actions/users/AAC-profilAction.php');
include '../tutoForum/includes/head.php';
?>

<main class="column centerAlign">
    <?php include '../tutoForum/includes/navbar.php'; ?>

    <section class="section-center row centerAll">


        <div class="blockProfil column">

            <div class="sectionTitle column centerAll">
                <h1 class="titleH1-profil">Bienvenue</h1>
                <span class="nameProfil"><?= $userInfo['pseudo']; ?></span>
            </div>

            <div class="blockBodyProfil column">

                <div class="sectionBody1 flex gapXL">
                    <div class="pseudoMail column centerAll gap">
                        <p class="p-profil">Pseudo : <?= $userInfo['pseudo'] ?></p>
                        <p class="p-profil">Email : <?= $userInfo['mail'] ?></p>
                    </div>
                    <div class="blockLinkProfil column centerAll gap">
                        <a class="a-profil" href="../tutoForum/AAH-searchQuestions.php">Rechercher un sujet</a>
                        <a class="a-profil" href="../tutoForum/AAD-publish-question.php">Publier un sujet</a>
                        <a class="a-profil" href="../tutoForum/AAE-my-questions.php">Modifier mes sujets</a>
                        <a class="a-profil" href="../tutoForum/AAI-my-answers.php">Modifier mes commentaires</a>
                        <a class="a-profil" href="../tutoForum/AACB-edit-profile.php">Modifier mon profil</a>
                        <a class="a-profil a-deco" href="../tutoForum/actions/users/logoutAction.php">Se déconnecter</a>
                    </div>
                </div>
                <div class="row sectionBody2 centerAll">
                </div>
            </div>
        </div>
    </section>

</main>
<?php include '../tutoForum/includes/footer.php'; ?>