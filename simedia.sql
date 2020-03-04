-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 09:03 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `kode`
--

CREATE TABLE `kode` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `namafile` varchar(50) NOT NULL,
  `petugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kode`
--

INSERT INTO `kode` (`id`, `kode`, `namafile`, `petugas`) VALUES
(1, 'A1', 'Koperasi', 'Yosi'),
(2, 'B1', 'ABT : Pengusahaan Air Tanah', 'Hasri');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `dokumen` varchar(50) NOT NULL,
  `berkas` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `kode`, `tanggal`, `nama`, `nip`, `unit`, `dokumen`, `berkas`, `keterangan`) VALUES
(1, 'klhkh', 'hjkhkj', 'hjkh', 'jkh', 'kjh', 'kjhjk', 'hkjh', 'jkhjkh'),
(2, 'jlh', 'jkhjkh', 'jkhj', 'khjkh', 'jkhk', 'jhjkh', 'jkhjkh', 'jkhkjh'),
(3, 'kbk', 'hj', 'hjkh', 'jkhjkh', 'jkhjk', 'hjkhjkh', 'jkhjhjk', 'hjkh');

-- --------------------------------------------------------

--
-- Table structure for table `smartbook`
--

CREATE TABLE `smartbook` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `sk` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `petugas` varchar(50) NOT NULL,
  `datask` varchar(50) DEFAULT NULL,
  `datadukung` varchar(50) DEFAULT NULL,
  `dus` varchar(50) DEFAULT NULL,
  `urut` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smartbook`
--

INSERT INTO `smartbook` (`id`, `kode`, `nama`, `uraian`, `tanggal`, `sk`, `jenis`, `kota`, `jumlah`, `petugas`, `datask`, `datadukung`, `dus`, `urut`) VALUES
(15, NULL, 'kbj', 'bjkb', 'jkbkj', 'bjkb', 'jkb', 'jkbjk', 'bjk', 'bjkbjkb', NULL, NULL, NULL, NULL),
(16, NULL, 'nm,', 'nm,', 'nm,n', 'm,nm', 'n', 'jkn', 'kjnjknkjn', 'jkn', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kode`
--
ALTER TABLE `kode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartbook`
--
ALTER TABLE `smartbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kode`
--
ALTER TABLE `kode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `smartbook`
--
ALTER TABLE `smartbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
