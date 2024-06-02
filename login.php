<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="/static/styles/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&family=Kalnia:wght@300;400&family=Lora:ital,wght@0,400;0,500;1,400&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oxygen:wght@300;400&display=swap"
          rel="stylesheet">
    <title>Login</title>
</head>
<body>
<div class="preview-wrapper">
    <div class="preview">
        <div class="preview__text-container">
            <h1 class="preview__title">Escape.<span class="preview__lowercase">author</span></h1>
            <p class="preview__subtitle">Log in to start creating</p>
        </div>
        <div class="authentication">
            <form class="form authentication__form" method="post">
                <h2 class="authentication__title">Log In</h2>
                <div class="authentication__error-field hidden">
                    <span class="authentication__error-text">A-Ah! Check all fields</span>
                </div>
                <div class="authentication__input-wrapper">
                    <label class="authentication__label" for="email_input">Email</label>
                    <input class="authentication__input authentication__input_user_email" type="email" name="user_email"
                           id="email_input" required>
                    <span class="authentication__error authentication__error_user_email"></span>
                </div>
                <div class="authentication__input-wrapper">
                    <label class="authentication__label" for="password_input">Password</label>
                    <input class="authentication__input authentication__input_password" type="password" name="password"
                           id="password_input" required>
                    <span class="authentication__toggle-password"></span>
                    <span class="authentication__error authentication__error_password"></span>
                </div>
                <input class="authentication__submit" type="submit" value="Log In" id="submit_login">
            </form>
        </div>
    </div>
</div>
</body>
<script type="module" src="/script/login.js"></script>
</html>