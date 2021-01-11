-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2021 pada 02.25
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_secil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `isi_komentar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `isi_komentar`) VALUES
(1, 'jannah', 'Flash card nya menarik dan tebal bahan nya. Semoga bisa awet\r\n'),
(2, 'Sandi', 'Bagus gambar cerah, kualitas kertas bagus dan mengkilat, bagus untuk bahan belajar anak anak tentang doa doa pendek, karena ditempel di dinding lumayan banget bisa dilihat terus dan terus tiap kali lewat. Belajar dan nambah ilmu tanpa beban. Alhamdulillah...'),
(13, 'yanabintijamiat', 'Bagus gambar cerah, kualitas kertas bagus dan mengkilat, bagus untuk bahan belajar anak anak tentang doa doa pendek, karena ditempel di dinding lumayan banget bisa dilihat terus dan terus tiap kali lewat. Belajar dan nambah ilmu tanpa beban. Alhamdulillah...'),
(17, 'yanto', 'Poster dan kalendernya bagus, bahan tebel, flashcard juga bagus bgt. Sayangny g dpt bonus sama sekali, pdhl kmrin mau dikasih stiker buat anak2, packing aman dn tebal, makasihh sebelumnya'),
(18, 'Lala', 'Saya sangat Puas belanja di Secil Mainan'),
(26, 'nisasecil - Admin Secil Mainan', '@Lala Terimakasih sudah belanja di Secil Mainan Kak, semoga si Kecil suka yah :)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `status`) VALUES
(1, 'nis', 'nisasecil', 'hanis', 'admin'),
(2, 'fitri', 'fitriuye', 'fitriyah', 'customer'),
(3, 'iid', 'maumau', 'mau123', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
