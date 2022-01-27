<?php
require('actions/database.php');

$categories = $bdd->query('SELECT * FROM f_category ORDER BY id');
$subcat = $bdd->prepare('SELECT * FROM f_sub_category WHERE id_category = ? ORDER BY id');