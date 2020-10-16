-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 10:14 AM
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
('add', 'bagas', 'bags2df', '2020-10-30', 'asdagd'),
('hf', 'udinidin', 'udin aja', '2020-10-31', 'ad'),
('hsdu', 'asep', 'asepaja', '2020-10-13', 'affa'),
('jahs', 'cecep', 'sadvhad', '2020-11-07', 'hg');

-- --------------------------------------------------------

--
-- Table structure for table `altnilai`
--

CREATE TABLE `altnilai` (
  `ida` varchar(15) NOT NULL,
  `c14` int(11) NOT NULL,
  `c15` int(11) NOT NULL,
  `c16` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `altnilai`
--

INSERT INTO `altnilai` (`ida`, `c14`, `c15`, `c16`) VALUES
('add', 90, 76, 65),
('hf', 90, 89, 45),
('hsdu', 12, 67, 78),
('jahs', 67, 10, 78);

-- --------------------------------------------------------

--
-- Table structure for table `altnormal`
--

CREATE TABLE `altnormal` (
  `ida` varchar(15) NOT NULL,
  `c14` tinyint(1) NOT NULL,
  `c15` tinyint(1) NOT NULL,
  `c16` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `altnormal`
--

INSERT INTO `altnormal` (`ida`, `c14`, `c15`, `c16`) VALUES
('add', 1, 1, 1),
('hf', 1, 1, 1),
('hsdu', 0, 1, 1),
('jahs', 1, 0, 1);

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
(14, 'nasib', 0.7, 'b', '2020-10-15 04:27:50'),
(15, 'nilai', 0.8, 'b', '2020-10-15 04:28:11'),
(16, 'kasus', 0.4, 'c', '2020-10-15 04:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `ranknya`
--

CREATE TABLE `ranknya` (
  `ida` varchar(15) NOT NULL,
  `nilai` double NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ranknya`
--

INSERT INTO `ranknya` (`ida`, `nilai`, `tgl`) VALUES
('add', 1.9, '2020-10-15 06:51:55'),
('hf', 1.9, '2020-10-15 06:51:55'),
('hsdu', 1.2, '2020-10-15 06:51:55'),
('jahs', 1.1, '2020-10-15 06:51:55');

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
-- Indexes for table `ranknya`
--
ALTER TABLE `ranknya`
  ADD PRIMARY KEY (`ida`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `idk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
