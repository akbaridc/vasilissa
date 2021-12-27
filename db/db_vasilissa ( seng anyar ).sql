-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2021 pada 14.21
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vasilissa`
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
(1, 'Admin', 'admin_vasillissa@gmail.com', '081928694634', 'Jember, Indonesia', '$2y$10$hTXAzzKVyMeW2gw8lqdvJOkmtHJFw/oR1qg9yqkU7w/9vCAQYL0ba', 'c5174b3893a3527f5d2f7a25a0744f46.jpg', 2, 1),
(2, 'Master Admin', 'masteradmin_vasillissa@gmail.com', '081928694634', 'Jember, Indonesia', '$2y$10$tkojRldB8qpOLmsxOGwq5uILiSPBwBtGoVTrGQQRagWXF5oNoYrMK', '', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto_produk_tbl`
--

CREATE TABLE `foto_produk_tbl` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `foto_produk_tbl`
--

INSERT INTO `foto_produk_tbl` (`id`, `id_produk`, `foto`) VALUES
(4, 11, 'Produk-1640609576.jpg'),
(7, 12, 'Produk-1640609614.jpg'),
(8, 1, 'Produk-1640609635.jpg'),
(9, 2, 'Produk-1640609644.jpg'),
(10, 4, 'Produk-1640609654.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member_produk_tbl`
--

CREATE TABLE `member_produk_tbl` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `tanggal_beli` datetime NOT NULL DEFAULT current_timestamp(),
  `tanggal_konfirmasi` datetime DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto_tf` text DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member_produk_tbl`
--

INSERT INTO `member_produk_tbl` (`id`, `id_member`, `id_produk`, `tanggal_beli`, `tanggal_konfirmasi`, `qty`, `harga`, `foto_tf`, `status`) VALUES
(5, 1, 2, '2021-12-26 14:42:15', NULL, 4, 1243800, '204782caa9d420051373188e6f9d1c22.jpeg', 1),
(6, 1, 4, '2021-12-26 15:47:54', NULL, 5, 2372625, '4a95629bb8b550de08abbced929ace41.jpg', 0),
(7, 1, 1, '2021-12-26 21:44:13', NULL, 3, 706500, NULL, 0),
(8, 1, 12, '2021-12-26 21:57:24', NULL, 3, 5400000, 'BuktiTfP-Item-1640530929.jpg', 0);

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
(1, 'Member Testing 1', '081928694634', 'donialii098@gmail.com', '$2y$10$tkojRldB8qpOLmsxOGwq5uILiSPBwBtGoVTrGQQRagWXF5oNoYrMK', 'Tegal Boto Kidul, Sumbersari, Kab. Jember', '2021-12-20', '5URMB8JYVZ1EGGB7WJAT', '0e55d35f40ce7f46019f47801fdd7d12.jpg', 1);

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
(4, 'PKT-003', 'Paket Gold', 877, 499500, '<p><b>Paket Gold </b>- Vasillissa Beauty</p>', 5, 1, 1),
(11, 'ITM-002', 'PHP', 76, 2000000, '<p>testting</p>', 12, 2, 1),
(12, 'ITM-003', 'Drs. Didik Pudjo Musmedi M.S.', 23, 2000000, '<p><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, \"Helvetica Neue\", Helvetica, Arial, 文泉驛正黑, \"WenQuanYi Zen Hei\", \"Hiragino Sans GB\", \"儷黑 Pro\", \"LiHei Pro\", \"Heiti TC\", 微軟正黑體, \"Microsoft JhengHei UI\", \"Microsoft JhengHei\", sans-serif; white-space: pre-wrap;\">❗MOHON MEMBACA SEBELUM MEMBELI❗\r\nSemua Produk yang kita Jual ORI !!! \r\nKita merupakan Mitra Resmi, Bisa di cek di akun Pusat Skinsena.\r\nSemua produk yang kami kirimkan benar2 kami cek dengan keadaan bagus.\r\nUntuk klaim Retur barang yang rusak harus disertakan dengan Vidio unboxing tanpa di edit, tanpa dijeda atau di potong!\r\ntidak ada vidio yang sesuai  saat membuka paket maka tidak akan bisa klaim ????\r\nMemberikan Rating Bintang 3 tanpa alasan yang jelas, maka dengan sangat terpaksa akan kami BLOK ????\r\nTerimakasi atas perhatiannya and selamat Berbelanja \r\n❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️\r\n ( Minimal order 2/3 produk free gift ) \r\nSkincare 20 ribuan check  ✅\r\nBPOM ✅ HADIR SEBAGAI ALTERNATIF DIBANDING BELI PRODUK ABAL-ABAL. Daripada pakai krim abal-abal, mending pakai Skinsena yang lebih murah, sudah jelas terdaftar oleh BPOM dan dijamin higenis! Manfaat :\r\n - Glowing Toner bermanfaat untuk membersihkan, melembabkan, membantu penyerapan produk, meringankan luka bekas jerawat dan mencegah jerawat\r\n???? - Glowing serum berfungsi untuk meringankan flek, jerawat dan komedo\r\n ✨ - Day Gel Cream adalah tone up cream yang berfungsi untuk membuat kulit kamu sehat dan bercahaya sepanjang hari, mencerahkan kulit kamu dan melindungi kulitmu dari radikal bebas \r\n✨ -Night Gel Cream berfungsi untuk melembabkan dan menjaga kelembaban kulit mu semalaman, menjaga kulitmu agar tetap sehat dan menenangkan kulit sehingga membantu meringankan bekas jerawat dan noda hitam \r\n✨ QnA yang paling sering ditanyakan : \r\n- Apakah aman untuk bumil dan busui? \r\nA : Iya, kandungan Salicylic Acid dalam Glowing Serum sudah kami formulasikan dengan dosis yang aman untuk bumil dan busui, untuk lebih pasti boleh dikonsultasikan dengan Dr. Obgyn anda \r\n- Apakah bisa untuk masalah flek , jerawat atau masalah kulit lainnya?\r\n A : Skinsena Glowing series cocok untuk SEMUA JENIS KULIT seperti masalah flek, jerawat, kulit berminyak atau kering, asal tidak memiliki alergi atau ketidak cocokan dengan komposisi kami. dan TIDAK INSTANT, butuh proses. \r\n- Apakah bisa bikin putih? \r\nA : produk Skinsena BUKAN PEMUTIH. Tetapi membantu MENCERAHKAN, kalian gak harus putih untuk jadi cantik, yang penting kulit SEHAT dan terawat.\r\n - Apakah bikin ketergantungan atau pengelupasan ?\r\n A : Tidak bikin ketergantungan, tapi kulit pasti beda jika terawat atau tidak terawat. Tidak akan bikin mengelupas atau radang jika terkena matahari jika tidak ada alergi.\r\n - Apakah bisa untuk remaja atau untuk usia lanjut?\r\n A : Bisa, dianjurkan untuk usia diatas 13 tahun, bisa juga untuk usia lanjut \r\nBPOM : \r\nDAY CREAM NA18190125082 \r\nNIGHT CREAM NA18190125083 \r\nGLOWING TONER NA18191235467 \r\nGLOWING SERUM NA18200100023 </span><br></p>', 10, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reward_tbl`
--

CREATE TABLE `reward_tbl` (
  `id` int(11) NOT NULL,
  `reward` text NOT NULL,
  `level` int(2) NOT NULL,
  `point` int(11) NOT NULL,
  `reward_sukses` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reward_tbl`
--

INSERT INTO `reward_tbl` (`id`, `reward`, `level`, `point`, `reward_sukses`, `deskripsi`, `foto`, `status`) VALUES
(3, 'Handphone', 2, 10, NULL, NULL, NULL, 1),
(4, '-', 2, 10, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting_website`
--

CREATE TABLE `setting_website` (
  `id` int(11) NOT NULL,
  `nama_website` varchar(50) NOT NULL,
  `logo_website` text NOT NULL,
  `logo_icon` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `foto_perusahaan` text NOT NULL,
  `deskripsi` text NOT NULL,
  `deskripsi_singkat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `setting_website`
--

INSERT INTO `setting_website` (`id`, `nama_website`, `logo_website`, `logo_icon`, `email`, `telepon`, `alamat`, `foto_perusahaan`, `deskripsi`, `deskripsi_singkat`) VALUES
(2, 'Vasilissa', 'Logo-1640051914.png', 'Logo-icon1640085328.png', 'akbarimawan18@gmail.com', '085678654567', 'Jl. Jawa 6 Area kampus Jember', '1640084284373.png', '<h2 style=\"margin-left:0px; margin-right:0px\">Why do we use it?</h2>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:justify\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', 'Lorem ipsum dolor sit amet consectetur purpose (injected humour and the like).');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pw_user` varchar(100) NOT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `is_member` int(1) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_tbl`
--

INSERT INTO `user_tbl` (`id_user`, `nama`, `email`, `pw_user`, `no_telp`, `alamat`, `date`, `is_member`, `foto`) VALUES
(1, 'Aisyah Nora Kurniawati', 'aisyah@gmail.com', '$2y$10$8SEq74bQKL3tr5krI4THNOjSN/0gDoOpvnrwHnWEdvMbKUTRm4Cce', '0876567456', NULL, NULL, 1, 'avatar-1.png'),
(3, 'Akbar Imawan Dwi Cahya', 'akbarimawan18@gmail.com', '$2y$10$9y6RsN.cQD6RXPQu.7vPMOb7oQ6l/Q9M2mA2vmYhH33Wa1CY5MEwC', NULL, NULL, NULL, 0, 'avatar-1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `website_sosmed`
--

CREATE TABLE `website_sosmed` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `website_sosmed`
--

INSERT INTO `website_sosmed` (`id`, `icon`, `link`) VALUES
(9, 'ion ion-social-instagram', 'https://www.facebook.com/rt4rw6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `foto_produk_tbl`
--
ALTER TABLE `foto_produk_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `member_produk_tbl`
--
ALTER TABLE `member_produk_tbl`
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
-- Indeks untuk tabel `setting_website`
--
ALTER TABLE `setting_website`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `website_sosmed`
--
ALTER TABLE `website_sosmed`
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
-- AUTO_INCREMENT untuk tabel `foto_produk_tbl`
--
ALTER TABLE `foto_produk_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `member_produk_tbl`
--
ALTER TABLE `member_produk_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `member_tbl`
--
ALTER TABLE `member_tbl`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `produk_tbl`
--
ALTER TABLE `produk_tbl`
  MODIFY `id_pd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `reward_tbl`
--
ALTER TABLE `reward_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `setting_website`
--
ALTER TABLE `setting_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `website_sosmed`
--
ALTER TABLE `website_sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
