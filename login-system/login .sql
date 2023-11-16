-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 04:07 AM
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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `datetime`) VALUES
(1, 'kian', '2022-12-11 16:20:01'),
(2, 'asd', '2022-12-11 16:21:13'),
(37, 'qwe', '2022-12-11 19:30:59'),
(38, 'kian', '2022-12-11 19:31:49'),
(39, 'fgh', '2022-12-11 19:33:22'),
(40, 'cvb', '2022-12-11 19:42:18'),
(41, 'cvb', '2022-12-11 19:43:37'),
(42, 'cvb', '2022-12-11 19:44:54'),
(43, 'cvb', '2022-12-11 19:45:27'),
(44, 'asd', '2022-12-11 19:52:02'),
(45, 'asd', '2022-12-11 19:53:17'),
(46, 'cvb', '2022-12-11 20:25:56'),
(47, 'asd', '2022-12-11 20:34:47'),
(48, 'kian', '2022-12-11 20:38:51'),
(49, 'kian', '2022-12-11 20:43:44'),
(50, 'kian', '2022-12-11 20:52:14'),
(51, 'kian', '2022-12-11 20:55:15'),
(52, 'kian', '2022-12-11 20:55:57'),
(53, 'uio', '2022-12-11 21:04:01'),
(54, 'qwerty', '2022-12-11 21:05:31'),
(55, 'qwerty', '2022-12-11 21:08:13'),
(56, 'asdfg', '2022-12-11 21:14:05'),
(57, 'hjk', '2022-12-11 21:18:23'),
(58, 'kian', '2022-12-11 21:19:15'),
(59, 'tyr', '2022-12-11 21:21:40'),
(60, 'chachi', '2022-12-11 21:24:37'),
(61, 'xcv', '2022-12-11 21:54:47'),
(62, 'cvb', '2022-12-11 21:56:11'),
(63, 'fgh', '2022-12-11 22:43:49'),
(64, 'xcv', '2022-12-11 22:52:58'),
(65, 'qwe', '2022-12-11 23:01:42'),
(66, 'fgh', '2022-12-11 23:04:53'),
(67, 'xcv', '2022-12-11 23:39:09'),
(68, 'fgh', '2022-12-12 08:07:22'),
(69, 'qwe', '2022-12-12 08:10:27'),
(70, 'xcv', '2022-12-12 08:10:46'),
(71, 'uio', '2022-12-12 08:41:59'),
(72, 'uio', '2022-12-12 09:02:16'),
(73, 'xcv', '2022-12-12 09:05:11'),
(74, 'fgh', '2022-12-12 09:06:18'),
(75, 'uio', '2022-12-12 09:20:24'),
(76, 'uio', '2022-12-12 09:26:18'),
(77, 'uio', '2022-12-12 09:36:25'),
(78, 'uio', '2022-12-12 09:47:20'),
(79, 'uio', '2022-12-12 09:48:54'),
(80, 'uio', '2022-12-12 09:49:43'),
(81, 'uio', '2022-12-12 10:14:31'),
(82, 'fgh', '2022-12-12 10:17:20'),
(83, 'asd', '2022-12-12 10:22:49'),
(84, 'nani', '2022-12-12 10:25:47'),
(85, 'uio', '2022-12-12 10:49:29'),
(86, 'kin', '2022-12-12 10:58:59'),
(87, 'rasel', '2022-12-12 11:01:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
