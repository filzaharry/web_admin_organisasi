-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table general.akses
CREATE TABLE IF NOT EXISTS `akses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `level_user_id` bigint(20) unsigned NOT NULL,
  `menu_id` bigint(20) unsigned NOT NULL,
  `akses` int(11) NOT NULL,
  `tambah` int(11) NOT NULL,
  `edit` int(11) NOT NULL,
  `hapus` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `akses_level_user_id_foreign` (`level_user_id`),
  KEY `akses_menu_id_foreign` (`menu_id`),
  CONSTRAINT `akses_level_user_id_foreign` FOREIGN KEY (`level_user_id`) REFERENCES `level_users` (`id`),
  CONSTRAINT `akses_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table general.akses: ~39 rows (approximately)
/*!40000 ALTER TABLE `akses` DISABLE KEYS */;
REPLACE INTO `akses` (`id`, `level_user_id`, `menu_id`, `akses`, `tambah`, `edit`, `hapus`, `created_at`, `updated_at`) VALUES
	(4, 1, 4, 1, 0, 0, 0, NULL, '2021-11-23 13:12:54'),
	(5, 1, 5, 1, 1, 1, 1, NULL, '2021-11-23 12:23:01'),
	(8, 1, 16, 1, 1, 1, 1, NULL, '2021-11-22 15:15:27'),
	(9, 1, 18, 1, 1, 1, 1, NULL, '2021-11-22 16:17:13'),
	(11, 1, 19, 1, 1, 1, 1, NULL, '2021-11-23 13:22:47'),
	(33, 5, 16, 1, 1, 1, 1, '2021-11-08 07:39:38', '2021-11-08 09:14:29'),
	(34, 5, 5, 1, 1, 1, 1, '2021-11-08 07:40:45', '2021-11-08 09:14:37'),
	(38, 1, 17, 1, 1, 1, 1, '2021-11-08 09:21:14', '2021-11-23 02:23:19'),
	(39, 5, 4, 1, 1, 1, 1, '2021-11-08 09:24:24', '2021-11-08 09:52:05'),
	(40, 5, 17, 1, 1, 1, 1, '2021-11-08 09:24:24', '2021-11-11 02:30:57'),
	(47, 1, 65, 1, 1, 1, 1, '2021-11-19 03:36:15', '2021-11-23 02:25:18'),
	(50, 1, 67, 1, 1, 1, 1, '2021-11-23 02:05:56', '2021-11-23 02:05:56'),
	(60, 1, 84, 1, 1, 1, 1, '2021-11-24 04:10:33', '2021-11-24 04:10:33'),
	(61, 1, 85, 1, 1, 1, 1, '2021-11-24 04:10:33', '2021-11-24 04:10:33'),
	(62, 1, 86, 1, 1, 1, 1, '2021-11-24 04:10:56', '2021-11-24 04:10:56'),
	(63, 1, 87, 1, 1, 1, 1, '2021-11-24 04:11:18', '2021-11-24 04:11:18'),
	(64, 1, 88, 1, 1, 1, 1, '2021-11-24 04:12:19', '2021-11-24 04:12:19'),
	(65, 1, 89, 1, 1, 1, 1, '2021-11-24 04:12:34', '2021-11-24 04:12:34'),
	(66, 1, 90, 1, 1, 1, 1, '2021-11-24 04:12:46', '2021-11-24 04:12:46'),
	(67, 1, 91, 1, 1, 1, 1, '2021-11-24 04:13:08', '2021-11-24 04:13:08'),
	(68, 1, 92, 1, 1, 1, 1, '2021-11-24 04:13:20', '2021-11-24 04:13:20'),
	(69, 1, 93, 1, 1, 1, 1, '2021-11-24 04:13:37', '2021-11-24 04:13:37'),
	(70, 1, 94, 1, 1, 1, 1, '2021-11-24 04:13:58', '2021-11-24 04:13:58'),
	(71, 1, 95, 1, 1, 1, 1, '2021-11-24 04:14:19', '2021-11-24 04:14:19'),
	(72, 1, 96, 1, 1, 1, 1, '2021-11-24 04:14:35', '2021-11-24 04:14:35'),
	(73, 1, 97, 1, 1, 1, 1, '2021-11-24 04:14:49', '2021-11-24 04:14:49'),
	(74, 1, 98, 1, 1, 1, 1, '2021-11-24 04:15:04', '2021-11-24 04:15:04'),
	(75, 1, 99, 1, 1, 1, 1, '2021-11-24 04:15:24', '2021-11-24 04:15:24'),
	(76, 1, 100, 1, 1, 1, 1, '2021-11-24 04:15:40', '2021-11-24 04:15:40'),
	(77, 1, 101, 1, 1, 1, 1, '2021-11-26 16:04:40', '2021-11-26 16:04:40'),
	(78, 1, 102, 1, 1, 1, 1, '2021-11-26 16:04:40', '2021-11-26 16:04:40'),
	(79, 1, 104, 1, 1, 1, 1, '2021-11-26 16:05:13', '2021-11-26 16:05:13'),
	(80, 1, 105, 1, 1, 1, 1, '2021-11-26 16:06:09', '2021-11-26 16:06:09'),
	(81, 1, 106, 1, 1, 1, 1, '2021-11-26 16:06:28', '2021-11-26 16:06:28'),
	(82, 1, 107, 1, 1, 1, 1, '2021-11-26 16:06:52', '2021-11-26 16:06:52'),
	(83, 1, 108, 1, 1, 1, 1, '2021-11-26 16:07:15', '2021-11-26 16:07:15'),
	(84, 1, 109, 1, 1, 1, 1, '2021-11-26 16:07:51', '2021-11-26 16:07:51'),
	(85, 1, 110, 1, 1, 1, 1, '2021-11-26 16:08:17', '2021-11-26 16:08:17'),
	(86, 1, 111, 1, 1, 1, 1, '2021-11-26 16:08:34', '2021-11-26 16:08:34'),
	(87, 1, 143, 1, 1, 1, 1, '2021-11-30 04:48:16', '2021-11-30 04:48:16');
/*!40000 ALTER TABLE `akses` ENABLE KEYS */;

-- Dumping structure for table general.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
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

-- Dumping data for table general.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table general.general_parameter
CREATE TABLE IF NOT EXISTS `general_parameter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `params` varchar(50) DEFAULT NULL,
  `value` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table general.general_parameter: ~0 rows (approximately)
/*!40000 ALTER TABLE `general_parameter` DISABLE KEYS */;
/*!40000 ALTER TABLE `general_parameter` ENABLE KEYS */;

-- Dumping structure for table general.icons
CREATE TABLE IF NOT EXISTS `icons` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- Dumping data for table general.icons: ~25 rows (approximately)
/*!40000 ALTER TABLE `icons` DISABLE KEYS */;
REPLACE INTO `icons` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'view_list', '2021-11-17 09:50:04', '2021-11-23 02:50:51', '0000-00-00 00:00:00'),
	(2, 'search', '2021-11-17 09:51:21', '2021-11-17 09:51:21', NULL),
	(3, 'home', '2021-11-17 09:51:27', '2021-11-17 09:51:27', NULL),
	(4, 'info', '2021-11-19 11:15:54', '2021-11-19 11:15:54', NULL),
	(5, 'favorite', '2021-11-19 11:16:00', '2021-11-19 11:16:00', NULL),
	(6, 'face', '2021-11-19 11:16:06', '2021-11-19 11:16:06', NULL),
	(7, 'delete', '2021-11-19 11:16:13', '2021-11-19 11:16:13', NULL),
	(8, 'lock', '2021-11-19 11:16:19', '2021-11-19 11:16:19', NULL),
	(9, 'event', '2021-11-19 11:16:24', '2021-11-19 11:16:24', NULL),
	(10, 'verified', '2021-11-19 11:16:33', '2021-11-19 11:16:33', NULL),
	(11, 'logout', '2021-11-19 11:16:39', '2021-11-19 11:16:39', NULL),
	(12, 'description', '2021-11-19 11:16:46', '2021-11-19 11:16:46', NULL),
	(13, 'language', '2021-11-19 11:16:52', '2021-11-19 11:16:52', NULL),
	(14, 'help', '2021-11-19 11:17:01', '2021-11-19 11:17:01', NULL),
	(16, 'article', '2021-11-19 11:17:24', '2021-11-19 11:17:24', NULL),
	(17, 'login', '2021-11-19 11:28:17', '2021-11-19 11:28:17', NULL),
	(18, 'lightbulb', '2021-11-19 11:28:27', '2021-11-19 11:28:27', NULL),
	(19, 'account_circle', '2021-11-19 11:28:46', '2021-11-19 11:28:46', NULL),
	(20, 'settings', '2021-11-19 11:28:53', '2021-11-19 11:28:53', NULL),
	(21, 'done', '2021-11-19 11:29:01', '2021-11-19 11:29:01', NULL),
	(22, 'favorite_border', '2021-11-19 11:29:14', '2021-11-19 11:29:14', NULL),
	(23, 'fingerprint', '2021-11-19 11:56:04', '2021-11-19 11:56:04', NULL),
	(24, 'question_answer', '2021-11-19 11:56:44', '2021-11-19 11:56:44', NULL),
	(25, 'credit_card', '2021-11-19 11:57:11', '2021-11-19 11:57:11', NULL),
	(26, 'paid', '2021-11-23 03:12:11', '2021-11-23 03:12:11', NULL);
/*!40000 ALTER TABLE `icons` ENABLE KEYS */;

-- Dumping structure for table general.level_users
CREATE TABLE IF NOT EXISTS `level_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_level_user` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table general.level_users: ~3 rows (approximately)
/*!40000 ALTER TABLE `level_users` DISABLE KEYS */;
REPLACE INTO `level_users` (`id`, `nama_level_user`, `created_at`, `updated_at`) VALUES
	(1, 'admin', NULL, NULL),
	(5, 'user1', NULL, '2021-11-08 06:12:38');
/*!40000 ALTER TABLE `level_users` ENABLE KEYS */;

-- Dumping structure for table general.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_menu` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_menu` enum('main_menu','sub_menu') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sub_menu',
  `master_menu` int(11) NOT NULL,
  `url` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktif` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `sort` int(11) DEFAULT NULL,
  `sort_sub` int(11) DEFAULT NULL,
  `is_parent` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table general.menu: ~63 rows (approximately)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
REPLACE INTO `menu` (`id`, `nama_menu`, `level_menu`, `master_menu`, `url`, `icon`, `aktif`, `sort`, `sort_sub`, `is_parent`, `created_at`, `updated_at`) VALUES
	(4, 'Konfigurasi', 'main_menu', 0, 'konfigurasi', 'settings', 'Y', 20, 0, 1, NULL, '2021-11-23 03:39:29'),
	(5, 'Daftar Menu', 'sub_menu', 4, 'konfigurasi/daftar-menu', 'view_list', 'Y', 0, 3, 0, NULL, NULL),
	(16, 'Akses Menu', 'sub_menu', 4, 'konfigurasi/akses', 'view_list', 'Y', 0, 2, 0, '2021-10-28 15:43:16', '2021-10-28 15:43:16'),
	(17, 'User', 'sub_menu', 4, 'konfigurasi/user', 'contact_page', 'Y', 0, 1, 0, '2021-10-28 23:43:07', '2021-10-28 23:43:07'),
	(18, 'User Level', 'sub_menu', 4, 'konfigurasi/user-level', 'supervisor_account', 'Y', 0, 4, 0, '2021-10-28 23:44:36', '2021-10-28 23:44:36'),
	(19, 'Dashboard', 'main_menu', 0, 'dashboard', 'home', 'Y', 1, 0, 0, NULL, '2021-11-23 03:39:45'),
	(64, 'test-akses', 'sub_menu', 60, 'test', 'view_list', 'Y', 0, 1, 0, '2021-11-17 07:17:15', '2021-11-19 01:35:48'),
	(65, 'Ikon Menu', 'sub_menu', 4, 'konfigurasi/icon', 'view_list', 'Y', 0, 5, NULL, '2021-11-19 03:30:23', '2021-11-19 03:30:23'),
	(67, 'Template', 'sub_menu', 4, 'konfigurasi/template', 'view_list', 'Y', 0, 6, 0, '2021-11-23 02:04:18', '2021-11-23 02:22:26'),
	(84, 'Data Utama', 'main_menu', 0, 'data-utama', 'view_list', 'Y', 2, 0, 1, '2021-11-24 04:00:06', '2021-11-24 04:00:25'),
	(85, 'Sales', 'sub_menu', 84, 'data-utama/sales', 'verified', 'Y', 0, 1, NULL, '2021-11-24 04:01:00', '2021-11-24 04:01:00'),
	(86, 'Negara', 'sub_menu', 84, 'data-utama/negara', 'article', 'Y', 0, 2, NULL, '2021-11-24 04:01:11', '2021-11-24 04:01:11'),
	(87, 'Sea Port', 'sub_menu', 84, 'data-utama/sea-port', 'account_circle', 'Y', 0, 3, NULL, '2021-11-24 04:01:29', '2021-11-24 04:01:29'),
	(88, 'Air Port', 'sub_menu', 84, 'data-utama/air-port', 'language', 'Y', 0, 4, NULL, '2021-11-24 04:01:43', '2021-11-24 04:01:43'),
	(89, 'Tipe Container', 'sub_menu', 84, 'data-utama/tipe-container', 'event', 'Y', 0, 5, NULL, '2021-11-24 04:02:08', '2021-11-24 04:02:08'),
	(90, 'Daftar Account', 'sub_menu', 84, 'data-utama/daftar-akun', 'view_list', 'Y', 0, 6, 0, '2021-11-24 04:02:31', '2021-11-30 04:45:26'),
	(91, 'Mata Uang', 'sub_menu', 84, 'data-utama/mata-uang', 'event', 'Y', 0, 7, NULL, '2021-11-24 04:04:47', '2021-11-24 04:04:47'),
	(92, 'Sea Freight Rating', 'sub_menu', 84, 'data-utama/sea-freight-rating', 'help', 'Y', 0, 8, NULL, '2021-11-24 04:05:04', '2021-11-24 04:05:04'),
	(93, 'T.O.S', 'sub_menu', 84, 'data-utama/tos', 'language', 'Y', 0, 9, NULL, '2021-11-24 04:05:19', '2021-11-24 04:05:19'),
	(94, 'Cost Sheet Component', 'sub_menu', 84, 'data-utama/cost-sheet-component', 'language', 'Y', 0, 10, NULL, '2021-11-24 04:05:43', '2021-11-24 04:05:43'),
	(95, 'Bank', 'sub_menu', 84, 'data-utama/bank', 'event', 'Y', 0, 11, NULL, '2021-11-24 04:06:10', '2021-11-24 04:06:10'),
	(96, 'Preset Cost Sheet', 'sub_menu', 84, 'data-utama/preset-cost-sheet', 'language', 'Y', 0, 12, NULL, '2021-11-24 04:06:33', '2021-11-24 04:06:33'),
	(97, 'Vendor', 'sub_menu', 84, 'data-utama/vendor', 'help', 'Y', 0, 13, NULL, '2021-11-24 04:06:54', '2021-11-24 04:06:54'),
	(98, 'Pengaturan Akun', 'sub_menu', 84, 'data-utama/pengaturan-akun', 'lock', 'Y', 0, 14, NULL, '2021-11-24 04:07:47', '2021-11-24 04:07:47'),
	(99, 'Insentive Settings', 'sub_menu', 84, 'data-utama/insentive-settings', 'verified', 'Y', 0, 15, NULL, '2021-11-24 04:08:10', '2021-11-24 04:08:10'),
	(100, 'CS Documents', 'sub_menu', 84, 'data-utama/cs-documents', 'settings', 'Y', 0, 16, NULL, '2021-11-24 04:08:47', '2021-11-24 04:08:47'),
	(101, 'Transaksi', 'main_menu', 0, 'transaksi', 'help', 'Y', 3, 0, 1, '2021-11-26 15:51:31', '2021-11-26 15:51:31'),
	(102, 'Saldo Awal Akuntansi Penjurnalan', 'sub_menu', 101, 'transaksi/saldo-awal-akuntansi-penjurnalan', 'delete', 'Y', 0, 1, NULL, '2021-11-26 15:53:15', '2021-11-26 15:53:15'),
	(104, 'Kas / Bank Masuk', 'sub_menu', 101, 'transaksi/kasbank-masuk', 'view_list', 'Y', 0, 2, 0, '2021-11-26 15:54:50', '2021-11-26 15:55:03'),
	(105, 'Kas / Bank Keluar', 'sub_menu', 101, 'transaksi/kasbank-keluar', 'view_list', 'Y', 0, 3, 0, '2021-11-26 15:58:23', '2021-11-26 15:58:35'),
	(106, 'KES', 'sub_menu', 101, 'transaksi/kes', 'verified', 'Y', 0, 4, NULL, '2021-11-26 15:59:21', '2021-11-26 15:59:21'),
	(107, 'KIS', 'sub_menu', 101, 'transaksi/kis', 'event', 'Y', 0, 5, NULL, '2021-11-26 16:00:06', '2021-11-26 16:00:06'),
	(108, 'AFE', 'sub_menu', 101, 'transaksi/afe', 'delete', 'Y', 0, 6, NULL, '2021-11-26 16:00:45', '2021-11-26 16:00:45'),
	(109, 'AFI', 'sub_menu', 101, 'transaksi/afi', 'event', 'Y', 0, 7, NULL, '2021-11-26 16:01:30', '2021-11-26 16:01:30'),
	(110, 'DM', 'sub_menu', 101, 'transaksi/dm', 'description', 'Y', 0, 8, NULL, '2021-11-26 16:02:19', '2021-11-26 16:02:19'),
	(111, 'Shipping Instruction', 'sub_menu', 101, 'transaksi/shipping-instruction', 'home', 'Y', 0, 9, NULL, '2021-11-26 16:03:02', '2021-11-26 16:03:02'),
	(112, 'Kurs', 'sub_menu', 101, 'transaksi/kurs', 'info', 'Y', 0, 10, NULL, '2021-11-27 01:43:06', '2021-11-27 01:43:06'),
	(113, 'Kurs Invoice', 'sub_menu', 101, 'transaksi/kurs-invoice', 'description', 'Y', 0, 11, NULL, '2021-11-27 01:43:42', '2021-11-27 01:43:42'),
	(114, 'Cost Sheet KES', 'sub_menu', 101, 'transaksi/cost-sheet-kes', 'help', 'Y', 0, 12, NULL, '2021-11-27 01:44:21', '2021-11-27 01:44:21'),
	(115, 'Cost Sheet KIS', 'sub_menu', 101, 'transaksi/cost-sheet-kis', 'lock', 'Y', 0, 13, NULL, '2021-11-27 01:45:14', '2021-11-27 01:45:14'),
	(116, 'Cost Sheet AFE', 'sub_menu', 101, 'transaksi/cost-sheet-afe', 'article', 'Y', 0, 14, NULL, '2021-11-27 01:45:47', '2021-11-27 01:45:47'),
	(117, 'Cost Sheet AFI', 'sub_menu', 101, 'transaksi/cost-sheet-afi', 'lightbulb', 'Y', 0, 15, NULL, '2021-11-27 01:46:14', '2021-11-27 01:46:14'),
	(118, 'Cost Sheet DM', 'sub_menu', 101, 'transaksi/cost-sheet-dm', 'verified', 'Y', 0, 16, NULL, '2021-11-27 01:46:33', '2021-11-27 01:46:33'),
	(119, 'Invoice', 'sub_menu', 101, 'transaksi/invoice', 'article', 'Y', 0, 17, NULL, '2021-11-27 01:46:52', '2021-11-27 01:46:52'),
	(120, 'Print Invoice', 'sub_menu', 101, 'transaksi/print-invoice', 'description', 'Y', 0, 18, NULL, '2021-11-27 01:47:08', '2021-11-27 01:47:08'),
	(121, 'Posting Journal', 'sub_menu', 101, 'transaksi/posting-journal', 'help', 'Y', 0, 19, NULL, '2021-11-27 01:47:36', '2021-11-27 01:47:36'),
	(122, 'Print HBL', 'sub_menu', 101, 'transaksi/print-hbl', 'view_list', 'Y', 0, 20, 0, '2021-11-27 01:48:04', '2021-11-27 01:48:13'),
	(123, 'Sales Activity', 'sub_menu', 101, 'transaksi/sales-activity', 'help', 'Y', 0, 21, NULL, '2021-11-27 01:49:27', '2021-11-27 01:49:27'),
	(124, 'Print Delivery Note', 'sub_menu', 101, 'transaksi/print-delivery-note', 'help', 'Y', 0, 22, NULL, '2021-11-27 01:49:47', '2021-11-27 01:49:47'),
	(125, 'Credit Note', 'sub_menu', 101, 'transaksi/credit-note', 'help', 'Y', 0, 23, NULL, '2021-11-27 01:50:07', '2021-11-27 01:50:07'),
	(126, 'Print Voucher', 'sub_menu', 101, 'transaksi/print-voucher', 'article', 'Y', 0, 24, NULL, '2021-11-27 01:50:27', '2021-11-27 01:50:27'),
	(127, 'Asuransi', 'sub_menu', 101, 'transaksi/asuransi', 'login', 'Y', 0, 25, NULL, '2021-11-27 01:50:54', '2021-11-27 01:50:54'),
	(128, 'Claim', 'sub_menu', 101, 'transaksi/claim', 'login', 'Y', 0, 26, NULL, '2021-11-27 01:51:14', '2021-11-27 01:51:14'),
	(129, 'Periode', 'sub_menu', 101, 'transaksi/periode', 'description', 'Y', 0, 27, NULL, '2021-11-27 01:51:46', '2021-11-27 01:51:46'),
	(130, 'Faktur Pajak', 'sub_menu', 101, 'transaksi/faktur-pajak', 'login', 'Y', 0, 28, NULL, '2021-11-27 01:52:22', '2021-11-27 01:52:22'),
	(131, 'Print Faktur Pajak', 'sub_menu', 101, 'transaksi/print-faktur-pajak', 'language', 'Y', 0, 29, NULL, '2021-11-27 01:53:07', '2021-11-27 01:53:07'),
	(132, 'Print Invoice Pajak', 'sub_menu', 101, 'transaksi/print-invoice-pajak', 'help', 'Y', 0, 30, NULL, '2021-11-27 01:53:28', '2021-11-27 01:53:28'),
	(133, 'Tutup Buku', 'sub_menu', 101, 'transaksi/tutup-buku', 'language', 'Y', 0, 31, NULL, '2021-11-27 01:53:48', '2021-11-27 01:53:48'),
	(134, 'Surat Jalan', 'sub_menu', 101, 'transaksi/surat-jalan', 'article', 'Y', 0, 32, NULL, '2021-11-27 01:54:03', '2021-11-27 01:54:03'),
	(135, 'E.D.I', 'sub_menu', 101, 'transaksi/edi', 'language', 'Y', 0, 33, NULL, '2021-11-27 01:54:20', '2021-11-27 01:54:20'),
	(136, 'Import Sea Consolidation', 'sub_menu', 101, 'transaksi/import-sea-consolidation', 'article', 'Y', 0, 34, NULL, '2021-11-27 01:54:39', '2021-11-27 01:54:39'),
	(137, 'Export Sea Consolidation', 'sub_menu', 101, 'transaksi/export-sea-consolidation', 'help', 'Y', 0, 35, NULL, '2021-11-27 01:56:04', '2021-11-27 01:56:04'),
	(138, 'Codeco', 'sub_menu', 101, 'transaksi/codeco', 'help', 'Y', 0, 36, NULL, '2021-11-27 01:56:21', '2021-11-27 01:56:21'),
	(139, 'Storage', 'sub_menu', 101, 'transaksi/storage', 'verified', 'Y', 0, 37, NULL, '2021-11-27 01:56:32', '2021-11-27 01:56:32'),
	(140, 'Email', 'sub_menu', 101, 'transaksi/email', 'description', 'Y', 0, 38, NULL, '2021-11-27 01:56:47', '2021-11-27 01:56:47'),
	(141, 'Quotation', 'sub_menu', 101, 'transaksi/quotation', 'language', 'Y', 0, 39, NULL, '2021-11-27 01:59:07', '2021-11-27 01:59:07'),
	(142, 'Print Credit Note', 'sub_menu', 101, 'transaksi/print-credit-note', 'verified', 'Y', 0, 40, NULL, '2021-11-27 01:59:22', '2021-11-27 01:59:22'),
	(143, 'Group Account', 'sub_menu', 84, 'data-utama/group-account', 'description', 'Y', 0, 17, NULL, '2021-11-30 04:45:56', '2021-11-30 04:45:56');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

-- Dumping structure for table general.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table general.migrations: ~8 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2021_10_23_025908_create_level_users_table', 1),
	(6, '2021_10_23_030028_create_menu_table', 1),
	(7, '2021_10_23_030744_add_level_user_to_users_table', 1),
	(8, '2021_10_23_031201_create_akses_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table general.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table general.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table general.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table general.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table general.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_user_id` bigint(20) unsigned NOT NULL DEFAULT 1,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_level_user_id_foreign` (`level_user_id`),
  CONSTRAINT `users_level_user_id_foreign` FOREIGN KEY (`level_user_id`) REFERENCES `level_users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table general.users: ~5 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `username`, `level_user_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'filza', 'bravedragon', 1, 'harryfilza@gmail.com', NULL, '$2y$10$vT1ljCNZId7Vd2kCOnBW1elaWiz60se.6VLn/RR2vPGitAQmM/INq', 'LMjvCGLVnudROtJIphGDoI6LpoqEye7YIS5IZhBp', NULL, '2021-11-04 08:31:13'),
	(6, 'greatnapolo', 'dragon', 1, 'brave@test.com', NULL, '$2y$10$YHwcL9JDzHrXSwL/HtOlw.765iDGynnY1fYGM9NYuBIEUIsX1J7M.', NULL, '2021-10-28 05:11:28', '2021-10-28 05:11:28'),
	(9, 'Tokisaki Kurumi', 'kurumi55', 1, 'kurumi55@role.test', NULL, '$2y$10$JtzOyp2Wel00codDez/pZuXFd1mJgt2SZhZ9X86NNsEMQhGh1cNBO', NULL, '2021-10-29 06:44:44', '2021-10-29 06:44:44'),
	(10, 'Black Mamba', 'mamba22', 1, 'bm@gmail.com', NULL, '$2y$10$787z0sxPjukx9SgRgpt2POZloYTqHF7ZngmXrkXIWEWLFzarr1HzC', NULL, '2021-10-29 06:46:17', '2021-10-29 06:46:17'),
	(13, 'filza harry', 'filzaharry99', 1, 'harryfilza99@gmail.com', NULL, '$2y$10$rTP7bysHbNFII6ByR6oxzefiXLzeX/hDznSIICCLZNwky2fQtNpYS', NULL, '2021-11-08 06:05:33', '2021-11-08 06:05:33');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
