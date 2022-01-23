<?php
session_start();
require('../tutoForum/actions/forum/CCA-forumAction.php');
require('../tutoForum/actions/topic/AAG-showArticleContentAction.php');
include '../tutoForum/includes/head.php';
?>

<main>
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar.php'; ?>

    <section class="section-center column centerAlign">
        <div class="container-topic column centerAlign">
            <!-- 
                ------------------------------ PAGE TITLE ------------------------------
            -->
            <h1 id="h1-html">Général</h1>

            <div class="block-list-topic row">

                <ul class="col_topic">
                    <!-- 
                        TOPIC TITLE BAR
                    -->
                    <li class="li-title row">
                        <div class="block-title-subject row">
                            <span class="title_topic_subject">Sujet</span>
                        </div>
                        <div class="block-title-authorCountLast row">
                            <span class="title_topic_author">Auteur</span>
                            <span class="title_topic_count">Nombre</span>
                            <span class="title_topic_date">Post récent</span>
                        </div>
                    </li>

                    <!-- 
                        LIST TOPICS
                    -->
                    <!-- On fait une boucle en récupérant $topics -->
                    <?php while ($subject = $topics->fetch()) { ?>

                        <li class="li-list flex">
                            <div class="block-post-subject">
                                <a class="post-subject" href="#"><?= $subject['titre'] ?></a>
                            </div>
                            <div class="block-post-authorCountLast row">
                                <a class="post-author" href="#"><?= $subject['pseudo_auteur'] ?></a>
                                <span class="post-count">21000</span>
                                <a class="post-last-mess" href="#"><?= $subject['date_publication'] ?></a>
                            </div>
                        </li>

                    <?php } ?>

                </ul>

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

    </section>

</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../tutoForum/includes/footer.php'; ?>