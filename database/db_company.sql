-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 11:12 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `text` varchar(1000) DEFAULT NULL,
  `texts` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `text`, `texts`) VALUES
(2, 'Facebook adalah sebuah website media sosial untuk berkomunikasi dengan orang lain.\r\nKeuntungannya antara lain :', 'mencoba dan mencoba, mencoba terus, mencoba lagi'),
(12, 'Coba Lagi About', 'Coba Terus');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id_address` int(11) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id_address`, `alamat`, `email`, `telepon`) VALUES
(1, 'Jalan Situdarma Bandung Jawa Barat', 'admin@admin.com', '02221324');

-- --------------------------------------------------------

--
-- Table structure for table `banner_image`
--

CREATE TABLE `banner_image` (
  `id_banner` int(11) NOT NULL,
  `text1` varchar(30) DEFAULT NULL,
  `text2` varchar(200) DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner_image`
--

INSERT INTO `banner_image` (`id_banner`, `text1`, `text2`, `image`) VALUES
(9, 'Ini Banner Image', 'Ini Banner Image', 'hero-img.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subjek` varchar(50) DEFAULT NULL,
  `pesan` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `nama`, `email`, `subjek`, `pesan`) VALUES
(30, 'Leo Rizky Krisandi', 'admin@admin.com', 'Pesan Aplikasi Koperasi', 'Saya Pesan Aplikasi Koperasi paket komplit'),
(31, 'Cahyo Purnomo', 'sioperator@sampah.com', 'Pesan Aplikasi SPI', 'Saya pesana aplikasi spi dengan harga yang paling murah'),
(32, 'Gunawan', 'coba@gmail.com', 'Pesan Aplkasi SPO', 'Saya pesan aplikasi secepatnya');

-- --------------------------------------------------------

--
-- Table structure for table `content_about`
--

CREATE TABLE `content_about` (
  `id_content` int(11) NOT NULL,
  `text` varchar(255) DEFAULT NULL,
  `texts` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content_about`
--

INSERT INTO `content_about` (`id_content`, `text`, `texts`) VALUES
(4, 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi', 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in curs'),
(6, 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi', 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in curs');

-- --------------------------------------------------------

--
-- Table structure for table `content_about2`
--

CREATE TABLE `content_about2` (
  `id_content` int(11) NOT NULL,
  `text` varchar(30) DEFAULT NULL,
  `persen` bigint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content_about2`
--

INSERT INTO `content_about2` (`id_content`, `text`, `persen`) VALUES
(1, 'Ini konten About yang kedua', 80),
(2, 'Coba yang kedua', 35);

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id_footer` int(11) NOT NULL,
  `kontak` varchar(255) DEFAULT NULL,
  `text` varchar(1000) DEFAULT NULL,
  `texts` varchar(1000) DEFAULT NULL,
  `sosial_media` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id_footer`, `kontak`, `text`, `texts`, `sosial_media`) VALUES
(2, 'Jalan Situ Darma no 21 Bandung, Jawa Barat , 402011 ::\r\nPhone : 0221213::\r\nEmail : admin@admin.com', 'Home::\r\nAbout us::\r\nServices::\r\nTerms of service ::\r\nPrivacy policy', 'Web Design::\r\nWeb Development::\r\nProduct Management::\r\nMarketing::\r\nGraphic Design', 'Berikut Adalah Media Sosial Kami !!');

-- --------------------------------------------------------

--
-- Table structure for table `form_pengajuan`
--

CREATE TABLE `form_pengajuan` (
  `id_form` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `perusahaan` varchar(50) DEFAULT NULL,
  `karyawan` int(5) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_pengajuan`
--

INSERT INTO `form_pengajuan` (`id_form`, `nama`, `perusahaan`, `karyawan`, `telepon`, `email`, `jabatan`) VALUES
(2, 'Ahmad Fauzi', 'PT Jaya Nindo', 300, '022391211', 'admin@admin', 'Staff HRD');

-- --------------------------------------------------------

--
-- Table structure for table `header_about`
--

CREATE TABLE `header_about` (
  `id_header` int(1) NOT NULL,
  `text` varchar(255) DEFAULT NULL,
  `texts` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header_about`
--

INSERT INTO `header_about` (`id_header`, `text`, `texts`) VALUES
(1, 'Coba Header About', 'Coba Coba Coba');

-- --------------------------------------------------------

--
-- Table structure for table `header_about2`
--

CREATE TABLE `header_about2` (
  `id_header` int(11) NOT NULL,
  `text` varchar(255) DEFAULT NULL,
  `texts` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header_about2`
--

INSERT INTO `header_about2` (`id_header`, `text`, `texts`) VALUES
(1, 'Coba Header Lagi', 'Ini percobaan Header');

-- --------------------------------------------------------

--
-- Table structure for table `header_pricing`
--

CREATE TABLE `header_pricing` (
  `id_header` int(11) NOT NULL,
  `text` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header_pricing`
--

INSERT INTO `header_pricing` (`id_header`, `text`) VALUES
(2, 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.'),
(3, 'Font Awesome 5 Font Awesome 5 Intro Icons Accessibility Icons Alert Icons Animals Icons Arrows Icons Audio & Video Icons Automotive Icons Autumn Icons Beverage Icons Brands Icons Buildings');

-- --------------------------------------------------------

--
-- Table structure for table `hub`
--

CREATE TABLE `hub` (
  `id_hub` int(11) NOT NULL,
  `text` varchar(255) DEFAULT NULL,
  `texts` varchar(255) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hub`
--

INSERT INTO `hub` (`id_hub`, `text`, `texts`, `link`) VALUES
(1, 'Call To Action', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'http://tradinglegit.khazanahmaeru.com');

-- --------------------------------------------------------

--
-- Table structure for table `media_sosial`
--

CREATE TABLE `media_sosial` (
  `id_media` int(11) NOT NULL,
  `nama_media` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media_sosial`
--

INSERT INTO `media_sosial` (`id_media`, `nama_media`, `icon`, `link`) VALUES
(1, 'twitter', 'bx bxl-twitter', 'https://twitter.com'),
(2, 'facebook', 'bx bxl-facebook', 'https://facebook.com'),
(3, 'instagram', 'bx bxl-instagram', 'https://instagram.com');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id_partner` int(11) NOT NULL,
  `nama_partner` varchar(30) DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id_partner`, `nama_partner`, `image`) VALUES
(3, 'Perusahaan', 'client-6.png'),
(4, 'Perusahaan2', 'client-2.png'),
(6, 'Perusahaan 3', 'client-5.png');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `keys` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id_portofolio`, `keys`, `image`, `title`, `text`, `link`) VALUES
(1, 'filter-web', 'pro-img-10.jpg', 'Web 1', 'Web', 'http://tradinglegit.khazanahmaeru.com'),
(2, 'filter-app', 'cat-img-03.jpg', 'App 1', 'Aplikasi', 'http://tradinglegit.khazanahmaeru.com'),
(3, 'filter-card', 'cat-img-06.jpg', 'Card 1', 'Card', 'http://tradinglegit.khazanahmaeru.com'),
(4, 'filter-web', 'cat-img-05.jpg', 'Web 2', 'Web', 'http://tradinglegit.khazanahmaeru.com');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id_pricing` int(11) NOT NULL,
  `header` varchar(50) DEFAULT NULL,
  `text` varchar(1000) DEFAULT NULL,
  `harga` bigint(50) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id_pricing`, `header`, `text`, `harga`, `link`) VALUES
(1, 'Basic', 'Master Data, User Data, Kelola Laporan, Kelola Keuangan, Kelola Pelanggan', 300000, 'http://tradinglegit.khazanahmaeru.com/'),
(2, 'Medium', 'Master Data, Kelola Keuangan, Kelola Laporan, Kelola User, Kelola Penjualan', 500000, 'https://tradinglegit.khazanahmaeru.com'),
(3, 'Pro', 'Data Master, Kelola Penjualan, Kelola User, Kelola Keuangan, Paket Komplit', 1000000, 'https://tradinglegit.khazanahmaeru.com');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `text` varchar(100) DEFAULT NULL,
  `texts` varchar(100) DEFAULT NULL,
  `icon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id_service`, `text`, `texts`, `icon`) VALUES
(1, 'Coba  coba', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu', 'bxl-dribbble'),
(2, 'Coba Service', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu', 'bx-file'),
(3, 'Coba Lagi ', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu', 'bx-layer'),
(4, 'Coba Satu ', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu', 'bx-image');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Web'),
(2, 'App'),
(3, 'Card');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level_user` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `email`, `password`, `level_user`) VALUES
(3, 'Leo Rizky', 'admin@admin.com', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id_address`);

--
-- Indexes for table `banner_image`
--
ALTER TABLE `banner_image`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `content_about`
--
ALTER TABLE `content_about`
  ADD PRIMARY KEY (`id_content`);

--
-- Indexes for table `content_about2`
--
ALTER TABLE `content_about2`
  ADD PRIMARY KEY (`id_content`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id_footer`);

--
-- Indexes for table `form_pengajuan`
--
ALTER TABLE `form_pengajuan`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `header_about`
--
ALTER TABLE `header_about`
  ADD PRIMARY KEY (`id_header`);

--
-- Indexes for table `header_about2`
--
ALTER TABLE `header_about2`
  ADD PRIMARY KEY (`id_header`);

--
-- Indexes for table `header_pricing`
--
ALTER TABLE `header_pricing`
  ADD PRIMARY KEY (`id_header`);

--
-- Indexes for table `hub`
--
ALTER TABLE `hub`
  ADD PRIMARY KEY (`id_hub`);

--
-- Indexes for table `media_sosial`
--
ALTER TABLE `media_sosial`
  ADD PRIMARY KEY (`id_media`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id_partner`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id_pricing`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id_address` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_image`
--
ALTER TABLE `banner_image`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `content_about`
--
ALTER TABLE `content_about`
  MODIFY `id_content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `content_about2`
--
ALTER TABLE `content_about2`
  MODIFY `id_content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id_footer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form_pengajuan`
--
ALTER TABLE `form_pengajuan`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `header_about`
--
ALTER TABLE `header_about`
  MODIFY `id_header` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header_about2`
--
ALTER TABLE `header_about2`
  MODIFY `id_header` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header_pricing`
--
ALTER TABLE `header_pricing`
  MODIFY `id_header` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hub`
--
ALTER TABLE `hub`
  MODIFY `id_hub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media_sosial`
--
ALTER TABLE `media_sosial`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id_partner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id_pricing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
