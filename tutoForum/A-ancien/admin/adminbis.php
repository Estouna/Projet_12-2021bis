<?php
require('/tutoForum/actions/admin/adminActionbis.php');
include '/tutoForum/includes/head.php';
?>

<main class="column centerAlign">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '/tutoForum/includes/navbar-green.php'; ?>

    <section class="section-center column centerAlign centerJust">


        <div class="row">
            <h1>Administration du site</h1>
        </div>

        <ul>
            <!-- 
                Affiche les membres 
            -->
            <?php while ($u = $users->fetch()) { ?>

                <li>
                    <?= $u['id'] ?> : <?= $u['pseudo'] ?>
                    <!-- btn confirmer membre (mail) -->
                    <?php if ($u['confirm'] == 0) { ?>
                        - <a href="admin.php?type=membre&confirme=<?= $u['id'] ?>">Confirmer</a>
                    <?php } ?>
                    <!-- btn supprimer un membre -->
                    - <a href="admin.php?type=membre&supprime=<?= $u['id'] ?>">Supprimer</a>
                </li>

            <?php } ?>
        </ul>

        <br /><br />

        <ul>
            <?php while ($a = $answers->fetch()) { ?>

                <li>
                    <?= $a['id'] ?> : <?= $a['pseudo_auteur'] ?> : <?= $a['contenu'] ?>
                    <?php if ($a['approuve'] == 0) { ?>
                        - <a href="admin.php?type=commentaire&approuve=<?= $a['id'] ?>">Approuver</a>
                    <?php } ?>
                    - <a href="admin.php?type=commentaire&supprime=<?= $a['id'] ?>">Supprimer</a>
                </li>

            <?php } ?>
        </ul>


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
<?php include '/tutoForum/includes/footer.php'; ?>