-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 01:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` varchar(255) NOT NULL,
  `admin_nama` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` text NOT NULL,
  `admin_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_nama`, `admin_email`, `admin_password`, `admin_foto`) VALUES
('97b3263bf74746ea6e803616c9ff9511', 'Admin', 'admin@gmail.com', '$2y$10$uH6FmXfiqa6gXMAVByqTrOULSSpkOs9e.yzBaXhWXjVhTOIQ8tvjG', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `hasil_id` varchar(255) NOT NULL,
  `hasil_tgl` date NOT NULL,
  `hasil_user` varchar(255) NOT NULL,
  `hasil_indeks` int(11) NOT NULL,
  `hasil_kuesioner` varchar(255) NOT NULL,
  `hasil_jawaban` int(11) NOT NULL,
  `hasil_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `hasil_sms` int(11) NOT NULL,
  `hasil_prodi` int(11) NOT NULL,
  `hasil_tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`hasil_id`, `hasil_tgl`, `hasil_user`, `hasil_indeks`, `hasil_kuesioner`, `hasil_jawaban`, `hasil_created`, `hasil_sms`, `hasil_prodi`, `hasil_tahun`) VALUES
('01f1c2d415dfc2e43cff947fc2d46fab', '2023-06-23', '82793729', 299990639, '695be914823c9172009b370672ea87d0', 2, '2023-06-23 03:13:43', 1, 1925995895, 2023),
('056b4a78360f1fda17bfc48429ed4f64', '2023-06-23', '82793729', 299990639, '3f790510fadacb7fd816d3e80b0fd3cf', 2, '2023-06-23 03:13:41', 1, 1925995895, 2023),
('2a38d1fa11f062e9ca7b487e264c8237', '2022-06-23', '123123', 299990639, '7ac3dd624f0ec691ab55274279b0cdbb', 4, '2022-06-23 11:00:44', 3, 1673611188, 2022),
('34328f63c596fce72cd2be0152b3deee', '2023-06-23', '82793728', 299990639, '3f790510fadacb7fd816d3e80b0fd3cf', 4, '2023-06-23 03:15:28', 1, 1673611188, 2023),
('3eb3926e8dc08282365929616816bbdb', '2022-06-23', '123123', 299990639, '695be914823c9172009b370672ea87d0', 2, '2022-06-23 11:00:38', 3, 1673611188, 2022),
('463e96773f28e3e43b4b27d34afeb668', '2023-06-23', '82793729', 299990639, 'c77536843b284737dcd212bbe3de4757', 3, '2023-06-23 03:13:54', 1, 1925995895, 2023),
('47a7653347c057056dc0b57cf4fb6a1a', '2023-06-23', '123123', 2026037694, '614544c27427871d39cfeb2dbff0fc79', 3, '2023-06-23 10:49:44', 3, 1673611188, 2023),
('4c155453f29cc7625325c021a376e5bc', '2023-06-23', '123123', 2026037694, '8e9902a2ff2a9b0722f47c4ad87271d7', 2, '2023-06-23 10:49:53', 3, 1673611188, 2023),
('536f2ed6f0184d9b816d83f7f37eb113', '2023-06-23', '82793729', 299990639, '455d03ed40d37a5eafcc0247a64c6f4c', 2, '2023-06-23 03:13:45', 1, 1925995895, 2023),
('5610e74d5b1df4293e82b4d754e44bd2', '2020-06-23', '123123', 283753876, 'b3656a64406018f8f19d0cf3dc1e8145', 2, '2020-06-23 11:05:12', 3, 1673611188, 2020),
('5643ba2fae8d50a02f5574af4ef8f643', '2023-06-23', '82793728', 299990639, '695be914823c9172009b370672ea87d0', 2, '2023-06-23 03:15:32', 1, 1673611188, 2023),
('726195af75dafed24e1528272adb768f', '2022-06-23', '123123', 299990639, 'b7264dbd78cdef3db6cc30d3be19d035', 3, '2022-06-23 11:00:50', 3, 1673611188, 2022),
('726646e54a54a156ecbd94f05d255aed', '2023-06-23', '123123', 2026037694, '7a5042ea080d32d9a764175ef1fdff93', 1, '2023-06-23 10:49:45', 3, 1673611188, 2023),
('75e35bc085aae0cdd37ae4bf390c94e3', '2023-06-23', '123123', 2026037694, '25234d484fd29b22bd7a90b6c1780b5b', 4, '2023-06-23 10:49:43', 3, 1673611188, 2023),
('8fa2ed3ae914cbe3c83bf21a3b6161bb', '2023-06-23', '82793728', 299990639, '7ac3dd624f0ec691ab55274279b0cdbb', 3, '2023-06-23 03:15:35', 1, 1673611188, 2023),
('9759065a5e53265e08f950507dc33b26', '2023-06-23', '123123', 2026037694, 'eb98c3cc7d146a83ee47d3c810a8d2ad', 2, '2023-06-23 10:49:55', 3, 1673611188, 2023),
('995d74a59ab9664f312ac8cfa97e8924', '2023-06-25', '321321', 283753876, 'b3656a64406018f8f19d0cf3dc1e8145', 2, '2023-06-25 11:51:32', 6, 1925995895, 2023),
('9a1ac3ba3b71b7fe7ecb09679817cb6c', '2023-06-23', '82793728', 299990639, 'b7264dbd78cdef3db6cc30d3be19d035', 2, '2023-06-23 03:15:42', 1, 1673611188, 2023),
('9b430da58d47393d603ff063550fe5e9', '2023-06-23', '82793728', 299990639, '455d03ed40d37a5eafcc0247a64c6f4c', 3, '2023-06-23 03:15:30', 1, 1673611188, 2023),
('a635fd2930752ad268bd33edf87c9e4f', '2023-06-23', '123123', 2026037694, '8af5b798725c727ae3d88cdfc09f49d1', 1, '2023-06-23 10:49:47', 3, 1673611188, 2023),
('a813d72011ef47dc0eac3adf8d36b992', '2023-06-23', '82793729', 299990639, 'b7264dbd78cdef3db6cc30d3be19d035', 3, '2023-06-23 03:13:51', 1, 1925995895, 2023),
('c400d1994aa69130f24b2ffa5fb4af10', '2022-06-23', '123123', 299990639, 'c77536843b284737dcd212bbe3de4757', 3, '2022-06-23 11:00:57', 3, 1673611188, 2022),
('c681cd4af6e237dbf35162cfb7d790f0', '2023-06-23', '82793728', 299990639, 'c77536843b284737dcd212bbe3de4757', 2, '2023-06-23 03:15:44', 1, 1673611188, 2023),
('caf5f9cc07db67b89051c57e84b09cb7', '2023-06-23', '123123', 2026037694, '8dd6c13d7a84adf020b9e7b958e8ef9d', 2, '2023-06-23 10:49:51', 3, 1673611188, 2023),
('d5e699c09f6d93f2e10af2aebe6dd963', '2022-06-23', '123123', 299990639, '3f790510fadacb7fd816d3e80b0fd3cf', 3, '2022-06-23 11:00:29', 3, 1673611188, 2022),
('dd81641bcb135309fa3eeb60caab8c11', '2023-06-23', '82793729', 299990639, '7ac3dd624f0ec691ab55274279b0cdbb', 1, '2023-06-23 03:13:47', 1, 1925995895, 2023),
('e66ca1cbec43ed20e2e8a6b2d7a0a9a1', '2022-06-23', '123123', 299990639, '455d03ed40d37a5eafcc0247a64c6f4c', 1, '2022-06-23 11:00:33', 3, 1673611188, 2022);

-- --------------------------------------------------------

--
-- Table structure for table `tb_indeks`
--

CREATE TABLE `tb_indeks` (
  `indeks_id` int(11) NOT NULL,
  `indeks_judul` varchar(255) NOT NULL,
  `indeks_warna` varchar(255) NOT NULL,
  `indeks_for` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_indeks`
--

INSERT INTO `tb_indeks` (`indeks_id`, `indeks_judul`, `indeks_warna`, `indeks_for`) VALUES
(283753876, 'Lorem Ipsum', '', 2126231772),
(299990639, 'Visi Misi', '', 1716577858),
(2026037694, 'Layanan UNIQHBA', '', 1063009646);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jawaban`
--

CREATE TABLE `tb_jawaban` (
  `jawab_id` int(11) NOT NULL,
  `jawab_jenis` varchar(255) NOT NULL,
  `jawab_emoji` text NOT NULL,
  `jawab_type_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jawaban`
--

INSERT INTO `tb_jawaban` (`jawab_id`, `jawab_jenis`, `jawab_emoji`, `jawab_type_text`) VALUES
(1, 'Sangat Baik', 'bi bi-emoji-heart-eyes-fill', 'success'),
(2, 'Baik', 'bi bi-emoji-smile-fill', 'primary'),
(3, 'Cukup', 'bi bi-emoji-neutral-fill', 'warning'),
(4, 'Tidak Baik', 'bi bi-emoji-angry-fill', 'danger');

-- --------------------------------------------------------

--
-- Table structure for table `tb_krisar`
--

CREATE TABLE `tb_krisar` (
  `krisar_id` varchar(255) NOT NULL,
  `krisar_user` int(11) NOT NULL,
  `krisar_isi` text DEFAULT NULL,
  `krisar_status` int(11) NOT NULL,
  `krisar_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_krisar`
--

INSERT INTO `tb_krisar` (`krisar_id`, `krisar_user`, `krisar_isi`, `krisar_status`, `krisar_created`) VALUES
('3c30b37ea6ef20932a09dee8b6f9dae1', 82793729, 'tes', 1, '2023-06-23 10:33:38'),
('74c67c67742d1a32aa65dd4770a3dc16', 123123, 'sdasdasd', 1, '2023-06-23 15:00:22'),
('b64136097a2809109177010dafe43a97', 82793729, 'asdasd', 1, '2023-06-23 10:45:50'),
('c21d0b3f8740b25b229363db2add6bd7', 82793729, 'asdasdasads', 1, '2023-06-25 11:29:15'),
('faad56702b1af062d35a4947edf6a568', 123123, 'asass', 1, '2023-06-23 10:50:01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kuesioner`
--

CREATE TABLE `tb_kuesioner` (
  `kuesioner_id` varchar(255) NOT NULL,
  `kuesioner_judul` text NOT NULL,
  `kuesioner_indeksid` int(11) NOT NULL,
  `kuesioner_next` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kuesioner`
--

INSERT INTO `tb_kuesioner` (`kuesioner_id`, `kuesioner_judul`, `kuesioner_indeksid`, `kuesioner_next`) VALUES
('25234d484fd29b22bd7a90b6c1780b5b', 'Voluptas repudiandae ratione doloribus, quisquam,', 2026037694, 8),
('3f790510fadacb7fd816d3e80b0fd3cf', 'a possimus sunt officiis itaque quas. Harum sapiente enim, porro?', 299990639, 6),
('455d03ed40d37a5eafcc0247a64c6f4c', 'adipisicing elit. Molestias dicta ipsum', 299990639, 1),
('614544c27427871d39cfeb2dbff0fc79', 'corporis facilis reiciendis sit itaque', 2026037694, 12),
('695be914823c9172009b370672ea87d0', 'Lorem ipsum dolor sit amet consectetur', 299990639, 2),
('7a5042ea080d32d9a764175ef1fdff93', 'deleniti dolorum nam minima quasi dignissimos voluptates maxime quis mollitia dolorem.', 2026037694, 9),
('7ac3dd624f0ec691ab55274279b0cdbb', 'odio neque animi, voluptatem praesentium', 299990639, 5),
('8af5b798725c727ae3d88cdfc09f49d1', 'aliquam iure culpa inventore iste', 2026037694, 13),
('8dd6c13d7a84adf020b9e7b958e8ef9d', 'odit accusamus quos tempora impedit facere eveniet', 2026037694, 11),
('8e9902a2ff2a9b0722f47c4ad87271d7', 'ossimus provident at, molestiae, perferendis?', 2026037694, 10),
('b3656a64406018f8f19d0cf3dc1e8145', 'asdasd', 283753876, 14),
('b7264dbd78cdef3db6cc30d3be19d035', 'labore placeat maiores, distinctio', 299990639, 3),
('c77536843b284737dcd212bbe3de4757', 'quasi consectetur, nam quisquam accusamus iste', 299990639, 4),
('eb98c3cc7d146a83ee47d3c810a8d2ad', 'Est, quibusdam, dignissimos?', 2026037694, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_log_akses`
--

CREATE TABLE `tb_log_akses` (
  `id_log_info` int(11) NOT NULL,
  `time_log_info` int(11) NOT NULL,
  `browser_log_info` varchar(50) NOT NULL,
  `b_version_log_info` varchar(50) NOT NULL,
  `os_log_info` varchar(50) NOT NULL,
  `ip_log_info` varchar(50) NOT NULL,
  `date_sortir` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `mhs_nim` int(11) NOT NULL,
  `mhs_nama` varchar(255) NOT NULL,
  `mhs_username` varchar(255) NOT NULL,
  `mhs_email` varchar(255) NOT NULL,
  `mhs_prodi` int(11) NOT NULL,
  `mhs_semester` int(11) NOT NULL,
  `mhs_tahun` int(11) NOT NULL,
  `mhs_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`mhs_nim`, `mhs_nama`, `mhs_username`, `mhs_email`, `mhs_prodi`, `mhs_semester`, `mhs_tahun`, `mhs_password`) VALUES
(123123, 'Tirje', 'tirjesukme', 'tirje@gmail.com', 1673611188, 3, 2022, '$2y$10$tE96EaFT0z4aZLxWJcTaDu1sFtJ4rG/WIN4FeQjA.F6NIJKb5sZKe'),
(321321, 'Lasmining Puri', 'lasmining', 'las@gmail.com', 1925995895, 6, 2021, '$2y$10$Am6Ip/v5NIBW16DCmgFwZ.XZ4hxJZbVH3wEtpeuOK8UV8JladWcQa'),
(82793729, 'Sopian', 'sopian', 'ryan@gmail.com', 1078887159, 1, 2023, '$2y$10$hi3kPy1lBRUWrUVsq5Q2mussOiDyZje4iaoX6IUtqX5tOOCU6pFvC');

-- --------------------------------------------------------

--
-- Table structure for table `tb_makul`
--

CREATE TABLE `tb_makul` (
  `makul_id` int(11) NOT NULL,
  `makul_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_makul`
--

INSERT INTO `tb_makul` (`makul_id`, `makul_nama`) VALUES
(1063009646, 'Pemrograman Web'),
(1716577858, 'Algoritma'),
(2085158029, 'Basis Data'),
(2126231772, 'Etika Profesi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_makul_mhs`
--

CREATE TABLE `tb_makul_mhs` (
  `promhs_id` int(11) NOT NULL,
  `promhs_mhs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_makul_mhs`
--

INSERT INTO `tb_makul_mhs` (`promhs_id`, `promhs_mhs`) VALUES
(1063009646, 82793729),
(2085158029, 82793729),
(2126231772, 82793729),
(1063009646, 123123),
(1716577858, 123123),
(2085158029, 123123),
(2126231772, 123123),
(1063009646, 321321),
(2085158029, 321321),
(2126231772, 321321);

-- --------------------------------------------------------

--
-- Table structure for table `tb_notifikasi`
--

CREATE TABLE `tb_notifikasi` (
  `noti_id` varchar(255) NOT NULL,
  `noti_nama` varchar(255) NOT NULL,
  `noti_ket` text NOT NULL,
  `noti_status` int(11) NOT NULL,
  `noti_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `prodi_id` int(11) NOT NULL,
  `prodi_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`prodi_id`, `prodi_nama`) VALUES
(1078887159, 'Teknik Informatika'),
(1673611188, 'Farmasi'),
(1925995895, 'Rekam Medis');

-- --------------------------------------------------------

--
-- Table structure for table `tb_responden`
--

CREATE TABLE `tb_responden` (
  `respo_id` varchar(255) NOT NULL,
  `respo_nama` varchar(255) NOT NULL,
  `respo_nopol` varchar(255) NOT NULL,
  `respo_jk` varchar(255) NOT NULL,
  `respo_usia` int(11) NOT NULL,
  `respo_pekerjaan` varchar(255) NOT NULL,
  `respo_pendidikan` varchar(255) NOT NULL,
  `respo_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`hasil_id`);

--
-- Indexes for table `tb_indeks`
--
ALTER TABLE `tb_indeks`
  ADD PRIMARY KEY (`indeks_id`);

--
-- Indexes for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  ADD PRIMARY KEY (`jawab_id`);

--
-- Indexes for table `tb_krisar`
--
ALTER TABLE `tb_krisar`
  ADD PRIMARY KEY (`krisar_id`);

--
-- Indexes for table `tb_kuesioner`
--
ALTER TABLE `tb_kuesioner`
  ADD PRIMARY KEY (`kuesioner_id`);

--
-- Indexes for table `tb_log_akses`
--
ALTER TABLE `tb_log_akses`
  ADD PRIMARY KEY (`id_log_info`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`mhs_nim`);

--
-- Indexes for table `tb_makul`
--
ALTER TABLE `tb_makul`
  ADD PRIMARY KEY (`makul_id`);

--
-- Indexes for table `tb_makul_mhs`
--
ALTER TABLE `tb_makul_mhs`
  ADD KEY `promhs_id` (`promhs_id`);

--
-- Indexes for table `tb_notifikasi`
--
ALTER TABLE `tb_notifikasi`
  ADD PRIMARY KEY (`noti_id`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`prodi_id`);

--
-- Indexes for table `tb_responden`
--
ALTER TABLE `tb_responden`
  ADD PRIMARY KEY (`respo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  MODIFY `jawab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_log_akses`
--
ALTER TABLE `tb_log_akses`
  MODIFY `id_log_info` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
