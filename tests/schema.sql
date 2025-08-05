-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: main-server-2.de:3306
-- Generation Time: Aug 05, 2025 at 01:04 AM
-- Server version: 10.11.10-MariaDB-log
-- PHP Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u438424651_phober`
--

-- --------------------------------------------------------

--
-- Table structure for table `action_events`
--

CREATE TABLE `action_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch_id` char(36) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `actionable_type` varchar(255) NOT NULL,
  `actionable_id` bigint(20) UNSIGNED NOT NULL,
  `target_type` varchar(255) NOT NULL,
  `target_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fields` text NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'running',
  `exception` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `original` mediumtext DEFAULT NULL,
  `changes` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `authorable_type` varchar(255) NOT NULL,
  `authorable_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `last_updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'APP_NAME', 'Phober', NULL, NULL),
(2, 'APP_ENV', 'local', NULL, NULL),
(3, 'APP_DEBUG', 'true', NULL, NULL),
(4, 'TELESCOPE_ENABLED', 'true', NULL, NULL),
(5, 'LOG_CHANNEL', 'stack', NULL, NULL),
(6, 'LOG_DEPRECATIONS_CHANNEL', NULL, NULL, NULL),
(7, 'LOG_LEVEL', 'debug', NULL, NULL),
(8, 'DB_SHARED_CONNECTION', 'mysql', NULL, NULL),
(9, 'DB_SHARED_HOST', 'db_mysql', NULL, NULL),
(10, 'DB_SHARED_PORT', '3306', NULL, NULL),
(11, 'DB_SHARED_DATABASE', 'phober_shared', NULL, NULL),
(12, 'DB_SHARED_USERNAME', 'root', NULL, NULL),
(13, 'DB_SHARED_PASSWORD', 'root', NULL, NULL),
(14, 'BROADCAST_DRIVER', 'log', NULL, NULL),
(15, 'CACHE_DRIVER', 'file', NULL, NULL),
(16, 'FILESYSTEM_DISK', 'local', NULL, NULL),
(17, 'QUEUE_CONNECTION', 'database', NULL, NULL),
(18, 'SESSION_DRIVER', 'file', NULL, NULL),
(19, 'SESSION_LIFETIME', '120', NULL, NULL),
(20, 'MEMCACHED_HOST', '127.0.0.1', NULL, NULL),
(21, 'MAIL_MAILER', 'smtp', NULL, NULL),
(22, 'MAIL_HOST', 'mailhog', NULL, NULL),
(23, 'MAIL_PORT', '1025', NULL, NULL),
(24, 'MAIL_USERNAME', NULL, NULL, NULL),
(25, 'MAIL_PASSWORD', NULL, NULL, NULL),
(26, 'MAIL_ENCRYPTION', NULL, NULL, NULL),
(27, 'MAIL_FROM_ADDRESS', 'hello@example.com', NULL, NULL),
(28, 'MAIL_FROM_NAME', '${APP_NAME}', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `value` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `customer_id`, `value`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, 'roberta.weber@heathcote.com', 'EMAIL', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(2, 1, 'uhahn', 'TELEGRAM', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(3, 2, 'vidal.olson', 'TELEGRAM', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(4, 2, '+14344130382', 'PHONE', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(5, 2, '+12512693824', 'PHONE', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(6, 3, 'jasmin68', 'TELEGRAM', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(7, 4, '+15419524344', 'PHONE', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(8, 5, '+17795941634', 'PHONE', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(9, 6, 'uconsidine', 'TELEGRAM', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(10, 7, '+19316836468', 'PHONE', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(11, 7, 'tod91@nicolas.org', 'EMAIL', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(12, 7, 'rosalyn61', 'TELEGRAM', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(13, 8, 'nschulist', 'TELEGRAM', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(14, 8, '+16517565900', 'PHONE', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(15, 9, 'gorczany.jacklyn', 'TELEGRAM', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(16, 9, 'rosanna.rogahn', 'TELEGRAM', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(17, 10, 'schowalter.alaina@yahoo.com', 'EMAIL', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(18, 10, 'raheem.berge', 'TELEGRAM', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(19, 11, 'corbin44@hotmail.com', 'EMAIL', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(20, 11, 'daniel.terrill', 'TELEGRAM', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(21, 11, '+18503271467', 'PHONE', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(22, 12, '+16789529462', 'PHONE', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(23, 12, 'ahayes', 'TELEGRAM', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(24, 13, 'demetris.weissnat', 'TELEGRAM', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(25, 13, 'dtillman@gmail.com', 'EMAIL', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(26, 14, 'sporer.emery', 'TELEGRAM', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(27, 14, 'eleonore.kautzer@gmail.com', 'EMAIL', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(28, 14, 'isom.luettgen@gmail.com', 'EMAIL', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(29, 15, 'garfield.becker@crona.org', 'EMAIL', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(30, 15, 'maggie.shanahan@yahoo.com', 'EMAIL', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(31, 16, 'dolores.strosin', 'TELEGRAM', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(32, 16, '+15312539687', 'PHONE', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(33, 16, 'romaguera.eino@gmail.com', 'EMAIL', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(34, 17, 'andy.konopelski', 'TELEGRAM', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(35, 17, '+16508225157', 'PHONE', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(36, 18, 'oconner.regan@gmail.com', 'EMAIL', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(37, 19, '+13869476311', 'PHONE', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(38, 20, '+19036559176', 'PHONE', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(39, 20, 'adams.kip', 'TELEGRAM', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(40, 20, 'kaitlin.franecki@bartoletti.com', 'EMAIL', '2024-10-12 06:19:58', '2024-10-12 06:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `birthday` date NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `discount` smallint(6) NOT NULL DEFAULT 0,
  `balance` int(11) NOT NULL DEFAULT 0,
  `status` varchar(255) NOT NULL DEFAULT 'PENDING',
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `birthday`, `gender`, `discount`, `balance`, `status`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Neha', 'Considine', '2022-02-10', 'M', 0, 50, 'PENDING', NULL, '2024-10-12 06:19:57', '2024-10-12 06:19:57'),
(2, 'Nettie', 'Beier', '1989-08-04', 'M', 0, 14, 'APPROVED', NULL, '2024-10-12 06:19:57', '2024-10-12 06:19:57'),
(3, 'Charity', 'Mitchell', '2005-08-04', 'M', 0, 86, 'BLACKLIST', NULL, '2024-10-12 06:19:57', '2024-10-12 06:19:57'),
(4, 'Ali', 'Lynch', '2002-02-15', 'M', 0, 30, 'BLACKLIST', NULL, '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(5, 'Jamir', 'Cruickshank', '2016-03-16', 'M', 0, 91, 'VIP', NULL, '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(6, 'Ulices', 'Fritsch', '2008-01-05', 'F', 0, 83, 'PENDING', NULL, '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(7, 'Candido', 'Torphy', '2009-05-20', 'M', 0, 38, 'APPROVED', NULL, '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(8, 'Murphy', 'Rippin', '1996-01-07', 'F', 13, 14, 'VIP', NULL, '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(9, 'Monserrate', 'Wiegand', '1994-11-23', 'F', 0, 83, 'APPROVED', 'com.intellij.database.remote.jdbc.LobInfo$ClobInfo@7aa1e30e', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(10, 'Justus', 'Hoeger', '1993-12-17', 'M', 0, 47, 'PENDING', NULL, '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(11, 'Hanna', 'Kris', '2010-11-19', 'F', 0, 6, 'BLACKLIST', NULL, '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(12, 'Ima', 'Ryan', '2013-09-29', 'F', 0, 76, 'PENDING', 'com.intellij.database.remote.jdbc.LobInfo$ClobInfo@41fba1f7', '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(13, 'Rosendo', 'Hayes', '1998-04-13', 'M', 0, 16, 'PENDING', NULL, '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(14, 'Vito', 'Rice', '1973-12-17', 'M', 0, 41, 'APPROVED', NULL, '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(15, 'Aaron', 'Flatley', '2001-05-07', 'M', 0, 12, 'BLACKLIST', NULL, '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(16, 'Asa', 'Okuneva', '2012-12-20', 'F', 0, 9, 'APPROVED', NULL, '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(17, 'Eldora', 'Marquardt', '2012-08-09', 'M', 0, 35, 'APPROVED', NULL, '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(18, 'Afton', 'Gleichner', '2021-03-07', 'M', 0, 90, 'APPROVED', NULL, '2024-10-12 06:19:58', '2024-10-12 06:23:03'),
(19, 'Brady', 'Ratke', '2000-12-15', 'M', 0, 80, 'PENDING', NULL, '2024-11-25 08:25:39', '2024-11-25 08:25:39'),
(20, 'Ransom', 'Cummerata', '1987-01-25', 'M', 0, 93, 'BLACKLIST', NULL, '2024-10-12 06:19:58', '2024-10-12 06:19:58'),
(22, 'Arden', 'Abbott', '1999-01-28', 'F', 0, 45, 'PENDING', NULL, '2024-11-25 08:29:13', '2024-11-25 08:36:29'),
(23, 'asd', 'ads', '2025-02-08', 'F', 0, 0, 'APPROVED', NULL, '2025-02-11 05:40:24', '2025-02-11 05:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`description`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `name`, `type`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'HTC Vive', 'HTC', 'htc-vive', '{\"en\":\"With HTC Vive, upgrades the feelings of real world. Evaluate the new reality, play your favorite games on a completely different level and experience incredible emotions. Do not miss this opportunity!\",\"ru\":\"С HTC Vive реальный мир уступает место фантастическим ощущениям. Оцени новую реальность, играй любимые игры на совершенно другом уровне и испытай невероятные эмоции. Не упусти такую возможность!\",\"az\":\"HTC Vive cihazı eynək və kontrollerlərinin hər tərəfli izlənmə sistemi, realistik qrafika, istiqamətlənmiş səs və ultra dəqiq əks əlaqə sayəsində ən dərin və canlı virtual reallıq səyahətini təmin edir!\"}', '2025-07-13 23:59:53', '2025-07-13 23:59:53'),
(2, 'Oculus Rift', 'OCULUS', 'oculus-rift', '{\"en\":\"Oculus presents a radically new vision of the digital world. Give freedom to your imagination. Dive into the world of games, watch movies with the effect of presence, travel in time and terrain!\",\"ru\":\"Oculus представляет радикально новое видение цифрового мира. Дай волю воображению. Погрузись в мир игр, смотри фильмы с эффектом присутствия, путешествуй во времени и местности!\",\"az\":\"Oculus Rift cihazı keyfiyyətli qrafika, oyun zamanı kontrollerlərin 360°-li imkanları, görüntü dəqiqliyi və ən rahat touchpad\'ları ilə seçilir.\"}', '2025-07-13 23:59:53', '2025-07-13 23:59:53'),
(3, 'PlayStation VR', 'PS_VR', 'ps-vr', '{\"en\":\"Explore stunning new worlds! Feel yourself in the center of the virtual universe and try the whole new way of gaming with the PlayStation VR. Everything is possible in our virtual reality center!\",\"ru\": \"Погрузись в потрясающие новые миры, ощути себя в центре игровой вселенной и попробуй новый способ игры с PlayStation VR. С нами возможно все!\", \"az\": \"PlayStation VR qrafikanın zirvələrini fəth etməkdədir. Burda hər şey fikirləşdiyinizdən daha realdır. PS VR ilə oyuna tamamilə qərq olun və oyunu canlı olaraq hiss edin!\"}', '2025-07-13 23:59:53', '2025-07-13 23:59:53'),
(4, 'Omni Virtuix', 'OMNI', 'omni-virtuix', '{\"en\":\"Omni Virtuix is presented in our center for the first time in Baku! Virtuix Omni VR treadmill, gives you an opportunity toplay games such as Counter Strike, Far Cry, GTA with the real in game presence effect. Running, driving, shooting and etc are available in this Virtual Reality. You are the hero of the game.\",\"ru\":\"Omni Virtuix - первая подвижная платформа виртуальной реальности. Предоставляющая такие функции, как свободное движение в 360º, высококачественная графика и стерео звук, платформа впервые в Баку представлена в центре Phobia VR.\",\"az\":\"Omni Virtuix - ilk hərəkət edən virtual reallıq platformasıdır. Bundan əlavə 360º sərbəst hərəkət, yüksək keyfiyyətli qrafika və stereo səsi ilə fərqlənən bu cihaz Bakıda ilk dəfə Phobia VR mərkəzində təqdim olunur.\"}', '2025-07-13 23:59:53', '2025-07-13 23:59:53'),
(5, '3DOF', 'DOF_3', '3-dof', '{\"en\":\"3DOF racing simulator is a French designed and constructed compact motion rig. Let’s see how much immersion this motion rig adds to my VR racing!\",\"ru\":\"3DOF - симулятор гоночного автомобиля на гидравлике с самой реалистичной графикой. Отличающееся особым комфортом, устройство дает возможность испытать самые новые и популярные гоночные игры в виртуальной реальности.\",\"az\":\"3DOF - canlı qrafika və hidravlika ilə təchiz olunmuş avtomobil simulyatorudur. Rahatlığı ilə seçilən bu cihaz üzərində siz ən yeni və məhşur yarış oyunlarını virtual reallıqda sınaya biləcəksiniz.\"}', '2025-07-13 23:59:53', '2025-07-13 23:59:53');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(1, 'Flavio', 'Rempel', '2025-07-16 23:49:58', '2025-07-16 23:49:58'),
(2, 'Lowell', 'D\'Amore', '2025-07-16 23:49:59', '2025-07-16 23:49:59'),
(3, 'Amira', 'Fadel', '2025-07-16 23:49:59', '2025-07-16 23:49:59'),
(4, 'Anna', 'Barton', '2025-07-16 23:49:59', '2025-07-16 23:49:59'),
(5, 'Cathy', 'Yost', '2025-07-16 23:49:59', '2025-07-16 23:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`description`)),
  `rating` int(11) DEFAULT 0,
  `multiplayer` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `slug`, `video`, `description`, `rating`, `multiplayer`, `created_at`, `updated_at`) VALUES
(1, 'Batman Arkham', 'batman-arkham', 'A8BtoB8MjQ8', '{\"az\": \"Batman’ın əfsanəvi qadjetlərindən istifadə edərək onun ən yaxın dostlarının həyatı üçün təhlükəli olan sui-qəsdin qarşısını alın.\\n\\nMaskanı taxdıqdan sonra özünüzü necə hiss edəcəksiniz?\\n\\nGotham\'i təmizləmə tapşırığınız hələ yeni başlayır, bu dəfə heç vaxt olmadığı qədər qorxuducu və real. Bu virtual reallığa qərq olun və yenilənmiş hekayədə savaşaraq Wayne Manor və Batcave kimi yerləri kəşf edin.\", \"en\": \"Experience Gotham City through the eyes of the World\'s Greatest Detective in an all-new Arkham mystery.\", \"ru\": \"Взгляните на Готэм глазами величайшего детектива на планете и раскройте новое дело Аркхема.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(2, 'Arizona Sunshine', 'arizona-sunshine', 'AQNb-pyzCHY', '{\"az\": \"İsti çöllər və təhlükəli kanyonlardan tərk edilmiş qaranlıq mədən ocaqlarına qədər fərqli sahələri sərbəst olaraq kəşf edin və silahları tapmaqla sağ qalmaq üçün əlinizdən gələni edin. Müxtəlif çeşidli silahlarla gərçək həyatdaki kimi nişan alın və atəş açın. Gücünüz yetmədikdə isə dostlarınızla birgə komanda olaraq bütün ssenarini birlikdə oynayın! Bunun üçün Phobia mərkəzində komandalar üçün nəzərdə tutulmuş ayrı zallar da təqdim olunur!\\n\\nArizona Sunshine - VR üçün xüsusi olaraq hazırlanmış zombi mövzulu şuterdir. Birinci şəxs tərəfindən oynanılır. Arizona Sunshine oyunu oturacaqda oturaraq yalnız baş hərəkətləri etməklə kifayətlənmir, bu oyuna bütün bədən cəlb olunur və əsas qəhrəman bütün hərəkətləri oyunda əks etdirir.\", \"en\": \"Built exclusively for VR, Arizona Sunshine puts you in the midst of a zombie apocalypse. Handle weapons with real-life movements, freely explore a post-apocalyptic world, and put your survival skills to the test in VR - putting the undead back to rest is more thrilling than ever before.\", \"ru\": \"Разработанная исключительно для виртуальной реальности, игра \\\"Солнечная Аризона\\\" погружает вас в самый эпицентр зомби-апокалипсиса. Реалистичные движения при обращении с оружием, открытый для исследования постапокалиптический мир, возможность испытать свои навыки выживания в виртуальной реальности - упокоение неупокоенных еще никогда не было таким захватывающим приключением!\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(3, 'theBlu', 'theblu', 'eQkDfxe9F4k', '{\"az\": \"Dərin sualtı aləmin gözəlliklərini kəşf edin! Bu hissləri sözlə ifadə etmək mümkün deyil, sadəcə özünüz sınayın!\", \"en\": \"\", \"ru\": \"\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(4, 'Superhot', 'superhot', '86aGaUzlvJ4', '{\"az\": \"Ağlasığmaz hisslər! Dinamika və həyəcan! Lakin siz hərəkətsiz dayandığınız an ətrafınızdakı hər şey donur. Bu izaholunmazdır və bu hissləri sizə Phobia yaşadacaq! Əgər siz buna hazırsınızsa.\", \"en\": \"Lose track of what’s real. Commit yourself, body and mind. Confront the evocative, elegantly brutal world of SUPERHOT VR. Enemies pouring into the room from all sides, a dozen bullets coursing through the air.... wait. Something is different here....\", \"ru\": \"Впервые запустив SUPERHOT VR, сразу понимаешь, что игра и виртуальная реальность просто созданы друг для друга. Здесь ты чувствуешь себя настоящим Нео из фильма «Матрица», ведь теперь тебе подвластен контроль над временем. И вот ты, уворачиваясь от летящих в тебя пуль, раздаёшь «хэдшоты» налево и направо. Даже голыми руками с лёгкостью разбиваешь головы несущимся на тебя бандитам, а уж если в твоём распоряжении оказался, например, тесак для разделки мяса, противникам совсем не позавидуешь.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(5, 'Serious Sam', 'serious-sam-fusion-2017', 'VEkC_YAW1kk', '{\"az\": \"Oyunçular arasında ən populyar oyunlardan birini Virtual Realıqda sına! Bu oyun qarşımızda çox sadə qanlı şuter kimi çıxış edir, lakin bu dəfə tam yeni hisslər və emosiyalarla! Virtual Reallığa düşən şuter həvəskarı üçün başqa nə lazımdır?\", \"en\": \"Serious Sam is back! And this time it\'s REAL!\", \"ru\": \"Serious Sam VR: The Last Hope - это Serious Sam для очков виртуальной реальности Oculus Rift и HTC Vive. В распоряжении игроков окажется классический арсенал Сэма, включая ракетницы, пулеметы и легендарная Серьезная пушка.\"}', 4, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(6, 'A Lost Room', 'a-lost-room', 'NA4Stcx9K8w', '{\"az\": \"Son zamanlar böyük marağa səbəb olan Quest Room artıq Virtual Reallıq sistemindədir! Bu oyunda siz ilk baxışdan “adi” bir otaqdan çixiş yolunu tapmalı olacaqsınız. İpucuları axtarın, maraqlı tapşırıqları həll edin və bu “adi” otaqdan çıxmağa çalışın!\\n\\nBu dəfə siz tamamilə kvestə qərq olarkən qıraqdan izləyən dostlarınız sizə kömək edə biləcəklər!\", \"en\": \"A Lost Room is an escape game without the boundaries of the real world, powered by VR. In a place where anything can happen, what will you do to escape this huge complex alive?\", \"ru\": \"A Lost Room - игра-головоломка, в которой Вы должны выбраться из обычной, на первый взгляд, комнаты. Ищите подсказки, решайте интересные пазлы и найдите выход из \\\"обычной\\\" комнаты!\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(7, 'Google Earth VR', 'google-earth-vr', 'agEAWYNkE8A', '{\"az\": \"Dünyanın istənilən yerinə səyahət etməyə və ən böyük xəyallarınızı gərçəkləşdirməyə hazırsınız? Earth VR sizə bu imkanı yaradır! İlk olaraq haralara səyahət edəcəksiniz?\", \"en\": \"Google Earth VR lets you explore the world from totally new perspectives in virtual reality. Stroll the streets of Tokyo, soar over the Grand Canyon, or walk around the Eiffel Tower.\", \"ru\": \"Готовы исследовать мир в виртуальной реальности и посетить самые любимые места на планете? Earth VR дарит вам такую возможность!\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(8, 'Gnomes & Goblins', 'gnomes-goblins', 'Bt2SPU0CwIs', '{\"az\": \"Yaradıcı cırtdanlar yoxsa hiyləgər qoblinlər? Uşaqlar üçün nəzərdə tutulmuş bu oyunda qəhrəmanımız kimin tərəfində olduğunu seçərək sehrli nağıl dünyasına qərq olacaq və möcüzələr aləmini kəşf edə biləcək. Nağıllar dünyası balaca dostlarını gözləyir!\", \"en\": \"Explore the interactive fantasy world of Gnomes &amp; Goblins from Jon Favreau, produced by Wevr in collaboration with Reality One. Interact with an enigmatic resident and take a first step into the lucid dream of Gnomes &amp; Goblins and its many realms and denizens.\", \"ru\": \"Изучите интерактивный мир фантазий гномов и гоблинов. Взаимодействуйте с загадочными жителями и сделайте первый шаг в ясный сон Гномов и Гоблинов.\"}', 3, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(9, 'Tilt Brush', 'tilt-brush', 'e73uSpDk9uA', '{\"az\": \"İncəsənət və onun qədər hədsiz Virtual Reallıq bir arada. Hisslərinizi 3D formatında əks etdirin, bütün otağı kətan əvəzi istifadə edin və eskizlər ətrafında gəzin. Bir halda ki, bu VR-dır alov, ulduzlar və ya qar dənəcikləri kimi imkansız materiallardan istifadə edin!\", \"en\": \"Tilt Brush lets you paint in 3D space with virtual reality. Unleash your creativity with three-dimensional brush strokes, stars, light, and even fire. Your room is your canvas. Your palette is your imagination. The possibilities are endless.\", \"ru\": \"Пожалуй, впервые цифровая живопись настолько приблизилась к традиционной, но сразу сделала шаг дальше, ведь в виртуальной реальности холстом становится любое пространство вокруг, а любая картина трехмерна. Управление Tilt Brush достаточно интуитивно и может осуществляться со смартфона. В отличие от традиционных кистей и красок в новой системе материалом для красок могут стать например искры, языки пламени, капли дождя или звезды. Картина перестает быть статической, превращаясь в динамический объект.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(10, 'A-Escape VR', 'a-escape-vr', 'nQfgmhfc_1g', '{\"az\": \"Xüsusi olaraq VR üçün hazırlanmış kvest. Həyəcan və qorxularınızı kənara atın və çıxış yolunu tapın. Hər şey öz əllərinizdədir, öz gücünüzə güvənin!\", \"en\": \"A-Escape is an escape room game built from the ground up for VR. Will you escape in time?\", \"ru\": \"A-Escape VR - это паззл для очков виртуальной реальности, выполненный в жанре \\\"room escape\\\", где игрокам нужно разгадать ряд загадок, дабы покинуть запечатанную комнату.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(11, 'Fruit Ninja VR', 'fruit-ninja-vr', '8Fteatr4Oro', '{\"az\": \"Halfbrick Studios’dan yenilik! Virtual Reallıqda Ninja qılıncı ilə meyvələri doğramaq telefon versiyasından daha əyləncəli və maraqlıdır!\\n\\nFaktiki olaraq bu mobil cihazlarımızda artıq oynadığımız həmin Fruit Ninja oyunudur, yalnız VR versiyada. Və əgər elə bilirsinizsə ki, bu oyun çox sadədir və diqqətinizə laiq deyil bir daha düşünün - VR’ın ən əyləncəli oyunlarından birini ötürmüş olmayacaqsınız ki?\", \"en\": \"Step inside the Fruit Ninja universe and experience a slice of virtual reality like never before. Play Fruit Ninja VR now!\", \"ru\": \"Взгляните на мир Fruit Ninja под другим углом, и привычная реальность заиграет для вас новыми гранями! Fruit Ninja VR – уже доступна для загрузки.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(12, 'Paranormal Activity: The Lost Soul', 'paranormal-activity-the-lost-soul', 'J1IKMfGN500', '{\"az\": \"“Paranormal Activity” filmini xatırlayırsınız? Onun əsasında qurulmuş macəra dolu VR-qorxu oyununa başlamazdan öncə filmi bir daha izləməyinizi tövsiyyə edirik. Naməlum güc tərəfindən ələ alınmış evdən nəyin bahasına olursa olsun sağ çıxmağa çalışın. Hadisələrin gözlənilməz gedişatına hazır olun. Bu oyun ürəyi zəif olanlar üçün deyil!\", \"en\": \"Engineered from conception for VR, “PARANORMAL ACTIVITY: THE LOST SOUL” immerses you in a terrifying realistic environment with haunting atmosphere, and the need to survive. With very limited guidance, your free-movement enables you to discover the secrets that lie in this house of horror.\", \"ru\": \"Paranormal Activity: The Lost Soul - это приключенческий VR-хоррор по мотивам фильма \\\"Паранормальное явление\\\". Игроки оказываются в доме, на который напало нечто, и пытаются выжить любой ценой.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(13, 'Raw Data', 'raw-data', 'JCP8uLcNELE', '{\"az\": \"Diqqətinizi toplayın, zəkanızı işlədin və gizli məlumatları əldə edin!\\n\\nBu oyunda siz transmilli korporasiyaların əlindən qiymətli məlumatları almaq üçün bir sürü ağıllı androidlərlə gərgin və həyəcanverici mübarizə aparmalı olacaqsınız.\\n\\nRaw Data sizə göründüyündən çox daha üstün hissləri yaşadacaq və əsl mübarizənin nə olduğunu göstərəcək!\", \"en\": \"Built from the ground up for VR, Raw Data’s action gameplay, intuitive controls, challenging enemies, and sci-fi atmosphere will completely immerse you within the surreal world of Eden Corp. Go solo or team up and become the adrenaline-charged heroes of your own futuristic technothriller.\", \"ru\": \"Raw Data - это аркадный шутер для VR-шлемов и очков, в котором игроки должны украсть ценные данные у транснациональной корпорации, ради которых они сражаются с толпами андроидов, а так же с другими людьми по сети.\"}', NULL, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(14, 'The Lab', 'the-lab', '6v780xoFeo4', '{\"az\": \"Ox ataraq qədim əsirlərdəki tək qalanı müdafiə edin; yeni texnoloqiyalar dünyasında robotları parçalayın; robot-itə oyuncaq ataraq ətrafınızdakı mənzərədən zövq alın; kiçik kosmik gəmini idarə edərək hücümlardan qorunun və digər maraqlı oyunlara qatılın. Ən əsası isə bütün ssenariləri Virtual Reallıqda yaşayın!\\n\\nThe Lab hal hazırda Virtual Reallıq üçün təqdim olunan və HTC Vive üzərindən oynanılan ən maraqlı oyunlardan biridir. Əslində bu bir ədəd oyun deyil, bir neçə mini-oyundan ibarət birlikdir və bu birliyin hər bir hissəsi özünə görə maraqlı və əyləncəlidir.\", \"en\": \"Welcome to The Lab, a compilation of Valve’s room-scale VR experiments set in a pocket universe within Aperture Science. Fix a robot, defend a castle, adopt a mechanical dog, and more. Still not sold? It’s free!\", \"ru\": \"The Lab – одна из лучших на данный момент игр для виртуальной реальности, которая достаётся обладателям HTC Vive. На самом деле, это даже не одна игра, а набор из 3 мини-игр, каждая из которых по-своему интересна.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(15, 'The Belko Experiment', 'the-belko-experiment', '3ybfZCJwM1w', '{\"az\": \"Eyni adlı film əsasında yaradılmış oyun. Qorxu və həyəcanla dolu kvest. Bu deyildi sizin istədiyiniz? O zaman hazır olun, bağlı ofisdən çıxış yolunu tapın, amma saniyələrinizi saymağı da unutmayın!\", \"en\": \"Exploring the themes in THE BELKO EXPERIMENT, the Belko VR – Escape Room Experiment provokes the question: “What does it take to survive at work?” Players are prompted to solve a series of challenging puzzles in order to escape from their office before a microchip in their head explodes.\", \"ru\": \"Игра, созданная на основе одноименного фильма. Квест наполненный страхом и волнением. Не этого ли вы ждали? Готовьтесь найти выход из закрытого здания офиса и не забывайте подсчитывать секунды!\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(16, 'VR Funhouse', 'vr-funhouse', 'SED9KE2eScI', '{\"az\": \"Son yeniləmədən sonra VR Funhouse oyun birliyi hədsiz imkanlar əldə edib.\\n\\nVR Funhouse ilə əyləncəyə başlayın! Burada siz oyun və əyləncə dolu əsl lunapark atmosferinə qərq olacaqsınız. Tirdə hərəkət edən nişanlara atəş açacaqsınız, klounların üzərinə su tapançasından yapışqan yaşıl maddə atacaqsınız, nişanlara odlu oxlar atacaqsınız, şarları partladacaqsınız və başqa maraqlı və əyləncəli oyunlara qatılacaqsınız!\", \"en\": \"Step right up to VR Funhouse and enter a virtual carnival full of fun and games. Be an archer with flaming arrows. Test your skill shooting skeet targets blasted from a cannon. See how many moles you can punch, whack, and much more.\", \"ru\": \"В VR Funhouse вам предстоит окунуться в атмосферу настоящего парка аттракционов, полного игр и веселья. С последним обновлением VR Funhouse получила поддержку модов, благодаря чему игровое сообщество теперь располагает бесконечными возможностями для веселья!Поменяйте пистолет с аттракциона на автомат, подожгите волосы кротам или создайте собственную мини игру в виртуальной реальности. С модами в VR Funhouse просто бесконечные возможности для игры.\"}', 3, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(17, 'Locked In VR', 'locked-in-vr', 'R-ow6neZnQ4', '{\"az\": \"Əsl həyəcan hissini yaşamaq istəyirsiniz? O zaman “Locked In VR” oyununa qərq olun və vahiməli zirzəmidən çıxış yolunu tapın! İçinizi bürüyən qorxunu kənara qoyun və burda həbs olunmağınız haqqında bütün gərçəkləri öyrənin. Vaxtınız çox az, otaq çox qaranlıq, “O” isə çox yaxındır.\", \"en\": \"Locked In VR is an escape room type experience. The player must use his wits and senses to find his way out of the basement and uncover the terrible truth about his imprisonment.\", \"ru\": \"Locked In VR – игра жанра «побег из комнаты», в которой вам предстоит найти выход из мрачного подвала. Используйте ум и интуицию, чтобы отыскать путь на свободу и раскрыть страшную правду о своем заключении. Времени на все у вас будет не много, поэтому действуйте быстро. Нужно успеть покинуть подвал до того, как появится тот, кто вас запер.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(18, 'Fancy Skiing VR', 'fancy-skiing-vr', 'JHyXRykkmE0', '{\"az\": \"Şəhərdə olarkən xizək sürməkdən ötrü darıxırsınız? Bu oyun hər kəs üçündür, həm yeni başlayanlar, həm də artıq xizək sevənlər üçün. Rekordları qırın, qış mövsümünə hazırlaşın və əsl adrenalin hissini yaşayın!\", \"en\": \"Fancy Skiing is developed by HashVR Studio built with the Unity Engine.The game\'s structure is based on real skiing that players use the handles just as ski poles to get power and lean left or right to control the direction, which brings players a strong immersion.\", \"ru\": \"Fancy Skiing VR - это VR-игра, посвященная горнолыжному спорту. Эта игра как для начинающих, так и для любителей горных лыж. Готовьтесь к зимнему сезону, бейте все рекорды и ощутите настоящий адреналин!\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(19, 'AFFECTED: The Manor', 'affected-the-manor', 'oXVu-t2u_0E', '{\"az\": \"AFFECTED - The Manor VR doğurdan da qorxulu horrordur. Bu oyunda siz tərk edilmiş evin hər bir küncündə əsl vahimə ilə rastlaşacaqsınız. Oyunda qorxu atmosferini yaratmaq üçün virtual reallığın bütün imkanlarından istifadə olunub.\", \"en\": \"The first chapter of the AFFECTED trilogy is now available on Steam for the HTC Vive. AFFECTED has been commended as one of the best Virtual Reality experiences to date and thus far has over 200 million YouTube hits and countless features worldwide. The most popular horror experience in VR\", \"ru\": \"AFFECTED - The Manor VR - это действительно страшный хоррор. Вы погрузитесь в настоящую пучину ужаса, скрывающуюся за каждым углом заброшенного дома. Игра действительно очень страшная и использует все возможности виртуальной реальности для создания соответствующей атмосферы.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(20, 'Apollo 11', 'apollo-11', 'Lx3zWmpAF5M', '{\"az\": \"Apollo 11 VR bəşəriyyət tarixində görülmüş böyük səyahət haqqında hekayədir.\\n\\nİlk dəfə siz bu inanılmaz tarixi hadisəni bu anları real həyatda yaşayanların yerində dayanaraq hiss edə biləcəksiniz. Sizə yalnız o zamanın detallarını kəşf etdirən deyil, həm də içinizdə NASAnın qızıl erası zamanı \\\"Apollon\\\" proqramı üzərində işləyənlərə qarşı hörmət hissini oyadan bir təcrübəyə hazır olun.\\n\\nApollo 11 VR sənədli filmin yeni növüdür və burda siz yalnız 1969-cu ilin hadisələrini yaşamayacaqsınız, həm də komanda modulu idarəsini öz üzərinizə götürə, Aya eniş apparatını endirə, Ayın səthini araşdıra və Yerə qayıtmaq üzrə eksperimentlər apara biləcəksiniz.\", \"en\": \"Apollo 11 VR is the story of the greatest journey ever taken by humankind. This VR experience is a recreation of the events which took place between July 16th and July 24th, 1969. Now for the first time ever you get to experience this historic event through the eyes of those who lived through it.\", \"ru\": \"Apollo 11 VR - это история о величайшем путешествии в истории человечества.\\n\\nВпервые в истории, вы прочувствуете невероятное историческое событие стоя на месте тех, кто действительно прожил эти моменты в реальной жизни. Приготовьтесь к опыту, который не только откроет вам детали того времени, но и зародит в вас чувство уважения к людям, работающим над программой «Аполлон» во время золотой эры НАСА.\\n\\nApollo 11 VR - это новый тип документального фильма, и вы не только сможете пережить события 1969 года, но и взять управление над командным модулем, посадить лунный посадочный аппарат, исследовать поверхность Луны и развернуть эксперименты перед возвратом на Землю.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(21, 'ARAYA', 'araya', 'f6mJHJ4Wp64', '{\"az\": \"ARAYA birinci şəxs tərəfindən oynanılan horrordur. Hadisələr Tayland hospitallarının birində baş verir.\\n\\nOyunçu üç fərqli qəhrəman tərəfindən hadisələri izləyərək böyük bir pazzlın bütün parçalarını birləşdirməli və Araya adlı şəxsin ölümünün arxasında nələrin dayandığını tapmalıdır.\", \"en\": \"ARAYA is a first-person horror game. Players will get a new thrilling experience inside a Thai hospital. The story will be told from the perspectives of 3 different characters. Players will explore different areas of the hospital in order to piece together the mysterious murder case of Araya.\", \"ru\": \"ARAYA - это мрачный хоррор с видом от первого лица, действие которого разворачиваются в одном из госпиталей Тайланда.\\n\\nНаблюдая за происходящими событиями от лица трех различных героев, игрок должен будет сложить воедино все части одной большой мозаики и узнать, кто же стоит за убийством некой Арайи.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(22, 'Archangel', 'archangel', 'QAUqcFdiAwk', '{\"az\": \"Postapokalipsis janrında virtual şuter. Bu oyunda oyunçular öz üzərinə \\\"Arxanqel\\\" adlı mexaniki robotun pilotu rolunu götürəcəklər.\\n\\nHadisələr XXI-ci əsrin sonlarında, HUMNX meqakorporasiyası tərəfindən idarə olunan Birləşmiş Ştatlardan qalan ərazidə baş verir.\\n\\nSon ümid - altımərtəbəli \\\"Arxanqel\\\" robotunun pilotu olaraq əsas hücum gücü kimi çıxış etdiyiniz ABŞ-ın azadlıq ordusudur.\", \"en\": \"Step into the cockpit of a six-story mech and feel its might at your command! You are the tip of the spear in the United States Free Forces’ war against the overwhelming mechanized forces of HUMNX, a tyrannical corporation that rules a post-apocalyptic America.\", \"ru\": \"Постапокалиптический виртуальный шутер, в котором игрокам предстоит принять роль пилота роботизированного костюма-меха «Архангел».\\n\\nСобытия игры разворачиваются в конце XXI века на территории того, что осталось от Соединенных Штатов, контролируемых мегакорпорацией HUMNX. Последняя надежда на спасение — Освободительные войска США, главной атакущей силой которых являетесь вы — пилот шестиэтажного прототипа робота «Архангел».\\n\\nВнезапная атака HUMNX вынудила военных выпустить первого «Архангела» на поле боя слишком рано, поэтому вам самим придется изучать возможности меха и учиться им управлять. В арсенале робота — разнообразное улучшаемое оружие и массивные металлические кулаки для ближнего боя.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(23, 'The Assembly', 'the-assembly', 'bDzNuoyr6oA', '{\"az\": \"The Assembly oyununda alimlər tərəfindən yaradılmış gizli təşkilat yer alır. Təşkilatın iştirakçıları hesab edirlər ki, mənəvi dəyərlər onların ali potensialını məhdudlaşdırır. Bunkerdə alimlər öz təcrübələrini aparır, bəzilərinin tədqiqat obyekti isə canlı insan olur. The Assembly oyununda təşkilatın laboratoriyasına düşmüş iki əsas qəhrəman çıxış edir.\", \"en\": \"A first-person interactive story inspired by real-world anxieties, The Assembly is a long-form game designed for VR. Explore a morally ambiguous organization as two individuals and face tough decisions from contrasting perspectives, that culminates in one of the multiple thrilling conclusions.\", \"ru\": \"В The Assembly будет фигурировать тайная организация, созданная учеными. Ее участники считают, что мораль сдерживает их научный потенциал. В бункере ученые проводят свои опыты, причем в одном из них объектом исследования становится живой человек. В The Assembly будет два главных героя, которые попадают в лабораторию организации.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(24, 'Audioshield', 'audioshield', '7oF9XSenf40', '{\"az\": \"Audioshield musiqili vizualizatordur. Çarpıcı, aktiv və maraqlı oyun.\\n\\nAudioshield oyununda sizin əllərinizdə qırmızı və göy qalxanlar olur. Onların vasitəsi ilə siz musiqinin ritmini tutaraq üzərinizə gələn qırmızı, göy və bənövşəyi rənglərdə nəhəng topları blok etməli olacaqsınız.\", \"en\": \"Block the beats! Audioshield puts you at the point of impact for every hit in your songs. Block incoming orbs with your shields and feel the music. Works with any song file, plus online music streaming and Song of the Day.\", \"ru\": \"Audioshield — это музыкальный визуализатор. Поразительная, активная и попросту интересная игра.\\n\\nВ Audioshield у вас в руках появляются красный и синий щит с помощью которого вы должны блокировать гигантские пузыри красного, синего или фиолетового цвета, по мере того, как они несутся на вас.\"}', NULL, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(25, 'Bartender VR Simulator', 'bartender-vr-simulator', 'g7QsM00SsYU', '{\"az\": \"Bartender VR Simulator barmenlər arasında dünya çempionatının altıqat qalibi Tomek Malek ilə əməkdaşlıq nəticəsində yaradılmış VR oyundur. Bu oyunda oyunçular özlərini barmen rolunda sınayır, içkilər hazırlamağı, müştərilərlə ünsiyyət qurmağı və digər maraqlı şeyləri öyrənirlər.\", \"en\": \"Developed in cooperation with a six-time Bartending World Champion, Tomek Malek, Bartender VR Simulator offers you a unique combination of a simulator, bartending course and incredible immersive VR game.\", \"ru\": \"Bartender VR Simulator - это VR-игра, созданная в сотрудничестве с шестикратным победителем мирового чемпионата барменов Томеком Малеком, в которой игроки принимают на себя роль бармена, и учатся правильно смешивать напитки, общаться с клиентами и многим другим вещам.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(26, 'Bloody Zombies', 'bloody-zombies', 'ZbwpT5gGPZw', '{\"az\": \"Bloody Zombies oyununda sizi sağ qalanlar qrupunu bütün mövcud vasitələrdən istifadə edərək məhv etməyə çalışan bir çox zombi gözləyir. İti caynaqlar, öz-özünü məhv etmə və digər silahlara qarşı siz qəhrəmanların bütün bacarıqlarını və taktiki düşüncəni istifadə etməli olacaqsınız. Zombilər ətrafında sağ qalmaq üçün bütün vasitələrə əl atmaq olar.\", \"en\": \"Fight across the ruins of London using carefully refined Free-Form Combat, taking down a terrifying variety of mutated zombies with an expanding special move-set. Created for 1-4 players, for online and offline play, Bloody Zombies is also enhanced with HTC Vive and Oculus Rift.\", \"ru\": \"В Bloody Zombies вас ждут множество смертоносных зомби и боссов, которые будут использовать все доступные способы для того, чтобы уничтожить группу выживших. В ход пойдут острые когти, самоуничтожение и другое оружие, против которого игрокам придется применить все возможные навыки персонажей, выработать тактику и совершенствовать свои способности. Любые средства хороши для того, чтобы выжить в окружении голодных зомби.\"}', 4, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(27, 'Battlezone', 'battlezone', 'qAaaI3wyYPw', '{\"az\": \"Virtual Reallığın gücünü hiss edin. Dünyanın ən təhlükəli nəqliyyat vasitələrindən biri olan \\\"Cobra\\\" tankının pilot kabinasında öz bacarıqlarınızı sınayın.\", \"en\": \"Strap into the cockpit of the Cobra – the most powerful tank ever built – and experience first-person VR combat across neon-scarred sci-fi landscapes in an explosive campaign for 1-4 players.\", \"ru\": \"Ощутите всю мощь VR и перенеситесь в кабину пилота одного из самых опасных транспортных средств на планете – танк «Кобра» (Cobra).\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(28, 'Blue Effect', 'blue-effect', 'EyEcLlqB7Ho', '{\"az\": \"Blue Effect VR – Virtual Reallıq cihazları üçün yaradılmış qorxulu şuterdir. Bu oyun sizin cəsarətinizlə dözümlülüyünüzü sınağa çəkəcək. Yüksək texnologiyalarla təchiz olunmuş silahlarla həyatda qalmaq uğruna mübarizə aparın. Dərin qorxularınızla üz üzə gəlməyə hazırsınız!\", \"en\": \"Our VR only, Blue Effect is an atmospheric sci-fi wave shooter that will thrill you with excitement, test your endurance and your bravery! Use our unique control system, enjoy outstanding sound design and fight for your survival. Are you ready to face your darkest fears?\", \"ru\": \"Blue Effect VR – хоррор-шутер на выживание для устройств виртуальной реальности, который испытает вашу отвагу и выносливость. Вооружайтесь высокотехнологичным оружием и сразитесь за свое выживание с мерзкими тварями. Готовы ли вы встретиться лицом к лицу со своими темными страхами?\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(29, 'Bowslinger', 'bowslinger', 'Suk86RP6Csw', '{\"az\": \"Bowslinger - Virtual Reallıqda orta əsr xarabalıqları arasında ox atmadı. Belinizdəki kisədən oxu çıxarın, yayı dartın, nişan alın və atəş açın! Müxtəlif tapşırıqları yerinə yetirin və Robin Hudu belə qısqandıracaq sürət və dəqiqliyi inkişaf etdirin!\", \"en\": \"Ever wanted to shoot an apple off someone’s head? Step into the world of Bowslinger, a VR archery game for the Vive. Grab a bow &amp; arrow and William Tell your way to becoming a master archer. Train your speed and precision with various challenges that would make Robin Hood himself jealous!\", \"ru\": \"Bowslinger - стрельба из лука в виртуальной реальности посреди средневековых руин. Возьмите стрелу из колчана на спине, натяните тетиву, прицельтесь и стреляйте! Выполняя различные задачи, развивайте такую скорость и точность, которые заставили бы завидовать даже Робина Гуда!\"}', NULL, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(30, 'BOXVR', 'boxvr', 'jcay328wPh0', '{\"az\": \"Ritm hissi üzərində qurulmuş ruhlandırıcı boks məşqləri. Peşəkar təlimçilər tərəfindən hazırlanan və mütəmadi olaraq yenilənən müxtəlif məşqləri təqdim edən yeganə əlavədir.\", \"en\": \"Rhythm-Based Boxing Inspired Workouts. The only VR workout app with regularly updated workouts by professional fitness instructors.\", \"ru\": \"Вдохновляющие тренировки по боксу, основанные на чувстве ритма. Единственное приложение с регулярно обновляющимися тренировками от профессиональных инструкторов по фитнесу.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(31, 'The Brookhaven Experiment', 'the-brookhaven-experiment', 'Ke5FtyfgXL8', '{\"az\": \"Bu oyunda sizə elə gələcək ki, siz silahı hər zamankından yüz dəfə daha yavaş doldurursunuz, çünki həmin anda dəhşətli zombilər yaxınlaşır və sizi həyəcanlanmağa vadar edir. Sağ qalmaq üçün özünüzü ələ almalı, fənərin akkumulyatoruna qənaət etməli, hər an ətrafa baxmalı və bütün hərəkətlərinizi planlaşdırmalı olacaqsınız ki, silahı doldurma zamanı dəhşətli zombilərlə üz üzə gəlməyəsiniz.\", \"en\": \"The Brookhaven Experiment is a VR survival shooter for the HTC Vive. Players will have to use the weapons and tools provided to survive ever more terrifying waves of horrific monsters in an attempt to figure out what caused the beginning of the end of the world, and, if they\'re strong enough, stop it from happening.\", \"ru\": \"В The Brookhaven Experiment кажется, что Вы перезаряжаете пистолет в сто раз медленнее, чем обычно, потому что в это время к Вам приближаются ужасные зомби, заставляя Вас нервничать. Чтобы выбраться живым, нужно не терять головы, экономить батарейки на фонарике, постоянно смотреть по сторонам и тщательно планировать свои действия, чтобы вдруг не оказаться в процессе перезарядки прямо перед ужасным лицом врага.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(32, 'A Chair in a room: Greenwater', 'a-chair-in-a-room-greenwater', 'GIE0pNn_Hd4', '{\"az\": \"A Chair in a Room: Greenwater — psixiki xəstəxanada müalicə alan şəxs rolunda olacağınız gərgin qorxu oyunudur. Burda siz özünüz haqqında 6097 nömrəsindən başqa heç nə bilmirsiniz. Hardan olduğunuz və niyə bura düşdüyünüz sir olaraq qalır. Siz sadəcə həkimin verdiyi dərmanları qəbul edirsiniz və özünüz haqda məlumat tapmağa çalışırsınız.\", \"en\": \"Explore your surroundings as the protagonist of your own horror story as you immerse yourself in this tense VR thriller set in America’s Deep South. Navigate your way through your memories, piecing together the clues and puzzles, to solve the mystery of how you have awoken in the sinister Greenwater\", \"ru\": \"A Chair in a Room: Greenwater — это напряженная игра ужасов виртуальной реальности, в которой вам предстоит выступить в роли пациента психиатрической клиники. Вы не знаете о себе ничего, кроме имени и номера – 6079. Откуда вы и почему здесь оказались, остается загадкой. Вы пьете таблетки, которые дает врач и пытаетесь выяснить о себе хоть что-то.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(33, 'Chess Ultra', 'chess-ultra', 'vB3D5X-V028', '{\"az\": \"Dünyanın ən intellektual oyununu Virtual Reallıqda sınayın. Yüksək keyfiyyətli qrafika, fiqurların yerini öz əlinizlə dəyişmək imkanı və güclü rəqiblər sizə real oyun hissini yaşadacaq.\\n\\nİxtiyarınıza mükəmməl şahmat dəstləri, rəqib seçmə imkanı və oyun müddəti veriləcəkdir. Şahmat tarixinə öz adınızı yazmaq imkanını əldən buraxmayın!\", \"en\": \"Introducing Chess Ultra; the most breathtaking chess game ever made. Experience stunning 4K visuals, seamless online multiplayer, Grandmaster approved AI and full VR compatibility.\", \"ru\": \"Сыграйте в самую интеллектуальную игру всех времен в виртуальном мире. Графика с высоким уровнем разрешения и сильные противники дадут ощущение реальной игры. Даже сможете самостоятельно (собственными руками) передвигать фигуры по доске.\\n\\nВам будут доступны идеальные наборы шахмат, возможность выбора противника и продолжительности игры. Не упустите невероятную возможность войти в историю шахмат!\"}', 4, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(34, 'Climbey', 'climbey', 'ZH_oth0tZYo', '{\"az\": \"Climbey - Virtual Reallıqda yüksəklikləri fəth etmək üçün yaradılmış oyundur. Əsas məqsədiniz mümkün qədər tez zamanda bütün maneələrdən keçərək ən hündür nöqtəyə qalxmaqdır. Oyunu anlamaq çox asandır, lakin mənimsəmək bir az çətin olacaq. Qorxularınızla üz üzə gəlməyə cəsarətiniz var?\", \"en\": \"Climbey is a VR-only climbing game! The goal is to climb to the finish as fast as you can, avoiding obstacles and trying not to fall along the way.\", \"ru\": \"Climbey — игра для восхождения в виртуальной реальности! Вам предстоит как можно быстрее подняться к финишной точке, при этом максимально избегая возникающих на вашем пути препятствий. Игру очень легко понять, но крайне сложно освоить. Осмелитесь ли вы бросить себе вызов?\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(35, 'Dead Hungry', 'dead-hungry', 'AwEh7uKIt10', '{\"az\": \"Dünyanın sonu gəldi, zombilər qoşunu yaxınlaşır və siz xilas olmağın tək bir yolunu bilirsiniz: ətli və pendirli cheeseburger\'lər! Əfsanəvi PixelJunk seriyasının yaradıcılarının təqdim etdiyi bu yeni və dinamik oyunda siz heç nədən qorxmayan və əlinin altına keçən hər şeydən düzəltdiyi hamburgerlərlə zombiləri insanlara çevirən fastfood işçisi rolunda olacaqsınız. Məktəbliləri, ofis içşilərini və hətta sumo döyüşçülərini aclıqdan xilas edin!\", \"en\": \"Dead Hungry is a fast-paced VR game developed by Q-Games, creators of the PixelJunk series. Restore zombies to human form by loading up huge hamburgers and hurling them to the grateful undead. Your weapons of choice are burgers, pizza, fries--and anything else you can pick up!\", \"ru\": \"Миру настал конец, орда зомби приближается, и вы знаете только один способ спастись: тройной чизбургер с говядиной и сыром! В новой динамичной игре от создателей легендарной серии PixelJunk вы окажетесь в роли бесстрашного работника закусочной на колесах, который может превращать зомби в людей с помощью гамбургеров, сделанных из всего, что попадается под руку. Спасите школьниц, офисных клерков и борцов сумо от мертвецкого голода.\"}', NULL, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(36, 'Dead Secret', 'dead-secret', 'GKxUTExxmks', '{\"az\": \"Sirli cinayətin jurnalist araşdırması haqqında bəhs edən triller elementləri ilə qarışıq horror. Gizli keçmişi olan Harris Bullard beş gün əvvəl öz iş otağında ölü tapılmışdır. Şübhəli şəxslər yoxdur və polis cinayətkarı axtarmaqda tələsmir. Siz dəlilləri və Harrıs Bullardın keçmişini araşdıraraq bu cinayətin sirrini tapmalı olacaqsınız.\", \"en\": \"Dead Secret is a first-person horror mystery set in rural Kansas in 1965. A reclusive professor is dead and it’s up to you to crack the case before you become the next victim. Investigate the murder and explore the story Time Magazine called “captivating” and “deeply creepy” .\", \"ru\": \"Dead Secret — это хоррор с элементами триллера, который рассказывает об одном журналистском расследовании загадочного убийства. Харрис Буллард, затворник с загадочным прошлым, был найден мертвым в своем кабинете пять дней назад. Подозреваемых нет, и полиция не спешит искать убийцу. Вам предстоит раскрыть тайну этого загадочного преступления, изучая улики и раскрывая тайны прошлого Харриса Булларда.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(37, 'Don\'t Knock Twice', 'dont-knock-twice', 'rJ-axeMT_Lg', '{\"az\": \"Don\'t Knock Twice - süjeti şəhər əfsanəsi üzərində qurulmuş, birinci şəxs tərəfindən oynanılan horror oyunudur. İnanclara görə şəhərdə Baba-Yaqa adlı (bəli, sovet dövrünün nağıllarından tanıdığımız həmin Baba-Yaqa) bir iblis yaşayır. Bu iblis insanları qulluqçu kimi işlədir ki, onlar ona uşaqları yem olaraq gətirsin. Bu iblisin qapısını iki dəfə döyən hər kəs şübhəsiz onun növbəti qurbanına çevrilir.\", \"en\": \"Don\'t Knock Twice is a first-person horror game based on a psychologically terrifying urban legend. One knock to wake her from her bed, twice to raise her from the dead. Supports VR on HTC Vive and Oculus Rift for the ultimate horror experience!\", \"ru\": \"Don\'t Knock Twice — хоррор от первого лица, сюжет которого сосредоточен на городской легенде. По старым поверьям, существует некий демон, Баба Яга (да-да, та самая героиня советских сказок), который использует людей в качестве слуг, чтобы те помогали ему питаться детской плотью. Тот, кто постучит в дверь к этому демону два раза, гарантировано становится его целью и возможной жертвой.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(38, 'Don\'t let Go', 'dont-let-go', 'LH8SsFc0MEA', '{\"az\": \"Qeyri-adi horror: siz ofisdə oturursunuz, masanın üstündə, sizin qabağınızda noutbuk var. Klavişləri basın və saxlayın. Buraxmaq olmaz. Daha sonra isə otaqda qəribə hadisələr baş verəcək, amma siz klavişləri buraxmayın!\", \"en\": \"In these 2 short experiences, you are sat in a chair with your hands in front of you on the keyboard. Now, whatever happens, Don\'t Let Go!\", \"ru\": \"Необычная страшилка: вы сидите в офисе, на столе, перед вами, лежит ноутбук. Нажмите на клавиши и держите их. Отпускать нельзя. Скоро в комнате будут происходить странные вещи…\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(39, 'Dota 2', 'dota-2', 'SHMFmr_Cbp8', '{\"az\": \"Dota 2 - artıq Virtual Reallıq rejimində də təqdim olunan əfsanəvi oyundur. İndi asanlıqla cybersport turnirini keçirmək, gücünüzü və bacarıqlarınızı göstərmək mümkündür!\", \"en\": \"Every day, millions of players worldwide enter battle as one of over a hundred Dota heroes. And no matter if it\'s their 10th hour of play or 1,000th, there\'s always something new to discover. With regular updates that ensure a constant evolution of gameplay, features, and heroes, Dota 2 has truly taken on a life of its\", \"ru\": \"Dota 2 – это легендарная игра, которая стала теперь доступна и в формате виртуальной реальности. Теперь можно с легкостью устроить настоящий киберспортивный турнир и померяться силами и скилами.\"}', 4, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(40, 'Duck Season', 'duck-season', '_hGZBbhiTmE', '{\"az\": \"Virtual Reallıqda - ördəklər ovu simulyatoru! 90-lara qaytaran bu oyun horror elementləri və 8 fərqli sonluqları ilə daha da əyləncəli oldu!\", \"en\": \"The game of your dreams just dropped DUCK SEASON, a hunter with ridiculous graphics. Luckily, it\'s summer vacation and Mom just surprised you with a one day rental of it! Unfortunately, as you binge play it becomes apparent that all is not right with Duck Season...\", \"ru\": \"Сначала кажется, что Duck Season - это обычная VR-версия культовой ретро-игры Duck Hunt для NES. Однако, после того, как вы запустите эту игру на приставке, станет понятно, что эта охота на уток совсем не та, что раньше: утки теперь разрываются на кровавые ошмётки, а пёс-помощник выглядит настолько странно, что никто вас не осудит, если вы его пристрелите.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(41, 'Eleven: Table Tennis VR', 'eleven-table-tennis-vr', 'LN9k6AY4jC0', '{\"az\": \"Virtual Reallıqda stolüstü tennis simulyatoru. Oyuna tamamilə qərq olun, bütün dünya üzrə oyunçularla yarışın, zərbələr üzərində işləyin, reaksiya sürətini artırın, bacarıqlarınızı tətbiq edin və ən güclü rəqiblərlə yarışa hazırlaşın. Sizi real insanlarla real bir yarış gözləyir, o dərəcə real ki, Virtual Reallıqda olduğunuzu unudacaqsınız!\", \"en\": \"The ultimate Table Tennis simulator. Play opponents in online multiplayer or practice against the advanced AI. With physics designed to be as real as ever achieved in a Table Tennis simulator, you will forget you are in VR.\", \"ru\": \"Eleven: Table Tennis VR – симулятор игры в настольный теннис в виртуальном мире. Окунитесь с головой в игру, вступите в схватку с противниками по всему миру, отрабатывайте удары, повышайте скорость реакции, применяйте полученные навыки и тогда сможете бросить вызов самым продвинутым игрокам. Вам предстоит реальный бой с реальными людьми, вы гарантированно забудете о том, что находитесь в виртуальном пространстве.\"}', 4, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(42, 'Emily Wants To Play', 'emily-wants-to-play', 'AAHvF_2o0A4', '{\"az\": \"Pizza çatdıran kuryerin sonuncu sifarişi qalıb. Saatlar 11-i göstərir, sifarişi gətirdiyi yer xeyli boş görünür, evin özü isə tərk edilmiş, pəncərələr taxtalarla qapanıb, qazon baxımsız haldadır. Pizzanın çatdırılması üçün bu yer qəribə olsa da, yağan yağış və evdən sızan işıq onu evə yaxınlaşmağa vadar edir.\", \"en\": \"It’s 11pm and the last house on your route. The windows are boarded up, the yard is overgrown, but the lights are on and the front door is open… strange place to deliver a pizza. You’re getting soaked from the rain, so you hesitantly step inside the house. You shouldn’t have done that.\", \"ru\": \"У безымянного доставщика пиццы выдался тяжелый день. Но вот он почти подошел к концу — на часах 11 ночи, остался последний дом. Район оказался пустоватым, да и дом выглядел каким-то заброшенным с заколотыми наглухо окнами и неухоженным газоном, заросшим травой. Но дождь лил как из ведра, в доме прослеживались признаки света, а заказ был последним в списке. Место для доставки пиццы очень странное, спору нет, но хозяева ведь дома, похоже.\"}', 3, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(43, 'Escape Bloody Mary', 'escape-bloody-mary', 'W58f4ff9p4s', '{\"az\": \"Qanlı Meri əfsanəsi əsasında qurulmuş qısa horror oyunu. İşığı söndürün, şamları yandırın və güzgüyə baxaraq onun adını üç dəfə səsləyin. Bundan sonra ya siz çıxışı tapacaqsınız, ya Meri sizin ruhunuzu alacaq!\", \"en\": \"If you summon an evil spirit, you have to be prepared to face the consequences. Locked in your bathroom you must use your surroundings to stop Bloody Mary from coming through your mirror and claiming your soul in this thrilling VR escape.\", \"ru\": \"Escape Bloody Mary – непродолжительный хоррор для VR, основанный на легенде о Кровавой Мэри. Выключите свет, зажгите свечи и произнесите ее имя три раза, глядя в зеркало в ванной, чтобы призвать ее. Сможете ли вы найти выход, прежде чем Кровавая Мэри заберет вашу душу?\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(44, 'Everest VR', 'everest-vr', 'w-3D_et6cfo', '{\"az\": \"Everest VR - Virtual Reallıqda birinci şəxs tərəfindən oynanılan tədqiqat macərasıdır. Everest zirvəsinə öz otağınızdan belə qalxa bilərsiniz. Oyunçulara dağçıların əsas marşrutları üzrə dünyanın ən arzu olunan zirvəsinə səyahət etmək imkanı verilir.\", \"en\": \"Experience what it feels like to climb Mount Everest through a sequence of immersive first-person locations as you strive to reach the top of the world. Incomparable visual fidelity combined with player agency in a VR journey that feels both real and emotionally stunning.\", \"ru\": \"Everest VR - исследовательское приключение с видом от первого лица для устройств виртуальной реальности. Вы сможете взойти на Эверест прямо из своей комнаты. Игра предлагает отправиться в путешествие по основным маршрутам альпинистов к заветной вершине всего мира.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(45, 'Fast Action Hero', 'fast-action-hero', 'HQKthtBriuo', '{\"az\": \"Bu dəfə sən Max Payne tərzində triller qəhrəmanısan: əllərində silahlar, güllələrin səsi və dağılan divarların gurultusu. İçindəki hissləri çölə burax, dağıt, sındır, kəs. Tozun yerə oturmasını və düşmənlərin son səslərinin kəsilməsini gözlə... və yenidən başla.\", \"en\": \"Dive into your favorite action movie: a smoking gun in your hand, bullets whizzing past your ears while the walls start to crumble around you!\", \"ru\": \"Приветствуем, теперь ты герой боевика в стиле Макс Пейн: в руках по пистолету, свист пулей, грохот разрушенных стен. Выпусти на волю внутреннего зверя, круши, ломай, режь. Дай пыли осесть, а стонам врагов затихнуть… и начни все сначала. Пройди весь путь от начала до конца и дай своей воле сломаться под натиском противника.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(46, 'Final Soccer VR', 'final-soccer-vr', 'oPAHNtMdFBM', '{\"az\": \"Final Soccer VR xüsusi olaraq virtual reallıq üçün nəzərdə tutulmuş futbol simulyatorudur. Bu simulyator oyunçulara qapıçı və ya hücumçu rolunda unudulmaz oyun təcrübəsi yaşadır.\", \"en\": \"Final Soccer VR is a football simulator specially designed for Virtual Reality. It offers an incredible experience playing as a goalkeeper (VIVE/OCULUS) or striker (VIVE). This game was named previously Final Goalie.\", \"ru\": \"Final Soccer VR — это футбольный симулятор, разработанный специально для виртуальной реальности. Он предлагает невероятный опыт игры в качестве голкипера или нападающего.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(47, 'First Person Tennis', 'first-person-tennis', 'j6iKOceRtSI', '{\"az\": \"First Person Tennis - oyunu mümkün dərəcədə reallıq hissi ilə yaşamaq üçün yalnız birinci şəxs tərəfindən oynanılan dünyadakı ilk video oyundur.\\n\\n13 real turniri keçərək və öz rekordlarınızı yüksəldərək dünyanın 1 nömrəli oyunçusu olun!\", \"en\": \"First Person Tennis is the first tennis simulator developed for HTC Vive and Oculus Rift. Now, you can play on a real tennis court and face professional tennis players. You\'ll have to show all your technical and tactical skills. The game is designed for gamepad or keyboard too.\", \"ru\": \"First Person Tennis является первой видеоигрой в мире, созданной только с видом от первого лица, чтобы дать вам улучшенный реализм игры. Попытайтесь стать номером 1 в мире, пройдя все 13 реальных турниров и побив свои личные рекорды!\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(48, 'FORM', 'form', '-xhlIR4DIkg', '{\"az\": \"Tapmacaların yuxu və xatirələrdən ibarət olduğu sürreal macəranı sınayın. Qədim artefaktın sirrini tapın. Ətrafınızda gözəlləşən dünyanı kəşf edin.\", \"en\": \"Enter a surreal adventure where puzzles are built from dreams and memories. Solve the mystery behind an ancient artifact. Advance through a world that transforms around you. Transcend this existence.\", \"ru\": \"Испытайте сюрреалистическое приключение, где головоломки создаются из снов и воспоминаний. Раскройте секрет древнего артефакта. Продвигайтесь через мир, который преображается вокруг вас.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(49, 'The Gallery: Episode 1', 'the-gallery-episode-1', 'XL0QmNBX3TQ', '{\"az\": \"The Gallery - xüsusi olaraq virtual reallıq sistemləri üçün yaradılmış, tədqiqatlar haqqında bəhs edən fantastik epizodik oyundur. Bu oyun 80-ci illərin fantasy janrında olan macəra dolu filmlərinin abu-havasını ötürür.\", \"en\": \"Your missing sister, an ancient machine, and a sinister presence await in this first chapter of The Gallery, the groundbreaking built-for-VR adventure series inspired by dark 80’s fantasy films. Join the VR adventure, and answer the Call of the Starseed.\", \"ru\": \"The Gallery - эпизодическая фэнтезийная игра об исследованиях, созданная специально для систем виртуальной реальности. Она разработана в духе приключенческих фильмов в жанре фэнтези 80-х годов.\"}', NULL, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(50, 'The Gallery: Episode 2', 'the-gallery-episode-2', '0iBttgugMEU', '{\"az\": \"Ovucunuzda sirli yeni gücü hiss etdikdən sonra siz keçmişi sirlərlə dolu, çoxdan unudulmuş Ember dünyasına getməli olacaqsınız. Elsini tapın, Ember tarixinin sirrini açın və qaranlıq fiqurun əsl niyyətini öyrənin\", \"en\": \"After receiving your Gauntlet, a mysterious new power in the palm of your hand, you must travel to Ember, a long-forgotten world whose past holds many secrets. Find Elsie, uncover the history of Ember, and reveal the true intentions of the dark figure in the Starseed.\", \"ru\": \"Получив свою Рукавицу, таинственную новую силу на ладони, вы должны отправиться в Эмбер, давно забытый мир, чье прошлое содержит много секретов. Найдите Элси, раскройте историю Эмбера и покажите истинные намерения темной фигуры в Звездном семени.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(51, 'The Gleam: VR Escape the Room', 'the-gleam-vr-escape-the-room', 'Grogq1cMB_s', '{\"az\": \"The Gleam - HTC Vive üçün yaradılmış kvest oyunudur. Tapmacaların cavablarını tapın, şifrəni öyrənin və \\\"The Gleam\\\" sirlərini aşkar edin ki, bu dəhşətli cəhənnəmdən çıxa biləsiniz.\", \"en\": \"The Gleam is an escape the room game for the HTC Vive. Solve puzzles, decipher code, and unravel the mysteries of the \\\"gleam\\\" in order to escape from this claustrophobic hell.\", \"ru\": \"The Gleam - это квест, созданный специально для HTC Vive. Разрешите головоломки, расшифруйте код и разгадайте тайны The Gleam, чтобы освободиться от этого ужасающего ада.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20');
INSERT INTO `games` (`id`, `name`, `slug`, `video`, `description`, `rating`, `multiplayer`, `created_at`, `updated_at`) VALUES
(52, 'GORN', 'gorn', '_32xYeyqQtA', '{\"az\": \"GORN - Broforce və Genital Jousting yaradıcılarından təqdim olunan VR-ekşn oyunudur. Bu oyunda oyunçular meydanda qladiator rolunda yarışırlar. Oyunçuları müxtəlif silahlar, realistik fikizi cəhətlər və onların əsasında qurulmuş döyüş sistemi gözləyir.\", \"en\": \"GORN is a ludicrously violent VR gladiator simulator, made by Free Lives, the developers of Broforce and Genital Jousting.\", \"ru\": \"GORN - это аркадный VR-экшен от создателей Broforce и Genital Jousting, где игроки сражаются сражаются на аренах в роли гладиаторов. Игроков ждут множество видов оружия, реалистичная физика и основанная на ней боевая система, позволяющая творить с противниками разные нехорошие вещи.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(53, 'Gun Club VR', 'gun-club-vr', 'ir8chcbAHPY', '{\"az\": \"Gun Club VR - poliqon ərazisində qeyri-adi nişanlar və canlı ölülər üzərində müxtəlif çoxsaylı silahları test etməyə imkan verən virtual tirdir.\", \"en\": \"Take to the range with an arsenal of the world’s most powerful weaponry in Gun Club VR. Addictive gameplay and unsurpassed realism combine to make Gun Club VR the ultimate virtual weapon simulator. The only thing missing is the smell of the gunpowder.\", \"ru\": \"Gun Club VR - это виртуальный тир, в котором игроки оказываются на полигоне вместе с огромным количеством разнообразного оружия, которое можно тестировать как на обычных мишенях, так и на нестандартных - вроде полчищ живых мертвецов.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(54, 'Gunheart', 'gunheart', '1dCyc5yBFYM', '{\"az\": \"Gunheart oyununda oyunçu, ağlı və qəlbi bütün qalaktika üzrə ölüm törədən robot-maşınlarla bağlı olan futuristik ovçu rolunda çıxış edəcək. Hərəkətlər hər kəsə artıq tanış olan VR-teleport vasitəsi ilə həyata keçirilir. Burda siz rəqiblərinizi müxtəlif silahlarla məhv edərək növbəti səviyyələrə keçə bilirsiniz.\", \"en\": \"Gunheart is a co-op shooter built from the ground up for virtual reality. You and your friends will inhabit robotic bounty hunters trying to make a buck at the edge of the galaxy; there you will blast aliens, explore exotic locations, and rake in cash to boost your rig.\", \"ru\": \"В Gunheart игрок станет футуристическим охотником, чей ум и сердце связаны с роботами-машинами для убийств по всей галактике. Движение обрабатывается по уже знакомой пользователям VR телепортации, вы можете проходить через уровни, уничтожая врагов различным оружием, которое можно держать в любой руке. Оружие представлено разнообразными видами, начиная с арбалетов, заканчивая штурмовыми винтовками. Также можно перемещаться на возвышенности, чтобы получить преимущество перед врагами. Однако учтите, что соперники быстро адаптируются. Gunheart предлагает вам пройти сюжетный уровень, а также поучаствовать в кооперативе до трех игроков.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(55, 'I Expect You To Die', 'i-expect-you-to-die', '5u7XSzGTN2o', '{\"az\": \"I Expect You To Die, sizi qüsursuz xarici görünüşə malik, yüksək səviyyədə təlimatlandırılmış gizli agentə çevirəcək. Bütün agentlər kimi siz də son dərəcə təhlükəli əməliyyatlara qarışmalı, çıxılmaz vəziyyətlərə və dəhşətli yerlərə düşməli olacaqsınız. Sağ qalmaq üçün ağlınızı, bütün bacarıqlarınızı və zəkanızı işlədin. Faciəvi sonluğun qarşısını almaq üçün mümkün olan bütün resursları istifadə edin.\", \"en\": \"Play as a secret agent armed with telekinetic abilities on a mission to stop Zoraxis, a nefarious global weapons and pharmaceutical corporation.\", \"ru\": \"I Expect You To Die превратит вас в одетого с иголочки и хорошо обученного секретного агента. Как и всем агентам, вам придется браться за крайне опасные для жизни операции, находиться в безвыходных ситуациях и самых мерзких местах. Используйте всю свою смекалку, ум и изворотливость для того, чтобы выжить. Воспользуйся всеми возможными ресурсами, которые найдете для предотвращения трагического исхода. А мы говорили уже о способностях к телекинезу? Хотя, вы и так все узнаете.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(56, 'Iron Wolf VR', 'ironwolf-vr', 'LCwl-uA7ZAo', '{\"az\": \"IronWolf VR - virtual reallıq cihazları üçün yaradılmış sualtı gəmi simulyatorudur. Bu simulyatorda oyunçular düşmən gəmilərini məhv edir, konvoylara hücum etməli və düşmənlərin dağıdıcı hücumlarından gizlənməli olacaqlar.\", \"en\": \"IronWolf VR is a roomscale submarine game playable either singleplayer or online co-op with motion controls. Built from the ground up for VR, each part of the submarine has been crafted for an optimal VR experience\", \"ru\": \"IronWolf VR - это симулятор подводной лодки для очков виртуальной реальности, в которой игроки уничтожают вражеские корабли, охотятся на конвои и уходят от атак эсминцев противника. Игроки могут играть как в одиночку, так и по Сети, выполняя задания вместе с друзьями.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(57, 'Island 359', 'island-359', 'WX5Z-w2vWx4', '{\"az\": \"Helikopterdən enər-enməz, sağ qalmaq uğrunda mübarizə aparan dinozavrlarla dolu mənzərəli tropik adaya ayaq basan oyunçular ilk andan hadisələr mərkəzinə düşürlər. Oyunçulara tam sərbəstlik və çoxsaylı müxtəlif silahlar verilir. Ərazini kəşf etmək və böyük məsafələri tez keçmək üçün isə teleport rejimindən fərqlənən, sürətli qabağa yığmanı xatırladan yeni \\\"sprint\\\" sistemi kömək edəcək.\", \"en\": \"Island 359 is a Virtual Reality survival game for the HTC Vive and Oculus Rift+Touch. Players will use the guns, knives, upgrades, and other tools found on the island to survive for as long as they can against hordes of dinosaurs, as they explore the increasingly dangerous island.\", \"ru\": \"Игроки сразу попадут в гущу событий, высадившись с вертолета на живописный тропический остров, заполненный борющимися за выживание динозаврами.\\n\\nУ вас будет полная свобода действий и куча разнообразного оружия и снаряжения, а исследовать территорию острова и преодолевать большие расстояния без эффекта укачивания поможет новая система \\\"спринта\\\", которая напоминает ускоренную перемотку видео вперед и ощущаться игроком более естественно, нежели телепорты.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(58, 'Job Simulator', 'job-simulator', 'JIZrTK3jD-Y', '{\"az\": \"İstehzalı simulyator. Robotların insanları bütün sahələr üzrə əvəz etdiyi bir dünyada siz \\\"iş simulyatoruna\\\" düşəcəksiniz və işləməyin necə bir hiss olduğunu öyrənəcəksiniz.\", \"en\": \"In a world where robots have replaced all human jobs, step into the \\\"Job Simulator\\\" to learn what it was like \'to job\'.\", \"ru\": \"Ироничный симулятор. В мире, где роботы заменили людей во всех делах, вам предстоит попасть в «симулятор работы», чтобы узнать, каково это было – «работать».\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(59, 'Killing Floor', 'killing-floor', 'QnTj9-E8gDs', '{\"az\": \"Kooperativ zombi-şuter. Oyunçular ağlını itirmiş alimin eksperimentləri nəticəsində azadlığa çıxan və xaos yaradan zombilərin tələsinə düşürlər. Amansız monstrlardan qurtulmaq üçün oyunçulara samballı arsenal təqdim olunur.\", \"en\": \"6-player co-op survival horror at its finest! Free updates, free special events and a ridiculous amount of fun!\", \"ru\": \"Killing Floor – это кооперативный зомби-шутер. Игроки оказываются в ловушке после того, как плоды экспериментов безумного ученого вырываются на свободу и начинают сеять хаос. Чтобы отбиваться от безжалостных толп монстров, игроку предоставляется внушительный арсенал. Например, огнеметом можно заварить двери и тем самым задержать врагов.\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(60, 'La Peri', 'la-peri', 'Hzz0KOuVv9c', '{\"az\": \"Fransız bəstəkar Paul Duk\'un eyni adlı xoreoqrafik poemasının kompozisiyası əsasında qurulmuş virtual balet. Sizi Ölümsüzlük Çiçəyini axtaran şəhzadə İsgəndərin unudulmaz hekayəsi gözləyir. Özünüzü səhnədə, La Peri dünyasının personajlarından biri tək hiss edin.\", \"en\": \"Enter a realm of enchantment with \\\"FIREBIRD - La Péri\\\", and play the role of Iskender, a prince seeking the \\\"flower of immortality\\\". You will appear on the stage, visit the ethereal world of La Péri, and witness a magical and poetic encounter as one of the characters...\", \"ru\": \"Виртуальный балет для VR-устройств, основанный на композиции для одноименной хореографической поэмы французского композитора Поля Дюка. Вас ждет уникальная история Искендера – принца, ищущего Цветок Бессмертия. Вы окажетесь на сцене и посетите эфемерный мир La Peri как один из персонажей.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(61, 'Music Inside', 'music-inside', 'yVW6_1lNRns', '{\"az\": \"HTC Vive və Oculus Touch ilə uyğunlaşan ən yaxşı ritmik VR oyun! Music Inside! Burda siz öz musiqi kitabxananızdan və ya SoundCloud\'un hədsiz siyahısından istənilən mahnını seçə bilərsiniz.\", \"en\": \"The best VR rhythm game compatible with HTC Vive and Oculus Touch! Music Inside! You can choose any song from either your own music library or the never-ending list on SoundCloud.\", \"ru\": \"Лучшая ритмичная VR-игра, совместимая с HTC Vive и Oculus Touch! Music Inside! Вы можете выбрать любую песню из вашей собственной музыкальной библиотеки или бесконечного списка в SoundCloud.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(62, 'Narcosis', 'narcosis', 'HJxFR-iW0NY', '{\"az\": \"Narcosis oyununda Sakit okeanın qaranlıq dərinliklərində sağ qalmağa çalışın!\", \"en\": \"Survival, horror at the sunless depths of the Pacific Ocean: Stranded on the seafloor with low light and few tools, an industrial diver takes desperate steps to surface before his oxygen — and sanity — give out.\", \"ru\": \"Попробуйте выжить в беспросветных глубинах Тихого океана с Narcosis!\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(63, 'NBA 2KVR Experience', 'nba-2kvr-experience', 'Xe90JNkSCvk', '{\"az\": \"\\\"NBA 2KVR Experience\\\" sizə basketbol sahəsinə çıxmaq və Paul George\'dan məsləhətlər almaq üçün bənzərsiz imkan yaradır. Rahat mənimsənən, əyləncəli virtual basketbol matçlarında iştirak edin və təcrübələrinizi artırın. NBA 2KVR Experience ilə peşəkar basketbol matçının abu-havasını hiss edin!\", \"en\": \"NBA 2KVR Experience gives you the thrill of walking right onto the court, with All-Star Paul George providing guidance and tips. Compete in a series of fun and intuitive virtual reality basketball mini-games with numerous Gatorade boosts available to improve your performance.\", \"ru\": \"NBA 2KVR Experience предоставит вам потрясающую возможность выйти прямо на площадку, где Пол Джордж, игрок матча всех звезд, будет помогать вам советами и подсказками. Участвуйте в легких в освоении и веселых баскетбольных мини-играх в виртуальной реальности с доступом ко многочисленным усилениям Gatorade, улучшающим ваши характеристики. С помощью NBA 2KVR Experience вы сможете ощутить атмосферу профессиональной баскетбольной площадки.\"}', 4, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(64, 'Neurowake', 'neurowake', 'KsnAew_wo_U', '{\"az\": \"Neurowake - xüsusi olaraq VR üçün yaradılmış komanda oyunudur. Unikal bacarıqları və müxtəlif silahları ilə fərqlənən beş əfsanəvi qəhrəmandan birini seçin və ayrı-ayrı məkanlarda, fərqli matç tiplərində yarışın!\", \"en\": \"Neurowake is a team-based FPS game, designed exclusively for VR. Choose between one of five epic heroes, each with their own unique weapons and skills and compete across a variety of environments and match types!\", \"ru\": \"Neurowake - это командная игра, разработанная исключительно для VR. Выберите одного из пяти легендарных героев, каждый из которых наделен уникальными навыками и оружием, и соревнуйтесь в различных средах и типах матчей!\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(65, 'Obduction', 'obduction', 'wViIcp9BgSw', '{\"az\": \"Obduction – qeyri-adi dünyalarda möhtəşəm, bənzərsiz, unikal və unudulmaz səyahətdir. Burda siz atəş açmalı olmayacaqsınız. Burda ölmək belə mümkün deyil!\", \"en\": \"A new sci-fi adventure from Cyan, the creators of Myst. Abducted far across the universe, you find yourself on a broken alien landscape with odd pieces of Earth. Explore, uncover, solve, and find a way to make it home.\", \"ru\": \"Obduction – великолепная, завораживающая, уникальная и захватывающая прогулка по очень необычным мирам. Здесь не придется стрелять. Даже умереть здесь нельзя!\"}', NULL, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(66, 'Obscura', 'obscura', 'QkZmyqHnbFc', '{\"az\": \"Qorxunun yeni reallığı. Gördükləriniz xəyallarınızın ardından gələrək tezliklə onları kabusa çevirəcək.\", \"en\": \"A new reality of fear. What you see may follow into your dreams, that will soon turn into nightmares.\", \"ru\": \"Новая действительность страха. То, что Вы видите, может следовать в Ваши мечты, которые скоро превратятся в кошмары.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(67, 'Ocean Rift', 'ocean-rift', 'YFH3n3L1t9Y', '{\"az\": \"Ocean Rift ilə sualtı aləmi kəşf edin. Burda sizi mərcan riflərindən, manqrov bataqlıqlarından və gəmi qəzalarından tutmuş dərin sular, Arktika və Atlantidaya qədər fərqli mühitlər gözləyir.\", \"en\": \"Ocean Rift features 12 habitats ready for you to explore. Environments range from coral reefs, mangrove swamps and shipwrecks, to the deep sea, Arctic and Atlantis.\", \"ru\": \"Исследуйте подводный мир с Ocean Rift. Вас ожидает множество различных мест обитания от коралловых рифов, мангровых болот и кораблекрушений до глубоких морей, Арктики и Атлантиды.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(68, 'OK Bob', 'ok-bob', '1tw-atNk70o', '{\"az\": \"OK Bob - qısa və atmosferli kvest oyunudur. İp uclarını tapın, qeydləri oxuyun və tapşırıqları həll edin ki, son nəticədə burdan çıxış yolunu tapa biləsiniz.\\n\\nOK Bob xüsusi olaraq VR üçün yaradılmış oyundur!\", \"en\": \"OK Bob is a short atmospheric escape room game. Find clues, read notes, and solve puzzles to ultimately make your escape. OK Bob was created exclusively for VR.\", \"ru\": \"OK Bob - короткая атмосферная игра-квест. Найдите подсказки, прочитайте заметки и разрешите головоломки, чтобы в конечном итоге спастись.\\n\\nOK Bob был создан исключительно для VR!\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(69, 'Onward', 'onward', '7BuUTI50dEc', '{\"az\": \"Onward - virtual reallıq cihazları üçün yaradılmış taktik hərbi şuterdir. Oyunçular məqsədlərinə çatmaq üçün koordinasiya, kommunikasiya və atıcılıq bacarıqlarını nümayiş etdirməli olacaqlar.\", \"en\": \"Onward is a Mil-Sim paced tactical multiplayer shooter, being developed for virtual reality head mounted displays. Players will use coordination, communication, and marksmanship skill to complete objectives in online infantry combat.\", \"ru\": \"Onward - это тактический военный шутер для устройств виртуальной реальности. Игрокам предстоит показать свои навыки координации, коммуникации и меткой стрельбы для достижения победы в этом бою.\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(70, 'Overkill VR', 'overkill-vr', '698piynmbrU', '{\"az\": \"Sizin əlinizdə xüsusi missiya və tapança ilə pulemyot kimi silahlardan əlavə həqiqətən ağır silahlarla zəngin samballı arsenal mövcuddur. Düşmənlərinizi məhv edin və özünüzü qoruyun. Ətrafı 360 dərəcə nəzarətdə saxlayın.\", \"en\": \"Overkill VR is an outstanding FPS VR Game for the HTC Vive. You get to utilize your movements to shield yourself from the onslaught of enemies. There are a few things that can be found cumbersome such as aiming but overall you\'ll have a great experience with the game.\", \"ru\": \"У вас есть ваша миссия и внушительный арсенал оружия, в который входят как пистолеты, пулеметы, так и действительно тяжелое вооружение, такое, как РПГ. Уничтожайте врагов и не дайте убить себя, контролируйте обстановку на все 360-градусов.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(71, 'Pavlov VR', 'pavlov-vr', 'JcC-zq91OF0', '{\"az\": \"Pavlovun Stalinqraddakı evini müasir zamana uyğun şəkildə, müasir silahlar və texnoloqiyalarla mühasirə edilməsini əks etdirən VR – şuter. Standart silah dəstinə bıçaqlar, tapançalar, avtomatlar, tüfənqlər və snayper silahları daxildir.\", \"en\": \"Pavlov is a multiplayer shooter for the HTC Vive.\", \"ru\": \"Pavlov VR – это многопользовательский VR-шутер, в котором игроки разыгрывают осаду Дома Павлова в Сталинграде, только на современный манер - с современным оружием, технологиями и прочим.\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(72, 'Rise of Insanity', 'rise-of-insanity', 'c06ps3Mz_D8', '{\"az\": \"Rise of Insanity oyununda Sən psixologiya doktoru olaraq insan zehninin ən qaranlıq sirlərini öyrənəcəksən. Qorxularına qalib gəl və Sənin ailənin başına nələrin gəldiyini öyrən. Bu dəhşət Səni haralara gətirib çıxaracaq?\", \"en\": \"In Rise of Insanity, as a doctor of psychology, you will discover the gloomiest parts of the human brain. Overcome your fear and find out what really happened to your family.\", \"ru\": \"В Rise of Insanity Ты, как доктор психологии, обнаружишь самые темные углы человеческого разума. Преодолей свой страх и узнай, что на самом деле произошло в Твоей семье. До чего доведет Тебя безумие?\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(73, 'Robinson: The Journey', 'robinson-the-journey', 'joudsgnr96E', '{\"az\": \"Robinson: The Journey - macəra dolu VR oyundur. Bu oyunda oyunçuya uzaq bir planetə düşən və ordakı dəhşətli canlılarla mübarizə apararaq sağ qalmağa çalışan tək kosmonavtın rolu verilir.\", \"en\": \"When the Esmeralda crashes on Tyson III, Robin is left stranded. He must rely on his wits – and HIGS, an AI unit from the ship – to survive. As he searches for the lost crew and comes face-to-face with dinosaurs, Robin discovers that Tyson III is not the paradise once promised.\", \"ru\": \"Robinson: The Journey - это приключенческая VR-игра от Crytek, в которой игроку отводится роль одинокого космонавта, оказавшегося на отдаленной планете, населенной различными недружелюбными существами, где тот пытается выжить любой ценой.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(74, 'Sairento VR', 'sairento-vr', 'qWI7SCkQhnY', '{\"az\": \"VR cihazlar üçün nəzərdə tutulan arkada oyunudur. Burda oyunçular yüksək texnologiyalı samuraylar rolunda yaxın gələcəyin Yaponiyasına yollanırlar və burda onları amansız döyüşlər gözləyir.\", \"en\": \"VR was made for this. Perform triple jumps, wall runs, power slides and slow time down while blasting away at a foe before landing to deliver a blade attack on another. Kit yourself with katanas, firearms, bows, throwing glaives and legendary relics. Keep upgrading as you play\", \"ru\": \"Sairento VR - это аркадный экшн для VR-устройств, где игроки в роли высокотехнологичных самураев отправляются в Японию недалекого будущего, где начинается безумная резня.\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(75, 'SHOW MUST GO ON', 'show-must-go-on', '2gvLlmS-X-4', '{\"az\": \"SHOW MUST GO ON - sizə hədsiz əyləncə yaşadacaq sadə ritm oyunur!\\n\\nSəhnəyə çıxın və öz musiqili şounuzu göstərin. Səhnəni rənglər və işıqlarla bəzəyin. Etməli olduğunuz tək şey, ritmi hiss etməkdir!\", \"en\": \"SHOW MUST GO ON is an easy to play rhythm VR game. Jump onto the stage and make your music show. Feel the beat. Hit the drums. Puncture the bubbles. Play with the rhythm. Fill the stage with colors and lights. If you like energetic music, rhythm and drums, this game will give you a lot of fun!\", \"ru\": \"SHOW MUST GO ON - это простая игра в ритм, которая подарит вам массу удовольствия!\\n\\nВыходите на сцену и делайте свое музыкальное шоу. Заполните сцену яркими цветами и светом. Все, что вам нужно сделать, это почувствовать ритм!\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(76, 'The Solus Project', 'the-solus-project', 'jeVRQiFVmeI', '{\"az\": \"The Solus Project - survivor elementləri ilə macəradır, öyrəşdiyimiz kimi macəra elementləri ilə survivor deyil. Müəlliflər ilk öncə maraqlı bir hekayə göstərmək istəyirlər. Buna görə də bizi ardıcıl, yavaş, lakin inadlı bir şəkildə ssenari ilə tanış edirlər: yağışlı, küləkli açıq məkanları yeraltılar və məbədlər əvəz edir və bu məkanlarda əsl macəra başlayır.\", \"en\": \"The Solus Project is a single player exploration adventure with survival elements. The adventure is set on a mysterious planet and is the spiritual successor to The Ball - 2010 PC Gamer Action/Adventure Game Of The Year.\", \"ru\": \"The Solus Project — это приключение с элементами выживания, а не наоборот. Авторы прежде всего хотят рассказать интересную историю. И поэтому очень грамотно, мягко, но настойчиво ведут нас по сценарию, сменяя открытые, подверженные всем ветрам и дождям локации какими-то подземельями, заброшенными комплексами и храмами, где начинается полноценное сюжетное приключение.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(77, 'Space Bit Attack', 'space-bit-attack', 'Wn6xvGoVgUI', '{\"az\": \"Space Bit Attack - retro-arkadanın klassikasına tamamilə yeni baxışdır. Bu oyun sizə kosmik idarə etmənin gərçək bir təcrübəsini yaşadacaq.\", \"en\": \"Space Bit Attack is an entirely new and captivating take on a retro arcade classic that gives you the space pilot experience you’ve always wanted from the cabinet games of yesteryear. Each level of this virtual world features a swarm of aliens poised to attack.\", \"ru\": \"Space Bit Attack - это совершенно новый и захватывающий взгляд на классику ретро-аркады, которая подарит вам опыт настоящего космического пилотирования.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(78, 'Sparc', 'sparc', 'MztlLpmqR0c', '{\"az\": \"Sparc – virtual reallıqda əsl kibersportu gözləyənlər üçün maraqlı oyundur. Bu oyunda taktik addımlara, planlaşdırmaya və təbii ki, bacarığa böyük yer verilir. Sadəcə iki düyməyə basmaqla rəqiblərinizi məğlub etmək alınmayacaq, qalibiyyət uğrunda sözün əsl mənasında tərləməli olacaqsınız.\", \"en\": \"Sparc is a vSport - a unique physical sport only possible in virtual reality, in which players compete in fast-paced, full-body VR gameplay and connect in an online community.\", \"ru\": \"Sparc – увлекательная игра для тех, кто всегда мечтал о настоящем киберспорте для виртуальной реальности. Незамысловатая на первый взгляд механика постепенно раскрывается перед игроком, после чего наступает осознание, что в этой игре есть место тактике, планированию и, разумеется, мастерству, наработать которое не так просто. Одолеть противника, нажимая всего пару кнопок, у вас не выйдет. За победу придётся попотеть в реальном смысле этого слова.\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(79, 'SportsBar VR', 'sportsbar-vr', 'PtUlAcuEB28', '{\"az\": \"SportsBar VR - HTC Vive və Oculus Rift cihazları üçün nəzərdə tutulmuş birinci şəxs tərəfindən oynanılan sosial elementli əyləncəli oyundur. Bütün hadisələr gərçək barların birində baş verir, burda sizi bilyard, stolüstü xokkey, skibol, darts və digər əyləncəli oyunlar gözləyir.\", \"en\": \"The new Sports Bar VR with cross-play is a major social experience update &amp; now available on Steam. A single through 8-player cross-platform virtual sports bar overflowing with fun and silly props, featuring an awesome set of fun games and new game modes for pool, darts, shuffleboard &amp; more.\", \"ru\": \"SportsBar VR - развлекательная игра с социальными элементами и видом от первого лица для устройств виртуальной реальности HTC Vive и Oculus Rift. Все события происходят в самом настоящем баре, где вас ожидает множество развлечений, среди которых бильярд с восемью и девятью шарами, аэрохоккей, скибол, дартс и многое другое.\"}', 4, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(80, 'Super VR Trainer', 'super-vr-trainer', 'lJsgb3ncS_M', '{\"az\": \"Super VR Trainer - Virtual Reallıq üçün nəzərdə tutulan, fərqli oyun təcrübələri yaşadan altı oyunun birliyidir. Onların sırasında zombilərə qarşı şuter, Star Wars\'ın işıq qılıncı ilə qılıncoynatma, nizə atıcılarına qarşı mübarizə, basketbol, hoverboard üzərində uçuşlar və məntiqi düşüncə tələb edən pazzl oyunu var.\", \"en\": \"Unleash your power shooting your opponents with your bow, deflecting blaster shots with your laser swords, surviving an infested hospital, being the king of basket or surfing with your hoverboard. Welcome to Super VR Trainer!\", \"ru\": \"Super VR Trainer - это смесь из шести игр для виртуальной реальности, каждая из которых предоставляет разный игровой опыт. В числе прочих есть шутер про истребление зомби, махание световым мечом из Star Wars, игра на уклонение против копьеметателей, баскетбол, полеты на ховербоарде, а также логический паззл.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(81, 'Surgeon Simulator', 'surgeon-simulator', 'WaN85mKM-_Y', '{\"az\": \"Surgeon Simulator - qalmaqallı və tənqidçilər tərəfindən qəbul edilmiş, detalları və yumoru ilə oyunçuların sevgisini qazanmış cərrah simulyatoru artıq virtual reallıqda!\", \"en\": \"Surgeon Simulator is bringing the ER to VR! The most critically acclaimed and infamous surgery simulation game as you have never seen it before! Featuring all of the surgeries and twisted humour of the original favourite plus a few new surprises...\", \"ru\": \"Surgeon Simulator - скандально известный и признанный критиками симулятор хирурга, со всеми деталями и юмором, так полюбившимися игрокам теперь в виртуальной реальности!\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(82, 'SVRVIVE: The Deus Helix', 'svrvive-the-deus-helix', 'PiVTY2ckT1Y', '{\"az\": \"SVRVIVE: The Deus Helix — yad planetli agent rolunda bəşəriyyəti xilas etməyə çalışan əsas qəhrəman haqqında macəra oyunu.\", \"en\": \"A challenging mystery adventure game ranked as one of the best HTC Vive games of 2017 (PC Advisor). With every mission comes entirely new worlds and puzzles. The story takes you through one of the longest VR games to date.\", \"ru\": \"SVRVIVE: The Deus Helix — это приключенческая игра, в которой главный герой становится инопланетным агентом, пытающимся спасти вселенную.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(83, 'The Talos Principle VR', 'the-talos-principle-vr', 'fKXpqdcAv8w', '{\"az\": \"The Talos Principle VR — Croteam studiyasının virtual reallıq üçün təqdim etdiyi, birinci şəxs tərəfindən oynanılan, dünyaca məhşur fəlsəfi elmi-fantastik tapmaca oyununun yeni versiyası.\", \"en\": \"The Talos Principle VR is a virtual reality version of Croteam\'s critically acclaimed first-person puzzle game in the tradition of philosophical science fiction.\", \"ru\": \"The Talos Principle VR — это новая версия всемирно признанной философской научно-фантастической головоломки от первого лица от студии Croteam для виртуальной реальности.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(84, 'Tethered', 'tethered', '_xHtgdvHLwA', '{\"az\": \"Tethered - bu inanılmaz strateji oyunda sizi real zaman rejimində on üç unikal ada gözləyir! Belə təcrübəni siz hələ yaşamamışdınız\", \"en\": \"Thirteen unique islands await your guiding hand in this beautiful and engrossing real-time strategy game, unlike anything you have experienced before!\", \"ru\": \"Tethered - тринадцать уникальных островов ждут вас в этой захватывающей стратегической игре в режиме реального времени! Такого вы еще не испытывали!\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(85, 'The Thrill of the Fight', 'the-thrill-of-the-fight', 'C-cL8REEjwI', '{\"az\": \"Vurtual rinqdə xüsusi üslüblara və boks texnikalarına sahib unikal qəhrəmanlarla yarışın. Nokaut zərbəsini vaxtında yetirmək üçün zamanı və bütün bacarıqlarınızı istifadə edin. Rinqin əsl kralı olmaq üçün huk zərbələrindən qorunun, ceb zərbələrini yetirin və vaxtında bloklar qoyun.\", \"en\": \"The Thrill of the Fight is a room-scale VR boxing game. Face off in the virtual ring where you\'ll jab, dodge, and sweat your way to the top of the boxing world. Grab your gloves, step through the ropes, and become a champion.\", \"ru\": \"Посетите виртуальный ринг и сразитесь с уникальными претендентами, обладающими своими собственными стилями и техниками бокса. Используйте тайминг и все свое умение, чтобы вовремя нанести нокаутирующий удар. Уклоняйтесь от хуков, посылайте джебы и блокируйте удары, чтобы стать настоящим королем ринга.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(86, 'Time Machine VR', 'time-machine-vr', 'NvkNqG2YM1g', '{\"az\": \"\", \"en\": \"\", \"ru\": \"\"}', NULL, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(87, 'Toon Ocean VR', 'toon-ocean-vr', 'iXjWdb4f6i0', '{\"az\": \"Toon Ocean VR - okean sularının mehriban sakinləri ilə tanış ola biləcəyiniz dörd möcüzəli hadisənin kolleksiyasıdır.\", \"en\": \"Toon Ocean VR is a collection of four magical experiences in which you can meet friendly inhabitants of the ocean.\", \"ru\": \"Toon Ocean VR - это коллекция из четырех волшебных событий, в которых вы можете встретить дружелюбных жителей океана.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(88, 'Tornuffalo', 'tornuffalo', 'ofTgodtwCPU', '{\"az\": \"Bəşəriyyət zəlzələlər, vulkanlar, daşqınlar və qasırğalarla üz üzə gəlib, lakin ən dəhşətli və təhlükəli təbii fəlakət - «Tornuffalo» kimi tanınan hava fenomenidir. Bu virtual reallıq oyununda zərbələrə, bloklara və yayınmalara hazır olun.\", \"en\": \"Humankind has faced earthquakes, volcanoes, floods, and hurricanes—but the most dangerous natural disaster is a weather phenomenon known as the \\\"Tornuffalo\\\". Get ready to dodge, block and hit in this room-scale VR game.\", \"ru\": \"Человечество столкнулось с землетрясениями, вулканами, наводнениями и ураганами, но самым опасным стихийным бедствием является явление погоды, известное как «Tornuffalo». Будьте готовы к уклонениям, блокировкам и ударам в этой виртуальной реальности.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(89, 'The Vanishing of Ethan Carter', 'the-vanishing-of-ethan-carter', 'dtk_aEEPneE', '{\"az\": \"Mənzərəli düzənliyi biz Ethan Carter adlı müştərisini axtaran detektiv Paul Prospero rolunda ziyarət edirik. Bu iş tez bir zamanda Lovecraft dəhşətlərini xatırlatmağa başlayır. Carter ailəsinin üzvləri, sanki bir güc tərəfindən sıxılıb bir birini öldürür; detektiv Prospero\'nun qarşısına isə baş verənlərin reallığını şübhə altına salan qəribə hadisələr çıxır.\", \"en\": \"The Vanishing of Ethan Carter is a first-person story-driven mystery. Purchase this game to get both the original and the Unreal Engine 4 remaster called The Vanishing of Ethan Carter Redux.\", \"ru\": \"Живописную долину мы посещаем в роли детектива Пола Просперо, ищущего своего клиента – мальчика Итана Картера. Дело быстро принимает, по-настоящему, лавкрафтовские тона. Члены семьи Картеров убивают друг друга, словно одурманенные чем-то; по пути Просперо встречаются наистраннейшие вещи, заставляющие усомниться в реальности происходящего.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(90, 'VR: Vacate the Room', 'vr-varcale-the-room', 'hqCwsXSGPks', '{\"az\": \"VR: Vacate the Room sadəcə qısa kvest oyunu deyil, bu inanılmaz VR təcrübəsidir. Burda siz doğru cavabların izinə düşməli, tapmacaları həll etməli və çıxış yolunu tapmalı olacaqsınız.\", \"en\": \"VR: Vacate the Room is a short Escape the Room game.It is a VR Experience where you need to find clues to solve puzzles and find your way out.\", \"ru\": \"VR: Vacate the Room - это не просто короткая квест-игра. Это невероятный опыт VR, в котором вам предстоит найти подсказки для решения головоломок и найти выход.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(91, 'The Wizards', 'the-wizards', 'ANZmJnzz9rk', '{\"az\": \"The Wizard\'s Pen - söz oyunudur. Sizin Sehrbaz dostunuz itkin düşüb. Onu tapmaq üçün siz rebusları həll etməli olacaqsınız. Bunun üçün dostunuzun sehrli reseptlər kitabını diqqətlə vərəqləyin, gizli söz və kəlmələri oxuya bilmək üçün isə sehrli qələmi istifadə edin.\", \"en\": \"Become a powerful Wizard and take fate into your own hands! Immerse yourself in a beautiful fantasy world and use motion controllers to destroy your enemies by weaving elemental magic!\", \"ru\": \"The Wizard\'s Pen - головоломка со словами. Пропал ваш друг Волшебник. Вы сможете его отыскать, разгадывая ребусы. Для этого изучите его книгу с волшебными рецептами и воспользуйтесь магическим пером, чтобы суметь прочесть спрятанные слова и фразы.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(92, 'Zombie Training Simulator', 'zombie-training-simulator', 'MDR8FtwO5wc', '{\"az\": \"Bəs siz zombi apokalipsisə hazırsınız? Biz bir araşdırma apardıq və hazır olduğunuza əmin olmaq istəyirik. Xəbərlərdə zombilərin artıq burda olduqları haqda xəbər yayılanda, dostunuzun zəng edib \\\"Onlar burdadır, kömək et\\\" dediyində, siz nə cavab verəcəksiniz? Doğrudur, siz deyəcəksiniz ki, \\\"Gəlirəm, bir azdan ordayam\\\". Və bu Zombie Training Simulator sayəsində baş verəcək!\", \"en\": \"Are you ready for the zombie apocalypse? We\'ve done the research and want to make sure you\'re prepared. When the news reports the zombies are here and your friend gives you a call, \\\"They\'re here. I need you,\\\" how will you respond? That\'s right, you\'ll say \\\"I\'ll be right over\\\". We\'ve got this thanks to Zombie Training Simulator!\", \"ru\": \"Готовы ли вы к зомби апокалипсису? Мы провели исследование и хотим убедиться, что вы готовы. Когда в новостях сообщается, что зомби здесь, а ваш друг звонит вам со словами: \\\"Они здесь, мне нужна твоя помощь\\\", как вы ответите? Правильно, вы скажете: \\\"Я скоро буду\\\". И это благодаря Zombie Training Simulator!\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(93, 'ZomDay', 'zomday', 'P-M0YrEa6o8', '{\"az\": \"ZomDay – kifayət qədər sürətli oyundur, burda siz SEAT (Special Event Action Team) döyüşçüsü rolunda zombi ordusu ilə mübarizə aparacaqsınız. Amansız zombilər bir biri ilə sözləşərək hücuma keçəcəklər və bu oyunu daha da çətinləşdirəcək. Hər sağ qaldığınız mərhələdən sonra hesab sistemi sizin döyüş keyfiyyətlərinizi qiymətləndirəcək: dəqiqlik, kəlləyə atəş zərbələri, travmalar, zərbələr və s. Reytinqiniz nə qədər yüksək olsa təcrübənizin dəyəri bir o qədər artacaq.\", \"en\": \"As zombie crisis broke out around the world,you will play one of the warrior of S.E.A.T(Special Event Action Team) to fight against the zombies all over the world. ZomDay is a fast pace VR shooting game contains multi-player mod,exciting Boss fight,character perk and hardcore weapon system.\", \"ru\": \"ZomDay – достаточно быстрая игра, в которой вы в роли воина SEAT (Special Event Action Team) сразитесь в целой армией зомби. Неумолимые зомби волной пойдут в атаку, сотрудничая друг с другом, что значительно усложнит игровой процесс. После каждого выживания система расчетов будет оценивать ваши боевые качества: точность, выстрел в голову, травму, удар и т. д. Вы должны правильно использовать драгоценное время между атаками, чтобы купить мощное оборудование в магазине, собрать растраченный воздух. Чем выше рейтинг боевых действий, тем больше будет расход воздуха и ценность опыта.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(94, 'Just In Time Incorporated', 'just-in-time-incorporated', 'tyIbJs72f34', '{\"az\": \"Just In Time Incorporated - \\\"Sığorta\\\" haqqında əyləncəli oyundur. Yeni bir əməkdaş kimi siz müştərilərinizi ölümdən xilas etməli olacaqsınız, çünki təbii fəlakətlər slow-motion rejimində baş verir. Sizin Hiper-Əlcəkləriniz sizə ultra sürətli, teleportasiya edən güllələri tutmağa imkan verir və bu əladır, çünki ölüm bu komediyalı ekşn oyununun hər küncündə gizlənir!\", \"en\": \"As a \\\"Death Prevention Insurance” agent, your job is saving clients from certain death as disasters play out in slow-motion. Your Hyper-Gloves allow you to move super-fast, teleport and even catch bullets. It\'s a good thing too because death lurks in every corner in this virtual reality action/comedy.\", \"ru\": \"Just In Time Incorporated - веселая игра о «Страховании». Как новый сотрудник, вы должны будете спасти ваших клиентов от смерти, поскольку стихийные бедствия разворачиваются в замедленном темпе. Ваши Гипер-Перчатки позволяют вам перемещать сверхбыстрые, телепортируемые пули. И это отлично, потому что смерть скрывается в каждом уголке этого комедийного экшена для виртуальной реальности!\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(95, 'HOMEBOUND', 'homebound', 'm26P_pFBBJc', '{\"az\": \"Oyunda sizə qəzaya uğrayan bir kosmik apparatın sərnişini rolu verilir. Sağ qalmaq üçün mümkün qədər tez bir zamanda siz hərəkət planı fikirləşməli olacaqsınız. Qəza prosesi otuz dəqiqə davam edir və bu yarımsaat ərzində kosmik apparat asteroidlər sahəsindən və stratosferadan keçərək möhkəm sürətlə yerə düşəcək.\", \"en\": \"Immerse yourself in the most beautiful and spine-chilling VR experience to date. Experience a series of catastrophic events in the cold void of deep space as you crash rapidly towards earth. When disaster strikes, your one mission is to make it out alive as fast as you can. Dead or alive, you are Homebound.\", \"ru\": \"В игре вам отводится незавидная роль пассажира космического аппарата, который терпит крушение. Нужно как можно скорее придумать план действий для своего спасения. Весь процесс падения занимает около тридцати минут, за которые аппарат пронесется через поле астероидов, стратосферу и с огромной скоростью рухнет на землю.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(96, 'High Noon VR', 'high-noon-vr', 'DkKvRDJEKfQ', '{\"az\": \"Şəhərdə yeni şerif ortaya çıxdı! High Noon - Vəhşi Qərb təpələrində itkin düşən balaca bir şəhərin yeni şerifi rolunda çıxış edəcəyiniz əyləncəli VR-şuterdir.\", \"en\": \"There is a new sheriff in town! High Noon is a fun VR shooter where you play as a sheriff in a small town somewhere in the Wild West.\", \"ru\": \"В городе новый шериф! High Noon — весёлый VR шутер, в котором вам предстоит примерить на себя роль нового шерифа небольшого городка, затерянного где-то в прериях Дикого Запада.\"}', 3, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(97, 'Henry the Hamster Handler', 'henry-the-hamster-handler', 'Z5R7vlsBCDQ', '{\"az\": \"Sizin adınız Henridir, əfsanəvi birəlli dağsiçanı yetişdiricisi. Hamsters Inc. korporasiyasına daxil olmağınızın zamanı gəldi. Burda sizin əsas məqsədiniz - sonu yaxınlaşan dağsiçanlarının istehsalı və yayılmasıdır.\", \"en\": \"You are Henry, the legendary one-handed hamster handler, and it\'s your job to save the mass-produced balls of fluff! It’s time to punch in at Hamsters Inc., where your usual menial task of hamster production and distribution has gone kaput!\", \"ru\": \"Вы Генри, легендарный однорукий дрессировщик хомяков, и ваша задача - сохранить массовое производство пушистых шариков! Пришло время вступить в Hamsters Inc., где ваша обычная задача - производство и распространение хомяков, которым наступает конец!\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(98, 'Gunship Battle 2 VR', 'gunship-battle-2-vr', '1zYNEC1iSJ8', '{\"az\": \"Dünyanın ən mükəmməl döyüş gəmisi kabinasının idarəsini öz üzərinizə götürün! Epizodik hekayə ilə komplektdə VR səhnələr və inanılmaz gameplay təqdim olunur, Gunship Battle 2 sadəcə daha bir VR təcrübəsi deyil, mükəmməl bir oyundur. Bu ekşn-səyahətini elə indi özünüzə bəxş edin!\", \"en\": \"Take control of the most advanced gunship cockpit on the planet! Complete with an episodic story, VR cut scenes and immersive gameplay, this game is not just another VR experience, but a full-fledged game. Indulge yourself in this action-packed journey now!\", \"ru\": \"Gunship battle 2 VR - помогите профессиональному пилоту спасти мир. Управляйте современным военным вертолетом и участвуйте в воздушных сражениях. Дилан, главный герой этой игры для Андроид, участвовал в секретном правительственном проекте. Он потерял свою память и семью. Теперь он должен отомстить злодеям. Дилан занимает пилотское кресло боевого вертолета и устремляется в бой. Проведите его над океанами и сушей. Уничтожайте воздушные и наземные цели при помощи ракет и автоматических пушек вертолета. Выполняйте фигуры высшего пилотажа.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(99, 'VR Golf Online', 'vr-golf-online', 'mGxatItMrrg', '{\"az\": \"VR Golf Online - saatlarla qolf və ya tennis oynayaraq istirahət etməyi sevənlər üçün nəzərdə tutulur. Yaradıcılar çox çalışdılar və oyunu daha da maraqlı etmək üçün 36 ədəd fərqli kort yaratdılar. Oyunun əvvəlində istifadəçini qısa təlim gözləyir, daha sonra isə matç. VR Golf simulyatorunu həm tək oynamaq və kompyuterlə yarışmaq, həm online rejimdə oynamaq mümkündür. Online oyunda siz rəqiblərinizlə real zaman rejimində yarışacaqsınız.\", \"en\": \"When Golf meets the limitless possibilities of Virtual Reality, the green is only inches away! Practice your swing and develop your techniques to improve your handicap. Step onto one of the 36 realistic holes, with additional courses planned for the near future.\", \"ru\": \"Игра рассчитана на тех, кто часами готов отдыхать, играя в теннис или гольф. Разработчики постарались и сделали 36 отдельных кортов. В самом начале игры пользователя ждет короткое обучение, а затем непосредственно сам матч. Можно играть одному и сражаться с компьютером, либо включить он-лайн режим. Тогда приложение найдет вам соперника в режиме реального времени.\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(100, 'VR Invaders', 'vr-invaders', 'FnKxWSOU4j4', '{\"az\": \"Bu inanılmaz şuter-ekşn oyununda düşmənlərinizi məhv edin. Dar və qaranlıq yerlərdən tutmuş geniş işıqlı yerlərə qədər fərqli məkanlarda yarışın. Qarşınıza çıxan hər şeyi məhv edin! Bu işğaldan sonra detallı şəkildə təsvir olunmuş hər mərhələ virtual xarabalıqlara çevriləcək.\", \"en\": \"Dive into a virtual sci-fi world as the freelance hacker Thomas Hall to save a cyber artist that got stuck in virtual reality. Fight legions of enemy drones with your multi-functional loadout. Slow time, transform your weapon and blast through your enemies in this immersive VR shooter.\", \"ru\": \"Разнеси врагов на кусочки в безумном шутер-экшене. Сражайся в самых разных локациях — от тесных и замкнутых до просторных и светлых. Сметай все на своем пути! Каждый детально прорисованный уровень после твоего вторжения превратится в виртуальные руины.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(101, 'Space Pirate Trainer', 'space-pirate-trainer', '_AtYAfCPKO4', '{\"az\": \"Space Pirate Trainer - oyunçulara özlərini kosmik quldurlarının rolunda sınamağa imkan verən VR cihazlar üçün nəzərdə tutulmuş, arkada janrında kosmik ekşn oyunudur.\", \"en\": \"Space Pirate Trainer is the official trainer for wannabe space pirates. Pick up your blasters, put on your sneakers, and dance your way into the Space Pirate Trainer hall of fame.\", \"ru\": \"Space Pirate Trainer - это аркадный космический экшен для VR-устройств, который позволяет игрокам побывать в шкуре космического пирата.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(102, 'Rick and Morty: Virtual Rick-ality', 'rick-and-morty', 'yC-vwRtxXxk', '{\"az\": \"Rick and Morty: Virtual Rick-ality - macəra dolu VR oyundur. Yaradıcı şirkət hələ Job Simulator oyununun hazırlanması zamanında göstərdiyi komediya istedadlarını və qabiliyyətlərini istifadə edərək \\\"Rick and Morty\\\" serialının yüksək standartlarına cavab verən əyləncəli və maraqlı oyunu uğurla təqdim edib.\", \"en\": \"Rick and Morty: Virtual Rick-ality smashes together the absolute VR chaos of the award-winning Job Simulator with the ridiculous, all-out, take-no-prisoners comedy of Rick and Morty.\", \"ru\": \"Rick and Morty: Virtual Rick-ality - это приключенческая VR-игра. Компания использовала все свои комедийные таланты, которые проявила еще в Job Simulator, создав по-настоящему веселую и захватываю игру во вселенной «Рика и Морти», которая соответствует высоким стандартам самого сериала.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(103, 'Proton War', 'protonwar', 'EkCCoRnOd5A', '{\"az\": \"Proton War - birinci şəxs tərəfindən oynanılan və VR cihazlar tərəfindən dəstəklənən kosmik şuterdir. Bu oyunda istifadəçilər divar üzərində qaçış, ikiqat tullanma və digər akrobatik tryukları istifadə edərək müxtəlif arenalarda yarışırlar.\", \"en\": \"Multiplayer focused, Fast paced FPS with an emphasis on quick and flowing movement. Featuring DM, TDM, CTF, Domination, AI to practice against, and a Horde mode for single player or co-op. Full Room Scale VR with HTC Vive and Oculus Touch. Also included, Non-VR and Seated VR!\", \"ru\": \"Proton War - это космический шутер с видом от первого лица и поддержкой VR-устройств, где игроки сражаются друг с другом на разнообразных аренах, используя бег по стенам, двойные прыжки и другие акробатические трюки\"}', 3, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(104, 'Primal Carnage', 'primal-carnage', 'eGjErADcqas', '{\"az\": \"Primal Carnage - \\\"Yura Dövrü Parkı\\\" filmindən ilhamlanaraq yaradılmış şuterdir. Oyunçular insanlar və ya dinozavrlar tərəfində oynamaq arasında seçim edəcəklər. Multyplayer rajimində hər iki tərəf arasında inanılmaz mübarizəni yaşamaq mümkündür. Burda bir tərəfi seçmək çox çətin olacaq. Dinozavrların beş növündən birini seçərək oyunu yalnız üçüncü şəxs tərəfindən oynamaq mümkündür, insanlar tərəfini seçənlər birinci şəxs tərəfindən oyanayacaqlar.\", \"en\": \"Unleash your inner dinosaur! Primal Carnage is an online multiplayer shooter that immerses its players in skilled PVP combat. Fight as man or beast in savage class-based deathmatches and a tense objective-oriented escape mode!\", \"ru\": \"Primal Carnage - шутер, создание которого вдохновил фильм \\\"Парк Юрского периода\\\". Игрок выбирает между тем, чтобы играть за людей или за динозавров. В режиме многопользовательской игры можно воплотить настоящие схватки между охотниками обоих видов. Здесь будет сложно сделать ставку на кого-то одного. Если вы выбираете один из пяти классов динозавров, вид камеры будет от третьего лица. А если людей, то вид будет от первого лица.\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(105, 'Legendary Hunter VR', 'legendary-hunter-v', 'X3hpfm8o9NY', '{\"az\": \"Legendary Hunter VR — əfsanəvi Duck Hunt oyunu tərzində, VR texnologiyaların istifadəsi ilə yaradılmış ördək ovu simulyatorudur. Qəddar qarğaların və arıların hücumlarını dəf edərək ördəkləri ovlayın. Gərgin iş gününün sonunda əylənmək üçün əla oyundur.\", \"en\": \"Legendary Hunter VR is a VR duck hunting game inspired by the old classic NES game Duck Hunt. Hunt Duck during the daytime while surviving vicious crow attacks. And survive the wolves and the crocodiles at night. Enjoy the day/night cycles with dynamic weather and atmospheric surround sound.\", \"ru\": \"Legendary Hunter VR — охота на уток с использованием технологии VR в стиле известной классической игры Duck Hunt (NES). Охотьтесь на уток, отбивая атаки злобных ворон и пчел. Расслабляющая игра, в которую хочется играть после напряженного рабочего дня.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(106, 'Guns\'n\'Stories: Bulletproof VR', 'gunss-stories-bulletprof-vr', 'HoN213PmrUY', '{\"az\": \"Guns’n’Stories: Bulletproof - oyunçuları Vəhşi Qərb abu-havasına tamamilə qərq edən dinamik VR-şuterdir. Oyunun qarışıq süjeti ilə addımlayaraq siz təhlükəli, amma bir o qədər də gülməli düşmənlərə rast gələcəksiniz və Böyük Bosla mübarizə aparacaqsınız\", \"en\": \"Just shooting and just fascinating stories! Listen to narratives and go deeply into each story, that you have never seen. You will appear in Sintown world of Wild West era, you need to destroy amounts of enemies, fight with crafty bosses. Your best fellow travelers are cynic humor and charisma.\", \"ru\": \"Guns’n’Stories: Bulletproof это динамичный VR-Вестерн шутер, который полностью и без остатка погружает игроков в атмосферу странного Дикого Запада. Следуя по запутанному сюжету, вы столкнетесь с толпами грозных, но комичных врагов и сразитесь с Большими Боссами.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(107, 'Ghost Town Mine Ride & Shootin\' Gallery', 'ghost-town-mine-ride-shootin-gallery', '114RvHaPfvU', '{\"az\": \"Ghost Town Mine Ride &amp; Shootin’ Gallery oyununda sizi adından da məlum olduğu kimi tərk edilmiş şaxtaya səyahət gözləyir. Burda sizin gəlişinizə heç də sevinməyən təhlükəli kabus-şaxtyorlar yaşayırlar. Bu vahiməli yerdən çıxış yolunu axtararaq düşmənlərinizə tapança ilə atəş açmalı və bir nöqtədən başqa nöqtəyə keçmək üçün teleport etməli olacaqsınız.\", \"en\": \"Explore an abandoned tourist attraction, test your shot at the Shootin\' Gallery, then board the mine cart ride for a descent into Hell! A thrilling new horror experience. Can you make it out Alive?\", \"ru\": \"В игре Ghost Town Mine Ride &amp; Shootin’ Gallery, что уже понятно по названию, игрока ожидает путешествие по заброшенной шахте. В ней до сих пор обитают злобные призраки шахтеры, которые совсем не рады вашему визиту. Расправляться с врагами придется посредством пистолета, а также телепортируясь из точки в точку в поисках выхода из этого зловещего места.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20');
INSERT INTO `games` (`id`, `name`, `slug`, `video`, `description`, `rating`, `multiplayer`, `created_at`, `updated_at`) VALUES
(108, 'A Fear Of Heights, And Other Things', 'a-fear-of-heights-and-other-things', 'mF2kBhee1vM', '{\"az\": \"Yeni istifadəçiləri virtual reallıq təcrübəsi ilə tanış etmək üçün müxtəlif səhnələrin kolleksiyası. Bu horror oyunu deyil və burda sizi qəflətən qorxuda biləcək heç nə olmayacaq!\", \"en\": \"A collection of scenes for demonstrating VR presence to new users. Not a horror game, and has no jump scares.\", \"ru\": \"Коллекция сцен для демонстрации присутствия в виртуальной реальности новым пользователям. Это не игра ужасов, и здесь нет ничего, что вас напугает!\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(109, 'The Exorcist: Legion VR', 'exorcist-legion-vr', 'l77NM3j49Kk&t=2s', '{\"az\": \"The Exorcist: Legion VR - oyunçuları horror ustası William Peter Blatty tərəfindən yaradılmış vahimə dünyasına aparan macəralı VR-layihədir. Oyunçular dəhşətli aləmi kəşf edirlər, ekzorsizm sənətini öyrənirlər və həm bütün dünyanın, həm şəxsi dünyalarının qorxulu kabuslarına qarşı mübarizə aparırlar.\", \"en\": \"The Exorcist: Legion VR is an interactive VR experience set in the academy-award winning world created by horror maestro William Peter Blatty. Each chapter features a unique demonic entity that will test your courage and resolve. Available for HTC Vive and Oculus Rift. Not for the faint-hearted.\", \"ru\": \"The Exorcist: Legion VR - это мрачный приключенческий VR-проект, который переносит игроков в мир ужасов, созданный мастером хорроров Вильямом Питером Блатти. Игроки исследуют мрачный мир, учатся искусству экзорцизмов, а также пытаются выступить против страшнеших кошмаров - как всего мира, так и своих собственных.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(110, 'FATED: The Silent Oath', 'fated-the-silent-oath', 'gRDSIu69KIw', '{\"az\": \"FATED: The Silent Oath oyununda hadisələr mistik vikinqlər dövründə baş verir və kişilik, cəsarət və fədakarlıq haqqında bəhs edilir. Burda hər bir ata və hər bir ər ailəsini xilas etmək üçün mümkün olmayanları belə bacarmalıdır. Süjetin əsasında Raqnarök dövründə insanın və ailəsinin sürgün olunması dayanır. Bu çətin dövrdə qəhrəman təsirli və eyni zamanda dəhşətli hadisələri yaşayaraq özü və yaxınları haqqında bilmədiklərini öyrənir.\", \"en\": \"Set in the mythical age of Vikings, FATED: The Silent Oath tells a tale of courage and sacrifice where an everyday father and husband must do the impossible to save his family from the destruction of the world at the hands of giants of old.\", \"ru\": \"События FATED: The Silent Oath разворачиваются в мистический век викингов и рассказывают историю о мужестве и самопожертвовании, где каждый день отец и муж должны делать невозможное, чтобы спасти свою семью. В центре сюжета лежит история изгнания человека и его семьи во время Рагнарока. В своих скитаниях герой узнает больше о себе и о своих близких, преодолевая череду трогательных и одновременно ужасающих событий.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(111, 'EVE: Valkyrie – Warzone', 'eve-valkyrie-warzone', 'WtwxbVBNAWA', '{\"az\": \"EVE: Valkyrie – EVE dünyasında daha bir oyundur, ilkin versiyadan fərqi ondadır ki, bu oyunu yalnız VR cihazlar vasitəsi ilə oynamaq mümkündür. Janr olaraq bu layihə birinci şəxs tərəfindən idarə olunan kosmik gəmi simulyatorudur. Oyunçuların öhdəsinə unikal sinifə aid kosmik gəmiləri idarə etmək və kosmos üstündə bitməyən bir mübarizəyə qoşulmaq düşəcək.\", \"en\": \"EVE: Valkyrie – Warzone is a first-person spaceship shooter that puts you in the cockpit for fast, fun, intense multiplayer space combat.\", \"ru\": \"EVE: Valkyrie — это игра во вселенной EVE, которая отличается от \\\"старшей\\\" версии поддержкой устройств виртуальной реальности. По жанру проект является симулятором космического корабля с видом от первого лица. Игроки возьмут на себя управление космическими кораблями одного из нескольких уникальных классов, и включатся в непрекращающуюся борьбу за космос.\"}', NULL, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(112, 'Eagle Flight', 'eagle-flight', 'DqiMmS1PMXQ', '{\"az\": \"Sadə baş hərəkəti ilə istiqamətlən və təyinat nöqtəsinə çat. Səmalara yüksəl, yarış və qazan! Oyundan tam zövq almaq üçün dostlarınla komanda şəklində yarış və unudulmaz hisslər yaşa!\", \"en\": \"Developed exclusively for VR Eagle Flight sends you to the skies of Paris to experience the freedom of flying like never before! As an eagle, you soar past iconic landmarks and dive through narrow streets in order to fight opponents and protect your territory.\", \"ru\": \"VR-проект Eagle Flight – путешествие над Парижем! Изучайте город и защищайте свою территорию от врагов. Участвуйте в жарких сетевых битвах на 6 игроков! Выполняйте маневры, чтобы победить!\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(113, 'Drunk or Dead', 'drunk-of-dead', 'yl-cmt3MlXg', '{\"az\": \"Drunk or Dead əyləncəli party oyunudur. Virus bütün ayıq insanları zombilərə çevirib. Dünyanın sonu yaxınlaşmışkən barlara əsl hücum elan edin! Gözəl xanımlarla içə bildiyiniz qədər için və zombiləri öldürün ki, rekordları qırasınız!\", \"en\": \"Drunk or Dead is a fun party game. A virus has turned all sober people into zombies. Go bar hopping in the midst of apocalypse! Drink in the company of beautiful girls and finish off hordes of zombies! Set your own record!\", \"ru\": \"Drunk or Dead - игра для веселой вечеринки. Вирус обратил всех трезвых людей в зомби! Устройте тур по барам в разгар конца света! Пей в компании невероятных красоток и мочи толпы зомби! Поставь свой рекорд!\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(114, 'Dream Coaster VR', 'dream-coaster-vr', 'OjeTyJUc9NA', '{\"az\": \"Dream Coaster VR - virtual reallıqda \\\"roller coaster\\\" atraksionunun sumalyatorudur. Burda sizi hər bir döngəsində möcüzələr gizlənən fantastik dünyalara unudulmaz səyahət gözləyir. Oyunun adına aldanmayın, bu atraksion sizi şübhəsiz oyaq saxlayacaq!\", \"en\": \"Dream Coaster VR is an extremely realistic roller coaster simulator equipped with series of different environmental themes and ultra-immersive impression of height and speed. Do not let the name trick you - this roller coaster will surely keep you wide awake!\", \"ru\": \"Dream Coaster VR – симулятор американских горок в виртуальной реальности, в котором вас ждет незабываемая поездка по волшебным фантастическим мирам, где за каждым поворотом может находится все что угодно. Не позволяйте названию обмануть вас – эти американские горки точно не дадут вам уснуть!\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(115, 'Dreadhalls', 'dreadhalls', 'SSgj6HkyO_E', '{\"az\": \"Siz yeraltıda oyanacaqsınız. Çıxışı tapmaq üçün labirinti araşdırın, amma orda məskən salan məxluqlardan uzaq durmağa çalışın. Yeganə silahınız görünməzlik, cəsarət və zəyif işıq olacaq. İşığı vaxtı vaxtında yağlamağı da unutmayın, yoxsa bu qaranlıq sizi məhv edəcək.\", \"en\": \"You are trapped deep inside a massive dungeon. Explore it, survive it and find a way to escape. Your only weapons will be stealth, your own courage, and a faint light. Dreadhalls is an intense and scary experience, not for the faint of heart. You have been warned!\", \"ru\": \"Вы проснетесь в подземелье. Исследуйте лабиринт в поисках выхода, избегая при этом существ, которые обитают там. Единственным оружием будет незаметность, храбрость и слабый свет, который вам будет необходимо подпитывать маслом - иначе кромешная тьма поглотит вас.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(116, 'Downward Spiral: Prologue', 'downward-spiral-prologue', 'QqEy8jjT7oE', '{\"az\": \"Downward Spiral: Prologue oyununda özünüzü çəkisizlikdə kosmonavt rolunda hiss edin!\\n\\nDostlarla bir birinizə qarşı yarışın və ya eyni komandada inanılmaz kosmos dünyasına səyahət edin!\", \"en\": \"Downward Spiral: Prologue is a mysterious and atmospheric zero gravity thriller powered by innovative, free movement in VR without motion sickness.\", \"ru\": \"Downward — игра, в которой Вы сможете ощутить себя космонавтом в невесомости!\\n\\nСразитесь с друзьями или отправьтесь в путешествие компанией до 4 человек в захватывающем мире без гравитации!\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(117, 'Bullet Sorrow VR', 'bullet-sorrow-vr', 'XvYCyYx6ins', '{\"az\": \"Bullet Sorrow VR - VIrtual Reallıq cihazları üçün arkada-şuter oyunudur. Oyunçular xüsusi agent rolunda çıxış edirlər. Gizli bazaya düşən agentlər silahlarını və yeni əldə etdikləri ultra bacarıqlarını istifadə edərək burdan çıxış yolunu tapmalı olacaqlar.\", \"en\": \"Bullet Sorrow VR is a Multi-player Online FPS game, also contains full story single stages to discover. Using progressive Bullet Time abilities and a bunker-cover system, evade attacks and move on! Available on Oculus Rift and HTC Vive.\", \"ru\": \"Bullet Sorrow VR - это аркадный шутер для VR-устройств, где игроки оказываются в шкуре спецагента, обнаруживаюшего себя на секретной базе, откуда он должен выбраться, используя оружие и новообретенные сверхспособности.\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(118, 'Alice VR', 'alice-vr', 'IfB-hhI9Hhs', '{\"az\": \"Alice VR - müxtəlif tapmacalarla dolu macəra dolu tədqiqat oyunu, virtual reallıqda unikal təcrübə. Bənzərsiz mənzərə və tərzli elektron musiqisi. Alice VR dünyasına xoş gəlmisiniz!\", \"en\": \"Alice VR is a single player story-driven exploration game with puzzles designed to be a unique VR experience. Set on a mysterious planet and inspired by Alice in Wonderland, it\'s a thrilling, immersive adventure with beautiful graphics and an atmospheric electronic soundtrack.\", \"ru\": \"Alice VR - это остросюжетная исследовательская игра с множеством головоломок, уникальное приключение в виртуальной реальности. Прекрасные пейзажи, стильная электронная музыка. Добро пожаловать в мир Alice VR!\"}', 3, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(119, 'ADR1FT', 'adr1ft', 'kpA0vcfAiV0', '{\"az\": \"ADR1FT - birinci şəxs tərəfindən oynanılan macəradır. Bu oyunda çətin vəziyyətə düşən astronaft-qadının hekayəsi bəhs edilir. Yaddaşını itirən astronavt oksigen itirən zədələnmiş skafandrla açıq kosmosda məhv edilmiş stansiya xarabalıqlarında oyanır. İndi yeganə sağ qalan qəhrəmanımız ekipaj üzvlərini məhv edən qəzanın səbəblərini tapmalıdır. Skafandrı düzəltmək və evə qayıtmaq üçün oyunçu açıq kosmosun sərt şərtlərində dağıntıları araşdıraraq və dəyərli resursları toplayaraq sağ qalmaq üçün mübarizə aparmalıdır.\", \"en\": \"ADR1FT is the story of an astronaut who wakes up floating silently in space amongst the debris of destroyed space station…the only survivor of a catastrophic event, left with no memory, a critically damaged EVA suit leaking oxygen and no way home.\", \"ru\": \"ADR1FT - это игра от первого лица (FPX), которая рассказывает историю женщины-астронавта, попавшей в беду. Она очнулась в открытом космосе среди обломков уничтоженной станции, потеряв память, в поврежденном скафандре, теряющем кислород. Теперь единственная выжившая должна выяснить причину катастрофы, погубившей всех членов экипажа. Игроку предстоит бороться за жизнь, исследуя обломки и собирая бесценные ресурсы в суровых условиях открытого космоса, чтобы починить скафандр и вернуться домой.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(120, 'ARKTIKA.1', 'arktika-1', 'Ehpe6ea6-LY', '{\"az\": \"ARKTIKA.1 - birinci şəxs tərəfindən oynanılan canlı və dinamik şuterdir. Yüz il sonra dünyanı qəflətən yeni buz dövrü bürüyəcək və öldürücü soyuq hər bir evə sızacaq. Yalnız ekvatorda hələ də günəş altında yer tapmaq mümkündür, amma şimalın və cənubun bəşəriyyət üçün çox lazımlı resursların qaldığı bəzi yerlərdə kiçik insan qrupları hələ də həyata tutunmağa çalışır. Keçmiş Rusiyanın şaxtalı sahələrindəki son koloniyalardan biri qarətçi, işğalçı və dəhşətli buzlu məxluqlarla mübarizə aparmağa çalışır. Onların sağ qalmasına kömək edin. Bəşəriyyətə iknci bir şans verin.\", \"en\": \"From the creators of the Metro series comes a new vision of the apocalypse. ARKTIKA.1 is a highly immersive, action-packed, first-person shooter designed exclusively for Oculus Touch. Nearly a century in the future, the world has fallen into a new ice age in the aftermath of a silent apocalypse. Only the equatorial regions remain habitable, yet pockets of humanity survive in small numbers all over the planet, hanging onto existence in the resource-rich territories to the north and south--resources that everyone wants to control... Protect the colony in the wastelands of old Russia from raiders, marauders, and horrifying creatures. Be the savior.\", \"ru\": \"ARKTIKA.1 - это яркий и динамичный шутер от первого лица. Через сто лет мир незаметно накроет новый ледниковый период, и убийственный холод просочится в каждый дом. Лишь на экваторе все еще можно найти место под солнцем, но кое-где на севере и юге, там, где остались так необходимые всему человечеству ресурсы, небольшие группы людей все еще цепляются за жизнь. Одна из последних колоний на морозных просторах бывшей России пытается выстоять против мародеров, захватчиков и жутких ледяных тварей. Помогите им выжить. Дайте человечеству второй шанс.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(121, 'Blade Runner 2049: Memory Lab', 'blade-runner-2049', '0hLWGaiSI8U', '{\"az\": \"Blade Runner 2049 oyununda istifadəçilər öz üzərinə spinnerin idarəsini götürməli (xeyr, məhşur aksesuarı deyil, polislərin hava apparatını) və gələcək Los Angelesin küçələrində replikantları izləməli olacaqlar.\", \"en\": \"In this single-player adventure from the world of Blade Runner 2049, you\'ve been transported to the Wallace Corporation\'s Memory Lab where an eager Joi-Tech model hologram is ready to scan your mind to reveal the circumstances behind your latest retirement. You\'ll travel from the memory lab and into strange and thrilling recreations of the future, complete with fully volumetric characters and interactive elements. Within each scene you\'ll use futuristic tools to uncover clues to reveal and evidence to hide. Featuring Oculus Touch support and a sprawling, 360º world, Memory Lab brings the Blade Runner universe to you like never before.\", \"ru\": \"В Blade Runner 2049 игрокам предстоит взять под управление спиннер (нет, не популярный аксессуар, а летательный аппарат полицейских) и выследить репликанта на улицах Лос-Анджелеса будущего.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(122, 'Blocks', 'blocks', 'lVdRqt8IsSk', '{\"az\": \"Blocks - sizə modelləşdirmə sahəsində təcrübənizdən asılı olmayaraq virtual reallıqda rahatlıqla 3D-obyektləri yaratmağa imkan verir. Altı sadə aləti istifadə edərək siz öz tətbiqlərinizi canlandıra, həcmli əsərlər yarada və sadəcə öz təsəvvür gücünüzü sərbəst buraxa bilərsiniz.\", \"en\": \"Blocks lets you easily create 3D objects in virtual reality, no matter your modelling experience. Using six simple tools, you can bring your applications to life, create a volumetric masterpiece, or simply let your imagination run wild. Get inspired by others’ creations or publish your own to inspire the world around you. No matter your modeling experience, you’ll create beautiful 3D objects in no time.\", \"ru\": \"Blocks позволяет легко создавать 3D-объекты в виртуальной реальности, независимо от вашего опыта моделирования. Используя шесть простых инструментов, вы можете оживить свои приложения, создать объемный шедевр или просто позволить вашему воображению разбежаться.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(123, 'Coco VR', 'coco-vr', 'KIqJQyW6cNg', '{\"az\": \"Məhşur Pixar studiyası ilk dəfə olaraq virtual reallıq cihazları üçün Coco VR adlı filmi təqdim etdi.\\n\\nBu studiyanın təqdim etdiyi yeni filmlər virtual reallığa səyahət etmək üçün istiqamətləndirilmiş əyləncəli kontentdir. Baxmayaraq ki, bu filmdir baş verən hadisələri izləyici idarə edir. Faktiki olaraq izləyici oyunçuya çevrilir\", \"en\": \"Coco VR is Pixar’s stunning debut into virtual reality: an adventure into the beautiful Disney-Pixar film, Coco. You can choose either a single or multi-player experience, and follow the magical alebrije into the luminous world of Coco filled with lovable characters and beautiful settings from the film.\", \"ru\": \"Известная студия Pixar впервые решила выпустить фильм для пользования очками виртуальной реальности Coco VR.\\n\\nНовинки фильмов, выпущенные данной студией – это развлекательный контент, направленный на нахождение в виртуальной реальности. Несмотря на то, что это фильм, в нем за действия героя отвечает сам зритель. По факту, он становится игроком.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(124, 'Dead and Buried', 'dead-and-buried', 'hT1v3ZopqCQ', '{\"az\": \"Oyun Vəhşi Qərb tərzində qurulub. Oyunçu şəxsi Kolt revolveri ilə fərqli məkanlara düşəcək. Bu oyunda kontrollerlərin üzərindəki tutacaqların, düymələrin və sensorların köməyi ilə nişan almaq, atəş açmaq, silahı təkrar doldurmaq və hətta barmaqda fırlatmaq mümkün olacaq.\", \"en\": \"Free with Oculus Touch Activation! Step into a world full of gunslingers and ghosts in Dead and Buried. Grab your Touch controllers and become the best gunslinger in the wild west in this multiplayer action shooter. Battle it out in the old saloon. Rob a runaway train. Team up with other bandits and defend against hordes of ghastly creatures. Finally, you can live out your wild west fantasies thanks to virtual reality.\", \"ru\": \"Игра выполнена в стиле Дикого Запада, и игроку предстоит попадать по различным объектам, используя личный шестизарядный кольт. При помощи ручек, кнопок и сенсоров, которые расположены на контроллерах, игрок сможет наводить оружие, стрелять из него, перезаряжать, даже эффектно крутить на пальце, как это делают в фильмах отчаянные стрелки.\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(125, 'Echo Arena', 'echo-arena', 'xMD2tBufa3Y', '{\"az\": \"Echo Arena - çəkisizlikdə olan iki komandanın qarşıdurmasını əks etdirən, \\\"TRON: Legacy\\\" filminin tərzində hazırlanan komanda oyunudur. Komandanın məqsədi - diskləri rəqibin qorunma zonasına atmaqdır.\", \"en\": \"Echo Arena now supports parties of 15 players and 5v5 private matches, with 5 more slots available for spectators! In the Arena, your team will face off against the competition in a zero-gravity clash of robotic glory as you glide, boost, and punch your way to scoring goals in a breathtaking virtual arena.\", \"ru\": \"Echo Arena - это многопользовательская игра, в стиле фильма «Трон: Наследие», которая включает в себя противостояние двух команд находящихся в невесомости. Цель команды - забросить диск в зачетную зону оппонента.\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(126, 'Edge of Nowhere', 'edge-of-nowhere', '5RtzPiUR-_8', '{\"az\": \"Edge of Nowhere – üçüncü şəxs tərəfindən oynanılan, periodik şəkildə birinci şəxs görüntüsünə çevrilən, eksklüziv olaraq Oculus Rift virtual reallıq cihazları üçün yaradılmış ekşn oyunudur. Bu oyunda itkin düşmüş ekspedisiyanın izlərini axtararaq qarlı dağların zirvələrinə çatan dağçı-alimin hekayəsi haqqında bəhs edilir.\", \"en\": \"Edge of Nowhere is a third-person VR adventure from acclaimed independent developer Insomniac Games. Victor Howard is on a journey to find his fiancée, Ava Thorne, who is part of a lost expedition in Antarctica. His rescue mission takes a sudden turn as he ventures deeper into a dark monstrous world where reality warps and twists around him. Desperate to find the one he loves, Victor must encounter disturbing monsters and scale looming ice walls as he descends further into madness. In Edge of Nowhere, nothing is what it seems and the unexpected lurks from all sides.\", \"ru\": \"Edge of Nowhere – экшен от третьего лица с периодическим переключением на вид от первого, являющийся эксклюзивом для шлема виртуальной реальности Oculus Rift, расскажет нам историю об учёном-скалолазе, которому довелось отправиться к вершинам заснеженных гор, дабы найти следы пропавшей экспедиции\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(127, 'Face Your Fears', 'face-your-fears', 'QX-uORleXI8', '{\"az\": \"Bu oyunda siz göydələnin kənarında dayanaraq nəhəng robotla insanların inanılmaz qarşıdurmasını izləməli və yüksəklik qorxunuzu sınamalı və ya uşaqlığınıza dönərək yataq otağınızda ən dəhşətli qorxularınızla üz üzə gəlməli olacaqsınız!\", \"en\": \"New Content: A simple, old prop plane ferries its passengers just as it has a thousand times before. Things take a turn for the worst when the engine starts sputtering. Will Flight 101 have to turn back? Will the engine restart? Face Your Fears will scare you, creep you out, or cause your jaw to drop in awe and amazement. Some of these experiences are terrifying, some fun and spooky, some are simply mysterious! Robots and ghosts and femme fatales can all be found within! Try looking around, looking up, looking behind you. You never know what’s lurking in the dark. Share the experience with your friends! It’s even more fun to watch them scream and jump!\", \"ru\": \"В данной игре Вам предоставляется возможность проверить, боитесь ли Вы высоты, стоя на краю небоскреба и наблюдая за масштабным сражением между гигантским роботом и человечеством, либо, оказавшись ребенком в детской спальне, встретиться лицом к лицу со своими самыми жуткими кошмарами!\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(128, 'Final Goalie: Football Simulator', 'final-goalie-football-simulator', '_1JP30K3OMI', '{\"az\": \"Final Goalie: Football Simulator – virtual reallıq cihazları üçün yaradılmış qapıçı simulyatorudur. Bu oyunun bənzərsiz gedişatından zövq almağınız üçün üç fərqli oyun rejimi təqdim olunur.\\n\\nSimulator rejimi əsl futbol həvəskarları üçün yaradılıb. Burda sizi peşəkar oyunçuların hərəkətlərinin əks olunması yolu ilə hazırlanmış 100% realistik qrafika və animasiya gözləyir.\\n\\nArcade rejimi özü ilə bərabər əsl həyəcanı gətirir. Burda siz topları ata və tuta, həmçinin hərəkətin yavaşlanması və nəhəng qapıçı əlcəkləri kimi bonusları aktiv edə biləcəksiniz.\\n\\nMultiplayer rejimi isə sizə online rejimdə bir neçə rəqibinizlə yarışmaq və penaltı vurmaq imkanlarını yaradır.\", \"en\": \"Final Goalie is the Goalkeeper Simulator Game specially designed for Virtual Reality offering an Amazing Experience in 3 different game modes.\\n\\nSimulator Mode For lovers of pure football ! 100% realistic graphics and animations made by capturing the movements of professional players. You can choose between playing a quick game or try and defeat 150 levels where you face the best teams in the world!\\n\\nArcade Mode A super fun madness!!! You can catch and throw balls to activate the most diverse and spectacular power-ups such as slow-motion, giant gloves, etc. As with the Simulator Mode, you can choose between playing quick game or make your way through 150 varied levels.\\n\\nMultiplayer OCULUS VS mobile Compete against your friends in the novel and fun Online Mode where you can make penalty shots from your smartphone with the Final Kick game (free app with over 20 million players) Hilarious interaction where your friends will see you moving in real time!\", \"ru\": \"Final Goalie: Football Simulator – симулятор вратаря, разработанный для устройств виртуальной реальности. Вас ждет три различных игровых режима, которые позволят вам сполна насладиться увлекательным игровым процессом.\\n\\nРежим Simulator предназначен для настоящих любителей футбола. В нем вас ждет 100% реалистичная графика и анимация, сделанная путем захвата движений профессиональных игроков.\\n\\nРежим Arcade принесет с собой настоящее безумие. Здесь вы сможет бросать и ловить мячи, а также активировать самые различные бонусы, к примеру, замедление движения или гигантские вратарские перчатки.\\n\\nТретий режим, Multiplayer HTC-VIVE VS Mobile, позволит вам сразиться против своих друзей в веселом сетевом режиме, в котором вы сможете пробивать пенальти, используя приложение\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(129, 'Killing Floor: Incursion', 'killing-floor-incursion', 'QnTj9-E8gDs', '{\"az\": \"Killing Floor: Incursion oyununda siz \\\"Horzine\\\" şirkətinin mühafizə əməkdaşı roluna girməli, müxtəlif çeşidli tapança, tüfəng, balta və digərlərin arasında silah seçməli, həmfikirlərinizi tapmalı və həyatınız üçün amansız mübarizə aparmalı olacaqsınız. Məkanı araşdırın, tapmacaları həll edin və silahları tapın. Sonunda siz \\\"Horzine\\\" şirkətinin əsl niyyətini öyrənəcəksiniz və kimlərə inana biləcəyinizi başa düşəcəksiniz. Dəhşətli fermalardan tutmuş yüksək texnologiyalı zavodlara qədər tamamilə fərqli yerlərdə yarışın və mutantların hücumu arxasında nələrin və ya kimlərin dayandığını tapın.\", \"en\": \"From the award-winning developer, Tripwire Interactive (makers of Red Orchestra and Killing Floor franchises), comes a multi-hour, story-driven adventure made for VR. Travel through diverse environments, from creepy farmhouses to bone-filled catacombs to high tech facilities, either solo or in co-op mode. Explore the detailed world while fighting for your life with pistols, shotguns, axes, and even the occasional leftover limb. When it’s all over, invite a friend to go back with you and see if you can pull them through alive, or try to survive in Hardcore mode with increased difficulty levels. Try your skills in Holdout mode and see how long you can last against a never-ending horde of Zeds. Good luck!\", \"ru\": \"В сюжетной игре «Killing Floor: Incursion» вам придется вжиться в роль служащего охранного подразделения компании Horzine, выбрать оружие из множества вариантов, включающих пистолеты, дробовики, топоры и многое другое, найти союзников, а затем отчаянно сражаться за свою жизнь. Игроки будут исследовать местность, решать загадки, искать оружие и боеприпасы. В конце концов они раскроют истинные намерения компании Horzine и поймут, кому здесь в самом деле можно доверять. Сражайтесь в самых разных местах — от жутких ферм до высокотехнологичных заводов — и выясните, кто... или что стоит за нашествием мутантов.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(130, 'Lucky’s Tale', 'luckys-tale', '__opKU__gvU', '{\"az\": \"Lucky\'s Tale - xüsusi olaraq Oculus Rift üçün yaradılmış macəra dolu platformerdir. Oyunçular Lucky qəhrəmanı ilə birlikdə qeyri-adi canlılarla, sirlərlə və tapmacalarla dolu mənzərəli dünyaya səyahət edəcəklər\", \"en\": \"Lucky’s Tale is a delightful platforming adventure game designed exclusively for the Oculus Rift. Join Lucky as he runs, jumps, climbs and spins his way through a bright, colorful world filled with thrilling challenges, wacky creatures, and all the shiny things a little fox could ever want!\\n\\nBuilt from the ground up for virtual reality, Lucky’s Tale offers a unique twist on the 3rd person perspective platformer. Its innovative approach to the camera, character motion, environment and gameplay all work together to provide a highly comfortable experience while allowing players to freely roam diverse, immersive environments. Whether you’re racing with Lucky through lush trees, dodging swamp pits, battling menacing bosses, or mastering mini-games, youʼll feel like you’ve truly gone inside the world of a video game thanks to the magic of VR.\", \"ru\": \"Lucky\'s Tale - это приключенческий платформер, созданный специально для Oculus Rift. Игрокам вместе с Лаки предстоит путешествие по красочному миру, полному разнообразных существ, загадок и тайн. Игра доступна всем пользователям Oculus Rift.\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(131, 'Minecraft', 'minecraft', 'z0YhOa8H7j0', '{\"az\": \"Virtual Reallıq texnologiyaların sayəsində Minecraft dünyasına səyahət edin. Dünyaları inşa edin, ətrafı araşdırın və moblarlı məhv edin - qısacası, istədiyiniz hər şeyi edin, lakin bu dəfə adi monitor ekranında deyil, virtual reallığın sərhədsiz dünyasında! Virtual reallıqda dəhşətli moblarla üz üzə görüş yeni məna kəsb edəcək, qaranlıq mağaralar üç həcmli səsləndirmənin sayəsində daha qorxulu olacaq, günəşin işığı isə virtual dünyada daha xoş olacaq, nəinki ekran arxasında.\", \"en\": \"Get right inside the world of Minecraft with virtual reality. Build, explore and battle mobs - do all the things you know and love - but from a fresh perspective. With a VR headset on, coming face-to-face with monstrous mobs takes on new meaning; creeping into dark caves inspires even greater trepidation thanks to 3D audio; and the light of a gorgeous sunrise seems to envelop you more completely\", \"ru\": \"Окажитесь внутри мира Minecraft благодаря технологии виртуальной реальности. Стройте, исследуйте мир и сражайтесь с мобами – словом, делайте все то, что вам так нравится, но не на обычном экране, а с эффектом погружения в виртуальный мир! Если у вас на голове шлем виртуальной реальности, встреча лицом к лицу с чудовищными мобами обретет новый смысл, попадание в темные пещеры будет вызывать у вас более сильные чувства благодаря трехмерному звуку, а купаться в лучах солнечного света приятнее, если солнце светит не в окне экрана, а во всем (виртуальном) мире.\"}', 4, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(132, 'Ripcoil', 'ripcoil', 'et8uiz6ldtY', '{\"az\": \"Ripcoil - Oculus Touch üçün futuristik arkada oyunudur. Oyunçular futuristik duellərdə iştirak edərək rəqiblərinin sahəsinə diskləri atmalı olacaqlar. Oyun prosesi harda olduğunuzu unutduraraq oyuna tamamilə qərq edir. Kontrollerlərin və VR eynəklərinin izlənilməsi sistemi isə virtual reallıqla tam sinxronu təmin edir.\", \"en\": \"Enter a futuristic gladiatorial arena packed with rabid fans as you face off against networked opponents in a disc throwing duel. A wholly unique navigation system will allow you to deftly position your hover board as you reach out with your Touch controllers to launch, catch and punch the speeding, spinning Ripcoil disc\", \"ru\": \"Ripcoil - футуристическая аркада для Oculus Touch. Игрокам предстоит принять участие в футуристических дуэлях, стараясь поразить метательными дисками участки за противником. Игровой процесс заставляет забыть где ты находишься, а благодаря отслеживанию перемещений контроллеров и шлема достигается полная синхронизация действий с виртуальным аватаром.\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(133, 'Robo Recall', 'robo-recall', 'dYYH1ED3-r8', '{\"az\": \"Robo Recall - Oculus Rift virtual reallıq eynəkləri üçün yaradılmış, Oculus Touch qarniturunu dəstəkləyən, birinci şəxs tərəfindən oynanılan ekşn-şuterdir. Ən yeni silahlarla robotlara qarşı sonunadək mübarizə aparın və şəhəri robotların hücumundan xilas edin!\", \"en\": \"Robo Recall is an action-packed VR first-person shooter with visceral Touch gameplay and an in-depth scoring system. Earn the high score by using creative combat tactics and skill shots as you teleport through city streets and rooftops in an awe-inspiring ballet of bullets. Tear apart your interactive robot foes and use them to fend off the enemy onslaught. Unlock, customize and test weapons before taking on advanced challenges that put your newfound skills to the test!\", \"ru\": \"Robo Recall - это экшн-шутер от первого лица для шлемов виртуальной реальности Oculus Rift с поддержкой Oculus Touch. Сражайся до последнего против восставших роботов при помощи самого инновационного оружия и спаси город от безумного нашествия!\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(134, 'Rock Band VR', 'rock-band-vr', 'qffTOh3hQHI', '{\"az\": \"Rock Band VR - \\\"Rock Band\\\" seriyasının VR versiyasıdır. Burda istifadəçilər həm Rock qrupunun üzvü rolunda musiqi alətləri ilə çixiş edirlər, həm də virtual səhnəni VR cihazlar vasitəsi ilə izləyirlər!\", \"en\": \"Get ready for the most authentic high-energy rock\'n\'roll simulation ever! Strap on your guitar, join your band on stage and rock out like nobody\'s watching!\\n\\nWith 60 outstanding playable tracks, classic game mode, campaign mode, and leaderboards, Rock Band VR brings you hundreds of hours of ultimate rock\'n\'roll simulation!\", \"ru\": \"Rock Band VR - VR-версия серии Rock Band, в которой игроки не только \\\"отыгрывают\\\" роль члена рок-группы с помощью инструментов, но и смотрят на виртуальную сцену с помощью шлема виртуальной реальности!\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(135, 'The Climb', 'the-climb', 'EeKbmJTbyek', '{\"az\": \"The Climb - virtual reallıqda alpinizm simulyatorudur. Yüksək zirvələri fəth edin, öz hərəkətlərinizi sərbəst idarə edin, ətrafı kəşf edin və öz alter-eqonuzun yüksəklikdən düşməsini \\\"canlı yayımda\\\" izləyin. Həmçinin bu simulyatorda virtual alpinistlərə yeni zirvələri və mərhələləri təqdim edən üç fərqli çətinlik səviyyəsi təqdim olunur.\", \"en\": \"Scale huge heights and feel the exhilaration of extreme free solo climbing. Explore and enjoy the view or compete for the fastest times on leaderboards with Touch or gamepad controls.\\n\\nFree solo climbing – Experience the adrenaline rush as you ascend to epic heights, explore caves, find shortcuts, and more.\\n\\nMultiplayer and achievements – Race other players’ ghosts, rise up leaderboards and earn over 100 achievements to unlock gear.\\n\\nBouldering – Beat intense routes that demand perfect technique.\\n\\nTourist mode – Climb with simplified mechanics, ideal for introducing friends to VR. Outstanding environments – Feel the thrill in four beautiful, immersive locations by day or night.\", \"ru\": \"The Climb - это VR-симулятор альпинизма, в котором игрокам предстоит покорить множество высоких гор: они вольны полностью управлять своими движениями, осматриваться или наблюдать за падениями своего альтер-эго в \\\"прямом эфире\\\". Так же игроки могут покорить три разных сложности, каждая из которых предлагает виртуальным альпинистам новые высоты и вызовы.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(136, 'The Unspoken', 'the-unspoken', 'qmPw2cJNzGE', '{\"az\": \"The Unspoken - Oculus Rift virtual reallıq cihazları üçün yaradılmış \\\"fighting\\\" adlandırdığımız qaydasız döyüş elementləri ilə tamamlanmış ekşn oyunudur. Burda oyunçular güləşçi sehrbazlar rolunda təkbətək mübarizədə yarışırlar.\", \"en\": \"You’re a rising star in Chicago’s dueling underground. When two of your fellow acolytes go missing, it’s up to you to investigate. You find a city unhinged, its neon back-alleys crawling with demons—and you uncover a grim history that won’t stay buried. Play the single-player Acolytes Chapter, or challenge other spell-casters in the arena to rise up through the ranks of an urban magic fight club.\\n\\nManipulate the environment around you with the powerful arcane forces that flow through your fingertips. Summon eldritch monstrosities with your bare hands. Unlock your full potential with gesture-based spell-casting. From a finessed flick of the wrist to a visceral push, the play style is up to you - five classes channel their energies to cast over thirty spells. You’ll levitate cars, unleash electricity, and see the future.\", \"ru\": \"The Unspoken - это мультиплеерный экшен с элементами файтинга для шлема виртуальной реальности Oculus Rift. Игроки в роли боевых магов выясняют отношения один-на-один\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(137, 'VR Sports Challenge', 'vr-sports-challenge', 'j_C8c2S5ANE', '{\"az\": \"VR Sports Challenge oyununda tunneldən sahəyə, stadiona, taxta və ya buz meydançasına elit bir idmançı obrazında çıxanda dəbilqənizi almağı, uğurlu beysbol çubuğunuzu hazırlamağı, idman ayaqqabılarınızın bağlarını möhkəm bağlamağı və ya konkilərinizi itiləməyi unutmayın. Ən sevdiyiniz idman yarışlarında xəyal belə edə bilməyəcəyiniz əfsanəvi hisslər yaşayın!\", \"en\": \"Grab a helmet, polish your lucky bat, lace up your kicks, and sharpen your skates as you step out of the tunnel and onto the gridiron, ballpark, hardwood, and ice as an elite athlete in VR Sports Challenge. Live the mythical moments from your favorite sports that you\'ve only dreamed about: call the plays and drive your team to the end zone as an all-pro quarterback, knock the ball out of the park as long ball slugger, drain threes from around the horn as a hot handed shooter, and lock down victory on the ice as an impenetrable goalie\", \"ru\": \"Возьмите шлем, отполируйте свою счастливую биту, завяжите шнурки и заточите свои коньки, когда выходите из туннеля на поле, стадион, площадку или лед в качестве элитного спортсмена в VR Sports Challenge. Ощутите легендарные моменты из ваших любимых видов спорта, о которых вы могли только мечтать!\"}', 4, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(138, 'Wilson Heart', 'wilson-heart', 'E3fDcGgYsQs', '{\"az\": \"Wilson\'s Heart birinci şəxs tərəfindən oynanılan, həyəcanverici psixoloji trillerdir. Hadisələr 1940-ci illərin, qorxuducu transformasıyaya məruz qalan xəstəxanasında baş verir. Virtual Reallığın bu macərasında siz üzəyinin başqa sirli cihazla dəyişdirildiyinin fərqinə varan xəstəsi, Robert Vilsonun rolunda olacaqsınız.\", \"en\": \"Wilson\'s Heart is an immersive first-person psychological thriller set in a 1940s hospital that has undergone a haunting transformation. In this original VR adventure, you become Robert Wilson, a patient who awakens to the shocking discovery that his heart has been replaced with a mysterious device.\", \"ru\": \"Wilson\'s Heart - это захватывающий психологический триллер первого лица, установленный в больнице 1940-х годов, которая претерпела преследующую трансформацию. В этом оригинальном приключении VR вы становитесь Робертом Уилсоном, пациентом, который пробуждает шокирующее открытие, что его сердце заменено таинственным устройством.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(139, 'Dreamdeck', 'dreamdeck', NULL, '{\"az\": \"Dreamdeck sizi inanılmaz yerlərə və möcüzəli dünyalara aparır.\", \"en\": \"Dreamdeck transports you to impossible places and magical worlds.\", \"ru\": \"Dreamdeck переносит вас в невозможные места и волшебные миры\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(140, 'Assetto Corsa', 'asseto-corsa', 'KDRPJf9CIr4', '{\"az\": \"Assetto Corsa - innovativ fiziki xüsusiyyətlərə sahib yarış simulyatorudur. Layihənin əsas üstünlüklərindən biri odur ki, istifadəçilər oyunun interfeysini tamamilə özünə uyğun şəkildə dəyişdirə bilərlər.\", \"en\": \"Assetto Corsa is a racing game often praised for its realistic physics and smooth graphical style. The VR implementation, which first arrived on Oculus Rift.\", \"ru\": \"Assetto Corsa - гоночный автосимулятор с продвинутой физической моделью. Главной особенностью проекта является то, что пользователь может полностью настраивать интерфейс игры под себя любимого. Для любителей модостроения доступна поддержка создания модов. Assetto Corsa задумана разработчиками с целью передать реальный опыт вождения, для чего в игре представлены официально лицензированные трассы и автомобили, созданные с применением технологии лазерного сканирования.\"}', 5, 0, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(141, 'Dirt Rally', 'dirt-rally', 'muvsQrid9w0', '{\"az\": \"DiRT Rally - DiRT seriyasından olan və oyunçuları seriyanın əvvəllərinə qaytaran yarış oyunudur. Oyunda günün vaxtını və hava şəraitini dəyişmək imkanları verilir. Həmçinin oyunçuları qeyri-adi \\\"avtomobilin zədələnməsi və təmiri sistemi\\\" gözləyir.\", \"en\": \"DiRT Rally is the most authentic and thrilling rally game ever made. It perfectly captures the white-knuckle feeling of racing on the edge as you hurtle along dangerous roads, knowing that one crash could end it all.\", \"ru\": \"DiRT Rally - это гоночная игра из серии DiRT, которая возвращает игроков к истокам серии. В игре представлены возможности смены времен суток и погодных условий, игроков ожидает оригинальная система повреждений и ремонта авто.\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20'),
(142, 'Project CARS2', 'project-cars2', 'Cd6T_HlgPm0', '{\"az\": \"Project Cars 2 oyunu hər kəs üçün deyil. Bu oyun sizi əsl yarışa hazırlamır, lakin yarış bolidini idarə edənlərin necə böyük çətinliklərlə rastlaşdığını göstərir.\", \"en\": \"Already the most technically-advanced racing game on the planet supporting 12K, second screen apps, and 40+ wheels and peripherals, the world of virtual reality as made possible via the Oculus Rift and HTC Vive now offers players the\", \"ru\": \"Project Cars 2 — игра не для всех. Она не готовит к настоящим гонкам, но пытается дать понять, насколько тяжёл труд человека, сидящего за рулем гоночного болида.\"}', 5, 1, '2025-08-05 00:57:20', '2025-08-05 00:57:20');

-- --------------------------------------------------------

--
-- Table structure for table `game_device`
--

CREATE TABLE `game_device` (
  `game_id` bigint(20) UNSIGNED NOT NULL,
  `device` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `game_device`
--

INSERT INTO `game_device` (`game_id`, `device`) VALUES
(1, 'HTC'),
(1, 'OCULUS'),
(2, 'HTC'),
(2, 'OCULUS'),
(3, 'HTC'),
(3, 'OCULUS'),
(4, 'HTC'),
(4, 'OCULUS'),
(5, 'HTC'),
(5, 'OCULUS'),
(6, 'HTC'),
(6, 'OCULUS'),
(7, 'HTC'),
(7, 'OCULUS'),
(8, 'HTC'),
(9, 'HTC'),
(9, 'OCULUS'),
(10, 'HTC'),
(10, 'OCULUS'),
(11, 'HTC'),
(11, 'OCULUS'),
(12, 'HTC'),
(12, 'OCULUS'),
(13, 'HTC'),
(13, 'OCULUS'),
(14, 'OCULUS'),
(14, 'HTC'),
(15, 'HTC'),
(15, 'OCULUS'),
(16, 'HTC'),
(16, 'OCULUS'),
(17, 'HTC'),
(17, 'OCULUS'),
(18, 'HTC'),
(18, 'OCULUS'),
(19, 'HTC'),
(20, 'HTC'),
(20, 'OCULUS'),
(21, 'HTC'),
(21, 'OCULUS'),
(22, 'HTC'),
(22, 'OCULUS'),
(23, 'HTC'),
(23, 'OCULUS'),
(24, 'HTC'),
(24, 'OCULUS'),
(25, 'HTC'),
(25, 'OCULUS'),
(26, 'HTC'),
(26, 'OCULUS'),
(27, 'HTC'),
(27, 'OCULUS'),
(28, 'HTC'),
(28, 'OCULUS'),
(29, 'HTC'),
(30, 'HTC'),
(31, 'HTC'),
(32, 'HTC'),
(33, 'HTC'),
(33, 'OCULUS'),
(34, 'HTC'),
(34, 'OCULUS'),
(35, 'HTC'),
(35, 'OCULUS'),
(36, 'HTC'),
(36, 'OCULUS'),
(37, 'HTC'),
(37, 'OCULUS'),
(38, 'HTC'),
(38, 'OCULUS'),
(39, 'HTC'),
(40, 'HTC'),
(40, 'OCULUS'),
(41, 'HTC'),
(41, 'OCULUS'),
(42, 'HTC'),
(43, 'HTC'),
(43, 'OCULUS'),
(44, 'OCULUS'),
(44, 'HTC'),
(45, 'HTC'),
(45, 'OCULUS'),
(46, 'HTC'),
(46, 'OCULUS'),
(47, 'OCULUS'),
(47, 'HTC'),
(48, 'HTC'),
(48, 'OCULUS'),
(49, 'HTC'),
(49, 'OCULUS'),
(50, 'HTC'),
(50, 'OCULUS'),
(51, 'HTC'),
(52, 'HTC'),
(52, 'OCULUS'),
(53, 'OCULUS'),
(53, 'HTC'),
(54, 'HTC'),
(54, 'OCULUS'),
(55, 'HTC'),
(55, 'OCULUS'),
(56, 'HTC'),
(56, 'OCULUS'),
(57, 'HTC'),
(57, 'OCULUS'),
(58, 'HTC'),
(58, 'OCULUS'),
(59, 'HTC'),
(60, 'HTC'),
(60, 'OCULUS'),
(61, 'HTC'),
(61, 'OCULUS'),
(62, 'HTC'),
(62, 'OCULUS'),
(63, 'HTC'),
(63, 'OCULUS'),
(64, 'HTC'),
(64, 'OCULUS'),
(65, 'HTC'),
(65, 'OCULUS'),
(66, 'HTC'),
(66, 'OCULUS'),
(67, 'HTC'),
(67, 'OCULUS'),
(68, 'HTC'),
(69, 'HTC'),
(69, 'OCULUS'),
(70, 'HTC'),
(71, 'HTC'),
(72, 'HTC'),
(72, 'OCULUS'),
(73, 'HTC'),
(73, 'OCULUS'),
(74, 'HTC'),
(74, 'OCULUS'),
(75, 'HTC'),
(76, 'HTC'),
(76, 'OCULUS'),
(77, 'HTC'),
(77, 'OCULUS'),
(78, 'HTC'),
(78, 'OCULUS'),
(79, 'HTC'),
(79, 'OCULUS'),
(80, 'HTC'),
(80, 'OCULUS'),
(81, 'HTC'),
(81, 'OCULUS'),
(82, 'HTC'),
(82, 'OCULUS'),
(83, 'HTC'),
(83, 'OCULUS'),
(84, 'HTC'),
(84, 'OCULUS'),
(85, 'HTC'),
(85, 'OCULUS'),
(86, 'HTC'),
(86, 'OCULUS'),
(87, 'HTC'),
(87, 'OCULUS'),
(88, 'HTC'),
(88, 'OCULUS'),
(89, 'HTC'),
(89, 'OCULUS'),
(90, 'HTC'),
(90, 'OCULUS'),
(91, 'HTC'),
(91, 'OCULUS'),
(92, 'OCULUS'),
(92, 'HTC'),
(93, 'HTC'),
(93, 'OCULUS'),
(94, 'HTC'),
(94, 'OCULUS'),
(95, 'HTC'),
(95, 'OCULUS'),
(96, 'HTC'),
(96, 'OCULUS'),
(97, 'HTC'),
(98, 'HTC'),
(98, 'OCULUS'),
(99, 'HTC'),
(99, 'OCULUS'),
(100, 'HTC'),
(100, 'OCULUS'),
(101, 'HTC'),
(101, 'OCULUS'),
(102, 'HTC'),
(102, 'OCULUS'),
(103, 'HTC'),
(103, 'OCULUS'),
(104, 'HTC'),
(105, 'HTC'),
(105, 'OCULUS'),
(106, 'HTC'),
(106, 'OCULUS'),
(107, 'HTC'),
(107, 'OCULUS'),
(108, 'HTC'),
(108, 'OCULUS'),
(109, 'HTC'),
(109, 'OCULUS'),
(110, 'HTC'),
(110, 'OCULUS'),
(111, 'HTC'),
(111, 'OCULUS'),
(112, 'HTC'),
(112, 'OCULUS'),
(113, 'HTC'),
(113, 'OCULUS'),
(114, 'HTC'),
(114, 'OCULUS'),
(115, 'HTC'),
(115, 'OCULUS'),
(116, 'HTC'),
(116, 'OCULUS'),
(117, 'HTC'),
(117, 'OCULUS'),
(118, 'HTC'),
(118, 'OCULUS'),
(119, 'HTC'),
(119, 'OCULUS'),
(120, 'OCULUS'),
(121, 'OCULUS'),
(122, 'OCULUS'),
(123, 'OCULUS'),
(124, 'OCULUS'),
(125, 'OCULUS'),
(126, 'OCULUS'),
(127, 'OCULUS'),
(128, 'OCULUS'),
(129, 'OCULUS'),
(129, 'HTC'),
(130, 'OCULUS'),
(131, 'OCULUS'),
(132, 'OCULUS'),
(133, 'OCULUS'),
(134, 'OCULUS'),
(135, 'OCULUS'),
(136, 'OCULUS'),
(137, 'OCULUS'),
(138, 'OCULUS'),
(139, 'OCULUS'),
(140, 'OCULUS'),
(140, 'PS_VR'),
(140, 'DOF_3'),
(141, 'OCULUS'),
(141, 'DOF_3'),
(142, 'DOF_3');

-- --------------------------------------------------------

--
-- Table structure for table `game_genre`
--

CREATE TABLE `game_genre` (
  `game_id` bigint(20) UNSIGNED NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `game_genre`
--

INSERT INTO `game_genre` (`game_id`, `genre_id`) VALUES
(1, 13),
(1, 12),
(2, 21),
(2, 1),
(2, 13),
(2, 9),
(2, 20),
(3, 18),
(3, 1),
(4, 1),
(5, 21),
(5, 1),
(5, 17),
(6, 12),
(6, 18),
(6, 13),
(7, 18),
(8, 13),
(9, 4),
(10, 12),
(10, 13),
(11, 18),
(11, 1),
(11, 2),
(12, 9),
(13, 21),
(13, 1),
(14, 1),
(14, 13),
(14, 18),
(14, 2),
(15, 12),
(16, 18),
(17, 12),
(17, 13),
(17, 18),
(18, 18),
(18, 10),
(18, 13),
(18, 2),
(19, 13),
(19, 9),
(20, 13),
(20, 18),
(21, 13),
(21, 1),
(21, 9),
(22, 18),
(22, 1),
(22, 9),
(23, 13),
(24, 14),
(24, 16),
(25, 18),
(26, 13),
(26, 1),
(26, 21),
(27, 1),
(28, 1),
(28, 9),
(28, 21),
(28, 20),
(29, 10),
(30, 10),
(31, 1),
(31, 21),
(31, 20),
(31, 9),
(32, 9),
(33, 18),
(33, 10),
(33, 19),
(34, 18),
(34, 10),
(35, 18),
(35, 1),
(36, 13),
(36, 9),
(36, 12),
(37, 13),
(37, 1),
(37, 9),
(37, 12),
(38, 1),
(38, 18),
(39, 19),
(39, 1),
(40, 13),
(40, 1),
(40, 2),
(41, 10),
(41, 18),
(42, 9),
(42, 20),
(42, 13),
(42, 1),
(43, 9),
(43, 20),
(43, 13),
(43, 1),
(43, 12),
(44, 13),
(44, 18),
(45, 1),
(45, 21),
(46, 18),
(46, 10),
(46, 1),
(47, 18),
(47, 10),
(47, 13),
(48, 13),
(49, 13),
(50, 13),
(51, 9),
(51, 13),
(51, 12),
(52, 13),
(52, 1),
(52, 2),
(53, 21),
(54, 1),
(54, 20),
(54, 21),
(55, 20),
(55, 12),
(56, 18),
(56, 20),
(57, 1),
(57, 20),
(58, 18),
(58, 2),
(59, 20),
(59, 1),
(59, 21),
(59, 9),
(60, 13),
(60, 2),
(61, 18),
(61, 14),
(62, 9),
(62, 13),
(63, 10),
(63, 7),
(64, 1),
(64, 21),
(65, 6),
(65, 13),
(66, 9),
(67, 18),
(67, 7),
(67, 13),
(68, 12),
(68, 7),
(69, 18),
(69, 1),
(70, 18),
(70, 1),
(70, 17),
(71, 1),
(71, 17),
(72, 9),
(73, 13),
(74, 1),
(74, 17),
(75, 7),
(75, 14),
(76, 13),
(77, 1),
(78, 10),
(79, 18),
(79, 10),
(80, 1),
(80, 7),
(81, 18),
(81, 1),
(81, 17),
(82, 13),
(83, 13),
(84, 18),
(85, 18),
(85, 10),
(85, 1),
(86, 18),
(86, 13),
(87, 13),
(88, 18),
(88, 10),
(88, 13),
(89, 5),
(89, 6),
(90, 12),
(90, 9),
(90, 13),
(91, 8),
(91, 1),
(91, 13),
(92, 18),
(92, 1),
(92, 13),
(92, 21),
(92, 2),
(93, 1),
(93, 21),
(93, 9),
(94, 1),
(94, 18),
(95, 1),
(95, 13),
(95, 7),
(96, 1),
(96, 13),
(96, 18),
(97, 7),
(97, 15),
(98, 1),
(98, 18),
(99, 1),
(99, 7),
(99, 10),
(100, 1),
(100, 3),
(101, 1),
(101, 11),
(102, 13),
(102, 18),
(103, 1),
(103, 17),
(104, 1),
(105, 1),
(105, 7),
(105, 13),
(106, 1),
(106, 7),
(107, 1),
(107, 9),
(108, 7),
(108, 18),
(109, 1),
(109, 17),
(109, 13),
(110, 13),
(111, 11),
(111, 1),
(112, 1),
(112, 18),
(112, 2),
(113, 1),
(113, 18),
(113, 17),
(114, 18),
(114, 7),
(115, 9),
(116, 1),
(116, 13),
(117, 1),
(117, 21),
(118, 1),
(118, 13),
(119, 13),
(119, 11),
(120, 21),
(121, 1),
(121, 13),
(122, 7),
(123, 7),
(123, 2),
(124, 1),
(124, 21),
(125, 10),
(125, 18),
(126, 1),
(126, 9),
(127, 9),
(128, 1),
(128, 10),
(128, 18),
(129, 1),
(129, 21),
(129, 9),
(130, 7),
(130, 2),
(131, 13),
(131, 2),
(132, 1),
(132, 10),
(133, 1),
(133, 21),
(133, 2),
(134, 18),
(135, 18),
(136, 1),
(137, 1),
(137, 10),
(137, 7),
(138, 9),
(139, 7),
(140, 22),
(141, 22),
(142, 10),
(142, 18);

-- --------------------------------------------------------

--
-- Table structure for table `game_sessions`
--

CREATE TABLE `game_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `instance_id` bigint(20) UNSIGNED DEFAULT NULL,
  `schedule_id` bigint(20) UNSIGNED DEFAULT NULL,
  `serviced_by` bigint(20) UNSIGNED DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'QUEUE',
  `discount` double NOT NULL DEFAULT 0,
  `invoice_id` bigint(20) UNSIGNED DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Action', 'action', '2025-07-13 23:58:09', '2025-07-13 23:58:09'),
(2, 'Child-Game', 'child-game', '2025-07-13 23:58:09', '2025-07-13 23:58:09'),
(3, 'Cyberpunk', 'cyberpunk', '2025-07-13 23:58:10', '2025-07-13 23:58:10'),
(4, 'Design', 'design', '2025-07-13 23:58:10', '2025-07-13 23:58:10'),
(5, 'Detective', 'detective', '2025-07-13 23:58:10', '2025-07-13 23:58:10'),
(6, 'Exploration', 'exploration', '2025-07-13 23:58:10', '2025-07-13 23:58:10'),
(7, 'Singleplayer', 'singleplayer', '2025-07-13 23:58:10', '2025-07-13 23:58:10'),
(8, 'Fantasy', 'fantasy', '2025-07-13 23:58:10', '2025-07-13 23:58:10'),
(9, 'Horror', 'horror', '2025-07-13 23:58:11', '2025-07-13 23:58:11'),
(10, 'Sport', 'sport', '2025-07-13 23:58:11', '2025-07-13 23:58:11'),
(11, 'Space', 'space', '2025-07-13 23:58:11', '2025-07-13 23:58:11'),
(12, 'Quest', 'quest', '2025-07-13 23:58:11', '2025-07-13 23:58:11'),
(13, 'Adventure', 'adventure', '2025-07-13 23:58:11', '2025-07-13 23:58:11'),
(14, 'Music', 'music', '2025-07-13 23:58:11', '2025-07-13 23:58:11'),
(15, 'Multiplayer', 'multiplayer', '2025-07-13 23:58:12', '2025-07-13 23:58:12'),
(16, 'Rhythm', 'rhythm', '2025-07-13 23:58:12', '2025-07-13 23:58:12'),
(17, 'Violent', 'violent', '2025-07-13 23:58:12', '2025-07-13 23:58:12'),
(18, 'Simulation', 'simulation', '2025-07-13 23:58:12', '2025-07-13 23:58:12'),
(19, 'Strategy', 'strategy', '2025-07-13 23:58:12', '2025-07-13 23:58:12'),
(20, 'Survival', 'survival', '2025-07-13 23:58:13', '2025-07-13 23:58:13'),
(21, 'Shooter', 'shooter', '2025-07-13 23:58:13', '2025-07-13 23:58:13'),
(22, 'Racing', 'racing', '2025-07-13 23:58:13', '2025-07-13 23:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `hostnames`
--

CREATE TABLE `hostnames` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hostname` varchar(12) NOT NULL,
  `container` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instances`
--

CREATE TABLE `instances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mac_address` varchar(255) DEFAULT NULL,
  `device` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instances`
--

INSERT INTO `instances` (`id`, `mac_address`, `device`, `active`, `created_at`, `updated_at`) VALUES
(1, 'C0:25:7F:6D:A1:D7', 'HTC', 1, '2025-07-14 00:00:45', '2025-07-14 00:00:45'),
(2, 'C0:D8:9E:86:27:A7', 'HTC', 1, '2025-07-14 00:00:45', '2025-07-14 00:00:45'),
(3, 'C9:94:F7:E7:72:7B', 'HTC', 1, '2025-07-14 00:00:45', '2025-07-14 00:00:45'),
(4, '80:4E:1A:2D:D5:48', 'HTC', 1, '2025-07-14 00:00:46', '2025-07-14 00:00:46'),
(5, 'BF:B8:D9:3C:DA:95', 'OCULUS', 1, '2025-07-14 00:00:46', '2025-07-14 00:00:46'),
(6, '11:7C:21:DB:30:06', 'OCULUS', 1, '2025-07-14 00:00:46', '2025-07-14 00:00:46'),
(7, 'DF:D7:EF:D4:5B:14', 'PS_VR', 1, '2025-07-14 00:00:46', '2025-07-14 00:00:46'),
(8, '6B:96:88:9F:F2:4A', 'PS_VR', 1, '2025-07-14 00:00:46', '2025-07-14 00:00:46'),
(9, 'AE:5C:F4:06:ED:24', 'OMNI', 1, '2025-07-14 00:00:47', '2025-07-14 00:00:47'),
(10, '1D:BA:BF:C0:92:0C', 'OMNI', 1, '2025-07-14 00:00:47', '2025-07-14 00:00:47'),
(11, 'B7:2E:ED:E3:E5:56', 'OMNI', 1, '2025-07-14 00:00:47', '2025-07-14 00:00:47'),
(12, 'AE:77:7C:ED:94:70', 'OMNI', 1, '2025-07-14 00:00:47', '2025-07-14 00:00:47'),
(13, 'F2:B0:CB:DE:F7:2C', 'DOF_3', 1, '2025-07-14 00:00:47', '2025-07-14 00:00:47'),
(14, 'AB:B0:F8:BF:9C:47', 'DOF_3', 1, '2025-07-14 00:00:47', '2025-07-14 00:00:47'),
(15, '50:35:92:12:1E:F4', 'DOF_3', 1, '2025-07-14 00:00:48', '2025-07-14 00:00:48'),
(16, 'EA:ED:AF:19:F7:37', 'DOF_3', 1, '2025-07-14 00:00:48', '2025-07-14 00:00:48');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'QUEUE',
  `payment_method` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loyalty_cards`
--

CREATE TABLE `loyalty_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'BASIC',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) DEFAULT NULL,
  `collection_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `mime_type` varchar(255) DEFAULT NULL,
  `disk` varchar(255) NOT NULL,
  `conversions_disk` varchar(255) DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1104, 'device-game', 1, '0a690943-ae67-4ad5-858d-e0b6d6289a14', 'preview', 'batman-arkham', 'batman-1.png', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1105, 'device-game', 2, '37047313-6dff-444b-9ac0-9edbc92f03c6', 'preview', 'arizona-sunshine', 'youtube-video-cover-1.png', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1106, 'device-game', 3, '9334447b-5acc-4362-b9c3-d5b7d205cea7', 'preview', 'theblu', 'theblu-1-1.png', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1108, 'device-game', 4, '9b3373af-0516-4012-8e5d-288f5b129195', 'preview', 'superhot', 'superhot-1.png', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1109, 'device-game', 5, 'f460016b-b943-4cf5-97aa-5d419072caab', 'preview', 'serious-sam-fusion-2017', 'siruis-sam.png', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1110, 'device-game', 7, 'bc28b4cf-3657-4656-b461-38451dc2cf3b', 'preview', 'google-earth-vr', 'google-earth.png', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1111, 'device-game', 8, '269b02d4-5411-451c-afdc-658a2bad9e55', 'preview', 'gnomes-goblins', 'gnomes-and-goblins.png', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1113, 'device-game', 9, '84953dd1-92e6-4e28-b049-8f08cf35b3d6', 'preview', 'tilt-brush', 'tilt-brush.png', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1115, 'device-game', 10, '9690471d-17d9-4c77-88af-dc2ffe065777', 'preview', 'a-escape-vr', 'a-escape-vr.png', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1116, 'device-game', 11, '849b55f2-9479-4afa-83eb-c265cd11267b', 'preview', 'fruit-ninja-vr', 'fruit-ninja.png', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1117, 'device-game', 6, '7355e5fb-eec1-4d3e-803e-35c2117b7f0c', 'preview', 'a-lost-room', 'a-lost-room.png', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1118, 'device-game', 12, '815a10e6-c2b7-46a7-927b-f2393986e955', 'preview', 'paranormal-activity-the-lost-soul', 'paranormal-activity.png', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1119, 'device-game', 13, 'ab82959f-72de-4267-8d0e-4562f3e99973', 'preview', 'raw-data', 'raw-data.png', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1120, 'device-game', 14, '1ceb5048-d9e6-4e10-8c65-ffcd94dfa101', 'preview', 'the-lab', 'the-lab.png', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1121, 'device-game', 15, '3719fe4f-a8b4-4153-90bf-c7853a3d458d', 'preview', 'the-belko-experiment', 'the-belko-experiment.png', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1122, 'device-game', 16, '4792415e-ae89-4bc6-81b1-3bdc7fb5d305', 'preview', 'vr-funhouse', 'vr-funhouse.png', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1123, 'device-game', 17, '149bce42-0fa6-4fef-a75c-b3f6d9804b94', 'preview', 'locked-in-vr', 'locked-in-vr.png', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1124, 'device-game', 18, '38ed3663-89b0-4c93-93d5-a3a2a733d858', 'preview', 'fancy-skiing-vr', 'fancy-skiing-vr.png', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1156, 'device-game', 19, '6baf40a7-d889-4a68-a697-5ff68149a93e', 'preview', 'affected-the-manor', 'affected.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1157, 'device-game', 20, '1192c876-ea5d-43ca-814e-2fd65411d495', 'preview', 'apollo-11', 'apollo.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1159, 'device-game', 21, '7af536d7-8e5b-49aa-ab73-9fcc22d3db14', 'preview', 'araya', 'araya.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1162, 'device-game', 22, '3ec558aa-6d20-4b4b-8306-754b7ef41274', 'preview', 'archangel', 'archangel.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1163, 'device-game', 23, '0664e53e-3726-42ea-ac1f-575de50d03d1', 'preview', 'the-assembly', 'the_assembly.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1165, 'device-game', 24, '96da418e-8dbe-409f-a123-55d9c68d3b19', 'preview', 'audioshield', 'audioshield.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1168, 'device-game', 25, '9dc9731f-65e5-4561-9c77-2ca244c66a4f', 'preview', 'bartender-vr-simulator', 'bartender.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1169, 'device-game', 26, 'a08261e3-ec4d-46cd-a8f0-2d947eef117f', 'preview', 'bloody-zombies', 'bloode_zombie.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1170, 'device-game', 27, '37ef3a69-f847-4fb9-abf0-bdf36ea413e0', 'preview', 'battlezone', 'battlezone.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1171, 'device-game', 28, 'b368db34-838b-4912-b69d-8231d9fa9ebc', 'preview', 'blue-effect', 'blue_effect.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1172, 'device-game', 29, '8c2ee8bb-c752-45b9-b5be-e4b30de9fe2e', 'preview', 'bowslinger', 'bowslinger.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1173, 'device-game', 30, '65534a68-3489-4eef-b1b7-eaa46711cd23', 'preview', 'boxvr', 'boxvr.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1174, 'device-game', 31, 'b0a6588b-3187-451f-b760-2867c25f4a78', 'preview', 'the-brookhaven-experiment', 'the_brookhaven_experimentt-1_0x260.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1175, 'device-game', 32, '3a56b8ca-2406-4e1b-a862-d0d156965fc4', 'preview', 'a-chair-in-a-room-greenwater', 'a_chair.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1176, 'device-game', 33, 'ae422218-de6c-406e-9ed3-367c19ac34f0', 'preview', 'chess-ultra', 'chess_ultra.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1177, 'device-game', 34, 'bd2a9d08-cede-40c8-8444-84ba6b9e19c4', 'preview', 'climbey', 'climbey.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1178, 'device-game', 35, '8243a5dc-7259-4ba7-9ba7-a5feedea6b52', 'preview', 'dead-hungry', 'dead_hungry.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1179, 'device-game', 36, '9ed1a663-9ad1-457a-9485-dede5060451f', 'preview', 'dead-secret', 'dead_secret.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1180, 'device-game', 37, 'e9a16fb1-727c-4392-a0d6-e117a8323070', 'preview', 'dont-knock-twice', 'dont_knock_twice.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1181, 'device-game', 38, '2a89e321-eab9-4d7c-b17e-5faa8f7c0304', 'preview', 'dont-let-go', 'dont_et_go.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1182, 'device-game', 39, 'd1c0edd9-6636-408e-8520-60e6ae1387bd', 'preview', 'dota-2', 'dota2.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1183, 'device-game', 40, 'ef68e72c-9c52-47ca-b6a6-41c708103b22', 'preview', 'duck-season', 'duck_season.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1184, 'device-game', 41, '5eb7f004-2f00-46e4-b963-d78346d68e95', 'preview', 'eleven-table-tennis-vr', 'eleven_table.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1185, 'device-game', 42, '19d22fa1-38ae-456b-9f37-76851b890b08', 'preview', 'emily-wants-to-play', 'emily.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1186, 'device-game', 43, '873becd6-2545-4d00-a7ce-10f5d97f895d', 'preview', 'escape-bloody-mary', 'escape_bloody.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1187, 'device-game', 44, 'b5124769-feb9-4002-8639-002c44fd0e57', 'preview', 'everest-vr', 'everest_vr.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1188, 'device-game', 45, '46250bbf-1bec-44a3-a1ce-39bd404f4231', 'preview', 'fast-action-hero', 'fast_action_hero.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1189, 'device-game', 46, '404bfb9d-f36c-47dc-a55c-ac971f7fc36d', 'preview', 'final-soccer-vr', 'final_soccer_vr.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1190, 'device-game', 47, 'a9ec18be-655c-4e25-ad09-508f81b0859a', 'preview', 'first-person-tennis', 'first_person_tennis.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1191, 'device-game', 48, '177c2b91-6e09-4336-a3dc-36b5c90af66c', 'preview', 'form', 'form.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1193, 'device-game', 49, '59fd937e-d016-416d-9fa7-3a1bc8e9ad93', 'preview', 'the-gallery-episode-1', 'the_gallery_episode_1.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1194, 'device-game', 50, 'b0fb0544-c657-4779-bab2-e9197a1149d4', 'preview', 'the-gallery-episode-2', 'the_gallery_episode_2_0x260.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1195, 'device-game', 51, '1d37252d-bc5d-4cb1-9041-192f7d09439e', 'preview', 'the-gleam-vr-escape-the-room', 'the_gleam_vr_escape_the_room_0x260.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1196, 'device-game', 52, '0ee13477-f2e7-4038-8c8e-5ab2f285e59c', 'preview', 'gorn', 'gorn_0x260.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1197, 'device-game', 53, '228f59fd-46c6-4752-943a-4e3104dd7a14', 'preview', 'gun-club-vr', 'gun_club_vr_0x260.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1198, 'device-game', 54, 'e300edd4-9fe5-431a-8c1a-4a949129d320', 'preview', 'gunheart', 'gunheart.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1199, 'device-game', 55, 'd81710ec-e8be-49d1-a820-9597c6992dfa', 'preview', 'i-expect-you-to-die', 'i_expect_you_to_die.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1200, 'device-game', 56, 'dae61027-e829-48f3-8573-b630b0567f58', 'preview', 'ironwolf-vr', 'iron_wolf.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1201, 'device-game', 57, '837078f4-2843-45e1-870a-4b64b0f6bc15', 'preview', 'island-359', 'island_359.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1202, 'device-game', 58, '7836b0f8-8149-4674-a47b-a2ea76b7b557', 'preview', 'job-simulator', 'job_simulator.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1203, 'device-game', 59, '72377abf-aec7-4787-8ee0-324332387482', 'preview', 'killing-floor', 'killing_floor.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1204, 'device-game', 60, 'd362c489-e483-4a79-9501-01747bc0ea6c', 'preview', 'la-peri', 'la_peri.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1205, 'device-game', 61, 'dc894424-f88f-4dd1-9c9a-33d0b949b175', 'preview', 'music-inside', 'music_inside.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1206, 'device-game', 62, 'b9252577-77bb-4bd1-a491-c759c0399394', 'preview', 'narcosis', 'narcosis.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1207, 'device-game', 63, '183e095a-c3ea-4814-9f7f-b51682d11119', 'preview', 'nba-2kvr-experience', 'nba_2kvr_experience.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1208, 'device-game', 64, 'd654b584-f461-419d-b781-415f8682d6fd', 'preview', 'neurowake', 'neurowake.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1209, 'device-game', 65, '8231ee0b-db2d-44fb-aa21-ac5845891881', 'preview', 'obduction', 'obduction.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1210, 'device-game', 66, '4a9217dc-05f2-43d0-b39c-714905fd582c', 'preview', 'obscura', 'obscura.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1212, 'device-game', 67, 'e438e841-5c25-4fbf-b186-6d67aa0ff7c4', 'preview', 'ocean-rift', 'ocean_rift.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1213, 'device-game', 68, '4c513bfc-4299-4a8a-babf-7e21d6797c45', 'preview', 'ok-bob', 'ok_bob.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1214, 'device-game', 69, 'ab8ae002-6cbb-412d-9660-7e6e307e22a0', 'preview', 'onward', 'onward.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1215, 'device-game', 70, 'dce8fd51-941c-46d1-b270-4af89f5fdbe3', 'preview', 'overkill-vr', 'overkill_vr.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1216, 'device-game', 71, '2c68d4e0-1b3e-494b-86d8-677043297bb8', 'preview', 'pavlov-vr', 'pavlov_vr.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1217, 'device-game', 72, 'a400368c-70a6-4657-87bb-3efb3f151d1b', 'preview', 'rise-of-insanity', 'rise_of_insanity.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1218, 'device-game', 73, '068ad43c-b964-4c1b-8a4f-49ef3342f4ec', 'preview', 'robinson-the-journey', 'robinson_the_journey.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1219, 'device-game', 74, '0d382473-2dbc-410d-ab18-a563ee7e1878', 'preview', 'sairento-vr', 'sairento_vr.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1221, 'device-game', 75, 'a8cb36de-5b56-4ffb-9e0e-e8da9abc0cae', 'preview', 'show-must-go-on', 'show_must_go_onpsd.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1222, 'device-game', 76, 'b8460981-ead3-46d3-a9d2-e8b20065e29f', 'preview', 'the-solus-project', 'the_solus_project.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1223, 'device-game', 77, '0c488c47-cb10-429c-b8b3-fd8d6a6e6def', 'preview', 'space-bit-attack', 'space_bit_attack.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1224, 'device-game', 78, '9dc0fb70-c47f-4764-bb4f-30c2715160e0', 'preview', 'sparc', 'sparc.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1225, 'device-game', 79, '5ad6e4cb-33ef-4f0d-8fe3-8004f08c01dd', 'preview', 'sportsbar-vr', 'sportsbar_vr.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1226, 'device-game', 80, 'fa401748-4432-4429-9a27-f1bfe182d2a3', 'preview', 'super-vr-trainer', 'super_vr_trainer.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1228, 'device-game', 81, '5bc0c4ba-8674-4c3d-8f8f-b34746575383', 'preview', 'surgeon-simulator', 'surgeon_simulator.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1229, 'device-game', 82, '14245b68-7d84-4a50-a2e1-7c81d473b5d8', 'preview', 'svrvive-the-deus-helix', 'svrvive_the_deus_helix-1.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1230, 'device-game', 83, '2f606670-c2d5-4953-b1af-267d561bec66', 'preview', 'the-talos-principle-vr', 'the_talos_principle_vr.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1231, 'device-game', 84, '9fa5e27d-22ec-451e-9bee-149ee511b32d', 'preview', 'tethered', 'tethered.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1232, 'device-game', 85, '650b8dff-37bd-4abc-a937-bbe83684ef07', 'preview', 'the-thrill-of-the-fight', 'the_thrill_of_the_fight.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1233, 'device-game', 86, '2392274c-2d6c-45d6-8578-98fbc2b5478c', 'preview', 'time-machine-vr', 'time_machine_vr.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1234, 'device-game', 87, '83ffe8c3-984c-4963-8a0d-cdd0bd6976d1', 'preview', 'toon-ocean-vr', 'toon_ocean_vr.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1235, 'device-game', 88, '3521ff3c-2166-4806-9887-bdcd703e72c2', 'preview', 'tornuffalo', 'tornuffalo.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1236, 'device-game', 89, '8a4a7f31-0234-455b-b567-3010f229d985', 'preview', 'the-vanishing-of-ethan-carter', 'the_vanishing_of_ethan.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1237, 'device-game', 90, 'f3c22711-61e0-4d17-98c1-9a87e1be5a4f', 'preview', 'vr-varcale-the-room', 'vacate.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1238, 'device-game', 91, '284c3211-897e-40fe-8696-5dc02cee8c68', 'preview', 'the-wizards', 'the_wizards.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1239, 'device-game', 92, '5473ecb9-bcfb-4f14-bf38-ec0da79a7298', 'preview', 'zombie-training-simulator', 'zombie_training.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1240, 'device-game', 93, 'b46d230d-d8ff-497e-9338-ff0ddff8e010', 'preview', 'zomday', 'zomday.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1241, 'device-game', 94, 'c7c23734-21d1-4c38-86e5-89d3ba726c1c', 'preview', 'just-in-time-incorporated', 'just_in_time_incorporated.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1242, 'device-game', 95, '00c61883-131f-4a6f-9eb1-bb521a25e020', 'preview', 'homebound', 'homebound.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1243, 'device-game', 96, '647540be-f049-4d68-a90f-d64ad17f97ac', 'preview', 'high-noon-vr', 'high_noon_vr.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1244, 'device-game', 97, '1f276242-e6ff-4727-a233-d01332430b9c', 'preview', 'henry-the-hamster-handler', 'henry_the_hamster.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1245, 'device-game', 98, '90dd3738-53d4-4040-8b91-3e783ae24d53', 'preview', 'gunship-battle-2-vr', 'gunship_battle_2_vr.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1246, 'device-game', 99, '42acb13b-4fd0-4225-963f-62b899068531', 'preview', 'vr-golf-online', 'vr_golf_online.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1247, 'device-game', 100, '15ffef77-3e1f-4966-8078-6f21ed6af937', 'preview', 'vr-invaders', 'vr_invaders.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1248, 'device-game', 101, '46578268-e9e7-42ee-86b5-1dd24999416b', 'preview', 'space-pirate-trainer', 'space_pirate_trainer.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1249, 'device-game', 102, '85c17ab6-83b4-4581-960c-e11176b9a1b1', 'preview', 'rick-and-morty', 'rick_morty_virtual_rickality.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1250, 'device-game', 103, 'bb2e8222-fb58-4953-8859-57aca2bf77f2', 'preview', 'protonwar', 'proton_war.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1251, 'device-game', 104, '4fb48a3f-9cf2-49f4-b1bc-21e76a88e45c', 'preview', 'primal-carnage', 'primal_carnage.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1252, 'device-game', 105, '4ae98191-e044-4fda-9fcb-d63e7d8909fd', 'preview', 'legendary-hunter-v', 'legendary_hunter_vr.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1253, 'device-game', 106, '00a20fdb-a270-4c80-ab10-7edd6b39c60a', 'preview', 'gunss-stories-bulletprof-vr', 'guns_stories_bulletproof_vr.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1254, 'device-game', 107, '5366876d-3553-4f1b-9608-c83c772f3a8b', 'preview', 'ghost-town-mine-ride-shootin-gallery', 'ghost_town_mine_ride_shooting_gallery.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1255, 'device-game', 108, '64fb91f9-418d-4c2c-b653-41db676a2e52', 'preview', 'a-fear-of-heights-and-other-things', 'a_fear.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1256, 'device-game', 109, 'd4ae8d28-bdf1-4431-be55-982ee97f695e', 'preview', 'exorcist-legion-vr', 'exorcist_legion_vr.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1257, 'device-game', 110, '6c672033-973e-473f-8a6d-d457a5c26c29', 'preview', 'fated-the-silent-oath', 'fated_the_silent_oath.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1258, 'device-game', 111, 'fcbc8659-8d78-42c0-b47d-5b73970f885f', 'preview', 'eve-valkyrie-warzone', 'eve.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1259, 'device-game', 112, 'e4dade08-aea6-4e8c-a5d7-0a40c22b68d5', 'preview', 'eagle-flight', 'eagle.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1260, 'device-game', 113, '63312704-1e49-4c81-9db9-79f120a0b4b7', 'preview', 'drunk-of-dead', 'drunk_or_dead.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1261, 'device-game', 114, 'e2a61a05-904f-4a6b-a2ba-1721fa7c1b0b', 'preview', 'dream-coaster-vr', 'dream_coaster_vr.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1262, 'device-game', 115, '604068b4-6685-4519-b68a-fb637280650e', 'preview', 'dreadhalls', 'dreadhalls.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1263, 'device-game', 116, 'da6ebbf6-31b9-4ad3-a20d-9c16a83a63fb', 'preview', 'downward-spiral-prologue', 'downward.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1264, 'device-game', 117, '5605c483-6e6b-4e6b-8c7e-29668eb3eafe', 'preview', 'bullet-sorrow-vr', 'bullet_sorrow.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1265, 'device-game', 118, '78edc6ce-1646-40f0-97ee-08beb635e2cf', 'preview', 'alice-vr', 'alice.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1266, 'device-game', 119, 'b7afc6db-d0ba-4e17-9bc6-320f9806ae85', 'preview', 'adr1ft', 'adr1ft.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1267, 'device-game', 120, '976afec6-a1f1-4bb4-a329-e3e89f35dd07', 'preview', 'arktika-1', 'arktika_1.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1268, 'device-game', 121, '105b7414-b870-4c3d-9933-f030a5f01b4c', 'preview', 'blade-runner-2049', 'blade.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1269, 'device-game', 122, '2d810cb0-768e-4795-8015-f48b0643f15e', 'preview', 'blocks', 'blocks.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1270, 'device-game', 123, '2556d999-eebd-4580-87da-1a5ba896d9f8', 'preview', 'coco-vr', 'coco.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1271, 'device-game', 124, '384b4df8-a094-4511-81ec-a4941115bcc4', 'preview', 'dead-and-buried', 'dead_and_buried.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1272, 'device-game', 125, '70db6d5a-3401-4f12-b2fa-af7b42098037', 'preview', 'echo-arena', 'echo_arena.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1273, 'device-game', 126, '0fb7b039-7e45-4dd2-9d3c-2675ae9125bf', 'preview', 'edge-of-nowhere', 'edge_of_nowhere.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1274, 'device-game', 127, '3d041b13-ecd1-432d-ba27-c90419f704ba', 'preview', 'face-your-fears', 'face_your_fears.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1275, 'device-game', 128, 'bfa18043-33a5-4c96-b92c-94b223999100', 'preview', 'final-goalie-football-simulator', 'final_golie.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1276, 'device-game', 129, '05ce1752-cf7f-4ede-b63e-b7b5eebe98c0', 'preview', 'killing-floor-incursion', 'killing_floor.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1277, 'device-game', 130, '60414726-4c43-4f72-8cf6-d6f86fcf4f30', 'preview', 'luckys-tale', 'luckys_tale.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1278, 'device-game', 131, 'e75a1a07-2cd3-43a6-af55-cdd984e80283', 'preview', 'minecraft', 'minecraft.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1279, 'device-game', 132, 'd34aa66c-42f7-4af4-875f-4e2be8188744', 'preview', 'ripcoil', 'ripcoil.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1280, 'device-game', 133, '653ecaa5-1ebc-4761-96de-3848b52cfbf9', 'preview', 'robo-recall', 'robo_recall.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1281, 'device-game', 134, 'af41b45f-7ccf-4314-bf2a-d5332da7de74', 'preview', 'rock-band-vr', 'rock_band_vr.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1282, 'device-game', 135, '7ff36093-2a8d-4e69-8b96-3d82c2e0a8fb', 'preview', 'the-climb', 'the_climb.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1283, 'device-game', 136, 'db6d3111-fb16-419f-86a1-f5cf7b01b623', 'preview', 'the-unspoken', 'the_unspoken.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1284, 'device-game', 137, '731d575f-7ba7-4849-8ed7-c612b2eff032', 'preview', 'vr-sports-challenge', 'vr_sports_challenge-1.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1285, 'device-game', 138, '6ef295f9-2d8d-4e4f-b621-ebb0952992cb', 'preview', 'wilson-heart', 'wilsons_heart.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1286, 'device-game', 139, '01de59b4-f769-4017-bfda-f9594daae783', 'preview', 'dreamdeck', 'dreamdeck.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1287, 'device-game', 140, 'c9fcb73a-581e-4ce8-bb6b-0f5f2111b619', 'preview', 'asseto-corsa', 'assetto.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1288, 'device-game', 141, '9bfa70a6-6790-4d3e-b380-5dde6327ed50', 'preview', 'dirt-rally', 'dirt_rally.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21'),
(1289, 'device-game', 142, 'c797eed6-23b3-481d-9d79-be3c3c1f4092', 'preview', 'project-cars2', 'project_cars2.jpg', 'image/jpeg', 'media', 'media', 178469, '[]', '[]', '[]', '[]', 1, '2025-08-05 00:57:21', '2025-08-05 00:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2018_08_08_100000_create_telescope_entries_table', 1),
(6, '2019_04_09_211908_create_comments_table', 1),
(7, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2022_03_17_145950_create_devices_table', 1),
(9, '2022_03_20_095616_create_media_table', 1),
(10, '2022_03_20_095745_create_games_table', 1),
(11, '2022_03_20_153133_create_genres_table', 1),
(12, '2022_03_20_170503_create_game_genre_table', 1),
(13, '2022_03_20_175901_create_game_device_table', 1),
(14, '2022_03_20_184332_create_device_instances_table', 1),
(15, '2022_03_20_220618_create_customers_table', 1),
(16, '2022_03_20_223414_create_customer_loyalty_cards_table', 1),
(17, '2022_03_21_093212_create_authors_table', 1),
(18, '2022_03_21_142447_create_employees_table', 1),
(19, '2022_03_21_175846_create_reservations_table', 1),
(20, '2022_03_21_184057_create_invoices_table', 1),
(21, '2022_03_21_185420_create_sessions_table', 1),
(22, '2022_03_21_190149_create_snacks_table', 1),
(23, '2022_03_21_190150_create_snack_sales_table', 1),
(24, '2024_02_05_025626_create_hostnames_table', 1),
(25, '2024_02_06_021821_create_configs_table', 1),
(26, '2024_08_04_004315_add_crm_contacts_table', 1),
(27, '2024_08_04_014557_add_status_type_for_customers_table', 1),
(28, '2024_08_16_110545_create_role_and_permissions_table', 1),
(29, '2024_08_20_184333_create_device_instance_schedule_table', 1),
(30, '2024_08_30_215542_create_tariff_plans_table', 1),
(31, '2024_09_02_151832_create_posts_table', 1),
(32, '2024_10_12_011708_create_action_events_table', 1),
(33, '2024_10_12_011709_add_fields_to_action_events_table', 1),
(34, '2024_10_12_011710_create_nova_notifications_table', 1),
(35, '2024_10_12_011711_add_fields_to_nova_notifications_table', 1),
(36, '2024_10_12_011712_create_field_attachments_table', 1),
(37, '2024_11_24_030000_create_revisions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nova_comments`
--

CREATE TABLE `nova_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `commentable_type` varchar(255) NOT NULL,
  `commentable_id` bigint(20) UNSIGNED NOT NULL,
  `commenter_id` int(10) UNSIGNED DEFAULT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nova_field_attachments`
--

CREATE TABLE `nova_field_attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `attachable_type` varchar(255) NOT NULL,
  `attachable_id` bigint(20) UNSIGNED NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `disk` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nova_notifications`
--

CREATE TABLE `nova_notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nova_pending_field_attachments`
--

CREATE TABLE `nova_pending_field_attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `draft_id` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `disk` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'access_to_adminpanel', '2024-12-14 21:23:55', '2024-12-14 21:23:55'),
(2, 'manage_sessions', '2024-12-14 21:23:55', '2024-12-14 21:23:55');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `post` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contacts` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL,
  `customers_qty` int(11) DEFAULT NULL,
  `customers_yo` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'QUEUE',
  `note` text DEFAULT NULL,
  `request_from` varchar(255) DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `revisions`
--

CREATE TABLE `revisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `revisionable_type` varchar(255) NOT NULL,
  `revisionable_id` bigint(20) UNSIGNED NOT NULL,
  `revised_by` bigint(20) UNSIGNED DEFAULT NULL,
  `action` varchar(255) NOT NULL,
  `original_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`original_data`)),
  `modified_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`modified_data`)),
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2024-12-14 21:23:55', '2024-12-14 21:23:55'),
(2, 'Manager', '2024-12-14 21:23:55', '2024-12-14 21:23:55'),
(3, 'Cashier', '2024-12-14 21:23:55', '2024-12-14 21:23:55'),
(4, 'Staff', '2024-12-14 21:23:55', '2024-12-14 21:23:55');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `instance_id` bigint(20) UNSIGNED NOT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('vCtCwYUrAtLFwXV0eBfVtRwThNUUSsxjvUPhzIx3', NULL, '192.168.65.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidng1Y0VPb3BWdFFsdmp0ODNOSlltVmkzaEVFcTRJS3hya1JldEl5UCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMjoiaHR0cDovL2xvY2FsaG9zdDo4MTAwL2FkbWlucGFuZWwiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMjoiaHR0cDovL2xvY2FsaG9zdDo4MTAwL2FkbWlucGFuZWwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1754355897);

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE `snacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `price` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `snacks`
--

INSERT INTO `snacks` (`id`, `name`, `stock`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Red Bull', 10, 2.5, '2025-07-16 23:50:00', '2025-07-16 23:50:00'),
(2, 'Coca-Cola', 15, 2, '2025-07-16 23:50:00', '2025-07-16 23:50:00'),
(3, 'Fanta', 13, 2, '2025-07-16 23:50:00', '2025-07-16 23:50:00'),
(4, 'Snickers', 9, 1.5, '2025-07-16 23:50:00', '2025-07-16 23:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `snack_sales`
--

CREATE TABLE `snack_sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `snack` varchar(255) NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `invoice_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tariff_plans`
--

CREATE TABLE `tariff_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tariff` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `device` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tariff_plans`
--

INSERT INTO `tariff_plans` (`id`, `tariff`, `time`, `price`, `device`, `created_at`, `updated_at`) VALUES
(1, 'MORNING', 'MIN_15', 10, 'HTC', '2025-07-16 23:50:49', '2025-07-16 23:50:49'),
(2, 'MORNING', 'MIN_30', 15, 'HTC', '2025-07-16 23:50:49', '2025-07-16 23:50:49'),
(3, 'MORNING', 'MIN_60', 25, 'HTC', '2025-07-16 23:50:49', '2025-07-16 23:50:49'),
(4, 'EVENING', 'MIN_15', 15, 'HTC', '2025-07-16 23:50:50', '2025-07-16 23:50:50'),
(5, 'EVENING', 'MIN_30', 27, 'HTC', '2025-07-16 23:50:50', '2025-07-16 23:50:50'),
(6, 'EVENING', 'MIN_60', 45, 'HTC', '2025-07-16 23:50:50', '2025-07-16 23:50:50'),
(7, 'MORNING', 'MIN_15', 10, 'OCULUS', '2025-07-16 23:50:50', '2025-07-16 23:50:50'),
(8, 'MORNING', 'MIN_30', 15, 'OCULUS', '2025-07-16 23:50:50', '2025-07-16 23:50:50'),
(9, 'MORNING', 'MIN_60', 25, 'OCULUS', '2025-07-16 23:50:51', '2025-07-16 23:50:51'),
(10, 'EVENING', 'MIN_15', 15, 'OCULUS', '2025-07-16 23:50:51', '2025-07-16 23:50:51'),
(11, 'EVENING', 'MIN_30', 27, 'OCULUS', '2025-07-16 23:50:51', '2025-07-16 23:50:51'),
(12, 'EVENING', 'MIN_60', 45, 'OCULUS', '2025-07-16 23:50:51', '2025-07-16 23:50:51'),
(13, 'MORNING', 'MIN_15', 10, 'PS_VR', '2025-07-16 23:50:51', '2025-07-16 23:50:51'),
(14, 'MORNING', 'MIN_30', 15, 'PS_VR', '2025-07-16 23:50:51', '2025-07-16 23:50:51'),
(15, 'MORNING', 'MIN_60', 25, 'PS_VR', '2025-07-16 23:50:52', '2025-07-16 23:50:52'),
(16, 'EVENING', 'MIN_15', 15, 'PS_VR', '2025-07-16 23:50:52', '2025-07-16 23:50:52'),
(17, 'EVENING', 'MIN_30', 27, 'PS_VR', '2025-07-16 23:50:52', '2025-07-16 23:50:52'),
(18, 'EVENING', 'MIN_60', 45, 'PS_VR', '2025-07-16 23:50:52', '2025-07-16 23:50:52'),
(19, 'MORNING', 'MIN_15', 10, 'OMNI', '2025-07-16 23:50:52', '2025-07-16 23:50:52'),
(20, 'MORNING', 'MIN_30', 15, 'OMNI', '2025-07-16 23:50:52', '2025-07-16 23:50:52'),
(21, 'MORNING', 'MIN_60', 25, 'OMNI', '2025-07-16 23:50:53', '2025-07-16 23:50:53'),
(22, 'EVENING', 'MIN_15', 15, 'OMNI', '2025-07-16 23:50:53', '2025-07-16 23:50:53'),
(23, 'EVENING', 'MIN_30', 27, 'OMNI', '2025-07-16 23:50:54', '2025-07-16 23:50:54'),
(24, 'EVENING', 'MIN_60', 45, 'OMNI', '2025-07-16 23:50:54', '2025-07-16 23:50:54'),
(25, 'MORNING', 'MIN_15', 10, 'DOF_3', '2025-07-16 23:50:54', '2025-07-16 23:50:54'),
(26, 'MORNING', 'MIN_30', 15, 'DOF_3', '2025-07-16 23:50:55', '2025-07-16 23:50:55'),
(27, 'MORNING', 'MIN_60', 25, 'DOF_3', '2025-07-16 23:50:55', '2025-07-16 23:50:55'),
(28, 'EVENING', 'MIN_15', 15, 'DOF_3', '2025-07-16 23:50:55', '2025-07-16 23:50:55'),
(29, 'EVENING', 'MIN_30', 27, 'DOF_3', '2025-07-16 23:50:55', '2025-07-16 23:50:55'),
(30, 'EVENING', 'MIN_60', 45, 'DOF_3', '2025-07-16 23:50:55', '2025-07-16 23:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `telescope_entries`
--

CREATE TABLE `telescope_entries` (
  `sequence` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) NOT NULL,
  `batch_id` char(36) NOT NULL,
  `family_hash` varchar(255) DEFAULT NULL,
  `should_display_on_index` tinyint(1) NOT NULL DEFAULT 1,
  `type` varchar(20) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telescope_entries_tags`
--

CREATE TABLE `telescope_entries_tags` (
  `entry_uuid` char(36) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telescope_monitoring`
--

CREATE TABLE `telescope_monitoring` (
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `telegram` varchar(255) DEFAULT NULL,
  `telegram_chat_id` varchar(255) DEFAULT NULL,
  `api_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `telegram`, `telegram_chat_id`, `api_token`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Hikmat', 'Abdukhaligov', NULL, NULL, 'V0NOOEd0aUI4M2tMd24xMGJpOWxWYm52OEdTZ3lOOVFoMUt2c0Y0bQ==', 'admin@site.com', NULL, '$2y$12$kuz9spUnMiq2XFVReJKPWuT.3a2b4Gaw4Al8O/33nhQNMnDkpQC5q', NULL, '2024-10-12 06:19:57', '2025-07-13 01:00:01'),
(2, 'admim', 'admin', 'admim', NULL, NULL, NULL, 'manager@site.com', NULL, '$2y$10$nVHcO/uSIBkb.EMiQCcs7OPikyKtjLmLWzWn1FESF7hFDjpM60F8y', NULL, '2024-10-12 06:19:57', '2024-12-14 21:35:37'),
(3, 'cashier', 'testaa', 'testaa', NULL, NULL, NULL, 'cashier@site.com', NULL, '$2y$10$nVHcO/uSIBkb.EMiQCcs7OPikyKtjLmLWzWn1FESF7hFDjpM60F8y', NULL, '2024-10-12 06:19:57', '2024-12-14 21:30:12'),
(4, 'member', 'test', 'test', NULL, NULL, NULL, 'member@site.com', NULL, '$2y$10$nVHcO/uSIBkb.EMiQCcs7OPikyKtjLmLWzWn1FESF7hFDjpM60F8y', '4dt4NWgN7HO7ryHm1CGzkGMZbCcb3wAyrEYPHKxW7gN4JKH0oOFkzFEAKIq7', '2024-10-12 06:19:57', '2024-10-12 06:19:57'),
(5, 'member-2', 'Saida', 'Abdukhaligov', NULL, NULL, 'VE1xOUJ1NTJaSm9HZ2JMcG1wZldaOGhLOGRIcjVZUnVmNldSbnBSRA==', 'saida@site.com', NULL, '$2y$10$nVHcO/uSIBkb.EMiQCcs7OPikyKtjLmLWzWn1FESF7hFDjpM60F8y', '4dt4NWgN7HO7ryHm1CGzkGMZbCcb3wAyrEYPHKxW7gN4JKH0oOFkzFEAKIq7', '2024-10-12 06:19:57', '2025-06-26 18:55:20'),
(6, 'member-3', 'Gismat', 'Abdukhaligov', 'abduxaligov', '897328502', 'dGszYXNCdFlWbUNONjJlcTJ6cHVtYVFEZnFQZVVlNHNDbkJ4cDFobA==', 'gismat@site.com', NULL, '$2y$10$nVHcO/uSIBkb.EMiQCcs7OPikyKtjLmLWzWn1FESF7hFDjpM60F8y', NULL, '2024-10-12 06:19:57', '2025-06-29 07:03:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

CREATE TABLE `user_permissions` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_permissions`
--

INSERT INTO `user_permissions` (`user_id`, `permission_id`) VALUES
(3, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(1, 1),
(3, 2),
(3, 3),
(3, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action_events`
--
ALTER TABLE `action_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_events_user_id_foreign` (`user_id`),
  ADD KEY `action_events_actionable_type_actionable_id_index` (`actionable_type`,`actionable_id`),
  ADD KEY `action_events_target_type_target_id_index` (`target_type`,`target_id`),
  ADD KEY `action_events_batch_id_model_type_model_id_index` (`batch_id`,`model_type`,`model_id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authors_authorable_type_authorable_id_index` (`authorable_type`,`authorable_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `configs_key_unique` (`key`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_customer_id_foreign` (`customer_id`),
  ADD KEY `contacts_type_index` (`type`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `devices_type_unique` (`type`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_device`
--
ALTER TABLE `game_device`
  ADD KEY `game_device_game_id_foreign` (`game_id`);

--
-- Indexes for table `game_genre`
--
ALTER TABLE `game_genre`
  ADD KEY `game_genre_game_id_foreign` (`game_id`),
  ADD KEY `game_genre_genre_id_foreign` (`genre_id`);

--
-- Indexes for table `game_sessions`
--
ALTER TABLE `game_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_sessions_serviced_by_foreign` (`serviced_by`),
  ADD KEY `game_sessions_invoice_id_foreign` (`invoice_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostnames`
--
ALTER TABLE `hostnames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instances`
--
ALTER TABLE `instances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loyalty_cards`
--
ALTER TABLE `loyalty_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nova_comments`
--
ALTER TABLE `nova_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nova_comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`);

--
-- Indexes for table `nova_field_attachments`
--
ALTER TABLE `nova_field_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nova_field_attachments_attachable_type_attachable_id_index` (`attachable_type`,`attachable_id`),
  ADD KEY `nova_field_attachments_url_index` (`url`);

--
-- Indexes for table `nova_notifications`
--
ALTER TABLE `nova_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nova_notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `nova_pending_field_attachments`
--
ALTER TABLE `nova_pending_field_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nova_pending_field_attachments_draft_id_index` (`draft_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revisions`
--
ALTER TABLE `revisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `revisions_revisionable_type_revisionable_id_index` (`revisionable_type`,`revisionable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD KEY `role_permissions_role_id_foreign` (`role_id`),
  ADD KEY `role_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_instance_id_foreign` (`instance_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `snacks`
--
ALTER TABLE `snacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snack_sales`
--
ALTER TABLE `snack_sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `snack_sales_invoice_id_foreign` (`invoice_id`);

--
-- Indexes for table `tariff_plans`
--
ALTER TABLE `tariff_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telescope_entries`
--
ALTER TABLE `telescope_entries`
  ADD PRIMARY KEY (`sequence`),
  ADD UNIQUE KEY `telescope_entries_uuid_unique` (`uuid`),
  ADD KEY `telescope_entries_batch_id_index` (`batch_id`),
  ADD KEY `telescope_entries_family_hash_index` (`family_hash`),
  ADD KEY `telescope_entries_created_at_index` (`created_at`),
  ADD KEY `telescope_entries_type_should_display_on_index_index` (`type`,`should_display_on_index`);

--
-- Indexes for table `telescope_entries_tags`
--
ALTER TABLE `telescope_entries_tags`
  ADD KEY `telescope_entries_tags_entry_uuid_tag_index` (`entry_uuid`,`tag`),
  ADD KEY `telescope_entries_tags_tag_index` (`tag`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD KEY `user_permissions_user_id_foreign` (`user_id`),
  ADD KEY `user_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD KEY `user_roles_user_id_foreign` (`user_id`),
  ADD KEY `user_roles_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action_events`
--
ALTER TABLE `action_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `game_sessions`
--
ALTER TABLE `game_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `hostnames`
--
ALTER TABLE `hostnames`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instances`
--
ALTER TABLE `instances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1290;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `nova_comments`
--
ALTER TABLE `nova_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nova_field_attachments`
--
ALTER TABLE `nova_field_attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nova_pending_field_attachments`
--
ALTER TABLE `nova_pending_field_attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `revisions`
--
ALTER TABLE `revisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `snacks`
--
ALTER TABLE `snacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `snack_sales`
--
ALTER TABLE `snack_sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tariff_plans`
--
ALTER TABLE `tariff_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `telescope_entries`
--
ALTER TABLE `telescope_entries`
  MODIFY `sequence` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `action_events`
--
ALTER TABLE `action_events`
  ADD CONSTRAINT `action_events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `game_device`
--
ALTER TABLE `game_device`
  ADD CONSTRAINT `game_device_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `game_genre`
--
ALTER TABLE `game_genre`
  ADD CONSTRAINT `game_genre_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `game_genre_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `game_sessions`
--
ALTER TABLE `game_sessions`
  ADD CONSTRAINT `game_sessions_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`),
  ADD CONSTRAINT `game_sessions_serviced_by_foreign` FOREIGN KEY (`serviced_by`) REFERENCES `employees` (`id`);

--
-- Constraints for table `loyalty_cards`
--
ALTER TABLE `loyalty_cards`
  ADD CONSTRAINT `loyalty_cards_id_foreign` FOREIGN KEY (`id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD CONSTRAINT `role_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `role_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_instance_id_foreign` FOREIGN KEY (`instance_id`) REFERENCES `instances` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `snack_sales`
--
ALTER TABLE `snack_sales`
  ADD CONSTRAINT `snack_sales_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`);

--
-- Constraints for table `telescope_entries_tags`
--
ALTER TABLE `telescope_entries_tags`
  ADD CONSTRAINT `telescope_entries_tags_entry_uuid_foreign` FOREIGN KEY (`entry_uuid`) REFERENCES `telescope_entries` (`uuid`) ON DELETE CASCADE;

--
-- Constraints for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD CONSTRAINT `user_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `user_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
