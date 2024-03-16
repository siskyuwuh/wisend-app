-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2023 at 12:34 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisend_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint UNSIGNED NOT NULL,
  `shipper_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipper_phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipper_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipient_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipient_phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipient_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_destination` bigint NOT NULL,
  `booking_product` bigint NOT NULL,
  `p` int NOT NULL,
  `l` int NOT NULL,
  `t` int NOT NULL,
  `dimentional_weight` int NOT NULL,
  `gross_weight` int NOT NULL,
  `weight_charge` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `shipper_name`, `shipper_phone`, `shipper_address`, `recipient_name`, `recipient_phone`, `recipient_address`, `booking_destination`, `booking_product`, `p`, `l`, `t`, `dimentional_weight`, `gross_weight`, `weight_charge`, `created_at`, `updated_at`) VALUES
(1, 'HIDAYAT FATURAHMAN', '0895348117772', 'Jl. KEBON MANGGIS II No.16, RT/RW 04/02\r\nKec.Matraman, Kel. Kebon Manggis', 'MAS PANJI', '0895348117772', 'Jl. KEBON MANGGIS II No.16, RT/RW 04/02\r\nKec.Matraman, Kel. Kebon Manggis', 37, 1, 10, 10, 10, 1, 1, 1, '2023-11-02 01:14:18', '2023-11-02 01:14:18'),
(2, 'BIG PEAK', '0802012030450', 'JAKARTA', 'HENNY KUSUMAWATI', '086754658665', 'CIPAYUNG', 254, 1, 10, 10, 10, 4, 4, 4, '2023-11-02 04:43:11', '2023-11-02 04:43:11'),
(3, 'BIG PEAK', '089098909890', 'JAKARTA', 'JOEL', '080230123021', 'CIPINANG BESAR SELATAN', 216, 1, 10, 10, 10, 1, 1, 1, '2023-11-02 04:45:35', '2023-11-02 04:45:35'),
(4, 'BIG PEAK', '089304958457', 'JAKARTA', 'ANDREAS', '089374589348', 'GAMBIR', 70, 1, 10, 10, 10, 2, 2, 2, '2023-11-02 04:50:10', '2023-11-02 04:50:10'),
(5, 'BIG PEAK', '089348439484', 'JAKARTA', 'ANISA', '089345684573', 'GAMBIR', 1, 1, 10, 10, 10, 1, 1, 1, '2023-11-02 04:56:36', '2023-11-02 04:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `distance_locations`
--

CREATE TABLE `distance_locations` (
  `id` bigint UNSIGNED NOT NULL,
  `drop_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jarak` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distance_locations`
--

INSERT INTO `distance_locations` (`id`, `drop_point`, `kelurahan`, `kecamatan`, `jarak`, `created_at`, `updated_at`) VALUES
(1, 'Cipinang', 'Gambir', 'Gambir', 12.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(2, 'Cipinang', 'Cideng', 'Gambir', 14.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(3, 'Cipinang', 'Petojo Utara', 'Gambir', 13.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(4, 'Cipinang', 'Petojo Selatan', 'Gambir', 14.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(5, 'Cipinang', 'Kebon Kelapa', 'Gambir', 12.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(6, 'Cipinang', 'Duri Pulo', 'Gambir', 15.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(7, 'Cipinang', 'Pasar Baru', 'Sawah Besar', 11.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(8, 'Cipinang', 'Karang Anyar', 'Sawah Besar', 14.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(9, 'Cipinang', 'Kartini', 'Sawah Besar', 13, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(10, 'Cipinang', 'Gunung Sahari Utara', 'Sawah Besar', 12.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(11, 'Cipinang', 'Mangga Dua Selatan', 'Sawah Besar', 14.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(12, 'Cipinang', 'Kemayoran', 'Kemayoran', 9.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(13, 'Cipinang', 'Kebon Kosong', 'Kemayoran', 10.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(14, 'Cipinang', 'Harapan Mulya', 'Kemayoran', 8.6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(15, 'Cipinang', 'Serdang', 'Kemayoran', 9.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(16, 'Cipinang', 'Gunung Sahari Selatan', 'Kemayoran', 10.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(17, 'Cipinang', 'Cempaka Baru', 'Kemayoran', 10.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(18, 'Cipinang', 'Sumur Batu', 'Kemayoran', 9.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(19, 'Cipinang', 'Utan Panjang', 'Kemayoran', 9.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(20, 'Cipinang', 'Senen', 'Senen', 6.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(21, 'Cipinang', 'Kenari', 'Senen', 7.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(22, 'Cipinang', 'Paseban', 'Senen', 7.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(23, 'Cipinang', 'Kramat', 'Senen', 9.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(24, 'Cipinang', 'Kwitang', 'Senen', 8.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(25, 'Cipinang', 'Bungur', 'Senen', 9.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(26, 'Cipinang', 'Cempaka Putih Timur', 'Cempaka Putih', 5.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(27, 'Cipinang', 'Cempaka Putih Barat', 'Cempaka Putih', 6.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(28, 'Cipinang', 'Rawasari', 'Cempaka Putih', 5.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(29, 'Cipinang', 'Menteng', 'Menteng', 8.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(30, 'Cipinang', 'Pegangsaan', 'Menteng', 7.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(31, 'Cipinang', 'Cikini', 'Menteng', 8.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(32, 'Cipinang', 'Gondangdia', 'Menteng', 10.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(33, 'Cipinang', 'Kebon Sirih', 'Menteng', 12.6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(34, 'Cipinang', 'Gelora', 'Tanah Abang', 16.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(35, 'Cipinang', 'Bendungan Hilir', 'Tanah Abang', 13, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(36, 'Cipinang', 'Karet Tengsin', 'Tanah Abang', 12.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(37, 'Cipinang', 'Petamburan', 'Tanah Abang', 13.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(38, 'Cipinang', 'Kebon Melati', 'Tanah Abang', 12.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(39, 'Cipinang', 'Kebon Kacang', 'Tanah Abang', 12.6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(40, 'Cipinang', 'Kampung Bali', 'Tanah Abang', 12.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(41, 'Cipinang', 'Johar Baru', 'Johar Baru', 7.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(42, 'Cipinang', 'Kampung Rawa', 'Johar Baru', 7.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(43, 'Cipinang', 'Galur', 'Johar Baru', 7.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(44, 'Cipinang', 'Tanah Tinggi', 'Johar Baru', 9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(45, 'Cipinang', 'Penjaringan', 'Penjaringan', 18.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(46, 'Cipinang', 'Kamal Muara', 'Penjaringan', 26.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(47, 'Cipinang', 'Kapuk Muara', 'Penjaringan', 25.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(48, 'Cipinang', 'Pejagalan', 'Penjaringan', 19.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(49, 'Cipinang', 'Pluit', 'Penjaringan', 21.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(50, 'Cipinang', 'Tanjung Priok', 'Tanjung Priok', 12.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(51, 'Cipinang', 'Sunter Jaya', 'Tanjung Priok', 9.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(52, 'Cipinang', 'Papanggo', 'Tanjung Priok', 13.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(53, 'Cipinang', 'Sungai Bambu', 'Tanjung Priok', 11.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(54, 'Cipinang', 'Kebon Bawang', 'Tanjung Priok', 12.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(55, 'Cipinang', 'Sunter Agung', 'Tanjung Priok', 12.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(56, 'Cipinang', 'Warakas', 'Tanjung Priok', 13.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(57, 'Cipinang', 'Koja', 'Koja', 14.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(58, 'Cipinang', 'Tugu Utara', 'Koja', 13.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(59, 'Cipinang', 'Lagoa', 'Koja', 14.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(60, 'Cipinang', 'Rawa Badak Utara', 'Koja', 12.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(61, 'Cipinang', 'Tugu Selatan', 'Koja', 9.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(62, 'Cipinang', 'Rawa Badak Selatan', 'Koja', 12.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(63, 'Cipinang', 'Cilincing', 'Cilincing', 16.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(64, 'Cipinang', 'Sukapura', 'Cilincing', 13.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(65, 'Cipinang', 'Marunda', 'Cilincing', 18.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(66, 'Cipinang', 'Kalibaru', 'Cilincing', 16.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(67, 'Cipinang', 'Semper Timur', 'Cilincing', 15.6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(68, 'Cipinang', 'Rorotan', 'Cilincing', 14.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(69, 'Cipinang', 'Semper Barat', 'Cilincing', 16, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(70, 'Cipinang', 'Pademangan Timur', 'Pademangan', 12, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(71, 'Cipinang', 'Pademangan Barat', 'Pademangan', 14.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(72, 'Cipinang', 'Ancol', 'Pademangan', 15.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(73, 'Cipinang', 'Kelapa Gading Timur', 'Kelapa Gading', 6.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(74, 'Cipinang', 'Pegangsaan Dua', 'Kelapa Gading', 8.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(75, 'Cipinang', 'Kelapa Gading Barat', 'Kelapa Gading', 6.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(76, 'Cipinang', 'Cengkareng Barat', 'Cengkareng', 27.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(77, 'Cipinang', 'Duri Kosambi', 'Cengkareng', 25.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(78, 'Cipinang', 'Rawa Buaya', 'Cengkareng', 23, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(79, 'Cipinang', 'Kedaung Kali Angke', 'Cengkareng', 25, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(80, 'Cipinang', 'Kapuk', 'Cengkareng', 23.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(81, 'Cipinang', 'Cengkareng Timur', 'Cengkareng', 24.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(82, 'Cipinang', 'Grogol', 'Grogol Petamburan', 18, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(83, 'Cipinang', 'Tanjung Duren Utara', 'Grogol Petamburan', 20.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(84, 'Cipinang', 'Tomang', 'Grogol Petamburan', 15.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(85, 'Cipinang', 'Jelambar', 'Grogol Petamburan', 18, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(86, 'Cipinang', 'Tanjung Duren Selatan', 'Grogol Petamburan', 20.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(87, 'Cipinang', 'Jelambar Baru', 'Grogol Petamburan', 19.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(88, 'Cipinang', 'Wijaya Kusuma', 'Grogol Petamburan', 21.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(89, 'Cipinang', 'Taman Sari', 'Taman Sari', 14.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(90, 'Cipinang', 'Krukut', 'Taman Sari', 14.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(91, 'Cipinang', 'Maphar', 'Taman Sari', 13.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(92, 'Cipinang', 'Tangki', 'Taman Sari', 14, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(93, 'Cipinang', 'Mangga Besar', 'Taman Sari', 14.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(94, 'Cipinang', 'Keagungan', 'Taman Sari', 14.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(95, 'Cipinang', 'Glodok', 'Taman Sari', 15.6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(96, 'Cipinang', 'Pinangsia', 'Taman Sari', 16.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(97, 'Cipinang', 'Tambora', 'Tambora', 17, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(98, 'Cipinang', 'Kali Anyar', 'Tambora', 16.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(99, 'Cipinang', 'Duri Utara', 'Tambora', 16.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(100, 'Cipinang', 'Tanah Sereal', 'Tambora', 15.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(101, 'Cipinang', 'Krendang', 'Tambora', 16.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(102, 'Cipinang', 'Jembatan Besi', 'Tambora', 17.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(103, 'Cipinang', 'Angke', 'Tambora', 18, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(104, 'Cipinang', 'Jembatan Lima', 'Tambora', 16.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(105, 'Cipinang', 'Pekojan', 'Tambora', 16.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(106, 'Cipinang', 'Roa Malaka', 'Tambora', 16.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(107, 'Cipinang', 'Duri Selatan', 'Tambora', 15.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(108, 'Cipinang', 'Kebon Jeruk', 'Kebon Jeruk', 18.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(109, 'Cipinang', 'Sukabumi Utara', 'Kebon Jeruk', 17, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(110, 'Cipinang', 'Sukabumi Selatan', 'Kebon Jeruk', 21.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(111, 'Cipinang', 'Kelapa Dua', 'Kebon Jeruk', 21, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(112, 'Cipinang', 'Duri Kepa', 'Kebon Jeruk', 22.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(113, 'Cipinang', 'Kedoya Utara', 'Kebon Jeruk', 20.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(114, 'Cipinang', 'Kedoya Selatan', 'Kebon Jeruk', 24.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(115, 'Cipinang', 'Kalideres', 'Kalideres', 27, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(116, 'Cipinang', 'Semanan', 'Kalideres', 27.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(117, 'Cipinang', 'Tegal Alur', 'Kalideres', 29.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(118, 'Cipinang', 'Kamal', 'Kalideres', 33.6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(119, 'Cipinang', 'Pegadungan', 'Kalideres', 29.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(120, 'Cipinang', 'Palmerah', 'Pal Merah', 17.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(121, 'Cipinang', 'Slipi', 'Pal Merah', 14.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(122, 'Cipinang', 'Kota Bambu Utara', 'Pal Merah', 16.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(123, 'Cipinang', 'Jatipulo', 'Pal Merah', 15.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(124, 'Cipinang', 'Kemanggisan', 'Pal Merah', 15.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(125, 'Cipinang', 'Kota Bambu Selatan', 'Pal Merah', 15.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(126, 'Cipinang', 'Kembangan Utara', 'Kembangan', 24.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(127, 'Cipinang', 'Meruya Utara', 'Kembangan', 24.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(128, 'Cipinang', 'Meruya Selatan', 'Kembangan', 26.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(129, 'Cipinang', 'Srengseng', 'Kembangan', 23.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(130, 'Cipinang', 'Joglo', 'Kembangan', 23.6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(131, 'Cipinang', 'Kembangan Selatan', 'Kembangan', 22.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(132, 'Cipinang', 'Tebet Timur', 'Tebet', 7.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(133, 'Cipinang', 'Tebet Barat', 'Tebet', 8.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(134, 'Cipinang', 'Menteng Dalam', 'Tebet', 8.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(135, 'Cipinang', 'Kebon Baru', 'Tebet', 6.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(136, 'Cipinang', 'Bukit Duri', 'Tebet', 6.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(137, 'Cipinang', 'Manggarai Selatan', 'Tebet', 7.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(138, 'Cipinang', 'Manggarai', 'Tebet', 6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(139, 'Cipinang', 'SetiaBudi', 'Setiabudi', 11.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(140, 'Cipinang', 'Karet Semanggi', 'Setiabudi', 11, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(141, 'Cipinang', 'Karet Kuningan', 'Setiabudi', 11.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(142, 'Cipinang', 'Karet', 'Setiabudi', 11.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(143, 'Cipinang', 'Menteng Atas', 'Setiabudi', 9.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(144, 'Cipinang', 'Pasar Manggis', 'Setiabudi', 8.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(145, 'Cipinang', 'Guntur', 'Setiabudi', 9.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(146, 'Cipinang', 'Kuningan Timur', 'Setiabudi', 10.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(147, 'Cipinang', 'Mampang Prapatan', 'Mampang Prapatan', 12.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(148, 'Cipinang', 'Bangka', 'Mampang Prapatan', 14.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(149, 'Cipinang', 'Pela Mampang', 'Mampang Prapatan', 13.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(150, 'Cipinang', 'Tegal Parang', 'Mampang Prapatan', 12.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(151, 'Cipinang', 'Kuningan Barat', 'Mampang Prapatan', 12.6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(152, 'Cipinang', 'Pasar Minggu', 'Pasar Minggu', 17.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(153, 'Cipinang', 'Jati Padang', 'Pasar Minggu', 14.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(154, 'Cipinang', 'Cilandak Timur', 'Pasar Minggu', 16.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(155, 'Cipinang', 'Ragunan', 'Pasar Minggu', 18, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(156, 'Cipinang', 'Pejaten Timur', 'Pasar Minggu', 11.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(157, 'Cipinang', 'Pejaten Barat', 'Pasar Minggu', 13.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(158, 'Cipinang', 'Kebagusan', 'Pasar Minggu', 20.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(159, 'Cipinang', 'Kebayoran Lama Utara', 'Kebayoran Lama', 21.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(160, 'Cipinang', 'Pondok Pinang', 'Kebayoran Lama', 21.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(161, 'Cipinang', 'Cipulir', 'Kebayoran Lama', 17.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(162, 'Cipinang', 'Grogol Utara', 'Kebayoran Lama', 19.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(163, 'Cipinang', 'Grogol Selatan', 'Kebayoran Lama', 19.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(164, 'Cipinang', 'Kebayoran Lama Selatan', 'Kebayoran Lama', 19.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(165, 'Cipinang', 'Cilandak Barat', 'Cilandak', 20.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(166, 'Cipinang', 'Lebak Bulus', 'Cilandak', 23.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(167, 'Cipinang', 'Pondok Labu', 'Cilandak', 22.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(168, 'Cipinang', 'Gandaria Selatan', 'Cilandak', 18.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(169, 'Cipinang', 'Cipete Selatan', 'Cilandak', 17.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(170, 'Cipinang', 'Melawai', 'Kebayoran Baru', 14.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(171, 'Cipinang', 'Gunung', 'Kebayoran Baru', 15.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(172, 'Cipinang', 'Kramat Pela', 'Kebayoran Baru', 15.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(173, 'Cipinang', 'Selong', 'Kebayoran Baru', 14.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(174, 'Cipinang', 'Rawa Barat', 'Kebayoran Baru', 13.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(175, 'Cipinang', 'Senayan', 'Kebayoran Baru', 13.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(176, 'Cipinang', 'Pulo', 'Kebayoran Baru', 16.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(177, 'Cipinang', 'Petogogan', 'Kebayoran Baru', 13.6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(178, 'Cipinang', 'Gandaria Utara', 'Kebayoran Baru', 17.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(179, 'Cipinang', 'Cipete Utara', 'Kebayoran Baru', 15.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(180, 'Cipinang', 'Pancoran', 'Pancoran', 10.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(181, 'Cipinang', 'Kalibata', 'Pancoran', 12.6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(182, 'Cipinang', 'Rawajati', 'Pancoran', 9.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(183, 'Cipinang', 'Duren Tiga', 'Pancoran', 12.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(184, 'Cipinang', 'Pengadegan', 'Pancoran', 9.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(185, 'Cipinang', 'Cikoko', 'Pancoran', 8.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(186, 'Cipinang', 'Jagakarsa', 'Jagakarsa', 20.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(187, 'Cipinang', 'Srengseng Sawah', 'Jagakarsa', 24.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(188, 'Cipinang', 'Ciganjur', 'Jagakarsa', 23.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(189, 'Cipinang', 'Lenteng Agung', 'Jagakarsa', 17.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(190, 'Cipinang', 'Tanjung Barat', 'Jagakarsa', 14.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(191, 'Cipinang', 'Cipedak', 'Jagakarsa', 25.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(192, 'Cipinang', 'Pesanggrahan', 'Pesanggrahan', 26.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(193, 'Cipinang', 'Bintaro', 'Pesanggrahan', 22, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(194, 'Cipinang', 'Petukangan Utara', 'Pesanggrahan', 26.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(195, 'Cipinang', 'Petukangan Selatan', 'Pesanggrahan', 22.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(196, 'Cipinang', 'Ulujami', 'Pesanggrahan', 19.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(197, 'Cipinang', 'Pisangan Baru', 'Matraman', 3.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(198, 'Cipinang', 'Utan Kayu Utara', 'Matraman', 4.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(199, 'Cipinang', 'Kayu Manis', 'Matraman', 6.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(200, 'Cipinang', 'Palmeriam', 'Matraman', 6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(201, 'Cipinang', 'Kebon Manggis', 'Matraman', 5.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(202, 'Cipinang', 'Utan Kayu Selatan', 'Matraman', 4.6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(203, 'Cipinang', 'Pulo Gadung', 'Pulogadung', 3.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(204, 'Cipinang', 'Pisangan Timur', 'Pulogadung', 1.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(205, 'Cipinang', 'Cipinang', 'Pulogadung', 0.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(206, 'Cipinang', 'Jatinegara Kaum', 'Pulogadung', 2.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(207, 'Cipinang', 'Rawamangun', 'Pulogadung', 2.6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(208, 'Cipinang', 'Kayu Putih', 'Pulogadung', 4.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(209, 'Cipinang', 'Jati', 'Pulogadung', 2.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(210, 'Cipinang', 'Kampung Melayu', 'Jatinegara', 5.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(211, 'Cipinang', 'Bidara Cina', 'Jatinegara', 5.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(212, 'Cipinang', 'Bali Mester', 'Jatinegara', 3.6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(213, 'Cipinang', 'Rawa Bunga', 'Jatinegara', 3.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(214, 'Cipinang', 'Cipinang Cempedak', 'Jatinegara', 6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(215, 'Cipinang', 'Cipinang Muara', 'Jatinegara', 3.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(216, 'Cipinang', 'Cipinang Besar Selatan', 'Jatinegara', 4.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(217, 'Cipinang', 'Cipinang Besar Utara', 'Jatinegara', 2.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(218, 'Cipinang', 'Kramatjati', 'Kramatjati', 8.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(219, 'Cipinang', 'Tengah', 'Kramatjati', 11.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(220, 'Cipinang', 'Dukuh', 'Kramatjati', 12.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(221, 'Cipinang', 'Batu Ampar', 'Kramatjati', 10.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(222, 'Cipinang', 'Balekambang', 'Kramatjati', 11.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(223, 'Cipinang', 'Cililitan', 'Kramatjati', 8.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(224, 'Cipinang', 'Cawang', 'Kramatjati', 7.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(225, 'Cipinang', 'Gedong', 'Pasar Rebo', 13.6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(226, 'Cipinang', 'Baru', 'Pasar Rebo', 16.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(227, 'Cipinang', 'Cijantung', 'Pasar Rebo', 15.6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(228, 'Cipinang', 'Kalisari', 'Pasar Rebo', 18.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(229, 'Cipinang', 'Pekayon', 'Pasar Rebo', 18.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(230, 'Cipinang', 'Jatinegara', 'Cakung', 4.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(231, 'Cipinang', 'Rawa Terate', 'Cakung', 5.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(232, 'Cipinang', 'Penggilingan', 'Cakung', 9.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(233, 'Cipinang', 'Cakung Timur', 'Cakung', 10.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(234, 'Cipinang', 'Pulo Gebang', 'Cakung', 9.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(235, 'Cipinang', 'Ujung Menteng', 'Cakung', 11.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(236, 'Cipinang', 'Cakung Barat', 'Cakung', 8.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(237, 'Cipinang', 'Duren Sawit', 'Duren Sawit', 8.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(238, 'Cipinang', 'Pondok Bambu', 'Duren Sawit', 6.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(239, 'Cipinang', 'Klender', 'Duren Sawit', 4.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(240, 'Cipinang', 'Pondok Kelapa', 'Duren Sawit', 10.6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(241, 'Cipinang', 'Malaka Sari', 'Duren Sawit', 7.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(242, 'Cipinang', 'Malaka Jaya', 'Duren Sawit', 9.1, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(243, 'Cipinang', 'Pondok Kopi', 'Duren Sawit', 9.5, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(244, 'Cipinang', 'Makasar', 'Makasar', 8.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(245, 'Cipinang', 'Pinangranti', 'Makasar', 12.6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(246, 'Cipinang', 'Kebon Pala', 'Makasar', 7.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(247, 'Cipinang', 'Halim Perdana Kusuma', 'Makasar', 7.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(248, 'Cipinang', 'Cipinang Melayu', 'Makasar', 11, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(249, 'Cipinang', 'Ciracas', 'Ciracas', 15.3, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(250, 'Cipinang', 'Cibubur', 'Ciracas', 19.9, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(251, 'Cipinang', 'Kelapa Dua Wetan', 'Ciracas', 19.6, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(252, 'Cipinang', 'Susukan', 'Ciracas', 15.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(253, 'Cipinang', 'Rambutan', 'Ciracas', 13.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(254, 'Cipinang', 'Cipayung', 'Cipayung', 15.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(255, 'Cipinang', 'Cilangkap', 'Cipayung', 20.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(256, 'Cipinang', 'Pondok Ranggon', 'Cipayung', 22.7, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(257, 'Cipinang', 'Munjul', 'Cipayung', 21.2, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(258, 'Cipinang', 'Setu', 'Cipayung', 17.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(259, 'Cipinang', 'Bambu Apus', 'Cipayung', 16, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(260, 'Cipinang', 'Lubang Buaya', 'Cipayung', 16.4, '2023-10-23 05:54:52', '2023-10-23 05:54:52'),
(261, 'Cipinang', 'Ceger', 'Cipayung', 14.8, '2023-10-23 05:54:52', '2023-10-23 05:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(138, '2014_10_12_000000_create_users_table', 1),
(139, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(140, '2019_08_19_000000_create_failed_jobs_table', 1),
(141, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(142, '2023_10_04_054408_create_bookings_table', 1),
(143, '2023_10_09_105215_create_receipts_table', 1),
(144, '2023_10_09_181417_create_distance_locations_table', 1);

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
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` bigint UNSIGNED NOT NULL,
  `booking_id` bigint UNSIGNED NOT NULL,
  `receipt_id` char(17) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipment_status` bigint NOT NULL,
  `promo` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`id`, `booking_id`, `receipt_id`, `shipment_status`, `promo`, `photos`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 1, 'WS021120230000001', 1, NULL, NULL, 36000, '2023-11-02 01:14:18', '2023-11-02 01:14:18'),
(2, 2, 'WS021120230000002', 1, NULL, NULL, 44000, '2023-11-02 04:43:11', '2023-11-02 04:43:11'),
(3, 3, 'WS021120230000003', 1, NULL, NULL, 11000, '2023-11-02 04:45:35', '2023-11-02 04:45:35'),
(4, 4, 'WS021120230000004', 1, NULL, NULL, 32000, '2023-11-02 04:50:10', '2023-11-02 04:50:10'),
(5, 5, 'WS021120230000005', 1, NULL, NULL, 33500, '2023-11-02 04:56:36', '2023-11-02 04:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kendrick Bergnaum', 'collier.carson@example.com', '2023-10-23 05:54:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yHGaQtgRoO', '2023-10-23 05:54:40', '2023-10-23 05:54:40'),
(2, 'Felicia Weber', 'lowe.dorothy@example.com', '2023-10-23 05:54:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DS0DHSL9Z5', '2023-10-23 05:54:40', '2023-10-23 05:54:40'),
(3, 'Xavier Kovacek', 'ycrooks@example.org', '2023-10-23 05:54:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aIj2szdzTK', '2023-10-23 05:54:40', '2023-10-23 05:54:40'),
(4, 'Wayne D\'Amore', 'vschultz@example.org', '2023-10-23 05:54:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'z0Z4kBawaJ', '2023-10-23 05:54:40', '2023-10-23 05:54:40'),
(5, 'Eveline Gleason', 'gusikowski.brannon@example.org', '2023-10-23 05:54:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CghR8Gfkcd', '2023-10-23 05:54:40', '2023-10-23 05:54:40'),
(6, 'Mr. Durward Watsica', 'afadel@example.org', '2023-10-23 05:54:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'K0NuZFg2WY', '2023-10-23 05:54:40', '2023-10-23 05:54:40'),
(7, 'Madonna Murphy I', 'jamey98@example.net', '2023-10-23 05:54:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SUJn27GzF9', '2023-10-23 05:54:40', '2023-10-23 05:54:40'),
(8, 'Hazel Green MD', 'smith.julia@example.net', '2023-10-23 05:54:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6D8NK9xAEh', '2023-10-23 05:54:40', '2023-10-23 05:54:40'),
(9, 'Dr. Bill McGlynn I', 'derek.keebler@example.com', '2023-10-23 05:54:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'npaWlH13H6', '2023-10-23 05:54:40', '2023-10-23 05:54:40'),
(10, 'Jules Krajcik IV', 'mina36@example.com', '2023-10-23 05:54:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tmOqKFdiso', '2023-10-23 05:54:40', '2023-10-23 05:54:40'),
(11, 'admin', 'admin@gmail.com', '2023-10-23 05:54:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LwGS5dYTIzqqwY0r5TxQ618CFORqgwZ3lvBLIULrTjoLn5vSzP8FG9AT5M7k', '2023-10-23 05:54:40', '2023-10-23 05:54:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distance_locations`
--
ALTER TABLE `distance_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `receipts_receipt_id_unique` (`receipt_id`);

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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `distance_locations`
--
ALTER TABLE `distance_locations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
