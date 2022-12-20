-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 08:29 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studytracer`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `nik` char(16) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`nik`, `username`, `password`) VALUES
('211298', 'Cuqi', '211298'),
('447711', 'udin', 'udin123');

-- --------------------------------------------------------

--
-- Table structure for table `akunadmin`
--

CREATE TABLE `akunadmin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akunadmin`
--

INSERT INTO `akunadmin` (`id`, `username`, `password`) VALUES
(7, 'admin', '123'),
(10, 'admin1', 'admin1'),
(11, 'auth', '123');

-- --------------------------------------------------------

--
-- Table structure for table `data_alumni`
--

CREATE TABLE `data_alumni` (
  `nim` varchar(10) NOT NULL,
  `nik` char(16) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tahun_lulus` char(4) DEFAULT NULL,
  `jurusan_alumni` varchar(100) DEFAULT NULL,
  `prodi_alumni` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `email_alumni` varchar(100) DEFAULT NULL,
  `nohp_alumni` varchar(20) DEFAULT NULL,
  `lanjut_pendidikan` varchar(5) DEFAULT NULL,
  `univ_lanjut` varchar(50) DEFAULT NULL,
  `jurusan_lanjut` varchar(50) DEFAULT NULL,
  `prodi_lanjut` varchar(50) DEFAULT NULL,
  `gelar_lanjut` varchar(40) DEFAULT NULL,
  `lanjut_pekerjaan` varchar(5) DEFAULT NULL,
  `pt_lanjut` varchar(50) DEFAULT NULL,
  `bagian_lanjut` varchar(30) DEFAULT NULL,
  `sesuai` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_alumni`
--

INSERT INTO `data_alumni` (`nim`, `nik`, `nama`, `tahun_lulus`, `jurusan_alumni`, `prodi_alumni`, `alamat`, `email_alumni`, `nohp_alumni`, `lanjut_pendidikan`, `univ_lanjut`, `jurusan_lanjut`, `prodi_lanjut`, `gelar_lanjut`, `lanjut_pekerjaan`, `pt_lanjut`, `bagian_lanjut`, `sesuai`) VALUES
('0574638912', '447711', 'Udin Syaifuddin', '2024', 'Teknik Elektro', 'D3 Teknik Informatika', 'Banjarmasin, Kalimantan', 'udin@gmail.com', '098123453112', 'Ya', 'Universitas Indonesia', 'Informatika ', 'D4 Informatika', 'D4', 'Ya', 'PT. Datacom ', 'Head Engineer', 'Ya'),
('12341234', '211298', 'Cuqi Syauqi ', '2022', 'Teknik Mesin', 'D3 Konversi Energi', 'Semarang', 'cuqi@gmail.com', '089771123431', 'Ya', 'Universitas Diponegoro', 'Elektro', 'Energi', 'D4', 'Tidak', '', '', '-');

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner_pekerjaan`
--

CREATE TABLE `kuesioner_pekerjaan` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `bekerja` varchar(5) DEFAULT NULL,
  `perusahaan` varchar(50) DEFAULT NULL,
  `provinsi_perusahaan` varchar(50) DEFAULT NULL,
  `kota_perusahaan` varchar(50) DEFAULT NULL,
  `alamat_perusahaan` varchar(50) DEFAULT NULL,
  `alasan_k` varchar(50) DEFAULT NULL,
  `memilih_k` varchar(50) DEFAULT NULL,
  `email_perusahaan` varchar(50) DEFAULT NULL,
  `jenis_perusahaan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuesioner_pekerjaan`
--

INSERT INTO `kuesioner_pekerjaan` (`id`, `nik`, `bekerja`, `perusahaan`, `provinsi_perusahaan`, `kota_perusahaan`, `alamat_perusahaan`, `alasan_k`, `memilih_k`, `email_perusahaan`, `jenis_perusahaan`) VALUES
(12, '211298', 'Tidak', '', '', '', '', '', '', '', ''),
(13, '447711', 'Ya', 'Datacom', 'DKI Jakarta', 'Jakarta', 'Kelapa Gading', 'Menyambung Hidup', 'Relevan', 'dev@datacom.com', 'PT');

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner_pendidikan`
--

CREATE TABLE `kuesioner_pendidikan` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `kuliah` varchar(5) DEFAULT NULL,
  `jenjang` varchar(10) DEFAULT NULL,
  `kapan` varchar(50) DEFAULT NULL,
  `alasan_p` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `memilih_p` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuesioner_pendidikan`
--

INSERT INTO `kuesioner_pendidikan` (`id`, `nik`, `kuliah`, `jenjang`, `kapan`, `alasan_p`, `nama`, `memilih_p`) VALUES
(5, '211298', 'Ya', 'D4', '2023', 'Menempuh dan hendak mendapatkan gelar D4', 'Universitas Diponegoro', 'Terakreditasi A - Serta dekat dengan domisili'),
(6, '447711', 'Ya', 'D4', '2024', 'Naik jabatan', 'Universitas Indonesia', 'Sangant cocok &amp; dekat dengan area bekerja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `akunadmin`
--
ALTER TABLE `akunadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_alumni`
--
ALTER TABLE `data_alumni`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `kuesioner_pekerjaan`
--
ALTER TABLE `kuesioner_pekerjaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `kuesioner_pendidikan`
--
ALTER TABLE `kuesioner_pendidikan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akunadmin`
--
ALTER TABLE `akunadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kuesioner_pekerjaan`
--
ALTER TABLE `kuesioner_pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kuesioner_pendidikan`
--
ALTER TABLE `kuesioner_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_alumni`
--
ALTER TABLE `data_alumni`
  ADD CONSTRAINT `data_alumni_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `akun` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kuesioner_pekerjaan`
--
ALTER TABLE `kuesioner_pekerjaan`
  ADD CONSTRAINT `kuesioner_pekerjaan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `akun` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kuesioner_pendidikan`
--
ALTER TABLE `kuesioner_pendidikan`
  ADD CONSTRAINT `kuesioner_pendidikan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `akun` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
