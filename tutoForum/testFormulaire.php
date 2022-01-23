<?php
include '../tutoForum/includes/head.php';
require('actions/database.php');


?>


<main class="column centerAlign">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar.php'; ?>
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