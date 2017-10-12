-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2017 at 10:46 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikmlapan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `jawaban1` varchar(50) NOT NULL,
  `jawaban2` varchar(50) NOT NULL,
  `jawaban3` varchar(50) NOT NULL,
  `jawaban4` varchar(50) NOT NULL,
  `id_soalj` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id_jawaban`, `jawaban1`, `jawaban2`, `jawaban3`, `jawaban4`, `id_soalj`) VALUES
(163, 'Tidak Sesuai', 'Kurang Sesuai', 'Sesuai', 'Sangat Sesuai', 190),
(164, 'Tidak Mudah', 'Kurang Mudah', 'Mudah', 'Sangat Mudah', 191),
(165, 'Selalu Tidak Tepat', 'Kadang-kadang Tepat', 'Banyak Tepatnya', 'Selalu Tepat', 192),
(166, 'Tidak Berkualitas', 'Kurang Berkualitas', 'Berkualitas', 'Sangat Berkualitas', 193),
(167, 'Tidak Baik', 'Kurang Baik', 'Baik', 'Sangat Baik', 194),
(168, 'Tidak Sopan dan Ramah', 'Kurang Sopan dan Ramah', 'Sopan dan Ramah', 'Sangat Sopan dan Ramah', 195),
(169, 'Tidak Sesuai', 'Kurang Sesuai', 'Sesuai', 'Sangat Sesuai', 196),
(170, 'Tidak Memuaskan', 'Kurang Memuaskan', 'Memuaskan', 'Sangat Memuaskan', 197),
(182, 'Tidak Sopan', 'Kurang Sopan', 'Sopan', 'Sangat Sopan', 209),
(183, 'Tidak Bersih', 'Kurang Bersih', 'Bersih', 'Sangat Bersih', 210),
(184, 'Tidak Nyaman', 'Kurang Nyaman', 'Nyaman', 'Sangat Nyaman', 211),
(185, 'Tidak Rapih', 'Kurang Rapih', 'Rapih', 'Sangat Rapih', 212),
(186, 'Tidak Lengkap', 'Kurang Lengkap', 'Lengkap', 'Sangat Lengkap', 213),
(187, 'Tidak Mudah', 'Kurang Mudah', 'Mudah', 'Sangat Mudah', 214),
(188, 'Tidak Aman', 'Kurang Aman', 'Aman', 'Sangat Aman', 215),
(189, 'Tidak Bersih', 'Kurang Bersih', 'Bersih', 'Sangat Bersih', 216),
(190, 'Tidak Jelas', 'Kurang Jelas', 'Jelas', 'Sangat Jelas', 217),
(191, 'Tidak Mudah', 'Kurang Mudah', 'Mudah', 'Sangat Mudah', 218),
(192, 'Tidak Sesuai', 'Kurang Sesuai', 'Sesuai', 'Sangat Sesuai', 219),
(193, 'Tidak Paham', 'Kurang paham', 'Paham', 'Sangat Paham', 220),
(194, 'Tidak Mudah', 'Kurang Mudah', 'Mudah', 'Sangat Mudah', 221),
(195, 'Tidak Sesuai', 'Kurang Sesuai', 'Sesuai', 'Sangat Sesuai', 222),
(196, 'Tidak Nyaman', 'Kurang Nyaman', 'Nyaman', 'Sangat Nyaman', 223),
(197, 'Tidak Terampil', 'Kurang Terampil', 'Terampil', 'Sangat Terampil', 224),
(198, 'Tidak Puas', 'Kurang Puas', 'Puas', 'Sangat Puas', 225),
(199, 'Tidak Mudah', 'Kurang Mudah', 'Mudah', 'Sangat Mudah', 226),
(200, 'Tidak Akurat', 'Kurang Akurat', 'Akurat', 'Sangat Akurat', 227),
(201, 'Tidak Stabil', 'Kurang Stabil', 'Stabil', 'Sangat Stabil', 228),
(202, 'Tidak Membantu', 'Kurang Membantu', 'Membantu', 'Sangat Membantu', 229),
(203, 'Tidak Aman', 'Kurang Aman', 'Aman', 'Sangat Aman', 230),
(204, 'Tidak Stabil', 'Kurang Stabil', 'Stabil', 'Sangat Stabil', 231),
(205, 'Tidak Jelas', 'Kurang Jelas', 'Jelas', 'Sangat Jelas', 232),
(206, 'Tidak Tepat', 'Kurang Tepat', 'Tepat', 'Sangat Tepat', 233),
(207, 'Tidak Lengkap', 'Kurang Lengkap', 'Lengkap', 'Sangat Lengkap', 234),
(208, 'Tidak Cepat dan Akurat', 'Kurang Cepat dan Akurat', 'Cepat dan Akurat', 'Sangat Cepat dan Akurat', 235),
(209, 'Tidak Sopan dan Ramah', 'Kurang Sopan dan Ramah', 'Sopan dan Ramah', 'Sangat Sopan dan Ramah', 236),
(210, 'Tidak Rapih', 'Kurang Rapih', 'Rapih', 'Sangat Rapih', 237),
(211, 'Tidak Tanggap', 'Kurang Tanggap', 'Tanggap', 'Sangat Tanggap', 238),
(212, 'Tidak Meyakinkan', 'Kurang Meyakinkan', 'Meyakinkan', 'Sangat Meyakinkan', 239),
(213, 'Tidak Baik', 'Kurang Baik', 'Baik', 'Sangat Baik', 240);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_user`
--

CREATE TABLE `jawaban_user` (
  `id_jawaban_user` int(11) NOT NULL,
  `jawaban1` int(1) NOT NULL,
  `jawaban2` int(1) NOT NULL,
  `jawaban3` int(1) NOT NULL,
  `jawaban4` int(1) NOT NULL,
  `jawaban5` int(1) NOT NULL,
  `jawaban6` int(1) NOT NULL,
  `jawaban7` int(1) NOT NULL,
  `jawaban8` int(1) NOT NULL,
  `id_respondenj` int(11) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban_user`
--

INSERT INTO `jawaban_user` (`id_jawaban_user`, `jawaban1`, `jawaban2`, `jawaban3`, `jawaban4`, `jawaban5`, `jawaban6`, `jawaban7`, `jawaban8`, `id_respondenj`, `komentar`) VALUES
(30, 1, 4, 2, 3, 1, 3, 2, 4, 32, 'Bagus'),
(31, 1, 2, 4, 4, 3, 3, 3, 0, 33, 'Baik Sekali'),
(32, 2, 2, 2, 1, 4, 3, 1, 4, 34, 'Bagus'),
(33, 2, 3, 1, 4, 2, 1, 1, 4, 35, 'Lebih Lebih di kembangkang.'),
(34, 1, 2, 4, 3, 2, 2, 1, 2, 36, 'Baik untuk Tahun Depan'),
(35, 2, 3, 2, 1, 1, 1, 1, 1, 37, 'Makin Jaya Tahun Berikutnya'),
(36, 1, 1, 1, 3, 2, 2, 2, 1, 38, 'Lebih Baik Dan Semoga Makin Baik'),
(37, 1, 2, 1, 1, 3, 2, 1, 4, 39, 'Wakwau');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `persyaratan` text NOT NULL,
  `status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `persyaratan`, `status`) VALUES
(151, 'Pelayanan Bimbingan Teknis', '1. Persyaratan Bimbingan Teknis, yaitu persyaratan teknis dan administrasi yang diperlukan untuk mendapatkan bimbingan teknis. </br>2. Prosedur Bimbingan Teknis, yaitu kemudahan tahapan bimbingan teknis yang diberikan kepada masyarakat dilihat dari sisi kesederhanaan alur prosedur bimbingan teknis. </br>3. Kepastian Jadwal Bimbingan Teknis, yaitu pelaksanaan waktu bimbingan teknis, sesuai dengan ketentuan yang telah ditetapkan. </br>4. Kualitas dan Kesesuaian Bimbingan Teknis yang ditetapkan oleh Pusat Teknologi dan Data Penginderaan Jauh.</br>5. Kemampuan, kedisiplinan dan tanggung jawab pengajar, yaitu tingkat kemampuan, kedisiplinan dan tanggung jawab yang dimiliki pengajar dalam memberikan/menyelesaikan materi bimbingan teknis. </br>6. Perilaku: Kesopanan dan keramahan penitia, yaitu sikap dan perilaku panitia dalam memberikan pelayanan peserta bimbingan teknis secara sopan dan ramah serta saling menghargai dan menghormati.</br>7. Maklumat bimbingan teknis yang ditetapkan di Pusat Pemanfaatan Penginderaan Jauh LAPAN bahwa bimbingan teknis tidak dikenakan biaya bimtek, akomodasi murah, diberikan data citra penginderaan jauh gratis untuk tiap daerah yang digunakan pada saat praktikum dan software gratis untuk mengolah data. </br>8. Penanganan pengaduan, yaitu tanggapan pihak LAPAN dalam menangani/menaggapi/menyelesaikan, pengaduan dari masyarakat dan atau peserta data bimbingan teknis.</br>', 1),
(153, 'Kualitas Pelayanan Perpustakaan', '!-- Tidak ada penjelasan khusus --!', 1),
(154, 'Pelayanan Puskesmas di Jakarta', '!-- Tidak ada penjelasan spesifik --!', 1),
(155, 'Kepuasan tampilan aplikasi', 'Survey ini bertujuan untuk  memberikan penilaian terhadap user interface sebuah aplikasi.', 1),
(156, 'Pelayanan Customer Service PT.Maju Mundur', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `responden`
--

CREATE TABLE `responden` (
  `id_responden` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `umur` int(3) NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `pendidikan` varchar(25) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `id_kategoriResponden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `responden`
--

INSERT INTO `responden` (`id_responden`, `tanggal`, `nama`, `nip`, `umur`, `jenis_kelamin`, `pendidikan`, `pekerjaan`, `id_kategoriResponden`) VALUES
(32, '2017-08-24', 'Moh AZIS', 'G61414', 21, 1, 'S1', 'Mahasiswa', 151),
(33, '2017-08-27', 'Cici', 'G61414', 21, 0, 'S1', 'Mahasiswa', 151),
(34, '2017-08-27', 'Uamy', 'G61414', 32, 1, 'S1', 'Wiraswawta', 151),
(35, '2017-08-27', 'Fatur', '641', 21, 1, 'S1', 'Wiraswawta', 153),
(36, '2017-08-27', 'Hamba Allah', '86868', 21, 1, 'S1', 'Pegawai', 151),
(37, '2017-08-27', 'Moh AZIS', 'G61414', 32, 1, 'S1', 'Mahasiswa', 151),
(38, '2017-08-29', 'Moh AZIS', 'G61414', 21, 1, 'S1', 'Mahasiswa', 151),
(39, '2017-08-29', 'Moh AZIS', '641', 21, 0, 'SMA kebawah', 'Wiraswawta', 156);

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `id_kategoriS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `soal`, `id_kategoriS`) VALUES
(190, 'Bagaimana pendapat saudara tentang kesesuaian persyaratan bimbingan teknis pengolahan dan pemanfaatan data penginderaan jauh ?', 151),
(191, 'Bagaimana pemahaman saudara tentang kemudahan prosedur bimbingan teknis pengolahan dan pemanfaatan data penginderaan jauh ?', 151),
(192, 'Bagaimana pendapat saudara tentang pelaksanaan terhadap jadwal waktu bimbingan teknis pengolahan dan pemanfaatan data penginderaan jauh ?', 151),
(193, 'Bagaimana pendapat saudara tentang kualitas dan kesesuaian bimbingan teknis pengolahan dan pemanfaatan data penginderaan jauh ?', 151),
(194, 'Bagaimana pendapat saudara tentang kemampuan, kedisiplinan dan tanggung jawab pengajar dalam memberikan materi bimbingan teknis pengolahan dan pemanfaatan data penginderaan jauh ?', 151),
(195, 'Bagaimana pendapat saudara tentang kesopanan dan keramahan panitia dalam memberikan pelayanan terhadap peserta bimbingan teknis pengolahan dan pemanfaatan data penginderaan jauh ?', 151),
(196, 'Bagaimana pendapat saudara terhadap hal-hal yang dijanjikan Pusfatja LAPAN terkait pelaksanaan bimbingan teknis sebagaimana tercantum dalam brosur bimbingan teknis ?', 151),
(197, 'Bagaimana pendapat saudara tentang tanggapan pihak LAPAN dala menangani pengaduan bimbingan teknis pengolahan dan pemanfaatan data penginderaan jauh ?', 151),
(209, 'Bagaimana pendapat saudara tentang kesopanan dan keramahan petugas perpustakaan ini ?', 153),
(210, 'Bagaimana pendapat saudara tentang kebersihan di ruangan maupun lingkungan perpustakaan ?', 153),
(211, 'Bagaimana pendapat saudara tentang kenyamanan ruangan baca di perpusatakan ?', 153),
(212, 'Bagaimana pendapat saudara tentang kerapihan tata letak ruangan di perpustakaan ini ?', 153),
(213, 'Bagaimana pendapat anda tentang kelengkapan buku-buku di perpustakaan ini ?', 153),
(214, 'Bagaimana pendapat saudara tentang prosedur peminjaman dan pengembalian buku-buku di perpustakaan ?', 153),
(215, 'Bagaimana pendapat saudara tentang keamanan tempat penitipan barang di perpustakaan ?', 153),
(216, 'Bagaimana pendapat anda tentang kebersihan fasilitas (mushola, toilet, ruangan baca) di perpustakaan ini ?', 153),
(217, 'Seberapa jelas anda mendapatkan informasi pelayanan di puskesmas ?', 154),
(218, 'Bagaimana pendapat anda tentang kemudahan dalam mendapatkan pelayanan kesehatan dari segi administrasi ?', 154),
(219, 'Bagaimana pelayanan kesehatan yang diberikan petugas apakah sudah sesuai dengan pedoman (SOP) pelayanan ?', 154),
(220, 'Bagaimana pemahaman anda tentang saran yang diberikan oleh pihak puskesmas kepada anda ?', 154),
(221, 'Seberapa mudah anda mendapatkan informasi tarif pelayanan ?', 154),
(222, 'Bagaimana pendapat anda tentang kesesuaian tarif dengan tindakan yang dilakukan oleh petugas ?', 154),
(223, 'Apakah sarana dan prasarana yang anda dapatkan sudah nyaman bagi anda ?', 154),
(224, 'Apakah kemampuan pemberi pelayanan sudah terampil dalam pelayanan kesehatan ?', 154),
(225, 'Tampilan menu aplikasi', 155),
(226, 'Kemudahan penggunaan aplikasi', 155),
(227, 'Tingkat akurasi atau ketepatan data dari laporan yang dihasilkan', 155),
(228, 'Kestabilan dan ketahanan aplikasi', 155),
(229, 'Kemampuan aplikasi dalam membantu user', 155),
(230, 'Tingkat keamanan database aplikasi', 155),
(231, 'Kestabilan koneksi jaringan client-server', 155),
(232, 'Kejelasan tampilan icon dan font dalam aplikasi', 155),
(233, 'Ketepatan dalam melaksanakan janji kepada nasabah', 156),
(234, 'Kelengkapan CS dalam menjelaskan produk dan layanan yang tersedia', 156),
(235, 'Apakah CS memberikan pelayanan dengan cepat dan akurat', 156),
(236, 'Bagaimana pendapat anda tentang kesopanan dan keramahan CS dalam melayani nasabah', 156),
(237, 'Bagaimana pendapat anda tentang kerapihan CS dalam berpenampilan', 156),
(238, 'Bagaimana menurut anda apakah CS kami melayani para nasabah dengan tanggap dan cepat', 156),
(239, 'Apakah CS mampu meyakinkan dan dapat dipercaya oleh nasabah', 156),
(240, 'Bagaimana menurut anda tentang semua pelayanan CS baik dalah menyambut, menyampaikan, dan dalam berpenampilan secara keseluruhan', 156);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `id_admin` (`id_admin`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `id_soal` (`id_soalj`);

--
-- Indexes for table `jawaban_user`
--
ALTER TABLE `jawaban_user`
  ADD PRIMARY KEY (`id_jawaban_user`),
  ADD KEY `id_respondedj` (`id_respondenj`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `nama_kategori` (`nama_kategori`);

--
-- Indexes for table `responden`
--
ALTER TABLE `responden`
  ADD PRIMARY KEY (`id_responden`),
  ADD UNIQUE KEY `id_responden` (`id_responden`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `id_kategori` (`id_kategoriS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;
--
-- AUTO_INCREMENT for table `jawaban_user`
--
ALTER TABLE `jawaban_user`
  MODIFY `id_jawaban_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
--
-- AUTO_INCREMENT for table `responden`
--
ALTER TABLE `responden`
  MODIFY `id_responden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`id_soalj`) REFERENCES `soal` (`id_soal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jawaban_user`
--
ALTER TABLE `jawaban_user`
  ADD CONSTRAINT `jawaban_user_ibfk_2` FOREIGN KEY (`id_respondenj`) REFERENCES `responden` (`id_responden`);

--
-- Constraints for table `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `soal_ibfk_1` FOREIGN KEY (`id_kategoriS`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
