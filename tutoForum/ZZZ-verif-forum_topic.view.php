<?php
session_start();
require('../tutoForum/actions/forum/verif_forumAction.php');
include '../tutoForum/includes/head.php';
?>

<main>
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar.php'; ?>

    <section class="section-center column centerAlign">

        <table class="forum">
            <tr class="header">
                <th class="main">Sujet</th>
                <th class="sub-info w10">Messages</th>
                <th class="sub-info w20">Dernier message</th>
                <th class="sub-info w20">Création</th>
            </tr>

            <?php while ($t = $topics->fetch()) { ?>

                <tr>
                    <td class="main">
                        <h4><a href=""><?= $t['titre'] ?></a></h4>
                    </td>
                    <td class="sub-info">4083495</td>
                    <td class="sub-info">25.12.2015 à 18h07<br />de PrimFX</td>
                    <td class="sub-info"><?= $t['date_publication'] ?><br />par <?= $t['pseudo_auteur'] ?></td>
                </tr>
                
            <?php } ?>

        </table>

    </section>
</main>
<?php include '../tutoForum/includes/footer.php'; ?>