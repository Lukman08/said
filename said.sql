-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2022 pada 20.07
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `said`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspirasis`
--

CREATE TABLE `aspirasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aspirasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aspirasis`
--

INSERT INTO `aspirasis` (`id`, `name`, `aspirasi`, `created_at`, `updated_at`) VALUES
(1, 'Lukman Hakim', 'Ini jalannya mohon segera di perbaiki ya biar lancar bolak baliknya.', '2022-06-14 10:42:32', '2022-06-14 10:42:32'),
(2, 'Ari Farhan', 'Mohon di aktifkan lagi kegiatan di karang taruna', '2022-06-14 10:43:26', '2022-06-14 10:43:26'),
(3, 'Ahmad Fuazi', 'Pak bumdesnya mohon segera di bentuk', '2022-06-14 10:45:01', '2022-06-14 10:45:01'),
(4, 'Fuzan Akhmad', 'Mohon pembagian bansos merata biar tepat sasaran', '2022-06-14 10:46:38', '2022-06-14 10:46:38'),
(5, 'Saeful Bahri', 'Mohon kasih akses internet setiap rt', '2022-06-14 10:49:23', '2022-06-14 10:49:23'),
(6, 'Samsul Arhan', 'Mohon sediakan fasilitas untuk kegiatan olahraga', '2022-06-14 10:50:09', '2022-06-14 10:50:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasis`
--

CREATE TABLE `informasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `informasis`
--

INSERT INTO `informasis` (`id`, `judul`, `gambar`, `isi`, `created_at`, `updated_at`) VALUES
(6, 'Rapat Kerja Karang Taruna', 'WhatsApp-Image-2021-11-28-at-21.49.08-678x381.jpeg', '<div>Sabtu, 27 November 2021 Bertempat di Pesanggarahan Timbanuh Karang Taruna “Maju Bersama” Desa Kumbang melaksanakan Rapat Kerja perdana setelah beberapa minggu lalu dilantik oleh Kepala Desa Kumbang. Rapat kerja tersebut dihadiri dan dibuka secara langsung oleh Kepala Desa Kumbang. Hadir dalam pembukaan Sekretaris Desa Kumbang, Pembina Karang Taruna Maju Bersama Desa Kumbang dan utusan Karang Taruna Kabupaten Lombok Timur.<br><br></div><div>Rapat Kerja ini bertujuan untuk merumuskan dan mengesahkan program kerja yang akan dilaksanakan oleh Karang Taruna Maju Bersama di tahun 2022. Ketua Karang Taruna Maju Bersama Desa Kumbang, Izan Sani dalam sambutannya menyampaikan bahwa struktural dalam Karang Taruna itu hanya tulisan di atas kertas. Sejatinya esensi dari berorganisasi itu yakni kerja-kerja kita bersama, bagaimana kita berkolaborasi untuk memajukan Desa Kumbang kita bersama.<br><br></div><div>Sementara itu Kepala Desa Kumbang, M. Taufik menaruh harapan besar pada Karang Taruna sebagai bagian dari Pioneer-Pioneer kemajuan Desa Kumbang, Karena kualitas pemuda memegang peranan penting bagi kemajuan suatu desa” ungkap beliau. selanjutnya Sekretaris Desa menyampaikan materi terkait dengan kiat-kiat desa sehingga mampu menjadi terbaik ke 5 Nasional dalam hal keterbukaan Informasi Publik dan mengembangkan website desa serta media lainnya.</div>', '2022-05-19 21:08:17', '2022-05-19 21:08:17'),
(7, 'Musyawarah Kelompok Tani dan Penyuluhan Pertanian', 'IMG_20160406_205746-768x576.jpg', '<div>Rabu, 6 Maret 2016 bertempat di Sasana Krida Kusuma (nama: Balai Desa Plesungan) tepatnya pada pukul 19.30 WIB telah diadakan musyawarah kelompok tani dan penyuluhan pertanian oleh penyuluh lapangan kec. Kapas. Sebelum penyuluhan disampaikan terlebih dahulu membahas tentang bantuan traktor yang dibantukan kepada Bumdes-bersama desa Plesungan. Dengan hasil, Bumdes akan bekerja sama dengan kelompok tani untuk pengelolaannya dengan bagi hasil 20% hasil bersih disampaikan kepaa Bumdes.<br><br>Kemudian acara dilanjutkan dengan penyuluhan dari PL kecamatan dan Bapak Ruslan mengenai masalah para petani dalam hal hasil panen yang menurun karena banyak hama potong leher dan beluk. Dari penyuluh memberikan solusi agar penanaman menggunakan teknik jajar legowo. Dengan penyuluhan tersebut berharap hasil pertanian di desa Plesungan khususnya akan meningkat pada musim tanam yang akan datang.</div>', '2022-05-19 21:22:36', '2022-05-19 21:22:36'),
(12, 'RAPAT KERJA PEMBINAAN PENYELENGGARAAN PEMERINTAHAN DESA', 'rapat-kerja-pembinaan-pemerintahan-desa.jpg', '<div><em>Bengkayang</em>, 5/2/2018. Bupati Bengkayang (SURYADMAN GIDOT, M.Pd) serta didampingi Wakil Bupati (AGUSTINUS NAON, S.Sos), Membuka rapat kerja pembinaan penyelenggaraan Pemerintah Desa Ta 2018, dihadiri Pj. Seketaris Daerah Kabupaten Bengkayang, Kepala SKPD, Ketua PKK, dan para undangan lainnya, Senin, 5/2/2018, Di Aula Satu Atap Lv. Rapat tersebut mengangkat tema, Evaluai Pertanggungjawaban Program kegiatan TA, 2017 serta sinkronisasi program kegiatan pemerintah Desa TA 2018.</div><div>Dalam Sambutannya Bupati Bengkayang (SURYADMAN GIDOT, M.Pd) menyampaikan agar pemerintah Desa dapat memahami peran, tugas dan fungsinya dalam pengelolaan Pemerintahan Desa dan pengelolan keuangan Desa DD/ADD.</div>', '2022-06-02 18:35:29', '2022-06-02 18:35:29'),
(13, 'Rapat Koordinasi Persiapan Gerakan Petani Milenial', 'rakorsantrimilenial1-600x338.jpeg', '<div>Dalam rangka persiapan Gerakan Petani Milenial yang akan diselenggerakan pada hari Selasa, tanggal 19 Februari 2019 di Sukabumi, maka diadakan rapat koordinasi pada hari Sabtu, tanggal 9 Februari 2019 di ruang rapat Balittri. Rapat koordinasi tersebut dihadiri oleh Kepala Badan Litbang Pertanian, Sekretaris Badan Litbang Pertanian, Ditjen Peternakan dan Kesehatan Hewan, Puslitbang Peternakan, Badan Karantina, Ditjen Perkebunan, Ditjen Hortikultura, Badan Ketahanan Pangan, Puslitbangbun, wakil dari kelompok tani, dan wakil santri tani.<br>Gerakan Petani Milenial di Sukabumi ini ditargetkan dapat dihadiri oleh 10.000 peserta yang berasal dari petani, santri, rumah tangga miskin (RTM) pertanian dan penyuluh lingkup Kabupaten Sukabumi. Berdasarkan informasi terakhir, peserta yang telah siap dihadirkan dalam acara tersebut adalah sebanyak 1200 RTM, 2000 petani milenial, dan 3000 orang dari peternak, santri, dan Gapoktan, Tenaga Kerja Sosial Kecamatan (TKSK) dari 4 kecamatan, pendamping program bekerja tingkat desa, dan 240 orang penyuluh pertanian. Petani RTM yang akan hadir merupakan petani calon penerima bantuan program #Bekerja dari Kecamatan Cikembar. Undangan kepada peserta dan dinas dipastikan akan segera disebarkan dalam minggu ini.<br>Pada Gerakan Petani Milenial akan diberikan bantuan kepada RTM berupa ayam dan sapronak, dan kepada petani dan santri berupa hand traktor, benih padi, bibit tanaman hortikultura, serta kepada peternak berupa domba atau kambing. Pada acara ini juga rencana akan diadakan launching program #Bekerja di Sukabumi. Lokasi untuk penyelenggaraan acara besar tersebut masih belum diputuskan dan lebih lanjut akan disurvei di beberapa lokasi oleh panitia pada tanggal 10 Februari 2019.</div>', '2022-06-14 05:32:28', '2022-06-14 05:32:28'),
(14, 'MUSYAWARAH DESA PEMBENTUKAN PENGURUS BUMDES', 'kecil_1625494543IMG-20210705-WA0057.jpg', '<div>Senin 5 juli 2021 bertempat di aula Balai Desa pakel,Badan Permusyawaratan Desa beserta kepala desa pakel mengadakan musyawarah Desa dalam pembentukan pengurus BUMDEs Desa pakel yang di beri nama SUMBER MODAL.<br>Kegiatan ini dihadiri oleh Ketua BPD beserta Anggota,perangkat desa,tokoh masyarakat perwakilan ketua RT RW dan perwakilan perempuan desa.<br>Musyawarah Desa ini berlangsung terbuka dan melibatkan perwakilan pereakilan masyarakat desa dengan tetap mematuhi protokol kesehatan yang berjalan pada saat ini.<br>Dalam musyawarah berlangsung ada pembacaan pertanggung jawaban aset dan modal dari kepengurusan yang lama yang diketuai oleh bapak suparni .<br><br></div><div>&nbsp;<br>Sedang dalam pembentukan kepengurusan yang baru&nbsp;<br>Pengawas adalah BPD komisaris adalah Kepala Desa sedang Direktu dijabat oleh Bpk Arif Saputra,sekretaris Bpk Mukarman,Bendahara Ibu Muryati, manajer unit usaha pengolahan hasil pertanian Bpk Suyatmo,usaha jasa,ibu Kasmiatun, usaha Jasa Sewa dijabat Bpk Mujianto.<br>Pelaksanaan kegiatan musyawarah Desa Pakel dalam pembentukan kepengurusan ini berdasarkan pada Peraturan Pemerintah no 11 tahun 2021 serta Permendagri no 3 2021 tentang Bumdes.<br><br></div>', '2022-06-14 05:35:11', '2022-06-14 05:35:11'),
(15, 'Rapat Musyawarah Desa tentang Rencana Kerja Pemerintah Desa (RKP Desa) Tahun 2021', 'IMG_1021a-1-1024x637.jpg', '<div>Berkaitan dengan Penyusunan Rencana Kerja Pemerintah Desa (RKP Desa) untuk Tahun 2021 di Desa Rangkahkidul Sidoarjo Kecamatan Sidoarjo Kabupaten Sidoarjo, Provinsi Jawa Timur, maka pada:<br><br></div><div>Hari/tanggal: Senin/28 September 2020.<br><br></div><div>Pukul: 19:00 WIB<br><br></div><div>Tempat: Balai Desa Rangkahkidul<br><br></div><div>Telah dilaksanakan Acara Musyawarah Desa Yang dihadiri oleh Kepala Desa beserta Perangkat Desa, BPD, LPMD, RT/RW, Tokoh Masyarakat, Tokoh Agama, dan Penggerak PKK Desa Rangkahkidul.<br><br></div><div>Materi atau topik yang dibahas pada forum ini serta yang bertugas sebagai unsur pimpinan rapat dan narasumber adalah:<br><br></div><ol><li>Materi atau Topik, terkait Musyawarah Desa tentang RKP Desa Tahun 2021</li><li>Unsur Pimpinan Rapat dan Narasumber:</li></ol><ul><li>Pimpinan Rapat: Drs. H. SANTRIYO, MM selaku Ketua Tim Penyusun RKP</li><li>Notulen: EKO TEGUH SURACHMAN Selaku Sekretaris Tim Penyusun</li><li>Narasumber: H. WARLHEIYONO selaku Kepala Desa</li></ul><div>Setelah dilaksanakan pembahasan dan diskusi terkait materi atau topik diatas, selanjutnya seluruh peserta Musyawarah Desa menyepakati beberapa hal yang berketepatan menjadi kesepakatan akhir dari Musyawarah Desa dalam rangka penyusunan RKPDesa, yaitu:Dalam pembahasan isi rapat tersebut, yakni:<br><br></div><ol><li>Sosialisasi dan Penetapan hasil usulan RKP 2021 Desa Rangkahkidul.</li><li>&nbsp;Tindak lanjut untuk menjadi acuan penyusunan APBDesa Rangkahkidul Tahun Anggaran 2021.</li></ol><div>Demikian Berita Acara ini dibuat dan disahkandengan penuh tanggung jawab agar dapat dipergunakan sebagaimana mestinya.</div>', '2022-06-14 05:40:33', '2022-06-14 05:40:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_15_154127_add_role_column_to_users_table', 1),
(6, '2022_05_19_070552_create_informasis_table', 1),
(7, '2022_05_26_230723_create_aspirasis_table', 1),
(8, '2022_06_04_072233_create_sktms_table', 1),
(9, '2022_06_04_223630_create_slipgajis_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sktms`
--

CREATE TABLE `sktms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempatlahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggallahir` date NOT NULL,
  `agama` enum('Islam','Kristen','Khatolik','Hindu','Buddha','Konghucu') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskelamin` enum('Laki Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ortu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempatlahir_ortu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggallahir_ortu` date NOT NULL,
  `pekerjaan_ortu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ortu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filesktm` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slipgajis`
--

CREATE TABLE `slipgajis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempatlahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` enum('Laki Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Belum Kawin','Kawin','Cerai Hidup','Cerai Mati') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fileslipgaji` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('user','manager','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$szyuXc5e/EBMC6Gm7v0Ryevs43L3kvJrwLJtgSb9Ur/neice.W8uS', 'admin', NULL, '2022-05-18 23:34:41', '2022-05-18 23:34:41'),
(2, 'masyarakat', 'masyarakat@gmail.com', NULL, '$2y$10$m34Nd.zYtkaT.5Kh4/pNl..HA/kKac6Wp2RWUp3OFWz1KEz8WKMDa', 'user', NULL, '2022-05-18 23:34:41', '2022-05-18 23:34:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aspirasis`
--
ALTER TABLE `aspirasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `informasis`
--
ALTER TABLE `informasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sktms`
--
ALTER TABLE `sktms`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slipgajis`
--
ALTER TABLE `slipgajis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aspirasis`
--
ALTER TABLE `aspirasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `informasis`
--
ALTER TABLE `informasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sktms`
--
ALTER TABLE `sktms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `slipgajis`
--
ALTER TABLE `slipgajis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
