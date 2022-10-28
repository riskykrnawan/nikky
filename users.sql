-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Okt 2022 pada 05.33
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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `photo` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `photo`, `name`, `username`, `password`) VALUES
(104, '10-28-2022-11-30-26-am.jpg', 'risky kurniawan', 'riskykrnawan', '$2y$10$qgkdvA4/SKVIbueDxkj4p.uu2bOGh7Emy56gaUcyfZKiZZxpPUfFy'),
(105, '10-28-2022-10-19-56-am.jpg', 'udin sedunia', 'udinsedunia', '$2y$10$KnREMdWb8ESUSHCLPtaza.2kzojWHlg04/Rmmxi18zFe9DKNtZ1ti'),
(106, '10-28-2022-10-19-56-am.jpg', 'farel', 'farel', '$2y$10$6mCAzWxcVEHk/pueeN50HuXPZ562ss0CtBJIK5PvVq6hQWlkrZJPK'),
(107, '10-28-2022-10-19-56-am.jpg', 'ilham', 'ilham', '$2y$10$/PzEqh.CzmTeiFDFn0rnqeioor2GA6WdYFogC86Jb2D8qfVbNdiw6'),
(108, '10-28-2022-10-19-56-am.jpg', 'kobo kanaeru', 'kobo', '$2y$10$PugSoyVFTv1e8gZ52W6wX.q1/AVTSBPEg27e9CGZKx1Qaugs2S6pC'),
(109, '10-28-2022-10-19-56-am.jpg', 'guawaim', 'guawaim', '$2y$10$6LJhvKKVdIzK1DeQeXR8beV.MeHElgmna0ck5eWQ4DkL6ehFdTnou'),
(111, '10-28-2022-10-19-56-am.jpg', 'risky kurniawan', 'riskykurniawan2', '$2y$10$gjfxKr9coBTfguBsp2.RW.3PaQ/w8GRcSUf17U9FWZ4deLG1rejQi'),
(114, '10-28-2022-10:19:05-am.jpg', '12355', '12355', '$2y$10$KkdW/hYbENbVZ/bpdPD6Ret6oc971bWA6rSBbmM.7BB3H3Aalgtqq'),
(115, '10-28-2022-10-19-56-am.jpg', '222', '222', '$2y$10$7NdEs9pSVs4o7W/4FzzyJepSnd0HXGtfg/nwStjdjMVdpC6Mz21Fm'),
(116, '10-28-2022-11-31-01-am.jpg', '12399', '12399', '$2y$10$RT2f3n0H23odEvwhsFuE5egflnn8qlSUO5N6GuJHLxEfvNqEOBgiu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
