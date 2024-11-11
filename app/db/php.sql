DROP DATABASE IF EXISTS magazijn_db;
CREATE DATABASE IF NOT EXISTS magazijn_db;
USE magazijn_db;

-- Maak de Product tabel aan
CREATE TABLE Product (
    Id INT PRIMARY KEY,
    Naam VARCHAR(255) NOT NULL,
    Barcode VARCHAR(13) NOT NULL
);


-- Voeg de productgegevens in
INSERT INTO Product (Id, Naam, Barcode) VALUES
(1, 'Mintnopjes', '8719587231278'),
(2, 'Schoolkrijt', '8719587326713'),
(3, 'Honingdrop', '8719587327836'),
(4, 'Zure Beren', '8719587321441'),
(5, 'Cola Flesjes', '8719587321237'),
(6, 'Turtles', '8719587322245'),
(7, 'Witte Muizen', '8719587328256'),
(8, 'Reuzen Slangen', '8719587325641'),
(9, 'Zoute Rijen', '8719587322739'),
(10, 'Winegums', '8719587327527'),
(11, 'Drop Munten', '8719587322345'),
(12, 'Kruis Drop', '8719587322265'),
(13, 'Zoute Ruitjes', '8719587323256');

-- Maak de Magazijn tabel aan
CREATE TABLE Magazijn (
    Id INT PRIMARY KEY,
    ProductId INT,
    VerpakkingsEenheid DECIMAL(5,2),
    AantalAanwezig INT,
    FOREIGN KEY (ProductId) REFERENCES Product(Id)
);

-- Voeg de magazijngegevens in
INSERT INTO Magazijn (Id, ProductId, VerpakkingsEenheid, AantalAanwezig) values
(1, 1, 5.00, 453),
(2, 2, 2.50, 400),
(3, 3, 5.00, 1),
(4, 4, 1.00, 800),
(5, 5, 3.00, 234),
(6, 6, 2.00, 345),
(7, 7, 1.00, 795),
(8, 8, 10.00, 233),
(9, 9, 2.50, 123),
(10, 10, 3.00, NULL),
(11, 11, 2.00, 367),
(12, 12, 1.00, 467),
(13, 13, 5.00, 20);