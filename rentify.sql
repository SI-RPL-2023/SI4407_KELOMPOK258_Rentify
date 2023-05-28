-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 08:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentify`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_property` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `id_property`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-05-24 19:25:42', '2023-05-24 19:25:42');

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_property` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `id_reservasi` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `id_property`, `id_user`, `id_reservasi`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2023-05-24 19:32:15', '2023-05-24 19:32:15'),
(2, 1, 4, 2, '2023-05-27 22:37:32', '2023-05-27 22:37:32'),
(3, 2, 1, 1, '2023-05-27 23:15:01', '2023-05-27 23:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_28_042343_create_properties_table', 1),
(6, '2023_03_28_043137_create_favorites_table', 1),
(7, '2023_03_28_050836_create_reservations_table', 1),
(8, '2023_03_28_051151_create_reviews_table', 1),
(9, '2023_05_25_005501_create_histories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pemilik` bigint(20) UNSIGNED DEFAULT NULL,
  `property_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `kapasitas` varchar(255) NOT NULL,
  `fasilitas` text NOT NULL,
  `description` text NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `id_pemilik`, `property_name`, `category`, `price`, `availability`, `kapasitas`, `fasilitas`, `description`, `lokasi`, `image`, `rating`, `created_at`, `updated_at`) VALUES
(1, 2, 'Bandung Convention Center', 'Standard', 10000000, 'tersedia', '2000', 'Ada lobby, tempat parkir, gudang penyimpanan, mushala, toilet, AC, listrik 16 ribu watt', 'Bandung Convention Center atau disingkat BCC merupakan pusat konvensi yang berada di bandung tepatnya di Jl. Soekarno Hatta No. 354 Bandung Jawa Barat. Lokasi BCC ini merupakan lokasi yang strategis karena berada tidak jauh dari pusat kota Bandung, ditunjang dengan Prasarana berupa jalan yang luas menuju gedung dan dekat dengan fasilitas yang menunjang gedung konvensi seperti hotel dan akses transportasi umum.', 'Jl. Soekarno Hatta No.354, Kb. Lega, Kec. Bojongloa Kidul, Kota Bandung', '646eb6c53a3c8_bandung-convention-center.jpg', NULL, '2023-05-24 18:15:49', '2023-05-24 18:15:49'),
(2, 2, 'Bumi Samami', 'Standard', 5500000, 'tersedia', '1000', 'venue, complimentary room untuk akad nikah dan listrik 3.000 watt, additional catering per pax harganya Rp. 200.000.', 'Bumi Samami merupakan salah satu venue wedding terkenal yang ada di Bandung. Bumi Samami memiliki area outdoor yang luas dan fasilitas paket wedding yang lengkap.', 'Jl. Terusan Cigadung, No. 15, Coblong, Bandung', '646ec4eac9d7a_bumi-samami.jpg', NULL, '2023-05-24 19:16:10', '2023-05-24 19:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_property` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `tanggal_sewa` date NOT NULL,
  `durasi` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `id_property`, `id_user`, `tanggal_sewa`, `durasi`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-05-27', 5, 50000000, '2023-05-24 19:26:59', '2023-05-24 19:26:59'),
(2, 1, 4, '2023-05-31', 9, 90000000, '2023-05-27 21:58:31', '2023-05-27 21:58:31'),
(3, 2, 1, '2023-06-15', 6, 33000000, '2023-05-27 23:14:55', '2023-05-27 23:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_property` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `rating` double(8,2) NOT NULL,
  `review` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `id_property`, `id_user`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 5.00, 'mantap', '2023-05-24 19:34:43', '2023-05-24 19:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access_type` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `no_hp`, `alamat`, `email`, `password`, `access_type`, `created_at`, `updated_at`) VALUES
(1, 'Penyewa', '081234567', 'Bandung', 'penyewa@email.com', '$2y$10$5EAWoF7hTc1vQ2cb2DAXAuo9LmFsK/EoKD/ZwmKSYu8DPyLmKHIkO', 'Penyewa', '2023-05-24 17:57:52', '2023-05-24 17:57:52'),
(2, 'Pemilik', '09876554', 'Jakarta', 'pemilik@email.com', '$2y$10$EohMPNvACgIVFsSCVo7zFu3pItTIwFUcaJxSRt1BsUphK6Zfhxpbe', 'Pemilik', '2023-05-24 18:09:06', '2023-05-24 18:09:06'),
(3, 'Admin', '4664645', 'Surabaya', 'admin@email.com', '$2y$10$RkJIotP7oFOiShOVLf8Py.vMVfpQHKnVYH0wb4mxi0sFu.9I.p8cy', 'Admin', '2023-05-24 18:58:34', '2023-05-24 18:58:34'),
(4, 'Penyewa2', '36557523967', 'Surabaya', 'penyewa2@mail.com', '$2y$10$Qr4a1rAlTKCD5j2FQK75Oe7zsJNgtRcr.TyLrMTH24vwKx1IV66l2', 'Penyewa', '2023-05-27 21:57:40', '2023-05-27 21:57:40');

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
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_id_property_index` (`id_property`),
  ADD KEY `favorites_id_user_index` (`id_user`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `histories_id_property_index` (`id_property`),
  ADD KEY `histories_id_user_index` (`id_user`),
  ADD KEY `histories_id_reservasi_index` (`id_reservasi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `properties_id_pemilik_index` (`id_pemilik`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_id_property_index` (`id_property`),
  ADD KEY `reservations_id_user_index` (`id_user`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_id_property_index` (`id_property`),
  ADD KEY `reviews_id_user_index` (`id_user`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_id_property_foreign` FOREIGN KEY (`id_property`) REFERENCES `properties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorites_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `histories`
--
ALTER TABLE `histories`
  ADD CONSTRAINT `histories_id_property_foreign` FOREIGN KEY (`id_property`) REFERENCES `properties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `histories_id_reservasi_foreign` FOREIGN KEY (`id_reservasi`) REFERENCES `reservations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `histories_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_id_pemilik_foreign` FOREIGN KEY (`id_pemilik`) REFERENCES `users` (`id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_id_property_foreign` FOREIGN KEY (`id_property`) REFERENCES `properties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservations_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_id_property_foreign` FOREIGN KEY (`id_property`) REFERENCES `properties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
