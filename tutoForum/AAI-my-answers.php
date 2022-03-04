<?php
require('../tutoForum/actions/users/securityAction.php');
require('../tutoForum/actions/post/my-answersAction.php');
include '../tutoForum/includes/head.php';
?>


<main class="column centerAlign">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar-green.php'; ?>

    <section class="section-center column centerJust centerAlign">
        <!-- 
            ------------------------------ PAGE TITLE ------------------------------
        -->
        <h1 class="h1-title-article">Mes posts</h1>
        <?php
        while ($answer = $getAllMyAnswers->fetch()) {
        ?>
            <div class="shadow-green post-margin">
                <div class="block-post neumorph-form show-content column centerJust">

                    <div class="content-post">
                        <p class="p-content">Contenu : <?= $answer['contenu'] ?></p>
                    </div>
                    <div class="authorDate-post">
                        <p class="p-auteur">Publier par <?= $answer['pseudo_auteur'] ?><?= ' le ' .  $answer['date_publication'] ?></p>
                    </div>
                    <div class="modif-post row centerAlign centerJust">
                        <a class="btn-modifier btn-green neumorph-btn row centerJust centerAlign" href="../tutoForum/AAI-edit-answer.php?id=<?= $answer['id'] ?>">MODIFIER</a>
                        <a class="btn-effacer row centerJust centerAlign" onclick='return confirm(" Cette action est irréversible, êtes-vous sûr ? ")' href="../tutoForum/actions/post/deleteAnswerAction.php?id=<?= $answer['id'] ?>">EFFACER</a>
                    </div>
                </div>

            </div>
            </div>
        <?php
        }
        ?>

    </section>
</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../tutoForum/includes/footer.php'; ?>