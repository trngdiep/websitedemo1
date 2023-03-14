-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 12:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile_hiep`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `stt` int(11) NOT NULL,
  `ten` text NOT NULL,
  `loai` text NOT NULL,
  `gia` int(11) NOT NULL,
  `anh` text NOT NULL,
  `ghichu` text NOT NULL,
  `cpu` text NOT NULL,
  `bonhotrong` text NOT NULL,
  `camera` text NOT NULL,
  `xuatxu` text NOT NULL,
  `hedieuhanh` text NOT NULL,
  `noibat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`stt`, `ten`, `loai`, `gia`, `anh`, `ghichu`, `cpu`, `bonhotrong`, `camera`, `xuatxu`, `hedieuhanh`, `noibat`) VALUES
(23, 'Ipad Pro 13', 'Máy tính bảng', 27990000, '', '', 'A14 Bionic', '256GB', '12.0 MP', 'Trung Quốc', 'IOS', 'Nổi bật'),
(27, 'Samsung Galaxy Watch 4', 'Đồng hồ', 8990000, '637646653474851362_samsung-galaxy-watch-4-classic-den-1.jpg', '', 'Exynos W920', '32GB', '12.0 MP', 'Mỹ', 'Android', 'Nổi bật'),
(28, 'Iphone 11 ', 'Điện thoại', 17990000, 'iphone-11-trang-200x200.jpg', '', 'Apple A13 Bionic', '64GB', '12.0 MP', 'Trung Quốc', 'IOS', 'Không nổi bật'),
(29, 'Samsung Galaxy Z Fold', 'Điện thoại', 41990000, 'galaxy_zfold3_zflip35g_main_kv.jpg', '', 'Snapdragon 888', '256GB', '12.0 MP', 'Hàn Quốc ', 'Android', 'Không nổi bật'),
(32, 'Samsung Galaxy', 'Điện thoại', 17000000, 'samsung-galaxy-tab-a7-lite-gray-600x600.jpg', '', 'A14 bionic', '64GB', '13.0 MP', 'Việt Nam', 'Android', 'Nổi bật');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`stt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
