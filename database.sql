CREATE DATABASE trevoso_das_trevas;
USE trevoso_das_trevas;

CREATE TABLE usuario (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(45),
    email VARCHAR(255),
    senha VARCHAR(255),
    nasc DATE
);