-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Nov 2019 pada 09.09
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasukanambyar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `apps`
--

CREATE TABLE `apps` (
  `app_id` int(11) NOT NULL,
  `name` text,
  `wa` text,
  `github` text,
  `ig` text,
  `fb` text,
  `biodata` text,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `visitor` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `apps`
--

INSERT INTO `apps` (`app_id`, `name`, `wa`, `github`, `ig`, `fb`, `biodata`, `address`, `email`, `phone`, `visitor`) VALUES
(1, 'Pasuka Ambyar', 'http://api.whatsapp.com/send?phone=6287885112329', 'https://www.github.com/miftakhulrobi', 'http://instagram.com/miftakhulmuqorobin', 'https://www.facebook.com/miftakhul.muqorobin.52', 'https://miftakhulrobi.github.io', 'Kedungputri Paron Ngawi Jawatimur', 'robinbuah@gmail.com', '6287885112329', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `like` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blogs`
--

INSERT INTO `blogs` (`blog_id`, `user_id`, `categorie_id`, `title`, `content`, `thumbnail`, `view`, `like`, `created_at`) VALUES
(19, 1, 2, 'Berbagai macam type handphone Samsung', '<p>Loreeemmm 10000</p>', 'ZA330001-C-4-1.jpg', 16, 0, '2019-11-02 03:42:08'),
(21, 1, 1, 'Mumet Ngoding', '<p>hmmm hmmmm</p>', 'jam-tangan-adidas.jpg', 6, 1, '2019-11-02 03:45:52'),
(22, 1, 3, 'Lagu mumet', '<p>hmmm hmmmm nyammm</p>', 'jam-tangan-swiss-army-hc-1025m-canvas.jpg', 7, 1, '2019-11-02 03:46:51'),
(23, 2, 2, 'Hemmm nyammy', '<p>Okelahhh kaloo begitu</p>', 'JAKCOM-CH2-Smart-Wireless-Car-Charger-Holder.jpg', 5, 1, '2019-11-03 11:17:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `categorie_id` int(11) NOT NULL,
  `categoriename` varchar(255) NOT NULL,
  `cblog` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`categorie_id`, `categoriename`, `cblog`, `created_at`) VALUES
(1, 'Rodok Ambyar', 1, '2019-11-01 11:20:00'),
(2, 'Setengah Ambyar', 4, '2019-11-01 11:20:00'),
(3, 'Poll Ambyar', 2, '2019-11-01 11:20:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `open` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `likes`
--

INSERT INTO `likes` (`like_id`, `user_id`, `blog_id`, `created_at`) VALUES
(1, 1, 19, '2019-11-05 05:34:13'),
(2, 1, 21, '2019-11-05 05:47:15'),
(5, 1, 22, '2019-11-05 06:11:35'),
(6, 1, 23, '2019-11-05 06:11:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `musics`
--

CREATE TABLE `musics` (
  `music_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `musics`
--

INSERT INTO `musics` (`music_id`, `user_id`, `audio`, `created_at`) VALUES
(3, 1, 'JIHAN_AUDY_PAMER_BOJO_ANYAR_NEW_PALLAPA_2019.mp3', '2019-10-30 12:01:15'),
(4, 1, 'VITA_ALVIA_OJO_NGUBER_WELASE_Office_Video_YouTube.mp3', '2019-10-30 12:01:27'),
(5, 1, 'Vita_Alvia_-_Dudu_Roso_Welas_OFFICIAL_MUSIC_VIDEO_.mp3', '2019-10-31 12:49:37'),
(6, 1, 'Kelangan_-_Wandra.mp3', '2019-11-01 12:28:41'),
(7, 1, 'Mahesa_Ft__Vita_Alvia_-_Lungset_(Official_Music_Video).mp3', '2019-11-01 12:30:25'),
(8, 1, 'GuyonWaton_-_Pamer_Bojo_(Ciptaan_Didi_Kempot)_Lirik.mp3', '2019-11-01 12:30:52'),
(9, 2, 'cartoon158.mp3', '2019-11-03 02:33:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifications`
--

CREATE TABLE `notifications` (
  `notif_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `receiver` int(11) DEFAULT NULL,
  `open` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `notifications`
--

INSERT INTO `notifications` (`notif_id`, `user_id`, `receiver`, `open`, `created_at`) VALUES
(3, 6, 6, 1, '2019-11-04 02:48:27'),
(4, 6, 1, 1, '2019-11-04 02:48:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `role` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `avatar`, `role`, `created_at`) VALUES
(1, 'Miftakhul Robi', 'adminambyar@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'xiaomi-redmi-note-4x-case-mooncase-frosted-armor-hard-pc-backcover-360-full-body-shockproof-protective-with-3-detachable-partsphone-case-as-shown-intl-0015-03843614-ed80771a8feb52fe1fb5e2385c0e0077.jpg', 'Admin', '2019-10-30 01:16:39'),
(2, 'Ninda Yulia Ulfa', 'nindayulia@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Blackberry-Blackberry-Orlando-9380.jpg', 'Member', '2019-11-02 04:20:07'),
(6, 'Anis N azizah', 'anisnurazizah@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', NULL, 'Member', '2019-11-04 02:48:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`app_id`);

--
-- Indeks untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categorie_id`);

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indeks untuk tabel `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indeks untuk tabel `musics`
--
ALTER TABLE `musics`
  ADD PRIMARY KEY (`music_id`);

--
-- Indeks untuk tabel `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notif_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `apps`
--
ALTER TABLE `apps`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `categorie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `musics`
--
ALTER TABLE `musics`
  MODIFY `music_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
