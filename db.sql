CREATE DATABASE TasteNest


-- Tabla: Usuarios
CREATE TABLE Usuarios (
    usuario_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    correo VARCHAR(150) UNIQUE,
    contrasena VARCHAR(255),
    telefono VARCHAR(15),
    direccion VARCHAR(255),
    es_vendedor varchar(5)
);

-- Tabla: Menu
CREATE TABLE Menu (
    menu_id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    nombre_item VARCHAR(100),
    descripcion TEXT,
    precio DECIMAL(10, 2),
    disponible BOOLEAN,
    creado_en varchar(20),
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(usuario_id)
);


-- Tabla: Pedidos
CREATE TABLE Pedidos (
    pedido_id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    vendedor_id INT,
    fecha_pedido TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    precio_total DECIMAL(10, 2),
    estado VARCHAR(50),
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(usuario_id),
    FOREIGN KEY (vendedor_id) REFERENCES Usuarios(usuario_id)
);

-- Tabla: Ubicaciones
CREATE TABLE Ubicaciones (
    id_ubicacion INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    direccion VARCHAR(255),
    latitud DECIMAL(10, 7),
    longitud DECIMAL(10, 7),
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(usuario_id)
);

-- Tabla: Reseñas
CREATE TABLE Reseñas (
    reseña_id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    vendedor_id INT,
    calificacion INT CHECK (calificacion BETWEEN 1 AND 5),
    reseña_texto TEXT,
    fecha_resena TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(usuario_id),
    FOREIGN KEY (vendedor_id) REFERENCES Usuarios(usuario_id)
);

-- Tabla: Sesiones
CREATE TABLE Sesiones (
    sesion_id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    expira_en TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(usuario_id)
);

-- Tabla: Vendedor
CREATE TABLE Vendedor (
    id_vendedor INT AUTO_INCREMENT PRIMARY KEY,
    nombre_completo VARCHAR(100),
    direccion VARCHAR(255),
    ubicacion VARCHAR(255)
);

--CONSULTAS DE INSERT
--Insertar usuario en la tabla usuariooss

INSERT INTO Usuarios (nombre, correo, contrasena, telefono, direccion, es_vendedor)
VALUES ('Juan Pérez', 'juan.perez@example.com', 'password123', '1234567890', 'Calle Principal 123', TRUE);

--Insertar en el menu de vendedor

INSERT INTO Menu (usuario_id, nombre_item, descripcion, precio, disponible, creado_en)
VALUES (1, 'Tacos al Pastor', 'Deliciosos tacos con piña y carne al pastor.', 50.00, TRUE, '2024-11-15');
--Insertar reseña

INSERT INTO Reseñas (usuario_id, vendedor_id, calificacion, reseña_texto)
VALUES (2, 1, 5, 'voy a venir mas seguido estuvo muy buena la comida!');

--CONSULTAS DE INNER JOIN
--Obtener las reseñas con el nombre del usuario que las realizó
SELECT Usuarios.nombre, Reseñas.calificacion, Reseñas.reseña_texto
FROM Reseñas
INNER JOIN Usuarios ON Reseñas.usuario_id = Usuarios.usuario_id;
--Listar los menús con el nombre del vendedor:
SELECT Menu.nombre_item, Menu.precio, Usuarios.nombre AS vendedor
FROM Menu
INNER JOIN Usuarios ON Menu.usuario_id = Usuarios.usuario_id;
--Mostrar los pedidos con el nombre del cliente y el vendedor:
SELECT P.pedido_id, U.nombre AS cliente, V.nombre AS vendedor, P.precio_total
FROM Pedidos P
INNER JOIN Usuarios U ON P.usuario_id = U.usuario_id
INNER JOIN Usuarios V ON P.vendedor_id = V.usuario_id;

--CONSULTAS DE PRODUCTO CARTESIANO
--OBTENER TODAS LAS COMBINACIONES ENTRE USUARIOS Y MENUS
SELECT Usuarios.nombre, Menu.nombre_item
FROM Usuarios, Menu;

SELECT Usuarios.nombre, Reseñas.calificacion
FROM Usuarios, Reseñas;

SELECT Vendedor.nombre_completo, Ubicaciones.direccion
FROM Vendedor, Ubicaciones;

--FUNCIONES DE COLUMNA
--OBTENER EL PROMEDIO DE CALIFICACIONES DE RESEÑAS
SELECT AVG(calificacion) AS promedio_calificaciones
FROM Reseñas;
--CALCULAR EL TOTAL DE INGRESOS
SELECT SUM(precio_total) AS ingresos_totales
FROM Pedidos;
--CONTAR EL NUMERO DE US REGISTRADOS
SELECT COUNT(*) AS total_usuarios
FROM Usuarios;

-- RESUMIR EL NUMERO DE MENUS POSIBLES POR CADA VENDEDOR
SELECT Usuarios.nombre AS vendedor, COUNT(Menu.menu_id) AS total_menus
FROM Menu
INNER JOIN Usuarios ON Menu.usuario_id = Usuarios.usuario_id
WHERE Menu.disponible = TRUE
GROUP BY Usuarios.nombre;
--MOSTRAR EL TOTAL DE PEDIDOS REALIZADOS X DADA CLIENTE
SELECT Usuarios.nombre AS cliente, COUNT(Pedidos.pedido_id) AS total_pedidos
FROM Pedidos
INNER JOIN Usuarios ON Pedidos.usuario_id = Usuarios.usuario_id
GROUP BY Usuarios.nombre;
--CALCULAR LA CALIFICACION PROMEDIO DE CADA VENDEDOR
SELECT V.nombre AS vendedor, AVG(R.calificacion) AS promedio_calificacion
FROM Reseñas R
INNER JOIN Usuarios V ON R.vendedor_id = V.usuario_id
GROUP BY V.nombre;

