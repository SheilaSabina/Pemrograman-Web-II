-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for peminjaman
DROP DATABASE IF EXISTS `peminjaman`;
CREATE DATABASE IF NOT EXISTS `peminjaman` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `peminjaman`;

-- Dumping structure for table peminjaman.book
DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `penerbit` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tahun_terbit` year NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table peminjaman.book: ~6 rows (approximately)
INSERT INTO `book` (`id`, `judul`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
	(1, 'Atomic Habits', 'James Clear', 'Avery', '2018'),
	(4, 'Semesta Tanpa Kata', 'Firaz Ardiansyah', 'Indie Book Corner', '2023'),
	(5, 'Filosofi Teras', 'Henry Manampiring', 'Kompas Gramedia', '2018'),
	(6, 'Vermilion Rain', 'Puteri C Anasta', 'Gramedia', '2023'),
	(7, 'Namaku Alam', 'Leila S Chudori', 'Kepustakaan Populer Gramedia', '2024'),
	(8, 'Laut Bercerita', 'Leila S Chudori', 'Kepustakaan Populer Gramedia', '2017');

-- Dumping structure for table peminjaman.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table peminjaman.migrations: ~2 rows (approximately)
INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
	(1, '2025-05-19-055401', 'App\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1747634168, 1),
	(9, '2025-05-19-070403', 'App\\Database\\Migrations\\CreateBookTable', 'default', 'App', 1747748743, 2);

-- Dumping structure for table peminjaman.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table peminjaman.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `username`, `password`) VALUES
	(5, 'selong', '$2y$10$WUGvHFLMBB5s5iIVCUW07eT7DLYnPVOFnyHJY3eUIIDnn1HT0IP9S'),
	(7, 'ryan', '$2y$10$kMk10p8P4x8d/Es7dJeTtO/bPaTia9zyCSqOZOUTK22T4DI23gYSG');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
