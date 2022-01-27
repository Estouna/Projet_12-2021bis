<?php
require('actions/database.php');

$categorie = $bdd->query('SELECT * FROM f_category ORDER BY id');
$subCat = $bdd->prepare('SELECT * FROM f_sub_category WHERE id_category = ? ORDER BY id');
