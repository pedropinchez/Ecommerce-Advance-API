-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 17, 2021 at 09:59 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `advance_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `slug`, `business_id`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Color Upated', 'color-upated', 1, 21, '2021-02-06 11:22:21', '2021-02-20 11:40:44', '2021-02-20 17:40:44'),
(3, 'Display Size', 'display-size', 1, 3, '2021-02-06 05:34:34', '2021-02-19 09:47:58', NULL),
(4, 'Size', 'size-1', 1, 21, '2021-02-06 05:35:07', '2021-02-20 11:40:32', '2021-02-20 17:40:32'),
(5, 'Size', 'size-2', 1, 21, '2021-02-06 05:35:11', '2021-02-20 11:40:36', '2021-02-20 17:40:36'),
(7, 'Size', 'size-4', 1, 21, '2021-02-06 05:39:27', '2021-02-20 11:55:52', '2021-02-20 17:55:52'),
(10, 'Color', 'color-1', 1, 21, '2021-02-06 05:52:56', '2021-02-20 11:55:57', '2021-02-20 17:55:57'),
(13, '4', '4', 1, 2, '2021-02-06 11:33:43', '2021-02-20 11:40:21', '2021-02-20 17:40:21'),
(17, 'test', 'test', 1, 3, '2021-02-06 11:38:43', '2021-02-20 11:40:28', '2021-02-20 17:40:28'),
(18, 'Final Test', 'final-test', 1, 2, '2021-02-06 11:42:16', '2021-02-20 11:56:06', '2021-02-20 17:56:06'),
(20, 'Battery Size', 'battery-size', 1, 20, '2021-02-06 13:05:09', '2021-02-06 13:25:29', NULL),
(21, 'Camera Resulation', 'camera-resulation', 1, 20, '2021-02-07 10:54:23', '2021-02-20 11:41:05', NULL),
(22, 'Memory', 'memory', 1, 22, '2021-02-20 11:58:26', '2021-02-20 11:58:26', NULL),
(23, 'Storage', 'storage', 1, 22, '2021-02-20 12:01:26', '2021-02-20 12:01:26', NULL),
(24, 'Graphics', 'graphics', 1, 22, '2021-02-20 12:03:04', '2021-02-20 12:03:04', NULL),
(25, 'Network & Connectivity', 'network-&-connectivity', 1, 3, '2021-02-20 12:03:46', '2021-02-20 12:03:46', NULL),
(26, 'Operating System', 'operating-system', 1, 3, '2021-02-20 12:04:53', '2021-02-20 12:04:53', NULL),
(27, 'Color', 'color', 1, 3, '2021-02-20 12:06:10', '2021-02-20 12:06:10', NULL),
(30, 'Color', 'color-1', 1, 23, '2021-02-20 12:42:43', '2021-02-20 12:42:43', NULL),
(31, 'Battery Size', 'battery-size-1', 1, 5, '2021-02-21 10:21:18', '2021-02-21 10:21:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attribute_values`
--

CREATE TABLE `attribute_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_values`
--

INSERT INTO `attribute_values` (`id`, `value`, `code`, `attribute_id`, `created_at`, `updated_at`) VALUES
(32, '2000MAH', '2000MAH', 20, '2021-02-06 13:25:54', '2021-02-06 13:25:54'),
(35, 'Photography', '0003', 21, '2021-02-07 10:54:23', '2021-02-07 10:54:23'),
(36, 'High Resolution', '0004', 21, '2021-02-07 10:54:23', '2021-02-07 10:54:23'),
(37, '15.6 Inch', '15.6inch', 3, '2021-02-19 09:47:58', '2021-02-19 09:47:58'),
(38, '14 Inch', '14inch', 3, '2021-02-19 09:47:58', '2021-02-19 09:47:58'),
(39, '11 Inch', '11inch', 3, '2021-02-19 09:47:58', '2021-02-19 09:47:58'),
(40, '14.5 Inch', '14.5inch', 3, '2021-02-19 09:47:58', '2021-02-19 09:47:58'),
(41, '4GB', '4GB', 22, '2021-02-20 11:58:26', '2021-02-20 11:58:26'),
(42, '8GB', '8GB', 22, '2021-02-20 11:58:26', '2021-02-20 11:58:26'),
(43, '16GB', '16GB', 22, '2021-02-20 11:58:26', '2021-02-20 11:58:26'),
(44, '32GB', '32GB', 22, '2021-02-20 11:58:26', '2021-02-20 11:58:26'),
(45, '1TB HDD', '1TB HDD', 23, '2021-02-20 12:01:26', '2021-02-20 12:01:26'),
(46, '500 MB', '500 MB', 23, '2021-02-20 12:01:26', '2021-02-20 12:01:26'),
(47, 'Intel UHD Graphics 600', 'Intel UHD Graphics 600', 24, '2021-02-20 12:03:04', '2021-02-20 12:03:04'),
(48, 'WiFi', 'WiFi', 25, '2021-02-20 12:03:46', '2021-02-20 12:03:46'),
(49, 'Windows', 'Windows', 26, '2021-02-20 12:04:53', '2021-02-20 12:04:53'),
(50, 'Mac', 'Mac', 26, '2021-02-20 12:04:53', '2021-02-20 12:04:53'),
(51, 'Linux', 'Linux', 26, '2021-02-20 12:04:53', '2021-02-20 12:04:53'),
(52, 'Black', 'Black', 27, '2021-02-20 12:06:10', '2021-02-20 12:06:10'),
(53, 'Graphite Grey', 'Graphite Grey', 27, '2021-02-20 12:06:10', '2021-02-20 12:06:10'),
(54, 'Moon White', 'Moon White', 27, '2021-02-20 12:06:10', '2021-02-20 12:06:10'),
(55, 'Phantom Black', 'Phantom Black', 27, '2021-02-20 12:06:10', '2021-02-20 12:06:10'),
(56, 'Platinum Grey', 'Platinum Grey', 27, '2021-02-20 12:06:10', '2021-02-20 12:06:10'),
(59, 'Black', '#000', 30, '2021-02-20 12:42:43', '2021-02-20 12:42:43'),
(60, 'White', '#FFF', 30, '2021-02-20 12:42:43', '2021-02-20 12:42:43'),
(61, '2000 MAH', '2000 MAH', 31, '2021-02-21 10:21:18', '2021-02-21 10:21:18'),
(62, '1000 MAH', '1000 MAH', 31, '2021-02-21 10:21:18', '2021-02-21 10:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `barcode_types`
--

CREATE TABLE `barcode_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barcode_types`
--

INSERT INTO `barcode_types` (`id`, `name`, `code`, `business_id`, `created_at`, `updated_at`) VALUES
(1, 'C39', 'C39', NULL, '2021-02-19 09:07:30', '2021-02-19 09:07:30'),
(2, 'C128', 'C128', NULL, '2021-02-19 09:08:39', '2021-02-19 09:08:39'),
(3, 'EAN-13', 'EAN-13', NULL, '2021-02-19 09:08:39', '2021-02-19 09:08:39'),
(4, 'EAN-8', 'EAN-8', NULL, '2021-02-19 09:08:39', '2021-02-19 09:08:39'),
(5, 'UPC-A', 'UPC-A', NULL, '2021-02-19 09:08:39', '2021-02-19 09:08:39'),
(6, 'UPC-E', 'UPC-E', NULL, '2021-02-19 09:08:39', '2021-02-19 09:08:39'),
(7, 'ITF-14', 'ITF-14', NULL, '2021-02-19 09:08:39', '2021-02-19 09:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `business_id`, `name`, `image`, `banner`, `description`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 1, 'Samsung', 'brand-samsung.png', NULL, 'Smart Phone', 1, NULL, '2020-11-12 12:30:34', '2020-11-12 12:30:34'),
(3, 1, 'Apple', 'brand-apple.png', NULL, 'Apple Brand', 1, NULL, '2020-11-12 14:37:06', '2020-11-12 14:37:06'),
(4, 1, 'HP', 'brand-hp.png', NULL, 'Apple Brand', 1, NULL, '2020-11-12 14:37:07', '2020-11-12 14:37:07'),
(5, 1, 'ASUS', 'brand-asus.png', NULL, 'Asus Brand', 1, NULL, '2020-11-12 14:37:07', '2020-11-12 14:37:07'),
(10, 2, 'Test Brand', 'brand--1612330498.png', 'brand-banner--1612330498.jpg', 'Testing Description', 1, '2021-02-20 11:37:11', '2021-02-02 23:01:28', '2021-02-20 11:37:11'),
(11, 3, 'Test brand', 'brand--1612330393.png', NULL, 'test descrioon', 1, '2021-02-20 11:37:05', '2021-02-02 23:17:19', '2021-02-20 11:37:05'),
(12, 1, 'Sony', 'brand--1613843682.jpg', 'brand-banner--1613843682.png', 'Sony', 1, NULL, '2021-02-20 11:54:42', '2021-02-20 11:54:42'),
(13, 1, 'Un Categorized', NULL, NULL, 'Un Categorized', 1, NULL, '2021-02-20 12:45:24', '2021-02-20 12:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Business Identification No',
  `currency_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date DEFAULT NULL,
  `tax_number_1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_label_1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_number_2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_label_2` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_profit_percent` double(5,2) NOT NULL DEFAULT '0.00',
  `owner_id` bigint(20) UNSIGNED DEFAULT NULL,
  `time_zone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Asia/Kolkata',
  `fy_start_month` tinyint(4) NOT NULL DEFAULT '1',
  `accounting_method` enum('fifo','lifo','avco') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fifo',
  `default_sales_discount` decimal(5,2) DEFAULT '0.00',
  `sell_price_tax` enum('includes','excludes') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'includes',
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku_prefix` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_tooltip` tinyint(1) NOT NULL DEFAULT '1',
  `enable_referrel_system` tinyint(1) NOT NULL DEFAULT '0',
  `is_main_shop` tinyint(1) NOT NULL DEFAULT '0',
  `shipping_charge_city` float NOT NULL DEFAULT '0',
  `shipping_charge_local` float DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `name`, `bin`, `currency_id`, `start_date`, `tax_number_1`, `tax_label_1`, `tax_number_2`, `tax_label_2`, `default_profit_percent`, `owner_id`, `time_zone`, `fy_start_month`, `accounting_method`, `default_sales_discount`, `sell_price_tax`, `logo`, `banner`, `sku_prefix`, `enable_tooltip`, `enable_referrel_system`, `is_main_shop`, `shipping_charge_city`, `shipping_charge_local`, `created_at`, `updated_at`) VALUES
(1, 'Maccaf Mall', 'Maccaf12019212', 1, '2020-11-01', '121212', 'Tax', '121212', 'Tax2', 10.00, 1, 'Asia/Kolkata', 1, 'fifo', '0.00', 'includes', 'vendor-maccaf.png', 'vendor-maccaf-banner.png', NULL, 1, 0, 1, 50, 80, '2020-11-04 18:32:32', '2020-11-04 18:32:32'),
(2, 'Bata Store', 'Bata121209', 1, '2020-11-01', '121212', 'Tax', '121212', 'Tax2', 10.00, 1, 'Asia/Kolkata', 1, 'fifo', '0.00', 'includes', 'vendor-bata.png', 'vendor-bata-banner.png', NULL, 1, 0, 0, 0, 0, '2020-11-04 18:32:32', '2020-11-04 18:32:32'),
(3, 'Shopno Bazaar', 'Shopnobazar', 1, '2020-11-01', '121212', 'Tax', '121212', 'Tax2', 10.00, 1, 'Asia/Kolkata', 1, 'fifo', '0.00', 'includes', 'vendor-shopno.jpg', 'vendor-shopno-banner.png', NULL, 1, 0, 0, 0, 0, '2020-11-04 18:32:32', '2020-11-04 18:32:32'),
(4, 'Rahim Store', 'rahimstore', 1, '2020-11-01', '121212', 'Tax', '121212', 'Tax2', 10.00, 1, 'Asia/Kolkata', 1, 'fifo', '0.00', 'includes', 'vendor-rahimstore.png', 'vendor-rahim-banner.png', NULL, 1, 0, 0, 0, 0, '2020-11-04 18:32:32', '2020-11-04 18:32:32'),
(5, 'Akash Shop', NULL, 1, NULL, NULL, 'Tax', NULL, NULL, 0.00, 15, 'Asia/Kolkata', 1, 'fifo', NULL, 'includes', NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-02-07 05:28:08', '2021-02-07 05:28:08'),
(6, 'Akash Shop', NULL, 1, NULL, NULL, 'Tax', NULL, NULL, 0.00, 16, 'Asia/Kolkata', 1, 'fifo', '0.00', 'includes', NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-02-07 05:39:20', '2021-02-07 05:39:20'),
(7, 'Akash Shop', NULL, 1, NULL, NULL, 'Tax', NULL, NULL, 0.00, 18, 'Asia/Kolkata', 1, 'fifo', '0.00', 'includes', NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-02-07 05:44:24', '2021-02-07 05:44:24'),
(9, 'Akash Shop', NULL, 1, NULL, NULL, 'Tax', NULL, NULL, 0.00, 25, 'Asia/Kolkata', 1, 'fifo', '0.00', 'includes', NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-02-10 00:05:31', '2021-02-10 00:05:31'),
(10, 'Akash Shop', NULL, 1, NULL, NULL, 'Tax', NULL, NULL, 0.00, 26, 'Asia/Kolkata', 1, 'fifo', '0.00', 'includes', NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-02-10 00:14:43', '2021-02-10 00:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `business_locations`
--

CREATE TABLE `business_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` text COLLATE utf8mb4_unicode_ci,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` char(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternate_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_locations`
--

INSERT INTO `business_locations` (`id`, `business_id`, `name`, `landmark`, `country`, `state`, `city`, `zip_code`, `mobile`, `alternate_number`, `email`, `website`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Maccaf Main Store', '87/Ka Mohakhali', 'Bangladesh', 'Dhaka', 'Dhaka', '1213', '01951233084', '01951233081', 'maccaf@gmail.com', 'maccaf.com', NULL, '2021-02-06 08:13:56', '2021-02-06 08:13:56'),
(2, 2, 'Bata Main Store', '87/Ka Mohakhali', 'Bangladesh', 'Dhaka', 'Dhaka', '1213', '01951233084', '01951233081', 'bata@gmail.com', 'test.com', NULL, '2021-02-06 08:13:56', '2021-02-06 08:13:56'),
(3, 4, 'Rahim Main Store', '87/Ka Mohakhali', 'Bangladesh', 'Dhaka', 'Dhaka', '1213', '01951233084', '01951233081', 'rohim@gmail.com', 'rahimstore.com', NULL, '2021-02-06 08:13:56', '2021-02-06 08:13:56'),
(4, 5, 'Akash Shop', NULL, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, 'akash14@mail.com', NULL, NULL, '2021-02-07 05:28:08', '2021-02-07 05:28:08'),
(5, 6, 'Akash Shop', NULL, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, 'akash90@mail.com', NULL, NULL, '2021-02-07 05:39:20', '2021-02-07 05:39:20'),
(6, 7, 'Akash Shop', NULL, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, 'akash111@mail.com', NULL, NULL, '2021-02-07 05:44:24', '2021-02-07 05:44:24'),
(8, 9, 'Akash Shop', NULL, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, 'vendor41@mail.com', NULL, NULL, '2021-02-10 00:05:31', '2021-02-10 00:05:31'),
(9, 10, 'Akash Shop', NULL, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, 'vendor42@mail.com', NULL, NULL, '2021-02-10 00:14:43', '2021-02-10 00:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `short_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'If Parent is null, it is the parent',
  `is_visible_homepage` tinyint(1) NOT NULL DEFAULT '0',
  `priority` int(11) NOT NULL DEFAULT '10',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `short_description`, `description`, `business_id`, `short_code`, `image`, `banner`, `parent_id`, `is_visible_homepage`, `priority`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Electronics', 'Your Most Favorite Electronic Products...', NULL, 1, 'electronics', 'category-electronics-1612337863.png', 'category-banner-electronics-1612337862.png', NULL, 1, 1, 1, NULL, '2020-11-12 14:30:56', '2021-02-03 01:37:43'),
(3, 'Laptop', NULL, NULL, 1, 'laptop', 'category-laptop.png', 'category-banner-laptop-1612337875.jpg', 2, 0, 10, 1, NULL, '2020-11-12 14:31:26', '2021-02-03 01:37:55'),
(4, 'SmartPhone', 'Your Most Favorite Smartphones here...', 'Your Most Favorite Smartphones here...', 1, 'smartphone', NULL, NULL, 2, 0, 2, 1, NULL, '2020-11-12 14:31:51', '2020-11-12 14:31:51'),
(5, 'Samsung', NULL, NULL, 1, 'samsung', 'category-samsung.png', 'category-banner-samsung-1612337838.png', 4, 0, 10, 1, NULL, '2020-11-12 14:32:29', '2021-02-03 01:37:18'),
(6, 'Apple', NULL, NULL, 1, 'apple', NULL, NULL, 4, 0, 10, 1, NULL, '2020-11-12 14:32:44', '2020-11-12 14:32:44'),
(7, 'Camera', NULL, NULL, 1, 'camera', 'category-camera-1612337826.png', 'category-banner-camera-1612337826.jpg', 2, 0, 10, 1, NULL, '2020-11-12 14:33:07', '2021-02-03 01:37:06'),
(8, 'Fashion', 'Your Fashion Store', '<p>Your Fashion Store</p>', 1, 'fashion', 'category-fashion-1612337382.jpg', NULL, NULL, 1, 1, 1, NULL, '2020-11-12 14:33:07', '2021-02-03 01:29:42'),
(9, 'Gents', NULL, NULL, 1, 'gents', 'category-shirt.png', NULL, 8, 0, 10, 1, NULL, '2020-11-12 14:33:07', '2021-02-20 12:08:42'),
(19, 'Baby Corner', 'Test', NULL, 1, 'baby-corner', 'category-1607804161.png', NULL, 8, 1, 1, 1, NULL, '2020-12-12 14:16:01', '2020-12-12 14:16:01'),
(20, 'Sony Camera', 'Discover a wide range of Digital Cameras including Canon, Nikon, Sony, Samsung at best price in', '<p>Discover a wide range of Digital Cameras including Canon, Nikon, Sony, Samsung at best price in Bangladesh. Shop online or visit your nearest Star Tech</p>', 4, 'sony-camera', 'category-sony-camera-1612337279.png', NULL, 7, 1, 1, 1, NULL, '2020-12-12 14:21:41', '2021-02-03 01:27:59'),
(21, 'Test Category', 'Testing now', '<p>Testing </p>', 3, '409', 'category-409-1612337359.png', NULL, 4, 1, 4, 1, '2021-02-20 17:51:53', '2021-02-03 01:29:19', '2021-02-03 01:29:19'),
(22, 'HP Laptop', 'Welcome to HP Laptop', '<p>Welcome to HP Laptop</p>', 1, 'HP-laptop', 'category-HP-laptop-1613842648.webp', NULL, 3, 1, 1, 1, NULL, '2021-02-19 09:43:02', '2021-02-20 11:37:28'),
(23, 'Gents Shirt', NULL, NULL, 1, 'gents-shirt', 'category-gents-shirt-1613846181.webp', NULL, 9, 1, 1, 1, NULL, '2021-02-20 12:36:21', '2021-02-20 12:36:21'),
(24, 'Un Categorized', NULL, NULL, 1, 'un-categorized', NULL, NULL, NULL, 1, 1, 1, NULL, '2021-02-20 12:49:13', '2021-02-20 12:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `coupon_type_id` bigint(20) UNSIGNED NOT NULL,
  `amount_type` enum('percentage','numeric') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'numeric',
  `coupon_amount` double(8,2) UNSIGNED NOT NULL,
  `min_amount` double(8,2) UNSIGNED NOT NULL DEFAULT '100.00',
  `max_amount` double(8,2) UNSIGNED NOT NULL DEFAULT '1.00',
  `coupon_start_date` date DEFAULT NULL,
  `coupon_expiry_date` date DEFAULT NULL,
  `is_free_shiping` tinyint(1) NOT NULL DEFAULT '0',
  `usage_limit` int(11) NOT NULL DEFAULT '1' COMMENT '-1 = Unlimited',
  `usage_count` int(11) NOT NULL DEFAULT '0',
  `usage_limit_per_user` int(11) NOT NULL DEFAULT '1' COMMENT '-1 = Unlimited',
  `is_individual_use` tinyint(1) NOT NULL DEFAULT '0',
  `exclude_sale_items` text COLLATE utf8mb4_unicode_ci,
  `product_ids` text COLLATE utf8mb4_unicode_ci,
  `exclude_product_ids` text COLLATE utf8mb4_unicode_ci,
  `product_categories` text COLLATE utf8mb4_unicode_ci,
  `exclude_product_categories` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `description`, `image`, `business_id`, `coupon_type_id`, `amount_type`, `coupon_amount`, `min_amount`, `max_amount`, `coupon_start_date`, `coupon_expiry_date`, `is_free_shiping`, `usage_limit`, `usage_count`, `usage_limit_per_user`, `is_individual_use`, `exclude_sale_items`, `product_ids`, `exclude_product_ids`, `product_categories`, `exclude_product_categories`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Feb21', 'Feb 21', NULL, 1, 1, 'numeric', 100.00, 0.00, 0.00, '2021-01-01', '2021-04-01', 0, 100, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-07 22:41:47', '2021-02-07 22:41:47'),
(3, 'CouponAk', 'CouponAk', NULL, 1, 1, 'percentage', 10.00, 0.00, 0.00, '2021-01-01', '2021-04-30', 1, 100, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-07 22:41:59', '2021-02-07 22:41:59'),
(5, 'Feb21', 'Feb 21', NULL, 1, 1, 'numeric', 100.00, 0.00, 0.00, '2021-01-01', '2021-04-01', 0, 100, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-07 23:19:19', '2021-02-07 23:19:19'),
(6, 'Feb2112', 'Feb 21', NULL, 1, 1, 'numeric', 100.00, 0.00, 0.00, '2021-01-01', '2021-04-01', 0, 100, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-07 23:23:33', '2021-02-07 23:23:33'),
(7, 'Feb New', 'Feb 21', NULL, 1, 1, 'numeric', 100.00, 0.00, 0.00, '2021-01-01', '2021-04-01', 0, 100, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-07 23:25:45', '2021-02-07 23:25:45'),
(8, 'Bijay21', '<p>Bijay 21</p>', 'coupon--1612943819.png', 1, 2, 'percentage', 8.00, 100.00, 1200.00, '2021-02-01', '2021-03-31', 0, 0, 0, 20, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-10 01:20:07', '2021-02-10 01:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_types`
--

CREATE TABLE `coupon_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupon_types`
--

INSERT INTO `coupon_types` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Cart Coupon Discount', 'cart', '2021-02-07 22:15:01', '2021-02-07 22:15:01'),
(2, 'Order Coupon Discount', 'order', '2021-02-07 22:15:01', '2021-02-07 22:15:01'),
(3, 'Product Coupon Discount', 'product', '2021-02-07 22:15:01', '2021-02-07 22:15:01'),
(4, 'Category Coupon Discount', 'category', '2021-02-07 22:15:01', '2021-02-07 22:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thousand_separator` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `decimal_separator` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `country`, `currency`, `code`, `symbol`, `thousand_separator`, `decimal_separator`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh', 'BDT', 'BDT', 'Taka', ',', ',', '2020-11-04 12:17:07', '2020-11-04 12:17:07'),
(2, 'USA', 'USD', 'USD', 'Dollar', ',', ',', '2020-11-04 12:17:07', '2020-11-04 12:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `bin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'BIN = Business Identification Number',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landmark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternate_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_term_number` bigint(20) UNSIGNED DEFAULT NULL,
  `pay_term_type` enum('days','months') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_groups`
--

CREATE TABLE `customer_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `discount_types`
--

CREATE TABLE `discount_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discount_types`
--

INSERT INTO `discount_types` (`id`, `business_id`, `name`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'No Discount', 1, NULL, '2021-01-13 10:24:33', '2021-01-13 10:24:33');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gift_cards`
--

CREATE TABLE `gift_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_value_for` double(8,2) NOT NULL DEFAULT '0.00' COMMENT 'What Price value it will take from customer',
  `change_price_value` double(8,2) NOT NULL DEFAULT '0.00' COMMENT 'What Price will return customer as card value',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=>active, 0=>inactive',
  `description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gift_cards`
--

INSERT INTO `gift_cards` (`id`, `title`, `slug`, `image`, `price_value_for`, `change_price_value`, `status`, `description`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 'Boishakhi Card 2', 'boishakhi-card', NULL, 12000.00, 2300.00, 1, 'Simple Description 2', '2021-02-10 04:23:48', 1, NULL, NULL, '2021-02-10 03:57:33', '2021-02-10 04:23:48'),
(2, 'Boishakhi Card', 'boishakhi-card', 'giftCard--1613337422.png', 5000.00, 6500.00, 1, '<p>Simple Description</p>', NULL, 1, NULL, NULL, '2021-02-10 04:24:08', '2021-02-14 15:17:02'),
(3, 'Test Card 1', 'test-card-1', 'giftcards--1613337496.jpg', 12.00, 1212.00, 1, '<p>12</p>', NULL, 1, NULL, NULL, '2021-02-14 15:18:16', '2021-02-14 15:18:16');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_no` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Order ID',
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `total_amount` double(8,2) UNSIGNED NOT NULL DEFAULT '0.00',
  `total_discount` double(8,2) UNSIGNED NOT NULL DEFAULT '0.00',
  `grand_total` double(8,2) UNSIGNED NOT NULL DEFAULT '0.00',
  `paid_total` double(8,2) UNSIGNED NOT NULL DEFAULT '0.00',
  `status` enum('due','paid','delivered','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'due',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `invoice_no`, `transaction_id`, `business_id`, `total_amount`, `total_discount`, `grand_total`, `paid_total`, `status`, `created_by`, `updated_by`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1, 1680.00, 0.00, 1680.00, 0.00, 'due', 1, NULL, '2021-02-05', '2021-02-04 21:51:43', '2021-02-04 21:51:43'),
(2, 2, 3, 1, 1680.00, 0.00, 1680.00, 0.00, 'due', 1, NULL, '2021-02-05', '2021-02-04 21:59:09', '2021-02-04 21:59:09'),
(3, 3, 3, 1, 1680.00, 0.00, 1680.00, 0.00, 'due', 1, NULL, '2021-02-05', '2021-02-04 22:00:51', '2021-02-04 22:00:51'),
(4, 4, 3, 4, 640.00, 0.00, 640.00, 0.00, 'due', 1, NULL, '2021-02-05', '2021-02-04 22:00:51', '2021-02-04 22:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_items`
--

CREATE TABLE `invoice_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Order ID',
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_sell_line_id` bigint(20) UNSIGNED NOT NULL,
  `qty` double(8,2) UNSIGNED NOT NULL DEFAULT '1.00',
  `amount` double(8,2) UNSIGNED NOT NULL DEFAULT '0.00',
  `discount_amount` double(8,2) UNSIGNED NOT NULL DEFAULT '0.00',
  `grand_total` double(8,2) UNSIGNED NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_items`
--

INSERT INTO `invoice_items` (`id`, `invoice_id`, `transaction_id`, `business_id`, `item_id`, `transaction_sell_line_id`, `qty`, `amount`, `discount_amount`, `grand_total`, `created_at`, `updated_at`) VALUES
(1, 3, 3, 1, 1, 3, 1.00, 120.00, 0.00, 120.00, '2021-02-04 22:00:51', '2021-02-04 22:00:51'),
(2, 3, 3, 1, 4, 5, 3.00, 520.00, 0.00, 1560.00, '2021-02-04 22:00:51', '2021-02-04 22:00:51'),
(3, 4, 3, 4, 9, 4, 2.00, 320.00, 0.00, 640.00, '2021-02-04 22:00:51', '2021-02-04 22:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_statuses`
--

CREATE TABLE `invoice_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `order_create_date` datetime NOT NULL,
  `confirmed_by_vendor_date` datetime DEFAULT NULL,
  `shipped_by_vendor_date` datetime DEFAULT NULL,
  `delivery_by_vendor_date` datetime DEFAULT NULL,
  `received_by_customer_date` datetime DEFAULT NULL,
  `feedback_by_customer_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_statuses`
--

INSERT INTO `invoice_statuses` (`id`, `invoice_id`, `order_create_date`, `confirmed_by_vendor_date`, `shipped_by_vendor_date`, `delivery_by_vendor_date`, `received_by_customer_date`, `feedback_by_customer_date`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-02-01 15:15:58', '2021-02-02 15:15:58', '2021-02-03 15:15:58', NULL, NULL, NULL, '2021-02-21 09:16:16', '2021-02-21 09:16:16'),
(2, 2, '2021-02-01 15:15:58', '2021-02-02 15:15:58', '2021-02-03 15:15:58', '2021-02-04 15:16:21', NULL, NULL, '2021-02-21 09:16:16', '2021-02-21 09:16:16'),
(3, 3, '2021-02-01 15:15:58', '2021-02-02 15:15:58', '2021-02-03 15:15:58', '2021-02-04 15:16:21', '2021-02-16 15:16:34', NULL, '2021-02-21 09:16:16', '2021-02-21 09:16:16'),
(4, 4, '2021-02-01 15:15:58', '2021-02-02 15:15:58', NULL, NULL, NULL, NULL, '2021-02-21 09:16:16', '2021-02-21 09:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_resolation_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `unit_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_category_id2` bigint(20) DEFAULT NULL,
  `tax` bigint(20) UNSIGNED DEFAULT NULL,
  `tax_type` enum('inclusive','exclusive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `enable_stock` tinyint(1) NOT NULL DEFAULT '0',
  `alert_quantity` bigint(20) UNSIGNED NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode_type` enum('C39','C128','EAN-13','EAN-8','UPC-A','UPC-E','ITF-14') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku_manual` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_stock` int(10) UNSIGNED DEFAULT '0',
  `default_selling_price` float DEFAULT '0',
  `offer_selling_price` float DEFAULT '0',
  `is_offer_enable` tinyint(1) DEFAULT '0',
  `shipping_charge` float DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `featured_image`, `short_resolation_image`, `business_id`, `unit_id`, `brand_id`, `category_id`, `sub_category_id`, `sub_category_id2`, `tax`, `tax_type`, `enable_stock`, `alert_quantity`, `sku`, `barcode_type`, `sku_manual`, `current_stock`, `default_selling_price`, `offer_selling_price`, `is_offer_enable`, `shipping_charge`, `description`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Samsung Gallaxy A1', 'product-samsung-gallaxy-a1.png', NULL, 1, 1, 2, 2, 5, NULL, 1, 'inclusive', 1, 100, 'Samsung-12', 'C39', 'Samsung-12', 0, 12000, NULL, 0, 0, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(2, 'Asus ROG Strix G512LI Core i5 10th GTX 1650Ti Graphics 15.6\" FHD Laptop with Windows 10', 'product-asus.png', NULL, 1, 1, 5, 3, 2, NULL, 1, 'inclusive', 1, 100, 'asus-12', 'C39', 'asus-12', 0, 10000, 8000, 1, 0, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(3, 'Samsung Gallaxy J2 New 3GB RAM', 'product-samsung-gallaxy-j2.png', NULL, 1, 1, 2, 2, 5, NULL, 1, 'inclusive', 1, 100, 'Samsung-j2', 'C39', 'Samsung-j2', 0, 0, 0, 0, 0, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(4, 'New Sleeve Cotton Shirt', 'product-shirt.png', NULL, 1, 1, 2, 8, 9, NULL, 1, 'inclusive', 1, 100, 'shirt-blue', 'C39', 'shirt-blue', 0, 0, 0, 0, 0, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(5, 'New Black HeadPhone ', 'product-headphone.png', NULL, 1, 1, 2, 2, 2, NULL, 1, 'inclusive', 1, 100, 'headphone', 'C39', 'headphone', 0, 0, 0, 0, 0, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(6, 'Check Sleeve Cotton Shirt Yellow Shirt', 'product-shirt2.png', NULL, 1, 1, 2, 8, 9, NULL, 1, 'inclusive', 1, 100, 'shirt-check', 'C39', 'shirt-check', 0, 0, 0, 0, 0, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(7, 'Red Sleeve Cotton Shirt for Middle Age', 'product-shirt3.png', NULL, 1, 1, NULL, 8, 9, NULL, 1, 'inclusive', 1, 100, 'shirt-2', 'C39', 'shirt-2', 0, 450, 400, 1, 0, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(8, 'iPhone 11 Pro Max', 'product-iphone-11-pro.png', NULL, 1, 1, NULL, 2, 4, NULL, 1, 'inclusive', 1, 100, 'iphone-11-pro', 'C39', 'iphone-11-pro', 0, 120000, 0, 0, 0, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(9, 'Cam20', 'product-1610219218.png', 'product-1610219218.png', 4, 1, 3, 20, 19, NULL, 1, 'inclusive', 1, 12, 'A00839S732014', 'C39', '1212', 0, 0, 0, 0, 0, NULL, 1, '2021-01-09 13:06:58', '2021-02-07 08:16:55', '2021-02-07 08:16:55'),
(10, 'string', NULL, NULL, 1, 1, 2, 2, 7, NULL, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 0, 0, 0, 0, 0, NULL, 1, '2021-02-03 11:33:56', '2021-02-07 08:16:38', '2021-02-07 08:16:38'),
(11, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, 0, NULL, 1, '2021-02-03 11:35:29', '2021-02-07 08:16:42', '2021-02-07 08:16:42'),
(12, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, 0, NULL, 1, '2021-02-03 11:36:25', '2021-02-07 08:16:48', '2021-02-07 08:16:48'),
(14, '34', 'product-1612375875.png', NULL, 2, 1, 10, 2, NULL, 5, 1, 'exclusive', 1, 43, '43', 'C128', '43', 43, 43, 43, 0, 0, '<p>3434</p>', 1, '2021-02-03 12:11:15', '2021-02-20 08:47:21', '2021-02-20 08:47:21'),
(15, '34', 'product-1612375976.png', NULL, 3, 1, 10, 2, NULL, 21, 1, 'inclusive', 1, 43, '34', 'C128', '43', 43, 43, 43, 0, 0, '<p>434343</p>', 1, '2021-02-03 12:12:56', '2021-02-20 08:49:09', '2021-02-20 08:49:09'),
(16, '34', 'product-1612376117.jpg', NULL, 2, 1, 10, 2, NULL, 21, 1, 'inclusive', 1, 433, '34', 'C128', '43', 43, 43, 34, 0, 0, '<p>434</p>', 1, '2021-02-03 12:15:17', '2021-02-03 14:08:37', '2021-02-03 14:08:37'),
(17, 'test product-05', 'product-1612458644.jpeg', 'product-1612458645.jpeg', 2, 1, 10, 2, NULL, 21, 1, 'exclusive', 1, 250, '22', 'EAN-13', '22', 22, 22, 22, 0, 0, '<p>test product-05</p>', 1, '2021-02-04 11:10:45', '2021-02-20 08:49:04', '2021-02-20 08:49:04'),
(18, 'test product-05', 'product-1612458650.jpeg', 'product-1612458650.jpeg', 2, 1, 10, 2, NULL, 21, 1, 'exclusive', 1, 250, '22', 'EAN-13', '22', 22, 22, 22, 0, 0, '<p>test product-05</p>', 1, '2021-02-04 11:10:50', '2021-02-20 08:49:15', '2021-02-20 08:49:15'),
(19, 'test product-05', 'product-1612458651.jpeg', 'product-1612458651.jpeg', 2, 1, 10, 2, NULL, 21, 1, 'exclusive', 1, 250, '22', 'EAN-13', '22', 22, 22, 22, 0, 0, '<p>test product-05</p>', 1, '2021-02-04 11:10:51', '2021-02-20 08:49:18', '2021-02-20 08:49:18'),
(20, 'test product-05', 'product-1612458651.jpeg', 'product-1612458651.jpeg', 2, 1, 10, 2, NULL, 21, 1, 'exclusive', 1, 250, '22', 'EAN-13', '22', 22, 22, 22, 0, 0, '<p>test product-05</p>', 1, '2021-02-04 11:10:51', '2021-02-20 08:48:50', '2021-02-20 08:48:50'),
(21, 'test product-05', 'product-1612458660.jpeg', 'product-1612458660.jpeg', 2, 1, 10, 2, NULL, 21, 1, 'exclusive', 1, 250, '22', 'EAN-13', '22', 22, 22, 22, 0, 0, '<p>test product-05</p>', 1, '2021-02-04 11:11:00', '2021-02-20 08:48:46', '2021-02-20 08:48:46'),
(22, 'test product-05', 'product-1612459595.jpeg', 'product-1612459595.jpeg', 1, 1, 11, 2, NULL, 5, 1, 'exclusive', 1, 254, '22', 'EAN-8', '22', 22, 22, 22, 0, 0, '<p>2test product-05</p>', 1, '2021-02-04 11:26:35', '2021-02-20 08:48:58', '2021-02-20 08:48:58'),
(23, 'test', NULL, NULL, 2, 1, 10, 2, NULL, 21, 1, 'exclusive', 1, 33, '33', 'EAN-8', '33', 33, 33, 33, 0, 0, '<p>3333</p>', 1, '2021-02-04 14:08:00', '2021-02-07 08:17:04', '2021-02-07 08:17:04'),
(24, 'testing', NULL, NULL, 3, 1, 5, 2, NULL, 5, 1, 'exclusive', 1, 233, '233', 'EAN-8', '233', 233, 233, 2233, 0, 0, '<p>2333</p>', 1, '2021-02-04 22:13:19', '2021-02-07 08:16:32', '2021-02-07 08:16:32'),
(25, 'testing', NULL, NULL, 3, 1, 5, 2, NULL, 5, 1, 'exclusive', 1, 233, '233', 'EAN-8', '233', 233, 233, 2233, 0, 0, '<p>2333</p>', 1, '2021-02-04 22:13:59', '2021-02-07 08:16:27', '2021-02-07 08:16:27'),
(26, '34', NULL, NULL, 1, 1, 10, 2, NULL, 5, 1, 'inclusive', 1, 33, '33', 'EAN-13', '33', 33, 33, 3333, 0, 0, '<p>33333</p>', 1, '2021-02-04 22:20:27', '2021-02-07 08:16:19', '2021-02-07 08:16:19'),
(27, '34', NULL, NULL, 1, 1, 10, 2, NULL, 5, 1, 'inclusive', 1, 33, '33', 'EAN-13', '33', 33, 33, 3333, 0, 0, '<p>33333</p>', 1, '2021-02-04 22:21:24', '2021-02-07 08:16:23', '2021-02-07 08:16:23'),
(28, 'Test Product', NULL, NULL, 2, 1, 10, 2, 4, 5, 1, 'inclusive', 1, 22, '22', 'UPC-A', '22', 22, 22, 22, 0, 0, '<p>22222</p>', 1, '2021-02-04 22:24:48', '2021-02-07 08:16:15', NULL),
(29, 'reee', 'product-featured-1612500132--1612500132.jpeg', 'product-short-resolution-161-1612500132.png', 1, 1, 3, 2, 6, 20, 1, 'inclusive', 1, 33, '33', 'UPC-A', '33', 33, 33, 33, 0, 0, '<p>33</p>', 1, '2021-02-04 22:42:12', '2021-02-20 08:48:40', '2021-02-20 08:48:40'),
(30, 'Final Product', 'product-featured-1612546159--1612546159.jpeg', 'product-image-1612546305-601-1612546305.jpeg', 2, 1, 5, 2, 9, 6, 1, 'inclusive', 0, 33, '23', 'UPC-E', '23', 23, 23, 23, 0, 0, '<p>23</p>', 1, '2021-02-04 22:47:09', '2021-02-20 08:48:36', '2021-02-20 08:48:36'),
(31, 'testing', 'product-featured-1612500559--1612500559.png', 'product-short-resolution-161-1612500559.png', 2, 1, 5, 2, 2, 6, 1, 'inclusive', 0, 33, '23', 'UPC-E', '23', 23, 23, 23, 0, 0, '<p>23</p>', 1, '2021-02-04 22:49:19', '2021-02-20 08:48:31', '2021-02-20 08:48:31'),
(32, 'Final test', 'product-featured-1612501778--1612501778.png', 'product-short-resolution-161-1612501778.png', 1, 1, 5, 2, 19, 21, 1, 'exclusive', 1, 123, '123', 'UPC-E', '123', 123, 123, 123, 0, 0, '<p>123</p>', 1, '2021-02-04 23:09:38', '2021-02-20 08:48:26', '2021-02-20 08:48:26'),
(33, 'FInal testing', NULL, 'product-short-resolution-161-1612502648.png', 1, 1, 10, 2, 7, 20, 1, 'inclusive', 1, 3434, '232', 'C128', '323', 2323, 2323, 2323, 1, 0, '<p>FInal testing</p>', 1, '2021-02-04 23:24:08', '2021-02-05 14:25:31', '2021-02-05 14:25:31'),
(34, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 1, 0, NULL, 1, '2021-02-06 20:00:26', '2021-02-07 08:15:47', '2021-02-07 08:15:47'),
(35, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, 0, NULL, 1, '2021-02-06 20:00:41', '2021-02-07 08:14:32', '2021-02-07 08:14:32'),
(36, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, 0, NULL, 1, '2021-02-06 20:01:10', '2021-02-07 08:15:43', '2021-02-07 08:15:43'),
(37, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, 0, NULL, 1, '2021-02-06 20:01:57', '2021-02-07 08:14:58', '2021-02-07 08:14:58'),
(38, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, 0, NULL, 1, '2021-02-06 20:20:31', '2021-02-07 08:14:53', '2021-02-07 08:14:53'),
(39, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, 0, NULL, 1, '2021-02-06 20:21:05', '2021-02-07 08:14:50', '2021-02-07 08:14:50'),
(40, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, 0, NULL, 1, '2021-02-06 20:21:24', '2021-02-07 08:14:45', '2021-02-07 08:14:45'),
(41, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, 0, NULL, 1, '2021-02-06 20:28:36', '2021-02-07 08:14:36', '2021-02-07 08:14:36'),
(42, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, 0, NULL, 1, '2021-02-06 20:28:53', '2021-02-07 08:14:40', '2021-02-07 08:14:40'),
(43, 'Akij Plastic', 'product-featured-1612708602--1612708602.jpeg', NULL, 6, 1, 10, 2, 4, 21, 1, 'exclusive', 1, 100, '100', 'EAN-13', '100', 100, 100, 100, 0, 0, '<p>Akij House </p>', 1, '2021-02-07 08:36:42', '2021-02-07 08:39:33', '2021-02-07 08:39:33'),
(44, 'Akij Plastic', 'product-featured-1612708616--1612708616.jpeg', NULL, 6, 1, 10, 2, 4, 21, 1, 'exclusive', 1, 100, '100', 'EAN-13', '100', 100, 100, 100, 0, 0, '<p>Akij House </p>', 1, '2021-02-07 08:36:56', '2021-02-07 08:39:28', '2021-02-07 08:39:28'),
(45, 'Akij Plastic', 'product-featured-1612708733--1612708733.jpeg', NULL, 5, 1, 5, 2, 4, 5, 1, 'exclusive', 1, 122, '222', 'UPC-A', '222', 222, 222, 22222, 0, 0, '<p>AKij House</p>', 1, '2021-02-07 08:38:53', '2021-02-07 08:39:23', '2021-02-07 08:39:23'),
(46, 'GLASSES LUXURY LENS FASHION DRIV', 'product-featured-1612709158--1612709158.jpeg', 'product-short-resolution-161-1612709158.jpeg', 6, 1, 2, 2, 7, 20, 1, 'inclusive', 0, 500, '100', 'EAN-13', '100', 100, 699, 599, 0, 0, '<p>SUNGLASSES FOR MEN NEW HD POLARISED SUNGLASSES BRAND DESIGNER CLASSIC SUN GLASSES LUXURY LENS FASHION DRIV</p>', 1, '2021-02-07 08:45:58', '2021-02-07 08:45:58', NULL),
(47, 'Daikin Premium Inverter Split Air Conditioner | JTKJ18TV16UD | 1.5 Ton', 'product-featured-1612723852--1612723852.png', NULL, 6, 1, 11, 2, 4, 5, 1, 'exclusive', 1, 232, '232', 'C128', '323', 32323, 32312, 2323, 0, 0, '<p>Testing.</p>', 1, '2021-02-07 12:50:52', '2021-02-07 12:50:52', NULL),
(48, 'Daikin Premium Inverter Split Air Conditioner | JTKJ18TV16UD | 1.5 Ton', 'product-featured-1612725385--1612725385.png', NULL, 6, 1, 11, 2, 7, 20, 1, 'exclusive', 1, 10, '23', 'EAN-8', '323', 323, 30000, 25000, 1, 0, '<p>testing</p>', 1, '2021-02-07 13:16:25', '2021-02-20 08:48:13', '2021-02-20 08:48:13'),
(49, 'test', 'product-featured-1612726588--1612726588.png', NULL, 6, 1, 10, 2, 7, 20, 1, 'exclusive', 1, 5, '45', 'C39', '545', 454, 4543, 2345, 0, 0, '<p>test</p>', 1, '2021-02-07 13:36:28', '2021-02-20 08:48:05', '2021-02-20 08:48:05'),
(50, 'test', 'product-featured-1612726765--1612726765.png', NULL, 6, 1, 10, 2, 7, 20, 1, 'exclusive', 1, 5, '45', 'C39', '545', 454, 4543, 2345, 1, 0, '<p>test</p>', 1, '2021-02-07 13:39:25', '2021-02-20 08:48:01', '2021-02-20 08:48:01'),
(51, 'test', 'product-featured-1612726988--1612726988.png', NULL, 6, 1, 10, 2, 7, 20, 1, 'exclusive', 1, 5, '45', 'C39', '545', 454, 4543, 2345, 1, 0, '<p>test</p>', 1, '2021-02-07 13:43:08', '2021-02-20 08:47:55', '2021-02-20 08:47:55'),
(52, 'Samsung Gallaxy J10', 'product-featured-1613726021--1613726021.jpeg', NULL, 5, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 5, 'samsung-gallaxy-j10', 'C39', NULL, 100, 2000, 0, 0, 0, NULL, 1, '2021-02-19 03:13:41', '2021-02-19 03:13:41', NULL),
(53, 'Samasung Gallaxy J20', 'product-featured-1613726317--1613726317.jpeg', NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 5, 'sansung-j-20', 'C39', NULL, 2000, 9000, 0, 0, 0, '<p>Welcome Product Description</p>', 1, '2021-02-19 03:18:37', '2021-02-19 03:18:37', NULL),
(54, 'Samsung DSLR-GX10', 'product-featured-1613727511--1613727511.webp', NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 5, 'samsung-dslr-gx10', 'EAN-13', NULL, 5, 1000, 0, 0, 0, '<p>Simple Test Description</p>', 1, '2021-02-19 03:38:31', '2021-02-20 08:47:26', '2021-02-20 08:47:26'),
(55, 'Samsung Camera L45', 'product-featured-1613730649--1613730649.jpeg', NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 5, 'samsung-camera-l45', 'C39', NULL, 10, 20, 0, 0, 0, NULL, 1, '2021-02-19 04:30:49', '2021-02-20 08:50:07', NULL),
(56, 'Samsung Camera', 'product-featured-1613746330--1613746330.jpeg', NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 5, 'samsung-camera-1', 'C39', NULL, 10, 20, 0, 0, 0, NULL, 1, '2021-02-19 08:52:10', '2021-02-20 08:48:19', '2021-02-20 08:48:19'),
(57, 'Samsung Camera', 'product-featured-1613746505--1613746505.jpeg', NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 5, 'samsung-camera-2', 'C39', NULL, 10, 20, 0, 0, 0, NULL, 1, '2021-02-19 08:55:05', '2021-02-20 08:47:51', '2021-02-20 08:47:51'),
(58, 'Samsung Camera', 'product-featured-1613746639--1613746639.jpeg', NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 5, 'samsung-camera-3', 'C39', NULL, 10, 20, 0, 0, 0, NULL, 1, '2021-02-19 08:57:19', '2021-02-20 08:47:45', '2021-02-20 08:47:45'),
(59, 'Samsung Camera', 'product-featured-1613746661--1613746661.jpeg', NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 5, 'samsung-camera-4', 'C39', NULL, 10, 20, 0, 0, 0, NULL, 1, '2021-02-19 08:57:41', '2021-02-20 08:47:40', '2021-02-20 08:47:40'),
(60, 'Samsung Camera', 'product-featured-1613746818--1613746818.jpeg', NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 5, 'samsung-camera-5', 'C39', NULL, 10, 20, 0, 0, 0, NULL, 1, '2021-02-19 09:00:18', '2021-02-20 08:47:32', '2021-02-20 08:47:32'),
(61, 'HP Pavilion 15-cs3054TX 10th Gen Intel Core i5 1035G1 Wine Gold Notebook', 'product-image-1613832407-603-1613832407.webp', 'product-short-resolution-161-1613749884.webp', 1, 1, 4, 2, 3, 22, 1, 'inclusive', 1, 5, 'HP-Pavilion-15.6-10th-gen', 'UPC-E', NULL, 20, 64000, 60000, 0, 0, '<p><strong>Quick Overview Updated</strong></p><p><span style=\"color: rgb(102, 102, 102);\">Processor Generation - 10th Gen</span></p><p><span style=\"color: rgb(102, 102, 102);\">Processor - Intel Core i5 1035G1</span></p><p><span style=\"color: rgb(102, 102, 102);\">Processor Clock Speed - 1.00-3.60GHz</span></p><p><span style=\"color: rgb(102, 102, 102);\">Display Size - 15.6 Inch</span></p><p><span style=\"color: rgb(102, 102, 102);\">RAM - 4GB</span></p><p><span style=\"color: rgb(102, 102, 102);\">RAM Type - DDR4</span></p><p><br></p><p><span style=\"color: rgb(102, 102, 102);\">New Description\'s open</span></p>', 1, '2021-02-19 09:51:24', '2021-02-20 08:46:47', NULL),
(62, 'Man White Shirt', 'product-featured-1613847056--1613847056.jpeg', NULL, 1, 1, 13, 8, 9, 23, 1, 'inclusive', 1, 5, 'man-white-shirt', 'C39', NULL, 10, 499, 0, 0, 0, '<p>Simple Shirt</p>', 1, '2021-02-20 12:50:56', '2021-02-20 12:50:56', NULL),
(63, 'Man Shirt Blue', 'product-featured-1613885008--1613885008.jpeg', NULL, 1, 1, 13, 8, 9, 23, 1, 'inclusive', 1, 5, 'man-shirt-blue', 'C39', NULL, 52, 333, 300, 1, 0, '<p>Shirt More Information:</p>', 1, '2021-02-20 23:23:28', '2021-02-20 23:23:28', NULL),
(64, 'Sony Camera', 'product-featured-1613902675--1613902675.jpeg', NULL, 1, 1, 12, 2, 7, 20, 1, 'inclusive', 1, 2, 'sony-camera', 'C39', NULL, 12, 45000, 40000, 1, 0, '<p>Simple Description of Sony Camera Updated</p>', 1, '2021-02-21 10:17:55', '2021-02-21 10:19:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_attributes`
--

CREATE TABLE `item_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_values` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'comma seperated attribute_value_id',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_attributes`
--

INSERT INTO `item_attributes` (`id`, `item_id`, `attribute_id`, `business_id`, `attribute_values`, `created_at`, `updated_at`) VALUES
(12, 61, 3, 1, '[37,38]', '2021-02-20 08:29:48', '2021-02-20 08:46:47'),
(13, 62, 30, 1, '[59,60]', '2021-02-20 12:50:56', '2021-02-20 12:50:56'),
(14, 63, 30, 1, '[59]', '2021-02-20 23:23:28', '2021-02-20 23:23:28'),
(15, 64, 20, 1, '[32]', '2021-02-21 10:17:55', '2021-02-21 10:19:19'),
(16, 64, 21, 1, '[36]', '2021-02-21 10:17:55', '2021-02-21 10:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `item_images`
--

CREATE TABLE `item_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `image_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_images`
--

INSERT INTO `item_images` (`id`, `item_id`, `business_id`, `image`, `image_size`, `image_title`, `image_description`, `created_at`, `updated_at`) VALUES
(1, 27, 1, 'product-161249888427-1612498884.jpeg', '10', 'photo-1494438639946-1ebd1d20bf85.jpg', NULL, '2021-02-04 22:21:24', '2021-02-04 22:21:24'),
(2, 28, 2, 'product-161249908828-1612499088.png', '10', '550-5509172_spider-man-tom-holland-png-clipart-spider-man.png', NULL, '2021-02-04 22:24:48', '2021-02-04 22:24:48'),
(3, 28, 2, 'product-161249908828-1612499088.png', '10', 'unnamed.png', NULL, '2021-02-04 22:24:48', '2021-02-04 22:24:48'),
(4, 28, 2, 'product-161249908828-1612499088.png', '10', 'spider-man-png-spiderman-11563230518fsdt8a9hyc.png', NULL, '2021-02-04 22:24:48', '2021-02-04 22:24:48'),
(5, 29, 1, 'product-161250013229-1612500132.png', '10', 'Logo-plus-simple.png', NULL, '2021-02-04 22:42:12', '2021-02-04 22:42:12'),
(6, 29, 1, 'product-161250013229-1612500132.png', '10', 'unnamed.png', NULL, '2021-02-04 22:42:12', '2021-02-04 22:42:12'),
(7, 30, 2, 'product-161250042930-1612500429.jpeg', '10', 'tempress-systems-inc-relay-electronic-component-surface-mount-technology-automation-zambeef-products-plc.jpg', NULL, '2021-02-04 22:47:09', '2021-02-04 22:47:09'),
(8, 30, 2, 'product-161250042930-1612500429.png', '10', 'unnamed (2).png', NULL, '2021-02-04 22:47:09', '2021-02-04 22:47:09'),
(9, 30, 2, 'product-161250042930-1612500429.png', '10', '140-1404847_samsung-products-hd-png-download.png', NULL, '2021-02-04 22:47:09', '2021-02-04 22:47:09'),
(10, 31, 2, 'product-161250055931-1612500559.jpeg', '46 kB', 'tempress-systems-inc-relay-electronic-component-surface-mount-technology-automation-zambeef-products-plc.jpg', NULL, '2021-02-04 22:49:19', '2021-02-04 22:49:19'),
(11, 31, 2, 'product-161250055931-1612500559.png', '211 kB', 'unnamed (2).png', NULL, '2021-02-04 22:49:19', '2021-02-04 22:49:19'),
(12, 31, 2, 'product-161250055931-1612500559.png', '296 kB', '140-1404847_samsung-products-hd-png-download.png', NULL, '2021-02-04 22:49:19', '2021-02-04 22:49:19'),
(13, 32, 1, 'product-161250177832-1612501778.png', '26 kB', 'Panasonic-Mixer-Ad-Block.png', NULL, '2021-02-04 23:09:38', '2021-02-04 23:09:38'),
(14, 32, 1, 'product-161250177832-1612501778.jpeg', '97 kB', 'worlds-best-programmers-primary.jpg-100689098-large.jpeg', NULL, '2021-02-04 23:09:38', '2021-02-04 23:09:38'),
(15, 32, 1, 'product-161250177832-1612501778.png', '45 kB', 'png-clipart-point-of-sale-payment-terminal-sales-emv-bank-products-real-pos-machine-electronics-service.png', NULL, '2021-02-04 23:09:38', '2021-02-04 23:09:38'),
(16, 33, 2, 'product-161250264833-1612502648.png', '26 kB', 'Panasonic-Mixer-Ad-Block.png', NULL, '2021-02-04 23:24:08', '2021-02-04 23:24:08'),
(17, 33, 2, 'product-161250264833-1612502648.png', '23 kB', 'Logo-plus-simple.png', NULL, '2021-02-04 23:24:08', '2021-02-04 23:24:08'),
(18, 30, 2, 'product-161254658530-1612546585.gif', '155 kB', 'greencoast.gif', NULL, '2021-02-05 11:36:25', '2021-02-05 11:36:25'),
(19, 30, 2, 'product-161254677430-1612546774.jpeg', '30 kB', 'oslo.jpg', NULL, '2021-02-05 11:39:34', '2021-02-05 11:39:34'),
(20, 61, 1, 'product-161374988461-1613749884.webp', '66 kB', 'hp-laptop.webp', NULL, '2021-02-19 09:51:24', '2021-02-19 09:51:24'),
(23, 61, 1, 'product-161383221261-1613832212.png', '89 kB', '143-1434681_cart-icon-png.png', NULL, '2021-02-20 08:43:32', '2021-02-20 08:43:32'),
(24, 55, 1, 'product-161383258755-1613832587.webp', '75 kB', 'Samsung DSLR-GX10.webp', NULL, '2021-02-20 08:49:47', '2021-02-20 08:49:47'),
(25, 62, 1, 'product-161384705662-1613847056.jpeg', '31 kB', 'shirt.jpg', NULL, '2021-02-20 12:50:56', '2021-02-20 12:50:56'),
(26, 62, 1, 'product-161384705662-1613847056.webp', '40 kB', 'shirt-2.webp', NULL, '2021-02-20 12:50:56', '2021-02-20 12:50:56'),
(27, 62, 1, 'product-161384705662-1613847056.jpeg', '11 kB', 'shirt-white.jpg', NULL, '2021-02-20 12:50:56', '2021-02-20 12:50:56'),
(28, 64, 1, 'product-161390267564-1613902675.jpeg', '25 kB', 'samsng-camera-2.jpg', NULL, '2021-02-21 10:17:55', '2021-02-21 10:17:55'),
(29, 64, 1, 'product-161390267564-1613902675.webp', '75 kB', 'Samsung DSLR-GX10.webp', NULL, '2021-02-21 10:17:55', '2021-02-21 10:17:55');

-- --------------------------------------------------------

--
-- Table structure for table `item_ratings`
--

CREATE TABLE `item_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rating_value` int(10) UNSIGNED NOT NULL DEFAULT '5',
  `comment` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) DEFAULT '1' COMMENT '1=Approved, 0=Unapproved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_ratings`
--

INSERT INTO `item_ratings` (`id`, `item_id`, `user_id`, `rating_value`, `comment`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 3, 1, 5, NULL, NULL, 1, '2020-11-13 06:45:16', '2020-11-13 06:45:16'),
(3, 3, 15, 3, NULL, NULL, 1, '2020-11-13 06:45:16', '2020-11-13 06:45:16'),
(4, 3, 1, 2, NULL, NULL, 1, '2020-11-13 06:45:16', '2020-11-13 06:45:16'),
(5, 1, 1, 4, NULL, NULL, 0, '2021-03-17 07:38:57', '2021-03-17 07:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(48, '0000_00_00_000000_create_websockets_statistics_entries_table', 1),
(49, '2014_10_12_100000_create_password_resets_table', 1),
(50, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(51, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(52, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(53, '2016_06_01_000004_create_oauth_clients_table', 1),
(54, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(55, '2019_08_19_000000_create_failed_jobs_table', 1),
(56, '2020_08_13_184435_create_users_table', 1),
(57, '2020_08_14_042532_create_permission_tables', 1),
(58, '2020_08_15_220630_create_currencies_table', 1),
(59, '2020_08_15_220640_create_businesses_table', 1),
(60, '2020_08_15_220648_create_customers_table', 1),
(61, '2020_08_15_220705_create_suppliers_table', 1),
(62, '2020_08_15_223148_create_brands_table', 1),
(63, '2020_08_15_223156_create_categories_table', 1),
(64, '2020_08_15_223530_create_tax_rates_table', 1),
(65, '2020_08_15_223718_create_units_table', 1),
(66, '2020_08_15_888718_create_items_table', 1),
(67, '2020_08_16_170430_create_discount_types_table', 1),
(68, '2020_08_16_170443_create_transactions_table', 1),
(69, '2020_08_16_171720_create_business_locations_table', 1),
(70, '2020_08_16_172045_create_customer_groups_table', 1),
(71, '2020_08_16_172516_create_attributes_table', 1),
(72, '2020_08_16_173156_create_attribute_values_table', 1),
(73, '2020_08_16_173455_create_item_attributes_table', 1),
(74, '2020_08_16_173949_create_sliders_table', 1),
(75, '2020_08_16_174000_create_pages_table', 1),
(76, '2020_08_16_175147_create_transaction_sell_lines_table', 1),
(77, '2020_08_18_205645_create_referrals_table', 1),
(78, '2020_08_18_210048_create_referral_rules_table', 1),
(79, '2020_08_21_172801_add_deleted_at_to_items_table', 1),
(80, '2020_09_07_015212_create_gift_cards_table', 1),
(81, '2020_09_07_020621_create_polls_table', 1),
(82, '2020_09_07_021191_create_poll_options_table', 1),
(83, '2020_09_07_022016_create_poll_responses_table', 1),
(84, '2020_10_28_154939_create_item_images_table', 1),
(85, '2020_10_28_161910_create_vouchers_table', 2),
(86, '2020_11_13_063952_create_item_ratings_table', 3),
(87, '2021_01_24_155124_create_media_table', 4),
(88, '2021_01_29_060051_create_otps_table', 5),
(89, '2021_01_29_065548_create_sms_table', 5),
(90, '2021_02_04_181707_create_invoices_table', 6),
(91, '2021_02_04_182538_create_invoice_items_table', 6),
(95, '2021_02_07_210330_create_coupon_types_table', 7),
(96, '2021_02_07_210349_create_coupons_table', 7),
(97, '2021_02_08_094835_create_order_statuses_table', 8),
(98, '2021_02_08_103031_create_invoice_statuses_table', 8),
(99, '2021_02_15_100453_create_wishlists_table', 9),
(100, '2021_02_19_090527_create_barcode_types_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'Modules\\Auth\\Entities\\User', 1),
(1, 'Modules\\Auth\\Entities\\User', 16),
(2, 'Modules\\Auth\\Entities\\User', 16),
(1, 'Modules\\Auth\\Entities\\User', 18),
(2, 'Modules\\Auth\\Entities\\User', 19),
(2, 'Modules\\Auth\\Entities\\User', 20),
(2, 'Modules\\Auth\\Entities\\User', 21),
(2, 'Modules\\Auth\\Entities\\User', 22),
(1, 'Modules\\Auth\\Entities\\User', 25),
(1, 'Modules\\Auth\\Entities\\User', 26),
(1, 'Modules\\Auth\\Entities\\User', 27),
(4, 'Modules\\Auth\\Entities\\User', 28);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('01207b4f93fd8f950a01869f04f3ab2f5ca12a7daeb3ddfbcd25c2925c043b4cba659afc45c66d2c', 1, 3, 'authToken', '[]', 0, '2021-03-04 19:01:52', '2021-03-04 19:01:52', '2022-03-04 19:01:52'),
('01a90cf29367c57449a23bb0c34d0189bfb930ee902d2597cae260af97bb10a287e1429f44bc712e', 1, 3, 'authToken', '[]', 0, '2021-03-17 05:47:31', '2021-03-17 05:47:31', '2022-03-17 11:47:31'),
('03209d4bd90f437e09642454684ba67626cbb66567312fba5625b786eef04c6b744208c217d74ccf', 1, 3, 'authToken', '[]', 0, '2021-02-07 08:18:06', '2021-02-07 08:18:06', '2022-02-07 14:18:06'),
('046dc310eeb0101ac889c9c43247c2b827eb1f1786b18f33be9f1528c946cd6f85ee59d42f1e8b5b', 1, 3, 'authToken', '[]', 0, '2021-02-22 16:15:26', '2021-02-22 16:15:26', '2022-02-22 16:15:26'),
('061c0bd159542a4b6448b355e3b00f5eb377cefbc7713c761a05bd825034b2578fa43d29cbea18fd', 1, 3, 'authToken', '[]', 0, '2021-02-03 04:26:25', '2021-02-03 04:26:25', '2022-02-03 10:26:25'),
('0c01805de599c17f62d9086471b80082896b9a59b700d6b410fcc0c8d55932274d63d405868b1c82', 1, 3, 'authToken', '[]', 0, '2021-03-07 15:19:53', '2021-03-07 15:19:53', '2022-03-07 15:19:53'),
('0e1c09f49be6d55848bd919c774d141a3624c0b9e78124000df5187c195337f68735a989ea131a8b', 1, 3, 'authToken', '[]', 0, '2021-01-24 08:16:49', '2021-01-24 08:16:49', '2022-01-24 14:16:49'),
('13014c2f5b51a208bfe39625ba19e0fda9e46b9e99132ac9f5b479a4ab970cb24cf307edfa66dfa9', 1, 3, 'authToken', '[]', 0, '2021-02-10 01:11:20', '2021-02-10 01:11:20', '2022-02-10 07:11:20'),
('13f478da5c8f31f8c14c9d6cd099b601a31d1d9deaa8828ae30ec6103cd23fdf60d726be11c2c49d', 1, 3, 'authToken', '[]', 0, '2021-02-06 20:27:29', '2021-02-06 20:27:29', '2022-02-07 02:27:29'),
('13ff18f9deafb7b012a62c4ab87b184e6394dc911af67b12f55d2373e07fa0a3540de34692444f3a', 1, 3, 'authToken', '[]', 0, '2021-02-01 14:46:52', '2021-02-01 14:46:52', '2022-02-01 14:46:52'),
('14c5f802790f8bc785f9e2fb9397da7c19c1dc6fdfc73398e7ae0c1bf7c4f80412cad93b4102161c', 1, 3, 'authToken', '[]', 0, '2021-02-07 08:31:56', '2021-02-07 08:31:56', '2022-02-07 14:31:56'),
('16b0e0c850071e521b18344b6607038c7630489c564ece415bb40c2ad47f2cb0ec1c357096e52230', 1, 3, 'authToken', '[]', 0, '2021-01-16 11:10:06', '2021-01-16 11:10:06', '2022-01-16 17:10:06'),
('17bb6c90e4d70b438c9b1236c44cff3767d1104845b2aaee03a67a99356fc7d210c04398bfbea18d', 1, 3, 'authToken', '[]', 0, '2021-03-16 07:35:22', '2021-03-16 07:35:22', '2022-03-16 07:35:22'),
('183c3d968e0229404f0c2e8cd36a3127d910d57e363dd88fdbdf7293afae68c44e6891688616e212', 1, 3, 'authToken', '[]', 0, '2021-02-05 23:04:39', '2021-02-05 23:04:39', '2022-02-06 05:04:39'),
('21b678f0ccde9ebe8e034e540c08fbce2b34fab7b40dc4db17fdaea9facc06d69ff1431707692f1f', 1, 3, 'authToken', '[]', 0, '2021-02-21 09:58:29', '2021-02-21 09:58:29', '2022-02-21 09:58:29'),
('2ceddd1b6788601c5931d6a5d3b5b90fab29424b282126715ebb63bb5a5a315688d84b0c2574fc30', 1, 3, 'authToken', '[]', 0, '2021-01-24 09:16:38', '2021-01-24 09:16:38', '2022-01-24 15:16:38'),
('32f2afad41420b8f2778becb41c238b702b3fa5017b080f0b8aeb496aa3b40face9f0037391974bc', 1, 3, 'authToken', '[]', 0, '2021-03-04 15:54:43', '2021-03-04 15:54:43', '2022-03-04 15:54:43'),
('34bd5f297249e4c5a3626cddc1728c293565de3145d1f7d168324d363e4aef493e14e6e4ed71e74b', 1, 3, 'authToken', '[]', 0, '2021-02-18 14:53:11', '2021-02-18 14:53:11', '2022-02-18 20:53:11'),
('371bf5dae35026aee0702f43485500a89ca9a0681f53fcc11a52664cfd01cb4efef715067f7b5c7c', 1, 3, 'authToken', '[]', 0, '2021-02-02 22:24:52', '2021-02-02 22:24:52', '2022-02-03 04:24:52'),
('3919c6911def98da2a92899e4b61bde7189e524ff400136b26d22c893aef9233198270aa42c08962', 1, 3, 'authToken', '[]', 0, '2021-02-04 12:11:43', '2021-02-04 12:11:43', '2022-02-04 18:11:43'),
('3c2d613c9e01bab1486e88c192174152ea484862aea682ca9312140f1fe51d24359f47363db09dc5', 1, 3, 'authToken', '[]', 0, '2021-01-24 08:12:20', '2021-01-24 08:12:20', '2022-01-24 14:12:20'),
('409db993954805191b27b551f51d70386c042e9e6c8a73d390b8d20d600ab14f95919757f3f77116', 1, 3, 'authToken', '[]', 0, '2021-02-24 16:07:10', '2021-02-24 16:07:10', '2022-02-24 16:07:10'),
('4128b520bae2ed795b2afc12c7430a6db9675f49a9650a7776cf8a751f0946d6e158780762acefef', 1, 3, 'authToken', '[]', 0, '2021-02-22 12:47:58', '2021-02-22 12:47:58', '2022-02-22 12:47:58'),
('4191c7a7229f18b1bb147d1d6d0983304083f25f55c5079ce60e77e4881ec8248c903302b33351dc', 1, 3, 'authToken', '[]', 0, '2021-02-05 02:25:22', '2021-02-05 02:25:22', '2022-02-05 08:25:22'),
('4352b8f949c6a9baffb85a8a4a048e8be931a3c2990fc907440f77e2642dde2a32dd2965f191e3a3', 1, 3, 'authToken', '[]', 0, '2021-02-06 09:47:02', '2021-02-06 09:47:02', '2022-02-06 15:47:02'),
('43c2a61a6e0a61ac78234be45e63410691b65ecc573afae59708b16b8d8e7dcd20564c55d2b500ca', 1, 3, 'authToken', '[]', 0, '2021-02-20 23:34:08', '2021-02-20 23:34:08', '2022-02-21 05:34:08'),
('446fd8f80774c9c945cf4e2fbc50f64b884c9c38a15edc4cdce311077816698119e724b12d5ec35a', 18, 3, 'authToken', '[]', 0, '2021-02-07 05:44:24', '2021-02-07 05:44:24', '2022-02-07 11:44:24'),
('47aacb85a8b505b39d3123eb6020fc6b4459fd1dd8e1f86e103e5ed6c6d3bec002c73f7dab8b7956', 15, 3, 'authToken', '[]', 0, '2021-02-07 05:28:08', '2021-02-07 05:28:08', '2022-02-07 11:28:08'),
('4b7dfd225838733fb039b9314dd21a8f59bdf6d3371b6f52f4426837ab25c25eebb64091e9708bb2', 1, 3, 'authToken', '[]', 0, '2021-03-04 18:59:12', '2021-03-04 18:59:12', '2022-03-04 18:59:12'),
('4bd1d7c9140116663fa137301bf0d4297ed9805c971ec5ba3c6006a7a4ebaa465ee0f25c669d1287', 1, 3, 'authToken', '[]', 0, '2021-03-07 10:43:17', '2021-03-07 10:43:17', '2022-03-07 10:43:17'),
('4e2b6dcc2039cada57f931cba2b9bb6ef9c058c2e4642d093fedf6eeb671d4aaf58cb9c8051e8f42', 1, 3, 'authToken', '[]', 0, '2021-03-04 19:03:06', '2021-03-04 19:03:06', '2022-03-04 19:03:06'),
('53a9cc4cf2b7a3b2efd715766cc4d2bb1741cbb015a2920b9a644acc88bba72a76821bd6993f5372', 1, 3, 'authToken', '[]', 0, '2021-02-05 23:19:11', '2021-02-05 23:19:11', '2022-02-06 05:19:11'),
('548b289831fa54be75d9216c6da6264aef9903a08997ba40dc2e45229c4462b9353234b1809a1b60', 1, 3, 'authToken', '[]', 0, '2021-02-05 14:44:09', '2021-02-05 14:44:09', '2022-02-05 20:44:09'),
('59503beb9a509c4dcbf479f414d75432a9d31eb666c9e802312f99151019698f407c562e7dd74f31', 1, 1, 'authToken', '[]', 0, '2020-12-11 20:19:33', '2020-12-11 20:19:33', '2021-12-12 02:19:33'),
('5a4bdd023c42d57734e98a79c7318283482c91ab126e18f7dde4c492997e263a31452561cd3449aa', 1, 3, 'authToken', '[]', 0, '2021-02-06 07:09:33', '2021-02-06 07:09:33', '2022-02-06 13:09:33'),
('5b886250456bb2a18fb4e9370aed9f08bca0f9e45be3931d53beda9d9794af49bfa15d8eeffbe5ba', 1, 3, 'authToken', '[]', 0, '2021-02-21 09:51:50', '2021-02-21 09:51:50', '2022-02-21 09:51:50'),
('5dc2ede2473638bff50a73822aeeb70626932523486e283646120ae6763222bcd582b423064e96e2', 1, 3, 'authToken', '[]', 0, '2021-02-21 02:27:50', '2021-02-21 02:27:50', '2022-02-21 08:27:50'),
('655b320f55d4d040577c4d3146f1e094fb06f2bc0d99261af498f7a64a9b803482e1a0a174732de0', 1, 3, 'authToken', '[]', 0, '2021-02-14 15:10:24', '2021-02-14 15:10:24', '2022-02-14 21:10:24'),
('6704636202efb938a26cffb6e8118c99a8ab6d16a241062375529a422d76550b8324d72784cf3202', 1, 3, 'authToken', '[]', 0, '2021-02-14 15:25:01', '2021-02-14 15:25:01', '2022-02-14 21:25:01'),
('67cbdc3aeab824c529143efa1e84d43eb9cf5838a4cc923282e3e2aeee210f8f2f718f2fd47d1fd1', 1, 3, 'authToken', '[]', 0, '2021-02-06 07:12:13', '2021-02-06 07:12:13', '2022-02-06 13:12:13'),
('695fc1e680cb4e66427cd17870195ab5fa4144821b7cd98f090cc4872ccb0dd9cb533e589fa70e8f', 1, 1, 'authToken', '[]', 0, '2020-12-12 08:05:07', '2020-12-12 08:05:07', '2021-12-12 14:05:07'),
('6a9087f25b5a66979d74de619a14d08a59e5709981afb58228b19de36776d338d1ea74208d8c9707', 1, 3, 'authToken', '[]', 0, '2021-01-24 08:17:21', '2021-01-24 08:17:21', '2022-01-24 14:17:21'),
('6c434c0378e38fba8d044484595554a3b37503f96358502d90569ede86ca1f6563235a423abef163', 1, 3, 'authToken', '[]', 0, '2021-02-05 13:23:29', '2021-02-05 13:23:29', '2022-02-05 19:23:29'),
('6e1fe3cf199a439e3fc08ee5791d3b0354d6d86c8489c8fdb0a61168068c87543cbc7fef1b42e8ed', 1, 3, 'authToken', '[]', 0, '2021-03-04 16:36:13', '2021-03-04 16:36:13', '2022-03-04 16:36:13'),
('6eafdb3738ff0b7f1e60d23406437fb93eec462ab7185e1795604ac2f5cb5c7419a0f6b9531c30ea', 1, 3, 'authToken', '[]', 0, '2021-02-21 10:12:38', '2021-02-21 10:12:38', '2022-02-21 10:12:38'),
('75a021b90fa310530d025314ea12b6279742483dcc700fd4012d7330ffc1a0630ceaf3c05a9f40c9', 1, 3, 'authToken', '[]', 0, '2021-02-03 02:42:56', '2021-02-03 02:42:56', '2022-02-03 08:42:56'),
('7721d9b148468f6a026532aa7efe1cd175b4f4b58abdfbeb6f98d93ef3d7bf8116b30b54521bcf50', 1, 3, 'authToken', '[]', 0, '2021-03-04 18:56:56', '2021-03-04 18:56:56', '2022-03-04 18:56:56'),
('77a2ee9680c62f39d3e0dd67bbce855f74f2e2a6085c63f6ec4d4af00f4c0d17800c34b5289396e8', 1, 3, 'authToken', '[]', 0, '2021-02-20 01:12:46', '2021-02-20 01:12:46', '2022-02-20 07:12:46'),
('7af389e3d659ff22247038aebcc42a7f9d1d13067f8ef88ff8a333e450580623a8dc5301840b8659', 1, 1, 'authToken', '[]', 0, '2020-12-06 19:49:39', '2020-12-06 19:49:39', '2021-12-07 01:49:39'),
('7e53b7bd520d114fee2a5c66abd2c47595f6841a34f05626a149d49e706bcc433431e33e051f50b1', 1, 3, 'authToken', '[]', 0, '2021-02-21 10:47:44', '2021-02-21 10:47:44', '2022-02-21 10:47:44'),
('7f703c58ca264edfbec5d813c83def3d488b4194fb31b3930efb884759b2a343e85a9625711e4fe5', 1, 3, 'authToken', '[]', 0, '2021-03-04 16:15:56', '2021-03-04 16:15:56', '2022-03-04 16:15:56'),
('84f0c5e672b8da202f39c2990d6cbbf4e4923cf2fcdf54a58e71fbaff77037dfc3baec7a3a3f2b96', 1, 3, 'authToken', '[]', 0, '2021-02-05 14:21:38', '2021-02-05 14:21:38', '2022-02-05 20:21:38'),
('86416ca7335b67c959e279cca366da491a4ac55cbf405a798b21652d22dd1c91fea0b0142e0fdc47', 1, 3, 'authToken', '[]', 0, '2021-02-04 07:15:36', '2021-02-04 07:15:36', '2022-02-04 13:15:36'),
('89cc9720c600b230f963066a1b88b6aa8f79168cf5a7bcfe5cc428fb2a99b0cc60d762dfa3fabd0e', 1, 1, 'authToken', '[]', 0, '2020-12-06 19:47:13', '2020-12-06 19:47:13', '2021-12-07 01:47:13'),
('8b9e4b062d7768c7692be3d58b90db6124fba14d9210393f564ed415484c53221bdcb22fb209b4d7', 1, 3, 'authToken', '[]', 0, '2021-03-16 10:45:45', '2021-03-16 10:45:45', '2022-03-16 10:45:45'),
('8e9731d0e3645ffe5592244eea7eff6570aae3de4cfb4e8dbf013daf4c626bdebbe2fce75b908536', 1, 3, 'authToken', '[]', 0, '2021-02-21 09:50:40', '2021-02-21 09:50:40', '2022-02-21 09:50:40'),
('9077a1f6305c596771c7a7f7e7792a0abf19f87b0f29d3e4ec46a7ff19c251e1065db42f6f3dbd0b', 1, 3, 'authToken', '[]', 0, '2021-02-07 08:54:55', '2021-02-07 08:54:55', '2022-02-07 14:54:55'),
('926ddbc2540789d5f0a35e3ffb43414636d997d21a6219ea59950dd668de515c65450f8ef5798436', 1, 3, 'authToken', '[]', 0, '2021-03-04 16:30:49', '2021-03-04 16:30:49', '2022-03-04 16:30:49'),
('930852ac7409118c47567b5ef0d8ada3eb0bcc62fec053819c77017af1fa5190fc5a0b6f0f37b68c', 1, 1, 'authToken', '[]', 0, '2020-12-10 10:54:02', '2020-12-10 10:54:02', '2021-12-10 16:54:02'),
('9a528bdb5efdd65324de792b5dfebe6a1a2e142cbb26e58b47d86770a44cbf45fdd983b07629ba56', 1, 3, 'authToken', '[]', 0, '2021-02-24 06:15:32', '2021-02-24 06:15:32', '2022-02-24 06:15:32'),
('9b6ed529fa2905411d0cd520ef96c4ed39cb10648820cd980678ea9fb3ad7966c854794e58d9f9f5', 1, 3, 'authToken', '[]', 0, '2021-02-01 21:51:32', '2021-02-01 21:51:32', '2022-02-01 21:51:32'),
('9c78d8ac246cddca91bf499256dfa8c90531453113b9835d48786289b9a6e8f1d9023dc5e657a8c5', 1, 3, 'authToken', '[]', 0, '2021-01-26 09:19:51', '2021-01-26 09:19:51', '2022-01-26 15:19:51'),
('9e4e6713ec9f655b86dd1de52c35060ce1c657a63dba88dca65cc933dde0175546d8cbf72917c28f', 1, 3, 'authToken', '[]', 0, '2021-03-04 16:35:35', '2021-03-04 16:35:35', '2022-03-04 16:35:35'),
('9f957c91e984cae5aa0b6ab2f77138fd30a966a85c0c987427b095d13e7bd66212eb5a230fd7c060', 1, 1, 'authToken', '[]', 0, '2020-12-12 08:01:17', '2020-12-12 08:01:17', '2021-12-12 14:01:17'),
('a1977e4f7f147905c9369f8c30caf4af2a6fdab8883199fd1e980d0a8f44649e2dc387a1b15486e9', 1, 3, 'authToken', '[]', 0, '2021-02-02 22:16:03', '2021-02-02 22:16:03', '2022-02-03 04:16:03'),
('a1ac0b17a792f4b7c6250086caa9169e22bc2daa35c4aebcc460868487b00aa5e4bcbdb2d84350f1', 1, 3, 'authToken', '[]', 0, '2021-01-09 12:51:49', '2021-01-09 12:51:49', '2022-01-09 18:51:49'),
('a2cc17453b88ce80c371e1301afa2a175694b4b229a9b20ad4cbd68060dcc15668edce2d967fbe10', 1, 3, 'authToken', '[]', 0, '2021-03-04 15:51:31', '2021-03-04 15:51:31', '2022-03-04 15:51:31'),
('a3a727bb5487ab8e71cc7b21a6e70ebc382d86d9484d51306a96c2f7a2dabd5e87afb0443b3bf4ed', 1, 3, 'authToken', '[]', 0, '2021-02-05 10:30:14', '2021-02-05 10:30:14', '2022-02-05 16:30:14'),
('a7893593c842274eda984b85a27ed973b9c719e97a524a8bb52323a3636b1b7c853316d602878263', 1, 3, 'authToken', '[]', 0, '2021-02-07 08:19:24', '2021-02-07 08:19:24', '2022-02-07 14:19:24'),
('aa15a23f330fc9c3bb9c0362509d9e00f14656cbc8ec4acb6fb06f808447011ac5af38a25e1742ac', 1, 3, 'authToken', '[]', 0, '2021-02-05 13:36:33', '2021-02-05 13:36:33', '2022-02-05 19:36:33'),
('aaa3370b397bc7e946bc4861c615692906d0e52a353c7cb3e0801f79aa0371a115922f6fd83331e5', 1, 3, 'authToken', '[]', 0, '2021-02-05 14:18:34', '2021-02-05 14:18:34', '2022-02-05 20:18:34'),
('ab693792d34a39a26cd29a2d0ec1bbfd83d5955742b880a2da97475dfe099bbd0ed5f3896653192c', 1, 3, 'authToken', '[]', 0, '2021-02-04 22:09:10', '2021-02-04 22:09:10', '2022-02-05 04:09:10'),
('ae520d5e6a9095b05d98034d5690cf33b4d22ea4ac8a6f89610e00094daa75fd40e01b1b7fbd0c0d', 1, 3, 'authToken', '[]', 0, '2021-03-04 19:00:16', '2021-03-04 19:00:16', '2022-03-04 19:00:16'),
('aef3c5baa7c7eb970a272f8a28f167f8197de850214c2eb67134da71f44b6253da92b39a471a86f1', 1, 3, 'authToken', '[]', 0, '2021-02-05 13:57:47', '2021-02-05 13:57:47', '2022-02-05 19:57:47'),
('b11c36801c5d608357465db171a897208d69416c9c9c34cb852a51e50c31ebda28aed719ad145c78', 1, 3, 'authToken', '[]', 0, '2021-02-05 23:08:35', '2021-02-05 23:08:35', '2022-02-06 05:08:35'),
('b166801cfcae622474e3782cc0aa1b6a538d799ae4f73b10407819d21c37726821f1f76ca94b97e3', 1, 3, 'authToken', '[]', 0, '2021-02-24 15:58:29', '2021-02-24 15:58:29', '2022-02-24 15:58:29'),
('b190dfa58703a80dbb6a5978788944317b5563a6a79914d5ac795094320a523f781678f2a09a3d9b', 1, 3, 'authToken', '[]', 0, '2021-02-15 05:19:57', '2021-02-15 05:19:57', '2022-02-15 11:19:57'),
('bbcbfe7c262293009c020042805433966fb0f033dac0a63a9af3a09b8c1c75d72aa7c0c85d1eabd1', 1, 3, 'authToken', '[]', 0, '2021-02-15 09:27:47', '2021-02-15 09:27:47', '2022-02-15 15:27:47'),
('bbdf20abac58f664169bb1d3c99b33716c91faf6ca3df628b97c232c062f97b02886c96b80e23d85', 1, 3, 'authToken', '[]', 0, '2021-03-17 08:07:10', '2021-03-17 08:07:10', '2022-03-17 14:07:10'),
('bd02119d980bca2512892cb8f1e94be93aa6c0b73bc813a47a49c3fd970a37f93d03e06ffc01c8cc', 1, 3, 'authToken', '[]', 0, '2021-02-14 15:29:53', '2021-02-14 15:29:53', '2022-02-14 21:29:53'),
('bf5a8da8343ba80f32c6cae7aed4a2aabb23f8eb511c39a026418175aa91ab7f25a9e11d1c2d99a2', 1, 3, 'authToken', '[]', 0, '2021-02-01 15:34:28', '2021-02-01 15:34:28', '2022-02-01 15:34:28'),
('c27748aaab078b9ea8f82c78d17a2bd1c9387994807346407a2cf57a808446453e9865d6ba6a1e08', 1, 3, 'authToken', '[]', 0, '2021-03-16 18:04:41', '2021-03-16 18:04:41', '2022-03-17 00:04:41'),
('c35bda07e20cae5ad3f202b2bb63da9045672e08f6e424100b24259f044926de0ac1e959ce7ad9dc', 1, 3, 'authToken', '[]', 0, '2021-02-04 12:17:30', '2021-02-04 12:17:30', '2022-02-04 18:17:30'),
('c418adcac2ddd6ab5d4a77761566647ca4abffd81784aa2bb36804483dd412edafba2d560a44a7ae', 1, 3, 'authToken', '[]', 0, '2021-02-03 01:21:28', '2021-02-03 01:21:28', '2022-02-03 07:21:28'),
('cacde64fab30e99e2f32ac81fe173463bbc94972d6e86e5ae6e9e1ef2ec7e9b67109155e19c66d18', 1, 3, 'authToken', '[]', 0, '2021-02-07 07:34:59', '2021-02-07 07:34:59', '2022-02-07 13:34:59'),
('cb6960931b348ddafa338e38f20971aecdb2105441bf3af4e457efbffd8072c55874976c40a69dcb', 1, 3, 'authToken', '[]', 0, '2021-02-21 01:37:59', '2021-02-21 01:37:59', '2022-02-21 07:37:59'),
('cc764d2eb06cacf0a0d711db2299d68b3b7a1bb843847842d9b58543028229280a5ce1e79ae9ce1b', 1, 3, 'authToken', '[]', 0, '2021-03-04 16:07:51', '2021-03-04 16:07:51', '2022-03-04 16:07:51'),
('ccf43ce01dad69bad95a58bfa8bc8f4d366b7804fb07fd989c6cead2128f96232d45a2a5d7da2758', 1, 3, 'authToken', '[]', 0, '2021-03-14 19:07:44', '2021-03-14 19:07:44', '2022-03-14 19:07:44'),
('cd46ca8b58476807ae29e3b5f0a3c1d52ed73cb67e2a9e9923764f9e40b46fa9d98b87f69c067647', 1, 3, 'authToken', '[]', 0, '2021-02-06 03:46:42', '2021-02-06 03:46:42', '2022-02-06 09:46:42'),
('d0f6013cdba5a13aed1f830d6d9317bc8d5ab5a7a8cdbd485ef6a856bd2ee20e8f2db66176cb856a', 1, 3, 'authToken', '[]', 0, '2021-02-07 08:23:32', '2021-02-07 08:23:32', '2022-02-07 14:23:32'),
('d1d128fd3c71a8f8c87ed7e44068d3e0a23a9499051b93b4a235693bcc66bf5266a4e738e42f173c', 1, 3, 'authToken', '[]', 0, '2021-02-15 11:48:23', '2021-02-15 11:48:23', '2022-02-15 17:48:23'),
('d3bf925f8e16a8d6af206f52295a0beff995c112c1df6ea6af49550702acd0dc1b231e990ca1259e', 1, 3, 'authToken', '[]', 0, '2021-02-20 23:36:27', '2021-02-20 23:36:27', '2022-02-21 05:36:27'),
('d5df8f83baedd72c80de7727ad7b7c70d74cc2e5fa18c205abb64d93e47d2860b68186ac8c70aca9', 1, 3, 'authToken', '[]', 0, '2021-02-20 23:32:28', '2021-02-20 23:32:28', '2022-02-21 05:32:28'),
('d8839c9cb01291a992b82abebe5335b3191c55099ff34266cc0054fbab774990667ee2cfd0a8bbd5', 16, 3, 'authToken', '[]', 0, '2021-02-07 05:39:20', '2021-02-07 05:39:20', '2022-02-07 11:39:20'),
('d9e3cc4649454e7fb9c095a33a009197bdb37173e77a6e0e4cedc102ef7ecbd66b69f20168360990', 1, 3, 'authToken', '[]', 0, '2021-02-14 15:26:27', '2021-02-14 15:26:27', '2022-02-14 21:26:27'),
('dc787504970c44a3c099796dca973cc5a9be6757c298b69baa3cd4941d93e0e724337adcf914d5df', 1, 3, 'authToken', '[]', 0, '2021-02-21 01:54:00', '2021-02-21 01:54:00', '2022-02-21 07:54:00'),
('dccba1a8c7f2c5e19f8a789f5edf8b06c12f23484ca40eec919825b9dbc4d76102aa36eb4771457b', 1, 3, 'authToken', '[]', 0, '2021-01-25 10:52:33', '2021-01-25 10:52:33', '2022-01-25 16:52:33'),
('dcda804d5a635280a85fce19a48beb9bbcbcfff9316646355cbe386a0db04ba82564fe045645376f', 1, 3, 'authToken', '[]', 0, '2021-03-17 07:38:37', '2021-03-17 07:38:37', '2022-03-17 13:38:37'),
('e70979bb5ec29fa14a442b6554f2fa9dd84d01749e71a7326d359a61cb1a1db5bc443c044584b924', 1, 3, 'authToken', '[]', 0, '2021-02-21 10:03:50', '2021-02-21 10:03:50', '2022-02-21 10:03:50'),
('e7a871f5115861e4c3e745a09c33590ca9221cb7e066c6fda584f4e9d4416a81eb35f45913c8fa24', 1, 3, 'authToken', '[]', 0, '2021-02-21 00:08:04', '2021-02-21 00:08:04', '2022-02-21 06:08:04'),
('e7cd908afc6be0d1aec5af78076cfc14bf0db937f0787a683c8cfee10b136cc366ca5ddff6837e53', 2, 3, 'authToken', '[]', 0, '2021-01-16 11:13:14', '2021-01-16 11:13:14', '2022-01-16 17:13:14'),
('ed5fbdf1518ec672e4cb60d18d8bb0073e02541a66e018dc4137c70559fd7df60410a6bcc46a2c2b', 1, 3, 'authToken', '[]', 0, '2021-02-14 15:28:18', '2021-02-14 15:28:18', '2022-02-14 21:28:18'),
('eec883cca1c7fa3c97fe58f36865cf6e92decb8a4b99f82d289cbdf5a2d6c29925dcc7a375d291c7', 1, 3, 'authToken', '[]', 0, '2021-02-18 23:08:27', '2021-02-18 23:08:27', '2022-02-19 05:08:27'),
('ef00d9dfdba7779a9168a0b15f4a34df588c83bc37630ff0e9b90e25d24fa4e0496d9aa80ac961d5', 1, 3, 'authToken', '[]', 0, '2021-03-04 18:50:55', '2021-03-04 18:50:55', '2022-03-04 18:50:55'),
('f2b573f55d93972a693779388ba5b81801825beb801d44993edcb3df3f783aaea3767ae7dfeecf21', 1, 3, 'authToken', '[]', 0, '2021-03-17 07:31:50', '2021-03-17 07:31:50', '2022-03-17 13:31:50'),
('f422456859d1c7f32cd51784dddfe6e306505b798c16a89daa9406d513c17e537e93b2fb63a61696', 1, 3, 'authToken', '[]', 0, '2021-03-04 16:23:40', '2021-03-04 16:23:40', '2022-03-04 16:23:40'),
('f4d734b8c2a8ce6343fd8584f2748bb7a54d29289c5952cefe996c7c2a5b6c864091708ff9ac16f5', 1, 3, 'authToken', '[]', 0, '2021-03-04 16:33:15', '2021-03-04 16:33:15', '2022-03-04 16:33:15'),
('f580690c46c6b8718ccf61553d9a738d8986438b8f586fc3c8efe62f351c73c64022a7fa812d1ed3', 1, 1, 'authToken', '[]', 0, '2020-12-12 07:38:12', '2020-12-12 07:38:12', '2021-12-12 13:38:12'),
('fb206b24342ea1ef7572cdeac731fa45d9566e8fc5b3d6254a03d8b21e48080429b462b90ee9ee05', 1, 3, 'authToken', '[]', 0, '2021-02-05 13:19:35', '2021-02-05 13:19:35', '2022-02-05 19:19:35'),
('fc4e4b1a10dbb4f84acf4f237db4163d05620d80e43c81f07851d30f7270a3d7ddd60414fe528d7c', 1, 3, 'authToken', '[]', 0, '2021-02-07 08:08:59', '2021-02-07 08:08:59', '2022-02-07 14:08:59'),
('fc5f27aff0940326da09fb859e9d59a2a1e14c4f9181e19fc0e91335d819b010ae0e01501f0d24aa', 1, 3, 'authToken', '[]', 0, '2021-03-15 16:02:30', '2021-03-15 16:02:30', '2022-03-15 16:02:30'),
('fc8f90321907b62dc1cd51be0e2c94b1ec5b4f3af72bd3df8419aedbb5d1762f1315825465078a1a', 1, 3, 'authToken', '[]', 0, '2021-03-04 19:03:39', '2021-03-04 19:03:39', '2022-03-04 19:03:39'),
('ff2ab1f7755c24b81c6f17ab917b482d0c2682d638dc96f43a440d33d37287658aa72603ba451119', 1, 3, 'authToken', '[]', 0, '2021-02-24 16:51:51', '2021-02-24 16:51:51', '2022-02-24 16:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
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

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'iApps Personal Access Client', 'glxjqnd2b5WaMAzseMhbjlooZWXV7qt305T1PiAP', NULL, 'http://localhost', 1, 0, 0, '2020-12-06 19:35:39', '2020-12-06 19:35:39'),
(2, NULL, 'iApps Password Grant Client', 'OsNo8CvE0wysryhxXMUMuI3k5SjGhVP9qkVuWOOk', 'users', 'http://localhost', 0, 1, 0, '2020-12-06 19:35:39', '2020-12-06 19:35:39'),
(3, NULL, 'iApps Personal Access Client', 'IQtabjRKlQYXChq7FXqKqu4hxWjahgKz1s5wsUjc', NULL, 'http://localhost', 1, 0, 0, '2021-01-09 12:23:02', '2021-01-09 12:23:02'),
(4, NULL, 'iApps Password Grant Client', 'at1ZUajdPn0gfcJmH4kEehkiwgTbXY6EypIDLaxE', 'users', 'http://localhost', 0, 1, 0, '2021-01-09 12:23:02', '2021-01-09 12:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-12-06 19:35:39', '2020-12-06 19:35:39'),
(2, 3, '2021-01-09 12:23:02', '2021-01-09 12:23:02');

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
-- Table structure for table `order_statuses`
--

CREATE TABLE `order_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `order_create_date` datetime NOT NULL,
  `confirmed_by_vendor_date` datetime DEFAULT NULL,
  `shipped_by_vendor_date` datetime DEFAULT NULL,
  `delivery_by_vendor_date` datetime DEFAULT NULL,
  `received_by_customer_date` datetime DEFAULT NULL,
  `feedback_by_customer_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_statuses`
--

INSERT INTO `order_statuses` (`id`, `transaction_id`, `order_create_date`, `confirmed_by_vendor_date`, `shipped_by_vendor_date`, `delivery_by_vendor_date`, `received_by_customer_date`, `feedback_by_customer_date`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-02-03 15:17:26', '2021-02-05 15:17:26', '2021-02-09 15:17:26', '2021-02-12 15:17:26', '2021-02-13 15:17:26', '2021-02-14 15:17:26', '2021-02-21 09:17:57', '2021-02-21 09:17:57'),
(2, 2, '2021-02-03 15:17:26', '2021-02-05 15:17:26', '2021-02-09 15:17:26', NULL, NULL, NULL, '2021-02-21 09:17:57', '2021-02-21 09:17:57'),
(3, 3, '2021-02-03 15:17:26', '2021-02-05 15:17:26', '2021-02-09 15:17:26', '2021-02-11 15:18:13', NULL, NULL, '2021-02-21 09:17:57', '2021-02-21 09:17:57');

-- --------------------------------------------------------

--
-- Table structure for table `otps`
--

CREATE TABLE `otps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `otps`
--

INSERT INTO `otps` (`id`, `phone_no`, `otp`, `expire_date`, `created_at`, `updated_at`) VALUES
(1, '8801951233084', '691525', '2021-01-29 01:53:58', '2021-01-29 01:43:59', '2021-01-29 01:48:58'),
(2, '8801951233081', '574071', '2021-02-01 16:12:28', '2021-02-01 16:07:28', '2021-02-01 16:07:28'),
(3, '8801951233123', '282010', '2021-02-09 13:19:59', '2021-02-09 13:13:17', '2021-02-09 13:14:59'),
(4, '8801951233090', '372042', '2021-02-09 13:20:47', '2021-02-09 13:15:47', '2021-02-09 13:15:47'),
(5, '8801951233009', '904801', '2021-02-09 23:04:06', '2021-02-09 22:59:06', '2021-02-09 22:59:06'),
(12, '8801951233041', '561816', '2021-02-10 00:07:28', '2021-02-10 00:02:28', '2021-02-10 00:02:28'),
(13, '8801951233042', '518541', '2021-02-10 00:15:25', '2021-02-10 00:10:25', '2021-02-10 00:10:25');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'Null if page has no category',
  `article_type_id` bigint(11) UNSIGNED DEFAULT NULL COMMENT 'If Article Belongs to a Type',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=>active, 0=>inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `total_reaction` bigint(20) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'total reaction count',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `group_name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'product.create', 'Product', 'api', '2021-02-20 20:46:43', '2021-02-20 20:46:43'),
(2, 'product.edit', 'Product', 'api', '2021-02-20 20:47:16', '2021-02-20 20:47:16'),
(3, 'product.delete', 'Product', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(4, 'product.view', 'Product', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(5, 'all_business.view', 'Business', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(6, 'category.view', 'Category', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(7, 'category.create', 'Category', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(8, 'category.edit', 'Category', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(9, 'category.delete', 'Category', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(10, 'brand.view', 'Brand', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(11, 'brand.create', 'Brand', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(12, 'brand.edit', 'Brand', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(13, 'brand.delete', 'Brand', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(14, 'attribute.view', 'Attribute', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(15, 'attribute.create', 'Attribute', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(16, 'attribute.edit', 'Attribute', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(17, 'attribute.delete', 'Attribute', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(18, 'coupon.view', 'Coupon', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(19, 'coupon.create', 'Coupon', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(20, 'coupon.edit', 'Coupon', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(21, 'coupon.delete', 'Coupon', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(22, 'voucher.view', 'Voucher', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(23, 'voucher.create', 'Voucher', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(24, 'voucher.edit', 'Voucher', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(25, 'voucher.delete', 'Voucher', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(26, 'giftcard.view', 'Gift Card', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(27, 'giftcard.create', 'Gift Card', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(28, 'giftcard.edit', 'Gift Card', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(29, 'giftcard.delete', 'Gift Card', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(30, 'user.create', 'User', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(31, 'user.edit', 'User', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(32, 'user.view', 'User', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(33, 'user.delete', 'User', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(34, 'role.view', 'Role', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(35, 'role.create', 'Role', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(36, 'role.edit', 'Role', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17'),
(37, 'role.delete', 'Role', 'api', '2021-02-20 20:47:17', '2021-02-20 20:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE `polls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_item_comparison` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'If item comparison is enable, then user need to input for item1 and item2',
  `type` enum('radio','checkbox','select','text') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'radio' COMMENT 'Process of voting system',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=>active, 0=>inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `polls`
--

INSERT INTO `polls` (`id`, `title`, `description`, `slug`, `image`, `enable_item_comparison`, `type`, `status`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 'Service', 'Test', 'service', NULL, 1, 'radio', 1, NULL, 1, NULL, NULL, '2021-02-14 15:51:19', '2021-02-14 15:51:19'),
(2, 'Service Updated', 'string', 'which-seller-is-favorite-seller-', NULL, 0, 'radio', 1, NULL, 1, 1, NULL, '2021-02-14 21:17:46', '2021-02-14 21:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `poll_options`
--

CREATE TABLE `poll_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'if poll is associated with item comparison',
  `poll_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poll_options`
--

INSERT INTO `poll_options` (`id`, `value`, `item_id`, `poll_id`, `created_at`, `updated_at`) VALUES
(1, 'Seller 1', NULL, 2, '2021-02-14 21:17:46', '2021-02-14 21:17:46'),
(2, 'Seller Final 2', NULL, 2, '2021-02-14 21:17:46', '2021-02-14 21:37:23'),
(3, 'Seller Final New', NULL, 2, '2021-02-14 21:37:52', '2021-02-14 21:37:52');

-- --------------------------------------------------------

--
-- Table structure for table `poll_responses`
--

CREATE TABLE `poll_responses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `poll_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL COMMENT 'anynomus user can give vote',
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'anynomus user can give vote',
  `poll_option_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `referee_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Who Registered',
  `referrer_id` bigint(20) UNSIGNED NOT NULL COMMENT 'By Whom Registered',
  `source_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_date_time` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referral_rules`
--

CREATE TABLE `referral_rules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enable_registration_referral` tinyint(1) NOT NULL DEFAULT '0',
  `registration_referral_amount` double(8,2) NOT NULL DEFAULT '0.00' COMMENT 'Registration Referral Amount',
  `enable_purchase_referral` tinyint(1) NOT NULL DEFAULT '0',
  `purchase_referral_amount` double(8,2) NOT NULL DEFAULT '0.00' COMMENT 'purchase Referral Amount',
  `purchase_referral_amount_type` enum('fixed','purchase','item') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fixed' COMMENT 'purchase Referral Amount purchase_referral_amount_type',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Vendor', 'api', '2021-02-07 11:35:13', '2021-02-07 11:35:13'),
(2, 'Customer', 'api', '2021-02-07 11:35:26', '2021-02-07 11:35:26'),
(3, 'Main Vendor', 'api', '2021-02-21 00:54:13', '2021-02-21 00:54:13'),
(4, 'Vendor Employee', 'api', '2021-02-21 00:54:38', '2021-02-21 00:54:38');

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
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 3),
(16, 3),
(17, 3),
(18, 3),
(19, 3),
(20, 3),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3),
(26, 3),
(27, 3),
(28, 3),
(29, 3),
(30, 3),
(31, 3),
(32, 3),
(33, 3),
(34, 3),
(35, 3),
(36, 3),
(37, 3),
(1, 4),
(2, 4),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_text_enable` tinyint(1) NOT NULL DEFAULT '1',
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_button_enable` tinyint(1) NOT NULL DEFAULT '1',
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `priority` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `business_id`, `image`, `is_text_enable`, `text`, `text_color`, `is_button_enable`, `button_text`, `button_link`, `button_color`, `status`, `priority`, `created_at`, `updated_at`) VALUES
(4, 'Checking', NULL, 6, 'slider--1613403488.webp', 1, 'Testing', '#df0c0c', 1, 'test', 'https://devsenv.atlassian.net/', NULL, 1, 1, '2021-02-15 09:38:08', '2021-02-15 09:38:08'),
(5, 'Test', NULL, 5, 'slider--1613404397.jpeg', 1, '45r', '#d70909', 1, 'we', 'https://devsenv.atlassian.net/', NULL, 1, 1, '2021-02-15 09:53:17', '2021-02-15 09:53:17'),
(9, '234234', NULL, 5, 'slider--1613404442.png', 0, NULL, NULL, 0, NULL, NULL, NULL, 1, 1, '2021-02-15 09:54:02', '2021-02-15 09:54:02'),
(15, '345345', '<p>5453453</p>', 7, 'slider--1613408638.webp', 1, '35345', '#ff0505', 1, '4535', 'https://mail.google.com/mail/u/0/#inbox', NULL, 1, 1, '2021-02-15 09:54:53', '2021-02-15 11:03:58'),
(17, 'Ecommerce', '<p>This is testing description.</p>', 1, 'slider--1613411401.png', 1, 'Testing text', '#1ecc72', 1, 'Preview', 'https://devsenv.atlassian.net/', '#f0a35c', 1, 1, '2021-02-15 11:50:01', '2021-02-15 11:50:01');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sms` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `supplier_business_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'BIN = Business Identification Number',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landmark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternate_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_term_number` bigint(20) UNSIGNED DEFAULT NULL,
  `pay_term_type` enum('days','months') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tax_rates`
--

CREATE TABLE `tax_rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calculation_type` enum('fixed','percentage') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'percentage',
  `amount` double(8,2) NOT NULL,
  `is_tax_group` tinyint(1) NOT NULL DEFAULT '0',
  `rounding_type` enum('up','down','normal') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'normal',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tax_rates`
--

INSERT INTO `tax_rates` (`id`, `business_id`, `name`, `calculation_type`, `amount`, `is_tax_group`, `rounding_type`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Govt Tax', 'percentage', 10.00, 0, 'normal', 1, NULL, '2020-11-12 20:58:03', '2020-11-12 20:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('purchase','sell','opening_stock','purchase_return','sell_return','cashback','cashback_transfer_wallet','voucher','voucher_transfer_wallet','gift_card','gift_card_transfer_wallet','referrel','referrel_transfer_wallet') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=>active, 0=>inactive',
  `delivery_status` enum('delivered','not_delivered') COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` enum('paid','due') COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Title needed for all other transactions which needs to store a default title',
  `invoice_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_date` datetime NOT NULL,
  `total_before_tax` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT 'Total before the purchase/invoice tax, this includeds the indivisual product tax',
  `tax_amount` decimal(8,2) NOT NULL DEFAULT '0.00',
  `discount_type_id` bigint(20) UNSIGNED NOT NULL,
  `tax_id` bigint(20) UNSIGNED NOT NULL,
  `discount_amount` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charges` decimal(8,2) NOT NULL DEFAULT '0.00',
  `additional_notes` text COLLATE utf8mb4_unicode_ci,
  `staff_note` text COLLATE utf8mb4_unicode_ci,
  `paid_total` decimal(8,2) NOT NULL DEFAULT '0.00',
  `due_total` decimal(8,2) NOT NULL DEFAULT '0.00',
  `final_total` decimal(8,2) NOT NULL DEFAULT '0.00',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `business_id`, `type`, `status`, `delivery_status`, `payment_status`, `title`, `invoice_no`, `ref_no`, `transaction_date`, `total_before_tax`, `tax_amount`, `discount_type_id`, `tax_id`, `discount_amount`, `shipping_details`, `order_quantity`, `shipping_charges`, `additional_notes`, `staff_note`, `paid_total`, `due_total`, `final_total`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'sell', 1, 'not_delivered', 'due', 'string', '1', '1', '2021-01-30 00:00:00', '0.00', '0.00', 1, 1, '0', 'string', '2', '0.00', 'string', 'string', '200.00', '200.00', '200.00', 1, NULL, '2021-01-30 20:02:15', '2021-01-30 20:02:15'),
(2, 1, 'sell', 1, 'not_delivered', 'due', 'string', '1', '2', '2021-02-04 00:00:00', '0.00', '0.00', 1, 1, '0', 'string', '2', '0.00', 'string', 'string', '200.00', '200.00', '200.00', 1, NULL, '2021-02-04 13:41:14', '2021-02-04 13:41:14'),
(3, 1, 'sell', 1, 'not_delivered', 'due', 'string', '1', '1', '2021-02-05 00:00:00', '0.00', '0.00', 1, 1, '0', 'string', '2', '0.00', 'string', 'string', '200.00', '200.00', '200.00', 1, NULL, '2021-02-04 21:07:01', '2021-02-04 21:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_sell_lines`
--

CREATE TABLE `transaction_sell_lines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` decimal(8,2) DEFAULT NULL COMMENT 'Sell price excluding tax',
  `unit_price_inc_tax` decimal(8,2) DEFAULT NULL COMMENT 'Sell price including tax',
  `discount_amount` double(8,2) NOT NULL DEFAULT '0.00',
  `item_tax` decimal(8,2) NOT NULL COMMENT 'Tax for one quantity',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_sell_lines`
--

INSERT INTO `transaction_sell_lines` (`id`, `transaction_id`, `item_id`, `business_id`, `quantity`, `unit_price`, `unit_price_inc_tax`, `discount_amount`, `item_tax`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 2, '100.00', '120.00', 0.00, '0.00', 1, '2021-01-30 20:02:15', '2021-01-30 20:02:15'),
(2, 2, 1, 1, 2, '100.00', '120.00', 0.00, '0.00', 1, '2021-02-04 13:41:14', '2021-02-04 13:41:14'),
(3, 3, 1, 1, 1, '100.00', '120.00', 0.00, '0.00', 1, '2021-02-04 21:07:01', '2021-02-04 21:07:01'),
(4, 3, 9, 4, 2, '300.00', '320.00', 0.00, '0.00', 1, '2021-02-04 21:07:01', '2021-02-04 21:07:01'),
(5, 3, 4, 1, 3, '500.00', '520.00', 0.00, '0.00', 1, '2021-02-04 21:07:01', '2021-02-04 21:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `actual_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allow_decimal` tinyint(1) NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `business_id`, `actual_name`, `short_name`, `allow_decimal`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Piece', 'Pc', 1, 1, NULL, '2020-11-12 20:56:41', '2020-11-12 20:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'It will be null if user is totally new',
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` char(4) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('customer','vendor','','') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `status` enum('active','inactive','banned','account_deleted') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `business_id`, `first_name`, `surname`, `last_name`, `username`, `email`, `phone_no`, `password`, `language`, `avatar`, `banner`, `remember_token`, `type`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Maniruzzaman', NULL, 'AKash', 'akash', 'seller@example.com', '012135489534', '$2y$10$r8dsmRYGQn4l/c03uNuZP.sYXJyqIAWB9eMoAQHxpsIxz5KN6w8E6', 'en', NULL, NULL, NULL, 'vendor', 'active', NULL, '2020-11-04 12:14:12', '2021-03-04 18:14:28'),
(9, NULL, 'Maniruzzaman', NULL, 'Akash', 'maniruzzaman', 'akash@example.com', '01951233081', '$2y$10$l7EmfijVTsuZDmNMWcwlsONfq906M9IuFIhQ9j8F/Y..xg7Vk44sq', 'en', NULL, NULL, NULL, 'customer', 'active', NULL, '2021-02-01 16:07:28', '2021-02-01 16:07:46'),
(15, NULL, 'Test User', NULL, 'last', 'testuser3', 'akash14@mail.com', '019512330114', '$2y$10$7eD5xAPkUeKL/3knh0quLOnnQ0MQx5Sd6yyQsfHOLowQWxTmrXA76', 'en', NULL, NULL, NULL, 'customer', 'inactive', NULL, '2021-02-07 05:28:08', '2021-02-07 05:28:08'),
(16, NULL, 'Seller Shop', NULL, 'last', 'sellershop', 'akash90@mail.com', '019512330190', '$2y$10$raCpwWcTKR1DrcMY1C87EOVPWF98V3G4kB8amihuzLZ0v0yPv15E2', 'en', NULL, NULL, NULL, 'customer', 'inactive', NULL, '2021-02-07 05:39:20', '2021-02-07 05:39:20'),
(18, NULL, 'Seller Shop2', NULL, 'last', 'sellershop2', 'akash111@mail.com', '0195123301111', '$2y$10$IhJVQeFE7DJuQ.AvlLua9O8YL.5Af6R11bzEYLsI5l9Uqh5FWv8ri', 'en', NULL, NULL, NULL, 'customer', 'inactive', NULL, '2021-02-07 05:44:24', '2021-02-07 05:44:24'),
(25, 9, 'Test Vendor', NULL, NULL, 'testvendor', 'vendor41@mail.com', '01951233041', '$2y$10$3eRk7Wr6bRRmi819eoLtXu6ZToGLh6qMYscLSqCOqWXroVKA2gdJq', 'en', NULL, NULL, NULL, 'customer', 'active', NULL, '2021-02-10 00:05:31', '2021-02-10 00:05:31'),
(26, 10, 'Test Vendor', NULL, NULL, 'testvendor1', 'vendor42@mail.com', '01951233042', '$2y$10$HJ9W9uA.yBBZPfx92XBlBu4.C/BHfSIdQdGDz59BnwZADrOd6WchG', 'en', NULL, NULL, NULL, 'customer', 'active', NULL, '2021-02-10 00:14:43', '2021-02-10 00:14:43'),
(28, 1, 'Maniruzzaman', NULL, 'Akash', 'akashcse', 'manirujjamanakash12@gmail.com', '01951233012', '$2y$10$aKRiCyiS8/.0WjUG6covC.Pv.7KbHnYj3bXJhdtIDknnQI6At4iZO', 'en', NULL, NULL, NULL, 'customer', 'inactive', NULL, '2021-02-21 00:23:56', '2021-02-21 02:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_value_for` double(8,2) NOT NULL DEFAULT '0.00' COMMENT 'What Price value it will take from customer',
  `change_price_value` double(8,2) NOT NULL DEFAULT '0.00' COMMENT 'What Price will return customer as card value',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=>active, 0=>inactive',
  `description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`id`, `title`, `slug`, `image`, `price_value_for`, `change_price_value`, `status`, `description`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 'Boishakhi Card', 'boishakhi-card', 'giftCard--1613337328.jpg', 5000.00, 6500.00, 1, '<p>Simple Description</p>', NULL, 1, NULL, NULL, '2021-02-10 04:33:13', '2021-02-14 15:15:28'),
(2, 'Boishakhi Card 2', 'boishakhi-card-2', 'giftCard--1613337317.png', 50020.00, 65200.00, 1, '<p>Simple Description</p>', NULL, 1, NULL, NULL, '2021-02-10 06:38:04', '2021-02-14 15:15:17');

-- --------------------------------------------------------

--
-- Table structure for table `websockets_statistics_entries`
--

CREATE TABLE `websockets_statistics_entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peak_connection_count` int(11) NOT NULL,
  `websocket_message_count` int(11) NOT NULL,
  `api_message_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `item_id`, `created_at`, `updated_at`) VALUES
(1, 1, 51, '2021-02-15 05:21:35', '2021-02-15 05:21:35'),
(2, 1, 1, '2021-03-04 17:04:32', '2021-03-04 17:04:32'),
(3, 1, 46, '2021-03-07 15:21:09', '2021-03-07 15:21:09'),
(4, 1, 63, '2021-03-14 19:41:24', '2021-03-14 19:41:24'),
(5, 1, 62, '2021-03-14 19:41:29', '2021-03-14 19:41:29'),
(6, 1, 61, '2021-03-14 19:41:36', '2021-03-14 19:41:36'),
(7, 1, 55, '2021-03-14 19:42:19', '2021-03-14 19:42:19'),
(8, 1, 64, '2021-03-16 05:06:42', '2021-03-16 05:06:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attributes_category_id_foreign` (`category_id`),
  ADD KEY `attributes_business_id_foreign` (`business_id`);

--
-- Indexes for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_values_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `barcode_types`
--
ALTER TABLE `barcode_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `barcode_types_code_unique` (`code`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brands_business_id_foreign` (`business_id`),
  ADD KEY `brands_created_by_foreign` (`created_by`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`),
  ADD KEY `business_owner_id_foreign` (`owner_id`),
  ADD KEY `business_currency_id_foreign` (`currency_id`);

--
-- Indexes for table `business_locations`
--
ALTER TABLE `business_locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `business_locations_business_id_foreign` (`business_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_business_id_foreign` (`business_id`),
  ADD KEY `categories_created_by_foreign` (`created_by`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coupons_coupon_type_id_foreign` (`coupon_type_id`),
  ADD KEY `coupons_business_id_foreign` (`business_id`);

--
-- Indexes for table `coupon_types`
--
ALTER TABLE `coupon_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_business_id_foreign` (`business_id`),
  ADD KEY `customers_created_by_foreign` (`created_by`);

--
-- Indexes for table `customer_groups`
--
ALTER TABLE `customer_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_groups_business_id_foreign` (`business_id`);

--
-- Indexes for table `discount_types`
--
ALTER TABLE `discount_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `discount_types_business_id_foreign` (`business_id`),
  ADD KEY `discount_types_created_by_foreign` (`created_by`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gift_cards`
--
ALTER TABLE `gift_cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gift_cards_created_by_foreign` (`created_by`),
  ADD KEY `gift_cards_updated_by_foreign` (`updated_by`),
  ADD KEY `gift_cards_deleted_by_foreign` (`deleted_by`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_business_id_foreign` (`business_id`),
  ADD KEY `invoices_transaction_id_foreign` (`transaction_id`),
  ADD KEY `invoices_created_by_foreign` (`created_by`),
  ADD KEY `invoices_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `invoice_items`
--
ALTER TABLE `invoice_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_items_business_id_foreign` (`business_id`),
  ADD KEY `invoice_items_transaction_id_foreign` (`transaction_id`),
  ADD KEY `invoice_items_item_id_foreign` (`item_id`);

--
-- Indexes for table `invoice_statuses`
--
ALTER TABLE `invoice_statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_statuses_invoice_id_foreign` (`invoice_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_tax_foreign` (`tax`),
  ADD KEY `items_business_id_foreign` (`business_id`),
  ADD KEY `items_unit_id_foreign` (`unit_id`),
  ADD KEY `items_brand_id_foreign` (`brand_id`),
  ADD KEY `items_category_id_foreign` (`category_id`),
  ADD KEY `items_sub_category_id_foreign` (`sub_category_id`),
  ADD KEY `items_created_by_foreign` (`created_by`),
  ADD KEY `items_name_index` (`name`),
  ADD KEY `items_sku_index` (`sku`),
  ADD KEY `items_sku_manual_index` (`sku_manual`),
  ADD KEY `name` (`name`),
  ADD KEY `sku` (`sku`);

--
-- Indexes for table `item_attributes`
--
ALTER TABLE `item_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_attributes_business_id_foreign` (`business_id`),
  ADD KEY `item_attributes_attribute_id_foreign` (`attribute_id`),
  ADD KEY `item_attributes_item_id_foreign` (`item_id`);

--
-- Indexes for table `item_images`
--
ALTER TABLE `item_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_images_business_id_foreign` (`business_id`),
  ADD KEY `item_images_item_id_foreign` (`item_id`);

--
-- Indexes for table `item_ratings`
--
ALTER TABLE `item_ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_ratings_item_id_foreign` (`item_id`),
  ADD KEY `item_ratings_user_id_foreign` (`user_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

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
-- Indexes for table `order_statuses`
--
ALTER TABLE `order_statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_statuses_transaction_id_foreign` (`transaction_id`);

--
-- Indexes for table `otps`
--
ALTER TABLE `otps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_business_id_slug_unique` (`business_id`,`slug`),
  ADD KEY `pages_created_by_foreign` (`created_by`),
  ADD KEY `pages_updated_by_foreign` (`updated_by`),
  ADD KEY `pages_deleted_by_foreign` (`deleted_by`),
  ADD KEY `pages_category_id_foreign` (`category_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `polls_created_by_foreign` (`created_by`),
  ADD KEY `polls_updated_by_foreign` (`updated_by`),
  ADD KEY `polls_deleted_by_foreign` (`deleted_by`);

--
-- Indexes for table `poll_options`
--
ALTER TABLE `poll_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poll_options_poll_id_foreign` (`poll_id`),
  ADD KEY `poll_options_item_id_foreign` (`item_id`);

--
-- Indexes for table `poll_responses`
--
ALTER TABLE `poll_responses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poll_responses_poll_id_foreign` (`poll_id`),
  ADD KEY `poll_responses_poll_option_id_foreign` (`poll_option_id`),
  ADD KEY `poll_responses_user_id_foreign` (`user_id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referral_rules`
--
ALTER TABLE `referral_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_business_id_foreign` (`business_id`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suppliers_business_id_foreign` (`business_id`),
  ADD KEY `suppliers_created_by_foreign` (`created_by`);

--
-- Indexes for table `tax_rates`
--
ALTER TABLE `tax_rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tax_rates_business_id_foreign` (`business_id`),
  ADD KEY `tax_rates_created_by_foreign` (`created_by`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_business_id_foreign` (`business_id`),
  ADD KEY `transactions_discount_type_id_foreign` (`discount_type_id`),
  ADD KEY `transactions_tax_id_foreign` (`tax_id`),
  ADD KEY `transactions_created_by_foreign` (`created_by`),
  ADD KEY `transactions_type_index` (`type`);

--
-- Indexes for table `transaction_sell_lines`
--
ALTER TABLE `transaction_sell_lines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_sell_lines_business_id_foreign` (`business_id`),
  ADD KEY `transaction_sell_lines_transaction_id_foreign` (`transaction_id`),
  ADD KEY `transaction_sell_lines_item_id_foreign` (`item_id`),
  ADD KEY `transaction_sell_lines_created_by_foreign` (`created_by`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD KEY `units_business_id_foreign` (`business_id`),
  ADD KEY `units_created_by_foreign` (`created_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_business_id_index` (`business_id`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vouchers_created_by_foreign` (`created_by`),
  ADD KEY `vouchers_updated_by_foreign` (`updated_by`),
  ADD KEY `vouchers_deleted_by_foreign` (`deleted_by`);

--
-- Indexes for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_item_id_foreign` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `attribute_values`
--
ALTER TABLE `attribute_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `barcode_types`
--
ALTER TABLE `barcode_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `business_locations`
--
ALTER TABLE `business_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `coupon_types`
--
ALTER TABLE `coupon_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_groups`
--
ALTER TABLE `customer_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discount_types`
--
ALTER TABLE `discount_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gift_cards`
--
ALTER TABLE `gift_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `invoice_items`
--
ALTER TABLE `invoice_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invoice_statuses`
--
ALTER TABLE `invoice_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `item_attributes`
--
ALTER TABLE `item_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `item_images`
--
ALTER TABLE `item_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `item_ratings`
--
ALTER TABLE `item_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_statuses`
--
ALTER TABLE `order_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `otps`
--
ALTER TABLE `otps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `polls`
--
ALTER TABLE `polls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `poll_options`
--
ALTER TABLE `poll_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `poll_responses`
--
ALTER TABLE `poll_responses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referral_rules`
--
ALTER TABLE `referral_rules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_rates`
--
ALTER TABLE `tax_rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaction_sell_lines`
--
ALTER TABLE `transaction_sell_lines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attributes`
--
ALTER TABLE `attributes`
  ADD CONSTRAINT `attributes_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `business` (`id`),
  ADD CONSTRAINT `attributes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD CONSTRAINT `attribute_values_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`);

--
-- Constraints for table `brands`
--
ALTER TABLE `brands`
  ADD CONSTRAINT `brands_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `business` (`id`),
  ADD CONSTRAINT `brands_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `business`
--
ALTER TABLE `business`
  ADD CONSTRAINT `business_currency_id_foreign` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`),
  ADD CONSTRAINT `business_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `business_locations`
--
ALTER TABLE `business_locations`
  ADD CONSTRAINT `business_locations_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `business` (`id`);

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `business` (`id`),
  ADD CONSTRAINT `categories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `coupons`
--
ALTER TABLE `coupons`
  ADD CONSTRAINT `coupons_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `business` (`id`),
  ADD CONSTRAINT `coupons_coupon_type_id_foreign` FOREIGN KEY (`coupon_type_id`) REFERENCES `coupon_types` (`id`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `business` (`id`),
  ADD CONSTRAINT `customers_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `customer_groups`
--
ALTER TABLE `customer_groups`
  ADD CONSTRAINT `customer_groups_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `business` (`id`);

--
-- Constraints for table `discount_types`
--
ALTER TABLE `discount_types`
  ADD CONSTRAINT `discount_types_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `business` (`id`),
  ADD CONSTRAINT `discount_types_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `gift_cards`
--
ALTER TABLE `gift_cards`
  ADD CONSTRAINT `gift_cards_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `gift_cards_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `gift_cards_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `business` (`id`),
  ADD CONSTRAINT `invoices_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `invoices_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`),
  ADD CONSTRAINT `invoices_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `invoice_items`
--
ALTER TABLE `invoice_items`
  ADD CONSTRAINT `invoice_items_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `business` (`id`),
  ADD CONSTRAINT `invoice_items_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `invoice_items_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`);

--
-- Constraints for table `invoice_statuses`
--
ALTER TABLE `invoice_statuses`
  ADD CONSTRAINT `invoice_statuses_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `items_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `business` (`id`),
  ADD CONSTRAINT `items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `items_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `items_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `items_tax_foreign` FOREIGN KEY (`tax`) REFERENCES `tax_rates` (`id`),
  ADD CONSTRAINT `items_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`);

--
-- Constraints for table `item_attributes`
--
ALTER TABLE `item_attributes`
  ADD CONSTRAINT `item_attributes_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`),
  ADD CONSTRAINT `item_attributes_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `business` (`id`),
  ADD CONSTRAINT `item_attributes_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Constraints for table `item_images`
--
ALTER TABLE `item_images`
  ADD CONSTRAINT `item_images_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `business` (`id`),
  ADD CONSTRAINT `item_images_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Constraints for table `item_ratings`
--
ALTER TABLE `item_ratings`
  ADD CONSTRAINT `item_ratings_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `item_ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

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
-- Constraints for table `order_statuses`
--
ALTER TABLE `order_statuses`
  ADD CONSTRAINT `order_statuses_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`);

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `business` (`id`),
  ADD CONSTRAINT `pages_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `pages_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pages_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pages_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `polls`
--
ALTER TABLE `polls`
  ADD CONSTRAINT `polls_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `polls_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `polls_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `poll_options`
--
ALTER TABLE `poll_options`
  ADD CONSTRAINT `poll_options_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `poll_options_poll_id_foreign` FOREIGN KEY (`poll_id`) REFERENCES `polls` (`id`);

--
-- Constraints for table `poll_responses`
--
ALTER TABLE `poll_responses`
  ADD CONSTRAINT `poll_responses_poll_id_foreign` FOREIGN KEY (`poll_id`) REFERENCES `polls` (`id`),
  ADD CONSTRAINT `poll_responses_poll_option_id_foreign` FOREIGN KEY (`poll_option_id`) REFERENCES `poll_options` (`id`),
  ADD CONSTRAINT `poll_responses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `business` (`id`);

--
-- Constraints for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `suppliers_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `business` (`id`),
  ADD CONSTRAINT `suppliers_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `tax_rates`
--
ALTER TABLE `tax_rates`
  ADD CONSTRAINT `tax_rates_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `business` (`id`),
  ADD CONSTRAINT `tax_rates_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `business` (`id`),
  ADD CONSTRAINT `transactions_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transactions_discount_type_id_foreign` FOREIGN KEY (`discount_type_id`) REFERENCES `discount_types` (`id`),
  ADD CONSTRAINT `transactions_tax_id_foreign` FOREIGN KEY (`tax_id`) REFERENCES `tax_rates` (`id`);

--
-- Constraints for table `transaction_sell_lines`
--
ALTER TABLE `transaction_sell_lines`
  ADD CONSTRAINT `transaction_sell_lines_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `business` (`id`),
  ADD CONSTRAINT `transaction_sell_lines_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transaction_sell_lines_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `transaction_sell_lines_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`);

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `units_business_id_foreign` FOREIGN KEY (`business_id`) REFERENCES `business` (`id`),
  ADD CONSTRAINT `units_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD CONSTRAINT `vouchers_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `vouchers_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `vouchers_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
