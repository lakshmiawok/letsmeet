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
-- Table structure for table `post_uploads`
--

CREATE TABLE `post_uploads` (
  `post_id` int(11) NOT NULL,
  `post_email` varchar(255) NOT NULL,
  `post_upload` text NOT NULL,
  `posted_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post_uploads`
--

INSERT INTO `post_uploads` (`post_id`, `post_email`, `post_upload`, `posted_time`) VALUES
(1, 'sushjk6@gmail.com', 'hi ... \nhow are you all this is the new test post.', '2018-04-14 12:48:12'),
(2, 'sneha@gmail.com', 'hey the first post is uploaded successfully and now we are ready to post our second post .... here we go...!', '2018-04-14 12:48:12'),
(3, 'sushjk6@gmail.com', 'wow... our second post also uploaded and displayed successfully ... let\'s try our 3rd post. here we go ..?', '2018-04-14 12:48:12'),
(4, 'sushjk6@gmail.com', 'sadasjdgajsdas\nsadasjdgajsdas\nsadasjdgajsdassadasjdgajsdassadasjdgajsdassadasjdgajsdassadasjdgajsdassadasjdgajsdassadasjdgajsdas\nsadasjdgajsdassadasjdgajsdassadasjdgajsdassadasjdgajsdas\nsadasjdgajsdassadasjdgajsdassadasjdgajsdassadasjdgajsdas\n\n\nsadasjdgajsdassadasjdgajsdassadasjdgajsdassadasjdgajsdas\nsadasjdgajsdas\nsadasjdgajsdas\nsadasjdgajsdas\nsadasjdgajsdas\nsadasjdgajsdas\nsadasjdgajsdas\nsadasjdgajsdassdassadasjdgajsda sadasjdgajsdassadasjdgajsdassadasjdgajsdassadasjdgajsdas sadasjdgajsdassadasjdgajsdasssadasjdgajsdassadasjdgajsdassadasjdgajsdassadasjdgajsdas sadasjdgajsdas sadasjdgajsdas sadasjdgajsdas sadasjdgajsdas sadasjdgajsdas sadasjdgajsdas sadasjdgajsdas sadasjdgajsdassadasjdgajsdassadasjdgajsdassadasjdgajsdas sadasjdgajsdas sadasjdgajsdassadasjdgajsdas sadasjdgajsdas sadasjdgajsdas sadasjdgajs', '2018-04-14 12:48:12'),
(5, 'sneha@gmail.com', 'hi how are you ... sneha', '2018-04-14 12:48:12'),
(6, 'sneha@gmail.com', 'hi\r\n', '2018-04-14 12:48:12'),
(7, 'sushjk6@gmail.com', 'enduku atla chustunnav jaffa vaishnaving', '2018-04-14 16:24:38'),
(8, 'sushjk6@gmail.com', 'malli jaffa ', '2018-04-14 16:25:03'),
(9, 'sushjk6@gmail.com', 'hey', '2018-04-16 11:11:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post_uploads`
--
ALTER TABLE `post_uploads`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_uploads`
--
ALTER TABLE `post_uploads`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
