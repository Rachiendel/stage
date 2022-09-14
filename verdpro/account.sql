-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2022 at 11:49 AM
-- Server version: 10.1.48-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Databasesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(12) NOT NULL,
  `jaar` year(4) NOT NULL,
  `verbruik` int(12) NOT NULL,
  `totaalverbruik` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `jaar`, `verbruik`, `totaalverbruik`) VALUES
(1, 2019, 243, 243),
(2, 2019, 216, 459),
(3, 2019, 209, 668),
(4, 2019, 161, 829),
(5, 2019, 93, 922),
(6, 2019, 34, 956),
(7, 2019, 15, 971),
(8, 2019, 17, 988),
(9, 2019, 36, 1024),
(10, 2019, 153, 1177),
(11, 2019, 163, 1340),
(12, 2019, 232, 1572),
(13, 2020, 273, 273),
(14, 2020, 218, 491),
(15, 2020, 179, 670),
(16, 2020, 156, 826),
(17, 2020, 99, 925),
(18, 2020, 29, 954),
(19, 2020, 17, 971),
(20, 2020, 16, 987),
(21, 2020, 40, 1027),
(22, 2020, 140, 1167),
(23, 2020, 148, 1315),
(24, 2020, 241, 1556),
(25, 2021, 279, 279),
(26, 2021, 235, 514),
(27, 2021, 196, 710),
(28, 2021, 162, 872),
(29, 2021, 96, 968),
(30, 2021, 31, 999),
(31, 2021, 17, 1016),
(32, 2021, 16, 1032),
(33, 2021, 37, 1069),
(34, 2021, 130, 1199),
(35, 2021, 149, 1348),
(36, 2021, 235, 1583);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
