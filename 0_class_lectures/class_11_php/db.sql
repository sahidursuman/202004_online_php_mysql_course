-- Create a new database
-- CREATE DATABASE tiny_social;

-- Create a new database with utf-8 charset
CREATE DATABASE tiny_social CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Create a user table
CREATE TABLE users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        username VARCHAR(50) NOT NULL,
        email VARCHAR(150) NOT NULL UNIQUE,
        password VARCHAR(100) NOT NULL,
        active BOOLEAN
);


CREATE TABLE posts (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_id INT(6),
        body TEXT NOT NULL,
        post_count INT(6),
        published_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id)
);