<?php

return [
    'database' => [
        'name' => 'my_project',
        'connection' => 'mysql:host=localhost',
        'username' => 'root',
        'password' => '',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ],
    ]
];
