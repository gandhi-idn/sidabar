-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Sep 2022 pada 10.25
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `no_inv` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `merk_barang` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `spec` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `no_inv`, `nama_barang`, `merk_barang`, `harga`, `spec`) VALUES
(2, 'inv08883', 'PC asus H81', 'asus', '1000000', 'H81'),
(3, 'inv12361', 'motherboard', 'assrock', '600000', 'assrock H61'),
(4, 'inv2134213', 'monitor ', 'AOC', '1000000', '21 inch'),
(5, 'inv08883333ss', 'printer', 'canon', '600000', 'printer warna warni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bo`
--

CREATE TABLE `bo` (
  `id_bo` int(11) NOT NULL,
  `nama_bo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bo`
--

INSERT INTO `bo` (`id_bo`, `nama_bo`) VALUES
(1, 'AHMAD YANI'),
(2, 'ANJUNGAN'),
(3, 'BADAU'),
(4, 'BALAI KARANGAN'),
(5, 'BALAI SEPUAK'),
(6, 'BATU BUIL'),
(7, 'BATU SADO MACAN'),
(8, 'BELIKAI'),
(9, 'BELITANG BERSATU'),
(10, 'BENUA MARTINUS'),
(11, 'BENUO PANTA BAJU'),
(12, 'GURUNG MALI'),
(13, 'HEAD OFFICE'),
(14, 'JANGKANG'),
(15, 'JELAYAN KAKI KUTA'),
(16, 'KANTOR PUSAT'),
(17, 'KANTOR SENTRAL'),
(18, 'KEDEMBAK AIR TABUN'),
(19, 'KELAM'),
(20, 'KEMBAYAN'),
(21, 'KOTA BARU'),
(22, 'LANJAK'),
(23, 'LENGKENAT'),
(24, 'MANGKURAT BARU'),
(25, 'MANIS RAYA'),
(26, 'MELIAU'),
(27, 'MENTUNAI'),
(28, 'MENUKUNG'),
(29, 'MUKOK'),
(30, 'NANGA DANGKAN'),
(31, 'NANGA ELLA'),
(32, 'NANGA KANTUK'),
(33, 'NANGA MAHAP'),
(34, 'NANGA MAU'),
(35, 'NANGA MERAKAI'),
(36, 'NANGA PARI [62]'),
(37, 'NANGA TAMAN'),
(38, 'NANGA TEBIDAH'),
(39, 'NANGA TEMPUNAK'),
(40, 'PASAR SEKADAU'),
(41, 'PELAIK KERUAP'),
(42, 'PIAWAS'),
(43, 'PINTAS KELADAN'),
(44, 'PUTUSSIBAU'),
(45, 'RAWAK'),
(46, 'RUMAH PUNYUNG'),
(47, 'RUMAH SEPAN'),
(48, 'SANGGAU'),
(49, 'SAYAN'),
(50, 'SEKADAU BERSATU'),
(51, 'SEMUNTAI'),
(52, 'SENANING'),
(53, 'SIANTAN'),
(54, 'SILA NAGA'),
(55, 'SIMPANG EMPAT'),
(56, 'SIMPANG PINOH'),
(57, 'SIMPANG SILAT'),
(58, 'SINAR PEKAYAU'),
(59, 'SINGA MACAN'),
(60, 'SOLAM RAYA'),
(61, 'SOSOK'),
(62, 'SUNGAI LAWAK'),
(63, 'SUNGAI UTIK'),
(64, 'TAPANG PULAU'),
(65, 'TEKALONG'),
(66, 'TEMANANG'),
(67, 'TEMBAWANG ALAK'),
(68, 'TIMPUK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_status`
--

CREATE TABLE `detail_status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_status`
--

INSERT INTO `detail_status` (`id_status`, `status`) VALUES
(1, 'keluar dari IT'),
(2, 'masuk ke IT'),
(3, 'sedang service'),
(4, 'selesai normal'),
(5, 'rusak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `progres`
--

CREATE TABLE `progres` (
  `id_prog` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_bo` int(11) NOT NULL,
  `keterangan_log` text NOT NULL,
  `keterangan_bo` text NOT NULL,
  `tgl_masuk_barang` date NOT NULL,
  `tgl_service` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `progres`
--

INSERT INTO `progres` (`id_prog`, `id_barang`, `id_bo`, `keterangan_log`, `keterangan_bo`, `tgl_masuk_barang`, `tgl_service`, `tgl_selesai`, `id_status`) VALUES
(1, 2, 2, 'motherboard konxlet, ganti motherboard baru', 'tidak bisa nyala', '2022-09-06', '0000-00-00', '0000-00-00', 2),
(2, 4, 3, 'ganti baru', 'layarnya putih', '2022-09-06', '0000-00-00', '0000-00-00', 2),
(3, 5, 12, 'ganti catridge', 'tidak bisa cetak', '2022-09-05', '0000-00-00', '0000-00-00', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `bo`
--
ALTER TABLE `bo`
  ADD PRIMARY KEY (`id_bo`);

--
-- Indeks untuk tabel `detail_status`
--
ALTER TABLE `detail_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `progres`
--
ALTER TABLE `progres`
  ADD PRIMARY KEY (`id_prog`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `bo`
--
ALTER TABLE `bo`
  MODIFY `id_bo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `detail_status`
--
ALTER TABLE `detail_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `progres`
--
ALTER TABLE `progres`
  MODIFY `id_prog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
