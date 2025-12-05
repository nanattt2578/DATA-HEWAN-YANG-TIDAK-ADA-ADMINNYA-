-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 05 Des 2025 pada 09.02
-- Versi server: 5.7.34
-- Versi PHP: 8.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hewan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `Hewan`
--

CREATE TABLE `Hewan` (
  `id` int(10) NOT NULL,
  `Nama_hewan` varchar(25) NOT NULL,
  `Jenis_hewan` varchar(25) NOT NULL,
  `Asal_hewan` text NOT NULL,
  `Jumlah_hewan` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `Hewan`
--

INSERT INTO `Hewan` (`id`, `Nama_hewan`, `Jenis_hewan`, `Asal_hewan`, `Jumlah_hewan`) VALUES
(1092, 'Harimau', 'Pemangsa ', 'Sumatra ', 4),
(2093, 'Burung cenderawasih ', 'Aves', 'Papua', 4),
(3087, 'Komodo', 'Reptil ', 'Indonesia ', 10),
(4096, 'Penguin', 'Aves', 'Kutub selatan ', 12);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `Hewan`
--
ALTER TABLE `Hewan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `Hewan`
--
ALTER TABLE `Hewan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5098;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
