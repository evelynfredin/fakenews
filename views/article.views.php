<section class="container">
    <div class="article-header">
        <p><span class="category"><?= $article->category; ?></p>
        <h1 class="title"><?= $article->title; ?></h1>
    </div>

    <div class="article">

        <div class="article-body">
            <img src="<?= imgPath($article->image); ?>" alt="">
            <div class="metadata">
                <p class="author-likes"><?= getAuthorForPost($article, $users); ?> <i class="fas fa-heart"></i> <?= $article->likes; ?></p>
                <p class="publishedDate"><?= dateFormatter($article->date); ?></p>
            </div>
            <div class="article-content">
                <p><?= $article->content; ?></p>
            </div>
        </div>

        <div class="article-sidebar">
            <div class="sidebar-body">
                <h3 class="sidebar">Share this article</h3>
                <div class="social">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-whatsapp"></i>
                </div>

                <h3 class="sidebar">More about <?= $article->category; ?></h3>

                <?php foreach ($suggested as $post) :
                    if ($post->category === $article->category) :
                        if ($post->published) : ?>

                            <a href="article.php?id=<?= $post->id; ?>">
                                <img src="<?= imgPath($post->image); ?>" alt="">
                                <h4><?= $post->title; ?></h4>
                            </a>
                            <div class="metadata">
                                <p class="author-likes"><?= getAuthorForPost($post, $users); ?></p>
                                <p class="publishedDate"><?= dateFormatter($post->date); ?></p>
                            </div>
                            <hr class="divider">
                <?php
                        endif;
                    endif;
                endforeach; ?>
            </div>
        </div>

    </div>
</section>
