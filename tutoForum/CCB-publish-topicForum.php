<?php
require('../tutoForum/actions/users/securityAction.php');
require('../tutoForum/actions/topic/CCB-publish-topicForumAction.php');
include('../tutoForum/includes/head.php');
?>


<main class="column centerAlign">
    <!-- ------------------------------ NAVBAR ------------------------------ -->
    <?php include '../tutoForum/includes/navbar.php'; ?>
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
                            <select class='select-cat neumorph-btn' name='topic-category' id='topic-category'>
                                <option disable='' selected='' value=''>Indiquer la catégorie</option>
                                <option>HTML</option>
                                <option>CSS</option>
                                <option>JavaScript</option>
                                <option>Général</option>
                                <option>Codes</option>
                            </select>
                        </div>
                        <!-- 
                        ------------------------------ TOPIC SUB-CATEGORY ------------------------------
                     -->
                        <div class='column centerAll'>
                            <p class="p-category">Sous-catégorie du sujet</p>
                            <select class='select-cat neumorph-btn' name='topic-SubCategory' id='topic-SubCategory'>
                                <option disable='' selected='' value=''>Indiquer la sous-catégorie</option>
                                <option>Tutos des membres</option>
                                <option>Poser une question</option>
                                <option>HTML/CSS</option>
                                <option>JavaScript</option>
                                <option>Autres</option>
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
                    <a class="a-links" href="../tutoForum/AAE-my-questions.php">Retour</a>
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