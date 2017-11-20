-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2017 at 12:36 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_parfum`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(19) NOT NULL,
  `password` varchar(35) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin1', 'root1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_botol`
--

CREATE TABLE IF NOT EXISTS `tb_botol` (
  `kode_botol` varchar(7) NOT NULL,
  `nama_botol` varchar(55) NOT NULL,
  `harga_botol` int(7) NOT NULL,
  PRIMARY KEY (`kode_botol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_botol`
--

INSERT INTO `tb_botol` (`kode_botol`, `nama_botol`, `harga_botol`) VALUES
('BTL000', 'Tanpa Botol', 0),
('BTL001', 'Botol 15 ml', 7000),
('BTL002', 'Botol 30 ml', 75000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_parfum`
--

CREATE TABLE IF NOT EXISTS `tb_parfum` (
  `kode_parfum` varchar(7) NOT NULL,
  `nama_parfum` varchar(55) NOT NULL,
  `harga_ml` int(7) NOT NULL,
  PRIMARY KEY (`kode_parfum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_parfum`
--

INSERT INTO `tb_parfum` (`kode_parfum`, `nama_parfum`, `harga_ml`) VALUES
('PRF001', 'Bulgari', 175000),
('PRF002', 'Hugo Boss', 150000),
('PRF003', 'Calvin Klein', 100000),
('PRF004', 'Guess', 75000),
('PRF005', 'Mont Blanc Legend', 125000),
('PRF006', 'Joy', 110000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE IF NOT EXISTS `tb_transaksi` (
  `kode_transaksi` varchar(9) NOT NULL DEFAULT '0',
  `tanggal` date NOT NULL,
  `kode_parfum` varchar(7) NOT NULL,
  `kode_botol` varchar(7) DEFAULT NULL,
  `bibit` int(3) DEFAULT '1',
  `campuran` int(3) DEFAULT '0',
  `jumlah` int(9) NOT NULL,
  `total` int(9) NOT NULL,
  PRIMARY KEY (`kode_transaksi`),
  KEY `fg_kode_parfum` (`kode_parfum`),
  KEY `fg_kode_botol` (`kode_botol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`kode_transaksi`, `tanggal`, `kode_parfum`, `kode_botol`, `bibit`, `campuran`, `jumlah`, `total`) VALUES
('TRK0001', '2016-10-07', 'PRF001', 'BTL000', 2, 2, 350000, 350000),
('TRK0002', '2017-01-03', 'PRF001', 'BTL001', 1, 0, 3233, 333),
('TRK0003', '2017-01-18', 'PRF001', 'BTL002', 2, 4, 350000, 425000),
('TRK0004', '2017-01-24', 'PRF001', 'BTL002', 2, 4, 350000, 425000),
('TRK0005', '2017-01-27', 'PRF002', 'BTL002', 1, 2, 150000, 225000),
('TRK0006', '2017-01-12', 'PRF002', 'BTL002', 1, 0, 150000, 225000);

--
-- Triggers `tb_transaksi`
--
DROP TRIGGER IF EXISTS `tg_transaksi_insert`;
DELIMITER //
CREATE TRIGGER `tg_transaksi_insert` BEFORE INSERT ON `tb_transaksi`
 FOR EACH ROW BEGIN
  INSERT INTO transaksi_seq VALUES (NULL);
  SET NEW.kode_transaksi = CONCAT('TRK', LPAD(LAST_INSERT_ID(), 4, '0'));
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_seq`
--

CREATE TABLE IF NOT EXISTS `transaksi_seq` (
  `kode_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`kode_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `transaksi_seq`
--

INSERT INTO `transaksi_seq` (`kode_transaksi`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`kode_parfum`) REFERENCES `tb_parfum` (`kode_parfum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`kode_botol`) REFERENCES `tb_botol` (`kode_botol`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
