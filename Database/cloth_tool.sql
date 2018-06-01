-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2018 at 10:45 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloth_tool`
--

-- --------------------------------------------------------

--
-- Table structure for table `arts`
--

CREATE TABLE `arts` (
  `aid` int(11) NOT NULL,
  `aname` varchar(50) NOT NULL,
  `aprice` varchar(10) NOT NULL,
  `imgurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arts`
--

INSERT INTO `arts` (`aid`, `aname`, `aprice`, `imgurl`) VALUES
(1, 'art1', '100', 'arts/1.png'),
(2, 'art2', '150', 'arts/2.png'),
(3, 'art3', '40', 'arts/3.png'),
(4, 'art4', '80', 'arts/4.png'),
(5, 'art5', '120', 'arts/5.png'),
(6, 'art6', '200', 'arts/6.png'),
(7, 'art7', '140', 'arts/7.png'),
(8, 'art8', '140', 'arts/8.png');

-- --------------------------------------------------------

--
-- Table structure for table `tcolor`
--

CREATE TABLE `tcolor` (
  `tcid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `tcname` varchar(50) NOT NULL,
  `tcprice` varchar(10) NOT NULL,
  `imgurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tcolor`
--

INSERT INTO `tcolor` (`tcid`, `tid`, `tcname`, `tcprice`, `imgurl`) VALUES
(1, 1, 'a2', '250', 'tshirts/a2.png'),
(2, 1, 'a3', '250', 'tshirts/a3.png'),
(3, 2, 'b2', '350', 'tshirts/b2.png'),
(4, 3, 'c2', '250', 'tshirts/c2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tshirt`
--

CREATE TABLE `tshirt` (
  `tid` int(11) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `tprice` varchar(10) NOT NULL,
  `imgurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tshirt`
--

INSERT INTO `tshirt` (`tid`, `tname`, `tprice`, `imgurl`) VALUES
(1, 'a1', '250', 'tshirts/a1.png'),
(2, 'b1', '350', 'tshirts/b1.png'),
(3, 'c1', '250', 'tshirts/c1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arts`
--
ALTER TABLE `arts`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tcolor`
--
ALTER TABLE `tcolor`
  ADD PRIMARY KEY (`tcid`);

--
-- Indexes for table `tshirt`
--
ALTER TABLE `tshirt`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arts`
--
ALTER TABLE `arts`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tcolor`
--
ALTER TABLE `tcolor`
  MODIFY `tcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tshirt`
--
ALTER TABLE `tshirt`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
