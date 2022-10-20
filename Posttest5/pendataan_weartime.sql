-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2022 pada 16.09
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendataan_weartime`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_weartime`
--

CREATE TABLE `data_weartime` (
  `Nama_Admin` text NOT NULL,
  `Nomer_Telepon` int(12) NOT NULL,
  `Merek_SmartWatch` varchar(25) NOT NULL,
  `Jumlah_Stock` int(200) NOT NULL,
  `Jumlah_Terjual` int(200) NOT NULL,
  `Warna_Tersedia` text NOT NULL,
  `kode_SmartWatch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_weartime`
--

INSERT INTO `data_weartime` (`Nama_Admin`, `Nomer_Telepon`, `Merek_SmartWatch`, `Jumlah_Stock`, `Jumlah_Terjual`, `Warna_Tersedia`, `kode_SmartWatch`) VALUES
('reyy', 2147483647, 'I watch', 123, 120, 'blue', 11),
('tasya', 821732568, 'I watch', 120, 50, 'white', 14),
('darel', 131726192, 'samsung', 100, 89, 'black', 15),
('deyra', 2147483647, 'I watch', 150, 145, 'white', 16);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_weartime`
--
ALTER TABLE `data_weartime`
  ADD PRIMARY KEY (`kode_SmartWatch`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_weartime`
--
ALTER TABLE `data_weartime`
  MODIFY `kode_SmartWatch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
