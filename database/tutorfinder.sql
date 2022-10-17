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
  PRIMARY KEY (`id`),
  KEY `to_id` (`to_id`),
  CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`to_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `messages` */

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
  `days_per_week` tinyint(4) DEFAULT NULL,
  `student_gender` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tutions` */

insert  into `tutions`(`id`,`user_id`,`full_name`,`district`,`area`,`medium`,`class`,`subject`,`student_school`,`days_per_week`,`student_gender`,`address`,`location`,`salary`,`mobile`,`email`,`information`,`tutor_gender`,`status`,`created_at`,`updated_at`) values 
(1,NULL,'Akram Khan','dhaka','gulshan','english','ten','math','Motijheel Govt School',NULL,'Male','12/1, Gulshan',NULL,NULL,'017864521','akram@gmail.com','You have to be very good at math. DU, Buet students are preferable.','Male','Available','2022-10-13 00:51:15','2022-10-13 00:51:15'),
(2,NULL,'Akram Khan','dhaka','gulshan','english','ten','math','Motijheel Govt School',NULL,'Male','12/1, Gulshan',NULL,NULL,'017864521','akram@gmail.com','You have to be very good at math. DU, Buet students are preferable.','Male','Available','2022-10-13 00:52:56','2022-10-13 00:52:56'),
(3,NULL,'Akram Khan','dhaka','gulshan','english','ten','math','Motijheel Govt School',NULL,'Male','12/1, Gulshan',NULL,NULL,'017864521','akram@gmail.com','You have to be very good at math. DU, Buet students are preferable.','Male','Available','2022-10-13 00:55:24','2022-10-13 00:55:24'),
(4,NULL,'Saif Ali','dhaka','Select Area','Select Medium','Select Class','Select Subject',NULL,NULL,'Any Gender',NULL,NULL,NULL,'0178788778',NULL,NULL,'Any Gender','Available','2022-10-13 01:06:14','2022-10-13 01:06:14'),
(5,NULL,'Shakil Hossain','Select District','Select Area','Select Medium','Select Class','Select Subject',NULL,NULL,'Any Gender',NULL,NULL,NULL,'017864521',NULL,NULL,'Any Gender','Available','2022-10-13 01:07:40','2022-10-13 01:07:40');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tutors` */

insert  into `tutors`(`id`,`district`,`area`,`medium`,`class`,`subject`,`days_per_week`,`salary`,`address`,`information`,`user_id`,`qualification`,`teaching_style`,`created_at`,`updated_at`) values 
(3,'dhaka','gulshan','English','seven','english',5,6000,'Nikunja-2, Dhaka',NULL,11,NULL,NULL,'2022-10-15 05:18:14','2022-10-15 10:49:15'),
(4,'manikganj','mirpur','English','eight','english',3,7000,'Nowapara, Jessore',NULL,12,NULL,NULL,'2022-10-15 14:26:36','2022-10-15 14:28:06');

/*Table structure for table `user_types` */

DROP TABLE IF EXISTS `user_types`;

CREATE TABLE `user_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_types` */

insert  into `user_types`(`id`,`type`) values 
(1,'admin'),
(2,'student'),
(3,'parent'),
(4,'tutor');

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
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`phone`,`gender`,`remember_token`,`user_type`,`image`,`status`,`created_at`,`updated_at`) values 
(1,'Admin','admin@admin.com',NULL,'$2y$10$YHsvHUQLyMIuMimuej8XZeGOtnVpXV9/RiU81M9PdZQCk0VckRQAm',NULL,NULL,NULL,'admin','profile.png','Available','2022-09-28 14:50:25','2022-09-28 14:50:25'),
(6,'Nur Mohsin','mohsin@gmail.com',NULL,'$2y$10$xR2CUgSj8/vxxqUrzlmwgOg4hFdAFzKVIYZySRm3H519bTz7nxz1y',NULL,NULL,NULL,'parent','profile.png','Available','2022-10-14 13:27:30','2022-10-14 13:27:30'),
(8,'Khalid Hassan','khalid@gmail.com',NULL,'$2y$10$uEroShNjS00kZJyjPdctDOf0.AyiNTYo2.8T76A9NNjjdlAv2twia','01757069806','Male',NULL,'student','1665838361.png','Available','2022-10-14 13:36:16','2022-10-15 12:52:41'),
(11,'Tutor','tutor@gmail.com',NULL,'$2y$10$AOuYQz74NNRndkFcRxOsaOgQyT7YXHeJsnWrqjW4rN9CZRTCGKE6e','01677531881','Male',NULL,'tutor','1665838130.png','Available','2022-10-15 05:18:13','2022-10-15 12:48:50'),
(12,'Nafish Sadik','nafish@gmail.com',NULL,'$2y$10$9g8hIX5U6HaOZiMgA7pg2OHybvs4oYRiFDfAeGqSDiupWHvWLTTbO','01837527151','Male',NULL,'tutor','profile.png','Available','2022-10-15 14:26:36','2022-10-15 14:27:12');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
