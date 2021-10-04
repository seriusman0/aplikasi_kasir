-- MySQL dump 10.13  Distrib 8.0.26, for Linux (x86_64)
--
-- Host: localhost    Database: kasir
-- ------------------------------------------------------
-- Server version	8.0.26-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `barang` (
  `id_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `harga` int NOT NULL,
  `stok` int NOT NULL,
  `at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang`
--

LOCK TABLES `barang` WRITE;
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` VALUES ('089686060362','Pop MIe Soto Ayam',4500,0,'2021-07-05 06:46:22'),('089686060744','Pop Mie Goreng Spesi',4500,0,'2021-08-09 09:40:17'),('089686061024','Pop Mie Ayam Bawang',3000,-2,'2021-08-09 09:42:56'),('089686596427','lays',2000,0,'2013-01-10 01:19:29'),('089686600223','Cheetos Jagung Bakar',1500,2,'2021-07-05 06:34:11'),('089686604450','Jetz Choco',3500,0,'2021-08-09 09:24:46'),('089686611618','qtella',5000,2,'2013-01-10 06:31:18'),('089686923117','Sarimi Gelas',1000,0,'2021-07-05 06:27:51'),('653314503561','Kusuka Singkong Saos',5500,5494,'2021-07-17 08:33:22'),('653314504513','Kusuka Keripik Singk',2500,1,'2021-08-09 09:31:31'),('653314505510','kusuka super pedas',4500,1,'2013-01-10 01:15:59'),('711844160071','ABC JUICE JAMBU ',6000,0,'2021-07-17 09:27:21'),('749921005946','nutrisari sweet oran',1500,4,'2013-01-24 08:30:18'),('7622210515285','oreo mini',1500,11,'2021-07-23 14:15:20'),('7622300335809','Oreo Soft Cake',2000,25,'2021-08-09 08:45:12'),('8851019210223','Pocky Matcha',8000,0,'2021-07-05 06:31:53'),('8851019210292','Pocky Cookies Cream',8000,0,'2021-07-05 06:32:19'),('8851019230566','pocky chlt',3500,-5,'2013-01-10 01:25:59'),('8857107232023','big sheet SF',4500,0,'2013-01-24 08:33:22'),('8858702410656','big sheet  japanes s',4500,0,'2013-01-24 08:34:18'),('8886001038011','Beng-Beng',1500,1,'2021-07-05 06:20:30'),('8886013281481',' FRENCH FRIES',2500,3,'2021-07-17 09:04:40'),('8886013304609','Soba',1000,2,'2013-01-24 08:32:06'),('8886013338604','soba aym bkr',1500,0,'2013-01-10 01:30:41'),('8886013402206','twistko',2500,3,'2013-01-10 01:12:31'),('8886015409289','nyam nyam',3500,3,'2013-01-24 08:47:51'),('8888166336599','Nitto Wafer',1000,10,'2021-08-09 08:52:21'),('8888166350489','Monde Snack Spicy',3500,3,'2021-08-09 09:34:56'),('8888166606166','SUPERCO',6000,0,'2021-07-17 09:05:57'),('8888166606395','SALTCHEESE',1000,1,'2021-07-17 09:02:40'),('8888166607361','Combociz',1000,0,'2021-08-09 09:14:13'),('8888166610958','CHOCO IMOET',4500,1,'2013-01-10 01:36:53'),('8888166842823','Monde Pie Bis',8500,0,'2021-07-05 06:45:42'),('8888166989948','Monde Egg Drops',6000,0,'2021-07-05 06:41:28'),('8990333811218','choco pie',3000,3,'2013-01-24 08:44:08'),('8991001111937','SQ Rockr',4500,4,'2021-08-09 09:12:06'),('8991001242273','Top Extra Large Choc',4000,-1,'2021-08-09 09:11:04'),('8991001242983','Top Black and White',1000,21,'2021-08-09 09:17:27'),('8991001243034','top tc',1000,5,'2013-01-10 01:40:35'),('8991001243041','Top Triple Choco X-t',4000,2,'2021-08-09 08:58:06'),('8991001502926','Chacha Peanut',1000,13,'2021-08-09 09:05:09'),('8991001503169','Chaccha Milk Chocola',1000,5,'2021-08-09 09:06:54'),('8991001770554','big thunder choco',5000,0,'2013-01-24 09:13:10'),('8991001780126','Selamat Choco Sandwi',4500,2,'2021-08-09 09:09:13'),('8991002103733','GoodDay Freeze',1500,0,'2021-08-09 09:01:57'),('8991002103764','GoodDay Cappucino',1500,6,'2021-08-09 09:03:05'),('8991002115101','GRANDE JAVA LATTE',1000,1,'2013-01-10 01:27:00'),('8991002121003','gd tiramisu',5000,1,'2013-01-10 02:00:03'),('8991002121065','gd avocado',5000,2,'2013-01-10 02:00:34'),('8991002121089','gd ori cpcn',5000,0,'2013-01-10 02:00:58'),('8991002122017','abc kopi susu',3000,2,'2013-01-24 08:38:33'),('8991002502291','Mayasi',1500,1,'2021-08-09 08:38:48'),('8991102380706','Fullo Coklat',500,4,'2021-07-05 06:20:06'),('8991102385053','wafle',500,38,'2013-01-10 01:46:38'),('8991102385114','Tango Vanilla',500,7,'2021-05-16 05:12:08'),('8991102986694','walut tango',1000,19,'2013-01-24 08:45:11'),('8991102989428','Tanggo',1000,0,'2021-06-15 10:02:39'),('8991818060206','Finna Kerupuk Udang',1500,5,'2021-08-09 09:24:13'),('8991998110012','caffino latte classi',1000,5,'2013-01-24 08:57:33'),('8991998110111','caffino mocca',1000,4,'2013-01-24 08:58:08'),('8991998110210','caffino hazelnut',1000,6,'2013-01-24 08:57:03'),('8992388101092','nui green tea',3000,0,'2013-01-24 08:01:21'),('8992388121267','pop mie selera pedas',4500,0,'2013-01-24 08:35:11'),('8992388133017','MILK TEA ',5500,-21,'2021-07-17 09:10:21'),('8992388134434','nu zuzu',4000,0,'2013-01-10 02:10:24'),('8992388145027','Nu Yogurt Tea',6000,5,'2021-08-09 10:10:54'),('8992696522886','Nescafe French Vanii',4000,1,'2021-08-09 10:06:56'),('8992696522961','Nescafe Coffe Cream',4000,1,'2021-08-09 10:08:22'),('8992716109554','biskuat medium cklt',3500,4,'2013-01-10 01:35:15'),('8992753033744','fisian flag FC',5500,4,'2013-01-24 08:09:55'),('8992753700103','fisian flag coconut ',5000,0,'2013-01-24 09:06:46'),('8992753700905','fisian flag SD',5500,0,'2013-01-24 08:20:08'),('8992761111533','sprite',5000,3,'2013-01-10 02:06:15'),('8992761147143','sprite watermelon ',4000,4,'2013-01-10 02:06:58'),('8992761151102','Nutriboost Strawberr',3500,0,'2021-08-09 10:00:00'),('8992761151119','Nutriboost Orange',3500,1,'2021-08-09 09:58:48'),('8992761166038','mm pulpy',4500,1,'2013-01-10 02:08:56'),('8992761166052','frestae teh melati',3500,2,'2013-01-10 02:05:29'),('8992761166205','frestea madu',3500,4,'2013-01-10 02:05:43'),('8992772485036','coolant lychee',5000,0,'2013-01-24 08:53:38'),('8992772585026','ADEM SARI CHING KU L',6500,0,'2021-07-17 09:24:30'),('8992775001806','Gery Salut Malkist',1000,3,'2021-08-09 08:49:57'),('8992775110171','Kacang Garuda',1000,3,'2021-05-16 05:12:08'),('8992775201435','Garuda Pilus',500,15,'2021-08-09 08:47:59'),('8992775201480','pilus RL',500,3,'2013-01-10 01:57:31'),('8992775203415','Garuda Rosta',2000,-25,'2021-08-09 08:40:29'),('8992775311547','chocolatos',2000,0,'2013-01-10 01:29:16'),('8992775312407','gerry salut',500,13,'2013-01-10 01:44:49'),('8992775406038','Okky Jely Drink Jamb',1000,4,'2021-08-09 10:14:47'),('8992802063029','Fitbar Nuts Delight',4500,2,'2021-08-09 08:54:21'),('8992802063173','Fitbar Choco Delight',4500,-1,'2021-08-09 08:54:57'),('8992933233117','Pop Ice Stawberry',1000,5,'2021-06-15 09:28:31'),('8992933251111','pop ice taro',1000,6,'2013-01-02 00:16:09'),('8992933254112','Pop ice vb',1000,5,'2021-05-16 05:12:08'),('8992933256116','Pop Ice Avocado',1000,17,'2021-05-16 05:12:08'),('8992933711110','nutrijell jelly shak',4500,0,'2013-01-24 08:50:13'),('8992933713114','Jelly Shaek Orange',5000,0,'2021-07-05 06:56:13'),('8992933714111','nutrijell jelly shak',4500,0,'2013-01-24 08:49:30'),('8993027163754','happy tos',4000,2,'2013-01-10 01:14:51'),('8993175532297','ahh',500,-5,'2013-01-10 01:38:45'),('8993175540797','Nextar Coklat',7000,1,'2021-07-05 06:49:48'),('8993175545006','Nabati pink lava',1000,11,'2021-05-16 05:12:08'),('8993175547604','gatito',2000,-1,'2013-01-10 01:44:08'),('8993481215013','sharon sndwich',2500,0,'2013-01-10 01:56:21'),('8994075230399','Momogi Jagung',500,24,'2021-08-09 09:18:40'),('8994391135422','Tricks Kimchi',1000,1,'2021-07-05 06:16:02'),('8994504102310','Hello Panda',7500,0,'2021-07-17 08:41:46'),('8994755010310','tim tam mini',1000,-8,'2021-09-10 00:14:09'),('8994755030516','goodtime rainbow',1000,2,'2013-01-02 00:18:43'),('8995077603143','tic tac mix',1000,8,'2021-09-10 10:59:06'),('8995108509512','Kuaci Rebo',1000,13,'2021-08-09 08:46:20'),('8995202600023','Yeye Popcorn Rasa St',9000,0,'2021-07-05 06:36:56'),('8995227500124','cap kaki 3',4000,0,'2013-01-24 09:28:31'),('8995227500582','Cincau Cap Panda',4500,0,'2021-08-09 09:46:33'),('8996001304990','Sari Gandum',6000,0,'2021-07-17 08:36:06'),('8996001318430','Better',1000,10,'2013-01-10 01:32:05'),('8996001350843','Superstar Snaps',1500,0,'2021-08-09 09:00:31'),('8996001355046','Superstar',1500,18,'2013-01-24 08:45:43'),('8996001355756','Beng-Beng Maxx',3000,29,'2021-08-09 08:43:00'),('8996001370063','Chocky Chocky',1000,4,'2021-07-05 07:00:01'),('8996001523216','Mi Gelas',1000,2,'2021-07-17 08:42:44'),('8996001600146','Teh Pucuk',3000,0,'2021-07-05 06:56:29'),('8996001600221','Kopiko Botol',4500,2,'2021-08-09 10:05:03'),('8996006320117','Teh botol kotak',3000,4,'2021-08-09 09:51:12'),('8996006841018','Fruit Tea Blackcurra',2500,0,'2021-08-09 10:03:39'),('8996006853127','Tebs Sparkling',4500,1,'2021-08-09 09:54:13'),('8996196076658','Poppins',1500,-1,'2021-08-09 09:21:43'),('8996196244255','nut bar',5000,0,'2013-01-10 01:42:01'),('8996196303754','Choco Knots',1000,2,'2021-08-09 09:25:46'),('8997004302143','Rin - Bee',1000,-8,'2021-06-15 09:20:25'),('8997004302181','oishi udang pedas',1000,19,'2013-01-10 01:13:13'),('8997004303423','Sponge Coklat',2000,0,'2021-08-09 09:26:43'),('8997009510017','You C 1000 Lemon',8000,0,'2021-07-05 06:57:38'),('8997009510055','You C 1000 Orange',8000,0,'2021-07-05 06:57:11'),('8997009781530','hi c1000',4500,2,'2013-01-24 09:11:09'),('8997025910723','Apilo Wafer Vanila',2500,-1,'2021-05-16 05:12:08'),('8997035111110','Pocari Sweat',5000,1,'2021-07-05 06:53:58'),('8997204440560','Roti Sisir',2000,21,'2021-08-09 09:43:23'),('8998009010224','Ultra Milk Plain',5500,0,'2021-08-09 10:02:03'),('8998009010255','ultra milk moka',5500,0,'2013-01-24 08:31:17'),('8998009010552','ultra FC',4500,-21,'2021-08-13 02:59:03'),('8998009010569','Ultra Milk Coklat',4500,-35,'2021-08-09 09:49:39'),('8998009010576','ultra stroberi',4500,4,'2013-01-24 08:10:52'),('8998009020216','Buavita Leci',6500,0,'2021-08-09 09:54:40'),('8998009040283','Teh Kotak LS',3500,2,'2021-08-09 09:56:26'),('8998009040313','teh kotak lemon',3000,1,'2013-01-24 08:16:31'),('8998009050022','UJ KACANG HIJAU',3000,5,'2013-01-24 08:15:15'),('8998009050053','Ultra Sari Kacang Hi',4000,3,'2021-08-09 10:13:20'),('8998666001306','torabika cream latte',1000,-2,'2013-01-24 09:02:56'),('8998666002907','torabika natacinno',3000,8,'2013-01-24 09:01:52'),('8998866200813','sedaap mie goreng',4500,-1,'2013-01-10 02:04:47'),('8998866200820','sedaap ayam bwg',4500,0,'2013-01-10 02:03:08'),('8998866200844','Sedaap Cup Kari',4500,0,'2021-08-09 09:42:34'),('8998866201001','Top coffe',1000,-10,'2021-09-10 00:05:33'),('8998866201841','Golda',3000,4,'2021-08-09 09:47:31'),('8998866202404','sedaap korean sppicy',4500,0,'2013-01-10 02:04:29'),('8998866202671','sedaap korean spicy ',4500,0,'2013-01-10 02:01:54'),('8998866202725','Milku Coklat',3000,-9,'2021-07-05 06:52:19'),('8999908442208','polaris ',5500,0,'2013-01-24 09:04:28'),('8999988888842','Larutan Penyegar Jam',6000,0,'2021-08-09 09:45:57'),('8999999000059','Taro BBQ',1000,2,'2021-07-05 06:47:22'),('95502489','Kit Kat',4500,0,'2021-07-17 08:59:43'),('9556156003354','yeos drink',5500,0,'2013-01-24 08:21:05');
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cart` (
  `id_cart` int NOT NULL AUTO_INCREMENT,
  `id_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga_barang` int NOT NULL,
  `jumlah` int NOT NULL,
  `total` int NOT NULL,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cart`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `history` (
  `id_history` int NOT NULL AUTO_INCREMENT,
  `nama_pembeli` varchar(30) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `harga` int NOT NULL,
  `jumlah` int NOT NULL,
  `total` int NOT NULL,
  `at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pType` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id_history`),
  KEY `id_barang` (`nama_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
INSERT INTO `history` VALUES (1,'Aldo','tim tam mini',1000,1,1000,'2021-09-13 01:36:56',0),(2,'Kak Josep','torabika natacinno',3000,1,3000,'2021-09-13 02:33:45',0),(3,'kak Liya','Roti Sisir',2000,1,2000,'2021-09-13 02:39:38',0),(4,'kak Liya','teh kotak lemon',3000,1,3000,'2021-09-13 02:39:38',0),(5,'kak Liya','Garuda Rosta',2000,1,2000,'2021-09-13 02:39:38',0),(6,'kak Liya','happy tos',4000,1,4000,'2021-09-13 02:39:38',0),(7,'kak Liya','twistko',2500,2,5000,'2021-09-13 02:39:38',0),(8,'kak Liya','yeos drink',5500,1,5500,'2021-09-13 02:39:39',0),(9,'kak Liya','Teh Kotak LS',3500,1,3500,'2021-09-13 02:39:39',0),(10,'Kak Josep','Momogi Jagung',500,2,1000,'2021-09-13 02:49:56',0),(11,'Kak Josep','sprite',5000,1,5000,'2021-09-13 04:08:30',0),(12,'Aldo','tim tam mini',1000,1,1000,'2021-09-13 05:18:48',0),(13,'Aldo','nutrisari sweet oran',1500,1,1500,'2021-09-13 06:42:19',0),(14,'Aldo','tim tam mini',1000,2,2000,'2021-09-13 09:25:33',0),(15,'Glorio','pocky chlt',3500,2,7000,'2021-09-13 09:50:44',0),(16,'Glorio','pocky chlt',3500,1,3500,'2021-09-13 09:51:40',0),(17,'Markus','sprite',5000,1,5000,'2021-09-13 11:04:37',0),(18,'marce','Roti Sisir',2000,1,2000,'2021-09-13 11:42:22',0),(19,'Kak Andrew','tim tam mini',1000,1,1000,'2012-12-31 17:02:02',0),(20,'Kak Andrew','Chaccha Milk Chocola',1000,2,2000,'2012-12-31 17:02:02',0),(21,'Kak Andrew','SQ Rockr',4500,1,4500,'2012-12-31 17:02:02',0),(22,'kAK jOHAN','MILK TEA ',5500,2,11000,'2021-09-13 15:55:34',0),(23,'Johan','polaris ',5500,1,5500,'2021-09-13 17:25:20',0),(24,'Febri','torabika cream latte',1000,1,1000,'2021-09-14 00:31:01',0),(25,'Max','torabika cream latte',1000,1,1000,'2021-09-14 03:22:27',0),(26,'Max','caffino mocca',1000,2,2000,'2021-09-14 03:22:27',0),(27,'Budi','nutrijell jelly shak',4500,1,4500,'2021-09-14 04:07:33',0),(28,'Budi','Top coffe',1000,2,2000,'2021-09-14 04:07:33',0),(29,'Aldo','tim tam mini',1000,1,1000,'2021-09-14 10:09:12',0),(30,'Aldo','fisian flag FC',5500,1,5500,'2021-09-14 11:41:17',0),(31,'Johan','ultra milk moka',5500,1,5500,'2021-09-14 11:43:37',0),(32,'Johan','Roti Sisir',2000,1,2000,'2021-09-14 11:43:38',0),(33,'intan','Chaccha Milk Chocola',1000,2,2000,'2021-09-14 12:00:26',0),(34,'Fena','Top coffe',1000,2,2000,'2021-09-15 00:44:35',0),(35,'Max','caffino hazelnut',1000,2,2000,'2021-09-15 00:53:45',0),(36,'Max','caffino mocca',1000,2,2000,'2021-09-15 00:53:46',0),(37,'Awang','Ultra Milk Coklat',4500,1,4500,'2021-09-15 00:54:50',0),(38,'Awang','Beng-Beng Maxx',3000,1,3000,'2021-09-15 00:54:50',0),(39,'marce','fisian flag coconut ',5000,1,5000,'2021-09-15 01:58:05',0),(40,'Serius','Top coffe',1000,1,1000,'2021-09-15 03:56:25',0),(41,'Christian','ultra stroberi',4500,1,4500,'2021-09-15 05:11:55',0),(42,'Christian','Nutriboost Strawberr',3500,2,7000,'2021-09-15 05:11:55',0),(43,'Christian','Nutriboost Orange',3500,2,7000,'2021-09-15 05:11:55',0),(44,'Christian','wafle',500,7,3500,'2021-09-15 05:11:55',0),(45,'Christian','gerry salut',500,6,3000,'2021-09-15 05:11:56',0),(46,'Christian','ahh',500,6,3000,'2021-09-15 05:11:56',0),(47,'Christian','oishi udang pedas',1000,1,1000,'2021-09-15 05:13:00',0),(48,'Aldo','teh kotak lemon',3000,1,3000,'2021-09-15 05:58:07',0),(49,'in','Oreo Soft Cake',2000,1,2000,'2021-09-15 07:47:35',1),(50,'?','Roti Sisir',2000,1,2000,'2021-09-15 13:13:26',1),(51,'Glorio','sprite',5000,1,5000,'2021-09-15 13:13:34',1),(52,'Johan','ultra milk moka',5500,1,5500,'2021-09-15 14:13:19',1),(53,'Johan','Roti Sisir',2000,1,2000,'2021-09-15 14:13:19',0),(54,'Kak Josep','Roti Sisir',2000,1,2000,'2021-09-15 14:47:12',0),(55,'Kak Josep','Beng-Beng Maxx',3000,1,3000,'2021-09-15 14:47:12',0),(56,'shania','Oreo Soft Cake',2000,2,4000,'2021-09-15 14:50:10',0),(57,'shania','Chaccha Milk Chocola',1000,1,1000,'2021-09-15 14:50:11',0),(58,'Kak Andrew','Beng-Beng Maxx',3000,1,3000,'2021-09-15 14:51:20',0),(59,'Kak Andrew','Top Black and White',1000,1,1000,'2021-09-15 14:51:21',1),(60,'Kak Andrew','top tc',1000,1,1000,'2021-09-15 14:51:21',1),(61,'Kak Andrew','nutrijell jelly shak',4500,1,4500,'2021-09-15 14:51:21',1),(62,'intan','gerry salut',500,2,1000,'2021-09-15 14:57:07',1),(63,'Serius','Top coffe',1000,4,4000,'2021-10-03 21:22:57',1),(64,'Linda','Top coffe',1000,5,5000,'2021-10-03 21:36:51',1),(65,'Nanda','Milku Coklat',3000,1,3000,'2021-10-03 22:00:55',1),(66,'Nandi','Milku Coklat',3000,1,3000,'2021-10-03 22:13:43',1),(67,'Eka Krisman Gulo','Milku Coklat',3000,1,3000,'2021-10-03 22:13:55',1),(68,'Serius','Milku Coklat',3000,1,3000,'2021-10-04 00:28:21',1),(69,'Oke','tim tam mini',1000,1,1000,'2021-10-04 00:56:03',1),(70,'Marce','tim tam mini',1000,1,1000,'2021-10-04 02:32:39',1),(71,'oke','tim tam mini',1000,1,1000,'2021-10-04 02:42:10',1),(72,'oke','tim tam mini',1000,1,1000,'2021-10-04 02:42:48',0),(73,'Indah','tim tam mini',1000,2,2000,'2021-10-04 02:51:44',1),(74,'Serius','tim tam mini',1000,1,1000,'2021-10-04 02:52:20',1),(75,'Serius','tim tam mini',1000,1,1000,'2021-10-04 02:52:33',1),(76,'Serius','tim tam mini',1000,1,1000,'2021-10-04 02:52:58',1);
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ibu`
--

DROP TABLE IF EXISTS `ibu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ibu` (
  `id_ibu` int NOT NULL AUTO_INCREMENT,
  `nama_pembeli` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` int NOT NULL,
  `jumlah` int NOT NULL,
  `total` int NOT NULL DEFAULT (1),
  `at` timestamp NOT NULL,
  PRIMARY KEY (`id_ibu`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ibu`
--

LOCK TABLES `ibu` WRITE;
/*!40000 ALTER TABLE `ibu` DISABLE KEYS */;
INSERT INTO `ibu` VALUES (1,'adfadf','tim tam mini',1000,1,1000,'2021-10-04 01:56:34'),(2,'adfadf','tim tam mini',1000,1,1000,'2021-10-04 01:57:20'),(3,'adfadf','tim tam mini',1000,1,1000,'2021-10-04 01:58:09'),(4,'Aldo','tim tam mini',1000,1,1000,'2021-10-04 01:58:53'),(5,'Aldo','tim tam mini',1000,1,1000,'2021-10-04 01:59:00'),(6,'Aldo','tim tam mini',1000,1,1000,'2021-10-04 01:59:02'),(7,'Aldo','tim tam mini',1000,1,1000,'2021-10-04 01:59:03'),(8,'Aldo','tim tam mini',1000,1,1000,'2021-10-04 01:59:03'),(9,'Aldo','tim tam mini',1000,1,1000,'2021-10-04 01:59:05'),(10,'Serius','tim tam mini',1000,1,1000,'2021-10-04 02:00:02'),(11,'Serius','tim tam mini',1000,1,1000,'2021-10-04 02:00:14'),(12,'Serius1','tim tam mini',1000,1,1000,'2021-10-04 02:00:22'),(13,'Serius2','tim tam mini',1000,1,1000,'2021-10-04 02:00:27'),(14,'josep','Top coffe',1000,1,1000,'2021-10-04 02:00:46'),(15,'iNDAH','tim tam mini',1000,1,1000,'2021-10-04 02:02:53'),(16,'Serius','tim tam mini',1000,1,1000,'2021-10-04 02:16:16'),(17,'Seriuslagi','tim tam mini',1000,1,1000,'2021-10-04 02:16:25');
/*!40000 ALTER TABLE `ibu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pembayaran`
--

DROP TABLE IF EXISTS `pembayaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pembayaran` (
  `id_pembayaran` int NOT NULL AUTO_INCREMENT,
  `tgl_bayar` date NOT NULL,
  `total_bayar` int NOT NULL,
  `id_transaksi` int NOT NULL,
  PRIMARY KEY (`id_pembayaran`),
  KEY `id_transaksi` (`id_transaksi`),
  CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pembayaran`
--

LOCK TABLES `pembayaran` WRITE;
/*!40000 ALTER TABLE `pembayaran` DISABLE KEYS */;
/*!40000 ALTER TABLE `pembayaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pembeli`
--

DROP TABLE IF EXISTS `pembeli`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pembeli` (
  `id_pembeli` int NOT NULL AUTO_INCREMENT,
  `nama_pembeli` varchar(30) NOT NULL,
  `jk` char(1) NOT NULL,
  `no_telp` char(14) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pembeli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pembeli`
--

LOCK TABLES `pembeli` WRITE;
/*!40000 ALTER TABLE `pembeli` DISABLE KEYS */;
/*!40000 ALTER TABLE `pembeli` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transaksi` (
  `id_transaksi` int NOT NULL AUTO_INCREMENT,
  `id_barang` varchar(20) NOT NULL,
  `id_pembeli` int NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_barang` (`id_barang`),
  KEY `id_pembeli` (`id_pembeli`),
  CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-04  9:54:49
