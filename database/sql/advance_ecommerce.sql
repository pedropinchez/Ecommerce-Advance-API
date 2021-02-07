-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2021 at 03:47 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `slug`, `business_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Color Upated', 'color-upated', 1, 21, '2021-02-06 11:22:21', '2021-02-06 07:25:03'),
(3, 'Size', 'size', 1, 21, '2021-02-06 05:34:34', '2021-02-06 05:34:34'),
(4, 'Size', 'size-1', 1, 21, '2021-02-06 05:35:07', '2021-02-06 05:35:07'),
(5, 'Size', 'size-2', 1, 21, '2021-02-06 05:35:11', '2021-02-06 05:35:11'),
(7, 'Size', 'size-4', 1, 21, '2021-02-06 05:39:27', '2021-02-06 05:39:27'),
(10, 'Color', 'color-1', 1, 21, '2021-02-06 05:52:56', '2021-02-06 05:52:56'),
(13, '4', '4', 1, 2, '2021-02-06 11:33:43', '2021-02-06 11:33:43'),
(17, 'test', 'test', 1, 3, '2021-02-06 11:38:43', '2021-02-06 11:38:43'),
(18, 'Final Test', 'final-test', 1, 2, '2021-02-06 11:42:16', '2021-02-06 11:42:16'),
(20, 'Battery Size', 'battery-size', 1, 20, '2021-02-06 13:05:09', '2021-02-06 13:25:29');

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
(9, 'Yellow 2', '#902921', 1, '2021-02-06 07:51:00', '2021-02-06 07:51:00'),
(10, '545', '45', 13, '2021-02-06 11:33:43', '2021-02-06 11:33:43'),
(11, '545', '45', 13, '2021-02-06 11:33:58', '2021-02-06 11:33:58'),
(12, '34', '34', 17, '2021-02-06 11:38:43', '2021-02-06 11:38:43'),
(13, '45', '54', 17, '2021-02-06 11:40:39', '2021-02-06 11:40:39'),
(14, '676', '67', 17, '2021-02-06 11:40:39', '2021-02-06 11:40:39'),
(15, '543', '534', 18, '2021-02-06 11:42:16', '2021-02-06 11:42:16'),
(16, '67', '67', 18, '2021-02-06 11:42:16', '2021-02-06 11:42:16'),
(32, '2000MAH', '2000MAH', 20, '2021-02-06 13:25:54', '2021-02-06 13:25:54');

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
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(10, 2, 'Test Brand', 'brand--1612330498.png', 'brand-banner--1612330498.jpg', 'Testing Description', 1, NULL, '2021-02-02 23:01:28', '2021-02-02 23:34:58'),
(11, 3, 'Test brand', 'brand--1612330393.png', NULL, 'test descrioon', 1, NULL, '2021-02-02 23:17:19', '2021-02-02 23:33:13');

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
  `default_profit_percent` double(5,2) NOT NULL DEFAULT 0.00,
  `owner_id` bigint(20) UNSIGNED DEFAULT NULL,
  `time_zone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Asia/Kolkata',
  `fy_start_month` tinyint(4) NOT NULL DEFAULT 1,
  `accounting_method` enum('fifo','lifo','avco') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fifo',
  `default_sales_discount` decimal(5,2) DEFAULT 0.00,
  `sell_price_tax` enum('includes','excludes') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'includes',
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku_prefix` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_tooltip` tinyint(1) NOT NULL DEFAULT 1,
  `enable_referrel_system` tinyint(1) NOT NULL DEFAULT 0,
  `is_main_shop` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `name`, `bin`, `currency_id`, `start_date`, `tax_number_1`, `tax_label_1`, `tax_number_2`, `tax_label_2`, `default_profit_percent`, `owner_id`, `time_zone`, `fy_start_month`, `accounting_method`, `default_sales_discount`, `sell_price_tax`, `logo`, `banner`, `sku_prefix`, `enable_tooltip`, `enable_referrel_system`, `is_main_shop`, `created_at`, `updated_at`) VALUES
(1, 'Maccaf Mall', 'Maccaf12019212', 1, '2020-11-01', '121212', 'Tax', '121212', 'Tax2', 10.00, 1, 'Asia/Kolkata', 1, 'fifo', '0.00', 'includes', 'vendor-maccaf.png', 'vendor-maccaf-banner.png', NULL, 1, 0, 1, '2020-11-04 18:32:32', '2020-11-04 18:32:32'),
(2, 'Bata Store', 'Bata121209', 1, '2020-11-01', '121212', 'Tax', '121212', 'Tax2', 10.00, 1, 'Asia/Kolkata', 1, 'fifo', '0.00', 'includes', 'vendor-bata.png', 'vendor-bata-banner.png', NULL, 1, 0, 0, '2020-11-04 18:32:32', '2020-11-04 18:32:32'),
(3, 'Shopno Bazaar', 'Shopnobazar', 1, '2020-11-01', '121212', 'Tax', '121212', 'Tax2', 10.00, 1, 'Asia/Kolkata', 1, 'fifo', '0.00', 'includes', 'vendor-shopno.jpg', 'vendor-shopno-banner.png', NULL, 1, 0, 0, '2020-11-04 18:32:32', '2020-11-04 18:32:32'),
(4, 'Rahim Store', 'rahimstore', 1, '2020-11-01', '121212', 'Tax', '121212', 'Tax2', 10.00, 1, 'Asia/Kolkata', 1, 'fifo', '0.00', 'includes', 'vendor-rahimstore.png', 'vendor-rahim-banner.png', NULL, 1, 0, 0, '2020-11-04 18:32:32', '2020-11-04 18:32:32'),
(5, 'Akash Shop', NULL, 1, NULL, NULL, 'Tax', NULL, NULL, 0.00, 15, 'Asia/Kolkata', 1, 'fifo', NULL, 'includes', NULL, NULL, NULL, 1, 0, 0, '2021-02-07 05:28:08', '2021-02-07 05:28:08'),
(6, 'Akash Shop', NULL, 1, NULL, NULL, 'Tax', NULL, NULL, 0.00, 16, 'Asia/Kolkata', 1, 'fifo', '0.00', 'includes', NULL, NULL, NULL, 1, 0, 0, '2021-02-07 05:39:20', '2021-02-07 05:39:20'),
(7, 'Akash Shop', NULL, 1, NULL, NULL, 'Tax', NULL, NULL, 0.00, 18, 'Asia/Kolkata', 1, 'fifo', '0.00', 'includes', NULL, NULL, NULL, 1, 0, 0, '2021-02-07 05:44:24', '2021-02-07 05:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `business_locations`
--

CREATE TABLE `business_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(6, 7, 'Akash Shop', NULL, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, 'akash111@mail.com', NULL, NULL, '2021-02-07 05:44:24', '2021-02-07 05:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `short_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'If Parent is null, it is the parent',
  `is_visible_homepage` tinyint(1) NOT NULL DEFAULT 0,
  `priority` int(11) NOT NULL DEFAULT 10,
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
(9, 'Gents Shirt', NULL, NULL, 1, 'gents-shirt', 'category-shirt.png', NULL, 8, 0, 10, 1, NULL, '2020-11-12 14:33:07', '2020-11-12 14:33:07'),
(19, 'Baby Corner', 'Test', NULL, 1, 'baby-corner', 'category-1607804161.png', NULL, 8, 1, 1, 1, NULL, '2020-12-12 14:16:01', '2020-12-12 14:16:01'),
(20, 'Sony Camera', 'Discover a wide range of Digital Cameras including Canon, Nikon, Sony, Samsung at best price in', '<p>Discover a wide range of Digital Cameras including Canon, Nikon, Sony, Samsung at best price in Bangladesh. Shop online or visit your nearest Star Tech</p>', 4, 'sony-camera', 'category-sony-camera-1612337279.png', NULL, 7, 1, 1, 1, NULL, '2020-12-12 14:21:41', '2021-02-03 01:27:59'),
(21, 'Test Category', 'Testing now', '<p>Testing </p>', 3, '409', 'category-409-1612337359.png', NULL, 4, 1, 4, 1, NULL, '2021-02-03 01:29:19', '2021-02-03 01:29:19');

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
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
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
  `amount` double(8,2) NOT NULL DEFAULT 0.00,
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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
  `price_value_for` double(8,2) NOT NULL DEFAULT 0.00 COMMENT 'What Price value it will take from customer',
  `change_price_value` double(8,2) NOT NULL DEFAULT 0.00 COMMENT 'What Price will return customer as card value',
  `card_type` enum('gift_card','vouchar') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'gift_card',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>active, 0=>inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_no` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Order ID',
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `total_amount` double(8,2) UNSIGNED NOT NULL DEFAULT 0.00,
  `total_discount` double(8,2) UNSIGNED NOT NULL DEFAULT 0.00,
  `grand_total` double(8,2) UNSIGNED NOT NULL DEFAULT 0.00,
  `paid_total` double(8,2) UNSIGNED NOT NULL DEFAULT 0.00,
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
(4, 1, 3, 4, 640.00, 0.00, 640.00, 0.00, 'due', 1, NULL, '2021-02-05', '2021-02-04 22:00:51', '2021-02-04 22:00:51');

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
  `qty` double(8,2) UNSIGNED NOT NULL DEFAULT 1.00,
  `amount` double(8,2) UNSIGNED NOT NULL DEFAULT 0.00,
  `discount_amount` double(8,2) UNSIGNED NOT NULL DEFAULT 0.00,
  `grand_total` double(8,2) UNSIGNED NOT NULL DEFAULT 0.00,
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
  `enable_stock` tinyint(1) NOT NULL DEFAULT 0,
  `alert_quantity` bigint(20) UNSIGNED NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode_type` enum('C39','C128','EAN-13','EAN-8','UPC-A','UPC-E','ITF-14') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku_manual` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_stock` int(10) UNSIGNED DEFAULT 0,
  `default_selling_price` float DEFAULT 0,
  `offer_selling_price` float DEFAULT 0,
  `is_offer_enable` tinyint(1) DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `featured_image`, `short_resolation_image`, `business_id`, `unit_id`, `brand_id`, `category_id`, `sub_category_id`, `sub_category_id2`, `tax`, `tax_type`, `enable_stock`, `alert_quantity`, `sku`, `barcode_type`, `sku_manual`, `current_stock`, `default_selling_price`, `offer_selling_price`, `is_offer_enable`, `description`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Samsung Gallaxy A1', 'product-samsung-gallaxy-a1.png', NULL, 1, 1, 2, 2, 5, NULL, 1, 'inclusive', 1, 100, 'Samsung-12', 'C39', 'Samsung-12', 0, 12000, NULL, 0, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(2, 'Asus ROG Strix G512LI Core i5 10th GTX 1650Ti Graphics 15.6\" FHD Laptop with Windows 10', 'product-asus.png', NULL, 1, 1, 5, 3, 2, NULL, 1, 'inclusive', 1, 100, 'asus-12', 'C39', 'asus-12', 0, 10000, 8000, 1, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(3, 'Samsung Gallaxy J2 New 3GB RAM', 'product-samsung-gallaxy-j2.png', NULL, 1, 1, 2, 2, 5, NULL, 1, 'inclusive', 1, 100, 'Samsung-j2', 'C39', 'Samsung-j2', 0, 0, 0, 0, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(4, 'New Sleeve Cotton Shirt', 'product-shirt.png', NULL, 1, 1, 2, 8, 9, NULL, 1, 'inclusive', 1, 100, 'shirt-blue', 'C39', 'shirt-blue', 0, 0, 0, 0, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(5, 'New Black HeadPhone ', 'product-headphone.png', NULL, 1, 1, 2, 2, 2, NULL, 1, 'inclusive', 1, 100, 'headphone', 'C39', 'headphone', 0, 0, 0, 0, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(6, 'Check Sleeve Cotton Shirt Yellow Shirt', 'product-shirt2.png', NULL, 1, 1, 2, 8, 9, NULL, 1, 'inclusive', 1, 100, 'shirt-check', 'C39', 'shirt-check', 0, 0, 0, 0, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(7, 'Red Sleeve Cotton Shirt for Middle Age', 'product-shirt3.png', NULL, 1, 1, NULL, 8, 9, NULL, 1, 'inclusive', 1, 100, 'shirt-2', 'C39', 'shirt-2', 0, 450, 400, 1, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(8, 'iPhone 11 Pro Max', 'product-iphone-11-pro.png', NULL, 1, 1, NULL, 2, 4, NULL, 1, 'inclusive', 1, 100, 'iphone-11-pro', 'C39', 'iphone-11-pro', 0, 120000, 0, 0, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(9, 'Cam20', 'product-1610219218.png', 'product-1610219218.png', 4, 1, 3, 20, 19, NULL, 1, 'inclusive', 1, 12, 'A00839S732014', 'C39', '1212', 0, 0, 0, 0, NULL, 1, '2021-01-09 13:06:58', '2021-02-07 08:16:55', '2021-02-07 08:16:55'),
(10, 'string', NULL, NULL, 1, 1, 2, 2, 7, NULL, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 0, 0, 0, 0, NULL, 1, '2021-02-03 11:33:56', '2021-02-07 08:16:38', '2021-02-07 08:16:38'),
(11, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, NULL, 1, '2021-02-03 11:35:29', '2021-02-07 08:16:42', '2021-02-07 08:16:42'),
(12, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, NULL, 1, '2021-02-03 11:36:25', '2021-02-07 08:16:48', '2021-02-07 08:16:48'),
(14, '34', 'product-1612375875.png', NULL, 2, 1, 10, 2, NULL, 5, 1, 'exclusive', 1, 43, '43', 'C128', '43', 43, 43, 43, 0, '<p>3434</p>', 1, '2021-02-03 12:11:15', '2021-02-03 12:11:15', NULL),
(15, '34', 'product-1612375976.png', NULL, 3, 1, 10, 2, NULL, 21, 1, 'inclusive', 1, 43, '34', 'C128', '43', 43, 43, 43, 0, '<p>434343</p>', 1, '2021-02-03 12:12:56', '2021-02-03 12:12:56', NULL),
(16, '34', 'product-1612376117.jpg', NULL, 2, 1, 10, 2, NULL, 21, 1, 'inclusive', 1, 433, '34', 'C128', '43', 43, 43, 34, 0, '<p>434</p>', 1, '2021-02-03 12:15:17', '2021-02-03 14:08:37', '2021-02-03 14:08:37'),
(17, 'test product-05', 'product-1612458644.jpeg', 'product-1612458645.jpeg', 2, 1, 10, 2, NULL, 21, 1, 'exclusive', 1, 250, '22', 'EAN-13', '22', 22, 22, 22, 0, '<p>test product-05</p>', 1, '2021-02-04 11:10:45', '2021-02-04 11:10:45', NULL),
(18, 'test product-05', 'product-1612458650.jpeg', 'product-1612458650.jpeg', 2, 1, 10, 2, NULL, 21, 1, 'exclusive', 1, 250, '22', 'EAN-13', '22', 22, 22, 22, 0, '<p>test product-05</p>', 1, '2021-02-04 11:10:50', '2021-02-04 11:10:50', NULL),
(19, 'test product-05', 'product-1612458651.jpeg', 'product-1612458651.jpeg', 2, 1, 10, 2, NULL, 21, 1, 'exclusive', 1, 250, '22', 'EAN-13', '22', 22, 22, 22, 0, '<p>test product-05</p>', 1, '2021-02-04 11:10:51', '2021-02-04 11:10:51', NULL),
(20, 'test product-05', 'product-1612458651.jpeg', 'product-1612458651.jpeg', 2, 1, 10, 2, NULL, 21, 1, 'exclusive', 1, 250, '22', 'EAN-13', '22', 22, 22, 22, 0, '<p>test product-05</p>', 1, '2021-02-04 11:10:51', '2021-02-04 11:10:51', NULL),
(21, 'test product-05', 'product-1612458660.jpeg', 'product-1612458660.jpeg', 2, 1, 10, 2, NULL, 21, 1, 'exclusive', 1, 250, '22', 'EAN-13', '22', 22, 22, 22, 0, '<p>test product-05</p>', 1, '2021-02-04 11:11:00', '2021-02-04 11:11:00', NULL),
(22, 'test product-05', 'product-1612459595.jpeg', 'product-1612459595.jpeg', 1, 1, 11, 2, NULL, 5, 1, 'exclusive', 1, 254, '22', 'EAN-8', '22', 22, 22, 22, 0, '<p>2test product-05</p>', 1, '2021-02-04 11:26:35', '2021-02-04 11:26:35', NULL),
(23, 'test', NULL, NULL, 2, 1, 10, 2, NULL, 21, 1, 'exclusive', 1, 33, '33', 'EAN-8', '33', 33, 33, 33, 0, '<p>3333</p>', 1, '2021-02-04 14:08:00', '2021-02-07 08:17:04', '2021-02-07 08:17:04'),
(24, 'testing', NULL, NULL, 3, 1, 5, 2, NULL, 5, 1, 'exclusive', 1, 233, '233', 'EAN-8', '233', 233, 233, 2233, 0, '<p>2333</p>', 1, '2021-02-04 22:13:19', '2021-02-07 08:16:32', '2021-02-07 08:16:32'),
(25, 'testing', NULL, NULL, 3, 1, 5, 2, NULL, 5, 1, 'exclusive', 1, 233, '233', 'EAN-8', '233', 233, 233, 2233, 0, '<p>2333</p>', 1, '2021-02-04 22:13:59', '2021-02-07 08:16:27', '2021-02-07 08:16:27'),
(26, '34', NULL, NULL, 1, 1, 10, 2, NULL, 5, 1, 'inclusive', 1, 33, '33', 'EAN-13', '33', 33, 33, 3333, 0, '<p>33333</p>', 1, '2021-02-04 22:20:27', '2021-02-07 08:16:19', '2021-02-07 08:16:19'),
(27, '34', NULL, NULL, 1, 1, 10, 2, NULL, 5, 1, 'inclusive', 1, 33, '33', 'EAN-13', '33', 33, 33, 3333, 0, '<p>33333</p>', 1, '2021-02-04 22:21:24', '2021-02-07 08:16:23', '2021-02-07 08:16:23'),
(28, '22', NULL, NULL, 2, 1, 10, 2, NULL, 5, 1, 'inclusive', 1, 22, '22', 'UPC-A', '22', 22, 22, 22, 0, '<p>22222</p>', 1, '2021-02-04 22:24:48', '2021-02-07 08:16:15', '2021-02-07 08:16:15'),
(29, 'reee', 'product-featured-1612500132--1612500132.jpeg', 'product-short-resolution-161-1612500132.png', 1, 1, 3, 2, NULL, 20, 1, 'inclusive', 1, 33, '33', 'UPC-A', '33', 33, 33, 33, 0, '<p>33</p>', 1, '2021-02-04 22:42:12', '2021-02-04 22:42:12', NULL),
(30, 'Final Product', 'product-featured-1612546159--1612546159.jpeg', 'product-image-1612546305-601-1612546305.jpeg', 2, 1, 5, 2, NULL, 6, 1, 'inclusive', 0, 33, '23', 'UPC-E', '23', 23, 23, 23, 0, '<p>23</p>', 1, '2021-02-04 22:47:09', '2021-02-05 11:31:45', NULL),
(31, 'testing', 'product-featured-1612500559--1612500559.png', 'product-short-resolution-161-1612500559.png', 2, 1, 5, 2, 2, 6, 1, 'inclusive', 0, 33, '23', 'UPC-E', '23', 23, 23, 23, 0, '<p>23</p>', 1, '2021-02-04 22:49:19', '2021-02-04 22:49:19', NULL),
(32, 'Final test', 'product-featured-1612501778--1612501778.png', 'product-short-resolution-161-1612501778.png', 1, 1, 5, 2, 19, 21, 1, 'exclusive', 1, 123, '123', 'UPC-E', '123', 123, 123, 123, 0, '<p>123</p>', 1, '2021-02-04 23:09:38', '2021-02-04 23:09:38', NULL),
(33, 'FInal testing', NULL, 'product-short-resolution-161-1612502648.png', 1, 1, 10, 2, 7, 20, 1, 'inclusive', 1, 3434, '232', 'C128', '323', 2323, 2323, 2323, 1, '<p>FInal testing</p>', 1, '2021-02-04 23:24:08', '2021-02-05 14:25:31', '2021-02-05 14:25:31'),
(34, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, NULL, 1, '2021-02-06 20:00:26', '2021-02-07 08:15:47', '2021-02-07 08:15:47'),
(35, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, NULL, 1, '2021-02-06 20:00:41', '2021-02-07 08:14:32', '2021-02-07 08:14:32'),
(36, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, NULL, 1, '2021-02-06 20:01:10', '2021-02-07 08:15:43', '2021-02-07 08:15:43'),
(37, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, NULL, 1, '2021-02-06 20:01:57', '2021-02-07 08:14:58', '2021-02-07 08:14:58'),
(38, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, NULL, 1, '2021-02-06 20:20:31', '2021-02-07 08:14:53', '2021-02-07 08:14:53'),
(39, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, NULL, 1, '2021-02-06 20:21:05', '2021-02-07 08:14:50', '2021-02-07 08:14:50'),
(40, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, NULL, 1, '2021-02-06 20:21:24', '2021-02-07 08:14:45', '2021-02-07 08:14:45'),
(41, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, NULL, 1, '2021-02-06 20:28:36', '2021-02-07 08:14:36', '2021-02-07 08:14:36'),
(42, 'string', NULL, NULL, 1, 1, 2, 2, 7, 20, 1, 'inclusive', 1, 0, 'string', 'C39', 'string', 100, 100, 100, 0, NULL, 1, '2021-02-06 20:28:53', '2021-02-07 08:14:40', '2021-02-07 08:14:40'),
(43, 'Akij Plastic', 'product-featured-1612708602--1612708602.jpeg', NULL, 6, 1, 10, 2, 4, 21, 1, 'exclusive', 1, 100, '100', 'EAN-13', '100', 100, 100, 100, 0, '<p>Akij House </p>', 1, '2021-02-07 08:36:42', '2021-02-07 08:39:33', '2021-02-07 08:39:33'),
(44, 'Akij Plastic', 'product-featured-1612708616--1612708616.jpeg', NULL, 6, 1, 10, 2, 4, 21, 1, 'exclusive', 1, 100, '100', 'EAN-13', '100', 100, 100, 100, 0, '<p>Akij House </p>', 1, '2021-02-07 08:36:56', '2021-02-07 08:39:28', '2021-02-07 08:39:28'),
(45, 'Akij Plastic', 'product-featured-1612708733--1612708733.jpeg', NULL, 5, 1, 5, 2, 4, 5, 1, 'exclusive', 1, 122, '222', 'UPC-A', '222', 222, 222, 22222, 0, '<p>AKij House</p>', 1, '2021-02-07 08:38:53', '2021-02-07 08:39:23', '2021-02-07 08:39:23'),
(46, 'GLASSES LUXURY LENS FASHION DRIV', 'product-featured-1612709158--1612709158.jpeg', 'product-short-resolution-161-1612709158.jpeg', 6, 1, 2, 2, 7, 20, 1, 'inclusive', 0, 500, '100', 'EAN-13', '100', 100, 699, 599, 0, '<p>SUNGLASSES FOR MEN NEW HD POLARISED SUNGLASSES BRAND DESIGNER CLASSIC SUN GLASSES LUXURY LENS FASHION DRIV</p>', 1, '2021-02-07 08:45:58', '2021-02-07 08:45:58', NULL);

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
(19, 30, 2, 'product-161254677430-1612546774.jpeg', '30 kB', 'oslo.jpg', NULL, '2021-02-05 11:39:34', '2021-02-05 11:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `item_ratings`
--

CREATE TABLE `item_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rating_value` int(10) UNSIGNED NOT NULL DEFAULT 5,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_ratings`
--

INSERT INTO `item_ratings` (`id`, `item_id`, `user_id`, `rating_value`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 5, '2020-11-13 06:45:10', '2020-11-13 06:45:10'),
(2, 3, 1, 5, '2020-11-13 06:45:16', '2020-11-13 06:45:16'),
(3, 3, 1, 3, '2020-11-13 06:45:16', '2020-11-13 06:45:16'),
(4, 3, 1, 2, '2020-11-13 06:45:16', '2020-11-13 06:45:16');

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
(91, '2021_02_04_182538_create_invoice_items_table', 6);

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
(1, 'Modules\\Auth\\Entities\\User', 16),
(1, 'Modules\\Auth\\Entities\\User', 18),
(2, 'Modules\\Auth\\Entities\\User', 16);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('03209d4bd90f437e09642454684ba67626cbb66567312fba5625b786eef04c6b744208c217d74ccf', 1, 3, 'authToken', '[]', 0, '2021-02-07 08:18:06', '2021-02-07 08:18:06', '2022-02-07 14:18:06'),
('061c0bd159542a4b6448b355e3b00f5eb377cefbc7713c761a05bd825034b2578fa43d29cbea18fd', 1, 3, 'authToken', '[]', 0, '2021-02-03 04:26:25', '2021-02-03 04:26:25', '2022-02-03 10:26:25'),
('0e1c09f49be6d55848bd919c774d141a3624c0b9e78124000df5187c195337f68735a989ea131a8b', 1, 3, 'authToken', '[]', 0, '2021-01-24 08:16:49', '2021-01-24 08:16:49', '2022-01-24 14:16:49'),
('13f478da5c8f31f8c14c9d6cd099b601a31d1d9deaa8828ae30ec6103cd23fdf60d726be11c2c49d', 1, 3, 'authToken', '[]', 0, '2021-02-06 20:27:29', '2021-02-06 20:27:29', '2022-02-07 02:27:29'),
('13ff18f9deafb7b012a62c4ab87b184e6394dc911af67b12f55d2373e07fa0a3540de34692444f3a', 1, 3, 'authToken', '[]', 0, '2021-02-01 14:46:52', '2021-02-01 14:46:52', '2022-02-01 14:46:52'),
('14c5f802790f8bc785f9e2fb9397da7c19c1dc6fdfc73398e7ae0c1bf7c4f80412cad93b4102161c', 1, 3, 'authToken', '[]', 0, '2021-02-07 08:31:56', '2021-02-07 08:31:56', '2022-02-07 14:31:56'),
('16b0e0c850071e521b18344b6607038c7630489c564ece415bb40c2ad47f2cb0ec1c357096e52230', 1, 3, 'authToken', '[]', 0, '2021-01-16 11:10:06', '2021-01-16 11:10:06', '2022-01-16 17:10:06'),
('183c3d968e0229404f0c2e8cd36a3127d910d57e363dd88fdbdf7293afae68c44e6891688616e212', 1, 3, 'authToken', '[]', 0, '2021-02-05 23:04:39', '2021-02-05 23:04:39', '2022-02-06 05:04:39'),
('2ceddd1b6788601c5931d6a5d3b5b90fab29424b282126715ebb63bb5a5a315688d84b0c2574fc30', 1, 3, 'authToken', '[]', 0, '2021-01-24 09:16:38', '2021-01-24 09:16:38', '2022-01-24 15:16:38'),
('371bf5dae35026aee0702f43485500a89ca9a0681f53fcc11a52664cfd01cb4efef715067f7b5c7c', 1, 3, 'authToken', '[]', 0, '2021-02-02 22:24:52', '2021-02-02 22:24:52', '2022-02-03 04:24:52'),
('3919c6911def98da2a92899e4b61bde7189e524ff400136b26d22c893aef9233198270aa42c08962', 1, 3, 'authToken', '[]', 0, '2021-02-04 12:11:43', '2021-02-04 12:11:43', '2022-02-04 18:11:43'),
('3c2d613c9e01bab1486e88c192174152ea484862aea682ca9312140f1fe51d24359f47363db09dc5', 1, 3, 'authToken', '[]', 0, '2021-01-24 08:12:20', '2021-01-24 08:12:20', '2022-01-24 14:12:20'),
('4191c7a7229f18b1bb147d1d6d0983304083f25f55c5079ce60e77e4881ec8248c903302b33351dc', 1, 3, 'authToken', '[]', 0, '2021-02-05 02:25:22', '2021-02-05 02:25:22', '2022-02-05 08:25:22'),
('4352b8f949c6a9baffb85a8a4a048e8be931a3c2990fc907440f77e2642dde2a32dd2965f191e3a3', 1, 3, 'authToken', '[]', 0, '2021-02-06 09:47:02', '2021-02-06 09:47:02', '2022-02-06 15:47:02'),
('446fd8f80774c9c945cf4e2fbc50f64b884c9c38a15edc4cdce311077816698119e724b12d5ec35a', 18, 3, 'authToken', '[]', 0, '2021-02-07 05:44:24', '2021-02-07 05:44:24', '2022-02-07 11:44:24'),
('47aacb85a8b505b39d3123eb6020fc6b4459fd1dd8e1f86e103e5ed6c6d3bec002c73f7dab8b7956', 15, 3, 'authToken', '[]', 0, '2021-02-07 05:28:08', '2021-02-07 05:28:08', '2022-02-07 11:28:08'),
('53a9cc4cf2b7a3b2efd715766cc4d2bb1741cbb015a2920b9a644acc88bba72a76821bd6993f5372', 1, 3, 'authToken', '[]', 0, '2021-02-05 23:19:11', '2021-02-05 23:19:11', '2022-02-06 05:19:11'),
('548b289831fa54be75d9216c6da6264aef9903a08997ba40dc2e45229c4462b9353234b1809a1b60', 1, 3, 'authToken', '[]', 0, '2021-02-05 14:44:09', '2021-02-05 14:44:09', '2022-02-05 20:44:09'),
('59503beb9a509c4dcbf479f414d75432a9d31eb666c9e802312f99151019698f407c562e7dd74f31', 1, 1, 'authToken', '[]', 0, '2020-12-11 20:19:33', '2020-12-11 20:19:33', '2021-12-12 02:19:33'),
('5a4bdd023c42d57734e98a79c7318283482c91ab126e18f7dde4c492997e263a31452561cd3449aa', 1, 3, 'authToken', '[]', 0, '2021-02-06 07:09:33', '2021-02-06 07:09:33', '2022-02-06 13:09:33'),
('67cbdc3aeab824c529143efa1e84d43eb9cf5838a4cc923282e3e2aeee210f8f2f718f2fd47d1fd1', 1, 3, 'authToken', '[]', 0, '2021-02-06 07:12:13', '2021-02-06 07:12:13', '2022-02-06 13:12:13'),
('695fc1e680cb4e66427cd17870195ab5fa4144821b7cd98f090cc4872ccb0dd9cb533e589fa70e8f', 1, 1, 'authToken', '[]', 0, '2020-12-12 08:05:07', '2020-12-12 08:05:07', '2021-12-12 14:05:07'),
('6a9087f25b5a66979d74de619a14d08a59e5709981afb58228b19de36776d338d1ea74208d8c9707', 1, 3, 'authToken', '[]', 0, '2021-01-24 08:17:21', '2021-01-24 08:17:21', '2022-01-24 14:17:21'),
('6c434c0378e38fba8d044484595554a3b37503f96358502d90569ede86ca1f6563235a423abef163', 1, 3, 'authToken', '[]', 0, '2021-02-05 13:23:29', '2021-02-05 13:23:29', '2022-02-05 19:23:29'),
('75a021b90fa310530d025314ea12b6279742483dcc700fd4012d7330ffc1a0630ceaf3c05a9f40c9', 1, 3, 'authToken', '[]', 0, '2021-02-03 02:42:56', '2021-02-03 02:42:56', '2022-02-03 08:42:56'),
('7af389e3d659ff22247038aebcc42a7f9d1d13067f8ef88ff8a333e450580623a8dc5301840b8659', 1, 1, 'authToken', '[]', 0, '2020-12-06 19:49:39', '2020-12-06 19:49:39', '2021-12-07 01:49:39'),
('84f0c5e672b8da202f39c2990d6cbbf4e4923cf2fcdf54a58e71fbaff77037dfc3baec7a3a3f2b96', 1, 3, 'authToken', '[]', 0, '2021-02-05 14:21:38', '2021-02-05 14:21:38', '2022-02-05 20:21:38'),
('86416ca7335b67c959e279cca366da491a4ac55cbf405a798b21652d22dd1c91fea0b0142e0fdc47', 1, 3, 'authToken', '[]', 0, '2021-02-04 07:15:36', '2021-02-04 07:15:36', '2022-02-04 13:15:36'),
('89cc9720c600b230f963066a1b88b6aa8f79168cf5a7bcfe5cc428fb2a99b0cc60d762dfa3fabd0e', 1, 1, 'authToken', '[]', 0, '2020-12-06 19:47:13', '2020-12-06 19:47:13', '2021-12-07 01:47:13'),
('930852ac7409118c47567b5ef0d8ada3eb0bcc62fec053819c77017af1fa5190fc5a0b6f0f37b68c', 1, 1, 'authToken', '[]', 0, '2020-12-10 10:54:02', '2020-12-10 10:54:02', '2021-12-10 16:54:02'),
('9b6ed529fa2905411d0cd520ef96c4ed39cb10648820cd980678ea9fb3ad7966c854794e58d9f9f5', 1, 3, 'authToken', '[]', 0, '2021-02-01 21:51:32', '2021-02-01 21:51:32', '2022-02-01 21:51:32'),
('9c78d8ac246cddca91bf499256dfa8c90531453113b9835d48786289b9a6e8f1d9023dc5e657a8c5', 1, 3, 'authToken', '[]', 0, '2021-01-26 09:19:51', '2021-01-26 09:19:51', '2022-01-26 15:19:51'),
('9f957c91e984cae5aa0b6ab2f77138fd30a966a85c0c987427b095d13e7bd66212eb5a230fd7c060', 1, 1, 'authToken', '[]', 0, '2020-12-12 08:01:17', '2020-12-12 08:01:17', '2021-12-12 14:01:17'),
('a1977e4f7f147905c9369f8c30caf4af2a6fdab8883199fd1e980d0a8f44649e2dc387a1b15486e9', 1, 3, 'authToken', '[]', 0, '2021-02-02 22:16:03', '2021-02-02 22:16:03', '2022-02-03 04:16:03'),
('a1ac0b17a792f4b7c6250086caa9169e22bc2daa35c4aebcc460868487b00aa5e4bcbdb2d84350f1', 1, 3, 'authToken', '[]', 0, '2021-01-09 12:51:49', '2021-01-09 12:51:49', '2022-01-09 18:51:49'),
('a3a727bb5487ab8e71cc7b21a6e70ebc382d86d9484d51306a96c2f7a2dabd5e87afb0443b3bf4ed', 1, 3, 'authToken', '[]', 0, '2021-02-05 10:30:14', '2021-02-05 10:30:14', '2022-02-05 16:30:14'),
('a7893593c842274eda984b85a27ed973b9c719e97a524a8bb52323a3636b1b7c853316d602878263', 1, 3, 'authToken', '[]', 0, '2021-02-07 08:19:24', '2021-02-07 08:19:24', '2022-02-07 14:19:24'),
('aa15a23f330fc9c3bb9c0362509d9e00f14656cbc8ec4acb6fb06f808447011ac5af38a25e1742ac', 1, 3, 'authToken', '[]', 0, '2021-02-05 13:36:33', '2021-02-05 13:36:33', '2022-02-05 19:36:33'),
('aaa3370b397bc7e946bc4861c615692906d0e52a353c7cb3e0801f79aa0371a115922f6fd83331e5', 1, 3, 'authToken', '[]', 0, '2021-02-05 14:18:34', '2021-02-05 14:18:34', '2022-02-05 20:18:34'),
('ab693792d34a39a26cd29a2d0ec1bbfd83d5955742b880a2da97475dfe099bbd0ed5f3896653192c', 1, 3, 'authToken', '[]', 0, '2021-02-04 22:09:10', '2021-02-04 22:09:10', '2022-02-05 04:09:10'),
('aef3c5baa7c7eb970a272f8a28f167f8197de850214c2eb67134da71f44b6253da92b39a471a86f1', 1, 3, 'authToken', '[]', 0, '2021-02-05 13:57:47', '2021-02-05 13:57:47', '2022-02-05 19:57:47'),
('b11c36801c5d608357465db171a897208d69416c9c9c34cb852a51e50c31ebda28aed719ad145c78', 1, 3, 'authToken', '[]', 0, '2021-02-05 23:08:35', '2021-02-05 23:08:35', '2022-02-06 05:08:35'),
('bf5a8da8343ba80f32c6cae7aed4a2aabb23f8eb511c39a026418175aa91ab7f25a9e11d1c2d99a2', 1, 3, 'authToken', '[]', 0, '2021-02-01 15:34:28', '2021-02-01 15:34:28', '2022-02-01 15:34:28'),
('c35bda07e20cae5ad3f202b2bb63da9045672e08f6e424100b24259f044926de0ac1e959ce7ad9dc', 1, 3, 'authToken', '[]', 0, '2021-02-04 12:17:30', '2021-02-04 12:17:30', '2022-02-04 18:17:30'),
('c418adcac2ddd6ab5d4a77761566647ca4abffd81784aa2bb36804483dd412edafba2d560a44a7ae', 1, 3, 'authToken', '[]', 0, '2021-02-03 01:21:28', '2021-02-03 01:21:28', '2022-02-03 07:21:28'),
('cacde64fab30e99e2f32ac81fe173463bbc94972d6e86e5ae6e9e1ef2ec7e9b67109155e19c66d18', 1, 3, 'authToken', '[]', 0, '2021-02-07 07:34:59', '2021-02-07 07:34:59', '2022-02-07 13:34:59'),
('cd46ca8b58476807ae29e3b5f0a3c1d52ed73cb67e2a9e9923764f9e40b46fa9d98b87f69c067647', 1, 3, 'authToken', '[]', 0, '2021-02-06 03:46:42', '2021-02-06 03:46:42', '2022-02-06 09:46:42'),
('d0f6013cdba5a13aed1f830d6d9317bc8d5ab5a7a8cdbd485ef6a856bd2ee20e8f2db66176cb856a', 1, 3, 'authToken', '[]', 0, '2021-02-07 08:23:32', '2021-02-07 08:23:32', '2022-02-07 14:23:32'),
('d8839c9cb01291a992b82abebe5335b3255c55099ff34266cc0054fbab774990667ee2cfd0a8bbd5', 16, 3, 'authToken', '[]', 0, '2021-02-07 05:39:20', '2021-02-07 05:39:20', '2022-02-07 11:39:20'),
('dccba1a8c7f2c5e19f8a789f5edf8b06c12f23484ca40eec919825b9dbc4d76102aa36eb4771457b', 1, 3, 'authToken', '[]', 0, '2021-01-25 10:52:33', '2021-01-25 10:52:33', '2022-01-25 16:52:33'),
('e7cd908afc6be0d1aec5af78076cfc14bf0db937f0787a683c8cfee10b136cc366ca5ddff6837e53', 2, 3, 'authToken', '[]', 0, '2021-01-16 11:13:14', '2021-01-16 11:13:14', '2022-01-16 17:13:14'),
('f580690c46c6b8718ccf61553d9a738d8986438b8f586fc3c8efe62f351c73c64022a7fa812d1ed3', 1, 1, 'authToken', '[]', 0, '2020-12-12 07:38:12', '2020-12-12 07:38:12', '2021-12-12 13:38:12'),
('fb206b24342ea1ef7572cdeac731fa45d9566e8fc5b3d6254a03d8b21e48080429b462b90ee9ee05', 1, 3, 'authToken', '[]', 0, '2021-02-05 13:19:35', '2021-02-05 13:19:35', '2022-02-05 19:19:35'),
('fc4e4b1a10dbb4f84acf4f237db4163d05620d80e43c81f07851d30f7270a3d7ddd60414fe528d7c', 1, 3, 'authToken', '[]', 0, '2021-02-07 08:08:59', '2021-02-07 08:08:59', '2022-02-07 14:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Table structure for table `otps`
--

CREATE TABLE `otps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `otps`
--

INSERT INTO `otps` (`id`, `phone_no`, `otp`, `expire_date`, `created_at`, `updated_at`) VALUES
(1, '8801951233084', '691525', '2021-01-29 01:53:58', '2021-01-29 01:43:59', '2021-01-29 01:48:58'),
(2, '8801951233081', '574071', '2021-02-01 16:12:28', '2021-02-01 16:07:28', '2021-02-01 16:07:28');

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
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'Null if page has no category',
  `article_type_id` bigint(11) UNSIGNED DEFAULT NULL COMMENT 'If Article Belongs to a Type',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>active, 0=>inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `total_reaction` bigint(20) UNSIGNED NOT NULL DEFAULT 0 COMMENT 'total reaction count',
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
  `enable_item_comparison` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'If item comparison is enable, then user need to input for item1 and item2',
  `type` enum('radio','checkbox','select','text') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'radio' COMMENT 'Process of voting system',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>active, 0=>inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `enable_registration_referral` tinyint(1) NOT NULL DEFAULT 0,
  `registration_referral_amount` double(8,2) NOT NULL DEFAULT 0.00 COMMENT 'Registration Referral Amount',
  `enable_purchase_referral` tinyint(1) NOT NULL DEFAULT 0,
  `purchase_referral_amount` double(8,2) NOT NULL DEFAULT 0.00 COMMENT 'purchase Referral Amount',
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
(2, 'Customer', 'api', '2021-02-07 11:35:26', '2021-02-07 11:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path_sm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_text_enable` tinyint(1) NOT NULL DEFAULT 1,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_button_enable` tinyint(1) NOT NULL DEFAULT 1,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
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
  `is_tax_group` tinyint(1) NOT NULL DEFAULT 0,
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
(1, 1, 'NA', 'fixed', 0.00, 0, 'normal', 1, NULL, '2020-11-12 20:58:03', '2020-11-12 20:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('purchase','sell','opening_stock','purchase_return','sell_return','cashback','cashback_transfer_wallet','voucher','voucher_transfer_wallet','gift_card','gift_card_transfer_wallet','referrel','referrel_transfer_wallet') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>active, 0=>inactive',
  `delivery_status` enum('delivered','not_delivered') COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` enum('paid','due') COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Title needed for all other transactions which needs to store a default title',
  `invoice_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_date` datetime NOT NULL,
  `total_before_tax` decimal(8,2) NOT NULL DEFAULT 0.00 COMMENT 'Total before the purchase/invoice tax, this includeds the indivisual product tax',
  `tax_amount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `discount_type_id` bigint(20) UNSIGNED NOT NULL,
  `tax_id` bigint(20) UNSIGNED NOT NULL,
  `discount_amount` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charges` decimal(8,2) NOT NULL DEFAULT 0.00,
  `additional_notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_total` decimal(8,2) NOT NULL DEFAULT 0.00,
  `due_total` decimal(8,2) NOT NULL DEFAULT 0.00,
  `final_total` decimal(8,2) NOT NULL DEFAULT 0.00,
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
  `discount_amount` double(8,2) NOT NULL DEFAULT 0.00,
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
(1, NULL, 'Test User', 'test', 'last', 'testuser', 'seller@example.com', '01951233084', '$2y$10$AQJKflstCN3rPidQHSqxCOLReBLlQo.HJT5Llwkhg28j9XxZX.rA6', 'en', NULL, NULL, NULL, 'customer', 'active', NULL, '2020-11-04 12:14:12', '2021-01-29 04:12:39'),
(9, NULL, 'Maniruzzaman', NULL, 'Akash', 'maniruzzaman', NULL, '01951233081', '$2y$10$t6LIp5wuW.ZWJAtVraozZenX2uaz6yPPE.tw4lxcuWjJ92NmHiBle', 'en', NULL, NULL, NULL, 'customer', 'active', NULL, '2021-02-01 16:07:28', '2021-02-01 16:07:46'),
(10, NULL, 'Test User', NULL, 'last', 'testuser1', 'akash@mail.com', '01951233011', '$2y$10$Ws.a2jmgCCM4YblE6LAZq.P/DQx2fTkh9avDUWEygoS5SzEnX6aiG', 'en', NULL, NULL, NULL, 'customer', 'inactive', NULL, '2021-02-07 05:23:42', '2021-02-07 05:23:42'),
(11, NULL, 'Test User', NULL, 'last', 'testuser2', 'akash12@mail.com', '01951233012', '$2y$10$DLXFU12LgxXfMtDethv5hu/80dkc55QucYyZAxcA3ztE/9wYQqvRa', 'en', NULL, NULL, NULL, 'customer', 'inactive', NULL, '2021-02-07 05:24:20', '2021-02-07 05:24:20'),
(15, NULL, 'Test User', NULL, 'last', 'testuser3', 'akash14@mail.com', '019512330114', '$2y$10$7eD5xAPkUeKL/3knh0quLOnnQ0MQx5Sd6yyQsfHOLowQWxTmrXA76', 'en', NULL, NULL, NULL, 'customer', 'inactive', NULL, '2021-02-07 05:28:08', '2021-02-07 05:28:08'),
(16, NULL, 'Seller Shop', NULL, 'last', 'sellershop', 'akash90@mail.com', '019512330190', '$2y$10$raCpwWcTKR1DrcMY1C87EOVPWF98V3G4kB8amihuzLZ0v0yPv15E2', 'en', NULL, NULL, NULL, 'customer', 'inactive', NULL, '2021-02-07 05:39:20', '2021-02-07 05:39:20'),
(18, NULL, 'Seller Shop2', NULL, 'last', 'sellershop2', 'akash111@mail.com', '0195123301111', '$2y$10$IhJVQeFE7DJuQ.AvlLua9O8YL.5Af6R11bzEYLsI5l9Uqh5FWv8ri', 'en', NULL, NULL, NULL, 'customer', 'inactive', NULL, '2021-02-07 05:44:24', '2021-02-07 05:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_value_for` double(8,2) NOT NULL DEFAULT 0.00 COMMENT 'What Price value it will take from customer',
  `change_price_value` double(8,2) NOT NULL DEFAULT 0.00 COMMENT 'What Price will return customer as card value',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>active, 0=>inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attributes_business_id_slug_unique` (`business_id`,`slug`),
  ADD KEY `attributes_category_id_foreign` (`category_id`);

--
-- Indexes for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_values_attribute_id_foreign` (`attribute_id`);

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
  ADD KEY `gift_cards_deleted_by_foreign` (`deleted_by`),
  ADD KEY `gift_cards_card_type_index` (`card_type`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `attribute_values`
--
ALTER TABLE `attribute_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `business_locations`
--
ALTER TABLE `business_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `item_attributes`
--
ALTER TABLE `item_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `item_images`
--
ALTER TABLE `item_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `item_ratings`
--
ALTER TABLE `item_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

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
-- AUTO_INCREMENT for table `otps`
--
ALTER TABLE `otps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `polls`
--
ALTER TABLE `polls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poll_options`
--
ALTER TABLE `poll_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
