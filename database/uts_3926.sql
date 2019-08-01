-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 Nov 2018 pada 17.08
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_3926`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` char(15) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `No_tlp` char(15) NOT NULL,
  `Jenis_kelamin` enum('L','P') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `Nama`, `Alamat`, `No_tlp`, `Jenis_kelamin`) VALUES
('DSN0001', 'dedi ', 'bantul soropaten', '085674683922', 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` varchar(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` time NOT NULL,
  `mata_kuliah` varchar(30) NOT NULL,
  `nm_dosen` varchar(30) NOT NULL,
  `ruangan` varchar(10) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `id_dosen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `hari`, `jam`, `mata_kuliah`, `nm_dosen`, `ruangan`, `nim`, `id_dosen`) VALUES
('X0002', 'selasa', '08:50:00', 'Struktur Data', 'dedi prihandaru', '5.3.3', 'MHS0001', 'DSN0001'),
('X0006', 'senin', '05:40:00', 'Struktur Data', 'dedi prihandaru', '5.3.2', 'MHS0001', 'DSN0001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` char(15) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `No_telepon` char(13) NOT NULL,
  `Agama` char(20) NOT NULL,
  `Jenis_Kelamin` enum('L','P','','') NOT NULL,
  `Angkatan` char(20) NOT NULL,
  `id_prodi` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `Nama`, `Alamat`, `No_telepon`, `Agama`, `Jenis_Kelamin`, `Angkatan`, `id_prodi`) VALUES
('MHS0001', 'erwan', 'bantul soropaten', '085674683922', 'Islam', 'L', '2017', 'PD0002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `kd_mk` char(15) NOT NULL,
  `nama_mk` varchar(30) NOT NULL,
  `sks` int(15) NOT NULL,
  `id_dosen` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`kd_mk`, `nama_mk`, `sks`, `id_dosen`) VALUES
('SCI0001', 'Struktur Data', 2, 'DSN0001'),
('SCI0002', 'Pem Web', 4, 'DSN0001'),
('SCI0003', 'Algoritma', 2, 'DSN0001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` varchar(10) NOT NULL,
  `NIM` char(15) NOT NULL,
  `kd_mk` char(20) NOT NULL,
  `id_dosen` varchar(10) NOT NULL,
  `absensi` int(12) NOT NULL,
  `tugas` int(20) NOT NULL,
  `mid` int(20) NOT NULL,
  `final` int(20) NOT NULL,
  `hasil_akhir` int(20) NOT NULL,
  `nilai_akhir` int(20) NOT NULL,
  `semester` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `NIM`, `kd_mk`, `id_dosen`, `absensi`, `tugas`, `mid`, `final`, `hasil_akhir`, `nilai_akhir`, `semester`) VALUES
('SCS0002', 'MHS0001', 'SCI0001', 'DSN0001', 10, 90, 90, 80, 360, 80, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` varchar(11) NOT NULL,
  `nama_prodi` varchar(40) NOT NULL,
  `fakultas` varchar(22) NOT NULL,
  `jenjang` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `fakultas`, `jenjang`) VALUES
('PD0001', 'Tekhnik Informatika', 'Ilmu komputer', 'S1'),
('PD0002', 'Manajemen Informatika', 'Ilmu komputer', 'S1'),
('PD0003', 'Tekhnik Komputer', 'Ilmu komputer', 'S1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruang` varchar(10) NOT NULL,
  `gedung` varchar(3) NOT NULL,
  `lantai` varchar(3) NOT NULL,
  `no` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id_ruang`, `gedung`, `lantai`, `no`) VALUES
('R0001', '5', '3', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `yuser`
--

CREATE TABLE `yuser` (
  `username` varchar(11) NOT NULL,
  `password` varchar(7) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `akses` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `yuser`
--

INSERT INTO `yuser` (`username`, `password`, `nama`, `akses`) VALUES
('admin', 'admin', 'admin', '1'),
('DSN0001', '123456', 'dedi ', '2'),
('MHS0001', '123456', 'erwan', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`),
  ADD KEY `id_prodi` (`id_prodi`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`kd_mk`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `NIM` (`NIM`),
  ADD KEY `kd_mk` (`kd_mk`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `yuser`
--
ALTER TABLE `yuser`
  ADD PRIMARY KEY (`username`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
