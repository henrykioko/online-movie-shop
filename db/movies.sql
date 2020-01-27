-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 07:07 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(257) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Id`, `name`, `password`) VALUES
(1, '0', 'fcea920f7412b5da7be0cf42b8c93759'),
(2, 'kioko jikoo', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'Hnery kioko', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'kioko muinde', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` int(11) NOT NULL,
  `name` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(257) NOT NULL,
  `contacts` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `name`, `Email`, `Password`, `contacts`) VALUES
(1, 'henry kioko', 'henry@hotmail.com', 'e10adc3949ba59abbe56e057f20f88', '0723456789'),
(2, 'fay kasasi', 'kasasi@gmail.com', 'e10adc3949ba59abbe56e057f20f88', '0789543123'),
(3, 'my bay', 'baby@gmail.com', 'e10adc3949ba59abbe56e057f20f88', '0789543145'),
(4, 'sleep over', 'fffff@gmail.com', 'e10adc3949ba59abbe56e057f20f88', '0789543189'),
(5, 'kioko muinde', 'saasita@gmail.com', 'e10adc3949ba59abbe56e057f20f88', '0712342987'),
(6, 'wilson gathee', 'willy12@gmail.com', 'e10adc3949ba59abbe56e057f20f88', '0173452675'),
(7, 'toto mitindo', 'mitindo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0789546321'),
(8, 'kioko jiko', 'fffffrt@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0723456789'),
(9, 'niko rada', 'matako@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '0723456789'),
(10, 'kilimall', 'gta@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0723456789'),
(11, 'mghasia wakae', 'brian.chirchir@y.com', 'fcea920f7412b5da7be0cf42b8c93759', '0723456789'),
(12, 'james blunt', 'blunt@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '0723456789');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `Id` int(11) NOT NULL,
  `name` text NOT NULL,
  `genre` text NOT NULL,
  `type` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`Id`, `name`, `genre`, `type`, `date`) VALUES
(2, 'chellini', 'action', 'standard', '2012-12-31'),
(3, 'fefe', 'action', 'standard', '2012-12-31'),
(4, 'pompei', 'thriller', 'standard', '2012-12-31'),
(5, 'gerrald', 'action', 'standard', '2012-12-31'),
(6, 'iguku', 'thriller', 'standard', '2012-12-31'),
(7, 'pussy in the boots', 'comedy', 'standard', '2012-12-31'),
(8, 'drain my sweat', 'action', 'standard', '2013-12-30'),
(9, 'homicde', 'thriller', 'standard', '2013-12-30'),
(10, 'hitherto', 'horror', 'standard', '2013-12-30'),
(11, 'jicho shiet', 'horror', 'standard', '2013-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `Id` int(11) NOT NULL,
  `name` text NOT NULL,
  `genre` text NOT NULL,
  `season` int(11) NOT NULL,
  `episode` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`Id`, `name`, `genre`, `season`, `episode`, `date`) VALUES
(1, 'called out', 'action', 4, 23, '2012-12-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
