-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Agu 2024 pada 04.57
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sijteti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akreditasiti`
--

CREATE TABLE `akreditasiti` (
  `id` bigint UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_akreditasi` date NOT NULL,
  `masa_berlaku` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `akreditasiti`
--

INSERT INTO `akreditasiti` (`id`, `foto`, `tanggal_akreditasi`, `masa_berlaku`, `created_at`, `updated_at`) VALUES
(6, '1720151847.jpg', '2018-10-30', '2023-10-30', '2024-07-04 20:57:27', '2024-07-04 20:57:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akreditasitl`
--

CREATE TABLE `akreditasitl` (
  `id` bigint UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_akreditasi` date NOT NULL,
  `masa_berlaku` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritajurusan`
--

CREATE TABLE `beritajurusan` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritajurusan`
--

INSERT INTO `beritajurusan` (`id`, `judul`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(12, 'Direktur Politap bersama Kajur Teknik Informatika Berkunjung ke Yayasan Hasnur Centre Banjarmasin', '1720530955.jpg', 'Banjarmasin, 26 Oktober 2022 Direktur Politap bersama Kajur Teknik Informatika berkunjung ke Yayasan Hasnur Center Banjarmasin dalam rangka  meningkatkan kerjasama dan memonitoring mahasiswa yang mengikuti Program Magang dan Studi Independen Bersertifikat (MISB). mahasiswa yang mengikuti program ini adalah Deni Suryazi dari Prodi Teknologi Informasi.', '2024-07-09 06:15:55', '2024-07-09 06:15:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritapbl`
--

CREATE TABLE `beritapbl` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritapbl`
--

INSERT INTO `beritapbl` (`id`, `judul`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(3, 'Jurusan Teknik Informatika melakukan EXPO hasil kegiatan PBL', '1720482595.png', 'Dalam proses penilaian Ujian Akhir Semester sekaligus evaluasi metode pembelajaran Project/Product/Problem Based Learning (PBL) khususnya di Jurusan Teknik Informatika di Politap, maka digelar kegiatan PBL EXPO Jurusan Teknik Informatika Politap pada 26Juli 2022, di Aula Gedung Direktorat Politap. Kegiatan EXPO ini juga diikuti oleh Prodi Agroindustri dan Jurusan Teknik Elektro Politap dengan mengundang Instansi Pemerintah Daerah Ketapang dan Perusahaan Mitra yang ada dilingkungan POlitap.  Total PBL yang dipamerkan berjumlah 17, dengan 2 PBL dari External Politap (JNE, YAFRI ) dan 13 PBL Internal Politap , 1 produk dari TEFA Prodi Agrindustri dan 1 PBL Robotika dari Jurusan Teknik Elektro.', '2024-07-08 16:49:56', '2024-07-08 16:49:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritapenelitian`
--

CREATE TABLE `beritapenelitian` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritapenelitian`
--

INSERT INTO `beritapenelitian` (`id`, `judul`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Ullamco nihil verita', '1718458591.png', 'Enim voluptatum est ijfhu gwyf bfgfye iwbdhbfuef isdvdvf hvhebfuegfq[fquvf hbhefgef bfuebyeygfe', '2024-06-15 06:35:56', '2024-06-15 06:36:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritapengabdian`
--

CREATE TABLE `beritapengabdian` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritapengabdian`
--

INSERT INTO `beritapengabdian` (`id`, `judul`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Ut nisi sed ea excep', '1718460240.jpg', 'Incidunt exercitati', '2024-06-15 07:04:00', '2024-06-15 07:04:00'),
(2, 'Vel sit porro repell', '1719040108.png', 'Laudantium rerum au', '2024-06-22 00:08:28', '2024-06-22 00:08:28'),
(3, 'Et obcaecati ut adip', '1719040125.png', 'Est corporis quos co', '2024-06-22 00:08:45', '2024-06-22 00:08:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosenti`
--

CREATE TABLE `dosenti` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keahlian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosenti`
--

INSERT INTO `dosenti` (`id`, `nama`, `email`, `nip`, `foto`, `keahlian`, `jabatan`, `created_at`, `updated_at`) VALUES
(5, 'Darmanto, M.Kom', 'darmanto@politap.ac.id', '199107042019031015', '1720012326.jpg', 'Sistem Informasi', 'Dosen', '2024-07-03 06:12:06', '2024-07-03 07:17:32'),
(6, 'Refid Ruhibnur, S.ST., M.M.', 'refidruhibnur@politap.ac.id', '198205212021211003', '1720012830.jpg', 'Manajemen', 'Dosen', '2024-07-03 06:20:30', '2024-07-03 07:17:10'),
(7, 'Ar-Razy Muhammad, S.T', 'ar-razy.muhammad@politap.ac.id', '19930128201609210', '1720013084.jpg', 'Web Development', 'Dosen', '2024-07-03 06:24:44', '2024-07-03 07:16:28'),
(10, 'Rizqia Lestika Atimi, S.T., M.T', 'rizqia.lestika@politap.ac.id', '198911092018032001', '1720013449.jpg', 'Rekayasa Perangkat Lunak', 'Dosen', '2024-07-03 06:30:49', '2024-07-03 06:30:49'),
(11, 'Eka Wahyudi, S.Pd., M.Cs', 'eka.wahyudi@politap.ac.id', '198701142019031007', '1720013765.jpg', 'AI, Database Arsitektur', 'Dosen', '2024-07-03 06:36:05', '2024-07-10 20:37:22'),
(12, 'Pusparini Akhmad, S.Si', 'puspariniakhmad@politap.ac.id', '19910127201509166', '1720013829.jpg', 'Pendidikan Matematika', 'Dosen', '2024-07-03 06:37:09', '2024-07-03 06:37:09'),
(13, 'Kharisma, S.Kom,. M.Kom', 'kharismayuda@politap.ac.id', '199102192022031009', '1720013986.png', 'Sistem Informasi, SIG', 'Dosen', '2024-07-03 06:39:46', '2024-07-10 20:39:27'),
(14, 'Indra Pratiwi, S.Pd., M.Pd', 'indra.pratiwi@politap.ac.id', '19890424201509165', '1720014057.jpg', 'Pendidikan Bahasa Inggris', 'Dosen', '2024-07-03 06:40:57', '2024-07-03 06:40:57'),
(15, 'Saifudin Usman, S.T., M.Tr.Kom', 'saifudinu@politap.ac.id', '19820623 201509 169', '1720014100.jpg', 'Network Designer and Administrator', 'Dosen', '2024-07-03 06:41:40', '2024-07-03 06:41:40'),
(16, 'Novi Indah Pradasari, S.Kom., M.Kom', 'novi.ip@politap.ac.id', '199011112019032018', '1720618834.jpg', 'Kecerdasan Buatan, System Analyst', 'Dosen', '2024-07-10 06:40:34', '2024-07-10 06:40:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosentl`
--

CREATE TABLE `dosentl` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keahlian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosentl`
--

INSERT INTO `dosentl` (`id`, `nama`, `email`, `nip`, `foto`, `keahlian`, `jabatan`, `created_at`, `updated_at`) VALUES
(2, 'Est excepteur fugit', '', 'Iure quis aut libero', '1718864493.png', 'Labore doloremque ut', 'Velit unde tempora', '2024-06-19 23:21:34', '2024-06-19 23:21:34'),
(3, 'Laborum Magn gygyl', 'zimovycafy@mailinator.com', 'Suscipit eveniet eo', '1719910344.jpg', 'Sapiente debitis ill', 'Totam suscipit anim', '2024-07-02 01:52:24', '2024-07-09 06:41:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatanmahasiswa`
--

CREATE TABLE `kegiatanmahasiswa` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kegiatanmahasiswa`
--

INSERT INTO `kegiatanmahasiswa` (`id`, `judul`, `foto`, `created_at`, `updated_at`) VALUES
(8, 'project base learning', '1719044034.jpg', '2024-06-22 01:13:54', '2024-06-22 01:13:54'),
(12, 'praktikum alat ukur dan pengukuran listrik', '1720481230.jpg', '2024-07-08 16:27:10', '2024-07-08 16:27:10'),
(13, 'politap robotic community (procom)', '1720481290.jpg', '2024-07-08 16:28:10', '2024-07-08 16:28:10'),
(14, 'praktikum perancangan listrik', '1720481330.jpg', '2024-07-08 16:28:50', '2024-07-08 16:28:50'),
(15, 'praktikum instalasi listrik tenaga', '1720481539.jpg', '2024-07-08 16:29:17', '2024-07-08 16:32:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laboratorium`
--

CREATE TABLE `laboratorium` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `laboratorium`
--

INSERT INTO `laboratorium` (`id`, `nama`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(3, 'Laboratorium Pemrograman', '1720017086.jpg', 'Laboratorium Pemrograman memiliki ukuran 8 m x 13 m serta ditunjang dengan fasilitas pendukung komputer dengan spesifikasi cukup tinggi. Fasilitas tersebut sebagai sarana mahasiswa dan dosen untuk melakukan kegiatan praktikum, perkuliahan, project based learning, penelitian, dan pengabdian masyarakat. Adapun fasilitas dan spesifikasi pada ruang laboratorium ini adalah sebagai berikut: 1.  PC All In One sebanyak 12 Unit; Spesifikasi Intel Core I9 ; Ram 8.00 Gb 2.  Software berlisensi resmi Microsoft (Windows 11 Pro) 3.  LCD Projektor 4.  Pendingin Ruangan (AC) 5.  Local Area Network (LAN) 6.  Akses Internet (Wifi) 7.  Box Obat-obatan', '2024-07-03 07:31:26', '2024-07-03 07:31:26'),
(4, 'Laboratorium Multimedia', '1720017460.jpg', 'Laboratorium Multimedia memiliki ukuran 8 m x 8 m serta ditunjang dengan fasilitas pendukung komputer dengan spesifikasi cukup tinggi. Fasilitas tersebut sebagai sarana mahasiswa dan dosen untuk melakukan kegiatan praktikum, perkuliahan, project based learning, penelitian, dan pengabdian masyarakat. Adapun fasilitas dan spesifikasi pada ruang laboratorium ini adalah sebagai berikut: 1.  Personal Computer (PC) sebanyak 20 Unit; Spesifikasi Intel Core I5 ; Ram 12.00 Gb 2.  Software berlisensi resmi Microsoft (Windows 11 Pro) 3.  LCD Projektor 4.  Pendingin Ruangan (AC) 5.  Local Area Network (LAN) 6.  Akses Internet (Wifi) 7.  Box Obat-obatan', '2024-07-03 07:37:40', '2024-07-03 07:37:40'),
(9, 'Laboratorium Rekayasa Perangkat Lunak', '1720020342.jpg', 'Laboratorium Rekayasa Perangkat Lunak memiliki ukuran 8 m x 13 m serta ditunjang dengan fasilitas pendukung yang lengkap dan memiliki perangkat utama komputer dengan spesifikasi cukup tinggi. Fasilitas tersebut sebagai sarana mahasiswa dan dosen untuk melakukan kegiatan praktikum, perkuliahan, project based learning, penelitian, dan pengabdian masyarakat. Adapun fasilitas dan spesifikasi pada ruang laboratorium ini adalah sebagai berikut : 1.  Personal Computer (PC) sebanyak 32 Unit; Spesifikasi Intel Core I5 ; Ram 4.00 Gb 2.  Software berlisensi resmi Microsoft (Windows 10 Pro) 3.  LCD Projektor 4.  Pendingin Ruangan (AC) 5.  Local Area Network (LAN) 6.  Akses Internet (Wifi) 7.  Box Obat-obatan', '2024-07-03 08:25:42', '2024-07-03 08:25:42'),
(10, 'Workspace Project Based Learning 2', '1720074817.jpg', 'Workpace Project Based Learning 2 memiliki ukuran 8 m x 8 m serta ditunjang dengan fasilitas pendukung monitor 27 inch. Fasilitas tersebut sebagai sarana mahasiswa dan dosen untuk melakukan kegiatan praktikum, project based learning, penelitian, dan pengabdian masyarakat. Adapun fasilitas dan spesifikasi pada ruang workpace ini adalah sebagai berikut: 1.  PC All In One sebanyak 2 Unit; Spesifikasi Intel Core I9 ; Ram 8.00 Gb 2.  Software berlisensi resmi Microsoft (Windows 11 Pro) 3.  Monitor 27 Inch 6 Unit 4.  LCD Projektor 5.  Pendingin Ruangan (AC) 6.  Local Area Network (LAN) 7.  Akses Internet (Wifi) 8.  Box Obat-obatan', '2024-07-03 23:33:37', '2024-07-03 23:33:37'),
(11, 'Workspace Project Based Learning 1', '1720075466.jpg', 'Workpace Project Based Learning 1 memiliki ukuran 8 m x 13 m serta ditunjang dengan fasilitas pendukung komputer dengan spesifikasi cukup tinggi dan monitor 27 inch. Fasilitas tersebut sebagai sarana mahasiswa dan dosen untuk melakukan kegiatan praktikum, project based learning, penelitian, dan pengabdian masyarakat. Adapun fasilitas dan spesifikasi pada ruang workpace ini adalah sebagai berikut: 1.  PC All In One sebanyak 6 Unit; Spesifikasi Intel Core I9 ; Ram 8.00 Gb 2.  Software berlisensi resmi Microsoft (Windows 11 Pro) 3.  Monitor 27 Inch 6 Unit 4.  LCD Projektor 5.  Pendingin Ruangan (AC) 6.  Local Area Network (LAN) 7.  Akses Internet (Wifi) 8.  Box Obat-obatan', '2024-07-03 23:44:26', '2024-07-03 23:44:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2024_06_11_071733_create_pimpinan_table', 2),
(14, '2024_06_11_074645_create_pimpinan_table', 3),
(15, '2024_06_11_075731_create_pimpinan_table', 4),
(16, '2024_06_11_130113_create_visitis_table', 5),
(17, '2024_06_11_132132_create_visitls_table', 5),
(18, '2024_06_11_133313_create_dosentis_table', 5),
(19, '2024_06_12_074256_create_dosentls_table', 6),
(20, '2024_06_12_080238_create_teknisitis_table', 7),
(21, '2024_06_12_082752_create_teknisitis_table', 8),
(22, '2024_06_12_124106_create_teknisitls_table', 9),
(23, '2024_06_12_131808_create_laboratoria_table', 10),
(24, '2024_06_12_135538_create_ruangkelas_table', 11),
(25, '2024_06_12_141852_create_ruangmanajemens_table', 12),
(26, '2024_06_12_142539_create_ruangmanajemens_table', 13),
(27, '2024_06_13_031401_create_akreditasitis_table', 14),
(28, '2024_06_14_030304_create_akreditasitls_table', 15),
(29, '2024_06_14_072253_create_beritajurusans_table', 16),
(30, '2024_06_15_132430_create_beritapenelitians_table', 17),
(31, '2024_06_15_135422_create_beritapengabdians_table', 18),
(32, '2024_06_15_140659_create_beritapbls_table', 19),
(33, '2024_06_15_144545_create_kegiatanmahasiswas_table', 20),
(34, '2024_06_15_160902_alter_visiti_table_change_visi_and_misi_to_text', 21),
(35, '2024_06_15_162409_alter_visitl_table_change_visi_and_misi_to_text', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pimpinan`
--

CREATE TABLE `pimpinan` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pimpinan`
--

INSERT INTO `pimpinan` (`id`, `nama`, `nip`, `foto`, `nik`, `jabatan`, `created_at`, `updated_at`) VALUES
(15, 'Yudi Chandra, S.ST., M.T', '198609232019031005', '1720536511.jpg', '16118 0108 073', 'Ketua Jurusan', '2024-07-09 07:48:31', '2024-07-09 07:48:31'),
(16, 'Novi Indah Pradasari, S.Kom., M.Kom', '199011112019032018', '1720536557.jpg', '16118 1016 212', 'Sekretaris Jurusan', '2024-07-09 07:49:17', '2024-07-09 07:49:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangkelas`
--

CREATE TABLE `ruangkelas` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ruangkelas`
--

INSERT INTO `ruangkelas` (`id`, `nama`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(4, 'Ruang Perkuliahan Teknologi Informasi Semester IA/IIA', '1720063425.jpg', 'Ruangan ini digunakan untuk perkuliahan teori atau responsi untuk mahasiswa semester IA atau IIA dengan kapasitas 32 meja mahasiswa, 32 kursi mahasiswa, 1 meja dosen dan 1 kursi dosen. Setiap ruang perkuliahan dilengkapi dengan kursi untuk mahasiswa, meja dan kursi untuk dosen, dan proyektor yang telah terpasang pada dak plafon.', '2024-07-03 20:23:45', '2024-07-09 19:45:32'),
(5, 'Ruang Perkuliahan Teknologi Informasi Semester IB/IIB', '1720064488.jpg', 'Ruangan ini digunakan untuk perkuliahan teori atau responsi untuk mahasiswa semester IB atau IIB dengan kapasitas 32 meja mahasiswa, 32 kursi mahasiswa, 1 meja dosen dan 1 kursi dosen. Setiap ruang perkuliahan dilengkapi dengan kursi untuk mahasiswa, meja dan kursi untuk dosen, dan proyektor yang telah terpasang pada dak plafon.', '2024-07-03 20:41:28', '2024-07-09 19:46:05'),
(6, 'Ruang Perkuliahan Teknologi Informasi Semester IIIA/IVA', '1720064543.jpg', 'Ruangan ini digunakan untuk perkuliahan teori atau responsi untuk mahasiswa semester IIIA atau IVA dengan kapasitas 30 meja mahasiswa, 30 kursi mahasiswa, 1 meja dosen dan 1 kursi dosen. Setiap ruang perkuliahan dilengkapi dengan kursi untuk mahasiswa, meja dan kursi untuk dosen, dan proyektor yang telah terpasang pada dak plafon.', '2024-07-03 20:42:23', '2024-07-09 19:46:22'),
(7, 'Ruang Perkuliahan Teknologi Informasi Semester IIIB/IVB', '1720064583.jpg', 'Ruangan ini digunakan untuk perkuliahan teori atau responsi untuk mahasiswa semester IIIA atau IVA dengan kapasitas 30 kursi meja mahasiswa, 1 meja dosen dan 1 kursi dosen. Setiap ruang perkuliahan dilengkapi dengan kursi untuk mahasiswa, meja dan kursi untuk dosen, dan proyektor yang telah terpasang pada dak plafon.', '2024-07-03 20:43:03', '2024-07-09 19:46:44'),
(8, 'Ruang Perkuliahan Teknologi Informasi Semester VA/VIA', '1720064623.jpg', 'Ruangan ini digunakan untuk perkuliahan teori atau responsi untuk mahasiswa semester VA atau VIA dengan kapasitas 30 meja mahasiswa, 30 kursi mahasiswa, 1 meja dosen dan 1 kursi dosen. Setiap ruang perkuliahan dilengkapi dengan kursi untuk mahasiswa, meja dan kursi untuk dosen, dan proyektor yang telah terpasang pada dak plafon.', '2024-07-03 20:43:43', '2024-07-09 19:47:07'),
(9, 'Ruang Perkuliahan Teknologi Informasi Semester VB/VIB', '1720064672.jpg', 'Ruangan ini digunakan untuk perkuliahan teori atau responsi untuk mahasiswa semester VB atau VIB dengan kapasitas 30 meja mahasiswa, 30 kursi mahasiswa, 1 meja dosen dan 1 kursi dosen. Setiap ruang perkuliahan dilengkapi dengan kursi untuk mahasiswa, meja dan kursi untuk dosen, dan proyektor yang telah terpasang pada dak plafon.', '2024-07-03 20:44:32', '2024-07-09 19:47:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangmanajemen`
--

CREATE TABLE `ruangmanajemen` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ruangmanajemen`
--

INSERT INTO `ruangmanajemen` (`id`, `nama`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(3, 'Ruang Ketua Jurusan Teknik Informatika', '1720065094.jpg', 'Ruang Ketua Jurusan Teknik Informatika terletak di lantai 3 Gedung Laboratorium Terpadu dengan luas 10,32 m2 yang digunakan sebagai pelayanan terhadap Mitra dan civitas akademika Politeknik Negeri Ketapang.  Selain itu juga sebagai ruang untuk menjalankan tugas sebagai ketua jurusan dalam menyusun rencana dan mengevaluasi pelaksanaan Tri Dharma yang dilaksanakan oleh Dosen, Teknisi, Staf Admin dan Mahasiswa dilingkungan Jurusan.', '2024-07-03 20:51:34', '2024-07-03 20:51:34'),
(4, 'Ruang Sekretaris Jurusan Teknik Informatika', '1720067037.jpg', 'Ruang Sekretaris Jurusan Teknik Informatika terletak di lantai 3 Gedung Laboratorium Terpadu dengan luas 10,40 m2 yang digunakan sebagai pelayanan terhadap Mitra dan civitas akademika Politeknik Negeri Ketapang.  Selain itu juga sebagai ruang untuk menjalankan tugas sebagai sekretaris jurusan dalam Melaksanakan kegiatan administratif dan kesekretariatan jurusan dalam menunjang pelaksanaan Tri Dharma dilingkungan Jurusan.', '2024-07-03 21:23:57', '2024-07-03 21:23:57'),
(5, 'Ruang Koordinator Prodi Teknologi Informasi', '1720068307.jpg', 'Ruang Koordinator Prodi Teknologi Informasi terletak di lantai 3 Gedung Laboratorium Terpadu dengan luas 9,38 m2 yang digunakan Koordinator Prodi Teknologi Informasi untuk menjalankan membantu tugas ketua jurusan dalam pelaksanaan pelaksanaan peningkatan mutu akademik, penelitian, dan pengabdian kepada masyarakat (Tri Dharma Perguruan Tinggi) pada tingkat Program Studi.', '2024-07-03 21:45:07', '2024-07-03 21:45:07'),
(6, 'Ruang Administrasi Prodi', '1720068421.jpg', 'Ruang Administrasi Prodi Teknologi Informasi terletak di lantai 3 Gedung Laboratorium Terpadu dengan luas 16,38 m2 yang digunakan Staf Administrasi Prodi dalam mengkoordinir dan melaksanakan administrasi pendidikan di tingkat jurusan dan membantu sekretaris jurusan dan coordinator program studi dalam melaksanakan kegiatan administratif dan kesekretariatan prodi atau jurusan.', '2024-07-03 21:47:01', '2024-07-03 21:47:01'),
(7, 'Ruang Perpustakaan Jurusan', '1720068485.jpg', 'Keberadaan Perpustakaan dalam satuan pendidikan perguruan tinggi, Eksistensinya adalah sebagai komponen penunjang Tri Dharma Perguruan Tinggi dengan menyediakan bahan informasi berbagai bidang keilmuan untuk dimanfaatkan oleh mahasiswa, dosen, tenaga kependidikan dan pihak dari luar baik dengan tujuan akademis atau hiburan.   Perpustakaan Jurusan Teknik Informatika merupakan salah satu komponen penunjang dalam proses pendidikan yang terjadi dilingkungan Fakultas Tekni Jurusan Teknik Informatika dalam upaya mencetak lulusan-lulusan yang berkualitas. Sebagai pusat sumber informasi, perpustakaan mempunyai posisi penting untuk keberhasilan belajar mahasiswa. Hal ini merujuk pada hakikat perpustakaan sebagai tempat yang menyediakan koleksi bahan cetak maupun non cetak untuk dimanfaatkan dalam proses perkuliahan sehingga perannya menjadi sumber belajar bagi mahasiswa. Perpustakaan dinilai memiliki manfaat jika dilihat dari banyaknya kunjungan mahasiswa baik untuk melakukan peminjaman koleksi bahan pustaka, membaca di tempat atau bahkan digunakan dalam mengerjakan tugas dan berdiskusi dalam perpustakaan.  Peran Perpustakaan Jurusan Teknik Informatika pada perguruan tinggi memang memberi kemudahan bagi mahasiswa dalam proses pembelajaran. Tetapi, ada manfaat lain dari keberadaan perpustakaan tersebut bagi mahasiswa.  1. Menambah Wawasan  Keberadaan perpustakaan bagi mahasiswa adalah dapat menambah wawasan, bukan berarti wawasan akan bertambah hanya karena adanya perpustakaan. Tetapi perpustakaan tersebut dikunjungi dan buku-buku yang ada dibaca, baru deh menambah wawasan. Karena belajar pada jam mata kuliah saja tidak cukup untuk menunjang pengetahuan dan wawasan kita. Selain materi yang terbatas, waktu atau proses perkuliahan tersebut juga terbatas. So, dari membaca inilah kita dapat menambah pengetahuan dan wawasan.  2. Mengisi Waktu Luang  Di kampus biasanya ada jam istirahat. Nah, jam istirahat tersebut merupakan waktu luang yang dapat diisi dengan membaca di perpustakaan, mencari ide baru melalui buku-buku yang ada. Daripada sobat mondar-mandir nggak jelas, mendingan ke perpustakaan.  3. Referensi Tugas  Mahasiswa sudah barang pasti sering sekali dihadapkan dengan tugas-tugas kampus seperti makalah. Nah, dengan adanya perpustakaan, kita tidak repot-repot beli buku hanya untuk mencari referensi untuk tugas yang kita kerjakan. Cukup datang ke perpustakaan dan temukan buku yang dimaksud. Jangan selalu Copy Paste dari internet.', '2024-07-03 21:48:05', '2024-07-03 21:48:05'),
(8, 'Ruang Rapat Jurusan', '1720069116.jpg', 'Ruang rapat jurusan merupakan salah satu tempat yang sangat penting di Jurusan Teknik Informatika Politeknik Negeri Ketapang. Di ruangan inilah biasanya berbagai acara atau kegiatan resmi diselenggarakan. Misalnya kegiatan sosialisasi manajemen jurusan, pertemuan dengan manajemen Politeknik Negeri Ketapang, rapat jurusan, dan lain-lain. Ruangan ini terletak di ruangan jurusan Teknik Informatika. Sebagai ruang pertemuan atau rapat, ruangan ini dilengkapi dengan berbagai fasilitas pendukung seperti LED TV 60 Inch, AC, dan tentunya meja dan kursi yang tersusun dengan rapi. Selain itu ruang rapat juga dapat digunakan sebagai:  1. Diskusi  Diskusi adalah hal mendasar dalam membangun dan menjaga hubungan antar rekan kerja. Diskusi mengharuskan individu-individu dalam sebuah tim membuka diri dengan yang lainnya. Hasilnya individu dalam tim kerja tersebut akan lebih peduli satu dengan lainnya, mengurangi depresi individu, dan lebih produktif dalam bekerja.   2. Workshop  Dalam hal ini, workshop bermaksud untuk memberikan tambahan kemampuan lewat aktivitas dan kegiatan yang dilakukan secara bersama-sama. Workshop bisa memberikan kemampuan secara hard skill atau soft skill. Hal ini berdampak mengurangi kejenuhan rekan-rekan kerja atas rutinitas kerjanya serta menambah wawasan dan kemampuan setiap orang.   3. Brainstorming  Brainstorming dilakukan dengan tujuan untuk menghasilkan ide yang solutif, tepat, dan bermanfaat dalam menghadapi sebuah permasalahan. Dalam menghasilkan ide tersebut perlu pemikiran-pemikiran yang diutarakan oleh tiap individu dalam sebuah cara pandang baru dalam memandang sebuah persoalan atau permasalahan. Ruang rapat yang nyaman akan mendukung proses brainstorming tersebut terjadi dengan efektif.', '2024-07-03 21:58:36', '2024-07-03 21:58:36'),
(9, 'Ruang Dosen', '1720069166.jpg', 'Ruang dosen Jurusan Teknik Informatika terletak di lantai 3 Gedung Laboratorium Terpadu Politeknik Negeri Ketapang dengan luas 30,50 m2.  Ruang dosen berfungsi sebagai ruang kerja para dosen. Ruang ini dilengkapi dengan meja kerja dan kursi yang biasanya dimanfaatkan oleh dosen dan mahasiswa untuk sara diskusi/konsultasi.   Dengan Ruang dosen yang nyaman, dosen dapat memberikan pengarahan (asistensi) kepada mahasiswa di ruangan tersebut.', '2024-07-03 21:59:26', '2024-07-03 21:59:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknisiti`
--

CREATE TABLE `teknisiti` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keahlian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `teknisiti`
--

INSERT INTO `teknisiti` (`id`, `nama`, `email`, `nip`, `foto`, `keahlian`, `jabatan`, `created_at`, `updated_at`) VALUES
(2, 'Rosi Arrasyid, A.Md', 'rossiarrasyid@politap.ac.id', '19861109 201903 1 005', '1720014259.jpg', 'Manajemen Komputer', 'Teknisi', '2024-07-03 06:44:19', '2024-07-03 06:44:19'),
(3, 'Junaidi, A.Md.Kom', 'junaidi@politap.ac.id', '19980609 202104 252', '1720014966.png', 'Web Development', 'Teknisi', '2024-07-03 06:48:19', '2024-07-03 06:56:06'),
(4, 'Muhammad Rizal, A.Md', 'muhammad.rizal@politap.ac.id', '19830501 202121 1 002', '1720014533.jpg', 'Teknik Mesin', 'Teknisi', '2024-07-03 06:48:53', '2024-07-03 06:48:53'),
(5, 'Wahyu Iswanto, A.Md', 'wahyuiswanto@politap.ac.id', '19901203 202121 1 001', '1720014567.jpg', 'Teknik Mesin', 'Teknisi', '2024-07-03 06:49:27', '2024-07-03 06:49:27'),
(6, 'Muhammad Juni Rian Effendi, A.Md.Kom', 'junirian21@gmail.com', '19960628 202203 1 015', '1720014616.jpg', 'Teknik Informatika', 'Teknisi', '2024-07-03 06:50:16', '2024-07-03 06:50:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknisitl`
--

CREATE TABLE `teknisitl` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keahlian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `teknisitl`
--

INSERT INTO `teknisitl` (`id`, `nama`, `email`, `nip`, `foto`, `keahlian`, `jabatan`, `created_at`, `updated_at`) VALUES
(2, 'Aute rem qui fuga U', 'destaa@gmail.com', 'Aut quibusdam illum', '1718765552.jpg', 'ugyfyf', 'Teknisi', '2024-06-18 19:52:32', '2024-07-02 21:53:02'),
(3, 'Omnis optio enim fa', 'wocyvad@mailinator.com', 'Aut facere dolores q', '1720014341.jpg', 'Dolores dolore omnis', 'Qui necessitatibus e', '2024-07-03 06:45:41', '2024-07-03 06:45:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Desta Safitri', 'desta@email.com', NULL, '$2y$12$ZSJuVCExCSJT84RGfABqKOcQ6IgTmqI443yqTrVJb/gkTW6QZIKnS', NULL, '2024-06-29 07:03:24', '2024-06-29 07:03:24'),
(5, 'Britanney Tyler', 'bymiaaaaaaame@aaaaaa.com', NULL, '$2y$12$m0JJ7FHfEF.j7edgsTaIf.BOs6gkHZYI09ODcp7U.dQjkiHkJsMLW', NULL, '2024-07-01 23:37:43', '2024-07-01 23:45:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visiti`
--

CREATE TABLE `visiti` (
  `id` bigint UNSIGNED NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visiti`
--

INSERT INTO `visiti` (`id`, `visi`, `misi`, `created_at`, `updated_at`) VALUES
(1, '“menjadi Program Studi terdepan, unggul dan menjadi andalan Kalimantan Barat dalam menghasilkan sumber daya manusia bidang keahlian teknik informatika untuk dunia industri jasa dan bisnis dalam memanfaatkan peluang dan menghadapi tantangan persaingan global”.', '\"Menyiapkan lulusan di bidang sistem informasi yang mampu memasuki tantangan dan peluang kerja yang mensyaratkan standar kualitas global; Melaksanakan pendidikan dan pengajaran, penelitian dan pengabdian kepada masyarakat di bidang Teknik Informatika; Mengembangkan ilmu pengetahuan dan teknologi bidang Teknik Informatika dengan berkolaborasi dengan asosiasi profesi dan penguna lulusan program studi Teknik Informatika.\"', '2024-06-15 09:57:04', '2024-07-09 19:12:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitl`
--

CREATE TABLE `visitl` (
  `id` bigint UNSIGNED NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visitl`
--

INSERT INTO `visitl` (`id`, `visi`, `misi`, `created_at`, `updated_at`) VALUES
(2, '\"Menjadi Progran Studi yang Berdaya Saing Tinggi dalam Menghasilkan Tenaga Ahli Vokasional di Bidang Teknologi Listrik untuk Mendukung Visi Lembaga Sebagai Politeknik Unggul dan Terkemuka di Indonesia pada tahun 2030\"', '\"Menyelenggarakan pengelolaan Program Studi D3 Teknologi Listrik Politeknik secara profesional, transparan dan akuntabel; Menyelenggarakan pendidikan Program Studi D3 Teknologi Listrik Politeknik menggunakan Kurikulum Berbasis Kompetensi (KBK) berstandar pendidikan kepoliteknikan dan KKNI yang fleksibel sesuai dengan perkembangan ilmu pengetahuan dan teknologi terutama yang berorientasi terapan; Menyelenggarakan penelitian terapan yang berorientasi kepada kepentingan masyarakat, dunia kerja, dan memberikan kontribusi positif pada pengembangan kegiatan akademik.\"', '2024-07-04 00:03:38', '2024-07-04 00:03:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akreditasiti`
--
ALTER TABLE `akreditasiti`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akreditasitl`
--
ALTER TABLE `akreditasitl`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `beritajurusan`
--
ALTER TABLE `beritajurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `beritapbl`
--
ALTER TABLE `beritapbl`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `beritapenelitian`
--
ALTER TABLE `beritapenelitian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `beritapengabdian`
--
ALTER TABLE `beritapengabdian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosenti`
--
ALTER TABLE `dosenti`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosenti_nip_unique` (`nip`);

--
-- Indeks untuk tabel `dosentl`
--
ALTER TABLE `dosentl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosentl_nip_unique` (`nip`),
  ADD UNIQUE KEY `dosentl_nidn_unique` (`keahlian`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kegiatanmahasiswa`
--
ALTER TABLE `kegiatanmahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laboratorium`
--
ALTER TABLE `laboratorium`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pimpinan_nip_unique` (`nip`),
  ADD UNIQUE KEY `pimpinan_nidn_unique` (`nik`);

--
-- Indeks untuk tabel `ruangkelas`
--
ALTER TABLE `ruangkelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ruangmanajemen`
--
ALTER TABLE `ruangmanajemen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `teknisiti`
--
ALTER TABLE `teknisiti`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teknisiti_nip_unique` (`nip`);

--
-- Indeks untuk tabel `teknisitl`
--
ALTER TABLE `teknisitl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teknisitl_nip_unique` (`nip`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `visiti`
--
ALTER TABLE `visiti`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visitl`
--
ALTER TABLE `visitl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akreditasiti`
--
ALTER TABLE `akreditasiti`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `akreditasitl`
--
ALTER TABLE `akreditasitl`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `beritajurusan`
--
ALTER TABLE `beritajurusan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `beritapbl`
--
ALTER TABLE `beritapbl`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `beritapenelitian`
--
ALTER TABLE `beritapenelitian`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `beritapengabdian`
--
ALTER TABLE `beritapengabdian`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dosenti`
--
ALTER TABLE `dosenti`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `dosentl`
--
ALTER TABLE `dosentl`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kegiatanmahasiswa`
--
ALTER TABLE `kegiatanmahasiswa`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `laboratorium`
--
ALTER TABLE `laboratorium`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pimpinan`
--
ALTER TABLE `pimpinan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `ruangkelas`
--
ALTER TABLE `ruangkelas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `ruangmanajemen`
--
ALTER TABLE `ruangmanajemen`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `teknisiti`
--
ALTER TABLE `teknisiti`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `teknisitl`
--
ALTER TABLE `teknisitl`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `visiti`
--
ALTER TABLE `visiti`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `visitl`
--
ALTER TABLE `visitl`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
