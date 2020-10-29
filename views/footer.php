<footer>
    <div class="footer-links container">
        <div>
            <h3><i class="fas fa-users"></i> Authors</h3>
            <ul>
                <?php foreach ($users as $user) : ?>
                    <li><?= $user->full_name; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div>
            <h3><i class="fas fa-newspaper"></i> Top Articles</h3>
            <ul>
                <?php foreach ($footerPosts as $post) : ?>
                    <li>
                        <a href="article.php?id=<?= $post->id; ?>">
                            <?= $post->title; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div>
            <h3><i class="fas fa-bookmark"></i> Categories</h3>
            <ul>
                <?php foreach ($categories as $category) : ?>
                    <li><?= $category->name; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div>
        <hr class="hr-footer container">
        <p>Fake News<br />
            All lyrics by Haken © <?= date('Y'); ?>.</p>
    </div>
</footer>
<script src="views/javascript/script.js"></script>
</body>

</html>
