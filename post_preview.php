<div class="posts-block__post post post_large">
    <a class="post__link" href="<?= $post['link'] ?>">
        <img class="post__image post__image_large" src="<?= $post['image_modifier'] ?>"
             alt="<?= $post['image_alt'] ?>">
        <div class="post__content post__content_large">
            <h3 class="post__title post__title_large"><?= $post['title'] ?></h3>
            <p class="post__subtitle post__subtitle_large">
                <?= $post['subtitle'] ?>
            </p>
            <div class="post__description">
                <div class="post__author">
                    <div class="post__image-wrapper">
                        <img class="post__author-image" src="<?= $post['author_image'] ?>"
                             alt="<?= $post['author_alt'] ?>">
                    </div>
                    <span class="post__author-name post__author-name_large"><?= $post['author'] ?></span>
                </div>
                <span class="post__date post__date_large"><?= $post['date'] ?></span>
            </div>
        </div>
    </a>
    <?php if ($post['note']): ?>
        <span class="post__icon">Adventure</span>
    <?php endif; ?>
</div>
