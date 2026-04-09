-- Création de la base de données
CREATE DATABASE IF NOT EXISTS web;
USE web;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE movies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    type ENUM('movie', 'series') NOT NULL,
    date_creation YEAR,
    rating DECIMAL(3,1) CHECK (rating >= 0 AND rating <= 10),
    description TEXT,
    image_url VARCHAR(255),
    film_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);