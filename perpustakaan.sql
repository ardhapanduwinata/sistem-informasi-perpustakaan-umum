-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Generation Time: 26 Jul 2018 pada 03.32
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(45) DEFAULT NULL,
  `alamat_admin` varchar(45) DEFAULT NULL,
  `notelp_admin` varchar(45) DEFAULT NULL,
  `email_admin` varchar(45) DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `alamat_admin`, `notelp_admin`, `email_admin`, `username`, `password`, `foto`) VALUES
(1, 'System', '', '', '', '', '', ''),
(2, 'admin', 'blabla', '000000', 'blabla@nmail', 'admin', '21232f297a57a5a743894a0e4a801fc3', '10s261.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(45) DEFAULT NULL,
  `alamat_anggota` varchar(45) DEFAULT NULL,
  `notelp_anggota` varchar(45) DEFAULT NULL,
  `email_anggota` varchar(45) DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `alamat_anggota`, `notelp_anggota`, `email_anggota`, `username`, `password`, `foto`) VALUES
(1, 'tri', 'malang', '9235', 'trinsp@gmail.com', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '10s26.png'),
(2, 'bb', 'mlg', '099', 'bb@mail', 'bb', '21ad0bd836b90d08f4cf640b4c298e7c', 'bb.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(45) DEFAULT NULL,
  `pengarang` varchar(45) DEFAULT NULL,
  `tahun_terbit` varchar(45) DEFAULT NULL,
  `cover_buku` varchar(255) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `sinopsis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `pengarang`, `tahun_terbit`, `cover_buku`, `id_penerbit`, `id_kategori`, `sinopsis`) VALUES
(1, 'IPA XII', 'tole', '2018-07-11', 'etc_bind_db192.PNG', 2, 1, 'ksamdlkasmd'),
(2, 'MATEMATIKA', 'BUDI UTOMO', '2018', 'dpkg.PNG', 1, 1, ''),
(3, 'FISIKA 1', 'FATAYATI', '2018', 'lamp.jpg', 1, 1, ''),
(4, 'ok google', 'beby', '2017', 'FORMATAN.jpg', 3, 2, ''),
(5, 'format', 'novia', '2016', 'about.jpg', 1, 3, ''),
(6, 'facebook', 'putri', '2018', 'intro-bg.jpg', 1, 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(45) DEFAULT NULL,
  `lokasi` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `lokasi`) VALUES
(1, 'fisika', 'B21'),
(2, 'Matematika', 'A1'),
(3, 'IPA', 'C1'),
(4, 'jaringan', 'J1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tanggal_peminjaman` varchar(45) DEFAULT NULL,
  `tanggal_pengembalian` varchar(45) DEFAULT NULL,
  `id_anggota` int(11) NOT NULL,
  `buku_id_buku` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tanggal_peminjaman`, `tanggal_pengembalian`, `id_anggota`, `buku_id_buku`, `id_admin`, `status`) VALUES
(2, '2018-07-24', '2018-07-24', 1, 2, 2, 'Dikembalikan'),
(3, '2018-07-24', '2018-07-24', 1, 3, 2, 'Dikembalikan'),
(4, '2018-07-24', '2018-07-24', 1, 3, 2, 'Dikembalikan'),
(5, '2018-07-24', '2018-07-24', 1, 2, 2, 'Dikembalikan'),
(6, '2018-07-25', '2018-07-25', 1, 1, 2, 'Dikembalikan'),
(7, '2018-07-25', '2018-07-25', 1, 1, 2, 'Dikembalikan'),
(8, '2018-07-25', '2018-07-25', 2, 1, 2, 'Dikembalikan'),
(9, '2018-07-25', '2018-07-25', 1, 1, 2, 'Dikembalikan'),
(10, '2018-07-25', '2018-07-25', 1, 1, 2, 'Dikembalikan'),
(11, '2018-07-25', '2018-07-25', 1, 1, 2, 'Dikembalikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`) VALUES
(1, 'Gramedia'),
(2, 'Erlangga'),
(3, 'Ganesha'),
(4, 'Wattpad'),
(5, 'Airlangga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `denda` varchar(45) DEFAULT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`,`id_penerbit`,`id_kategori`),
  ADD KEY `fk_buku_penerbit1_idx` (`id_penerbit`),
  ADD KEY `fk_buku_kategori1_idx` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`,`id_anggota`,`buku_id_buku`,`id_admin`),
  ADD KEY `fk_peminjaman_anggota_idx` (`id_anggota`),
  ADD KEY `fk_peminjaman_buku1_idx` (`buku_id_buku`),
  ADD KEY `fk_peminjaman_admin1_idx` (`id_admin`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`,`id_peminjaman`,`id_admin`),
  ADD KEY `fk_pengembalian_peminjaman1_idx` (`id_peminjaman`),
  ADD KEY `fk_pengembalian_admin1_idx` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `fk_buku_kategori1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_buku_penerbit1` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbit` (`id_penerbit`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `fk_peminjaman_admin1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peminjaman_anggota` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peminjaman_buku1` FOREIGN KEY (`buku_id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `fk_pengembalian_admin1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pengembalian_peminjaman1` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id_peminjaman`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
