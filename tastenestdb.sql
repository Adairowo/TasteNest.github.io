CREATE DATABASE dbtastenest;

CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    level ENUM('admin', 'user') DEFAULT 'user', -- Para definir el nivel de acceso
    full_name  VARCHAR(30) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL -- Asegú
);

CREATE TABLE menu_items (
menu_id INT AUTO_INCREMENT PRIMARY KEY,
created_at DATETIME NOT NULL,
imagen_menu VARCHAR(255) NOT NULL,
titulo VARCHAR(20) NOT NULL,
descripcion VARCHAR(127) NOT NULL,
precio DECIMAL(10,2) NOT NULL,
ubicacion VARCHAR(65) NOT NULL );

CREATE TABLE Opiniones (
    opinion_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(24) NOT NULL UNIQUE,
    opinion VARCHAR(255) NOT NULL
    fecha_opinion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);