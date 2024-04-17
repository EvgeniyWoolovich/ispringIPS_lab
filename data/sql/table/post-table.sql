CREATE TABLE post
(
    id           INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    uuid         VARCHAR(36)  NOT NULL,
    title        VARCHAR(255) NOT NULL,
    content      TEXT         NOT NULL,
    subtitle     VARCHAR(255) NOT NULL,
    image_url    VARCHAR(255) NOT NULL,
    image_alt    VARCHAR(255) NOT NULL,
    author_id    INT          NOT NULL,
    publish_date TIMESTAMP    NOT NULL,
    note         VARCHAR(255) NOT NULL,
    featured     TINYINT      NOT NULL,
    recent       TINYINT      NOT NULL,
    FOREIGN KEY (author_id) REFERENCES author (id) ON DELETE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE utf8mb4_unicode_ci;

