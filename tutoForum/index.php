<?php
session_start();
include '../tutoForum/includes/head.php';
?>

<main class="main">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar.php'; ?>

    <div id="demo_box1" class="demo-box">
        <div class="close-block">&times;</div>
        <div class="overlay-content display1 column centerAll">
            <p class="p-home">
                <a class="a-home" href="../tutoForum/EE-html.php">Apprendre HTML</a>
            </p>
        </div>
    </div>

    <div id="demo_box2" class="demo-box">
        <div class="close-block">&times;</div>
        <div class="overlay-content display2 column centerAll">
            <p class="p-home">
                <a class="a-home" href="../tutoForum/EE-css.php">Apprendre CSS</a>
            </p>
        </div>
    </div>

    <div id="demo_box3" class="demo-box">
        <div class="close-block">&times;</div>
        <div class="overlay-content display3 column centerAll">
            <p class="p-home">
                <a class="a-home" href="../tutoForum/EE-javascript.php">Apprendre JavaScript</a>
            </p>
        </div>
    </div>

    <div id="demo_box4" class="demo-box">
        <div class="close-block">&times;</div>
        <div class="overlay-content display4 column centerAll">
            <p class="p-home">
                Les codes de nos membres
            </p>
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

</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../tutoForum/includes/footer.php'; ?>