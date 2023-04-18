-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:5306
-- Generation Time: Apr 18, 2023 at 10:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addtocart`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `discount`, `product_image`) VALUES
(33, 'Green Archer Windbreaker Jacket', 1500, 2500, 'uploads/Green Archer Windbreaker Jacket.png'),
(34, 'LS Varsity Jacket', 2500, 3500, 'uploads/LS Varsity Jacket.png'),
(35, 'La Salle Hoodie', 850, 1000, 'uploads/La Salle Hoodie.png'),
(36, 'La Salle  Bucket Hat', 750, 950, 'uploads/La Salle Bucket Hat.png'),
(37, 'La Salle Shirt Green Animo', 550, 750, 'uploads/La Salle Shirt Green Animo.png'),
(38, 'Animo La Salle Shirt Variant', 550, 750, 'uploads/Animo La Salle Shirt Variant.png'),
(39, 'DLSU Socks Elite', 550, 750, 'uploads/DLSU Socks Elite.png'),
(40, 'La Salle Shirt Dark Green Variant 1', 750, 1000, 'uploads/La Salle Shirt Dark Green Variant 1.png'),
(41, 'La Salle Shirt Dark Green Variant 2 Elite', 850, 1350, 'uploads/La Salle Shirt Dark Green Variant 2 Elite.png'),
(42, 'Green Archer Baseball Cap', 850, 1200, 'uploads/Green Archer Baseball Cap.png'),
(43, 'La Salle Baseball Cap Elite', 1500, 2000, 'uploads/La Salle Baseball Cap Ellite .png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
