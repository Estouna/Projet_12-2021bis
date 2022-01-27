<?php
require('../tutoForum/actions/users/securityAction.php');
include '../tutoForum/includes/head.php';
require('actions/database.php');

if (!isset($_SESSION['id'])) {
    header('Location: /forum');
    exit;
}



if (!empty($_POST)) {
    extract($_POST);

    // Bouton submit
    if (isset($_POST['creer-topic'])) {

        // Récupération de nos différents champs
        $categorie = (int) htmlentities(trim($categorie));

        if (!empty($categorie)) {

            // On vérifit que la catégorie existe par son id et son nom 
            $verif_cat = $DB->query("SELECT id, titre FROM forum WHERE id = ?", array($categorie));

            $verif_cat = $verif_cat->fetch();
            if (isset($verif_cat['id'])) {

                $date_creation = date('Y-m-d H:i:s');

            $DB->insert(
                "INSERT INTO 
                topic (id_forum, titre, contenu, date_creation, id_user) 
                VALUES (?, ?, ?, ?, ?)",
                array($categorie, $titre, $contenu, $date_creation, $_SESSION['id'])
            );

            header('Location: /forum/' . $categorie);

            exit;
            }else{
                $erreur = "Cette catégorie n'existe pas";
            }
        } else {
            $erreur = "Les champs catégories ne peuvent pas ^etre vides";
        }



        if ($valid) {

            $date_creation = date('Y-m-d H:i:s');



            $DB->insert(
                "INSERT INTO topic (id_forum, titre, contenu, date_creation, id_user) VALUES 

          (?, ?, ?, ?, ?)",

                array($categorie, $titre, $contenu, $date_creation, $_SESSION['id'])
            );



            header('Location: /forum/' . $categorie);

            exit;
        }
    }
}

?>


<main class="column centerAlign">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar.php'; ?>
    <!--
    <section class="section-center row centerAll">
        <form method="POST" class="column centerJust centerAlign">


            <div class="block-identite2">

                <P>Choisir la catégorie</P>
                <div class='groupform'>
                    <select class='casesAutres' name='category' id='category' required>
                        <optgroup label='HTML'>
                            <option disable='' selected='' value=''>Indiquer la catégorie</option>
                            <option value='sub_cat1'>Tutos des membres</option>
                            <option value='sub_cat2'>Poser une question</option>
                        </optgroup>
                        <optgroup label="CSS">
                            <option value='sub_cat3'>Tutos des membres</option>
                            <option value='sub_cat4'>Poser une question</option>
                        </optgroup>
                        <optgroup label="JavaScript">
                            <option value='sub_cat5'>Tutos des membres</option>
                            <option value='sub_cat6'>Poser une question</option>
                        </optgroup>
                        <optgroup label="Général">
                            <option value='cat-4'>Général</option>
                        </optgroup>
                        <optgroup label="Codes">
                            <option value='sub_cat7'>Code HTML/CSS</option>
                            <option value='sub_cat8'>Code JavaScript</option>
                            <option value='sub_cat9'>Autres</option>
                        </optgroup>
                    </select>
                </div>
            -->
    <div class='column centerAll margT'>
        <select name="topic-category" class="select-cat neumorph-btn" id="inputGroupSelect01">

            <?php
            if (!isset($category)) {
            ?>
                <option selected>Indiquer la catégorie</option>
            <?php
            } else {
            ?>
                <option value="<?= $category ?>"><?= $verif_cat['name'] ?></option>
            <?php
            }
            ?>

            <?php
            // Requête pour sélectionner toutes les catégories dans forum
            $req_cat = $bdd->query("SELECT * FROM f_category");
            $req_cat = $req_cat->fetchALL();

            // Pour chaque catégorie
            foreach ($req_cat as $rc) {
            ?>
                <!-- $rc['id] = id de la catégorie, $rc['titre] = le nom de la catégorie  -->
                <option value="<?= $rc['id'] ?>"><?= $rc['name'] ?></option>
            <?php
            }
            ?>

        </select>
    </div>

    <div class='column centerAll'>
        <select class='select-cat neumorph-btn' name='topic-SubCategory' id='topic-SubCategory'>

            <?php
            if (!isset($sub_category)) {
            ?>
                <option selected>Indiquer la sous-catégorie</option>
            <?php
            } else {
            ?>
                <option value=""><?= $sub_category ?>"><?= $verif_sub_cat['name'] ?></option>
            <?php
            }
            ?>

            <?php
            // Requête pour sélectionner toutes les sous-catégories dans f_sub_category
            $req_sub_cat = $bdd->query("SELECT * FROM f_sub_category");
            $req_sub_cat = $req_sub_cat->fetchALL();

            // Pour chaque catégorie
            foreach ($req_sub_cat as $rsc) {
                if ($category) {
            ?>
                    <!-- $rsc['id] = id de la sous-catégorie, $rsc['name] = le nom de la sous-catégorie  -->
                    <option value="<?= $rsc['id'] ?>"><?= $rsc['name'] ?></option>
            <?php
                }
            }
            ?>

        </select>
    </div>


    <div class="row gap centerAll">
        <input id="validate" class="btn-green neumorph-btn" type="submit" name="cat-validate" value="validate">
    </div>

    </div>


    <div class="message row centerJust centerAlign">
        <?php
        if (isset($erreur)) {
            echo '<span class="red">' . $erreur . "</span>";
        }
        if (isset($valide)) {
            echo '<span class="green">' . $valide . "</span>";
        }
        ?>
    </div>
    </form>
    </section>
</main>
<!-- ------------------------------ FOOTER ------------------------------ -->
<?php include '../tutoForum/includes/footer.php'; ?>