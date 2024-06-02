<?php
$currentDate = $post['featured'] ? date("F j, Y", $post['unix_time']) : date("n/j/Y", $post['unix_time']);
?>

<div class="posts-block__post post post_<?= $modifier ?>">
    <a class="post__link post__link_<?= $modifier ?>" title="<?= $post['title'] ?>"
       href="/post?id=<?= $post['uuid']?>">
        <img class="post__image post__image_<?= $modifier ?>" src="<?= $post['image_url'] ?>"
             alt="<?= $post['image_alt'] ?>">
        <div class="post__content post__content_<?= $modifier ?>">
            <h3 class="post__title post__title_<?= $modifier ?>">
                <?= $post['title'] ?>
            </h3>
            <p class="post__subtitle post__subtitle_<?= $modifier ?>">
                <?= $post['subtitle'] ?>
            </p>
            <div class="post__description post__description_<?= $modifier ?>">
                <div class="post__author">
                    <div class="post__image-wrapper">
                        <img class="post__author-image" src="<?= $post['author_image_url'] ?>"
                             alt="<?= $post['author_image_alt'] ?>">
                    </div>
                    <span class="post__author-name post__author-name_<?= $modifier ?>"><?= $post['author_name'] ?></span>
                </div>
                <span class="post__date post__date_<?= $modifier ?>"><?= $currentDate ?></span>
            </div>
        </div>
    </a>
    <?php if ($post['note']): ?>
        <span class="post__icon"><?= ($post['note']) ?></span>
    <?php endif; ?>
</div>
