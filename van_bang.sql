-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 05:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlvb`
--

-- --------------------------------------------------------

--
-- Table structure for table `van_bang`
--

CREATE TABLE `van_bang` (
  `id` varchar(50) NOT NULL,
  `tenvb` varchar(50) NOT NULL,
  `sohieuvb` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `van_bang`
--

INSERT INTO `van_bang` (`id`, `tenvb`, `sohieuvb`) VALUES
('VB0011', 'Toán Đại Cương ', 1212),
('VB004', 'Cấu Trúc Dữ Liệu Và Giải Thuật ', 2147483647),
('VB005', 'Vật Lý 1', 997867),
('VB006', 'Lịch Sử Đảng', 5062004),
('VB008', 'Toán', 394834);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `van_bang`
--
ALTER TABLE `van_bang`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
