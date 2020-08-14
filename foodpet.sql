-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2019 at 08:36 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodpet`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodvol`
--

CREATE TABLE `foodvol` (
  `id` int(11) NOT NULL,
  `device_id` varchar(15) NOT NULL,
  `date_food` datetime NOT NULL,
  `food_vol` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foodvol`
--

INSERT INTO `foodvol` (`id`, `device_id`, `date_food`, `food_vol`) VALUES
(1, 'NodeMCU', '2019-05-21 04:35:01', 0.3),
(2, 'NodeMCU', '2019-05-21 09:17:54', 0.3),
(3, 'NodeMCU', '2019-05-24 03:13:19', 0.3),
(4, 'NodeMCU', '2019-05-24 03:25:17', 0.1),
(5, 'NodeMCU', '2019-05-24 03:32:24', 0.1),
(6, 'NodeMCU', '2019-05-24 03:36:36', 0.2),
(7, 'NodeMCU', '2019-05-24 03:36:59', 0.4),
(8, 'NodeMCU', '2019-05-24 03:48:51', 0.1),
(9, 'NodeMCU', '2019-05-24 08:53:05', 0.1),
(10, 'NodeMCU', '2019-05-24 08:54:20', 0.1),
(11, 'NodeMCU', '2019-05-24 08:55:21', 0.1),
(12, 'NodeMCU', '2019-05-24 08:56:08', 0.1),
(13, 'NodeMCU', '2019-05-24 09:28:01', 0),
(14, 'NodeMCU', '2019-05-24 09:28:13', 0),
(15, 'NodeMCU', '2019-05-24 09:28:18', 0),
(16, 'NodeMCU', '2019-05-24 09:28:25', 0),
(17, 'NodeMCU', '2019-05-24 09:28:28', 0),
(18, 'NodeMCU', '2019-05-24 09:32:25', 0.2),
(19, 'NodeMCU', '2019-05-24 09:47:32', 0),
(20, 'NodeMCU', '2019-05-24 09:47:40', 0),
(21, 'NodeMCU', '2019-05-24 09:47:55', 0.6),
(22, 'NodeMCU', '2019-05-24 09:48:27', 0.6),
(23, 'NodeMCU', '2019-05-25 12:52:22', 0.1),
(24, 'NodeMCU', '2019-05-25 12:53:25', 0.2),
(25, 'NodeMCU', '2019-05-25 01:23:55', 0.1),
(26, 'NodeMCU', '2019-05-25 01:24:20', 0.2),
(27, 'NodeMCU', '2019-05-25 01:25:36', 0.4),
(28, 'NodeMCU', '2019-05-25 01:25:48', 0.2),
(29, 'NodeMCU', '2019-05-25 01:25:55', 0.2),
(30, 'NodeMCU', '2019-05-25 01:26:24', 0.3),
(31, 'NodeMCU', '2019-05-25 01:34:22', 0.3),
(32, 'NodeMCU', '2019-05-25 01:35:08', 0.3),
(33, 'NodeMCU', '2019-05-25 01:37:07', 0.3),
(34, 'NodeMCU', '2019-05-25 01:38:04', 0.1),
(35, 'NodeMCU', '2019-05-25 01:41:16', 0.1),
(36, 'NodeMCU', '2019-05-25 02:50:37', 0.03),
(37, '', '2019-05-25 02:53:42', 0.03),
(38, '', '2019-05-25 02:54:20', 0.03),
(39, 'NOdeMCU', '2019-05-25 10:51:56', 0),
(40, 'NOdeMCU', '2019-05-25 10:52:19', 0.03),
(41, 'NOdeMCU', '2019-05-25 10:57:42', 0.03),
(42, 'NOdeMCU', '2019-05-25 11:01:51', 0.02),
(43, 'NOdeMCU', '2019-05-25 12:04:30', 0.01),
(44, 'NOdeMCU', '2019-05-25 12:18:02', 0.18),
(45, 'NOdeMCU', '2019-05-25 12:20:25', 0.18),
(48, 'NodeMCU', '2019-01-24 05:30:00', 8.5),
(47, 'test', '2019-06-14 08:20:00', 0.8),
(49, 'NodeMCU', '2019-02-15 06:30:00', 9),
(50, 'NodeMCU', '2019-03-20 07:38:00', 0.58),
(51, 'NodeMCU', '2019-04-19 16:34:00', 6.256);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `device_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `username`, `password`, `device_id`) VALUES
(3, 'TopKungO', 'top', '123456', 'nodmcu'),
(4, 'admin', 'admin', '123456', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foodvol`
--
ALTER TABLE `foodvol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foodvol`
--
ALTER TABLE `foodvol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
