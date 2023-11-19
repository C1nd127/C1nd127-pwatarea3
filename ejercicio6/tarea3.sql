CREATE DATABASE Tarea_3;
USE Tarea_3;

CREATE TABLE Usuarios  (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(30) NOT NULL,
    contraseña VARCHAR(30) NOT NULL
);
/*Insercion de datos */
INSERT INTO Usuarios (id, usuario, contraseña) VALUES
('1','user1','pass1');
INSERT INTO Usuarios (id, usuario, contraseña) VALUES
('2','user2','pass2');
INSERT INTO Usuarios (id, usuario, contraseña) VALUES
('3','Cindy','123ube');