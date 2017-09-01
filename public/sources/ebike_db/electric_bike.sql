-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2017 at 03:21 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electric_bike`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand_product`
--

CREATE TABLE `brand_product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand_product`
--

INSERT INTO `brand_product` (`id`, `name`, `description`, `image`) VALUES
(1, 'NIJIA', 'Tuy mới ra mắt thời gian gần đây nhưng chắc hẳn người tiêu dùng đã khá quen thuộc với cái tên xe đạp điện Nijia nhờ  sở hữu kiểu dáng quen thuộc với những màu sắc đa dạng, bắt mắt.', 'logo-nijia.png'),
(2, 'GIANT', 'Tuy mới ra mắt thời gian gần đây nhưng chắc hẳn người tiêu dùng đã khá quen thuộc với cái tên xe đạp điện Nijia nhờ  sở hữu kiểu dáng quen thuộc với những màu sắc đa dạng, bắt mắt.', 'logo-giant.png'),
(3, 'HONDA', 'Tuy mới ra mắt thời gian gần đây nhưng chắc hẳn người tiêu dùng đã khá quen thuộc với cái tên xe đạp điện Nijia nhờ  sở hữu kiểu dáng quen thuộc với những màu sắc đa dạng, bắt mắt.', 'logo-honda.png'),
(4, 'KAIZEN', 'Tuy mới ra mắt thời gian gần đây nhưng chắc hẳn người tiêu dùng đã khá quen thuộc với cái tên xe đạp điện Nijia nhờ  sở hữu kiểu dáng quen thuộc với những màu sắc đa dạng, bắt mắt.', 'logo-kaizen.png'),
(5, 'DK', 'Tuy mới ra mắt thời gian gần đây nhưng chắc hẳn người tiêu dùng đã khá quen thuộc với cái tên xe đạp điện Nijia nhờ  sở hữu kiểu dáng quen thuộc với những màu sắc đa dạng, bắt mắt.', 'logo-dk.png'),
(6, 'HK-BIKE', 'Tuy mới ra mắt thời gian gần đây nhưng chắc hẳn người tiêu dùng đã khá quen thuộc với cái tên xe đạp điện Nijia nhờ  sở hữu kiểu dáng quen thuộc với những màu sắc đa dạng, bắt mắt.', 'logo-hkbike.png'),
(7, 'HYUNDAI', 'Tuy mới ra mắt thời gian gần đây nhưng chắc hẳn người tiêu dùng đã khá quen thuộc với cái tên xe đạp điện Nijia nhờ  sở hữu kiểu dáng quen thuộc với những màu sắc đa dạng, bắt mắt.', 'logo-huyndai.png'),
(8, 'X-MEN', 'Tuy mới ra mắt thời gian gần đây nhưng chắc hẳn người tiêu dùng đã khá quen thuộc với cái tên xe đạp điện Nijia nhờ  sở hữu kiểu dáng quen thuộc với những màu sắc đa dạng, bắt mắt.', 'logo-xmen.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `id_brand_product` int(11) NOT NULL,
  `id_type_product` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `unit_price` double NOT NULL,
  `promotion_price` double NOT NULL,
  `manufacturing_date` date NOT NULL,
  `num_likes` int(11) NOT NULL,
  `summary_info` varchar(1000) NOT NULL,
  `detail_info` varchar(10000) NOT NULL,
  `num_products` int(11) NOT NULL,
  `made_in` varchar(100) NOT NULL,
  `thumbnail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `link` varchar(300) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `type_product`
--

CREATE TABLE `type_product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_product`
--

INSERT INTO `type_product` (`id`, `name`, `description`, `image`) VALUES
(1, 'Xe đạp điện', 'Xe đạp máy là xe thô sơ hai bánh có lắp động cơ, vận tốc thiết kế lớn nhất không lớn hơn 25 km/h và khi tắt máy thì đạp xe đi được (kể cả xe đạp điện).', 'eBike.png'),
(2, 'Xe máy điện', 'Xe máy điện là xe gắn máy được dẫn động bằng động cơ điện có công suất lớn nhất không lớn hơn 4 kW, có vận tốc thiết kế lớn nhất không lớn hơn 50 km/h', 'eMotoBike.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand_product`
--
ALTER TABLE `brand_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand_product`
--
ALTER TABLE `brand_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `type_product`
--
ALTER TABLE `type_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
