<?php
session_start();
include '../tutoForum/includes/head.php';
?>

<main class="main">
    <?php include '../tutoForum/includes/navbar.php'; ?>

    <div id="demo_box1" class="demo-box">
        <div class="close-block">&times;</div>
        <div class="overlay-content display1 column centerJust centerAlign">
            <p class="p-home">Section 1</p>
        </div>
    </div>

    <div id="demo_box2" class="demo-box">
        <div class="close-block">&times;</div>
        <div class="overlay-content display2 column centerJust centerAlign">
            <p class="p-home">Section 2</p>
        </div>
    </div>

    <div id="demo_box3" class="demo-box">
        <div class="close-block">&times;</div>
        <div class="overlay-content display3 column centerJust centerAlign">
            <p class="p-home">Section 3</p>
        </div>
    </div>

    <div id="demo_box4" class="demo-box">
        <div class="close-block">&times;</div>
        <div class="overlay-content display4 column centerJust centerAlign">
            <p class="p-home">Section 4</p>
        </div>
    </div>

    <div class="block-container column centerJust centerAlign">
        <div class="duo-block flex">
            <div id="block1" class="block">
                <h2 class="h2-home unselectable row centerJust centerAlign">HTML</h2>
            </div>

            <div id="block2" class="block">
                <h2 class="h2-home unselectable row centerJust centerAlign">CSS</h2>
            </div>
        </div>
        <div class="duo-block flex">
            <div id="block3" class="block">
                <h2 class="h2-home unselectable row centerJust centerAlign">JavaScript</h2>
            </div>

            <div id="block4" class="block">
                <h2 class="h2-home unselectable row centerJust centerAlign">Liens utiles</h2>
            </div>
        </div>
    </div>

</main>
<?php include '../tutoForum/includes/footer.php'; ?>