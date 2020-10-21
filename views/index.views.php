<section class="grid container">
    <?php foreach ($posts as $post) : ?>
        <article class="grid-item">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ffm.cnbc.com%2Fapplications%2Fcnbc.com%2Fresources%2Fimg%2Feditorial%2F2017%2F02%2F23%2F104300870-steve_jobs.1910x1000.jpg" alt="Steve Jobs" />
            <div>
                <p><span class="category">TECH</span></p>
                <p class="publishedDate"><?= dateFormatter($post->date); ?></p>
            </div>

            <h3 class="title">
                <?= $post->title;
                ?>
            </h3>


            <p class="excerpt">
                No earpods? No charger? Steve Jobs couln't take it anymore and
                finally, grabbed his favorite turtle neck shirt and decided to come back from the dead and voice his opinion.
            </p>
        </article>
    <?php endforeach; ?>
</section>
