-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2016 at 08:49 PM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `then815_workout`
--

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE IF NOT EXISTS `tracking` (
  `id` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `sqtWt1` int(11) NOT NULL,
  `sqtWt2` int(11) NOT NULL,
  `sqtWt3` int(11) NOT NULL,
  `sqtRep1` int(11) NOT NULL,
  `sqtRep2` int(11) NOT NULL,
  `sqtRep3` int(11) NOT NULL,
  `lngWt1` int(11) NOT NULL,
  `lngWt2` int(11) NOT NULL,
  `lngRep1` int(11) NOT NULL,
  `lngRep2` int(11) NOT NULL,
  `bnchWt1` int(11) NOT NULL,
  `bnchWt2` int(11) NOT NULL,
  `bnchRep1` int(11) NOT NULL,
  `bnchRep2` int(11) NOT NULL,
  `rowWt1` int(11) NOT NULL,
  `rowWt2` int(11) NOT NULL,
  `rowRep1` int(11) NOT NULL,
  `rowRep2` int(11) NOT NULL,
  `shldWt1` int(11) NOT NULL,
  `shldWt2` int(11) NOT NULL,
  `shldRep1` int(11) NOT NULL,
  `shldRep2` int(11) NOT NULL,
  `curlWt1` int(11) NOT NULL,
  `curlWt2` int(11) NOT NULL,
  `curlRep1` int(11) NOT NULL,
  `curlRep2` int(11) NOT NULL,
  `triWt1` int(11) NOT NULL,
  `triWt2` int(11) NOT NULL,
  `triRep1` int(11) NOT NULL,
  `triRep2` int(11) NOT NULL,
  `flyWt1` int(11) NOT NULL,
  `flyWt2` int(11) NOT NULL,
  `flyRep1` int(11) NOT NULL,
  `flyRep2` int(11) NOT NULL,
  `latWt1` int(11) NOT NULL,
  `latWt2` int(11) NOT NULL,
  `latRep1` int(11) NOT NULL,
  `latRep2` int(11) NOT NULL,
  `crunchRep1` int(11) NOT NULL,
  `revRep1` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tracking`
--

INSERT INTO `tracking` (`id`, `date`, `sqtWt1`, `sqtWt2`, `sqtWt3`, `sqtRep1`, `sqtRep2`, `sqtRep3`, `lngWt1`, `lngWt2`, `lngRep1`, `lngRep2`, `bnchWt1`, `bnchWt2`, `bnchRep1`, `bnchRep2`, `rowWt1`, `rowWt2`, `rowRep1`, `rowRep2`, `shldWt1`, `shldWt2`, `shldRep1`, `shldRep2`, `curlWt1`, `curlWt2`, `curlRep1`, `curlRep2`, `triWt1`, `triWt2`, `triRep1`, `triRep2`, `flyWt1`, `flyWt2`, `flyRep1`, `flyRep2`, `latWt1`, `latWt2`, `latRep1`, `latRep2`, `crunchRep1`, `revRep1`) VALUES
(8, '2016-10-20 21:35:24', 135, 145, 155, 10, 10, 10, 70, 70, 8, 6, 125, 125, 6, 6, 55, 65, 12, 10, 50, 50, 8, 6, 70, 80, 12, 8, 90, 110, 14, 6, 75, 75, 6, 6, 90, 90, 10, 10, 20, 20),
(9, '2016-10-27 20:40:11', 155, 165, 170, 12, 12, 10, 70, 70, 8, 6, 135, 135, 6, 6, 65, 70, 10, 8, 50, 50, 8, 8, 90, 90, 10, 6, 110, 110, 6, 6, 75, 75, 6, 6, 90, 100, 12, 6, 20, 15),
(10, '2016-10-31 19:26:56', 185, 185, 185, 8, 10, 8, 70, 70, 8, 6, 135, 135, 6, 6, 65, 70, 10, 8, 50, 50, 8, 8, 90, 90, 10, 6, 110, 110, 6, 6, 75, 75, 6, 6, 90, 100, 12, 6, 20, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tracking`
--
ALTER TABLE `tracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
