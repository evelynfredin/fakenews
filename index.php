<?php

declare(strict_types=1);

// Set page title
$pageTitle = 'Home';

// Require system files
require __DIR__ . '/app/bootstrap.php';
require __DIR__ . '/app/functions.php';

// Require template files
require __DIR__ . '/views/header.php';
require __DIR__ . '/views/navigation.php';

// Require the contents of the home page
require __DIR__ . '/views/index.views.php';

// Requiere footer
require __DIR__ . '/views/footer.php';
