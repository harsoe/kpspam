-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 02:13 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpspam`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(20) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nopel` varchar(10) NOT NULL,
  `alamat` varchar(10) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `gol` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `nopel`, `alamat`, `rt`, `rw`, `gol`) VALUES
(1, 'bejo', '030120', 'Gilis', '005', '001', 'u'),
(2, 'painem', '00231', 'kwaongan', '006', '002', 's'),
(0, '', '003', '273', '767', '675', 'u'),
(0, 'uwuu', 'iqiiw', '77', 'hgj', 'hgj', 'hjg'),
(0, '', 'jhkhkj', 'jkhkhk', 'kjhkj', 'kjhkj', 'jkhkj'),
(0, '', 'kjdsk', 'hdksj', 'kjshk', 'kjdsh', 'kjshd'),
(0, '', 'hdkjhk', 'hkdwjkj', 'kjhwk', 'kwhf', 'u');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
