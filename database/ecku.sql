-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 07:32 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecku`
--

-- --------------------------------------------------------

--
-- Table structure for table `attribute_values`
--

CREATE TABLE `attribute_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_attribute_id` bigint(20) UNSIGNED DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_values`
--

INSERT INTO `attribute_values` (`id`, `product_attribute_id`, `value`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Grey', 1, '2022-11-13 19:28:47', '2022-11-13 19:28:47'),
(2, 1, ' Night Blue', 1, '2022-11-13 19:28:47', '2022-11-13 19:28:47'),
(15, 1, 'Black', 4, '2022-11-16 07:12:58', '2022-11-16 07:12:58'),
(16, 1, ' Grey', 4, '2022-11-16 07:12:58', '2022-11-16 07:12:58'),
(17, 1, ' Blue', 4, '2022-11-16 07:12:58', '2022-11-16 07:12:58');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Backpacks', 'backpacks', NULL, NULL),
(2, 'Lightning', 'lightning', NULL, NULL),
(3, 'Hats', 'hats', NULL, NULL),
(4, 'Emergency', 'emergency', NULL, NULL),
(5, 'Shoes', 'shoes', NULL, NULL),
(6, 'Navigation', 'navigation', NULL, NULL),
(7, 'Tents', 'tent', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distance_km` decimal(8,2) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `distance_km`, `status`, `created_at`, `updated_at`) VALUES
(101, 'Indonesia', '0.00', '1', '2022-11-17 07:27:48', '2022-11-17 07:27:48'),
(102, 'Malaysia', '1300.00', '1', '2022-11-17 07:28:25', '2022-11-17 07:28:25'),
(103, 'Palestinian Territories', '3712.00', '1', '2022-11-17 02:41:05', '2022-11-17 02:41:05'),
(104, 'Niger', '3996.00', '1', '2022-11-17 02:41:05', '2022-11-17 02:41:05'),
(105, 'Tunisia', '4629.00', '1', '2022-11-17 02:41:05', '2022-11-17 02:41:05'),
(106, 'Switzerland', '3856.00', '1', '2022-11-17 02:41:05', '2022-11-17 02:41:05'),
(107, 'Bhutan', '3736.00', '1', '2022-11-17 02:41:05', '2022-11-17 02:41:05'),
(108, 'Malta', '2358.00', '1', '2022-11-17 02:41:05', '2022-11-17 02:41:05'),
(109, 'Kiribati', '2438.00', '1', '2022-11-17 02:41:05', '2022-11-17 02:41:05'),
(110, 'Austria', '1001.00', '1', '2022-11-17 02:41:05', '2022-11-17 02:41:05'),
(111, 'Chad', '1482.00', '1', '2022-11-17 02:41:05', '2022-11-17 02:41:05'),
(112, 'Korea', '3172.00', '1', '2022-11-17 02:41:05', '2022-11-17 02:41:05'),
(113, 'Jersey', '2440.00', '1', '2022-11-17 02:41:05', '2022-11-17 02:41:05'),
(114, 'New Zealand', '3412.00', '1', '2022-11-17 02:41:05', '2022-11-17 02:41:05'),
(115, 'Uzbekistan', '3238.00', '1', '2022-11-17 02:41:05', '2022-11-17 02:41:05'),
(116, 'Angola', '4261.00', '1', '2022-11-17 02:41:05', '2022-11-17 02:41:05'),
(117, 'Finland', '1978.00', '1', '2022-11-17 02:41:06', '2022-11-17 02:41:06'),
(118, 'Brazil', '3196.00', '1', '2022-11-17 02:41:06', '2022-11-17 02:41:06'),
(119, 'United Kingdom', '2853.00', '1', '2022-11-17 02:41:06', '2022-11-17 02:41:06'),
(120, 'French Southern Territories', '3273.00', '1', '2022-11-17 02:41:06', '2022-11-17 02:41:06'),
(121, 'Cyprus', '4415.00', '1', '2022-11-17 02:41:06', '2022-11-17 02:41:06'),
(122, 'Venezuela', '4226.00', '1', '2022-11-17 02:41:06', '2022-11-17 02:41:06'),
(123, 'Egypt', '3293.00', '1', '2022-11-17 02:41:06', '2022-11-17 02:41:06'),
(124, 'Sri Lanka', '4992.00', '1', '2022-11-17 02:41:06', '2022-11-17 02:41:06'),
(125, 'Philippines', '3360.00', '1', '2022-11-17 02:41:06', '2022-11-17 02:41:06'),
(126, 'Slovenia', '1261.00', '1', '2022-11-17 02:41:06', '2022-11-17 02:41:06'),
(127, 'Singapore', '3123.00', '1', '2022-11-17 02:41:06', '2022-11-17 02:41:06'),
(128, 'Guam', '2778.00', '1', '2022-11-17 02:41:06', '2022-11-17 02:41:06'),
(129, 'Honduras', '1295.00', '1', '2022-11-17 02:41:06', '2022-11-17 02:41:06'),
(130, 'Djibouti', '1691.00', '1', '2022-11-17 02:41:06', '2022-11-17 02:41:06'),
(131, 'Namibia', '4706.00', '1', '2022-11-17 02:41:06', '2022-11-17 02:41:06'),
(132, 'Portugal', '3263.00', '1', '2022-11-17 02:41:06', '2022-11-17 02:41:06'),
(133, 'Monaco', '4919.00', '1', '2022-11-17 02:41:07', '2022-11-17 02:41:07'),
(134, 'Taiwan', '4434.00', '1', '2022-11-17 02:41:07', '2022-11-17 02:41:07'),
(135, 'Bouvet Island (Bouvetoya)', '1875.00', '1', '2022-11-17 02:41:07', '2022-11-17 02:41:07'),
(136, 'Australia', '2273.00', '1', '2022-11-17 02:41:07', '2022-11-17 02:41:07'),
(137, 'Ireland', '4809.00', '1', '2022-11-17 02:41:07', '2022-11-17 02:41:07'),
(138, 'Cape Verde', '1939.00', '1', '2022-11-17 02:41:07', '2022-11-17 02:41:07'),
(139, 'Lao People\'s Democratic Republic', '3563.00', '1', '2022-11-17 02:41:07', '2022-11-17 02:41:07'),
(140, 'Ecuador', '4086.00', '1', '2022-11-17 02:41:07', '2022-11-17 02:41:07'),
(141, 'Poland', '4533.00', '1', '2022-11-17 02:41:07', '2022-11-17 02:41:07'),
(142, 'Zimbabwe', '1087.00', '1', '2022-11-17 02:41:07', '2022-11-17 02:41:07'),
(143, 'Russian Federation', '3178.00', '1', '2022-11-17 02:41:07', '2022-11-17 02:41:07'),
(144, 'Central African Republic', '1937.00', '1', '2022-11-17 02:41:07', '2022-11-17 02:41:07'),
(145, 'Isle of Man', '4956.00', '1', '2022-11-17 02:41:07', '2022-11-17 02:41:07'),
(146, 'Estonia', '4576.00', '1', '2022-11-17 02:41:07', '2022-11-17 02:41:07'),
(147, 'Dominican Republic', '4458.00', '1', '2022-11-17 02:41:07', '2022-11-17 02:41:07'),
(148, 'Gambia', '3875.00', '1', '2022-11-17 02:41:07', '2022-11-17 02:41:07'),
(149, 'San Marino', '4816.00', '1', '2022-11-17 02:41:07', '2022-11-17 02:41:07'),
(150, 'Japan', '2192.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(151, 'Guatemala', '4070.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(152, 'Azerbaijan', '1691.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(153, 'Saint Lucia', '2100.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(154, 'Barbados', '4674.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(155, 'Afghanistan', '4136.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(156, 'French Polynesia', '3122.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(157, 'Mauritius', '1972.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(158, 'Heard Island and McDonald Islands', '3674.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(159, 'Nepal', '2195.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(160, 'Bosnia and Herzegovina', '4347.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(161, 'Chile', '2235.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(162, 'British Virgin Islands', '2008.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(163, 'Nauru', '2104.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(164, 'Mongolia', '1392.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(165, 'Trinidad and Tobago', '2228.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(166, 'Burkina Faso', '3149.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(167, 'Indonesia', '4888.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(168, 'Puerto Rico', '2329.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(169, 'Madagascar', '4030.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(170, 'Oman', '4507.00', '1', '2022-11-17 02:41:08', '2022-11-17 02:41:08'),
(171, 'South Georgia and the South Sandwich Islands', '3053.00', '1', '2022-11-17 02:41:09', '2022-11-17 02:41:09'),
(172, 'Belgium', '2319.00', '1', '2022-11-17 02:41:09', '2022-11-17 02:41:09'),
(173, 'Tonga', '1603.00', '1', '2022-11-17 02:41:09', '2022-11-17 02:41:09'),
(174, 'Bermuda', '2273.00', '1', '2022-11-17 02:41:09', '2022-11-17 02:41:09'),
(175, 'Malaysia', '3938.00', '1', '2022-11-17 02:41:09', '2022-11-17 02:41:09'),
(176, 'Christmas Island', '2387.00', '1', '2022-11-17 02:41:09', '2022-11-17 02:41:09'),
(177, 'Morocco', '1256.00', '1', '2022-11-17 02:41:09', '2022-11-17 02:41:09'),
(178, 'Liechtenstein', '2697.00', '1', '2022-11-17 02:41:09', '2022-11-17 02:41:09'),
(179, 'Turkmenistan', '2997.00', '1', '2022-11-17 02:41:09', '2022-11-17 02:41:09'),
(180, 'Dominica', '2101.00', '1', '2022-11-17 02:41:09', '2022-11-17 02:41:09'),
(181, 'Guinea', '2358.00', '1', '2022-11-17 02:41:09', '2022-11-17 02:41:09'),
(182, 'Maldives', '1291.00', '1', '2022-11-17 02:41:09', '2022-11-17 02:41:09'),
(183, 'Tokelau', '1986.00', '1', '2022-11-17 02:41:09', '2022-11-17 02:41:09'),
(184, 'Bahamas', '4488.00', '1', '2022-11-17 02:41:10', '2022-11-17 02:41:10'),
(185, 'Cayman Islands', '3614.00', '1', '2022-11-17 02:41:10', '2022-11-17 02:41:10'),
(186, 'Gibraltar', '4138.00', '1', '2022-11-17 02:41:10', '2022-11-17 02:41:10'),
(187, 'United States Minor Outlying Islands', '2324.00', '1', '2022-11-17 02:41:10', '2022-11-17 02:41:10'),
(188, 'Albania', '4906.00', '1', '2022-11-17 02:41:10', '2022-11-17 02:41:10'),
(189, 'Somalia', '2605.00', '1', '2022-11-17 02:41:10', '2022-11-17 02:41:10'),
(190, 'Colombia', '3427.00', '1', '2022-11-17 02:41:10', '2022-11-17 02:41:10'),
(191, 'Macedonia', '4624.00', '1', '2022-11-17 02:41:10', '2022-11-17 02:41:10'),
(192, 'Liberia', '2825.00', '1', '2022-11-17 02:41:10', '2022-11-17 02:41:10'),
(193, 'Papua New Guinea', '1505.00', '1', '2022-11-17 02:41:10', '2022-11-17 02:41:10'),
(194, 'Cocos (Keeling) Islands', '3549.00', '1', '2022-11-17 02:41:10', '2022-11-17 02:41:10'),
(195, 'Comoros', '1491.00', '1', '2022-11-17 02:41:10', '2022-11-17 02:41:10'),
(196, 'Seychelles', '2524.00', '1', '2022-11-17 02:41:10', '2022-11-17 02:41:10'),
(197, 'Western Sahara', '2339.00', '1', '2022-11-17 02:41:10', '2022-11-17 02:41:10'),
(198, 'Romania', '3608.00', '1', '2022-11-17 02:41:10', '2022-11-17 02:41:10'),
(199, 'Holy See (Vatican City State)', '4304.00', '1', '2022-11-17 02:41:10', '2022-11-17 02:41:10'),
(200, 'Botswana', '2131.00', '1', '2022-11-17 02:41:10', '2022-11-17 02:41:10'),
(201, 'Pakistan', '3321.00', '1', '2022-11-17 02:41:10', '2022-11-17 02:41:10'),
(202, 'Greenland', '4036.00', '1', '2022-11-17 02:41:10', '2022-11-17 02:41:10');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('fixed','percent') COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` decimal(8,2) NOT NULL,
  `cart_value` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expiry_date` date NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expeditions`
--

CREATE TABLE `expeditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost_perkm` decimal(8,2) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expeditions`
--

INSERT INTO `expeditions` (`id`, `name`, `cost_perkm`, `location`, `created_at`, `updated_at`) VALUES
(1, 'FlashEX', '0.15', 'Indonesia', '2022-11-17 09:14:51', '2022-11-17 09:14:51'),
(2, 'EnigmaExpress', '0.10', 'Indonesia', '2022-11-17 09:14:51', '2022-11-17 09:14:51'),
(3, 'JetZ', '0.25', 'Indonesia', '2022-11-17 09:16:12', '2022-11-17 09:16:12');

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
-- Table structure for table `home_categories`
--

CREATE TABLE `home_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sel_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_categories`
--

INSERT INTO `home_categories` (`id`, `sel_category`, `product_number`, `created_at`, `updated_at`) VALUES
(1, '1, 2, 3, 4, 5', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `title`, `subtitle`, `price`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Adventure Store', 'Get your hiking kits here', '5.00', 'https://www.w3schools.com/css/css_font_size.asp', '1668925560-png', '1', '2022-11-13 20:40:17', '2022-11-19 23:26:00');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_08_11_150643_create_sessions_table', 1),
(7, '2022_08_15_033420_create_categories_table', 1),
(8, '2022_08_15_033423_create_products_table', 1),
(9, '2022_08_28_035656_create_home_sliders_table', 1),
(10, '2022_08_28_121541_create_home_categories_table', 1),
(11, '2022_08_29_055151_create_sales_table', 1),
(12, '2022_09_01_133723_create_coupons_table', 1),
(13, '2022_09_03_135810_create_shoppingcart_table', 1),
(14, '2022_09_03_145037_add_expiry_date_to_coupons_table', 1),
(15, '2022_09_04_004604_create_orders_table', 1),
(16, '2022_09_04_004605_create_order_items_table', 1),
(17, '2022_09_04_004747_create_shippings_table', 1),
(18, '2022_09_04_004838_create_transactions_table', 1),
(19, '2022_09_05_084100_add_delivered_canceled_date_to_orders_table', 1),
(20, '2022_09_05_125303_create_reviews_table', 1),
(21, '2022_09_05_130331_add_rstatus_to_order_items_table', 1),
(22, '2022_09_06_092517_create_contacts_table', 1),
(23, '2022_09_06_102157_create_settings_table', 1),
(24, '2022_09_07_072610_create_subcategories_table', 1),
(25, '2022_09_07_112733_add_subcategory_id_to_products_table', 1),
(26, '2022_09_08_054948_create_profiles_table', 1),
(27, '2022_09_08_093231_create_product_attributes_table', 1),
(28, '2022_09_08_121810_create_attribute_values_table', 1),
(29, '2022_09_09_101821_add_options_to_order_items_table', 1),
(30, '2022_11_17_064953_create_countries_table', 2),
(31, '2022_11_17_073018_create_expeditions_table', 3),
(32, '2022_11_17_085223_add_expedition_id_to_orders', 4),
(33, '2022_11_17_130547_add_shipping_agent_to_orders', 5),
(34, '2022_11_17_130444_add_shipping_age', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(8,2) NOT NULL,
  `shipping_charge` decimal(10,0) DEFAULT NULL,
  `total` decimal(8,2) NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('onprocess','delivered','canceled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'onprocess',
  `is_shipping_different` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `delivered_date` date DEFAULT NULL,
  `canceled_date` date DEFAULT NULL,
  `expedition_id` bigint(20) UNSIGNED NOT NULL,
  `shipping_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `subtotal`, `discount`, `tax`, `shipping_charge`, `total`, `firstname`, `lastname`, `mobile`, `email`, `line1`, `line2`, `city`, `province`, `country`, `zipcode`, `status`, `is_shipping_different`, `created_at`, `updated_at`, `delivered_date`, `canceled_date`, `expedition_id`, `shipping_agent`, `sender_id`) VALUES
(1, 1, '150.65', '0.00', '16.57', '578', '745.62', 'Fance', 'Nusantara', '0909090909', 'fancesatria.rpl@gmail.com', '23 Blackwood Street', NULL, 'Bern', 'Zurich', '3856.00', '09809', 'onprocess', 0, '2022-11-17 05:57:51', '2022-11-17 05:57:51', NULL, NULL, 1, 'EnigmaExpress', 1),
(2, 1, '48.76', '0.00', '5.36', '0', '54.12', 'Fance', 'Nusantara', '098776345612', 'fancesatria.rpl@gmail.com', 'Jl. Sedati Agung I No.3', NULL, 'Sidoarjo', 'Jawa Timur', 'Indonesia', '09800', 'onprocess', 0, '2022-11-17 06:20:52', '2022-11-17 06:20:52', NULL, NULL, 1, 'FlashEX', 1),
(3, 11, '234.99', '0.00', '31.74', '0', '266.73', 'Fance', 'Nusantara', '098776345612', 'fancesatria005@gmail.com', 'Jl. Sedati Agung III No.1 Rt.04 Rw.01', NULL, 'Sidoarjo', 'Jawa Timur', 'Indonesia', '09809', 'onprocess', 0, '2022-11-17 08:07:24', '2022-11-17 08:07:24', NULL, NULL, 3, 'JetZ', 0),
(4, 11, '243.54', '0.00', '26.79', '0', '270.33', 'Fance', 'Nusantara', '0980980989', 'fancesatria005@gmail.com', 'Jl. Sedati Agung III No.1 Rt.04 Rw.01', NULL, 'Sidoarjo', 'Jawa Timur', 'Indonesia', '09809', 'onprocess', 0, '2022-11-17 08:14:51', '2022-11-17 08:14:51', NULL, NULL, 3, 'JetZ', 0),
(5, 11, '5.45', '0.00', '0.60', '486', '491.75', 'Fance', 'Satria', '09869808090', 'fancesatria005@gmail.com', 'oak street', NULL, 'VUVU', 'BB', 'Uzbekistan', '0956', 'onprocess', 0, '2022-11-17 08:17:09', '2022-11-17 08:17:09', NULL, NULL, 1, 'FlashEX', 0),
(6, 11, '140.55', '0.00', '15.46', '463', '618.91', 'FF', 'st', '09809809', 'fancesatria005@gmail.com', 'test123', NULL, 'HJHH JKJKJ JJOK', 'GHGHG', 'Tunisia', '09890', 'onprocess', 0, '2022-11-17 08:20:21', '2022-11-17 08:20:21', NULL, NULL, 2, 'EnigmaExpress', 0),
(7, 11, '56.55', '0.00', '6.22', '244', '306.77', 'S', 'BABin', '098098', 'fancesatria005@gmail.com', 'test123777g yyyuy', NULL, 'VBVBVBV', 'HAinan', 'Jersey', '2222', 'delivered', 0, '2022-11-17 08:21:46', '2022-11-17 08:21:46', NULL, NULL, 2, 'EnigmaExpress', 0),
(8, 11, '58.55', '0.00', '6.44', '495', '559.49', 'FF', 'V', '098098', 'fancesatria005@gmail.com', 'Gelamsari ', NULL, 'nkjkk', 'GGG', 'Finland', '098000', 'delivered', 0, '2022-11-17 08:28:48', '2022-11-17 08:28:48', NULL, NULL, 3, 'JetZ', 0),
(9, 11, '56.55', '0.00', '6.22', '366', '428.77', 'F', 'S', '090909090909', 'fancesatria005@gmail.com', 'test123777g yyyuy', NULL, 'uhuy', 'uhuy', 'Jersey', '09809', 'onprocess', 0, '2022-11-17 09:34:16', '2022-11-17 09:34:16', NULL, NULL, 1, 'FlashEX', 0),
(10, 11, '5.45', '0.00', '0.60', '599', '605.45', 'h', 'j', '09898989898899898', 'fancesatria005@gmail.com', 'Jl. Sedati Agung I No.3', NULL, 'ghghghg', 'Jawa Timur', 'Niger', '90998', 'onprocess', 0, '2022-11-17 09:39:47', '2022-11-17 09:39:47', NULL, NULL, 1, 'FlashEX', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rstatus` tinyint(1) NOT NULL DEFAULT 0,
  `options` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `product_id`, `order_id`, `user_id`, `price`, `quantity`, `created_at`, `updated_at`, `rstatus`, `options`) VALUES
(1, 3, 1, 1, '150.65', 1, '2022-11-17 05:57:52', '2022-11-17 05:57:52', 0, 'O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}'),
(2, 2, 2, 1, '48.76', 1, '2022-11-17 06:20:52', '2022-11-17 06:20:52', 0, 'O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}'),
(3, 1, 3, 11, '58.89', 1, '2022-11-17 08:07:24', '2022-11-17 08:07:24', 0, 'O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}'),
(4, 3, 3, 11, '150.65', 1, '2022-11-17 08:07:24', '2022-11-17 08:07:24', 0, 'O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}'),
(5, 7, 3, 11, '25.45', 1, '2022-11-17 08:07:24', '2022-11-17 08:07:24', 0, 'O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}'),
(6, 6, 4, 11, '243.54', 1, '2022-11-17 08:14:51', '2022-11-17 08:14:51', 0, 'O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}'),
(7, 8, 5, 11, '5.45', 1, '2022-11-17 08:17:09', '2022-11-17 08:17:09', 0, 'O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}'),
(8, 12, 6, 11, '140.55', 1, '2022-11-17 08:20:22', '2022-11-17 08:20:22', 0, 'O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}'),
(9, 11, 7, 11, '56.55', 1, '2022-11-17 08:21:46', '2022-11-17 08:21:46', 0, 'O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}'),
(10, 10, 8, 11, '58.55', 1, '2022-11-17 08:28:48', '2022-11-17 08:28:48', 0, 'O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}'),
(11, 11, 9, 11, '56.55', 1, '2022-11-17 09:34:17', '2022-11-17 09:34:17', 0, 'O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}'),
(12, 8, 10, 11, '5.45', 1, '2022-11-17 09:39:47', '2022-11-17 09:39:47', 0, 'O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `SKU` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_status` enum('instock','outofstock') COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 10,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subcategory_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `description`, `regular_price`, `sale_price`, `SKU`, `stock_status`, `featured`, `quantity`, `image`, `images`, `category_id`, `created_at`, `updated_at`, `subcategory_id`) VALUES
(1, 'LAVA Hiking Backpack - 20L', 'lava-hiking-backpack-20l', 'Hiking Backback', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '58.89', '58.53', 'BCPK0001', 'instock', 0, 67, '1668392927-jpg', NULL, 1, '2022-11-13 19:28:47', '2022-11-13 19:28:47', NULL),
(2, 'LION Headlamp For Hiking', 'lion-headlamp-for-hiking', 'Headlamp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '48.76', '45.00', 'HL0001', 'instock', 0, 54, '1668393031-jpg', NULL, 2, '2022-11-13 19:30:31', '2022-11-13 19:30:31', NULL),
(3, 'KUMA Compass For Navigation', 'kuma-compass-for-navigation', 'Compass', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '150.65', '150.63', 'CS0001', 'instock', 0, 56, '1668393467-jpg', NULL, 6, '2022-11-13 19:37:47', '2022-11-13 19:37:47', NULL),
(4, 'TRUEME Compass For Navigation', 'trueme-compass-for-navigation', 'Compass', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '149.65', '149.63', 'CS0002', 'instock', 0, 59, '1668607978-jpg', NULL, 6, '2022-11-13 19:39:12', '2022-11-16 07:12:58', NULL),
(5, 'RAUNG - Green Tent', 'raung-green-tent', 'Tent For Camping', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '240.54', '240.53', 'TNT0001', 'instock', 0, 87, '1668393719-jpg', NULL, 7, '2022-11-13 19:41:59', '2022-11-13 19:41:59', NULL),
(6, 'RAUNG - BlueTent', 'raung-bluetent', 'Tent For Camping', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '243.54', '243.53', 'TNT0002', 'instock', 0, 87, '1668393774-jpg', NULL, 7, '2022-11-13 19:42:54', '2022-11-13 19:42:54', NULL),
(7, 'Emergency Blanket - Anti Fire', 'emergency-blanket-anti-fire', 'Emergency Blanket', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '25.45', '24.75', 'EM0001', 'instock', 0, 450, '1668394612-jpg', NULL, 4, '2022-11-13 19:56:52', '2022-11-13 19:56:52', NULL),
(8, 'Hiking Whistle - Emergency Whistle', 'hiking-whistle-emergency-whistle', 'Emergency Whistle', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '5.45', '4.75', 'EM0002', 'instock', 0, 450, '1668607541-png', NULL, 4, '2022-11-13 19:58:02', '2022-11-16 07:05:41', NULL),
(9, 'First Aid Kit Fr HIking', 'first-aid-kit-fr-hiking', 'Fisrt Aid Kit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '25.45', '23.75', 'EM0003', 'instock', 0, 450, '1668394730-jpg', NULL, 4, '2022-11-13 19:58:50', '2022-11-13 19:58:50', NULL),
(10, 'JAV - Hiking Shoes', 'jav-hiking-shoes', 'Hiking Shoes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '58.55', '58.55', 'SHS0001', 'instock', 0, 87, '1668394802-jpg', NULL, 5, '2022-11-13 20:00:02', '2022-11-13 20:00:02', NULL),
(11, 'JAV - Woman HIking Shoes', 'jav-woman-hiking-shoes', 'Hiking Shoes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '56.55', '53.55', 'SHS0002', 'instock', 0, 87, '1668394871-jpg', NULL, 5, '2022-11-13 20:01:11', '2022-11-13 20:01:11', NULL),
(12, 'LEVVY HIking Shoes', 'levvy-hiking-shoes', 'Hiking Shoes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '140.55', '140.55', 'SHS0003', 'instock', 0, 87, '1668394923-jpg', NULL, 5, '2022-11-13 20:02:03', '2022-11-13 20:02:03', NULL),
(13, 'HeavySou Hiking Hat', 'heavysou-hiking-hat', 'Hiking Hat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '14.55', '13.55', 'HA0001', 'instock', 0, 87, '1668394979-jpg', NULL, 3, '2022-11-13 20:02:59', '2022-11-13 20:02:59', NULL),
(14, 'VKK Hiking Hat', 'vkk-hiking-hat', 'Hiking Hat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '13.55', '12.55', 'HA0002', 'instock', 0, 87, '1668395017-jpg', NULL, 3, '2022-11-13 20:03:37', '2022-11-13 20:03:37', NULL),
(15, 'LVA Hiking Hat For Girl', 'lva-hiking-hat-for-girl', 'Hiking Hat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '8.55', '8.55', 'HA0003', 'instock', 0, 87, '1668395055-jpg', NULL, 3, '2022-11-13 20:04:15', '2022-11-13 20:04:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Color', '2022-11-13 19:26:42', '2022-11-13 19:26:42'),
(2, 'Size', '2022-11-13 19:26:53', '2022-11-13 19:26:53');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `image`, `mobile`, `line1`, `line2`, `city`, `province`, `country`, `zipcode`, `created_at`, `updated_at`) VALUES
(1, 11, '1668621209-jpg', '089617320859', 'Sedati', NULL, 'Sidoarjo', 'Jawa Timur', 'Indonesia', '61253', '2022-11-16 10:51:41', '2022-11-16 10:53:29');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_item_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sale_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sale_date`, `status`, `created_at`, `updated_at`) VALUES
(1, '2022-11-30 03:08:17', 1, NULL, '2022-11-13 20:04:50');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR' COMMENT 'ADM for admin & USR for user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`, `utype`) VALUES
('rJV2nwBgR9P96141RbDbxOc9dzpNMBmqYAvBmTm4', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiM0pMcjhyWnJTWjRMY2VjUjdrU0NLaHpDRGVZdGRGSEdlSVJhcEZZdiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9zbGlkZXIiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkc1prWWNHcXd2RXpkbFczdnVZd2ouLlRTSEZFMVBQNHouODkudjdpWVhOOHcyYTBjVFVad2EiO3M6NDoiY2FydCI7YTozOntzOjQ6ImNhcnQiO086Mjk6IklsbHVtaW5hdGVcU3VwcG9ydFxDb2xsZWN0aW9uIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6MzI6IjM3MGQwODU4NTM2MGY1YzU2OGIxOGQxZjJlNGNhMWRmIjtPOjMyOiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbSI6OTp7czo1OiJyb3dJZCI7czozMjoiMzcwZDA4NTg1MzYwZjVjNTY4YjE4ZDFmMmU0Y2ExZGYiO3M6MjoiaWQiO2k6MjtzOjM6InF0eSI7aToxO3M6NDoibmFtZSI7czoyNDoiTElPTiBIZWFkbGFtcCBGb3IgSGlraW5nIjtzOjU6InByaWNlIjtkOjQ4Ljc2O3M6Nzoib3B0aW9ucyI7TzozOToiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW1PcHRpb25zIjoyOntzOjg6IgAqAGl0ZW1zIjthOjA6e31zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fXM6NDk6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQBhc3NvY2lhdGVkTW9kZWwiO3M6MTg6IkFwcFxNb2RlbHNcUHJvZHVjdCI7czo0MToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAHRheFJhdGUiO2k6MTE7czo0MToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGlzU2F2ZWQiO2I6MDt9fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9czo4OiJ3aXNobGlzdCI7TzoyOToiSWxsdW1pbmF0ZVxTdXBwb3J0XENvbGxlY3Rpb24iOjI6e3M6ODoiACoAaXRlbXMiO2E6MDp7fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9czoxMjoic2F2ZUZvckxhdGVyIjtPOjI5OiJJbGx1bWluYXRlXFN1cHBvcnRcQ29sbGVjdGlvbiI6Mjp7czo4OiIAKgBpdGVtcyI7YTowOnt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO319czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkc1prWWNHcXd2RXpkbFczdnVZd2ouLlRTSEZFMVBQNHouODkudjdpWVhOOHcyYTBjVFVad2EiO30=', 1668925963, 'USR');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twiter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `phone`, `phone2`, `address`, `map`, `twiter`, `facebook`, `pinterest`, `instagram`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'info@adventurestore.com', '1234567890', '0987654321', '23 Sedati agung, Sedati, Sidoarjo', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126608.86322610684!2d112.72354634195665!3d-7.406775527182988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e5eba601c37f%3A0x4027a76e3531d40!2sKec.%20Sedati%2C%20Kabupaten%20Sidoarjo%2C%20Jawa', '@adventure.store', '@adventure.store', '@adventure.store', '@adventure.store', '@adventure.store', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`identifier`, `instance`, `content`, `created_at`, `updated_at`) VALUES
('admin@gmail.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-11-14 00:45:29', NULL),
('admin@gmail.com', 'saveForLater', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-11-13 23:16:14', NULL),
('admin@gmail.com', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:2:{s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";s:2:\"id\";i:1;s:3:\"qty\";i:1;s:4:\"name\";s:26:\"LAVA Hiking Backpack - 20L\";s:5:\"price\";d:58.89;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}s:32:\"370d08585360f5c568b18d1f2e4ca1df\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"370d08585360f5c568b18d1f2e4ca1df\";s:2:\"id\";i:2;s:3:\"qty\";i:1;s:4:\"name\";s:24:\"LION Headlamp For Hiking\";s:5:\"price\";d:48.76;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-11-14 00:45:29', NULL),
('fancesatria.rpl@gmail.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:1:{s:32:\"370d08585360f5c568b18d1f2e4ca1df\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"370d08585360f5c568b18d1f2e4ca1df\";s:2:\"id\";i:2;s:3:\"qty\";i:1;s:4:\"name\";s:24:\"LION Headlamp For Hiking\";s:5:\"price\";d:48.76;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:11;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-11-17 06:11:45', NULL),
('fancesatria.rpl@gmail.com', 'saveForLater', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-11-17 06:11:46', NULL),
('fancesatria.rpl@gmail.com', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-11-17 06:11:34', NULL),
('fancesatria005@gmail.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:1:{s:32:\"18d6934483b994fb9943b43b7d7646bf\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"18d6934483b994fb9943b43b7d7646bf\";s:2:\"id\";i:8;s:3:\"qty\";i:1;s:4:\"name\";s:34:\"Hiking Whistle - Emergency Whistle\";s:5:\"price\";d:5.45;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:11;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-11-19 23:10:41', NULL),
('fancesatria005@gmail.com', 'saveForLater', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-11-19 23:10:41', NULL),
('fancesatria005@gmail.com', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-11-19 22:56:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `mode` enum('cod','card','paypal') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','approved','declined','refunded') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `order_id`, `mode`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'cod', 'pending', '2022-11-17 05:57:52', '2022-11-17 05:57:52'),
(2, 1, 2, 'cod', 'pending', '2022-11-17 06:20:52', '2022-11-17 06:20:52'),
(3, 11, 3, 'cod', 'pending', '2022-11-17 08:07:24', '2022-11-17 08:07:24'),
(4, 11, 4, 'cod', 'pending', '2022-11-17 08:14:51', '2022-11-17 08:14:51'),
(5, 11, 5, 'cod', 'pending', '2022-11-17 08:17:09', '2022-11-17 08:17:09'),
(6, 11, 6, 'cod', 'pending', '2022-11-17 08:20:22', '2022-11-17 08:20:22'),
(7, 11, 7, 'cod', 'pending', '2022-11-17 08:21:46', '2022-11-17 08:21:46'),
(8, 11, 8, 'cod', 'pending', '2022-11-17 08:28:48', '2022-11-17 08:28:48'),
(9, 11, 9, 'cod', 'pending', '2022-11-17 09:34:17', '2022-11-17 09:34:17'),
(10, 11, 10, 'cod', 'pending', '2022-11-17 09:39:47', '2022-11-17 09:39:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR' COMMENT 'ADM = admin and USR = user/cust',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `utype`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'fancesatria.rpl@gmail.com', '2022-11-16 06:58:15', '$2y$10$sZkYcGqwvEzdlW3vuYwj..TSHFE1PP4z.89.v7iYXN8w2a0cTUZwa', NULL, NULL, NULL, NULL, NULL, NULL, 'ADM', '2022-11-13 19:21:19', '2022-11-16 06:58:15'),
(11, 'fance', 'fancesatria005@gmail.com', '2022-11-16 10:51:38', '$2y$10$BQBVaa/hjIhS/7Ym2cnl8.PCyt5ZTKUpUQHzWpdpZY0LzKyd9IH2u', NULL, NULL, NULL, NULL, NULL, NULL, 'USR', '2022-11-16 08:00:05', '2022-11-16 10:51:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_values_product_attribute_id_foreign` (`product_attribute_id`),
  ADD KEY `attribute_values_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `expeditions`
--
ALTER TABLE `expeditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_categories`
--
ALTER TABLE `home_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_expedition_id_foreign` (`expedition_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_subcategory_id_foreign` (`subcategory_id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_order_item_id_foreign` (`order_item_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shippings_order_id_foreign` (`order_id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`);

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
-- AUTO_INCREMENT for table `attribute_values`
--
ALTER TABLE `attribute_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expeditions`
--
ALTER TABLE `expeditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_categories`
--
ALTER TABLE `home_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD CONSTRAINT `attribute_values_product_attribute_id_foreign` FOREIGN KEY (`product_attribute_id`) REFERENCES `product_attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attribute_values_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_expedition_id_foreign` FOREIGN KEY (`expedition_id`) REFERENCES `expeditions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_order_item_id_foreign` FOREIGN KEY (`order_item_id`) REFERENCES `order_items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shippings`
--
ALTER TABLE `shippings`
  ADD CONSTRAINT `shippings_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
