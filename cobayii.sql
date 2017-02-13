-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2017 at 03:29 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cobayii`
--

-- --------------------------------------------------------

--
-- Table structure for table `alatuser`
--

CREATE TABLE `alatuser` (
  `id` int(11) NOT NULL,
  `id_alat` varchar(32) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alatuser`
--

INSERT INTO `alatuser` (`id`, `id_alat`, `id_user`, `nama`) VALUES
(11, 'fb1b48fdedbf4954a1b456fef45ae1f9', 1, 'Sigap003'),
(12, 'e87fb3ef5b24d00ded37d4c3b4ae1290', 1, 'SIgap004'),
(13, '40664b8af3ac490bb46fd49888c3ab9f', 2, 'sipadat001');

-- --------------------------------------------------------

--
-- Table structure for table `dataalat`
--

CREATE TABLE `dataalat` (
  `id` int(11) NOT NULL,
  `kode` varchar(32) NOT NULL,
  `tanggal_produksi` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `registered_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataalat`
--

INSERT INTO `dataalat` (`id`, `kode`, `tanggal_produksi`, `status`, `registered_at`) VALUES
(1, '40664b8af3ac490bb46fd49888c3ab9f', 2016, 0, '2016-07-24 08:00:43'),
(2, 'fc90840a09747e79f1ef051b4f05d193', 2016, 0, '2016-07-24 08:01:53'),
(3, '892210a8d2dae6b7ba9602c80820b287', 2016, 0, '2016-07-24 08:16:57'),
(4, 'b33cd1d62b1d48fe8ebcc18d29d50c97', 2016, 0, '2016-07-30 09:42:37'),
(5, 'a3c59aa60699b426b7dba2a03e7be301', 2016, 0, '2016-07-30 09:42:39'),
(6, 'fb1b48fdedbf4954a1b456fef45ae1f9', 2016, 0, '2016-07-30 09:42:40'),
(7, 'bd7794c408f0dbbbea6731f3befa1164', 2016, 0, '2016-07-30 12:04:49'),
(8, '66c5e5deb5fcea7f567974cc73011c63', 2016, 0, '2016-07-30 12:04:51'),
(9, '6d8a3a6d6c1879d702125dc9092a2f90', 2016, 0, '2016-07-30 12:04:51'),
(10, '830ed14cbab24f4e926e9ec7ee735b05', 2016, 0, '2016-07-30 12:04:52'),
(11, 'e87fb3ef5b24d00ded37d4c3b4ae1290', 2016, 0, '2016-07-30 12:05:06'),
(12, '3f550e24770f59b005e77531c38ab3b2', 2016, 0, '2016-07-30 12:05:06'),
(13, 'b30354d0ebf76a6ddd1bb6cb450e789f', 2016, 0, '2016-07-30 12:05:07'),
(14, 'b5a5c0be51142e107ec7f9aed403696d', 2016, 0, '2016-07-30 12:05:07'),
(15, '7f972ae97098de7bba71ef6652812886', 2016, 0, '2016-07-30 12:05:08'),
(16, '1a08f403c08a6486a55b1f00b7d1357c', 2016, 0, '2016-07-30 12:05:08'),
(17, '10e66f560f08a6294cab1458523dda79', 2016, 0, '2016-07-30 12:05:09'),
(18, '8127d162e662163a36e75ef7ca1cfd55', 2016, 0, '2016-07-30 12:05:09'),
(19, '870fc14a12bdb0cefe68356e9a086a91', 2016, 0, '2016-07-30 12:38:36'),
(20, 'f0903b12f55c3c716432d3b2c6ca3857', 2016, 0, '2016-08-01 12:45:51'),
(21, '6ca308e70dba7a144094567a45863fb8', 2016, 0, '2016-08-01 13:43:38'),
(22, '198e52aa8ef1e5780e3218a485bfbdcc', 2016, 0, '2016-08-01 14:13:20'),
(23, 'c71316beccf2018817a86af3b1483c18', 2016, 0, '2016-08-01 14:13:21'),
(24, '74db35701b2cbed7c6bb8727031dd729', 2016, 0, '2016-08-01 14:13:23'),
(25, 'd991f1ac7ae09df66e7a711fe89098a6', 2016, 0, '2016-08-01 16:10:00'),
(26, 'c21466863fee733d9e0216c57cdd260c', 2016, 0, '2016-08-01 17:16:45'),
(33, '89455b83a7fa99a6be6b9c9ace9ff825', 2016, 0, '2016-08-01 17:21:54'),
(34, '31b99bbaad223f92a3719c34253a0d4e', 2016, 0, '2016-08-01 17:24:10'),
(35, '356f9af403d098dc954098121880cdae', 2016, 0, '2016-08-01 17:27:37'),
(36, '08cafd687940874c26d51e18406dfecc', 2016, 0, '2016-08-01 17:37:19'),
(37, '661c9f563160595014c4dcb4b020f64a', 2016, 0, '2016-10-14 16:34:06'),
(38, '46f9e0451f0419b323c6073ee9c7af5d', 2016, 0, '2016-10-14 16:34:59'),
(39, '7a50cefbd5119be40e3496f0df7b9f63', 2016, 0, '2016-10-14 16:34:59'),
(40, '3dbd8ba007989ab7679297ea4371ffd7', 2016, 0, '2016-10-14 16:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `datasensor`
--

CREATE TABLE `datasensor` (
  `id` int(11) NOT NULL,
  `id_alat` int(11) NOT NULL,
  `Hpsp` int(11) NOT NULL,
  `Hpc` int(11) NOT NULL,
  `Uk` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datasensor`
--

INSERT INTO `datasensor` (`id`, `id_alat`, `Hpsp`, `Hpc`, `Uk`, `created_at`) VALUES
(1, 11, 5, 10, 1, '2017-02-12 05:29:01'),
(2, 12, 5, 4, 1, '2017-02-12 05:29:27'),
(3, 11, 5, 15, -1, '2017-02-12 05:30:02'),
(4, 11, 5, 0, 1, '2017-02-12 05:30:17'),
(5, 13, 5, 2, 0.5, '2017-02-12 17:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `access_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `access_token`) VALUES
(1, 'foo', '', '$2a$10$bf5456b02f4b386240b84O/a8TwUOOxIZllD4pWRHfMF9h0jGokXq', NULL),
(2, 'akhiyarwaladi', '', '$2a$10$bf5456b02f4b386240b84O/a8TwUOOxIZllD4pWRHfMF9h0jGokXq', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alatuser`
--
ALTER TABLE `alatuser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `dataalat`
--
ALTER TABLE `dataalat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datasensor`
--
ALTER TABLE `datasensor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alat` (`id_alat`),
  ADD KEY `id_alat_2` (`id_alat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alatuser`
--
ALTER TABLE `alatuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `dataalat`
--
ALTER TABLE `dataalat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `datasensor`
--
ALTER TABLE `datasensor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `alatuser`
--
ALTER TABLE `alatuser`
  ADD CONSTRAINT `alatuser_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `datasensor`
--
ALTER TABLE `datasensor`
  ADD CONSTRAINT `datasensor_ibfk_1` FOREIGN KEY (`id_alat`) REFERENCES `alatuser` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
