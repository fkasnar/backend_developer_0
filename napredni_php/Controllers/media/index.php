<?php

use Core\Database;

$db = Database::get();

$sql = "SELECT * FROM `mediji`";

$medias = $db->query($sql)->all();

$pageTitle = 'Medij';

require base_path('views/media/index.view.php');