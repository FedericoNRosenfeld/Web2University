-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2016 at 07:14 PM
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
  `imagen` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Jugadores`
--

CREATE TABLE `Jugadores` (
  `id` int(11) NOT NULL,
  `equipo` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `posicion` tinyint(4) NOT NULL,
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Equipos`
--
ALTER TABLE `Equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Jugadores`
--
ALTER TABLE `Jugadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipo` (`equipo`);

--
-- Indexes for table `Partidos`
--
ALTER TABLE `Partidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipo1` (`equipo1`),
  ADD KEY `equipo2` (`equipo2`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Jugadores`
--
ALTER TABLE `Jugadores`
  ADD CONSTRAINT `equipo` FOREIGN KEY (`equipo`) REFERENCES `Equipos` (`id`);

--
-- Constraints for table `Partidos`
--
ALTER TABLE `Partidos`
  ADD CONSTRAINT `equipo1` FOREIGN KEY (`equipo1`) REFERENCES `Equipos` (`id`),
  ADD CONSTRAINT `equipo2` FOREIGN KEY (`equipo2`) REFERENCES `Equipos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
