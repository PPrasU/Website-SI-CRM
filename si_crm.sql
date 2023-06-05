-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2023 pada 13.58
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_crm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `distributor_id` bigint(20) UNSIGNED NOT NULL,
  `id_barang` varchar(3) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `experied` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `distributor_id`, `id_barang`, `nama_barang`, `tipe`, `tanggal_pemesanan`, `experied`, `created_at`, `updated_at`) VALUES
(1, 1, 'S01', 'Sabun Minn', 'Sabun', '2023-06-01', '2024-06-01', '2023-06-01 00:15:25', '2023-06-01 02:32:20'),
(7, 2, 'P01', 'Pewangi Mint', 'Pewangi', '2023-06-04', '2024-06-04', '2023-06-04 06:49:50', '2023-06-04 06:50:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `distributors`
--

CREATE TABLE `distributors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_distributor` varchar(4) NOT NULL,
  `nama_distributor` varchar(40) NOT NULL,
  `jenis_barang` varchar(30) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `distributors`
--

INSERT INTO `distributors` (`id`, `id_distributor`, `nama_distributor`, `jenis_barang`, `alamat`, `no_hp`, `email`, `created_at`, `updated_at`) VALUES
(1, 'D001', 'PT.Sabun Jaya', 'Sabun', 'Malang', 8893011459, 'sabunjaya1@gmail.com', '2023-05-28 03:03:20', '2023-05-28 03:03:20'),
(2, 'D002', 'PT. Pewangi Abdi', 'Pewangi', 'Situbondo', 8893011459, 'pewangiabdi1@gmail.com', '2023-05-28 03:17:46', '2023-05-28 03:17:46'),
(3, 'D003', 'PT.Sabun Natural', 'Sabun', 'Probolinggo', 8893011459, 'sabunnatural1@gmail.com', '2023-05-28 03:18:08', '2023-05-28 03:18:08'),
(4, 'D004', 'PT.Pelembut Baju', 'Pelembut', 'Sidoarjo', 8893011459, 'pelembutbaju1@gmail.com', '2023-05-28 03:18:35', '2023-05-31 01:22:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasas`
--

CREATE TABLE `jasas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` bigint(20) UNSIGNED NOT NULL,
  `id_jasa` varchar(5) NOT NULL,
  `nama_jasa` varchar(50) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jasas`
--

INSERT INTO `jasas` (`id`, `barang_id`, `id_jasa`, `nama_jasa`, `harga`, `created_at`, `updated_at`) VALUES
(8, 1, 'J0001', 'Laundry Lengkap (Cuci, Strika)', 7000, '2023-06-01 03:46:14', '2023-06-01 03:46:14'),
(13, 1, 'J0002', 'Laundry Basah', 5000, '2023-06-04 06:55:28', '2023-06-04 06:55:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_transaksis`
--

CREATE TABLE `jenis_transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jenisTransaksi` varchar(4) NOT NULL,
  `jenis_transaksi` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_transaksis`
--

INSERT INTO `jenis_transaksis` (`id`, `id_jenisTransaksi`, `jenis_transaksi`, `created_at`, `updated_at`) VALUES
(1, 'B001', 'Bank BNI', '2023-05-29 07:40:42', '2023-05-29 07:40:42'),
(2, 'B002', 'Bank Mandiri', '2023-05-29 07:40:55', '2023-05-29 07:40:55'),
(3, 'B003', 'Bank BCA', '2023-05-29 07:41:06', '2023-05-29 07:41:06'),
(4, 'K001', 'Credit BNI', '2023-05-29 07:41:23', '2023-05-29 07:41:49'),
(5, 'K002', 'Kredit BCA', '2023-05-29 07:41:40', '2023-06-04 06:48:05'),
(7, 'CASH', 'Cash', '2023-05-29 07:42:24', '2023-05-29 07:42:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawans`
--

CREATE TABLE `karyawans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengguna_id` bigint(20) UNSIGNED NOT NULL,
  `id_karyawan` varchar(4) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karyawans`
--

INSERT INTO `karyawans` (`id`, `pengguna_id`, `id_karyawan`, `nama`, `jenis_kelamin`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(2, 6, 'K001', 'Sasmanto Utomo', 'Laki-Laki', 8893011459, 'Sidoarjo', '2023-05-31 02:41:54', '2023-06-03 10:18:10'),
(3, 2, 'K002', 'Amin', 'Laki-Laki', 8893011459, 'Probolinggo', '2023-06-03 07:59:58', '2023-06-03 08:00:09'),
(5, 5, 'K004', 'Roni', 'Laki-Laki', 8893011459, 'Situbondo', '2023-06-03 08:00:52', '2023-06-03 08:00:52'),
(6, 7, 'K005', 'Fatiha', 'Perempuan', 8893011459, 'Malang', '2023-06-03 08:01:43', '2023-06-03 08:01:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengguna_id` bigint(20) UNSIGNED NOT NULL,
  `peringkatM_id` bigint(20) UNSIGNED NOT NULL,
  `id_member` varchar(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `poin` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `members`
--

INSERT INTO `members` (`id`, `pengguna_id`, `peringkatM_id`, `id_member`, `nama`, `jenis_kelamin`, `no_hp`, `alamat`, `poin`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'M0000001', 'Putra', 'Laki-Laki', 8893011459, 'Sidoarjo', 10000, '2023-06-03 23:58:02', '2023-06-04 01:28:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_05_01_000002_create_distributors_table', 1),
(3, '2023_05_01_090846_create_jenis_transaksis_table', 1),
(4, '2023_05_01_090919_create_pelanggans_table', 1),
(5, '2023_05_01_090928_create_penggunas_table', 1),
(6, '2023_05_01_091013_create_poins_table', 1),
(7, '2023_05_01_000001_create_barangs_table', 2),
(8, '2023_05_01_090900_create_karyawans_table', 2),
(10, '2023_05_01_090943_create_penukaran_poins_table', 2),
(11, '2023_05_01_091045_create_saran_kritiks_table', 2),
(12, '2023_05_01_000003_create_jasas_table', 3),
(15, '2023_06_01_070556_create_barangs_table', 4),
(16, '2023_06_01_093613_create_jasas_table', 5),
(17, '2023_06_01_102557_create_jasas_table', 6),
(19, '2023_06_02_042422_create_r_transaksi_pelanggans_table', 7),
(20, '2023_06_02_094149_create_r_transaksi_members_table', 8),
(21, '2023_06_04_053854_create_members_table', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pelanggan` varchar(4) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `id_pelanggan`, `nama`, `jenis_kelamin`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'P001', 'Putra', 'Laki-Laki', 8893011459, 'Situbondo', '2023-05-29 07:42:48', '2023-05-29 07:42:48'),
(2, 'P002', 'Nana', 'Perempuan', 8893011459, 'Malang', '2023-05-29 07:43:14', '2023-05-29 07:43:14'),
(3, 'P003', 'Akbar', 'Laki-Laki', 8893011459, 'Malang', '2023-05-29 07:43:31', '2023-06-03 10:21:11'),
(4, 'P004', 'Sasmanto', 'Laki-Laki', 8893011459, 'Malang', '2023-05-29 07:43:49', '2023-05-31 02:43:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggunas`
--

CREATE TABLE `penggunas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pengguna` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penggunas`
--

INSERT INTO `penggunas` (`id`, `id_pengguna`, `nama`, `username`, `password`, `email`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'PE00000001', 'Akbar', 'akb4r', 'akb4r', 'akb4r@gmail.com', NULL, NULL, '2023-05-27 20:30:55', '2023-06-03 06:10:34'),
(2, 'PE0000002K', 'Amin', '4m1n', '4m1n', '4m1n@gmail.com', NULL, NULL, '2023-05-27 20:31:34', '2023-06-03 06:12:29'),
(5, 'PE0000004K', 'Roni', 'r0n1', 'r0n1', 'r0n1@gmail.com', NULL, NULL, '2023-05-31 01:38:09', '2023-06-03 06:12:48'),
(6, 'PE0000001K', 'Sasmanto', 'manto', 'mantoo', 'manto@gmail.com', NULL, NULL, '2023-05-31 02:41:40', '2023-05-31 02:44:18'),
(7, 'PE0000005K', 'Fatiha', 'f4t1h4', 'f4t1h4', 'f4t1h4@gmail.com', NULL, NULL, '2023-06-03 06:13:39', '2023-06-03 06:13:56'),
(9, 'PE0000006K', 'Nabila', 'N4b1lla', 'N4b1lla', 'N4b1lla@gmail.com', NULL, NULL, '2023-06-03 06:15:15', '2023-06-03 06:15:15'),
(10, 'PE00000002', 'Bagas', 'B4gaS', 'B4gaS', 'B4gaS@gmail.com', NULL, NULL, '2023-06-03 07:47:21', '2023-06-03 07:47:21'),
(12, 'PE00000003', 'Agung', '4guNg', '4guNg4guNg', '4guNg@gmail.com', NULL, NULL, '2023-06-03 07:48:14', '2023-06-03 07:48:14'),
(13, 'PE00000004', 'Robi', 'ObiR', 'obir', 'ObiR@gmail.com', NULL, NULL, '2023-06-03 07:48:47', '2023-06-03 07:48:47'),
(14, 'PE00000005', 'Aria', '4aRia', '4aRia', '4aRia@gmail.com', NULL, NULL, '2023-06-03 07:49:24', '2023-06-03 07:49:24'),
(15, 'PE00000006', 'Vianto', 'Vian', 'anto', 'Vivan@gmail.com', NULL, NULL, NULL, NULL),
(16, 'PE00000007', 'Dimas', 'dim', 'dimm', 'dimas@gmail.com', NULL, NULL, NULL, NULL),
(17, 'PE0000010K', 'Putra', 'put', 'putra', 'putra@gmail.com', NULL, NULL, '2023-06-03 10:23:01', '2023-06-03 10:23:01'),
(19, 'PE0000011K', 'Sasmanto', 'sasmanto', 'sasmanto', 'sasmanto@gmail.com', NULL, NULL, '2023-06-04 06:45:31', '2023-06-04 06:45:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penukaran_poins`
--

CREATE TABLE `penukaran_poins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `poin_id` bigint(20) UNSIGNED NOT NULL,
  `id_penukaranpoin` varchar(6) NOT NULL,
  `bayarpoin` bigint(20) NOT NULL,
  `diskon` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penukaran_poins`
--

INSERT INTO `penukaran_poins` (`id`, `poin_id`, `id_penukaranpoin`, `bayarpoin`, `diskon`, `created_at`, `updated_at`) VALUES
(2, 1, 'PP0001', 10000, 10000, '2023-06-01 07:03:51', '2023-06-01 07:03:51'),
(3, 1, 'PP0002', 15000, 20000, '2023-06-01 07:04:13', '2023-06-01 07:04:13'),
(4, 1, 'PP0003', 1000, 1000, '2023-06-03 10:32:41', '2023-06-03 10:32:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `poins`
--

CREATE TABLE `poins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_poin` varchar(3) NOT NULL,
  `syaratPoin` bigint(20) NOT NULL,
  `peringkat` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `poins`
--

INSERT INTO `poins` (`id`, `id_poin`, `syaratPoin`, `peringkat`, `created_at`, `updated_at`) VALUES
(1, 'BRZ', 10000, 'Bronze', '2023-05-28 03:19:08', '2023-05-31 01:24:40'),
(2, 'SL1', 50000, 'Silver', '2023-05-28 03:19:25', '2023-05-28 03:19:25'),
(3, 'GL1', 100000, 'Gold', '2023-05-28 03:19:40', '2023-05-28 03:19:40'),
(7, 'BBB', 1, 'Biasa', '2023-06-04 05:31:47', '2023-06-04 05:31:48'),
(8, 'PL9', 10000000, 'Platinum', '2023-06-04 06:52:07', '2023-06-04 06:52:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `r_transaksi_members`
--

CREATE TABLE `r_transaksi_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `jenistransaksi_id` bigint(20) UNSIGNED NOT NULL,
  `karyawan_id` bigint(20) UNSIGNED NOT NULL,
  `jasa_id` bigint(20) UNSIGNED NOT NULL,
  `penukaran_id` bigint(20) UNSIGNED DEFAULT NULL,
  `id_transaksiM` varchar(10) NOT NULL,
  `berat` bigint(20) NOT NULL,
  `total_bayar` bigint(20) NOT NULL,
  `pembayaran` bigint(20) NOT NULL,
  `kembalian` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `r_transaksi_members`
--

INSERT INTO `r_transaksi_members` (`id`, `member_id`, `jenistransaksi_id`, `karyawan_id`, `jasa_id`, `penukaran_id`, `id_transaksiM`, `berat`, `total_bayar`, `pembayaran`, `kembalian`, `date`, `created_at`, `updated_at`) VALUES
(2, 1, 7, 2, 13, 2, 'TM00000001', 2, 10000, 20000, 10000, '2023-06-04', '2023-06-04 06:56:25', '2023-06-04 06:57:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `r_transaksi_pelanggans`
--

CREATE TABLE `r_transaksi_pelanggans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pelanggan_id` bigint(20) UNSIGNED NOT NULL,
  `jenistransaksi_id` bigint(20) UNSIGNED NOT NULL,
  `karyawan_id` bigint(20) UNSIGNED NOT NULL,
  `jasa_id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksiP` varchar(10) NOT NULL,
  `berat` bigint(20) NOT NULL,
  `total_bayar` bigint(20) NOT NULL,
  `pembayaran` bigint(20) NOT NULL,
  `kembalian` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `r_transaksi_pelanggans`
--

INSERT INTO `r_transaksi_pelanggans` (`id`, `pelanggan_id`, `jenistransaksi_id`, `karyawan_id`, `jasa_id`, `id_transaksiP`, `berat`, `total_bayar`, `pembayaran`, `kembalian`, `date`, `created_at`, `updated_at`) VALUES
(4, 1, 7, 5, 13, 'TP00000002', 10, 50000, 100000, 50000, '2023-06-04', '2023-06-04 06:58:33', '2023-06-04 06:58:59'),
(5, 3, 7, 2, 13, 'TP00000001', 5, 25000, 30000, 5000, '2023-06-04', '2023-06-04 07:00:19', '2023-06-04 07:00:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran_kritiks`
--

CREATE TABLE `saran_kritiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengguna_id` bigint(20) UNSIGNED NOT NULL,
  `id_saran` varchar(8) NOT NULL,
  `saran` text NOT NULL,
  `kritik` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `saran_kritiks`
--

INSERT INTO `saran_kritiks` (`id`, `pengguna_id`, `id_saran`, `saran`, `kritik`, `created_at`, `updated_at`) VALUES
(6, 13, 'S0000002', 'Lebih baik tampilan website diperbagus lagi', '---', '2023-06-04 06:51:02', '2023-06-04 06:51:15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `distributors`
--
ALTER TABLE `distributors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_distributor` (`id_distributor`);

--
-- Indeks untuk tabel `jasas`
--
ALTER TABLE `jasas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jasas_barang_id_foreign` (`barang_id`);

--
-- Indeks untuk tabel `jenis_transaksis`
--
ALTER TABLE `jenis_transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawans`
--
ALTER TABLE `karyawans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `karyawans_pengguna_id_foreign` (`pengguna_id`);

--
-- Indeks untuk tabel `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `members_pengguna_id_foreign` (`pengguna_id`),
  ADD KEY `members_peringkatm_id_foreign` (`peringkatM_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penggunas`
--
ALTER TABLE `penggunas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `penukaran_poins`
--
ALTER TABLE `penukaran_poins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penukaran_poins_poin_id_foreign` (`poin_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `poins`
--
ALTER TABLE `poins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `r_transaksi_members`
--
ALTER TABLE `r_transaksi_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `r_transaksi_members_member_id_foreign` (`member_id`),
  ADD KEY `r_transaksi_members_jenistransaksi_id_foreign` (`jenistransaksi_id`),
  ADD KEY `r_transaksi_members_karyawan_id_foreign` (`karyawan_id`),
  ADD KEY `r_transaksi_members_jasa_id_foreign` (`jasa_id`),
  ADD KEY `r_transaksi_members_penukaran_id_foreign` (`penukaran_id`);

--
-- Indeks untuk tabel `r_transaksi_pelanggans`
--
ALTER TABLE `r_transaksi_pelanggans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `r_transaksi_pelanggans_pelanggan_id_foreign` (`pelanggan_id`),
  ADD KEY `r_transaksi_pelanggans_jenistransaksi_id_foreign` (`jenistransaksi_id`),
  ADD KEY `r_transaksi_pelanggans_karyawan_id_foreign` (`karyawan_id`),
  ADD KEY `r_transaksi_pelanggans_jasa_id_foreign` (`jasa_id`);

--
-- Indeks untuk tabel `saran_kritiks`
--
ALTER TABLE `saran_kritiks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saran_kritiks_pengguna_id_foreign` (`pengguna_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `distributors`
--
ALTER TABLE `distributors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jasas`
--
ALTER TABLE `jasas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `jenis_transaksis`
--
ALTER TABLE `jenis_transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `penggunas`
--
ALTER TABLE `penggunas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `penukaran_poins`
--
ALTER TABLE `penukaran_poins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `poins`
--
ALTER TABLE `poins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `r_transaksi_members`
--
ALTER TABLE `r_transaksi_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `r_transaksi_pelanggans`
--
ALTER TABLE `r_transaksi_pelanggans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `saran_kritiks`
--
ALTER TABLE `saran_kritiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jasas`
--
ALTER TABLE `jasas`
  ADD CONSTRAINT `jasas_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `barangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `karyawans`
--
ALTER TABLE `karyawans`
  ADD CONSTRAINT `karyawans_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `penggunas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `penggunas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `members_peringkatm_id_foreign` FOREIGN KEY (`peringkatM_id`) REFERENCES `poins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penukaran_poins`
--
ALTER TABLE `penukaran_poins`
  ADD CONSTRAINT `penukaran_poins_poin_id_foreign` FOREIGN KEY (`poin_id`) REFERENCES `poins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `r_transaksi_members`
--
ALTER TABLE `r_transaksi_members`
  ADD CONSTRAINT `r_transaksi_members_jasa_id_foreign` FOREIGN KEY (`jasa_id`) REFERENCES `jasas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_transaksi_members_jenistransaksi_id_foreign` FOREIGN KEY (`jenistransaksi_id`) REFERENCES `jenis_transaksis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_transaksi_members_karyawan_id_foreign` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_transaksi_members_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_transaksi_members_penukaran_id_foreign` FOREIGN KEY (`penukaran_id`) REFERENCES `penukaran_poins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `r_transaksi_pelanggans`
--
ALTER TABLE `r_transaksi_pelanggans`
  ADD CONSTRAINT `r_transaksi_pelanggans_jasa_id_foreign` FOREIGN KEY (`jasa_id`) REFERENCES `jasas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_transaksi_pelanggans_jenistransaksi_id_foreign` FOREIGN KEY (`jenistransaksi_id`) REFERENCES `jenis_transaksis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_transaksi_pelanggans_karyawan_id_foreign` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_transaksi_pelanggans_pelanggan_id_foreign` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `saran_kritiks`
--
ALTER TABLE `saran_kritiks`
  ADD CONSTRAINT `saran_kritiks_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `penggunas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
