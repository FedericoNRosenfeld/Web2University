-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 16, 2016 at 11:30 PM
-- Server version: 5.7.15-0ubuntu0.16.04.1
-- PHP Version: 5.6.24-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NBAPlayoff`
--

-- --------------------------------------------------------

--
-- Table structure for table `Equipos`
--

CREATE TABLE `Equipos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `abreviacion` varchar(7) NOT NULL,
  `imagen` int(6) NOT NULL,
  `Categoria` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Equipos`
--

INSERT INTO `Equipos` (`id`, `nombre`, `abreviacion`, `imagen`, `Categoria`) VALUES
(1, 'glasgow', 'GSW', 1, 'este'),
(2, 'houston', 'HOU', 2, 'oeste'),
(3, 'LAC', '', 3, 'este'),
(4, 'POR', '', 4, 'oeste'),
(5, 'OKC', '', 5, 'este'),
(6, 'DAL', '', 6, 'oeste'),
(7, 'SAS', '', 7, 'este'),
(8, 'MEM', '', 8, 'oeste'),
(9, 'CLE', '', 9, 'este'),
(10, 'DET', '', 10, 'oeste'),
(11, 'ATL', '', 11, 'este'),
(12, 'BOS', '', 12, 'oeste'),
(13, 'MIA', '', 13, 'este'),
(14, 'CHA', '', 14, 'oeste'),
(15, 'TOR', '', 15, 'este'),
(16, 'IND', '', 16, 'oeste');

-- --------------------------------------------------------

--
-- Table structure for table `Imagenes`
--

CREATE TABLE `Imagenes` (
  `id` int(6) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Imagenes`
--

INSERT INTO `Imagenes` (`id`, `url`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, ''),
(13, ''),
(14, ''),
(15, ''),
(16, '');

-- --------------------------------------------------------

--
-- Table structure for table `Jugadores`
--

CREATE TABLE `Jugadores` (
  `id` int(11) NOT NULL,
  `fk_id_equipo` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `posicion` int(4) NOT NULL,
  `numero` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Partidos`
--

CREATE TABLE `Partidos` (
  `id` int(11) NOT NULL,
  `equipo1` int(11) DEFAULT NULL,
  `equipo2` int(11) DEFAULT NULL,
  `resEquipo1` tinyint(4) NOT NULL,
  `resEquipo2` tinyint(4) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Posiciones`
--

CREATE TABLE `Posiciones` (
  `id` int(4) NOT NULL,
  `Posicion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Equipos`
--
ALTER TABLE `Equipos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imagen` (`imagen`);

--
-- Indexes for table `Imagenes`
--
ALTER TABLE `Imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Jugadores`
--
ALTER TABLE `Jugadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipo` (`fk_id_equipo`),
  ADD KEY `posicion` (`posicion`);

--
-- Indexes for table `Partidos`
--
ALTER TABLE `Partidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipo1` (`equipo1`),
  ADD KEY `equipo2` (`equipo2`);

--
-- Indexes for table `Posiciones`
--
ALTER TABLE `Posiciones`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Equipos`
--
ALTER TABLE `Equipos`
  ADD CONSTRAINT `imagen` FOREIGN KEY (`imagen`) REFERENCES `Imagenes` (`id`);

--
-- Constraints for table `Jugadores`
--
ALTER TABLE `Jugadores`
  ADD CONSTRAINT `equipo` FOREIGN KEY (`fk_id_equipo`) REFERENCES `Equipos` (`id`),
  ADD CONSTRAINT `posicion` FOREIGN KEY (`posicion`) REFERENCES `Posiciones` (`id`);

--
-- Constraints for table `Partidos`
--
ALTER TABLE `Partidos`
  ADD CONSTRAINT `equipo1` FOREIGN KEY (`equipo1`) REFERENCES `Equipos` (`id`),
  ADD CONSTRAINT `equipo2` FOREIGN KEY (`equipo2`) REFERENCES `Equipos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
