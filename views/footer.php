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
                <?php foreach ($footerStories as $footerStory) : ?>
                    <li>
                        <a href="article.php?id=<?= $footerStory->id; ?>">
                            <?= $footerStory->title; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div>
            <h3><i class="fas fa-bookmark"></i> Categories</h3>
            <ul>
                <?php foreach ($posts as $post) : ?>
                    <li><?= $post->category; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div>
        <hr>
        <p>Fake News | Joke's On You</p>
    </div>
</footer>
<script src="views/javascript/script.js"></script>
</body>

</html>
