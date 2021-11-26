-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2021 a las 23:21:32
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `logins`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `myusers`
--

CREATE TABLE `myusers` (
  `IdUser` int(10) NOT NULL,
  `emailUser` varchar(50) DEFAULT NULL,
  `passwordUser` varchar(50) DEFAULT NULL,
  `nameUser` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `myusers`
--

INSERT INTO `myusers` (`IdUser`, `emailUser`, `passwordUser`, `nameUser`) VALUES
(7, 'any@gmail.com', '$2y$10$bSkLgMSHSHoCvC.gvHuU0upfWySfB0Xldi8z7PpVbZz', 'any');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `myusers`
--
ALTER TABLE `myusers`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `myusers`
--
ALTER TABLE `myusers`
  MODIFY `IdUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
