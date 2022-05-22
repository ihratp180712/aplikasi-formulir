-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Bulan Mei 2022 pada 10.24
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formulir_ulum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `universitas` varchar(150) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `tempat_lahir` varchar(150) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jurusan` varchar(125) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `no_telepon` varchar(25) NOT NULL,
  `no_ktp` int(11) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama`, `universitas`, `nim`, `tempat_lahir`, `tanggal_lahir`, `jurusan`, `alamat`, `gender`, `no_telepon`, `no_ktp`, `password`, `role_id`) VALUES
(1, 'vedfvdfvdfvvfv', 'dfvdfvdfvdfvd', '1234545554', 'fevfedvdfvdfgvbdfgbv', '2012-05-01', 'njibnuihbuhbuh', 'vfvgdfvbdfgbvfgbvfg', 'laki-laki', '33434545454', 34467656, '123', 1),
(3, 'sdvdfvfd', 'vsdfvsdfv', '32231', 'vsdfvsdfv', '2022-05-02', 'Menejemen Keuangan', 'dfvfdvfdv', 'laki-laki', '44', 33, 'b59c67bf196a4758191e42f76', 2),
(4, 'rf4trf45f4', 'rfvrgbrtbrt', '21311', 'vdfvdfvdvd', '2022-04-27', 'Menejemen Keuangan', 'vdfdfvdfvdf', 'laki-laki', '2323232', 2323232, 'ae6e334f62fb5d989398deed8', 2),
(5, 'cvwdcfwedcw', 'cwedcwdcws', '3456674', 'cwsdcwecwec', '2022-05-05', 'Menejemen Keuangan', 'cqwecwecwe', 'laki-laki', '1212', 121121, '938fa8a8a30ec91e942e32968', 2),
(6, 'sdvdfvfd', 'vsdfvsdfv', '32231', 'vsdfvsdfv', '2022-05-02', 'Menejemen Keuangan', 'dfvfdvfdv', 'laki-laki', '44', 33, '4bfa63c43cbb26925d94404bd', 2),
(7, 'Ihrat Pramudya', 'universitas Bsi', '123456787', 'Merauke', '2001-09-17', 'teknik-informatika', 'jl h tamah 57', 'laki-laki', '987687755787', 2147483647, '1bbd886460827015e5d605ed4', 2),
(8, 'xasxasx', 'xasxas', '1212', 'xasxasx', '2022-05-05', 'agrebisnis', 'scsdcsdcsd', 'laki-laki', '212312', 213124, 'b3ddbc502e307665f346cbd6e', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
