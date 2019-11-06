-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 06, 2019 at 03:44 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `displayName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `code` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `displayName`, `email`, `password`, `status`, `code`) VALUES
(2, 'NVA', 'nguyenvana@gmail.com', '123456', 0, ''),
(5, 'NVA', 'nguyenvana1@gmail.com', '123456', 0, ''),
(7, 'NVA', 'nguyenvana2@gmail.com', '123456', 0, ''),
(9, 'Nguyễn Văn A', 'nva@gmail.com', '$2y$10$DyekJRdmjSXO8.GVELn7leYi2n6Zqt9TkObbEIUmfcs.1fYYvxhP.', 0, ''),
(10, 'Trần Thị A', 'tranthia@yahoo.com', '$2y$10$QtKtcIWbex17Nep7NKlDkO9u4IpOZdgiednUifH5mWkR/4JYoRoxS', 0, ''),
(13, 'Nguyễn Hữu Linh', 'linh@gmail.com', '$2y$10$bZWQfisB5WPXoK/rwuaECe/tBdkjO/Lg35B9l5FoKYicGpI2xvnCW', 0, 'am88koo98zZ5Sk5o'),
(19, 'Kha Do', 'khado@yahoo.com', '$2y$10$x6AIYuaYbN8YWUrzxElEfeS0uVqp7kxxItwegd527ViRFrWcNnBcm', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
