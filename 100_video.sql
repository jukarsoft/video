-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2017 a las 17:20:17
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `video`
--
CREATE DATABASE IF NOT EXISTS `video` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `video`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cli`
--

DROP TABLE IF EXISTS `cli`;
CREATE TABLE IF NOT EXISTS `cli` (
  `CLIID` varchar(5) NOT NULL,
  `APEL` varchar(100) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `CIUD` varchar(50) NOT NULL,
  `PROV` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CLIID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cli`
--

INSERT INTO `cli` (`CLIID`, `APEL`, `NOMBRE`, `CIUD`, `PROV`) VALUES
('01', 'GONZALEZ', 'JOSE LUIS', 'LINARES', 'JAEN'),
('02', 'AGUIRRE', 'ANTONIO', 'ALGECIRAS', 'CADIZ'),
('03', 'FERNANDEZ', 'MARIA', 'TARRASA', 'BARCELONA'),
('04', 'GONZALEZ', 'JOSE ANTONIO', 'ALGETE', 'MADRID'),
('05', 'ABADALEJO', 'JUAN', 'BARCELONA', 'BARCELONA'),
('06', 'ZORRILLA', 'PEDRO LUIS', 'GETAFE', 'MADRID'),
('07', 'MARQUEZ', 'ALBERTO', 'GANDIA', 'VALENCIA'),
('08', 'ELIZAGA', 'JOSE MANUEL', 'RIOFRIO', 'PONTEVEDRA'),
('09', 'GOMEZ', 'RICARDO', 'MADRID', 'MADRID'),
('10', 'JIMENEZ', 'ANDRES', 'PEDRAZA', 'SEVILLA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fac`
--

DROP TABLE IF EXISTS `fac`;
CREATE TABLE IF NOT EXISTS `fac` (
  `F_NUM` int(10) unsigned NOT NULL,
  `CLIID` varchar(5) NOT NULL,
  `TOTAL` decimal(8,2) NOT NULL,
  `ALQ` date NOT NULL,
  `DEV` date DEFAULT NULL,
  PRIMARY KEY (`F_NUM`),
  KEY `fk_cliid` (`CLIID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fac`
--

INSERT INTO `fac` (`F_NUM`, `CLIID`, `TOTAL`, `ALQ`, `DEV`) VALUES
(1, '01', '5.00', '2004-08-17', NULL),
(2, '02', '8.00', '2004-07-28', NULL),
(3, '02', '2.50', '2004-08-08', '2004-08-09'),
(4, '01', '5.00', '2004-08-09', '2004-08-09'),
(5, '03', '3.00', '2004-08-12', '2004-08-18'),
(6, '02', '5.00', '2004-08-14', '2004-08-18'),
(7, '04', '3.00', '2003-12-31', NULL),
(8, '04', '8.00', '2004-08-18', '2004-08-20'),
(9, '05', '2.00', '2004-08-19', NULL),
(10, '02', '5.00', '2004-07-28', '2004-08-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f_p`
--

DROP TABLE IF EXISTS `f_p`;
CREATE TABLE IF NOT EXISTS `f_p` (
  `F_NUM` int(10) unsigned NOT NULL,
  `P_NUM` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`F_NUM`,`P_NUM`),
  KEY `fk_p_num` (`P_NUM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `f_p`
--

INSERT INTO `f_p` (`F_NUM`, `P_NUM`) VALUES
(3, 1),
(4, 1),
(5, 1),
(7, 1),
(10, 1),
(9, 2),
(2, 3),
(4, 3),
(7, 3),
(1, 4),
(8, 4),
(10, 4),
(1, 5),
(4, 5),
(7, 5),
(10, 5),
(4, 6),
(5, 7),
(8, 7),
(9, 9),
(3, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pel`
--

DROP TABLE IF EXISTS `pel`;
CREATE TABLE IF NOT EXISTS `pel` (
  `P_NUM` mediumint(8) unsigned NOT NULL,
  `TITULO` varchar(100) NOT NULL,
  `TIPO` varchar(50) NOT NULL,
  `CLASIF` varchar(3) NOT NULL,
  `ARTISTA` varchar(50) DEFAULT NULL,
  `COPIAS` smallint(5) unsigned NOT NULL,
  `PRECIO` decimal(5,2) NOT NULL,
  PRIMARY KEY (`P_NUM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pel`
--

INSERT INTO `pel` (`P_NUM`, `TITULO`, `TIPO`, `CLASIF`, `ARTISTA`, `COPIAS`, `PRECIO`) VALUES
(1, 'BLADE RUNNER', 'CI-FI', 'M18', 'FORD', 4, '10.00'),
(2, 'VIERNES 13', 'HORROR', 'M18', 'JASON', 2, '15.00'),
(3, 'TOP GUN', 'DRAMA', 'M18', 'CRUISE', 7, '28.00'),
(4, 'SPLASH', 'COMEDIA', 'M13', 'HANKS', 3, '35.00'),
(5, '101 DALMATAS', 'COMEDIA', 'T', NULL, 3, '10.00'),
(6, 'FUEGO EN EL CUERPO', 'DRAMA', 'M18', 'TURNER', 3, '20.00'),
(7, 'RISKY BUSSINES', 'COMEDIA', 'M13', 'CRUISE', 2, '17.50'),
(8, 'COCOON', 'CI-FI', 'T', 'AMECHE', 2, '25.50'),
(9, 'COCODRILO DUNDEE', 'COMEDIA', 'M13', 'HARRIS', 2, '32.50'),
(10, 'TOOTSIE', 'COMEDIA', 'M13', 'HOFFMAN', 1, '30.00');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fac`
--
ALTER TABLE `fac`
  ADD CONSTRAINT `fac_ibfk_1` FOREIGN KEY (`CLIID`) REFERENCES `cli` (`CLIID`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `f_p`
--
ALTER TABLE `f_p`
  ADD CONSTRAINT `f_p_ibfk_2` FOREIGN KEY (`P_NUM`) REFERENCES `pel` (`P_NUM`) ON UPDATE CASCADE,
  ADD CONSTRAINT `f_p_ibfk_1` FOREIGN KEY (`F_NUM`) REFERENCES `fac` (`F_NUM`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
