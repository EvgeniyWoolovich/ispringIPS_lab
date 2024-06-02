CREATE TABLE user
(
    id           INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    user_name    VARCHAR(255) NOT NULL,
    user_email   VARCHAR(255) NOT NULL,
    user_id      INT,
    password     VARCHAR(255) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES author (id) ON DELETE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE utf8mb4_unicode_ci;