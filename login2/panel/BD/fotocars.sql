-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2021 a las 20:17:05
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
-- Base de datos: `compratucarro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotocars`
--

CREATE TABLE `fotocars` (
  `idFot` int(10) NOT NULL,
  `carro_id` int(10) DEFAULT NULL,
  `foto1` varchar(100) DEFAULT NULL,
  `foto2` varchar(100) DEFAULT NULL,
  `foto3` varchar(100) DEFAULT NULL,
  `foto4` varchar(100) DEFAULT NULL,
  `foto5` varchar(100) DEFAULT NULL,
  `foto6` varchar(100) DEFAULT NULL,
  `foto7` varchar(150) DEFAULT NULL,
  `foto8` varchar(150) DEFAULT NULL,
  `foto9` varchar(150) DEFAULT NULL,
  `foto10` varchar(150) DEFAULT NULL,
  `cant` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fotocars`
--

INSERT INTO `fotocars` (`idFot`, `carro_id`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `foto6`, `foto7`, `foto8`, `foto9`, `foto10`, `cant`) VALUES
(1, 1, 'fotosCars/Placa_xyz/1.jpeg', 'fotosCars/Placa_xyz/3.jpeg', 'fotosCars/Placa_xyz/d-cover.jpg', 'fotosCars/Placa_xyz/', 'fotosCars/Placa_XYZ/1.jpg', NULL, NULL, NULL, NULL, NULL, 5),
(3, 3, 'fotosCars/Placa_GFGD/9.jpeg', 'fotosCars/Placa_GFGD/11.jpg', 'fotosCars/Placa_Gfgd/10.jpeg', 'fotosCars/Placa_Gfgd/11.jpg', 'fotosCars/Placa_Gfgd/15.jpg', 'fotosCars/Placa_Gfgd/9.jpeg', NULL, NULL, NULL, NULL, 6),
(5, 4, 'fotosCars/Placa_Gy78/10.jpeg', 'fotosCars/Placa_Gy78/9.jpeg', 'fotosCars/Placa_Gy78/6.jpeg', 'fotosCars/Placa_Gy78/1.png', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(6, 5, 'fotosCars/Placa_FDT5/m3.jpg', 'fotosCars/Placa_FDT5/m2.jpg', 'fotosCars/Placa_FDT5/m1.jpg', 'fotosCars/Placa_FDT5/', 'fotosCars/Placa_FDT5/', 'fotosCars/Placa_FDT5/', NULL, NULL, NULL, NULL, NULL),
(23, 22, 'fotosCars/Placa_1/1.jpg', 'fotosCars/Placa_1/23.png', 'fotosCars/Placa_1/3.jpg', 'fotosCars/Placa_1/', 'fotosCars/Placa_1/', 'fotosCars/Placa_1/', NULL, NULL, NULL, NULL, 1),
(24, 23, 'fotosCars/Placa_XS34/vcr2.png', 'fotosCars/Placa_XS34/3.jpg', 'fotosCars/Placa_XS34/3.png', 'fotosCars/Placa_XS34/444.jpg', 'fotosCars/Placa_XS34/descarga.png', 'fotosCars/Placa_XS34/2020-02-19.png', 'fotosCars/Placa_XS34/', 'fotosCars/Placa_XS34/', 'fotosCars/Placa_XS34/', 'fotosCars/Placa_XS34/', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fotocars`
--
ALTER TABLE `fotocars`
  ADD PRIMARY KEY (`idFot`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fotocars`
--
ALTER TABLE `fotocars`
  MODIFY `idFot` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
