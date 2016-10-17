# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.21)
# Database: vision_mentr
# Generation Time: 2015-05-18 05:49:12 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Pyramid_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Pyramid_users`;

CREATE TABLE `Pyramid_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `top1` text,
  `top2` text,
  `top3` text,
  `top4` text,
  `top5` text,
  `top6` text,
  `top7` text,
  `top8` text,
  `top9` text,
  `top10` text,
  `top11` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Pyramid_users` WRITE;
/*!40000 ALTER TABLE `Pyramid_users` DISABLE KEYS */;

INSERT INTO `Pyramid_users` (`id`, `user_id`, `top1`, `top2`, `top3`, `top4`, `top5`, `top6`, `top7`, `top8`, `top9`, `top10`, `top11`)
VALUES
	(4,2,'\n									q								','\n									asasd								','sdfre','sv','fyct5red','gtfedcws','asdg','','fvsers','hgfcdxs','');

/*!40000 ALTER TABLE `Pyramid_users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
