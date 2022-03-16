<?php
session_start();
include '../tutoForum/includes/head.php';
?>

<main>
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar-blue.php'; ?>

    <section class="section-center column centerAlign">
        <!-- 
            ------------------------------ PAGE TITLE/MIN_NAV ------------------------------
        -->
        <div class="minMenu minMenu-blue column centerAll margT-m">
            <h1 class="margB-s"><span class="slash slash-blue">/*</span> CSS <span class="slash slash-blue">*/</span></h1>
            <nav>
                <ul class="ul-minMenu row centerAll margT-s">
                    <li class="li-minMenu margR-s"><a class="a-minMenu a-minMenuBlue" href="EB-tuto-css.php">Tutoriel</a></li>
                    <li class="li-minMenu margL-s"><a class="a-minMenu a-minMenuBlue" href="EBA-propri-css.php">Propriétés</a></li>
                </ul>
            </nav>
        </div>

    </section>

</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../tutoForum/includes/footer.php'; ?>