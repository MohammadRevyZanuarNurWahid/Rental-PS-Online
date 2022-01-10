-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2022 pada 05.18
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_semuadata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_peminjaman_ps`
--

CREATE TABLE `detail_peminjaman_ps` (
  `id_detail_peminjaman_ps` int(11) NOT NULL,
  `id_peminjaman_ps` int(11) NOT NULL,
  `id_ps` int(20) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_peminjaman_ps`
--

INSERT INTO `detail_peminjaman_ps` (`id_detail_peminjaman_ps`, `id_peminjaman_ps`, `id_ps`, `qty`) VALUES
(1, 1, 26012006, 1),
(3, 2, 26012021, 2),
(5, 0, 26012013, 1),
(7, 6, 26012000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_playstation` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `username`, `password`, `id_playstation`) VALUES
(3, 'Jokowi', '1999-09-16', '', 'Jl. soekarno hatta no 2 rt 02 tw 03', 'jokowi', 'jokowi', 3),
(5, 'revy zanuar', '2002-01-30', '', 'Jl. Soekarno Hatta No 2 Rt 01 Rw 06', 'zanuar', '20510009', 6),
(9, 'Renny', '2001-07-08', 'P', 'Jl. Pattimura No 7 Rt 02 Rw 01', 'renny', 'renny', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_ps`
--

CREATE TABLE `peminjaman_ps` (
  `id_peminjaman_ps` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `id_pelanggan` int(20) NOT NULL,
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman_ps`
--

INSERT INTO `peminjaman_ps` (`id_peminjaman_ps`, `tanggal_pinjam`, `id_pelanggan`, `tanggal_kembali`) VALUES
(1, '2021-12-31', 3, '2022-01-05'),
(2, '2021-12-31', 9, '2022-01-05'),
(6, '2022-01-01', 5, '2022-01-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian_ps`
--

CREATE TABLE `pengembalian_ps` (
  `id_pengembalianps` int(11) NOT NULL,
  `id_peminjaman_ps` int(11) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengembalian_ps`
--

INSERT INTO `pengembalian_ps` (`id_pengembalianps`, `id_peminjaman_ps`, `tanggal_pengembalian`, `denda`) VALUES
(1, 2, '2021-12-31', 0),
(2, 1, '2022-01-01', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `playstation`
--

CREATE TABLE `playstation` (
  `id_playstation` int(20) NOT NULL,
  `jenis_playstation` varchar(100) NOT NULL,
  `tahun_produksi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `playstation`
--

INSERT INTO `playstation` (`id_playstation`, `jenis_playstation`, `tahun_produksi`) VALUES
(3, 'Playstation 2', '2000'),
(4, 'Playstation 3', '2006'),
(5, 'Playstation 4', '2013'),
(6, 'Playstation 5', '2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ps`
--

CREATE TABLE `ps` (
  `id_ps` int(20) NOT NULL,
  `nama_ps` varchar(99) CHARACTER SET latin1 NOT NULL,
  `deskripsi` varchar(99) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ps`
--

INSERT INTO `ps` (`id_ps`, `nama_ps`, `deskripsi`) VALUES
(26012000, 'Playstation 2', 'PS 2'),
(26012006, 'Playstation 3', 'PS 3'),
(26012013, 'Playstation 4', 'PS 4'),
(26012021, 'Playstation 5', 'PS 5');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_peminjaman_ps`
--
ALTER TABLE `detail_peminjaman_ps`
  ADD PRIMARY KEY (`id_detail_peminjaman_ps`),
  ADD UNIQUE KEY `id_peminjaman_ps` (`id_peminjaman_ps`),
  ADD UNIQUE KEY `id_ps` (`id_ps`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `id_playstation` (`id_playstation`);

--
-- Indeks untuk tabel `peminjaman_ps`
--
ALTER TABLE `peminjaman_ps`
  ADD PRIMARY KEY (`id_peminjaman_ps`),
  ADD UNIQUE KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indeks untuk tabel `pengembalian_ps`
--
ALTER TABLE `pengembalian_ps`
  ADD PRIMARY KEY (`id_pengembalianps`),
  ADD UNIQUE KEY `id_peminjaman_ps` (`id_peminjaman_ps`);

--
-- Indeks untuk tabel `playstation`
--
ALTER TABLE `playstation`
  ADD PRIMARY KEY (`id_playstation`);

--
-- Indeks untuk tabel `ps`
--
ALTER TABLE `ps`
  ADD PRIMARY KEY (`id_ps`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_peminjaman_ps`
--
ALTER TABLE `detail_peminjaman_ps`
  MODIFY `id_detail_peminjaman_ps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `peminjaman_ps`
--
ALTER TABLE `peminjaman_ps`
  MODIFY `id_peminjaman_ps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengembalian_ps`
--
ALTER TABLE `pengembalian_ps`
  MODIFY `id_pengembalianps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `playstation`
--
ALTER TABLE `playstation`
  MODIFY `id_playstation` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ps`
--
ALTER TABLE `ps`
  MODIFY `id_ps` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26012022;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_peminjaman_ps`
--
ALTER TABLE `detail_peminjaman_ps`
  ADD CONSTRAINT `detail_peminjaman_ps_ibfk_1` FOREIGN KEY (`id_ps`) REFERENCES `ps` (`id_ps`);

--
-- Ketidakleluasaan untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`id_playstation`) REFERENCES `playstation` (`id_playstation`);

--
-- Ketidakleluasaan untuk tabel `peminjaman_ps`
--
ALTER TABLE `peminjaman_ps`
  ADD CONSTRAINT `peminjaman_ps_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);

--
-- Ketidakleluasaan untuk tabel `pengembalian_ps`
--
ALTER TABLE `pengembalian_ps`
  ADD CONSTRAINT `pengembalian_ps_ibfk_1` FOREIGN KEY (`id_peminjaman_ps`) REFERENCES `peminjaman_ps` (`id_peminjaman_ps`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
