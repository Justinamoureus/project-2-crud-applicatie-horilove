CREATE DATABASE IF NOT EXISTS horilove;

USE horilove;

CREATE TABLE IF NOT EXISTS accounts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    leeftijd INT,
    naam VARCHAR(255),
    achternaam VARCHAR(255),
    email VARCHAR(255),
    telefoonnummer VARCHAR(20),
    password VARCHAR(255),
    username VARCHAR(255),
);

