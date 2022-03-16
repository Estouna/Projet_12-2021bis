<?php
session_start();
include '../tutoForum/includes/head.php';
?>

<main>
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar-red.php'; ?>

    <section class="section-center column centerAll">
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


        <!-- ____________________ MENU HAUT DE PAGE ____________________ -->
        <nav id="nav1" class="unselectable margT-m">
            <ul class="navul navul_red column centerAll">
                <li><a href="#javascript" class="a-titleMenu a_red a-titleMenu_red">Le fonctionnement des sites web</a></li>
                <li class="margT-s"><a href="#definition" class="a-subtitleMenu a_red">Votre première page web en HTML </a></li>
                <li class="margT-xs"><a href="#peut-faire" class="a-subtitleMenu a_red">Les balises et leurs attributs</a></li>
                <li class="margT-xs"><a href="#que-fait" class="a-subtitleMenu a_red">Structure de base d'une page HTML5</a></li>

                <li class="margT-s"><a href="#prem-code" class="a-titleMenu a_red a-titleMenu_red">Organisez votre texte</a></li>
                <li class="margT-xs"><a href="#penser-comme" class="a-subtitleMenu a_red">Les paragraphes</a></li>
                <li class="margT-xs"><a href="#ajouter-java" class="a-subtitleMenu a_red">Les titres</a></li>
                <li class="margT-xs"><a href="#ex-jeu" class="a-subtitleMenu a_red">Les listes</a></li>

                <li class="margT-s"><a href="#debogue" class="a-titleMenu a_red a-titleMenu_red">Créez des liens</a></li>
                <li class="margT-xs"><a href="#types-erreurs" class="a-subtitleMenu a_red">Un lien vers un autre site</a></li>
                <li class="margT-xs"><a href="#reparer" class="a-subtitleMenu a_red">Un lien vers une autre page de son site</a></li>
                <li class="margT-xs"><a href="#erreur-logique" class="a-subtitleMenu a_red">Un lien vers une ancre</a></li>

                <li class="margT-s"><a href="#position" class="a-titleMenu a_red a-titleMenu_red">Les images</a></li>
                <li class="margT-xs"><a href="#affichage" class="a-subtitleMenu a_red">Les différents formats d'images</a></li>
                <li class="margT-xs"><a href="#positionnement" class="a-subtitleMenu a_red">Insérer une image</a></li>
                <li class="margT-xs"><a href="#varLet" class="a-subtitleMenu a_red">Les figures</a></li>

                <li class="margT-s"><a href="#listes" class="a-titleMenu a_red a-titleMenu_red">Pratiquez !</a></li>
                <li class="margT-xs"><a href="#operateurs" class="a-subtitleMenu a_red">Exercice 1</a></li>
                <li class="margT-xs"><a href="#increDecrem" class="a-subtitleMenu a_red">Exercice 2</a></li>
                <li class="margT-xs"><a href="#assign" class="a-subtitleMenu a_red">Exercice 3</a></li>

                <li class="margT-s"><a href="#tableaux" class="a-titleMenu a_red a-titleMenu_red">Entraînez-vous en structurant votre CV</a></li>
                <li class="margT-xs"><a href="#typebordure" class="a-subtitleMenu a_red">Le contexte</a></li>
                <li class="margT-xs"><a href="#cellules" class="a-subtitleMenu a_red">Les différentes étapes</a></li>
                <li class="margT-xs"><a href="#positiontitre" class="a-subtitleMenu a_red">Conclusion</a></li>
            </ul>
        </nav>

        <!-- ____________________ MENU BURGER ____________________ -->
        <div id="block-nav" class="flex centerAll">
            <div class="btn">

                <div class="spin-container spin-container_red">
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

            <nav id='nav2' class="nav2_red unselectable column centerAll">

                <div class="menu-wrap1">
                    <ul class='navul2 column centerAll'>
                        <li class="margT-xs"><a href="#javascript" class="a-titleMenu2 a_red a-titleMenu_red">Le fonctionnement des sites web</a></li>
                        <li class="margT-xs"><a href="#definition" class="a-subtitleMenu a_red">Votre première page web en HTML <</a></li>
                        <li class="margT-xs"><a href="#peut-faire" class="a-subtitleMenu a_red">Les balises et leurs attributs</a></li>
                        <li class="margT-xs"><a href="#que-fait" class="a-subtitleMenu a_red">Structure de base d'une page HTML5</a></li>
                    </ul>
                    <ul class='navul2 column centerAll'>
                        <li class="margT-xm"><a href="#prem-code" class="a-titleMenu2 a_red a-titleMenu_red">Organisez votre texte</a></li>
                        <li class="margT-xs"><a href="#penser-comme" class="a-subtitleMenu a_red">Les paragraphes</a></li>
                        <li class="margT-xs"><a href="#ajouter-java" class="a-subtitleMenu a_red">Les titres</a></li>
                        <li class="margT-xs"><a href="#ex-jeu" class="a-subtitleMenu a_red">Les listes</a></li>
                    </ul>
                    <ul class='navul2 column centerAll'>
                        <li class="margT-xm"><a href="#debogue" class="a-titleMenu2 a_red a-titleMenu_red">Créez des liens</a></li>
                        <li class="margT-xs"><a href="#types-erreurs" class="a-subtitleMenu a_red">Un lien vers un autre site</a></li>
                        <li class="margT-xs"><a href="#reparer" class="a-subtitleMenu a_red">Un lien vers une autre page de son site</a></li>
                        <li class="margT-xs "><a href="#erreur-logique" class="a-subtitleMenu a_red">Un lien vers une ancre</a></li>
                    </ul>
                </div>

                <div class="menu-wrap2">
                    <ul class='navul2b column centerAll'>
                        <li class="margT-xm"><a href="#position" class="a-titleMenu2 a_red a-titleMenu_red">Les images</a></li>
                        <li class="margT-xs"><a href="#affichage" class="a-subtitleMenu a_red">Les différents formats d'images</a></li>
                        <li class="margT-xs"><a href="#positionnement" class="a-subtitleMenu a_red">Insérer une image</a></li>
                        <li class="margT-xs"><a href="#varLet" class="a-subtitleMenu a_red">Les figures</a></li>
                    </ul>
                    <ul class='navul2b column centerAll'>
                        <li class="margT-xm"><a href="#listes" class="a-titleMenu2 a_red a-titleMenu_red">Pratiquez !</a></li>
                        <li class="margT-xs"><a href="#operateurs" class="a-subtitleMenu a_red">Exercice 1</a></li>
                        <li class="margT-xs"><a href="#increDecrem" class="a-subtitleMenu a_red">Exercice 2</a></li>
                        <li class="margT-xs"><a href="#assign" class="a-subtitleMenu a_red">Exercice 3</a></li>
                    </ul>
                    <ul class='navul2b column centerAll'>
                        <li class="margT-xm"><a href="#tableaux" class="a-titleMenu2 a_red a-titleMenu_red">Entraînez-vous en structurant votre CV</a></li>
                        <li class="margT-xs"><a href="#typebordure" class="a-subtitleMenu a_red">Le contexte</a></li>
                        <li class="margT-xs"><a href="#cellules" class="a-subtitleMenu a_red">Les différentes étapes</a></li>
                        <li class="margT-xs margB-xs"><a href="#positiontitre" class="a-subtitleMenu a_red">Conclusion</a></li>
                    </ul>
                </div>
            </nav>
        </div>


    </section>

</main>
<!-- ------------------------------ FOOTER------------------------------ -->
<script src="/tutoForum/assets/js/mainMenu.js"></script>
<script src="/tutoForum/assets/js/tuto-html.js"></script>
</body>

</html>