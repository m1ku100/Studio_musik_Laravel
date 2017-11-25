-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2017 at 12:00 PM
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
(1, 'fq.jpg', 'Fiqy Ainuzzaqy', 'Super Admin', 'Jl. Hikmat 50A Betro, Sedati, Sidoarjo', 'D3 Manajemen Informatika, Universitas Negeri Surabaya', 'PHP, Laravel, HTML, JavaScript', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.', 'rm.rabbitmedia@gmail.com', '$2y$10$5jMDHcmLXqKBFezNTlHme.EptWa5KzMm3a2ru0WqSpVJi5zIpqRaO', 'cKGl96G6uc2YeXaRwvZ8NTy55NC6YdbjXSXc7JGQ6ENLXOvR1tiIN3lj7vhZ', '2017-05-11 08:12:42', '2017-05-27 02:42:44', NULL),
(2, 'adi.jpg', 'Adi Prasetiyo', 'Ux Designer', 'Jalan Raya Juanda, Sidoarjo', 'D3 Manajemen Informatika - Universitas Negeri Surabaya', 'HTML, CSS, JS', 'Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet', 'adi@yahoo.com', '$2y$10$0b7rZUm4rQuALssoPFhv2OHpqD7BJatqP92M9I6i/rVx8vZtvvENy', 'JtGqt9g14fE02ZPYtseLOFjO8I1eDOoMbQXdht5Kg6iN7dC2mFzzIpdx3MN3', '2017-05-11 08:16:25', '2017-05-26 11:09:32', NULL),
(3, 'aguk.jpg', 'M Aguk Nur Anggraini', 'Editor', 'Bangil, Pasuruan', 'D3 Manajemen Informatika, Universitas Negeri Surabaya', 'HTML', 'lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet', 'agukadmin@yahoo.com', '$2y$10$p3.PObL64KaKlbnfNGzbYuwH6CtxECIjSoqm3J5zwdJprE5zri1wu', 'bv4TQNGDP8kCbqSRzaf1FnNjM4gZHqs8bmaaMGaj3u4XeE5AJkIkDpxRB6I2', '2017-05-12 02:54:24', '2017-05-31 23:54:57', NULL),
(9, NULL, 'Rangga', 'Editor', NULL, NULL, NULL, NULL, 'rangga@yahoo.com', '$2y$10$puPC0K4I06hYt2cH5CYkXef4DJQGJDnXcRfb27EtwnaO8NfawGjAO', NULL, '2017-05-25 17:07:17', '2017-05-25 17:07:26', '2017-05-25 17:07:26'),
(10, NULL, 'Aguk', 'Editor', NULL, NULL, NULL, NULL, 'aguk@aguk.com', '$2y$10$94g.yPj/QNrlqshFyRoQ2.dYd3mM3GDxwT/e7wGnvgp/2u6nZcbeO', 'qMuzU81zzH4V5YW0uNrkopsgWp0q9yNCxOcNx8GC3SOcUrmVLb91FiDJRmLj', '2017-05-25 21:03:25', '2017-05-25 21:07:42', NULL),
(11, NULL, 'test', 'test', NULL, NULL, NULL, NULL, 'test@test.com', '$2y$10$bIXaHINudlaYe8wK/CyzUem3gkRQceLhkBaD.uYs8eY1BgJXxNyMO', NULL, '2017-05-25 21:40:16', '2017-05-25 21:40:16', NULL),
(12, NULL, 'rezky', 'Editor', NULL, NULL, NULL, NULL, 'rezky@rezky.com', '$2y$10$SS1ZIxZ9dJ81k.Ha0OW0y.Y8KUVyUkTrwTdOSgqMzfRG2qsrnxO1y', '19P7PTJMnMLUXwWKDsL1355rSUOoUdqlaJBaGBMQrJ2EYHflNngAE1h8jHHc', '2017-07-29 21:14:01', '2017-07-29 21:16:14', '2017-07-29 21:16:14');

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
(3, 'fiqy_a@yahoo.com', 'Fiqy Ainuzzaqy', 'ghfhgfhgfhg', '2017-11-25 11:10:41', '2017-11-23 11:10:41');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_recorders`
--

CREATE TABLE `jenis_recorders` (
  `id_jenis_recorder` int(10) UNSIGNED NOT NULL,
  `nama_recorder` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_recorder` int(11) NOT NULL,
  `batas_hari` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jen_alats`
--

CREATE TABLE `jen_alats` (
  `id_jenis_alat` int(10) UNSIGNED NOT NULL,
  `Status` enum('baru','lama') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `id_konfimasi` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `atas_nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `bukti_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(15, '2017_11_23_173723_create_contacts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `new_ins`
--

CREATE TABLE `new_ins` (
  `id_inst` int(10) UNSIGNED NOT NULL,
  `studio_id` int(10) UNSIGNED NOT NULL,
  `jenis_alat_id` int(10) UNSIGNED NOT NULL,
  `nama_inst` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `pengurus_id` int(10) UNSIGNED NOT NULL,
  `tgl_booking` date NOT NULL,
  `tgl_exp` date NOT NULL,
  `status_book` enum('Lunas','DP','Baru') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `user_id`, `pengurus_id`, `tgl_booking`, `tgl_exp`, `status_book`, `created_at`, `updated_at`) VALUES
(4, 2, 1, '2017-11-01', '2017-11-02', 'DP', '2017-11-24 17:00:00', '2017-11-01 03:00:00'),
(5, 2, 1, '2017-11-04', '2017-11-07', 'Lunas', '2017-11-24 17:00:00', '2017-11-05 03:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_recorders`
--

CREATE TABLE `order_recorders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `jenis_recorder_id` int(10) UNSIGNED NOT NULL,
  `awal` date NOT NULL,
  `batas` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_studios`
--

CREATE TABLE `order_studios` (
  `id_order_detail` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `studio_id` int(10) UNSIGNED NOT NULL,
  `jam_order` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 7, '1739671939376625', 'facebook', '2017-11-25 03:29:53', '2017-11-25 03:29:53');

-- --------------------------------------------------------

--
-- Table structure for table `studios`
--

CREATE TABLE `studios` (
  `id_studio` int(10) UNSIGNED NOT NULL,
  `nama_studio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_studio` int(11) NOT NULL,
  `gambar_studio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `verifyToken` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nama_band`, `alamat`, `no_telp`, `email`, `password`, `gambar_user`, `remember_token`, `verifyToken`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Fiqy Ainuzzaqy', 'WhySoSerious?', 'Jl. Hikmat 50A Betro\r\nSedati', '08563094333', 'fiqy_a@fq.com', '$2y$10$ozgAsubc.GL.rqM0wQ8Huea3G3HI0fV2L9Eds9r7ti3KzSIxV69KK', '8c5a76fa79d429d7b26ff6dc3329d9b2.jpg', '9CvfO2ev8A7RC6MBNWPGiiElfWn1X0ocO9tXfLTChaOUjcZbrDZmL0vFRyt0', '', 0, '2017-11-25 06:22:50', '2017-11-25 02:20:57', '0000-00-00 00:00:00'),
(2, 'Dummy', 'Dummy Band', 'Jl. Hikmat 50A Betro\r\nSedati', '08563094333', 'test@test.com', '$2y$10$gdE5XOZSOG1NzWYFht8HXuMFAw/sHuiNhpfKPRWxnibDfFq2UqPw6', '56845.jpg', '1vEkLWKhYNG1l8cs6FlqifEsTwdhFoXkN3urg7lfzfsxeS3z1yxvo94VB4fN', '', 0, '2017-11-25 07:29:02', '2017-11-23 08:50:24', '0000-00-00 00:00:00'),
(4, 'Test', 'Test', 'Jl. Hikmat 50A Betro\r\nSedati', '08563094333', 'test@yahoo.com', '$2y$10$6.uYHTi5cg7tk3UBO.R5ye9ew/7zN5PQtComnj5PzyGE4iV8jX6py', NULL, 'cG2fmTwDSKciTbwVF812L194izGH2ledgmEd6FcTpTWoXcFYaYaQd4SrYwAS', 'pBTWJKPAJwqkSL5U3wlqyg09zLxXvuMusjwxfeIi', 0, '2017-11-25 02:08:14', '2017-11-25 02:08:14', '0000-00-00 00:00:00'),
(5, 'abc', 'abc', 'abc', '213231', 'abc@zz.com', '$2y$10$dbnIpuLa/WIQJKW9PWp33uNMsrfid3KxnscL71jtkBAudPfA3zd1O', 'aguk.jpg', 'kIYcMRG1TnKIgDpiieI2zWHkd2gAcQDL57lin6ZvpgTnwaoBDbPXkdpCUVPi', 'FqelkwSZDYjJH7S1ZClxKnInjtmP9TBOJtqk9tGH', 0, '2017-11-25 02:34:01', '2017-11-25 02:34:51', '0000-00-00 00:00:00'),
(6, 'qw', 'qw', 'qw', '123123213', 'qwe@qw.com', '$2y$10$lm0FPjRG5FFwd.7N3/y5a.pUhf4LkUXdEDbv7u5HagdTPzT46XPlC', 'A_Quick_TCP-IP_Primer.png', NULL, 'LV1Sv5D1ldcN95spZmP1XnKIJypUQTaZD9pyuVxw', 0, '2017-11-25 02:44:53', '2017-11-25 02:54:25', '0000-00-00 00:00:00'),
(7, 'Fiqy Ainuzzaqy', NULL, NULL, NULL, 'fiqy_a@yahoo.com', NULL, 'avatar.png', 'VqlHI8kZ6I64dzhwha6JYr06xF1nF0gWVlPRiqvEC3dMu5AtfusVe6WAkP4M', NULL, 0, '2017-11-25 03:29:53', '2017-11-25 03:29:53', NULL),
(8, 'mmmm', 'mmmm', 'mmmm', '21312321', 'mm@mm.com', '$2y$10$.kYeja8a5YfOV7qzLiajLO6ACoDP40IhGPADBs5FJz/f3mjWiq27u', 'avatar.png', 'cI5psgCsOhaa8l37CgxaZXFbQEJvAtMeCeHyk7L4DmiRYdYmEyvKQir2SpMr', '9dcvHt9elmXykZZqmLTKTTLCAqVWQ3Z09LzsHU4o', 0, '2017-11-25 03:36:58', '2017-11-25 03:36:58', NULL),
(9, 'aaaaaa', 'aaaa', 'aaaaaa', '08563094333', 'aa@yahoo.com', '$2y$10$yWbSzJhh.q13YS14PYUIcOfqw1em10Ibq2tnhCTraTCXMjx3agCxO', 'avatar.png', NULL, 'SiiEDVUG1FrMoFgWm0TFsb6mBfaSQ2TxPFaJCoJ5', 0, '2017-11-25 03:45:54', '2017-11-25 03:45:54', NULL),
(10, 'Rabbit Media', 'Rabbits', 'Jl. Hikmat 50A Betro\r\nSedati', '08563094333', 'rm.rabbitmedia@gmail.com', '$2y$10$rQTO5VKPA2n0UGxvTJwNp.CQhWzBLYxoQCRW0fnKVWgfX4nREomkO', 'avatar.png', NULL, 'u88w13A97FB19ncrSUaQgx4gQ4TPFwuUaXjJsRAm', 0, '2017-11-25 03:55:02', '2017-11-25 03:55:02', NULL);

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
-- Indexes for table `jenis_recorders`
--
ALTER TABLE `jenis_recorders`
  ADD PRIMARY KEY (`id_jenis_recorder`);

--
-- Indexes for table `jen_alats`
--
ALTER TABLE `jen_alats`
  ADD PRIMARY KEY (`id_jenis_alat`);

--
-- Indexes for table `kerusakan_studios`
--
ALTER TABLE `kerusakan_studios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfirmasi_pembayarans`
--
ALTER TABLE `konfirmasi_pembayarans`
  ADD PRIMARY KEY (`id_konfimasi`),
  ADD KEY `konfirmasi_pembayarans_order_id_foreign` (`order_id`),
  ADD KEY `konfirmasi_pembayarans_member_id_foreign` (`member_id`);

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
  ADD PRIMARY KEY (`id_inst`),
  ADD KEY `new_ins_studio_id_foreign` (`studio_id`),
  ADD KEY `new_ins_jenis_alat_id_foreign` (`jenis_alat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
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
  ADD PRIMARY KEY (`id_order_detail`),
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
  ADD PRIMARY KEY (`id_studio`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jenis_recorders`
--
ALTER TABLE `jenis_recorders`
  MODIFY `id_jenis_recorder` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jen_alats`
--
ALTER TABLE `jen_alats`
  MODIFY `id_jenis_alat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kerusakan_studios`
--
ALTER TABLE `kerusakan_studios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `konfirmasi_pembayarans`
--
ALTER TABLE `konfirmasi_pembayarans`
  MODIFY `id_konfimasi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `new_ins`
--
ALTER TABLE `new_ins`
  MODIFY `id_inst` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `order_recorders`
--
ALTER TABLE `order_recorders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_studios`
--
ALTER TABLE `order_studios`
  MODIFY `id_order_detail` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `studios`
--
ALTER TABLE `studios`
  MODIFY `id_studio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `konfirmasi_pembayarans`
--
ALTER TABLE `konfirmasi_pembayarans`
  ADD CONSTRAINT `konfirmasi_pembayarans_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `konfirmasi_pembayarans_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id_order`);

--
-- Constraints for table `new_ins`
--
ALTER TABLE `new_ins`
  ADD CONSTRAINT `new_ins_jenis_alat_id_foreign` FOREIGN KEY (`jenis_alat_id`) REFERENCES `jen_alats` (`id_jenis_alat`),
  ADD CONSTRAINT `new_ins_studio_id_foreign` FOREIGN KEY (`studio_id`) REFERENCES `studios` (`id_studio`);

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
  ADD CONSTRAINT `order_recorders_jenis_recorder_id_foreign` FOREIGN KEY (`jenis_recorder_id`) REFERENCES `jenis_recorders` (`id_jenis_recorder`),
  ADD CONSTRAINT `order_recorders_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id_order`);

--
-- Constraints for table `order_studios`
--
ALTER TABLE `order_studios`
  ADD CONSTRAINT `order_studios_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id_order`),
  ADD CONSTRAINT `order_studios_studio_id_foreign` FOREIGN KEY (`studio_id`) REFERENCES `studios` (`id_studio`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
