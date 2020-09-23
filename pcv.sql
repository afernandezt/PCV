CREATE DATABASE  IF NOT EXISTS `pcv` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `pcv`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: pcv
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.11-MariaDB

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2020_08_27_160315_create_workers_table',1),(4,'2020_08_27_194232_create_rolls_table',1),(9,'2020_09_09_163835_create_zones_table',2),(13,'2020_09_14_161537_create_w_medical_insts_table',3),(14,'2020_09_14_161629_create_w_alergias_table',3),(15,'2020_09_14_161639_create_w_vacunas_table',3),(16,'2020_09_14_161658_create_w_comorbidads_table',3),(17,'2020_09_14_161734_create_w_puestos_table',3),(18,'2020_09_14_161747_create_w_medicos_table',3),(19,'2020_09_17_160441_create_w_documents_table',4),(20,'2020_09_17_193303_create_w_opt_details_table',5);
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
-- Table structure for table `rolls`
--

DROP TABLE IF EXISTS `rolls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rolls` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permisions` longtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rolls`
--

LOCK TABLES `rolls` WRITE;
/*!40000 ALTER TABLE `rolls` DISABLE KEYS */;
INSERT INTO `rolls` VALUES (1,'Administrador',NULL,NULL,NULL);
/*!40000 ALTER TABLE `rolls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` int(11) NOT NULL,
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
INSERT INTO `users` VALUES (1,'Alberto Mengelle','amengelle@preconcretoveracruz.com',NULL,'$2y$10$s2qbDzyfSbmsQbwnXELoaOKKqRsKFVwikc2csdVeWB406UVZddCK.',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `w_alergias`
--

DROP TABLE IF EXISTS `w_alergias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `w_alergias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_worker` int(11) NOT NULL,
  `alergia` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `w_alergias`
--

LOCK TABLES `w_alergias` WRITE;
/*!40000 ALTER TABLE `w_alergias` DISABLE KEYS */;
INSERT INTO `w_alergias` VALUES (1,3,8,'2020-09-18 19:52:34','2020-09-18 19:52:34'),(2,3,9,'2020-09-18 19:52:34','2020-09-18 19:52:34'),(3,3,10,'2020-09-18 19:52:34','2020-09-18 19:52:34'),(4,6,10,'2020-09-23 20:49:10','2020-09-23 20:49:10'),(5,7,10,'2020-09-23 20:49:33','2020-09-23 20:49:33');
/*!40000 ALTER TABLE `w_alergias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `w_comorbidads`
--

DROP TABLE IF EXISTS `w_comorbidads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `w_comorbidads` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_worker` int(11) NOT NULL,
  `comorbidad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `w_comorbidads`
--

LOCK TABLES `w_comorbidads` WRITE;
/*!40000 ALTER TABLE `w_comorbidads` DISABLE KEYS */;
INSERT INTO `w_comorbidads` VALUES (1,3,2,'2020-09-18 19:52:34','2020-09-18 19:52:34'),(2,3,3,'2020-09-18 19:52:34','2020-09-18 19:52:34'),(3,4,1,'2020-09-18 20:44:40','2020-09-18 20:44:40'),(4,4,2,'2020-09-18 20:44:40','2020-09-18 20:44:40'),(5,5,3,'2020-09-19 00:57:19','2020-09-19 00:57:19'),(6,6,1,'2020-09-23 20:49:10','2020-09-23 20:49:10'),(7,6,2,'2020-09-23 20:49:10','2020-09-23 20:49:10'),(8,7,1,'2020-09-23 20:49:33','2020-09-23 20:49:33'),(9,7,2,'2020-09-23 20:49:33','2020-09-23 20:49:33');
/*!40000 ALTER TABLE `w_comorbidads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `w_documents`
--

DROP TABLE IF EXISTS `w_documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `w_documents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_worker` int(11) NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `w_documents`
--

LOCK TABLES `w_documents` WRITE;
/*!40000 ALTER TABLE `w_documents` DISABLE KEYS */;
INSERT INTO `w_documents` VALUES (4,5,'a5f65111411745_20200702_171810.jpg','examen.jpg','2020-09-19 00:57:19','2020-09-19 00:57:19'),(5,5,'a5f65111652f55_20200702_171744.jpg','prueba.jpg','2020-09-19 00:57:19','2020-09-19 00:57:19'),(6,7,'5f6b6e6886b32_error sgp.jpg','error sgp.jpg','2020-09-23 20:49:33','2020-09-23 20:49:33'),(7,7,'5f6b6e7091448_asdadsadsa.jpg','asdadsadsa.jpg','2020-09-23 20:49:33','2020-09-23 20:49:33');
/*!40000 ALTER TABLE `w_documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `w_medical_insts`
--

DROP TABLE IF EXISTS `w_medical_insts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `w_medical_insts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `instis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `w_medical_insts`
--

LOCK TABLES `w_medical_insts` WRITE;
/*!40000 ALTER TABLE `w_medical_insts` DISABLE KEYS */;
INSERT INTO `w_medical_insts` VALUES (1,'Hospital',NULL,NULL),(2,'Seguro Social',NULL,NULL);
/*!40000 ALTER TABLE `w_medical_insts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `w_medicos`
--

DROP TABLE IF EXISTS `w_medicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `w_medicos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_instituto` int(11) DEFAULT NULL,
  `medico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `w_medicos`
--

LOCK TABLES `w_medicos` WRITE;
/*!40000 ALTER TABLE `w_medicos` DISABLE KEYS */;
INSERT INTO `w_medicos` VALUES (1,1,'Medico 1',NULL,NULL),(2,2,'Medico 2',NULL,NULL);
/*!40000 ALTER TABLE `w_medicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `w_opt_details`
--

DROP TABLE IF EXISTS `w_opt_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `w_opt_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_entidad` bigint(20) DEFAULT NULL,
  `valor` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `w_opt_details`
--

LOCK TABLES `w_opt_details` WRITE;
/*!40000 ALTER TABLE `w_opt_details` DISABLE KEYS */;
INSERT INTO `w_opt_details` VALUES (1,1,'Diabetes',NULL,NULL),(2,1,'hipertensión',NULL,NULL),(3,1,'Asmatico',NULL,NULL),(4,1,'Obesidad',NULL,NULL),(5,2,'Tetanos',NULL,NULL),(6,2,'Rotavirus',NULL,NULL),(7,2,'Influenza',NULL,NULL),(8,3,'Ácaros',NULL,NULL),(9,3,'Polen',NULL,NULL),(10,3,'Pelo de Animal',NULL,NULL);
/*!40000 ALTER TABLE `w_opt_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `w_puestos`
--

DROP TABLE IF EXISTS `w_puestos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `w_puestos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `puesto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `w_puestos`
--

LOCK TABLES `w_puestos` WRITE;
/*!40000 ALTER TABLE `w_puestos` DISABLE KEYS */;
INSERT INTO `w_puestos` VALUES (1,'Sistemas',NULL,NULL),(2,'Administrativo',NULL,NULL),(3,'Jefe de pta Cordoba',NULL,NULL),(4,'Jefe de Bomba',NULL,NULL),(5,'Laboratorista',NULL,NULL),(6,'Dosificador',NULL,NULL),(7,'Ayte General',NULL,NULL),(8,'Op. Revolvedora',NULL,NULL),(9,'Trascavista',NULL,NULL),(10,'Velador',NULL,NULL),(11,'Ventas',NULL,NULL);
/*!40000 ALTER TABLE `w_puestos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `w_vacunas`
--

DROP TABLE IF EXISTS `w_vacunas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `w_vacunas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_worker` int(11) NOT NULL,
  `vacuna` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `w_vacunas`
--

LOCK TABLES `w_vacunas` WRITE;
/*!40000 ALTER TABLE `w_vacunas` DISABLE KEYS */;
INSERT INTO `w_vacunas` VALUES (1,3,6,'2020-09-18 19:52:34','2020-09-18 19:52:34'),(2,3,7,'2020-09-18 19:52:34','2020-09-18 19:52:34'),(3,6,7,'2020-09-23 20:49:10','2020-09-23 20:49:10'),(4,7,7,'2020-09-23 20:49:33','2020-09-23 20:49:33');
/*!40000 ALTER TABLE `w_vacunas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workers`
--

DROP TABLE IF EXISTS `workers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `job` int(11) NOT NULL,
  `zone` int(11) NOT NULL,
  `institution` int(11) DEFAULT NULL,
  `medic` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nomina` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edad` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workers`
--

LOCK TABLES `workers` WRITE;
/*!40000 ALTER TABLE `workers` DISABLE KEYS */;
INSERT INTO `workers` VALUES (3,1,1,1,'1','VQ306','Alberto Mengelle','asdasdasd','30','2020-09-18 19:52:33','2020-09-18 19:52:33'),(4,6,1,NULL,NULL,'VS112','Romero Fernandez Marcelino','asdasdasd','35','2020-09-18 20:44:40','2020-09-18 20:44:40'),(5,5,1,1,'1','VS223','Manrique Rivas José de Jesús','Esto es una prueba','36','2020-09-19 00:57:19','2020-09-19 00:57:19'),(6,6,1,NULL,NULL,'VS263','Portillo Hernandez Leoncio Amado','Direccion que no se sabe','40','2020-09-23 20:49:10','2020-09-23 20:49:10'),(7,6,1,NULL,NULL,'VS263','Portillo Hernandez Leoncio Amado','Direccion que no se sabe','40','2020-09-23 20:49:33','2020-09-23 20:49:33');
/*!40000 ALTER TABLE `workers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zones`
--

DROP TABLE IF EXISTS `zones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zones`
--

LOCK TABLES `zones` WRITE;
/*!40000 ALTER TABLE `zones` DISABLE KEYS */;
INSERT INTO `zones` VALUES (1,'Veracruz',NULL,NULL),(2,'Cordoba',NULL,NULL),(3,'Xalapa',NULL,NULL);
/*!40000 ALTER TABLE `zones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-23 12:03:43
