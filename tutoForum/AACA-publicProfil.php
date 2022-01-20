<?php
session_start();
require('../tutoForum/actions/users/showUsersProfileAction.php');
include '../tutoForum/includes/head.php';
?>



<main class="column centerAlign">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar.php'; ?>

    <section class="section-center column centerJust centerAlign">
        <?php
        if (isset($getHisQuestions)) {

        ?>

            <div class="blockProfil column">

                <div class="sectionTitle column centerJust centerAlign">
                    <!-- 
                         ------------------------------ PAGE TITLE ------------------------------
                     -->
                    <h1 class="titleH1-profil">Publication de</h1>
                    <span class="nameProfil"><?= $user_pseudo; ?></span>
                </div>

                <div class="blockBodyProfil column">

                    <div class="row spaceBetween sectionBody1">
                        <div class="pseudoMail column centerAll">
                            <p class="p-profil">Email : <?= $user_mail; ?></p>
                        </div>
                    </div>

                </div>
            </div>

            <?php
            while ($question = $getHisQuestions->fetch()) {
            ?>
                <div class="shadow-green post-margin">
                    <div class="block-subject show-content neumorph-subject column centerJust">

                        <div class="title-subject">
                            <h5>
                                <a class="a-post" href="../tutoForum/AAG-article.php?id=<?= $question['id']; ?>"><?= $question['titre']; ?></a>
                            </h5>
                        </div>

                        <div class="description-subject">
                            <p>
                                Description :<br />
                                <?= $question['description']; ?>
                            </p>
                        </div>

                        <div class="content-subject">
                            <p><?= $question['contenu']; ?></p>
                        </div>

                        <div class="authorDate-subject">
                            <p>Publier par <?= '<a class="a-auteur" href="../tutoForum/AACA-publicProfil.php?id=' . $question['id_auteur'] . '">' . $question['pseudo_auteur'] . '</a> le ' . $question['date_publication']; ?></p>
                        </div>

                    </div>
                </div>

        <?php
            }
        }
        ?>

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
</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../tutoForum/includes/footer.php'; ?>