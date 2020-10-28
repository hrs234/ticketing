-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Okt 2020 pada 07.35
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `id_user` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `name`, `address`, `phone`, `gender`, `id_user`) VALUES
(1, 'Eribert', 'jlana', '01823', 'Laki-Laki', 1072),
(2, 'Harris', 'Jl.Selatan', '0182938', 'Laki-Laki', 400),
(3, 'Jaka', 'Jl.a', '09239273', 'Laki-Laki', 1042),
(4, 'Lisa', 'HKSN', '0852', 'Laki-Laki', 1552);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(255) NOT NULL,
  `reservation_code` varchar(200) NOT NULL,
  `reservation_at` varchar(200) NOT NULL,
  `reservation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_customer` int(255) NOT NULL,
  `seat_code` varchar(200) NOT NULL,
  `id_rute` int(255) NOT NULL,
  `depart_at` varchar(200) NOT NULL,
  `price` bigint(10) NOT NULL,
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `reservation_code`, `reservation_at`, `reservation_date`, `id_customer`, `seat_code`, `id_rute`, `depart_at`, `price`, `id_user`) VALUES
(1, 'CV-789', 'supi', '2019-02-17 06:40:43', 3, 'BCT-009', 2, 'ko', 8000, 1),
(2, 'RS-547', 'INDONESIA', '2019-02-20 22:49:10', 1, 'ST-261', 3, '2019-08-09', 150000, 1072),
(3, 'RS-547', 'INDONESIA', '2019-02-20 22:49:10', 1, 'ST-719', 3, '2019-08-09', 150000, 1072),
(4, 'RS-547', 'INDONESIA', '2019-02-20 22:49:10', 1, 'ST-353', 3, '2019-08-09', 150000, 1072),
(5, 'RS-309', 'INDONESIA', '2019-02-21 02:05:44', 1, 'ST-176', 4, '2020-08-08', 120000, 1072),
(6, 'RS-309', 'INDONESIA', '2019-02-21 02:05:44', 1, 'ST-363', 4, '2020-08-08', 120000, 1072),
(7, 'RS-334', 'INDONESIA', '2019-02-21 02:07:10', 1, 'ST-523', 3, '2019-08-09', 150000, 1072),
(8, 'RS-912', 'INDONESIA', '2019-02-21 02:18:12', 1, 'ST-878', 4, '2020-08-08', 120000, 1072),
(9, 'RS-38', 'INDONESIA', '2019-02-21 02:25:36', 1, 'ST-481', 4, '2020-08-08', 120000, 1072),
(10, 'RS-38', 'INDONESIA', '2019-02-21 02:25:36', 1, 'ST-988', 4, '2020-08-08', 120000, 1072),
(11, 'RS-38', 'INDONESIA', '2019-02-21 02:25:36', 1, 'ST-886', 4, '2020-08-08', 120000, 1072),
(12, 'RS-427', 'INDONESIA', '2019-02-21 03:22:39', 3, 'ST-289', 4, '2020-08-08', 120000, 1042),
(13, 'RS-427', 'INDONESIA', '2019-02-21 03:22:39', 3, 'ST-331', 4, '2020-08-08', 120000, 1042),
(14, 'RS-131', 'INDONESIA', '2019-02-26 06:24:59', 1, 'ST-956', 3, '2019-08-09', 150000, 1072),
(15, 'RS-131', 'INDONESIA', '2019-02-26 06:24:59', 1, 'ST-828', 3, '2019-08-09', 150000, 1072),
(16, 'RS-131', 'INDONESIA', '2019-02-26 06:24:59', 1, 'ST-620', 3, '2019-08-09', 150000, 1072),
(17, 'RS-131', 'INDONESIA', '2019-02-26 06:25:00', 1, 'ST-207', 3, '2019-08-09', 150000, 1072),
(19, 'RS-307', 'INDONESIA', '2019-02-26 06:32:19', 1, 'ST-725', 3, '2019-08-09', 150000, 1072),
(20, 'RS-307', 'INDONESIA', '2019-02-26 06:32:19', 1, 'ST-764', 3, '2019-08-09', 150000, 1072),
(21, 'RS-122', 'INDONESIA', '2019-02-27 01:01:31', 1, 'ST-598', 5, '2019-08-17', 230000, 1072),
(22, 'RS-628', 'INDONESIA', '2019-02-27 01:02:33', 1, 'ST-247', 3, '2019-08-09', 150000, 1072),
(23, 'RS-628', 'INDONESIA', '2019-02-27 01:02:33', 1, 'ST-547', 3, '2019-08-09', 150000, 1072);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE `rute` (
  `id_rute` int(255) NOT NULL,
  `depart_at` varchar(100) NOT NULL,
  `rute_form` varchar(100) NOT NULL,
  `rute_to` varchar(100) NOT NULL,
  `price` bigint(10) NOT NULL,
  `id_transportation` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rute`
--

INSERT INTO `rute` (`id_rute`, `depart_at`, `rute_form`, `rute_to`, `price`, `id_transportation`) VALUES
(2, '2019-09-09', 'Banjarmasin', 'Selatan', 2000, 2),
(3, '2019-08-09', 'Banjarmasin', 'Denpasar', 150000, 2),
(4, '2020-08-08', 'Surabaya', 'Makassar', 120000, 3),
(5, '2019-08-17', 'Denpasar', 'Banjarmasin', 230000, 4),
(6, '2000-09-09', 'Banjarmasin', 'Surabaya', 120000, 3),
(7, '1999-09-09', 'Jakarta', 'Papua', 1200000, 3);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `searchvtiga`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `searchvtiga` (
`id_rute` int(255)
,`depart_at` varchar(100)
,`id_trans_type` int(255)
,`id_transportation` int(255)
,`code` varchar(100)
,`nama_maskapai` text
,`price` bigint(10)
,`kelas` text
,`rute_form` varchar(100)
,`rute_to` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `search_data`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `search_data` (
`id_rute` int(255)
,`id_trans_type` int(255)
,`id_transportation` int(255)
,`code` varchar(100)
,`nama_maskapai` text
,`kelas` text
,`rute_form` varchar(100)
,`rute_to` varchar(100)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportation`
--

CREATE TABLE `transportation` (
  `id_transportation` int(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `nama_maskapai` text NOT NULL,
  `seat_qty` int(100) NOT NULL,
  `id_trans_type` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transportation`
--

INSERT INTO `transportation` (`id_transportation`, `code`, `nama_maskapai`, `seat_qty`, `id_trans_type`) VALUES
(2, 'BG-567', 'Merpati Airlines', 2, 3),
(3, 'CV-600', 'Garuda', 12, 3),
(4, 'CB-890', 'Sriwijaya', 9, 2),
(5, 'CK-909', 'LainAir', 10, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transport_type`
--

CREATE TABLE `transport_type` (
  `id_trans_type` int(255) NOT NULL,
  `kelas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transport_type`
--

INSERT INTO `transport_type` (`id_trans_type`, `kelas`) VALUES
(2, 'Bisnis'),
(3, 'Ekonomi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(255) NOT NULL,
  `username` varchar(130) NOT NULL,
  `password` varchar(130) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `fullname`, `level`) VALUES
(1, 'admin', 'admin', 'Budi', 'admin'),
(7, 'Harris', 'ris', 'fiks', 'admin'),
(400, 'haris', 'haris', 'Harris', 'user'),
(1042, 'jaka', 'jaka', 'Jaka', 'user'),
(1072, 'user', 'user', 'Eribert', 'user'),
(1552, 'lisaa', '11013', 'Lisa', 'user');

-- --------------------------------------------------------

--
-- Struktur untuk view `searchvtiga`
--
DROP TABLE IF EXISTS `searchvtiga`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `searchvtiga`  AS  select `rute`.`id_rute` AS `id_rute`,`rute`.`depart_at` AS `depart_at`,`transport_type`.`id_trans_type` AS `id_trans_type`,`transportation`.`id_transportation` AS `id_transportation`,`transportation`.`code` AS `code`,`transportation`.`nama_maskapai` AS `nama_maskapai`,`rute`.`price` AS `price`,`transport_type`.`kelas` AS `kelas`,`rute`.`rute_form` AS `rute_form`,`rute`.`rute_to` AS `rute_to` from ((`rute` join `transportation` on((`transportation`.`id_transportation` = `rute`.`id_transportation`))) join `transport_type` on((`transport_type`.`id_trans_type` = `transportation`.`id_trans_type`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `search_data`
--
DROP TABLE IF EXISTS `search_data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `search_data`  AS  select `rute`.`id_rute` AS `id_rute`,`transport_type`.`id_trans_type` AS `id_trans_type`,`transportation`.`id_transportation` AS `id_transportation`,`transportation`.`code` AS `code`,`transportation`.`nama_maskapai` AS `nama_maskapai`,`transport_type`.`kelas` AS `kelas`,`rute`.`rute_form` AS `rute_form`,`rute`.`rute_to` AS `rute_to` from ((`rute` join `transportation` on((`transportation`.`id_transportation` = `rute`.`id_transportation`))) join `transport_type` on((`transport_type`.`id_trans_type` = `transportation`.`id_trans_type`))) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`);

--
-- Indeks untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id_rute`),
  ADD KEY `transportation_id` (`id_transportation`);

--
-- Indeks untuk tabel `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`id_transportation`),
  ADD KEY `transport_type_id` (`id_trans_type`);

--
-- Indeks untuk tabel `transport_type`
--
ALTER TABLE `transport_type`
  ADD PRIMARY KEY (`id_trans_type`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `rute`
--
ALTER TABLE `rute`
  MODIFY `id_rute` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `transportation`
--
ALTER TABLE `transportation`
  MODIFY `id_transportation` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `transport_type`
--
ALTER TABLE `transport_type`
  MODIFY `id_trans_type` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1553;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD CONSTRAINT `rute_ibfk_1` FOREIGN KEY (`id_transportation`) REFERENCES `transportation` (`id_transportation`);

--
-- Ketidakleluasaan untuk tabel `transportation`
--
ALTER TABLE `transportation`
  ADD CONSTRAINT `transportation_ibfk_1` FOREIGN KEY (`id_trans_type`) REFERENCES `transport_type` (`id_trans_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
