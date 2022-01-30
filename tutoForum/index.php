<?php
session_start();
include '../tutoForum/includes/head.php';
?>

<main class="main">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar.php'; ?>
    <section class="section-center column centerAll">
        <h1 class="h1-home">Bienvenue sur Tutotoform</h1>
        <p class="p-subTitle margB-m">Le site où vous trouverez tout ce qu'il vous faut pour apprendre à coder.</p>
        <div id="demo_box1" class="demo-box">
            <div class="close-block">&times;</div>
            <div class="overlay-content display1 column centerAll">
                <ul class="ul-home column centerAll gap-l">
                    <li><a class="a-home" href="../tutoForum/EA-tuto-html.php">Apprendre les bases de HTML</a></li>
                    <li><a class="a-home" href="../tutoForum/CC-forum-topics-view.php?categorie=html&souscategorie=tutos-html-des-membres">Tutos HTML de nos membres</a></li>
                    <li><a class="a-home" href="../tutoForum/CA-forum-home.php">Forum</a></li>
                </ul>
            </div>
        </div>

        <div id="demo_box2" class="demo-box">
            <div class="close-block">&times;</div>
            <div class="overlay-content display2 column centerAll">
                <ul class="ul-home column centerAll gap-l">
                    <li><a class="a-home" href="../tutoForum/EB-tuto-css.php">Apprendre les bases de CSS</a></li>
                    <li><a class="a-home" href="../tutoForum/CC-forum-topics-view.php?categorie=css&souscategorie=tutos-css-des-membres">Tutos CSS de nos membres</a></li>
                    <li><a class="a-home" href="../tutoForum/CA-forum-home.php">Forum</a></li>
                </ul>
            </div>
        </div>

        <div id="demo_box3" class="demo-box">
            <div class="close-block">&times;</div>
            <div class="overlay-content display3 column centerAll">
                <ul class="ul-home column centerAll gap-l">
                    <li><a class="a-home" href="../tutoForum/EC-tuto-javascript.php">Apprendre les bases de JavaScript</a></li>
                    <li><a class="a-home" href="../tutoForum/CC-forum-topics-view.php?categorie=javascript&souscategorie=tutos-javascript-des-membres">Tutos JavaScript de nos membres</a></li>
                    <li><a class="a-home" href="../tutoForum/CA-forum-home.php">Forum</a></li>
                </ul>
            </div>
        </div>

        <div id="demo_box4" class="demo-box">
            <div class="close-block">&times;</div>
            <div class="overlay-content display4 column centerAll">
                <ul class="ul-home column centerAll gap-l">
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