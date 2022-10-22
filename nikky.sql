-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2022 pada 14.15
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nikky`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `histories`
--

CREATE TABLE `histories` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `histories`
--

INSERT INTO `histories` (`id`, `id_user`, `date`) VALUES
(1, 104, '2022-10-22'),
(2, 108, '2022-10-22'),
(3, 104, '0000-00-00'),
(4, 109, '0000-00-00'),
(5, 107, '0000-00-00'),
(6, 104, '0000-00-00'),
(7, 105, '0000-00-00'),
(8, 106, '0000-00-00'),
(9, 110, '0000-00-00'),
(10, 106, '0000-00-00'),
(11, 105, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(104, 'risky kurniawan', 'riskykrnawan', '$2y$10$qgkdvA4/SKVIbueDxkj4p.uu2bOGh7Emy56gaUcyfZKiZZxpPUfFy'),
(105, 'udin sedunia', 'udinsedunia', '$2y$10$KnREMdWb8ESUSHCLPtaza.2kzojWHlg04/Rmmxi18zFe9DKNtZ1ti'),
(106, 'farel', 'farel', '$2y$10$6mCAzWxcVEHk/pueeN50HuXPZ562ss0CtBJIK5PvVq6hQWlkrZJPK'),
(107, 'ilham', 'ilham', '$2y$10$/PzEqh.CzmTeiFDFn0rnqeioor2GA6WdYFogC86Jb2D8qfVbNdiw6'),
(108, 'kobo kanaeru', 'kobo', '$2y$10$PugSoyVFTv1e8gZ52W6wX.q1/AVTSBPEg27e9CGZKx1Qaugs2S6pC'),
(109, 'guawaim', 'guawaim', '$2y$10$6LJhvKKVdIzK1DeQeXR8beV.MeHElgmna0ck5eWQ4DkL6ehFdTnou'),
(110, 'sebuah nama', 'sebuahusername', '$2y$10$EVimy6QJlAxO0m89xiA4S.vzawnNKpTC8Ww/oFyZtmuXJR3cx2Yj6'),
(111, 'risky kurniawan', 'riskykurniawan2', '$2y$10$gjfxKr9coBTfguBsp2.RW.3PaQ/w8GRcSUf17U9FWZ4deLG1rejQi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_FK1` (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `histories`
--
ALTER TABLE `histories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `histories`
--
ALTER TABLE `histories`
  ADD CONSTRAINT `users_FK1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
