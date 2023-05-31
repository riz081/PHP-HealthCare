-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 31, 2023 at 07:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `covid`
--

CREATE TABLE `covid` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `tanggal_cvd` date NOT NULL,
  `Q1` int(11) NOT NULL,
  `Q2` int(11) NOT NULL,
  `Q3` int(11) NOT NULL,
  `Q4` int(11) NOT NULL,
  `Q5` int(11) NOT NULL,
  `Q6` int(11) NOT NULL,
  `Q7` int(11) NOT NULL,
  `Q8` int(11) NOT NULL,
  `Q9` int(11) NOT NULL,
  `Q10` int(11) NOT NULL,
  `jml_salah` int(11) NOT NULL,
  `hasil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid`
--

INSERT INTO `covid` (`id`, `nama_pasien`, `tanggal_cvd`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `jml_salah`, `hasil`) VALUES
(19, 'Ibnu Rizqika', '2023-01-14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Terpapar Covid 19'),
(20, 'Ibnu Rizqika', '2023-01-16', 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 3, 'Gejala Covid 19 Ringan'),
(21, 'Ibnu Rizqika', '2023-01-17', 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 2, 'Gejala Covid 19 Berat'),
(22, 'Wahu Aji', '2023-02-01', 0, 1, 0, 0, 0, 1, 1, 1, 0, 0, 4, 'Terpapar Covid 19'),
(23, 'Wahu Aji', '2023-02-09', 0, 1, 0, 0, 1, 0, 1, 1, 0, 0, 4, 'Terpapar Covid 19');

-- --------------------------------------------------------

--
-- Table structure for table `demam`
--

CREATE TABLE `demam` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `tanggal_dbd` date NOT NULL,
  `Q1` int(11) NOT NULL,
  `Q2` int(11) NOT NULL,
  `Q3` int(11) NOT NULL,
  `Q4` int(11) NOT NULL,
  `Q5` int(11) NOT NULL,
  `Q6` int(11) NOT NULL,
  `Q7` int(11) NOT NULL,
  `Q8` int(11) NOT NULL,
  `Q9` int(11) NOT NULL,
  `Q10` int(11) NOT NULL,
  `jml_salah` int(11) NOT NULL,
  `hasil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demam`
--

INSERT INTO `demam` (`id`, `nama_pasien`, `tanggal_dbd`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `jml_salah`, `hasil`) VALUES
(11, 'Ibnu Rizqika', '2023-01-14', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 'Mengalami demam berdarah'),
(12, 'Wahu Aji', '2023-01-16', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Mengalami demam berdarah'),
(13, 'Wahu Aji', '2023-02-01', 1, 0, 0, 1, 1, 1, 0, 0, 1, 1, 6, 'Mengalami demam berdarah');

-- --------------------------------------------------------

--
-- Table structure for table `diabetes`
--

CREATE TABLE `diabetes` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `tanggal_gd` date NOT NULL,
  `Q1` int(11) NOT NULL,
  `Q2` int(11) NOT NULL,
  `Q3` int(11) NOT NULL,
  `Q4` int(11) NOT NULL,
  `Q5` int(11) NOT NULL,
  `Q6` int(11) NOT NULL,
  `Q7` int(11) NOT NULL,
  `Q8` int(11) NOT NULL,
  `Q9` int(11) NOT NULL,
  `Q10` int(11) NOT NULL,
  `jml_salah` int(11) NOT NULL,
  `hasil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diabetes`
--

INSERT INTO `diabetes` (`id`, `nama_pasien`, `tanggal_gd`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `jml_salah`, `hasil`) VALUES
(7, 'Ibnu Rizqika', '2023-01-14', 0, 1, 0, 1, 0, 0, 0, 0, 1, 1, 4, 'Gejala diabetes berat');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `nama_pasien`, `tanggal`, `hari`, `jam`) VALUES
(2, 'Ibnu Rizqika', '2023-12-31', 'Rabu', '22:56');

-- --------------------------------------------------------

--
-- Table structure for table `kontrol_harian`
--

CREATE TABLE `kontrol_harian` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `karbo` varchar(50) NOT NULL,
  `protein` varchar(50) NOT NULL,
  `sayur` varchar(50) NOT NULL,
  `buah` varchar(50) NOT NULL,
  `vitamin` varchar(50) NOT NULL,
  `gula` varchar(50) NOT NULL,
  `garam` varchar(50) NOT NULL,
  `lainnya` text NOT NULL,
  `aktivitas` varchar(50) NOT NULL,
  `jenis_aktivitas` text NOT NULL,
  `durasi` varchar(50) NOT NULL,
  `obat` varchar(50) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `intensitas` varchar(50) NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `mandi` varchar(50) NOT NULL,
  `potong_kuku` varchar(50) NOT NULL,
  `gosok_gigi` varchar(50) NOT NULL,
  `memakai_sabun` varchar(50) NOT NULL,
  `kerapian` varchar(50) NOT NULL,
  `merokok` varchar(50) NOT NULL,
  `jml_rokok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontrol_harian`
--

INSERT INTO `kontrol_harian` (`id`, `nama_pasien`, `tanggal`, `karbo`, `protein`, `sayur`, `buah`, `vitamin`, `gula`, `garam`, `lainnya`, `aktivitas`, `jenis_aktivitas`, `durasi`, `obat`, `nama_obat`, `intensitas`, `keluhan`, `mandi`, `potong_kuku`, `gosok_gigi`, `memakai_sabun`, `kerapian`, `merokok`, `jml_rokok`) VALUES
(3, 'Ibnu Rizqika', '2023-01-14', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Sesuai', 'Sesuai', 'adadadad', 'Ya', 'dadadaa', 'dada', 'ada', 'adad', 'adadad', 'adadad', 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 0),
(4, 'Ibnu Rizqika', '2023-01-17', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak Sesuai', 'Sesuai', 'sesee', 'Ya', 'dadadaa', '12', 'Tidak', 'x', 'sees', 'xe', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kontrol_pekanan`
--

CREATE TABLE `kontrol_pekanan` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `td` varchar(50) NOT NULL,
  `lp` varchar(50) NOT NULL,
  `bb` varchar(50) NOT NULL,
  `tb` varchar(50) NOT NULL,
  `imt` varchar(50) NOT NULL,
  `gula_darah` varchar(50) NOT NULL,
  `kolestrol` varchar(50) NOT NULL,
  `edukasi` varchar(50) NOT NULL,
  `catatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontrol_pekanan`
--

INSERT INTO `kontrol_pekanan` (`id`, `nama_pasien`, `tanggal`, `td`, `lp`, `bb`, `tb`, `imt`, `gula_darah`, `kolestrol`, `edukasi`, `catatan`) VALUES
(1, 'Ibnu Rizqika', '2023-01-14', '131', '4242', '1241', 'qeq', '14', '', '14', 'Ya', ''),
(2, 'Ibnu Rizqika', '2023-01-14', '100', '53', '65', '176', '54', '41', '141', 'Ya', 'Sehat'),
(3, 'Wahu Aji', '2023-02-09', '131', '131', '42', '222', '42', '44', '31', 'Ya', 'Rutin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `usia` int(11) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nama_lengkap`, `alamat`, `usia`, `jenis_kelamin`, `status`, `agama`, `no_hp`, `foto`) VALUES
(10, 'Ibnu Rizqika', 'Krian', 21, 'Laki - laki', 'Mahsiswa', 'Islam', '0895633150324', 'psn-1673170474.png'),
(12, 'Wahu Aji', 'MaduraKu', 23, 'Laki laki', 'Lajang', 'Katolik', '14141', 'psn-1674993149.jpg'),
(13, 'Hendry', 'Jember', 19, 'Laki - laki', 'Lajang', 'Islam', '1941419419', 'psn-1675928115.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'admin', '$2y$10$ewYU.inJ0BRk15lI7i.f2.0BZCljclhorulTR1XyGwCJFsTZXQS8K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `covid`
--
ALTER TABLE `covid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demam`
--
ALTER TABLE `demam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diabetes`
--
ALTER TABLE `diabetes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontrol_harian`
--
ALTER TABLE `kontrol_harian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontrol_pekanan`
--
ALTER TABLE `kontrol_pekanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `covid`
--
ALTER TABLE `covid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `demam`
--
ALTER TABLE `demam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `diabetes`
--
ALTER TABLE `diabetes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kontrol_harian`
--
ALTER TABLE `kontrol_harian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kontrol_pekanan`
--
ALTER TABLE `kontrol_pekanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
