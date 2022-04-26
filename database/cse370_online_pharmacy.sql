-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220423.6d54ac471a
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2022 at 06:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse370_online_pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `chemical` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `requires_prescription` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `name`, `vendor`, `chemical`, `price`, `stock`, `requires_prescription`) VALUES
(1, 'Medicine A', 'Square', 'Sodium Carbonate', 20, 80, 0),
(2, 'Medicine B', 'Incepta', 'Chemical B', 38, 20, 0),
(3, 'Medicine c', 'Beximco', 'Chemical C', 10, 10, 0),
(4, 'Medicine D', 'Square', 'Chemical D', 25, 100, 0),
(5, 'Medicine E', 'Incepta', 'Chemical E', 55, 100, 1),
(6, 'Alatrol', 'Square', 'Cemical E', 25, 123, 0),
(7, 'abcd', 'efg', 'cdf', 45, 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `approved_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `quantity`, `product_id`, `user_id`, `price`, `approved_status`) VALUES
(1, 1, 1, 1, 20, 1),
(2, 4, 2, 1, 140, 1),
(3, 1, 1, 1, 20, 0),
(4, 1, 5, 1, 55, 0),
(5, 4, 1, 1, 80, 0),
(6, 6, 2, 1, 228, 0),
(7, 7, 6, 7, 175, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `address`, `user_type`) VALUES
(1, 'Akkas', 'Ali', 'akkasali@gmail.com', '123', 'Dhaka', 1),
(2, 'admin', 'admin', 'admin@pharmacy.com', '123', '123', 0),
(3, 'Abdul', 'Kuddus', 'abdulkuddus@gmail.com', 'abc', 'Dhaka', 1),
(4, 'Rahim', 'Khan', 'rahimkhan@gmail.com', '123', '123', 1),
(5, 'Abdul', 'baten', 'baten@gmail.com', '123', 'Dhaka', 1),
(6, 'Shouvick', 'Roy', 'roy@gmail.com', 'abc', 'Chittagong', 1),
(7, 'Ejaz', 'MD.', 'ejaz@gmai.com', '123', 'Dhaka', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



