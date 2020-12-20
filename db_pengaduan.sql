-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 08:09 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pengaduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dinas Pariwisata', NULL, NULL, NULL),
(2, 'Dinas Kominfo', NULL, NULL, NULL),
(3, 'Dinas Kesehatan', NULL, NULL, NULL),
(4, 'Pemkot Tebing Tinggi', NULL, NULL, NULL),
(5, 'Dinas Keamanan', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `idpengaduan` int(255) DEFAULT NULL,
  `komentar` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `idpengaduan`, `komentar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'adasdasd', '2020-12-19 22:32:10', '2020-12-19 22:32:10', NULL),
(2, 1, 'adasdsadasd', '2020-12-19 22:45:25', '2020-12-19 22:45:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(2, '2020-12-12-033415', 'App\\Database\\Migrations\\Datapns', 'default', 'App', 1607744953, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `done_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `nik`, `nama`, `email`, `phone`, `department`, `message`, `status`, `done_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '123', '123', '123', '123', 'Dinas Pariwisata', 'TEST', 'Selesai', '2020-12-19 22:45:25', '2020-12-11 09:56:12', '2020-12-19 22:45:25', NULL),
(2, '456', '456', '456', '123', NULL, 'TEST', 'Selesai', '2020-12-19 22:32:10', '2020-12-11 09:56:12', '2020-12-19 22:32:10', NULL),
(3, '123', 'asdad', 'asdasd@asdasd.com', '123', 'Dinas Pariwisata', 'TEST', 'Selesai', '2020-12-19 22:32:10', '2020-12-11 09:56:12', NULL, NULL),
(4, '123', '123123', 'add@gmail.com', '123', 'Dinas Pariwisata', 'TEST', 'Diproses', NULL, '2020-12-11 10:00:21', '2020-10-19 22:50:26', NULL),
(5, 'adasdsa', 'asdasd', 'asdsad@gmail.com', '123', 'Pemkot Tebing Tinggi', 'TEST', 'Diproses', NULL, '2020-12-11 10:02:31', '2020-12-19 23:46:54', NULL),
(6, '12313123', '123123', '123123@gmail.com', '123', NULL, 'TEST', 'Diterima', NULL, '2020-12-11 10:04:41', NULL, NULL),
(7, 'asdasdsd', 'asdasd', 'asdsad@asdsad.com', '123', NULL, 'TEST', 'Diterima', NULL, '2020-12-11 21:11:50', NULL, NULL),
(8, '123123', '123123', 'a@a.com', '1231323', NULL, 'adadasd', 'Diterima', NULL, '2020-12-15 23:15:05', NULL, NULL),
(9, '123123', '123123@adsa.com', 'asdasd@asdsd.com', '123123123', NULL, 'adasd', 'Diterima', NULL, '2020-12-15 23:16:28', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `isadmin` enum('admin','dinas') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `isadmin`, `created_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin123', 'admin', '2020-12-14 15:40:07'),
(2, 'kominfo', 'kominfo@gmail.com', 'kominfo123', 'dinas', '2020-12-14 15:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `passwd` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `isadmin` tinyint(1) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nik`, `passwd`, `department`, `isadmin`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '123@123.com', '123', 'Dinas Pariwisata', 0, NULL, NULL, NULL),
(2, '111', '111', 'Dinas Perhubungan', 0, NULL, NULL, NULL),
(3, '222', '222', 'Kominfo', 0, NULL, NULL, NULL),
(4, '333', '333', 'Pemerintahan Tebing Tinggi', 0, NULL, NULL, NULL),
(5, '444', '444', 'Kantor Perpajakan', 0, NULL, NULL, NULL),
(6, 'vero@gmail.com', 'vero', NULL, 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
