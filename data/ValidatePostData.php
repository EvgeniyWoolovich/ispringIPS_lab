<?php
include 'DataBaseProcessing.php';

class ValidatePostData
{
    public const int MAX_LENGTH_VARCHAR = 255;
    public const string TYPE_STRING = 'string';
    public const string TYPE_INTEGER = 'integer';

    public function validateData(array $data): bool|null
    {
        $authorId = self::isValidIntegerType(self::convertToIntTinyType($data['author_id']));
        $title = self::isValidCharType($data['title']);
        $textContent = self::isValidTextType($data['content']);
        $subtitle = self::isValidCharType($data['subtitle']);
        $note = self::isValidNote($data['note']);
        $featured = self::isValidTinyIntType(self::convertToIntTinyType($data['featured']));
        $recent = self::isValidTinyIntType(self::convertToIntTinyType($data['recent']));

        return $authorId && $title && $textContent && $subtitle && $note && $featured && $recent;
    }

    public function validateAuthor(array $data): bool
    {
        $dataBaseProcessing = new DataBase();

        try {
            if (!$dataBaseProcessing->getAuthorById($data['author_id'])) {
                $authorName = self::isValidCharType($data['author-name']);
            } else {
                return true;
            }

        } catch (Exception $error) {
            echo $error->getMessage();
        }

        return $authorName;
    }

    public function isValidTinyIntType(int $dataItem): bool
    {

        if ($dataItem !== 1 && $dataItem !== 0) {
            echo 'Error: is not valid value';
        }

        if (gettype($dataItem) !== self::TYPE_INTEGER) {
            echo 'Error: in not TinyInt Type';
        }

        return ($dataItem === 1 || $dataItem === 0) && gettype($dataItem) === self::TYPE_INTEGER;
    }

    public function isValidCharType(mixed $dataItem): bool
    {

        if (gettype($dataItem) !== self::TYPE_STRING) {
            echo 'Error: is not Char Type';
        }

        if (!$dataItem) {
            echo 'Error: Empty value';
        }

        if (strlen($dataItem) > self::MAX_LENGTH_VARCHAR) {
            echo 'Error: Maximum limit exceeded';
        }

        return $dataItem && gettype($dataItem) === self::TYPE_STRING && strlen($dataItem) <= self::MAX_LENGTH_VARCHAR;
    }

    public function isValidTextType(mixed $dataItem): bool
    {
        if (!$dataItem) {
            echo 'Error: Empty field';
        }

        if (gettype($dataItem) !== self::TYPE_STRING) {
            echo 'Error: is not Text Type';
        }

        return $dataItem && gettype($dataItem) === self::TYPE_STRING;
    }

    public function isValidIntegerType(mixed $dataItem): bool
    {
        if (!$dataItem) {
            echo 'Error: Empty field';
        }

        var_dump(gettype($dataItem));
        var_dump(gettype($dataItem) !== self::TYPE_INTEGER);
        if (gettype($dataItem) !== self::TYPE_INTEGER) {
            echo 'Error: is not Integer Type';
        }

        return $dataItem && gettype($dataItem) === self::TYPE_INTEGER;
    }

    public function convertToIntTinyType($value): int
    {
        return intval($value);
    }
    public  function isValidNote(mixed $note): bool
    {
        if (!(strlen($note) < self::MAX_LENGTH_VARCHAR)) {
            echo 'Error: Maximum limit exceeded';
        }

        if (gettype($note) !== self::TYPE_STRING) {
            echo 'Error: is not Char Type';
        }

        return strlen($note) < self::MAX_LENGTH_VARCHAR && gettype($note) === self::TYPE_STRING;
    }
}