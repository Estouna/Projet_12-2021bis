<?php
session_start();
require('actions/database.php');
require_once('../tutoForum/functions/url_custom_encode.php');
include '../tutoForum/includes/head.php';

$categorie = $bdd->prepare('SELECT * FROM f_category');
$categorie->execute(array());
$subCat = $bdd->prepare('SELECT * FROM f_sub_category WHERE id_category = ? ORDER BY id');

$c = $categorie->fetch();
var_dump($categorie);
$subCat->execute(array($c['id']));
$sc = $subCat->fetch();
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
                    $tableau_1 = [


                        '<div class="circle circle-red column centerAll">
    <h2 class="h2-circle">' . $c['name'] . '</h2>
    <ul class="ul-circle column centerAll gap">
    <li><a class="a-circle" href="../tutoForum/CC-forum-topics-view.php?categorie=' . url_custom_encode($c['name']) . '&souscategorie=' . url_custom_encode($sc['name']) . '">' . $sc['name'] . '</a></li>
    <li><a class="a-circle" href="../tutoForum/CC-forum-topics-view.php?categorie=' . url_custom_encode($c['name']) . '&souscategorie=' . url_custom_encode($sc['name']) . '">' . $sc['name'] . '</a></li>
    <li><a class="a-circle" href="../tutoForum/CC-forum-topics-view.php?categorie=' . url_custom_encode($c['name']) . '&souscategorie=' . url_custom_encode($sc['name']) . '">' . $sc['name'] . '</a></li>
    </ul>
    </div>',




                        '<div class="circle circle-blue column centerAll">
    <h2 class="h2-circle">' . $c['name'] . '</h2>
    <ul class="ul-circle column centerAll gap">
    <li><a class="a-circle" href="../tutoForum/CD-f-css-cat1.php">Tutos des membres</a></li>
    <li><a class="a-circle" href="../tutoForum/CD-f-css-cat2.php">Poser une question</a></li>
    </ul>
    </div>',

                        '<div class="circle circle-yellow column centerAll">
    <h2 class="h2-circle">' . $c['name'] . '</h2>
    <ul class="ul-circle column centerAll gap">
    <li><a class="a-circle" href="../tutoForum/CE-f-javascript-cat1.php">Tutos des membres</a></li>
    <li><a class="a-circle" href="../tutoForum/CE-f-javascript-cat2.php">Poser une question</a></li>
    </ul>
    </div>',

                        '<div class="circle circle-violet column centerAll">
    <h2 class="h2-circle-general"><a class="a-general" href="../tutoForum/CF-f-general.php">' . $c['name'] . '</a></h2>
    </div>',

                        '<div class="circle circle-green column centerAll">
    <h2 class="h2-circle">' . $c['name'] . '</h2>
    <ul class="ul-circle column centerAll gap">
    <li><a class="a-circle" href="../tutoForum/CG-f-codes-cat1.php">HTML/CSS</a></li>
    <li><a class="a-circle" href="../tutoForum/CG-f-codes-cat2.php">JavaScript</a></li>
    <li><a class="a-circle" href="../tutoForum/CG-f-codes-cat3.php">Autres</a></li>
    </ul>
    </div>'


                    ];
                    foreach ($tableau_1 as $cle => $valeur) {
                            echo ($cle. $valeur);
                        }
                    
                    ?>
    </section>

</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../tutoForum/includes/footer.php'; ?>