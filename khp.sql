-- MySQL dump 10.13  Distrib 5.5.15, for Win64 (x86)
--
-- Host: localhost    Database: khp
-- ------------------------------------------------------
-- Server version	5.5.15

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
-- Table structure for table `codifier_divisions`
--

DROP TABLE IF EXISTS `codifier_divisions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `codifier_divisions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='InnoDB free: 11264 kB';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `codifier_divisions`
--

LOCK TABLES `codifier_divisions` WRITE;
/*!40000 ALTER TABLE `codifier_divisions` DISABLE KEYS */;
INSERT INTO `codifier_divisions` VALUES (1,'ПДО'),(2,'ТОМО'),(3,'12/1'),(4,'12/2'),(5,'12/3'),(6,'12/7');
/*!40000 ALTER TABLE `codifier_divisions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `codifier_instr`
--

DROP TABLE IF EXISTS `codifier_instr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `codifier_instr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `numstart` int(11) DEFAULT NULL,
  `numend` int(11) DEFAULT NULL,
  `sokr` char(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `codifier_instr`
--

LOCK TABLES `codifier_instr` WRITE;
/*!40000 ALTER TABLE `codifier_instr` DISABLE KEYS */;
INSERT INTO `codifier_instr` VALUES (1,'ММ',0,0,'ММ'),(2,'Электрод',7680,7857,'Э'),(3,'Шаблон',8370,9999,'Ш'),(4,'Калибр',8130,8369,'Ка'),(5,'Резец',2199,2298,'Р'),(6,'Фреза',2299,2299,'Ф'),(7,'Копир-модель',7054,7098,'КпМ'),(8,'Приспособление',7099,7308,'П'),(9,'Зенкер',2339,2398,'З'),(10,'Развёртка',2399,2798,'Рз'),(11,'Оправка',6299,7053,'О'),(12,'Ролик',7990,8129,'Рол'),(13,'Сверло',2300,2338,'С'),(14,'Кондуктор',7309,7679,'К'),(15,'Притир',2799,6298,'Пт'),(16,'Давильник',1479,1498,'Д'),(17,'Прессформа',1499,1548,'Пф'),(18,'ЭХО',793,798,'ЭХО'),(19,'Просечка',1549,2198,'Пр'),(20,'Тара',1039,1478,'Т'),(21,'Клеймо',7858,7989,'Кл'),(22,'Разное (терм)',799,1038,'Ра');
/*!40000 ALTER TABLE `codifier_instr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `codifier_tasks`
--

DROP TABLE IF EXISTS `codifier_tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `codifier_tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `division_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_division` (`division_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='InnoDB free: 11264 kB';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `codifier_tasks`
--

LOCK TABLES `codifier_tasks` WRITE;
/*!40000 ALTER TABLE `codifier_tasks` DISABLE KEYS */;
INSERT INTO `codifier_tasks` VALUES (1,'Технологическая проработка',2),(2,'Заказ материалов',1),(3,'Изготовление',3),(4,'Программы ЧПУ',2);
/*!40000 ALTER TABLE `codifier_tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) DEFAULT NULL,
  `status` char(10) DEFAULT NULL,
  `detalavto` varchar(30) DEFAULT NULL,
  `nazvdet` varchar(50) DEFAULT NULL,
  `nosnas` varchar(30) DEFAULT NULL,
  `nizv` varchar(15) DEFAULT NULL,
  `kodinstr` varchar(30) DEFAULT NULL,
  `nizvins` varchar(15) DEFAULT NULL,
  `osin` char(1) DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `text` text,
  PRIMARY KEY (`id`),
  KEY `number` (`number`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,NULL,NULL,'2121-00000001','электрод','123-4567-9012-001','111','890-7680-1234-001',NULL,NULL,NULL,NULL,NULL),(2,NULL,NULL,'2121-00000001','шаблон','123-4567-8901','111','890-8372-4567-002',NULL,NULL,NULL,NULL,NULL),(3,NULL,NULL,'2121-00000001','шаблон','123-4567-8901','111','890-8373-1234-001',NULL,NULL,NULL,NULL,NULL),(16,NULL,NULL,'','Электрод','','','890-7680-1237','',NULL,NULL,NULL,NULL),(6,NULL,NULL,'','Электрод','','','890-7680-1235','',NULL,NULL,NULL,NULL),(7,NULL,NULL,'','Шаблон','','','890-8373-1235','',NULL,NULL,NULL,NULL),(8,NULL,NULL,'','Электрод','','','890-7680-1235','',NULL,NULL,NULL,NULL),(9,NULL,NULL,'','Шаблон','','','890-8373-1235','',NULL,NULL,NULL,NULL),(10,NULL,NULL,'','Электрод','','','890-7680-1235','',NULL,NULL,NULL,NULL),(14,NULL,NULL,'','Электрод','','','890-7680-1236','',NULL,NULL,NULL,NULL),(12,NULL,NULL,'','Электрод','','','890-7680-1236','',NULL,NULL,NULL,NULL),(13,NULL,NULL,'','Электрод','','','890-7680-1236','',NULL,NULL,NULL,NULL),(15,NULL,NULL,'','Электрод','','','890-7680-1236','',NULL,NULL,NULL,NULL),(31,NULL,NULL,'','Электрод','','','890-7680-1240','',NULL,NULL,NULL,NULL),(25,NULL,NULL,'','Шаблон','','','890-8373-1236','',NULL,NULL,NULL,NULL),(26,NULL,NULL,'','Электрод','','','890-7680-1238','',NULL,NULL,NULL,NULL),(27,NULL,NULL,'','Электрод','','','890-7680-1239','',NULL,NULL,NULL,NULL),(28,NULL,NULL,'','Шаблон','','','890-8373-1237','',NULL,NULL,NULL,NULL),(29,NULL,NULL,'','Шаблон','','','890-8373-1238','',NULL,NULL,NULL,NULL),(30,NULL,NULL,'','Шаблон','','','890-8373-1239','',NULL,NULL,NULL,NULL),(32,NULL,NULL,'','Электрод','','','890-7680-1241','',NULL,NULL,NULL,NULL),(33,NULL,NULL,'','Электрод','','','890-7680-1242','',NULL,NULL,NULL,NULL),(34,NULL,NULL,'','Электрод','','','890-7680-1243','',NULL,NULL,NULL,NULL),(35,NULL,NULL,'','Электрод','','','890-7680-1244','',NULL,NULL,NULL,NULL),(36,NULL,NULL,'','Электрод','','','890-7680-1244','',NULL,NULL,NULL,NULL),(37,NULL,NULL,'','Электрод','','','890-7680-1245','',NULL,NULL,NULL,NULL),(38,NULL,NULL,'','Электрод','','','890-7680-1246','',NULL,NULL,NULL,NULL),(39,NULL,NULL,'','Шаблон','','','890-8373-1240','',NULL,NULL,NULL,NULL),(40,NULL,NULL,'','Электрод','','','890-7680-1247','',NULL,NULL,NULL,NULL),(41,NULL,NULL,'','Шаблон','','','890-8373-1241','',NULL,NULL,NULL,NULL),(42,NULL,NULL,'','Электрод','','','890-7680-1248','',NULL,NULL,NULL,NULL),(44,7,NULL,'','Электрод','','','890-7680-1250','',NULL,NULL,NULL,NULL),(45,5,NULL,'','Электрод','','','890-7680-1251','',NULL,NULL,NULL,NULL),(46,5,NULL,'','Шаблон','','','890-8373-1242','',NULL,NULL,NULL,NULL),(48,6,NULL,'','Электрод','','','890-7680-1252','',NULL,NULL,NULL,NULL),(50,5,NULL,'','Электрод','','','890-7680-1253','',NULL,NULL,NULL,NULL),(52,NULL,NULL,'','Электрод','','','890-7680-1254','',NULL,NULL,NULL,NULL),(53,NULL,NULL,'','Электрод','','','890-7680-1255','',NULL,NULL,NULL,NULL),(54,5,NULL,'','Электрод','','','890-7680-1256','',NULL,NULL,NULL,NULL),(55,5,NULL,'','Электрод','','','890-7680-1257','',NULL,NULL,NULL,NULL),(56,5,NULL,'','Электрод','','','890-7680-1258','',NULL,NULL,NULL,NULL),(57,4,NULL,'','Электрод','','','890-7680-1259','',NULL,NULL,NULL,NULL),(58,3,NULL,'','Электрод','','','890-7680-1260','',NULL,NULL,NULL,NULL),(59,3,NULL,'','Электрод','','','890-7680-1261','',NULL,NULL,NULL,NULL),(70,1,NULL,'','Электрод','','','890-7680-1263','',NULL,NULL,NULL,NULL),(69,2,NULL,'','Электрод','','','890-7680-1262','',NULL,NULL,NULL,NULL),(72,NULL,NULL,'','Электрод','','','890-7680-1264','',NULL,NULL,NULL,NULL),(73,NULL,NULL,'','Электрод','','','890-7680-1265','',NULL,NULL,NULL,NULL),(75,NULL,NULL,'1','1','3','','','',NULL,NULL,NULL,'проверка'),(76,NULL,NULL,'1','1','4','','','',NULL,NULL,NULL,'Абырвалг'),(77,8,NULL,'1','2111','5','','','',NULL,NULL,NULL,'Текст'),(78,NULL,NULL,'','Электрод','','','890-7680-1266','',NULL,NULL,NULL,'');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `prod_view`
--

DROP TABLE IF EXISTS `prod_view`;
/*!50001 DROP VIEW IF EXISTS `prod_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `prod_view` (
  `id` int(11),
  `name` varchar(50),
  `code` varchar(50),
  `type` varchar(50)
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parrent_id` int(11) NOT NULL DEFAULT '0',
  `type_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='InnoDB free: 11264 kB';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,0,1,'Матрица','890-7680-1234-001'),(2,1,2,'Электрод','856-1234-5678'),(3,0,1,'Пуансон','890-7680-1234-003'),(4,1,2,'Шаблон','856-1235-5678');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_types`
--

DROP TABLE IF EXISTS `products_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='InnoDB free: 11264 kB';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_types`
--

LOCK TABLES `products_types` WRITE;
/*!40000 ALTER TABLE `products_types` DISABLE KEYS */;
INSERT INTO `products_types` VALUES (1,'Оснастка'),(2,'И2П');
/*!40000 ALTER TABLE `products_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codifier_id` int(11) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='InnoDB free: 11264 kB';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
INSERT INTO `tasks` VALUES (1,1,'2011-12-21 00:00:00',NULL,1,1),(2,2,NULL,NULL,2,1),(3,3,NULL,NULL,3,1),(4,1,NULL,NULL,1,2),(5,4,NULL,NULL,2,2),(6,3,NULL,NULL,3,2),(7,2,NULL,NULL,4,2);
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `tasksview`
--

DROP TABLE IF EXISTS `tasksview`;
/*!50001 DROP VIEW IF EXISTS `tasksview`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `tasksview` (
  `task_id` int(11),
  `start` datetime,
  `end` datetime,
  `number` int(11),
  `taskname` varchar(50),
  `name` varchar(50),
  `productid` int(11),
  `code` varchar(50)
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(10) NOT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `rang` varchar(50) DEFAULT NULL,
  `f` varchar(25) DEFAULT NULL,
  `i` varchar(25) DEFAULT NULL,
  `o` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `prod_view`
--

/*!50001 DROP TABLE IF EXISTS `prod_view`*/;
/*!50001 DROP VIEW IF EXISTS `prod_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = cp1251 */;
/*!50001 SET character_set_results     = cp1251 */;
/*!50001 SET collation_connection      = cp1251_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `prod_view` AS select `products`.`id` AS `id`,`products`.`name` AS `name`,`products`.`code` AS `code`,`products_types`.`name` AS `type` from (`products` left join `products_types` on((`products`.`type_id` = `products_types`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `tasksview`
--

/*!50001 DROP TABLE IF EXISTS `tasksview`*/;
/*!50001 DROP VIEW IF EXISTS `tasksview`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = cp1251 */;
/*!50001 SET character_set_results     = cp1251 */;
/*!50001 SET collation_connection      = cp1251_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `tasksview` AS select `tasks`.`id` AS `task_id`,`tasks`.`start` AS `start`,`tasks`.`end` AS `end`,`tasks`.`number` AS `number`,`codifier_tasks`.`name` AS `taskname`,`products`.`name` AS `name`,`products`.`id` AS `productid`,`products`.`code` AS `code` from ((`tasks` left join `codifier_tasks` on((`tasks`.`codifier_id` = `codifier_tasks`.`id`))) left join `products` on((`tasks`.`product_id` = `products`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-03-18 10:02:37
