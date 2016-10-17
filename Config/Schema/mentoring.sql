# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: Localhost (MySQL 5.6.21)
# Database: mentr
# Generation Time: 2015-05-15 15:32:06 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table mentorings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `mentorings`;

CREATE TABLE `mentorings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `describes` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `challenges` text,
  `occupations` text,
  `interested` text,
  `gender` int(11) DEFAULT NULL,
  `method` text,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `mentorings` WRITE;
/*!40000 ALTER TABLE `mentorings` DISABLE KEYS */;

INSERT INTO `mentorings` (`id`, `describes`, `year`, `challenges`, `occupations`, `interested`, `gender`, `method`, `user_id`)
VALUES
	(3,1,2,'1 = 1:::2 = 0:::3 = 0:::4 = 0:::5 = 0:::6 = 1:::7 = 0:::8 = 0:::9 = 0:::10 = 0:::11 = 0:::12 = 0:::13 = 0:::14 = 1:::Hola','Visi:::onWa:::re:::dos:::','test',2,'1:::3:::',2);

/*!40000 ALTER TABLE `mentorings` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
