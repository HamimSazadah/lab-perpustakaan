-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2019 at 04:01 PM
-- Server version: 5.0.67
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `masterbuku`
--

CREATE TABLE IF NOT EXISTS `masterbuku` (
  `id` bigint(20) NOT NULL auto_increment,
  `judul` text NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tahun` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `masterbuku`
--

INSERT INTO `masterbuku` (`id`, `judul`, `pengarang`, `tahun`) VALUES
(1, 'Coba ', 'Nh Dini', '2019-04-01'),
(2, 'Laskar Pelangi', 'Andrea Hirata', '2010-05-11'),
(3, 'Kisah 25 Rasul', 'a.n', '2019-04-02'),
(4, 'Belajar membuat Web', 'xxx', '2018-03-13'),
(5, 'Coba', 'asdasd', '2019-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `level` text NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `password` varchar(35) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `no_hp`, `level`, `is_active`, `password`) VALUES
(1, 'Administrator', 'admin@gmail.com', '0852741963', 'admin', 1, '21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
