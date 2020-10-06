-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2020 at 06:28 AM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_Uniteddemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `lat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `lat`) VALUES
(2, 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` varchar(10) NOT NULL,
  `name` varchar(44) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `image` text NOT NULL,
  `dd` int(11) NOT NULL,
  `expiry` varchar(44) NOT NULL,
  `availability` varchar(44) NOT NULL,
  `status` int(11) NOT NULL,
  `ref` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `discount`, `image`, `dd`, `expiry`, `availability`, `status`, `ref`) VALUES
('', 'yjuy', 6, 0, '/admin/product/uploads/bottle-grey-750.jpg', 3, '042', 'Available', 1, 'admin'),
('5ea2d39f9a', 'Samosa', 100, 3, '/admin/product/uploads/samosa-recipe.jpg', 1, 'Nope', 'Available', 0, 'admin'),
('5ea2d44f2e', 'Chicken Biryani', 129, 1, '/vendor/product/uploads/Chicken-Biryani-500x500.jpg', 1, 'Nope', 'Available Soon<', 1, '8'),
('5ea2d9c1d7', 'Chicken 65', 199, 12, '/admin/product/uploads/62821360.jpg', 1, '1', 'Available Soon<', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `full_name` varchar(44) NOT NULL,
  `address` text NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(225) NOT NULL,
  `ppm` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL,
  `isVerified` tinyint(1) NOT NULL,
  `profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `full_name`, `address`, `contact`, `email`, `ppm`, `password`, `isVerified`, `profile`) VALUES
(8, 'Medapati Vijay Reddy', 'Door no:6-138,Devi Center,uui,Machavaram,533261', 9876543210, 'admin', 'DebitCard', 'admin123', 1, '/vendor/uploads/660478.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
