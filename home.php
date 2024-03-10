<!doctype html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/home_page.css">
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
            <a class="header__logo logo" href=".">Escape.</a>
            <nav class="navigation">
                <ul class="navigation__menu">
                    <li class="navigation__item">
                        <a class="navigation__link navigation__link_header" href=".">Home</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link navigation__link_header" href=".">Categories</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link navigation__link_header" href=".">About</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link navigation__link_header" href=".">Contact</a>
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
                <a class="navigation__link navigation__link_categories" href=".">Nature</a>
            </li>
            <li class="navigation__item navigation__item_categories">
                <a class="navigation__link navigation__link_categories" href=".">Photography</a>
            </li>
            <li class="navigation__item navigation__item_categories">
                <a class="navigation__link navigation__link_categories" href=".">Relaxation</a>
            </li>
            <li class="navigation__item navigation__item_categories">
                <a class="navigation__link navigation__link_categories" href=".">Vacation</a>
            </li>
            <li class="navigation__item navigation__item_categories">
                <a class="navigation__link navigation__link_categories" href=".">Travel</a>
            </li>
            <li class="navigation__item navigation__item_categories">
                <a class="navigation__link navigation__link_categories" href=".">Adventure</a>
            </li>
        </ul>
    </nav>
    <div class="posts-block container">
        <div class="posts-block__title-wrapper">
            <h2 class="posts-block__title">Featured Posts</h2>
        </div>
        <div class="posts-block__post post post_large">
            <a class="post__link" href="../lab1/the-road-ahead.html">
                <img class="post__image post__image_small" src="../images/posts/northern_lights_post.jpg"
                     alt="Северное сияние">
                <div class="post__content post__content_large">
                    <h3 class="post__title post__title_large">The Road Ahead</h3>
                    <p class="post__subtitle post__subtitle_large">The road ahead might be paved - it might not
                        be.</p>
                    <div class="post__description">
                        <div class="post__author">
                            <div class="post__image-wrapper">
                                <img class="post__author-image" src="../images/author_icon/mat_vogels.png"
                                     alt="Автор Мэт Вогелс">
                            </div>
                            <span class="post__author-name post__author-name_large">Mat Vogels</span>
                        </div>
                        <span class="post__date post__date_large">September 25, 2015</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="posts-block__post post post_large">
            <a class="post__link" href=".">
                <img class="post__image post__image_small" src="../images/posts/сhinese-balloon_post.jpg"
                     alt="Китайские фонари с мальчиком">
                <div class="post__content post__content_large">
                    <h3 class="post__title post__title_large">From Top Down</h3>
                    <p class="post__subtitle post__subtitle_large">Once a year, go someplace you’ve never been
                        before.</p>
                    <div class="post__description">
                        <div class="post__author">
                            <div class="post__image-wrapper">
                                <img class="post__author-image" src="../images/author_icon/william_wong.png"
                                     alt="Автор Вильям Вонг">
                            </div>
                            <span class="post__author-name post__author-name_large">William Wong</span>
                        </div>
                        <span class="post__date post__date_large">September 25, 2015</span>
                    </div>
                </div>
            </a>
            <span class="post__icon">Adventure</span>
        </div>
    </div>
    <div class="posts-block container">
        <div class="posts-block__title-wrapper">
            <h2 class="posts-block__title">Most Recent</h2>
        </div>
        <div class="posts-block__post post post_small">
            <img class="post__image" src="../images/posts/balloon_post.jpg" alt="Пилотируемые шары в поле">
            <div class="post__content post__content_small">
                <h3 class="post__title">Still Standing Tall</h3>
                <p class="post__subtitle">Life begins at the end of your comfort zone.</p>
            </div>
            <div class="post__description post__description_small">
                <div class="post__author">
                    <div class="post__image-wrapper">
                        <img class="post__author-image" src="../images/author_icon/william_wong.png"
                             alt="Автор Вильям Вонг">
                    </div>
                    <span class="post__author-name">William Wong</span>
                </div>
                <span class="post__date">9/25/2015</span>
            </div>
        </div>
        <div class="posts-block__post post post_small">
            <img class="post__image" src="../images/posts/golden-gate_post.jpg" alt="Мост Золотые ворота">
            <div class="post__content post__content_small">
                <h3 class="post__title">Sunny Side Up</h3>
                <p class="post__subtitle">No place is ever as bad as they tell you it’s going to be.</p>
            </div>
            <div class="post__description post__description_small">
                <div class="post__author">
                    <div class="post__image-wrapper">
                        <img class="post__author-image" src="../images/author_icon/mat_vogels.png"
                             alt="Автор Мэт Вогелс">
                    </div>
                    <span class="post__author-name">Mat Vogels</span>
                </div>
                <span class="post__date">9/25/2015</span>
            </div>
        </div>
        <div class="posts-block__post post post_small">
            <img class="post__image" src="../images/posts/river_post.jpg" alt="Туман над рекой">
            <div class="post__content post__content_small">
                <h3 class="post__title">Water Falls</h3>
                <p class="post__subtitle">We travel not to escape life, but for life not to escape us.</p>
            </div>
            <div class="post__description post__description_small">
                <div class="post__author">
                    <div class="post__image-wrapper">
                        <img class="post__author-image" src="../images/author_icon/mat_vogels.png"
                             alt="Автор Мэт Вогелс">
                    </div>
                    <span class="post__author-name">Mat Vogels</span>
                </div>
                <span class="post__date">9/25/2015</span>
            </div>
        </div>
        <div class="posts-block__post post post_small">
            <img class="post__image" src="../images/posts/rushing-river_post.jpg" alt="Бурная река">
            <div class="post__content post__content_small">
                <h3 class="post__title">Through the Mist</h3>
                <p class="post__subtitle">Travel makes you see what a tiny place you occupy in the world.</p>
            </div>
            <div class="post__description post__description_small">
                <div class="post__author">
                    <div class="post__image-wrapper">
                        <img class="post__author-image" src="../images/author_icon/william_wong.png"
                             alt="Автор Вильям Вонг">
                    </div>
                    <span class="post__author-name">William Wong</span>
                </div>
                <span class="post__date">9/25/2015</span>
            </div>
        </div>
        <div class="posts-block__post post post_small">
            <img class="post__image" src="../images/posts/elevator_post.jpg" alt="Подъемник в тумане">
            <div class="post__content post__content_small">
                <h3 class="post__title">Awaken Early</h3>
                <p class="post__subtitle">Not all those who wander are lost.</p>
            </div>
            <div class="post__description post__description_small">
                <div class="post__author">
                    <div class="post__image-wrapper">
                        <img class="post__author-image" src="../images/author_icon/mat_vogels.png"
                             alt="Автор Мэт Вогелс">
                    </div>
                    <span class="post__author-name">Mat Vogels</span>
                </div>
                <span class="post__date">9/25/2015</span>
            </div>
        </div>
        <div class="posts-block__post post post_small">
            <img class="post__image" src="../images/posts/waterfall_post.jpg" alt="Радуга на фоне водопада">
            <div class="post__content post__content_small">
                <h3 class="post__title">Try it Always</h3>
                <p class="post__subtitle">The world is a book, and those who do not travel read only one page.</p>
            </div>
            <div class="post__description post__description_small">
                <div class="post__author">
                    <div class="post__image-wrapper">
                        <img class="post__author-image" src="../images/author_icon/mat_vogels.png"
                             alt="Автор Мэт Вогелс">
                    </div>
                    <span class="post__author-name">Mat Vogels</span>
                </div>
                <span class="post__date">9/25/2015</span>
            </div>
        </div>
    </div>
</main>
<footer class="footer">
    <div class="footer__container container">
        <a class="footer__logo logo" href="#">Escape.</a>
        <nav class="footer__navigation navigation">
            <ul class="navigation__menu">
                <li class="navigation__item">
                    <a class="navigation__link navigation__link_footer" href=".">Home</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link navigation__link_footer" href=".">Categories</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link navigation__link_footer" href=".">About</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link navigation__link_footer" href=".">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</footer>
</body>
</html>