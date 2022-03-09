<?php
session_start();
require('../tutoForum/actions/forum/CA-forum-showCatAndSubCatAction.php');
require_once('../tutoForum/functions/url_custom_encode.php');
include '../tutoForum/includes/head.php';
?>

<main>
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar-green.php'; ?>

    <section class="section-center column centerAlign">

        <h1 id="h1-forum" class="margT-m margB-m">FORUM</h1>
        <div class="container-forum-home column centerAll">
            <div class="block-circle column">
                <div class="block-circle1 flex centerAll">

                <?php
                    while ($c = $categorie->fetch()) {
                        $subCat->execute(array($c['id']));
                        $sub_categories = '';
                        while ($sc = $subCat->fetch()) {
                            $sub_categories .= '<li><a class="a-circle" href="../tutoForum/CC-forum-topics-view.php?categorie=' . url_custom_encode($c['name']) . '&souscategorie=' . url_custom_encode($sc['name']) . '">' . $sc['name'] . '</a></li> ';
                        }
                        $sub_categories = substr($sub_categories, 0, -3);

                        if ($c['id'] == 1) {
                    ?>

                            <div class="circle circle-red column centerAll">
                                <h2 class="h2-circle"><a class="h2-a-circle" href="../tutoForum/CC-forum-topics-view.php?categorie=<?= url_custom_encode($c['name']); ?>"><?= $c['name'] ?></a></h2>
                                <ul class="ul-circle column centerAll gap">
                                    <?= $sub_categories ?>
                                </ul>
                            </div>
                        <?php
                        }
                        ?>
                        <?php if ($c['id'] == 2) { ?>
                            <div class="circle circle-blue column centerAll">
                                <h2 class="h2-circle"><a class="h2-a-circle" href="../tutoForum/CC-forum-topics-view.php?categorie=<?= url_custom_encode($c['name']); ?>"><?= $c['name'] ?></a></h2>
                                <ul class="ul-circle column centerAll gap">
                                    <?= $sub_categories ?>
                                </ul>
                            </div>
                        <?php
                        }
                        ?>
                        <?php if ($c['id'] == 3) { ?>
                            <div class="circle circle-yellow column centerAll">
                                <h2 class="h2-circle"><a class="h2-a-circle" href="../tutoForum/CC-forum-topics-view.php?categorie=<?= url_custom_encode($c['name']); ?>"><?= $c['name'] ?></a></h2>
                                <ul class="ul-circle column centerAll gap">
                                    <?= $sub_categories ?>
                                </ul>
                            </div>
                        <?php
                        }
                        ?>
                        <?php if ($c['id'] == 4) { ?>
                            <div class="circle circle-violet column centerAll">
                                <h2 class="h2-circle"><a class="h2-a-circle" href="../tutoForum/CC-forum-topics-view.php?categorie=<?= url_custom_encode($c['name']); ?>"><?= $c['name'] ?></a></h2>
                                <ul class="ul-circle column centerAll gap">
                                    <?= $sub_categories ?>
                                </ul>
                            </div>
                        <?php
                        }
                        ?>
                        <?php if ($c['id'] == 5) { ?>
                            <div class="circle circle-green column centerAll">
                                <h2 class="h2-circle"><a class="h2-a-circle" href="../tutoForum/CC-forum-topics-view.php?categorie=<?= url_custom_encode($c['name']); ?>"><?= $c['name'] ?></a></h2>
                                <ul class="ul-circle column centerAll gap">
                                    <?= $sub_categories ?>
                                </ul>
                            </div>

                    <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>

</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../tutoForum/includes/footer.php'; ?>