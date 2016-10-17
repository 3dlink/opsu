-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-04-2015 a las 17:07:38
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
-- Estructura de tabla para la tabla `jobsinfo`
--

CREATE TABLE IF NOT EXISTS `jobsinfo` (
  `id` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `career_name` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `career_what` text COLLATE utf8_spanish2_ci NOT NULL,
  `career_how` text COLLATE utf8_spanish2_ci NOT NULL,
  `career_employement_change` float NOT NULL,
  `career_openings` float NOT NULL,
  `career_education_level` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `career_job_training` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `r` float NOT NULL,
  `i` float NOT NULL,
  `a` float NOT NULL,
  `s` float NOT NULL,
  `e` float NOT NULL,
  `c` float NOT NULL,
  `active_learning` int(11) NOT NULL,
  `active_listening` int(11) NOT NULL,
  `problem_solving` int(11) NOT NULL,
  `critical_thinking` int(11) NOT NULL,
  `instructing` int(11) NOT NULL,
  `decision_making` int(11) NOT NULL,
  `leadership` int(11) NOT NULL,
  `numerical_reasoning` int(11) NOT NULL,
  `negotiation` int(11) NOT NULL,
  `persuasion` int(11) NOT NULL,
  `reading_comprehension` int(11) NOT NULL,
  `service_orientation` int(11) NOT NULL,
  `social_perceptiveness` int(11) NOT NULL,
  `speaking` int(11) NOT NULL,
  `time_management` int(11) NOT NULL,
  `writing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
