<?php foreach ($news as $news_item1): ?>

    <h2><?php echo $news_item1['title'] ?></h2>
    <div class="main">
        <?php echo $news_item1['text'] ?>
    </div>
    <p><a href="news/<?php echo $news_item1['slug'] ?>">View article</a></p>

<?php endforeach ?>