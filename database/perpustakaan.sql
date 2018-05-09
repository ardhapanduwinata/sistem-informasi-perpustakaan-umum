-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Bulan Mei 2018 pada 02.42
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `foto` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `alamat_admin`, `notelp_admin`, `email_admin`, `foto`) VALUES
(1, 'nara', 'malang', '1', 'trinsp11@gmail.com', '3.png'),
(2, 'trinanda', 'malang', '3', 'trinsp11@gmail.com', 'sby_hijacking.PNG');

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
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `alamat_anggota`, `notelp_anggota`, `email_anggota`, `foto`) VALUES
(1, 'trinsp', 'malang', '082244443789', 'trinsp11@gmail.com', 'trinsp.png'),
(2, 'nara', 'malang', '081945999278', 'nara@gmail.com', 'nara.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(45) DEFAULT NULL,
  `pengarang` varchar(45) DEFAULT NULL,
  `tahun_terbit` varchar(45) DEFAULT NULL,
  `id_penerbit` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `cover_buku` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `pengarang`, `tahun_terbit`, `id_penerbit`, `id_kategori`, `cover_buku`) VALUES
(1, 'TIK', 'Tri Nanda Satrio Purnomo', '2012', 1, 1, 'debian_trinsp.PNG'),
(2, 'ekonomi', 'bb', '2012', 1, 1, 'default-zones.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(45) DEFAULT NULL,
  `lokasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `lokasi`) VALUES
(1, 'komputer', 'A1'),
(2, 'Akuntasi', 'B1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'air langga');

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
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`,`id_penerbit`,`id_kategori`),
  ADD KEY `fk_buku_penerbit1_idx` (`id_penerbit`),
  ADD KEY `fk_buku_kategori1_idx` (`id_kategori`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`,`id_anggota`,`buku_id_buku`,`id_admin`),
  ADD KEY `fk_peminjaman_anggota_idx` (`id_anggota`),
  ADD KEY `fk_peminjaman_buku1_idx` (`buku_id_buku`),
  ADD KEY `fk_peminjaman_admin1_idx` (`id_admin`);

--
-- Indeks untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`,`id_peminjaman`,`id_admin`),
  ADD KEY `fk_pengembalian_peminjaman1_idx` (`id_peminjaman`),
  ADD KEY `fk_pengembalian_admin1_idx` (`id_admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
