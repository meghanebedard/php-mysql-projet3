CREATE DATABASE IF NOT EXISTS Colnet;
USE Colnet;

CREATE TABLE IF NOT EXISTS utilisateurs (
    id int AUTO_INCREMENT PRIMARY KEY,
    nomComplet varchar(30) NOT NULL,
    username varchar(30) NOT NULL,
    codePostal varchar(7) NOT NULL,
    email varchar(50) NOT NULL,
    motDePasse varchar(30) NOT NULL
);

CREATE TABLE IF NOT EXISTS groupe (
    code varchar(7) NOT NULL PRIMARY KEY,
    nom varchar(30) NOT NULL,
    type varchar(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS etudiants (
    codePermanent varchar(10) NOT NULL PRIMARY KEY,
    nomComplet varchar(30) NOT NULL,
    adresse varchar(50) NOT NULL,
    telephone varchar(12) NOT NULL,
    moyenne double NOT NULL,
    codeGroupe varchar(7),
    FOREIGN KEY (codeGroupe) REFERENCES groupe(code)
);