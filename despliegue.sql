  
   
-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-02-2021 a las 10:12:34
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos despliegue
--

-- --------------------------------------------------------

--
-- tabla clientes y datos
-- 
  
CREATE TABLE Clientes (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(30) NOT NULL,
        apellido VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        );



INSERT INTO clientes (id,nombre, apellido, email, reg_date) VALUES
(1, 'John', 'Doe', 'john@example.com', '2021-02-20 17:14:52'),
(2, 'Carl', 'Mitchell', 'carl@example.com', '2021-02-20 17:14:52'),
(3, 'Jane', 'Moe', 'jane@example.com', '2021-02-20 17:14:52');

