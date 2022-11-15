-- MySQL dump 10.13  Distrib 8.0.22, for osx10.15 (x86_64)
--
-- Host: localhost    Database: smartadmin_db
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `access_tokens`
--

DROP TABLE IF EXISTS `access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `access_tokens` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` int DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idx_access_tokens_created_at` (`created_at`) USING BTREE,
  KEY `idx_access_tokens_updated_at` (`updated_at`) USING BTREE,
  KEY `idx_access_tokens_active` (`active`) USING BTREE,
  KEY `idx_access_tokens_token` (`token`) USING BTREE,
  KEY `FK_access_tokens_users` (`user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `access_tokens`
--

LOCK TABLES `access_tokens` WRITE;
/*!40000 ALTER TABLE `access_tokens` DISABLE KEYS */;
INSERT INTO `access_tokens` VALUES (1,1,1,'6d108cfbe24dce39cc407a87aa0de9ce811c2e23','2019-07-03 12:54:30','2019-07-03 12:54:30'),(2,1,1,'cd88c60d17a4eca412eec09acc90fda0699d8b03','2020-04-10 22:53:35','2020-04-10 22:53:35'),(3,1,1,'026916400d60edd1d47178daaff96e3e62cb7700','2020-04-11 22:56:37','2020-04-11 22:56:37');
/*!40000 ALTER TABLE `access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `api_requests`
--

DROP TABLE IF EXISTS `api_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `api_requests` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `session_id` int DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `latency` float DEFAULT NULL,
  `status` int DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `ua` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'User Agent',
  `request_body` longtext,
  `response_body` longtext,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idx_api_requests_created_at` (`created_at`) USING BTREE,
  KEY `idx_api_requests_updated_at` (`updated_at`) USING BTREE,
  KEY `idx_api_requests_status` (`status`) USING BTREE,
  KEY `api_requests_ip_idx` (`ip`) USING BTREE,
  KEY `session_id` (`session_id`),
  CONSTRAINT `api_requests_ibfk_1` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=216 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `api_requests`
--

LOCK TABLES `api_requests` WRITE;
/*!40000 ALTER TABLE `api_requests` DISABLE KEYS */;
/*!40000 ALTER TABLE `api_requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organizations`
--

DROP TABLE IF EXISTS `organizations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `organizations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` tinyint NOT NULL DEFAULT '1',
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `address_2` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `city` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `state` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `zip` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `about` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `organizations_active_idx` (`active`) USING BTREE,
  KEY `organizations_created_at_idx` (`created_at`) USING BTREE,
  KEY `organizations_updated_at_idx` (`updated_at`) USING BTREE,
  KEY `organizations_name_idx` (`name`) USING BTREE,
  KEY `organizations_phone_idx` (`phone`) USING BTREE,
  KEY `organizations_email_idx` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organizations`
--

LOCK TABLES `organizations` WRITE;
/*!40000 ALTER TABLE `organizations` DISABLE KEYS */;
INSERT INTO `organizations` VALUES (1,1,'SmartAdmin, Inc.','hello@smartadmin.lodev09.com','123456789',NULL,NULL,NULL,NULL,NULL,'smartadmin.lodev09.com',NULL,'2021-02-08 15:09:41','2021-02-08 15:09:56');
/*!40000 ALTER TABLE `organizations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` int NOT NULL,
  `verified` tinyint NOT NULL DEFAULT '0',
  `verification_id` int DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `cookie_token` varchar(255) DEFAULT NULL,
  `platform` tinyint DEFAULT '1' COMMENT 'web/api',
  `ip` varchar(50) DEFAULT NULL,
  `ua` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'User Agent',
  `ua_hash` varchar(255) DEFAULT NULL,
  `is_mobile` tinyint DEFAULT '0',
  `is_tablet` tinyint DEFAULT '0',
  `active_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_sessions_active` (`active`) USING BTREE,
  KEY `idx_sessions_cookie_token` (`cookie_token`) USING BTREE,
  KEY `idx_sessions_platform` (`platform`) USING BTREE,
  KEY `idx_sessions_token` (`token`) USING BTREE,
  KEY `FK_sessions_sessions_users` (`user_id`) USING BTREE,
  KEY `idx_sessions_created_at` (`created_at`) USING BTREE,
  KEY `idx_sessions_updated_at` (`updated_at`) USING BTREE,
  KEY `idx_active_at` (`active_at`) USING BTREE,
  KEY `sessions_is_mobile_idx` (`is_mobile`) USING BTREE,
  KEY `sessions_is_tablet_idx` (`is_tablet`) USING BTREE,
  KEY `sessions_ua_hash_idx` (`ua_hash`) USING BTREE,
  KEY `sessions_verified_idx` (`verified`) USING BTREE,
  KEY `verification_id` (`verification_id`),
  CONSTRAINT `FK_sessions_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sessions_ibfk_1` FOREIGN KEY (`verification_id`) REFERENCES `verifications` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=250 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES (247,1,1,0,NULL,'6cde467f7ff94fe16fc89aa22df1d0642a8a0f9f41ec1abb66e997c6e071881b','207NVNly5xi7rnUo',1,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 11_2_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.146 Safari/537.36','021e04d494020e40795adc250ab02a9a7a79f1db9e5c9861708efe3a7d9353db',0,0,'2021-02-08 15:52:53','2021-02-08 15:46:51','2021-02-08 15:52:53',NULL),(248,1,1,0,NULL,'dd87397430989d81ddc5aecfca1c840cd2256300e633e9692661fe175b6c7c23','sxd6b0AG8xmkY0Gb',1,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 11_2_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.146 Safari/537.36','021e04d494020e40795adc250ab02a9a7a79f1db9e5c9861708efe3a7d9353db',0,0,'2021-02-08 16:00:38','2021-02-08 16:00:29','2021-02-08 16:00:38',NULL),(249,1,1,0,NULL,'6015cea4bc25df5c2ff15399959d44be47409d432ae724ebadf97a5f0d327365','HewDgciVyySEGXlQ',1,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 11_2_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.146 Safari/537.36','021e04d494020e40795adc250ab02a9a7a79f1db9e5c9861708efe3a7d9353db',0,0,'2021-02-08 16:00:40','2021-02-08 16:00:40','2021-02-08 16:00:40',NULL);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `organization_id` int DEFAULT NULL,
  `timezone` varchar(50) DEFAULT 'UTC',
  `country` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT 'US',
  `region` varchar(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `verified` tinyint NOT NULL DEFAULT '0' COMMENT 'both email and phone are verified',
  `phone` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'only accepts valid phone number',
  `username` varchar(50) DEFAULT NULL,
  `password` mediumtext,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(128) DEFAULT NULL,
  `avatar_url` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_users_active` (`active`) USING BTREE,
  KEY `idx_users_created-at` (`created_at`) USING BTREE,
  KEY `idx_users_email` (`email`) USING BTREE,
  KEY `idx_users_username` (`username`) USING BTREE,
  KEY `users_timezone_idx` (`timezone`) USING BTREE,
  KEY `users_country_idx` (`country`) USING BTREE,
  KEY `users_region_idx` (`region`) USING BTREE,
  KEY `users_email_verified_idx` (`verified`) USING BTREE,
  KEY `organization_id` (`organization_id`) USING BTREE,
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,1,'UTC','US',NULL,'lodev09@smartadmin.lodev09.com',0,'3174562564','lodev09','$2y$11$T6y90Mo2LPF2IwXIx891TOdvM2oE4n7jIvZa6921raKRFM5EoKCHu','Codex','Lantern',NULL,'2019-07-03 05:37:50','2021-02-08 15:43:12',NULL),(2,1,1,'UTC','US',NULL,'oliver.kopyov@smartadmin.lodev09.com',0,'3134611347','oliver',NULL,'Oliver','Kopyov',NULL,'2019-07-03 05:38:31','2021-02-08 15:42:34',NULL),(3,1,1,'UTC','US',NULL,'sesha.gray@smartadmin.lodev09.com',0,'13137791347','sesha',NULL,'Sesha','Gray',NULL,'2019-07-03 05:39:19','2021-02-08 15:42:34',NULL),(4,1,1,'UTC','US',NULL,'john.cook@smartadmin.lodev09.com',0,'3137793314','john',NULL,'John','Cook',NULL,'2019-07-03 05:39:57','2021-02-08 15:42:34',NULL),(5,1,1,'UTC','US',NULL,'jim.ketty@smartadmin.lodev09.com',0,'3137798134','jim',NULL,'Jim','Ketty',NULL,'2019-07-03 05:41:00','2021-02-08 15:42:34',NULL),(6,1,1,'UTC','US',NULL,'sarah.mcbrook@smartadmin.lodev09.com',0,'3137797613','sarah',NULL,'Sarah','McBrook',NULL,'2019-07-03 05:42:08','2021-02-08 15:42:34',NULL),(7,1,1,'UTC','US',NULL,'jimmy.fellan@smartadmin.lodev09.com',0,'3137794314','jimmy',NULL,'Jimmy','Fellan',NULL,'2019-07-03 05:42:39','2021-02-08 15:42:34',NULL),(8,1,1,'UTC','US',NULL,'arica.grace@smartadmin.lodev09.com',0,'3137793347','arica',NULL,'Arica','Grace',NULL,'2019-07-03 05:43:08','2021-02-08 15:42:34',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verification_types`
--

DROP TABLE IF EXISTS `verification_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `verification_types` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` tinyint NOT NULL DEFAULT '1',
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `timeout` int DEFAULT '86400' COMMENT '24 hour',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verification_types`
--

LOCK TABLES `verification_types` WRITE;
/*!40000 ALTER TABLE `verification_types` DISABLE KEYS */;
INSERT INTO `verification_types` VALUES (1,1,'Password Reset',86400,'2019-01-31 08:24:27','2021-01-29 21:36:58'),(2,1,'Email',86400,'2019-01-31 08:24:53','2021-01-31 16:49:31'),(3,1,'Phone',600,'2019-03-01 11:00:34','2021-02-01 18:40:29'),(4,1,'Two-Factor Auth',600,'2021-01-29 21:37:40','2021-02-01 18:40:29');
/*!40000 ALTER TABLE `verification_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verifications`
--

DROP TABLE IF EXISTS `verifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `verifications` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` tinyint NOT NULL DEFAULT '1',
  `user_id` int NOT NULL,
  `type_id` int NOT NULL,
  `token` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `code` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'the code from the user to verify',
  `to` varchar(50) DEFAULT NULL,
  `method` varchar(10) DEFAULT NULL COMMENT 'email, sms, voice',
  `signature` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `message` varchar(255) DEFAULT NULL,
  `completed_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `verifications_deleted_at_idx` (`deleted_at`) USING BTREE,
  KEY `verifications_created_at_idx` (`created_at`) USING BTREE,
  KEY `verifications_updated_at_idx` (`updated_at`) USING BTREE,
  KEY `verifications_active_idx` (`active`) USING BTREE,
  KEY `verifications_token_idx` (`token`) USING BTREE,
  KEY `verifications_completed_at_idx` (`completed_at`) USING BTREE,
  KEY `user_id` (`user_id`),
  KEY `type_id` (`type_id`),
  KEY `verifications_code_idx` (`code`) USING BTREE,
  CONSTRAINT `verifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `verifications_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `verification_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verifications`
--

LOCK TABLES `verifications` WRITE;
/*!40000 ALTER TABLE `verifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `verifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'smartadmin_db'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-09  0:16:42
