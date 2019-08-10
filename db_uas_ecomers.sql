-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2019 at 11:22 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas_ecomers`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `deskripsi`, `kategori_id`, `harga`, `stok`, `gambar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'Kemeja Coklat', 'Kemeja coklat keren dengan balutan bahan yang berkualitas , nyaman dan keren. pas banget buat dipake di hari spesial mu !!', '2', 85000, 30, 'Kemeja Coklat-1565316351.jpg', '2019-08-08 19:05:51', '2019-08-08 19:05:51', NULL),
(8, 'Kemeja Abu-abu', 'Kemeja abu-abu keren dengan balutan bahan yang berkualitas , nyaman dan keren. pas banget buat dipake di hari spesial mu !!', '2', 84500, 46, 'Kemeja Abu-abu-1565316767.png', '2019-08-08 19:12:47', '2019-08-08 19:12:47', NULL),
(9, 'kemeja pantai', 'Kemeja pantai keren dengan balutan bahan yang berkualitas , nyaman dan keren. pas banget buat dipake di hari spesial mu !!', '2', 90000, 26, 'kemeja pantai-1565316861.png', '2019-08-08 19:14:21', '2019-08-08 19:14:21', NULL),
(10, 'Jam Tangan Rolex', 'Jam tangan rolex KW SUPER koleksi premium dari Coza Store.. Buruan jangan sampai kehabisan stok nya :)', '1,4', 250000, 21, 'Jam Tangan Rolex-1565317324.jpg', '2019-08-08 19:22:04', '2019-08-08 20:12:53', NULL),
(11, 'Jam Tangan Rolex Hitam', 'Jam tangan rolex KW SUPER koleksi premium dari Coza Store.. Buruan beli jangan sampai kehabisan stok nya :)', '2,4', 260000, 20, 'Jam Tangan Rolex Hitam-1565317457.jpg', '2019-08-08 19:24:17', '2019-08-08 20:15:20', NULL),
(12, 'Topi Omaiewa mo sindeiru', 'Topi bekas dipake sasuke.  koleksi premium dari Coza Store.. Buruan jangan sampai kehabisan stok nya :)', '2,4', 74998, 60, 'Topi Omaiewa mo sindeiru-1565317609.jpg', '2019-08-08 19:26:49', '2019-08-08 20:10:20', NULL),
(13, 'Kaca mata hitam', 'kacamata hitam koleksi premium dari Coza Store.. Buruan beli jangan sampai kehabisan stok nya :)', '1,2,4', 25000, 15, 'Kaca mata hitam-1565317704.jpg', '2019-08-08 19:28:24', '2019-08-08 20:07:22', NULL),
(14, 'Baju kondangan', 'Baju kondangan ke acara pernikahan presiden.. dipake ke acara presiden aja cocok apalagi datang ke acara rakyat jelata :)', '1', 50000, 18, 'Baju kondangan-1565319451.jpg', '2019-08-08 19:57:31', '2019-08-08 19:57:31', NULL),
(15, 'Baju kondangan santuy', 'Baju kondangan santuy ke acara pernikahan presiden.. dipake ke acara presiden aja cocok apalagi datang ke acara rakyat jelata :)', '1', 65000, 15, 'Baju kondangan santuy-1565319564.jpg', '2019-08-08 19:59:24', '2019-08-08 19:59:24', NULL),
(16, 'Baju kondangan rada santuy', 'Baju kondangan rada santuy ke acara pernikahan presiden.. dipake ke acara presiden aja cocok apalagi datang ke acara rakyat jelata :)', '1', 75000, 19, 'Baju kondangan rada santuy-1565319656.jpg', '2019-08-08 20:00:56', '2019-08-08 20:00:56', NULL),
(17, 'Jaket kondangan', 'Jaket kondangan santuy ke acara pernikahan presiden.. dipake ke acara presiden aja cocok apalagi datang ke acara rakyat jelata :)', '1', 95000, 36, 'Jaket kondangan-1565320796.jpg', '2019-08-08 20:19:56', '2019-08-08 20:19:56', NULL),
(18, 'makanan enak', 'makanan enak', '7', 700, 80, 'makanan enak-1565356053.png', '2019-08-09 06:07:34', '2019-08-09 06:07:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `barang_id`, `qty`, `created_at`, `updated_at`) VALUES
(40, 14, 9, 2, '2019-08-09 05:47:11', '2019-08-09 05:47:11'),
(41, 14, 12, 2, '2019-08-09 05:47:49', '2019-08-09 05:47:49'),
(42, 14, 11, 1, '2019-08-09 05:48:05', '2019-08-09 05:48:05');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_pos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `user_id`, `nama`, `email`, `alamat`, `kode_pos`, `no_telp`) VALUES
(6, '12', 'perjit', 'perjit001@gmail.com', 'jl dipatukur', '40235', '089666288087'),
(7, '11', 'tegarsubkhan', 'tegarsubkhan@gmail.com', 'bandung , jl dipatiukur no 138', '502334', '0897564341'),
(8, '13', 'revaldi', 'revaldi@outlook.co.id', 'gfddjvvfhh', '123456', '123212321232'),
(9, '15', 'pelanggan_setia', 'pelanggan_setia@gmail.com', 'Jl kenangan', '65432', '08512345678'),
(10, '16', 'pelangga_setia', 'pelangga_setia@gmail.com', 'Jl Kenangan no 212', '54321', '08512345671');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `transaksi_id`, `barang_id`, `qty`) VALUES
(24, 21, 17, 1),
(25, 21, 9, 1),
(26, 21, 10, 2),
(27, 21, 12, 2),
(28, 22, 13, 1),
(29, 22, 12, 0),
(30, 23, 14, 2),
(31, 23, 17, 3),
(32, 24, 8, 1),
(33, 24, 11, 1),
(34, 24, 16, 1),
(35, 25, 12, 1),
(36, 25, 13, 1),
(37, 26, 7, 1),
(38, 26, 12, 1),
(39, 27, 12, 61),
(40, 28, 9, 3),
(41, 28, 12, 2),
(42, 29, 9, 2),
(43, 29, 12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `deleted_at`) VALUES
(1, 'Wanita', NULL),
(2, 'Pria', NULL),
(4, 'Aksesoris', NULL),
(7, 'makanan', NULL);

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
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2019_08_02_074841_create_barang_table', 1),
(4, '2019_08_02_074952_create_transaksi_table', 1),
(5, '2019_08_02_075722_create_detail_transaksi_table', 1),
(6, '2019_08_02_075939_create_kategori_table', 1),
(7, '2019_08_02_092920_alter_table_barang', 2),
(8, '2019_08_02_093106_alter_table_transaksi', 3),
(9, '2019_08_02_114637_alter_table_barang', 4),
(10, '2019_08_02_123913_alter_table_user', 5),
(12, '2019_08_03_010906_create_table_cart', 6),
(13, '2019_08_03_045315_create_delivery', 7),
(14, '2019_08_03_054528_alter_table_delivery', 8),
(15, '2019_08_03_060435_alter_table_transaksi', 9),
(16, '2019_08_05_164522_alter_table_barang', 10),
(17, '2019_08_05_213723_alter_table_kategori', 11);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `delivery_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `total_harga` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `user_id`, `delivery_id`, `status`, `total_harga`, `created_at`, `updated_at`) VALUES
(29, 16, 10, 1, 404994, '2019-08-09 06:05:17', '2019-08-09 06:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', 1, NULL, '2019-08-02 08:16:39', '2019-08-05 15:45:05', NULL),
(11, 'tegarsubkhan', 'tegarsubkhan@gmail.com', '12345678', 2, NULL, '2019-08-08 20:25:58', '2019-08-08 20:25:58', NULL),
(12, 'perjit', 'perjit001@gmail.com', '12345678', 2, NULL, '2019-08-08 20:29:17', '2019-08-08 20:29:17', NULL),
(13, 'revaldi', 'revaldi@outlook.co.id', '12345678', 2, NULL, '2019-08-09 00:13:21', '2019-08-09 00:13:21', NULL),
(14, 'pelanggan', 'pelanggan@gmail.com', '12345678', 2, NULL, '2019-08-09 05:46:56', '2019-08-09 05:46:56', NULL),
(16, 'pelangga_setia', 'pelangga_setia@gmail.com', '12345678', 2, NULL, '2019-08-09 06:03:53', '2019-08-09 06:03:53', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
