<?php

return [
    'host' => 'localhost',
    'dbname' => 'videoteka',
    'user' => 'root',
    'password' => 'fkasnar',
    'charset' => 'utf8mb4',
    'options' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ],
];