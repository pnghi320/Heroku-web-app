-- MySQL dump 10.13  Distrib 5.7.34, for osx10.12 (x86_64)
--
-- Host: localhost    Database: jokes
-- ------------------------------------------------------
-- Server version	5.7.34

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
-- Table structure for table `jokes_table`
--

DROP TABLE IF EXISTS `jokes_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jokes_table` (
  `JokeID` int(11) NOT NULL AUTO_INCREMENT,
  `Joke_question` varchar(500) NOT NULL,
  `Joke_answer` varchar(500) NOT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`JokeID`,`users_id`),
  KEY `fk_jokes_table_users_idx` (`users_id`),
  CONSTRAINT `fk_jokes_table_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jokes_table`
--

LOCK TABLES `jokes_table` WRITE;
/*!40000 ALTER TABLE `jokes_table` DISABLE KEYS */;
INSERT INTO `jokes_table` VALUES (1,'I invented a new word...','plagiarism',2),(2,'Why do ghosts love elevators?','It lifts their spirits.',1),(3,'If you are in a relationship, one person has to have good credit!','That\'s why it is called \"significant\" other .... sign-if-I-cant!',1),(4,'nia','tran',2),(5,'justin','epic baller',2),(6,'a joke','ur mum',1),(7,'a joke','ur mum',2),(8,'jkn','jnl',3),(9,'efvd','evfdc',3),(10,'sfvd','dfvc',3),(11,'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'sdf\'dsf\'\'sda\'fsdf\'sd\'sda\'\'fds\'ds\'\'d\'d\'d\'','f',5),(12,'add','1',5),(13,'sfvd','dfvc',3),(14,'new joke','ans',6),(15,'new joke','ans1',6),(16,'m','m',5),(17,'fd','cd',3),(18,'efsvd<script>alert(1);</script>','svdc',11),(19,'efsvd<script>alert(1);</script>','svdc',11),(20,'efsvd<script>alert(1);</script>','svdc',11),(21,'efsvd<script>alert(1);</script>','svdc',11),(22,'efsvd<script>alert(1);</script>','svdc',11),(23,'hjm','dc',11),(24,'plagiarism<script>alert(1);</script>','plagiarism<script>alert(1);</script>',11),(25,'rfds','f',11),(26,'rfds','f',11),(27,'test<script>alert(1);</script>','f',11),(28,'efd','f',11),(29,'efd','f',11),(30,'efd','f',11),(31,'efd<script>alert(1);</script>','f',11);
/*!40000 ALTER TABLE `jokes_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'shad','password'),(2,'bob','secret123'),(3,'efsdvc','123'),(4,'efds','123'),(5,'nghitran','123'),(6,'nghitran1','123'),(7,'efv','123'),(8,'hahah','123'),(9,'ttt','123!'),(10,'nghinghi','$2y$10$XhtSiKTdMIw4rHWuuWKczOmR5OJUXokVw6JZBDThB0kjl3hP5PUv2'),(11,'nghinghi1','$2y$10$GvE07YKtSdMUboJm9Ma.NeX8sfm53z/MuFv9tlSl5FDmiKlnJz2QS');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-01 23:26:32
