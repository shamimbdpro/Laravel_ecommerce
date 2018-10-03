-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 06:22 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `landing`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_des` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_des`, `cat_status`, `created_at`, `updated_at`) VALUES
(20, 'Sportswear ', '<br>', '1', '2018-08-03 08:17:27', '2018-08-03 08:17:27'),
(22, 'Mens ', '', '1', '2018-08-03 05:44:52', NULL),
(23, 'Womens ', '', '1', '2018-08-03 05:45:01', NULL),
(25, 'Fashion', '', '1', '2018-08-03 05:45:16', NULL),
(27, 'Households', '', '1', '2018-08-03 05:45:23', NULL),
(28, 'Interiors', '', '1', '2018-08-03 05:45:33', NULL),
(29, 'Clothing', '', '1', '2018-08-03 05:45:42', NULL),
(30, 'Bags', '', '1', '2018-08-03 05:45:50', NULL),
(31, 'Shoes', '', '1', '2018-08-03 05:45:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_registers`
--

CREATE TABLE `customer_registers` (
  `customerId` int(10) UNSIGNED NOT NULL,
  `customerName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerEmail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerPass` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_registers`
--

INSERT INTO `customer_registers` (`customerId`, `customerName`, `customerEmail`, `customerPass`, `created_at`, `updated_at`) VALUES
(25, 'Shamim Hasan', 'ertert@gmail.com', 'ertert', '2018-10-03 07:22:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

CREATE TABLE `manufactures` (
  `menufr_id` int(10) UNSIGNED NOT NULL,
  `menufr_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menufr_des` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menufr_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`menufr_id`, `menufr_name`, `menufr_des`, `menufr_status`, `created_at`, `updated_at`) VALUES
(6, 'Acne', '', '1', '2018-08-03 08:12:10', NULL),
(7, 'Grüne Erde', '', '1', '2018-08-03 08:12:31', NULL),
(8, 'Albiro', '', '1', '2018-08-03 08:12:38', NULL),
(9, 'Ronhill', '', '1', '2018-08-03 08:12:43', NULL),
(10, 'Oddmolly', '', '1', '2018-08-03 08:12:48', NULL),
(11, 'Boudestijn', '', '1', '2018-08-03 08:12:53', NULL),
(12, 'Rösch creative culture', '', '1', '2018-08-03 08:13:01', NULL),
(13, 'test', '<br>', '0', '2018-08-04 02:20:08', NULL);

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
(3, '2018_08_02_102414_create_categories_table', 2),
(4, '2018_08_03_115540_create_manufactures_table', 3),
(5, '2018_08_03_164524_create_products_table', 4),
(6, '2018_09_04_035111_create_customer_registers_table', 5),
(7, '2018_09_04_120330_create_shipings_table', 6),
(8, '2018_09_05_040142_create_tbl_payments_table', 7),
(9, '2018_09_05_040212_create_tbl_orders_table', 7),
(10, '2018_09_05_040301_create_tbl_order_details_table', 7),
(11, '2018_10_03_133804_create_sliders_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('md.shamimtpi@gmail.com', '$2y$10$2xv3sIxGTcPAYhKRbwIhDecrQL.a29QC9CzDQx/VxZ4SmjK.CMDSG', '2018-08-01 12:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `menufacture_id` int(11) NOT NULL,
  `pSmall_des` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `plong_des` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` decimal(65,0) NOT NULL,
  `p_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `catagory_id`, `menufacture_id`, `pSmall_des`, `plong_des`, `product_price`, `p_img`, `product_size`, `product_color`, `product_status`, `created_at`, `updated_at`) VALUES
(34, 'Easy Polo Black Edition', 29, 12, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the \r\nprinting and typesetting industry. Lorem <br></p>', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the \r\nprinting and typesetting industry. <br></p>\r\n<div>ct that a reader will be distracted by the\r\n readable content <br>\r\n</div>', '56', 'Product_34_1535901497.jpg', 'Medium', 'Blue', '1', '2018-09-02 09:18:16', '2018-09-02 09:18:17'),
(35, 'Easy Polo Black Edition', 23, 9, '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '120', 'Product_35_1535906431.jpg', 'Medium', 'red', '1', '2018-09-02 10:40:31', '2018-09-02 10:40:31'),
(36, 'Easy Polo Black Edition', 29, 10, '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '65', 'Product_36_1535906641.jpg', 'Small', 'whilte', '1', '2018-09-02 10:44:01', '2018-09-02 10:44:01'),
(37, 'Easy Polo Black Edition', 20, 6, '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '45', 'Product_37_1535906718.jpg', 'Medium', 'Blue', '1', '2018-09-02 10:45:18', '2018-09-02 10:45:18'),
(38, 'Easy Polo Black Edition', 20, 6, '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '66', 'Product_38_1535906760.jpg', 'Medium', 'Blue', '1', '2018-09-02 10:46:00', '2018-09-02 10:46:00'),
(39, 'Easy Polo Black Edition', 20, 6, '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '98', 'Product_39_1535906815.jpg', 'Medium', 'Blue', '1', '2018-09-02 10:46:55', '2018-09-02 10:46:55'),
(40, 'Easy Polo Black Edition', 20, 6, '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '36', 'Product_40_1535907405.jpg', 'Medium', 'Blue', '1', '2018-09-02 10:56:45', '2018-09-02 10:56:45'),
(41, 'Easy Polo Black Edition', 20, 6, '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '87', 'Product_41_1535907441.jpg', 'Medium', 'Blue', '0', '2018-09-04 23:15:09', '2018-09-04 23:15:09'),
(42, 'Easy Polo Black Edition', 22, 9, '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '98', 'Product_42_1535907469.jpg', 'Medium', 'red', '1', '2018-09-02 10:57:49', '2018-09-02 10:57:49'),
(43, 'Easy Polo Black Edition', 20, 6, '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '65', 'Product_43_1535907496.jpg', 'Medium', 'Blue', '0', '2018-09-04 23:14:47', '2018-09-04 23:14:47'),
(44, 'Easy Polo Black Edition', 20, 6, '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '87', 'Product_44_1535907660.jpg', 'Medium', 'Blue', '1', '2018-09-02 11:01:00', '2018-09-02 11:01:00'),
(45, 'Easy Polo Black Edition', 20, 6, '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged.', '76', 'Product_45_1535907730.jpg', 'Medium', 'Blue', '1', '2018-09-02 11:02:10', '2018-09-02 11:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `shipings`
--

CREATE TABLE `shipings` (
  `shiping_id` int(10) UNSIGNED NOT NULL,
  `shiping_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shiping_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shiping_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shiping_address1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shiping_address2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shiping_post` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shiping_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shiping_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipings`
--

INSERT INTO `shipings` (`shiping_id`, `shiping_name`, `shiping_email`, `shiping_phone`, `shiping_address1`, `shiping_address2`, `shiping_post`, `shiping_country`, `shiping_city`, `created_at`, `updated_at`) VALUES
(41, 'Shamim', 'xcvxcv@gmail.com', '45435435', 'sdfsf', 'dfgdfgdfg', '45354', 'dfgdfg', 'Dhaka', '2018-10-03 05:52:49', NULL),
(42, 'xcxcv', 'xcvxcv@gmail.com', '45435435', 'sdfsf', 'dfgdfgdfg', '45354', 'Bangladesh', 'sdfsdf', '2018-10-03 07:22:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `slider_id` int(10) UNSIGNED NOT NULL,
  `slider_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_p` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`slider_id`, `slider_title`, `slider_subtitle`, `slider_p`, `slider_img`, `created_at`, `updated_at`) VALUES
(17, 'E-SHOPPER', 'Free E-Commerce Template', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'slider_17_1538579673.jpg', '2018-10-03 09:14:33', '2018-10-03 09:14:33'),
(18, 'E-SHOPPER', 'Free E-Commerce Template', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'slider_18_1538579717.jpg', '2018-10-03 09:15:17', '2018-10-03 09:15:17'),
(20, 'E-SHOPPER', 'Free E-Commerce Template', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ', 'slider_20_1538583283.jpg', '2018-10-03 10:14:43', '2018-10-03 10:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shiping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`order_id`, `customer_id`, `shiping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(41, 25, 42, 49, '284.00', 'pending', '2018-10-03 07:33:42', NULL),
(42, 25, 42, 50, '76.00', 'pending', '2018-10-03 10:15:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_qty`, `created_at`, `updated_at`) VALUES
(47, 38, 39, 'Easy Polo Black Edition', '98', '1', '2018-10-03 07:22:45', NULL),
(48, 38, 40, 'Easy Polo Black Edition', '36', '1', '2018-10-03 07:22:45', NULL),
(49, 39, 44, 'Easy Polo Black Edition', '87', '1', '2018-10-03 07:23:59', NULL),
(50, 40, 39, 'Easy Polo Black Edition', '98', '1', '2018-10-03 07:24:37', NULL),
(51, 41, 39, 'Easy Polo Black Edition', '98', '1', '2018-10-03 07:33:42', NULL),
(52, 41, 38, 'Easy Polo Black Edition', '66', '1', '2018-10-03 07:33:43', NULL),
(53, 41, 35, 'Easy Polo Black Edition', '120', '1', '2018-10-03 07:33:43', NULL),
(54, 42, 45, 'Easy Polo Black Edition', '76', '1', '2018-10-03 10:15:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payments`
--

CREATE TABLE `tbl_payments` (
  `payent_id` int(10) UNSIGNED NOT NULL,
  `payent_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payent_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_payments`
--

INSERT INTO `tbl_payments` (`payent_id`, `payent_method`, `payent_status`, `created_at`, `updated_at`) VALUES
(46, 'handcash', 'pending', '2018-10-03 07:22:45', NULL),
(47, 'handcash', 'pending', '2018-10-03 07:23:59', NULL),
(48, 'handcash', 'pending', '2018-10-03 07:24:37', NULL),
(49, 'handcash', 'pending', '2018-10-03 07:33:42', NULL),
(50, 'handcash', 'pending', '2018-10-03 10:15:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shamim', 'md.shamimtpi@gmail.com', '$2y$10$CmooTACcmGtpnc9kt7VkuuyGS0TVUNAP1CYfiXJYre/1BlyFUN5Z.', 'qhqFvyQvFOl7QunXXSbnEmgUgmM2UUjujzyHMO9ADF9jJD1BqEBTRcoRY9Cl', '2018-08-01 12:00:30', '2018-08-01 12:00:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer_registers`
--
ALTER TABLE `customer_registers`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `manufactures`
--
ALTER TABLE `manufactures`
  ADD PRIMARY KEY (`menufr_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shipings`
--
ALTER TABLE `shipings`
  ADD PRIMARY KEY (`shiping_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  ADD PRIMARY KEY (`payent_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `customer_registers`
--
ALTER TABLE `customer_registers`
  MODIFY `customerId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `menufr_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `shipings`
--
ALTER TABLE `shipings`
  MODIFY `shiping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `slider_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  MODIFY `payent_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
