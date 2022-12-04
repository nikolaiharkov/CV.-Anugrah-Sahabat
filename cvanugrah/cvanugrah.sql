-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2022 at 08:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvanugrah`
--

-- --------------------------------------------------------

--
-- Table structure for table `kalkulasi`
--

CREATE TABLE `kalkulasi` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `luastanah` int(10) NOT NULL,
  `luasbangunan` int(10) NOT NULL,
  `jumlantai` int(10) NOT NULL,
  `totalbiaya` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kalkulasi`
--

INSERT INTO `kalkulasi` (`id`, `username`, `luastanah`, `luasbangunan`, `jumlantai`, `totalbiaya`) VALUES
(1, 'nikolaiharkov', 130, 35, 1, 157500000),
(2, 'daffaaslam', 200, 35, 1, 157500000),
(3, 'daffaaslam', 100, 35, 1, 157500000),
(4, 'daffaaslam', 144, 36, 1, 162000000),
(5, 'daffaaslam', 360, 48, 2, 432000000),
(6, 'daffaaslam', 100, 25, 1, 112500000),
(7, 'nikolai', 400, 75, 1, 337500000),
(8, 'nikolai', 75, 25, 1, 112500000),
(9, 'nikolai', 75, 20, 1, 90000000),
(10, 'nikolai', 75, 20, 1, 90000000),
(11, 'nikolai', 225, 100, 1, 400000000),
(12, 'nikolai', 100, 100, 1, 400000000),
(13, 'nikolai', 75, 20, 1, 90000000),
(14, 'nikolai', 100, 25, 1, 112500000),
(15, 'nikolai', 100, 25, 1, 112500000),
(16, 'nikolai', 100, 25, 1, 112500000),
(17, 'nikolai', 400, 120, 1, 480000000),
(18, 'nikolai', 400, 120, 1, 480000000),
(19, 'nikolai', 400, 135, 1, 540000000),
(20, 'nikolai', 75, 30, 1, 135000000),
(21, 'nikolai', 75, 20, 1, 90000000),
(22, 'nikolai', 75, 20, 1, 90000000),
(23, 'nikolai', 100, 25, 1, 112500000),
(24, 'nikolai', 200, 25, 1, 112500000),
(25, 'nikolai', 600, 150, 1, 600000000),
(26, 'admin', 144, 24, 1, 108000000),
(27, 'nikolai', 225, 100, 1, 400000000),
(28, 'nikolai', 100, 25, 1, 112500000),
(29, 'nikolai', 1350, 300, 1, 1200000000),
(30, 'nikolai', 375, 50, 1, 225000000),
(31, 'nikolai', 150, 100, 1, 400000000),
(32, 'admin', 132, 24, 1, 108000000),
(33, 'nikolai', 100, 100, 1, 400000000),
(34, 'nikolai', 240, 100, 1, 400000000),
(35, 'nikolai', 225, 100, 1, 400000000),
(36, 'nikolai', 225, 100, 1, 400000000),
(37, 'nikolai', 24, 5, 2, 45000000),
(38, 'admin', 108, 48, 1, 216000000),
(39, 'admin', 30, 40, 1, 180000000),
(40, 'admin', 12, 1, 1, 4500000),
(41, 'admin', 44, 4, 1, 18000000),
(42, 'admin', 110, 5, 1, 22500000),
(43, 'admin', 105, 5, 1, 22500000),
(44, 'admin', 150, 25, 1, 112500000),
(45, 'admin', 0, 0, 0, 0),
(46, 'admin', 300, 44, 1, 198000000),
(47, 'Alpha parlindungan', 100, 100, 3, 1200000000),
(48, 'Alpha parlindungan', 450, 150, 2, 1200000000),
(49, 'Alpha parlindungan', 20, 20, 2, 180000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kalkulasi`
--
ALTER TABLE `kalkulasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kalkulasi`
--
ALTER TABLE `kalkulasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
