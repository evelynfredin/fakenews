<?php $id = (int) $_GET['id'];
$article = $query->selectById($id);
$moreArticles = $query->excludeActivePost($id);
?>

<section class="container">
    <div class="article-header">
        <p><span class="category"><?= $article->category; ?></p>
        <h1 class="title"><?= $article->title; ?></h1>
    </div>
    <div class="article">
        <div class="article-body">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ffm.cnbc.com%2Fapplications%2Fcnbc.com%2Fresources%2Fimg%2Feditorial%2F2017%2F02%2F23%2F104300870-steve_jobs.1910x1000.jpg" alt="">
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

                <h3 class="sidebar">More about Science</h3>
                <?php foreach ($moreArticles as $moreArticle) :
                    if ($moreArticle->category === $article->category) :
                        if ($moreArticle->published) : ?>
                            <h4><?= $moreArticle->title; ?></h4>
                <?php
                        endif;
                    endif;
                endforeach; ?>
            </div>
        </div>
    </div>
</section>
