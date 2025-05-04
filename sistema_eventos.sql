
-- Script de criação do banco de dados para o sistema de gerenciamento de usuários e eventos

CREATE DATABASE IF NOT EXISTS sistema_eventos;
USE sistema_eventos;

-- Tabela de usuários
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    nome VARCHAR(100) NOT NULL
);

-- Tabela de eventos
CREATE TABLE IF NOT EXISTS eventos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    local VARCHAR(100) NOT NULL,
    data DATE NOT NULL,
    hora TIME NOT NULL
);
