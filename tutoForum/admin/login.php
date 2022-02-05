<?php
require('actions-admin/loginAction.php');
include '../includes/head.php';
?>

<main class="column centerAlign">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php //include 'includes-admin/navbar-admin.php'; ?>

    <section class="section-center row centerJust centerAlign">
        <form action="" method="POST" class="shadow-green column centerJust centerAlign">

            <div class="neumorph-form form">

                <div class="column centerJust centerAlign">
                    <!-- 
                         ------------------------------ PAGE TITLE ------------------------------
                     -->
                    <div class="row centerJust">
                        <legend>Connexion admin</legend>
                    </div>

                    <div>
                        <div class="labelInput column">
                            <label for="mailConnect">Email :</label>
                            <input type="email" class="input-form neumorph-btn" name="mailConnect" placeholder="Email">
                        </div>

                        <div class="labelInput column">
                            <label for="passwordConnect">Mot de passe :</label>
                            <input type="password" class="input-form neumorph-btn" name="passwordConnect" placeholder="Mot de passe">
                        </div>

                        <div class="column centerJust centerAlign">
                            <input id="connect" class="btn-green neumorph-btn" type="submit" name="validate" value="CONNEXION">
                        </div>
                    </div>
                </div>

                <div class="message row centerJust centerAlign">
                    <?php
                    if (isset($erreur)) {
                        echo '<div class="block-mess"><span class="red">' . $erreur . "</span></div>";
                    }
                    if (isset($valide)) {
                        echo '<span class="green">' . $valide . "</span>";
                    }

                    ?>
                </div>
            </div>

        </form>
    </section>

</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../includes/footer.php'; ?>