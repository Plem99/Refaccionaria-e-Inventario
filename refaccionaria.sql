-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-08-2018 a las 09:15:50
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `refaccionaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(50) NOT NULL,
  `Contrasena` varchar(50) NOT NULL,
  `Correo_A` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `Usuario`, `Contrasena`, `Correo_A`) VALUES
(1, 'plem', '12345', '1730314@upv.edu.mx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre_C` varchar(50) NOT NULL,
  `Apellido_Paterno` varchar(50) NOT NULL,
  `Apellido_Materno` varchar(50) NOT NULL,
  `Correo_Electronico_C` varchar(50) NOT NULL,
  `Telefono_C` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `Nombre_C`, `Apellido_Paterno`, `Apellido_Materno`, `Correo_Electronico_C`, `Telefono_C`) VALUES
(2, 'Pedro Luis', 'Marinez11111', 'Espinoza', 'AnonimoCliente@hotmail.com', 834118315),
(3, 'Pedro Luis2', 'Marinez', 'Espinoza', 'AnonimoCliente@hotmail.com2', 834118315);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Marca_P` varchar(50) NOT NULL,
  `Codigo_P` varchar(50) NOT NULL,
  `Nombre_P` varchar(50) NOT NULL,
  `Cantidad_P` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `Marca_P`, `Codigo_P`, `Nombre_P`, `Cantidad_P`) VALUES
(2, 'QUAKER', 'P-0001', 'Aceite Autos', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proximosproductos`
--

DROP TABLE IF EXISTS `proximosproductos`;
CREATE TABLE IF NOT EXISTS `proximosproductos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Marca_P_P` varchar(50) NOT NULL,
  `Codigo_P_P` varchar(50) NOT NULL,
  `Nombre_P_P` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proximosproductos`
--

INSERT INTO `proximosproductos` (`id`, `Marca_P_P`, `Codigo_P_P`, `Nombre_P_P`) VALUES
(1, 'BARDAHL', 'P-0007', 'Aceite'),
(3, 'LTH', 'P-00072', 'Aceite'),
(4, 'LTH', 'P-0007233', 'Aceite3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
