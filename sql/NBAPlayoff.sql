-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-11-2016 a las 19:56:05
-- Versión del servidor: 5.7.16-0ubuntu0.16.04.1
-- Versión de PHP: 5.6.24-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `NBAPlayoff`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Comentarios`
--

CREATE TABLE `Comentarios` (
  `id` int(11) NOT NULL,
  `id_user_coment` int(11) NOT NULL,
  `comentario` varchar(500) NOT NULL,
  `item_valorado` int(11) NOT NULL,
  `valoracion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Equipos`
--

CREATE TABLE `Equipos` (
  `id` int(11) NOT NULL,
  `rk_nombre_equipo` varchar(45) DEFAULT NULL,
  `abreviacion` varchar(7) NOT NULL,
  `imagen` int(6) NOT NULL,
  `Categoria` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Equipos`
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
-- Estructura de tabla para la tabla `Imagenes`
--

CREATE TABLE `Imagenes` (
  `rk_id_imagen` int(6) NOT NULL,
  `url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Imagenes`
--

INSERT INTO `Imagenes` (`rk_id_imagen`, `url`) VALUES
(0, 'images/sin-imagen.png'),
(1, 'images/warriors.png'),
(2, 'images/rockets.png'),
(3, 'images/clippers.png'),
(4, 'images/blazers.png'),
(5, 'images/thunder.png'),
(6, 'images/mavericks.png'),
(7, 'images/spurs.png'),
(8, 'images/grizzlies.png'),
(9, 'images/cavaliers.png'),
(10, 'images/pistons.png'),
(11, 'images/hawks.png'),
(12, 'images/celtics.png'),
(13, 'images/heat.png'),
(14, 'images/hornets.png'),
(15, 'images/raptors.png'),
(16, 'images/pacers.png'),
(17, 'images/luchov.jpg'),
(21, 'images/580810ed5b613_Foto0067.jpg'),
(22, 'images/58081127db63e_Foto0067.jpg'),
(23, 'images/5808113f1ac46_Foto0067.jpg'),
(24, 'images/5808114dc1761_Foto0067.jpg'),
(25, 'images/58081260816c0_13873223_1235372273163707_2951754966666823568_n.jpg'),
(26, 'images/580812cf22186_2016-07-10 17.18.08.jpg'),
(27, 'images/580812ffdbcff_2016-09-08 14.40.57.jpg'),
(28, 'images/58082a525f10c_2016-07-10 17.18.08.jpg'),
(29, 'images/58093e350e5e8_2016-07-10 17.18.08.jpg'),
(30, 'images/58093ea26f16b_2016-09-08 14.40.57.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Jugadores`
--

CREATE TABLE `Jugadores` (
  `id_jugador` int(11) NOT NULL,
  `fk_id_equipo` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `posicion` int(4) NOT NULL,
  `numero` tinyint(4) NOT NULL,
  `fk_imagen` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Jugadores`
--

INSERT INTO `Jugadores` (`id_jugador`, `fk_id_equipo`, `nombre`, `posicion`, `numero`, `fk_imagen`) VALUES
(1, 2, 'Ian Clarki', 1, 1, 0),
(2, 1, 'JaVale MgGee', 2, 1, 0),
(3, 9, 'Markel Broun', 1, 10, 0),
(4, 9, 'Chris Andersen', 2, 0, 0),
(5, 2, '34', 2, 2, 0),
(6, 9, 'LuchoV', 1, 3, 17),
(7, 10, 'Muddy', 2, 15, 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Partidos`
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
-- Estructura de tabla para la tabla `Posiciones`
--

CREATE TABLE `Posiciones` (
  `rk_id_posicion` int(4) NOT NULL,
  `nombre_posicion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Posiciones`
--

INSERT INTO `Posiciones` (`rk_id_posicion`, `nombre_posicion`) VALUES
(1, 'Defensor'),
(2, 'Centrox');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `id_user` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `tipo` smallint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Comentarios`
--
ALTER TABLE `Comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_coment` (`id_user_coment`),
  ADD KEY `item_valorado` (`item_valorado`);

--
-- Indices de la tabla `Equipos`
--
ALTER TABLE `Equipos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imagen` (`imagen`);

--
-- Indices de la tabla `Imagenes`
--
ALTER TABLE `Imagenes`
  ADD PRIMARY KEY (`rk_id_imagen`);

--
-- Indices de la tabla `Jugadores`
--
ALTER TABLE `Jugadores`
  ADD PRIMARY KEY (`id_jugador`),
  ADD KEY `equipo` (`fk_id_equipo`),
  ADD KEY `posicion` (`posicion`),
  ADD KEY `fk_imagen` (`fk_imagen`);

--
-- Indices de la tabla `Partidos`
--
ALTER TABLE `Partidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipo1` (`equipo1`),
  ADD KEY `equipo2` (`equipo2`);

--
-- Indices de la tabla `Posiciones`
--
ALTER TABLE `Posiciones`
  ADD PRIMARY KEY (`rk_id_posicion`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Comentarios`
--
ALTER TABLE `Comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Equipos`
--
ALTER TABLE `Equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `Imagenes`
--
ALTER TABLE `Imagenes`
  MODIFY `rk_id_imagen` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `Jugadores`
--
ALTER TABLE `Jugadores`
  MODIFY `id_jugador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `Partidos`
--
ALTER TABLE `Partidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Posiciones`
--
ALTER TABLE `Posiciones`
  MODIFY `rk_id_posicion` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Comentarios`
--
ALTER TABLE `Comentarios`
  ADD CONSTRAINT `Comentarios_ibfk_1` FOREIGN KEY (`id_user_coment`) REFERENCES `Usuarios` (`id_user`),
  ADD CONSTRAINT `Comentarios_ibfk_2` FOREIGN KEY (`item_valorado`) REFERENCES `Jugadores` (`id_jugador`);

--
-- Filtros para la tabla `Equipos`
--
ALTER TABLE `Equipos`
  ADD CONSTRAINT `imagen` FOREIGN KEY (`imagen`) REFERENCES `Imagenes` (`rk_id_imagen`);

--
-- Filtros para la tabla `Jugadores`
--
ALTER TABLE `Jugadores`
  ADD CONSTRAINT `Jugadores_ibfk_1` FOREIGN KEY (`fk_imagen`) REFERENCES `Imagenes` (`rk_id_imagen`) ON DELETE NO ACTION,
  ADD CONSTRAINT `equipo` FOREIGN KEY (`fk_id_equipo`) REFERENCES `Equipos` (`id`),
  ADD CONSTRAINT `posicion` FOREIGN KEY (`posicion`) REFERENCES `Posiciones` (`rk_id_posicion`);

--
-- Filtros para la tabla `Partidos`
--
ALTER TABLE `Partidos`
  ADD CONSTRAINT `equipo1` FOREIGN KEY (`equipo1`) REFERENCES `Equipos` (`id`),
  ADD CONSTRAINT `equipo2` FOREIGN KEY (`equipo2`) REFERENCES `Equipos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
