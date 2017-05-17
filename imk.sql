-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2017 at 06:19 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imk`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `images` varchar(30) NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `username`, `nama_barang`, `lokasi`, `keterangan`, `status`, `images`, `kategori`, `flag`) VALUES
(9, 'rey', 'Dompet', 'Surabaya', 'silahkan hubungi nomor 0292929', 'belum ditemukan', 'img/upload/upl_9.jpg', 'aksesoris', 1),
(10, 'rey', 'handphone', 'lamongan', 'silahkan hubungi nomor 2020200', 'belum ditemukan', 'img/upload/upl_10.jpg', 'elektronik', 1),
(16, 'rey', 'tes', 'ssjjs', 'sjjsjs', 'sjsjsjj', 'img/upload/upl_16.jpg', 'Aksesoris', 1),
(17, 'rey', 'kur"', 'Banyuwangi', 'ksksk', 'sksksk', 'img/upload/upl_17.jpg', 'Aksesoris', 1),
(18, 'steve', 'steve', 'Bangkalan', 'sjsksk', 'ssksk', 'img/upload/upl_18.jpg', 'Aksesoris', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telepon` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama`, `email`, `no_telepon`, `password`, `image`) VALUES
('rey', 'reynaldo', 'reynaldo.johanes13@gmail.com', '089660903131', 'mypassword', 'img/upload/upl_rey.jpg'),
('steve', 'steve', 'reynaldo@YAHOO.COM', '029292020', 'steve', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
