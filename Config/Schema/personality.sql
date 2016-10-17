# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: Localhost (MySQL 5.6.21)
# Database: mentr
# Generation Time: 2015-05-22 22:29:12 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table personality
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personality`;

CREATE TABLE `personality` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `resilience` float DEFAULT NULL,
  `persuasiveness` float DEFAULT NULL,
  `organizational_skills` float DEFAULT NULL,
  `hardworking` float DEFAULT NULL,
  `positive_attitude` float DEFAULT NULL,
  `collaborative` float DEFAULT NULL,
  `leadership` float DEFAULT NULL,
  `assessment_id` int(11) DEFAULT NULL,
  `stress_management` float DEFAULT NULL,
  `overall` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `personality` WRITE;
/*!40000 ALTER TABLE `personality` DISABLE KEYS */;

INSERT INTO `personality` (`id`, `user_id`, `resilience`, `persuasiveness`, `organizational_skills`, `hardworking`, `positive_attitude`, `collaborative`, `leadership`, `assessment_id`, `stress_management`, `overall`)
VALUES
	(2,89,56.25,67.5,11.25,33.75,78.75,90,45,7,10,12),
	(3,1,33.75,67.5,0,33.75,33.75,10,25,7,0,25.4688);

/*!40000 ALTER TABLE `personality` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
