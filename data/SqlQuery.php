<?php

class SqlQuery
{
    public const string GET_ALL_DATA = 'SELECT *,UNIX_TIMESTAMP(publish_date) AS unix_time FROM author INNER JOIN post ON author.id = post.author_id;';
    public const string GET_ALL_ID = 'SELECT id FROM post';
    public const string GET_POST_BY_ID = 'SELECT * FROM post WHERE uuid=';
    public const string GET_AUTHOR_BY_ID = 'SELECT * FROM author WHERE id=';
    public const string GET_LAST_ID = 'SELECT MAX(id) FROM author;';
    public const string GET_LAST_USER_ID = 'SELECT MAX(id) FROM user;';
    public const string GET_USER_BY_EMAIL = 'SELECT id,user_email,password FROM user WHERE user_email=';
}