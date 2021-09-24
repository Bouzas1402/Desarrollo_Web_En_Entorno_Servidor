-- Accede a la BD quevedo:
USE quevedodb;

-- Crea la tabla usuarios
CREATE TABLE users (
                       id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                       username VARCHAR(50) NOT NULL UNIQUE,
                       password VARCHAR(255) NOT NULL,
                       created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);