<?php

use Core\Database;

$db = Database::get();


$sql = "SELECT * FROM `mediji`";
$medias = $db->query($sql)->all();

require base_path('views/media/create.view.php');