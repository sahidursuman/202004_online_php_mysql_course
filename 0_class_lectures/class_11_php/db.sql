-- Create a new database
CREATE DATABASE tiny_social;

-- Create a user table
CREATE TABLE students (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        username VARCHAR(50) NOT NULL,
        email VARCHAR(150),
        password VARCHAR(100),
        active BOOLEAN
);


CREATE TABLE posts (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_id INT(6),
        body TEXT NOT NULL,
        post_count INT(6)
)