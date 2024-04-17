CREATE TABLE author
(
    id               INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    author_name      VARCHAR(255) NOT NULL,
    author_image_url VARCHAR(255) NOT NULL,
    author_image_alt VARCHAR(255) NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE utf8mb4_unicode_ci;