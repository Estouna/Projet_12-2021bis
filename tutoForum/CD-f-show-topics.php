<?php
session_start();
require('../tutoForum/actions/forum/CD-topicAction.php');
include '../tutoForum/includes/head.php';
?>

<main class="column centerAlign">
    <!-- 
        ------------------------------------------------------------ NAVBAR ------------------------------------------------------------ 
    -->
    <?php include '../tutoForum/includes/navbar-green.php'; ?>


    <section class="section-center column centerAlign">


        <!-- 
            /////////////////////////////////////////////////////////////// AUTHENTIFIED ///////////////////////////////////////////////////////////////
        -->
        <?php if (isset($_SESSION['auth'])) { ?>
            <!-- 
                ------------------------------------------------------------ TOPIC ------------------------------------------------------------
            -->
            <div class="shadow-green post-margin">
                <div class="block-subject show-content neumorph-subject column centerJust">
                    <div class="title-subject">
                        <h5><?= $topic['titre'] ?></h5>
                    </div>
                    <div class="content-subject">
                        <p><?= $topic['contenu'] ?></p>
                    </div>
                    <div class="authorDate-subject">
                        <p>Publié par <?= '<a class="a-auteur" href="../tutoForum/AACA-publicProfil.php?id=' . $topic['id_auteur'] . '">' . get_pseudo($topic['id_auteur']) . '</a> le ' . $topic['date_publication'] ?></p>
                    </div>
                </div>
            </div>
            <!-- 
                ------------------------------------------------------------ POSTS ------------------------------------------------------------
            -->
            <?php while ($a = $answers->fetch()) { ?>

                <div class="shadow-green post-margin">
                    <div class="block-post neumorph-form show-content column centerJust">
                        <div class="title-post">
                            <h5>
                                <a class="a-title-post" href="../tutoForum/AACA-publicProfil.php?id=<?= $a['id_auteur']; ?>"><?= $a['pseudo_auteur']; ?></a>
                            </h5>
                        </div>
                        <div class="content-post">
                            <p><?= $a['contenu']; ?></p>
                        </div>
                        <div class="authorDate-post">
                            <p>Publié par <a class="a-title-post" href="../tutoForum/AACA-publicProfil.php?id=<?= $a['id_auteur']; ?>"><?= get_pseudo($a['id_auteur']) ?></a><?= ' le ' . $a['date_publication'] ?></p>
                        </div>

                    </div>
                </div>
            <?php
            }
            ?>
            <!-- 
                ------------------------------------------------------------ FORM ANSWER ------------------------------------------------------------
            -->
            <form action="#answer" id="answer" method="POST" class="shadow-green column centerJust centerAlign post-margin">
                <div class="neumorph-form formAnswer">

                    <div class="column centerJust centerAlign">
                        <div class="column centerJust">
                            <label class="label-answer">Réponse</label>
                            <textarea name="topic_answer" class="textareaContent neumorph-btn"></textarea>
                        </div>
                    </div>

                    <div class="answerButton row centerJust centerAlign">
                        <button class="btn-green neumorph-btn" type="submit" name="topic_answer_submit">REPONDRE</button>
                    </div>

                    <div class="message row centerJust centerAlign">
                        <?php
                        if (isset($erreur_rep)) {
                            echo '<div class="block-mess"><span class="red">' . $erreur_rep . "</span></div>";
                        }
                        if (isset($valide_rep)) {
                            echo '<span class="green">' . $valide_rep . "</span>";
                        }

                        ?>
                    </div>
                </div>
            </form>


        <!-- 
            /////////////////////////////////////////////////////////////// NOT AUTHENTIFIED ///////////////////////////////////////////////////////////////
        -->
        <?php } else { ?>



            <!-- 
                ------------------------------------------------------------ TOPIC ------------------------------------------------------------
            -->
            <div class="shadow-green post-margin">
                <div class="block-subject show-content neumorph-subject column centerJust">
                    <div class="title-subject">
                        <h5><?= $topic['titre'] ?></h5>
                    </div>
                    <div class="content-subject">
                        <p><?= $topic['contenu'] ?></p>
                    </div>
                    <div class="authorDate-subject">
                        <p>Publié par <?= '<a class="a-auteur" href="../tutoForum/AACA-publicProfil.php?id=' . $topic['id_auteur'] . '">' . get_pseudo($topic['id_auteur']) . '</a> le ' . $topic['date_publication'] ?></p>
                    </div>
                </div>
            </div>
            <!-- 
                ------------------------------------------------------------ POSTS ------------------------------------------------------------
            -->
            <?php while ($a = $answers->fetch()) { ?>

                <div class="shadow-green post-margin">
                    <div class="block-post neumorph-form show-content column centerJust">
                        <div class="title-post">
                            <h5>
                                <a class="a-title-post" href="../tutoForum/AACA-publicProfil.php?id=<?= $a['id_auteur']; ?>"><?= $a['pseudo_auteur']; ?></a>
                            </h5>
                        </div>
                        <div class="content-post">
                            <p><?= $a['contenu']; ?></p>
                        </div>
                        <div class="authorDate-post">
                            <p>Publié par <a class="a-title-post" href="../tutoForum/AACA-publicProfil.php?id=<?= $a['id_auteur']; ?>"><?= get_pseudo($a['id_auteur']) ?></a><?= ' le ' . $a['date_publication'] ?></p>
                        </div>

                    </div>
                </div>
        <?php
            }
        }
        ?>
        <!-- 
            ------------------------------------------------------------ PAGING ------------------------------------------------------------
        -->
        <div class="paging row gap">
            <?php
            // une page est égal à 1; 
            // une page est inférieur ou égal au nombre de réponses par page (il y a au moins 1 réponse par page et maximum 8 réponses)
            // incrémente le nombre de page quand la limite de 8 réponses est atteinte   
            for ($i = 1; $i <= $pagesTotal; $i++) {
                // echo $i . ' '; rajoute un espace autour de la page active (courante) et enlève le lien afin qu'on ne puisse plus recliquer dessus et voir aussi sur quelle page on est
                if ($i == $currentPage) {
                    echo $i . ' ';
                } else {
                    echo ' <a class="a-paging" href="CD-f-show-topics.php?titre=' . $get_titre . '&id=' . $get_id . '&page=' . $i . '">' . $i . '</a> ';
                }
            }
            ?>
        </div>
        <!-- 
            ------------------------------------------------------------ ERROR/VALID MESSAGE ------------------------------------------------------------
        -->
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
   
    </section>
    <!-- 
            ------------------------------------------------------------ BTN RETURN TOP PAGE ------------------------------------------------------------
     -->
    <a class="return-btn column centerAll" href="#header">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up btn-arrow" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
        </svg>
    </a>

</main>
<!-- 
    ------------------------------------------------------------ FOOTER ------------------------------------------------------------ 
-->
<?php include '../tutoForum/includes/footer.php'; ?>