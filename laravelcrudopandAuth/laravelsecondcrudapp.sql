-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 02, 2024 at 01:58 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelsecondcrudapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `state_id`, `created_at`, `updated_at`) VALUES
(1, 'Ahmedabad', 2, NULL, NULL),
(2, 'Surat', 2, NULL, NULL),
(3, 'Vadodara', 2, NULL, NULL),
(4, 'Rajkot', 2, NULL, NULL),
(5, 'Bhavnagar', 2, NULL, NULL),
(6, 'Chaharbagh', 6, NULL, NULL),
(7, 'Eshtehard', 6, NULL, NULL),
(8, 'Fardis', 6, NULL, NULL),
(9, 'Garmdarreh', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'India', NULL, NULL),
(2, 'Iran', NULL, NULL),
(3, 'pakistan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `datatables`
--

DROP TABLE IF EXISTS `datatables`;
CREATE TABLE IF NOT EXISTS `datatables` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citys` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobby` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datatables`
--

INSERT INTO `datatables` (`id`, `name`, `number`, `email`, `citys`, `hobby`, `gender`, `image`, `created_at`, `updated_at`, `country`, `state`, `city`) VALUES
(29, 'Radhe Radhe', '5555558555', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding,game,reading', 'male', '1725085544.png', '2024-08-31 00:54:56', '2024-08-31 00:57:37', '0', '0', '0'),
(26, 'Radhe Radhe', '5555558555', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding,game', 'male', '1725083325.jpg', '2024-08-31 00:18:46', '2024-08-31 00:18:46', '0', '0', '0'),
(3, 'Radhe Radhe', '9865', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding,game,reading', 'male', '1724303285.jpg', NULL, NULL, '0', '0', '0'),
(4, 'Radhe Radhe', '9865', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding,game,reading', 'male', '1724303289.jpg', NULL, NULL, '0', '0', '0'),
(5, 'Radhe Radhe', '9865', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding,game,reading', 'male', '1724303301.jpg', NULL, NULL, '0', '0', '0'),
(6, 'Radhe Radhe', '9865', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding,game,reading', 'male', '1724303306.jpg', NULL, NULL, '0', '0', '0'),
(7, 'Radhe Radhe', '9865', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding,game,reading', 'male', '1724303308.jpg', NULL, NULL, '0', '0', '0'),
(8, 'Radhe Radhe', '9865', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding,game,reading', 'male', '1724303312.jpg', NULL, NULL, '0', '0', '0'),
(9, 'Radhe Radhe', '9865', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding,game,reading', 'male', '1724303315.jpg', NULL, NULL, '0', '0', '0'),
(10, 'Radhe Radhe', '9865', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding,game,reading', 'male', '1724303319.jpg', NULL, NULL, '0', '0', '0'),
(11, 'Radhe Radhe', '9865', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding,game,reading', 'male', '1724303322.jpg', NULL, NULL, '0', '0', '0'),
(12, 'Radhe Radhe', '9865', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding,game,reading', 'male', '1724303330.jpg', NULL, NULL, '0', '0', '0'),
(13, 'Radhe Radhe', '9865', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding,game,reading', 'male', '1724303333.jpg', NULL, NULL, '0', '0', '0'),
(14, 'Radhe Radhe', '9865', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding,game,reading', 'male', '1724303335.jpg', NULL, NULL, '0', '0', '0'),
(24, 'Radhe Radhe', '5555558555', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding', 'male', '1725079275.jpg', '2024-08-30 23:11:16', '2024-08-30 23:11:16', '0', '0', '0'),
(16, 'Radhe Radhe', '5555558555', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding', 'male', '1724316078.jpeg', '2024-08-22 03:11:18', '2024-08-22 03:11:18', '0', '0', '0'),
(17, 'Radhe Radhe', '9865', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding', 'female', '1724318912.png', '2024-08-22 03:58:32', '2024-08-22 03:58:32', '0', '0', '0'),
(18, 'Radhe Radhe', '5555558555', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding', 'male', NULL, '2024-08-22 07:51:14', '2024-08-22 07:51:14', '0', '0', '0'),
(19, 'Radhe Radhe', '5555558555', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding', 'male', '1724332896.jpeg', '2024-08-22 07:51:36', '2024-08-22 07:51:36', '0', '0', '0'),
(20, 'Radhe Radhe', '5555558555', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding', 'male', '1724399569.png', '2024-08-23 02:22:49', '2024-08-23 02:22:49', '0', '0', '0'),
(21, 'Radhe Radhe', '5555558555', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding', 'male', '1724400177.png', '2024-08-23 02:32:57', '2024-08-23 02:32:57', '0', '0', '0'),
(22, 'Radhe Radhe', '9865', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding', 'female', '1724409761.jpg', '2024-08-23 05:12:41', '2024-08-23 05:12:41', '0', '0', '0'),
(23, 'Radhe Radhe', '5555558555', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding,game', 'female', '1724423302.webp', '2024-08-23 08:58:22', '2024-08-23 08:58:22', '0', '0', '0'),
(28, 'Radhe Radhe', '9865', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding,game', 'male', '1725085433.jpg', '2024-08-31 00:53:53', '2024-08-31 00:53:53', '0', '0', '0'),
(30, 'Radhe Radhe', '5555558555', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding', 'female', '1725090030.png', '2024-08-31 02:09:00', '2024-08-31 02:10:40', '0', '0', '0'),
(31, 'Radhe Radhe', '85', 'Bholi_Radha143@gmail.com', 'vrundavan', 'game', 'male', '1725090048.png', '2024-08-31 02:10:01', '2024-09-02 08:09:00', '1', '2', '1'),
(33, 'Radhe Radhe', '999555111', 'Bholi_Radha143@gmail.com', 'kedarnath', 'coding,game', 'male', '1725251828.jpeg', '2024-09-01 23:07:08', '2024-09-02 08:09:21', '1', '2', '2'),
(34, 'Radhe Radhe', '999555111', 'Bholi_Radha143@gmail.com', 'somnath', 'coding,game', 'male', '1725251886.jpeg', '2024-09-01 23:08:06', '2024-09-02 08:00:32', '1', '2', '2'),
(36, 'Radhe Radhe', '5555558555', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding', 'male', '1725255125.jpg', '2024-09-02 00:02:05', '2024-09-02 07:46:59', '1', '2', '1'),
(37, 'Radhe Radhe', '9865', 'Bholi_Radha1212@gmail.com', 'vrundavan', 'coding,game,reading', 'female', '1725258732.jpg', '2024-09-02 01:02:12', '2024-09-02 01:45:09', '1', '2', '2'),
(38, 'Radhe Radhe', '9865', 'Bholi_Radha1212@gmail.com', 'vrundavan', 'game,reading', 'male', '1725265971.jpg', '2024-09-02 03:02:51', '2024-09-02 03:02:51', '1', '2', '5'),
(39, 'Radhe Radhe', '9865', 'Bholi_Radha1212@gmail.com', 'vrundavan', 'game,reading', 'male', '1725266416.jpg', '2024-09-02 03:10:16', '2024-09-02 03:10:16', '2', '6', '6'),
(40, 'Radhe Radhe', '65464598659888888888888', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding,reading', 'female', '1725268273.jpg', '2024-09-02 03:41:13', '2024-09-02 03:41:46', '2', '6', '8'),
(41, 'Radhe Radhe', '65464598659888888888888', 'Bholi_Radha143@gmail.com', 'vrundavan', 'coding,reading', 'female', '1725268924.jpg', '2024-09-02 03:52:04', '2024-09-02 07:46:34', '2', '6', '7'),
(43, 'Radhe Radhe', '9865', 'Bholi_Radha143@gmail.com', 'vrundavan', 'game', 'male', '1725283855.jpg', '2024-09-02 07:52:21', '2024-09-02 08:07:02', '1', '2', '3');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2024_08_20_060602_create_datatables_table', 1),
(12, '2024_08_31_064215_create_countries_states_cities_tables', 2),
(13, '2024_09_02_052120_rename_city_to_citys_in_datatables_table', 3),
(14, '2024_09_02_055053_add_paid_to_datatables_table', 4),
(15, '2024_09_02_055828_change_completion_status_datatype_in_datatables_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Andhra Pradesh', 1, NULL, NULL),
(2, 'Gujarat', 1, NULL, NULL),
(3, 'Haryana', 1, NULL, NULL),
(4, 'Himachal Pradesh', 1, NULL, NULL),
(5, 'Kerala', 1, NULL, NULL),
(6, 'Alborz', 2, NULL, NULL),
(7, 'Ardabil', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Radhe Radhe', 'Bholi_Radha143@gmail.com', NULL, '321321321', NULL, '2024-08-23 03:59:09', '2024-08-23 03:59:09'),
(2, 'Radhe Radhe', 'Bholi_Radha1431@gmail.com', NULL, '$2y$10$y1GIsCjuEvPiWir2QSZBGOfcNGSeWhGCwIhDWv75pTERJOZZ5ploS', NULL, '2024-08-23 04:05:57', '2024-08-23 04:05:57'),
(3, 'Radhe Radhe', 'Bholi_Radha14311@gmail.com', NULL, '$2y$10$v1RDsh7nAPtlZ0StZi.04uQAAAuojmOfkyYMjepL6919H.HhDS7cW', NULL, '2024-08-23 04:07:04', '2024-08-23 04:07:04'),
(4, 'heloo radhaji', 'Bholi_Radha1433@gmail.com', NULL, '$2y$10$lG4xQ5scTYYguAmfbZScBOduAJlhle7uvBuCAkciC.0aChd8DuYy6', NULL, '2024-08-23 04:23:09', '2024-08-23 04:23:09'),
(5, 'Radhe Radhe', 'Radha14@gmail.com', NULL, '$2y$10$4TVHmw0NdKvhwRG.WnYggu7ZSPQYoo6BQ51UJ7lCFUvgO.ZRdcUDW', NULL, '2024-08-31 00:23:29', '2024-08-31 00:23:29'),
(6, 'test', 'testing11@gmail.com', NULL, '$2y$10$.XVwY0rHacavh7c6sz9RZuxSAQE2GiC59tszp2GdeUdLFfJHbARIO', NULL, '2024-08-31 00:30:47', '2024-08-31 00:30:47'),
(7, 'radha', 'Bholi_Radha555@gmail.com', NULL, '$2y$10$vrQWhpgPaoyxouB0wB5WPerLxn5EVVYK06IhRebvT4BbECrRuXw9C', NULL, '2024-08-31 04:51:13', '2024-08-31 04:51:13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
