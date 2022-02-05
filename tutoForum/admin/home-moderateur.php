<?php
require('actions-admin/BA-moderateurSecurityAction.php');
require('actions-admin/BB-moderateurProfilAction.php');
include '../includes/head.php';
?>

<main class="column centerAlign">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include 'includes-admin/navbar-moderateur.php'; ?>

    <section class="section-center row centerAll">


        <div class="blockProfil column">

            <!-- 
                ------------------------------ PAGE TITLE ------------------------------
            -->
            <div class="sectionTitle column centerAll">
                <h1 class="titleH1-profil">Bienvenue</h1>
                <span class="nameProfil">Modérateur</span>
            </div>

            <div class="blockBodyProfil column">

                <div class="sectionBody1 flex gapXL">
                    <div class="pseudoMail column centerAll gap">
                        <?php
                        $req_users = $bdd->query('SELECT * FROM users');
                        $users = $req_users->fetch();
                        ?>
                    </div>
                    <div class="blockLinkProfil column centerAll gap">
                        <a class="a-profil neumorph-btn row centerAll" href="#">Rechercher un sujet</a>
                      <!--  <a class="a-profil neumorph-btn row centerAll" href="../tutoForum/CB-forum-publish-topic.php">Publier un sujet</a> -->
                        <a class="a-profil neumorph-btn row centerAll" href="#">Modifier mes topics</a>
                        <a class="a-profil neumorph-btn row centerAll" href="#">Modifier mes posts</a>
                        <a class="a-profil neumorph-btn row centerAll" href="#">Modifier mon profil</a>
                        <a class="a-deco row centerAll" href="actions-admin/logoutGestionAction.php">Se déconnecter</a>
                    </div>
                </div>
                <div class="row sectionBody2 centerAll">
                </div>
            </div>
        </div>
    </section>

</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../includes/footer.php'; ?>