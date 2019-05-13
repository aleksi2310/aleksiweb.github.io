-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Bulan Mei 2019 pada 06.20
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uasmateri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `image`) VALUES
(8, 'Aladdin', '2019 - fantasy/romance - 2h 8m', 50000, 'upload/aladdin.jpg'),
(9, 'Alita: Battle Angel', '2019 â€§ Fiksi ilmiah/Cerita seru â€§ 2 j 2 m', 50000, 'upload/alita.jpg'),
(10, 'Avengers: Endgame', '2019 â€§ Fantasy/Sci-fi â€§ 3h 2m', 70000, 'upload/avenger endgame.jpg'),
(11, 'Bumblebee', '2018 â€§ Sci-fi/Action â€§ 1h 54m', 45000, 'upload/bumblebee.jpg'),
(12, ' Captain Marvel', '2019 â€§ Fantasy/Sci-fi â€§ 2h 5m', 50000, 'upload/captain marvels.jpg'),
(13, 'Glass', '2019 â€§ Drama/Fantasy â€§ 2h 9m', 50000, 'upload/glass.jpg'),
(14, 'Aquaman', '2018 â€§ Fantasy/Sci-fi â€§ 2h 22m', 55000, 'upload/aquaman.jpg'),
(15, 'How to Train Your Dragon 2', '2014 â€§ Fantasy/Action â€§ 1h 45m', 35000, 'upload/how to train your dragon 2.jpg'),
(16, 'Incredibles 2', '2018 â€§ Sci-fi/Action â€§ 2h 5m', 55000, 'upload/incredible 2.jpg'),
(17, 'Iron Sky: The Coming Race', '2019 â€§ Fantasy/Sci-fi â€§ 1h 30m', 30000, 'upload/iron sky.jpg'),
(19, 'John Wick: Chapter 3 â€“ Parabellum', '2019 â€§ Thriller/Mystery â€§ 2h 23m', 65000, 'upload/jhon wick 3.jpg'),
(20, 'Spider-Man: Into the Spider-Verse', '2018 â€§ Fantasy/Sci-fi â€§ 1h 56m', 37000, 'upload/spider man.jpg'),
(21, 'Storm Boy', '2019 â€§ Drama/Adventure â€§ 1h 49m', 45000, 'upload/storm boy.jpg'),
(22, 'The Kid Who Would Be King', '2019 â€§ Fantasy/Action â€§ 2 hours', 50000, 'upload/the kids who would be king.jpg'),
(23, ' The Lego Movie 2: The Second Part', '2019 â€§ Fantasi/Fiksi ilmiah â€§ 1 j 47 m', 47000, 'upload/the lego.jpg'),
(24, 'Triple Threat', '2019 â€§ Thriller/Action â€§ 1h 35m', 30000, 'upload/triple threat.jpg'),
(25, 'Trolled', '2018 â€§ Comedy/Animation â€§ 1h 32m', 30000, 'upload/trolled.jpg'),
(26, 'Undercover Grandpa', '2017 â€§ Action/Comedy â€§ 1h 39m', 27000, 'upload/undercover granpa.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(13) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usia` int(30) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `biografi` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `website` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `usia`, `nim`, `jurusan`, `biografi`, `gender`, `email`, `website`, `level`) VALUES
(1, 'casper', '090900', 18, '09031181823127', 'Sistem Informasi', 'saya merupakan mahasiswa unsri jurusan sistem info', 'Male', 'http://elearningunsri.ac.id', 'aleksi032000@gmail.com', 'admin'),
(2, 'casper1', '090900', 18, '09031181823127', 'Sistem Komputer', 'mahasiwa unsri angkatan 2018', 'Male', 'http://elearningunsri.ac.id', 'aleksi032000@gmail.com', 'manager'),
(3, 'casper111', '090900', 18, '0909090909', 'Sistem Informasi', 's', 'Male', 'http://elearningunsri.ac.id', 'aleksi032000@gmail.com', 'manager'),
(4, 'casper3', '090900', 18, '0909090909', 'Sistem Informasi', ',jhk', 'Male', 'http://elearningunsri.ac.id', 'aleksi032000@gmail.com', 'manager');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
