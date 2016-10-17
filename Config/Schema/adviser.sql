-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-05-2015 a las 17:42:49
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
-- Estructura de tabla para la tabla `adviser`
--

CREATE TABLE IF NOT EXISTS `adviser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `mentor_title` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `correct_profile` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `aplication_date` date NOT NULL,
  `mentor_name` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `mentor_surname` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `mentor_email` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `mentor_job_title` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `mentor_job_explanation` text COLLATE utf8_spanish2_ci NOT NULL,
  `mentor_central_career` text COLLATE utf8_spanish2_ci NOT NULL,
  `mentor_advice_level` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `mentor_advice` text COLLATE utf8_spanish2_ci NOT NULL,
  `mentor_challenges` text COLLATE utf8_spanish2_ci NOT NULL,
  `mentor_privacy` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
