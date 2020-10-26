-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2020 at 12:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwtproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(10) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `typeid` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `des` text NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `owner`, `typeid`, `phone`, `des`, `location`) VALUES
(1, 'hi', 'ihih', 0, '', '..');

-- --------------------------------------------------------

--
-- Table structure for table `bookfound`
--

CREATE TABLE `bookfound` (
  `id` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `typeid` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `des` text NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookfound`
--

INSERT INTO `bookfound` (`id`, `owner`, `typeid`, `phone`, `des`, `location`) VALUES
(1, 'd', 'hkn', 0, '', '..');

-- --------------------------------------------------------

--
-- Table structure for table `ele`
--

CREATE TABLE `ele` (
  `id` int(10) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `typeid` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `des` text NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ele`
--

INSERT INTO `ele` (`id`, `owner`, `typeid`, `phone`, `des`, `location`) VALUES
(1, 'd', 'ht', 0, 'dcd', '. fv.');

-- --------------------------------------------------------

--
-- Table structure for table `elefound`
--

CREATE TABLE `elefound` (
  `id` int(10) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `typeid` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `des` text NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elefound`
--

INSERT INTO `elefound` (`id`, `owner`, `typeid`, `phone`, `des`, `location`) VALUES
(1, 'hi', 'oo', 0, 'fee', '.sc.'),
(2, 'f', 'oo', 2147483647, '', '..');

-- --------------------------------------------------------

--
-- Table structure for table `idcard`
--

CREATE TABLE `idcard` (
  `id` int(10) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `typeid` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `des` text NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idcard`
--

INSERT INTO `idcard` (`id`, `owner`, `typeid`, `phone`, `des`, `location`) VALUES
(1, 'hi', 'ht', 0, '', '..');

-- --------------------------------------------------------

--
-- Table structure for table `idcardfound`
--

CREATE TABLE `idcardfound` (
  `id` int(10) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `typeid` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `des` text NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idcardfound`
--

INSERT INTO `idcardfound` (`id`, `owner`, `typeid`, `phone`, `des`, `location`) VALUES
(1, 'hi', 'oo', 0, '', '..');

-- --------------------------------------------------------

--
-- Table structure for table `perfound`
--

CREATE TABLE `perfound` (
  `id` int(11) NOT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `typeid` varchar(255) DEFAULT NULL,
  `phone` int(255) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perfound`
--

INSERT INTO `perfound` (`id`, `owner`, `typeid`, `phone`, `des`, `location`) VALUES
(1, 'j', 'oo', 9, '', '..');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(10) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `typeid` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `des` text NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `owner`, `typeid`, `phone`, `des`, `location`) VALUES
(1, 'j', 'oo', 0, '', '..');

-- --------------------------------------------------------

--
-- Table structure for table `tb1_images`
--

CREATE TABLE `tb1_images` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb1_imagesfound`
--

CREATE TABLE `tb1_imagesfound` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'shreyasrinivas', 'shreyasrinivas24@gmail.com', '9124d5c6ffec56320ead4cf474e15f82');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookfound`
--
ALTER TABLE `bookfound`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ele`
--
ALTER TABLE `ele`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elefound`
--
ALTER TABLE `elefound`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idcard`
--
ALTER TABLE `idcard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idcardfound`
--
ALTER TABLE `idcardfound`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perfound`
--
ALTER TABLE `perfound`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb1_images`
--
ALTER TABLE `tb1_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb1_imagesfound`
--
ALTER TABLE `tb1_imagesfound`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookfound`
--
ALTER TABLE `bookfound`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ele`
--
ALTER TABLE `ele`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `elefound`
--
ALTER TABLE `elefound`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `idcard`
--
ALTER TABLE `idcard`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `idcardfound`
--
ALTER TABLE `idcardfound`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perfound`
--
ALTER TABLE `perfound`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb1_images`
--
ALTER TABLE `tb1_images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb1_imagesfound`
--
ALTER TABLE `tb1_imagesfound`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
