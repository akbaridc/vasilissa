-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2021 pada 12.14
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vasilissa_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `admin_pw` text NOT NULL,
  `foto_user` text NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `nama`, `email`, `no_telp`, `alamat`, `admin_pw`, `foto_user`, `hak_akses`, `status`) VALUES
(1, 'Admin', 'admin_vasillissa@gmail.com', '081928694634', 'Jember, Indonesia', '$2y$10$tkojRldB8qpOLmsxOGwq5uILiSPBwBtGoVTrGQQRagWXF5oNoYrMK', '', 2, 1),
(2, 'Master Admin', 'masteradmin_vasillissa@gmail.com', '081928694634', 'Jember, Indonesia', '$2y$10$tkojRldB8qpOLmsxOGwq5uILiSPBwBtGoVTrGQQRagWXF5oNoYrMK', '', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member_tbl`
--

CREATE TABLE `member_tbl` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pw_member` text NOT NULL,
  `alamat` text NOT NULL,
  `date` date NOT NULL,
  `kode_member` varchar(20) NOT NULL,
  `foto_member` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member_tbl`
--

INSERT INTO `member_tbl` (`id_member`, `nama`, `no_telp`, `email`, `pw_member`, `alamat`, `date`, `kode_member`, `foto_member`, `status`) VALUES
(1, 'Member Testing 1', '081928694634', 'donialii098@gmail.com', '$2y$10$tkojRldB8qpOLmsxOGwq5uILiSPBwBtGoVTrGQQRagWXF5oNoYrMK', 'Tegal Boto Kidul, Sumbersari, Kab. Jember', '2021-12-20', '5URMB8JYVZ1EGGB7WJAT', '601d4d1c1e6bc21e69b7752e3af4af00.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_tbl`
--

CREATE TABLE `produk_tbl` (
  `id_pd` int(11) NOT NULL,
  `kode_pd` text NOT NULL,
  `nama_pd` text NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `diskon` int(11) NOT NULL,
  `jenis` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk_tbl`
--

INSERT INTO `produk_tbl` (`id_pd`, `kode_pd`, `nama_pd`, `stok`, `harga`, `deskripsi`, `diskon`, `jenis`, `status`) VALUES
(1, 'PKT-001', 'Paket Bronze', 190, 235500, '<p><b>Paket Bronze</b>- Vasillissa Beauty</p>', 0, 1, 1),
(2, 'PKT-002', 'Paket Member SIlver', 789, 345500, '<p><b>Paket Member Silver </b>- Vasillissa Beauty</p>', 10, 1, 1),
(4, 'PKT-003', 'Paket Gold', 877, 499500, '<p><b>Paket Gold </b>- Vasillissa Beauty</p>', 5, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reward_tbl`
--

CREATE TABLE `reward_tbl` (
  `id` int(11) NOT NULL,
  `reward` text NOT NULL,
  `level` int(2) NOT NULL,
  `point` int(11) NOT NULL,
  `reward_sukses` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `member_tbl`
--
ALTER TABLE `member_tbl`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `produk_tbl`
--
ALTER TABLE `produk_tbl`
  ADD PRIMARY KEY (`id_pd`);

--
-- Indeks untuk tabel `reward_tbl`
--
ALTER TABLE `reward_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `member_tbl`
--
ALTER TABLE `member_tbl`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `produk_tbl`
--
ALTER TABLE `produk_tbl`
  MODIFY `id_pd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `reward_tbl`
--
ALTER TABLE `reward_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
