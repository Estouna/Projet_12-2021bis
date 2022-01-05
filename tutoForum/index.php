<?php
session_start();
require('actions/database.php');
include 'includes/header.php';
include 'includes/footer.php';
?>



<main class="column centerJust centerAlign">

    <div>
        <form class="form-search">
            <div class="row centerJust centerAlign">
                <div>
                    <input type="search" name="search" class="barSearch">
                </div>
                <div>
                    <button class="btnSearch">Rechercher</button>
                </div>
            </div>
        </form>
    </div>

</main>