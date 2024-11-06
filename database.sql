CREATE DATABASE shape_your_style;

USE shape_your_style;

CREATE TABLE body_type_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    body_type VARCHAR(50),
    image_name VARCHAR(255)
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(50),
    category_image VARCHAR(255)
);
