<?php

if (isset($_SESSION['auth'])) {
    require('actions/users/AAC-profilAction.php');
?>

    <header id="header" class="header-yellow row centerAlign">

        <nav id="navMenu centerAll">
            <div class="nav-block1 centerAll">
                <ul class="navMenu-ul navMenu-ul-yellow row  centerAll">
                    <li class="navMenu-li"><a class="a-navMenu a-navMenu-yellow" href="/tutoForum/index.php">ACCUEIL</a></li>
                    <li class="li-dropdown a-navMenu-yellow column centerAll unselectable">TUTO
                        <ul class="panel panel-yellow column centerAll">
                            <li class="navMenu-li"><a class=" a-html a-navMenu-yellow" href="/tutoForum/EA-tuto-html.php">HTML</a></li>
                            <li class="navMenu-li"><a class=" a-css a-navMenu-yellow" href="/tutoForum/EB-tuto-css.php">CSS</a></li>
                            <li class="navMenu-li"><a class=" a-java a-navMenu-yellow" href="/tutoForum/EC-tuto-javascript.php">JavaScript</a></li>
                        </ul>
                    </li>
                    <li class="navMenu-li"><a class="a-navMenu a-navMenu-yellow" href="/tutoForum/CA-forum-home.php">FORUM</a></li>
                    <li class="navMenu-li"><a class="a-navMenu a-navMenu-yellow" href="/tutoForum/AAH-searchQuestions.php">RECHERCHER</a></li>
                </ul>
            </div>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>


        <nav id="navConnect">
            
            <?php if ($_SESSION['roles'] === "ADMIN") { ?>
                <a class="link-profil a-navMenu-yellow" href="../../tutoForum/admin/home-admin.php"><?= $_SESSION['pseudo'] ?></a>
            <?php } ?>
            <?php if ($_SESSION['roles'] === "MODERATEUR") { ?>
                <a class="link-profil a-navMenu-yellow" href="../../tutoForum/admin/home-moderateur.php"><?= $_SESSION['pseudo'] ?></a>
            <?php } ?>
            <?php if ($membre) { ?>
                <a class="link-profil a-navMenu-yellow" href="../../tutoForum/AAC-profil.php"><?= $userInfo['pseudo'] ?></a>
            <?php } ?>

            <div>
                <label for="touch">
                    <span class="spanNav row centerAlign">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check iconPersoCo iconPersoCo-yellow" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        </svg>
                    </span>
                </label>
                <input type="checkbox" id="touch" name="touch">

                <ul class="slide slide-yellow column centerAll">
                    <li><a class="a-navMenu-yellow" href="../../tutoForum/AAE-my-questions.php">Mes topics</a></li>
                    <li><a class="a-navMenu-yellow" href="../../tutoForum/AAI-my-answers.php">Mes posts</a></li>
                    <li><a class="a-navMenu-yellow" href="../../tutoForum/actions/users/logoutAction.php">D??connexion</a></li>
                </ul>
            </div>

        </nav>
    </header>

<?php

} else {

?>

    <header id="header" class="header-yellow row centerAlign">

        <nav id="navMenu">
            <ul class="navMenu-ul navMenu-ul-yellow row centerJust centerAlign">
                <li class="navMenu-li"><a class="a-navMenu a-navMenu-yellow" href="../../tutoForum/index.php">ACCUEIL</a></li>
                <li class="li-dropdown a-navMenu-yellow column centerAll unselectable">TUTO
                    <ul class="panel panel-yellow column centerAll">
                        <li class="navMenu-li"><a class=" a-html a-navMenu-yellow" href="../../tutoForum/EA-tuto-html.php">HTML</a></li>
                        <li class="navMenu-li"><a class=" a-css a-navMenu-yellow" href="../../tutoForum/EB-tuto-css.php">CSS</a></li>
                        <li class="navMenu-li"><a class=" a-java a-navMenu-yellow" href="../../tutoForum/EC-tuto-javascript.php">JavaScript</a></li>
                    </ul>
                </li>
                <li class="navMenu-li"><a class="a-navMenu a-navMenu-yellow" href="../../tutoForum/CA-forum-home.php">FORUM</a></li>
                <li class="navMenu-li"><a class="a-navMenu a-navMenu-yellow" href="../../tutoForum/AAH-searchQuestions.php">RECHERCHER</a></li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>


        <nav id="navConnect">
            <a class="link-profil a-navMenu-yellow" href="../../tutoForum/AAB-login.php">Se connecter</a>
            <div>
                <label for="touch">
                    <span class="spanNav row centerAlign">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-dash iconPersoDeco iconPersoDeco-yellow" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            <path fill-rule="evenodd" d="M11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </span>
                </label>
                <input type="checkbox" id="touch" name="touch">

                <ul class="slide2 slide2-yellow column centerJust centerAlign">
                    <li><a class="a-navMenu-yellow" href="../../tutoForum/AAB-login.php">Connexion</a></li>
                </ul>
            </div>
        </nav>
    </header>
<?php
}
?>