# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.24)
# Database: mentr
# Generation Time: 2015-06-29 13:13:49 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table states
# ------------------------------------------------------------

DROP TABLE IF EXISTS `states`;

CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;

INSERT INTO `states` (`id`, `name`)
VALUES
	(2,'Alabama'),
	(3,'Alaska'),
	(4,'Arizona'),
	(5,'Arkansas'),
	(6,'California'),
	(7,'Colorado'),
	(8,'Connecticut'),
	(9,'Delaware'),
	(10,'District of Columbia'),
	(11,'Florida'),
	(12,'Georgia'),
	(13,'Hawaii'),
	(14,'Idaho'),
	(15,'Illinois'),
	(16,'Indiana'),
	(17,'Iowa'),
	(18,'Kansas'),
	(19,'Kentucky'),
	(20,'Louisiana'),
	(21,'Maine'),
	(22,'Maryland'),
	(23,'Massachusetts'),
	(24,'Michigan'),
	(25,'Minnesota'),
	(26,'Mississippi'),
	(27,'Missouri'),
	(28,'Montana'),
	(29,'Nebraska'),
	(30,'Nevada'),
	(31,'New Hampshire'),
	(32,'New Jersey'),
	(33,'New Mexico'),
	(34,'New York'),
	(35,'North Carolina'),
	(36,'North Dakota'),
	(37,'Ohio'),
	(38,'Oklahoma'),
	(39,'Oregon'),
	(40,'Pennsylvania'),
	(41,'Rhode Island'),
	(42,'South Carolina'),
	(43,'South Dakota'),
	(44,'Tennessee'),
	(45,'Texas'),
	(46,'Utah'),
	(47,'Vermont'),
	(48,'Virginia'),
	(49,'Washington'),
	(50,'West Virginia'),
	(51,'Wisconsin'),
	(52,'Wyoming'),
	(53,'Guam'),
	(54,'Puerto Rico'),
	(55,'Virgin Islands'),
	(1,'Outside US');

/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
