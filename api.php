<?php
include './data/ValidatePostData.php';

$validate = new ValidatePostData;
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {
    $requestJSON = file_get_contents('php://input');
    $data = json_decode($requestJSON, true);

    if (!$validate->validateData($data)) {
        echo "Отправить форму не возможно, не корректные данные в POST";
        return;
    }

    if (!$validate->validateAuthor($data)) {
        echo "Отправить форму не возможно, не корректный Автор";
        return;
    }

    savePost($data);
}

function saveImage(string $imageBase64, string $imageUrl): void
{
    $imageBase64Array = explode(';base64,', $imageBase64);
    $imageDecoded = base64_decode($imageBase64Array[1]);
    saveFile($imageUrl, $imageDecoded);
}

function saveFile(string $file, string $data): void
{
    $myFile = fopen($file, 'w');
    if (!$myFile) {
        echo 'Произошла ошибка при открытии файла';
        return;
    }

    $result = fwrite($myFile, $data);
    if ($result) {
        echo 'Данные успешно сохранены в файл';
    } else {
        echo 'Произошла ошибка при сохранении данных в файл';
    }

    fclose($myFile);
}

function uuidv4(): string
{
    $generateRandomBytes = random_bytes(16);

    $generateRandomBytes[6] = chr(ord($generateRandomBytes[6]) & 0x0f | 0x40);
    $generateRandomBytes[8] = chr(ord($generateRandomBytes[8]) & 0x3f | 0x80);

    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($generateRandomBytes), 4));
}

function imageExtension($data): string
{
    $imageBase64Array = explode(';base64,', $data);
    return str_replace('data:image/', '', $imageBase64Array[0]);
}

function createImageUrlForSaveImage($uuid, $excitation): string
{
    return "images/posts/{$uuid}.{$excitation}";
}

function createImageUrlForData($uuid, $excitation): string
{
    return "/static/images/posts/{$uuid}.{$excitation}";
}

function savePost($data): void
{
    $connectDataBase = new DataBase();
    $uuid = uuidv4();
    $postData = date('Y-m-d H:i:s', time());
    $excitation = imageExtension($data['image']);
    $imageUrl = createImageUrlForData($uuid, $excitation);
    $imageAlt = $data['title'];

    $title = $data['title'];
    $subtitle = $data['subtitle'];
    $textContent = $data['content'];
    $authorId = $data['author_id'];
    $note = $data['note'];
    $featured = $data['featured'];
    $recent = $data['recent'];

    try {
        if (!$connectDataBase->getAuthorById($data['author_id'])) {
            $authorName = $data['author_name'];
            $authorImageUrl = $data['author_image_url'];
            $authorImageAlt = $data['author_image_alt'];
            $connectDataBase->insertNewAuthor($authorName, $authorImageUrl, $authorImageAlt);
            $authorId = $connectDataBase->getLastId();
        }

        $connectDataBase->insertPost($uuid, $title, $textContent, $subtitle, $imageUrl, $imageAlt, $authorId, $postData, $note, $featured, $recent);
        saveImage($data['image'], createImageUrlForSaveImage($uuid, $excitation));
    } catch (Exception $error) {
        echo $error->getMessage();
    }
}