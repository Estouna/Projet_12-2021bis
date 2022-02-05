<?php
require('actions-admin/AA-adminSecurityAction.php');
require('actions-admin/AB-adminProfilAction.php');
include '../includes/head.php';
?>

<main class="column centerAlign">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include 'includes-admin/navbar-admin.php'; ?>

    <section class="section-center row centerAll">


        <div class="blockProfil column">

            <!-- 
                ------------------------------ PAGE TITLE ------------------------------
            -->
            <div class="sectionTitle column centerAll">
                <h1 class="titleH1-profil">Bienvenue</h1>
                <span class="nameProfil">Admin</span>
            </div>
            
            <div class="blockBodyProfil column">
                
                <div class="sectionBody1 flex gapXL">
                    <div class="pseudoMail column centerAll gap">
                        <?php
                        $session_admin = $_SESSION['roles'] === "ADMIN";
                        $req_users = $bdd->query('SELECT * FROM users');
                        $users = $req_users->fetch();
                        ?>
                    </div>
                    <div class="blockLinkProfil column centerAll gap">
                        <a class="a-profil neumorph-btn row centerAll" href="#">Afficher les membres</a>
                        <a class="a-profil neumorph-btn row centerAll" href="#">Afficher les topics</a>
                        <a class="a-profil neumorph-btn row centerAll" href="#">Afficher les posts</a>
                        <a class="a-profil neumorph-btn row centerAll" href="#">Créer un modérateur</a>
                        <a class="a-profil neumorph-btn row centerAll" href="#">Modifier mon profil</a>
                        <a class="a-deco row centerAll" href="actions-admin/logoutGestionAction.php">Se déconnecter</a>
                    </div>
                </div>
                <div class="row sectionBody2 centerAll">
                </div>
            </div>
        </div>
    </section>

</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../includes/footer.php'; ?>