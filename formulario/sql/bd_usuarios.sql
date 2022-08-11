--Crear y Usar La Base de Datos
CREATE DATABASE bd_usuarios
    DEFAULT CHARACTER SET = 'utf8mb4';
USE bd_usuarios;

--Crear la Tabla en la que se alojaran los datos de la imagen
CREATE TABLE tbl_usuarios (
    Id_usr INT AUTO_INCREMENT,
    nombre_usr VARCHAR (50),
    apellido_usr VARCHAR (50),              --Tipo de Dato BLOB de longitud maxima de 16 MB
    correo_usr VARCHAR (80),
    password_usr VARCHAR (25),
    PRIMARY KEY (Id_usr)
);

--Mostrar el Contenido de la Tabla
SELECT * FROM tbl_usuarios;
