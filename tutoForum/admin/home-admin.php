<?php
require('actions-admin/AA-adminSecurityAction.php');
require('actions-admin/AB-adminProfilAction.php');
include '../includes/head.php';
?>

<main class="column centerAlign">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include 'includes-admin/navbar-admin.php'; ?>

    <section class="section-center row centerAll">


        <div class="blockProfil column">

            <!-- 
                ------------------------------ PAGE TITLE ------------------------------
            -->
            <div class="sectionTitle column centerAll">
                <h1 class="titleH1-profil">Bienvenue</h1>
                <span class="nameProfil">Admin</span>
            </div>

            <div class="blockBodyProfil column">
                <div class="sectionBody1 flex gapXL">

                    <div class="pseudoMail column centerAll gap">
                    </div>


                    <div id="demo_box5" class="demo-box-gestion">
                        <div class="close-block">&times;</div>

                        <div class="overlay-content display1 column centerAll">
                            <div class="container-member column centerAlign">

                                <div class="block-list-member row">
                                    <ul class="col_member">
                                        <!-- 
                                            TOPIC TITLE BAR
                                        -->
                                        <li class="li-title-member row">
                                            <div class="block-title-id row centerAll">
                                                <span class="title_id">Id</span>
                                            </div>
                                            <div class="block-title-pseudo row centerAll">
                                                <span class="title_topic_subject">Pseudo</span>
                                            </div>
                                            <div class="block-title-mail row centerAll">
                                                <span class="title_mail">Email</span>
                                            </div>
                                            <div class="block-title-modif row centerAll">
                                                <span class="title_modif">Modifications</span>
                                            </div>
                                        </li>

                                        <!-- 
                                            LIST TOPICS
                                        -->
                                        <!-- On fait une boucle en récupérant $topics -->

                                        <?php while ($user = $requser->fetch()) { ?>

                                            <li class="li-list-member flex">
                                                <div class="block-id row">
                                                    <span class="a-id" href="../tutoForum/AACA-publicProfil.php?id=<?= $user['pseudo'] ?>"><?= $user['id'] ?></span>
                                                </div>
                                                <div class="block-pseudo">
                                                    <a class="a-pseudo" href="../tutoForum/CD-f-show-topics.php?titre=<?= $user['pseudo'] ?>&id=<?= $user['pseudo'] ?>"><?= $user['pseudo'] ?></a>
                                                </div>
                                                <div class="block-mail row">
                                                    <span class="a-mail"><?= $user['mail'] ?></span>
                                                </div>
                                                <div class="block-modif row spaceAround centerAll">
                                                    <div class="sub-block-pseudoBan row centerJust">
                                                        <a class="a-modif a-modifPseudo row centerAll" href="#">Pseudo</a>
                                                        <a class="a-modif row centerAll" href="#">Bannir</a>
                                                    </div>
                                                </div>
                                            </li>

                                        <?php } ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div id="demo_box6" class="demo-box-gestion">
                        <div class="close-block">&times;</div>
                        <div class="overlay-content display2 column centerAll">
                            <ul class="ul-home column centerAll gap-l">
                                <li><a class="a-home" href="#">ça arrive...</a></li>
                            </ul>
                        </div>
                    </div>

                    <div id="demo_box7" class="demo-box-gestion">
                        <div class="close-block">&times;</div>
                        <div class="overlay-content display3 column centerAll">
                            <ul class="ul-home column centerAll gap-l">
                                <li><a class="a-home" href="#">ça arrive...</a></li>
                            </ul>
                        </div>
                    </div>

                    <div id="demo_box8" class="demo-box-gestion">
                        <div class="close-block">&times;</div>
                        <div class="overlay-content display4 column centerAll">
                            <ul class="ul-home column centerAll gap-l">
                                <li><a class="a-home" href="#">ça arrive...</a></li>
                            </ul>
                        </div>
                    </div>

                    <div id="demo_box9" class="demo-box-gestion">
                        <div class="close-block">&times;</div>
                        <div class="overlay-content display4 column centerAll">
                            <ul class="ul-home column centerAll gap-l">
                                <li><a class="a-home" href="#">ça arrive...</a></li>
                            </ul>
                        </div>
                    </div>




                    <div class="blockLinkProfil column centerAll gap">

                        <div id="block5" class="blocks">
                            <a class="a-profil neumorph-btn row centerAll" href="#">Afficher les membres</a>
                        </div>

                        <div id="block6" class="blocks">
                            <a class="a-profil neumorph-btn row centerAll" href="#">Afficher les topics</a>
                        </div>

                        <div id="block7" class="blocks">
                            <a class="a-profil neumorph-btn row centerAll" href="#">Afficher les posts</a>
                        </div>

                        <div id="block8" class="blocks">
                            <a class="a-profil neumorph-btn row centerAll" href="#">Créer un modérateur</a>
                        </div>

                        <div id="block9" class="blocks">
                            <a class="a-profil neumorph-btn row centerAll" href="#">Modifier mon profil</a>
                        </div>

                        <a class="a-deco row centerAll" href="actions-admin/logoutGestionAction.php">Se déconnecter</a>

                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row sectionBody2 centerAll">
        </div>
    </section>

</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<script src="../../tutoForum/assets/js/mainMenu.js"></script>
<script src="../../tutoForum/assets/js/home-gestion.js"></script>
</body>

</html>