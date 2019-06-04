-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2019 at 01:14 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Men'),
(2, 'Women'),
(5, 'Kids'),
(6, 'New Arrival');

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

CREATE TABLE `men` (
  `id` int(100) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men`
--

INSERT INTO `men` (`id`, `type`) VALUES
(1, 'Top Picks'),
(2, 'Unsitiched'),
(3, 'Kurta Shalwar'),
(4, 'Waistcoat');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_type` tinytext,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_type`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(2, 2, 'Men', 'Unstitched fabric light blue', 1000, '   ', 'unstiched_fabric2.jpg', 'unstitched '),
(3, 2, 'Men', 'Unstitched fabric  brown', 1200, '   ', 'unstiched_fabric3.jpg', 'unstitched '),
(4, 2, 'Men', 'Unstitched fabric grey', 1250, '   ', 'unstiched_fabric 1.jpg', 'unstitched '),
(5, 2, 'Men', 'Unstitched fabric  cottont', 1500, '   ', 'unstiched_fabric4.jpg', 'unstitched '),
(6, 4, 'Men', 'Waist coat', 3500, '   ', 'waitcoat-black.jpg', 'waistcoat'),
(7, 4, 'Men', 'Waist coat maroon', 4000, '   ', 'waitcoat-maroon.jpg', 'waistcoat'),
(8, 3, 'Men', 'Kurta shalwar black', 3500, '   ', 'black-kurta-white-salwar.jpg', 'kurta shalwar');

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `id` int(100) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`id`, `type`) VALUES
(1, 'Top Picks'),
(2, 'Unstiched'),
(3, 'Kurta Shalwar'),
(4, 'Misc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `men`
--
ALTER TABLE `men`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `men`
--
ALTER TABLE `men`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `women`
--
ALTER TABLE `women`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
