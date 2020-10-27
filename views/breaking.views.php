<div class="container">
    <section class="grid">
        <?php foreach ($breakingPosts as $post) :
            if ($post->published) : ?>
                <article class="grid-item">
                    <a href="article.php?id=<?= $post->id; ?>">
                        <img src="<?= imgPath($post->image) ?>" alt="<?= $post->title; ?>" />
                    </a>
                    <div>
                        <p><span class="category"><?= $post->category ?></span></p>
                        <p class="publishedDate"><?= dateFormatter($post->date); ?></p>
                    </div>
                    <div class="author-likes">
                        <p><?= getAuthorForPost($post, $users); ?></p>
                        <p><i class="fas fa-heart"></i> <?= $post->likes; ?></p>
                    </div>
                    <a href="article.php?id=<?= $post->id; ?>">
                        <h3 class="title"><?= $post->title; ?></h3>
                    </a>

                    <p class="excerpt">
                        <?= excerpt($post); ?>

                    </p>
                </article>
        <?php
            endif;
        endforeach; ?>
    </section>
</div>
