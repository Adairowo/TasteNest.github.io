CREATE DATABASE TasteNest;

CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL, -- Asegúrate de almacenar la contraseña de forma segura (hash)
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    level ENUM('admin', 'user') DEFAULT 'user' -- Para definir el nivel de acceso
);

CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('pending', 'completed', 'canceled') DEFAULT 'pending',
    total DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);

CREATE TABLE menu_items (
id INT AUTO_INCREMENT PRIMARY KEY,
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
);