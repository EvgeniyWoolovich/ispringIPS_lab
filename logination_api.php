<?php
include './data/ValidateLogin.php';

$validate = new ValidateLogin;
$method = $_SERVER['REQUEST_METHOD'];
header('Content-Type: application/json; charset=utf-8');

if ($method === 'POST') {
    $requestJSON = file_get_contents('php://input');
    $data = json_decode($requestJSON, true);

    if (!$validate->validateUserAuthoringDate($data)) {
        echo "Данный не валидные";
        return;
    }

    echo userAuthoring($data);
}

function userAuthoring($data): string|null
{
    $connectDataBase = new DataBase();
    $validate = new ValidateLogin();
    $result = '';
    try {
        $result = ($validate->isAuthorizeStatus($data));
    } catch (Exception $errors) {
        echo $errors->getMessage();
    }

    if (!$result['id']) {
        $result = [
            'id' => $connectDataBase->getNewUserId(),
            'status' => 1
        ];
    };

    return json_encode($result);
}