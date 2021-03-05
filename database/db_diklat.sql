-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 09:57 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_diklat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_auth`
--

CREATE TABLE `tb_auth` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_auth`
--

INSERT INTO `tb_auth` (`id`, `username`, `password`, `name`, `created_at`) VALUES
(1, 'admin', '$2y$10$qgZbntO24XzkmQ9qAvFAN.uyZbmLl0RIe095tNf7Y7Lw6/GauDAt6', 'Ngurah Prihandana', '2021-03-02 20:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(150) NOT NULL,
  `icon_kategori` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`, `icon_kategori`) VALUES
(1, 'Dress', 'dress.png'),
(4, 'Shorts', 'shorts.png'),
(5, 'Skirt', 'skirt.png'),
(6, 'T-Shirt', 't-shirt.png'),
(7, 'Accesoriess', 'accesories.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_message`
--

CREATE TABLE `tb_message` (
  `id_message` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_message`
--

INSERT INTO `tb_message` (`id_message`, `name`, `subject`, `email`, `message`, `created_at`) VALUES
(4, 'a', 'a', 'a@gmail.com', 'a', '0000-00-00 00:00:00'),
(5, 'a', 'a', 'aa@gmail.com', 'a', '2021-03-03 14:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id_product` int(11) NOT NULL,
  `nama_product` varchar(150) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_tipe` int(11) NOT NULL,
  `size` varchar(50) NOT NULL,
  `harga_product` int(11) NOT NULL,
  `gambar_product` varchar(150) NOT NULL,
  `deskripsi_product` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `nama_product`, `id_kategori`, `id_tipe`, `size`, `harga_product`, `gambar_product`, `deskripsi_product`, `created_at`) VALUES
(13, 'Lisa Skirt', 5, 1, 'M', 275, 'detail-product.png', 'The dress covers her shoulders halfway and\r\n            flows down into a stylish draped neckline. It\'s a loose fit which\r\n            makes the dress look comfortable, yet elegant and stylish. Her arms\r\n            are only covered at her shoulders. Which is a good thing too, her\r\n            silky skin isn\'t something you want to cover up. <br /><br />\r\n\r\n            The dress\' waist is narrow, but it\'s a slim fit. A cloth ribbon has\r\n            been wrapped around her and is tied on one side. Below the waist the\r\n            dress fits snug around her and has an accordion style. The dress\r\n            reaches to just above her knees and is longer at the sides and back\r\n            of the dress. <br /><br />\r\n\r\n            She\'s wearing platforms, an ideal match for this dress. To top it\r\n            all off she\'s wearing a small, elegant hat and several lavish\r\n            bracelets.', '2021-03-04 15:31:20'),
(14, 'Dalia T-Shirt', 6, 2, 'L', 200, 'aurel.png', 'The dress covers her shoulders halfway and\r\n            flows down into a stylish draped neckline. It\'s a loose fit which\r\n            makes the dress look comfortable, yet elegant and stylish. Her arms\r\n            are only covered at her shoulders. Which is a good thing too, her\r\n            silky skin isn\'t something you want to cover up. <br /><br />\r\n\r\n            The dress\' waist is narrow, but it\'s a slim fit. A cloth ribbon has\r\n            been wrapped around her and is tied on one side. Below the waist the\r\n            dress fits snug around her and has an accordion style. The dress\r\n            reaches to just above her knees and is longer at the sides and back\r\n            of the dress. <br /><br />\r\n\r\n            She\'s wearing platforms, an ideal match for this dress. To top it\r\n            all off she\'s wearing a small, elegant hat and several lavish\r\n            bracelets.', '2021-03-05 11:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_review`
--

CREATE TABLE `tb_review` (
  `id_review` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `review` text NOT NULL,
  `img_profile` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_review`
--

INSERT INTO `tb_review` (`id_review`, `name`, `review`, `img_profile`) VALUES
(1, 'Abdul', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti repellat, consequuntur doloribus voluptate esse iure?', 'founder-1.png'),
(2, 'Wahyu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti repellat, consequuntur doloribus voluptate esse iure?', 'founder-2.png'),
(3, 'Gana', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti repellat, consequuntur doloribus voluptate esse iure?', 'founder-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tipe`
--

CREATE TABLE `tb_tipe` (
  `id_tipe` int(11) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tipe`
--

INSERT INTO `tb_tipe` (`id_tipe`, `tipe`, `created_at`) VALUES
(1, 'Top Product', '2021-03-03 23:44:27'),
(2, 'Featured Product', '2021-03-03 23:44:27'),
(3, 'none', '2021-03-03 23:44:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_auth`
--
ALTER TABLE `tb_auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_message`
--
ALTER TABLE `tb_message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `tb_review`
--
ALTER TABLE `tb_review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `tb_tipe`
--
ALTER TABLE `tb_tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_auth`
--
ALTER TABLE `tb_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_message`
--
ALTER TABLE `tb_message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_review`
--
ALTER TABLE `tb_review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_tipe`
--
ALTER TABLE `tb_tipe`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
