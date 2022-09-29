-- MySQL dump 10.13  Distrib 5.7.39, for Linux (x86_64)
--
-- Host: localhost    Database: xxjyuser
-- ------------------------------------------------------
-- Server version	5.7.39-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `gmuser`
--

DROP TABLE IF EXISTS `gmuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gmuser` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gmuser`
--

LOCK TABLES `gmuser` WRITE;
/*!40000 ALTER TABLE `gmuser` DISABLE KEYS */;
INSERT INTO `gmuser` VALUES (1,'一个过客','kk123456','f9de56610053e7b59653dd0038e6152b');
/*!40000 ALTER TABLE `gmuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `o_user_list`
--

DROP TABLE IF EXISTS `o_user_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `o_user_list` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `m_id` varchar(5) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `n` int(11) NOT NULL DEFAULT '0' COMMENT '年',
  `y` int(11) NOT NULL DEFAULT '0' COMMENT '月',
  `r` int(11) NOT NULL DEFAULT '0' COMMENT '日',
  `s` int(11) NOT NULL DEFAULT '0' COMMENT '时',
  `f` int(11) NOT NULL DEFAULT '0' COMMENT '分',
  `m` int(11) NOT NULL DEFAULT '0' COMMENT '秒',
  `ma` text NOT NULL,
  `aqm` text NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `o_user_list`
--

LOCK TABLES `o_user_list` WRITE;
/*!40000 ALTER TABLE `o_user_list` DISABLE KEYS */;
INSERT INTO `o_user_list` VALUES (1,'0','一个过客','kk123456','f9de56610053e7b59653dd0038e6152b',2022,9,25,1,1,11,'4XWt4A4u8SuITXtUcNDYiQNWHm4vG4tq','a411eb68bae78b0059a34cd6c2939df6');
/*!40000 ALTER TABLE `o_user_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zem`
--

DROP TABLE IF EXISTS `zem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zem` (
  `id` int(11) NOT NULL,
  `zem` text NOT NULL,
  `sy` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zem`
--

LOCK TABLES `zem` WRITE;
/*!40000 ALTER TABLE `zem` DISABLE KEYS */;
/*!40000 ALTER TABLE `zem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'xxjyuser'
--

--
-- Dumping routines for database 'xxjyuser'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-25  1:12:44
