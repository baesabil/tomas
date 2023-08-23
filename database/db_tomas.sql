-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 03:05 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tomas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_agama`
--

CREATE TABLE `tb_agama` (
  `id_agama` int(11) NOT NULL,
  `deskripsi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_agama`
--

INSERT INTO `tb_agama` (`id_agama`, `deskripsi`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katolik'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Konghucu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_area_parking`
--

CREATE TABLE `tb_area_parking` (
  `id_area_parking` int(11) NOT NULL,
  `area_parking` varchar(100) NOT NULL,
  `max_area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_area_parking`
--

INSERT INTO `tb_area_parking` (`id_area_parking`, `area_parking`, `max_area`) VALUES
(1, 'Basement', 100),
(2, 'Depan MIPA', 150);

-- --------------------------------------------------------

--
-- Table structure for table `tb_denah`
--

CREATE TABLE `tb_denah` (
  `id_denah` int(11) NOT NULL,
  `id_gambar_denah` int(11) NOT NULL,
  `id_kategori_bangunan` int(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_denah`
--

INSERT INTO `tb_denah` (`id_denah`, `id_gambar_denah`, `id_kategori_bangunan`, `deskripsi`) VALUES
(2, 2, 1, 'test ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_event`
--

CREATE TABLE `tb_event` (
  `id_event` int(11) NOT NULL,
  `id_kategori_event` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `judul_event` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_event`
--

INSERT INTO `tb_event` (`id_event`, `id_kategori_event`, `nim`, `judul_event`, `deskripsi`, `file`) VALUES
(4, 1, '0', 'test', 'test', 'VB_BIMTEK.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_freelance`
--

CREATE TABLE `tb_freelance` (
  `id_freelance` int(11) NOT NULL,
  `id_kategori_freelance` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `judul_freelance` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambar_denah`
--

CREATE TABLE `tb_gambar_denah` (
  `id_gambar_denah` int(11) NOT NULL,
  `file` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gambar_denah`
--

INSERT INTO `tb_gambar_denah` (`id_gambar_denah`, `file`, `deskripsi`) VALUES
(2, 'VB_BIMTEK.png', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_kelamin`
--

CREATE TABLE `tb_jenis_kelamin` (
  `id_jenis_kelamin` int(11) NOT NULL,
  `deskripsi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenis_kelamin`
--

INSERT INTO `tb_jenis_kelamin` (`id_jenis_kelamin`, `deskripsi`) VALUES
(1, 'Laki-Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_kendaraan`
--

CREATE TABLE `tb_jenis_kendaraan` (
  `id_jenis_kendaraan` int(11) NOT NULL,
  `deskripsi` varchar(15) NOT NULL,
  `harga_parkir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenis_kendaraan`
--

INSERT INTO `tb_jenis_kendaraan` (`id_jenis_kendaraan`, `deskripsi`, `harga_parkir`) VALUES
(1, 'Motor', 1000),
(2, 'Mobil', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_bangunan`
--

CREATE TABLE `tb_kategori_bangunan` (
  `id_kategori_bangunan` int(11) NOT NULL,
  `deskripsi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori_bangunan`
--

INSERT INTO `tb_kategori_bangunan` (`id_kategori_bangunan`, `deskripsi`) VALUES
(1, 'Gedung'),
(2, 'Bangunan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_event`
--

CREATE TABLE `tb_kategori_event` (
  `id_kategori_event` int(11) NOT NULL,
  `nama_kategori_event` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori_event`
--

INSERT INTO `tb_kategori_event` (`id_kategori_event`, `nama_kategori_event`) VALUES
(1, 'Webinar'),
(2, 'Seminar'),
(3, 'Workshop'),
(4, 'Lomba');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_freelance`
--

CREATE TABLE `tb_kategori_freelance` (
  `id_kategori_freelance` int(11) NOT NULL,
  `deskripsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori_freelance`
--

INSERT INTO `tb_kategori_freelance` (`id_kategori_freelance`, `deskripsi`) VALUES
(1, 'Magang'),
(2, 'Part Time');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_login`
--

CREATE TABLE `tb_kategori_login` (
  `id_kategori_login` int(11) NOT NULL,
  `kategori_login` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kendaraan`
--

CREATE TABLE `tb_kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `id_jenis_kendaraan` int(11) NOT NULL,
  `id_tipe_kendaraan` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `id_kategori_login` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('1','2') NOT NULL COMMENT '1=aktif,\r\n2=tidak aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `nim`, `id_kategori_login`, `username`, `password`, `status`) VALUES
(1, '0', NULL, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `id_jenis_kelamin` int(11) DEFAULT NULL,
  `id_agama` int(11) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `status_mahasiswa` enum('1','2','','') NOT NULL COMMENT '1=aktif,\r\n2=tidak aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `id_jenis_kelamin`, `id_agama`, `nama`, `tanggal_lahir`, `tempat_lahir`, `alamat`, `no_hp`, `email`, `tanggal_masuk`, `status_mahasiswa`) VALUES
('0', NULL, NULL, 'admin', '0000-00-00', '', '', '', '', '0000-00-00', '1'),
('068013017', 1, 1, 'Nur Abadi Ramadhan', '2022-12-22', 'Klaten', 'Aparkost Dramaga Bogor, Gd. T4. No. 212 Jl. Alternatif IPB Jl. Cilubang Mekar No.Ds, Cikarawang\r\nDramaga', '+6287770113190', 'nurabadiramadhan.mi@gmail.com', '2022-12-23', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_merek`
--

CREATE TABLE `tb_merek` (
  `id_merek` int(11) NOT NULL,
  `deskripsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_merek`
--

INSERT INTO `tb_merek` (`id_merek`, `deskripsi`) VALUES
(1, 'Honda'),
(2, 'Yamaha'),
(3, 'Suzuki'),
(4, 'Kawasaki'),
(5, 'KTM'),
(6, 'Toyota'),
(7, 'Daihatsu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_parking`
--

CREATE TABLE `tb_parking` (
  `id_parking` int(11) NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tipe_kendaraan`
--

CREATE TABLE `tb_tipe_kendaraan` (
  `id_tipe_kendaraan` int(11) NOT NULL,
  `id_jenis_kendaraan` int(11) NOT NULL,
  `id_merk` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_agama`
--
ALTER TABLE `tb_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `tb_area_parking`
--
ALTER TABLE `tb_area_parking`
  ADD PRIMARY KEY (`id_area_parking`);

--
-- Indexes for table `tb_denah`
--
ALTER TABLE `tb_denah`
  ADD PRIMARY KEY (`id_denah`),
  ADD KEY `id_gambar_denah` (`id_gambar_denah`),
  ADD KEY `id_kategori_bangunan` (`id_kategori_bangunan`);

--
-- Indexes for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_kategori_event` (`id_kategori_event`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `tb_freelance`
--
ALTER TABLE `tb_freelance`
  ADD PRIMARY KEY (`id_freelance`),
  ADD KEY `id_kategori_freelance` (`id_kategori_freelance`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `tb_gambar_denah`
--
ALTER TABLE `tb_gambar_denah`
  ADD PRIMARY KEY (`id_gambar_denah`);

--
-- Indexes for table `tb_jenis_kelamin`
--
ALTER TABLE `tb_jenis_kelamin`
  ADD PRIMARY KEY (`id_jenis_kelamin`);

--
-- Indexes for table `tb_jenis_kendaraan`
--
ALTER TABLE `tb_jenis_kendaraan`
  ADD PRIMARY KEY (`id_jenis_kendaraan`);

--
-- Indexes for table `tb_kategori_bangunan`
--
ALTER TABLE `tb_kategori_bangunan`
  ADD PRIMARY KEY (`id_kategori_bangunan`);

--
-- Indexes for table `tb_kategori_event`
--
ALTER TABLE `tb_kategori_event`
  ADD PRIMARY KEY (`id_kategori_event`);

--
-- Indexes for table `tb_kategori_freelance`
--
ALTER TABLE `tb_kategori_freelance`
  ADD PRIMARY KEY (`id_kategori_freelance`);

--
-- Indexes for table `tb_kategori_login`
--
ALTER TABLE `tb_kategori_login`
  ADD PRIMARY KEY (`id_kategori_login`);

--
-- Indexes for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`),
  ADD KEY `nim` (`nim`),
  ADD KEY `id_jenis_kendaraan` (`id_jenis_kendaraan`),
  ADD KEY `id_tipe_kendaraan` (`id_tipe_kendaraan`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `nim` (`nim`),
  ADD KEY `id_kategori_login` (`id_kategori_login`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `id_jenis_kelamin` (`id_jenis_kelamin`),
  ADD KEY `id_agama` (`id_agama`);

--
-- Indexes for table `tb_merek`
--
ALTER TABLE `tb_merek`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indexes for table `tb_parking`
--
ALTER TABLE `tb_parking`
  ADD PRIMARY KEY (`id_parking`),
  ADD KEY `id_kendaraan` (`id_kendaraan`);

--
-- Indexes for table `tb_tipe_kendaraan`
--
ALTER TABLE `tb_tipe_kendaraan`
  ADD PRIMARY KEY (`id_tipe_kendaraan`),
  ADD KEY `id_jenis_kendaraan` (`id_jenis_kendaraan`),
  ADD KEY `id_merk` (`id_merk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_agama`
--
ALTER TABLE `tb_agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_area_parking`
--
ALTER TABLE `tb_area_parking`
  MODIFY `id_area_parking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_denah`
--
ALTER TABLE `tb_denah`
  MODIFY `id_denah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_freelance`
--
ALTER TABLE `tb_freelance`
  MODIFY `id_freelance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_gambar_denah`
--
ALTER TABLE `tb_gambar_denah`
  MODIFY `id_gambar_denah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_jenis_kelamin`
--
ALTER TABLE `tb_jenis_kelamin`
  MODIFY `id_jenis_kelamin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_jenis_kendaraan`
--
ALTER TABLE `tb_jenis_kendaraan`
  MODIFY `id_jenis_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kategori_bangunan`
--
ALTER TABLE `tb_kategori_bangunan`
  MODIFY `id_kategori_bangunan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kategori_event`
--
ALTER TABLE `tb_kategori_event`
  MODIFY `id_kategori_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kategori_freelance`
--
ALTER TABLE `tb_kategori_freelance`
  MODIFY `id_kategori_freelance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kategori_login`
--
ALTER TABLE `tb_kategori_login`
  MODIFY `id_kategori_login` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_merek`
--
ALTER TABLE `tb_merek`
  MODIFY `id_merek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_parking`
--
ALTER TABLE `tb_parking`
  MODIFY `id_parking` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tipe_kendaraan`
--
ALTER TABLE `tb_tipe_kendaraan`
  MODIFY `id_tipe_kendaraan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_denah`
--
ALTER TABLE `tb_denah`
  ADD CONSTRAINT `tb_denah_ibfk_1` FOREIGN KEY (`id_gambar_denah`) REFERENCES `tb_gambar_denah` (`id_gambar_denah`),
  ADD CONSTRAINT `tb_denah_ibfk_2` FOREIGN KEY (`id_kategori_bangunan`) REFERENCES `tb_kategori_bangunan` (`id_kategori_bangunan`);

--
-- Constraints for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD CONSTRAINT `tb_event_ibfk_1` FOREIGN KEY (`id_kategori_event`) REFERENCES `tb_kategori_event` (`id_kategori_event`),
  ADD CONSTRAINT `tb_event_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `tb_mahasiswa` (`nim`);

--
-- Constraints for table `tb_freelance`
--
ALTER TABLE `tb_freelance`
  ADD CONSTRAINT `tb_freelance_ibfk_1` FOREIGN KEY (`id_kategori_freelance`) REFERENCES `tb_kategori_freelance` (`id_kategori_freelance`),
  ADD CONSTRAINT `tb_freelance_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `tb_mahasiswa` (`nim`);

--
-- Constraints for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  ADD CONSTRAINT `tb_kendaraan_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tb_mahasiswa` (`nim`),
  ADD CONSTRAINT `tb_kendaraan_ibfk_2` FOREIGN KEY (`id_jenis_kendaraan`) REFERENCES `tb_jenis_kendaraan` (`id_jenis_kendaraan`),
  ADD CONSTRAINT `tb_kendaraan_ibfk_3` FOREIGN KEY (`id_tipe_kendaraan`) REFERENCES `tb_tipe_kendaraan` (`id_tipe_kendaraan`);

--
-- Constraints for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD CONSTRAINT `tb_login_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tb_mahasiswa` (`nim`),
  ADD CONSTRAINT `tb_login_ibfk_2` FOREIGN KEY (`id_kategori_login`) REFERENCES `tb_kategori_login` (`id_kategori_login`);

--
-- Constraints for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD CONSTRAINT `tb_mahasiswa_ibfk_1` FOREIGN KEY (`id_jenis_kelamin`) REFERENCES `tb_jenis_kelamin` (`id_jenis_kelamin`),
  ADD CONSTRAINT `tb_mahasiswa_ibfk_2` FOREIGN KEY (`id_agama`) REFERENCES `tb_agama` (`id_agama`);

--
-- Constraints for table `tb_parking`
--
ALTER TABLE `tb_parking`
  ADD CONSTRAINT `tb_parking_ibfk_1` FOREIGN KEY (`id_kendaraan`) REFERENCES `tb_kendaraan` (`id_kendaraan`);

--
-- Constraints for table `tb_tipe_kendaraan`
--
ALTER TABLE `tb_tipe_kendaraan`
  ADD CONSTRAINT `tb_tipe_kendaraan_ibfk_1` FOREIGN KEY (`id_jenis_kendaraan`) REFERENCES `tb_jenis_kendaraan` (`id_jenis_kendaraan`),
  ADD CONSTRAINT `tb_tipe_kendaraan_ibfk_2` FOREIGN KEY (`id_merk`) REFERENCES `tb_merek` (`id_merek`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
