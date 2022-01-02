<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../tutoForum/assets/css/styleForAll.css">
    <link rel="stylesheet" href="../../tutoForum/assets/css/form.css">
    <link rel="stylesheet" href="../../tutoForum/assets/css/usersAndAdmin.css">
    <title>Forum</title>
</head>

<?php

if (isset($_SESSION['auth'])) {
?>

    <header class="row centerJust centerAlign">

        <nav id="navMenu">
            <ul class="row centerJust centerAlign">
                <li class="row centerJust centerAlign"><a href="../tutoForum/index.php">Accueil</a></li>
                <li><a href="#">Tuto</a></li>
                <li><a href="#">Forum</a></li>
            </ul>
        </nav>


        <nav id="navConnect">

            <label for="touch">
                <span class="spanNav row centerJust centerAlign">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check iconPersoCo" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                    </svg>
                </span>
            </label>
            <input type="checkbox" id="touch">

            <ul class="slide column centerJust centerAlign">
                <li><a href="../tutoForum/profil.php"><?= $_SESSION['pseudo'] ?></a></li>
                <li><a href="../tutoForum/publish-question.php">Publier</a></li>
                <li><a href="../tutoForum/my-questions.php">Publications</a></li>
                <li><a href="../tutoForum/actions/users/logoutAction.php">Déconnexion</a></li>
            </ul>

        </nav>
    </header>
<?php

} else {

?>

    <header class="row centerJust centerAlign">

        <nav id="navMenu">
            <ul class="row centerJust centerAlign">
                <li class="row centerJust centerAlign"><a href="../tutoForum/index.php">Accueil</a></li>
                <li><a href="#">Tuto</a></li>
                <li><a href="#">Forum</a></li>
                <li><a href="../tutoForum/login.php">Connexion</a></li>
            </ul>
        </nav>


        <nav id="navConnect">

            <label for="touch">
                <span class="spanNav row centerJust centerAlign">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-dash iconPersoDeco" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        <path fill-rule="evenodd" d="M11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </span>
            </label>
            <input type="checkbox" id="touch">

            <ul class="slide2 column centerJust centerAlign">
                <li><a href="../../tutoForum/login.php">Connexion</a></li>
            </ul>

        </nav>
    </header>
<?php
}
?>