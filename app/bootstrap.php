<?php
$config = require __DIR__ . '/config.php';
require __DIR__ . '/database/Connection.php';
require __DIR__ . '/database/QueryBuilder.php';

// Connects to the database via PDO and builds awesome SQL queries
$query = new QueryBuilder(
    Connection::make($config['db_path'])
);

// Select all elements in a given DB Table
$posts = $query->selectAll('posts');
$users = $query->selectAll('users');
$categories = $query->selectAll('categories');

// Ordered by Likes Descending and with a Limit
$topPosts = $query->selectOrderAndLimit('posts', 'likes', 2);
$footerPosts = $query->selectOrderAndLimit('posts', 'likes', 5);

// Ordered by Date Descending and with a Limit
$postsByDate = $query->selectOrderAndLimit('posts', 'date', 6);
$breakingPosts = $query->selectOrderAndLimit('posts', 'date', 12);
