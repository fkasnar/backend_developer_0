<?php

use Core\Database;

$db = Database::get();


$sql = "SELECT * FROM `cjenik`";
$prices = $db->query($sql)->all();

require base_path('views/prices/create.view.php');