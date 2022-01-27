<?php
session_start();
require('../tutoForum/actions/forum/CCA-forum-showCatAndSubCatAction.php');
require_once('../tutoForum/functions/url_custom_encode.php');
include '../tutoForum/includes/head.php';
?>

<main>
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar.php'; ?>

    <section class="section-center column centerAlign">

        <table class="forum">
            <tr class="header">
                <th class="main">Catégories</th>
                <th class="sub-info messages">Messages</th>
                <th class="sub-info dmessage">Dernier message</th>
            </tr>
            <?php
            while ($c = $categorie->fetch()) {
                $subCat->execute(array($c['id']));
                $souscategories = '';
                while ($sc = $subCat->fetch()) {
                    $souscategories .= '<a href="../tutoForum/ZZZ-verif-forum_topic.view.php?categorie=' . url_custom_encode($c['name']) . '&souscategorie=' . url_custom_encode($sc['name']) . '">' . $sc['name'] . '</a> | ';
                }
                $souscategories = substr($souscategories, 0, -3);
            ?>
                <tr>
                    <td class="main">
                        <h4><a href="../tutoForum/ZZZ-verif-forum_topic.view.php?categorie=<?= url_custom_encode($c['name']) ?>"><?= $c['name'] ?></a></h4>
                        <p>
                            <?= $souscategories ?>
                        </p>
                    </td>
                    <td class="sub-info">4083495</td>
                    <td class="sub-info">04.12.2015 à 14h52<br />de PrimFX</td>
                </tr>
            <?php } ?>
        </table>



    </section>
</main>
<?php include '../tutoForum/includes/footer.php'; ?>