-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-05-2019 a las 15:44:53
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `telecomm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

DROP TABLE IF EXISTS `articulos`;
CREATE TABLE IF NOT EXISTS `articulos` (
  `Id_articulo` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) NOT NULL,
  `Existencia` decimal(10,0) DEFAULT NULL,
  `Caracteristicas` longtext NOT NULL,
  `Precio` decimal(10,0) NOT NULL,
  `Costo` decimal(10,0) NOT NULL,
  `Reorden` decimal(10,0) NOT NULL,
  `Unidad` char(5) NOT NULL,
  PRIMARY KEY (`Id_articulo`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`Id_articulo`, `Nombre`, `Existencia`, `Caracteristicas`, `Precio`, `Costo`, `Reorden`, `Unidad`) VALUES
(25, 'switch', '10', 'SWITCH 24 PUERTOS', '4500', '4000', '2', '1'),
(66, 'jn', '6', 'nad', '6', '5', '3', '6'),
(2, 'herramienta', '4', 'nadanada', '50', '60', '1', '2'),
(5, 'as', '55', 'asd', '99', '888', '66', '20'),
(3, 'michi', '7', 'nada', '500', '400', '1', '4'),
(4, 'habla', '4', '5', '55', '444', '55', '44'),
(54, 'Alexis', '5', 'varias', '500', '400', '5', '4'),
(23, 'yeni', '10', 'aregagtst', '23000', '22000', '2', 'kg'),
(9, 'Ale', '200', 'nee', '500', '3', '8', '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `Id_clientes` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_empresa` text NOT NULL,
  `telefono` decimal(10,0) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `nombre_contacto` text NOT NULL,
  `Correo_Electronico` varchar(45) NOT NULL,
  PRIMARY KEY (`Id_clientes`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id_clientes`, `nombre_empresa`, `telefono`, `direccion`, `nombre_contacto`, `Correo_Electronico`) VALUES
(2, 'tristone', '555', 'conocido', 'Aram', 'Aram@.com'),
(40, 'alpura', '55564', 'conocido', 'Daniel', 'daniel.alpura@alpura.com'),
(5, 'uriel', '65', 'sepa', 'nombre', '54'),
(123, 'ccvbn', '234567890', 'cvcvbbnmmnty656', 'ded', 'dfghjn');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones`
--

DROP TABLE IF EXISTS `cotizaciones`;
CREATE TABLE IF NOT EXISTS `cotizaciones` (
  `Id_orden` int(10) NOT NULL AUTO_INCREMENT,
  `Id_servicio` varchar(10) NOT NULL,
  `Id_clientes` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_orden`),
  KEY `fkIdx_54` (`Id_servicio`),
  KEY `fkIdx_61` (`Id_clientes`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cotizaciones`
--

INSERT INTO `cotizaciones` (`Id_orden`, `Id_servicio`, `Id_clientes`) VALUES
(2, '2', '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `Id_servicio` int(10) NOT NULL AUTO_INCREMENT,
  `tipo_servicio` text NOT NULL,
  `costo` decimal(10,0) NOT NULL,
  `Id_articulo` varchar(10) NOT NULL,
  `Descripcion` text NOT NULL,
  `precio` int(10) NOT NULL,
  PRIMARY KEY (`Id_servicio`),
  KEY `fkIdx_64` (`Id_articulo`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`Id_servicio`, `tipo_servicio`, `costo`, `Id_articulo`, `Descripcion`, `precio`) VALUES
(20, 'nada', '500', '2', 'nada nada', 600);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_articulos`
--

DROP TABLE IF EXISTS `servicio_articulos`;
CREATE TABLE IF NOT EXISTS `servicio_articulos` (
  `Id_servicio_1` int(10) NOT NULL AUTO_INCREMENT,
  `Id_ orden` varchar(10) NOT NULL,
  `Id_ Orden_1` varchar(10) NOT NULL,
  `Id_Articulo_1` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_servicio_1`),
  KEY `fkIdx_80` (`Id_ orden`),
  KEY `fkIdx_86` (`Id_ Orden_1`),
  KEY `fkIdx_93` (`Id_Articulo_1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` varchar(20) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `password` varchar(15) NOT NULL,
  `rol` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `password`, `rol`) VALUES
('admin', 'Ivan', '123456', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
