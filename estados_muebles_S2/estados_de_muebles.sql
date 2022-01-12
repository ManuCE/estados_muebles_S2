-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2021 a las 01:36:25
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estados_de_muebles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_muebles`
--

CREATE TABLE `control_muebles` (
  `id_control` int(5) NOT NULL,
  `id_mueble` int(5) NOT NULL,
  `id_estado` int(5) NOT NULL,
  `id_usuario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `control_muebles`
--

INSERT INTO `control_muebles` (`id_control`, `id_mueble`, `id_estado`, `id_usuario`) VALUES
(1, 6, 1, 1),
(2, 2, 5, 3),
(4, 7, 5, 3),
(5, 8, 1, 4),
(19, 6, 5, 1),
(21, 2, 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(5) NOT NULL,
  `estado` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`) VALUES
(1, 'Uso'),
(2, 'Desuso'),
(3, 'En reparacion'),
(4, 'Roto'),
(5, 'Para venta'),
(6, 'Nuevo'),
(8, 'Usado como Nuevo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muebles`
--

CREATE TABLE `muebles` (
  `id_mueble` int(5) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `sector` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `muebles`
--

INSERT INTO `muebles` (`id_mueble`, `nombre`, `sector`) VALUES
(2, 'Mesa', 'ABCD'),
(3, 'Tablon', 'AB'),
(6, 'Escrito', 'BBB'),
(7, 'Tabla', 'AAA'),
(8, 'Sello', 'SSS'),
(15, 'mueble33', 'sector4'),
(27, 'Sillon', 'AA'),
(31, 'colchon', 'aa'),
(36, 'cajes', 'hola'),
(41, 'relojes', 'cinco'),
(43, 'Silla', 'ocho'),
(44, 'Cama', '43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(5) NOT NULL,
  `username` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `username`, `password`) VALUES
(1, 'Mario12', 'secreto'),
(3, 'manuel', '123456'),
(4, 'IVGJ', '123456'),
(6, 'Gasle7', 'abcde'),
(8, 'Teresa93', 'ab123');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista4`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista4` (
`id` int(5)
,`idmueble` int(5)
,`muebles` varchar(30)
,`idestado` int(5)
,`estado` varchar(20)
,`idusuario` int(5)
,`usuario` varchar(30)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista4`
--
DROP TABLE IF EXISTS `vista4`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista4`  AS  select `contr`.`id_control` AS `id`,`mue`.`id_mueble` AS `idmueble`,concat(`mue`.`nombre`) AS `muebles`,`est`.`id_estado` AS `idestado`,concat(`est`.`estado`) AS `estado`,`usua`.`id_usuario` AS `idusuario`,concat(`usua`.`username`) AS `usuario` from (((`control_muebles` `contr` join `muebles` `mue` on((`mue`.`id_mueble` = `contr`.`id_mueble`))) join `estado` `est` on((`est`.`id_estado` = `contr`.`id_estado`))) join `usuario` `usua` on((`usua`.`id_usuario` = `contr`.`id_usuario`))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `control_muebles`
--
ALTER TABLE `control_muebles`
  ADD PRIMARY KEY (`id_control`),
  ADD KEY `id_mueble` (`id_mueble`),
  ADD KEY `id_estado` (`id_estado`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `muebles`
--
ALTER TABLE `muebles`
  ADD PRIMARY KEY (`id_mueble`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `control_muebles`
--
ALTER TABLE `control_muebles`
  MODIFY `id_control` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `muebles`
--
ALTER TABLE `muebles`
  MODIFY `id_mueble` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `control_muebles`
--
ALTER TABLE `control_muebles`
  ADD CONSTRAINT `control_muebles_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`),
  ADD CONSTRAINT `control_muebles_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `control_muebles_ibfk_3` FOREIGN KEY (`id_mueble`) REFERENCES `muebles` (`id_mueble`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
