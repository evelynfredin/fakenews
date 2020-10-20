<?php
$config = require __DIR__ . '/config.php';
require __DIR__ . '/database/Connection.php';
require __DIR__ . '/database/QueryBuilder.php';

// Connects to the database via PDO and builds awesome SQL queries
$query = new QueryBuilder(
    Connection::make($config['db_path'])
);

// Calls the Querybuilder
$posts = $query->selectAll('posts');
$published = $query->selectPublic('posts', 'published');
