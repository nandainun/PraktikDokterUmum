-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2022 pada 07.58
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_praktikirga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(5) NOT NULL,
  `nama_obat` varchar(40) NOT NULL,
  `sediaan` enum('Tablet','Pil','Kapsul','Salep','Sirup') NOT NULL,
  `dosis` varchar(40) NOT NULL,
  `keterangan` varchar(40) NOT NULL,
  `stok` int(4) NOT NULL,
  `tglmasuk_obat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `sediaan`, `dosis`, `keterangan`, `stok`, `tglmasuk_obat`) VALUES
(2, 'Amoxilin', 'Tablet', '200 mg', '-', 13, '2022-11-01'),
(3, 'Ambeven', 'Kapsul', '-', '-', 19, '2022-11-01'),
(4, 'Bisolvon', 'Tablet', '-', '-', 24, '2022-11-02'),
(5, 'Bisolvon', 'Sirup', '-', 'Anak', 20, '2022-11-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(5) NOT NULL,
  `nama_pasien` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `umur` int(2) NOT NULL,
  `alergi` varchar(50) NOT NULL,
  `tglmasuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `alamat`, `jenis_kelamin`, `umur`, `alergi`, `tglmasuk`) VALUES
(2, 'Merta Arum Prastika', 'Bogor', 'P', 35, '-', '2022-10-01'),
(3, 'Muhammad Irga', 'Depok', 'L', 38, '-', '2022-11-01'),
(4, 'Nanda Ilhami', 'Depok', 'L', 21, 'Sirup', '2022-11-02'),
(5, 'Hilmi', 'Depok', 'L', 30, '-', '2022-11-02'),
(6, 'Taufik', 'Depok', 'L', 29, 'Antibiotik', '2022-11-03'),
(7, 'Agil', 'Depok', 'L', 21, '-', '2022-11-03'),
(8, 'Aufa Al-Qowiy', 'Depok', 'L', 23, '-', '2022-11-03'),
(9, 'Ainun', 'Depok', 'P', 59, '-', '2022-11-04'),
(10, 'Muslim', 'Depok', 'L', 59, '-', '2022-11-05'),
(11, 'Mualim', 'Bogor', 'L', 19, '-', '2022-11-05'),
(12, 'Wendy Girsang', 'Depok', 'L', 23, '-', '2022-11-05'),
(13, 'Satrio', 'Depok', 'L', 23, '-', '2022-11-05'),
(15, 'Arif', 'Depok', 'L', 22, '-', '2022-11-10'),
(16, 'ainun', 'daDAA', 'P', 21, '-', '2022-11-10'),
(19, 'Solihun', 'Bogor', 'L', 35, '-', '2022-11-13'),
(21, 'Egar', 'Bogor', 'L', 41, '-', '2022-11-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id_rm` int(5) NOT NULL,
  `id_pasien` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `keluhan` varchar(40) NOT NULL,
  `anamnesa` varchar(40) NOT NULL,
  `diagnosa` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekam_medis`
--

INSERT INTO `rekam_medis` (`id_rm`, `id_pasien`, `tgl`, `keluhan`, `anamnesa`, `diagnosa`) VALUES
(1, 8, '2022-10-07', 'Batuk', 'Flu', 'Flu biasa'),
(3, 4, '2022-11-08', 'sakit tenggorokan', 'flu', 'flu'),
(4, 12, '2022-11-12', '', '', ''),
(5, 2, '2022-11-12', '', '', ''),
(6, 4, '2022-11-12', 'pusing', 'migrain', 'migrain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep_obat`
--

CREATE TABLE `resep_obat` (
  `id_resep` int(5) NOT NULL,
  `id_rm` int(5) NOT NULL,
  `id_obat` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resep_obat`
--

INSERT INTO `resep_obat` (`id_resep`, `id_rm`, `id_obat`, `jumlah`) VALUES
(18, 1, 4, 1),
(19, 3, 2, 4),
(20, 6, 3, 1),
(21, 6, 5, 2),
(22, 1, 2, 1),
(23, 1, 5, 3);

--
-- Trigger `resep_obat`
--
DELIMITER $$
CREATE TRIGGER `AmbilStok` AFTER INSERT ON `resep_obat` FOR EACH ROW BEGIN
	UPDATE obat set stok = stok - NEW.jumlah
    WHERE id_obat = NEW.id_obat;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Nanda Ilhami');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id_rm`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indeks untuk tabel `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_rm` (`id_rm`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id_rm` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `resep_obat`
--
ALTER TABLE `resep_obat`
  MODIFY `id_resep` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `id_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD CONSTRAINT `id_obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `id_rm` FOREIGN KEY (`id_rm`) REFERENCES `rekam_medis` (`id_rm`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
