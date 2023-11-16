-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 04:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL DEFAULT 'user',
  `age` varchar(20) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `bday` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `username`, `email`, `password`, `user_type`, `age`, `phone`, `address`, `bday`) VALUES
(1, 'kian', 'kian@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', '19', '0987534543', 'Pampanga', '11-08-2003'),
(2, 'qwe', 'qwe@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', '0', '', '', ''),
(3, 'asd', 'asd@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', '0', '', '', ''),
(92, 'zxc', 'zxc@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', '0', '', '', ''),
(93, '', 'fgh@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', '65', '12321313', 'qewqewqq', '11-08-2003'),
(94, 'cvb', 'cvb@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', '0', '', '', ''),
(95, 'uio', 'uio@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', '45', 'dsadsa', 'rtytrytry', '11-08-2003'),
(96, 'chachi', 'chachi@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', '69', '6969696969', '69Street', '11-12-1969'),
(97, 'nani', 'nani@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', '190', '6876876', '321313131', '11-08-2003'),
(98, 'kin', 'kin@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', '122', '355', 'sdfdsf', '32313'),
(99, 'kianrasel', 'rasel@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', '23', '55555', 'gdfgfdgfd', '1111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
