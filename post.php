<?php
include './data/DataBaseProcessing.php';
$id = $_GET['id'];
$connectionDataBase = new DataBase();
$post = $connectionDataBase->getPostById($id);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title><?= $post['title'] ?? null ?> <?= $post['id'] ?? null ?></title>
    <link rel="stylesheet" href="styles/escape_page.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&family=Kalnia:wght@300;400&family=Lora:ital,wght@0,400;0,500;1,400&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oxygen:wght@300;400&display=swap"
          rel="stylesheet">
</head>
<body>
<?php include 'header.php'; ?>
<main class="main">
    <div class="main__container container">
        <h1 class="main__title"><?= $post['title'] ?? null ?></h1>
        <p class="main__subtitle"><?= $post['subtitle'] ?? null ?></p>
    </div>
    <img class="main__image" src="<?= $post['image_url'] ?? null ?>" alt="<?= $post['image_alt'] ?? null ?>"
         width="1440" height="534">
    <div class="main__text-content container">
        <?= $post['content'] ?? null ?>
    </div>
</main>
<?php include 'footer.php'; ?>
</body>
</html>
