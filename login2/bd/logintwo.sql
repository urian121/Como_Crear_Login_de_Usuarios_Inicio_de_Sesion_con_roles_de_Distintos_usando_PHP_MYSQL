-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2021 a las 23:41:39
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_logins`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logintwo`
--

CREATE TABLE `logintwo` (
  `id` int(10) NOT NULL,
  `fullName` varchar(250) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `rol` int(10) DEFAULT NULL,
  `fechaRegistro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `logintwo`
--

INSERT INTO `logintwo` (`id`, `fullName`, `email`, `password`, `rol`, `fechaRegistro`) VALUES
(1, 'Urian Viera J', 'iamdeveloper86@gmail.com', '123', 2, '28-04-2021'),
(18, 'Web Developer', 'programadorphp2017@gmail.com', '12345', 1, '16-07-2021');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `logintwo`
--
ALTER TABLE `logintwo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `logintwo`
--
ALTER TABLE `logintwo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
