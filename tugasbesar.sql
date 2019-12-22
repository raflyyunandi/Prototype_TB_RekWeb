-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 05:03 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasbesar`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jenis_barang` varchar(128) NOT NULL,
  `harga_barang` varchar(100) NOT NULL,
  `stock_barang` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `deskripsi_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `jenis_barang`, `harga_barang`, `stock_barang`, `image`, `deskripsi_barang`) VALUES
(1, 'Jeruk', '2', '25000', 10, 'Jeruk.jpg', ' Vitamin C juga bisa meningkatkan sistem pertahanan tubuh terhadap penyakit sehingga membantu perlindungan paru-paru dari infeksi. Anda bisa memanfaatkan kulit jeruk untuk mengatasi flu dan demam'),
(2, 'Labu Kuning', '2', '15000', 10, 'Labu.jpg', 'Buah ini renyah saat dimakan, rasanya manis dan sedikit asam. Buah ini banyak mengandung vitamin A.'),
(3, 'Strawberry', '2', '30000', 10, 'Strawberry.jpg', 'troberi mengandung senyawa antosianin yang ampuh  mengurangi risiko serangan jantung hingga 32 persen pada wanita muda dan dewasa.'),
(4, 'Buncis', '1', '10000', 15, 'Kol.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo'),
(5, 'Wortel', '1', '20000', 15, 'Wortel.jpg', ' consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
(6, 'Kacang', '1', '25000', 15, 'Kacang.jpg', 'Excepteur sint occaecat cupidatat non  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `order_user`
--

CREATE TABLE `order_user` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_user`
--

INSERT INTO `order_user` (`id`, `id_barang`, `id_user`, `beli`) VALUES
(67, 4, 35, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `cara_pengiriman` varchar(128) NOT NULL,
  `kurir` varchar(128) NOT NULL,
  `no_hp` varchar(128) NOT NULL,
  `kota_tujuan` varchar(128) NOT NULL,
  `alamat_lengkap` varchar(128) NOT NULL,
  `email_user` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `cara_pengiriman`, `kurir`, `no_hp`, `kota_tujuan`, `alamat_lengkap`, `email_user`) VALUES
(2, 'REGULER', 'JNE', '081225481110', 'Bandung', 'Jl K no 102', 'aaa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `saldo`) VALUES
(29, 'asdwqe', 'raflyyunandia@mail.unpas.ac.id', 'default.jpg', '$2y$10$mKI1yWwpSeElRwpr1ZupGe9rlb.w2wDNm2vAbTkKgVcIXFIjMDIna', 1, 1, 1574942655, 110000),
(30, 'CacaW', 'your@email.com', 'fast-food-restaurant-junk-512.png', '$2y$10$Tx.ugY8xtQD20asvAqOp1eqYmeYT5xVkiE8TfMxPsk5ZAOivOy/0.', 2, 1, 1575126709, 116000),
(34, 'dede', 'dede@gmaill.com', 'default.jpg', '$2y$10$G/NdT21y2eZZNNS1h./TNui107hmMofk1z8Xn28h7eb1pPhuXW6w6', 2, 1, 1576124820, 10000),
(35, 'aaa', 'aaa@gmail.com', 'default.jpg', '$2y$10$n2OqEcalz9T452p0NUa04u29m9TFxArBGyDDMVqYL6Gd0SNhlYsJa', 2, 1, 1576598884, 40000);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `order_user`
--
ALTER TABLE `order_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `order_user`
--
ALTER TABLE `order_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_user`
--
ALTER TABLE `order_user`
  ADD CONSTRAINT `order_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `order_user_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
