-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 07:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapekerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_pekerja`
--

CREATE TABLE `info_pekerja` (
  `id` int(3) NOT NULL,
  `nama_pekerja` varchar(50) NOT NULL,
  `no_kp` varchar(12) NOT NULL,
  `jantina` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `info_pekerja`
--

INSERT INTO `info_pekerja` (`id`, `nama_pekerja`, `no_kp`, `jantina`, `no_hp`) VALUES
(3, 'ANIQ NAUFAL BIN MUHAMMAD AZRAEI', '020828160169', 'lelaki', '01162190345'),
(2, 'MUHAMMAD ANAS BIN SUHAIMI', '030531100199', 'lelaki', '0169520918'),
(4, 'ISHUARIYAA A/P PONAN', '030610080616', 'Perempuan', '0133688927'),
(1, 'ANIQ NAUFAL BIN SALEHUDDIN', '031021101671', 'Lelaki', '801117141009'),
(6, 'ANIS ZAHIRA BINTI AZRAF', '080820160642', 'Perempuan', '0192606424'),
(5, 'MUHAMMAD ADAM BIN NAZRI', '850902140975', 'Lelaki', '0133138765');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_pekerja`
--
ALTER TABLE `info_pekerja`
  ADD PRIMARY KEY (`no_kp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
