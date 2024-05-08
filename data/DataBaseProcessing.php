<?php
include 'SqlQuery.php';

class DataBase
{
    protected const string HOST = 'localhost';
    protected const string USERNAME = 'user_zhenya';
    protected const string PASSWORD = 'RusWool2033//';
    protected const string DATABASE = 'blog';
    protected const int PORT = 3306;


    protected function createDBConnection(): mysqli
    {
        $dataBaseConnection = new mysqli(self::HOST, self::USERNAME, self::PASSWORD, self::DATABASE, self::PORT);
        if ($dataBaseConnection->connect_error) {
            die("Connection failed: " . $dataBaseConnection->connect_error);
        }
        return $dataBaseConnection;
    }

    protected function closeDBConnection(mysqli $dataBaseConnection): void
    {
        $dataBaseConnection->close();
    }

    public function getData(): array
    {
        $dataBaseConnection = $this->createDBConnection();
        $dataArray = [];

        try {
            $result = $dataBaseConnection->query(SqlQuery::GET_ALL_DATA);
            $dataLnegth = $result->num_rows;
            if ($dataLnegth) {
                for ($i = 0; $i < $dataLnegth; $i++) {
                    $dataArray[] = $result->fetch_assoc();
                }
            }
        } catch (Exception $error) {
            echo $error->getMessage();
        }

        $this->closeDBConnection($dataBaseConnection);
        return $dataArray;
    }

    public function getPostById(): array|null
    {
        $uuid = $_GET['id'];
        $dataBaseConnection = $this->createDBConnection();
        $post = [];

        try {
            $result = $dataBaseConnection->query(SqlQuery::GET_POST_BY_ID . "\"{$dataBaseConnection->real_escape_string($uuid)}\";");
            $post = $result->fetch_assoc();
        } catch (Exception $error) {
            echo $error->getMessage();
        }

        $this->closeDBConnection($dataBaseConnection);
        return $post;
    }

    public function getAuthorById($authorId): array|null
    {
        $dataBaseConnection = $this->createDBConnection();
        $authorData = [];

        try {
            $result = $dataBaseConnection->query(SqlQuery::GET_AUTHOR_BY_ID . '"' . $dataBaseConnection->real_escape_string($authorId) . '"');
            $authorData = $result->fetch_assoc();
        } catch (Exception $error) {
            echo $error->getMessage();
        }

        $this->closeDBConnection($dataBaseConnection);
        return $authorData;
    }

    public function getLastId(): string
    {
        $dataBaseConnection = $this->createDBConnection();

        try {
            $result = $dataBaseConnection->query(SqlQuery::GET_LAST_ID);
            $authorsData = $result->fetch_assoc();
        } catch (Exception $error) {
            echo $error->getMessage();
        }

        $this->closeDBConnection($dataBaseConnection);
        return $authorsData['MAX(id)'];
    }

    public function insertNewAuthor($authorName, $authorImageUrl, $authorImageAlt): void
    {
        $dataBaseConnection = $this->createDBConnection();

        $sql = "INSERT INTO 
                    author 
                SET
                    author_name = '{$dataBaseConnection->real_escape_string($authorName)}',
                    author_image_url = '$authorImageUrl',
                    author_image_alt = '{$dataBaseConnection->real_escape_string($authorImageAlt)}'";
        try {
            $dataBaseConnection->query($sql);
        } catch (Exception $error) {
            echo $error->getMessage();
        }
        $this->closeDBConnection($dataBaseConnection);
    }

    public function insertPost($uuid, $title, $content, $subtitle, $imageUrl, $imageAlt, $authorId, $postData, $note, $featured, $recent): void
    {
        $dataBaseConnection = $this->createDBConnection();

        $sql = "INSERT INTO
                    post
                SET 
                    uuid = '$uuid',
                    title = '{$dataBaseConnection->real_escape_string($title)}',
                    content = '{$dataBaseConnection->real_escape_string($content)}',
                    subtitle = '{$dataBaseConnection->real_escape_string($subtitle)}',
                    image_url = '$imageUrl',
                    image_alt = '{$dataBaseConnection->real_escape_string($imageAlt)}',
                    author_id = '{$authorId}',
                    publish_date = '{$postData}',
                    note = '{$dataBaseConnection->real_escape_string($note)}',
                    featured = '{$featured}',
                    recent = '{$recent}'";

        $dataBaseConnection->query($sql);

        $this->closeDBConnection($dataBaseConnection);
    }
}

$connectDataBase = new DataBase();