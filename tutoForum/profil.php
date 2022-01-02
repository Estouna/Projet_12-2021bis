<?php
require('actions/users/securityAction.php');
include 'includes/header.php';
?>


<body>
    <main class="column centerJust centerAlign">
        <?php
        if (isset($_SESSION['auth'])) {
        ?>
            <div class="blockProfil column">
                <div class="row centerJust">
                    <h1 class="title-profil">Mon profil</h1>
                </div>
                <div class="pseudoMail column gap">
                    <p class="p-profil">Pseudo : <?= $_SESSION['pseudo'] ?></p>
                    <p class="p-profil">Email : <?= $_SESSION['mail'] ?></p>
                </div>
            </div>
        <?php
        } else {
            header('Location: login.php');
        }
        ?>

    </main>
</body>

</html>