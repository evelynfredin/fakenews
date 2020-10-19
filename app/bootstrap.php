<?php
$config = require __DIR__ . '/config.php';
require __DIR__ . '/database/Connection.php';
require __DIR__ . '/database/QueryBuilder.php';

// Connects to the database via PDO and builds awesome SQL queries
$query = new QueryBuilder(
    Connection::make($config['db_path'])
);

// Retrieves * rows from the 'database'
$posts = $query->selectAll('posts');
