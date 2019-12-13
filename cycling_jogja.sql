-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2019 pada 07.58
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.2.24

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
-- Struktur dari tabel `admins`
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
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@cyclingjogja.com', '$2y$10$fkbIYZsiLf/0.ACb4GMTtObPaIeYrxCfs6foX6YSGxJuvyLADSsSy', '2019-12-05 07:10:56', '2019-12-05 07:10:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
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
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `gambar_event`, `nama_event`, `rincian_event`, `waktu_pelaksanaan`, `rute`, `harga_tiket`, `created_at`, `updated_at`) VALUES
(4, '1575955576_Screenshot (8).png', 'qwerty', 'sdfghn', '2019-12-04', 'cvbnbx', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_25_070732_create_events_table', 1),
(5, '2019_11_25_073349_create_pendaftars_table', 1),
(6, '2019_12_02_093111_create_admins_table', 1),
(7, '2019_12_09_145209_create_tabel_sepeda', 2),
(8, '2019_12_09_154649_add_gambarprofil_on_users', 3),
(9, '2019_12_09_180103_create_penyewa_table', 4),
(10, '2019_12_09_195144_change_tabel_sepeda_to_sepedas_table', 4),
(11, '2019_12_09_195434_change_penyewa_to_penyewas_table', 4),
(12, '2019_12_09_200153_add_gambar_sepeda_field_to_sepedas_table', 4),
(13, '2019_12_12_232503_create_soals', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('d@gmail.com', '$2y$10$lrBMvG8oosv/RFV4xpI1LOOgVxsL8SUB9uHWEaYCHUT4VivqfjKYe', '2019-12-09 07:09:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftars`
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
-- Dumping data untuk tabel `pendaftars`
--

INSERT INTO `pendaftars` (`id`, `id_user`, `id_event`, `token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '98', NULL, NULL),
(2, 1, 1, '89', NULL, NULL),
(3, 4, 4, '99', NULL, NULL),
(4, 4, 4, '78', NULL, NULL),
(5, 4, 4, '27', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewas`
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
-- Dumping data untuk tabel `penyewas`
--

INSERT INTO `penyewas` (`id`, `id_user`, `id_sepeda`, `token`, `created_at`, `updated_at`) VALUES
(1, 4, 2, '56', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sepedas`
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
-- Dumping data untuk tabel `sepedas`
--

INSERT INTO `sepedas` (`id`, `gambar_sepeda`, `jenis`, `harga`, `stock`, `created_at`, `updated_at`) VALUES
(2, '1576113430_WhatsApp Image 2018-03-31 at 22.19.32.jpeg', 'oracle kita', 100000, '12', NULL, NULL),
(3, '1576114647_WhatsApp Image 2018-04-22 at 22.15.52.jpeg', 'Eigen 3.2', 1000000, '10', NULL, NULL),
(4, '1576114710_WhatsApp Image 2018-06-19 at 17.44.30.jpeg', 'avilia', 234512, '20', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `soals`
--

CREATE TABLE `soals` (
  `id` int(10) UNSIGNED NOT NULL,
  `soal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opsi_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opsi_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opsi_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opsi_d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_benar` enum('a','b','c','d') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `soals`
--

INSERT INTO `soals` (`id`, `soal`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `jawaban_benar`, `created_at`, `updated_at`) VALUES
(1, 'avil lapar, apa yang harus dilakukan', 'makan', 'tidur', 'youtube', 'pesen gofood', 'd', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `gambarprofil`, `nama`, `jenis_kelamin`, `nomor_hp`, `tanggal_lahir`, `riwayat`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'avilia', 'P', '085768454410', '2001-09-22', 0, '18523174@students.uii.ac.id', NULL, 'qwerty123', NULL, '2019-12-07 00:48:07', '2019-12-09 07:04:37'),
(2, NULL, 'dilfa123', 'L', '12345678', '2000-06-05', 0, 'd@gmail.com', NULL, 'avilia123', NULL, '2019-12-09 07:08:14', '2019-12-09 07:09:02'),
(3, NULL, 'dilfass nakal', 'P', '08994010735', '2000-03-05', 0, 'dsalsabiela@gmail.com', NULL, '12345678', NULL, '2019-12-09 07:43:18', '2019-12-09 10:36:44'),
(4, NULL, 'wardha hoyhhihiya', 'L', '1234567890', '2020-09-22', 0, 'w@gmail.com', NULL, '$2y$10$7KrIpEZKpXExHrWVjekEx.KfSLq/i/Wk8iE3VAVSIUzMwChx1IZAa', NULL, '2019-12-09 19:47:38', '2019-12-10 10:38:59'),
(5, NULL, 'qwer', 'L', '1234567890', '2019-12-05', 0, 'zxcvbn@gmail.com', NULL, '$2y$10$J3x.dW6az2CY6QIZuPHlluPLTPEaPgyo2HcsahYgKzAfE/t./uukm', NULL, '2019-12-10 08:53:17', '2019-12-10 08:53:17'),
(6, NULL, 'qwertyuiop', 'L', '1234567890', '2019-12-05', 0, '0@gmail.com', NULL, '$2y$10$YXejekjjC0zk2tI/JxJjGuFAlNqBPJYRLNxW0IQc6aXACC659INBi', NULL, '2019-12-10 09:09:34', '2019-12-10 09:09:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pendaftars`
--
ALTER TABLE `pendaftars`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penyewas`
--
ALTER TABLE `penyewas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sepedas`
--
ALTER TABLE `sepedas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soals`
--
ALTER TABLE `soals`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pendaftars`
--
ALTER TABLE `pendaftars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `penyewas`
--
ALTER TABLE `penyewas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sepedas`
--
ALTER TABLE `sepedas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `soals`
--
ALTER TABLE `soals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
