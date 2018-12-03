-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `isdeleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Computers','Computers and PCs',0,'2017-06-22 09:21:52','2017-06-22 09:21:52'),(2,'Mobiles','Mobile Phones and Phablets',0,'2017-06-22 09:23:28','2017-06-22 09:23:28'),(3,'Laptops',NULL,0,'2017-06-22 09:23:37','2017-06-22 09:23:37'),(4,'TVs',NULL,0,'2017-06-22 09:23:51','2017-06-22 09:23:51'),(5,'Tablets',NULL,0,'2017-06-22 09:24:11','2017-06-22 09:24:11');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (9,'2014_10_12_000000_create_users_table',1),(10,'2014_10_12_100000_create_password_resets_table',1),(11,'2017_06_21_233320_create_categories_table',1),(12,'2017_06_22_011634_create_products_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `quantity` int(10) unsigned NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `category_id` int(11) NOT NULL,
  `isdeleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'iphone 7',700000,7,'iphone 7 is great',NULL,2,0,'2017-06-22 09:26:02','2017-06-22 13:03:50'),(2,'HP Pavillion 13',3000000000,30,'HP Paviilion',NULL,3,0,'2017-06-22 09:27:37','2017-06-22 13:03:51'),(3,'Samsung smart TV',13000000,3,'Samsung smart TV with smart controls',NULL,4,0,'2017-06-22 09:33:48','2017-06-22 12:11:26'),(6,'IPad 2',2000000000,20,'IPad 2 IPad 2 IPad 2 IPad 2 IPad 2 IPad 2',NULL,5,0,'2017-06-22 10:07:13','2017-06-22 12:07:56'),(7,'Note 7',7000000,1,'Note 7 Note 7 Note 7 Note 7 Note 7 Note 7 Note 7',NULL,2,0,'2017-06-22 12:33:23','2017-06-22 12:33:23'),(8,'Sony Xperia Z3',400000000,70,'Sony Xperia Z3 Sony Xperia Z3 Sony Xperia Z3 Sony Xperia Z3',NULL,2,0,'2017-06-22 12:41:00','2017-06-22 12:41:00'),(10,'LG TV LCD Screen',1100000,200,'LG TV LG TV LG TV LG TV',NULL,4,0,'2017-06-22 12:42:23','2017-06-22 12:42:23'),(54,'PS 4',1312321,13,'PS 4 PS 4 PS 4 PS 4 PS 4 PS 4 PS 4 PS 4 PS 4 PS 4 PS 4 PS 4',NULL,3,0,'2017-06-22 14:44:06','2017-06-22 15:12:57'),(56,'new product kl',342,32,'fwsdf',NULL,1,0,'2017-06-22 14:45:23','2017-06-22 15:12:51'),(57,'new new nfds',42,45,'gtj',NULL,1,0,'2017-06-22 15:08:53','2017-06-22 15:09:08'),(59,'Note 3',30000000,11,'Note 3 Note 3 Note 3 Note 3 Note 3 Note 3 Note 3 Note 3 Note 3 Note 3 Note 3 Note 3 Note 3 Note 3','public/ut3PABUh3mKOJ6IvBt6xk3doYCL0jHf2DxyowYzq.jpeg',2,0,'2017-06-22 17:04:36','2017-06-22 17:18:23'),(60,'Iphone',3222,34,'fddsfew','public/MW5T1ybsuouIT9pY7J9KF36boUoXPmXRH6nTIAUX.jpeg',2,0,'2017-06-22 17:38:59','2017-06-22 17:38:59'),(61,'TV',34233333,32,'fdslkfjpfk','public/f4XhOZbLm4uNZ997jw4kK6CT6Zdfnnpog76b4d2n.jpeg',4,1,'2017-06-22 17:40:17','2017-06-22 17:40:31');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'amira','amira@gmail.com','$2y$10$L5z2jjqM4lF59ejnhaAca.VsbzaB1Ycqxs3H2NyUBSU7aLqGZ7OAy','0mH4oknx7GLJy20bSzTUTIpEmolqPibyhjCMLgPE5TXEtG5QJorVtJbxpWui','2017-06-22 10:36:19','2017-06-22 10:36:19');
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

-- Dump completed on 2017-06-22 22:06:59
