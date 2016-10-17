-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-04-2015 a las 21:49:14
-- Versión del servidor: 5.5.31
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `vision_mentr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO  `vision_mentr`.`states` (
`id` ,
`name`
)
VALUES (
NULL,'Alabama'),
(NULL,'Alaska'),
(NULL,'Arizona'),
(NULL,'Arkansas'),
(NULL,'California'),
(NULL,'Colorado'),
(NULL,'Connecticut'),
(NULL,'Delaware'),
(NULL,'District of Columbia'),
(NULL,'Florida'),
(NULL,'Georgia'),
(NULL,'Hawaii'),
(NULL,'Idaho'),
(NULL,'Illinois'),
(NULL,'Indiana'),
(NULL,'Iowa'),
(NULL,'Kansas'),
(NULL,'Kentucky'),
(NULL,'Louisiana'),
(NULL,'Maine'),
(NULL,'Maryland'),
(NULL,'Massachusetts'),
(NULL,'Michigan'),
(NULL,'Minnesota'),
(NULL,'Mississippi'),
(NULL,'Missouri'),
(NULL,'Montana'),
(NULL,'Nebraska'),
(NULL,'Nevada'),
(NULL,'New Hampshire'),
(NULL,'New Jersey'),
(NULL,'New Mexico'),
(NULL,'New York'),
(NULL,'North Carolina'),
(NULL,'North Dakota'),
(NULL,'Ohio'),
(NULL,'Oklahoma'),
(NULL,'Oregon'),
(NULL,'Pennsylvania'),
(NULL,'Rhode Island'),
(NULL,'South Carolina'),
(NULL,'South Dakota'),
(NULL,'Tennessee'),
(NULL,'Texas'),
(NULL,'Utah'),
(NULL,'Vermont'),
(NULL,'Virginia'),
(NULL,'Washington'),
(NULL,'West Virginia'),
(NULL,'Wisconsin'),
(NULL,'Wyoming'),
(NULL,'Guam'),
(NULL,'Puerto Rico'),
(NULL,'Virgin Islands'
);
