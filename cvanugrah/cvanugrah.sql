-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 01:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gdrive` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `judul`, `gdrive`, `foto`) VALUES
(3, 'DESIGN RUMAH 2 LANTAI 9X18', 'https://drive.google.com/drive/folders/1i_8G38oTnkbQ-3leoTgTSHyIY1xU50O4', 'umah.jpg'),
(4, 'DESIGN RUMAH 2 LT ROOFTOP 7X14', 'https://drive.google.com/drive/folders/1ogvDCeg4oyoA644X88wCB-SyzsOu8Doo', 'umah2.jpg'),
(5, 'DESIGN RUMAH 3 LT', 'https://drive.google.com/drive/folders/1jEUq18UCISbyJqwfQr2FMFJAzGzti-jy', 'umah3.png'),
(6, 'LAYOUT DESIGN RUMAH 10 X 20 3 lantai', 'https://drive.google.com/drive/folders/1u2UbNn0kUYmi-u7tXxU1Xhndfs6In-Dq', 'umah4.jpeg'),
(7, 'Rumah 2 Lantai Bintaro', 'https://drive.google.com/drive/folders/1RvIql02I-2UHEiZft2TuhggDNKJhYUjV', 'umah5.png'),
(8, 'Cottage Bintang Laut Resort', 'https://drive.google.com/drive/folders/1s3ypHYpFHA0NxIYPIebDlP3wCqGEyINy', 'cotagebintang.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `no_telepon`, `alamat`, `password`) VALUES
(5, 'nikolai', 'inipalsu9@gmail.com', '081911248824', 'Jl. Kakaktua, Sawah Lama, Kec. Ciputat, Kota Tangerang Selatan, Banten 15413, Indonesia', 'db05ea034fd79d07e1602f7ca36d54b6'),
(6, 'admin', 'admin@gmail.com', '1234567890', 'dsdsfsf', '25d55ad283aa400af464c76d713c07ad'),
(7, 'Alpha parlindungan', 'ganiparlindunganbagasianasina@gmail.com', '085718332144', 'Perumnas 2', 'baa0bd649bd51683abc3f45dc610ec9b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kalkulasi`
--
ALTER TABLE `kalkulasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kalkulasi`
--
ALTER TABLE `kalkulasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
