<?php
session_start();
include '../tutoForum/includes/head.php';
?>

<main>
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar-yellow.php'; ?>

    <section class="section-center column centerAlign">
        <!-- 
            ------------------------------ MENU Tuto/Référence ------------------------------
        -->
        <div class="minMenu minMenu-yellow column centerAll margT-m">
            <h1 class="margB-s"><span class="slash slash-yellow">//</span> JavaScript <span class="slash slash-yellow">//</span></h1>
            <nav>
                <ul class="ul-minMenu row centerAll margT-s">
                    <li class="li-minMenu margR-s"><a class="a-minMenu a-minMenuYellow" href="EC-tuto-javascript.php">Tutoriel</a></li>
                    <li class="li-minMenu margL-s"><a class="a-minMenu a-minMenuYellow" href="ECA-ref-javascript.php">Référence</a></li>
                </ul>
            </nav>
        </div>



      

    </section>

</main>
<!-- ------------------------------ FOOTER------------------------------ -->
<script src="/tutoForum/assets/js/mainMenu.js"></script>
<script src="/tutoForum/assets/js/tuto-javascript.js"></script>
</body>

</html>