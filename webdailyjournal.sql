-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql207.infinityfree.com
-- Waktu pembuatan: 11 Jan 2025 pada 07.08
-- Versi server: 10.6.19-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_38042413_webdailyjournal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, '2023 - Manchester City', 'Manchester City meraih gelar UCL pertama mereka dengan kemenangan tipis atas Inter Milan di Istanbul. Gol tunggal dalam pertandingan ini dicetak oleh Rodri di menit ke-68, membawa City ke puncak Eropa dan melengkapi treble (Liga Premier, Piala FA, dan Liga Champions) musim itu.', 'mcity.png', '2024-12-12 09:27:33', 'admin'),
(2, '2022 - Real Madrid', 'Final di Stade de France, Paris, mempertemukan dua raksasa sepak bola, Real Madrid dan Liverpool. Vinicius Junior mencetak satu-satunya gol di menit ke-59, sementara kiper Madrid, Thibaut Courtois, tampil gemilang dengan sejumlah penyelamatan penting yang menghentikan serangan Liverpool, memberi Madrid gelar ke-14 mereka.', 'madrid.png', '2024-12-12 09:28:45', 'admin'),
(3, '2021 - Chelsea', 'Chelsea memenangkan gelar kedua mereka di Porto, Portugal, dengan kemenangan 1-0 atas Manchester City. Gol Kai Havertz di menit ke-42 menjadi penentu dalam pertandingan tersebut, sementara pertahanan solid Chelsea menjaga keunggulan mereka hingga akhir. Thomas Tuchel, manajer Chelsea, sukses mengatasi taktik Pep Guardiola untuk meraih kemenangan ini.', 'chelsea.png', '2024-12-12 09:29:28', 'admin'),
(4, '2020 - Bayern Munich\r\n', 'Bayern Munich mengalahkan PSG dalam final yang diadakan di Lisbon. Kingsley Coman, lulusan akademi PSG, mencetak satu-satunya gol di menit ke-59 dengan sundulan yang menentukan kemenangan. Dengan ini, Bayern menyapu bersih semua pertandingan di Liga Champions musim itu, memenangkan turnamen dengan catatan kemenangan 100%.', 'bayern.jpeg', '2024-12-12 09:30:48', 'admin'),
(5, '2019 - Liverpool\r\n', 'Final di Madrid mempertemukan dua tim Inggris, Liverpool dan Tottenham. Mohamed Salah membuka skor melalui penalti cepat di menit ke-2, dan Divock Origi menggandakan keunggulan di menit ke-87. Dengan kemenangan ini, Liverpool meraih gelar Liga Champions keenam mereka dan menebus kekalahan final tahun sebelumnya.', 'liverpool.jpeg', '2024-12-12 09:31:38', 'admin'),
(6, '2018 - Real Madrid\r\n', 'Real Madrid mengamankan gelar ketiga berturut-turut mereka dengan mengalahkan Liverpool di Kyiv. Gol-gol spektakuler dari Gareth Bale, termasuk tendangan akrobatik luar biasa, dan kesalahan kiper Liverpool, Loris Karius, membantu Madrid menang 3-1. Ini menjadi gelar Liga Champions ke-13 bagi Los Blancos.', 'madrid.png', '2024-12-12 09:32:21', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `nama`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Cristiano Ronaldo', 'cr7.jpg', '2025-01-11 16:07:00', 'admin'),
(2, 'Kane', 'kane.jpg', '2025-01-11 16:08:01', 'admin'),
(3, 'Lionel Messi', 'messi.jpg', '2025-01-11 16:09:15', 'admin'),
(4, 'Robert Lewandowski', 'lewa.jpg', '2025-01-11 16:10:13', 'admin'),
(5, 'dortmund', 'dortmund.jpg', '2025-01-11 16:10:48', 'admin'),
(6, 'Rodrigo', 'rodri.jpg', '2025-01-11 16:11:20', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'cr7.jpg'),
(2, 'diva', '9ae26ff44c264acff8eab84ba2950d57', 'salah.jpg'),
(3, 'alevian', '2192cc28c971fced90864910b80f66d9', 'jamal.jpg'),
(4, 'danny', '21232f297a57a5a743894a0e4a801fc3', 'pakdanny.png'),
(5, 'messi', '81dc9bdb52d04dc20036dbd8313ed055', 'messi.jpg'),
(6, 'lewa', '81dc9bdb52d04dc20036dbd8313ed055', 'lewa.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
