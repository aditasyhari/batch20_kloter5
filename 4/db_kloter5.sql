-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 26, 2020 at 03:34 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kloter5`
--

-- --------------------------------------------------------

--
-- Table structure for table `post_tb`
--

CREATE TABLE `post_tb` (
  `id` int(11) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_tb`
--

INSERT INTO `post_tb` (`id`, `content`, `image`, `id_user`) VALUES
(1, 'Makanan 1', 'cat-2.jpg', 9),
(2, 'Makanan 2', 'cat-3.jpg', 10),
(4, 'Makanan 3', 'cat-4.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users_tb`
--

CREATE TABLE `users_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_tb`
--

INSERT INTO `users_tb` (`id`, `name`, `photo`, `email`, `password`) VALUES
(9, 'Aditya', 'profile.png', 'adit.asyhari16@gmail.com', 'qwerty'),
(10, 'Asyhari', 'logo_bacode.png', 'aditkorostar321@gmail.com', 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post_tb`
--
ALTER TABLE `post_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users_tb`
--
ALTER TABLE `users_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_tb`
--
ALTER TABLE `post_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_tb`
--
ALTER TABLE `users_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post_tb`
--
ALTER TABLE `post_tb`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users_tb` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
