-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 19, 2022 at 05:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar_paket`
--

CREATE TABLE `tb_daftar_paket` (
  `id_paket` int(11) NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `nama_paket` varchar(200) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `harga` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_daftar_paket`
--

INSERT INTO `tb_daftar_paket` (`id_paket`, `foto`, `nama_paket`, `keterangan`, `harga`) VALUES
(2, '87485-cuci gosok.jpg', 'Cuci Gosok', 'Cuci &amp; gosok', '100000'),
(3, 'cuci.jpg', 'Cuci', 'Cuci aja', '3000000'),
(4, 'setrika.jpg', 'Setrika', 'Setrika aja', '400000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id` int(11) NOT NULL,
  `packet_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(50) NOT NULL,
  `notes` varchar(250) NOT NULL,
  `status` int(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `invoice_id` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id`, `packet_id`, `user_id`, `qty`, `notes`, `status`, `tanggal`, `jam`, `invoice_id`) VALUES
(16, 2, 3, 2, 'asasas', 0, '2022-12-18', NULL, '564d70r'),
(17, 3, 3, 2, 'asasas', 0, '2022-12-18', NULL, '564d70r'),
(18, 4, 3, 8, 'okokok', 0, '2022-12-18', NULL, 'SI-CLEAN-196k45g'),
(19, 3, 3, 7, 'okokok', 0, '2022-12-18', NULL, 'SI-CLEAN-196k45g'),
(20, 4, 24, 2, '', 0, '2022-12-19', NULL, 'SI-CLEAN-539pb3e'),
(25, 4, 25, 2, '', 3, '2022-12-19', NULL, 'SI-CLEAN-300ddyx'),
(26, 3, 25, 1, '', 2, '2022-12-19', NULL, 'SI-CLEAN-300ddyx'),
(27, 2, 26, 1, '', 0, '2022-12-19', NULL, 'SI-CLEAN-993fp2u'),
(28, 3, 26, 2, '', 0, '2022-12-19', NULL, 'SI-CLEAN-993fp2u');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `foto`, `username`, `password`, `level`, `nama`, `nohp`, `alamat`) VALUES
(2, NULL, 'kasir@inicafe.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'kasir', '1202933', NULL),
(3, NULL, 'pelayan@inicafe.com', '5f4dcc3b5aa765d61d8327deb882cf99', 3, 'pelayan', '23402398', NULL),
(4, NULL, 'dapur@inicafe.com', '5f4dcc3b5aa765d61d8327deb882cf99', 4, 'dapur', '2342938423', NULL),
(19, NULL, 'asas@aa.cc', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 'sfsdf', '343534', 'sdfsdf'),
(20, NULL, 'sdfsdf@ee.cc', '5f4dcc3b5aa765d61d8327deb882cf99', 2, 'edit', '323435345', 'sdsdczcxzc'),
(21, NULL, 'admin@admin.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 'admin', '29893489384', ''),
(23, '', 'sdfsd@cc.cc', 'e0ba592a57a8a6046677449342b011eb', 4, 'sdfsdfs4', '35345345', 'sdfsdfsdf'),
(24, '', 'sdfsd@gg.cc', '34b84d86680aaeb7477f6f4898a8452a', 4, 'ssdfsdfsd', '34345345', 'sdfsdfsdf'),
(25, '', 'asdas@gg.cc', '8c71fb3f7593543f2ad180d31148a7cf', 4, 'coba tanpa foto', '234234234', 'asdfsdf'),
(26, '', 'pelanggan@level.com', '202cb962ac59075b964b07152d234b70', 5, 'pelanggan level 4', '084948557845', 'sdfsdfsdfsdf'),
(27, '', 'kurir@laundry.com', '202cb962ac59075b964b07152d234b70', 4, 'kurir laundry', '98457847545', 'sdsdsdsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_daftar_paket`
--
ALTER TABLE `tb_daftar_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tb_order_tb_daftar_paket` (`packet_id`),
  ADD KEY `FK_tb_order_tb_user` (`user_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_daftar_paket`
--
ALTER TABLE `tb_daftar_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `FK_tb_order_tb_daftar_paket` FOREIGN KEY (`packet_id`) REFERENCES `tb_daftar_paket` (`id_paket`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tb_order_tb_user` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id_user`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
