-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2018 at 06:58 PM
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
-- Table structure for table `dislikes`
--

CREATE TABLE `dislikes` (
  `id` int(11) NOT NULL,
  `disliked_email` varchar(255) NOT NULL,
  `posts_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `friend_requests`
--

CREATE TABLE `friend_requests` (
  `conversation_id` int(11) NOT NULL,
  `req_sender` varchar(255) NOT NULL,
  `req_acceptor` varchar(255) NOT NULL,
  `friend_status` enum('FRIEND','PENDING','BLOCK','') DEFAULT NULL,
  `friends_from` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `friend_requests`
--

INSERT INTO `friend_requests` (`conversation_id`, `req_sender`, `req_acceptor`, `friend_status`, `friends_from`) VALUES
(1, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'FRIEND', '2018-04-20'),
(2, 'jabeer.928@awok.in', 'sushjk6@gmail.com', 'FRIEND', '2018-04-20'),
(4, 'sushjk6@gmail.com', 'vaishnaving218@gmail.com', 'FRIEND', '2018-04-20'),
(5, 'aasmanaz442@gmail.com', 'sushjk6@gmail.com', 'PENDING', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `image_uploads`
--

CREATE TABLE `image_uploads` (
  `upload_id` int(11) NOT NULL,
  `upload_email` varchar(255) NOT NULL,
  `upload_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `liked_email` varchar(255) NOT NULL,
  `posts_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `convo_id` int(11) NOT NULL,
  `sent` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender`, `receiver`, `message`, `convo_id`, `sent`) VALUES
(1, 'vaishnaving218@gmail.com', 'sushjk6@gmail.com', 'hi pandi \n', 4, '2018-04-20 16:52:53'),
(2, 'sushjk6@gmail.com', 'vaishnaving218@gmail.com', 'hi jaffa\n', 4, '2018-04-20 16:53:24'),
(3, 'vaishnaving218@gmail.com', 'sushjk6@gmail.com', 'pandi\n', 4, '2018-04-20 16:53:29'),
(4, 'sushjk6@gmail.com', 'vaishnaving218@gmail.com', 'jaffa\n', 4, '2018-04-20 16:53:37'),
(5, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'hi sneha how are you \n', 1, '2018-04-21 10:42:36'),
(6, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'are you there\n', 1, '2018-04-21 10:49:17'),
(7, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'hello \n', 1, '2018-04-21 10:49:26'),
(8, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'any one \n', 1, '2018-04-21 10:49:29'),
(9, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'hellowwww\n', 1, '2018-04-21 10:49:33'),
(10, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'im waiting here \n', 1, '2018-04-21 10:49:40'),
(11, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'from a long time \n', 1, '2018-04-21 10:49:45'),
(12, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'helloooo\n', 1, '2018-04-21 10:49:47'),
(13, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'hey \n', 1, '2018-04-21 10:49:50'),
(14, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'sneha \n', 1, '2018-04-21 10:49:52'),
(15, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'are you there \n', 1, '2018-04-21 10:49:56'),
(16, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'arey yaar reply \n', 1, '2018-04-21 10:50:02'),
(17, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'why are you not replying \n', 1, '2018-04-21 10:50:07'),
(18, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'hello \n', 1, '2018-04-21 10:50:11'),
(19, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'hey \n', 1, '2018-04-21 10:50:14'),
(20, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'm=omg \n', 1, '2018-04-21 10:50:20'),
(21, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'your so busy \n', 1, '2018-04-21 10:50:24'),
(22, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'why are you so busy \n', 1, '2018-04-21 10:50:32'),
(23, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'hello \n', 1, '2018-04-21 10:50:34'),
(24, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'hello \n', 1, '2018-04-21 10:50:36'),
(25, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'hey \n', 1, '2018-04-21 10:50:38'),
(26, 'sneha.durishetty@gmail.com', 'sushjk6@gmail.com', 'hey hi.. sorry for late reply\n', 1, '2018-04-21 10:52:19'),
(27, 'sneha.durishetty@gmail.com', 'sushjk6@gmail.com', 'hi\n', 1, '2018-04-21 10:53:46'),
(28, 'sneha.durishetty@gmail.com', 'sushjk6@gmail.com', 'sorry yaar \n', 1, '2018-04-21 10:53:52'),
(29, 'sushjk6@gmail.com', 'sneha.durishetty@gmail.com', 'its okay \n', 1, '2018-04-21 10:54:07');

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
(1, 'jabir', 'khan', 'male', 'jabir-khan', 'sushjk6@gmail.com', '4297f44b13955235245b2497399d7a93', 'NULL', 'assets/images/male.png', 'Hyderabad', 1, '2018-04-20', '2018-04-20'),
(2, 'sneha', 'durishetty', 'female', 'sneha-durishetty', 'sneha.durishetty@gmail.com', '4297f44b13955235245b2497399d7a93', 'NULL', 'assets/images/female.png', 'Hyderabad', 1, '2018-04-20', '2018-04-20'),
(3, 'jasmine', 'khan', 'female', 'jasmine-khan', 'jabeer.928@awok.in', '4297f44b13955235245b2497399d7a93', 'NULL', 'assets/images/female.png', 'Hyderabad', 1, '2018-04-20', '2018-04-20'),
(4, 'vaishnavi', 'ng', 'female', 'vaishnavi-ng', 'vaishnaving218@gmail.com', '4297f44b13955235245b2497399d7a93', 'NULL', 'assets/images/female.png', 'Hyderabad', 1, '2018-04-20', '2018-04-20'),
(5, 'thehasin', 'nazia', 'female', 'thehasin-nazia', 'aasmanaz442@gmail.com', '4297f44b13955235245b2497399d7a93', 'NULL', 'assets/images/female.png', 'Hyderabad', 1, '2018-04-20', '2018-04-20'),
(6, 'Swathi', 'Bandaru', 'female', 'Swathi-Bandaru', 'bandaruswathi17@gmail.com', '4297f44b13955235245b2497399d7a93', 'NULL', 'assets/images/female.png', 'Hyderabad', 1, '2018-04-20', '2018-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile_picture`
--

CREATE TABLE `user_profile_picture` (
  `profile_picture_id` int(11) NOT NULL,
  `pro_pic_name` varchar(255) NOT NULL,
  `pro_pic_user` varchar(255) NOT NULL,
  `uploaded_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `video_uploads`
--

CREATE TABLE `video_uploads` (
  `upload_id` int(11) NOT NULL,
  `upload_email` varchar(255) NOT NULL,
  `upload_video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dislikes`
--
ALTER TABLE `dislikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend_requests`
--
ALTER TABLE `friend_requests`
  ADD PRIMARY KEY (`conversation_id`);

--
-- Indexes for table `image_uploads`
--
ALTER TABLE `image_uploads`
  ADD PRIMARY KEY (`upload_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_uploads`
--
ALTER TABLE `post_uploads`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_profile_picture`
--
ALTER TABLE `user_profile_picture`
  ADD PRIMARY KEY (`profile_picture_id`);

--
-- Indexes for table `video_uploads`
--
ALTER TABLE `video_uploads`
  ADD PRIMARY KEY (`upload_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dislikes`
--
ALTER TABLE `dislikes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `friend_requests`
--
ALTER TABLE `friend_requests`
  MODIFY `conversation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `image_uploads`
--
ALTER TABLE `image_uploads`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `post_uploads`
--
ALTER TABLE `post_uploads`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_profile_picture`
--
ALTER TABLE `user_profile_picture`
  MODIFY `profile_picture_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `video_uploads`
--
ALTER TABLE `video_uploads`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
