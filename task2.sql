-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2023 at 11:02 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task2`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_30_083436_create_forms_table', 2),
(7, '2023_08_05_165401_create_tasks_table', 3),
(8, '2023_12_11_172440_create_products_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `amount` int NOT NULL,
  `sub_total` int NOT NULL,
  `quantity` int NOT NULL,
  `payment_method` enum('cod','paypal') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cod',
  `payment_status` enum('paid','unpaid') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unpaid',
  `status` enum('new','process','confirm','delivered','cancel') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `address2` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `amount`, `sub_total`, `quantity`, `payment_method`, `payment_status`, `status`, `first_name`, `last_name`, `email`, `phone`, `country`, `post_code`, `address1`, `address2`, `created_at`, `updated_at`) VALUES
(5, 1, 5, 74, 148, 2, 'cod', 'unpaid', 'new', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-12 04:19:15', '2023-12-12 04:19:15');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `name`, `description`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 'Product 1', 'Description for Product 1', '22.00', 7, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(2, 1, 'Product 2', 'Description for Product 2', '79.00', 20, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(3, 1, 'Product 3', 'Description for Product 3', '48.00', 13, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(4, 1, 'Product 4', 'Description for Product 4', '18.00', 18, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(5, 1, 'Product 5', 'Description for Product 5', '74.00', 15, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(6, 1, 'Product 6', 'Description for Product 6', '86.00', 14, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(7, 1, 'Product 7', 'Description for Product 7', '41.00', 13, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(8, 1, 'Product 8', 'Description for Product 8', '64.00', 7, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(9, 1, 'Product 9', 'Description for Product 9', '74.00', 19, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(10, 1, 'Product 10', 'Description for Product 10', '61.00', 17, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(11, 1, 'Product 11', 'Description for Product 11', '89.00', 12, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(12, 1, 'Product 12', 'Description for Product 12', '65.00', 4, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(13, 1, 'Product 13', 'Description for Product 13', '61.00', 3, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(14, 1, 'Product 14', 'Description for Product 14', '31.00', 15, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(15, 1, 'Product 15', 'Description for Product 15', '28.00', 14, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(16, 1, 'Product 16', 'Description for Product 16', '41.00', 13, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(17, 1, 'Product 17', 'Description for Product 17', '54.00', 7, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(18, 1, 'Product 18', 'Description for Product 18', '54.00', 1, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(19, 1, 'Product 19', 'Description for Product 19', '97.00', 17, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(20, 1, 'Product 20', 'Description for Product 20', '87.00', 8, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(21, 1, 'Product 21', 'Description for Product 21', '65.00', 17, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(22, 1, 'Product 22', 'Description for Product 22', '79.00', 15, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(23, 1, 'Product 23', 'Description for Product 23', '22.00', 18, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(24, 1, 'Product 24', 'Description for Product 24', '36.00', 6, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(25, 1, 'Product 25', 'Description for Product 25', '14.00', 5, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(26, 1, 'Product 26', 'Description for Product 26', '93.00', 2, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(27, 1, 'Product 27', 'Description for Product 27', '57.00', 6, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(28, 1, 'Product 28', 'Description for Product 28', '36.00', 2, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(29, 1, 'Product 29', 'Description for Product 29', '24.00', 1, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(30, 1, 'Product 30', 'Description for Product 30', '84.00', 20, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(31, 1, 'Product 31', 'Description for Product 31', '72.00', 4, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(32, 1, 'Product 32', 'Description for Product 32', '29.00', 5, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(33, 1, 'Product 33', 'Description for Product 33', '36.00', 6, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(34, 1, 'Product 34', 'Description for Product 34', '28.00', 14, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(35, 1, 'Product 35', 'Description for Product 35', '92.00', 13, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(36, 1, 'Product 36', 'Description for Product 36', '52.00', 7, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(37, 1, 'Product 37', 'Description for Product 37', '38.00', 17, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(38, 1, 'Product 38', 'Description for Product 38', '23.00', 9, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(39, 1, 'Product 39', 'Description for Product 39', '71.00', 16, '2023-12-11 19:14:50', '2023-12-11 19:14:50'),
(40, 1, 'Product 40', 'Description for Product 40', '54.00', 20, '2023-12-11 19:14:50', '2023-12-11 19:14:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'buyer' COMMENT 'buyer or seller',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'test@gmail.com', 'buyer', NULL, '$2y$10$GcuzrLzJ1h04IwP3kHhZJ.Cxva7Z0xkdKS5DnMm7HTuGSIr.9Xctu', NULL, '2023-06-30 12:11:28', '2023-06-30 12:11:28');

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
  ADD KEY `products_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
