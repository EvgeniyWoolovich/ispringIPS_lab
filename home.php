<?php

$posts = [
    [
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be.',
        'image_url' => '/static/images/posts/northern_lights_post.jpg',
        'image_alt' => 'Северное сияние',
        'author_name' => 'Mat Vogels',
        'author_image' => '/static/images/author_icon/mat_vogels.png',
        'author_alt' => 'Автор Вильям Вонг',
        'timestamp' => 1443175200,
        'link' => '/post',
        'note' => '',
        'block_modifier' => 'large'
    ],
    [
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'image_url' => '/static/images/posts/сhinese-balloon_post.jpg',
        'image_alt' => 'Китайские фонари с мальчиком',
        'author_name' => 'William Wong',
        'author_image' => '/static/images/author_icon/william_wong.png',
        'author_alt' => 'Автор Вильям Вонг',
        'timestamp' => 1443175200,
        'link' => '/',
        'note' => 'Adventure',
        'block_modifier' => 'large'
    ],
    [
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'image_url' => '/static/images/posts/сhinese-balloon_post.jpg',
        'image_alt' => 'Китайские фонари с мальчиком',
        'author_name' => 'William Wong',
        'author_image' => '/static/images/author_icon/william_wong.png',
        'author_alt' => 'Автор Вильям Вонг',
        'timestamp' => 1443175200,
        'link' => '/',
        'note' => 'Adventure',
        'block_modifier' => 'large'
    ],
];

$mostRecentPosts = [
    [
        'title' => 'Still Standing Tall',
        'subtitle' => 'Life begins at the end of your comfort zone.',
        'image_url' => '/static/images/posts/balloon_post.jpg',
        'image_alt' => 'Пилотируемые шары в поле',
        'author_name' => 'William Wong',
        'author_image' => '/static/images/author_icon/mat_vogels.png',
        'author_alt' => 'Автор Вильям Вонг',
        'timestamp' => 1443175200,
        'link' => '/',
        'note' => '',
        'block_modifier' => 'small'
    ],
    [
        'title' => 'Sunny Side Up',
        'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
        'image_url' => '/static/images/posts/golden-gate_post.jpg',
        'image_alt' => 'Мост Золотые ворота',
        'author_name' => 'Mat Vogels',
        'author_image' => '/static/images/author_icon/mat_vogels.png',
        'author_alt' => 'Автор Мет Воглес',
        'timestamp' => 1443175200,
        'link' => '/',
        'note' => '',
        'block_modifier' => 'small'
    ],
    [
        'title' => 'Water Falls',
        'subtitle' => 'We travel not to escape life, but for life not to escape us.',
        'image_url' => '/static/images/posts/river_post.jpg',
        'image_alt' => 'Туман над рекой',
        'author_name' => 'Mat Vogels',
        'author_image' => '/static/images/author_icon/mat_vogels.png',
        'author_alt' => 'Автор Мет Воглес',
        'timestamp' => 1443175200,
        'link' => '/',
        'note' => '',
        'block_modifier' => 'small'
    ],
    [
        'title' => 'Through the Mist',
        'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
        'image_url' => '/static/images/posts/rushing-river_post.jpg',
        'image_alt' => 'Бурная река',
        'author_name' => 'William Wong',
        'author_image' => '/static/images/author_icon/mat_vogels.png',
        'author_alt' => 'Автор Вильям Вонг',
        'timestamp' => 1443175200,
        'link' => '/',
        'note' => '',
        'block_modifier' => 'small'
    ],
    [
        'title' => 'Awaken Early',
        'subtitle' => 'Not all those who wander are lost.',
        'image_url' => '/static/images/posts/elevator_post.jpg',
        'image_alt' => 'Подъемник в тумане',
        'author_name' => 'Mat Vogels',
        'author_image' => '/static/images/author_icon/mat_vogels.png',
        'author_alt' => 'Автор Мет Воглес',
        'timestamp' => 1443175200,
        'link' => '/',
        'note' => '',
        'block_modifier' => 'small'
    ],
    [
        'title' => 'Try it Always',
        'subtitle' => 'The world is a book, and those who do not travel read only one page.',
        'image_url' => '/static/images/posts/waterfall_post.jpg',
        'image_alt' => 'Радуга на фоне водопада',
        'author_name' => 'Mat Vogels',
        'author_image' => '/static/images/author_icon/mat_vogels.png',
        'author_alt' => 'Автор Мет Воглес',
        'timestamp' => 1443175200,
        'link' => '/',
        'note' => '',
        'block_modifier' => 'small'
    ],

]
?>

<!DOCTYPE html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/styles/home_page.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&family=Kalnia:wght@300;400&family=Lora:ital,wght@0,400;0,500;1,400&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oxygen:wght@300;400&display=swap"
          rel="stylesheet">
    <title>Главная</title>
</head>
<body>
<div class="section-wrapper-top">
    <header class="header">
        <div class="header__container container">
            <a class="header__logo logo" href="/home">Escape.</a>
            <nav class="navigation">
                <ul class="navigation__menu">
                    <li class="navigation__item">
                        <a class="navigation__link navigation__link_header" href="/">Home</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link navigation__link_header" href="/">Categories</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link navigation__link_header" href="/">About</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link navigation__link_header" href="/">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="banner container">
        <h1 class="banner__title">Let's do it together.</h1>
        <p class="banner__subtitle">We travel the world in search of stories. Come along for the ride.</p>
        <a class="banner__link" href=".">View Latest Posts</a>
    </div>
</div>
<main class="main">
    <nav class="navigation navigation_categories">
        <ul class="navigation__menu navigation__menu_categories container">
            <li class="navigation__item navigation__item_categories">
                <a class="navigation__link navigation__link_categories" href="/">Nature</a>
            </li>
            <li class="navigation__item navigation__item_categories">
                <a class="navigation__link navigation__link_categories" href="/">Photography</a>
            </li>
            <li class="navigation__item navigation__item_categories">
                <a class="navigation__link navigation__link_categories" href="/">Relaxation</a>
            </li>
            <li class="navigation__item navigation__item_categories">
                <a class="navigation__link navigation__link_categories" href="/">Vacation</a>
            </li>
            <li class="navigation__item navigation__item_categories">
                <a class="navigation__link navigation__link_categories" href="/">Travel</a>
            </li>
            <li class="navigation__item navigation__item_categories">
                <a class="navigation__link navigation__link_categories" href="/">Adventure</a>
            </li>
        </ul>
    </nav>
    <div class="posts-block container">
        <div class="posts-block__title-wrapper">
            <h2 class="posts-block__title">Featured Posts</h2>
        </div>
        <?php
        foreach ($posts as $post) {
            include 'post_preview.php';
        }
        ?>
    </div>
    <div class="posts-block container">
        <div class="posts-block__title-wrapper">
            <h2 class="posts-block__title">Most Recent</h2>
        </div>
        <?php
        foreach ($mostRecentPosts as $post) {
            include 'post_preview.php';
        }
        ?>
    </div>
</main>
<footer class="footer">
    <div class="footer__container container">
        <a class="footer__logo logo" href="#">Escape.</a>
        <nav class="footer__navigation navigation">
            <ul class="navigation__menu">
                <li class="navigation__item">
                    <a class="navigation__link navigation__link_footer" href="/">Home</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link navigation__link_footer" href="/">Categories</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link navigation__link_footer" href="/">About</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link navigation__link_footer" href="/">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</footer>
</body>
</html>