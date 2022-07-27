-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 03:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `burger_maker`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_manus`
--

CREATE TABLE `food_manus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb_image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_bottom_image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_top_image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ingredients` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_manus`
--

INSERT INTO `food_manus` (`id`, `title`, `thumb_image`, `base_bottom_image`, `base_top_image`, `ingredients`, `created_at`, `updated_at`) VALUES
(1, 'Mega burger', '/uploads/food/Mega_burger1/jjIZrWkXf6hscSZv4t8rlaZqVeP3ZmO6igHubpSt.png', '/uploads/food/Mega_burger1/QXDUSTO9wnPZh2KqtIMVT9TVrhIX8MYbSqNoCiAq.png', '/uploads/food/Mega_burger1/IHtITNJSuqske76FxQZ9Bp0dUbt8v69n8DFYPvH3.png', '[{\"title\":\"mayonaise\",\"price\":\"10\",\"image\":\"\\/uploads\\/food\\/Mega_burger1\\/ev4IRKJe2o3l2KS7QtUeKgKi7e6tF5dqNmqOaxMr.png\"},{\"title\":\"cheese\",\"price\":\"15\",\"image\":\"\\/uploads\\/food\\/Mega_burger1\\/5fQ2bJgkjMnggW1Zt60fClSZ5tuZ00vUobNzhyK6.png\"},{\"title\":\"meat\",\"price\":\"35\",\"image\":\"\\/uploads\\/food\\/Mega_burger1\\/xyHFph0a1TwkXvAR9MFPM603z3neTbsopHxzL6Wh.png\"},{\"title\":\"onion\",\"price\":\"5\",\"image\":\"\\/uploads\\/food\\/Mega_burger1\\/6Kx4ID4PJU49I3y1DL6J2sjvVDXFcro1Hw7BArKr.png\"}]', '2022-07-14 06:39:24', '2022-07-14 06:39:24'),
(2, 'subway sandwitch', '/uploads/food/subway_sandwitch2/UawFMDhqJjbGD3gWfgfOa9VRFBUIt6yfvG9TsjcQ.png', '/uploads/food/subway_sandwitch2/9GAfDKcHhfehFmz9o5EszOZfBv0kKJnVQnxdtI2R.png', '/uploads/food/subway_sandwitch2/KT1WTF6qcgCptMO3nlwD4rSEHHt6HJATVf1w3zJm.png', '[{\"title\":\"mayonaise\",\"price\":\"13\",\"image\":\"\\/uploads\\/food\\/subway_sandwitch2\\/sEorWbffJNbZOYVf4PZxCrtCJrnUcx4rOFPzickk.png\"},{\"title\":\"cheese\",\"price\":\"10\",\"image\":\"\\/uploads\\/food\\/subway_sandwitch2\\/SxYa3mNifhTOmQvmH03f9K5eJljP1qYFrPN25Tot.png\"},{\"title\":\"meat\",\"price\":\"35\",\"image\":\"\\/uploads\\/food\\/subway_sandwitch2\\/yYji8XcagHFSFZ2xwbhy3ZIb5jnOpftPPCyb4luI.png\"},{\"title\":\"lettuce\",\"price\":\"5\",\"image\":\"\\/uploads\\/food\\/subway_sandwitch2\\/J27C6DmNnwePBTMb5JwdVScFLh8oBNLC9OMoNtCW.png\"}]', '2022-07-14 06:46:51', '2022-07-14 06:46:51'),
(3, 'Jumbo burger', '/uploads/food/Jumbo_burger3/fRHoSoeSbHFik6V5XcDdAVM6cQJlgkVF7NWAOmaa.png', '/uploads/food/Jumbo_burger3/DDlXemy2lwJAnOZtjPHstCMMm2IbqaHgjt2ddIYo.png', '/uploads/food/Jumbo_burger3/oYsUPV7tiKa2R2raZtVdWvWQHkwoyaOw7Qlgezyu.png', '[{\"title\":\"cheese\",\"price\":\"10\",\"image\":\"\\/uploads\\/food\\/Jumbo_burger3\\/ADjSNQ1BUYbaXujHGHsi3MUmU8FY4eXNjwbhFaWP.png\"},{\"title\":\"salad\",\"price\":\"5\",\"image\":\"\\/uploads\\/food\\/Jumbo_burger3\\/OeZtEHAeF0kM48alLJBLcTrZYgBonBeW4rVTzapb.png\"},{\"title\":\"barbeque meat\",\"price\":\"50\",\"image\":\"\\/uploads\\/food\\/Jumbo_burger3\\/DHTrWkwE2rMiMMDQhNsaxWl2EZQYo5BWU4mES6SZ.png\"},{\"title\":\"egg\",\"price\":\"20\",\"image\":\"\\/uploads\\/food\\/Jumbo_burger3\\/Y6Kv5uZosuIkOd5OH8oTiAgx2zVKukXSRVo543zF.png\"},{\"title\":\"meat with cheese\",\"price\":\"60\",\"image\":\"\\/uploads\\/food\\/Jumbo_burger3\\/lV6bbpEOfCFWqCh5NLvkVozXenDb9aHRTYJK1Pdx.png\"},{\"title\":\"mutton salad\",\"price\":\"20\",\"image\":\"\\/uploads\\/food\\/Jumbo_burger3\\/uMN5is3ny1BBk5gsXc8FmOnRGqoFybNBMHlmZaqd.png\"},{\"title\":\"sliced meat with cheese and sauce\",\"price\":\"70\",\"image\":\"\\/uploads\\/food\\/Jumbo_burger3\\/YuZdM7jCC0Y5iPyRUlrc9NwBN0n5z0bxwjTh8BAd.png\"},{\"title\":\"Chuck steak\",\"price\":\"80\",\"image\":\"\\/uploads\\/food\\/Jumbo_burger3\\/mbeMVtqFIbTR7rRwvk9273FyU7AS34j37sEyDZC9.png\"},{\"title\":\"sliced cheese\",\"price\":\"15\",\"image\":\"\\/uploads\\/food\\/Jumbo_burger3\\/lS0ptWbSrTKTEYy3IYwzSB2YqtBXvl2Tlzn0275g.png\"},{\"title\":\"slice sauces\",\"price\":\"25\",\"image\":\"\\/uploads\\/food\\/Jumbo_burger3\\/kR0QETqOS48h8cTJ9leoFnmDL4Yu2ciN5VhJfA6U.png\"},{\"title\":\"grilled meat\",\"price\":\"80\",\"image\":\"\\/uploads\\/food\\/Jumbo_burger3\\/ISQ2ockNpaxGG2AlKS67JW4RlHO51LOe7z5dVCL8.png\"},{\"title\":\"masala salad\",\"price\":\"30\",\"image\":\"\\/uploads\\/food\\/Jumbo_burger3\\/DZUoELquTAIQ2swzPmYW9S7W0jsT8Ak8f2lI1Wsl.png\"}]', '2022-07-14 07:11:03', '2022-07-14 07:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_03_13_161651_create_user_roles_table', 1),
(22, '2022_07_13_161221_create_food_manus_table', 2),
(27, '2022_07_14_022903_create_order_booked_tables_table', 3),
(40, '2022_07_14_022924_create_orders_table', 4),
(41, '2022_07_14_023408_create_order_ingredients_table', 4),
(42, '2022_07_14_041336_create_order_details_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total_amount` double DEFAULT NULL,
  `payment_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `full_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person` int(11) DEFAULT NULL,
  `date` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specific_time_watch_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `total_amount`, `payment_id`, `payment_status`, `full_name`, `email`, `phone_number`, `person`, `date`, `start_time`, `end_time`, `comment`, `payment_type`, `delivery_type`, `delivery_time`, `specific_time_watch_value`, `status`, `created_at`, `updated_at`) VALUES
(1, 1438, NULL, 'pending', 'muhammad shefat', 'mshefat924@gmail.com', '01646376015', NULL, NULL, NULL, NULL, 'no comment', 'cash', 'delivery', 'specific time', '14:08', 'pending', '2022-07-14 11:08:14', '2022-07-14 11:08:14'),
(2, 2156, 'pi_3LLPv4KpuFsRQFJf1QM0DtQL', 'paid', 'muhammad shefat', 'mshefat924@gmail.com', '01646376015', 7, '2022-07-15 00:00:00', '2022-07-15 14:08:00', '2022-07-15 15:08:00', 'no comment', 'card', 'onsite', 'specific time', '14:08', 'pending', '2022-07-14 11:09:21', '2022-07-14 11:09:23'),
(3, 1080, 'pi_3LLPwWKpuFsRQFJf0jxRSnzc', 'paid', 'muhammad shefat', 'mshefat924@gmail.com', '01646376015', 4, '2022-07-15 00:00:00', '2022-07-15 14:08:00', '2022-07-15 15:08:00', NULL, 'card', 'onsite', 'specific time', '14:08', 'pending', '2022-07-14 11:10:51', '2022-07-14 11:10:52'),
(4, 780, NULL, 'pending', 'muhammad shefat', 'mshefat924@gmail.com', '01646376015', NULL, NULL, NULL, NULL, NULL, 'card', 'delivery', 'specific time', '14:08', 'pending', '2022-07-14 11:19:09', '2022-07-14 11:19:09'),
(5, 780, NULL, 'pending', 'muhammad shefat', 'mshefat924@gmail.com', '01646376015', NULL, NULL, NULL, NULL, NULL, 'card', 'delivery', 'specific time', '14:08', 'pending', '2022-07-14 11:31:31', '2022-07-14 11:31:31'),
(6, 780, 'pi_3LLQHaKpuFsRQFJf0RGLCVcd', 'paid', 'muhammad shefat', 'mshefat924@gmail.com', '01646376015', NULL, NULL, NULL, NULL, NULL, 'card', 'delivery', 'specific time', '14:08', 'completed', '2022-07-14 11:32:37', '2022-07-14 12:23:35'),
(7, 780, 'pi_3LLQI0KpuFsRQFJf1lXB3b5o', 'pending', 'muhammad shefat', 'mshefat924@gmail.com', '01646376015', NULL, NULL, NULL, NULL, NULL, 'card', 'delivery', 'specific time', '14:08', 'pending', '2022-07-14 11:33:03', '2022-07-14 11:33:04'),
(8, 780, 'pi_3LLQI9KpuFsRQFJf0nh1xMHY', 'paid', 'muhammad shefat', 'mshefat924@gmail.com', '01646376015', NULL, NULL, NULL, NULL, NULL, 'card', 'delivery', 'specific time', '14:08', 'pending', '2022-07-14 11:33:12', '2022-07-14 11:33:14'),
(9, 170, 'pi_3LLQJ0KpuFsRQFJf0x52WGuh', 'paid', 'muhammad shefat', 'mshefat924@gmail.com', '01646376015', NULL, NULL, NULL, NULL, NULL, 'card', 'delivery', 'specific time', '14:08', 'pending', '2022-07-14 11:34:06', '2022-07-14 11:34:07'),
(10, 940, 'pi_3LLQK3KpuFsRQFJf1NE8jcBQ', 'pending', 'muhammad shefat', 'mshefat924@gmail.com', '01646376015', NULL, NULL, NULL, NULL, NULL, 'card', 'delivery', 'specific time', '14:08', 'pending', '2022-07-14 11:35:10', '2022-07-14 11:35:11'),
(11, 3620, 'pi_3LLQLxKpuFsRQFJf0fB4Hg2D', 'paid', 'muhammad shefat', 'mshefat924@gmail.com', '01646376015', NULL, NULL, NULL, NULL, NULL, 'card', 'delivery', 'specific time', '14:08', 'pending', '2022-07-14 11:37:08', '2022-07-14 11:37:49'),
(12, 3310, 'pi_3LLQNkKpuFsRQFJf1dEHhW7l', 'paid', 'muhammad shefat', 'mshefat924@gmail.com', '01646376015', 1, '2022-07-15 00:00:00', '2022-07-15 14:08:00', '2022-07-15 15:08:00', NULL, 'card', 'onsite', 'specific time', '14:08', 'completed', '2022-07-14 11:38:59', '2022-07-14 12:20:39'),
(13, 916, NULL, 'pending', 'muhammad shefat', 'mshefat924@gmail.com', '01646376015', 2, '2022-07-15 00:00:00', '2022-07-15 14:08:00', '2022-07-15 15:08:00', NULL, 'cash', 'onsite', 'specific time', '14:08', 'pending', '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(14, 50, 'pi_3LLRanKpuFsRQFJf0RmGdoZv', 'paid', 'muhammad shefat', 'mshefat924@gmail.com', '01646376015', 1, '2022-07-15 00:00:00', '2022-07-15 14:08:00', '2022-07-15 15:08:00', NULL, 'card', 'onsite', 'specific time', '14:08', 'pending', '2022-07-14 12:56:33', '2022-07-14 12:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `order_booked_tables`
--

CREATE TABLE `order_booked_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) DEFAULT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chair_no` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_booked_tables`
--

INSERT INTO `order_booked_tables` (`id`, `order_id`, `date`, `start_time`, `end_time`, `chair_no`, `created_at`, `updated_at`) VALUES
(1, 2, '2022-07-15 00:00:00', '2022-07-15 14:08:00', '2022-07-15 15:08:00', 'table_2_chair_no_1', '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(2, 2, '2022-07-15 00:00:00', '2022-07-15 14:08:00', '2022-07-15 15:08:00', 'table_2_chair_no_2', '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(3, 2, '2022-07-15 00:00:00', '2022-07-15 14:08:00', '2022-07-15 15:08:00', 'table_3_chair_no_4', '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(4, 2, '2022-07-15 00:00:00', '2022-07-15 14:08:00', '2022-07-15 15:08:00', 'table_4_chair_no_1', '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(5, 2, '2022-07-15 00:00:00', '2022-07-15 14:08:00', '2022-07-15 15:08:00', 'table_5_chair_no_2', '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(6, 3, '2022-07-15 00:00:00', '2022-07-15 14:08:00', '2022-07-15 15:08:00', 'table_1_chair_no_1', '2022-07-14 11:10:51', '2022-07-14 11:10:51'),
(7, 3, '2022-07-15 00:00:00', '2022-07-15 14:08:00', '2022-07-15 15:08:00', 'table_1_chair_no_2', '2022-07-14 11:10:51', '2022-07-14 11:10:51'),
(8, 3, '2022-07-15 00:00:00', '2022-07-15 14:08:00', '2022-07-15 15:08:00', 'table_1_chair_no_4', '2022-07-14 11:10:51', '2022-07-14 11:10:51'),
(9, 12, '2022-07-15 00:00:00', '2022-07-15 14:08:00', '2022-07-15 15:08:00', 'table_6_chair_no_1', '2022-07-14 11:38:59', '2022-07-14 11:38:59'),
(10, 12, '2022-07-15 00:00:00', '2022-07-15 14:08:00', '2022-07-15 15:08:00', 'table_6_chair_no_2', '2022-07-14 11:38:59', '2022-07-14 11:38:59'),
(11, 12, '2022-07-15 00:00:00', '2022-07-15 14:08:00', '2022-07-15 15:08:00', 'table_7_chair_no_2', '2022-07-14 11:38:59', '2022-07-14 11:38:59'),
(12, 13, '2022-07-15 00:00:00', '2022-07-15 14:08:00', '2022-07-15 15:08:00', 'table_3_chair_no_1', '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(13, 13, '2022-07-15 00:00:00', '2022-07-15 14:08:00', '2022-07-15 15:08:00', 'table_3_chair_no_2', '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(14, 14, '2022-07-15 00:00:00', '2022-07-15 14:08:00', '2022-07-15 15:08:00', 'table_4_chair_no_2', '2022-07-14 12:56:33', '2022-07-14 12:56:33'),
(15, 14, '2022-07-15 00:00:00', '2022-07-15 14:08:00', '2022-07-15 15:08:00', 'table_4_chair_no_3', '2022-07-14 12:56:33', '2022-07-14 12:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` bigint(20) DEFAULT NULL,
  `total_amount` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `title`, `image`, `qty`, `total_amount`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Jumbo burger', '/uploads/food/Jumbo_burger3/fRHoSoeSbHFik6V5XcDdAVM6cQJlgkVF7NWAOmaa.png', 3, 445, '2022-07-14 11:08:14', '2022-07-14 11:08:14'),
(2, 1, 2, 'subway sandwitch', '/uploads/food/subway_sandwitch2/UawFMDhqJjbGD3gWfgfOa9VRFBUIt6yfvG9TsjcQ.png', 1, 103, '2022-07-14 11:08:14', '2022-07-14 11:08:14'),
(3, 2, 2, 'subway sandwitch', '/uploads/food/subway_sandwitch2/UawFMDhqJjbGD3gWfgfOa9VRFBUIt6yfvG9TsjcQ.png', 1, 206, '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(4, 2, 3, 'Jumbo burger', '/uploads/food/Jumbo_burger3/fRHoSoeSbHFik6V5XcDdAVM6cQJlgkVF7NWAOmaa.png', 5, 390, '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(5, 3, 3, 'Jumbo burger', '/uploads/food/Jumbo_burger3/fRHoSoeSbHFik6V5XcDdAVM6cQJlgkVF7NWAOmaa.png', 4, 270, '2022-07-14 11:10:51', '2022-07-14 11:10:51'),
(6, 4, 3, 'Jumbo burger', '/uploads/food/Jumbo_burger3/fRHoSoeSbHFik6V5XcDdAVM6cQJlgkVF7NWAOmaa.png', 3, 260, '2022-07-14 11:19:09', '2022-07-14 11:19:09'),
(7, 5, 3, 'Jumbo burger', '/uploads/food/Jumbo_burger3/fRHoSoeSbHFik6V5XcDdAVM6cQJlgkVF7NWAOmaa.png', 3, 260, '2022-07-14 11:31:31', '2022-07-14 11:31:31'),
(8, 6, 3, 'Jumbo burger', '/uploads/food/Jumbo_burger3/fRHoSoeSbHFik6V5XcDdAVM6cQJlgkVF7NWAOmaa.png', 3, 260, '2022-07-14 11:32:37', '2022-07-14 11:32:37'),
(9, 7, 3, 'Jumbo burger', '/uploads/food/Jumbo_burger3/fRHoSoeSbHFik6V5XcDdAVM6cQJlgkVF7NWAOmaa.png', 3, 260, '2022-07-14 11:33:03', '2022-07-14 11:33:03'),
(10, 8, 3, 'Jumbo burger', '/uploads/food/Jumbo_burger3/fRHoSoeSbHFik6V5XcDdAVM6cQJlgkVF7NWAOmaa.png', 3, 260, '2022-07-14 11:33:12', '2022-07-14 11:33:12'),
(11, 9, 3, 'Jumbo burger', '/uploads/food/Jumbo_burger3/fRHoSoeSbHFik6V5XcDdAVM6cQJlgkVF7NWAOmaa.png', 1, 170, '2022-07-14 11:34:06', '2022-07-14 11:34:06'),
(12, 10, 3, 'Jumbo burger', '/uploads/food/Jumbo_burger3/fRHoSoeSbHFik6V5XcDdAVM6cQJlgkVF7NWAOmaa.png', 4, 235, '2022-07-14 11:35:10', '2022-07-14 11:35:10'),
(13, 11, 3, 'Jumbo burger', '/uploads/food/Jumbo_burger3/fRHoSoeSbHFik6V5XcDdAVM6cQJlgkVF7NWAOmaa.png', 4, 905, '2022-07-14 11:37:08', '2022-07-14 11:37:08'),
(14, 12, 1, 'Mega burger', '/uploads/food/Mega_burger1/jjIZrWkXf6hscSZv4t8rlaZqVeP3ZmO6igHubpSt.png', 2, 150, '2022-07-14 11:38:59', '2022-07-14 11:38:59'),
(15, 12, 3, 'Jumbo burger', '/uploads/food/Jumbo_burger3/fRHoSoeSbHFik6V5XcDdAVM6cQJlgkVF7NWAOmaa.png', 7, 430, '2022-07-14 11:38:59', '2022-07-14 11:38:59'),
(16, 13, 3, 'Jumbo burger', '/uploads/food/Jumbo_burger3/fRHoSoeSbHFik6V5XcDdAVM6cQJlgkVF7NWAOmaa.png', 1, 235, '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(17, 13, 1, 'Mega burger', '/uploads/food/Mega_burger1/jjIZrWkXf6hscSZv4t8rlaZqVeP3ZmO6igHubpSt.png', 1, 135, '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(18, 13, 2, 'subway sandwitch', '/uploads/food/subway_sandwitch2/UawFMDhqJjbGD3gWfgfOa9VRFBUIt6yfvG9TsjcQ.png', 6, 91, '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(19, 14, 2, 'subway sandwitch', '/uploads/food/subway_sandwitch2/UawFMDhqJjbGD3gWfgfOa9VRFBUIt6yfvG9TsjcQ.png', 1, 50, '2022-07-14 12:56:33', '2022-07-14 12:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `order_ingredients`
--

CREATE TABLE `order_ingredients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `order_details_id` bigint(20) DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_ingredients`
--

INSERT INTO `order_ingredients` (`id`, `order_id`, `product_id`, `order_details_id`, `title`, `image`, `price`, `qty`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1, 'sliced meat with cheese and sauce', '/uploads/food/Jumbo_burger3/YuZdM7jCC0Y5iPyRUlrc9NwBN0n5z0bxwjTh8BAd.png', '70', '1', '70', '2022-07-14 11:08:14', '2022-07-14 11:08:14'),
(2, 1, 3, 1, 'meat with cheese', '/uploads/food/Jumbo_burger3/lV6bbpEOfCFWqCh5NLvkVozXenDb9aHRTYJK1Pdx.png', '60', '4', '240', '2022-07-14 11:08:14', '2022-07-14 11:08:14'),
(3, 1, 3, 1, 'egg', '/uploads/food/Jumbo_burger3/Y6Kv5uZosuIkOd5OH8oTiAgx2zVKukXSRVo543zF.png', '20', '2', '40', '2022-07-14 11:08:14', '2022-07-14 11:08:14'),
(4, 1, 3, 1, 'barbeque meat', '/uploads/food/Jumbo_burger3/DHTrWkwE2rMiMMDQhNsaxWl2EZQYo5BWU4mES6SZ.png', '50', '1', '50', '2022-07-14 11:08:14', '2022-07-14 11:08:14'),
(5, 1, 3, 1, 'mutton salad', '/uploads/food/Jumbo_burger3/uMN5is3ny1BBk5gsXc8FmOnRGqoFybNBMHlmZaqd.png', '20', '1', '20', '2022-07-14 11:08:14', '2022-07-14 11:08:14'),
(6, 1, 3, 1, 'slice sauces', '/uploads/food/Jumbo_burger3/kR0QETqOS48h8cTJ9leoFnmDL4Yu2ciN5VhJfA6U.png', '25', '1', '25', '2022-07-14 11:08:14', '2022-07-14 11:08:14'),
(7, 1, 2, 2, 'mayonaise', '/uploads/food/subway_sandwitch2/sEorWbffJNbZOYVf4PZxCrtCJrnUcx4rOFPzickk.png', '13', '1', '13', '2022-07-14 11:08:14', '2022-07-14 11:08:14'),
(8, 1, 2, 2, 'cheese', '/uploads/food/subway_sandwitch2/SxYa3mNifhTOmQvmH03f9K5eJljP1qYFrPN25Tot.png', '10', '1', '10', '2022-07-14 11:08:14', '2022-07-14 11:08:14'),
(9, 1, 2, 2, 'lettuce', '/uploads/food/subway_sandwitch2/J27C6DmNnwePBTMb5JwdVScFLh8oBNLC9OMoNtCW.png', '5', '2', '10', '2022-07-14 11:08:14', '2022-07-14 11:08:14'),
(10, 1, 2, 2, 'meat', '/uploads/food/subway_sandwitch2/yYji8XcagHFSFZ2xwbhy3ZIb5jnOpftPPCyb4luI.png', '35', '2', '70', '2022-07-14 11:08:14', '2022-07-14 11:08:14'),
(11, 2, 2, 3, 'mayonaise', '/uploads/food/subway_sandwitch2/sEorWbffJNbZOYVf4PZxCrtCJrnUcx4rOFPzickk.png', '13', '2', '26', '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(12, 2, 2, 3, 'meat', '/uploads/food/subway_sandwitch2/yYji8XcagHFSFZ2xwbhy3ZIb5jnOpftPPCyb4luI.png', '35', '4', '140', '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(13, 2, 2, 3, 'cheese', '/uploads/food/subway_sandwitch2/SxYa3mNifhTOmQvmH03f9K5eJljP1qYFrPN25Tot.png', '10', '3', '30', '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(14, 2, 2, 3, 'lettuce', '/uploads/food/subway_sandwitch2/J27C6DmNnwePBTMb5JwdVScFLh8oBNLC9OMoNtCW.png', '5', '2', '10', '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(15, 2, 3, 4, 'salad', '/uploads/food/Jumbo_burger3/OeZtEHAeF0kM48alLJBLcTrZYgBonBeW4rVTzapb.png', '5', '2', '10', '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(16, 2, 3, 4, 'egg', '/uploads/food/Jumbo_burger3/Y6Kv5uZosuIkOd5OH8oTiAgx2zVKukXSRVo543zF.png', '20', '2', '40', '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(17, 2, 3, 4, 'cheese', '/uploads/food/Jumbo_burger3/ADjSNQ1BUYbaXujHGHsi3MUmU8FY4eXNjwbhFaWP.png', '10', '1', '10', '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(18, 2, 3, 4, 'barbeque meat', '/uploads/food/Jumbo_burger3/DHTrWkwE2rMiMMDQhNsaxWl2EZQYo5BWU4mES6SZ.png', '50', '1', '50', '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(19, 2, 3, 4, 'Chuck steak', '/uploads/food/Jumbo_burger3/mbeMVtqFIbTR7rRwvk9273FyU7AS34j37sEyDZC9.png', '80', '1', '80', '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(20, 2, 3, 4, 'sliced meat with cheese and sauce', '/uploads/food/Jumbo_burger3/YuZdM7jCC0Y5iPyRUlrc9NwBN0n5z0bxwjTh8BAd.png', '70', '1', '70', '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(21, 2, 3, 4, 'meat with cheese', '/uploads/food/Jumbo_burger3/lV6bbpEOfCFWqCh5NLvkVozXenDb9aHRTYJK1Pdx.png', '60', '1', '60', '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(22, 2, 3, 4, 'slice sauces', '/uploads/food/Jumbo_burger3/kR0QETqOS48h8cTJ9leoFnmDL4Yu2ciN5VhJfA6U.png', '25', '1', '25', '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(23, 2, 3, 4, 'sliced cheese', '/uploads/food/Jumbo_burger3/lS0ptWbSrTKTEYy3IYwzSB2YqtBXvl2Tlzn0275g.png', '15', '1', '15', '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(24, 2, 3, 4, 'masala salad', '/uploads/food/Jumbo_burger3/DZUoELquTAIQ2swzPmYW9S7W0jsT8Ak8f2lI1Wsl.png', '30', '1', '30', '2022-07-14 11:09:21', '2022-07-14 11:09:21'),
(25, 3, 3, 5, 'cheese', '/uploads/food/Jumbo_burger3/ADjSNQ1BUYbaXujHGHsi3MUmU8FY4eXNjwbhFaWP.png', '10', '2', '20', '2022-07-14 11:10:51', '2022-07-14 11:10:51'),
(26, 3, 3, 5, 'salad', '/uploads/food/Jumbo_burger3/OeZtEHAeF0kM48alLJBLcTrZYgBonBeW4rVTzapb.png', '5', '2', '10', '2022-07-14 11:10:51', '2022-07-14 11:10:51'),
(27, 3, 3, 5, 'egg', '/uploads/food/Jumbo_burger3/Y6Kv5uZosuIkOd5OH8oTiAgx2zVKukXSRVo543zF.png', '20', '1', '20', '2022-07-14 11:10:51', '2022-07-14 11:10:51'),
(28, 3, 3, 5, 'Chuck steak', '/uploads/food/Jumbo_burger3/mbeMVtqFIbTR7rRwvk9273FyU7AS34j37sEyDZC9.png', '80', '1', '80', '2022-07-14 11:10:51', '2022-07-14 11:10:51'),
(29, 3, 3, 5, 'sliced meat with cheese and sauce', '/uploads/food/Jumbo_burger3/YuZdM7jCC0Y5iPyRUlrc9NwBN0n5z0bxwjTh8BAd.png', '70', '1', '70', '2022-07-14 11:10:51', '2022-07-14 11:10:51'),
(30, 3, 3, 5, 'sliced cheese', '/uploads/food/Jumbo_burger3/lS0ptWbSrTKTEYy3IYwzSB2YqtBXvl2Tlzn0275g.png', '15', '1', '15', '2022-07-14 11:10:51', '2022-07-14 11:10:51'),
(31, 3, 3, 5, 'slice sauces', '/uploads/food/Jumbo_burger3/kR0QETqOS48h8cTJ9leoFnmDL4Yu2ciN5VhJfA6U.png', '25', '1', '25', '2022-07-14 11:10:51', '2022-07-14 11:10:51'),
(32, 3, 3, 5, 'masala salad', '/uploads/food/Jumbo_burger3/DZUoELquTAIQ2swzPmYW9S7W0jsT8Ak8f2lI1Wsl.png', '30', '1', '30', '2022-07-14 11:10:51', '2022-07-14 11:10:51'),
(33, 4, 3, 6, 'cheese', '/uploads/food/Jumbo_burger3/ADjSNQ1BUYbaXujHGHsi3MUmU8FY4eXNjwbhFaWP.png', '10', '1', '10', '2022-07-14 11:19:09', '2022-07-14 11:19:09'),
(34, 4, 3, 6, 'salad', '/uploads/food/Jumbo_burger3/OeZtEHAeF0kM48alLJBLcTrZYgBonBeW4rVTzapb.png', '5', '1', '5', '2022-07-14 11:19:09', '2022-07-14 11:19:09'),
(35, 4, 3, 6, 'egg', '/uploads/food/Jumbo_burger3/Y6Kv5uZosuIkOd5OH8oTiAgx2zVKukXSRVo543zF.png', '20', '1', '20', '2022-07-14 11:19:09', '2022-07-14 11:19:09'),
(36, 4, 3, 6, 'barbeque meat', '/uploads/food/Jumbo_burger3/DHTrWkwE2rMiMMDQhNsaxWl2EZQYo5BWU4mES6SZ.png', '50', '1', '50', '2022-07-14 11:19:09', '2022-07-14 11:19:09'),
(37, 4, 3, 6, 'sliced meat with cheese and sauce', '/uploads/food/Jumbo_burger3/YuZdM7jCC0Y5iPyRUlrc9NwBN0n5z0bxwjTh8BAd.png', '70', '1', '70', '2022-07-14 11:19:09', '2022-07-14 11:19:09'),
(38, 4, 3, 6, 'Chuck steak', '/uploads/food/Jumbo_burger3/mbeMVtqFIbTR7rRwvk9273FyU7AS34j37sEyDZC9.png', '80', '1', '80', '2022-07-14 11:19:09', '2022-07-14 11:19:09'),
(39, 4, 3, 6, 'slice sauces', '/uploads/food/Jumbo_burger3/kR0QETqOS48h8cTJ9leoFnmDL4Yu2ciN5VhJfA6U.png', '25', '1', '25', '2022-07-14 11:19:09', '2022-07-14 11:19:09'),
(40, 5, 3, 7, 'cheese', '/uploads/food/Jumbo_burger3/ADjSNQ1BUYbaXujHGHsi3MUmU8FY4eXNjwbhFaWP.png', '10', '1', '10', '2022-07-14 11:31:31', '2022-07-14 11:31:31'),
(41, 5, 3, 7, 'salad', '/uploads/food/Jumbo_burger3/OeZtEHAeF0kM48alLJBLcTrZYgBonBeW4rVTzapb.png', '5', '1', '5', '2022-07-14 11:31:31', '2022-07-14 11:31:31'),
(42, 5, 3, 7, 'egg', '/uploads/food/Jumbo_burger3/Y6Kv5uZosuIkOd5OH8oTiAgx2zVKukXSRVo543zF.png', '20', '1', '20', '2022-07-14 11:31:31', '2022-07-14 11:31:31'),
(43, 5, 3, 7, 'barbeque meat', '/uploads/food/Jumbo_burger3/DHTrWkwE2rMiMMDQhNsaxWl2EZQYo5BWU4mES6SZ.png', '50', '1', '50', '2022-07-14 11:31:31', '2022-07-14 11:31:31'),
(44, 5, 3, 7, 'sliced meat with cheese and sauce', '/uploads/food/Jumbo_burger3/YuZdM7jCC0Y5iPyRUlrc9NwBN0n5z0bxwjTh8BAd.png', '70', '1', '70', '2022-07-14 11:31:31', '2022-07-14 11:31:31'),
(45, 5, 3, 7, 'Chuck steak', '/uploads/food/Jumbo_burger3/mbeMVtqFIbTR7rRwvk9273FyU7AS34j37sEyDZC9.png', '80', '1', '80', '2022-07-14 11:31:31', '2022-07-14 11:31:31'),
(46, 5, 3, 7, 'slice sauces', '/uploads/food/Jumbo_burger3/kR0QETqOS48h8cTJ9leoFnmDL4Yu2ciN5VhJfA6U.png', '25', '1', '25', '2022-07-14 11:31:31', '2022-07-14 11:31:31'),
(47, 6, 3, 8, 'cheese', '/uploads/food/Jumbo_burger3/ADjSNQ1BUYbaXujHGHsi3MUmU8FY4eXNjwbhFaWP.png', '10', '1', '10', '2022-07-14 11:32:37', '2022-07-14 11:32:37'),
(48, 6, 3, 8, 'salad', '/uploads/food/Jumbo_burger3/OeZtEHAeF0kM48alLJBLcTrZYgBonBeW4rVTzapb.png', '5', '1', '5', '2022-07-14 11:32:37', '2022-07-14 11:32:37'),
(49, 6, 3, 8, 'egg', '/uploads/food/Jumbo_burger3/Y6Kv5uZosuIkOd5OH8oTiAgx2zVKukXSRVo543zF.png', '20', '1', '20', '2022-07-14 11:32:37', '2022-07-14 11:32:37'),
(50, 6, 3, 8, 'barbeque meat', '/uploads/food/Jumbo_burger3/DHTrWkwE2rMiMMDQhNsaxWl2EZQYo5BWU4mES6SZ.png', '50', '1', '50', '2022-07-14 11:32:37', '2022-07-14 11:32:37'),
(51, 6, 3, 8, 'sliced meat with cheese and sauce', '/uploads/food/Jumbo_burger3/YuZdM7jCC0Y5iPyRUlrc9NwBN0n5z0bxwjTh8BAd.png', '70', '1', '70', '2022-07-14 11:32:37', '2022-07-14 11:32:37'),
(52, 6, 3, 8, 'Chuck steak', '/uploads/food/Jumbo_burger3/mbeMVtqFIbTR7rRwvk9273FyU7AS34j37sEyDZC9.png', '80', '1', '80', '2022-07-14 11:32:37', '2022-07-14 11:32:37'),
(53, 6, 3, 8, 'slice sauces', '/uploads/food/Jumbo_burger3/kR0QETqOS48h8cTJ9leoFnmDL4Yu2ciN5VhJfA6U.png', '25', '1', '25', '2022-07-14 11:32:37', '2022-07-14 11:32:37'),
(54, 7, 3, 9, 'cheese', '/uploads/food/Jumbo_burger3/ADjSNQ1BUYbaXujHGHsi3MUmU8FY4eXNjwbhFaWP.png', '10', '1', '10', '2022-07-14 11:33:03', '2022-07-14 11:33:03'),
(55, 7, 3, 9, 'salad', '/uploads/food/Jumbo_burger3/OeZtEHAeF0kM48alLJBLcTrZYgBonBeW4rVTzapb.png', '5', '1', '5', '2022-07-14 11:33:03', '2022-07-14 11:33:03'),
(56, 7, 3, 9, 'egg', '/uploads/food/Jumbo_burger3/Y6Kv5uZosuIkOd5OH8oTiAgx2zVKukXSRVo543zF.png', '20', '1', '20', '2022-07-14 11:33:03', '2022-07-14 11:33:03'),
(57, 7, 3, 9, 'barbeque meat', '/uploads/food/Jumbo_burger3/DHTrWkwE2rMiMMDQhNsaxWl2EZQYo5BWU4mES6SZ.png', '50', '1', '50', '2022-07-14 11:33:03', '2022-07-14 11:33:03'),
(58, 7, 3, 9, 'sliced meat with cheese and sauce', '/uploads/food/Jumbo_burger3/YuZdM7jCC0Y5iPyRUlrc9NwBN0n5z0bxwjTh8BAd.png', '70', '1', '70', '2022-07-14 11:33:03', '2022-07-14 11:33:03'),
(59, 7, 3, 9, 'Chuck steak', '/uploads/food/Jumbo_burger3/mbeMVtqFIbTR7rRwvk9273FyU7AS34j37sEyDZC9.png', '80', '1', '80', '2022-07-14 11:33:03', '2022-07-14 11:33:03'),
(60, 7, 3, 9, 'slice sauces', '/uploads/food/Jumbo_burger3/kR0QETqOS48h8cTJ9leoFnmDL4Yu2ciN5VhJfA6U.png', '25', '1', '25', '2022-07-14 11:33:03', '2022-07-14 11:33:03'),
(61, 8, 3, 10, 'cheese', '/uploads/food/Jumbo_burger3/ADjSNQ1BUYbaXujHGHsi3MUmU8FY4eXNjwbhFaWP.png', '10', '1', '10', '2022-07-14 11:33:12', '2022-07-14 11:33:12'),
(62, 8, 3, 10, 'salad', '/uploads/food/Jumbo_burger3/OeZtEHAeF0kM48alLJBLcTrZYgBonBeW4rVTzapb.png', '5', '1', '5', '2022-07-14 11:33:12', '2022-07-14 11:33:12'),
(63, 8, 3, 10, 'egg', '/uploads/food/Jumbo_burger3/Y6Kv5uZosuIkOd5OH8oTiAgx2zVKukXSRVo543zF.png', '20', '1', '20', '2022-07-14 11:33:12', '2022-07-14 11:33:12'),
(64, 8, 3, 10, 'barbeque meat', '/uploads/food/Jumbo_burger3/DHTrWkwE2rMiMMDQhNsaxWl2EZQYo5BWU4mES6SZ.png', '50', '1', '50', '2022-07-14 11:33:12', '2022-07-14 11:33:12'),
(65, 8, 3, 10, 'sliced meat with cheese and sauce', '/uploads/food/Jumbo_burger3/YuZdM7jCC0Y5iPyRUlrc9NwBN0n5z0bxwjTh8BAd.png', '70', '1', '70', '2022-07-14 11:33:12', '2022-07-14 11:33:12'),
(66, 8, 3, 10, 'Chuck steak', '/uploads/food/Jumbo_burger3/mbeMVtqFIbTR7rRwvk9273FyU7AS34j37sEyDZC9.png', '80', '1', '80', '2022-07-14 11:33:12', '2022-07-14 11:33:12'),
(67, 8, 3, 10, 'slice sauces', '/uploads/food/Jumbo_burger3/kR0QETqOS48h8cTJ9leoFnmDL4Yu2ciN5VhJfA6U.png', '25', '1', '25', '2022-07-14 11:33:12', '2022-07-14 11:33:12'),
(68, 9, 3, 11, 'cheese', '/uploads/food/Jumbo_burger3/ADjSNQ1BUYbaXujHGHsi3MUmU8FY4eXNjwbhFaWP.png', '10', '1', '10', '2022-07-14 11:34:06', '2022-07-14 11:34:06'),
(69, 9, 3, 11, 'egg', '/uploads/food/Jumbo_burger3/Y6Kv5uZosuIkOd5OH8oTiAgx2zVKukXSRVo543zF.png', '20', '2', '40', '2022-07-14 11:34:06', '2022-07-14 11:34:06'),
(70, 9, 3, 11, 'Chuck steak', '/uploads/food/Jumbo_burger3/mbeMVtqFIbTR7rRwvk9273FyU7AS34j37sEyDZC9.png', '80', '1', '80', '2022-07-14 11:34:06', '2022-07-14 11:34:06'),
(71, 9, 3, 11, 'slice sauces', '/uploads/food/Jumbo_burger3/kR0QETqOS48h8cTJ9leoFnmDL4Yu2ciN5VhJfA6U.png', '25', '1', '25', '2022-07-14 11:34:06', '2022-07-14 11:34:06'),
(72, 9, 3, 11, 'sliced cheese', '/uploads/food/Jumbo_burger3/lS0ptWbSrTKTEYy3IYwzSB2YqtBXvl2Tlzn0275g.png', '15', '1', '15', '2022-07-14 11:34:06', '2022-07-14 11:34:06'),
(73, 10, 3, 12, 'cheese', '/uploads/food/Jumbo_burger3/ADjSNQ1BUYbaXujHGHsi3MUmU8FY4eXNjwbhFaWP.png', '10', '1', '10', '2022-07-14 11:35:10', '2022-07-14 11:35:10'),
(74, 10, 3, 12, 'salad', '/uploads/food/Jumbo_burger3/OeZtEHAeF0kM48alLJBLcTrZYgBonBeW4rVTzapb.png', '5', '1', '5', '2022-07-14 11:35:10', '2022-07-14 11:35:10'),
(75, 10, 3, 12, 'egg', '/uploads/food/Jumbo_burger3/Y6Kv5uZosuIkOd5OH8oTiAgx2zVKukXSRVo543zF.png', '20', '1', '20', '2022-07-14 11:35:10', '2022-07-14 11:35:10'),
(76, 10, 3, 12, 'barbeque meat', '/uploads/food/Jumbo_burger3/DHTrWkwE2rMiMMDQhNsaxWl2EZQYo5BWU4mES6SZ.png', '50', '1', '50', '2022-07-14 11:35:10', '2022-07-14 11:35:10'),
(77, 10, 3, 12, 'sliced meat with cheese and sauce', '/uploads/food/Jumbo_burger3/YuZdM7jCC0Y5iPyRUlrc9NwBN0n5z0bxwjTh8BAd.png', '70', '1', '70', '2022-07-14 11:35:10', '2022-07-14 11:35:10'),
(78, 10, 3, 12, 'Chuck steak', '/uploads/food/Jumbo_burger3/mbeMVtqFIbTR7rRwvk9273FyU7AS34j37sEyDZC9.png', '80', '1', '80', '2022-07-14 11:35:10', '2022-07-14 11:35:10'),
(79, 11, 3, 13, 'cheese', '/uploads/food/Jumbo_burger3/ADjSNQ1BUYbaXujHGHsi3MUmU8FY4eXNjwbhFaWP.png', '10', '1', '10', '2022-07-14 11:37:08', '2022-07-14 11:37:08'),
(80, 11, 3, 13, 'salad', '/uploads/food/Jumbo_burger3/OeZtEHAeF0kM48alLJBLcTrZYgBonBeW4rVTzapb.png', '5', '1', '5', '2022-07-14 11:37:08', '2022-07-14 11:37:08'),
(81, 11, 3, 13, 'egg', '/uploads/food/Jumbo_burger3/Y6Kv5uZosuIkOd5OH8oTiAgx2zVKukXSRVo543zF.png', '20', '1', '20', '2022-07-14 11:37:08', '2022-07-14 11:37:08'),
(82, 11, 3, 13, 'barbeque meat', '/uploads/food/Jumbo_burger3/DHTrWkwE2rMiMMDQhNsaxWl2EZQYo5BWU4mES6SZ.png', '50', '1', '50', '2022-07-14 11:37:08', '2022-07-14 11:37:08'),
(83, 11, 3, 13, 'sliced meat with cheese and sauce', '/uploads/food/Jumbo_burger3/YuZdM7jCC0Y5iPyRUlrc9NwBN0n5z0bxwjTh8BAd.png', '70', '2', '140', '2022-07-14 11:37:08', '2022-07-14 11:37:08'),
(84, 11, 3, 13, 'Chuck steak', '/uploads/food/Jumbo_burger3/mbeMVtqFIbTR7rRwvk9273FyU7AS34j37sEyDZC9.png', '80', '1', '80', '2022-07-14 11:37:08', '2022-07-14 11:37:08'),
(85, 11, 3, 13, 'sliced cheese', '/uploads/food/Jumbo_burger3/lS0ptWbSrTKTEYy3IYwzSB2YqtBXvl2Tlzn0275g.png', '15', '4', '60', '2022-07-14 11:37:08', '2022-07-14 11:37:08'),
(86, 11, 3, 13, 'slice sauces', '/uploads/food/Jumbo_burger3/kR0QETqOS48h8cTJ9leoFnmDL4Yu2ciN5VhJfA6U.png', '25', '4', '100', '2022-07-14 11:37:08', '2022-07-14 11:37:08'),
(87, 11, 3, 13, 'masala salad', '/uploads/food/Jumbo_burger3/DZUoELquTAIQ2swzPmYW9S7W0jsT8Ak8f2lI1Wsl.png', '30', '4', '120', '2022-07-14 11:37:08', '2022-07-14 11:37:08'),
(88, 11, 3, 13, 'grilled meat', '/uploads/food/Jumbo_burger3/ISQ2ockNpaxGG2AlKS67JW4RlHO51LOe7z5dVCL8.png', '80', '4', '320', '2022-07-14 11:37:08', '2022-07-14 11:37:08'),
(89, 12, 1, 14, 'mayonaise', '/uploads/food/Mega_burger1/ev4IRKJe2o3l2KS7QtUeKgKi7e6tF5dqNmqOaxMr.png', '10', '3', '30', '2022-07-14 11:38:59', '2022-07-14 11:38:59'),
(90, 12, 1, 14, 'cheese', '/uploads/food/Mega_burger1/5fQ2bJgkjMnggW1Zt60fClSZ5tuZ00vUobNzhyK6.png', '15', '3', '45', '2022-07-14 11:38:59', '2022-07-14 11:38:59'),
(91, 12, 1, 14, 'meat', '/uploads/food/Mega_burger1/xyHFph0a1TwkXvAR9MFPM603z3neTbsopHxzL6Wh.png', '35', '2', '70', '2022-07-14 11:38:59', '2022-07-14 11:38:59'),
(92, 12, 1, 14, 'onion', '/uploads/food/Mega_burger1/6Kx4ID4PJU49I3y1DL6J2sjvVDXFcro1Hw7BArKr.png', '5', '1', '5', '2022-07-14 11:38:59', '2022-07-14 11:38:59'),
(93, 12, 3, 15, 'barbeque meat', '/uploads/food/Jumbo_burger3/DHTrWkwE2rMiMMDQhNsaxWl2EZQYo5BWU4mES6SZ.png', '50', '1', '50', '2022-07-14 11:38:59', '2022-07-14 11:38:59'),
(94, 12, 3, 15, 'cheese', '/uploads/food/Jumbo_burger3/ADjSNQ1BUYbaXujHGHsi3MUmU8FY4eXNjwbhFaWP.png', '10', '1', '10', '2022-07-14 11:38:59', '2022-07-14 11:38:59'),
(95, 12, 3, 15, 'salad', '/uploads/food/Jumbo_burger3/OeZtEHAeF0kM48alLJBLcTrZYgBonBeW4rVTzapb.png', '5', '1', '5', '2022-07-14 11:38:59', '2022-07-14 11:38:59'),
(96, 12, 3, 15, 'egg', '/uploads/food/Jumbo_burger3/Y6Kv5uZosuIkOd5OH8oTiAgx2zVKukXSRVo543zF.png', '20', '1', '20', '2022-07-14 11:38:59', '2022-07-14 11:38:59'),
(97, 12, 3, 15, 'meat with cheese', '/uploads/food/Jumbo_burger3/lV6bbpEOfCFWqCh5NLvkVozXenDb9aHRTYJK1Pdx.png', '60', '1', '60', '2022-07-14 11:38:59', '2022-07-14 11:38:59'),
(98, 12, 3, 15, 'Chuck steak', '/uploads/food/Jumbo_burger3/mbeMVtqFIbTR7rRwvk9273FyU7AS34j37sEyDZC9.png', '80', '1', '80', '2022-07-14 11:38:59', '2022-07-14 11:38:59'),
(99, 12, 3, 15, 'sliced meat with cheese and sauce', '/uploads/food/Jumbo_burger3/YuZdM7jCC0Y5iPyRUlrc9NwBN0n5z0bxwjTh8BAd.png', '70', '1', '70', '2022-07-14 11:38:59', '2022-07-14 11:38:59'),
(100, 12, 3, 15, 'slice sauces', '/uploads/food/Jumbo_burger3/kR0QETqOS48h8cTJ9leoFnmDL4Yu2ciN5VhJfA6U.png', '25', '1', '25', '2022-07-14 11:38:59', '2022-07-14 11:38:59'),
(101, 12, 3, 15, 'masala salad', '/uploads/food/Jumbo_burger3/DZUoELquTAIQ2swzPmYW9S7W0jsT8Ak8f2lI1Wsl.png', '30', '1', '30', '2022-07-14 11:38:59', '2022-07-14 11:38:59'),
(102, 12, 3, 15, 'grilled meat', '/uploads/food/Jumbo_burger3/ISQ2ockNpaxGG2AlKS67JW4RlHO51LOe7z5dVCL8.png', '80', '1', '80', '2022-07-14 11:38:59', '2022-07-14 11:38:59'),
(103, 13, 3, 16, 'cheese', '/uploads/food/Jumbo_burger3/ADjSNQ1BUYbaXujHGHsi3MUmU8FY4eXNjwbhFaWP.png', '10', '1', '10', '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(104, 13, 3, 16, 'salad', '/uploads/food/Jumbo_burger3/OeZtEHAeF0kM48alLJBLcTrZYgBonBeW4rVTzapb.png', '5', '1', '5', '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(105, 13, 3, 16, 'barbeque meat', '/uploads/food/Jumbo_burger3/DHTrWkwE2rMiMMDQhNsaxWl2EZQYo5BWU4mES6SZ.png', '50', '1', '50', '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(106, 13, 3, 16, 'egg', '/uploads/food/Jumbo_burger3/Y6Kv5uZosuIkOd5OH8oTiAgx2zVKukXSRVo543zF.png', '20', '1', '20', '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(107, 13, 3, 16, 'meat with cheese', '/uploads/food/Jumbo_burger3/lV6bbpEOfCFWqCh5NLvkVozXenDb9aHRTYJK1Pdx.png', '60', '1', '60', '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(108, 13, 3, 16, 'mutton salad', '/uploads/food/Jumbo_burger3/uMN5is3ny1BBk5gsXc8FmOnRGqoFybNBMHlmZaqd.png', '20', '1', '20', '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(109, 13, 3, 16, 'sliced meat with cheese and sauce', '/uploads/food/Jumbo_burger3/YuZdM7jCC0Y5iPyRUlrc9NwBN0n5z0bxwjTh8BAd.png', '70', '1', '70', '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(110, 13, 1, 17, 'mayonaise', '/uploads/food/Mega_burger1/ev4IRKJe2o3l2KS7QtUeKgKi7e6tF5dqNmqOaxMr.png', '10', '3', '30', '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(111, 13, 1, 17, 'meat', '/uploads/food/Mega_burger1/xyHFph0a1TwkXvAR9MFPM603z3neTbsopHxzL6Wh.png', '35', '2', '70', '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(112, 13, 1, 17, 'cheese', '/uploads/food/Mega_burger1/5fQ2bJgkjMnggW1Zt60fClSZ5tuZ00vUobNzhyK6.png', '15', '2', '30', '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(113, 13, 1, 17, 'onion', '/uploads/food/Mega_burger1/6Kx4ID4PJU49I3y1DL6J2sjvVDXFcro1Hw7BArKr.png', '5', '1', '5', '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(114, 13, 2, 18, 'mayonaise', '/uploads/food/subway_sandwitch2/sEorWbffJNbZOYVf4PZxCrtCJrnUcx4rOFPzickk.png', '13', '2', '26', '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(115, 13, 2, 18, 'cheese', '/uploads/food/subway_sandwitch2/SxYa3mNifhTOmQvmH03f9K5eJljP1qYFrPN25Tot.png', '10', '2', '20', '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(116, 13, 2, 18, 'lettuce', '/uploads/food/subway_sandwitch2/J27C6DmNnwePBTMb5JwdVScFLh8oBNLC9OMoNtCW.png', '5', '2', '10', '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(117, 13, 2, 18, 'meat', '/uploads/food/subway_sandwitch2/yYji8XcagHFSFZ2xwbhy3ZIb5jnOpftPPCyb4luI.png', '35', '1', '35', '2022-07-14 12:54:07', '2022-07-14 12:54:07'),
(118, 14, 2, 19, 'lettuce', '/uploads/food/subway_sandwitch2/J27C6DmNnwePBTMb5JwdVScFLh8oBNLC9OMoNtCW.png', '5', '1', '5', '2022-07-14 12:56:33', '2022-07-14 12:56:33'),
(119, 14, 2, 19, 'cheese', '/uploads/food/subway_sandwitch2/SxYa3mNifhTOmQvmH03f9K5eJljP1qYFrPN25Tot.png', '10', '1', '10', '2022-07-14 12:56:33', '2022-07-14 12:56:33'),
(120, 14, 2, 19, 'meat', '/uploads/food/subway_sandwitch2/yYji8XcagHFSFZ2xwbhy3ZIb5jnOpftPPCyb4luI.png', '35', '1', '35', '2022-07-14 12:56:33', '2022-07-14 12:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 6,
  `telegram_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'avatar.png',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_name`, `role_id`, `telegram_id`, `telegram_name`, `mobile_number`, `photo`, `email`, `email_verified_at`, `password`, `slug`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'super', 'admin', 'admin', 1, '812239513', NULL, '01646343015', 'avatar.png', 'admin@gmail.com', NULL, '$2y$10$B6YoC09SoaIZPXP5SmVPPuRZKwl48uu5X18Hz/CP1tWuL7CnEJ7A2', NULL, 1, NULL, '2022-07-13 12:14:16', '2022-07-13 12:14:16'),
(2, 'customer', 'panel', 'customer', 2, '812239513', NULL, '016434276014', 'avatar.png', 'customer@gmail.com', NULL, '$2y$10$5V/3KvmMjdymc2C5fLcijea.i5yGglC2Crtk5zCjBEP03qLgd4S/6', NULL, 1, NULL, '2022-07-13 12:14:16', '2022-07-13 12:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_serial` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `name`, `role_serial`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, '2022-07-13 12:14:16', '2022-07-13 12:14:16'),
(2, 'customer', 2, '2022-07-13 12:14:16', '2022-07-13 12:14:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food_manus`
--
ALTER TABLE `food_manus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_booked_tables`
--
ALTER TABLE `order_booked_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_ingredients`
--
ALTER TABLE `order_ingredients`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `users_mobile_number_unique` (`mobile_number`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_manus`
--
ALTER TABLE `food_manus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_booked_tables`
--
ALTER TABLE `order_booked_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_ingredients`
--
ALTER TABLE `order_ingredients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
