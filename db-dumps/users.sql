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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `gender`, `slug`, `email`, `password`, `remember_token`, `user_image`, `city`, `status`, `created_at`, `updated_at`) VALUES
(1, 'jabir', 'khan', 'male', 'jabir-khan', 'sushjk6@gmail.com', '4297f44b13955235245b2497399d7a93', 'NULL', 'assets/images/male.png', 'Hyderabad', 1, '2018-04-12', '2018-04-12'),
(2, 'pathan', 'khan', 'male', 'pathan-khan', 'jabeerkhan93@gmail.com', '4297f44b13955235245b2497399d7a93', 'NULL', 'assets/images/male.png', 'Hyderabad', 1, '2018-04-12', '2018-04-12'),
(3, 'jasmine', 'khan', 'female', 'jasmine-khan', 'jasmine@gmail.com', '4297f44b13955235245b2497399d7a93', '52b4cb2d67033670fc25f3773e1fb582', 'assets/images/female.png', 'Hyderabad', 1, '2018-04-13', '2018-04-13'),
(4, 'sneha', 'jyothi', 'female', 'sneha-jyothi', 'sneha@gmail.com', '4297f44b13955235245b2497399d7a93', 'NULL', 'assets/images/female.png', 'Hyderabad', 1, '2018-04-13', '2018-04-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
