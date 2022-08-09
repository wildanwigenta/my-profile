-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 05, 2022 at 04:08 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `deskripsi`, `gambar`) VALUES
(4, 'Hallo..! perkenalkan nama saya Wildan Wigenta, saya biasa dipanggil Wildan. Saya lahir di Bantul, Yogyakarta pada tanggal 5 Februari 2005, dan sekarang umur saya 17 tahun. Saya tinggal bersama kedua orang tua saya, dan saya memiliki 1 adik perempuan yang berumur 15 tahun. Alamat saya ada di desa Methuk rt54, Donotirto, Kretek, Bantul, Yogyakarta. Saya sekolah di SMK Negeri 1 Bantul. dan sekarang ini saya sedang belajar di PT Lauwba Techno Indonesia.', '1659600354.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id_alamat` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `email` text NOT NULL,
  `telp` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`id_alamat`, `alamat`, `email`, `telp`) VALUES
(5, 'Methuk (54), Donotirto, Kretek, Bantul, Yogyakarta', 'wildanwigenta52@gmail.com', '081377243047');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `nama`, `email`, `pesan`) VALUES
(1, 'wildan', 'wildanwigenta@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `name` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `nationality` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `job` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`name`, `email`, `nationality`, `gender`, `job`) VALUES
('Wildan Wigenta', 'wildanwigenta52@gmail.com', 'Indonesia', 'Laki-laki', 'programmer');

-- --------------------------------------------------------

--
-- Table structure for table `hoby`
--

CREATE TABLE `hoby` (
  `id_hoby` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `hoby` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoby`
--

INSERT INTO `hoby` (`id_hoby`, `gambar`, `hoby`, `deskripsi`) VALUES
(3, '1659600860.png', 'Coding', 'coding adalah cara kita berkomunikasi dengan komputer. Kode memberitahu komputer apa yang harus dilakukan dan menulis kode ini seperti membuat serangkaian instruksi. Sekarang saya masih proses belajar membuat website yang sederhana.'),
(4, '1659600875.png', 'Photograpy', 'Fotografi juga merupakan salah satu hobi yang saya sukai, saya suka memotret pemandangan, orang, dan masih banyak lagi,Saya juga senang mengedit foto, saya menggunakan aplikasi Adobe photoshop untuk mengedit foto agar lebih bagus.'),
(5, '1659600886.png', 'Design', 'Saya suka mendesain digital menggunakan aplikasi correldraw untuk mendesain, banyak desain yang bisa dibuat menggunakan correldraw yaitu logo, poster, banner, dan masih banyak lagi.Saya juga suka menggambar menggunakan pensil.'),
(6, '1659600898.png', 'Sport', 'Saya suka berolahraga, banyak olahraga yang saya minati seperti Futsal, Bersepeda, Lari, Renang,dan Badminton.');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id_media`, `gambar`, `link`) VALUES
(3, '1659602081.png', 'https://web.facebook.com/wildan.wigenta'),
(4, '1659601001.png', 'wildanwigenta52@gmail.com'),
(5, '1659601012.png', 'https://www.tiktok.com/@wildanwigenta52'),
(6, '1659601026.png', 'https://web.whatsapp.com/'),
(8, '1659602215.png', 'https://www.instagram.com/wigenta_wldn/');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_profile` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `nama` text NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_profile`, `gambar`, `nama`, `title`) VALUES
(2, '1659600816.png', 'Wildan Wigenta', 'Beginner Programmer');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `project` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `project`, `gambar`) VALUES
(21, 'website', '1659603098.png'),
(22, 'website', '1659664345.png'),
(23, 'website', '1659664359.png'),
(24, 'website', '1659664375.png'),
(25, 'website', '1659664393.png'),
(26, 'design', '1659664436.png'),
(28, 'design', '1659664461.png'),
(29, 'design', '1659664505.png'),
(30, 'photograpy', '1659664632.png'),
(31, 'photograpy', '1659664647.png'),
(32, 'photograpy', '1659664669.png'),
(33, 'art', '1659664696.png'),
(34, 'art', '1659664711.png'),
(35, 'art', '1659664736.png');

-- --------------------------------------------------------

--
-- Table structure for table `project_cv`
--

CREATE TABLE `project_cv` (
  `id_project_cv` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `project` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_cv`
--

INSERT INTO `project_cv` (`id_project_cv`, `year`, `project`, `url`) VALUES
(2, 2020, 'Online Shop', '-'),
(3, 2022, 'Personal Profile', '-'),
(4, 2022, 'ppdb Smk', '-'),
(5, 2022, 'Yayasan ', '-');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id_skill` int(11) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `presentase` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id_skill`, `skill`, `presentase`) VALUES
(7, 'Python', 80),
(8, 'HTML', 90),
(9, 'CSS', 70),
(10, 'JAVASCRIPT', 60),
(11, 'PHP', 80),
(12, 'MYSQL', 80);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `hoby`
--
ALTER TABLE `hoby`
  ADD PRIMARY KEY (`id_hoby`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_media`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `project_cv`
--
ALTER TABLE `project_cv`
  ADD PRIMARY KEY (`id_project_cv`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id_skill`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hoby`
--
ALTER TABLE `hoby`
  MODIFY `id_hoby` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `project_cv`
--
ALTER TABLE `project_cv`
  MODIFY `id_project_cv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
