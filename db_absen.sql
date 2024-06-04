-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 11:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_absen`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absen` int(10) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `id_student` int(10) UNSIGNED NOT NULL,
  `keterangan` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` bigint(20) NOT NULL,
  `class_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class_name`) VALUES
(1, 'VII A'),
(2, 'VII B'),
(3, 'VII C'),
(4, 'VII D'),
(5, 'VII E'),
(6, 'VII F'),
(7, 'VII G'),
(8, 'VII H'),
(9, 'VIII A'),
(10, 'VIII B'),
(11, 'VIII C'),
(12, 'VIII D'),
(13, 'VIII E'),
(14, 'VIII F'),
(15, 'VIII G'),
(16, 'VIII H'),
(17, 'IX A'),
(18, 'IX B'),
(19, 'IX C'),
(20, 'IX D'),
(21, 'IX E'),
(22, 'IX F'),
(23, 'IX G'),
(24, 'IX H');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_absen`
--

CREATE TABLE `daftar_absen` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_absen`
--

INSERT INTO `daftar_absen` (`id`, `name`) VALUES
(1, 'Hadir'),
(2, 'Izin'),
(3, 'Sakit'),
(4, 'Alfa');

-- --------------------------------------------------------

--
-- Stand-in structure for view `datasiswa`
-- (See below for the actual view)
--
CREATE TABLE `datasiswa` (
`id` bigint(20) unsigned
,`nama` varchar(255)
,`class_id` bigint(20) unsigned
,`class_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_14_160240_create_students_table', 2),
(6, '2024_04_16_152752_create_absensi_table', 3),
(7, '2024_04_18_071027_create_class_table', 4),
(8, '2024_05_25_062232_daftar_absen', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `status` enum('Aktif','Non-Aktif') NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `id_absen` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `nama`, `nis`, `nisn`, `jenis_kelamin`, `status`, `class_id`, `id_absen`, `created_at`, `updated_at`) VALUES
(1, 'Maulida Rahma', '12345', '1234567890', 'Perempuan', 'Aktif', 1, NULL, NULL, NULL),
(2, 'Nazwa Karima ', '09876', '0987654321', 'Perempuan', 'Aktif', 1, NULL, NULL, NULL),
(3, 'Noor Amalia', '22222', '3214567890', 'Perempuan', 'Non-Aktif', 1, NULL, NULL, NULL),
(5, 'Ahmad Abdullah', '00115', '1234567890', 'Laki-laki', 'Aktif', 2, NULL, NULL, NULL),
(6, 'Siti Aisyah', '00226', '1234567891', 'Perempuan', 'Aktif', 2, NULL, NULL, NULL),
(7, 'Bambang Wijaya', '00337', '1234567892', 'Laki-laki', 'Aktif', 2, NULL, NULL, NULL),
(8, 'Dewi Anggraeni', '00448', '1234567893', 'Perempuan', 'Aktif', 3, NULL, NULL, NULL),
(9, 'Fajar Ramadhan', '00559', '1234567894', 'Laki-laki', 'Aktif', 3, NULL, NULL, NULL),
(10, 'Hadi Prasetyo', '07710', '1234567896', 'Laki-laki', 'Aktif', 3, NULL, NULL, NULL),
(16, 'Adara Lia Teffany', '56789', '1005349304', 'Perempuan', 'Aktif', 4, NULL, '2024-05-26 08:13:36', '2024-05-26 08:13:36'),
(18, 'Fitra Rizka Andila', '44444', '0987123456', 'Perempuan', 'Non-Aktif', 1, NULL, '2024-05-26 09:34:01', '2024-05-26 09:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('gurubk','gurupengajar') NOT NULL DEFAULT 'gurubk',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(4, 'Guru BK', 'bksmpn2bjm@gmail.com', '$2y$10$0YZ4tDuG/6h68EPqc0bUeeRvkl4e7dQaxn.tAH6VFWRFisN.pbcsi', 'gurubk', '2024-05-26 16:35:37', '2024-05-26 16:35:37'),
(5, 'Guru Pengajar', 'gurusmpn2bjm@gmail.com', '$2y$10$1NFqLDvxNkYtKm2Zovx6Re6.mFS/tqKzCyM.Zc26GJ6WLIixvfa3K', 'gurupengajar', '2024-05-26 16:35:37', '2024-05-26 16:35:37');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id` int(11) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id`, `level`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Structure for view `datasiswa`
--
DROP TABLE IF EXISTS `datasiswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datasiswa`  AS SELECT `students`.`id` AS `id`, `students`.`nama` AS `nama`, `students`.`class_id` AS `class_id`, `class`.`class_name` AS `class_name` FROM (`students` join `class`) WHERE `students`.`class_id` = `class`.`id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `id_student` (`id_student`),
  ADD KEY `fk_absensi_keterangan` (`keterangan`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_absen`
--
ALTER TABLE `daftar_absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_absen` (`id_absen`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `daftar_absen`
--
ALTER TABLE `daftar_absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `fk_absensi_keterangan` FOREIGN KEY (`keterangan`) REFERENCES `daftar_absen` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`id_absen`) REFERENCES `absensi` (`id_absen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
