<?php
if (isset($JeSuisConnecte)) {
?>
    <nav id="navConnect">

        <label for="touch">
            <span class="spanNav row centerJust centerAlign">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check iconPerso" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                </svg>
            </span>
        </label>
        <input type="checkbox" id="touch">

        <ul class="slide column centerJust centerAlign">
            <li><a href="../tutoForum/profil.php">Profil</a></li>
            <li><a href="../tutoForum/publish-question.php">Publier</a></li>
            <li><a href="../tutoForum/edit-question.php">Modifier</a></li>
            <li><a href="../tutoForum/my-questions.php">Publications</a></li>
            <li><a href="../tutoForum/actions/users/logoutAction.php">Déconnexion</a></li>
        </ul>

    </nav>
<?php
} else { // Pas connecté
?>
    <nav id="navDeconnect">

        <label for="touch">
            <span class="spanNav row centerJust centerAlign">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check iconPerso" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                </svg>
            </span>
        </label>
        <input type="checkbox" id="touch">

        <ul class="slide column centerJust centerAlign">
            <li><a href="../tutoForum/profil.php">Profil</a></li>
            <li><a href="../tutoForum/publish-question.php">Publier</a></li>
            <li><a href="../tutoForum/edit-question.php">Modifier</a></li>
            <li><a href="../tutoForum/my-questions.php">Publications</a></li>
            <li><a href="../tutoForum/actions/users/logoutAction.php">Connexion</a></li>
        </ul>

    </nav>
<?php
}
?>