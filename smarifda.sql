-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 10:31 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smarifda`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi_lpk`
--

CREATE TABLE IF NOT EXISTS `absensi_lpk` (
  `id_absen` varchar(65) NOT NULL,
  `id_siswa` varchar(65) NOT NULL,
  `id_kelas` varchar(3) NOT NULL,
  `tanggal` date NOT NULL,
  `alasan` varchar(7) NOT NULL,
  `keterangan` varchar(115) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi_lpk`
--

INSERT INTO `absensi_lpk` (`id_absen`, `id_siswa`, `id_kelas`, `tanggal`, `alasan`, `keterangan`) VALUES
('5c6d56eb9e463', '5c63df0ebc399', '111', '2019-02-20', 'sakit', 'demam'),
('5c70c570ea0ab', '5c63dd4ac1a1d', '011', '2019-02-23', 'alpha', ''),
('5c850d3eaaee7', '5c63e087b603b', '012', '2019-03-10', 'sakit', ''),
('5c850d7ccb0c9', '5c63e068e4371', '111', '2019-03-10', 'alpha', ''),
('5c8540883c53e', '5c63df0ebc399', '012', '2019-03-10', 'izin', ''),
('5c91ec25a51fb', '5c63df0ebc399', '111', '2019-03-20', 'alpha', ''),
('5c9b4ea600e71', '5c63df72eeb25', '011', '2019-03-27', 'sakit', 'izin ke dua');

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi`
--

CREATE TABLE IF NOT EXISTS `evaluasi` (
  `no` int(3) NOT NULL,
  `soal` varchar(500) NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `id_jawaban` int(3) NOT NULL,
  `skor` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` varchar(15) NOT NULL,
  `nama` varchar(65) NOT NULL,
  `alamat` varchar(115) NOT NULL,
  `foto` varchar(65) NOT NULL,
  `pass` varchar(65) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `alamat`, `foto`, `pass`, `level`) VALUES
('000000001', 'admin', '', '', '21232f297a57a5a743894a0e4a801fc3', 1),
('123', 'administrator', '', '', '202cb962ac59075b964b07152d234b70', 1),
('290495001', 'Muhammad Syamsi', 'Kepulungan, Gempol - Pasuruan', '290495001.jpg', 'ea73852efb2b6c09443746bef6db83f5', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id_kegiatan` varchar(64) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(500) NOT NULL DEFAULT 'default.jpg',
  `keterangan` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nip`, `judul`, `tanggal`, `foto`, `keterangan`) VALUES
('1', '290495001', 'wisuda jeh', '2018-05-18', 'img1.jpeg', 'wisuda SMARIFDA 2018'),
('5', '123', 'latian edit foto beh', '2019-02-28', '5.jpg', 'latian yaah'),
('5c643150460c7', '290495001', 'BEHIND THE SCENE', '2018-10-16', '5c643150460c7.JPG', 'Proses Shooting film pendek oleh anak LPK MM kelas XI'),
('5c64f2c3691f7', '123', 'BEHIND THE SCENE', '2019-01-29', '5c64f2c3691f7.jpg', 'Proses shooting video tutorial '),
('5c8894a25caa6', '290495001', 'revisi', '2019-03-13', '5c8894a25caa6.jpg', 're'),
('5c9b5a17efd0a', '123', 'tambahan dari admin', '2019-03-27', '5c9b5a17efd0a.jpg', 'ini kegitanan upload dari admin');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` varchar(3) NOT NULL,
  `kelas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
('010', 'X MIPA'),
('011', 'XI MIPA'),
('012', 'XII MIPA'),
('110', 'X IPS'),
('111', 'XI IPS'),
('112', 'XII IPS');

-- --------------------------------------------------------

--
-- Table structure for table `kumpulan_tugas`
--

CREATE TABLE IF NOT EXISTS `kumpulan_tugas` (
  `id_kerja` varchar(65) NOT NULL,
  `id_tugas` varchar(65) NOT NULL,
  `NISN` varchar(25) NOT NULL,
  `pic_kerja` varchar(65) DEFAULT NULL,
  `jawab` varchar(500) NOT NULL,
  `nilai` int(3) DEFAULT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kumpulan_tugas`
--

INSERT INTO `kumpulan_tugas` (`id_kerja`, `id_tugas`, `NISN`, `pic_kerja`, `jawab`, `nilai`, `keterangan`) VALUES
('05641025', '5c87a0039d438', '5055', '', 'jawaban brian ke 2', 81, ''),
('55555555555', '5c866f9305a73', '5055', '', 'ini jawabanku', 78, 'sangat bagus'),
('65484254', '5c866f9305a73', '5057', '', 'jawaban baru', 80, '');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` varchar(65) NOT NULL,
  `id_siswa` varchar(65) NOT NULL,
  `id_kelas` varchar(3) NOT NULL,
  `kd` varchar(255) NOT NULL,
  `nilai` int(3) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_siswa`, `id_kelas`, `kd`, `nilai`, `keterangan`) VALUES
('5c6d5b388a7dc', '5c63dddf32af6', '111', '3.7 Memproduksi karya multimedia video digital', 100, 'Siswa sangat mampu memproduksi karya multimedia berupa video digital'),
('5c6d5d3242f09', '5c63dd4ac1a1d', '111', '3.7 Memproduksi karya multimedia video digital', 100, 'Siswa sangat mampu memproduksi karya multimedia berupa video digital');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_ujian`
--

CREATE TABLE IF NOT EXISTS `nilai_ujian` (
  `NISN` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `uts` int(3) DEFAULT NULL,
  `uas` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_ujian`
--

INSERT INTO `nilai_ujian` (`NISN`, `nama`, `uts`, `uas`) VALUES
('5055', 'BRIAN FEBRIANTO', 78, 77),
('5057', 'DHEA ALIYYUL W', 84, 50),
('5058', 'ANANG OCTAV R', 78, 0);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` varchar(64) NOT NULL,
  `NISN` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `NISN`, `nama`, `foto`, `asal_sekolah`, `alamat`, `pass`, `kelas`) VALUES
('5c63dd4ac1a1d', '5055', 'BRIAN FEBRIANTO', '5c63dd4ac1a1d.jpg', 'SMP 1 Pandaan', 'Dayurejo, Rt.02 Rw.04', 'bcd724d15cde8c47650fda962968f102', 'XI'),
('5c63ddc831632', '5057', 'DHEA ALIYYUL W', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63dddf32af6', '5058', 'ANANG OCTAV R', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63ddf33b440', '5059', 'DIVA MACHILA', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63de2ab0bd6', '5061', 'ANGGRAENI DWI SUSANTI', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63dedae157c', '5063', 'PUTRI OCTAVIA MEGACINDRA', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63def90165c', '5064', 'ADI CHANDRA SUBAGYA', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63df0ebc399', '5065', 'MUHAMMAD ICHYAUDIN', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63df29b0a37', '5066', 'AFIFI ALFIANTO', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63df53381fd', '5067', 'IRHAM FAJHRI TAULADANI', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63df72eeb25', '5068', 'FEBRIZKA SULTAN RADIANDI', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63dfb11414d', '5069', 'LAILA TUZIBAH', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63dfc6e80e8', '5070', 'LINGGARANI DWI', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63dfe5b6ed1', '5071', 'MUHAMMAD NICO SETIAWAN', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63dffcad3ca', '5072', 'MAULID NABILA IVANDA', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63e021503e1', '5073', 'PRADANA WAHYU RAHMAWATI', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63e055a1c8a', '5074', 'RIKA SALFA AMALIA', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63e068e4371', '5075', 'BAYU PUTRA PRATAMA', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63e087b603b', '5076', 'JAKA PURNAMA', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63e09b941cb', '5077', 'AJENG PUTRI DEWI', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63e0b2683dc', '5078', 'ASHRORUL MUFIDAH', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63e10e81740', '5079', 'ELVIN M. H. FARISKA', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63e121b3482', '5080', 'TRI ANTIKA', 'default.jpg', 'SMP', '', '', 'XI'),
('5c63e12eddb3c', '5081', 'WINDA SARI', 'default.jpg', 'SMP', '', '', 'XI'),
('5c9c9371ca600', '5084', 'YOGI SEPTIAWAN', '5c9c9371ca600.jpg', 'SMPN 2 GEMPOL', 'Jl. Raya Jati Raya', 'bcd724d15cde8c47650fda962968f102', '');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE IF NOT EXISTS `tugas` (
  `id_tugas` varchar(65) NOT NULL,
  `materi` varchar(255) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `pic_soal` varchar(65) DEFAULT NULL,
  `soal` varchar(500) NOT NULL,
  `batas` date NOT NULL,
  `kelas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id_tugas`, `materi`, `nip`, `pic_soal`, `soal`, `batas`, `kelas`) VALUES
('5c866f9305a73', 'layout/ grid', '290495001', '5c866f9305a73.png', 'revsisi lagi lagi dan lagi', '2019-11-30', 'XII'),
('5c87751a6e847', 'warna', '290495001', '5c87751a6e847.png', 'try 6', '0000-00-00', 'X'),
('5c879db4db153', 'grid', '290495001', NULL, 'test terakhir', '2019-06-05', 'XI'),
('5c879f352a51e', 'pengambilan gambar', '290495001', NULL, 'tesse', '2019-04-12', 'XII'),
('5c87a0039d438', 'objek 2d', '290495001', NULL, 'testing', '2019-04-03', 'XII'),
('5c88a5dead529', 'objek 3d', '290495001', NULL, '1 + 1 =', '2019-04-29', 'X'),
('5c9b6203d5337', 'Membuat objek 2 dimensi dong', '290495001', '5c9b6203d5337.png', 'ini soal terbaru dong', '2019-04-20', 'XI IPS'),
('656546', 'transisi', '123', NULL, 'soal', '0000-00-00', ''),
('65984', 'efek khusus', '123', NULL, 'soal ke 2', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi_lpk`
--
ALTER TABLE `absensi_lpk`
 ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
 ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kumpulan_tugas`
--
ALTER TABLE `kumpulan_tugas`
 ADD PRIMARY KEY (`id_kerja`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
 ADD PRIMARY KEY (`id_tugas`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
