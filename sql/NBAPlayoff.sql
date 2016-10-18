-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 17, 2016 at 03:58 AM
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
  `rk_nombre_equipo` varchar(45) DEFAULT NULL,
  `abreviacion` varchar(7) NOT NULL,
  `imagen` int(6) NOT NULL,
  `Categoria` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Equipos`
--

INSERT INTO `Equipos` (`id`, `rk_nombre_equipo`, `abreviacion`, `imagen`, `Categoria`) VALUES
(1, 'Golden State Warriors', 'GSW', 1, 'oeste'),
(2, 'Houston Rockets', 'HOU', 2, 'oeste'),
(3, 'Los Angeles Clippers', 'LAC', 3, 'oeste'),
(4, 'Trail Blazzers', 'POR', 4, 'oeste'),
(5, 'Thunders', 'OKC', 5, 'oeste'),
(6, 'Mavericks', 'DAL', 6, 'oeste'),
(7, 'Spurs', 'SAS', 7, 'oeste'),
(8, 'Grizzlies', 'MEM', 8, 'oeste'),
(9, 'Cavaliers', 'CLE', 9, 'este'),
(10, 'Pistons', 'DET', 10, 'este'),
(11, 'Hawks', 'ATL', 11, 'este'),
(12, 'Celtics', 'BOS', 12, 'este'),
(13, 'Heat', 'MIA', 13, 'este'),
(14, 'Hornets', 'CHA', 14, 'este'),
(15, 'Raptors', 'TOR', 15, 'este'),
(16, 'Pacers', 'IND', 16, 'este');

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
(0, 'nada'),
(1, 'warriors.png'),
(2, 'rockets.png'),
(3, 'clippers.png'),
(4, 'blazers.png'),
(5, 'thunder.png'),
(6, 'mavericks.png'),
(7, 'spurs.png'),
(8, 'grizzlies.png'),
(9, 'cavaliers.png'),
(10, 'pistons.png'),
(11, 'hawks.png'),
(12, 'celtics.png'),
(13, 'heat.png'),
(14, 'hornets.png'),
(15, 'raptors.png'),
(16, 'pacers.png');

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
  `imagen` int(6) NOT NULL,

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Jugadores`
--

INSERT INTO `Jugadores` (`id`, `fk_id_equipo`, `nombre`, `posicion`, `numero`) VALUES
(1, 1, 'Ian Clark', 1, 21),
(2, 1, 'JaVale MgGee', 2, 1),
(3, 9, 'Markel Broun', 1, 10),
(4, 9, 'Chris Andersen', 2, 0);

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
  `rk_id_posicion` int(4) NOT NULL,
  `nombre_posicion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Posiciones`
--

INSERT INTO `Posiciones` (`rk_id_posicion`, `nombre_posicion`) VALUES
(1, 'Defensor'),
(2, 'Centro');

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
  ADD PRIMARY KEY (`rk_id_posicion`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Jugadores`
--
ALTER TABLE `Jugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Partidos`
--
ALTER TABLE `Partidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  ADD CONSTRAINT `posicion` FOREIGN KEY (`posicion`) REFERENCES `Posiciones` (`rk_id_posicion`);

--
-- Constraints for table `Partidos`
--
ALTER TABLE `Partidos`
  ADD CONSTRAINT `equipo1` FOREIGN KEY (`equipo1`) REFERENCES `Equipos` (`id`),
  ADD CONSTRAINT `equipo2` FOREIGN KEY (`equipo2`) REFERENCES `Equipos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
