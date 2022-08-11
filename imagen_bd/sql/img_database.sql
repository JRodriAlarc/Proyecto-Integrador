CREATE DATABASE Almacenar_Img
    DEFAULT CHARACTER SET = 'utf8mb4';

USE Almacenar_Img;

CREATE TABLE imagenes(
    Id_img INT AUTO_INCREMENT,
    Nombre_img VARCHAR(100),
    Imagen MEDIUMBLOB,
    Tipo_img VARCHAR(30),
    PRIMARY KEY (Id_img)
);

SELECT * FROM imagenes;
