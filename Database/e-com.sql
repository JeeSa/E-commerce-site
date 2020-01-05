-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2017 at 09:00 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-com`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

CREATE TABLE `add_to_cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_to_cart`
--

INSERT INTO `add_to_cart` (`id`, `product_id`) VALUES
(1, 7),
(2, 6),
(3, 7),
(4, 7),
(5, 7),
(6, 6),
(7, 0),
(8, 0),
(9, 17),
(10, 18),
(11, 17),
(12, 23),
(13, 18);

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`) VALUES
(1, 'abhi', 'pagla', 'abhipagla@gmail.com', 'pagla', '12345678'),
(2, 'momin', 'abhi', 'mominabhi@gmail.com', 'abhi', '03873565t654'),
(3, 'shdf', 'nsddh', 'my@gmail.com', '1', '7373');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `categories` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`) VALUES
(1, 'men'),
(2, 'women'),
(3, 'shoe'),
(4, 'accessories'),
(5, 'bag'),
(6, 'baby-boy'),
(7, 'baby-girl');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `categories` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `categories`, `price`, `amount`, `img`) VALUES
(16, 'Lady  Bag', 'bag', 2000, 4, '44cb8a6223820e85a619cfd8c4f96e1f.jpg'),
(17, 'Green-T-Shirt ', 'men', 500, 5, '15117-c-large.jpg'),
(18, 'Blue-T-Shirt', 'men', 335, 5, '21758a4d2b80e80802e0b08e7b2eed85.jpg'),
(23, 'Watch-Man', 'accessories', 4000, 5, 'screen-shot-2012-10-19-at-1-40-40-pm.png'),
(24, 'Jeans Pant', 'men', 2500, 5, 'Shift_Torque_Jeans.jpg'),
(25, 'Formal-Shirt', 'men', 3800, 10, 'Shirt-men-1.jpg'),
(26, 'Gabardine-Pant', 'men', 2100, 4, 'taylor.jpg'),
(27, 'school-Bang', 'bag', 2200, 6, 'trendy-yellow-backpack-laptop-bag.jpg'),
(28, 'Watch-Man', 'accessories', 7000, 4, 'watch.jpg'),
(31, 'Laby_Tops', 'women', 2000, 5, '8961-10087_0.jpg'),
(33, 'Convas_Man', 'shoe', 3000, 10, 'Canvas-font.jpg'),
(34, 'Casual_Shoe_Man', 'shoe', 10000, 15, 'casual-leisure-flats.jpg'),
(35, 'Shoe_Laby', 'shoe', 7000, 20, 'Category-1.jpg'),
(36, 'Graceful_tops_lady', 'women', 9000, 4, 'Graceful.jpg'),
(37, 'Watch_Lady', 'accessories', 10000, 100, 'lad.jpg'),
(38, 'Casual_Show_Man', 'shoe', 2900, 29, 'shoe.jpg'),
(39, 'Walet_Man', 'accessories', 1000, 20, 'wa.jpg'),
(40, 'Walet_Man', 'accessories', 2000, 20, 'Wallets-For-Men-7.jpg'),
(41, 'LAdy_Gorgeous_tops', 'women', 7500, 20, 'tops.jpg'),
(42, 'Baby_Girl', 'baby-girl', 2300, 3, 'unnamed.jpg'),
(43, 'Three Piece', 'women', 3000, 4, '41Ua72snBoL._SY445_-500x500.jpg'),
(44, 'basgf', 'women', 4000, 3, '8961-10087_0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` int(20) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`) VALUES
(3, 'abhi', 'sjjs', 'hdshh@gmail.com', 0, 2399848),
(4, 'momin', 'abhi', 'mominabhi@gmail.com', 0, 1682746455),
(5, 'abhi', 'mz', 'abhi@gmail.com', 1, 9488854),
(6, 'anup', 'majumdar', 'anup@gmail.com', 1, 197565454);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
