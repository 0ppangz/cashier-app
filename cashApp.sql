/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.8.2-MariaDB, for Android (aarch64)
--
-- Host: localhost    Database: cashApp
-- ------------------------------------------------------
-- Server version	11.8.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namaBarang` text DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `tgl` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `items` VALUES
(1,'nabati keju',NULL,NULL,'2026-02-25 14:02:51'),
(2,NULL,NULL,NULL,'2026-02-25 14:15:18'),
(3,'nasi goreng',10000,NULL,'2026-02-25 14:16:51'),
(4,'nasi goreng',10000,NULL,'2026-02-25 14:18:27'),
(5,'mie ayam',10000,NULL,'2026-02-25 14:18:30'),
(6,'nabati keju',10000,NULL,'2026-02-26 03:33:09'),
(7,'es teh manis',10000,NULL,'2026-02-26 03:33:11'),
(8,'es teh manis',10000,NULL,'2026-02-26 03:33:11'),
(9,'mie ayam',10000,NULL,'2026-02-26 03:33:12'),
(10,'es teh manis',10000,NULL,'2026-02-26 03:33:12'),
(11,'nasi goreng',10000,NULL,'2026-02-26 03:33:12'),
(12,'nabati keju',10000,NULL,'2026-02-26 03:33:13'),
(13,'nabati keju',10000,NULL,'2026-02-26 07:08:00'),
(14,'nasi goreng',10000,NULL,'2026-02-26 07:08:01'),
(15,'nabati keju',10000,NULL,'2026-02-26 07:08:04'),
(16,'es teh manis',10000,NULL,'2026-02-26 07:08:07'),
(17,'nasi goreng',10000,NULL,'2026-02-26 07:08:08'),
(18,'mie ayam',10000,NULL,'2026-02-26 07:08:09'),
(19,'nabati keju',10000,NULL,'2026-02-26 07:08:10'),
(20,'nabati keju',10000,NULL,'2026-02-26 07:12:25'),
(21,'nasi goreng',10000,NULL,'2026-02-26 07:12:26'),
(22,'nabati keju',10000,NULL,'2026-02-26 07:12:40'),
(23,'nasi goreng',10000,NULL,'2026-02-26 07:12:41'),
(24,'nabati keju',10000,NULL,'2026-02-26 07:12:42'),
(25,'nasi goreng',10000,NULL,'2026-02-26 07:12:42'),
(26,'nasi goreng',10000,NULL,'2026-02-26 07:12:43'),
(27,'nabati keju',10000,NULL,'2026-02-26 07:13:21'),
(28,'nabati keju',10000,NULL,'2026-02-26 07:13:21'),
(29,'es teh manis',10000,NULL,'2026-02-26 07:21:49'),
(30,'nabati keju',10000,NULL,'2026-02-26 07:22:20'),
(31,'nasi goreng',10000,NULL,'2026-02-26 07:22:21'),
(32,'nabati keju',10000,NULL,'2026-02-26 07:25:08'),
(33,'es teh manis',10000,NULL,'2026-02-26 07:25:25'),
(34,'nasi goreng',10000,NULL,'2026-02-26 07:25:26'),
(35,'nabati keju',10000,NULL,'2026-02-26 07:25:51'),
(36,'es teh manis',10000,NULL,'2026-02-26 07:26:04'),
(37,'es teh manis',10000,NULL,'2026-02-26 07:26:50'),
(38,'mie ayam',10000,NULL,'2026-02-26 07:28:17'),
(39,'es teh manis',10000,NULL,'2026-02-26 07:28:55'),
(40,'es teh manis',10000,NULL,'2026-02-26 07:29:18'),
(41,'nabati keju',10000,NULL,'2026-02-26 07:29:19'),
(42,'nabati keju',10000,NULL,'2026-02-26 07:31:43'),
(43,'nabati keju',10000,NULL,'2026-02-26 07:31:46'),
(44,'nabati keju            ',10000,NULL,'2026-02-26 07:50:47'),
(45,'nasi goreng            ',10000,NULL,'2026-02-26 07:50:48'),
(46,'es teh manis            ',10000,NULL,'2026-02-26 07:50:49'),
(47,'nasi goreng            ',10000,NULL,'2026-02-26 07:50:50'),
(48,'mie ayam            ',10000,NULL,'2026-02-26 07:50:51'),
(49,'nasi goreng            ',2000,NULL,'2026-02-26 07:51:27'),
(50,'nabati keju            ',2000,NULL,'2026-02-26 07:51:27'),
(51,'mie ayam            ',2000,NULL,'2026-02-26 07:51:28'),
(52,'nasi goreng            ',2000,NULL,'2026-02-26 07:52:00'),
(53,'es teh manis            ',2000,NULL,'2026-02-26 07:52:04'),
(54,'nasi goreng            ',2000,NULL,'2026-02-26 07:52:46'),
(55,'es teh manis            ',2000,NULL,'2026-02-26 07:52:52'),
(56,'es teh manis            ',2000,NULL,'2026-02-26 07:54:31'),
(57,'nabati keju            ',2000,NULL,'2026-02-26 07:54:35'),
(58,'nasi goreng            ',2000,NULL,'2026-02-26 07:54:42'),
(59,'es teh manis            ',2000,NULL,'2026-02-26 07:54:44'),
(60,'Array',NULL,NULL,'2026-02-26 13:57:09'),
(61,'Array',NULL,NULL,'2026-02-26 13:57:33'),
(62,'Array',NULL,NULL,'2026-02-26 13:57:39'),
(63,'Array',NULL,NULL,'2026-02-26 13:57:44'),
(64,'Array',NULL,NULL,'2026-02-26 13:57:53'),
(65,'Array',NULL,NULL,'2026-02-26 14:00:08'),
(66,'Array',NULL,NULL,'2026-02-26 14:00:12'),
(67,'Array',NULL,NULL,'2026-02-26 14:00:15'),
(68,'Array',NULL,NULL,'2026-02-26 14:00:18'),
(69,NULL,NULL,NULL,'2026-02-26 14:19:48'),
(70,NULL,NULL,NULL,'2026-02-26 14:25:44'),
(71,'nabati keju',2000,NULL,'2026-02-26 14:26:04'),
(72,NULL,NULL,NULL,'2026-02-26 14:26:04'),
(73,'nasi goreng',10000,NULL,'2026-02-26 14:26:06'),
(74,NULL,NULL,NULL,'2026-02-26 14:26:06'),
(75,'es teh manis',3000,NULL,'2026-02-26 14:26:09'),
(76,NULL,NULL,NULL,'2026-02-26 14:26:09'),
(77,'nabati keju',2000,NULL,'2026-02-26 14:26:11'),
(78,NULL,NULL,NULL,'2026-02-26 14:26:11'),
(79,'nasi goreng',10000,NULL,'2026-02-26 14:26:14'),
(80,NULL,NULL,NULL,'2026-02-26 14:26:14'),
(81,'nabati keju',2000,NULL,'2026-02-26 14:26:15'),
(82,NULL,NULL,NULL,'2026-02-26 14:26:15'),
(83,'mie ayam',10000,NULL,'2026-02-26 14:26:16'),
(84,NULL,NULL,NULL,'2026-02-26 14:26:16'),
(85,'nasi goreng',10000,NULL,'2026-02-26 14:27:01'),
(86,NULL,NULL,NULL,'2026-02-26 14:27:01'),
(87,'nasi goreng',10000,NULL,'2026-02-26 14:27:02'),
(88,NULL,NULL,NULL,'2026-02-26 14:27:02'),
(89,'es teh manis',3000,NULL,'2026-02-26 14:38:51'),
(90,'nabati keju',2000,NULL,'2026-02-26 14:38:52'),
(91,'nabati keju',2000,NULL,'2026-02-26 14:38:54'),
(92,'nabati keju',2000,NULL,'2026-02-26 14:38:54'),
(93,'nasi goreng',10000,NULL,'2026-02-27 06:49:42'),
(94,'es teh manis',3000,NULL,'2026-02-27 06:49:44'),
(95,NULL,NULL,NULL,'2026-03-02 12:46:33'),
(96,NULL,NULL,NULL,'2026-03-02 12:46:53'),
(97,NULL,NULL,NULL,'2026-03-02 12:48:13'),
(98,NULL,NULL,NULL,'2026-03-02 12:48:59'),
(99,NULL,NULL,NULL,'2026-03-02 12:49:48'),
(100,NULL,NULL,NULL,'2026-03-02 12:52:10'),
(101,NULL,NULL,NULL,'2026-03-02 12:56:52'),
(102,NULL,NULL,NULL,'2026-03-02 12:57:07'),
(103,NULL,NULL,NULL,'2026-03-02 12:57:28'),
(104,NULL,NULL,NULL,'2026-03-02 12:59:04'),
(105,NULL,NULL,NULL,'2026-03-02 12:59:41'),
(106,NULL,NULL,NULL,'2026-03-02 13:00:04'),
(107,NULL,NULL,NULL,'2026-03-02 13:00:59'),
(108,NULL,NULL,NULL,'2026-03-02 13:01:32'),
(109,NULL,NULL,NULL,'2026-03-02 13:01:37'),
(110,NULL,NULL,NULL,'2026-03-02 13:02:33'),
(111,NULL,NULL,NULL,'2026-03-02 13:03:14'),
(112,NULL,NULL,NULL,'2026-03-02 13:03:54'),
(113,NULL,45000,1,'2026-03-02 13:05:09'),
(114,NULL,25000,1,'2026-03-02 13:05:56'),
(115,NULL,3000,1,'2026-03-02 13:12:14'),
(116,NULL,10000,2,'2026-03-02 13:13:18'),
(117,NULL,NULL,NULL,'2026-03-02 13:15:29'),
(118,NULL,NULL,NULL,'2026-03-02 13:15:51'),
(119,NULL,NULL,NULL,'2026-03-02 13:16:12'),
(120,NULL,NULL,NULL,'2026-03-02 13:16:33'),
(121,NULL,NULL,NULL,'2026-03-02 13:18:20'),
(122,'es teh manis',3000,1,'2026-03-02 13:19:53'),
(123,'nasi goreng',10000,2,'2026-03-02 13:19:53'),
(124,'mie ayam',10000,1,'2026-03-02 13:19:53'),
(125,'nasi goreng',10000,4,'2026-03-02 13:21:26'),
(126,'mie ayam',10000,4,'2026-03-02 13:21:26'),
(127,'nabati keju',2000,4,'2026-03-02 13:21:26');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `lItem`
--

DROP TABLE IF EXISTS `lItem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `lItem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barangJual` text NOT NULL,
  `harga` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lItem`
--

LOCK TABLES `lItem` WRITE;
/*!40000 ALTER TABLE `lItem` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `lItem` VALUES
(1,'nabati keju',2000),
(2,'nasi goreng',10000),
(3,'es teh manis',3000),
(4,'mie ayam',10000),
(8,'Komik Satou vol.9',45000),
(9,'Headset',25000);
/*!40000 ALTER TABLE `lItem` ENABLE KEYS */;
UNLOCK TABLES;
commit;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2026-03-02 21:09:18
