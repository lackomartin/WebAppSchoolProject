CREATE DATABASE bolnica;
USE bolnica;


CREATE TABLE Doktor(
id INT PRIMARY KEY NOT NULL,
ime VARCHAR(30),
prezime VARCHAR(30));

INSERT INTO Doktor
    (id, ime, prezime) 
VALUES 
    (1, "Goran", "Vuk"),
    (2, "Filip", "Magić"),
    (3, "David", "Goričanec"),
    (4, "Pero", "Perić");

CREATE TABLE Medicinska_sestra(
id INT PRIMARY KEY NOT NULL,
ime VARCHAR(30),
prezime VARCHAR(30));    

INSERT INTO Medicinska_sestra
    (id, ime, prezime) 
VALUES 
    (1, "Ana", "Horvat"),
    (2, "Marija", "Anić"),
    (3, "Ivana", "Ivić"),
    (4, "Martina", "Lacko"),
    (5, "Mirjana", "Lučić");

CREATE TABLE Soba(
broj_sobe INT PRIMARY KEY NOT NULL,
medicinska_sestra INT REFERENCES Medicinska_sestra(id));

INSERT INTO Soba
    (broj_sobe, medicinska_sestra) 
VALUES 
    (1, 3),
    (2, 5),
    (3, 1),
    (4, 2),
    (5, 4);

CREATE TABLE Pacijent(
id INT PRIMARY KEY NOT NULL,
ime VARCHAR(30),
prezime VARCHAR(30),
soba INT NOT NULL REFERENCES Soba(broj_sobe),
doktor INT NOT NULL REFERENCES Doktor(id)) ;

INSERT INTO Pacijent
    (id, ime, prezime, soba, doktor) 
VALUES 
    (1, "Antonio", "Lučić", 5, 1),
    (2, "Matija", "Horvat", 5, 1),
    (3, "Marko", "Kurešević", 4, 2),
    (4, "Filip", "Sušec", 4, 3),
    (5, "Tomislav", "Gudasić", 3, 2),
    (6, "Igor", "Lončarić", 3, 4),
    (7, "Petar", "Jurić", 2, 4),
    (8, "Domagoj", "Kušec", 2, 3),
    (9, "Maja", "Medved", 1, 3),
    (10, "Dina", "Perković", 1, 2);   

CREATE TABLE Odjeli(
sifra INT PRIMARY KEY NOT NULL,
naziv VARCHAR(30));

INSERT INTO Odjeli
    (sifra, naziv) 
VALUES 
    (1, "Mikrobiologija"),
    (2, "Biokemija");

CREATE TABLE Dobavljač( 
sifra INT PRIMARY KEY NOT NULL,
naziv VARCHAR(30),
sjedište VARCHAR(30)); 

INSERT INTO Dobavljač
    (sifra, naziv, sjedište) 
VALUES 
    (1, "PLIVA", "Zagreb"),
    (2, "ALTANA", "Zagreb"),
    (3, "DIVAPHARMA", "Čakovec"),
    (4, "BAYER PHARMA", "Zagreb");

CREATE TABLE Lijek(
sifra INT PRIMARY KEY NOT NULL,
naziv VARCHAR(30),
dobavljač INT NOT NULL REFERENCES Dobavljač(sifra));      
      
INSERT INTO Lijek
    (sifra, naziv, dobavljač) 
VALUES 
    (1, "Klavocin", 1),
    (2, "Lupocet FORTE", 3),
    (3, "IBUPROFEN", 2),
    (4, "Aspirin", 2),
    (5, "Linex Forte", 1),
    (6, "Neofen", 3),
    (7, "Doreta", 1),
    (8, "Nalgesin", 3);  

CREATE TABLE Recepti(
recept INT PRIMARY KEY NOT NULL,
pacijent INT REFERENCES Pacijent(id),
lijek INT REFERENCES Lijek(sifra));

INSERT INTO Recepti
    (recept, pacijent, lijek) 
VALUES 
    (1, 1, 4),
    (2, 2, 1),
    (3, 2, 5),
    (4, 3, 3),
    (5, 4, 8),
    (6, 4, 6),
    (7, 6, 3),
    (8, 7, 7),
    (9, 7, 3),
    (10, 8, 1),
    (11, 9, 4),
    (12, 9, 5),
    (13, 10, 8);  

CREATE TABLE Smijena_doktora(
sifra INT PRIMARY KEY NOT NULL,
smijena VARCHAR(30),
doktor INT REFERENCES Doktor(id));

INSERT INTO Smijena_doktora
    (sifra, smijena, doktor) 
VALUES 
    (1, "Jutro", 1),
    (2, "Podne", 2),
    (3, "Podne", 3),
    (4, "Jutro", 4);

CREATE TABLE Analiza_krvi(
sifra INT PRIMARY KEY NOT NULL,
stanje VARCHAR(9),
pacijent INT REFERENCES Pacijent(id),
odjel INT REFERENCES Odjeli(sifra));

INSERT INTO Analiza_krvi
    (sifra, stanje, pacijent, odjel) 
VALUES 
    (1, "Pozitivno", 1, 2),
    (2, "Negativno", 2, 1),
    (3, "Negativno", 3, 2),
    (4, "Pozitivno", 4, 1),
    (5, "Pozitivno", 5, 1),
    (6, "Negativno", 6, 2),
    (7, "Pozitivno", 7, 2),
    (8, "Pozitivno", 8, 1),
    (9, "Negativno", 9, 1),
    (10, "Pozitivno", 10, 1);