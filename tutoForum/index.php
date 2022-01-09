<?php
session_start();
include '../tutoForum/includes/head.php';
?>


<!-- En appuyant sur rechercher on verra dans l'URL ?search=mot entré avec des + entre les mots -->
<main class="column centerAlign">
    <?php include '../tutoForum/includes/navbar.php'; ?>

    <section class="section column centerJust centerAlign">

        <div class="">
            <div class="blockWhite">
                <div class="block-color blockRed">
                    <p class="categ row centerJust centerAlign">HTML</p>
                </div>
            </div>
            <div class="blockWhite">
                <div class="block-color blockBlue">
                    <p class="categ row centerJust centerAlign">CSS</p>
                </div>
            </div>
            <div class="blockWhite">
                <div class="block-color blockYellow">
                    <p class="categ row centerJust centerAlign">JavaScrip</p>
                </div>
            </div>
        </div>

    </section>

</main>
<?php include '../tutoForum/includes/footer.php'; ?>