IF NOT EXISTS (SELECT * FROM sys.databases WHERE name = 'Proyecto_VidaMarina')
BEGIN
CREATE DATABASE Proyecto_VidaMarina;
END
GO

USE Proyecto_VidaMarina;

BEGIN

CREATE TABLE Voluntario(
   ID INT identity(1,1) PRIMARY KEY,
   Nombre VARCHAR(20) NOT NULL,
   Primer_Apellido VARCHAR(20) NOT NULL,
   Segundo_Apellido VARCHAR(20) NOT NULL,
   email VARCHAR(50) NOT NULL,
   Nacionalidad VARCHAR(20) NOT NULL,
   FechaNacimiento DATE NOT NULL
);
END
GO

BEGIN

INSERT INTO Voluntario VALUES 
('Jose','Lopez','Gonzalez','joseLG@proyecto.com','Colombiano','17/08/1989'),
('Lucia','Morales','Valverde','luciaMV@proyecto.com','Cubana','12/03/1991'),
('Pedro','Pereira','Zambrano','pedropz@proyecto.com','Puertoriqueño','27/01/2000'),
('Dayanna','Mendez','Martinez','dayaMM@proyecto.com','Colombiana','19/11/1998'),
('Maria','Fernandez','Rodriguez','mariaFRLG@proyecto.com','Dominicana','21/04/2002'),
('Luis','Vargas','Flores','luisVF@proyecto.com','Peruano','02/06/1992'),
('Estefany','Hernandez','Mendoza','estefHM@proyecto.com','Cubana','07/01/1999');
END
GO

Select* FROM Voluntario

BEGIN

CREATE TABLE Habitad(
   Codigo_Bioma INT identity(1,1) PRIMARY KEY,
   Bioma VARCHAR(40) NOT NULL,
   Tipo VARCHAR(20) NOT NULL,
);
END
GO

BEGIN

INSERT INTO Habitad VALUES 
('Lagos, lagunas y humedales','Aguas Continentales'),
('Arrecifes de corales tropicales','Aguas Oceanicas'),
('Aguas polares y glaciares','Aguas Continentales'),
('Biomas de mar abierto y profundo','Aguas Oceanicas'),
('Embalses y pantanos','Aguas Continentales'),
('Plataformas marinas templadas','Aguas Oceanicas'),
('Ríos, arroyos y riachuelos','Aguas Continentales'),
('Islas oceánicas','Aguas Oceanicas');
END
GO

Select* FROM Habitad

BEGIN

CREATE TABLE Especie(
   Nombre_Cienetifico VARCHAR(50) PRIMARY KEY NOT NULL,
   Nombre VARCHAR(50) NOT NULL,
   Vulnerabilidad VARCHAR(50) NOT NULL,
   Bioma INT NOT NULL,
   FOREIGN KEY(Bioma)  REFERENCES Habitad(Codigo_Bioma),
);
END
GO

BEGIN

INSERT INTO Especie (Nombre_Cienetifico,Nombre,Vulnerabilidad,Bioma)
VALUES('Rhyncodon typus','Tiburón ballena','Malas practicas de pesca',4);
INSERT INTO Especie (Nombre_Cienetifico,Nombre,Vulnerabilidad,Bioma)
VALUES('Género Gymnuridae','Raya mariposas','Redes de pesca ilegales',4);
INSERT INTO Especie (Nombre_Cienetifico,Nombre,Vulnerabilidad,Bioma)
VALUES('Ursus maritimus','Osos polares','Cambio cliamtico',3);
INSERT INTO Especie (Nombre_Cienetifico,Nombre,Vulnerabilidad,Bioma)
VALUES('Vulpes lagopus','Zorro del artico','Cambio cliamtico',3);
INSERT INTO Especie (Nombre_Cienetifico,Nombre,Vulnerabilidad,Bioma)
VALUES('Inia geoffrensis','Delfín rosado','Contaminacion',5);
INSERT INTO Especie (Nombre_Cienetifico,Nombre,Vulnerabilidad,Bioma)
VALUES('Crocodylus niloticus','Cocodrilo del Nilo','Desaparcion de habitads',5);
INSERT INTO Especie (Nombre_Cienetifico,Nombre,Vulnerabilidad,Bioma)
VALUES('Trichomycterus areolatus','bagre pintado','Represas',1);
INSERT INTO Especie (Nombre_Cienetifico,Nombre,Vulnerabilidad,Bioma)
VALUES('Geotria australis','Lamprea','Contaminacion',1);
END
GO

Select* FROM Especie

BEGIN

CREATE TABLE Amenaza(
   ID INT identity(1,1) PRIMARY KEY, 
   Tipo VARCHAR(50) NOT NULL,
   Descripcion VARCHAR(500) NOT NULL,
   UbicacionGeografica varchar(50) NOT NULL,
);
END
GO

BEGIN

INSERT INTO Amenaza VALUES 
('Contaminacion','Contaminacion con productos quimicos o basura, dañando el ambiente y recursos que los rodea','Aguas Continentales');
INSERT INTO Amenaza VALUES 
('Represas','Construcciones impidendo el traslado y desarrrollo de las especies','Aguas Continentales');
INSERT INTO Amenaza VALUES 
('Desaparcion de habitads','Destruccion de habitads por construcciones, disminuyendo las areas y las especies que los rodean','Aguas Continentales');
INSERT INTO Amenaza VALUES 
('Cambio cliamtico','Cambios en la naturales y acciones del humano genera el efecto invernader, dañando los habitads','Aguas Continentales');
INSERT INTO Amenaza VALUES 
('Redes de pesca ilegales','El uso de herraminetas ilegales durante la pesca, acaba con muchas especies todos los años','Aguas Oceanicas');
INSERT INTO Amenaza VALUES 
('Malas practicas de pesca','Sobre explotacion de las pesca en especies especificas','Aguas Oceanicas');
END
GO

Select* FROM Amenaza

BEGIN

CREATE TABLE Contaminante(
   IDX INT NOT NULL FOREIGN KEY REFERENCES Amenaza(ID),
   Tipo VARCHAR(500) NOT NULL,
);
END
GO

BEGIN

INSERT INTO Contaminante (IDX,Tipo)
VALUES( 1,'Deteriora la resiliencia del ecosistema y supone un peligro para la salud humana de consumirse pescados y mariscos contaminados');
INSERT INTO Contaminante (IDX,Tipo)
VALUES(2,'Alteran los flujos de agua, bloquean las rutas de migración de los peces, devastan los hábitats de las especies en peligro de extinción y atrapan los sedimentos ricos en nutrientes y necesarios para reabastecer a los deltas río abajo');
INSERT INTO Contaminante (IDX,Tipo)
VALUES(3,'Las plantas, animales y otros organismos que lo ocupaban ven limitada su capacidad de carga, lo que lleva a un declive de poblaciones y hasta a la extinción');
INSERT INTO Contaminante (IDX,Tipo)
VALUES(4,'Disminuirá la capacidad de secuestro de carbono atmosférico de los ecosistemas y se producirán migraciones altitudinales de especies así como extinciones locales');
INSERT INTO Contaminante (IDX,Tipo)
VALUES(5,'Contamina el agua y acaba con las especies');
INSERT INTO Contaminante (IDX,Tipo)
VALUES(6,'Pérdida de biodiversidad y desequilibrio de los ecosistemas marinos');
END
GO

Select* FROM Contaminante