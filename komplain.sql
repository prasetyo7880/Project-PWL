-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Jan 2016 pada 08.00
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `komplain`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bagian`
--

CREATE TABLE IF NOT EXISTS `tb_bagian` (
`id_bagian` int(11) NOT NULL,
  `nama_bagian` enum('General Manajer','Manajer','Supervisor','General Afair','Kepala Cabang','Staff Administrasi','Marketing') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_bagian`
--

INSERT INTO `tb_bagian` (`id_bagian`, `nama_bagian`) VALUES
(1, 'General Manajer'),
(2, 'Manajer'),
(3, 'Supervisor'),
(4, 'General Afair'),
(5, 'Kepala Cabang'),
(6, 'Staff Administrasi'),
(7, 'Marketing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komplain`
--

CREATE TABLE IF NOT EXISTS `tb_komplain` (
`id_complain` int(11) NOT NULL,
  `komplain` text NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_bagian` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_komplain`
--

INSERT INTO `tb_komplain` (`id_complain`, `komplain`, `id_pengguna`, `id_bagian`) VALUES
(7, 'Lebih baik lagi ya pak', 46, 1),
(8, 'Ditingkatkan lagi kinerjanya pak', 47, 2),
(11, 'love you too', 50, 3),
(15, 'Tolong bagian ini diatur lagi jadwalnya ya', 53, 4),
(16, 'yang bener dong', 54, 4),
(19, 'semoga bisa ya pak', 57, 4),
(20, 'Udah bagus, tapi tolong', 58, 3),
(21, 'udah bagus, tapi ditingkatkan lagi', 59, 3),
(22, 'dhsfjhfghdsgjf', 60, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
`id_login` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `level` enum('admin','pengguna') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `username`, `password`, `nama`, `jenis_kelamin`, `alamat`, `level`) VALUES
(1, 'cendana', 'cendana', 'Cendana Puspitasari', 'Laki-Laki', '', 'admin'),
(2, 'sarpitri', 'sarpitri', 'Sarpitri Sumarjono', 'Laki-Laki', '', 'pengguna'),
(11, 'senja', 'senja', 'senja malam', 'Perempuan', 'Yogyakarta', 'pengguna'),
(12, 'kupukupu', 'kupukupu', 'kupukupu', 'Perempuan', 'jogja', 'pengguna'),
(13, 'nana', 'nana', 'nana', 'Perempuan', 'wng', 'pengguna'),
(14, 'ekoprasetyo', 'ekoprasetyo', 'eko prasetyo', 'Laki-Laki', 'Lampung Selatan', 'pengguna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE IF NOT EXISTS `tb_pengguna` (
`id_pengguna` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `id_bagian` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama`, `alamat`, `telp`, `email`, `jenis_kelamin`, `id_bagian`) VALUES
(46, 'Sarpitri Sumarjono', 'Klaten', '0898878788', 'sarpitri@gmail.com', 'Perempuan', 1),
(47, 'Eko Prasetyo', 'Lampug Selatan', '0892874878777', 'ekoprasetyo11@gmail.com', 'Laki-Laki', 2),
(50, 'ekop', 'lamsel', '088328273', 'ekoprasetyo11@gmail.com', 'Laki-Laki', 3),
(53, 'Cendana Puspitasari', 'Wonogiri', '085728399016', 'cendanapuspitasari16@gmail.com', 'Perempuan', 4),
(54, 'kupukupu', 'yogyakarta', '08788879998', 'kupukupu2@gmail.com', 'Perempuan', 4),
(57, 'sapitri', 'kleten', '08888787465', 'sarpitret', 'Perempuan', 4),
(58, 'eko p', 'lampug', '084393483938', 'ekop11021997@gmail.com', 'Laki-Laki', 3),
(59, 'ekoploh', 'wonogiri', '0878378475777', 'ekoplohbanget@gmail.com', 'Perempuan', 3),
(60, 'dsfdffd', 'sfdfsd', '53453423', 'dfsdfsd', 'Perempuan', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bagian`
--
ALTER TABLE `tb_bagian`
 ADD PRIMARY KEY (`id_bagian`);

--
-- Indexes for table `tb_komplain`
--
ALTER TABLE `tb_komplain`
 ADD PRIMARY KEY (`id_complain`), ADD KEY `id_pengguna` (`id_pengguna`), ADD KEY `id_bagian` (`id_bagian`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
 ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
 ADD PRIMARY KEY (`id_pengguna`), ADD KEY `id_bagian` (`id_bagian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bagian`
--
ALTER TABLE `tb_bagian`
MODIFY `id_bagian` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_komplain`
--
ALTER TABLE `tb_komplain`
MODIFY `id_complain` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_komplain`
--
ALTER TABLE `tb_komplain`
ADD CONSTRAINT `tb_komplain_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `tb_pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tb_komplain_ibfk_2` FOREIGN KEY (`id_bagian`) REFERENCES `tb_bagian` (`id_bagian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
ADD CONSTRAINT `tb_pengguna_ibfk_1` FOREIGN KEY (`id_bagian`) REFERENCES `tb_bagian` (`id_bagian`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
