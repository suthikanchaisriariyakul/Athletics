-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 11, 2022 at 01:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ath`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_2sep`
--

CREATE TABLE `data_2sep` (
  `id` int(11) NOT NULL,
  `list` text NOT NULL,
  `list2` varchar(255) NOT NULL,
  `list3` varchar(255) NOT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `typ` varchar(10) NOT NULL,
  `team` varchar(5) NOT NULL,
  `tus` enum('แข่งแล้ว','ยังไม่ได้แข่ง','ยกเลิกรายการ','') NOT NULL,
  `no1` enum('สีขาว','สีเหลือง','สีแดง','สีน้ำเงิน','สีแสด','สีเขียว') NOT NULL,
  `no2` enum('สีขาว','สีเหลือง','สีแดง','สีน้ำเงิน','สีแสด','สีเขียว') NOT NULL,
  `no3` enum('สีขาว','สีเหลือง','สีแดง','สีน้ำเงิน','สีแสด','สีเขียว') NOT NULL,
  `sta` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_2sep`
--

INSERT INTO `data_2sep` (`id`, `list`, `list2`, `list3`, `grade`, `typ`, `team`, `tus`, `no1`, `no2`, `no3`, `sta`) VALUES
(1, 'w zr gw g a', '', '', 'zdh', 'aezh', 'e', 'แข่งแล้ว', 'สีเหลือง', 'สีแสด', 'สีน้ำเงิน', '00:00:00'),
(22, 'zdhf zshg zehge', '', '', 'zdfgh', 'zdf', 'zz', 'แข่งแล้ว', '', '', '', '00:00:00'),
(333, 'xfyjk  srt usry a et', '', '', 'eas h', 'se h', 'A', '', '', '', '', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `reward`
--

CREATE TABLE `reward` (
  `id` int(11) NOT NULL,
  `no1` int(11) NOT NULL,
  `no2` int(11) NOT NULL,
  `no3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `showdata`
--

CREATE TABLE `showdata` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `list` varchar(255) NOT NULL,
  `grade` varchar(11) NOT NULL,
  `team` varchar(5) NOT NULL,
  `white` enum('n1','n2','n3') DEFAULT NULL,
  `yellow` enum('n1','n2','n3','') DEFAULT NULL,
  `red` enum('n1','n2','n3','') DEFAULT NULL,
  `blue` enum('n1','n2','n3','') DEFAULT NULL,
  `orange` enum('n1','n2','n3','') DEFAULT NULL,
  `green` enum('n1','n2','n3','') DEFAULT NULL,
  `statis` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `showdata`
--

INSERT INTO `showdata` (`id`, `number`, `list`, `grade`, `team`, `white`, `yellow`, `red`, `blue`, `orange`, `green`, `statis`) VALUES
(1, 0, 'วิ่งผลัด 8x50 เมตร', 'ป.4 (ชาย)', 'A', 'n1', 'n1', 'n1', 'n1', 'n1', 'n1', '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_2sep`
--
ALTER TABLE `data_2sep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reward`
--
ALTER TABLE `reward`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showdata`
--
ALTER TABLE `showdata`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
