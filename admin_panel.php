<?php
$currentDate = date("n/j/Y", time());
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/styles/admin_panel.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&family=Kalnia:wght@300;400&family=Lora:ital,wght@0,400;0,500;1,400&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oxygen:wght@300;400&display=swap"
          rel="stylesheet">
    <title>Admin Panel</title>
</head>
<body>
<?php include './headers/header_admin.php' ?>
<main class="main">
    <form class="form admin-form container-admin" action="">
        <div class="admin-form__header">
            <div class="admin-form__title-wrapper">
                <h1 class="admin-form__title">New Post</h1>
                <p class="admin-form__subtitle">Fill out the form bellow and publish your article</p>
            </div>
            <input class="admin-form__submit" id="submit" type="submit" value="Publish">
        </div>
        <div class="admin-form__push admin-form__push_error">
            <span class="admin-form__error-text">Whoops! Some fields need your attention :o</span>
        </div>
        <div class="admin-form__push admin-form__push_accept">
            <span class="admin-form__error-text">Publish Complete!</span>
        </div>
        <div class="admin-form__main">
            <h2 class="admin-form__block-name">Main Information</h2>
            <div class="admin-form__inputs-block-wrapper">
                <div class="admin-form__inputs-block">
                    <div class="admin-form__input-wrapper admin-form__input-wrapper_title">
                        <label class="admin-form__label" for="title_input">Title</label>
                        <input class="admin-form__input" type="text" data-name="title" name="title" id="title_input"
                               placeholder="New Post" maxlength="255" required>
                        <span class="admin-form__hidden-error admin-form__hidden-error_title"></span>
                    </div>
                    <div class="admin-form__input-wrapper admin-form__input-wrapper_subtitle">
                        <label class="admin-form__label" for="subtitle_input">Short description</label>
                        <input class="admin-form__input" type="text" id="subtitle_input" data-name="subtitle"
                               name="subtitle"
                               placeholder="Please, enter any description" maxlength="255" required>
                        <span class="admin-form__hidden-error admin-form__hidden-error_subtitle"></span>
                    </div>
                    <div class="admin-form__input-wrapper admin-form__input-wrapper_author-name">
                        <label class="admin-form__label" for="author-name_input">Author name</label>
                        <input class="admin-form__input" type="text" data-name="author-name" id="author-name_input"
                               name="author-name"
                               placeholder="Please, enter Author name" maxlength="127" required>
                        <span class="admin-form__hidden-error admin-form__hidden-error_author-name"></span>
                    </div>
                    <div class="admin-form__input-wrapper admin-form__input-wrapper_author-photo"
                         id="drop-area_author-photo">
                        <label class="admin-form__label admin-form__label_author-photo" for="author-photo_input">Author
                            Photo</label>
                        <input class="admin-form__input admin-form__input_file" type="file" data-name="author-photo"
                               name="author-photo"
                               accept="image/jpeg, image/png, image/svg" id="author-photo_input" required hidden>
                        <span class="admin-form__view-background admin-form__view-background_author-photo"
                              data-name="author-photo"
                              id="author-photo_background-preview-photo">
                            <img class="admin-form__icon admin-form__icon_cam admin-form__icon_author"
                                 src="/static/images/icons/camera.svg"
                                 alt="Icon Cam">
                        </span>
                        <span class="admin-form__button admin-form__button_upload admin-form__icon_author-photo"
                              id="author-photo_button-upload" data-name="author-photo"></span>
                        <span class="admin-form__button admin-form__button_remove" data-name="author-photo"
                              id="author_button-remove">
                            <img class="admin-form__icon admin-form__icon_trash"
                                 src="/static/images/icons/trash-red.svg" alt="Author Photo">
                            Remove
                        </span>
                        <span class="admin-form__hidden-error admin-form__hidden-error_author-photo"></span>
                    </div>
                    <div class="admin-form__input-wrapper admin-form__input-wrapper_publish-date">
                        <label class="admin-form__label" for="publish-date_input">Publish Date</label>
                        <input class="admin-form__input" type="date" data-name="publish-date" name="publish-date"
                               id="publish-date_input"
                               required>
                        <span class="admin-form__hidden-error admin-form__hidden-error_publish-date"></span>
                    </div>
                    <div class="admin-form__input-wrapper admin-form__input-wrapper_image-large"
                         id="drop-area_image-large">
                        <label class="admin-form__label admin-form__label_image-large" for="image-large_input">Author
                            Photo</label>
                        <input class="admin-form__input admin-form__input_file"
                               accept="image/jpeg, image/png, image/svg" type="file" data-name="image-large"
                               name="image-large"
                               id="image-large_input" required hidden>
                        <span class="admin-form__view-background admin-form__view-background_image-large"
                              data-name="image-large"
                              id="image-large_background-preview-photo">
                            <img class="admin-form__photo admin-form__photo_icon admin-form__photo_icon_large"
                                 src="/static/images/icons/camera.svg" alt="Author Photo">
                        </span>
                        <div class="admin-form__button-wrapper">
                            <span class="admin-form__button image-large_button_large-upload"
                                  id="image-large_button-upload" data-name="image-large">
                                <img class="admin-form__icon admin-form__icon_cam admin-form__icon_image-large"
                                     src="/static/images/icons/camera.svg"
                                     alt="Author Photo">
                                Upload New
                            </span>
                            <span class="admin-form__button admin-form__button_remove" id="image-large_button-remove"
                                  data-name="image-large">
                                <img class="admin-form__icon admin-form__icon_trash"
                                     src="/static/images/icons/trash-red.svg" alt="Author Photo">
                                Remove
                            </span>
                        </div>
                        <span class="admin-form__notes">Size up to 10mb. Format: png, jpeg, gif.</span>
                        <span class="admin-form__hidden-error admin-form__hidden-error_image-large"></span>
                    </div>
                    <div class="admin-form__input-wrapper admin-form__input-wrapper_image-small"
                         id="drop-area_image-small">
                        <label class="admin-form__label admin-form__label_image-small" for="image-small_input">Author
                            Photo</label>
                        <input class="admin-form__input admin-form__input_file"
                               accept="image/jpeg, image/png, image/svg" data-name="image-small" name="image-small"
                               type="file"
                               id="image-small_input" required hidden>
                        <span class="admin-form__view-background admin-form__view-background_image-small"
                              data-name="image-small"
                              id="image-small_background-preview-photo">
                            <img class="admin-form__icon admin-form__photo_icon admin-form__photo_icon_small"
                                 src="/static/images/icons/camera.svg" alt="Author Photo">
                        </span>
                        <div class="admin-form__button-wrapper">
                            <span class="admin-form__button image-large_button_small-upload"
                                  id="image-small_button-upload" data-name="image-small">
                                <img class="admin-form__icon admin-form__icon_cam admin-form__icon_image-small"
                                     data-name="image-small" src="/static/images/icons/camera.svg"
                                     alt="Author Photo">
                                Upload New
                            </span>
                            <span class="admin-form__button admin-form__button_remove" data-name="image-small"
                                  id="image-small_button-remove">
                                <img class="admin-form__icon admin-form__icon_trash"
                                     src="/static/images/icons/trash-red.svg" alt="Author Photo">
                                Remove
                            </span>
                        </div>
                        <span class="admin-form__notes">Size up to 5mb. Format: png, jpeg, gif.</span>
                        <span class="admin-form__hidden-error admin-form__hidden-error_image-small"></span>
                    </div>
                    <div class="admin-form__input-wrapper admin-form__input-wrapper_type-post">
                        <span class="admin-form__title admin-form__title_type-post">Post type</span>
                        <label class="admin-form__label admin-form__label_checkbox-wrapper" for="featured">
                            <input class="admin-form__input admin-form__input_checkbox" type="checkbox"
                                   data-name="featured"
                                   name="featured"
                                   id="featured"
                            >
                            Featured post
                        </label>
                        <label class="admin-form__label admin-form__label_checkbox-wrapper" for="most-recent">
                            <input class="admin-form__input admin-form__input_checkbox" type="checkbox"
                                   data-name="most-recent"
                                   name="most-recent"
                                   id="most-recent"
                            >
                            Most Recent
                        </label>
                        <span class="admin-form__hidden-error admin-form__hidden-error_type-post"></span>
                    </div>
                </div>
            </div>
            <div class="admin-form__view-posts-wrapper">
                <div class="admin-form__view-posts">
                    <div class="admin-form__post admin-form__post_large view-post view-post_large">
                        <p class="view-post__label">Article preview</p>
                        <div class="view-post__wrapper-post">
                            <div class="view-post__post">
                                <h4 class="view-post__title view-post__title_large">New Post</h4>
                                <p class="view-post__subtitle view-post__subtitle_large">Please,
                                    enter any description</p>
                                <div class="view-post__image view-post__image_image-large"
                                     id="js-view-image-post"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="admin-form__view-posts">
                    <div class="admin-form__post admin-form__post_card view-post view-post_card">
                        <p class="view-post__label">Post card preview</p>
                        <div class="view-post__wrapper-content">
                            <div class="view-post__inner-content">
                                <div class="view-post__wrapper-card">
                                    <div class="view-post__image view-post__image_image-small"
                                         id="js-view-image-card"></div>
                                    <div class="view-post__post-content">
                                        <h4 class="view-post__title view-post__title_small">New Post</h4>
                                        <p class="view-post__subtitle view-post__subtitle_small">
                                            Please, enter any description</p>
                                        <div class="view-post__text-content">
                                            <div class="view-post__author">
                                                <div class="view-post__image-wrapper">
                                                    <div class="view-post__image view-post__image_author-photo"
                                                         id="js-view-author-image"></div>
                                                </div>
                                                <span class="view-post__author-name">Enter author name</span>
                                            </div>
                                            <span class="view-post__publish-date"
                                                  id="js-publish_date-view"><?= $currentDate ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="admin-form__footer">
            <h2 class="admin-form__block-name">Content</h2>
            <div class="admin-form__content-wrapper admin-form__input-wrapper_content">
                <label class="admin-form__label" for="content_input">Post content (plain text)</label>
                <textarea class="admin-form__content" data-name="content" name="content" id="content_input"
                          cols="30" rows="10"
                          placeholder="Type anything you want ..."></textarea>
                <span class="admin-form__hidden-error admin-form__hidden-error_content"></span>
            </div>
        </div>
    </form>
</main>
</body>
<script type="module" src="./script/admin_panel.js"></script>
</html>
