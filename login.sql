-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2021 at 07:22 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas`
--

CREATE TABLE `tb_berkas` (
  `kd_berkas` int(11) NOT NULL,
  `nama_berkas` varchar(255) DEFAULT NULL,
  `keterangan_berkas` varchar(255) DEFAULT NULL,
  `tipe_berkas` varchar(255) DEFAULT NULL,
  `ukuran_berkas` float NOT NULL,
  `nama_asprak` varchar(128) NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berkas`
--

INSERT INTO `tb_berkas` (`kd_berkas`, `nama_berkas`, `keterangan_berkas`, `tipe_berkas`, `ukuran_berkas`, `nama_asprak`, `tanggal_upload`) VALUES
(5, '828_Modul_06_-_Prosedur_dan_Fungsi.pdf', 'Pertemuan Modul Fungsi', '.pdf', 1876.49, 'Rizki  Atika', '2021-01-18 05:21:30'),
(6, '45820_Modul_05_-_Array.pdf', 'Pertemuan Modul Array', '.pdf', 1559.76, 'Rizki Atika', '2021-01-18 05:21:30'),
(7, 'Modul-07-Sorting.pdf', 'Pertemuan Modul Sorting', '.pdf', 350.1, 'Rizki Atika', '2021-01-18 05:21:30'),
(8, 'Modul-08-Searching.pdf', 'Pertemuan Modul Seaching', '.pdf', 391.71, 'Rizki Atika', '2021-01-18 05:21:30'),
(15, 'Pertemuan_III_NamaTipeEkspresiNilai_S1IF05A.pdf', 'Pertemuan Modul Tipe data', '.pdf', 1714.65, 'Rizki Atika', '2021-01-23 14:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumpulan`
--

CREATE TABLE `tb_pengumpulan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `kelas` varchar(30) DEFAULT NULL,
  `modul` varchar(50) DEFAULT NULL,
  `nama_asprak` varchar(30) DEFAULT NULL,
  `ukuran` float NOT NULL,
  `nama_berkas` varchar(255) DEFAULT NULL,
  `date_uploded` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengumpulan`
--

INSERT INTO `tb_pengumpulan` (`id`, `nama`, `email`, `kelas`, `modul`, `nama_asprak`, `ukuran`, `nama_berkas`, `date_uploded`) VALUES
(1, 'Isnaini Rizki Atika', 'isnainiatika02@gmail.com', 'IF 05 D', 'Seaching', 'Rizki Atika', 1247.72, '1103104179_jurnal_eproc.pdf', '2021-01-30 08:02:11'),
(2, 'Niken Tri', 'niken@gmail.com', 'IF 05 D', 'Array', 'Rizki Atika', 1247.72, '1103104179_jurnal_eproc1.pdf', '2021-01-31 06:20:52'),
(3, 'Niken Tri', 'niken@gmail.com', 'IF 07 A', 'Fungsi', 'Atika Ratna Sari', 224.52, '41369-541-84623-1-10-20180803.pdf', '2021-01-31 06:21:02'),
(6, 'Isnaini Rizki Atika', 'isnainiatika02@gmail.com', 'IF 05 D', 'Sorting', 'Atika sari', 11093.6, '2019-05-14_051231.pdf', '2021-01-31 06:15:32'),
(8, 'Rohmat Hidayat', 'niken@gmail.com', 'IF 05 D', 'Fungsi', 'Atika Sari', 166.33, '16_04_2335_bab11.pdf', '2021-01-31 06:21:19'),
(12, 'Isnaini Rizki Atika', 'isnainiatika02@gmail.com', 'IF 05 D', 'Fungsi', 'Atika Ratna Sari', 568.77, 'Praktikum2_S1IF05D_17102130.pdf', '2021-01-31 06:08:20'),
(13, 'Isnaini Rizki Atika', 'isnainiatika02@gmail.com', 'IF 05 D', 'Pseudocode', 'Atika Ratna Sari', 465.7, 'praktikum3_S1IF05D_17102130.pdf', '2021-01-31 06:13:50'),
(14, 'Isnaini Rizki Atika', 'isnainiatika02@gmail.com', 'IF 05 D', 'Tipe Data', 'Atika Ratna Sari', 103.92, 'TUGAS_PRAKTIKUM_2-1.pdf', '2021-01-31 06:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `class` varchar(10) NOT NULL,
  `nama_repl` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `nim`, `class`, `nama_repl`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(2, 'Putri Rianti', '987928364', '', 'Isrika', 'rizkyatika14@yahoo.com', 'IMG_20200419_165733.jpg', '$2y$10$xYa5OOOTZnwMpuD4a16HuuegWHdlIVtLKOavCmOOvBYp8o/HkOBhu', 1, 1, 1611306973),
(17, 'Isnaini Rizki Atika', '17102130', 'IF 05 D', 'Isrika', 'isnainiatika02@gmail.com', 'default.png', '$2y$10$urU8SLHzbdZDHp9lSoa8UuN4.d4nLi2ejZq3MDTw8NE14lpvC/Tti', 2, 1, 1611389169),
(21, 'Rizki Atika', '17102567', 'IF 07 A', 'isnainiatika', 'atikarizki02@gmail.com', 'default.png', '$2y$10$1dLQkf7KMswdkCwfp5KzIOzUyun8UtNc9aI79.YvKBEOy8PI54ZMK', 3, 1, 1611410562),
(26, 'Atika Ratna Sari', '17102777', 'IF 05 A', 'atikarizki', '17102130@ittelkom-pwt.ac.id', 'default.png', '$2y$10$TACdKG0BneZKLKc7k0whVOYptcd6QzCBsS8gRa/n1yHc5DhgmrnBq', 3, 1, 1611543697);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 3, 7),
(6, 3, 2),
(7, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(7, 'Asprak');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member'),
(3, 'Asisten Praktikum');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'far fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(11, 2, 'Praktikum Alpro', 'user/praktikum', 'fas fa-fw fa-book ', 1),
(12, 5, 'Praktikum Online', 'praktikum', 'fas fa-fw fa-book ', 1),
(16, 1, 'Kelola Mahasiswa', 'admin/mahasiswa', 'fas fa-fw fa-users', 1),
(17, 7, 'Modul', 'asprak/modul', 'fas fa-fw fa-book-open ', 1),
(18, 7, 'Pengumpulan Laporan', 'asprak/pengumpulan', 'fas  fa-fw fa-check-circle', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(23, '17102130@ittelkom-pwt.ac.id', '0HN/nf2u/wSP+FY/eqTHW+YIaMYha+QTkQmr91eIP6Q=', 1611543897);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  ADD PRIMARY KEY (`kd_berkas`);

--
-- Indexes for table `tb_pengumpulan`
--
ALTER TABLE `tb_pengumpulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  MODIFY `kd_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_pengumpulan`
--
ALTER TABLE `tb_pengumpulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
