-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 02:22 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phh`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(5, 'Bo Prince', 'nydyfuryx@mailinator.com', '+1 (727) 799-6428', 'Et enim dolore tempo', '2022-10-27 19:17:38', '2022-10-27 19:17:38');

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
(5, '2022_10_25_183348_create_products_table', 1),
(6, '2022_10_27_173950_create_contact_table', 1),
(14, '2022_10_28_180609_create_orders_table', 2),
(15, '2022_10_28_184324_create_order_items_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `total`, `code`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 3142, 'dc5264', 1, '2022-10-28 18:50:01', '2022-10-28 18:50:01'),
(2, 3792, 'd694b5', 1, '2022-10-28 18:50:54', '2022-10-28 18:50:54'),
(3, 10092, '8d1edd', 1, '2022-10-28 19:01:59', '2022-10-28 19:01:59'),
(4, 450, 'b57cb1', 1, '2022-10-28 19:06:38', '2022-10-28 19:06:38'),
(5, 350, 'c5b3ab', 1, '2022-10-28 19:08:07', '2022-10-28 19:08:07'),
(6, 750, '6b4738', 1, '2022-10-28 19:08:50', '2022-10-28 19:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `subtotal`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, 700, '2022-10-28 18:50:01', '2022-10-28 18:50:01'),
(2, 1, 15, 3, 2442, '2022-10-28 18:50:01', '2022-10-28 18:50:01'),
(3, 2, 2, 2, 700, '2022-10-28 18:50:54', '2022-10-28 18:50:54'),
(4, 2, 15, 3, 2442, '2022-10-28 18:50:54', '2022-10-28 18:50:54'),
(5, 2, 5, 1, 650, '2022-10-28 18:50:54', '2022-10-28 18:50:54'),
(6, 3, 15, 3, 2442, '2022-10-28 19:01:59', '2022-10-28 19:01:59'),
(7, 3, 5, 1, 650, '2022-10-28 19:01:59', '2022-10-28 19:01:59'),
(8, 3, 2, 20, 7000, '2022-10-28 19:01:59', '2022-10-28 19:01:59'),
(9, 4, 3, 1, 450, '2022-10-28 19:06:38', '2022-10-28 19:06:38'),
(10, 5, 2, 1, 350, '2022-10-28 19:08:07', '2022-10-28 19:08:07'),
(11, 6, 6, 1, 750, '2022-10-28 19:08:50', '2022-10-28 19:08:50');

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
  `expires_at` timestamp NULL DEFAULT NULL,
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
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Deal Name 02', '350', 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod.', '/assets/images/deals-img.png', '2022-10-27 14:05:16', '2022-10-27 14:05:16'),
(3, 'Deal Name 03', '450', 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod.', '/assets/images/deals-img.png', '2022-10-27 14:05:16', '2022-10-27 14:05:16'),
(5, 'Deal Name 02', '650', 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod.', '/assets/images/deals-img.png', '2022-10-27 14:05:16', '2022-10-27 14:05:16'),
(6, 'Deal Name 05', '750', 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod.', '/assets/images/deals-img.png', '2022-10-27 14:05:16', '2022-10-27 14:05:16'),
(7, 'Deal Name 06', '950', 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod.', '/assets/images/deals-img.png', '2022-10-27 14:05:16', '2022-10-27 14:05:16'),
(8, 'Deal Name 07', '850', 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod.', '/assets/images/deals-img.png', '2022-10-27 14:05:16', '2022-10-27 14:05:16'),
(9, 'Deal Name 08', '1050', 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod.', '/assets/images/deals-img.png', '2022-10-27 14:05:16', '2022-10-27 14:05:16'),
(10, 'Deal Name 09', '1250', 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod.', '/assets/images/deals-img.png', '2022-10-27 14:05:16', '2022-10-27 14:05:16'),
(11, 'Deal Name 10', '1350', 'Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod.', '/assets/images/deals-img.png', '2022-10-27 14:05:16', '2022-10-27 14:05:16'),
(15, 'Erica Gamble', '814', 'Ab possimus quo nos', 'uploads/product/4a69dceb25ddd53fc7471a8bd399f9ee.png', '2022-10-27 16:55:25', '2022-10-28 15:08:58'),
(18, 'Carissa Gutierrez', '821', 'Beatae beatae vero e', 'uploads/product/c6025476ca5ac3ec67e50527081b0b96.png', '2022-10-27 18:50:35', '2022-10-27 18:50:35');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@phh.com', NULL, '$2y$10$8OL3N19AOTsg3dKSNvfkM.DKGpaL3myKi2b6FgDSuywKfE8OQaHSW', '3VHhLcKFgvtVYyJWAFPelYeaWNQ4iKO5iXgp0Jo7qWaJONP4wMyzApcwVL5J', '2022-10-27 14:16:47', '2022-10-27 14:16:47'),
(2, 'Jason Rasmussen', 'cx@phh.com', NULL, '$2y$10$IehlcsSuDTRH2Pu9LsXYH.0afJT0SZzZ/mt0lnvV2Zsg09S0Wr6RS', NULL, '2022-10-28 16:55:25', '2022-10-28 16:55:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
