# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: Localhost (MySQL 5.6.21)
# Database: mentr
# Generation Time: 2015-05-05 23:58:58 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table personal_values
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personal_values`;

CREATE TABLE `personal_values` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `personal_values` WRITE;
/*!40000 ALTER TABLE `personal_values` DISABLE KEYS */;

INSERT INTO `personal_values` (`id`, `name`)
VALUES
	(1,'Abundance'),
	(2,'Abundance'),
	(3,'Abundance'),
	(4,'Open-mindedness'),
	(5,'Open-mindedness'),
	(6,'Open-mindedness'),
	(7,'Understanding'),
	(8,'Understanding'),
	(9,'Understanding'),
	(10,'Reputation'),
	(11,'Reputation'),
	(12,'Reputation'),
	(13,'Justice'),
	(14,'Justice'),
	(15,'Justice'),
	(16,'Abundance'),
	(17,'Abundance'),
	(18,'Abundance'),
	(19,'Open-mindedness'),
	(20,'Open-mindedness'),
	(21,'Open-mindedness'),
	(22,'Understanding'),
	(23,'Understanding'),
	(24,'Understanding'),
	(25,'Reputation'),
	(26,'Reputation'),
	(27,'Reputation'),
	(28,'Justice'),
	(29,'Justice'),
	(30,'Justice'),
	(31,'Abundance'),
	(32,'Abundance'),
	(33,'Abundance'),
	(34,'Open-mindedness'),
	(35,'Open-mindedness'),
	(36,'Open-mindedness'),
	(37,'Understanding'),
	(38,'Understanding'),
	(39,'Understanding'),
	(40,'Reputation'),
	(41,'Reputation'),
	(42,'Reputation'),
	(43,'Justice'),
	(44,'Justice'),
	(45,'Justice');

/*!40000 ALTER TABLE `personal_values` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table top_personal_values
# ------------------------------------------------------------

DROP TABLE IF EXISTS `top_personal_values`;

CREATE TABLE `top_personal_values` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `p1` varchar(11) DEFAULT NULL,
  `p2` varchar(11) DEFAULT NULL,
  `p3` varchar(11) DEFAULT NULL,
  `p4` varchar(11) DEFAULT NULL,
  `p5` varchar(11) DEFAULT NULL,
  `p6` varchar(11) DEFAULT NULL,
  `p7` varchar(11) DEFAULT NULL,
  `p8` varchar(11) DEFAULT NULL,
  `p9` varchar(11) DEFAULT NULL,
  `p10` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `top_personal_values` WRITE;
/*!40000 ALTER TABLE `top_personal_values` DISABLE KEYS */;

INSERT INTO `top_personal_values` (`id`, `user_id`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`)
VALUES
	(1,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `top_personal_values` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
