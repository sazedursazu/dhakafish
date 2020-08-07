-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2020 at 05:28 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taza_fish`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `parent_id`, `created_at`, `updated_at`) VALUES
(6, 'ইলিশ মাছ', NULL, '1596640563.jpg', NULL, '2020-08-05 09:16:03', '2020-08-05 09:16:03'),
(7, 'চিংড়ি মাছ', NULL, '1596640589.jpg', NULL, '2020-08-05 09:16:29', '2020-08-05 09:16:29'),
(8, 'কোড়াল মাছ', NULL, '1596640616.jpg', NULL, '2020-08-05 09:16:56', '2020-08-05 09:16:56'),
(9, 'পাবদা মাছ', NULL, '1596640645.jpg', NULL, '2020-08-05 09:17:25', '2020-08-05 09:17:25'),
(10, 'বোয়াল মাছ', NULL, '1596640693.jpg', NULL, '2020-08-05 09:18:13', '2020-08-05 09:18:13'),
(11, 'পোয়া মাছ', NULL, '1596640726.jpg', NULL, '2020-08-05 09:18:47', '2020-08-05 09:18:47'),
(12, 'রুই মাছ', NULL, '1596640746.jpg', NULL, '2020-08-05 09:19:06', '2020-08-05 09:19:06'),
(13, 'কাতলা মাছ', NULL, '1596640775.jpg', NULL, '2020-08-05 09:19:35', '2020-08-05 09:19:35'),
(14, 'বাইলা মাছ', NULL, '1596645310.jpg', NULL, '2020-08-05 10:35:10', '2020-08-05 10:35:10');

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
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2020_05_16_045129_create_products_table', 1),
(16, '2020_07_25_183719_create_categories_table', 1),
(17, '2020_07_25_183833_create_admins_table', 1),
(18, '2020_07_25_183945_create_product_images_table', 1),
(21, '2020_07_26_050729_create_sliders_table', 2),
(22, '2020_07_31_175226_create_orders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_total` double(8,2) NOT NULL,
  `item_count` int(11) NOT NULL,
  `shipping_fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(28, 23, 2, 566.00, 1, NULL, NULL),
(29, 24, 3, 344.00, 1, NULL, NULL),
(30, 25, 2, 566.00, 1, NULL, NULL),
(31, 25, 1, 400.00, 1, NULL, NULL),
(32, 26, 2, 566.00, 1, NULL, NULL),
(33, 27, 4, 230.00, 1, NULL, NULL),
(34, 27, 1, 400.00, 1, NULL, NULL),
(35, 28, 23, 650.00, 1, NULL, NULL);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` double(8,2) NOT NULL,
  `price` int(11) NOT NULL,
  `offer_price` int(11) DEFAULT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `description`, `slug`, `weight`, `price`, `offer_price`, `admin_id`, `created_at`, `updated_at`) VALUES
(18, 6, 'ইলিশ মাছ  ১ কেজি + ১ পিস', 'দেশি টাটকা ইলিশ', '', 1.00, 1050, NULL, 1, '2020-08-05 09:38:43', '2020-08-05 09:38:43'),
(19, 13, 'কাতল মাছ ( ১.৫ কেজি /১ পিস )', 'দফহ্রঘ', '', 566.00, 500, NULL, 1, '2020-08-05 09:47:56', '2020-08-05 09:47:56'),
(20, 8, 'কোড়াল মাছ ( ১পিস/ ১ কেজি )', 'দ্যরতঝ', '', 1000.00, 550, NULL, 1, '2020-08-05 09:51:11', '2020-08-05 09:51:11'),
(21, 7, 'গলদা চিংড়ি ( ১৫/২০ পিস / ১ কেজি )', 'দক্সহ্যত্র', '', 1000.00, 750, NULL, 1, '2020-08-05 09:54:48', '2020-08-05 09:54:48'),
(22, 9, 'পাবদা মাছ ( ২০ পিস/ ১ কেজি )', 'দ্যহ্রুত', '', 1000.00, 500, NULL, 1, '2020-08-05 10:00:33', '2020-08-05 10:00:33'),
(23, 11, 'পোয়া মাছ ( ৩/৪ পিস / ১ কেজি )', 'ফধগফহ', '', 1000.00, 650, NULL, 1, '2020-08-05 10:03:44', '2020-08-05 10:03:44'),
(24, 14, 'বাইলা মাছ ( ৩/৪ পিস/ ১ কেজি )', 'ফঘগজ', '', 1000.00, 850, NULL, 1, '2020-08-05 10:36:45', '2020-08-05 10:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(26, 14, '1596622625.jpg', '2020-08-05 04:17:06', '2020-08-05 04:17:06'),
(27, 14, '1596622774.jpg', '2020-08-05 04:19:34', '2020-08-05 04:19:34'),
(28, 15, '1596623148.jpg', '2020-08-05 04:25:48', '2020-08-05 04:25:48'),
(29, 15, '1596623203.jpg', '2020-08-05 04:26:43', '2020-08-05 04:26:43'),
(30, 16, '1596625608.jpg', '2020-08-05 05:06:48', '2020-08-05 05:06:48'),
(31, 17, '1596637856.jpg', '2020-08-05 08:30:56', '2020-08-05 08:30:56'),
(32, 18, '1596641923.jpg', '2020-08-05 09:38:44', '2020-08-05 09:38:44'),
(33, 19, '1596642476.jpg', '2020-08-05 09:47:56', '2020-08-05 09:47:56'),
(34, 20, '1596642671.jpg', '2020-08-05 09:51:12', '2020-08-05 09:51:12'),
(35, 21, '1596642888.jpg', '2020-08-05 09:54:48', '2020-08-05 09:54:48'),
(36, 22, '1596643233.jpg', '2020-08-05 10:00:33', '2020-08-05 10:00:33'),
(37, 23, '1596643424.jpg', '2020-08-05 10:03:44', '2020-08-05 10:03:44'),
(38, 24, '1596645405.jpg', '2020-08-05 10:36:45', '2020-08-05 10:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `category_name`, `offer_title`, `description`, `image`, `button_text`, `button_link`, `priority`, `created_at`, `updated_at`) VALUES
(3, 'ইলিশ মাছ', 'দেশি টাটকা ইলিশ', '১ কেজি ইলিশ কিনুন একদম ১০৫০ টাকায় । ডেলিভারি চার্জ প্রযোয্য ।', '1596699266.jpg', 'SHOP NOW', 'fgfhf', 1, '2020-08-06 01:34:26', '2020-08-06 01:34:26'),
(4, 'বাইলা মাছ', 'একদম টাটকা বাইলা মাছ ।', '১ কেজি বাইলা মাছ ৬৫০ টাকায় পাচ্ছেন ।', '1596699508.jpg', 'dfgfh', 'dgfhj.com', 1, '2020-08-06 01:38:28', '2020-08-06 01:38:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sazedur', 'sazu@gmail.com', NULL, '$2y$10$bpcTZOuj4svnYTqs5HStmu6q5rybnORq6lYnTKSrmjcEYBaWOg7lm', NULL, '2020-07-30 00:35:52', '2020-07-30 00:35:52'),
(2, 'sazedur', 'sazu1@gmail.com', NULL, '$2y$10$E0wXTaYmg2BF4sEq582emOuxIXx.oZejMELTRsA8PWyCs60lF/jva', NULL, '2020-08-06 04:30:49', '2020-08-06 04:30:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
