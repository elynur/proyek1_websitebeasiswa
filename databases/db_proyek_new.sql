-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 10:29 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_proyek_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `nisn` varchar(10) NOT NULL,
  `status_kelolosan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`nisn`, `status_kelolosan`) VALUES
('1234', 'LOLOS');

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `nisn` varchar(10) NOT NULL,
  `sk_siswa` varchar(100) NOT NULL,
  `sk_bermaterai` varchar(100) NOT NULL,
  `sk_pernyataan_sekolah` varchar(100) NOT NULL,
  `slip_gaji` varchar(100) NOT NULL,
  `slip_listrik_rumah` varchar(100) NOT NULL,
  `denah_rumah` varchar(100) NOT NULL,
  `foto_rumah` varchar(100) NOT NULL,
  `ijasah` varchar(100) NOT NULL,
  `kartu_keluarga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`nisn`, `sk_siswa`, `sk_bermaterai`, `sk_pernyataan_sekolah`, `slip_gaji`, `slip_listrik_rumah`, `denah_rumah`, `foto_rumah`, `ijasah`, `kartu_keluarga`) VALUES
('1234', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(40) NOT NULL,
  `id_politeknik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `id_politeknik`) VALUES
(1101, 'Teknik Mesin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `politeknik`
--

CREATE TABLE `politeknik` (
  `id_politeknik` int(11) NOT NULL,
  `nama_politeknik` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `politeknik`
--

INSERT INTO `politeknik` (`id_politeknik`, `nama_politeknik`) VALUES
(1, 'Politeknik Negeri Malang'),
(2, 'Politeknik Negeri Malang'),
(3, 'Politeknik Negeri Sriwijaya');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `id_jurusan`) VALUES
(1, 'D3 Teknik Mesin', 1101);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(10) NOT NULL,
  `nama_siswa` varchar(40) NOT NULL,
  `alamat_siswa` varchar(50) NOT NULL,
  `nama_orangtua` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_telepon` varchar(14) NOT NULL,
  `asal_sekolah` varchar(20) NOT NULL,
  `jurusan_sekolah` varchar(15) NOT NULL,
  `politeknik_id` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama_siswa`, `alamat_siswa`, `nama_orangtua`, `email`, `no_telepon`, `asal_sekolah`, `jurusan_sekolah`, `politeknik_id`, `prodi_id`) VALUES
('1234', 'wewe', 'e', 'e', 'e', 'e', 'e', 'e', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nisn`, `email`, `username`, `password`, `name`, `level`) VALUES
(1, '1234', 'w', 'el', 'el', 'w', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD KEY `nisn` (`nisn`) USING BTREE;

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`) USING BTREE,
  ADD KEY `id_politeknik` (`id_politeknik`) USING BTREE;

--
-- Indexes for table `politeknik`
--
ALTER TABLE `politeknik`
  ADD PRIMARY KEY (`id_politeknik`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`) USING BTREE,
  ADD KEY `id_jurusan` (`id_jurusan`) USING BTREE;

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`) USING BTREE,
  ADD KEY `pil_prodi` (`prodi_id`),
  ADD KEY `pil_politeknik` (`politeknik_id`,`prodi_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `nisn` (`nisn`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1102;

--
-- AUTO_INCREMENT for table `politeknik`
--
ALTER TABLE `politeknik`
  MODIFY `id_politeknik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
