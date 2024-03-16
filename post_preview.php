<?php
$largePostModifier = 'large';
$smallPostModifier = 'small';

$currentDate = $post['block_modifier'] === $largePostModifier ? date("F j, Y", $post['timestamp']) : date("n/j/Y", $post['timestamp'])
?>

<div class="posts-block__post post post_<?= $post['block_modifier'] ?>">
    <a class="post__link post__link_<?= $post['block_modifier'] ?>" title="<?= $post['title'] ?>"
       href="/post?id=<?= $post['id']?>">
        <img class="post__image post__image_<?= $post['block_modifier'] ?>" src="<?= $post['image_url'] ?>"
             alt="<?= $post['image_alt'] ?>">
        <div class="post__content post__content_<?= $post['block_modifier'] ?>">
            <h3 class="post__title post__title_<?= $post['block_modifier'] ?>">
                <?= $post['title'] ?>
            </h3>
            <p class="post__subtitle post__subtitle_<?= $post['block_modifier'] ?>">
                <?= $post['subtitle'] ?>
            </p>
            <div class="post__description post__description_<?= $post['block_modifier'] ?>">
                <div class="post__author">
                    <div class="post__image-wrapper">
                        <img class="post__author-image" src="<?= $post['author_image'] ?>"
                             alt="<?= $post['author_alt'] ?>">
                    </div>
                    <span class="post__author-name post__author-name_<?= $post['block_modifier'] ?>"><?= $post['author_name'] ?></span>
                </div>
                <span class="post__date post__date_<?= $post['block_modifier'] ?>"><?= $currentDate ?></span>
            </div>
        </div>
    </a>
    <?php if ($post['note']): ?>
        <span class="post__icon"><?= ($post['note']) ?></span>
    <?php endif; ?>
</div>
