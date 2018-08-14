-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: magento_internship
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` text,
  `short_description` text,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `post_category` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (1,'Post 1','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"width: 200px; height: 200px; display: block; margin-left: auto; margin-right: auto;\"><img alt=\"\" src=\"{{media url=\'upload/IMG_20180712_203118.jpg\'}}\" style=\"width: 200px; height: 200px;\" /></p>','1st blog post',1,'2018-08-08 17:02:00',NULL,1),(2,'Post 2','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"width: 200px; height: 200px; display: block; margin-left: auto; margin-right: auto;\"><img alt=\"\" src=\"{{media url=\'upload/IMG_20180712_203118.jpg\'}}\" style=\"width: 200px; height: 200px;\" /></p>','Lorem ipsum dolor sit amet',1,'2018-08-09 22:08:00',NULL,1),(3,'Post 3','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.t</p>\r\n<p style=\"width: 200px; height: 200px; display: block; margin-left: auto; margin-right: auto;\"><img alt=\"\" src=\"{{media url=\'upload/IMG_20180712_203118.jpg\'}}\" style=\"width: 200px; height: 200px;\" /></p>','Lorem ipsum dolor sit amet',1,'2018-08-13 16:32:00',NULL,1),(4,'Post 4','<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>\r\n<p style=\"width: 200px; height: 200px; display: block; margin-left: auto; margin-right: auto;\"><img alt=\"\" src=\"{{media url=\'upload/IMG_20180712_203118.jpg\'}}\" style=\"width: 200px; height: 200px;\" /></p>','Lorem ipsum dolor sit amet',1,'2018-08-13 16:33:00',NULL,2),(5,'Post 5','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"width: 200px; height: 200px; display: block; margin-left: auto; margin-right: auto;\"><img alt=\"\" src=\"{{media url=\'upload/IMG_20180712_203118.jpg\'}}\" style=\"width: 200px; height: 200px;\" /></p>','Lorem ipsum dolor sit amet',1,'2018-08-13 18:58:00',NULL,2),(6,'Post 6','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"width: 200px; height: 200px; display: block; margin-left: auto; margin-right: auto;\"><img alt=\"\" src=\"{{media url=\'upload/IMG_20180712_203118.jpg\'}}\" style=\"width: 200px; height: 200px;\" /></p>','Lorem ipsum dolor sit amet',1,'2018-08-13 18:59:00',NULL,2),(7,'Post 7','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"width: 200px; height: 200px; display: block; margin-left: auto; margin-right: auto;\"><img alt=\"\" src=\"{{media url=\'upload/IMG_20180712_203118.jpg\'}}\" style=\"width: 200px; height: 200px;\" /></p>','Lorem ipsum dolor sit amet',1,'2018-08-13 18:59:00',NULL,3),(8,'Post 8','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"width: 200px; height: 200px; display: block; margin-left: auto; margin-right: auto;\"><img alt=\"\" src=\"{{media url=\'upload/IMG_20180712_203118.jpg\'}}\" style=\"width: 200px; height: 200px;\" /></p>','Lorem ipsum dolor sit amet',1,'2018-08-13 19:00:00',NULL,3),(9,'Post 9','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"width: 200px; height: 200px; display: block; margin-left: auto; margin-right: auto;\"><img alt=\"\" src=\"{{media url=\'upload/IMG_20180712_203118.jpg\'}}\" style=\"width: 200px; height: 200px;\" /></p>','Lorem ipsum dolor sit amet',1,'2018-08-13 19:00:00',NULL,3),(10,'Post 10','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"width: 200px; height: 200px; display: block; margin-left: auto; margin-right: auto;\"><img alt=\"\" src=\"{{media url=\'upload/IMG_20180712_203118.jpg\'}}\" style=\"width: 200px; height: 200px;\" /></p>','Lorem ipsum dolor sit amet',1,'2018-08-13 19:01:00',NULL,4),(11,'Post 11','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"width: 200px; height: 200px; display: block; margin-left: auto; margin-right: auto;\"><img alt=\"\" src=\"{{media url=\'upload/IMG_20180712_203118.jpg\'}}\" style=\"width: 200px; height: 200px;\" /></p>','Lorem ipsum dolor sit amet',1,'2018-08-13 19:01:00',NULL,4),(12,'Post 12','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"width: 200px; height: 200px; display: block; margin-left: auto; margin-right: auto;\"><img alt=\"\" src=\"{{media url=\'upload/IMG_20180712_203118.jpg\'}}\" style=\"width: 200px; height: 200px;\" /></p>','Lorem ipsum dolor sit amet',0,'2018-08-13 19:01:00',NULL,4);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-14 14:34:52
