-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2022 at 08:52 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inicafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar_menu`
--

CREATE TABLE `tb_daftar_menu` (
  `id` int(11) NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `nama_menu` varchar(200) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `harga` varchar(15) DEFAULT NULL,
  `stok` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_daftar_menu`
--

INSERT INTO `tb_daftar_menu` (`id`, `foto`, `nama_menu`, `keterangan`, `kategori`, `harga`, `stok`) VALUES
(2, '1.png', 'Mie Aceh', 'asli aceh', 'kasir', '100000', '10'),
(3, '2.png', 'Burger', 'burger keju dengan tambahan daging uganda', 'pelayan', '3000000', '20'),
(4, '3.png', 'Kari Kambing', 'daging kambing', 'dapur', '400000', '30'),
(19, '4.png', 'Kopi', 'ya es kopi', 'sfsdf', '50000', '40'),
(20, '5.png', 'Es Timun serut', 'ini es timun', 'edit', '50000', '50'),
(21, '6.png', 'Mie', 'ga tau ini apa pokoknya enak', 'admin', '50000', '60');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `level`, `nama`, `nohp`, `alamat`) VALUES
(2, 'kasir@inicafe.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'kasir', '1202933', NULL),
(3, 'pelayan@inicafe.com', '5f4dcc3b5aa765d61d8327deb882cf99', 3, 'pelayan', '23402398', NULL),
(4, 'dapur@inicafe.com', '5f4dcc3b5aa765d61d8327deb882cf99', 4, 'dapur', '2342938423', NULL),
(19, 'asas@aa.cc', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 'sfsdf', '343534', 'sdfsdf'),
(20, 'sdfsdf@ee.cc', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'edit', '323435345', 'sdsdczcxzc'),
(21, 'admin@admin.com', '202cb962ac59075b964b07152d234b70', 1, 'admin', '29893489384', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_daftar_menu`
--
ALTER TABLE `tb_daftar_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_daftar_menu`
--
ALTER TABLE `tb_daftar_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
