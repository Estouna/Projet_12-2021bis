<?php
session_start();
include '../tutoForum/includes/head.php';
?>

<main>
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar-red.php'; ?>

    <section class="section-center column centerAlign">
        <!-- 
            ------------------------------ PAGE TITLE/MIN_NAV ------------------------------
        -->
        <div class="minMenu minMenu-red column centerAll margT-m">
            <h1 class="margB-s"><span class="slash slash-red">&lt;!--</span> HTML <span class="slash slash-red">--&gt;</span></h1>
            <nav>
                <ul class="ul-minMenu row centerAll margT-s">
                    <li class="li-minMenu margR-s"><a class="a-minMenu a-minMenuRed" href="EA-tuto-html.php">Tutoriel</a></li>
                    <li class="li-minMenu margL-s"><a class="a-minMenu a-minMenuRed" href="EAA-balises-html.php">Balises</a></li>
                </ul>
            </nav>
        </div>

    </section>

</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../tutoForum/includes/footer.php'; ?>