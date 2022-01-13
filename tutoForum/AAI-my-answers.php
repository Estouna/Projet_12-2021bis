<?php
require('../tutoForum/actions/users/securityAction.php');
require('../tutoForum/actions/questions/my-answersAction.php');
include '../tutoForum/includes/head.php';
?>


<main class="column centerAlign">
    <?php include '../tutoForum/includes/navbar.php'; ?>

    <section class="section-center column centerJust centerAlign">
        <h1 class="h1TitleArticles">Mes commentaires</h1>
        <?php
        while ($answer = $getAllMyAnswers->fetch()) {
        ?>
            <div class="shadow-green post-margin">
                <div class="block-post neumorph-form show-content column centerJust">

                    <div class="content-post">
                        <p>Contenu :</br>
                            </br>
                            <?= $answer['contenu'] ?></p>
                    </div>
                    <div class="authorDate-post">
                        <p class="p-auteur">Publier par <?= $answer['pseudo_auteur'] ?><?= ' le ' .  $answer['date_publication'] ?></p>
                    </div>
                    <div class="modif-post row centerAlign centerJust">
                        <a class="btn-afficher btn-green neumorph-btn row centerJust centerAlign" href="../tutoForum/AAG-article.php?id=<?= $answer['id']; ?>">AFFICHER</a>
                        <a class="btn-modifier btn-green neumorph-btn row centerJust centerAlign" href="../tutoForum/AAI-edit-answer.php?id=<?= $answer['id'] ?>">MODIFIER</a>
                        <a class="btn-effacer row centerJust centerAlign" href="../tutoForum/actions/questions/deleteAnswerAction.php?id=<?= $answer['id'] ?>">EFFACER</a>
                    </div>
                </div>

            </div>
            </div>
        <?php
        }
        ?>

    </section>
</main>
<?php include '../tutoForum/includes/footer.php'; ?>