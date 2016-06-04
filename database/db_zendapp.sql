-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2016 at 07:46 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_zendapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `user_id`, `artist`, `title`) VALUES
(1, 2, 'The Military Wives', 'The Military Wives'),
(2, 5, 'dev', 'dev'),
(3, 4, 'Bruce Springsteen', 'Wrecking Ball (Deluxe)'),
(4, 0, 'Lana Del Rey', 'Born To Die'),
(5, 0, 'Gotye', 'Making Mirrors'),
(6, 0, 'Album Artist', 'Album Artist'),
(7, 3, 'Hari Prasad', 'Classic');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `text`) VALUES
(1, 0, 'Blog #1', 'Welcome to my first blog post'),
(2, 0, 'Blog 2', 'Welcome to my second blog post'),
(3, 0, 'Blog #3', 'Welcome to my third blog post'),
(4, 0, 'Blog #4', 'Welcome to my fourth blog post'),
(5, 0, 'Blog #5', 'Welcome to my fifth blog post'),
(6, 0, 'test', 'test'),
(7, 0, 'Blog Title', 'this is blog description'),
(8, 0, 'Blog TitleAA', 'this is blog description1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `contact_num` bigint(20) NOT NULL,
  `designation` text NOT NULL,
  `profile_pic` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `user_info` text NOT NULL,
  `status` enum('active','inactive','deleted') NOT NULL DEFAULT 'inactive',
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `first_name`, `last_name`, `contact_num`, `designation`, `profile_pic`, `email`, `password`, `user_info`, `status`, `created_date`, `modified_date`) VALUES
(1, 'Deb Prasad', 'Bhattrai', 9871860639, 'PHP Programmer', 'test_pic.jpg', 'bhatrai_dev@gmail.com', 'dev@9012', 'This is our first blog post!', 'active', '2016-05-26 09:29:37', '0000-00-00 00:00:00'),
(2, 'Test Name', 'Last', 98765433, '.Net Programmer', 'test_pic1.jpg', 'test@email.com', 'test@9012', 'This is our second blog post!', 'active', '2016-05-26 09:29:37', '0000-00-00 00:00:00'),
(3, 'Dakshyani', 'Bhatrai', 876676788686, 'C# programmer', 'test_pics.jpg', 'daksh@gmail.com', 'pass@9012', 'This is our third blog post!', 'active', '2016-05-26 09:29:37', '0000-00-00 00:00:00'),
(4, 'Deb', 'Bhattrai', 847632746, 'C++Programmer', 'prof_pic1.jpg', 'dev@email.com', 'pswd@9012', 'This is our fifth blog post!', 'active', '2016-05-26 09:29:37', '0000-00-00 00:00:00'),
(5, 'Shobha', 'Bhatrai', 981467374, 'Web Designer', 'shova_pics.jpg', 'shova@gmail.com', 'shova@9012', 'This is our forth blog post!', 'active', '2016-05-26 09:29:37', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
