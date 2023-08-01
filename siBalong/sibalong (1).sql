-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 03:29 AM
-- Server version: 10.4.24-MariaDB-log
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibalong`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE `bukutamu` (
  `id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaPengunjung` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noTelp` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukutamu`
--

INSERT INTO `bukutamu` (`id`, `namaPengunjung`, `keperluan`, `keterangan`, `noTelp`, `created_at`, `updated_at`) VALUES
('BT001', 'Moh. Sifaul Khoir', 'Mengajukan / Mengirim Surat', 'asdfghjk', '0812345678', '2023-07-26 22:05:20', '2023-07-26 22:05:20'),
('BT002', 'Icha Prastika', 'Bertemu Dengan PEG01', 'asdffsda', '45678912', '2023-07-26 22:06:35', '2023-07-26 22:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `kategoripost`
--

CREATE TABLE `kategoripost` (
  `id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaKategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoripost`
--

INSERT INTO `kategoripost` (`id`, `namaKategori`, `created_at`, `updated_at`) VALUES
('K001', 'Kebudayaan', '2023-07-09 21:51:46', '2023-07-26 22:34:43'),
('K002', 'Umum', '2023-07-09 21:52:34', '2023-07-09 21:52:34'),
('K003', 'Wisata', '2023-07-10 19:01:06', '2023-07-10 19:15:58'),
('K004', 'Ekonomi', '2023-07-25 18:19:05', '2023-07-25 18:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaLayanan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `descLayanan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_operasional` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategoriLayanan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persyaratan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `namaLayanan`, `created_at`, `updated_at`, `descLayanan`, `lokasi`, `kontak`, `jam_operasional`, `kategoriLayanan`, `persyaratan`, `biaya`, `keterangan`) VALUES
('L002', 'Kantor Kecamatan Balong', '2023-07-04 18:44:36', '2023-07-05 21:53:39', 'Layanan Administrasi Kecamatan Balong', 'Jl. Kecamatan', '08219182347', '08:00-21:00', 'Kependudukan', 'Membawa Surat Undangan', 'Gratis', 'Membuat KTP');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_07_01_010539_post_migration', 1),
(3, '2023_07_01_052413_add_primary_key', 1),
(4, '2023_07_01_052848_ubah_post', 2),
(5, '2023_07_03_065833_buattabelpost', 3),
(6, '2023_07_03_070235_buatlagitablepos', 4),
(7, '2023_07_04_030322_proker_table', 5),
(8, '2023_07_04_125018_layanan_table', 6),
(9, '2023_07_04_125832_tambah_kolom_layanan', 7),
(10, '2023_07_06_030107_akun_table', 8),
(11, '2023_07_06_040319_akun_table_change', 9),
(12, '2023_07_10_040255_table_kategori', 10),
(13, '2023_07_25_052310_tabel_pegawai', 11),
(14, '2023_07_25_052707_tabel_pegawai_lagi', 12),
(15, '2023_07_27_041116_buku_tamu', 13),
(16, '2023_07_29_030201_ubah_table_pegawai', 14),
(17, '2023_07_29_034805_ubah_tabel_pegawai_lagi', 15);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaPegawai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisKelamin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fotoPegawai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `namaPegawai`, `jenisKelamin`, `jabatan`, `pangkat`, `created_at`, `updated_at`, `fotoPegawai`) VALUES
('PEG02', '2131730066', 'Icha Prastika', 'Perempuan', 'Sekretaris Kecamatan', 'Penata III-D', '2023-07-28 20:53:33', '2023-07-28 20:53:33', 'Icha Prastika - PEG02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judulPost` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isiPost` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategoriPost` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userPost` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusPost` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotoPost` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `judulPost`, `isiPost`, `kategoriPost`, `userPost`, `statusPost`, `fotoPost`, `created_at`, `updated_at`) VALUES
('P003', 'Kecamatan Balong', '<p><strong>Balong </strong>adalah sebuah kecamatan di Kabupaten Ponorogo, Provinsi Jawa Timur, Indonesia. Kecamatan ini berjarak sekitar 18 kilometer dari ibu kota Kabupaten Ponorogo ke arah barat daya. Pusat pemerintahannya berada di desa Balong.</p>', 'K002', 'Kecamatan Balong', 'Diposting', 'P003 - Lokasi_Kecamatan_Balong,_Ponorogo.png', '2023-07-12 17:45:03', '2023-07-16 20:18:54'),
('P004', 'Cob', '<p><strong>Ini Juga COba</strong></p>', 'K002', 'Admin', 'Diposting', 'P004 - kue-ondeh-ondeh.jpg', '2023-07-12 18:30:02', '2023-07-25 18:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaProker` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descProker` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`id`, `namaProker`, `descProker`, `created_at`, `updated_at`) VALUES
('PK01', 'Grebeg Suro 2023', 'Grebeg Suro Telah selesai', '2023-07-05 17:30:02', '2023-07-25 17:55:20'),
('PK02', 'Bersih Desa', 'Ini bersih Desa', '2023-07-05 21:17:12', '2023-07-05 21:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaUser` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userpass` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `namaUser`, `userpass`, `created_at`, `updated_at`) VALUES
('A001', 'sibalong', 'Kecamatan Balong', '123456', '2023-07-08 19:18:30', '2023-07-15 03:52:18'),
('A002', 'Adminku', 'Admin Kecamatan Balong', 'admin123', NULL, '2023-07-15 03:52:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoripost`
--
ALTER TABLE `kategoripost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
