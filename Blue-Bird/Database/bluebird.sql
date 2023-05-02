-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 08:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bluebird`
--

-- --------------------------------------------------------

--
-- Table structure for table `buser`
--

CREATE TABLE `buser` (
  `id` int(11) NOT NULL,
  `Businame` varchar(100) NOT NULL,
  `Busilink` varchar(120) NOT NULL,
  `Uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buser`
--

INSERT INTO `buser` (`id`, `Businame`, `Busilink`, `Uname`, `email`, `password`) VALUES
(1, 'Kamrul Shop', 'www.kamrul.com', 'kamrul447', 'shop@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `qnty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `pid`, `uid`, `qnty`) VALUES
(1, 1, 10, 5),
(2, 4, 12, 6),
(3, 3, 10, 5),
(4, 3, 10, 6);

-- --------------------------------------------------------

--
-- Table structure for table `merchorder`
--

CREATE TABLE `merchorder` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `Date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merchorder`
--

INSERT INTO `merchorder` (`id`, `pid`, `bid`, `Date`) VALUES
(1, 1, 1, '20-04-2023'),
(2, 1, 1, '20-04-2023');

-- --------------------------------------------------------

--
-- Table structure for table `morder`
--

CREATE TABLE `morder` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `name`, `price`, `desc`) VALUES
(1, 'Ardino', 500, 'good qulity'),
(2, 'Ardino', 500, 'good qulity'),
(3, 'Ardino onu', 500, 'good qulity'),
(4, 'Ardino Mega', 560, 'good qulity');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `phone`, `password`, `gender`, `dob`) VALUES
(1, '[proma]', 'p@gmail.com', '[123]', '123', NULL, NULL),
(8, 'MD. KAMRUL ISLAM', 'nijumkamrul447@gmail.com', '123', '123', NULL, NULL),
(9, 'MD. KAMRUL ISLAM', ' kamrul@gmail.com', '', '123', NULL, NULL),
(10, 'MD. KAMRUL ISLAM', 'kamrul@gmail.com', '+8801309603998', '123', NULL, NULL),
(11, 'proma', 'proma@gmail.com', '+8801309603998', '123', NULL, NULL),
(12, 'Islam', 'sami@gmail.com', '+8801309603998', '123', NULL, NULL),
(13, 'proma', 'cany@gmail.com', '+8801309603998', '123', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buser`
--
ALTER TABLE `buser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `merchorder`
--
ALTER TABLE `merchorder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bid` (`bid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `morder`
--
ALTER TABLE `morder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buser`
--
ALTER TABLE `buser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `merchorder`
--
ALTER TABLE `merchorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `morder`
--
ALTER TABLE `morder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `products` (`pid`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `merchorder`
--
ALTER TABLE `merchorder`
  ADD CONSTRAINT `merchorder_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `buser` (`id`),
  ADD CONSTRAINT `merchorder_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `products` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
