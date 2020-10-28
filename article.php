<?php

declare(strict_types=1);

require __DIR__ . '/app/bootstrap.php';
require __DIR__ . '/app/functions.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
}


$article = $query->selectById($id);
if (!$article->id) {
    header('Location: 404.php');
}


// Suggests posts with the same category, excluding the Active Post
$suggested = $query->excludeActivePost($id);

$pageTitle = $article->title;

require __DIR__ . '/views/header.php';
require __DIR__ . '/views/navigation.php';

// Require the contents of the home page
require __DIR__ . '/views/article.views.php';

// Requiere footer
require __DIR__ . '/views/footer.php';
