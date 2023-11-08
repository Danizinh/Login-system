CREATE DATABASE IF NOT EXISTS information;

USE information;

CREATE TABLE
    IF NOT EXISTS usuario(
        id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
        name VARCHAR(100),
        last_name VARCHAR(100),
        email VARCHAR(100) UNIQUE,
        password VARCHAR(225)
    );

SELECT * FROM usuario;

DELETE FROM usuario;

DROP TABLE usuario;