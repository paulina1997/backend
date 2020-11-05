-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-05-2019 a las 17:49:21
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
  `Id_articulo` decimal(10,0) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Existencia` decimal(10,0) NOT NULL,
  `Caracteristicas` longtext NOT NULL,
  `Precio` decimal(10,0) NOT NULL,
  `Costo` decimal(10,0) NOT NULL,
  `Reorden` decimal(10,0) NOT NULL,
  `Unidad` text NOT NULL,
  PRIMARY KEY (`Id_articulo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`Id_articulo`, `Nombre`, `Existencia`, `Caracteristicas`, `Precio`, `Costo`, `Reorden`, `Unidad`) VALUES
('25', 'switch', '10', 'SWITCH 24 PUERTOS', '4500', '4000', '2', '1'),
('66', 'jn', '6', 'nad', '6', '5', '3', '6'),
('2', 'herramienta', '4', 'nadanada', '50', '60', '1', '2'),
('5', 'as', '55', 'asd', '99', '888', '66', '20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_de _servicios`
--

DROP TABLE IF EXISTS `catalogo_de _servicios`;
CREATE TABLE IF NOT EXISTS `catalogo_de _servicios` (
  `Id_servicio` decimal(10,0) NOT NULL,
  `tipo_servicio` text NOT NULL,
  `costo` decimal(10,0) NOT NULL,
  `Id_articulo` decimal(10,0) NOT NULL,
  `Descripcion` text NOT NULL,
  `precio` int(10) NOT NULL,
  PRIMARY KEY (`Id_servicio`),
  KEY `fkIdx_64` (`Id_articulo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `catalogo_de _servicios`
--

INSERT INTO `catalogo_de _servicios` (`Id_servicio`, `tipo_servicio`, `costo`, `Id_articulo`, `Descripcion`, `precio`) VALUES
('20', 'nada', '500', '2', 'nada nada', 600);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `Id_clientes` decimal(10,0) NOT NULL,
  `nombre_empresa` text NOT NULL,
  `telefono` decimal(10,0) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `nombre_contacto` text NOT NULL,
  `Correo_Electronico` varchar(45) NOT NULL,
  PRIMARY KEY (`Id_clientes`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden _de _cotizacion`
--

DROP TABLE IF EXISTS `orden _de _cotizacion`;
CREATE TABLE IF NOT EXISTS `orden _de _cotizacion` (
  `Id_ orden` decimal(10,0) NOT NULL,
  `Id_servicio` decimal(10,0) NOT NULL,
  `Id_clientes` decimal(10,0) NOT NULL,
  PRIMARY KEY (`Id_ orden`),
  KEY `fkIdx_54` (`Id_servicio`),
  KEY `fkIdx_61` (`Id_clientes`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_articulos`
--

DROP TABLE IF EXISTS `servicio_articulos`;
CREATE TABLE IF NOT EXISTS `servicio_articulos` (
  `Id_servicio_1` decimal(10,0) NOT NULL,
  `Id_ orden` decimal(10,0) NOT NULL,
  `Id_ Orden_1` decimal(10,0) NOT NULL,
  `Id_Articulo_1` decimal(10,0) NOT NULL,
  PRIMARY KEY (`Id_servicio_1`),
  KEY `fkIdx_80` (`Id_ orden`),
  KEY `fkIdx_86` (`Id_ Orden_1`),
  KEY `fkIdx_93` (`Id_Articulo_1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
