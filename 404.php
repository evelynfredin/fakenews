<?php
$pageTitle = '404 – Nothing Fake Was Found Here';

require __DIR__ . '/app/bootstrap.php';
require __DIR__ . '/app/functions.php';
require __DIR__ . '/views/header.php';
require __DIR__ . '/views/navigation.php';

?>

<main class="container">
    <h1 class="not-found">404</h1>
    <p class="not-found">Oops! That fake thing you were looking for is not here.</p>
    <hr>
    <p class="not-found">Go back to the <a href="/">Homepage</a> </p>
</main>

<?php require __DIR__ . '/views/footer.php'; ?>
