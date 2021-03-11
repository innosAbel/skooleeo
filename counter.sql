-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 01:31 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `counter`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'News'),
(2, 'Events'),
(3, 'Tutorials'),
(4, 'Videos');

-- --------------------------------------------------------

--
-- Table structure for table `pageview`
--

CREATE TABLE `pageview` (
  `id` int(25) NOT NULL,
  `pageurl` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `userip` bigint(20) NOT NULL,
  `totalview` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pageview`
--

INSERT INTO `pageview` (`id`, `pageurl`, `userip`, `totalview`) VALUES
(0, 'http://localhost/counter/index.php', 0, 29),
(0, 'http://localhost/counter/post.php?id=1', 0, 9),
(0, 'http://localhost/counter/posts.php?category=4', 0, 3),
(0, 'http://localhost/counter/posts.php?category=3', 0, 3),
(0, 'http://localhost/counter/post.php?id=2', 0, 6),
(0, 'http://localhost/counter/posts.php?category=2', 0, 2),
(0, 'http://localhost/counter/posts.php?category=1', 0, 2),
(0, 'http://localhost/counter/', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `title`, `body`, `author`, `tags`, `date`) VALUES
(1, 1, 'International PHP Conference 2017', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dignissim iaculis velit sit amet ornare. Ut hendrerit lacus libero, ut volutpat arcu tempus quis. Mauris varius laoreet dolor, vitae iaculis dolor sodales non. Maecenas eu enim est. Nulla eu pellentesque ligula. Donec ut tellus sed risus sodales ultrices. Suspendisse at tellus id enim mollis condimentum. Duis ac tellus sed nisi porttitor ullamcorper. Morbi varius tortor vel hendrerit ullamcorper. Integer placerat justo in lorem dignissim, sed feugiat elit congue. Nam faucibus nibh sit amet porta congue. Suspendisse potenti. Nunc justo eros, scelerisque sit amet ultrices et, eleifend id odio. Praesent eget lacus lectus. Phasellus commodo sem mauris, sit amet iaculis magna lacinia sed.', 'Oli', 'News, php news, php events', '2017-02-20 15:05:15'),
(2, 3, 'New Tutorial for Core PHP', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dignissim iaculis velit sit amet ornare. Ut hendrerit lacus libero, ut volutpat arcu tempus quis. Mauris varius laoreet dolor, vitae iaculis dolor sodales non. Maecenas eu enim est. Nulla eu pellentesque ligula. Donec ut tellus sed risus sodales ultrices. Suspendisse at tellus id enim mollis condimentum. Duis ac tellus sed nisi porttitor ullamcorper. Morbi varius tortor vel hendrerit ullamcorper. Integer placerat justo in lorem dignissim, sed feugiat elit congue. Nam faucibus nibh sit amet porta congue. Suspendisse potenti. Nunc justo eros, scelerisque sit amet ultrices et, eleifend id odio. Praesent eget lacus lectus. Phasellus commodo sem mauris, sit amet iaculis magna lacinia sed.', 'Khan Mariyam Jameelah', 'totorials, tutorial', '2017-02-20 15:05:15');

-- --------------------------------------------------------

--
-- Table structure for table `userson`
--

CREATE TABLE `userson` (
  `uvon` varchar(32) NOT NULL,
  `dt` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userson`
--

INSERT INTO `userson` (`uvon`, `dt`) VALUES
('::1-vst-', 1615465119);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userson`
--
ALTER TABLE `userson`
  ADD PRIMARY KEY (`uvon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
