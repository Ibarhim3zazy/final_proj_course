-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 12:43 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_store_clothes`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_address_page`
--

CREATE TABLE `add_address_page` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone_num_2` varchar(11) DEFAULT NULL,
  `address` varchar(150) NOT NULL,
  `additional_info` text DEFAULT NULL,
  `region` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `add_prod_page`
--

CREATE TABLE `add_prod_page` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_name` varchar(20) NOT NULL,
  `category` varchar(15) NOT NULL,
  `brand` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `price_sale` int(11) DEFAULT NULL,
  `specifications` text NOT NULL,
  `prod_image` text NOT NULL,
  `prod_image_a` text NOT NULL,
  `prod_image_b` text NOT NULL,
  `prod_image_c` text NOT NULL,
  `add_size` varchar(6) NOT NULL,
  `product_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `add_prod_page`
--

INSERT INTO `add_prod_page` (`id`, `user_id`, `prod_name`, `category`, `brand`, `description`, `price`, `price_sale`, `specifications`, `prod_image`, `prod_image_a`, `prod_image_b`, `prod_image_c`, `add_size`, `product_date`) VALUES
(1, 1, 'RELAXED FIT', 'Men', 'Nike', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into', 1000, 500, 'a b c d e f g h', 'img/prod_test.jpg', 'img/close.png', 'img/close.png', 'img/close.png', 'M', '2021-10-28');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lang` varchar(8) NOT NULL,
  `daily_newsletters` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `profile_info`
--

CREATE TABLE `profile_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `birthday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `f_name` varchar(15) NOT NULL,
  `l_name` varchar(15) NOT NULL,
  `e_mail` varchar(45) NOT NULL,
  `pass` tinytext NOT NULL,
  `phone_num` varchar(11) NOT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `birthday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `f_name`, `l_name`, `e_mail`, `pass`, `phone_num`, `gender`, `birthday`) VALUES
(1, 'ibrahim', 'azazy', 'ibrahim@gmail.com', '01145452440', '01145452440', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`id`, `prod_id`, `unit_price`, `user_id`) VALUES
(1, 1, 200, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_address_page`
--
ALTER TABLE `add_address_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_prod_page`
--
ALTER TABLE `add_prod_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_info`
--
ALTER TABLE `profile_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone_num` (`phone_num`),
  ADD UNIQUE KEY `e_mail` (`e_mail`);

--
-- Indexes for table `user_order`
--
ALTER TABLE `user_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_address_page`
--
ALTER TABLE `add_address_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_prod_page`
--
ALTER TABLE `add_prod_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile_info`
--
ALTER TABLE `profile_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_order`
--
ALTER TABLE `user_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
