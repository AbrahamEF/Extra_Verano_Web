-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-07-2014 a las 02:31:37
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `continente`
--

CREATE TABLE IF NOT EXISTS `continente` (
  `id_continente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_continente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `continente`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `id_pais` int(11) NOT NULL,
  PRIMARY KEY (`id_estado`),
  KEY `id_pais_idx` (`id_pais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `estado`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `id_pais` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `bandera` varchar(45) DEFAULT NULL,
  `id_continente` int(11) NOT NULL,
  PRIMARY KEY (`id_pais`),
  KEY `fk_continente_idx` (`id_continente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `pais`
--


--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `estado`
--
ALTER TABLE `estado`
  ADD CONSTRAINT `id_pais` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pais`
--
ALTER TABLE `pais`
  ADD CONSTRAINT `id_continente` FOREIGN KEY (`id_continente`) REFERENCES `continente` (`id_continente`) ON DELETE CASCADE ON UPDATE CASCADE;
