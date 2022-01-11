-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` bigint(20) unsigned NOT NULL,
  `products_id` bigint(20) unsigned NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carts_users_id_foreign` (`users_id`),
  KEY `carts_products_id_foreign` (`products_id`),
  CONSTRAINT `carts_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`),
  CONSTRAINT `carts_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `managers`;
CREATE TABLE `managers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2014_10_12_200000_add_two_factor_columns_to_users_table',	1),
(4,	'2019_08_19_000000_create_failed_jobs_table',	1),
(5,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(6,	'2021_12_14_053920_create_sessions_table',	1),
(7,	'2021_12_19_135232_create_orders_table',	1),
(8,	'2021_12_19_141414_create_products_table',	1),
(9,	'2021_12_19_142836_create_ord_details_table',	1),
(10,	'2021_12_19_143324_create_managers_table',	1),
(11,	'2022_01_05_021030_create_members_table',	1),
(12,	'2022_01_11_091412_create_carts_table',	2);

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `sum` int(11) NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `ord_details`;
CREATE TABLE `ord_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `orders_id` bigint(20) unsigned NOT NULL,
  `products_id` bigint(20) unsigned NOT NULL,
  `users_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ord_details_orders_id_foreign` (`orders_id`),
  KEY `ord_details_products_id_foreign` (`products_id`),
  KEY `ord_details_users_id_foreign` (`users_id`),
  CONSTRAINT `ord_details_orders_id_foreign` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `ord_details_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`),
  CONSTRAINT `ord_details_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ctg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `invt` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (`id`, `name`, `ctg`, `price`, `invt`, `color`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1,	'316不鏽鋼真陶瓷保溫杯500ml(粉)',	'一般水壺',	399,	32,	'粉',	'images/316不鏽鋼真陶瓷保溫杯500ml(粉).jpg',	'已上架',	'2022-01-07 12:05:56',	'2022-01-08 02:17:22'),
(2,	'316不鏽鋼真陶瓷保溫杯500ml(紫)',	'一般水壺',	399,	102,	'紫',	'images/316不鏽鋼真陶瓷保溫杯500ml(紫).jpg',	'已上架',	NULL,	'2022-01-08 02:19:31'),
(3,	'316不鏽鋼真陶瓷保溫杯500ml(綠)',	'一般水壺',	399,	54,	'綠',	'images/316不鏽鋼真陶瓷保溫杯500ml(綠).jpg',	'已上架',	NULL,	'2022-01-08 02:17:33'),
(4,	'Tritan果漾彈蓋水壺1000ml(白)',	'一般水壺',	499,	42,	'白',	'images/Tritan果漾彈蓋水壺1000ml(白).jpg',	'已上架',	NULL,	NULL),
(5,	'Tritan果漾彈蓋水壺1000ml(灰)',	'一般水壺',	499,	72,	'灰',	'images/Tritan果漾彈蓋水壺1000ml(灰).jpg',	'已上架',	NULL,	NULL),
(6,	'Tritan果漾彈蓋水壺1000ml(綠)',	'一般水壺',	499,	45,	'綠',	'images/Tritan果漾彈蓋水壺1000ml(綠).jpg',	'已上架',	NULL,	NULL),
(7,	'極速運動水壺700ml(黃)',	'運動水壺',	589,	83,	'黃',	'images/極速運動水壺700ml(黃).jpg',	'已上架',	NULL,	NULL),
(8,	'極速運動水壺700ml(黑)',	'一般水壺',	589,	52,	'黑',	'images/極速運動水壺700ml(黑).jpg',	'已上架',	NULL,	'2022-01-08 02:19:42'),
(9,	'極速運動水壺700ml(橘)',	'一般水壺',	589,	54,	'橘',	'images/極速運動水壺700ml(橘).jpg',	'已上架',	NULL,	'2022-01-08 02:19:47'),
(10,	'撞色彈跳吸管太空壺1000ml (附背帶)(綠)',	'一般水壺',	688,	84,	'綠',	'images/撞色彈跳吸管太空壺1000ml (附背帶)(綠).jpg',	'已上架',	NULL,	'2022-01-08 02:19:52'),
(11,	'撞色彈跳吸管太空壺1000ml (附背帶)(藍)',	'一般水壺',	688,	68,	'藍',	'images/撞色彈跳吸管太空壺1000ml (附背帶)(藍).jpg',	'已上架',	NULL,	'2022-01-08 02:19:57'),
(12,	'Tritan馬卡龍花漾太空水壺(灰)',	'一般水壺',	290,	23,	'灰',	'images/Tritan馬卡龍花漾太空水壺(灰).jpg',	'已上架',	NULL,	'2022-01-08 02:20:03'),
(13,	'Tritan馬卡龍花漾太空水壺(粉)',	'一般水壺',	320,	35,	'粉',	'images/Tritan馬卡龍花漾太空水壺(粉).jpg',	'已上架',	NULL,	'2022-01-08 02:20:09'),
(14,	'Tritan馬卡龍花漾太空水壺(綠)',	'一般水壺',	320,	82,	'綠',	'images/Tritan馬卡龍花漾太空水壺(綠).jpg',	'已上架',	NULL,	'2022-01-08 02:20:15'),
(15,	'Tritan馬卡龍花漾太空水壺(藍)',	'一般水壺',	320,	63,	'藍',	'images/Tritan馬卡龍花漾太空水壺(藍).jpg',	'已上架',	NULL,	'2022-01-08 02:20:21'),
(16,	'防滑隨手杯(綠)',	'一般水壺',	199,	57,	'綠',	'images/防滑隨手杯(綠).jpg',	'已上架',	NULL,	'2022-01-08 02:20:28'),
(17,	'防滑隨手杯(藍)',	'一般水壺',	199,	39,	'藍',	'images/防滑隨手杯(藍).jpg',	'已上架',	NULL,	'2022-01-08 02:20:34'),
(18,	'防滑隨手杯(粉)',	'一般水壺',	199,	61,	'粉',	'images/防滑隨手杯(粉).jpg',	'已上架',	NULL,	'2022-01-08 02:20:40'),
(19,	'直身防滑吸管Tritan水壺(灰)',	'一般水壺',	329,	142,	'灰',	'images/直身防滑吸管Tritan水壺(灰).jpg',	'已上架',	NULL,	'2022-01-08 02:20:45'),
(20,	'直身防滑吸管Tritan水壺(紅)',	'一般水壺',	329,	83,	'紅',	'images/直身防滑吸管Tritan水壺(紅).jpg',	'已上架',	NULL,	'2022-01-08 02:20:51'),
(21,	'直身防滑吸管Tritan水壺(綠)',	'一般水壺',	329,	98,	'綠',	'images/直身防滑吸管Tritan水壺(綠).jpg',	'已上架',	NULL,	'2022-01-10 09:59:20'),
(24,	'軍風彈跳吸管太空壺(軍綠)',	'一般水壺',	499,	30,	'軍綠',	'images/軍風彈跳吸管太空壺(軍綠).jpg',	'已上架',	'2022-01-08 04:08:29',	'2022-01-09 05:28:08');

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('nKWNXps872JUXmGkH1X9x5i4g9M8vpAE056eYPnH',	NULL,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36',	'YTo0OntzOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjIxOiJodHRwOi8vbG9jYWxob3N0OjgwMDAiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNzoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6ImtjUWhtUkFMTUVVSFVOUGI0UWp0NG5ybzF6Sno3anJqS0poS3hjU0siO30=',	1641903679);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `address`, `phone`, `birthday`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1,	'admin',	'$2y$10$/Xp91weXxqSQWIZzl9PEc.2YV0Bw8T6KbOAa/hU1idklCeDDLow.a',	NULL,	NULL,	'aaa',	'12345678',	'2022-01-12',	'admin@gmail.com',	1,	'2022-01-08 04:12:00',	'2022-01-08 04:12:00'),
(4,	'aaa',	'$2y$10$JHqWvRo0C39yadCn5bFHl.bpmswDotmBFAFeJClv61vputWU6IMh.',	NULL,	NULL,	'11111',	'11111',	'2022-01-06',	'aaa@gmail.com',	0,	'2022-01-11 04:21:18',	'2022-01-11 04:21:18');

-- 2022-01-11 12:22:00
