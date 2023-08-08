-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Agu 2023 pada 06.19
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_blog_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `articleId` int(30) NOT NULL,
  `articleTitle` varchar(255) DEFAULT NULL,
  `articleSlug` varchar(255) DEFAULT NULL,
  `articleDescrip` text DEFAULT NULL,
  `articleContent` text DEFAULT NULL,
  `articleDate` datetime DEFAULT NULL,
  `articleTags` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_blog`
--

INSERT INTO `tbl_blog` (`articleId`, `articleTitle`, `articleSlug`, `articleDescrip`, `articleContent`, `articleDate`, `articleTags`) VALUES
(1, 'sadaaaaaaaa', 'sadaaaaaaaa', 'assssssssssssssssssss', 'asssssssssssssssssssss', '2023-08-08 07:15:04', 'asa'),
(2, 'asdasd', 'asdasd', 'asdasdasd', 'asdasdasd', '2023-08-08 07:48:54', 'sas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_blog_users`
--

CREATE TABLE `tbl_blog_users` (
  `userId` int(20) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_blog_users`
--

INSERT INTO `tbl_blog_users` (`userId`, `username`, `password`, `email`) VALUES
(1, 'admin', '0,QAVGRreDrUE', 'admin'),
(2, 'asdas', '0,YkahLNcCKW6', 'asd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_category`
--

CREATE TABLE `tbl_category` (
  `categoryId` int(20) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categorySlug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_category`
--

INSERT INTO `tbl_category` (`categoryId`, `categoryName`, `categorySlug`) VALUES
(1, 'testing', 'testing'),
(2, 'ss', 'ss');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cat_links`
--

CREATE TABLE `tbl_cat_links` (
  `id` int(20) NOT NULL,
  `articleId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_cat_links`
--

INSERT INTO `tbl_cat_links` (`id`, `articleId`, `categoryId`) VALUES
(4, 1, 2),
(5, 1, 1),
(6, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `pageId` int(11) NOT NULL,
  `pageTitle` varchar(255) DEFAULT NULL,
  `pageSlug` varchar(255) DEFAULT NULL,
  `pageDescrip` text DEFAULT NULL,
  `pageContent` text DEFAULT NULL,
  `pageKeywords` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pages`
--

INSERT INTO `tbl_pages` (`pageId`, `pageTitle`, `pageSlug`, `pageDescrip`, `pageContent`, `pageKeywords`) VALUES
(1, 'asdas', 'asdas', 'asdas', 'asdasd', 'asdas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`articleId`);

--
-- Indeks untuk tabel `tbl_blog_users`
--
ALTER TABLE `tbl_blog_users`
  ADD PRIMARY KEY (`userId`);

--
-- Indeks untuk tabel `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indeks untuk tabel `tbl_cat_links`
--
ALTER TABLE `tbl_cat_links`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`pageId`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `articleId` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_blog_users`
--
ALTER TABLE `tbl_blog_users`
  MODIFY `userId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `categoryId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_cat_links`
--
ALTER TABLE `tbl_cat_links`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `pageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
