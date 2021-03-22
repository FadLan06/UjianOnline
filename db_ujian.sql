-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 05:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ujian`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_soal`
--

CREATE TABLE `tb_soal` (
  `id_soal` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban_a` text NOT NULL,
  `jawaban_b` text NOT NULL,
  `jawaban_c` text NOT NULL,
  `jawaban_d` text NOT NULL,
  `jawaban_e` text NOT NULL,
  `jawaban` enum('a','b','c','d','e') NOT NULL,
  `timee` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_soal`
--

INSERT INTO `tb_soal` (`id_soal`, `pertanyaan`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `jawaban_e`, `jawaban`, `timee`) VALUES
(1, 'Bahasa pemograman yang sering digunakan, kecuali ?', 'PHP', 'C++', 'PYTHON', 'ADOBE PREMIER', 'JAVA', 'd', '2021-03-22 09:47:53'),
(2, 'Sofware merupakan bagian komputer\r\n, fungsinya......', 'Yang dapat dilihat lan\r\ngsung dan diraba', 'Menjebatani antara komputer dan pengguna', 'Yang tidak terlalu penting di komputer', 'Yang tidak harus ada dikomputer', 'Yang dapat dibawa dan dirasa', 'b', '2021-03-22 10:29:52'),
(3, 'Nama program komputer yang termasuk web browser adalah  \r\n..............', 'Photoshop', 'Mozila', 'Microsoft Power Point', 'Libre Office', 'Corel Draw', 'b', '2021-03-22 12:00:08'),
(4, 'Berikut merupakan sistem operasi dengan tampilan grafis kecuali\r\n......', 'Window 7', 'Window XP', 'IBM Dos', 'Open Suse 10', 'Ubuntu 11', 'c', '2021-03-22 12:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `image` text NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(25) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `last_login` datetime NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `no_hp`, `image`, `password`, `role_id`, `is_active`, `date_created`, `last_login`, `token`) VALUES
(1, 'Super User', 'admin', 'admin@detapos.com', '', 'default.png', '$2y$10$zAXGsHya3dfEMK0DLxRbeOnORiGqG1WdAeKcTgr58kJkR6WlmPFc6', 1, 1, 1581291784, '2021-03-22 05:22:55', '15812917'),
(71, 'Detapos Lite', 'detapos', 'admin@detapos.co.id', '082188811161', 'default.png', '$2y$10$akMvuGdxlsihD/DnVLkTweediFDOA5fvRqexvWmb5biR9V9nZ7.Fu', 2, 1, 1601705727, '2020-11-27 02:32:55', 'DPVL3N5K7VYF7ZSR'),
(73, 'fadlan', 'fadlan', 'fadlan642@gmail.com', '', 'default.png', '$2y$10$svv1Qp2MgmZvdoUZuAw2ZONq5tNcQJduEWoA/pnHCa4/7BaftPOGq', 3, 1, 1604377158, '2020-11-14 02:02:43', 'DPVL3N5K7VYF7ZSR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_soal`
--
ALTER TABLE `tb_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_soal`
--
ALTER TABLE `tb_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
