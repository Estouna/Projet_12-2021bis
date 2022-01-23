<?php
session_start();
include '../tutoForum/includes/head.php';
?>

<main class="main">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar.php'; ?>
    <section class="section-center column centerAll">
        <div id="demo_box1" class="demo-box">
            <div class="close-block">&times;</div>
            <div class="overlay-content display1 column centerAll">
                <ul class="ul-home column centerAll gap-m">
                    <li><a class="a-home" href="../tutoForum/EA-tuto-html.php">Apprendre les bases</a></li>
                    <li><a class="a-home" href="../tutoForum/CA-forum-home.php">Forum</a></li>
                </ul>
            </div>
        </div>

        <div id="demo_box2" class="demo-box">
            <div class="close-block">&times;</div>
            <div class="overlay-content display2 column centerAll">
                <ul class="ul-home column centerAll gap-m">
                    <li><a class="a-home" href="../tutoForum/EB-tuto-css.php">Apprendre les bases</a></li>
                    <li><a class="a-home" href="../tutoForum/CA-forum-home.php">Forum</a></li>
                </ul>
            </div>
        </div>

        <div id="demo_box3" class="demo-box">
            <div class="close-block">&times;</div>
            <div class="overlay-content display3 column centerAll">
                <ul class="ul-home column centerAll gap-m">
                    <li><a class="a-home" href="../tutoForum/EC-tuto-javascript.php">Apprendre les bases</a></li>
                    <li><a class="a-home" href="../tutoForum/CA-forum-home.php">Forum</a></li>
                </ul>
            </div>
        </div>

        <div id="demo_box4" class="demo-box">
            <div class="close-block">&times;</div>
            <div class="overlay-content display4 column centerAll">
                <ul class="ul-home column centerAll gap-m">
                    <li><a class="a-home" href="#">Editeur de texte</a></li>
                    <li><a class="a-home" href="#">Validateur HTML</a></li>
                    <li><a class="a-home" href="#">Compresser vos images</a></li>
                    <li><a class="a-home" href="../tutoForum/CA-forum-home.php">Forum</a></li>
                </ul>
            </div>
        </div>

        <div class="block-container column centerAll">
            <div class="duo-block flex">
                <div id="block1" class="block">
                    <h2 class="h2-home unselectable row centerAll">HTML</h2>
                </div>

                <div id="block2" class="block">
                    <h2 class="h2-home unselectable row centerAll">CSS</h2>
                </div>
            </div>
            <div class="duo-block flex">
                <div id="block3" class="block">
                    <h2 class="h2-home unselectable row centerAll">JavaScript</h2>
                </div>

                <div id="block4" class="block">
                    <h2 class="h2-home unselectable row centerAll">Liens utiles</h2>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../tutoForum/includes/footer.php'; ?>