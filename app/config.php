<?php

declare(strict_types=1);

return [
    'db_path' =>  sprintf('sqlite:%s/database/fakenews.db', __DIR__),
    'charset' => 'utf8mb4',
    'options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ]
];
