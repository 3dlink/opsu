-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-02-2015 a las 15:46:13
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
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `title`, `excerpt`, `status`, `premium`, `main_img`, `square_img`, `created`, `modified`, `tags`, `text`, `active`) VALUES
(2, 'Articulo 1', 'Excerpt 1.1', 1, 1, 'img1424877114WVC.png', 'img142504591391A.jpeg', '2015-02-19 10:07:16', '2015-02-27 09:43:07', 'tags 1', '<p>texto 1</p>', 0),
(7, 'Articulo 1', 'Excerpt 1', 1, 0, 'img1', 'img1425045925JOT.png', '2015-02-23 10:30:15', '2015-02-27 09:05:26', 'tags', '<p>asdasdasd</p>', 1),
(8, 'Articulo 5', 'excerpt', 1, 1, 'asdasd', 'img1425045934B00.png', '2015-02-23 11:01:43', '2015-02-27 09:05:35', 'tags, asda, wew', '<p>asda</p>', 1),
(9, 'Titulo del articulo', 'excerpt del articulo', 1, 1, 'imagen 1', 'img1425045945O5Z.png', '2015-02-23 15:12:33', '2015-02-27 09:05:47', NULL, '<p>Este es un texto en&nbsp;<strong>negrita</strong></p>', 1),
(10, 'Articulo 6', 'Excerpt', 1, 1, 'asdasd', 'img1425045956G9O.png', '2015-02-23 16:14:01', '2015-02-27 09:05:59', NULL, '<p><strong>Negrita</strong></p>', 1),
(12, 'articulo 20', 'excertp 20', 1, 0, NULL, 'img1424876090TBH.jpeg', '2015-02-25 09:55:01', '2015-02-25 09:55:01', NULL, '<p>Este es un texto del articulo 20</p>', 1),
(13, 'articulo ahora si', 'excerpt ahora si ', 1, 1, 'img142487639074M.png', 'img1424876396ZK1.jpeg', '2015-02-25 10:00:31', '2015-02-25 10:00:31', NULL, '<p>ahora si funcionan las imagenes</p>', 1),
(14, 'qwerty', 'qwertyuiop', 1, 1, 'img14248783076I4.png', 'img14248783522P1.png', '2015-02-25 10:32:00', '2015-02-25 10:32:34', NULL, '<p>wertyuiopasdfghjk</p>', 1),
(15, 'ultimo', 'excerpt', 1, 1, 'img1424880155X32.png', 'img1424880160QEP.jpeg', '2015-02-25 11:02:45', '2015-02-25 11:02:45', NULL, '<p>jkdshfgskldfjg</p>', 1),
(16, 'este es un titulo muy largo para el articulo para ', 'nuevo', 1, 1, 'img1424897833VHR.png', 'img1424897843A7G.jpeg', '2015-02-25 15:57:45', '2015-02-27 09:23:11', NULL, '<p>hola mundo</p>', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
