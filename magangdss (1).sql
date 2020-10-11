-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2020 at 11:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magangdss`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `ida` varchar(13) NOT NULL,
  `namaa` varchar(35) NOT NULL,
  `emaila` varchar(50) NOT NULL,
  `tgl_lahira` date NOT NULL,
  `alamata` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`ida`, `namaa`, `emaila`, `tgl_lahira`, `alamata`) VALUES
('127', 'dark', 'adad@ad', '2020-10-20', 'adfad'),
('2012', 'cecep', 'cecep@ad.com', '2020-10-13', 'adadawdasd'),
('3455', 'dark', '12asd@ad.id', '2020-10-21', 'ad'),
('4rsd', 'fikri', 'fikri@jjj.com', '2020-10-30', 'asdjadjkad'),
('ha3', 'adj', 'jjjj@ah', '2020-10-07', 'asdjjfjfjfj');

-- --------------------------------------------------------

--
-- Table structure for table `altnilai`
--

CREATE TABLE `altnilai` (
  `ida` varchar(15) NOT NULL,
  `9` int(11) NOT NULL,
  `10` int(11) NOT NULL,
  `11` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `altnilai`
--

INSERT INTO `altnilai` (`ida`, `9`, `10`, `11`) VALUES
('127', 0, 0, 0),
('2012', 10, 80, 90),
('3455', 0, 0, 0),
('4rsd', 0, 0, 0),
('ha3', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `altnormal`
--

CREATE TABLE `altnormal` (
  `ida` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `altnormal`
--

INSERT INTO `altnormal` (`ida`) VALUES
('127'),
('2012'),
('3455'),
('4rsd'),
('ha3');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `idk` int(11) NOT NULL,
  `namak` varchar(30) NOT NULL,
  `bobotk` float NOT NULL,
  `borc` varchar(5) NOT NULL DEFAULT 'b',
  `tgl_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`idk`, `namak`, `bobotk`, `borc`, `tgl_update`) VALUES
(9, 'potensi', 0.9, 'b', '2020-10-10 11:51:17'),
(10, 'pengalaman', 0.6, 'b', '2020-10-10 13:05:00'),
(11, 'ipk', 0.2, 'b', '2020-10-10 13:05:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`ida`);

--
-- Indexes for table `altnilai`
--
ALTER TABLE `altnilai`
  ADD PRIMARY KEY (`ida`);

--
-- Indexes for table `altnormal`
--
ALTER TABLE `altnormal`
  ADD PRIMARY KEY (`ida`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`idk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `idk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
