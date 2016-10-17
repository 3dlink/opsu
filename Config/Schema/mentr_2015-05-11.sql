# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: Localhost (MySQL 5.6.21)
# Database: mentr
# Generation Time: 2015-05-11 22:22:26 +0000
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
	(1,'Achievement'),
	(2,'Altruism'),
	(3,'Authority'),
	(4,'Beauty'),
	(5,'Competence'),
	(6,'Concern for Enviorenment'),
	(7,'Creativity'),
	(8,'Curiosity'),
	(9,'Daring'),
	(10,'Devoutness'),
	(11,'Discipline'),
	(12,'Enjoying Life'),
	(13,'Equality'),
	(14,'Excitement'),
	(15,'Family'),
	(16,'Freedom'),
	(17,'Friendship'),
	(18,'Health'),
	(19,'Honesty'),
	(20,'Humility'),
	(21,'Independence'),
	(22,'Inner Harmony'),
	(23,'Intelligence'),
	(24,'Justice'),
	(25,'Love'),
	(26,'Loyalty'),
	(27,'Meaning in Life'),
	(28,'Open-mindedness'),
	(29,'Peace'),
	(30,'Politeness'),
	(31,'Privacy'),
	(32,'Recognition'),
	(33,'Responsibility'),
	(34,'Security'),
	(35,'Self-respect'),
	(36,'Sense of Belonging'),
	(37,'Spirituality'),
	(38,'Success'),
	(39,'Traditions'),
	(40,'Variety'),
	(41,'Wealth'),
	(42,'Wisdom');

/*!40000 ALTER TABLE `personal_values` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
