-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2024 at 12:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmb`
--

-- --------------------------------------------------------

--
-- Table structure for table `anc`
--

CREATE TABLE `anc` (
  `no_reg` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(128) NOT NULL,
  `suami` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `hpht` varchar(128) NOT NULL,
  `tp` varchar(128) NOT NULL,
  `keluhan` varchar(128) NOT NULL,
  `bb_tb` varchar(128) NOT NULL,
  `tfu_lp` varchar(128) NOT NULL,
  `lila` varchar(128) NOT NULL,
  `td` varchar(128) NOT NULL,
  `suhu` varchar(128) NOT NULL,
  `diagnosa` varchar(128) NOT NULL,
  `penatalaksanaan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anc`
--

INSERT INTO `anc` (`no_reg`, `tanggal`, `nama`, `suami`, `tanggal_lahir`, `alamat`, `hpht`, `tp`, `keluhan`, `bb_tb`, `tfu_lp`, `lila`, `td`, `suhu`, `diagnosa`, `penatalaksanaan`) VALUES
(1, '2024-06-08', 'asd', 'dfg', '2024-06-15', 'asd', 'ad', 'asd', 'asd', 'asd', 'asd', 'asd', 'ads', 'asd', 'asd', 'asd'),
(2, '2024-06-17', 'qwe', 'asd', '2024-06-13', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdas', 'asdas', 'asdas', 'dasdas', 'asdasda', 'asdasd', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `no` varchar(128) NOT NULL,
  `iduser` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`no`, `iduser`, `password`) VALUES
('1', 'admin@gmail.com', 'P@ssw0rd');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `no` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `suami` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`no`, `nama`, `suami`) VALUES
(11, 'asdas', 'zxczx'),
(12, 'zxcc', 'dsaa'),
(13, 'asd', 'asd'),
(14, 'jkl', 'kjljkl'),
(15, 'asd', 'dfg'),
(16, 'qwe', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anc`
--
ALTER TABLE `anc`
  ADD PRIMARY KEY (`no_reg`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anc`
--
ALTER TABLE `anc`
  MODIFY `no_reg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
