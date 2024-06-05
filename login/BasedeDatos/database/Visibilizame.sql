-- Crear la base de datos
CREATE database visibilizame;

-- Usar la base de datos
USE visibilizame;

-- Crear tabla Grafica
CREATE TABLE Grafica (
    id INT PRIMARY KEY AUTO_INCREMENT,
    mes VARCHAR(20) NOT NULL,
    año INT NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    descripcion TEXT NOT NULL,
    rango INT CHECK (rango >= 0),
    etiquetaY VARCHAR(50) NOT NULL,
    tituloX VARCHAR(50) NOT NULL,
    tipo VARCHAR(50) NOT NULL,
    columna1 VARCHAR(50),
    columna2 VARCHAR(50),
    columna3 VARCHAR(50),
    columna4 VARCHAR(50),
    columna5 VARCHAR(50),
    columna6 VARCHAR(50),
    columna7 VARCHAR(50)
);

-- Crear tabla periodico1 con llave foránea
CREATE TABLE periodico1 (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    grafica_id INT,
    dato1 INT,
    dato2 INT,
    dato3 INT,
    dato4 INT,
    dato5 INT,
    dato6 INT,
    dato7 INT,
    FOREIGN KEY (grafica_id) REFERENCES Grafica(id)
);

-- Crear tabla periodico2 con llave foránea
CREATE TABLE periodico2 (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    grafica_id INT,
    dato1 INT,
    dato2 INT,
    dato3 INT,
    dato4 INT,
    dato5 INT,
    dato6 INT,
    dato7 INT,
    FOREIGN KEY (grafica_id) REFERENCES Grafica(id)
);

-- Crear tabla periodico3 con llave foránea
CREATE TABLE periodico3 (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    grafica_id INT,
    dato1 INT,
    dato2 INT,
    dato3 INT,
    dato4 INT,
    dato5 INT,
    dato6 INT,
    dato7 INT,
    FOREIGN KEY (grafica_id) REFERENCES Grafica(id)
);

-- Crear tabla Usuarios
CREATE TABLE Usuarios (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(245) NOT NULL,
    password VARCHAR(245) NOT NULL
);


-- INSERT INTO grafica (mes, año, categoria, descripcion, rango, etiquetaY, tituloX, tipo, columna1, columna2, columna3, columna4, columna5) 
-- VALUES ("Abril",2023,"Agresión","shshshshshshws",50,"x","y","barras","A","B","C","D","E");

-- --Comando para saber el último id ingresado a la tabla grafica!
-- SELECT id from grafica ORDER BY id DESC LIMIT 1;

-- SELECT periodico1.dato1 AS dato1_periodico1, periodico2.dato1 AS dato1_periodico2, periodico3.dato1 AS dato1_periodico3
--     FROM periodico1
--     JOIN periodico2 ON periodico1.id = periodico2.id
--     JOIN periodico3 ON periodico2.id = periodico3.id where periodico1.id = 4;