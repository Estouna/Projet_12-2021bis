<?php
session_start();
require('../tutoForum/actions/users/showUsersProfileAction.php');
include '../tutoForum/includes/head.php';
?>



<main class="column centerAlign">
    <?php include '../tutoForum/includes/navbar.php'; ?>

    <?php
    if (isset($getHisQuestions)) {

    ?>

        <div class="blockProfil column">

            <div class="sectionTitle column centerJust centerAlign">
                <h1 class="titleH1-profil">Publication de</h1>
                <span class="nameProfil"><?= $user_pseudo; ?></span>
            </div>

            <div class="blockBodyProfil column">

                <div class="row spaceBetween sectionBody1">
                    <div class="pseudoMail column centerJust gap">
                        <p class="p-profil">Email : <?= $user_mail; ?></p>
                    </div>
                    <div class="blockLinkProfil column centerJust gap">

                    </div>
                </div>
                <div class="row sectionBody2 centerJust centerAlign">
                </div>
            </div>
        </div>

        <?php
        while ($question = $getHisQuestions->fetch()) {
        ?>

            <div class="blockModifQuestion column">
                <h5 class="titleQuestion">
                    <a class="a-post" href="../tutoForum/AAG-article.php?id=<?= $question['id']; ?>"><?= $question['titre']; ?></a>
                </h5>

                <div class="bodyQuestion">
                    <p class="p-decription">Description : <?= $question['description']; ?></p>
                    <div class="row gap">
                        <p class="p-auteur">Publier par <a href="../tutoForum/profil2.php?id=<?= $question['id_auteur']; ?>"><?= $question['pseudo_auteur']; ?></a></p>
                        <p class="p-date"> le <?= $question['date_publication']; ?></p>
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

</main>
<?php include '../tutoForum/includes/footer.php'; ?>