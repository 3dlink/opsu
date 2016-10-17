# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: Localhost (MySQL 5.6.21)
# Database: mentr
# Generation Time: 2015-04-30 00:48:20 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table courses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `course_title` varchar(150) DEFAULT '',
  `course_skill` varchar(150) DEFAULT '',
  `course_provider` varchar(150) DEFAULT '',
  `course_description` varchar(150) DEFAULT NULL,
  `course_link` text,
  `price` int(11) DEFAULT NULL,
  `gratis` int(11) DEFAULT NULL,
  `course_image` varchar(100) DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;

INSERT INTO `courses` (`id`, `course_title`, `course_skill`, `course_provider`, `course_description`, `course_link`, `price`, `gratis`, `course_image`, `like`)
VALUES
	(1,'Inclusive Leadership Training <br /> Becoming a Successful Leader','Creative Thinking','EDX - Harvard','Learn 21st-century leadership skills, apply concepts to real-world situations and start your journey to the next level of leadership.',NULL,0,1,'backCourse1.jpg',1),
	(2,'Inclusive Leadership Training <br /> Becoming a Successful Leader','Creative Thinking','EDX - Harvard','Learn 21st-century leadership skills, apply concepts to real-world situations and start your journey to the next level of leadership.',NULL,190,0,'backCourse1.jpg',1),
	(4,'Inclusive Leadership Training <br /> Becoming a Successful Leader','Creative Thinking','EDX - Harvard','Learn 21st-century leadership skills, apply concepts to real-world situations and start your journey to the next level of leadership.',NULL,0,1,'backCourse1.jpg',0),
	(5,'Inclusive Leadership Training <br /> Becoming a Successful Leader','Creative Thinking','EDX - Harvard','Learn 21st-century leadership skills, apply concepts to real-world situations and start your journey to the next level of leadership.',NULL,200,0,'backCourse2.jpg',0),
	(6,'Inclusive Leadership Training <br /> Becoming a Successful Leader','Creative Thinking','EDX - Harvard','Learn 21st-century leadership skills, apply concepts to real-world situations and start your journey to the next level of leadership.',NULL,200,0,'backCourse1.jpg',0),
	(7,'Inclusive Leadership Training <br /> Becoming a Successful Leader','Creative Thinking','EDX - Harvard','Learn 21st-century leadership skills, apply concepts to real-world situations and start your journey to the next level of leadership.',NULL,0,1,'backCourse2.jpg',0);

/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
