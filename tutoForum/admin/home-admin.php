<?php
require('actions-admin/AA-adminSecurityAction.php');
require('actions-admin/AB-adminProfilAction.php');
require('../functions/url_custom_encode.php');
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
                <span class="nameProfil"><?= $_SESSION['pseudo']; ?></span>
            </div>

            <div class="blockBodyProfil column">
                <div class="sectionBody1 flex gapXL">

                    <div class="pseudoMail column centerAll gap">
                    </div>


                    <!-- 
                        MODALS WINDOWS 1
                    -->
                    <div id="demo_box5" class="demo-box-gestion">
                        <div class="row flexEnd close-block2">&times;</div>
                        <div class="overlayContent display1 column centerAll">

                            <div class="container-member column centerAlign">

                                <div class="block-list-member row">
                                    <ul class="col_member">
                                        <!-- 
                                            USERS TITLE BAR
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
                                            LIST USERS
                                        -->
                                        <!-- On fait une boucle pour récupérer les membres-->

                                        <?php while ($user = $requser->fetch()) { ?>

                                            <li class="li-list-member flex">
                                                <div class="block-id row">
                                                    <span class="a-id"><?= $user['id'] ?></span>
                                                </div>
                                                <div class="block-pseudo">
                                                    <a class="a-pseudo" href="../AACA-publicProfil.php?id=<?= $user['id'] ?>"><?= $user['pseudo'] ?></a>
                                                </div>
                                                <div class="block-mail row">
                                                    <span class="a-mail"><?= $user['mail'] ?></span>
                                                </div>
                                                <div class="block-modif row spaceAround centerAll">
                                                    <div class="sub-block-pseudoBan row centerJust">
                                                        <a class="a-modif row centerAll" href="edit-profilMember.php?id=<?= $user['id'] ?>">Modifier</a>
                                                    </div>
                                                </div>
                                            </li>

                                        <?php } ?>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- 
                        MODALS WINDOWS 2
                    -->
                    <div id="demo_box6" class="demo-box-gestion">
                        <div class="row flexEnd close-block2">&times;</div>
                        <div class="overlayContent display2 column centerAll">

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
                                                <span class="title_mail">Titre</span>
                                            </div>
                                            <div class="block-title-modif row centerAll">
                                                <span class="title_modif">Modifications</span>
                                            </div>
                                        </li>

                                        <!-- 
                                            LIST TOPICS
                                        -->
                                        <!-- On fait une boucle pour récupérer les membres-->

                                        <?php while ($topic = $getAllQuestionsUsers->fetch()) { ?>

                                            <li class="li-list-member flex">
                                                <div class="block-id row">
                                                    <span class="a-id"><?= $topic['id'] ?></span>
                                                </div>
                                                <div class="block-pseudo">
                                                    <a class="a-pseudo" href="../AACA-publicProfil.php?id=<?= $topic['id_auteur'] ?>"><?= $topic['pseudo_auteur'] ?></a>
                                                </div>
                                                <div class="block-mail row">
                                                    <a class="a-titre" href="../CD-f-show-topics.php?titre=<?= url_custom_encode($topic['titre']) ?>&id=<?= $topic['id']; ?>"><?= $topic['titre'] ?></a>
                                                </div>
                                                <div class="block-modif row spaceAround centerAll">
                                                    <div class="sub-block-pseudoBan row centerJust">
                                                        <a class="a-modif row centerAll" href="edit-topicMember.php?id=<?= $topic['id'] ?>">Modifier</a>
                                                    </div>
                                                </div>
                                            </li>

                                        <?php } ?>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- 
                        MODALS WINDOWS 3
                    -->
                    <div id="demo_box7" class="demo-box-gestion">
                        <div class="row flexEnd close-block2">&times;</div>
                        <div class="overlayContent display3 column centerAll">

                            <div class="container-member column centerAlign">

                                <div class="block-list-member row">
                                    <ul class="col_member">
                                        <!-- 
                                            POST TITLE BAR
                                        -->
                                        <li class="li-title-member row">
                                            <div class="block-title-id_question row centerAll">
                                                <span class="title_id">Id question</span>
                                            </div>
                                            <div class="block-title-pseudo_post row centerAll">
                                                <span class="title_topic_subject">Pseudo</span>
                                            </div>
                                            <div class="block-title-date row centerAll">
                                                <span class="title_mail">Date de publication</span>
                                            </div>
                                            <div class="block-title-modif_post row centerAll">
                                                <span class="title_modif">Modifications</span>
                                            </div>
                                        </li>

                                        <!-- 
                                            LIST POSTS
                                        -->
                                        <!-- On fait une boucle pour récupérer les membres-->

                                        <?php while ($answer = $getAllAnswersUsers->fetch()) { ?>

                                            <li class="li-list-member flex">
                                                <div class="block-id_question row">
                                                    <span class="a-id"><?= $answer['id_question'] ?></span>
                                                </div>
                                                <div class="block-pseudo_post">
                                                    <a class="a-pseudo" href="../AACA-publicProfil.php?id=<?= $answer['id_auteur'] ?>"><?= $answer['pseudo_auteur'] ?></a>
                                                </div>
                                                <div class="block-date row">
                                                    <a class="a-titre"><?= $answer['date_publication'] ?></a>
                                                </div>
                                                <div class="block-modif_post row spaceAround centerAll">
                                                    <div class="sub-block-pseudoBan row centerJust">
                                                        <a class="a-modif row centerAll" href="edit-answerMember.php?id=<?= $answer['id'] ?>">Modifier</a>
                                                    </div>
                                                </div>
                                            </li>

                                        <?php } ?>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- 
                        MODALS WINDOWS 4
                    -->
                    <div id="demo_box8" class="demo-box-gestion">
                        <div class="row flexEnd close-block2">&times;</div>
                        <div class="overlayContent display4 column centerAll">
                            <ul class="ul-home column centerAll gap-l">
                                <li><a class="a-home" href="#">ça arrive...</a></li>
                            </ul>
                        </div>
                    </div>



                    <!-- 
                        BUTTONS
                    -->
                    <div class="blockLinkProfil column centerAll gap">

                        <div id="block5" class="blocks">
                            <p class="a-profil neumorph-btn row centerAll">Afficher les membres</p>
                        </div>

                        <div id="block6" class="blocks">
                            <p class="a-profil neumorph-btn row centerAll">Afficher les topics</p>
                        </div>

                        <div id="block7" class="blocks">
                            <p class="a-profil neumorph-btn row centerAll">Afficher les posts</p>
                        </div>

                        <div id="block8" class="blocks">
                            <p class="a-profil neumorph-btn row centerAll">Créer un modérateur</p>
                        </div>

                        <div id="block" class="blocks">
                            <a class="a-profil neumorph-btn row centerAll" href="../AAC-profil.php">Aller à ma page utilisateur</a>
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