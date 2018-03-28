-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 03:33 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `body`, `user_id`) VALUES
(2, 'Blog 2', 'Still long way to go and we are ready for that.', 2),
(3, 'Second', 'My second article and its also updated...!!!', 1),
(11, 'Blog 6', 'This is blog 6.', 1),
(9, 'CI', 'Code Igniter is a php framework.', 1),
(10, 'Blog 5', 'This is blog 5.', 1),
(12, 'Blog 7', 'This is blog 7.', 1),
(13, 'Blog 8', 'This is blog 8.', 1),
(14, 'Blog 9', 'This is blog 9.', 1),
(15, 'Blog 10', 'This is blog 10.', 1),
(16, 'Blog 11', 'This is blog 11.', 1),
(17, 'blog', 'asdgfhgj', 1),
(18, 'Another Blog', 'Yet another testing blog and its working fine.', 1),
(19, 'My Blog', 'This is my blog.', 2),
(20, 'My next blog', 'This blog will be about blogging.', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
