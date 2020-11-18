-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 08:42 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attribute_values`
--

CREATE TABLE `attribute_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(5, 1, 'ASUS', 'brand-asus.png', NULL, 'Asus Brand', 1, NULL, '2020-11-12 14:37:07', '2020-11-12 14:37:07');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Business Identification No',
  `currency_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date DEFAULT NULL,
  `tax_number_1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_label_1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_number_2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_label_2` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_profit_percent` double(5,2) NOT NULL DEFAULT 0.00,
  `owner_id` bigint(20) UNSIGNED DEFAULT NULL,
  `time_zone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Asia/Kolkata',
  `fy_start_month` tinyint(4) NOT NULL DEFAULT 1,
  `accounting_method` enum('fifo','lifo','avco') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fifo',
  `default_sales_discount` decimal(5,2) DEFAULT NULL,
  `sell_price_tax` enum('includes','excludes') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'includes',
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku_prefix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_tooltip` tinyint(1) NOT NULL DEFAULT 1,
  `enable_referrel_system` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `name`, `bin`, `currency_id`, `start_date`, `tax_number_1`, `tax_label_1`, `tax_number_2`, `tax_label_2`, `default_profit_percent`, `owner_id`, `time_zone`, `fy_start_month`, `accounting_method`, `default_sales_discount`, `sell_price_tax`, `logo`, `banner`, `sku_prefix`, `enable_tooltip`, `enable_referrel_system`, `created_at`, `updated_at`) VALUES
(1, 'Maccaf Mall', 'Maccaf12019212', 1, '2020-11-01', '121212', 'Tax', '121212', 'Tax2', 10.00, 1, 'Asia/Kolkata', 1, 'fifo', '0.00', 'includes', 'vendor-maccaf.png', 'vendor-maccaf-banner.png', NULL, 1, 0, '2020-11-04 18:32:32', '2020-11-04 18:32:32'),
(2, 'Bata Store', 'Bata121209', 1, '2020-11-01', '121212', 'Tax', '121212', 'Tax2', 10.00, 1, 'Asia/Kolkata', 1, 'fifo', '0.00', 'includes', 'vendor-bata.png', 'vendor-bata-banner.png', NULL, 1, 0, '2020-11-04 18:32:32', '2020-11-04 18:32:32'),
(3, 'Shopno Bazaar', 'Shopnobazar', 1, '2020-11-01', '121212', 'Tax', '121212', 'Tax2', 10.00, 1, 'Asia/Kolkata', 1, 'fifo', '0.00', 'includes', 'vendor-shopno.jpg', 'vendor-shopno-banner.png', NULL, 1, 0, '2020-11-04 18:32:32', '2020-11-04 18:32:32'),
(4, 'Rahim Store', 'rahimstore', 1, '2020-11-01', '121212', 'Tax', '121212', 'Tax2', 10.00, 1, 'Asia/Kolkata', 1, 'fifo', '0.00', 'includes', 'vendor-rahimstore.png', 'vendor-rahim-banner.png', NULL, 1, 0, '2020-11-04 18:32:32', '2020-11-04 18:32:32');

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
  `state` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` char(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternate_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `short_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(2, 'Electronics', 'Your Most Favorite Electronic Products...', NULL, 1, NULL, NULL, NULL, NULL, 1, 1, 1, NULL, '2020-11-12 14:30:56', '2020-11-12 14:30:56'),
(3, 'Laptop', NULL, NULL, 1, 'laptop', 'category-laptop.png', 'category-laptop-banner.png', 2, 0, 10, 1, NULL, '2020-11-12 14:31:26', '2020-11-12 14:31:26'),
(4, 'SmartPhone', 'Your Most Favorite Smartphones here...', 'Your Most Favorite Smartphones here...', 1, 'smartphone', NULL, NULL, 2, 0, 2, 1, NULL, '2020-11-12 14:31:51', '2020-11-12 14:31:51'),
(5, 'Samsung', NULL, NULL, 1, 'samsung', 'category-samsung.png', 'category-samsung-banner.png', 4, 0, 10, 1, NULL, '2020-11-12 14:32:29', '2020-11-12 14:32:29'),
(6, 'Apple', NULL, NULL, 1, 'apple', NULL, NULL, 4, 0, 10, 1, NULL, '2020-11-12 14:32:44', '2020-11-12 14:32:44'),
(7, 'Camera', NULL, NULL, 1, 'camera', NULL, NULL, 2, 0, 10, 1, NULL, '2020-11-12 14:33:07', '2020-11-12 14:33:07'),
(8, 'Fashion', 'Your Fashion Store', 'Your Fashion Store', 1, 'fashion', 'category-fashion.png', NULL, NULL, 1, 1, 1, NULL, '2020-11-12 14:33:07', '2020-11-12 14:33:07'),
(9, 'Gents Shirt', NULL, NULL, 1, 'gents-shirt', 'category-shirt.png', NULL, 8, 0, 10, 1, NULL, '2020-11-12 14:33:07', '2020-11-12 14:33:07');

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
  `bin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'BIN = Business Identification Number',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternate_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_term_number` bigint(20) UNSIGNED DEFAULT NULL,
  `pay_term_type` enum('days','months') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_resolation_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `unit_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tax` bigint(20) UNSIGNED DEFAULT NULL,
  `tax_type` enum('inclusive','exclusive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `enable_stock` tinyint(1) NOT NULL DEFAULT 0,
  `alert_quantity` bigint(20) UNSIGNED NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode_type` enum('C39','C128','EAN-13','EAN-8','UPC-A','UPC-E','ITF-14') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku_manual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `items` (`id`, `name`, `featured_image`, `short_resolation_image`, `business_id`, `unit_id`, `brand_id`, `category_id`, `sub_category_id`, `tax`, `tax_type`, `enable_stock`, `alert_quantity`, `sku`, `barcode_type`, `sku_manual`, `current_stock`, `default_selling_price`, `offer_selling_price`, `is_offer_enable`, `description`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Samsung Gallaxy A1', 'product-samsung-gallaxy-a1.png', NULL, 1, 1, 2, 2, 5, 1, 'inclusive', 1, 100, 'Samsung-12', 'C39', 'Samsung-12', 0, 12000, NULL, 0, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(2, 'Asus ROG Strix G512LI Core i5 10th GTX 1650Ti Graphics 15.6\" FHD Laptop with Windows 10', 'product-asus.png', NULL, 1, 1, 5, 3, 2, 1, 'inclusive', 1, 100, 'asus-12', 'C39', 'asus-12', 0, 10000, 8000, 1, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(3, 'Samsung Gallaxy J2 New 3GB RAM', 'product-samsung-gallaxy-j2.png', NULL, 1, 1, 2, 2, 5, 1, 'inclusive', 1, 100, 'Samsung-j2', 'C39', 'Samsung-j2', 0, 0, 0, 0, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(4, 'New Sleeve Cotton Shirt', 'product-shirt.png', NULL, 1, 1, 2, 8, 9, 1, 'inclusive', 1, 100, 'shirt-blue', 'C39', 'shirt-blue', 0, 0, 0, 0, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(5, 'New Black HeadPhone ', 'product-headphone.png', NULL, 1, 1, 2, 2, 2, 1, 'inclusive', 1, 100, 'headphone', 'C39', 'headphone', 0, 0, 0, 0, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(6, 'Check Sleeve Cotton Shirt Yellow Shirt', 'product-shirt2.png', NULL, 1, 1, 2, 8, 9, 1, 'inclusive', 1, 100, 'shirt-check', 'C39', 'shirt-check', 0, 0, 0, 0, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(7, 'Red Sleeve Cotton Shirt for Middle Age', 'product-shirt3.png', NULL, 1, 1, NULL, 8, 9, 1, 'inclusive', 1, 100, 'shirt-2', 'C39', 'shirt-2', 0, 450, 400, 1, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL),
(8, 'iPhone 11 Pro Max', 'product-iphone-11-pro.png', NULL, 1, 1, NULL, 2, 4, 1, 'inclusive', 1, 100, 'iphone-11-pro', 'C39', 'iphone-11-pro', 0, 120000, 0, 0, NULL, 1, '2020-11-12 20:58:50', '2020-11-12 20:58:50', NULL);

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
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `image_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(82, '2020_09_07_021255_create_poll_options_table', 1),
(83, '2020_09_07_022016_create_poll_responses_table', 1),
(84, '2020_10_28_154939_create_item_images_table', 1),
(85, '2020_10_28_162550_create_vouchers_table', 2),
(86, '2020_11_13_063952_create_item_ratings_table', 3);

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

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `client_id` bigint(20) UNSIGNED NOT NULL,
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
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'Null if page has no category',
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
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE `polls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `source_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path_sm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_text_enable` tinyint(1) NOT NULL DEFAULT 1,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_button_enable` tinyint(1) NOT NULL DEFAULT 1,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
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
  `supplier_business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'BIN = Business Identification Number',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternate_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Title needed for all other transactions which needs to store a default title',
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_date` datetime NOT NULL,
  `total_before_tax` decimal(8,2) NOT NULL DEFAULT 0.00 COMMENT 'Total before the purchase/invoice tax, this includeds the indivisual product tax',
  `tax_amount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `discount_type_id` bigint(20) UNSIGNED NOT NULL,
  `tax_id` bigint(20) UNSIGNED NOT NULL,
  `discount_amount` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charges` decimal(8,2) NOT NULL DEFAULT 0.00,
  `additional_notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_total` decimal(8,2) NOT NULL DEFAULT 0.00,
  `due_total` decimal(8,2) NOT NULL DEFAULT 0.00,
  `final_total` decimal(8,2) NOT NULL DEFAULT 0.00,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` bigint(20) UNSIGNED NOT NULL,
  `actual_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` char(4) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `business_id`, `first_name`, `surname`, `last_name`, `username`, `email`, `phone_no`, `password`, `language`, `avatar`, `banner`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Test User', 'test', 'last', 'testuser', 'akash@mail.com', '01951233084', '$2y$10$PkTIfVRxq3c8I/AscaMbV.E7kj0uq6VRcuX3DwN87a2snFQWDQG5i', 'en', NULL, NULL, NULL, NULL, '2020-11-04 12:14:12', '2020-11-04 12:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `app_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  ADD KEY `items_sku_manual_index` (`sku_manual`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attribute_values`
--
ALTER TABLE `attribute_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `business_locations`
--
ALTER TABLE `business_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `item_attributes`
--
ALTER TABLE `item_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_images`
--
ALTER TABLE `item_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_ratings`
--
ALTER TABLE `item_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_sell_lines`
--
ALTER TABLE `transaction_sell_lines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
