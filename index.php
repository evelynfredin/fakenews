<?php
require __DIR__ . '/app/bootstrap.php';
$pageTitle = 'Home';
require __DIR__ . '/views/header.php';
require __DIR__ . '/views/navigation.php';


foreach ($posts as $post) {
	if ($post->published) {
		echo $post->content;
	}
}

require __DIR__ . '/views/footer.php';
