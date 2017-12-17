-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 07:42 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studio_musik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'avatar.png',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biography` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `url`, `name`, `lastname`, `address`, `education`, `skills`, `biography`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'fq.jpg', 'Fiqy Ainuzzaqy', 'Super Admin', 'Jl. Hikmat 50A Betro, Sedati, Sidoarjo', 'D3 Manajemen Informatika, Universitas Negeri Surabaya', 'PHP, Laravel, HTML, JavaScript', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.', 'rm.rabbitmedia@gmail.com', '$2y$10$5jMDHcmLXqKBFezNTlHme.EptWa5KzMm3a2ru0WqSpVJi5zIpqRaO', 'ZLPtEnsUZZnOBgf4I5DTCkKq3TyhCmsQBmOCewN1B8mSmHgIyz6CKl3d1eBF', '2017-05-11 08:12:42', '2017-05-27 02:42:44', NULL),
(2, 'adi.jpg', 'Adi Prasetiyo', 'Ux Designer', 'Jalan Raya Juanda, Sidoarjo', 'D3 Manajemen Informatika - Universitas Negeri Surabaya', 'HTML, CSS, JS', 'Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet', 'adi@yahoo.com', '$2y$10$0b7rZUm4rQuALssoPFhv2OHpqD7BJatqP92M9I6i/rVx8vZtvvENy', 'JtGqt9g14fE02ZPYtseLOFjO8I1eDOoMbQXdht5Kg6iN7dC2mFzzIpdx3MN3', '2017-05-11 08:16:25', '2017-11-26 08:17:25', '2017-11-26 08:17:25'),
(3, 'aguk.jpg', 'M Aguk Nur Anggraini', 'Editor', 'Bangil, Pasuruan', 'D3 Manajemen Informatika, Universitas Negeri Surabaya', 'HTML', 'lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet', 'agukadmin@yahoo.com', '$2y$10$p3.PObL64KaKlbnfNGzbYuwH6CtxECIjSoqm3J5zwdJprE5zri1wu', 'bv4TQNGDP8kCbqSRzaf1FnNjM4gZHqs8bmaaMGaj3u4XeE5AJkIkDpxRB6I2', '2017-05-12 02:54:24', '2017-11-26 08:17:45', '2017-11-26 08:17:45'),
(9, NULL, 'Rangga', 'Editor', NULL, NULL, NULL, NULL, 'rangga@yahoo.com', '$2y$10$puPC0K4I06hYt2cH5CYkXef4DJQGJDnXcRfb27EtwnaO8NfawGjAO', NULL, '2017-05-25 17:07:17', '2017-05-25 17:07:26', '2017-05-25 17:07:26'),
(10, NULL, 'Aguk', 'Editor', NULL, NULL, NULL, NULL, 'aguk@aguk.com', '$2y$10$94g.yPj/QNrlqshFyRoQ2.dYd3mM3GDxwT/e7wGnvgp/2u6nZcbeO', 'qMuzU81zzH4V5YW0uNrkopsgWp0q9yNCxOcNx8GC3SOcUrmVLb91FiDJRmLj', '2017-05-25 21:03:25', '2017-11-27 08:17:57', '2017-11-27 08:17:57'),
(11, NULL, 'test', 'test', NULL, NULL, NULL, NULL, 'test@test.com', '$2y$10$bIXaHINudlaYe8wK/CyzUem3gkRQceLhkBaD.uYs8eY1BgJXxNyMO', NULL, '2017-05-25 21:40:16', '2017-05-25 21:40:16', NULL),
(12, NULL, 'rezky', 'Editor', NULL, NULL, NULL, NULL, 'rezky@rezky.com', '$2y$10$SS1ZIxZ9dJ81k.Ha0OW0y.Y8KUVyUkTrwTdOSgqMzfRG2qsrnxO1y', '19P7PTJMnMLUXwWKDsL1355rSUOoUdqlaJBaGBMQrJ2EYHflNngAE1h8jHHc', '2017-07-29 21:14:01', '2017-07-29 21:16:14', '2017-07-29 21:16:14'),
(13, 'fm.jpg', 'fahmi rizky', 'editro', NULL, NULL, NULL, NULL, 'fahmi@fahmi.com', '$2y$10$A7CHHaQPhcAF81JQHRgJzuSfA3pM/ONxidHFFONwaQL4NaK.qcsNi', NULL, '2017-11-26 04:00:28', '2017-11-26 04:00:28', NULL),
(14, 'pp.jpg', 'fahmi', 'Super Admin', NULL, 'Rahasia', 'scret ', 'relife in Beggining', 'vreallyla@gmail.com', '$2y$10$Nu/BsgU.h7H0Vc6EBYGBguGiMPTiZavrTbYDGohEZgeBKxpr7oTY.', 'aLvyVsNTatnByE43gbxOQZEkCVa1A3ZRwoynKlXsZToWCOgiTVXuhJmTuRhJ', '2017-12-02 17:28:38', '2017-12-02 17:28:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `name`, `message`, `created_at`, `updated_at`) VALUES
(1, 'fiqy_a@yahoo.com', 'Fiqy Ainuzzaqy', 'adasdasdasdasdasasdasdas', '2017-11-25 11:04:32', '2017-11-23 11:04:32'),
(2, 'fiqy_a@yahoo.com', 'Fiqy Ainuzzaqy', 'asdasdasd', '2017-11-25 11:05:41', '2017-11-23 11:05:41'),
(3, 'fiqy_a@yahoo.com', 'Fiqy Ainuzzaqy', 'ghfhgfhgfhg', '2017-11-25 11:10:41', '2017-11-23 11:10:41'),
(4, 'fahmi@fahmi.com', 'dalsjd', 'laskjdasd', '2017-12-03 03:04:13', '2017-12-03 03:04:13'),
(5, 'fahmifreez@yahoo.com', 'Fahmi Rizky', 'akshdasd', '2017-12-04 18:47:10', '2017-12-04 18:47:10'),
(6, 'test@test.com', 'test', 'sadasdasda', '2017-12-17 03:09:06', '2017-12-17 03:09:06'),
(7, 'test@yahoo.com', 'dasdasda', 'azczxczxczc', '2017-12-17 03:13:37', '2017-12-17 03:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `history_order_recorders`
--

CREATE TABLE `history_order_recorders` (
  `id` int(10) UNSIGNED NOT NULL,
  `waktu` date NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_order_recorders`
--

INSERT INTO `history_order_recorders` (`id`, `waktu`, `status`, `order_id`, `created_at`, `updated_at`) VALUES
(4, '2017-12-22', NULL, 95, '2017-12-05 10:10:50', '2017-12-05 10:10:50'),
(5, '2017-12-07', NULL, 97, '2017-12-05 18:18:17', '2017-12-05 18:18:17'),
(6, '2017-12-08', NULL, 99, '2017-12-06 08:57:42', '2017-12-06 08:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `history_time_studios`
--

CREATE TABLE `history_time_studios` (
  `id` int(10) UNSIGNED NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studio_id` int(11) UNSIGNED NOT NULL,
  `order_id` int(11) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_time_studios`
--

INSERT INTO `history_time_studios` (`id`, `waktu`, `status`, `studio_id`, `order_id`, `created_at`, `updated_at`) VALUES
(202, '2017-12-05 12:00:00', 'start', 3, 94, '2017-12-05 09:55:31', NULL),
(203, '2017-12-05 13:00:00', 'end', 3, 94, '2017-12-05 09:55:31', NULL),
(204, '2017-12-06 10:00:00', 'start', 2, 98, '2017-12-06 08:48:52', NULL),
(205, '2017-12-06 12:00:00', 'end', 2, 98, '2017-12-06 08:48:52', NULL),
(206, '2017-12-06 11:00:00', 'middle', 2, 98, '2017-12-06 08:48:52', NULL),
(207, '2017-12-07 09:00:00', 'start', 2, 100, '2017-12-07 06:19:40', NULL),
(208, '2017-12-07 11:00:00', 'end', 2, 100, '2017-12-07 06:19:40', NULL),
(209, '2017-12-07 10:00:00', 'middle', 2, 100, '2017-12-07 06:19:41', NULL),
(210, '2017-12-17 08:00:00', 'start', 2, 101, '2017-12-17 06:02:10', NULL),
(211, '2017-12-17 09:00:00', 'end', 2, 101, '2017-12-17 06:02:10', NULL),
(212, '2017-12-17 09:00:00', 'start', 2, 102, '2017-12-17 06:39:02', NULL),
(213, '2017-12-17 13:00:00', 'end', 2, 102, '2017-12-17 06:39:02', NULL),
(214, '2017-12-17 10:00:00', 'middle', 2, 102, '2017-12-17 06:39:02', NULL),
(215, '2017-12-17 11:00:00', 'middle', 2, 102, '2017-12-17 06:39:02', NULL),
(216, '2017-12-17 12:00:00', 'middle', 2, 102, '2017-12-17 06:39:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_recorders`
--

CREATE TABLE `jenis_recorders` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_recorder` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_recorder` int(11) NOT NULL,
  `batas_hari` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_recorders`
--

INSERT INTO `jenis_recorders` (`id`, `nama_recorder`, `deskripsi`, `harga_recorder`, `batas_hari`, `created_at`, `updated_at`) VALUES
(34, 'Premium', '<li><span class="plan-border"><strong>30GB</strong> Storage</span></li>                                        <li><span><strong>Recording</strong> Studio</span></li>                                        <li><span><strong>30</strong> Recordings</span></li>                                        <li><span><strong>90GB</strong> Internet Space</span></li>                                        <li><span><strong>HD</strong> Studio Sound</span></li>                                        <li><span class="plan-border"><strong>16/7</strong> Support</span></li>', 380000, 1, '2017-12-02 09:20:39', '2017-12-04 22:16:57'),
(35, 'Enterprise', '<li><span class="plan-border"><strong>30GB</strong> Storage</span></li>                                        <li><span><strong>Recording</strong> Studio</span></li>                                        <li><span><strong>30</strong> Recordings</span></li>                                        <li><span><strong>Unlimited</strong> Internet Space</span></li>                                        <li><span><strong>HD</strong> Studio Sound</span></li>                                        <li><span class="plan-border"><strong>16/7</strong> Support</span></li>', 480000, 1, '2017-12-02 09:20:40', '2017-12-04 21:37:00'),
(36, 'Advanced', '<li><span class="plan-border"><strong>50GB</strong> Storage</span></li>\r\n                                        <li><span><strong>Recording</strong> Studio</span></li>\r\n                                        <li><span><strong>50</strong> Recordings</span></li>\r\n                                        <li><span><strong>Unlimited</strong> Internet Space</span></li>\r\n                                        <li><span><strong>HD</strong> Studio Sound</span></li>\r\n                                        <li><span class="plan-border"><strong>16/7</strong> Support</span></li>', 550000, 1, '2017-12-02 09:20:40', '2017-12-02 09:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `jen_alats`
--

CREATE TABLE `jen_alats` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jen_alats`
--

INSERT INTO `jen_alats` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Gitar', NULL, NULL),
(2, 'Drum', NULL, NULL),
(3, 'Bass', NULL, NULL),
(4, 'Keyboard Piano', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kerusakan_studios`
--

CREATE TABLE `kerusakan_studios` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_pembayarans`
--

CREATE TABLE `konfirmasi_pembayarans` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `atas_nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metode` enum('Lunas','DP') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konfirmasi_pembayarans`
--

INSERT INTO `konfirmasi_pembayarans` (`id`, `order_id`, `member_id`, `atas_nama`, `metode`, `tanggal_pembayaran`, `deskripsi`, `jumlah`, `bukti_pembayaran`, `created_at`, `updated_at`) VALUES
(5, 94, 13, 'sogol', 'Lunas', '2017-12-05', 'dlaksjdalksdj', '2', '/upload/pembayaran/a73d718708670216e16cf4143b1b7a30.png', '2017-12-05 09:55:58', '2017-12-05 09:55:58'),
(6, 95, 13, 'alskdj', 'Lunas', '2017-12-05', 'laskdjasd', '3', '/upload/pembayaran/e575b8ee99d8b7fd0cd966fb5ec3ae42.png', '2017-12-05 10:11:08', '2017-12-05 10:11:08'),
(7, 97, 13, 'Fahmi', 'Lunas', '2017-12-06', 'woy', '13123123', '/upload/pembayaran/839cc859284b9d65ad2c174ef908eee1.jpeg', '2017-12-05 18:25:04', '2017-12-05 18:25:04'),
(8, 98, 19, 'Fiqy Ainuzzaqy', 'Lunas', '2017-12-06', 'thx', '100', '/upload/pembayaran/da6ec64d8a2702bf4aa6239592c143da.jpg', '2017-12-06 08:51:00', '2017-12-06 08:51:00'),
(9, 99, 19, 'Fiqy Ainuzzaqy', 'DP', '2017-12-06', 'dp dulu gan hehe', '200000', '/upload/pembayaran/d4bf357e17fd7b7858c35738c0f44c28.jpg', '2017-12-06 09:00:00', '2017-12-06 09:00:00'),
(10, 100, 19, 'Fiqy Ainuzzaqy', 'DP', '2017-12-07', 'dp bro', '100000', '/upload/pembayaran/8baf590bd2903f2e9374741ed60885d2.jpg', '2017-12-07 06:21:01', '2017-12-07 06:21:01'),
(11, 101, 26, 'Sosro', 'Lunas', '2017-12-17', 'sosor', '99999', '/upload/pembayaran/b7dbbcbd152aeab51fb97e3145930126.JPG', '2017-12-17 06:02:56', '2017-12-17 06:02:56'),
(12, 102, 19, 'Sosro', 'Lunas', '2017-12-17', 'unas', '2983748374', '/upload/pembayaran/fa343e1a85cca94cc4596a19437384e6.jpg', '2017-12-17 06:41:55', '2017-12-17 06:41:55');

-- --------------------------------------------------------

--
-- Table structure for table `list_time2s`
--

CREATE TABLE `list_time2s` (
  `id` int(10) UNSIGNED NOT NULL,
  `waktu` time NOT NULL,
  `waktu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `list_time2s`
--

INSERT INTO `list_time2s` (`id`, `waktu`, `waktu_id`, `created_at`, `updated_at`) VALUES
(1, '11:00:00', 1, '2017-11-28 03:54:01', '2017-11-28 03:54:01'),
(2, '12:00:00', 1, '2017-11-28 03:54:01', '2017-11-28 03:54:01'),
(3, '13:00:00', 1, '2017-11-28 03:54:01', '2017-11-28 03:54:01'),
(4, '14:00:00', 1, '2017-11-28 03:54:01', '2017-11-28 03:54:01'),
(5, '15:00:00', 1, '2017-11-28 03:54:01', '2017-11-28 03:54:01'),
(6, '16:00:00', 1, '2017-11-28 03:54:01', '2017-11-28 03:54:01'),
(7, '17:00:00', 1, '2017-11-28 03:54:01', '2017-11-28 03:54:01'),
(8, '18:00:00', 1, '2017-11-28 03:54:01', '2017-11-28 03:54:01'),
(9, '19:00:00', 1, '2017-11-28 03:54:01', '2017-11-28 03:54:01'),
(10, '20:00:00', 1, '2017-11-28 03:54:01', '2017-11-28 03:54:01'),
(11, '21:00:00', 1, '2017-11-28 03:54:01', '2017-11-28 03:54:01'),
(12, '22:00:00', 1, '2017-11-28 03:54:01', '2017-11-28 03:54:01'),
(13, '12:00:00', 2, NULL, NULL),
(14, '13:00:00', 2, NULL, NULL),
(15, '14:00:00', 2, NULL, NULL),
(16, '15:00:00', 2, NULL, NULL),
(17, '16:00:00', 2, NULL, NULL),
(18, '17:00:00', 2, NULL, NULL),
(19, '18:00:00', 2, NULL, NULL),
(20, '19:00:00', 2, NULL, NULL),
(21, '20:00:00', 2, NULL, NULL),
(22, '21:00:00', 2, NULL, NULL),
(23, '22:00:00', 2, NULL, NULL),
(24, '13:00:00', 3, NULL, NULL),
(25, '14:00:00', 3, NULL, NULL),
(26, '15:00:00', 3, NULL, NULL),
(27, '16:00:00', 3, NULL, NULL),
(28, '17:00:00', 3, NULL, NULL),
(29, '18:00:00', 3, NULL, NULL),
(30, '19:00:00', 3, NULL, NULL),
(31, '20:00:00', 3, NULL, NULL),
(32, '21:00:00', 3, NULL, NULL),
(33, '22:00:00', 3, NULL, NULL),
(34, '14:00:00', 4, NULL, NULL),
(35, '15:00:00', 4, NULL, NULL),
(36, '16:00:00', 4, NULL, NULL),
(37, '17:00:00', 4, NULL, NULL),
(38, '18:00:00', 4, NULL, NULL),
(39, '19:00:00', 4, NULL, NULL),
(40, '20:00:00', 4, NULL, NULL),
(41, '21:00:00', 4, NULL, NULL),
(42, '22:00:00', 4, NULL, NULL),
(43, '15:00:00', 5, NULL, NULL),
(44, '16:00:00', 5, NULL, NULL),
(45, '17:00:00', 5, NULL, NULL),
(46, '18:00:00', 5, NULL, NULL),
(47, '19:00:00', 5, NULL, NULL),
(48, '20:00:00', 5, NULL, NULL),
(49, '21:00:00', 5, NULL, NULL),
(50, '22:00:00', 5, NULL, NULL),
(51, '16:00:00', 6, NULL, NULL),
(52, '17:00:00', 6, NULL, NULL),
(53, '18:00:00', 6, NULL, NULL),
(54, '19:00:00', 6, NULL, NULL),
(55, '20:00:00', 6, NULL, NULL),
(56, '21:00:00', 6, NULL, NULL),
(57, '22:00:00', 6, NULL, NULL),
(58, '17:00:00', 7, NULL, NULL),
(59, '18:00:00', 7, NULL, NULL),
(60, '19:00:00', 7, NULL, NULL),
(61, '20:00:00', 7, NULL, NULL),
(62, '21:00:00', 7, NULL, NULL),
(63, '22:00:00', 7, NULL, NULL),
(64, '18:00:00', 8, NULL, NULL),
(65, '19:00:00', 8, NULL, NULL),
(66, '20:00:00', 8, NULL, NULL),
(67, '21:00:00', 8, NULL, NULL),
(68, '22:00:00', 8, NULL, NULL),
(69, '19:00:00', 9, NULL, NULL),
(70, '20:00:00', 9, NULL, NULL),
(71, '21:00:00', 9, NULL, NULL),
(72, '22:00:00', 9, NULL, NULL),
(73, '20:00:00', 10, NULL, NULL),
(74, '21:00:00', 10, NULL, NULL),
(75, '22:00:00', 10, NULL, NULL),
(76, '21:00:00', 11, NULL, NULL),
(77, '22:00:00', 11, NULL, NULL),
(78, '22:00:00', 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `list_times`
--

CREATE TABLE `list_times` (
  `id` int(10) UNSIGNED NOT NULL,
  `waktu` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `list_times`
--

INSERT INTO `list_times` (`id`, `waktu`, `created_at`, `updated_at`) VALUES
(1, '10:00:00', '2017-11-27 13:31:10', '2017-11-27 13:31:10'),
(2, '11:00:00', '2017-11-27 13:31:10', '2017-11-27 13:31:10'),
(3, '12:00:00', '2017-11-27 13:31:10', '2017-11-27 13:31:10'),
(4, '13:00:00', '2017-11-27 13:31:10', '2017-11-27 13:31:10'),
(5, '14:00:00', '2017-11-27 13:31:10', '2017-11-27 13:31:10'),
(6, '15:00:00', '2017-11-27 13:31:10', '2017-11-27 13:31:10'),
(7, '16:00:00', '2017-11-27 13:31:10', '2017-11-27 13:31:10'),
(8, '17:00:00', '2017-11-27 13:31:10', '2017-11-27 13:31:10'),
(9, '18:00:00', '2017-11-27 13:31:11', '2017-11-27 13:31:11'),
(10, '19:00:00', '2017-11-27 13:31:11', '2017-11-27 13:31:11'),
(11, '20:00:00', '2017-11-27 13:31:11', '2017-11-27 13:31:11'),
(12, '21:00:00', '2017-11-27 13:31:11', '2017-11-27 13:31:11'),
(13, '22:00:00', '2017-11-27 13:31:11', '2017-11-27 13:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_15_040716_create_studios_table', 1),
(4, '2017_11_15_043200_create_penguruses_table', 1),
(5, '2017_11_15_044836_create_orders_table', 1),
(6, '2017_11_15_050338_create_order_studios_table', 1),
(7, '2017_11_15_052138_create_jenis_recorders_table', 1),
(8, '2017_11_15_052300_create_order_recorders_table', 1),
(9, '2017_11_15_052352_create_kerusakan_studios_table', 1),
(10, '2017_11_15_052504_create_sliders_table', 1),
(11, '2017_11_15_052720_create_members_table', 1),
(12, '2017_11_15_052926_create_konfirmasi_pembayarans_table', 1),
(13, '2017_11_15_072026_create_jen_alats_table', 1),
(14, '2017_11_15_072339_create_new_ins_table', 1),
(15, '2017_11_23_173723_create_contacts_table', 2),
(16, '2017_11_27_202036_list_times_table', 3),
(17, '2017_11_27_203208_create_history_time_studios_table', 4),
(18, '2017_11_28_104119_create_list_time2s_table', 5),
(19, '2017_12_02_190551_create_history_order_recorders_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `new_ins`
--

CREATE TABLE `new_ins` (
  `id` int(10) UNSIGNED NOT NULL,
  `studio_id` int(10) UNSIGNED NOT NULL,
  `jenis_alat_id` int(10) UNSIGNED NOT NULL,
  `nama_inst` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_ins`
--

INSERT INTO `new_ins` (`id`, `studio_id`, `jenis_alat_id`, `nama_inst`, `gambar`, `created_at`, `updated_at`) VALUES
(6, 3, 1, 'DT-1000', '/instrument/guitars2.jpg', '2017-11-30 17:00:00', NULL),
(9, 2, 1, 'RJ-47', '/instrument/85bc436c4f32c360914a7d4bf2aa6687.png', '2017-12-05 15:54:32', '2017-12-05 16:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `pengurus_id` int(10) UNSIGNED DEFAULT NULL,
  `tgl_booking` timestamp NULL DEFAULT NULL,
  `tgl_exp` timestamp NULL DEFAULT NULL,
  `status_book` enum('Proses','DP','Gagal','Lunas','Salah','Pembayaran') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `pengurus_id`, `tgl_booking`, `tgl_exp`, `status_book`, `created_at`, `updated_at`) VALUES
(94, 13, NULL, '2017-12-05 09:55:31', '2017-12-05 10:25:31', 'DP', '2017-12-05 09:55:31', '2017-12-05 12:45:56'),
(95, 13, NULL, '2017-12-05 10:10:50', '2017-12-05 10:40:50', 'Lunas', '2017-12-05 10:10:50', '2017-12-05 12:45:04'),
(96, 19, NULL, '2017-12-05 12:13:57', '2017-12-05 12:43:57', 'Gagal', '2017-12-05 12:13:57', '2017-12-05 12:45:00'),
(97, 13, NULL, '2017-12-05 18:18:17', '2017-12-05 18:48:17', 'Lunas', '2017-12-05 18:18:17', '2017-12-05 18:25:50'),
(98, 19, NULL, '2017-12-06 08:48:52', '2017-12-06 09:18:52', 'Lunas', '2017-12-06 08:48:52', '2017-12-06 08:52:54'),
(99, 19, NULL, '2017-12-06 08:57:42', '2017-12-06 09:27:42', 'DP', '2017-12-06 08:57:42', '2017-12-06 09:00:59'),
(100, 19, NULL, '2017-12-07 06:19:40', '2017-12-07 06:49:40', 'DP', '2017-12-07 06:19:40', '2017-12-07 06:21:43'),
(101, 26, NULL, '2017-12-17 06:02:10', '2017-12-17 06:32:10', 'Proses', '2017-12-17 06:02:10', '2017-12-17 06:02:56'),
(102, 19, NULL, '2017-12-17 06:39:02', '2017-12-17 07:09:02', 'Proses', '2017-12-17 06:39:02', '2017-12-17 06:41:55');

-- --------------------------------------------------------

--
-- Table structure for table `order_recorders`
--

CREATE TABLE `order_recorders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `jenis_recorder_id` int(10) UNSIGNED NOT NULL,
  `awal` date NOT NULL,
  `batas` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_recorders`
--

INSERT INTO `order_recorders` (`id`, `order_id`, `jenis_recorder_id`, `awal`, `batas`, `created_at`, `updated_at`) VALUES
(4, 95, 34, '2017-12-22', NULL, '2017-12-05 10:10:50', '2017-12-05 10:10:50'),
(5, 97, 35, '2017-12-07', NULL, '2017-12-05 18:18:17', '2017-12-05 18:18:17'),
(6, 99, 35, '2017-12-08', NULL, '2017-12-06 08:57:42', '2017-12-06 08:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `order_studios`
--

CREATE TABLE `order_studios` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `studio_id` int(10) UNSIGNED NOT NULL,
  `waktu_mulai` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `waktu_habis` timestamp NULL DEFAULT NULL,
  `total_waktu` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_studios`
--

INSERT INTO `order_studios` (`id`, `order_id`, `studio_id`, `waktu_mulai`, `waktu_habis`, `total_waktu`, `deskripsi`, `harga`, `created_at`, `updated_at`) VALUES
(80, 94, 3, '2017-12-06 08:41:31', '2017-12-06 10:20:00', 1, 'sads', 90000, '2017-12-05 09:55:31', '2017-12-05 09:55:31'),
(81, 96, 3, '2017-12-07 08:42:27', '2017-12-07 13:00:00', 1, 'Kosong', 90000, '2017-12-05 12:13:57', '2017-12-05 12:13:57'),
(82, 94, 3, '2017-12-06 08:46:02', '2017-12-08 12:00:00', 1, 'sads', 90000, '2017-12-05 09:55:31', '2017-12-05 09:55:31'),
(84, 98, 2, '2017-12-06 10:00:00', '2017-12-06 12:00:00', 2, 'Kosong', 140000, '2017-12-06 08:48:52', '2017-12-06 08:48:52'),
(85, 100, 2, '2017-12-07 09:00:00', '2017-12-07 11:00:00', 2, 'Kosong', 140000, '2017-12-07 06:19:40', '2017-12-07 06:19:40'),
(86, 101, 2, '2017-12-17 08:00:00', '2017-12-17 09:00:00', 1, 'Kosong', 70000, '2017-12-17 06:02:10', '2017-12-17 06:02:10'),
(87, 102, 2, '2017-12-17 09:00:00', '2017-12-17 13:00:00', 4, 'Kosong', 280000, '2017-12-17 06:39:02', '2017-12-17 06:39:02');

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
('aa@yahoo.com', '$2y$10$.xDiviOutV.mno76yuz5bu1HLldH6HselD9ke5KpWxkVBcWHg26Ou', '2017-11-25 03:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `penguruses`
--

CREATE TABLE `penguruses` (
  `id_pengurus` int(10) UNSIGNED NOT NULL,
  `nama_pengurus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_pengurus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pengurus` enum('pegawai','owner') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penguruses`
--

INSERT INTO `penguruses` (`id_pengurus`, `nama_pengurus`, `email`, `password`, `no_telp`, `gambar_pengurus`, `status_pengurus`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Dummy', 'dummyadmin@dummy.com', '1234', '1231231', 'ddd.jpg', 'pegawai', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `gambar_slider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_providers`
--

CREATE TABLE `social_providers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_providers`
--

INSERT INTO `social_providers` (`id`, `user_id`, `provider_id`, `provider`, `created_at`, `updated_at`) VALUES
(1, 7, '1739671939376625', 'facebook', '2017-11-25 03:29:53', '2017-11-25 03:29:53'),
(2, 13, '1869304259777332', 'facebook', '2017-11-29 11:48:00', '2017-11-29 11:48:00'),
(3, 12, '114319997385023942061', 'google', '2017-12-04 22:38:55', '2017-12-04 22:38:55'),
(4, 19, '19623652', 'github', '2017-12-06 08:39:59', '2017-12-06 08:39:59');

-- --------------------------------------------------------

--
-- Table structure for table `studios`
--

CREATE TABLE `studios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_studio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_studio` int(11) NOT NULL,
  `gambar_studio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studios`
--

INSERT INTO `studios` (`id`, `nama_studio`, `harga_studio`, `gambar_studio`, `created_at`, `updated_at`) VALUES
(2, 'Studio 1', 70000, 'storage/studio/studio2.jpg', NULL, '2017-12-04 22:03:09'),
(3, 'Studio 2', 90000, 'storage/studio/studio2.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_band` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `no_telp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_user` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'avatar.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verifyToken` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nama_band`, `alamat`, `no_telp`, `email`, `password`, `gambar_user`, `remember_token`, `verifyToken`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Fiqy Ainuzzaqy', 'WhySoSerious?', 'Jl. Hikmat 50A Betro\r\nSedati', '08563094333', 'fiqy_a@fq.com', '$2y$10$Nu/BsgU.h7H0Vc6EBYGBguGiMPTiZavrTbYDGohEZgeBKxpr7oTY.', '8c5a76fa79d429d7b26ff6dc3329d9b2.jpg', '9CvfO2ev8A7RC6MBNWPGiiElfWn1X0ocO9tXfLTChaOUjcZbrDZmL0vFRyt0', '', 0, '2017-11-25 06:22:50', '2017-12-05 08:07:24', '2017-12-05 08:07:24'),
(2, 'Dummy', 'Dummy Band', 'Jl. Hikmat 50A Betro\r\nSedati', '08563094333', 'test@test.com', '$2y$10$Nu/BsgU.h7H0Vc6EBYGBguGiMPTiZavrTbYDGohEZgeBKxpr7oTY.', '56845.jpg', '1vEkLWKhYNG1l8cs6FlqifEsTwdhFoXkN3urg7lfzfsxeS3z1yxvo94VB4fN', '', 0, '2017-11-25 07:29:02', '2017-11-23 08:50:24', '0000-00-00 00:00:00'),
(4, 'Test', 'Test', 'Jl. Hikmat 50A Betro\r\nSedati', '08563094333', 'test@yahoo.com', '$2y$10$6.uYHTi5cg7tk3UBO.R5ye9ew/7zN5PQtComnj5PzyGE4iV8jX6py', NULL, 'cG2fmTwDSKciTbwVF812L194izGH2ledgmEd6FcTpTWoXcFYaYaQd4SrYwAS', 'pBTWJKPAJwqkSL5U3wlqyg09zLxXvuMusjwxfeIi', 0, '2017-11-25 02:08:14', '2017-11-25 02:08:14', '0000-00-00 00:00:00'),
(5, 'abc', 'abc', 'abc', '213231', 'abc@zz.com', '$2y$10$dbnIpuLa/WIQJKW9PWp33uNMsrfid3KxnscL71jtkBAudPfA3zd1O', 'aguk.jpg', 'kIYcMRG1TnKIgDpiieI2zWHkd2gAcQDL57lin6ZvpgTnwaoBDbPXkdpCUVPi', 'FqelkwSZDYjJH7S1ZClxKnInjtmP9TBOJtqk9tGH', 0, '2017-11-25 02:34:01', '2017-11-25 02:34:51', '0000-00-00 00:00:00'),
(6, 'qw', 'qw', 'qw', '123123213', 'qwe@qw.com', '$2y$10$lm0FPjRG5FFwd.7N3/y5a.pUhf4LkUXdEDbv7u5HagdTPzT46XPlC', 'A_Quick_TCP-IP_Primer.png', NULL, 'LV1Sv5D1ldcN95spZmP1XnKIJypUQTaZD9pyuVxw', 0, '2017-11-25 02:44:53', '2017-11-25 02:54:25', '0000-00-00 00:00:00'),
(7, 'Fiqy Ainuzzaqy', NULL, NULL, NULL, 'fiqy_a@yahoo.com', NULL, 'avatar.png', 'VqlHI8kZ6I64dzhwha6JYr06xF1nF0gWVlPRiqvEC3dMu5AtfusVe6WAkP4M', NULL, 0, '2017-11-25 03:29:53', '2017-12-05 07:53:25', '2017-12-05 07:53:25'),
(8, 'mmmm', 'mmmm', 'mmmm', '21312321', 'mm@mm.com', '$2y$10$.kYeja8a5YfOV7qzLiajLO6ACoDP40IhGPADBs5FJz/f3mjWiq27u', 'avatar.png', 'cI5psgCsOhaa8l37CgxaZXFbQEJvAtMeCeHyk7L4DmiRYdYmEyvKQir2SpMr', '9dcvHt9elmXykZZqmLTKTTLCAqVWQ3Z09LzsHU4o', 0, '2017-11-25 03:36:58', '2017-12-05 08:07:44', '2017-12-05 08:07:44'),
(9, 'aaaaaa', 'aaaa', 'aaaaaa', '08563094333', 'aa@yahoo.com', '$2y$10$yWbSzJhh.q13YS14PYUIcOfqw1em10Ibq2tnhCTraTCXMjx3agCxO', 'avatar.png', NULL, 'SiiEDVUG1FrMoFgWm0TFsb6mBfaSQ2TxPFaJCoJ5', 0, '2017-11-25 03:45:54', '2017-12-05 08:15:06', '2017-12-05 08:15:06'),
(10, 'Rabbit Media', 'Rabbits', 'Jl. Hikmat 50A Betro\r\nSedati', '08563094333', 'rm.rabbitmedia@gmail.com', '$2y$10$rQTO5VKPA2n0UGxvTJwNp.CQhWzBLYxoQCRW0fnKVWgfX4nREomkO', 'avatar.png', NULL, 'u88w13A97FB19ncrSUaQgx4gQ4TPFwuUaXjJsRAm', 0, '2017-11-25 03:55:02', '2017-11-25 03:55:02', NULL),
(11, 'fqfqfqfqf', 'fqfqfqfqfq', 'fqfqfqfq', '0239482903489', 'fafa@fqfq.com', '$2y$10$8NfpnFPScLe1MRsalPmqo.BG5HnPAmf76KgCABlhh64DRBXr/wACy', 'avatar.png', NULL, 'FnT1hGg5MJq4l6DxfNNOhthphoUataZiFMjmSj5O', 0, '2017-11-26 03:56:20', '2017-11-26 03:56:20', NULL),
(12, 'fahmi r', 'rahasai', 'rahasia', '0813918237876', 'vreallyla@gmail.com', '$2y$10$3Oawb68C5es3HdyAlaMoiugwOxkln1rs2C/Dyvi2N6d4K2tkGZqqW', 'avatar.png', 'wRXRzha36lyYSaXvkzeMrvJWZsYQL8emK2SHxq8YPGsDX8OairDlQbhmaFK6', 'opKa61pkNPjCKjMzcgcOfr0dBjXGJmloEzjkJuJB', 0, '2017-11-29 11:44:43', '2017-11-29 11:44:43', NULL),
(13, 'Fahmi Rizky', NULL, NULL, NULL, 'fahmifreez@yahoo.com', NULL, 'pp.jpg', NULL, NULL, 0, '2017-11-29 11:47:59', '2017-11-29 11:47:59', NULL),
(14, 'fahmi', 'aklsjd', 'alkjsdlakj', '02934', 'lakjdladkj@ladj.com', '$2y$10$oya7U4D0pcZhEAf2U2c9du5bKONzsGwcL/0qnxRde4/FFJH3idYwm', 'avatar.png', NULL, 'CvHj9ccBmrU5uxAcCTs9dBxtYfvO0EDN6B5tHHwn', 0, '2017-12-04 22:45:38', '2017-12-04 22:45:38', NULL),
(15, 'sogol', 'alskdjasklj', 'dlakjsdlakj', '230498203948', 'sogol@subroto.com', '$2y$10$oya7U4D0pcZhEAf2U2c9du5bKONzsGwcL/0qnxRde4/FFJH3idYwm', 'avatar.png', NULL, 'Zb9QD4jkn3nbaSeaXFa9QRtKm97NB7QMONWCoY4S', 0, '2017-12-05 05:56:29', '2017-12-05 05:56:29', NULL),
(16, 'ilham', 'ilham', 'sadas', '2131231', 'ilham@yahoo.com', '$2y$10$VOMrPsO7PZ.76b.WguG7ZeLfolgmWdFN8Uh2R2XJFZep4YprFiJN.', 'avatar.png', NULL, 'SiXmgR5HFdV9p3aVPW0yGLQUqci7KWwtXCx8ONfV', 0, '2017-12-05 17:07:16', '2017-12-05 17:07:16', NULL),
(17, 'asdasd', 'zxcxzc', 'sadasd', '123123', 'aaa@aaa.com', '$2y$10$TeoPWuyygijkFf2Ah6Ae0.X9/9YTdvpK5Jx8UmFuBz9mhqV2n6Z.O', 'avatar.png', NULL, '4aKDCdCCyvVmpSvqZMYf3JfKJPhNqMiTk9UbBTEP', 0, '2017-12-05 17:22:26', '2017-12-05 17:22:26', NULL),
(18, 'Rabbit Media', 'Rabbits', 'Jl. Hikmat 50A Betro\r\nSedati', '08563094333', 'rabbit@rabbit.com', '$2y$10$AWbwgt2iUZgAac8RmW4TZe2v7auiYG/CIjN17QhjEcsmfvFwssw0u', 'avatar.png', NULL, 'UIbPzM1fxtXoS5yoXxhpcq9DRS5CA7Ea91YuutQX', 0, '2017-12-06 08:30:38', '2017-12-06 08:30:38', NULL),
(19, 'Fiqy Ainuzzaqy', NULL, NULL, NULL, 'fiqy_a@icloud.com', NULL, 'avatar.png', NULL, NULL, 0, '2017-12-06 08:39:59', '2017-12-06 08:39:59', NULL),
(26, 'Dwi Sosro', 'Sosro Band', 'Pabean', '08563094333', 'sosro@sosro.com', '$2y$10$lZwwpTtRN7Kd/fG16MTF4.j4nat9LcyYg5uZD6xngNq0rZBuwUiGi', 'avatar.png', '0jaJOzYTbuoBWZREdFkYkXSn70yuI37ciQumwLWIawBK3yscTsWJhBt7UaO9', NULL, 1, '2017-12-17 05:22:00', '2017-12-17 05:22:08', NULL);

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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_order_recorders`
--
ALTER TABLE `history_order_recorders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `history_time_studios`
--
ALTER TABLE `history_time_studios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studio_id` (`studio_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `jenis_recorders`
--
ALTER TABLE `jenis_recorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jen_alats`
--
ALTER TABLE `jen_alats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kerusakan_studios`
--
ALTER TABLE `kerusakan_studios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfirmasi_pembayarans`
--
ALTER TABLE `konfirmasi_pembayarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `konfirmasi_pembayarans_order_id_foreign` (`order_id`),
  ADD KEY `konfirmasi_pembayarans_member_id_foreign` (`member_id`);

--
-- Indexes for table `list_time2s`
--
ALTER TABLE `list_time2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_times`
--
ALTER TABLE `list_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_ins`
--
ALTER TABLE `new_ins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `new_ins_studio_id_foreign` (`studio_id`),
  ADD KEY `new_ins_jenis_alat_id_foreign` (`jenis_alat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_pengurus_id_foreign` (`pengurus_id`);

--
-- Indexes for table `order_recorders`
--
ALTER TABLE `order_recorders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_recorders_order_id_foreign` (`order_id`),
  ADD KEY `order_recorders_jenis_recorder_id_foreign` (`jenis_recorder_id`);

--
-- Indexes for table `order_studios`
--
ALTER TABLE `order_studios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_studios_order_id_foreign` (`order_id`),
  ADD KEY `order_studios_studio_id_foreign` (`studio_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penguruses`
--
ALTER TABLE `penguruses`
  ADD PRIMARY KEY (`id_pengurus`),
  ADD UNIQUE KEY `penguruses_email_unique` (`email`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_providers`
--
ALTER TABLE `social_providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studios`
--
ALTER TABLE `studios`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `history_order_recorders`
--
ALTER TABLE `history_order_recorders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `history_time_studios`
--
ALTER TABLE `history_time_studios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;
--
-- AUTO_INCREMENT for table `jenis_recorders`
--
ALTER TABLE `jenis_recorders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `jen_alats`
--
ALTER TABLE `jen_alats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kerusakan_studios`
--
ALTER TABLE `kerusakan_studios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `konfirmasi_pembayarans`
--
ALTER TABLE `konfirmasi_pembayarans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `list_time2s`
--
ALTER TABLE `list_time2s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `list_times`
--
ALTER TABLE `list_times`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `new_ins`
--
ALTER TABLE `new_ins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `order_recorders`
--
ALTER TABLE `order_recorders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `order_studios`
--
ALTER TABLE `order_studios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `penguruses`
--
ALTER TABLE `penguruses`
  MODIFY `id_pengurus` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `social_providers`
--
ALTER TABLE `social_providers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `studios`
--
ALTER TABLE `studios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `history_order_recorders`
--
ALTER TABLE `history_order_recorders`
  ADD CONSTRAINT `history_order_recorders_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `history_time_studios`
--
ALTER TABLE `history_time_studios`
  ADD CONSTRAINT `history_time_studios_ibfk_1` FOREIGN KEY (`studio_id`) REFERENCES `studios` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `history_time_studios_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `konfirmasi_pembayarans`
--
ALTER TABLE `konfirmasi_pembayarans`
  ADD CONSTRAINT `konfirmasi_pembayarans_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `konfirmasi_pembayarans_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `new_ins`
--
ALTER TABLE `new_ins`
  ADD CONSTRAINT `new_ins_jenis_alat_id_foreign` FOREIGN KEY (`jenis_alat_id`) REFERENCES `jen_alats` (`id`),
  ADD CONSTRAINT `new_ins_studio_id_foreign` FOREIGN KEY (`studio_id`) REFERENCES `studios` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_pengurus_id_foreign` FOREIGN KEY (`pengurus_id`) REFERENCES `penguruses` (`id_pengurus`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_recorders`
--
ALTER TABLE `order_recorders`
  ADD CONSTRAINT `order_recorders_jenis_recorder_id_foreign` FOREIGN KEY (`jenis_recorder_id`) REFERENCES `jenis_recorders` (`id`),
  ADD CONSTRAINT `order_recorders_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `order_studios`
--
ALTER TABLE `order_studios`
  ADD CONSTRAINT `order_studios_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_studios_studio_id_foreign` FOREIGN KEY (`studio_id`) REFERENCES `studios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
