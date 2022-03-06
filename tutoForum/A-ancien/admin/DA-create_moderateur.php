<?php

require('../actions/database.php');

$role_user = $bdd->query('SELECT * FROM users WHERE roles NOT IN ("ADMIN") ORDER BY roles DESC');