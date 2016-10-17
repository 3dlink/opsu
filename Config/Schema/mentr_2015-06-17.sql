# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: Localhost (MySQL 5.6.21)
# Database: mentr
# Generation Time: 2015-06-17 20:50:37 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table education
# ------------------------------------------------------------

DROP TABLE IF EXISTS `education`;

CREATE TABLE `education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `education` WRITE;
/*!40000 ALTER TABLE `education` DISABLE KEYS */;

INSERT INTO `education` (`id`, `name`, `description`)
VALUES
	(1,'<1','Less than a High school diploma'),
	(2,'<8','Less than a High school diploma'),
	(3,'<12','Less than a High school diploma'),
	(4,'high school','High school diploma / GED'),
	(5,'some college','Some college'),
	(6,'associate','Associate’s degree'),
	(7,'bachelor','Bachelor’s degree'),
	(8,'master','Master’s degree'),
	(9,'professional school','Post-master’s certificate'),
	(10,'doctorate','Doctorate'),
	(11,'Post-Doctoral Training','Post-Doctoral Training'),
	(12,'','J.D.'),
	(13,NULL,'Ed.D.'),
	(14,NULL,'Ph.D'),
	(15,NULL,'Executive Master of Business Administration'),
	(16,NULL,'Master of Arts'),
	(17,NULL,'Master of Business Administration'),
	(18,NULL,'Master of Education'),
	(19,NULL,'Master of Fine Arts'),
	(20,NULL,'Master of Science'),
	(21,NULL,'Bachelor of Arts'),
	(22,NULL,'Bachelor of Science');

/*!40000 ALTER TABLE `education` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
