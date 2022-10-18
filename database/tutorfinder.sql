/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.4.20-MariaDB : Database - tutorfinder
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tutorfinder` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `tutorfinder`;

/*Table structure for table `admin_contacts` */

DROP TABLE IF EXISTS `admin_contacts`;

CREATE TABLE `admin_contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_id` int(11) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin_contacts` */

insert  into `admin_contacts`(`id`,`from_id`,`message`,`email`,`fullname`,`created_at`,`updated_at`,`phone`) values 
(4,14,'Hi admin..','student@gmail.com','Student','2022-10-18 12:29:04','2022-10-18 13:21:43','01700000001');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `messages` */

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_id` int(11) DEFAULT NULL,
  `to_id` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) DEFAULT 'unread',
  `phone` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `to_id` (`to_id`),
  CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`to_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `messages` */

insert  into `messages`(`id`,`from_id`,`to_id`,`message`,`email`,`fullname`,`created_at`,`updated_at`,`status`,`phone`) values 
(7,14,13,'Hi are you available for tuition??','student@gmail.com','Student','2022-10-18 12:27:05','2022-10-18 13:21:56','unread','01700000001');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `tutions` */

DROP TABLE IF EXISTS `tutions`;

CREATE TABLE `tutions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `medium` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `student_school` varchar(255) DEFAULT NULL,
  `days_per_week` int(11) DEFAULT NULL,
  `student_gender` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `location` varchar(225) DEFAULT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `information` text DEFAULT NULL,
  `tutor_gender` varchar(25) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Available',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tutions` */

insert  into `tutions`(`id`,`user_id`,`full_name`,`district`,`area`,`medium`,`class`,`subject`,`student_school`,`days_per_week`,`student_gender`,`address`,`location`,`salary`,`mobile`,`email`,`information`,`tutor_gender`,`status`,`created_at`,`updated_at`) values 
(6,14,'Student','Dhaka','Banani','English','Ten','English','Banani Biddyaniketon',3,'Male','address',NULL,'5000','01700000001','student@gmail.com','informations','Male','Unavailable','2022-10-18 12:31:13','2022-10-18 12:50:39'),
(7,14,'Student','Dhaka','Mirpur','Bangla','Nine','Chemistry','Mirpur Model School',4,'Female','address',NULL,'7000','01700000001','student@gmail.com','informations','Any Gender','Available','2022-10-18 12:34:03','2022-10-18 12:46:11'),
(8,14,'Student','Tangail','Gulshan','English','Nine','Math','school',6,'Female','address',NULL,'8000','01700000001','email@gmail.com',NULL,'Any Gender','Available','2022-10-18 12:49:48','2022-10-18 13:13:13');

/*Table structure for table `tutors` */

DROP TABLE IF EXISTS `tutors`;

CREATE TABLE `tutors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `medium` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `days_per_week` int(11) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `information` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `teaching_style` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tutors_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tutors` */

insert  into `tutors`(`id`,`district`,`area`,`medium`,`class`,`subject`,`days_per_week`,`salary`,`address`,`information`,`user_id`,`qualification`,`teaching_style`,`created_at`,`updated_at`) values 
(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,NULL,NULL,'2022-10-18 11:43:13','2022-10-18 12:10:14');

/*Table structure for table `user_reports` */

DROP TABLE IF EXISTS `user_reports`;

CREATE TABLE `user_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `report_by` int(11) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_reports` */

insert  into `user_reports`(`id`,`user_id`,`report_by`,`reason`,`created_at`,`updated_at`) values 
(2,13,14,'Testing.','2022-10-18 12:27:27','2022-10-18 13:21:26');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'profile.png',
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'Available',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `account_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Enabled',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`phone`,`gender`,`remember_token`,`user_type`,`image`,`status`,`created_at`,`updated_at`,`account_status`) values 
(1,'Admin','admin@gmail.com',NULL,'$2y$10$9g8hIX5U6HaOZiMgA7pg2OHybvs4oYRiFDfAeGqSDiupWHvWLTTbO','01700000001','Male',NULL,'admin','profile.png','Available','2022-10-15 14:26:36','2022-10-15 14:27:12','Enabled'),
(13,'Tutor','tutor@gmail.com',NULL,'$2y$10$ns5WQ3NOj7IoJYvSCW.oJeSKbUF.5gIn99EdkF.5tWY.KVIBImTh.','','',NULL,'tutor','profile.png','Available','2022-10-18 11:43:12','2022-10-18 11:43:12','Enabled'),
(14,'Student','student@gmail.com',NULL,'$2y$10$7KwPe0CLyIPw0M0CDbuFZe/Igy08.r48q7gULUBy62vJmUnb0uf3i','01700000001','',NULL,'student','profile.png','Available','2022-10-18 11:45:45','2022-10-18 17:13:11','Enabled'),
(15,'Parent','parent@gmail.com',NULL,'$2y$10$AZPzb7D9H82llYoxCAHa7eVI6q3W3iSkTGmwIh566ay2.gbOYWhiu','','',NULL,'parent','profile.png','Available','2022-10-18 11:47:42','2022-10-18 11:47:42','Enabled'),
(16,'Test Name','test@gmail.com',NULL,'$2y$10$BFDUKcWIJSBFQB1KbFchy.R1cDuiPOoHcegDopI9PDIV8KDntq2Me','','',NULL,'student','profile.png','Available','2022-10-18 11:51:36','2022-10-18 11:51:36','Enabled'),
(19,'Nur Mohsin','velaf92226@imdutex.com',NULL,'123456','','',NULL,'student','profile.png','Available','2022-10-18 13:19:33','2022-10-18 13:19:33','Enabled');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
