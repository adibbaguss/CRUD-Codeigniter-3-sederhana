-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2022 pada 17.56
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rweb22`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `email`, `password`, `nama`) VALUES
(1, 'admin_satu@gmail.com', '123456', 'Admin satu nih'),
(2, 'admin_dua@gmail.com', '123456', 'admin dua nih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `niy` char(50) NOT NULL,
  `keahlian` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dosen`
--

INSERT INTO `tb_dosen` (`id`, `nama`, `niy`, `keahlian`, `email`) VALUES
(1, 'Adhi Prahara, S.Si., M.Cs.', '060150841', 'Softcomputing and Multimedia', 'adhi.prahara@tif.uad.ac.id'),
(2, 'Supriyanto, S.T., M.T.', '60160952', 'Media Digital dan Game', 'supriyanto@tif.uad.ac.id'),
(3, 'Dinan Yulianto, S.T., M.Eng.', '601609524', 'Multimedia, Interaksi Manusia dan Komputer, dan IT in Education', 'dinan.yulianto@tif.uad.ac.id'),
(4, 'Fiftin Noviyanto, S.T., M. Cs', '198011152005011002', 'Web Programming, Multimedia', 'fiftin.noviyanto@tif.uad.ac.id'),
(5, 'Herman Yuliansyah, S.T., M. Eng', '60110648', 'Basis Data, Pemrograman Web, Jaringan Komputer', 'herman.yuliansyah@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nim` char(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `nama`, `nim`, `semester`, `email`) VALUES
(1, 'Aslamadin Alvian Haz', '1600018001', 8, 'alvinsukamtis@gmail.com'),
(2, 'Muhammad N.W Lutfiantoro', '1600018002', 8, 'Lutfiantoro@gmail.com'),
(3, 'kholis ', '1600018003', 8, 'kholis @gmail.com'),
(4, 'gema antika hariadi', '1600018004', 8, 'gema@gmail.com'),
(5, 'Brian P.', '1600018005', 8, 'brian@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
