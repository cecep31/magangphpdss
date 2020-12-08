-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2020 pada 13.36
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

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
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `ida` varchar(13) NOT NULL,
  `namaa` varchar(35) NOT NULL,
  `emaila` varchar(50) NOT NULL,
  `tgl_lahira` date NOT NULL,
  `alamata` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`ida`, `namaa`, `emaila`, `tgl_lahira`, `alamata`) VALUES
('hf', 'udinidin', 'udin aja', '2020-10-31', 'ad'),
('hsdu', 'asep', 'asepaja', '2020-10-13', 'affa'),
('jahs', 'cecep', 'sadvhad', '2020-11-07', 'hg'),
('kf001', 'Agus Pratama', 'agusng@da.com', '2020-12-24', 'karawang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `altnilai`
--

CREATE TABLE `altnilai` (
  `ida` varchar(15) NOT NULL,
  `c14` int(11) NOT NULL,
  `c15` int(11) NOT NULL,
  `c16` int(11) NOT NULL,
  `c17` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `altnilai`
--

INSERT INTO `altnilai` (`ida`, `c14`, `c15`, `c16`, `c17`) VALUES
('add', 90, 89, 65, 0),
('hf', 90, 89, 45, 67),
('hsdu', 12, 67, 78, 10),
('jahs', 67, 10, 78, 78),
('kf001', 90, 89, 67, 67);

-- --------------------------------------------------------

--
-- Struktur dari tabel `altnormal`
--

CREATE TABLE `altnormal` (
  `ida` varchar(15) NOT NULL,
  `c14` tinyint(1) NOT NULL,
  `c15` tinyint(1) NOT NULL,
  `c16` tinyint(1) NOT NULL,
  `c17` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `altnormal`
--

INSERT INTO `altnormal` (`ida`, `c14`, `c15`, `c16`, `c17`) VALUES
('add', 1, 1, 1, 0),
('hf', 1, 1, 1, 0.858974),
('hsdu', 0, 1, 1, 0.128205),
('jahs', 1, 0, 1, 1),
('kf001', 1, 1, 1, 0.858974);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `idk` int(11) NOT NULL,
  `namak` varchar(30) NOT NULL,
  `bobotk` float NOT NULL,
  `borc` varchar(5) NOT NULL DEFAULT 'b',
  `tgl_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`idk`, `namak`, `bobotk`, `borc`, `tgl_update`) VALUES
(14, 'nasib', 0.1, 'b', '2020-12-08 08:03:39'),
(15, 'nilai', 0.2, 'b', '2020-12-08 08:08:49'),
(16, 'kasus', 0.4, 'c', '2020-10-15 04:28:29'),
(17, 'sertifikat', 0.3, 'b', '2020-12-08 12:10:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ranknya`
--

CREATE TABLE `ranknya` (
  `ida` varchar(15) NOT NULL,
  `nilai` double NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ranknya`
--

INSERT INTO `ranknya` (`ida`, `nilai`, `tgl`) VALUES
('add', 0.7, '2020-12-08 08:19:40'),
('hf', 0.9576922, '2020-12-08 12:31:26'),
('hsdu', 0.6384615, '2020-12-08 12:31:26'),
('jahs', 0.8, '2020-12-08 12:31:26'),
('kf001', 0.9576922, '2020-12-08 12:31:26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`ida`);

--
-- Indeks untuk tabel `altnilai`
--
ALTER TABLE `altnilai`
  ADD PRIMARY KEY (`ida`);

--
-- Indeks untuk tabel `altnormal`
--
ALTER TABLE `altnormal`
  ADD PRIMARY KEY (`ida`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`idk`);

--
-- Indeks untuk tabel `ranknya`
--
ALTER TABLE `ranknya`
  ADD PRIMARY KEY (`ida`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `idk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
