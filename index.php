<?php
require __DIR__ . '/app/bootstrap.php';
$pageTitle = 'Home';
require __DIR__ . '/views/header.php';


foreach ($posts as $post) {
    echo $post->content;
}

require __DIR__ . '/views/footer.php';
