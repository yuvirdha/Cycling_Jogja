-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 08:06 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cycling_jogja`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@cyclingjogja.com', '$2y$10$PeY4.kWD.AVpv5PbOKSyIOgxJweHJ1I2/8WEbwIxix541/FFZeyYm', '2019-12-02 03:07:30', '2019-12-02 03:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rincian_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_pelaksanaan` date NOT NULL,
  `rute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `gambar_event`, `nama_event`, `rincian_event`, `waktu_pelaksanaan`, `rute`, `harga_tiket`, `created_at`, `updated_at`) VALUES
(11, '1576442327_PrambananTempleSunsetTour.jpg', 'Tour de Prambanan', 'Bersepeda keliling Jogja memang seru. Banyak spot yang terlalu menarik untuk dihiraukan. Ayo, bersepeda dan jelajahi keindahannya', '2019-12-20', 'Prambanan-Keraton-Kaliurang', 100000, NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_25_070732_create_events_table', 1),
(5, '2019_11_25_073349_create_pendaftars_table', 1),
(6, '2019_12_02_093111_create_admins_table', 2),
(7, '2019_12_09_145209_create_tabel_sepeda', 3),
(8, '2019_12_09_154649_add_gambarprofil_on_users', 3),
(9, '2019_12_09_180103_create_penyewa_table', 3),
(10, '2019_12_09_195144_change_tabel_sepeda_to_sepedas_table', 3),
(11, '2019_12_09_195434_change_penyewa_to_penyewas_table', 3),
(12, '2019_12_09_200153_add_gambar_sepeda_field_to_sepedas_table', 3);

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
-- Table structure for table `pendaftars`
--

CREATE TABLE `pendaftars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `id_event` bigint(20) NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftars`
--

INSERT INTO `pendaftars` (`id`, `id_user`, `id_event`, `token`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '34', NULL, NULL),
(2, 2, 1, '96', NULL, NULL),
(3, 4, 1, '70', NULL, NULL),
(4, 4, 1, '43', NULL, NULL),
(5, 4, 1, '12', NULL, NULL),
(6, 9, 3, '43', NULL, NULL),
(7, 9, 3, '28', NULL, NULL),
(8, 9, 3, '36', NULL, NULL),
(9, 10, 10, '25', NULL, NULL),
(10, 10, 10, '92', NULL, NULL),
(11, 10, 10, '21', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penyewas`
--

CREATE TABLE `penyewas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `id_sepeda` bigint(20) NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyewas`
--

INSERT INTO `penyewas` (`id`, `id_user`, `id_sepeda`, `token`, `created_at`, `updated_at`) VALUES
(1, 10, 1, '75', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sepeda`
--

CREATE TABLE `sepeda` (
  `kode` int(20) NOT NULL,
  `gambar_sepeda` varchar(20) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sepedas`
--

CREATE TABLE `sepedas` (
  `id` int(10) UNSIGNED NOT NULL,
  `gambar_sepeda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sepedas`
--

INSERT INTO `sepedas` (`id`, `gambar_sepeda`, `jenis`, `harga`, `stock`, `created_at`, `updated_at`) VALUES
(1, '1576119568_Sepeda-Gunung-Pacific-INVERT-100-VT-27.jpg', 'Sepeda Gunung Pacific INVERT 100 VT 27', 20000, '12', NULL, NULL),
(2, '1576119693_502454001.jpg', 'Sepeda Gunung Polygon 46', 25000, '15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambarprofil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `riwayat` int(11) NOT NULL DEFAULT 0,
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

INSERT INTO `users` (`id`, `gambarprofil`, `nama`, `jenis_kelamin`, `nomor_hp`, `tanggal_lahir`, `riwayat`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, NULL, 'Virdha', 'P', '12345678', '1999-09-17', 0, 'yvr@gmail.com', NULL, '$2y$10$hF0xTQgbY7FG.6Zif/3JwuknkYvABC11pBGAj9/0wnD8TPgDfPEb2', NULL, '2019-12-08 07:12:29', '2019-12-08 07:12:29'),
(6, NULL, 'dilfas', 'P', '08994010735', '2000-05-03', 0, 'dsalsabiela@gmail.com', NULL, '12345678', NULL, '2019-12-09 08:20:31', '2019-12-09 08:45:52'),
(7, NULL, 'kripijenius', 'P', '123456789', '1999-09-17', 0, 'kripijenius@gmail.com', NULL, '12345678', NULL, '2019-12-09 10:34:10', '2019-12-09 11:59:48'),
(8, NULL, 'virdha', 'P', '12345678', '2019-12-12', 0, 'avtttt@gmail.com', NULL, '$2y$10$NTXlmOUG0a76GfDUjyF8j.wJdRYQ0mvVSMqZi2FwQISJSo.tfUocS', NULL, '2019-12-09 21:43:10', '2019-12-09 21:43:10'),
(9, NULL, 'zzzz', 'L', '88888888', '1212-12-12', 0, 'b@gmail.com', NULL, '$2y$10$NBisgguMyqb/ozpHuN8GvOaTBgCol7/lfOMeVLnh/eWl5nMLfi.n.', NULL, '2019-12-09 23:22:36', '2019-12-09 23:22:36'),
(10, NULL, 'Kripijenius', 'P', '81372079225', '1999-09-17', 0, 'yuv@gmail.com', NULL, '$2y$10$f21ZFa.ZCCELrRNTdcqNaeLye6UsbfV08hxjKlcMaquxbhwVojwvK', NULL, '2019-12-11 03:28:13', '2019-12-11 18:34:19'),
(11, NULL, 'virdha', 'P', '123456789', '2019-12-08', 0, 'yuveeeeeeee@gmail.com', NULL, '$2y$10$.9vwAsLsIgnEBrVhQ4NbsOeuIG7rt/La3LxpJGCFTMJYrqwNNIkZO', NULL, '2019-12-15 22:54:17', '2019-12-15 22:54:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pendaftars`
--
ALTER TABLE `pendaftars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyewas`
--
ALTER TABLE `penyewas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sepeda`
--
ALTER TABLE `sepeda`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `sepedas`
--
ALTER TABLE `sepedas`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pendaftars`
--
ALTER TABLE `pendaftars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penyewas`
--
ALTER TABLE `penyewas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sepeda`
--
ALTER TABLE `sepeda`
  MODIFY `kode` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sepedas`
--
ALTER TABLE `sepedas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
