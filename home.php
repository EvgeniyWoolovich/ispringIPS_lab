<?php
include './data/DataBaseProcessing.php';
$posts = $connectDataBase->getData();
?>
<!DOCTYPE html>
<html lang="EN">
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
    <?php include './headers/header.php'; ?>
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
            if ($post['featured']) {
                include './post_preview/post_preview.php';
            }
        }
        ?>
    </div>
    <div class="posts-block container">
        <div class="posts-block__title-wrapper">
            <h2 class="posts-block__title">Most Recent</h2>
        </div>
        <?php
        foreach ($posts as $post) {
            if ($post['recent']) {
                include './post_preview/post_preview.php';
            }
        }
        ?>
    </div>
</main>
<?php include './footers/footer.php'; ?>
</body>
<script src="/script/footer_validate.js"></script>
</html>