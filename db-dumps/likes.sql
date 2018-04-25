-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2018 at 06:14 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code_chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `liked_email` varchar(255) NOT NULL,
  `posts_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `liked_email`, `posts_id`) VALUES
(1, 'sushjk6@gmail.com', 1),
(2, 'sushjk6@gmail.com', 3),
(3, 'sushjk6@gmail.com', 4),
(4, 'sushjk6@gmail.com', 9),
(5, 'sushjk6@gmail.com', 9),
(6, 'sushjk6@gmail.com', 9),
(7, 'sushjk6@gmail.com', 9),
(8, 'sushjk6@gmail.com', 9),
(9, 'sushjk6@gmail.com', 9),
(10, 'sushjk6@gmail.com', 9),
(11, 'sushjk6@gmail.com', 7),
(12, 'sushjk6@gmail.com', 8),
(13, 'sushjk6@gmail.com', 1),
(14, 'sushjk6@gmail.com', 9),
(15, 'sushjk6@gmail.com', 8),
(16, 'sushjk6@gmail.com', 4),
(17, 'sushjk6@gmail.com', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
