-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 12:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pkl`
--

CREATE TABLE `tb_pkl` (
  `id` int(11) NOT NULL,
  `instansi_tujuan` varchar(128) NOT NULL,
  `nim_mhs1` varchar(128) NOT NULL,
  `nama_mhs1` varchar(128) NOT NULL,
  `nim_mhs2` varchar(128) NOT NULL,
  `nama_mhs2` varchar(128) NOT NULL,
  `tujuan_surat` varchar(128) NOT NULL,
  `bidang_instansi` varchar(128) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pkl`
--

INSERT INTO `tb_pkl` (`id`, `instansi_tujuan`, `nim_mhs1`, `nama_mhs1`, `nim_mhs2`, `nama_mhs2`, `tujuan_surat`, `bidang_instansi`, `pekerjaan`) VALUES
(1, 'Kantor Dinas Tenaga Kerja', '1805021020', 'I Komang Sudarma Puja Yasa', '1805021025', 'Nyoman Wisnu Wardana', 'Kantor Dinas Tenaga Kerja', 'Pemerintahan', 'Web'),
(2, 'Kantor Dinas Kependudukan Catatan Sipil', '1805021034', 'Gusti Ngurah Dhama Putra', '1805021030', 'Gusti Ngurah Kadek Ari Suryawan', 'Kantor Dinas Kependudukan Catatan Sipil', 'Pemerintahan', 'Web');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pkl`
--
ALTER TABLE `tb_pkl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pkl`
--
ALTER TABLE `tb_pkl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
