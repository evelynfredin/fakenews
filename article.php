<?php

require __DIR__ . '/app/bootstrap.php';

// Grab the article ID using GET to then show all data related to that ID
$id = (int) $_GET['id'];
$article = $query->selectById($id);

// Suggests posts with the same category, excluding the Active Post
$suggested = $query->excludeActivePost($id);

// Set Article Title to Page Title
$pageTitle = $article->title;

// Requiere template files
require __DIR__ . '/views/header.php';
require __DIR__ . '/views/navigation.php';
require __DIR__ . '/app/functions.php';



require __DIR__ . '/views/article.views.php';

// Requiere footer
require __DIR__ . '/views/footer.php';
