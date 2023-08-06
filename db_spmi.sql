-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 08:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(23, '2023-07-04-040409', 'App\\Database\\Migrations\\Pengguna', 'default', 'App', 1689228955, 1),
(24, '2023-07-04-041512', 'App\\Database\\Migrations\\Tahun', 'default', 'App', 1689229039, 2),
(25, '2023-07-13-060108', 'App\\Database\\Migrations\\Status', 'default', 'App', 1689229039, 2),
(26, '2023-07-13-061752', 'App\\Database\\Migrations\\TbPpepp', 'default', 'App', 1689229609, 3),
(27, '2023-07-13-062743', 'App\\Database\\Migrations\\TbPpeppUser', 'default', 'App', 1689231703, 4),
(28, '2023-07-13-133856', 'App\\Database\\Migrations\\Profile', 'default', 'App', 1689256505, 5),
(30, '2023-07-14-013240', 'App\\Database\\Migrations\\User', 'default', 'App', 1689298666, 6),
(31, '2023-07-16-073156', 'App\\Database\\Migrations\\TbHakAkses', 'default', 'App', 1689492948, 7),
(32, '2023-07-16-073741', 'App\\Database\\Migrations\\TbAkses', 'default', 'App', 1689493151, 8),
(35, '2023-07-16-101240', 'App\\Database\\Migrations\\TbPpeppEditor', 'default', 'App', 1689590700, 9),
(36, '2023-07-17-103637', 'App\\Database\\Migrations\\TbPpeppVerifikator', 'default', 'App', 1689590700, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tb_akses`
--

CREATE TABLE `tb_akses` (
  `id_akses` int(10) UNSIGNED NOT NULL,
  `akses` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_akses`
--

INSERT INTO `tb_akses` (`id_akses`, `akses`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', '2023-07-16 09:47:54', '2023-07-16 09:47:54', '2023-07-16 09:47:54'),
(2, 'User', '2023-07-16 09:47:54', '2023-07-16 09:47:54', '2023-07-16 09:47:54'),
(3, 'Editor', '2023-07-16 09:47:54', '2023-07-16 09:47:54', '2023-07-16 09:47:54'),
(4, 'Verifikator', '2023-07-16 09:47:54', '2023-07-16 09:47:54', '2023-07-16 09:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hak_akses`
--

CREATE TABLE `tb_hak_akses` (
  `id_hak_akses` int(10) UNSIGNED NOT NULL,
  `pengguna_id` int(10) UNSIGNED NOT NULL,
  `akses_id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_hak_akses`
--

INSERT INTO `tb_hak_akses` (`id_hak_akses`, `pengguna_id`, `akses_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 2, '2023-07-16 09:48:59', '2023-07-16 09:48:59', '2023-07-16 09:48:59'),
(2, 3, 3, '2023-07-16 11:57:49', '2023-07-16 11:57:49', '2023-07-16 11:57:49'),
(3, 1, 4, '2023-07-17 10:02:23', '2023-07-17 10:02:23', '2023-07-17 10:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `name`, `jabatan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Zaenal', 'Direktur', '2023-07-15 17:53:00', '2023-07-15 17:53:00', '2023-07-15 17:53:00'),
(2, 'Ardiana Abdul Gumelar', 'Manajer', '2023-07-15 15:59:22', '2023-07-15 15:59:22', '0000-00-00 00:00:00'),
(3, 'Ahmad Yani', 'Wakil Manajer', '2023-07-16 03:32:34', '2023-07-16 03:32:34', '0000-00-00 00:00:00'),
(4, 'Dani', 'Dosen', '2023-07-17 12:35:09', '2023-07-29 03:17:16', '2023-07-29 03:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ppepp`
--

CREATE TABLE `tb_ppepp` (
  `id_ppepp` int(10) UNSIGNED NOT NULL,
  `jenis` enum('Penetapan','Pelaksanaan','Evaluasi','Pengendalian','Peningkatan') NOT NULL DEFAULT 'Penetapan',
  `kriteria` varchar(255) NOT NULL,
  `standar` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_ppepp`
--

INSERT INTO `tb_ppepp` (`id_ppepp`, `jenis`, `kriteria`, `standar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Penetapan', 'Kriteria 1', 'Standar Penetapan 1', '2023-07-16 03:27:38', '2023-07-16 03:27:38', '0000-00-00 00:00:00'),
(2, 'Pelaksanaan', 'Kriteria 2', 'Standar Pelaksanaan 2', '2023-07-16 06:45:29', '2023-07-16 06:45:29', '0000-00-00 00:00:00'),
(3, 'Evaluasi', 'Kriteria 3', 'Standar Evaluasi 3', '2023-07-16 06:45:50', '2023-07-16 06:45:50', '0000-00-00 00:00:00'),
(4, 'Pengendalian', 'Kriteria 4', 'Standar pengendalian 4', '2023-07-16 06:46:13', '2023-07-16 06:46:13', '0000-00-00 00:00:00'),
(5, 'Peningkatan', 'Kriteria 5', 'Standar peningkatan 5', '2023-07-16 06:46:29', '2023-07-16 06:46:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ppepp_editor`
--

CREATE TABLE `tb_ppepp_editor` (
  `id_ppepp_editor` int(10) UNSIGNED NOT NULL,
  `ppepp_user_id` int(10) UNSIGNED NOT NULL,
  `komentar` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ppepp_user`
--

CREATE TABLE `tb_ppepp_user` (
  `id_ppepp_user` int(10) UNSIGNED NOT NULL,
  `ppepp_id` int(10) UNSIGNED NOT NULL,
  `ketercapaian` int(5) NOT NULL,
  `file` varchar(25) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_ppepp_user`
--

INSERT INTO `tb_ppepp_user` (`id_ppepp_user`, `ppepp_id`, `ketercapaian`, `file`, `link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 1, 50, NULL, NULL, '2023-07-17 04:32:38', '2023-07-17 04:32:38', '2023-07-17 04:32:38'),
(4, 2, 100, NULL, NULL, '2023-07-17 04:32:38', '2023-07-17 04:32:38', '2023-07-17 04:32:38');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ppepp_verifikator`
--

CREATE TABLE `tb_ppepp_verifikator` (
  `id_ppepp_verifikator` int(10) UNSIGNED NOT NULL,
  `ppepp_id` int(10) UNSIGNED NOT NULL,
  `ppepp_user_id` int(10) UNSIGNED NOT NULL,
  `komentar` text NOT NULL,
  `verif` enum('Ya','Tidak') NOT NULL DEFAULT 'Ya',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile`
--

CREATE TABLE `tb_profile` (
  `id_profile` int(10) UNSIGNED NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tujuan` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_profile`
--

INSERT INTO `tb_profile` (`id_profile`, `prodi`, `visi`, `misi`, `tujuan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sistem Informasi', 'Menjadi prodi yang berkualitas', 'Menjalankan semua program dengan baik', 'Menciptakan lulusan yang kompeten', '2023-07-16 09:44:29', '2023-07-16 09:44:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(5) UNSIGNED NOT NULL,
  `status` enum('Aktif','Non-Aktif') NOT NULL DEFAULT 'Aktif',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Aktif', '2023-07-16 03:34:11', '2023-07-16 03:34:11', '2023-07-16 03:34:11'),
(2, 'Non-Aktif', '2023-07-16 03:34:11', '2023-07-16 03:34:11', '2023-07-16 03:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tahun`
--

CREATE TABLE `tb_tahun` (
  `id_tahun` int(5) UNSIGNED NOT NULL,
  `tahun` enum('2020','2021','2022','2023','2024') NOT NULL DEFAULT '2023',
  `id_status` int(5) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_tahun`
--

INSERT INTO `tb_tahun` (`id_tahun`, `tahun`, `id_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, '2020', 2, '2023-07-16 03:47:01', '2023-07-16 03:47:01', '2023-07-16 03:47:01'),
(9, '2021', 2, '2023-07-16 04:48:53', '2023-07-16 04:48:53', '2023-07-16 04:48:53'),
(10, '2022', 2, '2023-07-16 04:49:05', '2023-07-16 04:49:05', '2023-07-16 04:49:05'),
(11, '2023', 1, '2023-07-16 04:49:05', '2023-07-16 04:49:05', '2023-07-16 04:49:05'),
(12, '2024', 1, '2023-07-16 06:23:34', '2023-07-16 06:23:34', '2023-07-16 06:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'Ardiana Abdul Gumelar', 'aridianaabdul@gmail.com', '$2y$10$fbXE1yYB7VpJVoYORqDiGuWpEb0gy/k9cV5ZxQbRPOG', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_akses`
--
ALTER TABLE `tb_akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `tb_hak_akses`
--
ALTER TABLE `tb_hak_akses`
  ADD PRIMARY KEY (`id_hak_akses`),
  ADD KEY `pengguna_id` (`pengguna_id`,`akses_id`),
  ADD KEY `akses_id` (`akses_id`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_ppepp`
--
ALTER TABLE `tb_ppepp`
  ADD PRIMARY KEY (`id_ppepp`);

--
-- Indexes for table `tb_ppepp_editor`
--
ALTER TABLE `tb_ppepp_editor`
  ADD PRIMARY KEY (`id_ppepp_editor`);

--
-- Indexes for table `tb_ppepp_user`
--
ALTER TABLE `tb_ppepp_user`
  ADD PRIMARY KEY (`id_ppepp_user`),
  ADD UNIQUE KEY `ppepp_id` (`ppepp_id`);

--
-- Indexes for table `tb_ppepp_verifikator`
--
ALTER TABLE `tb_ppepp_verifikator`
  ADD PRIMARY KEY (`id_ppepp_verifikator`),
  ADD KEY `ppepp_id` (`ppepp_id`,`ppepp_user_id`),
  ADD KEY `ppepp_user_id` (`ppepp_user_id`);

--
-- Indexes for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_tahun`
--
ALTER TABLE `tb_tahun`
  ADD PRIMARY KEY (`id_tahun`),
  ADD KEY `id_status_2` (`id_status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_akses`
--
ALTER TABLE `tb_akses`
  MODIFY `id_akses` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_hak_akses`
--
ALTER TABLE `tb_hak_akses`
  MODIFY `id_hak_akses` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_ppepp`
--
ALTER TABLE `tb_ppepp`
  MODIFY `id_ppepp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_ppepp_editor`
--
ALTER TABLE `tb_ppepp_editor`
  MODIFY `id_ppepp_editor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_ppepp_user`
--
ALTER TABLE `tb_ppepp_user`
  MODIFY `id_ppepp_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_ppepp_verifikator`
--
ALTER TABLE `tb_ppepp_verifikator`
  MODIFY `id_ppepp_verifikator` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_profile`
--
ALTER TABLE `tb_profile`
  MODIFY `id_profile` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_tahun`
--
ALTER TABLE `tb_tahun`
  MODIFY `id_tahun` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_hak_akses`
--
ALTER TABLE `tb_hak_akses`
  ADD CONSTRAINT `tb_hak_akses_ibfk_1` FOREIGN KEY (`pengguna_id`) REFERENCES `tb_pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_hak_akses_ibfk_2` FOREIGN KEY (`akses_id`) REFERENCES `tb_akses` (`id_akses`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_ppepp_user`
--
ALTER TABLE `tb_ppepp_user`
  ADD CONSTRAINT `tb_ppepp_user_ibfk_1` FOREIGN KEY (`ppepp_id`) REFERENCES `tb_ppepp` (`id_ppepp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_ppepp_verifikator`
--
ALTER TABLE `tb_ppepp_verifikator`
  ADD CONSTRAINT `tb_ppepp_verifikator_ibfk_1` FOREIGN KEY (`ppepp_id`) REFERENCES `tb_ppepp` (`id_ppepp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_ppepp_verifikator_ibfk_2` FOREIGN KEY (`ppepp_user_id`) REFERENCES `tb_ppepp_user` (`id_ppepp_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_tahun`
--
ALTER TABLE `tb_tahun`
  ADD CONSTRAINT `tb_tahun_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `tb_status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
