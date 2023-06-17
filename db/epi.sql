-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 05:38 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epi`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2023_04_25_061018_add_fields_to_users', 1),
(13, '2023_04_25_065117_create_permission_tables', 1),
(14, '2023_04_25_065645_create_upozilla_stock_models_table', 1),
(15, '2023_05_01_070734_add_user_type_to_users_table', 1),
(16, '2023_05_19_160740_create_union_stocks_table', 1),
(17, '2023_05_19_160858_create_tika_uses_table', 1),
(18, '2023_05_19_160933_create_tika_expecteds_table', 1),
(19, '2023_05_19_162223_create_tikas_table', 1),
(20, '2023_05_19_162232_create_user_tikas_table', 1),
(21, '2023_05_19_162532_create_upozillas_table', 1),
(22, '2023_05_19_162603_create_unions_table', 1),
(23, '2023_05_19_162621_create_wards_table', 1),
(24, '2023_06_16_082607_add_address_info_to_users', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 4),
(2, 'App\\User', 15);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'roles-view', 'web', '2023-05-19 11:51:19', '2023-05-19 11:51:19'),
(2, 'roles-add', 'web', '2023-05-19 11:51:19', '2023-05-19 11:51:19'),
(3, 'roles-edit', 'web', '2023-05-19 11:51:19', '2023-05-19 11:51:19'),
(4, 'roles-delete', 'web', '2023-05-19 11:51:19', '2023-05-19 11:51:19'),
(5, 'tikas-view', 'web', '2023-05-19 11:51:19', '2023-05-19 11:51:19'),
(6, 'tikas-add', 'web', '2023-05-19 11:51:19', '2023-05-19 11:51:19'),
(7, 'tikas-edit', 'web', '2023-05-19 11:51:19', '2023-05-19 11:51:19'),
(8, 'tikas-delete', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(9, 'tika_expecteds-view', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(10, 'tika_expecteds-add', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(11, 'tika_expecteds-edit', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(12, 'tika_expecteds-delete', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(13, 'tika_uses-view', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(14, 'tika_uses-add', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(15, 'tika_uses-edit', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(16, 'tika_uses-delete', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(17, 'unions-view', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(18, 'unions-add', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(19, 'unions-edit', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(20, 'unions-delete', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(21, 'union_stocks-view', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(22, 'union_stocks-add', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(23, 'union_stocks-edit', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(24, 'union_stocks-delete', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(25, 'upozillas-view', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(26, 'upozillas-add', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(27, 'upozillas-edit', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(28, 'upozillas-delete', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(29, 'upozilla_stock_models-view', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(30, 'upozilla_stock_models-add', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(31, 'upozilla_stock_models-edit', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(32, 'upozilla_stock_models-delete', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(33, 'users-view', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(34, 'users-add', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(35, 'users-edit', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(36, 'users-delete', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(37, 'user_tikas-view', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(38, 'user_tikas-add', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(39, 'user_tikas-edit', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(40, 'user_tikas-delete', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(41, 'wards-view', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(42, 'wards-add', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(43, 'wards-edit', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20'),
(44, 'wards-delete', 'web', '2023-05-19 11:51:20', '2023-05-19 11:51:20');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2023-05-19 12:16:21', '2023-05-19 12:16:21'),
(2, 'Ward Admin', 'web', '2023-06-02 23:06:46', '2023-06-02 23:07:46');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(41, 2),
(42, 1),
(42, 2),
(43, 1),
(43, 2),
(44, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tikas`
--

CREATE TABLE `tikas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expired_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tikas`
--

INSERT INTO `tikas` (`id`, `name`, `expired_date`, `created_at`, `updated_at`) VALUES
(2, 'Covid Vaccine 1', '2023-07-14', '2023-06-03 01:00:33', '2023-06-03 01:00:33');

-- --------------------------------------------------------

--
-- Table structure for table `tika_expecteds`
--

CREATE TABLE `tika_expecteds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `upozilla_id` int(11) NOT NULL,
  `union_id` int(11) NOT NULL,
  `ward_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tika_expecteds`
--

INSERT INTO `tika_expecteds` (`id`, `upozilla_id`, `union_id`, `ward_id`, `date`, `user_id`, `added_by`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2023-06-17', 1, 1, '2023-06-16 03:33:44', '2023-06-16 03:33:44'),
(2, 1, 1, 1, '2023-06-23', 2, 1, '2023-06-16 03:35:29', '2023-06-16 03:35:29'),
(3, 1, 1, 1, '2023-06-18', 5, 1, '2023-06-16 03:36:04', '2023-06-16 03:36:04'),
(4, 1, 1, 1, '2023-06-26', 2, 1, '2023-06-16 04:08:22', '2023-06-16 04:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `tika_uses`
--

CREATE TABLE `tika_uses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `upozilla_id` int(11) NOT NULL,
  `union_id` int(11) NOT NULL,
  `ward_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `tika_used` int(11) NOT NULL,
  `tika_damage` int(11) NOT NULL,
  `tika_expired` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unions`
--

CREATE TABLE `unions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unions`
--

INSERT INTO `unions` (`id`, `name`, `added_by`, `created_at`, `updated_at`) VALUES
(1, 'Belkuchi', NULL, NULL, NULL),
(2, 'Chouhali', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `union_stocks`
--

CREATE TABLE `union_stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `upozilla_id` int(11) NOT NULL,
  `union_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `opening_balance` int(11) NOT NULL,
  `current_balance` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upozillas`
--

CREATE TABLE `upozillas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upozillas`
--

INSERT INTO `upozillas` (`id`, `name`, `added_by`, `created_at`, `updated_at`) VALUES
(1, 'Belkuchi', NULL, NULL, NULL),
(2, 'Siddhirganj', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upozilla_stock_models`
--

CREATE TABLE `upozilla_stock_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `upozilla_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `opening_balance` int(11) NOT NULL,
  `current_balance` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `place_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_certificate_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_number` int(11) DEFAULT NULL,
  `user_type` int(11) NOT NULL DEFAULT 4,
  `upozilla_id` int(11) DEFAULT NULL,
  `union_id` int(11) DEFAULT NULL,
  `ward_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `father_name`, `mother_name`, `dob`, `place_of_birth`, `birth_certificate_no`, `father_nid`, `mother_nid`, `mobile_no`, `passport_no`, `gender`, `address`, `registration_date`, `registration_number`, `user_type`, `upozilla_id`, `union_id`, `ward_id`) VALUES
(1, 'Shama', 'shama.ss242@gmail.com', NULL, '$2y$10$SiAHJayK99EpsO/BSaSP6.Ysm2RFsaNAJ5D9VUFme4tmkTNuhotZO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1),
(2, 'user1', 'user1@email.com', NULL, '$2y$10$266h5jRLUtHwtjS4Aj9jB.k/8BIrGLKaUZ6zfUBsskXd4HS5tNIjS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86639, 4, NULL, NULL, NULL),
(3, 'Salsabil', 'salsabil@email.com', NULL, '$2y$10$PxUOE1gGxB9YEkWnEOZO7.0xzBCee/NF1oELMEIf1vY/KnSPZlNQe', NULL, '2023-05-19 12:17:49', '2023-05-19 12:17:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86640, 1, NULL, NULL, NULL),
(4, 'Test Ward', 'testward1@gmail.com', NULL, '$2y$10$HwuCuTLFyoAmbDSiEHUdmeNICqIKchknH02phh3kn4ED66O510lMm', NULL, '2023-06-02 23:07:20', '2023-06-02 23:07:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86641, 1, NULL, NULL, NULL),
(5, 'Ashraful', 'shahid@gmail.com', NULL, '$2y$10$ckrz3252qZZ9RnK8H3O08eclE71a.lf22LFcnV4L3QylqWirExia.', NULL, '2023-06-10 07:59:13', '2023-06-10 07:59:13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86642, 4, NULL, NULL, NULL),
(6, 'Tayeba', 'Suravi@gmail.com', NULL, '$2y$10$JcpKqcd1y2dH0YDmm30KS.pCZoTSdQheqDPxc5/W9xOobMCElm1tC', NULL, '2023-06-10 08:09:45', '2023-06-10 08:09:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86643, 4, NULL, NULL, NULL),
(8, 'Tayeba', 'sumon@gmail.com', NULL, '$2y$10$jGTNtWGFMnqOvLsNMExmzeZiOMjcRMJMo8MD6qrHT6ctt5uJJ92We', NULL, '2023-06-10 08:11:24', '2023-06-10 08:11:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86644, 4, NULL, NULL, NULL),
(10, 'Tayeba', 'tayeba@gmail.com', NULL, '$2y$10$eSiHQbwZM90jTRiIjwwGZeOYN.htYtv1txJZ4nqdnrekAAr.xw2zq', NULL, '2023-06-10 08:14:26', '2023-06-10 08:14:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86647, 4, NULL, NULL, NULL),
(12, 'Taqwa', 'takwa@gmail.com', NULL, '$2y$10$lojbG1Mm5ZKvKTmCkDwM8.k.KIw93PDMjM3heyHB2IGjoIPnqV7C.', NULL, '2023-06-10 08:20:21', '2023-06-10 08:20:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86650, 4, NULL, NULL, NULL),
(13, 'Taimon', 'taimon@gmail.com', NULL, '$2y$10$cjVNesppjTpjDxSJQvFZFOUd7jDfR9w4lKA55iDbb33Rvsc3sSxQq', NULL, '2023-06-10 08:25:38', '2023-06-10 08:25:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86651, 4, NULL, NULL, NULL),
(14, 'Suimaya', 'azidaii@gmail.com', NULL, '$2y$10$z5vuzMwHyfCYjNu5.API2ufIlkQoapVtMqdiKQsLgZpVBGlZW1UFm', NULL, '2023-06-10 08:38:49', '2023-06-10 08:38:49', 'Shahidi', 'Azidai', '2002-09-22', 'Sirajganj', '6432456', '2134356777386', '53245345438', '01711936332', '23412353453456', 'Female', 'Belkuchi', '2023-06-10', 86645, 4, NULL, NULL, NULL),
(15, 'Test', 'Test@gmail.com', NULL, '$2y$10$QOsH7nhcBxa/2vDR9oFkY.P5POLz9dpJlNZDBL0Z2R5QCiqEImeKu', NULL, '2023-06-16 02:43:26', '2023-06-16 02:43:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86646, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_tikas`
--

CREATE TABLE `user_tikas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tika_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `taken_date` date NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_tikas`
--

INSERT INTO `user_tikas` (`id`, `tika_id`, `user_id`, `taken_date`, `added_by`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2023-06-16', 1, '2023-06-16 03:33:44', '2023-06-16 03:33:44'),
(2, 2, 2, '2023-06-16', 1, '2023-06-16 03:35:29', '2023-06-16 03:35:29'),
(3, 2, 5, '2023-06-16', 1, '2023-06-16 03:36:04', '2023-06-16 03:36:04'),
(4, 2, 2, '2023-06-16', 1, '2023-06-16 04:08:22', '2023-06-16 04:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `name`, `added_by`, `created_at`, `updated_at`) VALUES
(1, 'Chala', NULL, NULL, NULL),
(2, 'Chandangati', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tikas`
--
ALTER TABLE `tikas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tika_expecteds`
--
ALTER TABLE `tika_expecteds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tika_uses`
--
ALTER TABLE `tika_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unions`
--
ALTER TABLE `unions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `union_stocks`
--
ALTER TABLE `union_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upozillas`
--
ALTER TABLE `upozillas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upozilla_stock_models`
--
ALTER TABLE `upozilla_stock_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_tikas`
--
ALTER TABLE `user_tikas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tikas`
--
ALTER TABLE `tikas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tika_expecteds`
--
ALTER TABLE `tika_expecteds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tika_uses`
--
ALTER TABLE `tika_uses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unions`
--
ALTER TABLE `unions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `union_stocks`
--
ALTER TABLE `union_stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upozillas`
--
ALTER TABLE `upozillas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upozilla_stock_models`
--
ALTER TABLE `upozilla_stock_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_tikas`
--
ALTER TABLE `user_tikas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
