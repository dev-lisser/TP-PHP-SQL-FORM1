CREATE DATABASE users_db;

USE users_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    identifiants VARCHAR(50) UNIQUE,
    mot_de_passe VARCHAR(255)
);

INSERT INTO users (nom, prenom, identifiants, mot_de_passe) VALUES
('Jean', 'Dupont', 'j.dupont', 'Jd945@'),
('Marie', 'Durand', 'm.durand', 'Md945@'),
('Paul', 'Lemoine', 'p.lemoine', 'Pl945@'),
('Claire', 'Martin', 'c.martin', 'Cm945@');
