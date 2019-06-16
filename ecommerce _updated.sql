-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2019 at 10:52 AM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(2, '::1', 0),
(3, '::1', 0),
(4, '::1', 0),
(5, '::1', 0),
(7, '::1', 0),
(9, '::1', 0),
(10, '::1', 0),
(11, '::1', 0),
(13, '::1', 0);

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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(100) NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`) VALUES
(1, '::1', 'jasim ali', 'jasimarifali@gmail.com', '54646', 'Pakistan', 'karachi', '3472540245', 'r121/1 sector 14a north nazimabad, same');

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
(2, 1, 'Unstiched', 'Unstitched fabric light blue', 1700, 'Unstitched fabric light blue  ', 'unstiched_fabric2.jpg', 'unstitched, blue'),
(3, 1, 'Unstiched', 'Unstitched fabric gray', 2000, 'Unstitched fabric gray   ', 'unstiched_fabric 1.jpg', 'unstitched gray'),
(4, 1, 'Unstiched', 'Unstitched fabric  brown', 2000, 'Unstitched fabric  brown  ', 'unstiched_fabric3.jpg', 'unstitched brown'),
(5, 1, 'Unstiched', 'Unstitched fabric black', 1200, 'Unstitched fabric black   ', 'unstiched_fabric4.jpg', 'unstitched black'),
(6, 1, 'kurta shalwar', 'Kurta shalwar black', 2500, 'Kurta shalwar black   ', 'black-kurta-white-salwar.jpg', 'kurta shalwar black'),
(7, 2, 'Kurta Shalwar', 'black', 3000, ' black  ', 'women_stitched_black.jpg', 'black women'),
(8, 1, 'kurta shalwar', 'Kurta shalwar white', 2500, 'Kurta shalwar white   ', 'kurta-shalwar-white.jpg', 'kurta shalwar white'),
(9, 1, 'kurta shalwar', 'Kurta shalwar navy blue', 2700, 'Kurta shalwar navy blue   ', 'kurta-shalwar-navy-blue.jpg', 'Kurta shalwar navy blue'),
(10, 1, 'Waistcoat', 'Waist coat black', 3000, 'Waist coat black   ', 'waitcoat-black.jpg', 'Waist coat black'),
(11, 1, 'Waistcoat', 'Waist coat maroon', 3500, 'Waist coat maroon   ', 'waitcoat-maroon.jpg', 'Waist coat maroon'),
(12, 2, 'Top Picks', 'Cotton White', 3700, 'Cotton White ', 'women_stitched_white.jpg', 'Cotton White'),
(13, 2, 'Top Picks', 'Red sleeveless', 4000, 'Red sleeveless   ', 'women_stitched_sleeveless.jpg', 'Red sleeveless'),
(14, 2, 'Kurta Shalwar', 'Cotton Brown', 3500, 'Brown kurta shalwar women  ', 'women_stitched.jpg', 'Brown Cotton'),
(15, 6, '', 'Cotton Red', 5000, 'Cotton Red  ', 'women_unstitched.jpg', 'new'),
(16, 2, 'Misc', 'Cotton Red', 5000, 'Cotton Red  ', 'women_unstitched.jpg', 'Miscellaneous '),
(17, 2, 'Top Picks', 'white', 4500, 'white dress', 'women_stitched_white.jpg', 'white dress');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `type_id` int(100) NOT NULL,
  `type_title` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`type_id`, `type_title`) VALUES
(1, 'Top Picks'),
(2, 'Unstiched'),
(3, 'Waistcoat'),
(4, 'kurta shalwar');

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
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

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
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `men`
--
ALTER TABLE `men`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `women`
--
ALTER TABLE `women`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
