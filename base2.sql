CREATE DATABASE IF NOT EXISTS web;
USE web;
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE IF NOT EXISTS movies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    type ENUM('movie', 'series') NOT NULL,
    annéeSortie YEAR,
    rating DECIMAL(3,1) CHECK (rating >= 0 AND rating <= 10),
    description TEXT,
    image_url VARCHAR(255),
    film_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
create table IF NOT EXISTS my_liste(
    id int AUTO_INCREMENT PRIMARY KEY,
    user_id int NOT NULL,
    movie_id int NOT NULL,
    date_ajout TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    unique KEY user_media(user_id,movie_id),-- un seul film presente que un seul fois dans my liste
    Foreign Key (user_id) REFERENCES users(id) on delete CASCADE,
    Foreign Key (movie_id) REFERENCES movies(id) on delete CASCADE -- on delete cascade pour supprimer les clés étrangers si un utilisateur supprimer son compte
);
CREATE TABLE IF NOT EXISTS historique (
    user_id INT NOT NULL,
    movie_id INT NOT NULL,
    dateVisionnage DATETIME DEFAULT CURRENT_TIMESTAMP,
    progressionSecond INT DEFAULT 0,
    PRIMARY KEY (user_id, movie_id),
    CONSTRAINT fk_user_hist FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    CONSTRAINT fk_media_hist FOREIGN KEY (movie_id) REFERENCES movies(id) ON DELETE CASCADE
);
CREATE TABLE IF NOT EXISTS prochainMedia (
    user_id INT NOT NULL,
    movie_id INT NOT NULL,
    dateAjout TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (user_id, movie_id),
    CONSTRAINT fk_user_prochain FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    CONSTRAINT fk_movie_prochain FOREIGN KEY (movie_id) REFERENCES movies(id) ON DELETE CASCADE
);