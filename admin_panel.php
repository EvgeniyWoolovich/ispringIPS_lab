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
        <div class="admin-form__main">
            <h2 class="admin-form__block-name">Main Information</h2>
            <div class="admin-form__inputs-block-wrapper">
                <div class="admin-form__inputs-block">
                    <div class="admin-form__input-wrapper admin-form__input-wrapper_title">
                        <label class="admin-form__label" for="js-title">Title</label>
                        <input class="admin-form__input" type="text" name="title" id="js-title" placeholder="New Post"
                               maxlength="255">
                        <span class="admin-form__hidden-error admin-form__hidden-error_title"></span>
                    </div>
                    <div class="admin-form__input-wrapper admin-form__input-wrapper_description">
                        <label class="admin-form__label" for="js-description">
                            Short description
                        </label>
                        <input class="admin-form__input" type="text" id="js-description" name="description"
                               placeholder="Please, enter any description" maxlength="255">
                        <span class="admin-form__hidden-error admin-form__hidden-error_description"></span>
                    </div>
                    <div class="admin-form__input-wrapper admin-form__input-wrapper_author-name">
                        <label class="admin-form__label" for="js-author_name">
                            Author name
                        </label>
                        <input class="admin-form__input" type="text" id="js-author_name"
                               placeholder="Please, enter Author name">
                        <span class="admin-form__hidden-error admin-form__hidden-error_author-name"></span>
                    </div>
                    <div class="admin-form__input-wrapper admin-form__input-wrapper_author" id="drop-area-author">
                        <label class="admin-form__label admin-form__label_author-photo" for="author_photo">
                            Author Photo
                        </label>
                        <input class="admin-form__input admin-form__input_file" multiple accept="image/*" type="file"
                               id="author_photo" hidden>
                        <span class="admin-form__view-photo admin-form__view-photo_author" id="js-author-photo">
                            <img class="admin-form__photo admin-form__photo_icon" src="/static/images/icons/camera.svg"
                                 alt="Author Photo">
                        </span>
                        <span class="admin-form__button admin-form__button_upload"
                              id="author-button-upload">Upload</span>
                        <span class="admin-form__button admin-form__button_remove" id="author-photo-remove">
                            <img class="admin-form__photo admin-form__photo_button"
                                 src="/static/images/icons/trash-red.svg" alt="Author Photo">
                            Remove
                        </span>
                        <span class="admin-form__hidden-error admin-form__hidden-error_author-name"></span>
                    </div>
                    <div class="admin-form__input-wrapper admin-form__input-wrapper_publish-date">
                        <label class="admin-form__label" for="js-publish_date">Publish Date</label>
                        <input class="admin-form__input" type="date" id="js-publish_date">
                        <span class="admin-form__hidden-error admin-form__hidden-error_publish-date"></span>
                    </div>
                    <div class="admin-form__input-wrapper admin-form__input-wrapper_image-large" id="drop-image-large">
                        <label class="admin-form__label admin-form__label_image-large" for="image-large">
                            Author Photo
                        </label>
                        <input class="admin-form__input admin-form__input_file" multiple accept="image/*" type="file"
                               id="image-large" hidden>
                        <span class="admin-form__view-photo admin-form__view-image_large" id="js-image-large">
                                <img class="admin-form__photo admin-form__photo_icon admin-form__photo_icon_large"
                                     src="/static/images/icons/camera.svg" alt="Author Photo">
                        </span>
                        <div class="admin-form__button-wrapper">
                            <span class="admin-form__button image-large_button_large-upload"
                                  id="image-large_button_upload">
                                <img class="admin-form__photo admin-form__photo_button"
                                     src="/static/images/icons/camera.svg" alt="Author Photo">
                                Upload New
                            </span>
                            <span class="admin-form__button admin-form__button_remove" id="image-large-button-remove">
                                <img class="admin-form__photo admin-form__photo_button"
                                     src="/static/images/icons/trash-red.svg"
                                     alt="Author Photo">
                                Remove
                            </span>
                        </div>
                        <span class="admin-form__notes">Size up to 10mb. Format: png, jpeg, gif.</span>
                        <span class="admin-form__hidden-error"></span>
                    </div>
                    <div class="admin-form__input-wrapper admin-form__input-wrapper_image-small" id="drop-image-small">
                        <label class="admin-form__label admin-form__label_image-small" for="image-small">
                            Author Photo
                        </label>
                        <input class="admin-form__input admin-form__input_file" multiple accept="image/*" type="file"
                               id="image-small" hidden>
                        <span class="admin-form__view-photo admin-form__view-image_small" id="js-image-small">
                                <img class="admin-form__photo admin-form__photo_icon admin-form__photo_icon_small"
                                     src="/static/images/icons/camera.svg" alt="Author Photo">
                        </span>
                        <div class="admin-form__button-wrapper">
                            <span class="admin-form__button image-large_button_small-upload"
                                  id="image-small_button_upload">
                                <img class="admin-form__photo admin-form__photo_button"
                                     src="/static/images/icons/camera.svg" alt="Author Photo">
                                Upload New
                            </span>
                            <span class="admin-form__button admin-form__button_remove" id="image-small-button-remove">
                                <img class="admin-form__photo admin-form__photo_button"
                                     src="/static/images/icons/trash-red.svg"
                                     alt="Author Photo">
                                Remove
                            </span>
                        </div>
                        <span class="admin-form__notes">Size up to 5mb. Format: png, jpeg, gif.</span>
                        <span class="admin-form__hidden-error"></span>
                    </div>
                </div>
            </div>
            <div class="admin-form__view-posts-wrapper">
                <div class="admin-form__view-posts">
                    <div class="admin-form__post admin-form__post_large view-post view-post_large">
                        <p class="view-post__label">Article preview</p>
                        <div class="view-post__wrapper-post">
                            <div class="view-post__post">
                                <h4 class="view-post__title view-post__title_large js-title-view">New Post</h4>
                                <p class="view-post__subtitle view-post__subtitle_large js-description-view">
                                    Please, enter any description</p>
                                <div class="view-post__image view-post__image_large" id="js-view-image-post"></div>
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
                                    <div class="view-post__image view-post__image_small" id="js-view-image-card"></div>
                                    <div class="view-post__post-content">
                                        <h4 class="view-post__title view-post__title_small js-title-view">New Post</h4>
                                        <p class="view-post__subtitle view-post__subtitle_small js-description-view">
                                            Please, enter any description
                                        </p>
                                        <div class="view-post__description">
                                            <div class="view-post__author">
                                                <div class="view-post__image-wrapper">
                                                    <div class="view-post__image view-post__image_author"
                                                         id="js-view-author-image"></div>
                                                </div>
                                                <span class="view-post__author-name js-author_name-view">Enter author name</span>
                                            </div>
                                            <span class="view-post__date"
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
            <div class="admin-form__textarea-wrapper">
                <label class="admin-form__label" for="js-textarea">Post content (plain text)</label>
                <textarea class="admin-form__textarea" name="textarea" id="js-textarea" cols="30" rows="10"
                          placeholder="Type anything you want ..."></textarea>
                <span class="admin-form__hidden-error admin-form__hidden-error_textarea"></span>
            </div>
        </div>
    </form>
</main>
</body>
<script src="./script/admin_panel.js"></script>
</html>
