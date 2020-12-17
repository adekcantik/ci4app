-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 08:24 AM
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
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `nik`, `nama`, `email`, `phone`, `department`, `message`, `created_at`, `updated_at`) VALUES
(1, '123', '123', '123', '123', 'Dinas Pariwisata', 'TEST', NULL, NULL),
(2, '456', '456', '456', '123', 'Dinas Pariwisata', 'TEST', NULL, NULL),
(3, '123', 'asdad', 'asdasd@asdasd.com', '123', 'Dinas Pariwisata', 'TEST', '2020-12-11 09:56:12', '2020-12-11 09:56:12'),
(4, '123', '123123', 'add@gmail.com', '123', 'Kominfo', 'TEST', '2020-12-11 10:00:21', '2020-12-11 10:00:21'),
(5, 'adasdsa', 'asdasd', 'asdsad@gmail.com', '123', 'Kominfo', 'TEST', '2020-12-11 10:02:31', '2020-12-11 10:02:31'),
(6, '12313123', '123123', '123123@gmail.com', '123', 'Pemerintahan Tebing Tinggi', 'TEST', '2020-12-11 10:04:41', '2020-12-11 10:04:41'),
(7, 'asdasdsd', 'asdasd', 'asdsad@asdsad.com', '123', 'Kantor Perpajakan', 'TEST', '2020-12-11 21:11:50', '2020-12-11 21:11:50'),
(8, '123123', '123123', 'a@a.com', '1231323', 'Pemerintahan Tebing Tinggi', 'adadasd', '2020-12-15 23:15:05', '2020-12-15 23:15:05'),
(9, '123123', '123123@adsa.com', 'asdasd@asdsd.com', '123123123', 'Dinas Pariwisata', 'adasd', '2020-12-15 23:16:28', '2020-12-15 23:16:28'),
(10, '12345678', 'adasdasdsad', 'kominfo@gmail.com', '081398000964', 'Kominfo', 'asdasdasdsad', '2020-12-16 01:18:52', '2020-12-16 01:18:52');

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
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nik`, `passwd`, `department`, `isadmin`, `created_at`, `updated_at`) VALUES
(1, '123', '123', 'Dinas Pariwisata', 0, NULL, NULL),
(2, '111', '111', 'Dinas Perhubungan', 0, NULL, NULL),
(3, '222', '222', 'Kominfo', 0, NULL, NULL),
(4, '333', '333', 'Pemerintahan Tebing Tinggi', 0, NULL, NULL),
(5, '444', '444', 'Kantor Perpajakan', 0, NULL, NULL),
(6, 'vero', 'vero', NULL, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
