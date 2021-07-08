-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 07:12 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`) VALUES
(96, 'LG v30', '65000', 'image/lg_v30.jpg', 1, '65000', 'p1002'),
(97, 'MI Note 5 Pro', '15000', 'image/mi_note_5_pro.jpg', 1, '15000', 'p1003');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'sa', 'sourabhp1197@gmail.com', 'a', 'a', '2020-12-31 07:21:34', '2020-12-31 07:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'sourabhp1197@gmail.com', 'ss', '2020-12-29 06:35:03', '2020-12-29 06:35:03'),
(2, 'sourabhp1197@gmail.com', 'ss', '2020-12-29 06:40:54', '2020-12-29 06:40:54'),
(3, 's@gmail.com', 'ss', '2020-12-29 06:41:19', '2020-12-29 06:41:19'),
(4, 'sourabhp1197@gmail.com', 'n', '2020-12-29 06:41:46', '2020-12-29 06:41:46'),
(5, 'sourabhp1197@gmail.com', 'n', '2020-12-29 08:00:42', '2020-12-29 08:00:42'),
(6, 'sourabhp1197@gmail.com', 's', '2020-12-29 09:21:38', '2020-12-29 09:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(1, 'sourabh pawar', 'sourabhp1197@gmail.com', '1111111111', 'a', 'netbanking', 'LG v30(1)', '65000'),
(2, 'sourabh', 'sourabh11@gmail.com', '1212121212', 'swsed', 'cod', 'Apple iPhone X(1)', '90000'),
(3, 'sourabh', 'sourabh11@gmail.com', '1212121212', 'wesqw', 'cod', 'Huawei 10 Pro(1)', '75000'),
(4, 's', 's@gmail.com', 'ss', 's', 'cod', 'LG v30(1), MI Note 5 Pro(1)', '80000');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Apple iPhone X', '90000', 1, 'image/iphone_x.jpg', 'p1000'),
(2, 'Huawei 10 Pro', '75000', 1, 'image/huawei_mate10_pro.jpg', 'p1001'),
(3, 'LG v30', '65000', 1, 'image/lg_v30.jpg', 'p1002'),
(4, 'MI Note 5 Pro', '15000', 1, 'image/mi_note_5_pro.jpg', 'p1003'),
(5, 'Nokia 7 Plus', '25000', 1, 'image/nokia_7_plus.jpg', 'p1004'),
(6, 'One Plus 6', '35000', 1, 'image/one_plus_6.jpg', 'p1005'),
(7, 'Zenfone Max Pro', '15000', 1, 'image/zenfone_m1.jpg', 'p1006'),
(9, 'Samsung A50', '25000', 1, 'image/samsung_a50.jpg', 'p1007');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `mobile_no` int(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `first_name`, `last_name`, `email`, `password`, `confirm_password`, `mobile_no`, `address`, `created_at`, `updated_at`) VALUES
(1, 'sourabh', 'pawar', 'sourabhp1197@gmail.com', 'asdfg', 'sourabh', 1111111111, 'santacruz', '2020-12-31 07:16:09', '2020-12-31 07:16:09'),
(2, 'sourabh', 'pawar', 'a@gmail.com', 'asdf', 'a', 1111111111, 's', '2020-12-31 07:18:31', '2020-12-31 07:18:31'),
(3, 'sourabh', 'pawar', 'a1@gmail.com', 'a', 'a1', 1111111111, 'a', '2020-12-31 07:19:45', '2020-12-31 07:19:45'),
(4, 'sourabh', 'pawar', 'sourabh11@gmail.com', '$ourabh11', '$ourabh11', 1212121212, 'hdhdh', '2021-07-07 11:24:42', '2021-07-07 11:24:42'),
(5, 's', 'p', 'sp22@gmail.com', 'qwerty', 'qwerty', 1212121212, 'qwerty', '2021-07-07 11:30:19', '2021-07-07 11:30:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
