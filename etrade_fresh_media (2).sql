-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2022 at 08:42 AM
-- Server version: 10.5.15-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etrade_fresh_media`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dr6W4BBSvbU0rC2T0XnM8M7f0yg6dSJK', 1, '2022-05-26 13:37:17', '2022-05-26 13:37:17', '2022-05-26 13:37:17'),
(2, 2, 'VlhHcM9mw29he18bo6cN2yZokFWslwfi', 1, '2022-05-26 14:47:12', '2022-05-26 14:47:12', '2022-05-26 14:47:12'),
(3, 3, '9I2V5D8sIix54jkq5c1lAlRjvFdH2Yog', 1, '2022-05-26 14:54:15', '2022-05-26 14:54:15', '2022-05-26 14:54:15'),
(4, 5, 'DuIS5JyzTrwcbJTLG6brWC4k44t2WvDF', 1, '2022-05-26 14:57:39', '2022-05-26 14:57:39', '2022-05-26 14:57:39'),
(5, 6, 'StvLleFsgTcFlwCwb0KLkX17ulmX04fF', 1, '2022-05-26 15:07:01', '2022-05-26 15:07:01', '2022-05-26 15:07:01'),
(6, 7, 'JqjxTZLS4DnsVNkyxSX5QGx0vWtrfRkJ', 1, '2022-05-26 15:09:44', '2022-05-26 15:09:44', '2022-05-26 15:09:44'),
(7, 8, 'SBhPAerjcIQwdz3D32bmWr4pjAV1BY3J', 1, '2022-05-26 15:10:53', '2022-05-26 15:10:53', '2022-05-26 15:10:53'),
(8, 9, 'GQXJwzKEgG32fzUPTR2HKoqg1gyR1Ktt', 1, '2022-05-30 10:37:55', '2022-05-30 10:37:55', '2022-05-30 10:37:55'),
(9, 10, '05f9RHh7s4xc410Hbf4OwcqaF8a9KpSx', 1, '2022-05-30 12:43:31', '2022-05-30 12:43:31', '2022-05-30 12:43:31'),
(10, 11, 'in7L3kc9VIcSPCLitkSXLcpUKKhYwvGj', 1, '2022-05-30 15:11:11', '2022-05-30 15:11:11', '2022-05-30 15:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `commandes`
--

CREATE TABLE `commandes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_format` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `print` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `works_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paper` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shaping` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desired_copies` bigint(20) DEFAULT NULL,
  `maximum_deliver_copies` bigint(20) DEFAULT NULL,
  `deliver_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` double(11,2) DEFAULT NULL,
  `tax` double(11,2) DEFAULT NULL,
  `total` double(11,2) DEFAULT NULL,
  `payment_via` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commandes`
--

INSERT INTO `commandes` (`id`, `type`, `user_id`, `file`, `file2`, `name`, `file_format`, `print`, `works_type`, `paper`, `shaping`, `desired_copies`, `maximum_deliver_copies`, `deliver_date`, `subtotal`, `tax`, `total`, `payment_via`, `charge_id`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 9, '1654600624_8292589.jpg', '1654600624_61616687.jpeg', 'Test', 'jpg', 'Format identique', 'Plan', '75gr', 'Pilié', 1500, 30000, '1970-01-01', 11685.00, 2337.00, 14022.00, 'stripe', 'ch_3L80PDJWO97SHZvi1lR3BnIg', 1, '2022-06-07 11:17:04', '2022-06-07 13:18:09'),
(2, NULL, 9, '1654601193_57697852.jpg', '1654601193_47964253.jpeg', 'Test', 'jpeg', 'Format identique', 'Plan', '180gr', 'Pilié', 5000, 500, NULL, 464.55, 93.00, 557.55, 'stripe', 'ch_3L80YOJWO97SHZvi0kzekgHU', 1, '2022-06-07 11:26:33', '2022-06-07 13:52:58'),
(3, NULL, 9, '1654602289_46413902.jpg', '1654602289_78711167.jpeg', 'Test', 'jpg', 'Format identique', 'Plan', '75gr', 'Pilié', 555, 50000, '09/06', 17708.00, 3542.00, 21250.00, 'stripe', 'ch_3L80q4JWO97SHZvi1MCZTHy4', 0, '2022-06-07 11:44:49', '2022-06-07 11:44:49'),
(4, NULL, 9, '1654609557_30704251.jpg', '1654609557_45402912.jpeg', 'Test', 'JPG', 'Format identique', 'Plan', '75gr', 'Pilié', 500, 500, '11/06', 405.87, 81.00, 486.87, 'stripe', 'ch_3L82jIJWO97SHZvi0z2l20KV', 1, '2022-06-07 13:45:57', '2022-06-07 13:46:40'),
(5, NULL, 9, '1654609878_79406333.jpg', '1654609878_82487951.jpg', 'Test', 'jpg', 'Format identique', 'Plan', '75gr', 'Pilié', 500, 1000, '09/06', 699.20, 140.00, 839.20, 'stripe', 'ch_3L82oTJWO97SHZvi1aLibacP', 1, '2022-06-07 13:51:18', '2022-06-07 13:52:06'),
(6, NULL, 11, '1654620775_53566435.pdf', NULL, 'Mon plan - Test', 'PDF', 'Couleur', 'Image avec des aplats ou mixte', '195gr-satine', 'Roulé', 1000, 1000, '10/06', 640.32, 128.00, 768.32, 'stripe', 'ch_3L85eEJWO97SHZvi0m99AUxl', 2, '2022-06-07 16:52:55', '2022-06-07 16:57:24'),
(7, NULL, 1, '1654622771_56083354.pdf', '1654622771_50048233.png', 'Plan de la société \"Awsome Company\"', 'PDF', 'Couleur', 'Image avec des aplats ou mixte', '120gr', 'Roulé', 2500, 2500, '11/06', 1328.00, 266.00, 1594.00, 'stripe', 'ch_3L86AQJWO97SHZvi0OlKv0Uu', 0, '2022-06-07 17:26:11', '2022-06-07 17:26:11'),
(8, NULL, 9, '1654694883_83461101.png', NULL, 'Test', 'jpg', 'Format identique', 'Plan', '180gr', 'Pilié', 500, 500, '10/06', 464.55, 93.00, 557.55, 'stripe', 'ch_3L8OvWJWO97SHZvi0qgOeqet', 0, '2022-06-08 13:28:03', '2022-06-08 13:28:03'),
(9, 'plan', 9, '1654701071_99667078.png', '1654701071_45793141.png', 'Test', 'jpg', 'Format identique', 'Plan', '75gr', 'Pilié', 300, 500, '10/06', 350.00, 70.00, 420.00, 'stripe', 'ch_3L8QXKJWO97SHZvi1hf7116T', 0, '2022-06-08 15:11:11', '2022-06-30 16:55:58'),
(12, 'memory', 9, '1654787044_46049995.png', NULL, 'Test', NULL, NULL, NULL, NULL, NULL, 500, 1000, NULL, 699.20, 140.00, 839.20, 'stripe', 'ch_3L8mtzJWO97SHZvi0jYNgEGI', 0, '2022-06-09 15:04:04', '2022-06-09 15:04:04'),
(14, 'memory', 9, '1654787340_45563427.png', NULL, 'Test', NULL, NULL, NULL, NULL, NULL, 500, 5000, NULL, 2992.50, 599.00, 3591.50, 'stripe', 'ch_3L8mylJWO97SHZvi0C6krBGI', 0, '2022-06-09 15:09:00', '2022-06-09 15:09:00'),
(15, 'booklet', 9, '1654868532_36777665.png', NULL, 'Test Booklet', 'A4 fermé (=A3 ouvert)', 'Noir & Blanc', NULL, NULL, NULL, 500, 500, NULL, 464.55, 93.00, 557.55, 'stripe', 'ch_3L986JJWO97SHZvi1rRcFfDd', 0, '2022-06-10 13:42:12', '2022-06-10 13:42:12'),
(16, 'attach', 9, '1654930171_65760598.png', NULL, NULL, 'Autre format', NULL, NULL, NULL, NULL, 5000, 5000, '11/01', 2992.50, 599.00, 3591.50, 'stripe', 'ch_3L9O8UJWO97SHZvi1egozpHT', 0, '2022-06-11 06:49:31', '2022-06-11 06:49:31'),
(17, 'plan', 9, '1654941686_88946284.png', '1654941686_37850495.png', 'Test', 'Custom', 'Noir et blanc', 'Plan', '180gr', 'Pilié', 500, 500, '13/06', 464.55, 93.00, 557.55, 'stripe', 'ch_3L9R8DJWO97SHZvi1CkAkXtX', 0, '2022-06-11 10:01:26', '2022-06-11 10:01:26'),
(18, 'memory', 9, '1654941781_93186884.png', NULL, 'Test Memory Order', NULL, NULL, NULL, NULL, NULL, 100, 10000, NULL, 6004.00, 1201.00, 7205.00, 'stripe', 'ch_3L9R9kJWO97SHZvi0ZmNbLDv', 0, '2022-06-11 10:03:01', '2022-06-11 10:03:01'),
(19, 'booklet', 9, '1654941899_86593745.png', NULL, 'Test Brochure', 'A4 fermé (=A3 ouvert)', 'Couleur', NULL, NULL, NULL, 500, 7500, NULL, 5139.50, 1028.00, 6167.50, 'stripe', 'ch_3L9RBeJWO97SHZvi169opAfR', 0, '2022-06-11 10:04:59', '2022-06-11 10:04:59'),
(20, 'attach', 9, '1654941947_53262466.png', NULL, NULL, 'Autre format', NULL, NULL, NULL, NULL, 2500, 2500, '11/01', 1520.00, 304.00, 1824.00, 'stripe', 'ch_3L9RCQJWO97SHZvi0nMnMe6x', 0, '2022-06-11 10:05:47', '2022-06-11 10:05:47'),
(21, 'plan', 11, '1656696124_77842538.png', '1656696124_5762698.png', 'Ma commande sur Produit Plan', 'PDF', 'Couleur', 'Image avec des aplats ou mixte', '75gr', 'Pilié', 15000, 15000, '02/07', 7900.00, 1580.00, 9480.00, 'stripe', 'ch_3LGnXbJWO97SHZvi1tEgaAWZ', 2, '2022-07-01 17:22:04', '2022-07-01 17:50:20'),
(22, 'memory', 11, '1656696902_93659159.jpg', NULL, 'Ma commande de mémoire et rapport', NULL, NULL, NULL, NULL, NULL, 1200, 5000, NULL, 2992.50, 599.00, 3591.50, 'stripe', 'ch_3LGnk9JWO97SHZvi11dC72AM', 0, '2022-07-01 17:35:02', '2022-07-01 17:35:02');

-- --------------------------------------------------------

--
-- Table structure for table `commande_detail`
--

CREATE TABLE `commande_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commande_id` int(10) UNSIGNED NOT NULL,
  `paper_size` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smallest_size` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `largest_size` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orientation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_transparent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `black_and_white_pages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_pages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_pages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `print_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `back_print` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `back_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clear_back` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `binding_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commande_detail`
--

INSERT INTO `commande_detail` (`id`, `commande_id`, `paper_size`, `smallest_size`, `largest_size`, `orientation`, `cover_transparent`, `cover`, `paper`, `black_and_white_pages`, `color_pages`, `no_of_pages`, `weight`, `print_size`, `back_print`, `back_color`, `clear_back`, `binding_type`, `comment`, `created_at`, `updated_at`) VALUES
(2, 14, 'Custom', '100.00', '200.00', 'horizontal', 'transparent nervuré', 'not selected', 'le-250', '500', '100', 'Custom', '90 gr', 'recto', 'yes', NULL, 'transparent', '[\"plastique\",\"sur le petit c\\u00f4t\\u00e9\"]', 'test comment', '2022-06-09 15:09:00', '2022-06-09 15:09:00'),
(3, 15, NULL, NULL, NULL, 'vertical recto verso', 'Couleur', NULL, '90 gr', NULL, NULL, '24', '120 gr satiné', NULL, NULL, NULL, NULL, NULL, 'test comment for booklet', '2022-06-10 13:42:12', '2022-06-10 13:42:12'),
(4, 16, 'A0', '84,1', '118,9', NULL, NULL, NULL, '180gr', NULL, 'Couleur', NULL, '180gr', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-11 06:49:31', '2022-06-11 06:49:31'),
(5, 18, 'Custom', '58', '25', 'vertical', 'transparent nervuré', 'not selected', 'le-250', '100', '50', 'Custom', '80 gr', 'recto', 'yes', NULL, 'transparent nervuré', '[\"plastique\",\"sur le grand c\\u00f4t\\u00e9\"]', 'Test comment for memory', '2022-06-11 10:03:01', '2022-06-11 10:03:01'),
(6, 19, NULL, NULL, NULL, 'vertical recto verso', 'Couleur', NULL, '90 gr', NULL, NULL, '24', '90 gr', NULL, NULL, NULL, NULL, NULL, 'Test comment for brocghutre', '2022-06-11 10:04:59', '2022-06-11 10:04:59'),
(7, 20, 'A0', '84.1cm', '118.9cm', NULL, NULL, NULL, '180gr', NULL, 'Noir et blanc', NULL, '180gr', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-11 10:05:47', '2022-06-11 10:05:47'),
(8, 22, 'A4', '21', '29,7', 'vertical', 'pas de transparent', 'not selected', 'gce-250', '60', '2', 'A4', '90 gr', 'recto-verso', 'yes', NULL, 'pas de transparent', '[\"pince\",\"sur le grand c\\u00f4t\\u00e9\"]', 'Commentaire pour ma commande ici...', '2022-07-01 17:35:02', '2022-07-01 17:35:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_07_02_230147_migration_cartalyst_sentinel', 2),
(6, '2022_05_26_133929_update_users_table', 3),
(9, '2022_05_28_074102_create_quotations_table', 4),
(10, '2022_05_31_101510_create_orders', 5),
(11, '2022_06_06_130608_create_commandes_table', 6),
(13, '2022_06_08_134330_create_commande_detail_table', 7),
(15, '2022_07_02_121028_product_settings', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `quotation_id` bigint(20) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_include_tax` double(11,2) NOT NULL,
  `amount_exclude_tax` double(11,2) NOT NULL,
  `payment_via` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `quotation_id`, `description`, `image`, `amount_include_tax`, `amount_exclude_tax`, `payment_via`, `charge_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 1, 'fdghdklsfjsdkm', '2293077887964.png', 144.00, 120.00, NULL, NULL, 0, '2022-05-31 10:30:58', '2022-05-31 10:30:58'),
(2, 9, 2, 'fghfdfd', '1653734951_74372281.jpg', 120.00, 100.00, 'stripe', 'ch_3L5VAuE85e2DfAVO0FKeYoS4', 0, '2022-05-31 13:31:58', '2022-05-31 13:31:58'),
(3, 9, 3, 'cxvsxcfsd', '1653735079_53231010.jpg', 100.50, 80.50, 'stripe', 'ch_3L5VEyE85e2DfAVO0mCzbYoS', 0, '2022-05-31 13:36:09', '2022-05-31 13:36:09'),
(4, 9, 1, 'fdghdklsfjsdkm', '2293077887964.png', 144.00, 120.00, 'stripe', 'ch_3L5W2bE85e2DfAVO0voqYYm7', 0, '2022-05-31 14:27:26', '2022-05-31 14:27:26'),
(5, 11, 14, 'My new test..', '1654024865_32326272.docx', 1200.00, 1000.00, 'stripe', 'ch_3L5agZE85e2DfAVO1y5F4ODd', 0, '2022-05-31 19:25:00', '2022-05-31 19:25:00'),
(6, 11, 15, 'Mon commentaire et mes demandes ici...', '1654789881_41339353.png', 1200.00, 1000.00, 'stripe', 'ch_3L8nk7JWO97SHZvi1EIuwZVE', 0, '2022-06-09 15:57:56', '2022-06-09 15:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(4, 8, 'MfbXlk262vaJwxpjhVs03BVx9CudmbPM', '2022-05-27 12:02:21', '2022-05-27 12:02:21'),
(15, 1, 'nh5sL4XiFeaCwVZCWDLworxSpH64ox1N', '2022-05-27 13:00:15', '2022-05-27 13:00:15'),
(19, 1, 'k9jy9lq0Dwu0YM1QLqn1KPDz8PN6rYi7', '2022-05-28 07:26:04', '2022-05-28 07:26:04'),
(26, 1, 'moq5UbU1vQZMuemfyBwUMKjDE0kuJ2XB', '2022-05-30 08:12:56', '2022-05-30 08:12:56'),
(27, 9, '3iH99aF8xDJDVV8U1h80lnvYdRlJ9twn', '2022-05-30 10:38:38', '2022-05-30 10:38:38'),
(28, 1, 'uWErGXKtEJtNj3cHRaST8x1o6T1T8LGQ', '2022-05-30 11:26:46', '2022-05-30 11:26:46'),
(29, 1, '7YMqHHVFqZmTO7JM8Xw0UqI4Q2OyFG4s', '2022-05-30 12:40:44', '2022-05-30 12:40:44'),
(30, 10, 'uJUQzALiRzykj0flaMmItPsXN22Jm1nF', '2022-05-30 12:43:50', '2022-05-30 12:43:50'),
(31, 1, 'PH8dI56pCypt54c11ABPuVF02syK67Tr', '2022-05-30 21:24:58', '2022-05-30 21:24:58'),
(32, 9, 'A5THsfat7vdBvEyqz2qTIYY4DEKqIn94', '2022-05-31 09:22:07', '2022-05-31 09:22:07'),
(33, 1, 'SmyAkqoSkvGt7GwwhMp2Dii0yCMDPEHs', '2022-05-31 09:51:26', '2022-05-31 09:51:26'),
(35, 1, 'OIdiSMXJEU9fgUjlwTwtaptkrIhyfJTO', '2022-05-31 14:21:51', '2022-05-31 14:21:51'),
(36, 9, 'KE9CngXWFFAdlFVYdxpUnyCfXEv5TlQn', '2022-05-31 14:26:42', '2022-05-31 14:26:42'),
(38, 11, '1T5uj7o6ZbsXhUieyCpnf8PojmqQeyix', '2022-05-31 19:23:35', '2022-05-31 19:23:35'),
(39, 1, 'mZONQaOCXsvbXPVeFFyXTqeSiS1iEWub', '2022-05-31 19:33:53', '2022-05-31 19:33:53'),
(40, 11, 'q3pAafZh6xTSXDZoFqV85dhJHtRsqn57', '2022-05-31 21:57:37', '2022-05-31 21:57:37'),
(41, 1, '780jGTg5dHCwgQnJAYQAhAWsBojdSUwG', '2022-06-01 23:59:45', '2022-06-01 23:59:45'),
(42, 9, 'uXbKfyqgjLRhwHXfaDhtyqoqYtVfDNQT', '2022-06-02 12:21:36', '2022-06-02 12:21:36'),
(43, 1, 'WGCKwpvb64Db6jkRjgu4pt9GMdo7czKa', '2022-06-02 21:11:53', '2022-06-02 21:11:53'),
(44, 1, 'UsbNegqnMkHykvRlVcgnYhArDiXnt6F5', '2022-06-03 02:23:41', '2022-06-03 02:23:41'),
(45, 1, 'BHNz28GNMTZl3q1RtECkeMOFDf0K98eg', '2022-06-03 18:38:09', '2022-06-03 18:38:09'),
(46, 9, 'wSO9pZWPn7zEXZSt5L8FwcZdksDxc7jx', '2022-06-05 05:17:49', '2022-06-05 05:17:49'),
(47, 9, 'msZ44jbYAFYGSyuKY4aIej5tVK73608C', '2022-06-06 10:27:10', '2022-06-06 10:27:10'),
(48, 9, 'WiPJLc8KYY5hik4NzTOs2mBDQhuwJqFy', '2022-06-06 12:48:27', '2022-06-06 12:48:27'),
(50, 1, 'WC7VBglxbwLNoawdkoINV3jB726gGIAq', '2022-06-07 11:48:41', '2022-06-07 11:48:41'),
(52, 9, 'vMUbzh7uDH5q5RJu7u1RYjmHrWAFqQxC', '2022-06-07 13:48:47', '2022-06-07 13:48:47'),
(53, 1, 'Gq6inrSGo5PpFJGpOjofrdygbyYK815X', '2022-06-07 16:04:58', '2022-06-07 16:04:58'),
(54, 11, '5QqDwWBeYATIQTlnnvFPmbFyk5pZQ7UQ', '2022-06-07 16:48:56', '2022-06-07 16:48:56'),
(55, 9, 'HEJ6N86widZntCVEjOG9HsPc2EkERHjd', '2022-06-08 07:17:58', '2022-06-08 07:17:58'),
(57, 1, 'XwjQCUfBKr6uFPHtpeM50YKQfFSqBXIw', '2022-06-08 11:28:41', '2022-06-08 11:28:41'),
(61, 1, '4qLugSWBT7sA6qccgDUgJ0DJsuSNZUir', '2022-06-08 15:13:45', '2022-06-08 15:13:45'),
(62, 9, 'i7cjwHEBNhYfkdRdSzp4HcDoYkPdMTIp', '2022-06-09 12:08:10', '2022-06-09 12:08:10'),
(63, 1, 'ARKeYM4cFHIqutVKaCyF6Nfti0dNBSC7', '2022-06-09 15:41:53', '2022-06-09 15:41:53'),
(64, 11, 'JqD2yPNsggVykPNLis4La3jYTqnAZIFm', '2022-06-09 15:56:55', '2022-06-09 15:56:55'),
(65, 9, 'DwHkRG4Vb3KCCcZ3Rc3keXEkfJlUU8ak', '2022-06-10 11:24:55', '2022-06-10 11:24:55'),
(66, 1, 'SGcjJYpwaQIReT6eAWEDW96Q4MSV9coe', '2022-06-10 16:07:55', '2022-06-10 16:07:55'),
(67, 9, 'Ybjp7365o5RCu2GaglrGHDeowCSjdTwZ', '2022-06-11 06:04:17', '2022-06-11 06:04:17'),
(68, 9, '7xbA97hQcA9sNnkAyHA8xNnmp3FFf1mT', '2022-06-11 10:00:15', '2022-06-11 10:00:15'),
(69, 10, '6y1RITuE2WyTg9KJxMjO9Cz6XsdvRjEX', '2022-06-13 10:03:43', '2022-06-13 10:03:43'),
(72, 1, 'kGEIN9PYzQotwD69TgIq1bsFNrhNAf3q', '2022-06-13 10:14:54', '2022-06-13 10:14:54'),
(73, 1, 'ueWKCfBALyQ72xCa9ATyDfIpPwcMIF3n', '2022-06-13 20:22:47', '2022-06-13 20:22:47'),
(74, 1, 'cFzTqcn2KVj30kXqfsV0UFPlIC8XekNl', '2022-06-15 11:08:37', '2022-06-15 11:08:37'),
(75, 11, 'l5MsJozdalUlZgcJ0WbC3H2G73jrIToD', '2022-06-15 11:15:57', '2022-06-15 11:15:57'),
(76, 1, 'Rs7Ry3OqzdFNcrVRkzoNj3PY5jq0JzCE', '2022-06-16 10:39:38', '2022-06-16 10:39:38'),
(77, 1, '2v0jZGqDZBAcrFsuyZu1t2K28c0cbXMy', '2022-06-17 06:13:12', '2022-06-17 06:13:12'),
(78, 1, 'eSspuxJQ1XwjbCXx8WWoIhua5VcDrBzC', '2022-06-17 10:00:55', '2022-06-17 10:00:55'),
(79, 1, 'S2uxI3Yd0nkoCWPJXQ7n9xVymkwPDwvZ', '2022-06-17 10:01:01', '2022-06-17 10:01:01'),
(80, 1, 'TRkhLP536avtPymLWQW5inGm4TMcR5Qm', '2022-06-18 21:10:58', '2022-06-18 21:10:58'),
(81, 1, 'pXyci8E5RnQoUZbpX6b9X6YNUvAIRMng', '2022-06-21 09:32:12', '2022-06-21 09:32:12'),
(83, 10, 'vsXOtgobs4IphliLx48UOU9QGSdSxrjo', '2022-06-27 13:32:47', '2022-06-27 13:32:47'),
(84, 1, 'FOMEMv0NcNVaaXqLHhxZgQGld0Oq73tL', '2022-06-29 18:09:53', '2022-06-29 18:09:53'),
(85, 1, 'wDNdMTwd8BTbpYTkBU1upJU5feHNIcv6', '2022-06-30 08:03:51', '2022-06-30 08:03:51'),
(86, 1, 'KCP6YshqeroQSvnqbCd1POCyrHt7StEN', '2022-06-30 15:40:42', '2022-06-30 15:40:42'),
(87, 1, 'BvETflswjrt8XWLaeA7UcKPSu1MpzVjD', '2022-07-01 12:01:21', '2022-07-01 12:01:21'),
(88, 1, 'zQB2JuBSfzZ41g0oy0hO9FX8cHkl7xrk', '2022-07-01 14:41:24', '2022-07-01 14:41:24'),
(90, 1, 'QoWGTGIgoO6A2LmCan8DpstLzfsaS3QN', '2022-07-01 17:45:38', '2022-07-01 17:45:38'),
(91, 1, 'QsX96MWxj63wUTzjgVvH8qkI1IpaRJ0z', '2022-07-02 11:08:37', '2022-07-02 11:08:37'),
(92, 1, 'T7GelrKmNwu33cj5ixezQoDgx058o8IU', '2022-07-02 11:10:11', '2022-07-02 11:10:11'),
(93, 1, 'n4wSY2JIrEyJouNgIBMrHrw2jpnYCK29', '2022-07-02 14:57:21', '2022-07-02 14:57:21'),
(94, 1, '7Az9JlwuT1zNiAQtOPAPBzY2B2VKJHAD', '2022-07-02 15:09:45', '2022-07-02 15:09:45'),
(95, 1, 'j48m1jhEjoPGEFz7os74S2mwDq1PYIt1', '2022-07-02 15:10:07', '2022-07-02 15:10:07'),
(96, 1, 'MfXUXo9Fwd3ylg4gMFcOojv0VGJrSJNp', '2022-07-04 16:03:20', '2022-07-04 16:03:20'),
(98, 1, 'sL1zlRSSuTFO6ygxmSWCOjkBXl2K3mNn', '2022-07-05 13:31:37', '2022-07-05 13:31:37'),
(99, 1, 'P5iB2Qwbcadu31q5Xs9oGgvS0s3Aef7b', '2022-07-06 07:31:15', '2022-07-06 07:31:15'),
(101, 1, 'VoPt3bEy9KVTWeB15TG9IIJicvmokSs2', '2022-07-07 13:37:50', '2022-07-07 13:37:50');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_setting`
--

CREATE TABLE `products_setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` int(10) UNSIGNED NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `first_day_price` double(11,2) NOT NULL,
  `second_day_price` double(11,2) DEFAULT NULL,
  `third_day_price` double(11,2) DEFAULT NULL,
  `fourth_day_price` double(11,2) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_setting`
--

INSERT INTO `products_setting` (`id`, `type`, `quantity`, `first_day_price`, `second_day_price`, `third_day_price`, `fourth_day_price`, `status`, `created_at`, `updated_at`) VALUES
(9, 1, 100, 125.00, NULL, NULL, NULL, 1, '2022-07-02 14:43:20', '2022-07-02 14:43:20'),
(10, 1, 250, 236.00, NULL, NULL, NULL, 1, '2022-07-02 14:43:20', '2022-07-02 14:43:20'),
(11, 1, 500, 489.00, NULL, NULL, NULL, 1, '2022-07-02 14:43:20', '2022-07-02 14:43:20'),
(12, 1, 1000, 736.00, NULL, NULL, NULL, 1, '2022-07-02 14:43:20', '2022-07-02 14:43:20'),
(13, 1, 2500, 1600.00, NULL, NULL, NULL, 1, '2022-07-02 14:43:20', '2022-07-02 14:43:20'),
(14, 1, 5000, 3150.00, NULL, NULL, NULL, 1, '2022-07-02 14:43:20', '2022-07-02 14:43:20'),
(15, 1, 7500, 5410.00, NULL, NULL, NULL, 1, '2022-07-02 14:43:20', '2022-07-02 14:43:20'),
(16, 1, 10000, 6320.00, NULL, NULL, NULL, 1, '2022-07-02 14:43:20', '2022-07-02 14:43:20'),
(17, 1, 15000, 7900.00, NULL, NULL, NULL, 1, '2022-07-02 14:43:20', '2022-07-02 14:43:20'),
(18, 1, 20000, 8320.00, NULL, NULL, NULL, 1, '2022-07-02 14:43:20', '2022-07-02 14:43:20'),
(19, 1, 30000, 12300.00, NULL, NULL, NULL, 1, '2022-07-02 14:43:20', '2022-07-02 14:43:20'),
(20, 1, 40000, 15650.00, NULL, NULL, NULL, 1, '2022-07-02 14:43:20', '2022-07-02 14:43:20'),
(21, 1, 50000, 18640.00, NULL, NULL, NULL, 1, '2022-07-02 14:43:20', '2022-07-02 14:43:20'),
(29, 5, 100, 125.00, NULL, NULL, NULL, 1, '2022-07-02 14:54:51', '2022-07-02 14:54:51'),
(30, 5, 250, 236.00, NULL, NULL, NULL, 1, '2022-07-02 14:54:51', '2022-07-02 14:54:51'),
(56, 2, 100, 125.00, NULL, NULL, NULL, 1, '2022-07-02 15:23:39', '2022-07-02 15:23:39'),
(57, 2, 250, 236.00, NULL, NULL, NULL, 1, '2022-07-02 15:23:39', '2022-07-02 15:23:39'),
(58, 2, 500, 489.00, NULL, NULL, NULL, 1, '2022-07-02 15:23:39', '2022-07-02 15:23:39'),
(59, 2, 1000, 736.00, NULL, NULL, NULL, 1, '2022-07-02 15:23:39', '2022-07-02 15:23:39'),
(60, 3, 100, 125.00, NULL, NULL, NULL, 1, '2022-07-02 15:24:19', '2022-07-02 15:24:19'),
(61, 3, 250, 236.00, NULL, NULL, NULL, 1, '2022-07-02 15:24:19', '2022-07-02 15:24:19'),
(62, 3, 500, 489.00, NULL, NULL, NULL, 1, '2022-07-02 15:24:19', '2022-07-02 15:24:19'),
(63, 3, 1000, 736.00, NULL, NULL, NULL, 1, '2022-07-02 15:24:19', '2022-07-02 15:24:19'),
(64, 4, 100, 125.00, NULL, NULL, NULL, 1, '2022-07-02 15:24:49', '2022-07-02 15:24:49');

-- --------------------------------------------------------

--
-- Table structure for table `quotations`
--

CREATE TABLE `quotations` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'qoutation',
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postalcode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `Impression` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shaping` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finishing` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catridge` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_include_tax` double(11,2) DEFAULT NULL,
  `amount_exclude_tax` double(11,2) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotations`
--

INSERT INTO `quotations` (`id`, `type`, `first_name`, `last_name`, `email`, `phone`, `postalcode`, `city`, `description`, `quantity`, `Impression`, `shaping`, `finishing`, `catridge`, `comment`, `image`, `amount_include_tax`, `amount_exclude_tax`, `status`, `created_at`, `updated_at`) VALUES
(1, 'qoutation', 'Zeeshan', 'Zaheer', 'zeeshanzaheer574@gmail.com', '03015392203', '96412', 'London', 'fdghdklsfjsdkm', NULL, NULL, NULL, NULL, NULL, NULL, '2293077887964.png', 144.00, 120.00, 3, '2022-05-28 10:22:01', '2022-05-31 14:27:26'),
(2, 'qoutation', 'Zeeshan', 'Zaheer', 'zeeshanzaheer574@gmail.com', '03015392203', '96412', 'London', 'fghfdfd', NULL, NULL, NULL, NULL, NULL, NULL, '1653734951_74372281.jpg', 120.00, 100.00, 3, '2022-05-28 10:49:11', '2022-05-31 13:31:58'),
(3, 'qoutation', 'Zeeshan', 'Zaheer', 'zeeshanzaheer574@gmail.com', '03015392203', '96412', 'London', 'cxvsxcfsd', NULL, NULL, NULL, NULL, NULL, NULL, '1653735079_53231010.jpg', 100.50, 80.50, 3, '2022-05-28 10:51:19', '2022-05-31 13:36:09'),
(4, 'qoutation', 'Zeeshan', 'Zaheer', 'zeeshanzaheer574@gmail.com', '03015392203', '96412', 'London', 'cxvsxcfsd', NULL, NULL, NULL, NULL, NULL, NULL, '1653735202_94857677.jpg', 120.00, 100.00, 1, '2022-05-28 10:53:22', '2022-05-31 14:22:40'),
(5, 'qoutation', 'Zeeshan', 'Zaheer', 'zeeshanzaheer574@gmail.com', '03015392203', '96412', 'London', 'cxvsxcfsd', NULL, NULL, NULL, NULL, NULL, NULL, '1653735227_11637776.jpg', 120.00, 100.00, 1, '2022-05-28 10:53:47', '2022-05-31 14:26:01'),
(6, 'qoutation', 'Zeeshan', 'Zaheer', 'zeeshanzaheer574@gmail.com', '03015392203', '96412', 'London', 'cxvsxcfsd', NULL, NULL, NULL, NULL, NULL, NULL, '1653735287_21595346.jpg', NULL, NULL, 0, '2022-05-28 10:54:47', '2022-05-28 10:54:47'),
(7, 'qoutation', 'Zeeshan', 'Zaheer', 'zeeshanzaheer574@gmail.com', '03015392203', '96412', 'London', 'cxvsxcfsd', NULL, NULL, NULL, NULL, NULL, NULL, '1653736137_97396517.jpg', NULL, NULL, 0, '2022-05-28 11:08:57', '2022-05-28 11:08:57'),
(8, 'qoutation', 'Zeeshan', 'Zaheer', 'zeeshanzaheer574@gmail.com', '03015392203', '96412', 'London', 'cxvsxcfsd', NULL, NULL, NULL, NULL, NULL, NULL, '1653736214_45142010.jpg', NULL, NULL, 0, '2022-05-28 11:10:14', '2022-05-28 11:10:14'),
(9, 'qoutation', 'Zeeshan', 'Zaheer', 'zeeshanzaheer574@gmail.com', '03015392203', '456354', 'London', 'gfhffdfd', NULL, NULL, NULL, NULL, NULL, NULL, '1653736373_11588489.jpg', NULL, NULL, 0, '2022-05-28 11:12:53', '2022-05-28 11:12:53'),
(10, 'qoutation', 'Abid', 'Manzoor', 'abid@gmail.com', '78956354', '5343', 'London', 'fgdkljdlkdsmkfdslk', NULL, NULL, NULL, NULL, NULL, NULL, '1653740725_25643586.png', NULL, NULL, 0, '2022-05-28 12:25:25', '2022-05-28 12:25:25'),
(11, 'qoutation', 'Zeeshan', 'Zaheer', 'mohsin@gmail.com', '92302451521', '96412', 'London', 'THis is my first message on this site', NULL, NULL, NULL, NULL, NULL, NULL, '1653746510_9190727.jpg', NULL, NULL, 0, '2022-05-28 14:01:50', '2022-05-28 14:01:50'),
(12, 'qoutation', 'AbdelMounim', 'KH', 'elkhatouti@gmail.com', '0610682307', '92000', 'Larache', 'My comment here...', NULL, NULL, NULL, NULL, NULL, NULL, '1653910446_54265281.png', 120.00, 100.00, 1, '2022-05-30 11:34:07', '2022-05-30 13:03:47'),
(13, 'qoutation', 'Muhammad', 'Salman', 'salmansumra009@gmail.com', '03101607739', '58150', 'khanewal', 'This is test qoutation', NULL, NULL, NULL, NULL, NULL, NULL, '1653914488_51279508.png', 120.00, 100.00, 1, '2022-05-30 12:41:28', '2022-05-30 12:42:14'),
(14, 'qoutation', 'Mounim', 'KH', 'elkhatouti@gmail.com', '0610682307', '90000', 'Paris', 'My new test..', NULL, NULL, NULL, NULL, NULL, NULL, '1654024865_32326272.docx', 1200.00, 1000.00, 3, '2022-05-31 19:21:05', '2022-05-31 19:25:00'),
(15, 'qoutation', 'Mounim', 'KH', 'elkhatouti@gmail.com', '0610682307', '92000', 'Larache', 'Mon commentaire et mes demandes ici...', NULL, NULL, NULL, NULL, NULL, NULL, '1654789881_41339353.png', 1200.00, 1000.00, 3, '2022-06-09 15:51:21', '2022-06-09 15:57:56'),
(16, 'qoutation', 'Zeeshan', 'Zaheer', 'zeeshanzaheer574@gmail.com', '03015392203', '456354', 'London', 'test', NULL, NULL, NULL, NULL, NULL, NULL, '1655112794_33279190.jpg', NULL, NULL, 0, '2022-06-13 09:33:14', '2022-06-13 09:33:14'),
(17, 'qoutation', 'Muhammad', 'Salman', 'salmansumra009@gmail.com', '03101607739', '58150', 'khanewal', 'jjknlk', NULL, NULL, NULL, NULL, NULL, NULL, '1655114601_2140225.png', NULL, NULL, 0, '2022-06-13 10:03:21', '2022-06-13 10:03:21'),
(18, 'plan_file', 'Rana', 'Zeeshan', 'zeeshanzaheer574@gmail.com', '92302451521', '96412', 'London', NULL, 500, 'à l\'identique', 'sans façonnage', 'sans finition', 'no', 'test', NULL, NULL, NULL, 0, '2022-06-13 10:12:33', '2022-06-13 10:12:33'),
(19, 'qoutation', 'Lili', 'Cassenoisette', 'l.muinos16@gmail.com', '0786843834', '93300', 'Aubervilliers', 'Test 1', NULL, NULL, NULL, NULL, NULL, NULL, '1655206265_76902468.pdf', 300.00, 250.00, 1, '2022-06-14 11:31:05', '2022-06-17 06:15:13'),
(20, 'qoutation', 'Lili', 'Cassenoisette', 'l.muinos16@gmail.com', '0786843834', '93300', 'AUBERVILLIERS', 'Bonjour, \r\nJe souhaiterais un devis pour:\r\n- 1 plan N&B filaire x 15 exemplaires > Plan topo\r\n- 3 plans couleurs avec beaucoup d\'aplats > plan du sous-sol\r\n\r\nPourriez-vous m\'adresser un edvis svp\r\nMerci', NULL, NULL, NULL, NULL, NULL, NULL, '1655460750_2435574.pdf', 120.00, 100.00, 1, '2022-06-17 10:12:30', '2022-06-17 10:24:48'),
(21, 'qoutation', 'Zeeshan', 'Zaheer', 'zeeshanzaheer574@gmail.com', '03015392203', '96412', 'London', 'Old city', NULL, NULL, NULL, NULL, NULL, NULL, '1655551652_10192318.jpg', NULL, NULL, 0, '2022-06-18 11:27:32', '2022-06-18 11:27:32'),
(22, 'plan_file', 'KH', 'AbdelMounim', 'elkhatouti@gmail.com', '610682307', '92000', 'Paris', NULL, 1200, 'Noir & Blanc', 'sans façonnage', 'dossier à sangle bleu', 'yes', 'Ma commentaire ici...', NULL, NULL, NULL, 0, '2022-07-01 18:02:00', '2022-07-01 18:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '{\"admin\":1}', '2022-05-26 13:37:17', '2022-05-26 13:37:17'),
(2, 'individuel', 'Individuel', '[]', '2022-05-26 13:37:17', '2022-05-26 13:37:17'),
(3, 'professional', 'Professional', '[]', '2022-05-26 13:37:17', '2022-05-26 13:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-05-26 13:37:17', '2022-05-26 13:37:17'),
(7, 2, '2022-05-26 15:09:44', '2022-05-26 15:09:44'),
(8, 3, '2022-05-26 15:10:53', '2022-05-26 15:10:53'),
(9, 2, '2022-05-30 10:37:55', '2022-05-30 10:37:55'),
(10, 2, '2022-05-30 12:43:31', '2022-05-30 12:43:31'),
(11, 2, '2022-05-30 15:11:11', '2022-05-30 15:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2022-05-27 11:51:37', '2022-05-27 11:51:37'),
(2, NULL, 'ip', '101.50.109.1', '2022-05-27 11:51:37', '2022-05-27 11:51:37'),
(3, 8, 'user', NULL, '2022-05-27 11:51:37', '2022-05-27 11:51:37'),
(4, NULL, 'global', NULL, '2022-05-27 11:51:47', '2022-05-27 11:51:47'),
(5, NULL, 'ip', '101.50.109.1', '2022-05-27 11:51:47', '2022-05-27 11:51:47'),
(6, 8, 'user', NULL, '2022-05-27 11:51:47', '2022-05-27 11:51:47'),
(7, NULL, 'global', NULL, '2022-05-27 13:26:13', '2022-05-27 13:26:13'),
(8, NULL, 'ip', '101.50.109.1', '2022-05-27 13:26:13', '2022-05-27 13:26:13'),
(9, 8, 'user', NULL, '2022-05-27 13:26:13', '2022-05-27 13:26:13'),
(10, NULL, 'global', NULL, '2022-05-28 18:50:17', '2022-05-28 18:50:17'),
(11, NULL, 'ip', '105.68.229.52', '2022-05-28 18:50:17', '2022-05-28 18:50:17'),
(12, NULL, 'global', NULL, '2022-05-31 19:22:48', '2022-05-31 19:22:48'),
(13, NULL, 'ip', '105.159.12.114', '2022-05-31 19:22:48', '2022-05-31 19:22:48'),
(14, 11, 'user', NULL, '2022-05-31 19:22:48', '2022-05-31 19:22:48'),
(15, NULL, 'global', NULL, '2022-06-06 10:26:59', '2022-06-06 10:26:59'),
(16, NULL, 'ip', '101.50.108.37', '2022-06-06 10:26:59', '2022-06-06 10:26:59'),
(17, 9, 'user', NULL, '2022-06-06 10:26:59', '2022-06-06 10:26:59'),
(18, NULL, 'global', NULL, '2022-06-14 11:37:57', '2022-06-14 11:37:57'),
(19, NULL, 'ip', '195.25.90.83', '2022-06-14 11:37:57', '2022-06-14 11:37:57'),
(20, NULL, 'global', NULL, '2022-06-14 11:56:23', '2022-06-14 11:56:23'),
(21, NULL, 'ip', '195.25.90.83', '2022-06-14 11:56:23', '2022-06-14 11:56:23'),
(22, 1, 'user', NULL, '2022-06-14 11:56:23', '2022-06-14 11:56:23'),
(23, NULL, 'global', NULL, '2022-06-14 11:57:01', '2022-06-14 11:57:01'),
(24, NULL, 'ip', '195.25.90.83', '2022-06-14 11:57:01', '2022-06-14 11:57:01'),
(25, 1, 'user', NULL, '2022-06-14 11:57:01', '2022-06-14 11:57:01'),
(26, NULL, 'global', NULL, '2022-06-14 11:57:27', '2022-06-14 11:57:27'),
(27, NULL, 'ip', '195.25.90.83', '2022-06-14 11:57:27', '2022-06-14 11:57:27'),
(28, 1, 'user', NULL, '2022-06-14 11:57:27', '2022-06-14 11:57:27'),
(29, NULL, 'global', NULL, '2022-06-15 11:40:54', '2022-06-15 11:40:54'),
(30, NULL, 'ip', '195.25.90.83', '2022-06-15 11:40:54', '2022-06-15 11:40:54'),
(31, 1, 'user', NULL, '2022-06-15 11:40:54', '2022-06-15 11:40:54'),
(32, NULL, 'global', NULL, '2022-06-15 11:41:53', '2022-06-15 11:41:53'),
(33, NULL, 'ip', '195.25.90.83', '2022-06-15 11:41:53', '2022-06-15 11:41:53'),
(34, 1, 'user', NULL, '2022-06-15 11:41:53', '2022-06-15 11:41:53'),
(35, NULL, 'global', NULL, '2022-06-15 11:42:15', '2022-06-15 11:42:15'),
(36, NULL, 'ip', '195.25.90.83', '2022-06-15 11:42:15', '2022-06-15 11:42:15'),
(37, 1, 'user', NULL, '2022-06-15 11:42:15', '2022-06-15 11:42:15'),
(38, NULL, 'global', NULL, '2022-07-05 13:13:47', '2022-07-05 13:13:47'),
(39, NULL, 'ip', '115.186.169.2', '2022-07-05 13:13:47', '2022-07-05 13:13:47'),
(40, 1, 'user', NULL, '2022-07-05 13:13:47', '2022-07-05 13:13:47'),
(41, NULL, 'global', NULL, '2022-07-05 13:13:59', '2022-07-05 13:13:59'),
(42, NULL, 'ip', '115.186.169.2', '2022-07-05 13:13:59', '2022-07-05 13:13:59'),
(43, 1, 'user', NULL, '2022-07-05 13:13:59', '2022-07-05 13:13:59'),
(44, NULL, 'global', NULL, '2022-07-05 13:14:23', '2022-07-05 13:14:23'),
(45, NULL, 'ip', '115.186.169.2', '2022-07-05 13:14:23', '2022-07-05 13:14:23'),
(46, 1, 'user', NULL, '2022-07-05 13:14:23', '2022-07-05 13:14:23'),
(47, NULL, 'global', NULL, '2022-07-05 13:15:12', '2022-07-05 13:15:12'),
(48, NULL, 'ip', '115.186.169.2', '2022-07-05 13:15:12', '2022-07-05 13:15:12'),
(49, 1, 'user', NULL, '2022-07-05 13:15:12', '2022-07-05 13:15:12'),
(50, NULL, 'global', NULL, '2022-07-05 13:15:32', '2022-07-05 13:15:32'),
(51, NULL, 'ip', '115.186.169.2', '2022-07-05 13:15:32', '2022-07-05 13:15:32'),
(52, 1, 'user', NULL, '2022-07-05 13:15:32', '2022-07-05 13:15:32'),
(53, NULL, 'global', NULL, '2022-07-05 13:28:53', '2022-07-05 13:28:53'),
(54, NULL, 'ip', '115.186.169.2', '2022-07-05 13:28:53', '2022-07-05 13:28:53'),
(55, 1, 'user', NULL, '2022-07-05 13:28:53', '2022-07-05 13:28:53'),
(56, NULL, 'global', NULL, '2022-07-05 13:29:23', '2022-07-05 13:29:23'),
(57, NULL, 'ip', '115.186.169.2', '2022-07-05 13:29:23', '2022-07-05 13:29:23'),
(58, 1, 'user', NULL, '2022-07-05 13:29:23', '2022-07-05 13:29:23'),
(59, NULL, 'global', NULL, '2022-07-05 13:29:36', '2022-07-05 13:29:36'),
(60, NULL, 'ip', '115.186.169.2', '2022-07-05 13:29:36', '2022-07-05 13:29:36'),
(61, 1, 'user', NULL, '2022-07-05 13:29:36', '2022-07-05 13:29:36'),
(62, NULL, 'global', NULL, '2022-07-05 13:30:27', '2022-07-05 13:30:27'),
(63, NULL, 'ip', '115.186.169.2', '2022-07-05 13:30:27', '2022-07-05 13:30:27'),
(64, 9, 'user', NULL, '2022-07-05 13:30:27', '2022-07-05 13:30:27'),
(65, NULL, 'global', NULL, '2022-07-06 07:21:11', '2022-07-06 07:21:11'),
(66, NULL, 'ip', '115.186.141.8', '2022-07-06 07:21:11', '2022-07-06 07:21:11'),
(67, 1, 'user', NULL, '2022-07-06 07:21:11', '2022-07-06 07:21:11'),
(68, NULL, 'global', NULL, '2022-07-06 07:21:17', '2022-07-06 07:21:17'),
(69, NULL, 'ip', '115.186.141.8', '2022-07-06 07:21:17', '2022-07-06 07:21:17'),
(70, 1, 'user', NULL, '2022-07-06 07:21:17', '2022-07-06 07:21:17'),
(71, NULL, 'global', NULL, '2022-07-06 07:30:28', '2022-07-06 07:30:28'),
(72, NULL, 'ip', '115.186.141.8', '2022-07-06 07:30:28', '2022-07-06 07:30:28'),
(73, 1, 'user', NULL, '2022-07-06 07:30:28', '2022-07-06 07:30:28'),
(74, NULL, 'global', NULL, '2022-07-06 07:39:59', '2022-07-06 07:39:59'),
(75, NULL, 'ip', '115.186.141.8', '2022-07-06 07:39:59', '2022-07-06 07:39:59'),
(76, NULL, 'global', NULL, '2022-07-06 07:40:41', '2022-07-06 07:40:41'),
(77, NULL, 'ip', '115.186.141.8', '2022-07-06 07:40:41', '2022-07-06 07:40:41'),
(78, NULL, 'global', NULL, '2022-07-06 17:23:23', '2022-07-06 17:23:23'),
(79, NULL, 'ip', '196.70.68.170', '2022-07-06 17:23:23', '2022-07-06 17:23:23'),
(80, 1, 'user', NULL, '2022-07-06 17:23:23', '2022-07-06 17:23:23'),
(81, NULL, 'global', NULL, '2022-07-06 17:23:33', '2022-07-06 17:23:33'),
(82, NULL, 'ip', '196.70.68.170', '2022-07-06 17:23:33', '2022-07-06 17:23:33'),
(83, 1, 'user', NULL, '2022-07-06 17:23:33', '2022-07-06 17:23:33'),
(84, NULL, 'global', NULL, '2022-07-06 17:23:55', '2022-07-06 17:23:55'),
(85, NULL, 'ip', '196.70.68.170', '2022-07-06 17:23:55', '2022-07-06 17:23:55'),
(86, 1, 'user', NULL, '2022-07-06 17:23:55', '2022-07-06 17:23:55'),
(87, NULL, 'global', NULL, '2022-07-06 17:24:00', '2022-07-06 17:24:00'),
(88, NULL, 'ip', '196.70.68.170', '2022-07-06 17:24:00', '2022-07-06 17:24:00'),
(89, 1, 'user', NULL, '2022-07-06 17:24:00', '2022-07-06 17:24:00'),
(90, NULL, 'global', NULL, '2022-07-08 17:07:19', '2022-07-08 17:07:19'),
(91, NULL, 'ip', '41.248.48.103', '2022-07-08 17:07:19', '2022-07-08 17:07:19'),
(92, 1, 'user', NULL, '2022-07-08 17:07:19', '2022-07-08 17:07:19'),
(93, NULL, 'global', NULL, '2022-07-08 17:07:24', '2022-07-08 17:07:24'),
(94, NULL, 'ip', '41.248.48.103', '2022-07-08 17:07:24', '2022-07-08 17:07:24'),
(95, 1, 'user', NULL, '2022-07-08 17:07:24', '2022-07-08 17:07:24'),
(96, NULL, 'global', NULL, '2022-07-08 17:11:40', '2022-07-08 17:11:40'),
(97, NULL, 'ip', '41.248.48.103', '2022-07-08 17:11:40', '2022-07-08 17:11:40'),
(98, 1, 'user', NULL, '2022-07-08 17:11:40', '2022-07-08 17:11:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `delivery_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_postal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` tinyint(2) DEFAULT NULL,
  `social_reason` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_postal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `title`, `phone`, `delivery_address`, `postal`, `city`, `billing_address`, `billing_postal`, `billing_city`, `service_id`, `social_reason`, `created_at`, `updated_at`, `shipping_address`, `shipping_postal`, `shipping_city`) VALUES
(1, 'admin@admin.com', '$2y$10$qk5TSlLJy1S9gauhkllEDu2CzUwdsxmiYIZk9yjtJIijCWv5xaJ0K', NULL, '2022-07-07 13:37:50', 'Admin', 'John', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-26 13:37:17', '2022-07-07 13:37:50', NULL, NULL, ''),
(7, 'zeeshan@admin.com', '$2y$10$sOO8jAFZsPAmJEToIxVD1uGbbjjPpB0HgN7R7H.VH7f9dc9rmKw7u', NULL, NULL, 'Zeeshan', 'Zaheer', 'Mr', 945646415, 'old city', '56354', 'London', 'old city', '56354', 'London', NULL, NULL, '2022-05-26 15:09:44', '2022-05-26 15:09:44', NULL, NULL, ''),
(8, 'professional@admin.com', '$2y$10$oB4GzU6IcYIZM0nbj6exbu.pJ0fU8hQm8yynaq8vWtLotXkkUvtdS', NULL, '2022-05-28 12:24:12', 'Abid', 'Zaheer', NULL, 5465465464, 'old city', '96412', 'London', NULL, NULL, NULL, 2, 'Nothing Is impossible', '2022-05-26 15:10:53', '2022-05-28 12:24:12', NULL, NULL, ''),
(9, 'zeeshanzaheer574@gmail.com', '$2y$10$qk5TSlLJy1S9gauhkllEDu2CzUwdsxmiYIZk9yjtJIijCWv5xaJ0K', NULL, '2022-07-05 13:30:50', 'Ranaa', 'Zeeshan', 'Mr', 92302451521, 'old city', '96412', 'London', 'old city', '96412', 'London', NULL, NULL, '2022-05-30 10:37:55', '2022-07-07 13:42:30', NULL, NULL, ''),
(10, 'salmansumra009@gmail.com', '$2y$10$.gmhXr3K6wbfcSxOwgRAJeAP7ePLx8SWlSGeM.d3yg2/2hL.8U6U.', NULL, '2022-06-27 13:32:47', 'Muhammad', 'Salman', 'Mr', 3101607739, 'madina colony', '58150', 'khanewal', 'madina colony', '58150', 'khanewal', NULL, NULL, '2022-05-30 12:43:30', '2022-06-27 13:32:47', NULL, NULL, ''),
(11, 'elkhatouti@gmail.com', '$2y$10$fzYv8PBB55wcwKJUAVQdJO3yfKgcOwW6Xt8r/QSuIHfPGU4me6ovO', NULL, '2022-07-01 17:12:47', 'KH', 'AbdelMounim', 'Mr', 610682307, '50 Rue de Paradis', '92000', 'Paris', '50 Rue de Paradis', '92000', 'Paris', NULL, NULL, '2022-05-30 15:11:11', '2022-07-01 17:12:47', NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commande_detail`
--
ALTER TABLE `commande_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products_setting`
--
ALTER TABLE `products_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotations`
--
ALTER TABLE `quotations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `commande_detail`
--
ALTER TABLE `commande_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products_setting`
--
ALTER TABLE `products_setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `quotations`
--
ALTER TABLE `quotations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
