# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: Localhost (MySQL 5.6.21)
# Database: mentr
# Generation Time: 2015-06-18 21:48:45 +0000
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
  `like` int(11) DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `course_title` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `coursebyusers` WRITE;
/*!40000 ALTER TABLE `coursebyusers` DISABLE KEYS */;

INSERT INTO `coursebyusers` (`id`, `like`, `user_id`, `course_id`, `course_title`)
VALUES
	(1,0,1,1,'Problem-solving Strategies'),
	(2,0,1,2,'Creative Problem Solving and Decision Making'),
	(3,0,1,3,'Critical Thinking in Global Challenges'),
	(4,0,1,4,'The Science of Everyday Thinking'),
	(5,0,1,5,'Innovation Generation: How to Be Creative'),
	(6,0,1,6,'Work Smarter, Not Harder: Time Management for Personal & Professional Productivity'),
	(7,0,1,7,'Becoming a Resilient Person - The Science of Stress Management'),
	(8,0,1,8,'Personal Resilience in an Hour'),
	(9,0,1,9,'Introduction to Public Speaking'),
	(10,0,1,10,'Public Speaking & Communicating: Skip Theory, Master the Art'),
	(11,0,1,11,'Positivity Camp : Optimistic Approach To Empower Your Life'),
	(12,0,1,12,'The Science of Happiness'),
	(13,0,1,13,'Inclusive Leadership Training: Becoming a Successful Leader'),
	(14,0,1,14,'Stress Management');

/*!40000 ALTER TABLE `coursebyusers` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table courses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `course_title` varchar(150) DEFAULT '',
  `course_skill` varchar(150) DEFAULT '',
  `course_provider` varchar(150) DEFAULT '',
  `course_description` varchar(250) DEFAULT NULL,
  `course_link` text,
  `price` int(11) DEFAULT NULL,
  `gratis` int(11) DEFAULT NULL,
  `course_image` varchar(100) DEFAULT 'default.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;

INSERT INTO `courses` (`id`, `course_title`, `course_skill`, `course_provider`, `course_description`, `course_link`, `price`, `gratis`, `course_image`)
VALUES
	(1,'Problem-solving Strategies','Problem solving','Udemy','Adapt to every situation. Generate, evaluate, and choose between alternative courses of action','https://www.udemy.com/problem-solving-and-decision-making/?dtcode=znZhMiX37vl4',47,0,'default.jpg'),
	(2,'Creative Problem Solving and Decision Making','Problem solving','EDX - Delft University of Technology','Learn how to solve complex problems with analytics based decision-making and solution designs','https://www.edx.org/course/creative-problem-solving-decision-making-delftx-tpm1x',0,1,'default.jpg'),
	(3,'Critical Thinking in Global Challenges','Creative Thinking','Coursera - The University of Edinburgh','Develop and enhance your ability to think critically, assess information and develop reasoned arguments in the context of the global challenges facing society today','https://www.coursera.org/course/criticalthinking',0,1,'default.jpg'),
	(4,'The Science of Everyday Thinking','Creative Thinking','EDX - The University of Queensland','Learn how to think better, argue better, and choose better','https://www.edx.org/course/science-everyday-thinking-uqx-think101x',0,1,'default.jpg'),
	(5,'Innovation Generation: How to Be Creative','Creative Thinking','EDX - University of Texas','Learn from a renowned innovation expert how to spark your creativity. This proven method will make you more open-minded and productive','https://www.edx.org/course/innovation-generation-how-be-creative-uthealthsphx-inov101x',0,1,'default.jpg'),
	(6,'Work Smarter, Not Harder: Time Management for Personal & Professional Productivity','Time management','Coursera - University of California','Overcome time management challenges and enhance productivity','https://www.coursera.org/learn/work-smarter-not-harder',0,1,'default.jpg'),
	(7,'Becoming a Resilient Person - The Science of Stress Management','Resilience','EDX - University of Washinton','This course gives you the permission to take care of yourself by learning the skills to manage stress and optimize wellbeing','https://www.edx.org/course/becoming-resilient-person-science-stress-uwashingtonx-ecfs311x-0',0,1,'default.jpg'),
	(8,'Personal Resilience in an Hour','Resilience','Udemy','Resilience Skills help you move from stress, depression and anxiety towards happiness, fulfilment and life satisfaction','https://www.udemy.com/personal-resilience-in-an-hour/?dtcode=fa2RGRC37vTR',32,0,'default.jpg'),
	(9,'Introduction to Public Speaking','Persuasiveness','EDX - University of Washinton','Study the principles of public speaking, and critically examine our own and others? speeches through interactive practice','https://www.edx.org/course/introduction-public-speaking-uwashingtonx-comm220x2',0,1,'default.jpg'),
	(10,'Public Speaking & Communicating: Skip Theory, Master the Art','Persuasiveness','Udemy','An unconventional approach to the proven Public Speaking & Communicating method known as Sparkwords. Used by Thousands','https://www.udemy.com/sparkwords/?dtcode=Ji8KNbL37w0C',497,0,'default.jpg'),
	(11,'Positivity Camp : Optimistic Approach To Empower Your Life','Positive attitude','Udemy','Master the secret weapon of optimism and positive thinking to succeed in the world out there!','https://www.udemy.com/positivity-camp-optimistic-approach-to-empower-your-life/?dtcode=01wv12Y37w3I',0,1,'default.jpg'),
	(12,'The Science of Happiness','Positive attitude','EDX - Berkeley','Learn science-based principles and practices for a happy, meaningful life','https://www.edx.org/course/science-happiness-uc-berkeleyx-gg101x-1#!',0,1,'default.jpg'),
	(13,'Inclusive Leadership Training: Becoming a Successful Leader','Leadership','EDX - Catalyst','Become a successful leader by learning 21st-century leadership skills and applying concepts to the real world','https://www.edx.org/course/inclusive-leadership-training-becoming-catalystx-il2x',0,1,'default.jpg'),
	(14,'Stress Management','Stress management','Udemy','Stress Management inside out. How to get rid of stress in 7 days','https://www.udemy.com/stressed-to-relaxed-in-7-days/?dtcode=k8vRivD37whi',67,0,'default.jpg');

/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
