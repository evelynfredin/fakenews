<div class="container">
    <section class="top-stories">
        <?php foreach ($topStories as $topStory) : ?>
            <div class="top-item">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ffm.cnbc.com%2Fapplications%2Fcnbc.com%2Fresources%2Fimg%2Feditorial%2F2017%2F02%2F23%2F104300870-steve_jobs.1910x1000.jpg" alt="Steve Jobs" />
                <div>
                    <p><span class="category"><?= $topStory->category ?></span></p>
                    <p class="publishedDate"><?= dateFormatter($topStory->date); ?></p>
                </div>
                <div class="author-likes">
                    <p><?= getAuthorForPost($topStory, $users) ?></p>
                    <p><i class="fas fa-heart"></i> <?= $topStory->likes; ?></p>
                </div>
                <h3 class="title"><?= $topStory->title; ?></h3>

                <p class="excerpt">
                    <?= excerpt($topStory); ?>
                </p>
                </article>
            </div>
        <?php endforeach; ?>
    </section>


    <!-- Grid for other articles -->
    <section class="grid">
        <?php foreach ($postsByDate as $post) :
            if ($post->published) : ?>
                <article class="grid-item">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ffm.cnbc.com%2Fapplications%2Fcnbc.com%2Fresources%2Fimg%2Feditorial%2F2017%2F02%2F23%2F104300870-steve_jobs.1910x1000.jpg" alt="Steve Jobs" />
                    <div>
                        <p><span class="category"><?= $post->category ?></span></p>
                        <p class="publishedDate"><?= dateFormatter($post->date); ?></p>
                    </div>
                    <div class="author-likes">
                        <p><?= getAuthorForPost($post, $users); ?></p>
                        <p><i class="fas fa-heart"></i> <?= $post->likes; ?></p>
                    </div>

                    <h3 class="title">
                        <?= $post->title;
                        ?>
                    </h3>

                    <p class="excerpt">
                        <?= excerpt($topStory); ?>
                    </p>
                </article>
            <?php endif; ?>
        <?php endforeach; ?>
    </section>
</div>
