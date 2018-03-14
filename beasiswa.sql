-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2018 at 10:56 AM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id` int(10) NOT NULL,
  `lembaga_id` int(10) NOT NULL,
  `nama_beasiswa` varchar(255) NOT NULL,
  `skala_tunjangan` text NOT NULL,
  `jumlah_tunjangan` int(15) NOT NULL,
  `masa_kontrak` text NOT NULL,
  `tanggal_oprec` date NOT NULL,
  `status_oprec` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id`, `lembaga_id`, `nama_beasiswa`, `skala_tunjangan`, `jumlah_tunjangan`, `masa_kontrak`, `tanggal_oprec`, `status_oprec`) VALUES
(1, 1, 'Bakti Pada Negeri 2018', 'per Semester', 6000000, '2 Periode', '2018-03-10', 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_organisasi`
--

CREATE TABLE `informasi_organisasi` (
  `id` int(10) NOT NULL,
  `pendaftar_id` int(10) NOT NULL,
  `nama_organisasi` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `tingkat_organisasi` text NOT NULL,
  `awal_jabatan` date NOT NULL,
  `akhir_jabatan` date DEFAULT NULL,
  `no_sertifikat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi_organisasi`
--

INSERT INTO `informasi_organisasi` (`id`, `pendaftar_id`, `nama_organisasi`, `jabatan`, `tingkat_organisasi`, `awal_jabatan`, `akhir_jabatan`, `no_sertifikat`) VALUES
(3, 9, 'Himpunan Mahasiswa Sistem Informasi', 'Kepala Divisi', 'Jurusan', '2018-03-01', '2018-03-31', '2018033120180301.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_prestasi`
--

CREATE TABLE `informasi_prestasi` (
  `id` int(10) NOT NULL,
  `pendaftar_id` int(10) NOT NULL,
  `prestasi` varchar(255) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `jenis_kepesertaan` varchar(255) NOT NULL,
  `tingkat_kegiatan` text NOT NULL,
  `predikat` varchar(255) NOT NULL,
  `no_sertifikat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi_prestasi`
--

INSERT INTO `informasi_prestasi` (`id`, `pendaftar_id`, `prestasi`, `tanggal_kegiatan`, `jenis_kepesertaan`, `tingkat_kegiatan`, `predikat`, `no_sertifikat`) VALUES
(8, 9, 'Lomba Robot Nasional', '2009-06-24', 'Peserta', 'Nasional', 'Juara III', 'lombarobotnasional20090624.pdf'),
(9, 9, 'Olimpiade Matematika Nasional', '2018-03-01', 'Peserta', 'Nasional', 'Juara Lain', 'olimpiadematematikanasional20180301.pdf'),
(10, 9, 'Lomba', '2018-03-14', 'Peserta', 'Fakultas', 'Juara II', 'lomba20180314.pdf'),
(11, 10, 'lomba badminton', '2018-03-22', 'Peserta', 'Universitas', 'Juara II', 'lombabadminton20180322.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(10) NOT NULL,
  `beasiswa_id` int(10) NOT NULL,
  `kriteria_umum` text NOT NULL,
  `ipk_min` int(10) NOT NULL,
  `semester_maks` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `beasiswa_id`, `kriteria_umum`, `ipk_min`, `semester_maks`) VALUES
(1, 1, 'Lorem Ipsum', 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `lembaga`
--

CREATE TABLE `lembaga` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `nama_lembaga` varchar(255) NOT NULL,
  `alamat_lembaga` text NOT NULL,
  `logo_lembaga` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lembaga`
--

INSERT INTO `lembaga` (`id`, `user_id`, `nama_lembaga`, `alamat_lembaga`, `logo_lembaga`) VALUES
(1, 4, 'PT Djarum Foundation', 'Jalan Asia Afrika no 59 Bandung', 'logo/W9Bncg8BEVjzAwGN8OWDwmDLHCYgRTkZSsBXXdfs.jpeg'),
(2, 7, 'BFI', 'Sumbersari', 'logo/DN4K9kb1bMaHpAZNoXWmf1sw0oRd8gPIZfGRgfWZ.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(2) NOT NULL,
  `user_level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `user_level`) VALUES
(1, 'Admin'),
(2, 'Lembaga'),
(3, 'Peserta');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `nama_pendaftar` varchar(255) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `alamat_pendaftar` text,
  `telp` varchar(14) DEFAULT NULL,
  `ipk` int(5) DEFAULT NULL,
  `semester` int(3) DEFAULT NULL,
  `foto` text,
  `nama_ayah` text,
  `nama_ibu` text,
  `pekerjaan_ayah` text,
  `pekerjaan_ibu` text,
  `gaji_ayah` int(15) DEFAULT NULL,
  `gaji_ibu` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `user_id`, `nama_pendaftar`, `gender`, `alamat_pendaftar`, `telp`, `ipk`, `semester`, `foto`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `gaji_ayah`, `gaji_ibu`) VALUES
(9, 2, 'Lady Anindya', 'P', 'Sumbersari - Jember', '832455212', 333, 9, 'peserta/Ec8hd2U7RcHp8VItB4Uz1aNHhEtuqf8ZviP7IuGE.jpeg', 'Jacky', 'Chan', 'Tentara', 'Ibu Rumah Tangga', 4000000, 0),
(10, 6, 'nadya', 'P', 'perumahan kebonsari', '08123456789', 3, 4, 'peserta/4hSsLwf1NLUZMJcYkosXdZHWwzQRrNZ0rsZrztxC.jpeg', 'herman', 'siti', 'karyawan swasta', 'ibu rumah tangga', 500000, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar_beasiswa`
--

CREATE TABLE `pendaftar_beasiswa` (
  `pendaftar_id` int(10) NOT NULL,
  `beasiswa_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level_id` int(1) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_user`, `email`, `password`, `level_id`, `remember_token`) VALUES
(2, 'Lady', 'ladyanindya@gmail.com', '$2y$10$7v6RA8FPit12VvcV0q1YOulLfrwgLm/esoAx0WkjFZ4vDO/IHjxwS', 3, '7aJlHLoJQigad5Mkxaal7m0x5AxljSp8mqtd3CK5R3Z9GzR3zmp44n0kLN5u'),
(3, 'Admin', 'adminsistem@gmail.com', '$2y$10$mzRHqqG5IINYwWBFQPI2euLBkJ.lXI4Tx0dRR8lMsh9yX6FoK1Re2', 1, NULL),
(4, 'Djarum', 'djarum@gmail.com', '$2y$10$rPM3GPy8jUPYn90d9XgMi.7zyOvpJ5wQBV3Us52mwX12YwxtBZtI2', 2, 'D3oH6jV2uYFxwWhyjRh8fn5Ysx8edNRg3ofUHPUcrNvUK7gfYeuXnq6nnkF7'),
(5, 'Bank Indonesia', 'bi@gmail.com', '$2y$10$HTQ3/u9oss89YWzOJOO1QOJWw84ftflkKSOR/ikrv.wikAKIV0Su2', 2, NULL),
(6, 'Abc', 'abc@gmail.com', '$2y$10$nq8QopdTgdte/jKcCXpq4OB2Imo/y7JNPtZso9PFvObLzCmLUlg/.', 3, 'nk5xTsMGElLT7vn5jUKvPexh84dZuHnhRpkoUiyLZJHWTcZo2YP5cCY3IriG'),
(7, 'BFI', 'bfi@gmail.com', '$2y$10$B2AILMCDLN5wJuhXvrKT.uUa1P1mgvytj7fkEBxwKvTgiRNMWbHN6', 2, 'uspOkw85MobPQdrZgYK3iWUmkFhf44js0GHeMfJJJzxUtk2BWdmv5YzYvZhc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lembaga_id` (`lembaga_id`);

--
-- Indexes for table `informasi_organisasi`
--
ALTER TABLE `informasi_organisasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPendaftar` (`pendaftar_id`);

--
-- Indexes for table `informasi_prestasi`
--
ALTER TABLE `informasi_prestasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPendaftar` (`pendaftar_id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beasiswa_id` (`beasiswa_id`);

--
-- Indexes for table `lembaga`
--
ALTER TABLE `lembaga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`user_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`user_id`);

--
-- Indexes for table `pendaftar_beasiswa`
--
ALTER TABLE `pendaftar_beasiswa`
  ADD KEY `pendaftar_id` (`pendaftar_id`),
  ADD KEY `beasiswa_id` (`beasiswa_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idLevel` (`level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `informasi_organisasi`
--
ALTER TABLE `informasi_organisasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `informasi_prestasi`
--
ALTER TABLE `informasi_prestasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lembaga`
--
ALTER TABLE `lembaga`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD CONSTRAINT `beasiswa_ibfk_1` FOREIGN KEY (`lembaga_id`) REFERENCES `lembaga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `informasi_organisasi`
--
ALTER TABLE `informasi_organisasi`
  ADD CONSTRAINT `informasi_organisasi_ibfk_1` FOREIGN KEY (`pendaftar_id`) REFERENCES `pendaftar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `informasi_prestasi`
--
ALTER TABLE `informasi_prestasi`
  ADD CONSTRAINT `informasi_prestasi_ibfk_1` FOREIGN KEY (`pendaftar_id`) REFERENCES `pendaftar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD CONSTRAINT `kriteria_ibfk_1` FOREIGN KEY (`beasiswa_id`) REFERENCES `beasiswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lembaga`
--
ALTER TABLE `lembaga`
  ADD CONSTRAINT `lembaga_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD CONSTRAINT `pendaftar_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendaftar_beasiswa`
--
ALTER TABLE `pendaftar_beasiswa`
  ADD CONSTRAINT `pendaftar_beasiswa_ibfk_1` FOREIGN KEY (`pendaftar_id`) REFERENCES `pendaftar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendaftar_beasiswa_ibfk_2` FOREIGN KEY (`beasiswa_id`) REFERENCES `beasiswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `level` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
