-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2024 at 02:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking`
--

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
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `histories_id` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_id` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noPlat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehile_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_merk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mall_id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` date NOT NULL,
  `entry_time` time NOT NULL,
  `exit_time` time NOT NULL,
  `duration` char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_payment` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`histories_id`, `vehicle_id`, `noPlat`, `vehile_type`, `vehicle_merk`, `mall_id`, `date_time`, `entry_time`, `exit_time`, `duration`, `total_payment`, `created_at`, `updated_at`) VALUES
('001', '000001', '', '0', '', '0001', '2024-01-01', '05:36:55', '05:36:55', '2', '1000', NULL, NULL),
('002', '000002', '', '0', '', '0002', '0000-00-00', '05:36:55', '05:36:55', '3', '1500', NULL, NULL),
('003', '0', '', '0', '', '003', '0000-00-00', '10:59:51', '10:59:51', '3', '9000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mall`
--

CREATE TABLE `mall` (
  `id_mall` int(6) NOT NULL,
  `mall_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `k_mobil` int(10) NOT NULL,
  `k_motor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mall`
--

INSERT INTO `mall` (`id_mall`, `mall_name`, `address`, `k_mobil`, `k_motor`) VALUES
(1, 'Margo City', 'Jl. Margonda Raya No.358, Kemiri Muka, Kecamatan Beji, Kota Depok, Jawa Barat', 199, 95),
(2, 'Lippo Mall', 'Jl. Raya Bogor No.KM 29 No. 29, Mekarsari, Kec. Cimanggis, Kota Depok, Jawa Barat ', 199, 95),
(3, 'Ramayana City Plaza', 'Jl. Margonda, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat', 199, 95),
(4, 'Cibinong City Mall', 'Jl. Tegar Beriman No. 1, Kelurahan Pakansari, Kecamatan Cibinong, Kabupaten Bogor, Jawa Barat ', 199, 95);

-- --------------------------------------------------------

--
-- Table structure for table `malls`
--

CREATE TABLE `malls` (
  `mall_id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_mall` int(6) NOT NULL,
  `mall_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `help_desk` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quotas_motor` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quotas_mobil` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee_motor` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee_mobil` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `malls`
--

INSERT INTO `malls` (`mall_id`, `id_mall`, `mall_name`, `city`, `address`, `help_desk`, `quotas_motor`, `quotas_mobil`, `fee_motor`, `fee_mobil`, `created_at`, `updated_at`) VALUES
('0001', 1, 'Margo City', 'Depok', 'Jl. Margonda Raya No.358, Kemiri Muka, Kecamatan Beji, Kota Depok, Jawa Barat', '0251-8355242', '150', '200', '2000', '5000', '2024-01-14 10:17:32', NULL),
('0002', 2, 'Lippo Mall', 'Depok', 'Jl. Raya Bogor No.KM 29 No. 29, Mekarsari, Kec. Cimanggis, Kota Depok, Jawa Barat ', '0251-8355243', '175', '150', '2000', '5000', '2024-01-15 13:45:14', NULL),
('0003', 3, 'Ramayana City Plaza', 'Depok', 'Jl. Margonda, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat', '0251-8355243', '201', '156', '2000', '4000', '2024-01-15 13:36:09', NULL),
('0004', 4, 'Cibinong City Mall', 'Bogor', 'Jl. Tegar Beriman No. 1, Kelurahan Pakansari, Kecamatan Cibinong, Kabupaten Bogor, Jawa Barat ', '0251-8355244', '205', '155', '2000', '5000', '2024-01-15 13:36:18', NULL);

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_28_150419_create_malls_table', 1),
(6, '2023_11_28_170122_create_vehicles_table', 2),
(7, '2023_11_28_170433_create_histories_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `parkirmasuk`
--

CREATE TABLE `parkirmasuk` (
  `notiket` int(11) NOT NULL,
  `tanggalmasuk` date NOT NULL,
  `noplat` varchar(10) NOT NULL,
  `jeniskendaraan` varchar(10) NOT NULL,
  `merkkendaraan` varchar(15) NOT NULL,
  `jammasuk` varchar(10) NOT NULL,
  `jamkeluar` varchar(20) DEFAULT 'Belum Keluar',
  `biaya_per_jam` int(11) NOT NULL,
  `biaya` int(10) NOT NULL,
  `duration` int(6) DEFAULT NULL,
  `id_mall` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parkirmasuk`
--

INSERT INTO `parkirmasuk` (`notiket`, `tanggalmasuk`, `noplat`, `jeniskendaraan`, `merkkendaraan`, `jammasuk`, `jamkeluar`, `biaya_per_jam`, `biaya`, `duration`, `id_mall`) VALUES
(29, '2024-01-14', 'H 7651 JJ', 'Motor', 'Vario', '15:34:014', 'Belum Keluar', 3000, 3000, 0, 0),
(35, '2024-01-15', 'A 1111 DD', 'Motor', 'Vario', '00:16:21', 'Belum Keluar', 2000, 2000, NULL, 1),
(36, '2024-01-15', 'A 3333 VV', 'Motor', 'Vario', '00:16:40', 'Belum Keluar', 2000, 2000, NULL, 1),
(37, '2024-01-15', 'A 8181 LW', 'Motor', 'Vario', '00:17:32', 'Belum Keluar', 2000, 2000, NULL, 1),
(38, '2024-01-15', 'Z AHI D', 'Motor', 'Vario', '09:51:07', '09:52:10', 2000, 2000, 1, 1),
(39, '2024-01-15', 'A 123 A', 'Motor', 'Vario', '09:53:09', 'Belum Keluar', 2000, 2000, NULL, 1),
(44, '2024-01-16', 'F 3814 NI', 'Mobil', 'Rush', '10:56:59', '10:58:41', 5000, 5000, 1, 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Petugas1', 'password', NULL, NULL, NULL),
(2, 'Samsul', '123', NULL, NULL, NULL),
(3, '', '', NULL, NULL, NULL),
(4, 'anggi', '123', NULL, NULL, NULL),
(5, 'denisa', '123', NULL, NULL, NULL),
(10, 'Andi', '123', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mall_id` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_type` enum('Mobil','Motor') COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_merk` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_plate_number` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entry_time` time NOT NULL,
  `exit_time` time DEFAULT NULL,
  `entry_date` date DEFAULT NULL,
  `estimated_cost` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `mall_id`, `vehicle_type`, `vehicle_merk`, `vehicle_plate_number`, `entry_time`, `exit_time`, `entry_date`, `estimated_cost`, `created_at`, `updated_at`) VALUES
('000001', '0001', 'Mobil', 'Toyota Rush', 'F 1223 AB', '17:18:51', '17:18:51', '2023-11-29', '6000.00', '2023-11-29 16:19:59', NULL),
('000002', '0002', 'Mobil', 'Honda Jazz', 'B 1234 JJ', '17:18:51', '17:18:51', '2023-11-29', '4000.00', NULL, NULL),
('000003', '0003', 'Motor', 'Yamaha R15', 'F 4567 ZZ', '22:22:41', NULL, '2023-11-29', '4000.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('000004', '0003', 'Mobil', 'Toyota Rush', 'F 1223 AB', '21:04:00', NULL, '2023-12-01', '9000.00', NULL, NULL);

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
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`histories_id`);

--
-- Indexes for table `mall`
--
ALTER TABLE `mall`
  ADD PRIMARY KEY (`id_mall`);

--
-- Indexes for table `malls`
--
ALTER TABLE `malls`
  ADD PRIMARY KEY (`mall_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parkirmasuk`
--
ALTER TABLE `parkirmasuk`
  ADD PRIMARY KEY (`notiket`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mall`
--
ALTER TABLE `mall`
  MODIFY `id_mall` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parkirmasuk`
--
ALTER TABLE `parkirmasuk`
  MODIFY `notiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
