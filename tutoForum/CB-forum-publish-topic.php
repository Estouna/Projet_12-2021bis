<?php
require('../tutoForum/actions/users/securityAction.php');
require('../tutoForum/actions/topic/CB-publish-topicForumAction.php');
include('../tutoForum/includes/head.php');
?>


<main class="column centerAlign">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar-green.php'; ?>
    <section class="section-center row centerJust centerAlign">
        <!-- 
            ------------------------------ PUBLISH TOPIC FORM ------------------------------
        -->
        <form method="POST" class="shadow-green">

            <div class="neumorph-form formTextarea form form-publish-topic column centerAll">

                <div class="column centerAll">
                    <!-- 
                         ------------------------------ PAGE TITLE ------------------------------
                     -->
                    <div class="row centerJust">
                        <legend>Créer un sujet</legend>
                    </div>
                    <!-- 
                        ------------------------------ TOPIC TITLE ------------------------------
                     -->
                    <div class="column">
                        <label for="title">Titre du sujet</label>
                        <input class="textTitle neumorph-btn" type="text" name="topic-title" maxlength="70">
                    </div>
                    <!-- 
                        ------------------------------ TOPIC CATEGORY ------------------------------
                     -->

                    <div class='column centerAll'>
                        <p class="p-category">Catégorie du sujet</p>
                        <div class='cat-title  row centerAll'>
                            <div><?= $category ?></div>
                        </div>
                    </div>
                    <!-- 
                        ------------------------------ TOPIC SUB-CATEGORY ------------------------------
                     -->
                    <div class='column centerAll'>
                        <p class="p-category">Sous-catégorie du sujet</p>
                        <select class='select-cat neumorph-btn' name='topic-SubCategory' id='topic-SubCategory'>
                            <?php while ($sc = $sub_category->fetch()) { ?>
                                <option value="<?= $sc['id'] ?>"><?= $sc['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <!-- 
                            ------------------------------ TOPIC DESCRIPTION ------------------------------
                        -->
                    <div class="column">
                        <label for="description">Description du sujet</label>
                        <textarea class="textareaDescription neumorph-btn" name="topic-description"></textarea>
                    </div>
                    <!-- 
                            ------------------------------ TOPIC CONTENT ------------------------------
                        -->
                    <div class="column">
                        <label for="content">Contenu du sujet</label>
                        <textarea class="textareaContent neumorph-btn" name="topic-content"></textarea>
                    </div>
                    <!-- 
                            ------------------------------ TOPIC CHECKBOX NOTIFIED ------------------------------
                        -->
                    <div class="row centerAll gap">
                        <input class="checkbox-notif" type="checkbox" name="topic-checkbox">
                        <label class="label-checkbox-notif" for="content">Me notifier les réponses par email</label>
                    </div>
                </div>
                <!-- 
                        ------------------------------ TOPIC BTN SUBMIT ------------------------------
                    -->
                <div class="row gap centerAll">
                    <input id="publier" class="btn-green neumorph-btn" type="submit" name="topic-validate" value="PUBLIER">
                    <a class="a-links" href="../tutoForum/CA-forum-home.php">Retour</a>
                </div>
                <!-- 
                     ------------------------------ ERROR/VALID MESSAGE ------------------------------
                 -->
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
<?php include '../tutoForum/includes/footer.php'; ?>