-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 20:37:38
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
  `passwordUser` varchar(250) DEFAULT NULL,
  `nameUser` varchar(100) DEFAULT NULL,
  `ipUser` varchar(30) DEFAULT NULL,
  `createUser` varchar(30) DEFAULT NULL,
  `sesionDesde` varchar(30) DEFAULT NULL,
  `sesionHasta` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `myusers`
--

INSERT INTO `myusers` (`IdUser`, `emailUser`, `passwordUser`, `nameUser`, `ipUser`, `createUser`, `sesionDesde`, `sesionHasta`) VALUES
(22, 'jose@gmail.com', '$2y$10$FvM7IOEwzSQrgcTVq47r6.WcoZD9Dj6uXZ4qa2mLNxHaRVkqj1TjG', 'Jose', '::1', '2021-12-02 11:02:AM', NULL, NULL),
(23, 'julian@gmail.com', '$2y$10$v5t9hV1X4iWmv9ynYy7QfuJgk7VpkIm0KxAti4ldz1rmbeacRVwqu', 'dsd', '::1', '2021-12-02 14:37:PM', NULL, NULL);

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
  MODIFY `IdUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
