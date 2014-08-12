-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 12, 2014 at 12:15 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `corps_hsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `002_jig`
--

CREATE TABLE IF NOT EXISTS `002_jig` (
  `inspect_date` date NOT NULL,
  `inspect_time` time NOT NULL,
  `item_code` int(10) unsigned NOT NULL,
  `machine_id` varchar(10) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `item_ok` int(10) unsigned NOT NULL,
  `update_by` varchar(30) NOT NULL,
  `update_time` datetime NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `002_jig`
--

INSERT INTO `002_jig` (`inspect_date`, `inspect_time`, `item_code`, `machine_id`, `employee_id`, `item_ok`, `update_by`, `update_time`, `id`) VALUES
('2014-07-23', '00:00:00', 12, '', 3, 13, '1', '2014-07-23 00:00:00', 1),
('2014-07-23', '00:00:12', 123, '1', 2, 9, '1', '2014-07-23 11:37:48', 3);

-- --------------------------------------------------------

--
-- Table structure for table `002_jig_detail`
--

CREATE TABLE IF NOT EXISTS `002_jig_detail` (
  `master_id` int(11) NOT NULL,
  `defect_code` varchar(6) NOT NULL,
  `qty` int(11) NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `002_jig_detail`
--

INSERT INTO `002_jig_detail` (`master_id`, `defect_code`, `qty`, `id`) VALUES
(3, 'jig01', 7, 13),
(3, 'jig02', 8, 14),
(3, 'jig03', 8, 15),
(3, 'jig04', 7, 16),
(3, 'jig05', 0, 17),
(3, 'jig06', 0, 18),
(3, 'jig07', 6, 19),
(3, 'jig08', 6, 20),
(3, 'jig09', 9, 21),
(3, 'jig10', 9, 22),
(3, 'jig11', 8, 23),
(3, 'jig12', 0, 24);

-- --------------------------------------------------------

--
-- Table structure for table `004_jig`
--

CREATE TABLE IF NOT EXISTS `004_jig` (
  `inspect_date` date NOT NULL,
  `item_code` int(10) unsigned NOT NULL,
  `employee_id` int(11) NOT NULL,
  `item_ok` int(10) unsigned NOT NULL,
  `update_by` varchar(30) NOT NULL,
  `update_time` datetime NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `004_jig`
--

INSERT INTO `004_jig` (`inspect_date`, `item_code`, `employee_id`, `item_ok`, `update_by`, `update_time`, `id`) VALUES
('2014-07-21', 3241421, 1, 4, '1', '2014-07-21 07:01:26', 2);

-- --------------------------------------------------------

--
-- Table structure for table `004_jig_detail`
--

CREATE TABLE IF NOT EXISTS `004_jig_detail` (
  `master_id` int(11) NOT NULL,
  `defect_code` varchar(6) NOT NULL,
  `qty` int(11) NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `004_jig_detail`
--

INSERT INTO `004_jig_detail` (`master_id`, `defect_code`, `qty`, `id`) VALUES
(2, 'jig05', 26, 7),
(2, 'jig06', 7, 8),
(2, 'jig07', 6, 9),
(2, 'jig08', 5, 10),
(2, 'jig09', 5, 11),
(2, 'jig10', 44, 12);

-- --------------------------------------------------------

--
-- Table structure for table `014_mou`
--

CREATE TABLE IF NOT EXISTS `014_mou` (
  `inspect_date` date NOT NULL,
  `item_code` varchar(32) DEFAULT NULL,
  `employee_id` varchar(32) DEFAULT NULL,
  `gypsum_type` int(11) NOT NULL COMMENT 'diisi dari pilihan tabel item juga',
  `item_ok` int(10) unsigned NOT NULL,
  `update_by` varchar(30) NOT NULL,
  `update_time` datetime NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `014_mou`
--

INSERT INTO `014_mou` (`inspect_date`, `item_code`, `employee_id`, `gypsum_type`, `item_ok`, `update_by`, `update_time`, `id`) VALUES
('2014-07-17', '0', '0', 0, 7, '1', '2014-07-17 06:41:53', 4),
('2014-07-17', '0', '0', 0, 7, '1', '2014-07-17 06:42:44', 5),
('2014-07-11', '3241421', '2', 0, 0, '1', '2014-07-18 06:26:25', 12),
('2014-07-18', '3241421', '2', 0, 34124, '1', '2014-07-17 08:53:37', 11),
('2014-07-12', '123', '1', 0, 0, '1', '2014-07-22 12:05:17', 13);

-- --------------------------------------------------------

--
-- Table structure for table `014_mou_detail`
--

CREATE TABLE IF NOT EXISTS `014_mou_detail` (
  `master_id` int(11) NOT NULL,
  `defect_code` varchar(6) NOT NULL,
  `qty` int(11) NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `014_mou_detail`
--

INSERT INTO `014_mou_detail` (`master_id`, `defect_code`, `qty`, `id`) VALUES
(4, 'mou01', 2, 15),
(4, 'mou02', 6, 16),
(4, 'mou03', 7, 17),
(4, 'mou04', 8, 18),
(4, 'mou05', 6, 19),
(4, 'mou06', 4, 20),
(4, 'mou07', 6, 21),
(5, 'mou01', 68, 22),
(5, 'mou02', 68, 23),
(5, 'mou03', 7, 24),
(5, 'mou04', 6, 25),
(5, 'mou05', 6, 26),
(5, 'mou06', 7, 27),
(5, 'mou07', 0, 28),
(6, 'mou01', 3, 29),
(6, 'mou02', 0, 30),
(6, 'mou03', 0, 31),
(6, 'mou04', 0, 32),
(6, 'mou05', 0, 33),
(6, 'mou06', 0, 34),
(6, 'mou07', 0, 35),
(7, 'mou01', 34, 36),
(7, 'mou02', 0, 37),
(7, 'mou03', 9, 38),
(7, 'mou04', 0, 39),
(7, 'mou05', 0, 40),
(7, 'mou06', 0, 41),
(7, 'mou07', 0, 42),
(8, 'mou01', 0, 43),
(8, 'mou02', 0, 44),
(8, 'mou03', 0, 45),
(8, 'mou04', 2, 46),
(8, 'mou05', 0, 47),
(8, 'mou06', 0, 48),
(8, 'mou07', 0, 49),
(9, 'mou01', 0, 50),
(9, 'mou02', 4325, 51),
(9, 'mou03', 0, 52),
(9, 'mou04', 0, 53),
(9, 'mou05', 9, 54),
(9, 'mou06', 9, 55),
(9, 'mou07', 0, 56),
(10, 'mou01', 3412, 57),
(10, 'mou02', 0, 58),
(10, 'mou03', 0, 59),
(10, 'mou04', 0, 60),
(10, 'mou05', 0, 61),
(10, 'mou06', 0, 62),
(10, 'mou07', 0, 63),
(11, 'mou01', 3, 64),
(11, 'mou02', 8, 65),
(11, 'mou03', 0, 66),
(11, 'mou04', 6, 67),
(11, 'mou05', 0, 68),
(11, 'mou06', 5, 69),
(11, 'mou07', 4, 70),
(12, 'mou01', 3478, 71),
(12, 'mou02', 8, 72),
(12, 'mou03', 8, 73),
(12, 'mou04', 8, 74),
(12, 'mou05', 8, 75),
(12, 'mou06', 8, 76),
(12, 'mou07', 0, 77),
(13, 'mou01', 10, 78),
(13, 'mou02', 80, 79),
(13, 'mou03', 78, 80),
(13, 'mou04', 0, 81),
(13, 'mou05', 87, 82),
(13, 'mou06', 6, 83),
(13, 'mou07', 0, 84);

-- --------------------------------------------------------

--
-- Table structure for table `checkpoint`
--

CREATE TABLE IF NOT EXISTS `checkpoint` (
  `checkpoint_name` text NOT NULL,
  `id` int(15) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employee_master`
--

CREATE TABLE IF NOT EXISTS `employee_master` (
  `employee_name` text NOT NULL,
  `divisi` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `employee_master`
--

INSERT INTO `employee_master` (`employee_name`, `divisi`, `id`) VALUES
('Eky Fauzi', 'Developer', 1),
('Riko Meisaputra', 'Developer', 2),
('Jati Anoa', 'Developer', 3),
('Tiyas Luthfitasari', 'AE', 4),
('Zaldi Marantika', 'Developer', 5);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `item_code` varchar(20) NOT NULL COMMENT 'used in form',
  `item_name` varchar(75) NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'use in target and weight',
  PRIMARY KEY (`id`),
  UNIQUE KEY `item_code` (`item_code`),
  KEY `item_name` (`item_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_code`, `item_name`, `id`) VALUES
('123', 'Nama Item', 1),
('3241421', 'asdfasf', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mould_defect`
--

CREATE TABLE IF NOT EXISTS `mould_defect` (
  `mould_id` int(11) NOT NULL,
  `pori_pori` int(11) NOT NULL,
  `lengket_di_mould` int(11) NOT NULL,
  `retak` int(11) NOT NULL,
  `sumbing` int(11) NOT NULL,
  `kotoran_finish` int(11) NOT NULL,
  `lubang_bawah` int(11) NOT NULL,
  `kerusakan_cetak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mould_detail`
--

CREATE TABLE IF NOT EXISTS `mould_detail` (
  `mould_id` int(15) NOT NULL,
  `employee_id` int(15) NOT NULL,
  `product_ok` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mould_master`
--

CREATE TABLE IF NOT EXISTS `mould_master` (
  `shift` enum('1','2') NOT NULL,
  `inspect_time` datetime NOT NULL,
  `iser_id` int(15) NOT NULL,
  `checkpoint_id` int(15) NOT NULL,
  `create_time` datetime NOT NULL,
  `create_form_ip` text NOT NULL,
  `id` int(15) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pareto_defect`
--

CREATE TABLE IF NOT EXISTS `pareto_defect` (
  `division` varchar(30) NOT NULL,
  `defect_code` varchar(10) NOT NULL,
  `defect_name` varchar(50) NOT NULL,
  `forms` varchar(50) NOT NULL COMMENT 'contoh isian: 014.mou;002.mou',
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `defect_code` (`defect_code`),
  KEY `division` (`division`,`defect_name`,`forms`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='berisi daftar pareto kerusakan yg dapat ditambahkan sesuai k' AUTO_INCREMENT=22 ;

--
-- Dumping data for table `pareto_defect`
--

INSERT INTO `pareto_defect` (`division`, `defect_code`, `defect_name`, `forms`, `id`) VALUES
('Mould', '1234', 'ABCD', '004_mou', 1),
('Mould', 'mou01', 'Kerusakan Cetak ', '014_mou', 2),
('Mould', 'mou02', 'Kotoran Finish', '014_mou', 3),
('Mould', 'mou03', 'Lengket di Case Mould', '014_mou', 4),
('Mould', 'mou04', 'Lubang Bawah', '014_mou', 5),
('Mould', 'mou05', 'Pori-Pori', '014_mou', 6),
('Mould', 'mou06', 'Retak', '014_mou', 7),
('Mould', 'mou07', 'Sumbing', '014_mou', 8),
('Jiggering', 'jig01', 'Berubah Bentuk', '002_jig', 9),
('Jiggering', 'jig02', 'Gagang Miring', '002_jig', 10),
('Jiggering', 'jig03', 'Gagang Retak', '002_jig', 11),
('Jiggering', 'jig04', 'Lubang Jarum', '002_jig', 12),
('Jiggering', 'jig05', 'Pecah', '002_jig;004_jig', 13),
('Jiggering', 'jig06', 'Pori-Pori', '002_jig;004_jig', 14),
('Jiggering', 'jig07', 'Retak Bawah', '002_jig;004_jig', 15),
('Jiggering', 'jig08', 'Retak Kaki', '002_jig;004_jig', 16),
('Jiggering', 'jig09', 'Retak Pinggir', '002_jig;004_jig', 17),
('Jiggering', 'jig10', 'Rusak Cetak', '002_jig;004_jig', 18),
('Jiggering', 'jig11', 'Rusak Tempel', '002_jig', 19),
('Jiggering', 'jig12', 'Sumbing Kaki', '002_jig', 20),
('Mould', '12', 'dsaff', '004.mou', 21);

-- --------------------------------------------------------

--
-- Table structure for table `target_history`
--

CREATE TABLE IF NOT EXISTS `target_history` (
  `item_id` int(11) NOT NULL,
  `target_qty` int(11) NOT NULL,
  `period_time` varchar(10) NOT NULL COMMENT 'contoh: daily atau monthly',
  `last_update` date NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`,`last_update`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='bersama dgn tabel item, menyimpan history perubahan target i' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `target_history`
--

INSERT INTO `target_history` (`item_id`, `target_qty`, `period_time`, `last_update`, `id`) VALUES
(1, 1231, 'Harian', '2014-07-16', 1),
(2, 32421, 'weekly', '2014-07-16', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `level_user` enum('dev','admin','user','') NOT NULL,
  `allow` varchar(32) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `level_user`, `allow`, `id`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'dev', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `weight_history`
--

CREATE TABLE IF NOT EXISTS `weight_history` (
  `item_id` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `last_update` date NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`,`last_update`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='bersama dgn tabel item, menyimpan history perubahan berat it' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `weight_history`
--

INSERT INTO `weight_history` (`item_id`, `weight`, `last_update`, `id`) VALUES
(1, 20, '2014-07-16', 1),
(2, 34, '2014-07-16', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
