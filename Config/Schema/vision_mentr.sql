-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-03-2015 a las 00:32:57
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
CREATE DATABASE IF NOT EXISTS `vision_mentr` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `vision_mentr`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archetypes`
--

CREATE TABLE IF NOT EXISTS `archetypes` (
  `id` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `autonomy` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `variety` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `reasonable_pay` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `job_security` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `impact` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `archetypes`
--

INSERT INTO `archetypes` (`id`, `autonomy`, `variety`, `reasonable_pay`, `job_security`, `impact`) VALUES
('RI', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('RA', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('RS', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('RE', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('RC', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('IR', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('IA', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('IS', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('IE', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('IC', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('AR', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('AI', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('AS', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('AE', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('AC', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('SR', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('SI', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('SA', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('SE', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('SC', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('ER', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('EI', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('EA', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('ES', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('EC', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('CR', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('CI', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('CA', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('CS', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important'),
('CE', 'Very important', 'Very important', 'important', 'Somewhat important', 'not at all important');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `excerpt` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `premium` tinyint(1) DEFAULT NULL,
  `main_img` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `square_img` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `tags` text COLLATE utf8_spanish2_ci,
  `text` text COLLATE utf8_spanish2_ci,
  `active` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `title`, `excerpt`, `status`, `premium`, `main_img`, `square_img`, `created`, `modified`, `tags`, `text`, `active`) VALUES
(2, 0, 'Articulo 1', 'Excerpt 1.1', 1, 1, 'img1424877114WVC.png', 'img142504591391A.jpeg', '2015-02-19 10:07:16', '2015-02-27 09:43:07', 'tags 1', '<p>texto 1</p>', 0),
(7, 0, 'Articulo 1', 'Excerpt 1', 1, 0, 'img1', 'img1425045925JOT.png', '2015-02-23 10:30:15', '2015-02-27 09:05:26', 'tags', '<p>asdasdasd</p>', 1),
(8, 0, 'Articulo 5', 'excerpt', 1, 1, 'asdasd', 'img1425045934B00.png', '2015-02-23 11:01:43', '2015-02-27 09:05:35', 'tags, asda, wew', '<p>asda</p>', 1),
(9, 0, 'Titulo del articulo', 'excerpt del articulo', 1, 1, 'imagen 1', 'img1425045945O5Z.png', '2015-02-23 15:12:33', '2015-02-27 09:05:47', NULL, '<p>Este es un texto en&nbsp;<strong>negrita</strong></p>', 1),
(10, 0, 'Articulo 6', 'Excerpt', 1, 1, 'asdasd', 'img1425045956G9O.png', '2015-02-23 16:14:01', '2015-02-27 09:05:59', NULL, '<p><strong>Negrita</strong></p>', 1),
(12, 0, 'articulo 20', 'excertp 20', 1, 0, NULL, 'img1424876090TBH.jpeg', '2015-02-25 09:55:01', '2015-02-27 10:08:45', NULL, '<p>Este es un texto del articulo 20</p>', 0),
(13, 0, 'articulo ahora si', 'excerpt ahora si ', 1, 1, 'img142487639074M.png', 'img1424876396ZK1.jpeg', '2015-02-25 10:00:31', '2015-02-27 09:53:36', NULL, '<p>ahora si funcionan las imagenes</p>', 1),
(14, 0, 'qwerty', 'qwertyuiop', 1, 1, 'img14248783076I4.png', 'img14248783522P1.png', '2015-02-25 10:32:00', '2015-02-27 09:55:29', NULL, '<p>wertyuiopasdfghjk</p>', 1),
(15, 0, 'ultimo', 'excerpt', 1, 1, 'img1424880155X32.png', 'img1425303514XSA.png', '2015-02-25 11:02:45', '2015-03-02 08:38:36', NULL, '<p>www.google.com.ve</p>', 1),
(16, 0, 'este es un titulo muy largo para el articulo para ', 'nuevo', 1, 1, 'img1424897833VHR.png', 'img1424897843A7G.jpeg', '2015-02-25 15:57:45', '2015-02-27 09:23:11', NULL, '<p>hola mundo</p>', 0),
(18, 5, 'articulo con link', 'akjsdhasdkasdasdasdasd', 1, 1, 'img1425305117M1G.jpg', 'img14253051214V5.png', '2015-03-02 09:10:26', '2015-03-11 19:16:13', NULL, '<p><a title="google" href="http://www.google.com">esto es un link de google</a></p>', 1),
(19, 4, 'probando tags', 'tags', 1, 1, 'img1425312144A5Q.jpg', 'img1425312315M5X.jpeg', '2015-03-02 11:02:49', '2015-03-11 19:14:37', NULL, '<p><a title="google" href="http://www.google.com">google</a></p>', 1),
(20, 3, 'articulo con categoria', 'asdasd', 1, 1, 'img1426115839UUI.jpg', 'img14261158475AP.jpeg', '2015-03-11 19:17:29', '2015-03-11 19:17:29', NULL, '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles_tags`
--

CREATE TABLE IF NOT EXISTS `articles_tags` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `article_id` int(10) NOT NULL,
  `tag_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=61 ;

--
-- Volcado de datos para la tabla `articles_tags`
--

INSERT INTO `articles_tags` (`id`, `article_id`, `tag_id`) VALUES
(11, 12, 5),
(12, 12, 6),
(26, 2, 1),
(27, 2, 2),
(28, 2, 46),
(29, 10, 1),
(34, 16, 1),
(35, 16, 2),
(36, 16, 39),
(37, 16, 40),
(38, 16, 41),
(39, 16, 42),
(40, 13, 2),
(41, 13, 43),
(42, 14, 47),
(43, 14, 2),
(44, 15, 1),
(45, 15, 2),
(46, 15, 43),
(47, 17, 39),
(55, 19, 41),
(56, 19, 48),
(57, 19, 49),
(58, 18, 39),
(59, 20, 2),
(60, 20, 39);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `assessments`
--

CREATE TABLE IF NOT EXISTS `assessments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `description` text COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `assessments`
--

INSERT INTO `assessments` (`id`, `name`, `description`) VALUES
(1, 'CDDA', 'Carrer Decision Difficulties Assessment'),
(2, 'VIA', 'Vocational Interests Assessment ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Decision-making'),
(2, 'Career vision'),
(3, 'Self knowledge'),
(4, 'Job hunting'),
(5, 'Careers');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cdda`
--

CREATE TABLE IF NOT EXISTS `cdda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `A_v1_q2` varchar(45) NOT NULL,
  `A_v1_q3` int(11) NOT NULL,
  `A_v1_q4` int(11) NOT NULL,
  `A_v1_q5` tinyint(4) NOT NULL,
  `A_v1_q6` int(11) NOT NULL,
  `A_v1_q7` int(11) NOT NULL,
  `A_v1_q8` tinyint(4) NOT NULL,
  `A_v1_q9` int(11) NOT NULL,
  `A_v1_q10` int(11) NOT NULL,
  `A_v1_q11` int(11) NOT NULL,
  `A_v1_q12` int(11) NOT NULL,
  `A_v1_q13` int(11) NOT NULL,
  `A_v1_q14` int(11) NOT NULL,
  `A_v1_q15` int(11) NOT NULL,
  `A_v1_q16` int(11) NOT NULL,
  `A_v1_q17` int(11) NOT NULL,
  `A_v1_q18` int(11) NOT NULL,
  `A_v1_q19` int(11) NOT NULL,
  `A_v1_q20` int(11) NOT NULL,
  `systematic` varchar(45) DEFAULT NULL,
  `spontaneous` varchar(45) DEFAULT NULL,
  `dms_internal` varchar(45) DEFAULT NULL,
  `dms_external` varchar(45) DEFAULT NULL,
  `motivation` varchar(45) DEFAULT NULL,
  `indecisiveness` varchar(45) DEFAULT NULL,
  `biliefs` varchar(45) DEFAULT NULL,
  `process` varchar(45) DEFAULT NULL,
  `self` varchar(45) DEFAULT NULL,
  `occupations` varchar(45) DEFAULT NULL,
  `conflict_internal` varchar(45) DEFAULT NULL,
  `conflict_external` varchar(45) DEFAULT NULL,
  `vision` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `cdda`
--

INSERT INTO `cdda` (`id`, `A_v1_q2`, `A_v1_q3`, `A_v1_q4`, `A_v1_q5`, `A_v1_q6`, `A_v1_q7`, `A_v1_q8`, `A_v1_q9`, `A_v1_q10`, `A_v1_q11`, `A_v1_q12`, `A_v1_q13`, `A_v1_q14`, `A_v1_q15`, `A_v1_q16`, `A_v1_q17`, `A_v1_q18`, `A_v1_q19`, `A_v1_q20`, `systematic`, `spontaneous`, `dms_internal`, `dms_external`, `motivation`, `indecisiveness`, `biliefs`, `process`, `self`, `occupations`, `conflict_internal`, `conflict_external`, `vision`) VALUES
(1, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0', '5', '-4', '0', '1', '-5', '-2', '3', '2', '3', '-4', '1', '1'),
(2, '1', 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2', '3', '-4', '0', '1', '-5', '-5', '3', '2', '3', '-4', '1', '1'),
(3, '1', 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '4', '6', '-8', '0', '2', '-10', '-10', '6', '4', '6', '-8', '2', '2'),
(4, '1', 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '6', '9', '-12', '0', '3', '-15', '-15', '9', '6', '9', '-12', '3', '3'),
(5, '1', 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '8', '12', '-16', '0', '4', '-20', '-20', '12', '8', '12', '-16', '4', '4'),
(6, '1', 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '10', '15', '-20', '0', '5', '-25', '-25', '15', '10', '15', '-20', '5', '5'),
(7, '1', 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '12', '18', '-24', '0', '6', '-30', '-30', '18', '12', '18', '-24', '6', '6'),
(8, '1', 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '14', '21', '-28', '0', '7', '-35', '-35', '21', '14', '21', '-28', '7', '7'),
(9, '1', 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '16', '24', '-32', '0', '8', '-40', '-40', '24', '16', '24', '-32', '8', '8'),
(10, '1', 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '18', '27', '-36', '0', '9', '-45', '-45', '27', '18', '27', '-36', '9', '9'),
(11, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0', '5', '-4', '0', '1', '-5', '-2', '3', '2', '3', '-4', '1', '1'),
(12, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0', '5', '-4', '0', '1', '-5', '-2', '3', '2', '3', '-4', '1', '1'),
(13, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0', '10', '-8', '0', '2', '-10', '-4', '6', '4', '6', '-8', '2', '2'),
(14, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0', '5', '-4', '0', '1', '-5', '-2', '3', '2', '3', '-4', '1', '1'),
(15, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0', '10', '-8', '0', '2', '-10', '-4', '6', '4', '6', '-8', '2', '2'),
(16, '1', 1, 1, 1, 4, 2, 1, 5, 2, 2, 1, 1, 6, 3, 1, 1, 1, 2, 1, '0', '5', '-4', '0', '2', '-5', '2', '3', '9', '4', '-3', '1', '5'),
(17, '1', 1, 9, 0, 9, 9, 0, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, '5', '0', '0', '4', '9', '3', '8', '9.00', '9.00', '9.00', '4', '9', '9'),
(18, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0', '5', '-4', '0', '1', '-5', '-2', '1.00', '1.00', '1.00', '-4', '1', '1'),
(19, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0', '10', '-8', '0', '2', '-10', '-4', '0.33', '0.00', '0.00', '-8', '2', '2'),
(20, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0', '10', '-8', '0', '2', '-10', '-4', '0.33', '0.00', '0.00', '-8', '2', '2'),
(21, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0', '10', '-8', '0', '2', '-10', '-4', '0.33', '0.00', '0.00', '-8', '2', '2'),
(22, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0', '5', '-4', '0', '1', '-5', '-2', '1.00', '1.00', '1.00', '-4', '1', '1'),
(23, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0', '5', '-4', '0', '1', '-5', '-2', '1.00', '1.00', '1.00', '-4', '1', '1'),
(24, '1', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '3', '2', '-4', '0', '1', '-5', '-5', '1.00', '1.00', '1.00', '-4', '1', '1'),
(25, '1', 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '5', '0', '-4', '0', '1', '-5', '-8', '1.00', '1.00', '1.00', '-4', '1', '1'),
(26, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0', '5', '-4', '0', '1', '-5', '-2', '1.00', '1.00', '1.00', '-4', '1', '1'),
(27, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0', '5', '-4', '0', '1', '-5', '-2', '1.00', '1.00', '1.00', '-4', '1', '1'),
(28, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0', '5', '-4', '0', '1', '-5', '-2', '1.00', '1.00', '1.00', '-4', '1', '1'),
(29, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0', '10', '-8', '0', '2', '-10', '-4', '0.33', '0.00', '0.00', '-8', '2', '2'),
(30, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0', '5', '-4', '0', '1', '-5', '-2', '1.00', '1.00', '1.00', '-4', '1', '1'),
(31, '1', 2, 2, 1, 4, 4, 0, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, '3', '2', '-3', '0', '4', '-3', '1', '4.00', '4.00', '4.00', '-1', '4', '4'),
(32, '2', 5, 5, 1, 5, 5, 1, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, '0', '5', '0', '0', '4', '2', '6', '4.00', '4.00', '4.00', '3', '4', '4'),
(33, '2', 6, 5, 1, 3, 4, 1, 4, 4, 3, 6, 4, 3, 3, 7, 9, 8, 8, 7, '0', '5', '0', '0', '4', '3', '3', '8.00', '3.00', '4.00', '7', '7', '4'),
(34, '1', 2, 2, 0, 3, 3, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '2', '3', '-3', '0', '5', '-3', '-1', '5.00', '5.00', '5.00', '0', '5', '5'),
(35, '3', 8, 7, 1, 4, 5, 1, 1, 5, 5, 4, 3, 5, 3, 5, 7, 8, 6, 8, '0', '5', '0', '2', '5', '5', '5', '6.67', '4.00', '4.00', '1', '8', '1'),
(36, '2', 6, 4, 1, 5, 4, 1, 4, 5, 6, 4, 5, 6, 4, 1, 6, 6, 6, 4, '0', '5', '-1', '0', '5', '2', '5', '4.33', '5.00', '5.00', '5', '4', '4'),
(37, '2', 6, 4, 1, 5, 4, 1, 4, 5, 6, 4, 5, 6, 4, 1, 6, 6, 6, 4, '0', '10', '-2', '0', '10', '4', '10', '1.33', '2.00', '1.00', '10', '8', '8'),
(38, '2', 4, 4, 1, 4, 4, 0, 5, 5, 5, 5, 5, 5, 5, 5, 4, 4, 4, 6, '3', '2', '-1', '0', '5', '0', '1', '4.33', '5.00', '5.00', '3', '6', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `education`
--

INSERT INTO `education` (`id`, `name`) VALUES
(1, '<1'),
(2, '<8'),
(3, '<12'),
(4, 'high school'),
(5, 'some college'),
(6, 'associate'),
(7, 'bachelor'),
(8, 'master'),
(9, 'professional school'),
(10, 'doctorate');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genders`
--

CREATE TABLE IF NOT EXISTS `genders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `genders`
--

INSERT INTO `genders` (`id`, `name`) VALUES
(1, 'man'),
(2, 'woman'),
(3, 'complicated');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_tokens`
--

CREATE TABLE IF NOT EXISTS `login_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` char(32) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `login_tokens`
--

INSERT INTO `login_tokens` (`id`, `user_id`, `token`, `duration`, `used`, `created`, `expires`) VALUES
(1, 1, '12e84cdbb14565cc70d54ddcfddca448', '2 weeks', 1, '2015-02-12 17:36:56', '2015-02-26 17:36:56'),
(2, 1, '2ab8fe5ed3829df587c622c8fe2e545f', '2 weeks', 0, '2015-02-13 08:59:21', '2015-02-27 08:59:21'),
(3, 1, 'a1535eb118ad5a3c1ee58bc8eac03d5f', '2 weeks', 0, '2015-02-13 08:59:27', '2015-02-27 08:59:27'),
(4, 1, 'cc05cd02e58202f4a9625b4717c70841', '2 weeks', 0, '2015-02-13 09:17:20', '2015-02-27 09:17:20'),
(5, 1, '630c5f919cef9e711b3f5dbdc3951dc7', '2 weeks', 0, '2015-02-13 09:22:09', '2015-02-27 09:22:09'),
(6, 1, 'c3031c34525acc922c93a72bc4850c9b', '2 weeks', 1, '2015-02-13 09:26:31', '2015-02-27 09:26:31'),
(7, 1, '771e884965c720694dc54decb58ebc5f', '2 weeks', 0, '2015-02-13 11:10:33', '2015-02-27 11:10:33'),
(8, 1, 'a99296cc6977bbbe435497b15ec12642', '2 weeks', 0, '2015-02-13 15:57:50', '2015-02-27 15:57:50'),
(9, 1, '9205d855d12a4a2dd2c0bb367294c5e7', '2 weeks', 0, '2015-02-13 16:24:56', '2015-02-27 16:24:56'),
(10, 1, '8046766d1ea85b89f2ea96e1bc21aa58', '2 weeks', 0, '2015-02-13 16:28:03', '2015-02-27 16:28:03'),
(11, 1, 'ed6b43fd53333d0fe52a3d0684eebcd0', '2 weeks', 0, '2015-02-18 09:07:06', '2015-03-04 09:07:06'),
(12, 1, '7036efa6f69ada3e510eef2c1f74ca75', '2 weeks', 1, '2015-02-18 10:58:02', '2015-03-04 10:58:02'),
(13, 1, '39a678b537b87b806d8c8d19282a9d79', '2 weeks', 0, '2015-02-19 09:29:31', '2015-03-05 09:29:31'),
(14, 1, '8b7e89f7456b388596949b05dda6c02a', '2 weeks', 0, '2015-02-19 09:29:34', '2015-03-05 09:29:34'),
(15, 1, 'b9a5451fa633038f0371e5fa6633aeda', '2 weeks', 0, '2015-02-19 10:10:09', '2015-03-05 10:10:09'),
(16, 1, '2ee958c001c63805333d3aa183882882', '2 weeks', 0, '2015-02-19 10:28:59', '2015-03-05 10:28:59'),
(17, 1, 'ed3b65ad43c9364c720778057e58589e', '2 weeks', 0, '2015-02-19 10:44:53', '2015-03-05 10:44:53'),
(18, 1, '38e12b0741e484d40610b534fa56a029', '2 weeks', 1, '2015-02-19 11:21:36', '2015-03-05 11:21:36'),
(19, 1, 'adde6e8a19afed8770cb1e36c8f0d52d', '2 weeks', 0, '2015-02-19 13:32:47', '2015-03-05 13:32:47'),
(20, 1, '67cdc59b1a9fec4f4af6bcc300bba399', '2 weeks', 1, '2015-02-19 13:40:53', '2015-03-05 13:40:53'),
(21, 1, '2fc71032b9086a75e1710d6d99932bf6', '2 weeks', 1, '2015-02-19 13:53:44', '2015-03-05 13:53:44'),
(22, 1, 'a24f980e41445017fc94caf5c94c526a', '2 weeks', 0, '2015-02-19 14:12:17', '2015-03-05 14:12:17'),
(23, 1, '44ecab4723b62d3397cbb2c07071c6a6', '2 weeks', 0, '2015-02-19 14:43:01', '2015-03-05 14:43:01'),
(24, 1, '40b9464bbdb11e69baa84b60ecf2378f', '2 weeks', 0, '2015-02-19 14:47:42', '2015-03-05 14:47:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skillsa`
--

CREATE TABLE IF NOT EXISTS `skillsa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assessment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `F_v1_q1` int(11) NOT NULL,
  `F_v1_q2` int(11) NOT NULL,
  `F_v1_q3` int(11) NOT NULL,
  `F_v1_q4` int(11) NOT NULL,
  `F_v1_q5` int(11) NOT NULL,
  `F_v1_q6` int(11) NOT NULL,
  `F_v1_q7` int(11) NOT NULL,
  `F_v1_q8` int(11) NOT NULL,
  `F_v1_q9` int(11) NOT NULL,
  `F_v1_q10_1` tinyint(4) NOT NULL DEFAULT '0',
  `F_v1_q10_2` tinyint(4) NOT NULL DEFAULT '0',
  `F_v1_q10_3` tinyint(4) NOT NULL DEFAULT '0',
  `F_v1_q10_4` tinyint(4) NOT NULL DEFAULT '0',
  `F_v1_q10_5` tinyint(4) NOT NULL DEFAULT '0',
  `F_v1_q10_6` tinyint(4) NOT NULL DEFAULT '0',
  `F_v1_q10_7` tinyint(4) NOT NULL DEFAULT '0',
  `F_v1_q11` int(11) NOT NULL,
  `F_v1_q12` int(11) NOT NULL,
  `F_v1_q13` int(11) NOT NULL,
  `F_v1_q14` int(11) NOT NULL,
  `F_v1_q15` int(11) NOT NULL,
  `F_v1_q16` int(11) NOT NULL,
  `F_v1_q17` int(11) NOT NULL,
  `F_v1_q18` int(11) NOT NULL,
  `F_v1_q19` int(11) NOT NULL,
  `F_v1_q20` int(11) NOT NULL,
  `F_v1_q21` int(11) NOT NULL,
  `F_v1_q22` int(11) NOT NULL,
  `F_v1_q23` int(11) NOT NULL,
  `F_v1_q24` int(11) NOT NULL,
  `F_v1_q25` int(11) NOT NULL,
  `F_v1_q26` int(11) NOT NULL,
  `F_v1_q27` int(11) NOT NULL,
  `F_v1_q28` int(11) NOT NULL,
  `F_v1_q29` int(11) NOT NULL,
  `F_v1_q30` int(11) NOT NULL,
  `F_v1_q31` int(11) NOT NULL,
  `F_v1_q32` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `label` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=50 ;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `name`, `label`) VALUES
(1, 'CDDA', 'CDDA'),
(2, 'Orbituary', 'Orbituary'),
(39, 'Big Picture', 'Big Picture'),
(40, 'Self-knowledge', 'Self-knowledge'),
(41, 'How to choose', 'How to choose'),
(42, 'Job hunting', 'Job hunting'),
(48, 'tag nuevo', ''),
(49, 'tag nuevito', 'nuevito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) unsigned NOT NULL,
  `education_id` int(11) NOT NULL,
  `cdda_id` int(11) DEFAULT NULL,
  `via_id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` text,
  `email` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender_id` int(11) DEFAULT '1',
  `email_verified` int(1) DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  `ip_address` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`username`),
  KEY `mail` (`email`),
  KEY `users_FKIndex1` (`user_group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user_group_id`, `education_id`, `cdda_id`, `via_id`, `username`, `password`, `salt`, `email`, `first_name`, `last_name`, `birthday`, `gender_id`, `email_verified`, `active`, `ip_address`, `created`, `modified`) VALUES
(1, 1, 0, NULL, 0, 'admin', '365caef7fccbdb1ee711f084be9317a7', '1e6d99570a4d37cc29b18c4a6b06e6ed', 'admin@admin.com', 'Admin', '', NULL, NULL, 1, 1, '', '2015-02-12 18:03:48', '2015-02-12 18:03:48'),
(2, 2, 0, NULL, 14, 'diegob', '566519ed203d256677dbae960c0e7359', 'f123587227ebdaad197621d8b9d9c0ad', 'diego@gmail.com', 'Diego', 'Brito', NULL, NULL, 1, 1, NULL, '2015-02-19 10:10:52', '2015-03-11 16:15:40'),
(3, 2, 1, 1, 0, NULL, NULL, NULL, 'asda@alsd.com', 'wersdf', NULL, '2015-02-02', 1, 0, 0, NULL, '2015-02-24 16:22:44', '2015-02-24 16:22:44'),
(4, 2, 1, 2, 0, NULL, NULL, NULL, 'emmanuel@gmail.com', 'sdfsfgs', NULL, '2015-02-04', 1, 0, 0, NULL, '2015-02-24 19:51:55', '2015-02-24 19:51:55'),
(5, 2, 1, 3, 0, NULL, NULL, NULL, 'emmanuel@gmail.com', 'sdfsfgs', NULL, '2015-02-04', 1, 0, 0, NULL, '2015-02-24 19:52:04', '2015-02-24 19:52:04'),
(6, 2, 1, 4, 0, NULL, NULL, NULL, 'emmanuel@gmail.com', 'sdfsfgs', NULL, '2015-02-04', 1, 0, 0, NULL, '2015-02-24 19:52:05', '2015-02-24 19:52:05'),
(7, 2, 1, 5, 0, NULL, NULL, NULL, 'emmanuel@gmail.com', 'sdfsfgs', NULL, '2015-02-04', 1, 0, 0, NULL, '2015-02-24 19:52:05', '2015-02-24 19:52:05'),
(8, 2, 1, 6, 0, NULL, NULL, NULL, 'emmanuel@gmail.com', 'sdfsfgs', NULL, '2015-02-04', 1, 0, 0, NULL, '2015-02-24 19:52:13', '2015-02-24 19:52:13'),
(9, 2, 1, 7, 0, NULL, NULL, NULL, 'emmanuel@gmail.com', 'sdfsfgs', NULL, '2015-02-04', 1, 0, 0, NULL, '2015-02-24 19:52:15', '2015-02-24 19:52:15'),
(10, 2, 1, 8, 0, NULL, NULL, NULL, 'emmanuel@gmail.com', 'sdfsfgs', NULL, '2015-02-04', 1, 0, 0, NULL, '2015-02-24 19:52:17', '2015-02-24 19:52:17'),
(11, 2, 1, 9, 0, NULL, NULL, NULL, 'emmanuel@gmail.com', 'sdfsfgs', NULL, '2015-02-04', 1, 0, 0, NULL, '2015-02-24 19:52:19', '2015-02-24 19:52:19'),
(12, 2, 1, 10, 0, NULL, NULL, NULL, 'emmanuel@gmail.com', 'sdfsfgs', NULL, '2015-02-04', 1, 0, 0, NULL, '2015-02-24 19:53:05', '2015-02-24 19:53:05'),
(13, 2, 1, 11, 0, NULL, NULL, NULL, 'victor@akjsd.com', 'victor', NULL, '2015-02-11', 1, 0, 0, NULL, '2015-02-25 08:30:06', '2015-02-25 08:30:06'),
(14, 2, 1, 12, 0, NULL, NULL, NULL, 'qwerty@kashd.com', 'qwerty', NULL, '2015-02-04', 1, 0, 0, NULL, '2015-02-25 08:32:03', '2015-02-25 08:32:03'),
(15, 2, 1, 13, 0, NULL, NULL, NULL, 'qwerty2@kashd.com', 'qwerty2', NULL, '2015-02-04', 1, 0, 0, NULL, '2015-02-25 08:35:12', '2015-02-25 08:35:12'),
(16, 2, 1, 14, 0, NULL, NULL, NULL, 'qwertyuiop@akjs.com', 'QWERTYUIOP', NULL, '2015-02-14', 1, 0, 0, NULL, '2015-02-25 08:37:14', '2015-02-25 08:37:14'),
(17, 2, 1, 15, 0, NULL, NULL, NULL, 'qwertyuiop@akjs.com', 'QWERTYUIOP', NULL, '2015-02-14', 1, 0, 0, NULL, '2015-02-25 08:46:15', '2015-02-25 08:46:15'),
(18, 2, 3, 16, 0, NULL, NULL, NULL, 'adsasasdf@dfd.com', 'dsfdsf', NULL, '2015-02-08', 1, 0, 0, NULL, '2015-02-25 16:26:48', '2015-02-25 16:26:48'),
(19, 2, 10, 17, 0, NULL, NULL, NULL, 'ruth@gmail.com', 'Ruth', NULL, '2015-02-03', 2, 0, 0, NULL, '2015-02-26 09:28:37', '2015-02-26 09:28:37'),
(20, 2, 1, 18, 0, NULL, NULL, NULL, 'popi@popi.com', 'popi', NULL, '2015-02-05', 2, 0, 0, NULL, '2015-02-26 09:57:01', '2015-02-26 09:57:01'),
(21, 2, 1, 19, 0, NULL, NULL, NULL, 'popi@popi.com', 'popi', NULL, '2015-02-05', 2, 0, 0, NULL, '2015-02-26 09:57:10', '2015-02-26 09:57:10'),
(22, 2, 1, 20, 0, NULL, NULL, NULL, 'popi@popi.com', 'popi', NULL, '2015-02-05', 2, 0, 0, NULL, '2015-02-26 09:57:42', '2015-02-26 09:57:42'),
(23, 2, 1, 21, 0, NULL, NULL, NULL, 'popi@popi.com', 'popi', NULL, '2015-02-05', 2, 0, 0, NULL, '2015-02-26 09:58:00', '2015-02-26 09:58:00'),
(24, 2, 1, 22, 0, NULL, NULL, NULL, 'carmen@carmen.com', 'carmen', NULL, '2015-02-04', 1, 0, 0, NULL, '2015-02-26 10:26:11', '2015-02-26 10:26:11'),
(25, 2, 1, 23, 0, NULL, NULL, NULL, 'carlos@carlos.com', 'Carlos', NULL, '2015-02-04', 1, 0, 0, NULL, '2015-02-27 11:19:04', '2015-02-27 11:19:04'),
(26, 2, 1, 24, 0, NULL, NULL, NULL, 'carla@carla.com', 'carla', NULL, '2015-02-12', 2, 0, 0, NULL, '2015-02-27 11:31:39', '2015-02-27 11:31:39'),
(27, 2, 6, 25, 0, NULL, NULL, NULL, '12345@asd.com', 'cesar', NULL, '2015-02-12', 2, 0, 0, NULL, '2015-02-27 11:38:19', '2015-02-27 11:38:19'),
(28, 2, 1, 26, 0, NULL, NULL, NULL, 'pipo@pipo.com', 'pipo', NULL, '2015-02-12', 2, 0, 0, NULL, '2015-02-27 14:29:01', '2015-02-27 14:29:01'),
(29, 2, 1, 27, 0, NULL, NULL, NULL, 'diego@prueba.com', 'Prueba', NULL, '2015-03-05', 1, 0, 0, NULL, '2015-03-02 17:23:43', '2015-03-02 17:23:43'),
(30, 2, 1, 28, 0, NULL, NULL, NULL, 'prueba@prueba.com', 'assessment prueba', NULL, '2015-03-03', 1, 0, 0, NULL, '2015-03-02 17:26:26', '2015-03-02 17:26:26'),
(31, 2, 1, 29, 0, NULL, NULL, NULL, 'prueba3@prueba.com', 'assessment prueba', NULL, '2015-03-03', 1, 0, 0, NULL, '2015-03-02 17:26:53', '2015-03-02 17:26:53'),
(32, 2, 1, 30, 0, NULL, NULL, NULL, 'aeqw@qwe.com', 'dfsdfs', NULL, '2015-03-19', 1, 0, 0, NULL, '2015-03-03 09:46:20', '2015-03-03 09:46:20'),
(33, 2, 4, 31, 0, NULL, NULL, NULL, 'ioasd@kas.com', 'sd', NULL, '2015-03-12', 2, 0, 0, NULL, '2015-03-03 09:56:55', '2015-03-03 09:56:55'),
(34, 2, 5, 32, 0, NULL, NULL, NULL, 'asdhas@sahdf.com', 'prueba2', NULL, '2015-03-11', 2, 0, 0, NULL, '2015-03-05 10:45:05', '2015-03-05 10:45:05'),
(35, 2, 4, 33, 0, NULL, NULL, NULL, 'desaesaf@fdfg.com', 'dfg', NULL, '2015-03-12', 2, 0, 0, NULL, '2015-03-06 19:30:17', '2015-03-06 19:30:17'),
(36, 2, 4, 34, 0, NULL, NULL, NULL, 'dwqdq@qasd.com', 'jgdov', NULL, '2015-03-06', 2, 0, 0, NULL, '2015-03-11 09:58:54', '2015-03-11 09:58:54'),
(37, 2, 2, 35, 0, NULL, NULL, NULL, 'ggdfgd@dsfdef.com', 'cvbcfbh', NULL, '2015-03-11', 1, 0, 0, NULL, '2015-03-11 16:40:00', '2015-03-11 16:40:00'),
(38, 2, 4, 36, 0, NULL, NULL, NULL, 'fff@fdd.gff', 'ddd', NULL, '2015-03-11', 3, 0, 0, NULL, '2015-03-11 17:02:27', '2015-03-11 17:02:27'),
(39, 2, 4, 37, 0, NULL, NULL, NULL, 'fff@fdd.gff', 'ddd', NULL, '2015-03-11', 3, 0, 0, NULL, '2015-03-11 17:02:29', '2015-03-11 17:02:29'),
(40, 2, 3, 38, 0, NULL, NULL, NULL, 'dflj@as.com', 'tyr', NULL, '2015-03-06', 2, 0, 0, NULL, '2015-03-11 17:37:31', '2015-03-11 17:37:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alias_name` varchar(100) DEFAULT NULL,
  `allowRegistration` int(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `user_groups`
--

INSERT INTO `user_groups` (`id`, `name`, `alias_name`, `allowRegistration`, `created`, `modified`) VALUES
(1, 'Admin', 'Admin', 0, '2015-02-12 18:03:48', '2015-02-12 18:03:48'),
(2, 'Leads', 'Leads', 1, '2015-02-12 18:03:48', '2015-02-12 18:03:48'),
(3, 'Members', 'Members', 1, '2015-02-12 18:03:48', '2015-02-12 18:03:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_group_permissions`
--

CREATE TABLE IF NOT EXISTS `user_group_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_group_id` int(10) unsigned NOT NULL,
  `controller` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `action` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `allowed` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=217 ;

--
-- Volcado de datos para la tabla `user_group_permissions`
--

INSERT INTO `user_group_permissions` (`id`, `user_group_id`, `controller`, `action`, `allowed`) VALUES
(1, 1, 'Pages', 'display', 1),
(2, 2, 'Pages', 'display', 1),
(3, 3, 'Pages', 'display', 1),
(4, 1, 'UserGroupPermissions', 'index', 1),
(5, 2, 'UserGroupPermissions', 'index', 0),
(6, 3, 'UserGroupPermissions', 'index', 0),
(7, 1, 'UserGroupPermissions', 'update', 1),
(8, 2, 'UserGroupPermissions', 'update', 0),
(9, 3, 'UserGroupPermissions', 'update', 0),
(10, 1, 'UserGroups', 'index', 1),
(11, 2, 'UserGroups', 'index', 0),
(12, 3, 'UserGroups', 'index', 0),
(13, 1, 'UserGroups', 'addGroup', 1),
(14, 2, 'UserGroups', 'addGroup', 0),
(15, 3, 'UserGroups', 'addGroup', 0),
(16, 1, 'UserGroups', 'editGroup', 1),
(17, 2, 'UserGroups', 'editGroup', 0),
(18, 3, 'UserGroups', 'editGroup', 0),
(19, 1, 'UserGroups', 'deleteGroup', 1),
(20, 2, 'UserGroups', 'deleteGroup', 0),
(21, 3, 'UserGroups', 'deleteGroup', 0),
(22, 1, 'Users', 'index', 1),
(23, 2, 'Users', 'index', 0),
(24, 3, 'Users', 'index', 0),
(25, 1, 'Users', 'viewUser', 1),
(26, 2, 'Users', 'viewUser', 0),
(27, 3, 'Users', 'viewUser', 0),
(28, 1, 'Users', 'myprofile', 1),
(29, 2, 'Users', 'myprofile', 1),
(30, 3, 'Users', 'myprofile', 0),
(31, 1, 'Users', 'login', 1),
(32, 2, 'Users', 'login', 1),
(33, 3, 'Users', 'login', 1),
(34, 1, 'Users', 'logout', 1),
(35, 2, 'Users', 'logout', 1),
(36, 3, 'Users', 'logout', 1),
(37, 1, 'Users', 'register', 1),
(38, 2, 'Users', 'register', 1),
(39, 3, 'Users', 'register', 1),
(40, 1, 'Users', 'changePassword', 1),
(41, 2, 'Users', 'changePassword', 1),
(42, 3, 'Users', 'changePassword', 0),
(43, 1, 'Users', 'changeUserPassword', 1),
(44, 2, 'Users', 'changeUserPassword', 0),
(45, 3, 'Users', 'changeUserPassword', 0),
(46, 1, 'Users', 'addUser', 1),
(47, 2, 'Users', 'addUser', 0),
(48, 3, 'Users', 'addUser', 0),
(49, 1, 'Users', 'editUser', 1),
(50, 2, 'Users', 'editUser', 0),
(51, 3, 'Users', 'editUser', 0),
(52, 1, 'Users', 'dashboard', 1),
(53, 2, 'Users', 'dashboard', 1),
(54, 3, 'Users', 'dashboard', 0),
(55, 1, 'Users', 'deleteUser', 1),
(56, 2, 'Users', 'deleteUser', 0),
(57, 3, 'Users', 'deleteUser', 0),
(58, 1, 'Users', 'makeActive', 1),
(59, 2, 'Users', 'makeActive', 0),
(60, 3, 'Users', 'makeActive', 0),
(61, 1, 'Users', 'accessDenied', 1),
(62, 2, 'Users', 'accessDenied', 1),
(63, 3, 'Users', 'accessDenied', 1),
(64, 1, 'Users', 'userVerification', 1),
(65, 2, 'Users', 'userVerification', 1),
(66, 3, 'Users', 'userVerification', 1),
(67, 1, 'Users', 'forgotPassword', 1),
(68, 2, 'Users', 'forgotPassword', 1),
(69, 3, 'Users', 'forgotPassword', 1),
(70, 1, 'Users', 'makeActiveInactive', 1),
(71, 2, 'Users', 'makeActiveInactive', 0),
(72, 3, 'Users', 'makeActiveInactive', 0),
(73, 1, 'Users', 'verifyEmail', 1),
(74, 2, 'Users', 'verifyEmail', 0),
(75, 3, 'Users', 'verifyEmail', 0),
(76, 1, 'Users', 'activatePassword', 1),
(77, 2, 'Users', 'activatePassword', 1),
(78, 3, 'Users', 'activatePassword', 1),
(79, 1, 'Cddas', 'delete', 1),
(80, 2, 'Cddas', 'delete', 1),
(81, 3, 'Cddas', 'delete', 1),
(82, 1, 'Cddas', 'edit', 1),
(83, 2, 'Cddas', 'edit', 1),
(84, 3, 'Cddas', 'edit', 1),
(85, 1, 'Cddas', 'add', 1),
(86, 2, 'Cddas', 'add', 1),
(87, 3, 'Cddas', 'add', 1),
(88, 1, 'Cddas', 'view', 1),
(89, 2, 'Cddas', 'view', 1),
(90, 3, 'Cddas', 'view', 1),
(91, 1, 'Cddas', 'index', 1),
(92, 2, 'Cddas', 'index', 1),
(93, 3, 'Cddas', 'index', 1),
(94, 1, 'Articles', 'delete', 1),
(95, 2, 'Articles', 'delete', 1),
(96, 3, 'Articles', 'delete', 1),
(97, 1, 'Articles', 'upload', 1),
(98, 2, 'Articles', 'upload', 1),
(99, 3, 'Articles', 'upload', 1),
(100, 1, 'Cddas', 'result', 1),
(101, 2, 'Cddas', 'result', 1),
(102, 3, 'Cddas', 'result', 1),
(103, 1, 'Cddas', 'addCdda', 1),
(104, 2, 'Cddas', 'addCdda', 1),
(105, 3, 'Cddas', 'addCdda', 1),
(106, 1, 'Articles', 'desactive', 1),
(107, 2, 'Articles', 'desactive', 1),
(108, 3, 'Articles', 'desactive', 1),
(109, 1, 'Articles', 'applyFilter', 1),
(110, 2, 'Articles', 'applyFilter', 1),
(111, 3, 'Articles', 'applyFilter', 1),
(112, 1, 'Articles', 'index', 1),
(113, 2, 'Articles', 'index', 1),
(114, 3, 'Articles', 'index', 1),
(115, 1, 'Articles', 'view', 1),
(116, 2, 'Articles', 'view', 1),
(117, 3, 'Articles', 'view', 1),
(118, 1, 'Articles', 'add', 1),
(119, 2, 'Articles', 'add', 1),
(120, 3, 'Articles', 'add', 1),
(121, 1, 'Articles', 'add_tag', 1),
(122, 2, 'Articles', 'add_tag', 1),
(123, 3, 'Articles', 'add_tag', 1),
(124, 1, 'Articles', 'edit', 1),
(125, 2, 'Articles', 'edit', 1),
(126, 3, 'Articles', 'edit', 1),
(127, 1, 'Articles', 'getLastNews', 1),
(128, 2, 'Articles', 'getLastNews', 1),
(129, 3, 'Articles', 'getLastNews', 1),
(130, 1, 'Articles', 'search', 1),
(131, 2, 'Articles', 'search', 1),
(132, 3, 'Articles', 'search', 1),
(133, 1, 'Articles', 'getLastArticles', 1),
(134, 2, 'Articles', 'getLastArticles', 1),
(135, 3, 'Articles', 'getLastArticles', 1),
(136, 1, 'Cddas', 'cdmf', 1),
(137, 2, 'Cddas', 'cdmf', 1),
(138, 3, 'Cddas', 'cdmf', 1),
(139, 1, 'Cddas', 'CourseResult', 1),
(140, 2, 'Cddas', 'CourseResult', 1),
(141, 3, 'Cddas', 'CourseResult', 1),
(142, 1, 'Assessments', 'VocationalInterests', 1),
(143, 2, 'Assessments', 'VocationalInterests', 1),
(144, 3, 'Assessments', 'VocationalInterests', 1),
(145, 1, 'Assessments', 'result', 1),
(146, 2, 'Assessments', 'result', 1),
(147, 3, 'Assessments', 'result', 1),
(148, 1, 'Assessments', 'delete', 1),
(149, 2, 'Assessments', 'delete', 1),
(150, 3, 'Assessments', 'delete', 1),
(151, 1, 'Assessments', 'edit', 1),
(152, 2, 'Assessments', 'edit', 1),
(153, 3, 'Assessments', 'edit', 1),
(154, 1, 'Assessments', 'addCdda', 1),
(155, 2, 'Assessments', 'addCdda', 1),
(156, 3, 'Assessments', 'addCdda', 1),
(157, 1, 'Assessments', 'add', 1),
(158, 2, 'Assessments', 'add', 1),
(159, 3, 'Assessments', 'add', 1),
(160, 1, 'Assessments', 'view', 1),
(161, 2, 'Assessments', 'view', 1),
(162, 3, 'Assessments', 'view', 1),
(163, 1, 'Assessments', 'index', 1),
(164, 2, 'Assessments', 'index', 1),
(165, 3, 'Assessments', 'index', 1),
(166, 1, 'Dashboards', 'decisionMaking_mod2', 1),
(167, 2, 'Dashboards', 'decisionMaking_mod2', 1),
(168, 3, 'Dashboards', 'decisionMaking_mod2', 1),
(169, 1, 'Dashboards', 'decisionMaking', 1),
(170, 2, 'Dashboards', 'decisionMaking', 1),
(171, 3, 'Dashboards', 'decisionMaking', 1),
(172, 1, 'Dashboards', 'quest_mod2', 1),
(173, 2, 'Dashboards', 'quest_mod2', 1),
(174, 3, 'Dashboards', 'quest_mod2', 1),
(175, 1, 'Dashboards', 'quest', 1),
(176, 2, 'Dashboards', 'quest', 1),
(177, 3, 'Dashboards', 'quest', 1),
(178, 1, 'Dashboards', 'ajh', 1),
(179, 2, 'Dashboards', 'ajh', 1),
(180, 3, 'Dashboards', 'ajh', 1),
(181, 1, 'Dashboards', 'cdmf', 1),
(182, 2, 'Dashboards', 'cdmf', 1),
(183, 3, 'Dashboards', 'cdmf', 1),
(184, 1, 'Dashboards', 'vision', 1),
(185, 2, 'Dashboards', 'vision', 1),
(186, 3, 'Dashboards', 'vision', 1),
(187, 1, 'Dashboards', 'result', 1),
(188, 2, 'Dashboards', 'result', 1),
(189, 3, 'Dashboards', 'result', 1),
(190, 1, 'Dashboards', 'course', 1),
(191, 2, 'Dashboards', 'course', 1),
(192, 3, 'Dashboards', 'course', 1),
(193, 1, 'Dashboards', 'index', 1),
(194, 2, 'Dashboards', 'index', 1),
(195, 3, 'Dashboards', 'index', 1),
(196, 1, 'Assessments', 'addVia', 1),
(197, 2, 'Assessments', 'addVia', 1),
(198, 3, 'Assessments', 'addVia', 1),
(199, 1, 'Dashboards', 'quest_mod1', 1),
(200, 2, 'Dashboards', 'quest_mod1', 1),
(201, 3, 'Dashboards', 'quest_mod1', 1),
(202, 1, 'Dashboards', 'decisionMaking_mod1', 1),
(203, 2, 'Dashboards', 'decisionMaking_mod1', 1),
(204, 3, 'Dashboards', 'decisionMaking_mod1', 1),
(205, 1, 'Dashboards', 'quest_mod3', 1),
(206, 2, 'Dashboards', 'quest_mod3', 1),
(207, 3, 'Dashboards', 'quest_mod3', 1),
(208, 1, 'Dashboards', 'decisionMaking_mod3', 1),
(209, 2, 'Dashboards', 'decisionMaking_mod3', 1),
(210, 3, 'Dashboards', 'decisionMaking_mod3', 1),
(211, 1, 'Assessments', 'ResultVia', 1),
(212, 2, 'Assessments', 'ResultVia', 1),
(213, 3, 'Assessments', 'ResultVia', 1),
(214, 1, 'Assessments', 'SkillsA', 1),
(215, 2, 'Assessments', 'SkillsA', 1),
(216, 3, 'Assessments', 'SkillsA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `via`
--

CREATE TABLE IF NOT EXISTS `via` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assessment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `B_v1_q1` int(11) NOT NULL,
  `B_v1_q2` int(11) NOT NULL,
  `B_v1_q3` int(11) NOT NULL,
  `B_v1_q4` int(11) NOT NULL,
  `B_v1_q5` int(11) NOT NULL,
  `B_v1_q6` int(11) NOT NULL,
  `B_v1_q7` int(11) NOT NULL,
  `B_v1_q8` int(11) NOT NULL,
  `B_v1_q9` int(11) NOT NULL,
  `B_v1_q10` int(11) NOT NULL,
  `B_v1_q11` int(11) NOT NULL,
  `B_v1_q12` int(11) NOT NULL,
  `B_v1_q13` int(11) NOT NULL,
  `B_v1_q14` int(11) NOT NULL,
  `B_v1_q15` int(11) NOT NULL,
  `B_v1_q16` int(11) NOT NULL,
  `B_v1_q17` int(11) NOT NULL,
  `B_v1_q18` int(11) NOT NULL,
  `B_v1_q19` int(11) NOT NULL,
  `B_v1_q20` int(11) NOT NULL,
  `B_v1_q21` int(11) NOT NULL,
  `B_v1_q22` int(11) NOT NULL,
  `B_v1_q23` int(11) NOT NULL,
  `B_v1_q24` int(11) NOT NULL,
  `B_v1_q25` int(11) NOT NULL,
  `B_v1_q26` int(11) NOT NULL,
  `B_v1_q27` int(11) NOT NULL,
  `B_v1_q28` int(11) NOT NULL,
  `B_v1_q29` int(11) NOT NULL,
  `B_v1_q30` int(11) NOT NULL,
  `B_v1_q31` int(11) NOT NULL,
  `B_v1_q32` int(11) NOT NULL,
  `B_v1_q33` int(11) NOT NULL,
  `B_v1_q34` int(11) NOT NULL,
  `B_v1_q35` int(11) NOT NULL,
  `B_v1_q36` int(11) NOT NULL,
  `B_v1_q37` int(11) NOT NULL,
  `B_v1_q38` int(11) NOT NULL,
  `B_v1_q39` int(11) NOT NULL,
  `B_v1_q40` int(11) NOT NULL,
  `B_v1_q41` int(11) NOT NULL,
  `B_v1_q42` int(11) NOT NULL,
  `B_v1_q43` int(11) NOT NULL,
  `B_v1_q44` int(11) NOT NULL,
  `B_v1_q45` int(11) NOT NULL,
  `B_v1_q46` int(11) NOT NULL,
  `B_v1_q47` int(11) NOT NULL,
  `B_v1_q48` int(11) NOT NULL,
  `B_v1_q49` int(11) NOT NULL,
  `B_v1_q50` int(11) NOT NULL,
  `B_v1_q51` int(11) NOT NULL,
  `B_v1_q52` int(11) NOT NULL,
  `B_v1_q53` int(11) NOT NULL,
  `B_v1_q54` int(11) NOT NULL,
  `B_v1_q55` int(11) NOT NULL,
  `B_v1_q56` int(11) NOT NULL,
  `B_v1_q57` int(11) NOT NULL,
  `B_v1_q58` int(11) NOT NULL,
  `B_v1_q59` int(11) NOT NULL,
  `B_v1_q60` int(11) NOT NULL,
  `realistic` varchar(45) DEFAULT NULL,
  `investigative` varchar(45) DEFAULT NULL,
  `artistic` varchar(45) DEFAULT NULL,
  `social` varchar(45) DEFAULT NULL,
  `enterprising` varchar(45) DEFAULT NULL,
  `conventional` varchar(45) DEFAULT NULL,
  `archetype_id` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `via`
--

INSERT INTO `via` (`id`, `assessment_id`, `user_id`, `B_v1_q1`, `B_v1_q2`, `B_v1_q3`, `B_v1_q4`, `B_v1_q5`, `B_v1_q6`, `B_v1_q7`, `B_v1_q8`, `B_v1_q9`, `B_v1_q10`, `B_v1_q11`, `B_v1_q12`, `B_v1_q13`, `B_v1_q14`, `B_v1_q15`, `B_v1_q16`, `B_v1_q17`, `B_v1_q18`, `B_v1_q19`, `B_v1_q20`, `B_v1_q21`, `B_v1_q22`, `B_v1_q23`, `B_v1_q24`, `B_v1_q25`, `B_v1_q26`, `B_v1_q27`, `B_v1_q28`, `B_v1_q29`, `B_v1_q30`, `B_v1_q31`, `B_v1_q32`, `B_v1_q33`, `B_v1_q34`, `B_v1_q35`, `B_v1_q36`, `B_v1_q37`, `B_v1_q38`, `B_v1_q39`, `B_v1_q40`, `B_v1_q41`, `B_v1_q42`, `B_v1_q43`, `B_v1_q44`, `B_v1_q45`, `B_v1_q46`, `B_v1_q47`, `B_v1_q48`, `B_v1_q49`, `B_v1_q50`, `B_v1_q51`, `B_v1_q52`, `B_v1_q53`, `B_v1_q54`, `B_v1_q55`, `B_v1_q56`, `B_v1_q57`, `B_v1_q58`, `B_v1_q59`, `B_v1_q60`, `realistic`, `investigative`, `artistic`, `social`, `enterprising`, `conventional`, `archetype_id`) VALUES
(5, 2, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, '20', '20', '20', '20', '20', '20', ''),
(6, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '24', '24', '24', '24', '32', '32', ''),
(7, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0', '0', '0', '0', '0', '0', 'ri'),
(8, 2, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '24', '24', '24', '24', '16', '24', ''),
(9, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, '18', '18', '20', '20', '22', '22', 'EC'),
(10, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0', '0', '0', '0', '0', '0', 'RI'),
(11, 2, 2, 1, 2, 2, 3, 4, 5, 4, 3, 5, 4, 5, 3, 2, 1, 3, 3, 5, 5, 4, 3, 4, 4, 3, 2, 5, 5, 2, 3, 3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 4, 5, 4, 3, 3, 4, 4, 5, 4, 3, 3, 3, 4, 5, 3, 3, 2, 4, 3, '22', '17', '28', '26', '27', '26', 'AE'),
(12, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 4, 4, 4, 4, 4, 3, 3, 3, 3, 3, 4, 3, 2, 2, 2, 3, 3, '22', '22', '23', '21', '22', '26', 'CA'),
(13, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 4, 4, 3, 3, 3, 3, 3, 3, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 3, 3, 3, 4, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 4, '14', '16', '16', '16', '19', '19', 'EC'),
(14, 2, 2, 4, 4, 5, 3, 5, 3, 3, 5, 4, 3, 4, 5, 3, 1, 2, 2, 3, 4, 2, 1, 4, 2, 3, 1, 3, 2, 2, 5, 4, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 3, 2, 5, 3, 5, 3, 4, 2, 1, 5, 3, 4, 5, 3, 1, 2, 4, 5, '23', '23', '26', '23', '19', '27', 'CA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `via_questions`
--

CREATE TABLE IF NOT EXISTS `via_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assessment_id` int(11) NOT NULL,
  `Q_B_v1_q1` varchar(255) NOT NULL,
  `Q_B_v1_q2` varchar(255) NOT NULL,
  `Q_B_v1_q3` varchar(255) NOT NULL,
  `Q_B_v1_q4` varchar(255) NOT NULL,
  `Q_B_v1_q5` varchar(255) NOT NULL,
  `Q_B_v1_q6` varchar(255) NOT NULL,
  `Q_B_v1_q7` varchar(255) NOT NULL,
  `Q_B_v1_q8` varchar(255) NOT NULL,
  `Q_B_v1_q9` varchar(255) NOT NULL,
  `Q_B_v1_q10` varchar(255) NOT NULL,
  `Q_B_v1_q11` varchar(255) NOT NULL,
  `Q_B_v1_q12` varchar(255) NOT NULL,
  `Q_B_v1_q13` varchar(255) NOT NULL,
  `Q_B_v1_q14` varchar(255) NOT NULL,
  `Q_B_v1_q15` varchar(255) NOT NULL,
  `Q_B_v1_q16` varchar(255) NOT NULL,
  `Q_B_v1_q17` varchar(255) NOT NULL,
  `Q_B_v1_q18` varchar(255) NOT NULL,
  `Q_B_v1_q19` varchar(255) NOT NULL,
  `Q_B_v1_q20` varchar(255) NOT NULL,
  `Q_B_v1_q21` varchar(255) NOT NULL,
  `Q_B_v1_q22` varchar(255) NOT NULL,
  `Q_B_v1_q23` varchar(255) NOT NULL,
  `Q_B_v1_q24` varchar(255) NOT NULL,
  `Q_B_v1_q25` varchar(255) NOT NULL,
  `Q_B_v1_q26` varchar(255) NOT NULL,
  `Q_B_v1_q27` varchar(255) NOT NULL,
  `Q_B_v1_q28` varchar(255) NOT NULL,
  `Q_B_v1_q29` varchar(255) NOT NULL,
  `Q_B_v1_q30` varchar(255) NOT NULL,
  `Q_B_v1_q31` varchar(255) NOT NULL,
  `Q_B_v1_q32` varchar(255) NOT NULL,
  `Q_B_v1_q33` varchar(255) NOT NULL,
  `Q_B_v1_q34` varchar(255) NOT NULL,
  `Q_B_v1_q35` varchar(255) NOT NULL,
  `Q_B_v1_q36` varchar(255) NOT NULL,
  `Q_B_v1_q37` varchar(255) NOT NULL,
  `Q_B_v1_q38` varchar(255) NOT NULL,
  `Q_B_v1_q39` varchar(255) NOT NULL,
  `Q_B_v1_q40` varchar(255) NOT NULL,
  `Q_B_v1_q41` varchar(255) NOT NULL,
  `Q_B_v1_q42` varchar(255) NOT NULL,
  `Q_B_v1_q43` varchar(255) NOT NULL,
  `Q_B_v1_q44` varchar(255) NOT NULL,
  `Q_B_v1_q45` varchar(255) NOT NULL,
  `Q_B_v1_q46` varchar(255) NOT NULL,
  `Q_B_v1_q47` varchar(255) NOT NULL,
  `Q_B_v1_q48` varchar(255) NOT NULL,
  `Q_B_v1_q49` varchar(255) NOT NULL,
  `Q_B_v1_q50` varchar(255) NOT NULL,
  `Q_B_v1_q51` varchar(255) NOT NULL,
  `Q_B_v1_q52` varchar(255) NOT NULL,
  `Q_B_v1_q53` varchar(255) NOT NULL,
  `Q_B_v1_q54` varchar(255) NOT NULL,
  `Q_B_v1_q55` varchar(255) NOT NULL,
  `Q_B_v1_q56` varchar(255) NOT NULL,
  `Q_B_v1_q57` varchar(255) NOT NULL,
  `Q_B_v1_q58` varchar(255) NOT NULL,
  `Q_B_v1_q59` varchar(255) NOT NULL,
  `Q_B_v1_q60` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `via_questions`
--

INSERT INTO `via_questions` (`id`, `assessment_id`, `Q_B_v1_q1`, `Q_B_v1_q2`, `Q_B_v1_q3`, `Q_B_v1_q4`, `Q_B_v1_q5`, `Q_B_v1_q6`, `Q_B_v1_q7`, `Q_B_v1_q8`, `Q_B_v1_q9`, `Q_B_v1_q10`, `Q_B_v1_q11`, `Q_B_v1_q12`, `Q_B_v1_q13`, `Q_B_v1_q14`, `Q_B_v1_q15`, `Q_B_v1_q16`, `Q_B_v1_q17`, `Q_B_v1_q18`, `Q_B_v1_q19`, `Q_B_v1_q20`, `Q_B_v1_q21`, `Q_B_v1_q22`, `Q_B_v1_q23`, `Q_B_v1_q24`, `Q_B_v1_q25`, `Q_B_v1_q26`, `Q_B_v1_q27`, `Q_B_v1_q28`, `Q_B_v1_q29`, `Q_B_v1_q30`, `Q_B_v1_q31`, `Q_B_v1_q32`, `Q_B_v1_q33`, `Q_B_v1_q34`, `Q_B_v1_q35`, `Q_B_v1_q36`, `Q_B_v1_q37`, `Q_B_v1_q38`, `Q_B_v1_q39`, `Q_B_v1_q40`, `Q_B_v1_q41`, `Q_B_v1_q42`, `Q_B_v1_q43`, `Q_B_v1_q44`, `Q_B_v1_q45`, `Q_B_v1_q46`, `Q_B_v1_q47`, `Q_B_v1_q48`, `Q_B_v1_q49`, `Q_B_v1_q50`, `Q_B_v1_q51`, `Q_B_v1_q52`, `Q_B_v1_q53`, `Q_B_v1_q54`, `Q_B_v1_q55`, `Q_B_v1_q56`, `Q_B_v1_q57`, `Q_B_v1_q58`, `Q_B_v1_q59`, `Q_B_v1_q60`) VALUES
(27, 2, 'Drive a truck to deliver packages to offices and homes', 'Assemble electronic parts', 'Examine blood samples using a microscope', 'Investigate the cause of a fire', 'Create special effects for movies', 'Paint sets for plays', 'Do volunteer work at a non-profit organization', 'Teach children how to play sports', 'Start your own business', 'Negotiate business contracts', 'Keep shipping and receiving records', 'Calculate the wages of employees', 'Repair household appliances', 'Raise fish in a fish hatchery', 'Conduct chemical experiments', 'Study the movement of planets', 'Compose or arrange music', 'Draw pictures', 'Give career guidance to people', 'Perform rehabilitation therapy', 'Operate a beauty salon or barber shop', 'Manage a department within a large company', 'Load computer software into a large computer network', 'Operate a calculator', 'Build kitchen cabinets', 'Lay brick or tile', 'Develop a new medicine', 'Study ways to reduce water pollution', 'Write books or plays', 'Play a musical instrument', 'Teach an individual an exercise routine ', 'Help people with personal or emotional problems', 'Buy and sell stocks and bonds', 'Manage a retail store', 'Develop a spreadsheet using computer software', 'Proofread records or forms', 'Set up and operate machines to make products', 'Put out forest fires', 'Invent a replacement for sugar', 'Do laboratory tests to identify diseases', 'Sing in a band', 'Edit movies', 'Take care of children at a day-care center', 'Teach a high-school class', 'Sell merchandise at a department store', 'Manage a clothing store', 'Keep inventory records', 'Stamp, sort, and distribute mail for an organization', 'Test the quality of parts before shipment', 'Repair and install locks', 'Develop a way to better predict the weather', 'Work in a biology lab', 'Write scripts for movies or television shows', 'Perform jazz or tap dance', 'Teach sign language to people with hearing disabilities', 'Help conduct a group therapy session', 'Represent a client in a lawsuit', 'Market a new line of clothing', 'Inventory supplies using a hand-held computer', 'Record rent payments');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
