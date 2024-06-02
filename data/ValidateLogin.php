<?php
include 'DataBaseProcessing.php';

class ValidateLogin
{
    private const int MAX_LENGTH_VARCHAR = 255;
    private const string TYPE_STRING = 'string';
    private const string VALIDATE_EMAIL_REG_EXP = '/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
    private const string USER_EMAIL_DATA_KEY = 'user_email';
    private const string PASSWORD_DATA_KEY = 'password';
    private const string USER_ID_DATA_KEY = 'id';
    private const string STATUS = 'status';
    private const int STATUS_APPROVED = 1;
    private const int STATUS_REJECT = 0;


    public function validateUserAuthoringDate(array $authoringDate): bool
    {
        $email = self::isValidateEmail($authoringDate['user_email']);
        $password = self::isValidateLogin($authoringDate['password']);

        return $password && $email;
    }

    public function isValidateEmail(string $email): bool
    {
        preg_match(self::VALIDATE_EMAIL_REG_EXP, $email, $match);

        if (!$match) {
            echo 'Error: is not valid email';
        }

        if (strlen($email) > self::MAX_LENGTH_VARCHAR) {
            echo 'Error: Maximum limit exceeded';
        }

        if (gettype($email) !== self::TYPE_STRING) {
            echo 'Error: is not Char Type';
        }

        return gettype($email) === self::TYPE_STRING && $match && strlen($email) <= self::MAX_LENGTH_VARCHAR;
    }

    public function isValidateLogin(string $password): bool
    {
        if (strlen($password) > self::MAX_LENGTH_VARCHAR) {
            echo 'Error: Maximum limit exceeded';
        }

        if (!$password) {
            echo 'Error: is not valid email';
        }

        if (gettype($password) !== self::TYPE_STRING) {
            echo 'Error: is not Char Type';
        }

        return $password && strlen($password) <= self::MAX_LENGTH_VARCHAR && gettype($password) === self::TYPE_STRING;
    }

    public function isAuthorizeStatus($date): array
    {
        $connectDataBase = new DataBase;
        $email = $date[self::USER_EMAIL_DATA_KEY];
        $password = $date[self::PASSWORD_DATA_KEY];
        $userDate = $connectDataBase->getUserByEmail($email);
        $emailDate = $userDate[self::USER_EMAIL_DATA_KEY] ?? '';
        $passwordDate = $userDate[self::PASSWORD_DATA_KEY] ?? '';
        $idDate = $userDate[self::USER_ID_DATA_KEY] ?? '';
        $authorizeStatus = [
            self::STATUS => '',
            self::USER_ID_DATA_KEY => '',
        ];

        if ($emailDate === $email && $passwordDate === $password) {
            $authorizeStatus[self::STATUS] = self::STATUS_APPROVED;
            $authorizeStatus[self::USER_ID_DATA_KEY] = $idDate;
        } else {
            $authorizeStatus[self::STATUS] = self::STATUS_REJECT;
        }

        return $authorizeStatus;
    }
}