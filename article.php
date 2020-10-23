<?php
// Set page title
$pageTitle = 'Article';

// Requiere template files
require __DIR__ . '/app/bootstrap.php';
require __DIR__ . '/views/header.php';
require __DIR__ . '/views/navigation.php';
require __DIR__ . '/app/functions.php';



require __DIR__ . '/views/article.views.php';

// Requiere footer
require __DIR__ . '/views/footer.php';
