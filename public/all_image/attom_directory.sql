-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2025 at 05:06 PM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attom_directory`
--
-- atom_userA@
-- atom_user

-- User atom_user has been added to the database atom_user.

-- https://meghtattva.in/public/
-- Email : admin@gmail.com
-- PSWD  : 123456

-- -- --------------------------------------------------------
-- y4xkk%lc!N
--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('attom_cache_spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:20:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:9:\"role-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:14;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:11:\"role-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:13;i:2;i:14;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:9:\"role-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:11:\"role-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:14;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:12:\"product-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:14;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:14:\"product-create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:12:\"product-edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:14:\"product-delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:10:\"Order-Item\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:13;i:2;i:14;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:12:\"Manage Order\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:6:{i:0;i:1;i:1;i:2;i:2;i:3;i:3;i:4;i:4;i:5;i:5;i:13;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:9:\"user-list\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:19:\"Manage Order Create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:2;i:1;i:13;i:2;i:14;}}i:12;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:19:\"Manage Order Delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:13;}}i:13;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:17:\"Manage Order Edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:2;i:1;i:3;i:2;i:13;}}i:14;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:19:\"Manage Order status\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:4;i:1;i:5;i:2;i:13;}}i:15;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:9:\"Dashboard\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:9:{i:0;i:1;i:1;i:2;i:2;i:3;i:3;i:6;i:4;i:7;i:5;i:8;i:6;i:9;i:7;i:10;i:8;i:13;}}i:16;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:16:\"Manage Countries\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:17;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:13:\"Manage Cities\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:13;i:2;i:14;}}i:18;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:10:\"Demo Excel\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:13;}}i:19;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:6:\"Import\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}}s:5:\"roles\";a:12:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:5:\"Admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:14;s:1:\"b\";s:11:\"Maia Bryant\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:13;s:1:\"b\";s:11:\"Nash Fulton\";s:1:\"c\";s:3:\"web\";}i:3;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:9:\"Associate\";s:1:\"c\";s:3:\"web\";}i:4;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:21:\"OBS Coustomer Service\";s:1:\"c\";s:3:\"web\";}i:5;a:3:{s:1:\"a\";i:4;s:1:\"b\";s:18:\"OBS Warehouse team\";s:1:\"c\";s:3:\"web\";}i:6;a:3:{s:1:\"a\";i:5;s:1:\"b\";s:13:\"Dispatch Team\";s:1:\"c\";s:3:\"web\";}i:7;a:3:{s:1:\"a\";i:6;s:1:\"b\";s:5:\"Actor\";s:1:\"c\";s:3:\"web\";}i:8;a:3:{s:1:\"a\";i:7;s:1:\"b\";s:8:\"TV Actor\";s:1:\"c\";s:3:\"web\";}i:9;a:3:{s:1:\"a\";i:8;s:1:\"b\";s:8:\"Freshers\";s:1:\"c\";s:3:\"web\";}i:10;a:3:{s:1:\"a\";i:9;s:1:\"b\";s:5:\"Model\";s:1:\"c\";s:3:\"web\";}i:11;a:3:{s:1:\"a\";i:10;s:1:\"b\";s:10:\"Film Actor\";s:1:\"c\";s:3:\"web\";}}}', 1748338616);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `countries_id` int DEFAULT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `countries_id`, `city_name`, `created_at`, `updated_at`) VALUES
(9, 7, 'Dubai', '2024-11-22 06:43:09', '2024-11-22 06:43:09'),
(10, 7, 'Abu Dhabi', '2024-11-22 06:43:20', '2024-11-22 06:43:20'),
(11, 7, 'Umm Al Quwain', '2024-11-22 06:43:28', '2024-11-22 06:43:28'),
(12, 7, 'Ras Al-Khaimah', '2024-11-22 06:43:45', '2024-11-22 06:43:45'),
(13, 7, 'Sharjah', '2024-11-22 06:43:52', '2024-11-22 06:43:52'),
(14, 7, 'Al Ain', '2024-11-22 06:43:59', '2024-11-22 06:43:59'),
(15, 7, 'Fujairah', '2024-11-22 06:44:09', '2024-11-22 06:44:09');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

DROP TABLE IF EXISTS `cms`;
CREATE TABLE IF NOT EXISTS `cms` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `page_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `title`, `description`, `page_title`, `meta_title`, `meta_keywords`, `meta_description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Tempor duis id et cu', 'Et occaecat dolor om', 'zahukis@mailinator.com', 'A earum repudiandae', NULL, 'Ullamco lorem error', 0, '2025-05-26 10:25:14', '2025-05-26 10:25:14');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1' COMMENT '1=active ,0=inactive',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=195 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(2, 'Albania', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(3, 'Algeria', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(4, 'Andorra', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(5, 'Angola', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(6, 'Antigua and Barbuda', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(7, 'Argentina', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(8, 'Armenia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(9, 'Australia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(10, 'Austria', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(11, 'Azerbaijan', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(12, 'Bahamas', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(13, 'Bahrain', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(14, 'Bangladesh', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(15, 'Barbados', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(16, 'Belarus', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(17, 'Belgium', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(18, 'Belize', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(19, 'Benin', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(20, 'Bhutan', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(21, 'Bolivia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(22, 'Bosnia and Herzegovina', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(23, 'Botswana', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(24, 'Brazil', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(25, 'Brunei', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(26, 'Bulgaria', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(27, 'Burkina Faso', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(28, 'Burundi', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(29, 'Cabo Verde', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(30, 'Cambodia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(31, 'Cameroon', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(32, 'Canada', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(33, 'Central African Republic', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(34, 'Chad', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(35, 'Chile', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(36, 'China', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(37, 'Colombia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(38, 'Comoros', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(39, 'Costa Rica', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(40, 'Côte d’Ivoire', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(41, 'Croatia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(42, 'Cuba', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(43, 'Cyprus', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(44, 'Czechia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(45, 'Democratic Republic of the Congo', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(46, 'Denmark', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(47, 'Djibouti', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(48, 'Dominica', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(49, 'Dominican Republic', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(50, 'Ecuador', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(51, 'Egypt', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(52, 'El Salvador', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(53, 'Equatorial Guinea', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(54, 'Eritrea', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(55, 'Estonia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(56, 'Eswatini', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(57, 'Ethiopia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(58, 'Fiji', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(59, 'Finland', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(60, 'France', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(61, 'Gabon', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(62, 'Gambia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(63, 'Georgia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(64, 'Germany', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(65, 'Ghana', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(66, 'Greece', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(67, 'Grenada', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(68, 'Guatemala', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(69, 'Guinea', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(70, 'Guinea-Bissau', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(71, 'Guyana', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(72, 'Haiti', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(73, 'Honduras', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(74, 'Hungary', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(75, 'Iceland', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(76, 'India', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(77, 'Indonesia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(78, 'Iran', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(79, 'Iraq', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(80, 'Ireland', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(81, 'Israel', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(82, 'Italy', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(83, 'Jamaica', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(84, 'Japan', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(85, 'Jordan', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(86, 'Kazakhstan', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(87, 'Kenya', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(88, 'Kiribati', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(89, 'Kosovo', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(90, 'Kuwait', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(91, 'Kyrgyzstan', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(92, 'Laos', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(93, 'Latvia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(94, 'Lebanon', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(95, 'Lesotho', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(96, 'Liberia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(97, 'Libya', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(98, 'Liechtenstein', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(99, 'Lithuania', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(100, 'Luxembourg', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(101, 'Madagascar', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(102, 'Malawi', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(103, 'Malaysia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(104, 'Maldives', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(105, 'Mali', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(106, 'Malta', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(107, 'Marshall Islands', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(108, 'Mauritania', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(109, 'Mauritius', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(110, 'Mexico', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(111, 'Micronesia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(112, 'Moldova', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(113, 'Monaco', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(114, 'Mongolia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(115, 'Montenegro', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(116, 'Morocco', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(117, 'Mozambique', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(118, 'Myanmar', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(119, 'Namibia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(120, 'Nauru', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(121, 'Nepal', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(122, 'Netherlands', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(123, 'New Zealand', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(124, 'Nicaragua', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(125, 'Niger', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(126, 'Nigeria', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(127, 'North Korea', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(128, 'North Macedonia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(129, 'Norway', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(130, 'Oman', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(131, 'Pakistan', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(132, 'Palau', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(133, 'Panama', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(134, 'Papua New Guinea', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(135, 'Paraguay', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(136, 'Peru', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(137, 'Philippines', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(138, 'Poland', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(139, 'Portugal', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(140, 'Qatar', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(141, 'Romania', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(142, 'Russia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(143, 'Rwanda', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(144, 'Saint Kitts and Nevis', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(145, 'Saint Lucia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(146, 'Saint Vincent and the Grenadines', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(147, 'Samoa', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(148, 'San Marino', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(149, 'Sao Tome and Principe', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(150, 'Saudi Arabia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(151, 'Senegal', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(152, 'Serbia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(153, 'Seychelles', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(154, 'Sierra Leone', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(155, 'Singapore', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(156, 'Slovakia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(157, 'Slovenia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(158, 'Solomon Islands', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(159, 'Somalia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(160, 'South Africa', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(161, 'South Korea', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(162, 'South Sudan', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(163, 'Spain', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(164, 'Sri Lanka', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(165, 'Sudan', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(166, 'Suriname', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(167, 'Sweden', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(168, 'Switzerland', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(169, 'Syria', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(170, 'Tajikistan', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(171, 'Tanzania', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(172, 'Thailand', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(173, 'Timor-Leste', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(174, 'Togo', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(175, 'Tonga', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(176, 'Trinidad and Tobago', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(177, 'Tunisia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(178, 'Turkey', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(179, 'Turkmenistan', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(180, 'Tuvalu', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(181, 'Uganda', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(182, 'Ukraine', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(183, 'United Arab Emirates', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(184, 'United Kingdom', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(185, 'United States of America', '0', '2025-05-25 10:23:34', '2025-05-26 15:08:31'),
(186, 'Uruguay', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(187, 'Uzbekistan', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(188, 'Vanuatu', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(189, 'Vatican City', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(190, 'Venezuela', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(191, 'Vietnam', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(192, 'Yemen', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(193, 'Zambia', '1', '2025-05-25 10:23:34', '2025-05-25 10:23:34'),
(194, 'Zimbabwe', '0', '2025-05-25 10:23:34', '2025-05-26 15:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE IF NOT EXISTS `experiences` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `title`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Atom Directory', 1, '2025-05-25 05:00:23', '2025-05-25 08:25:05'),
(2, 'Film Industrial', 1, '2025-05-25 05:00:23', '2025-05-25 05:00:23'),
(3, 'TVCs', 1, '2025-05-25 05:00:23', '2025-05-25 05:00:23'),
(4, 'Feature Films', 1, '2025-05-25 05:00:23', '2025-05-25 05:00:23'),
(5, 'Documentaries', 1, '2025-05-25 05:00:23', '2025-05-25 05:00:23'),
(6, 'Corporate Videos', 1, '2025-05-25 05:00:23', '2025-05-25 05:00:23'),
(7, 'Music Videos', 1, '2025-05-25 05:00:23', '2025-05-25 05:00:23'),
(8, 'Short Films', 1, '2025-05-25 05:00:23', '2025-05-25 05:00:23'),
(9, 'Training Videos', 1, '2025-05-25 05:00:23', '2025-05-25 05:00:23'),
(10, 'Animation Projects', 0, '2025-05-25 05:00:23', '2025-05-26 09:42:16'),
(11, 'Live Streaming', 1, '2025-05-25 05:00:23', '2025-05-25 05:00:23'),
(12, 'Product Demos', 1, '2025-05-25 05:00:23', '2025-05-25 05:00:23'),
(13, 'Social Media Ads', 1, '2025-05-25 05:00:23', '2025-05-25 05:00:23'),
(14, 'VR Experiences', 0, '2025-05-25 05:00:23', '2025-05-26 09:42:21'),
(15, 'Event Coverage', 1, '2025-05-25 05:00:23', '2025-05-25 05:00:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
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
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `title`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Mandarin Chinese', 1, '2025-05-25 04:55:43', '2025-05-25 04:55:43'),
(2, 'Spanish', 1, '2025-05-25 04:55:43', '2025-05-25 04:55:43'),
(3, 'English', 1, '2025-05-25 04:55:43', '2025-05-25 04:55:43'),
(4, 'Hindi', 1, '2025-05-25 04:55:43', '2025-05-25 04:55:43'),
(5, 'Bengali', 1, '2025-05-25 04:55:43', '2025-05-25 04:55:43'),
(6, 'Portuguese', 1, '2025-05-25 04:55:43', '2025-05-25 04:55:43'),
(7, 'Russian', 1, '2025-05-25 04:55:43', '2025-05-25 04:55:43'),
(8, 'Japanese', 1, '2025-05-25 04:55:43', '2025-05-25 04:55:43'),
(9, 'Lahnda (Punjabi)', 1, '2025-05-25 04:55:43', '2025-05-25 04:55:43'),
(10, 'Marathi', 1, '2025-05-25 04:55:43', '2025-05-25 04:55:43'),
(11, 'Telugu', 0, '2025-05-25 04:55:43', '2025-05-26 09:45:07'),
(12, 'Wu Chinese', 0, '2025-05-25 04:55:43', '2025-05-26 09:45:14'),
(13, 'Turkish', 1, '2025-05-25 04:55:43', '2025-05-25 04:55:43'),
(14, 'Korean', 1, '2025-05-25 04:55:43', '2025-05-25 04:55:43'),
(15, 'French', 1, '2025-05-25 04:55:43', '2025-05-25 04:55:43'),
(16, 'German', 1, '2025-05-25 04:55:43', '2025-05-25 04:55:43'),
(17, 'Vietnamese', 1, '2025-05-25 04:55:43', '2025-05-25 04:55:43'),
(18, 'Tamil', 1, '2025-05-25 04:55:43', '2025-05-25 04:55:43'),
(19, 'Yue Chinese (Cantonese)', 1, '2025-05-25 04:55:43', '2025-05-25 04:55:43'),
(20, 'Urdu', 1, '2025-05-25 04:55:43', '2025-05-25 04:55:43');

-- --------------------------------------------------------

--
-- Table structure for table `manage_orders`
--

DROP TABLE IF EXISTS `manage_orders`;
CREATE TABLE IF NOT EXISTS `manage_orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `order_item` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `order_note` longtext COLLATE utf8mb4_general_ci,
  `quantity` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `associate_status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `coustomer_service_status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `warehouse_team_status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dispatch_team_status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dispatched_date` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tracking_number` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `signed_pod` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `country_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `city_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manage_orders`
--

INSERT INTO `manage_orders` (`id`, `client_name`, `mobile_number`, `email`, `order_item`, `order_note`, `quantity`, `created_at`, `updated_at`, `address`, `associate_status`, `coustomer_service_status`, `warehouse_team_status`, `dispatch_team_status`, `status`, `dispatched_date`, `tracking_number`, `signed_pod`, `reason`, `country_id`, `city_id`) VALUES
(108, 'joy', '0909090909', 'joy@gmail.com', '12', 'order place', '1', '2024-11-22 06:46:57', '2024-11-22 06:50:00', 'address', '1', '1', '1', NULL, 'back to Warehouse', '2024-11-22T12:19', '#2354', NULL, NULL, '7', '9');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_10_144003_create_permission_tables', 1),
(5, '2024_05_10_144032_create_products_table', 1),
(6, '2025_05_24_160240_create_experiences_table', 2),
(7, '2025_05_24_162019_create_languages_table', 3),
(8, '2025_05_24_164337_create_products_table', 4),
(9, '2025_05_26_055921_create_role_infos_table', 5),
(10, '2025_05_26_153123_create_cms_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(1, 'App\\Models\\User', 13),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9),
(3, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 11),
(4, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 12),
(5, 'App\\Models\\User', 6),
(5, 'App\\Models\\User', 10);

-- --------------------------------------------------------

--
-- Table structure for table `order_dates`
--

DROP TABLE IF EXISTS `order_dates`;
CREATE TABLE IF NOT EXISTS `order_dates` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_dates`
--

INSERT INTO `order_dates` (`id`, `user_id`, `order_id`, `order_status`, `date`, `created_at`, `updated_at`) VALUES
(3, '9', '25', 'Pending', '20-09-2024 12:22:40 PM', '2024-09-20 12:22:40', '2024-09-20 12:22:40'),
(4, '11', '25', 'Confrim Order', '20-09-2024 12:25:37 PM', '2024-09-20 12:25:37', '2024-09-20 12:25:37'),
(6, '12', '25', 'Pick and Packging', '20-09-2024 12:26:51 PM', '2024-09-20 12:26:51', '2024-09-20 12:26:51'),
(7, '12', '25', 'Ready for Dispatch', '20-09-2024 12:28:52 PM', '2024-09-20 12:28:52', '2024-09-20 12:28:52'),
(8, '12', '25', 'Dispatched', '20-09-2024 12:30:10 PM', '2024-09-20 12:30:10', '2024-09-20 12:30:10'),
(9, '10', '25', 'Out for delivery', '20-09-2024 12:32:08 PM', '2024-09-20 12:32:08', '2024-09-20 12:32:08'),
(10, '10', '25', 'Delivered', '20-09-2024 12:32:44 PM', '2024-09-20 12:32:44', '2024-09-20 12:32:44'),
(13, '9', '26', 'Pending', '20-09-2024 12:52:09 PM', '2024-09-20 12:51:25', '2024-09-20 12:52:09'),
(14, '11', '26', 'Confrim Order', '20-09-2024 02:25:05 PM', '2024-09-20 12:52:31', '2024-09-20 14:25:05'),
(15, '10', '25', 'Out for delivery', '20-09-2024 12:54:46 PM', '2024-09-20 12:54:46', '2024-09-20 12:54:46'),
(16, '10', '25', 'Un Delivered', '20-09-2024 02:11:19 PM', '2024-09-20 14:11:19', '2024-09-20 14:11:19'),
(17, '9', '27', 'Pending', '20-09-2024 02:23:09 PM', '2024-09-20 14:21:25', '2024-09-20 14:23:09'),
(18, '11', '27', 'Confrim Order', '20-09-2024 02:23:28 PM', '2024-09-20 14:23:28', '2024-09-20 14:23:28'),
(19, '12', '27', 'Pick and Packging', '20-09-2024 02:25:24 PM', '2024-09-20 14:25:24', '2024-09-20 14:25:24'),
(20, '12', '27', 'Ready for Dispatch', '20-09-2024 02:26:05 PM', '2024-09-20 14:26:05', '2024-09-20 14:26:05'),
(21, '12', '27', 'Pick and Packging', '20-09-2024 02:36:42 PM', '2024-09-20 14:36:42', '2024-09-20 14:36:42'),
(22, '12', '27', 'Ready for Dispatch', '20-09-2024 02:36:51 PM', '2024-09-20 14:36:51', '2024-09-20 14:36:51'),
(23, '12', '27', 'Pick and Packging', '20-09-2024 02:36:57 PM', '2024-09-20 14:36:57', '2024-09-20 14:36:57'),
(25, '12', '26', 'Dispatched', '10-12-2091 12:20:00 PM', '2024-09-20 14:45:26', '2024-09-20 14:45:26'),
(26, '10', '26', 'Delivered', '20-09-2024 02:47:08 PM', '2024-09-20 14:47:08', '2024-09-20 14:47:08'),
(27, '12', '27', 'Dispatched', '04-03-2022 04:23:00 AM', '2024-09-20 14:48:37', '2024-09-20 14:48:37'),
(28, '12', '27', 'Dispatched', '01-12-2022 12:00:00 PM', '2024-09-20 14:50:22', '2024-09-20 14:50:22'),
(29, '10', '27', 'Out for delivery', '20-09-2024 02:59:31 PM', '2024-09-20 14:59:31', '2024-09-20 14:59:31'),
(30, '10', '27', 'Un Delivered', '20-09-2024 02:59:44 PM', '2024-09-20 14:59:44', '2024-09-20 14:59:44'),
(31, '10', '27', 'Delivered', '20-09-2024 03:01:28 PM', '2024-09-20 15:01:28', '2024-09-20 15:01:28'),
(32, '9', '28', 'Pending', '20-09-2024 03:44:04 PM', '2024-09-20 10:09:17', '2024-09-20 15:44:04'),
(33, '11', '28', 'Confrim Order', '20-09-2024 03:45:06 PM', '2024-09-20 15:45:06', '2024-09-20 15:45:06'),
(34, '12', '28', 'Pick and Packging', '20-09-2024 03:46:00 PM', '2024-09-20 15:46:00', '2024-09-20 15:46:00'),
(35, '12', '28', 'Ready for Dispatch', '20-09-2024 03:46:57 PM', '2024-09-20 15:46:57', '2024-09-20 15:46:57'),
(36, '12', '28', 'Dispatched', '21-09-2024 06:47:00 PM', '2024-09-20 15:47:47', '2024-09-20 15:47:47'),
(37, '12', '28', 'Ready for Dispatch', '20-09-2024 03:49:31 PM', '2024-09-20 15:49:31', '2024-09-20 15:49:31'),
(38, '12', '28', 'Dispatched', '21-09-2024 07:50:00 PM', '2024-09-20 15:50:20', '2024-09-20 15:50:20'),
(39, '10', '28', 'Out for delivery', '20-09-2024 03:50:47 PM', '2024-09-20 15:50:47', '2024-09-20 15:50:47'),
(40, '9', '29', 'Pending', '20-09-2024 03:56:15 PM', '2024-09-20 15:56:15', '2024-09-20 15:56:15'),
(41, '11', '29', 'Confrim Order', '20-09-2024 03:56:34 PM', '2024-09-20 15:56:34', '2024-09-20 15:56:34'),
(42, '12', '29', 'Pick and Packging', '20-09-2024 03:56:53 PM', '2024-09-20 15:56:53', '2024-09-20 15:56:53'),
(43, '9', '30', 'Pending', '20-09-2024 04:20:37 PM', '2024-09-20 16:14:59', '2024-09-20 16:20:37'),
(44, '9', '31', 'Pending', '20-09-2024 04:43:49 PM', '2024-09-20 16:43:49', '2024-09-20 16:43:49'),
(45, '9', '32', 'Pending', '20-09-2024 05:04:36 PM', '2024-09-20 17:04:36', '2024-09-20 17:04:36'),
(46, '9', '33', 'Pending', '20-09-2024 05:09:04 PM', '2024-09-20 17:04:57', '2024-09-20 17:09:04'),
(47, '11', '33', 'Confrim Order', '20-09-2024 05:09:24 PM', '2024-09-20 17:05:52', '2024-09-20 17:09:24'),
(48, '12', '33', 'Pick and Packging', '20-09-2024 05:11:25 PM', '2024-09-20 17:11:25', '2024-09-20 17:11:25'),
(49, '12', '33', 'Ready for Dispatch', '20-09-2024 05:12:02 PM', '2024-09-20 17:12:02', '2024-09-20 17:12:02'),
(50, '12', '33', 'Dispatched', '09-12-2024 11:20:00 AM', '2024-09-20 17:12:43', '2024-09-20 17:12:43'),
(51, '10', '33', 'Out for delivery', '20-09-2024 05:13 PM', '2024-09-20 17:13:34', '2024-09-20 17:13:34'),
(52, '9', '34', 'Pending', '24-09-2024 04:14 AM', '2024-09-24 04:14:17', '2024-09-24 04:14:17'),
(53, '9', '35', 'Pending', '24-09-2024 04:17 AM', '2024-09-24 04:17:37', '2024-09-24 04:17:37'),
(54, '9', '36', 'Pending', '24-09-2024 04:19 AM', '2024-09-24 04:19:42', '2024-09-24 04:19:42'),
(55, '9', '37', 'Pending', '24-09-2024 04:22 AM', '2024-09-24 04:22:21', '2024-09-24 04:22:21'),
(56, '9', '38', 'Pending', '24-09-2024 04:27 AM', '2024-09-24 04:27:01', '2024-09-24 04:27:01'),
(57, '9', '39', 'Pending', '24-09-2024 04:27 AM', '2024-09-24 04:27:47', '2024-09-24 04:27:47'),
(58, '9', '40', 'Pending', '24-09-2024 04:29 AM', '2024-09-24 04:29:38', '2024-09-24 04:29:38'),
(59, '9', '41', 'Pending', '25-09-2024 10:14 AM', '2024-09-25 10:14:08', '2024-09-25 10:14:08'),
(60, '9', '42', 'Pending', '27-09-2024 05:46 AM', '2024-09-27 05:46:28', '2024-09-27 05:46:28'),
(61, '9', '43', 'Pending', '27-09-2024 03:16 PM', '2024-09-27 15:16:38', '2024-09-27 15:16:38'),
(62, '11', '43', 'Confrim Order', '27-09-2024 03:19 PM', '2024-09-27 15:19:14', '2024-09-27 15:19:14'),
(63, '9', '44', 'Pending', '03-10-2024 10:48 AM', '2024-10-03 10:48:16', '2024-10-03 10:48:16'),
(64, '9', '45', 'Pending', '04-10-2024 04:39 AM', '2024-10-04 04:39:50', '2024-10-04 04:39:50'),
(65, '9', '46', 'Pending', '04-10-2024 04:45 AM', '2024-10-04 04:45:09', '2024-10-04 04:45:09'),
(66, '9', '47', 'Pending', '04-10-2024 04:47 AM', '2024-10-04 04:47:48', '2024-10-04 04:47:48'),
(67, '9', '48', 'Pending', '04-10-2024 12:55 PM', '2024-10-04 12:55:04', '2024-10-04 12:55:04'),
(68, '9', '49', 'Pending', '07-10-2024 12:01 PM', '2024-10-07 05:05:06', '2024-10-07 12:01:38'),
(69, '9', '50', 'Pending', '07-10-2024 10:02 AM', '2024-10-07 10:02:27', '2024-10-07 10:02:27'),
(70, '11', '50', 'Confrim Order', '07-10-2024 10:06 AM', '2024-10-07 10:06:58', '2024-10-07 10:06:58'),
(71, '12', '50', 'Pick and Packging', '07-10-2024 10:09 AM', '2024-10-07 10:09:12', '2024-10-07 10:09:12'),
(72, '12', '50', 'Ready for Dispatch', '07-10-2024 10:09 AM', '2024-10-07 10:09:42', '2024-10-07 10:09:42'),
(73, '12', '50', 'Dispatched', '30-09-2024 05:40 PM', '2024-10-07 10:10:18', '2024-10-07 10:10:18'),
(74, '10', '50', 'Out for delivery', '07-10-2024 10:17 AM', '2024-10-07 10:17:21', '2024-10-07 10:17:21'),
(75, '9', '51', 'Pending', '09-10-2024 11:09 AM', '2024-10-09 11:05:01', '2024-10-09 11:09:02'),
(76, '9', '52', 'Pending', '09-10-2024 11:05 AM', '2024-10-09 11:05:09', '2024-10-09 11:05:09'),
(77, '9', '53', 'Pending', '09-10-2024 11:11 AM', '2024-10-09 11:10:52', '2024-10-09 11:11:26'),
(78, '11', '53', 'Confrim Order', '09-10-2024 11:13 AM', '2024-10-09 11:13:50', '2024-10-09 11:13:50'),
(79, '12', '53', 'Pick and Packging', '09-10-2024 11:14 AM', '2024-10-09 11:14:26', '2024-10-09 11:14:26'),
(80, '12', '53', 'Ready for Dispatch', '09-10-2024 11:14 AM', '2024-10-09 11:14:54', '2024-10-09 11:14:54'),
(81, '12', '53', 'Dispatched', '08-10-2024 12:17 AM', '2024-10-09 11:16:49', '2024-10-09 11:16:49'),
(82, '10', '53', 'Delivered', '09-10-2024 11:18 AM', '2024-10-09 11:18:22', '2024-10-09 11:18:22'),
(83, '12', '43', 'Dispatched', '08-10-2024 01:32 AM', '2024-10-09 11:31:51', '2024-10-09 11:31:51'),
(84, '9', '54', 'Pending', '23-10-2024 03:04 PM', '2024-10-23 12:46:35', '2024-10-23 15:04:33'),
(85, '9', '55', 'Pending', '23-10-2024 12:47 PM', '2024-10-23 12:47:58', '2024-10-23 12:47:58'),
(86, '9', '56', 'Pending', '23-10-2024 02:59 PM', '2024-10-23 13:00:01', '2024-10-23 14:59:42'),
(87, '9', '57', 'Pending', '23-10-2024 02:12 PM', '2024-10-23 13:52:38', '2024-10-23 14:12:38'),
(88, '11', '57', 'Confrim Order', '23-10-2024 02:12 PM', '2024-10-23 14:12:53', '2024-10-23 14:12:53'),
(89, '9', '58', 'Pending', '23-10-2024 03:40 PM', '2024-10-23 15:40:42', '2024-10-23 15:40:42'),
(90, '11', '58', 'Confrim Order', '23-10-2024 03:46 PM', '2024-10-23 15:46:29', '2024-10-23 15:46:29'),
(91, '11', '49', 'Confrim Order', '23-10-2024 03:47 PM', '2024-10-23 15:47:14', '2024-10-23 15:47:14'),
(92, '12', '58', 'Pick and Packging', '23-10-2024 03:53 PM', '2024-10-23 15:53:58', '2024-10-23 15:53:58'),
(93, '12', '58', 'Ready for Dispatch', '23-10-2024 03:54 PM', '2024-10-23 15:54:42', '2024-10-23 15:54:42'),
(94, '12', '58', 'Dispatched', '23-10-2024 03:55 PM', '2024-10-23 15:55:45', '2024-10-23 15:55:45'),
(95, '10', '58', 'Out for delivery', '23-10-2024 03:56 PM', '2024-10-23 15:56:39', '2024-10-23 15:56:39'),
(96, '', '59', 'Pending', '24-10-2024 02:08 PM', '2024-10-24 14:08:01', '2024-10-24 14:08:01'),
(97, '', '60', 'Pending', '24-10-2024 02:08 PM', '2024-10-24 14:08:55', '2024-10-24 14:08:55'),
(98, '11', '60', 'Confrim Order', '24-10-2024 02:11 PM', '2024-10-24 14:11:47', '2024-10-24 14:11:47'),
(105, '', '67', 'Pending', '24-10-2024 02:46 PM', '2024-10-24 14:46:04', '2024-10-24 14:46:04'),
(106, '', '68', 'Pending', '24-10-2024 02:49 PM', '2024-10-24 14:49:24', '2024-10-24 14:49:24'),
(107, '', '69', 'Pending', '24-10-2024 02:49 PM', '2024-10-24 14:49:24', '2024-10-24 14:49:24'),
(108, '', '70', 'Pending', '24-10-2024 02:50 PM', '2024-10-24 14:50:23', '2024-10-24 14:50:23'),
(109, '', '71', 'Pending', '24-10-2024 02:50 PM', '2024-10-24 14:50:23', '2024-10-24 14:50:23'),
(110, '', '72', 'Pending', '24-10-2024 02:51 PM', '2024-10-24 14:51:49', '2024-10-24 14:51:49'),
(111, '', '73', 'Pending', '24-10-2024 02:51 PM', '2024-10-24 14:51:49', '2024-10-24 14:51:49'),
(117, '', '79', 'Pending', '24-10-2024 03:17 PM', '2024-10-24 15:17:50', '2024-10-24 15:17:50'),
(118, '', '80', 'Pending', '24-10-2024 03:17 PM', '2024-10-24 15:17:50', '2024-10-24 15:17:50'),
(119, '', '81', 'Pending', '24-10-2024 03:18 PM', '2024-10-24 15:18:18', '2024-10-24 15:18:18'),
(120, '', '82', 'Pending', '24-10-2024 03:18 PM', '2024-10-24 15:18:56', '2024-10-24 15:18:56'),
(121, '', '83', 'Pending', '24-10-2024 03:25 PM', '2024-10-24 15:25:37', '2024-10-24 15:25:37'),
(124, '', '86', 'Pending', '24-10-2024 03:29 PM', '2024-10-24 15:29:58', '2024-10-24 15:29:58'),
(125, '', '87', 'Pending', '24-10-2024 03:29 PM', '2024-10-24 15:29:58', '2024-10-24 15:29:58'),
(127, '', '89', 'Pending', '24-10-2024 03:39 PM', '2024-10-24 15:39:20', '2024-10-24 15:39:20'),
(128, '', '90', 'Pending', '24-10-2024 03:39 PM', '2024-10-24 15:39:20', '2024-10-24 15:39:20'),
(129, '', '91', 'Pending', '24-10-2024 03:53 PM', '2024-10-24 15:53:03', '2024-10-24 15:53:03'),
(130, '', '92', 'Pending', '24-10-2024 03:53 PM', '2024-10-24 15:53:04', '2024-10-24 15:53:04'),
(131, '', '93', 'Pending', '24-10-2024 03:53 PM', '2024-10-24 15:53:37', '2024-10-24 15:53:37'),
(132, '', '94', 'Pending', '24-10-2024 03:53 PM', '2024-10-24 15:53:37', '2024-10-24 15:53:37'),
(133, '', '95', 'Pending', '24-10-2024 04:30 PM', '2024-10-24 16:30:17', '2024-10-24 16:30:17'),
(134, '', '96', 'Pending', '24-10-2024 04:30 PM', '2024-10-24 16:30:17', '2024-10-24 16:30:17'),
(135, '', '97', 'Pending', '24-10-2024 04:45 PM', '2024-10-24 16:45:39', '2024-10-24 16:45:39'),
(136, '', '98', 'Pending', '24-10-2024 04:52 PM', '2024-10-24 16:52:30', '2024-10-24 16:52:30'),
(137, '', '99', 'Pending', '24-10-2024 04:52 PM', '2024-10-24 16:52:30', '2024-10-24 16:52:30'),
(138, '', '100', 'Pending', '24-10-2024 05:09 PM', '2024-10-24 17:09:47', '2024-10-24 17:09:47'),
(139, '', '101', 'Pending', '24-10-2024 05:09 PM', '2024-10-24 17:09:47', '2024-10-24 17:09:47'),
(140, '', '102', 'Pending', '24-10-2024 05:33 PM', '2024-10-24 17:33:35', '2024-10-24 17:33:35'),
(141, '', '103', 'Pending', '24-10-2024 05:33 PM', '2024-10-24 17:33:35', '2024-10-24 17:33:35'),
(142, '11', '103', 'Confrim Order', '24-10-2024 05:35 PM', '2024-10-24 17:35:01', '2024-10-24 17:35:01'),
(143, '12', '103', 'Pick and Packging', '24-10-2024 05:37 PM', '2024-10-24 17:37:31', '2024-10-24 17:37:31'),
(144, '', '104', 'Pending', '12-11-2024 05:31 AM', '2024-11-12 05:31:06', '2024-11-12 05:31:06'),
(145, '', '105', 'Pending', '12-11-2024 05:56 AM', '2024-11-12 05:56:45', '2024-11-12 05:56:45'),
(146, '', '106', 'Pending', '12-11-2024 05:56 AM', '2024-11-12 05:56:45', '2024-11-12 05:56:45'),
(147, '9', '107', 'Pending', '22-11-2024 06:27 AM', '2024-11-22 06:14:41', '2024-11-22 06:27:08'),
(148, '9', '108', 'Pending', '22-11-2024 06:46 AM', '2024-11-22 06:46:57', '2024-11-22 06:46:57'),
(149, '11', '108', 'Confrim Order', '22-11-2024 06:48 AM', '2024-11-22 06:48:34', '2024-11-22 06:48:34'),
(150, '12', '108', 'Pick and Packging', '22-11-2024 06:48 AM', '2024-11-22 06:48:42', '2024-11-22 06:48:42'),
(151, '12', '108', 'Ready for Dispatch', '22-11-2024 06:49 AM', '2024-11-22 06:49:22', '2024-11-22 06:49:22'),
(152, '12', '108', 'Dispatched', '22-11-2024 12:19 PM', '2024-11-22 06:49:43', '2024-11-22 06:49:43'),
(153, '10', '108', 'back to Warehouse', '22-11-2024 06:50 AM', '2024-11-22 06:50:00', '2024-11-22 06:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`, `status`) VALUES
(12, 'Nissan VIP Hamper Kit', NULL, '', '2024-09-03 13:06:32', '2024-11-22 06:05:30', '1');

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

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('dipen@mailinator.com', '$2y$12$Gjr6qXsFPvDTAZkbHp6ZPuY0UaBnPFfU7AdeYi94uWhGe47v9tEfa', '2024-10-07 04:18:28'),
('admin@gmail.com', '$2y$12$5eoecUbrFrIuuy5JV6dLzegp8EX4M7YqA4SVUqoAuivug0ZOH2ubi', '2024-10-04 00:04:35'),
('parth@mailinator.com', '$2y$12$WGNk2tRwhB5DlmvyXv.Ntuf6Q4F0E11YrsUfvOaGULtPBI1vMOG7C', '2024-10-04 01:41:05'),
('natthu@mailinator.com', '$2y$12$i8Q6bhjTRIq2KrIMC/pefuypUZtDsy5u1xjPyX0LZs1TfFqqIRinW', '2024-10-04 07:09:33'),
('devang@mailinator.com', '$2y$12$detejdhuRASfr4Rh9XwqvuXW1DyOFUj6fY1VbdY5z/C4TDe/Xaop.', '2024-10-04 01:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2024-08-30 05:36:37', '2024-08-30 05:36:37'),
(2, 'role-create', 'web', '2024-08-30 05:36:37', '2024-08-30 05:36:37'),
(3, 'role-edit', 'web', '2024-08-30 05:36:37', '2024-08-30 05:36:37'),
(4, 'role-delete', 'web', '2024-08-30 05:36:37', '2024-08-30 05:36:37'),
(5, 'product-list', 'web', '2024-08-30 05:36:37', '2024-08-30 05:36:37'),
(6, 'product-create', 'web', '2024-08-30 05:36:37', '2024-08-30 05:36:37'),
(7, 'product-edit', 'web', '2024-08-30 05:36:37', '2024-08-30 05:36:37'),
(8, 'product-delete', 'web', '2024-08-30 05:36:37', '2024-08-30 05:36:37'),
(9, 'Order-Item', 'web', NULL, NULL),
(10, 'Manage Order', 'web', NULL, NULL),
(11, 'user-list', 'web', NULL, NULL),
(12, 'Manage Order Create', 'web', NULL, NULL),
(13, 'Manage Order Delete', 'web', NULL, NULL),
(14, 'Manage Order Edit', 'web', NULL, NULL),
(15, 'Manage Order status', 'web', NULL, NULL),
(16, 'Dashboard', 'web', NULL, NULL),
(17, 'Manage Countries', 'web', NULL, NULL),
(18, 'Manage Cities', 'web', NULL, NULL),
(19, 'Demo Excel', 'web', NULL, NULL),
(20, 'Import', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'werwerwe', 0, '2025-05-24 11:15:50', '2025-05-26 09:47:51'),
(2, 'ty', 1, '2025-05-24 11:16:32', '2025-05-26 09:47:47'),
(3, 'd', 1, '2025-05-24 11:19:17', '2025-05-24 11:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `products_old`
--

DROP TABLE IF EXISTS `products_old`;
CREATE TABLE IF NOT EXISTS `products_old` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_old`
--

INSERT INTO `products_old` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'vikas', 'example', '2024-08-30 05:41:12', '2024-08-30 05:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2024-08-30 05:36:53', '2024-08-30 05:36:53'),
(2, 'Associate', 'web', '2024-08-30 05:39:03', '2024-08-30 05:39:03'),
(3, 'OBS Coustomer Service', 'web', '2024-09-01 22:38:46', '2024-09-01 22:38:46'),
(4, 'OBS Warehouse team', 'web', '2024-09-01 22:39:15', '2024-09-01 22:39:15'),
(5, 'Dispatch Team', 'web', '2024-09-01 22:39:26', '2024-09-01 22:39:26'),
(6, 'Actor', 'web', '2025-05-24 07:23:08', '2025-05-24 07:23:08'),
(7, 'TV Actor', 'web', '2025-05-24 07:23:21', '2025-05-24 07:23:21'),
(8, 'Freshers', 'web', '2025-05-24 07:23:31', '2025-05-24 07:23:31'),
(9, 'Model', 'web', '2025-05-24 07:23:43', '2025-05-24 07:23:43'),
(10, 'Film Actor', 'web', '2025-05-24 07:23:56', '2025-05-24 07:23:56'),
(13, 'Nash Fulton', 'web', '2025-05-26 02:56:55', '2025-05-26 02:56:55'),
(14, 'Maia Bryant', 'web', '2025-05-26 02:57:22', '2025-05-26 02:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 11),
(1, 12),
(1, 14),
(2, 1),
(2, 13),
(2, 14),
(3, 1),
(3, 12),
(4, 1),
(4, 14),
(5, 1),
(5, 14),
(6, 1),
(7, 1),
(8, 1),
(8, 12),
(9, 1),
(9, 12),
(9, 13),
(9, 14),
(10, 1),
(10, 2),
(10, 3),
(10, 4),
(10, 5),
(10, 12),
(10, 13),
(11, 1),
(11, 12),
(12, 2),
(12, 13),
(12, 14),
(13, 2),
(13, 12),
(13, 13),
(14, 2),
(14, 3),
(14, 12),
(14, 13),
(15, 4),
(15, 5),
(15, 12),
(15, 13),
(16, 1),
(16, 2),
(16, 3),
(16, 6),
(16, 7),
(16, 8),
(16, 9),
(16, 10),
(16, 12),
(16, 13),
(17, 1),
(17, 12),
(18, 1),
(18, 12),
(18, 13),
(18, 14),
(19, 2),
(19, 12),
(19, 13),
(20, 2),
(20, 12);

-- --------------------------------------------------------

--
-- Table structure for table `role_infos`
--

DROP TABLE IF EXISTS `role_infos`;
CREATE TABLE IF NOT EXISTS `role_infos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_kewords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_infos`
--

INSERT INTO `role_infos` (`id`, `role_id`, `image`, `meta_title`, `meta_kewords`, `meta_description`, `short_order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '13', '1748248016.png', 'Earum excepturi in e', 'Voluptatem Nesciunt', 'Laborum Sed non ist', NULL, 0, '2025-05-26 02:56:56', '2025-05-26 04:12:19'),
(2, '14', '1748248042.png', 'Quaerat illo alias q1111111111111111111', 'Amet similique do t111111111111111111', 'Omnis sit vitae cor1111111111111111', NULL, 1, '2025-05-26 02:57:22', '2025-05-26 04:12:23'),
(4, '12', '1748248016.png', 'Earum excepturi in e', 'Voluptatem Nesciunt', 'Laborum Sed non ist', NULL, 0, '2025-05-26 02:56:56', '2025-05-26 02:56:56'),
(5, '11', '1748248042.png', 'Quaerat illo alias q1111111111111111111', 'Amet similique do t111111111111111111', 'Omnis sit vitae cor1111111111111111', NULL, 1, '2025-05-26 02:57:22', '2025-05-26 03:37:28'),
(6, '10', '1748248042.png', 'Quaerat illo alias q1111111111111111111', 'Amet similique do t111111111111111111', 'Omnis sit vitae cor1111111111111111', NULL, 1, '2025-05-26 02:57:22', '2025-05-26 03:37:28'),
(8, '8', '1748248016.png', 'Earum excepturi in e', 'Voluptatem Nesciunt', 'Laborum Sed non ist', NULL, 0, '2025-05-26 02:56:56', '2025-05-26 02:56:56'),
(9, '7', '1748248042.png', 'Quaerat illo alias q1111111111111111111', 'Amet similique do t111111111111111111', 'Omnis sit vitae cor1111111111111111', NULL, 1, '2025-05-26 02:57:22', '2025-05-26 03:37:28'),
(10, '6', '1748248016.png', 'Earum excepturi in e', 'Voluptatem Nesciunt', 'Laborum Sed non ist', NULL, 0, '2025-05-26 02:56:56', '2025-05-26 02:56:56'),
(11, '5', '1748248042.png', 'Quaerat illo alias q1111111111111111111', 'Amet similique do t111111111111111111', 'Omnis sit vitae cor1111111111111111', NULL, 1, '2025-05-26 02:57:22', '2025-05-26 03:37:28'),
(12, '4', '1748248042.png', 'Quaerat illo alias q1111111111111111111', 'Amet similique do t111111111111111111', 'Omnis sit vitae cor1111111111111111', NULL, 1, '2025-05-26 02:57:22', '2025-05-26 03:37:28'),
(13, '3', '1748248016.png', 'Earum excepturi in e', 'Voluptatem Nesciunt', 'Laborum Sed non ist', NULL, 0, '2025-05-26 02:56:56', '2025-05-26 02:56:56'),
(14, '9', '1748248016.png', 'Earum excepturi in e', 'Voluptatem Nesciunt', 'Laborum Sed non ist', NULL, 0, '2025-05-26 02:56:56', '2025-05-26 02:56:56'),
(15, '2', '1748248016.png', 'Earum excepturi in e', 'Voluptatem Nesciunt', 'Laborum Sed non ist', NULL, 0, '2025-05-26 02:56:56', '2025-05-26 02:56:56'),
(16, '1', '1748248016.png', 'Earum excepturi in e', 'Voluptatem Nesciunt', 'Laborum Sed non ist', NULL, 0, '2025-05-26 02:56:56', '2025-05-26 02:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('YucbeoV1vzvDwEZFYt6DdAIfSt7NSoxGXUgpACuB', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiU2N2a0I4MVNVME1tRm1JYVlVTklsNTdyZzVNT3paRWZtQnhsQmlORyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjUxOiJodHRwOi8vbG9jYWxob3N0L2F0dG9tX2RpcmVjdG9yeS9wdWJsaWMvZXhwZXJpZW5jZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTc0ODI3MTUzMDt9fQ==', 1748276170);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `show_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `show_password`) VALUES
(4, 'disma', 'disma@gmail.com', NULL, '$2y$12$R7HSh69n2e5OrjMVOEHCaeQkZ2xx8mDZ/7nHGyHatZlfXXlAFHp/q', '7jPy6GaoBq31giKZfxZE1tAcmMFERZBcvaKtga7iW7FlU3wqJVxGfJ5KHTea', '2024-09-02 01:22:29', '2024-09-02 01:22:29', NULL),
(2, 'Hardik Savani', 'admin@gmail.com', NULL, '$2y$12$rrUxXQjSpCEue8CtPCme7eu8BH3OAoehOwWCbSyOoL9/juCaSlC1u', 'myWhH7a6o07FcGjbw4OASvOOnZkcn8MNgDtFKS2RVDWvRqUPkiDiy98ToCFQ', '2024-08-30 05:36:53', '2024-08-30 05:36:53', NULL),
(3, 'Viral', 'viral@gmail.com', NULL, '$2y$12$65PC03AE1Q9PcQjCkEp3BO3SQ3BR2J4T3xVWNQc7wyYQZXJNWyXYy', 'NFvTqmk1v8lQ5Hz5XWwWz0dbjUPyjIzbPuOoKIKR7WxZdpVx0VEDQKndg7Ux', '2024-08-30 05:39:41', '2024-09-05 04:52:47', 'admin123'),
(5, 'hiten', 'hitenjadav21322132@gmail.com', NULL, '$2y$12$NoRM2w5DzhyJtHZGFKac3OleKjTWFVZbCkShBn2/Suv9w3IwUJSfO', 'nmR6J0ZtDDVjSPEc1AZETmTRRqcoGBxasyMx7nj4FEucyYjd0fQiQnSTN8ko', '2024-09-02 01:35:11', '2024-10-03 23:43:20', 'Hello@123'),
(6, 'mh', 'mh@gmail.com', NULL, '$2y$12$FJ51WUxFop0moLLXmTuPleQNrSLTXj7jY.6Xu8BPOjPzq6kyu.NAG', NULL, '2024-09-03 04:06:32', '2024-09-04 23:49:52', 'admin123'),
(7, 'viral', 'viralode95745@gmail.com', NULL, '$2y$12$o0PCAb7N2S1us36tG5ub4ePkjBT5cSMHhgyJTX89nxoGS0vLsQSjG', NULL, '2024-09-03 07:26:28', '2024-09-03 07:26:28', 'admin123'),
(8, 'test', 'mark@mailinator.com', NULL, '$2y$12$vkSk0WZIQhn31BJAL/L2pOpgq3gwdz820ozGvQ5isYoNacc.3z4oS', 'CQusxPbrR1lX8cUWhu97uAnORioW9Ny7ebX8UHoD7Fefsa3drVPcWAVQJtxB', '2024-09-04 00:36:45', '2024-09-04 23:17:30', NULL),
(9, 'dipen', 'dipen@mailinator.com', NULL, '$2y$12$NM4PyYmJVea0R6qpm747Ye8F2deYgHWLCUtuXyH0xq5MnQByZXjBi', 'N3pvmRMNi8pcRuJBFx3rcuhD5tFybWVLNerwVJ0lopdPSxG2eZdFEUXLhaiO', '2024-09-05 05:58:30', '2024-09-05 05:58:30', '123456789'),
(10, 'devang', 'devang@mailinator.com', NULL, '$2y$12$rtBZhaTM6C4ifVtrKHsZ4emC8yOE1fKCgDwe7BnX6L2eoFOfeDIs6', NULL, '2024-09-05 06:00:03', '2024-09-05 07:11:17', 'admin123'),
(11, 'natthu', 'natthu@mailinator.com', NULL, '$2y$12$Hh9M/4p29GyIcRo1MB/BQu5XkGOojnc91iKzFAbA/hq7zfvWB3xUW', 'Hi30VNww3i4g8jVJfOXihmFn8v1WvCiLrZJHxxkEciRAad8kUA1X23Au1pvX', '2024-09-05 06:02:20', '2024-09-05 06:02:56', '123456789'),
(12, 'parth', 'parth@mailinator.com', NULL, '$2y$12$uNr/PiHVCKY0NkDKOxSMjOxdGdRvZVQ/jiqV.dBbzYArA7voOUsVW', '8UB6COrM7yRrOWRA7WnX6fyFRgSJk25POR0pm8jHx6EXrAFr0mmHjZ4FgzRk', '2024-09-05 06:04:00', '2024-09-05 06:04:00', '123456789'),
(13, 'demotest', 'demotest@gmail.com', NULL, '$2y$12$2dETGyMPFKsxlMWLHjpNFOlR9FT1yhTt22hItp5zwRbxYcrNF12EK', NULL, '2024-11-22 13:32:38', '2024-11-22 13:32:38', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
