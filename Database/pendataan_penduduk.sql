-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2022 pada 14.38
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendataan_penduduk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses`
--

CREATE TABLE `akses` (
  `id_akses` int(11) NOT NULL,
  `nama_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akses`
--

INSERT INTO `akses` (`id_akses`, `nama_akses`) VALUES
(1, 'super'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `nama_akun` varchar(50) NOT NULL,
  `username_akun` varchar(16) NOT NULL,
  `password_akun` varchar(16) NOT NULL,
  `id_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `nama_akun`, `username_akun`, `password_akun`, `id_akses`) VALUES
(1, 'Super', 'super25', 'super25', 1),
(2, 'Admin', 'admin25', 'admin25', 2),
(4, 'Tarto23', 'Tarto23', 'Tarto23', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kepala_keluarga`
--

CREATE TABLE `data_kepala_keluarga` (
  `nik` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `ttl` date NOT NULL,
  `dusun` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `status` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `id_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kepala_keluarga`
--

INSERT INTO `data_kepala_keluarga` (`nik`, `nama`, `agama`, `gender`, `ttl`, `dusun`, `alamat`, `pendidikan`, `pekerjaan`, `gol_darah`, `no_telp`, `status`, `kategori`, `id_akun`) VALUES
(7208020707830001, 'NEI', 'Islam', 'L', '1983-07-02', 'Dusun 3', 'Tanampedagi', 'SD', 'Ibu Rumah Tangga', 'AB', '0000000000000', 'Menikah', 'Tetap', 1),
(7208020904160001, 'MOHAMMAD USRI', 'Islam', 'L', '1973-07-19', 'Dusun 3', 'Tanampedagi', 'SD', 'Petani', 'A', '085234495453', 'Menikah', 'Tetap', 1),
(7208021506160001, 'RAMADAN', 'Islam', 'L', '1984-07-03', 'Dusun 3', 'Tanampedagi', 'smp', 'Petani', 'A', '0000000000000', 'Menikah', 'Tetap', 1),
(7208021911900001, 'AHMAD ', 'Islam', 'L', '1999-01-19', 'Dusun 2', 'Tanampedagi', 'SMA', 'Nelayan', 'O', '083110410270', 'Menikah', 'Tetap', 1),
(7208022108160001, 'MOH. ASRIL', 'Islam', 'L', '1999-05-04', 'Dusun 1', 'Tanampedagi', 'SMA', 'Petani', 'B', '083174312093', 'Menikah', 'Tetap', 1),
(7208022405880001, 'ABA', 'Islam', 'L', '1988-08-19', 'Dusun 2', 'Tanampedagi', 'SD', 'Petani', 'O', '083174120821', 'Menikah', 'Tetap', 1),
(7208022804020002, 'ARIL', 'Islam', 'L', '1986-03-12', 'Dusun 4', 'Tanampedagi', 'SMA', 'PETANI', 'O', '0000000000000', 'Menikah', 'Tetap', 1),
(7208023112730002, 'ASNONG', 'Islam', 'L', '1973-12-31', 'Dusun 1', 'Tanampedagi', 'SMA', 'PETANI', 'A', '083123457123', 'Menikah', 'Tetap', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pendatang`
--

CREATE TABLE `data_pendatang` (
  `nik` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `ttl` date NOT NULL,
  `dusun` varchar(20) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `status` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `ttl_mulai` date NOT NULL,
  `id_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pendatang`
--

INSERT INTO `data_pendatang` (`nik`, `nama`, `agama`, `gender`, `ttl`, `dusun`, `alamat`, `pendidikan`, `pekerjaan`, `gol_darah`, `no_telp`, `status`, `kategori`, `ttl_mulai`, `id_akun`) VALUES
(324234324534, 'Tiar', 'Islam', 'L', '2001-03-23', 'Dusun 3', 'Tambun', 'SMA', 'NELAYAN', 'AB', '08070657764', 'Belum Menikah', 'Pendatang', '2020-03-21', 1),
(7208010602970002, 'Tamdun', 'Islam', 'L', '1987-03-02', 'Dusun 3', 'Tanamoedagi', 'S1', 'Wiraswasta', 'O', '082389881212', 'Menikah', 'Pendatang', '2021-01-23', 1),
(7208010607970003, 'WAHYU', 'Islam', 'L', '1997-09-17', 'Dusun 3', 'Tanampedagi', 'S1', 'Petani', 'B', '083110423312', 'Menikah', 'Pendatang', '2021-04-21', 1),
(7208025203780001, 'IDA LASAMPE', 'Islam', 'P', '1978-03-12', 'Dusun 1', 'Dusun 1', 'SMP', 'WIRASWASTA', 'A', '0831767096302', 'Menikah', 'Pendatang', '2021-04-01', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `nik` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `ttl` date NOT NULL,
  `dusun` varchar(20) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `status` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `id_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_penduduk`
--

INSERT INTO `data_penduduk` (`nik`, `nama`, `agama`, `gender`, `ttl`, `dusun`, `alamat`, `pendidikan`, `pekerjaan`, `gol_darah`, `no_telp`, `status`, `kategori`, `id_akun`) VALUES
(7208020107040001, 'ZELNI', 'Islam', 'P', '1989-01-22', 'Dusun 1', 'Tanampedagi', 'SD', 'ibu rumah tangga', 'A', '000000000000', 'Menikah', 'Tetap', 1),
(7208020107670002, 'LUKWAN', 'Islam', 'L', '1967-07-01', 'Dusun 4', 'Tanampedagi', 'SMA', 'Petani', 'AB', '082134098421', 'Belum Menikah', 'Tetap', 1),
(7208020707830001, 'NEI', 'Islam', 'L', '1983-07-02', 'Dusun 3', 'Tanampedagi', 'SD', 'Ibu Rumah Tangga', 'AB', '0000000000000', 'Menikah', 'Tetap', 1),
(7208020904160001, 'MOHAMMAD USRI', 'Islam', 'L', '1973-07-19', 'Dusun 3', 'Tanampedagi', 'SD', 'Petani', 'A', '085234495453', 'Menikah', 'Tetap', 1),
(7208021110730003, 'HARIANTO', 'Islam', 'L', '1999-03-22', 'Dusun 3', 'Tanampedagi', 'SMA', 'Mahasiswa', 'O', '0852129323112', 'Belum Menikah', 'Tetap', 1),
(7208021506160001, 'RAMADAN', 'Islam', 'L', '1984-07-03', 'Dusun 3', 'Tanampedagi', 'smp', 'Petani', 'A', '0000000000000', 'Menikah', 'Tetap', 1),
(7208021911900001, 'AHMAD', 'Islam', 'L', '1999-01-19', 'Dusun 2', 'Tanampedagi', 'SMA', 'Nelayan', 'O', '083110410270', 'Menikah', 'Tetap', 1),
(7208022108160001, 'MOH. ASRIL', 'Islam', 'L', '1999-05-04', 'Dusun 1', 'Tanampedagi', 'SMA', 'Petani', 'B', '083174312093', 'Menikah', 'Tetap', 1),
(7208022405880001, 'ABA', 'Islam', 'L', '1988-08-19', 'Dusun 2', 'Tanampedagi', 'SD', 'Petani', 'O', '083174120821', 'Menikah', 'Tetap', 1),
(7208022804020002, 'ARIL', 'Islam', 'L', '1986-03-12', 'Dusun 4', 'Tanampedagi', 'SMA', 'PETANI', 'O', '0000000000000', 'Menikah', 'Tetap', 1),
(7208023112730002, 'ASNONG', 'Islam', 'L', '1973-12-31', 'Dusun 1', 'Tanampedagi', 'SMA', 'PETANI', 'A', '083123457123', 'Menikah', 'Tetap', 1),
(7208024107000083, 'ENING', 'Islam', 'P', '2000-01-20', 'Dusun ', 'TANAMPEDAGI', 'SMA', 'MAHASISWA', 'A', '083139210921', 'Belum Menikah', 'Tetap', 1),
(7208024107010006, 'LARIA', 'Islam', 'P', '2001-07-01', 'Dusun 1', 'Tanampedagi', 'SMA', 'Mahasiswa', 'B', '083276909890', 'Belum Menikah', 'Tetap', 1),
(7208024107690004, 'LUSURIA', 'Islam', 'P', '1994-07-01', 'Dusun 1', 'Tanampedagi', 'SD', 'Petani', 'A', '083187812309', 'Menikah', 'Tetap', 1),
(7208024512130002, 'SILWIANA', 'Islam', 'P', '2001-03-12', 'Dusun 1', 'Tanampedagi', 'SMA', 'Mahasiswa', 'A', '083121931201', 'Belum Menikah', 'Tetap', 1),
(7208025012840002, 'SELVI', 'Islam', 'P', '2000-03-12', 'Dusun 4', 'Tanampedagi', 'SMA', 'Mahasiswa', 'B', '083121934567', 'Belum Menikah', 'Tetap', 1),
(7208026104990003, 'AFRIANA                                           ', 'Islam', 'P', '1999-03-21', 'Dusun 4', 'Tanampedagi', 'SMA', 'Ibu Rumah Tangga', 'O', '0000000000000', 'Menikah', 'Tetap', 1),
(7208026507940001, 'ZAENAB', 'Islam', 'P', '1994-05-27', 'Dusun 2', 'Petani', 'SMA', 'Ibu Rumah Tangga', 'A', '082131231092', 'Menikah', 'Tetap', 1),
(7208026608950002, 'NURAENI', 'Islam', 'P', '1995-08-29', 'Dusun 1', 'Tanampedagi', 'SD', 'Ibu Rumah Tangga', 'B', '085212341209', 'Menikah', 'Tetap', 1),
(7208030012000010, 'NASRIL NIZAM      ', 'Islam', 'L', '1999-01-13', 'Dusun 1', 'Tanampedagi', 'SMA', 'PETANI', 'A', '082345127651', 'Belum Menikah', 'Tetap', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penduduk_pindah`
--

CREATE TABLE `data_penduduk_pindah` (
  `nik` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `ttl` date NOT NULL,
  `dusun` varchar(20) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `status` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `id_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_penduduk_pindah`
--

INSERT INTO `data_penduduk_pindah` (`nik`, `nama`, `agama`, `gender`, `ttl`, `dusun`, `alamat`, `pendidikan`, `pekerjaan`, `gol_darah`, `no_telp`, `status`, `kategori`, `id_akun`) VALUES
(7208020107000005, 'UCOK', 'Islam', 'L', '1994-07-01', 'Dusun 3', 'Tanampedagi', 'SD', 'Petani', 'A', '085214098709', 'Menikah', 'Tetap', 1),
(720803001200001202, 'SATUMAI', 'Islam', 'P', '1968-07-01', 'Dusun 1', 'TANAMPEDAGI', 'SD', 'Ibu rumah tangga', 'AB', '083108650931', 'Menikah', 'Tetap', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD KEY `id_akses` (`id_akses`);

--
-- Indeks untuk tabel `data_kepala_keluarga`
--
ALTER TABLE `data_kepala_keluarga`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indeks untuk tabel `data_pendatang`
--
ALTER TABLE `data_pendatang`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indeks untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indeks untuk tabel `data_penduduk_pindah`
--
ALTER TABLE `data_penduduk_pindah`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `id_akun` (`id_akun`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akses`
--
ALTER TABLE `akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_kepala_keluarga`
--
ALTER TABLE `data_kepala_keluarga`
  MODIFY `nik` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;

--
-- AUTO_INCREMENT untuk tabel `data_pendatang`
--
ALTER TABLE `data_pendatang`
  MODIFY `nik` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;

--
-- AUTO_INCREMENT untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  MODIFY `nik` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;

--
-- AUTO_INCREMENT untuk tabel `data_penduduk_pindah`
--
ALTER TABLE `data_penduduk_pindah`
  MODIFY `nik` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`id_akses`) REFERENCES `akses` (`id_akses`);

--
-- Ketidakleluasaan untuk tabel `data_kepala_keluarga`
--
ALTER TABLE `data_kepala_keluarga`
  ADD CONSTRAINT `data_kepala_keluarga_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);

--
-- Ketidakleluasaan untuk tabel `data_pendatang`
--
ALTER TABLE `data_pendatang`
  ADD CONSTRAINT `data_pendatang_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);

--
-- Ketidakleluasaan untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD CONSTRAINT `data_penduduk_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
