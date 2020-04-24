-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 09:00 AM
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
  `id_ap` int(5) NOT NULL,
  `notelp` int(100) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pet` varchar(100) NOT NULL,
  `jenis_pet` varchar(100) NOT NULL,
  `keluhan` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`email`, `id_ap`, `notelp`, `tanggal`, `nama_pet`, `jenis_pet`, `keluhan`) VALUES
('daniandhika03@gmail.com', 1, 123, '2020-04-07', 'Joni', 'Kucing', 'Sakit kepala');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `nama`, `deskripsi`, `harga`, `foto`) VALUES
(1, 'Makanan Anjing', 'Enak bgt buat anjing', 50000, 'makanananjing1.jpg'),
(2, 'Makanan Kucing', 'Makanan ini dibuat spesial untuk kucing anda! rasa ayam bawang!', 60000, 'makanankucing1.jpg'),
(3, 'Shampoo Kucing', 'Shampoo ini membuat bulu kucing lebat dan kuat', 150000, 'shampookucing1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `email`, `password`) VALUES
('admin', 'admin@admin', 'admin'),
('Dani Andhika', 'daniandhika03@gmail.com', 'password');

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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id_ap` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `email` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
