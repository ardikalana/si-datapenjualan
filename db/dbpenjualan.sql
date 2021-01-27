-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 27. Januari 2021 jam 15:20
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbpenjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penjualan`
--

CREATE TABLE IF NOT EXISTS `data_penjualan` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `kode_penjualan` varchar(25) NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `jumlah_bag` int(5) NOT NULL,
  `total_harga` varchar(100) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `nomor_kendaraan` varchar(50) NOT NULL,
  `tujuan_pengiriman` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `data_penjualan`
--

INSERT INTO `data_penjualan` (`id`, `kode_penjualan`, `tanggal_penjualan`, `jumlah_bag`, `total_harga`, `nama_customer`, `nomor_kendaraan`, `tujuan_pengiriman`) VALUES
(13, '76353', '2021-01-03', 0, '0', 'PT.Asam', 'BF 9043 FG', 'lampung'),
(15, '464', '2021-01-02', 0, '60', 'PT.Pulp', 'BF 5634 GH', 'Bandung'),
(16, '890/GH', '2020-12-28', 0, '45', 'PT.Indah Kiat', 'BM 6512 FG', 'Riau');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_produksi`
--

CREATE TABLE IF NOT EXISTS `data_produksi` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `kode_produksi` varchar(50) NOT NULL,
  `tgl_produksi` date NOT NULL,
  `hasil_produksi` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38750 ;

--
-- Dumping data untuk tabel `data_produksi`
--

INSERT INTO `data_produksi` (`id`, `kode_produksi`, `tgl_produksi`, `hasil_produksi`) VALUES
(4, '7r7574', '2021-01-03', 90),
(38749, '373', '2021-01-09', 435);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('afrahul', 'ad6f7a20ea921a7fc41eb58da7ce57e6', 'afrahul@gmail.com', 'Afrahul', 1, 'Accounting'),
('ardiputra', 'b623a7cebe5be1abc1409e528f6b4451', 'ardikalanaputra@gmail.com', 'Ardi Kalana Putra', 1, 'Staff '),
('nurardi', 'cffd78ba9f1ed7d9e18fc165dd02671b', 'nurardi@gmail.com', 'Nur Ardi Saputra', 1, 'Admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
