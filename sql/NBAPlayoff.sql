-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2016 at 06:38 PM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 5.6.24-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NbAPlays`
--

-- --------------------------------------------------------

--
-- Table structure for table `Comentarios`
--

CREATE TABLE `Comentarios` (
  `id` int(11) NOT NULL,
  `id_user_coment` int(11) NOT NULL,
  `comentario` varchar(500) NOT NULL,
  `item_valorado` int(11) NOT NULL,
  `valoracion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Comentarios`
--

INSERT INTO `Comentarios` (`id`, `id_user_coment`, `comentario`, `item_valorado`, `valoracion`) VALUES
(2, 1, 'El Pipita de la NBA', 1, 1),
(10, 12, 'no juega tan mal', 1, 3),
(11, 12, '"no juega tan mal " dijo el ciego', 1, 3);

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
  `rk_id_imagen` int(6) NOT NULL,
  `url` varchar(250) NOT NULL,
  `fk_id_jugador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Imagenes`
--

INSERT INTO `Imagenes` (`rk_id_imagen`, `url`, `fk_id_jugador`) VALUES
(0, 'images/sin-imagen.jpg', 1),
(1, 'images/warriors.png', 2),
(2, 'images/rockets.png', 3),
(3, 'images/clippers.png', 4),
(4, 'images/blazers.png', 5),
(5, 'images/thunder.png', 6),
(6, 'images/mavericks.png', 7),
(7, 'images/spurs.png', 1),
(8, 'images/grizzlies.png', 1),
(9, 'images/cavaliers.png', 2),
(10, 'images/pistons.png', 3),
(11, 'images/hawks.png', 6),
(12, 'images/celtics.png', 1),
(13, 'images/heat.png', 2),
(14, 'images/hornets.png', 3),
(15, 'images/raptors.png', 4),
(16, 'images/pacers.png', 5),
(17, 'images/luchov.jpg', 6),
(21, 'images/580810ed5b613_Foto0067.jpg', 7),
(22, 'images/58081127db63e_Foto0067.jpg', 2),
(23, 'images/5808113f1ac46_Foto0067.jpg', 3),
(24, 'images/5808114dc1761_Foto0067.jpg', 4),
(25, 'images/58081260816c0_13873223_1235372273163707_2951754966666823568_n.jpg', 4),
(26, 'images/580812cf22186_2016-07-10 17.18.08.jpg', 2),
(27, 'images/580812ffdbcff_2016-09-08 14.40.57.jpg', 6),
(28, 'images/58082a525f10c_2016-07-10 17.18.08.jpg', 0),
(29, 'images/58093e350e5e8_2016-07-10 17.18.08.jpg', 0),
(30, 'images/58093ea26f16b_2016-09-08 14.40.57.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Jugadores`
--

CREATE TABLE `Jugadores` (
  `id_jugador` int(11) NOT NULL,
  `fk_id_equipo` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `posicion` int(4) NOT NULL,
  `numero` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Jugadores`
--

INSERT INTO `Jugadores` (`id_jugador`, `fk_id_equipo`, `nombre`, `posicion`, `numero`) VALUES
(1, 2, 'Ian Clarki3', 1, 21),
(2, 1, 'JaVale MgGee', 2, 1),
(3, 9, 'Markel Broun', 1, 10),
(4, 9, 'Chris Andersen', 2, 0),
(5, 2, '34', 2, 2),
(6, 9, 'LuchoV', 1, 3),
(7, 10, 'Muddy', 2, 15),
(10, 2, 'rr', 1, 3);

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
(2, 'Centrox'),
(3, 'elefante');

-- --------------------------------------------------------

--
-- Table structure for table `Rangos`
--

CREATE TABLE `Rangos` (
  `id_rango` smallint(2) NOT NULL,
  `rango` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Rangos`
--

INSERT INTO `Rangos` (`id_rango`, `rango`) VALUES
(1, 'Usuario comun'),
(2, 'Admin'),
(3, 'Dueño');

-- --------------------------------------------------------

--
-- Table structure for table `Usuarios`
--

CREATE TABLE `Usuarios` (
  `id_user` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `tipo` smallint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Usuarios`
--

INSERT INTO `Usuarios` (`id_user`, `nombre`, `pass`, `tipo`) VALUES
(1, 'admin@web2.org', 'sdlfjñsklfsjkafjkadsnfas', 2),
(12, 'elmuddy@web2.org', '$2y$10$0VdGEdaE2jg0Jafno3BUyeFUyz2Mr5G8MBGCD9lvFgnrG0uMLii6a', 1),
(14, 'admin@web2.org.ar', '$2y$10$enD0WsLUBv6q2YFikN2m8eoSmYN.IrPsk8vZMFCbpCz5ZYS9kdVSS', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Comentarios`
--
ALTER TABLE `Comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_coment` (`id_user_coment`),
  ADD KEY `item_valorado` (`item_valorado`);

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
  ADD PRIMARY KEY (`rk_id_imagen`),
  ADD KEY `fk_id_jugador` (`fk_id_jugador`);

--
-- Indexes for table `Jugadores`
--
ALTER TABLE `Jugadores`
  ADD PRIMARY KEY (`id_jugador`),
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
-- Indexes for table `Rangos`
--
ALTER TABLE `Rangos`
  ADD PRIMARY KEY (`id_rango`),
  ADD KEY `id_rango` (`id_rango`);

--
-- Indexes for table `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `tipo` (`tipo`),
  ADD KEY `tipo_2` (`tipo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Comentarios`
--
ALTER TABLE `Comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `Equipos`
--
ALTER TABLE `Equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `Imagenes`
--
ALTER TABLE `Imagenes`
  MODIFY `rk_id_imagen` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `Jugadores`
--
ALTER TABLE `Jugadores`
  MODIFY `id_jugador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `Partidos`
--
ALTER TABLE `Partidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Posiciones`
--
ALTER TABLE `Posiciones`
  MODIFY `rk_id_posicion` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Comentarios`
--
ALTER TABLE `Comentarios`
  ADD CONSTRAINT `Comentarios_ibfk_1` FOREIGN KEY (`id_user_coment`) REFERENCES `Usuarios` (`id_user`),
  ADD CONSTRAINT `Comentarios_ibfk_2` FOREIGN KEY (`item_valorado`) REFERENCES `Jugadores` (`id_jugador`);

--
-- Constraints for table `Equipos`
--
ALTER TABLE `Equipos`
  ADD CONSTRAINT `imagen` FOREIGN KEY (`imagen`) REFERENCES `Imagenes` (`rk_id_imagen`);

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

--
-- Constraints for table `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD CONSTRAINT `Usuarios_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `Rangos` (`id_rango`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
