<?php
session_start();
include '../tutoForum/includes/head.php';
?>

<main>
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar-blue.php'; ?>

    <section class="section-center column centerAll">
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


        <!-- ____________________ MENU HAUT DE PAGE ____________________ -->
        <nav id="nav1" class="unselectable margT-m">
            <ul class="navul navul_blue column centerAll">
                <li><a href="#javascript" class="a-titleMenu a_blue a-titleMenu_blue">Mettez en place le CSS</a></li>
                <li class="margT-s"><a href="#definition" class="a-subtitleMenu a_blue">La petite histoire du CSS</a></li>
                <li class="margT-xs"><a href="#peut-faire" class="a-subtitleMenu a_blue">Où écrit-on le CSS ?</a></li>
                <li class="margT-xs"><a href="#que-fait" class="a-subtitleMenu a_blue">Appliquer un style : sélectionner une balise</a></li>

                <li class="margT-s"><a href="#prem-code" class="a-titleMenu a_blue a-titleMenu_blue">Formatez du texte</a></li>
                <li class="margT-xs"><a href="#penser-comme" class="a-subtitleMenu a_blue">La taille</a></li>
                <li class="margT-xs"><a href="#ajouter-java" class="a-subtitleMenu a_blue">La police</a></li>
                <li class="margT-xs"><a href="#ex-jeu" class="a-subtitleMenu a_blue">Italique, gras, souligné…</a></li>

                <li class="margT-s"><a href="#debogue" class="a-titleMenu a_blue a-titleMenu_blue">Ajoutez de la couleur et un fond</a></li>
                <li class="margT-xs"><a href="#types-erreurs" class="a-subtitleMenu a_blue">Couleur du texte</a></li>
                <li class="margT-xs"><a href="#reparer" class="a-subtitleMenu a_blue">Couleur de fond</a></li>
                <li class="margT-xs"><a href="#erreur-logique" class="a-subtitleMenu a_blue">Images de fond</a></li>

                <li class="margT-s"><a href="#position" class="a-titleMenu a_blue a-titleMenu_blue">Créez des bordures et des ombres</a></li>
                <li class="margT-xs"><a href="#affichage" class="a-subtitleMenu a_blue">Bordures standard</a></li>
                <li class="margT-xs"><a href="#positionnement" class="a-subtitleMenu a_blue">Bordures arrondies</a></li>
                <li class="margT-xs"><a href="#varLet" class="a-subtitleMenu a_blue">Les ombres</a></li>

                <li class="margT-s"><a href="#listes" class="a-titleMenu a_blue a-titleMenu_blue">Créez des apparences dynamiques</a></li>
                <li class="margT-xs"><a href="#operateurs" class="a-subtitleMenu a_blue">Au survol</a></li>
                <li class="margT-xs"><a href="#increDecrem" class="a-subtitleMenu a_blue">Au clic et lors de la sélection</a></li>
                <li class="margT-xs"><a href="#assign" class="a-subtitleMenu a_blue">Lorsque le lien a déjà été consulté</a></li>

                <li class="margT-s"><a href="#tableaux" class="a-titleMenu a_red a-titleMenu_blue">Entraînez-vous en mettant en forme votre CV</a></li>
                <li class="margT-xs"><a href="#typebordure" class="a-subtitleMenu a_blue">Le contexte</a></li>
                <li class="margT-xs"><a href="#cellules" class="a-subtitleMenu a_blue">Votre mission</a></li>
                <li class="margT-xs"><a href="#positiontitre" class="a-subtitleMenu a_blue">Conclusion</a></li>
            </ul>
        </nav>

        <!-- ____________________ MENU BURGER ____________________ -->
        <div id="block-nav" class="flex centerAll">
            <div class="btn">

                <div class="spin-container spin-container_blue">
                    <div class="front">
                        <div class="barSpin b1"></div>
                        <div class="barSpin b2"></div>
                        <div class="barSpin b3"></div>
                    </div>


                    <div class="back">
                        <div class="barSpin b1 b-back"></div>
                        <div class="barSpin b3 b-back"></div>
                    </div>
                </div>

            </div>

            <nav id='nav2' class="nav2_blue unselectable column centerAll">

                <div class="menu-wrap1">
                    <ul class='navul2 column centerAll'>
                        <li class="margT-xs"><a href="#javascript" class="a-titleMenu2 a_blue a-titleMenu_blue">Mettez en place le CSS</a></li>
                        <li class="margT-xs"><a href="#definition" class="a-subtitleMenu a_blue">La petite histoire du CSS</a></li>
                        <li class="margT-xs"><a href="#peut-faire" class="a-subtitleMenu a_blue">Où écrit-on le CSS ?</a></li>
                        <li class="margT-xs"><a href="#que-fait" class="a-subtitleMenu a_blue">Appliquer un style : sélectionner une balise</a></li>
                    </ul>
                    <ul class='navul2 column centerAll'>
                        <li class="margT-xm"><a href="#prem-code" class="a-titleMenu2 a_blue a-titleMenu_blue">Formatez du texte</a></li>
                        <li class="margT-xs"><a href="#penser-comme" class="a-subtitleMenu a_blue">La taille</a></li>
                        <li class="margT-xs"><a href="#ajouter-java" class="a-subtitleMenu a_blue">La police</a></li>
                        <li class="margT-xs"><a href="#ex-jeu" class="a-subtitleMenu a_blue">Italique, gras, souligné…</a></li>
                    </ul>
                    <ul class='navul2 column centerAll'>
                        <li class="margT-xm"><a href="#debogue" class="a-titleMenu2 a_blue a-titleMenu_blue">Ajoutez de la couleur et un fond</a></li>
                        <li class="margT-xs"><a href="#types-erreurs" class="a-subtitleMenu a_blue">Couleur du texte</a></li>
                        <li class="margT-xs"><a href="#reparer" class="a-subtitleMenu a_blue">Couleur de fond</a></li>
                        <li class="margT-xs "><a href="#erreur-logique" class="a-subtitleMenu a_blue">Images de fond</a></li>
                    </ul>
                </div>

                <div class="menu-wrap2">
                    <ul class='navul2b column centerAll'>
                        <li class="margT-xm"><a href="#position" class="a-titleMenu2 a_blue a-titleMenu_blue">Créez des bordures et des ombres</a></li>
                        <li class="margT-xs"><a href="#affichage" class="a-subtitleMenu a_blue">Bordures standard</a></li>
                        <li class="margT-xs"><a href="#positionnement" class="a-subtitleMenu a_blue">Bordures arrondies</a></li>
                        <li class="margT-xs"><a href="#varLet" class="a-subtitleMenu a_blue">Les ombres</a></li>
                    </ul>
                    <ul class='navul2b column centerAll'>
                        <li class="margT-xm"><a href="#listes" class="a-titleMenu2 a_blue a-titleMenu_blue">Créez des apparences dynamiques</a></li>
                        <li class="margT-xs"><a href="#operateurs" class="a-subtitleMenu a_blue">Au survol</a></li>
                        <li class="margT-xs"><a href="#increDecrem" class="a-subtitleMenu a_blue">Au clic et lors de la sélection</a></li>
                        <li class="margT-xs"><a href="#assign" class="a-subtitleMenu a_blue">Lorsque le lien a déjà été consulté</a></li>
                    </ul>
                    <ul class='navul2b column centerAll'>
                        <li class="margT-xm"><a href="#tableaux" class="a-titleMenu2 a_blue a-titleMenu_blue">Entraînez-vous en mettant en forme votre CV</a></li>
                        <li class="margT-xs"><a href="#typebordure" class="a-subtitleMenu a_blue">Le contexte</a></li>
                        <li class="margT-xs"><a href="#cellules" class="a-subtitleMenu a_blue">Votre mission</a></li>
                        <li class="margT-xs margB-xs"><a href="#positiontitre" class="a-subtitleMenu a_blue">Conclusion</a></li>
                    </ul>
                </div>
            </nav>

        </div>


    </section>

</main>
<!-- ------------------------------ FOOTER------------------------------ -->
<script src="/tutoForum/assets/js/mainMenu.js"></script>
<script src="/tutoForum/assets/js/tuto-css.js"></script>
</body>

</html>