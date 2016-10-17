# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: Localhost (MySQL 5.6.21)
# Database: mentr
# Generation Time: 2015-06-01 15:05:27 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table coursebyusers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `coursebyusers`;

CREATE TABLE `coursebyusers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `like` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `course_title` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `coursebyusers` WRITE;
/*!40000 ALTER TABLE `coursebyusers` DISABLE KEYS */;

INSERT INTO `coursebyusers` (`id`, `like`, `user_id`, `course_id`, `course_title`)
VALUES
	(1,1,1,1,NULL),
	(2,NULL,1,2,NULL),
	(3,NULL,1,4,NULL),
	(4,NULL,1,5,NULL),
	(5,NULL,1,6,NULL),
	(6,NULL,1,7,NULL),
	(7,NULL,1,1,NULL),
	(8,NULL,1,2,NULL),
	(9,NULL,1,4,NULL),
	(10,NULL,1,5,NULL),
	(11,NULL,1,6,NULL),
	(12,NULL,1,7,NULL),
	(13,NULL,1,1,0),
	(14,NULL,1,2,0),
	(15,NULL,1,4,0),
	(16,NULL,1,5,0),
	(17,NULL,1,6,0),
	(18,NULL,1,7,0);

/*!40000 ALTER TABLE `coursebyusers` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
