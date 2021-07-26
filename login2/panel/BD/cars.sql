-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 02:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `carros`
--

CREATE TABLE `carros` (
  `id` int(10) NOT NULL,
  `namecar` varchar(250) DEFAULT NULL,
  `marca` varchar(10) DEFAULT NULL,
  `year` varchar(15) DEFAULT NULL,
  `precio` varchar(50) DEFAULT NULL,
  `placa` varchar(10) DEFAULT NULL,
  `puertas` varchar(10) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `combustible` varchar(50) DEFAULT NULL,
  `km` varchar(20) DEFAULT NULL,
  `transmition` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carros`
--

INSERT INTO `carros` (`id`, `namecar`, `marca`, `year`, `precio`, `placa`, `puertas`, `color`, `combustible`, `km`, `transmition`, `description`) VALUES
(1, 'Arauca', 'Marca', '2014', '1.200', 'XYZ', '3', 'gris', 'Gasolina', '12', 'Automática', 'Esta herramienta te permite configurar en el widget diferentes agentes que pueden contactarse con diferentes números de atención al cliente de WhatsApp: esta función te permite clasificar los chats entrantes a los diferentes agentes de atención al cliente, y puede ser muy útil para aquellas compañías que reciben volúmenes significativos de chats entrantes.'),
(3, 'Mazda', 'Mazdaz', '20210', '582.222', 'GFGD', '2', 'azul', 'Gasolina', '20', 'Automática', 'lindo mazda'),
(4, 'Mazda C', 'Mazda', '2015', '45.000', 'Gy78', '4', 'yellow', 'Automatica', '10000', 'Mecanica', 'hola lindo carro');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) NOT NULL,
  `fullName` varchar(250) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `rol` int(10) DEFAULT NULL,
  `fechaRegistro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `fullName`, `sexo`, `email`, `password`, `phone`, `rol`, `fechaRegistro`) VALUES
(1, 'Urian Viera J', 'Masculino', 'urian@gmail.com', '123', '12345678', 1, '28-04-2021'),
(12, 'aa', NULL, 'a@gmail.com', '12', NULL, 1, '10-05-2021');

-- --------------------------------------------------------

--
-- Table structure for table `fotocars`
--

CREATE TABLE `fotocars` (
  `idFot` int(10) NOT NULL,
  `carro_id` int(10) DEFAULT NULL,
  `foto1` varchar(100) DEFAULT NULL,
  `foto2` varchar(100) DEFAULT NULL,
  `foto3` varchar(100) DEFAULT NULL,
  `foto4` varchar(100) DEFAULT NULL,
  `foto5` varchar(100) DEFAULT NULL,
  `foto6` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fotocars`
--

INSERT INTO `fotocars` (`idFot`, `carro_id`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `foto6`) VALUES
(1, 1, 'fotosCars/Placa_xyz/1.jpeg', 'fotosCars/Placa_xyz/3.jpeg', 'fotosCars/Placa_xyz/d-cover.jpg', 'fotosCars/Placa_xyz/', 'fotosCars/Placa_XYZ/pexels-mike-99435.jpg', 'fotosCars/Placa_xyz/'),
(3, 3, 'fotosCars/Placa_GFGD/9.jpeg', 'fotosCars/Placa_GFGD/11.jpg', 'fotosCars/Placa_Gfgd/10.jpeg', 'fotosCars/Placa_Gfgd/11.jpg', 'fotosCars/Placa_Gfgd/15.jpg', 'fotosCars/Placa_Gfgd/9.jpeg'),
(5, 4, 'fotosCars/Placa_Gy78/10.jpeg', 'fotosCars/Placa_Gy78/9.jpeg', 'fotosCars/Placa_Gy78/6.jpeg', 'fotosCars/Placa_Gy78/1.png', 'fotosCars/Placa_Gy78/', 'fotosCars/Placa_Gy78/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fotocars`
--
ALTER TABLE `fotocars`
  ADD PRIMARY KEY (`idFot`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carros`
--
ALTER TABLE `carros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fotocars`
--
ALTER TABLE `fotocars`
  MODIFY `idFot` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
