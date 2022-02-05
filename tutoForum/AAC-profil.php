<?php
require('../tutoForum/actions/users/securityAction.php');
require('actions/users/AAC-profilAction.php');
include '../tutoForum/includes/head.php';
?>

<main class="column centerAlign">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar-green.php'; ?>

    <section class="section-center row centerAll">


        <div class="blockProfil column">

            <!-- 
                ------------------------------ PAGE TITLE ------------------------------
            -->
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
                        <a class="a-profil neumorph-btn row centerAll" href="../tutoForum/AAH-searchQuestions.php">Rechercher un sujet</a>
                      <!--  <a class="a-profil neumorph-btn row centerAll" href="../tutoForum/CB-forum-publish-topic.php">Publier un sujet</a> -->
                        <a class="a-profil neumorph-btn row centerAll" href="../tutoForum/AAE-my-questions.php">Modifier mes topics</a>
                        <a class="a-profil neumorph-btn row centerAll" href="../tutoForum/AAI-my-answers.php">Modifier mes posts</a>
                        <a class="a-profil neumorph-btn row centerAll" href="../tutoForum/AACB-edit-profile.php">Modifier mon profil</a>
                        <a class="a-deco row centerAll" href="../tutoForum/actions/users/logoutAction.php">Se déconnecter</a>
                    </div>
                </div>
                <div class="row sectionBody2 centerAll">
                </div>
            </div>
        </div>
    </section>
    <?= var_dump($userInfo) ?>

</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../tutoForum/includes/footer.php'; ?>