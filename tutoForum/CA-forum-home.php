<?php
session_start();
require('../tutoForum/actions/forum/CCA-forumAction.php');
include '../tutoForum/includes/head.php';
?>

<main>
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar.php'; ?>

    <section class="section-center column spaceAround centerAlign">
       
        <div class="container-forum-home column centerAll">
            <div class="block-circle column">

                <div class="block-circle1 flex centerAll">

                    <div class="circle circle-red column centerAll">
                        <h2 class="h2-circle">HTML</h2>
                        <ul class="ul-circle column centerAll gap">
                            <li><a class="a-circle" href="../tutoForum/CC-f-html-cat1.php">Tutos des membres</a></li>
                            <li><a class="a-circle" href="../tutoForum/CC-f-html-cat2.php">Poser une question</a></li>
                        </ul>
                    </div>

                    <div class="circle circle-blue column centerAll">
                        <h2 class="h2-circle">CSS</h2>
                        <ul class="ul-circle column centerAll gap">
                            <li><a class="a-circle" href="../tutoForum/CD-f-css-cat1.php">Tutos des membres</a></li>
                            <li><a class="a-circle" href="../tutoForum/CD-f-css-cat2.php">Poser une question</a></li>
                        </ul>
                    </div>

                    <div class="circle circle-yellow column centerAll">
                        <h2 class="h2-circle">JavaScript</h2>
                        <ul class="ul-circle column centerAll gap">
                            <li><a class="a-circle" href="../tutoForum/CE-f-javascript-cat1.php">Tutos des membres</a></li>
                            <li><a class="a-circle" href="../tutoForum/CE-f-javascript-cat2.php">Poser une question</a></li>
                        </ul>
                    </div>

                </div>

                <div class="block-circle2 flex centerAll">

                    <div class="circle circle-violet column centerAll">
                        <h2 class="h2-circle-general"><a class="a-general" href="../tutoForum/CF-f-general.php">Général</a></h2>
                    </div>

                    <div class="circle circle-green column centerAll">
                        <h2 class="h2-circle">Codes</h2>
                        <ul class="ul-circle column centerAll gap">
                            <li><a class="a-circle" href="../tutoForum/CG-f-codes-cat1.php">HTML/CSS</a></li>
                            <li><a class="a-circle" href="../tutoForum/CG-f-codes-cat2.php">JavaScript</a></li>
                            <li><a class="a-circle" href="../tutoForum/CG-f-codes-cat3.php">Autres</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>

</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../tutoForum/includes/footer.php'; ?>