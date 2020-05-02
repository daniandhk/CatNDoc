-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 11:29 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catndoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `email` varchar(100) NOT NULL,
  `id_ap` int(11) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pet` varchar(100) NOT NULL,
  `jenis_pet` varchar(100) NOT NULL,
  `keluhan` varchar(10000) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`email`, `id_ap`, `notelp`, `tanggal`, `nama_pet`, `jenis_pet`, `keluhan`, `status`) VALUES
('daniandhika03@gmail.com', 1, '000001231234', '2020-04-07', 'Goliath', 'Kucing', 'qwertyq', 'Belum'),
('daniandhika03@gmail.com', 4, '000000004321', '2012-12-12', 'Heli', 'Anjing', 'UwU', 'belum'),
('sya@heggi', 7, '123', '2012-12-12', 'awawawa', 'Kucing', 'sakit', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `hewan`
--

CREATE TABLE `hewan` (
  `id_hewan` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_pet` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `berat` varchar(2) NOT NULL,
  `tinggi` varchar(3) NOT NULL,
  `warna` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`id_hewan`, `email`, `nama_pet`, `jenis`, `berat`, `tinggi`, `warna`) VALUES
(1, 'daniandhika03@gmail.com', 'Goliath', 'Kucing', '4', '23', 'Orenj');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` text NOT NULL,
  `bukti` varchar(50) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `resi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_user`, `id_product`, `quantity`, `tanggal`, `alamat`, `bukti`, `status`, `resi`) VALUES
(14, 12, 1, 1, '2020-05-01', 'Antapani', 'buktitransfer.jpg', 'delivery', '290333495'),
(15, 12, 2, 2, '2020-05-01', 'uw', 'buktitransfer.jpg', 'packing', ''),
(16, 12, 4, 2, '2020-05-01', 'Antapani, Bandung', 'buktitransfer1(2).jpg', 'done', ''),
(17, 12, 3, 1, '2020-05-01', '', 'buktitransfer3.jpg', 'refund', ''),
(18, 12, 5, 1, '2020-05-01', 'awe', 'buktitransfer3.jpg', 'proses', ''),
(20, 12, 5, 1, '2020-05-02', '', NULL, 'belum', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `nama`, `jenis`, `deskripsi`, `harga`, `foto`) VALUES
(1, 'Makanan Anjing', 'Makanan', 'Makanan anjing yang lezat anjing anda pasti suka', 6000, 'makanananjing1.jpg'),
(2, 'Makanan Kucing', 'Makanan', 'Kucing anda akan sangat gembira!', 7000, 'makanankucing1.jpg'),
(3, 'Shampoo Kucing', 'Lain-lain', 'Shampoo yang membuat rambut kucing anda halus', 40000, 'shampookucing1.jpg'),
(4, 'Sikat Kucing', '', 'Sikat jos !', 50000, 'sikatkucing1.jpg'),
(5, 'Kucing Anggora', 'Lain-lain', 'Kucing aggora impor', 2500000, 'AnggoraTurki.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `foto`) VALUES
(4, 'Polisi Amoral', 'acabcops@gmal.com', 'dandinu12', ''),
(5, 'admin', 'admin@admin', 'admin', ''),
(2, 'Dani Andhika', 'daniandhika03@gmail.com', 'password', ''),
(3, 'Rendra Surendra', 'rendranara@gmail.com', 'gustitidaktidur', ''),
(12, 'sya', 'sya@heggi', 'sya', 'Pas_Foto_Heggi.jpg'),
(13, 'zz', 'zz@zz', 'zz', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id_ap`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`id_hewan`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id_ap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hewan`
--
ALTER TABLE `hewan`
  MODIFY `id_hewan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `email` FOREIGN KEY (`email`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hewan`
--
ALTER TABLE `hewan`
  ADD CONSTRAINT `emailFK` FOREIGN KEY (`email`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `id_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
