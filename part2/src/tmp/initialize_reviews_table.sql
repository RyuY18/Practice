DROP TABLE IF EXISTS reviews;

CREATE TABLE reviews (
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    bookname VARCHAR(255),
    author VARCHAR(100),
    status VARCHAR(10),
    evaluation INTEGER,
    houghts VARCHAR(1000),
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) DEFAULT CHARACTER SET=utf8mb4;