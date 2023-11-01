-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Okt 2023 pada 00.13
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lembur`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lemburs`
--

CREATE TABLE `lemburs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `supel_id` bigint(20) UNSIGNED NOT NULL,
  `lem_dari` timestamp NULL DEFAULT NULL,
  `lem_sampai` timestamp NULL DEFAULT NULL,
  `lem_maksud` text NOT NULL,
  `lem_tujuan` text NOT NULL,
  `lem_tempat` varchar(255) NOT NULL,
  `lem_hasil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lemburs`
--

INSERT INTO `lemburs` (`id`, `created_at`, `updated_at`, `supel_id`, `lem_dari`, `lem_sampai`, `lem_maksud`, `lem_tujuan`, `lem_tempat`, `lem_hasil`) VALUES
(1, '2023-10-30 09:30:28', '2023-10-30 09:30:28', 19, '2023-01-10 09:00:00', '2023-01-10 15:56:00', 'Membuat Rekap', 'melengkapi Permintaan Dokumen Badan Pemeriksa Keauangan', 'Kantor Stasiun KIPM Merak', 'Hasil nya berupa Rekap data kuitansi untuk permintaan dokumen BPK'),
(2, '2023-10-30 09:34:29', '2023-10-30 09:34:29', 19, '2023-01-11 10:00:00', '2023-01-11 10:51:00', 'Melakukan Waste Ink Pad', 'Printer bisa berfungsi kembali untuk mencetak dokumen', 'Kantor Stasiun KIPM Merak', 'Printer Berfungsi Kembali'),
(3, '2023-10-30 09:38:03', '2023-10-30 09:38:03', 19, '2023-01-12 09:20:00', '2023-01-12 11:25:00', 'Maksud Tanggal 12', 'Tujuan Tanggal 12', 'Kantor Stasiun KIPM Merak', 'Hasil Tanggal 12'),
(4, '2023-10-30 09:41:25', '2023-10-30 09:41:25', 19, '2023-01-16 09:00:00', '2023-01-16 12:19:00', 'Maksud Tanggal 16', 'Tujuan Tanggal 16', 'Kantor Stasiun KIPM Merak', 'Hasil Tanggal 16'),
(5, '2023-10-30 09:42:52', '2023-10-30 09:42:52', 19, '2023-01-18 09:00:00', '2023-01-18 11:32:00', 'Maksud Tanggal 18', 'Tujuan Tanggal 18', 'Kantor Stasiun KIPM Merak', 'Hasil Tanggal 18'),
(6, '2023-10-30 09:45:38', '2023-10-30 09:45:38', 19, '2023-01-19 09:00:00', '2023-01-19 12:21:00', 'Maksud Tangal 19', 'Tujuan Tanggal 19', 'Kantor Stasiun KIPM Merak', 'Hasil Tanggal 19'),
(7, '2023-10-30 09:47:33', '2023-10-30 09:47:33', 19, '2023-01-25 09:00:00', '2023-01-25 14:51:00', 'Maksud Tanggal 25', 'Tujuan Tanggal 25', 'Kantor Stasiun KIPM Merak', '4 Jam, lagi mikir kira2 untuk melakukan apa ya ?😊😊'),
(8, '2023-10-30 09:49:01', '2023-10-30 09:49:01', 19, '2023-01-30 09:00:00', '2023-01-30 14:46:00', 'Maksud Tanggal 30', 'Tujuan tanggal 30', 'Kantor Stasiun KIPM Merak', 'Mikir lagi, untuk apa ya?'),
(9, '2023-10-30 09:51:33', '2023-10-30 09:51:33', 19, '2023-01-02 09:00:00', '2023-01-02 10:12:00', 'Maksud Tanggal 2', 'Tujuan Tanggal 2', 'Kantor Stasiun KIPM Merak', 'Awal tahun, apa yang harus dilakukan'),
(10, '2023-10-30 09:52:53', '2023-10-30 09:52:53', 19, '2023-01-03 09:00:00', '2023-01-03 11:46:00', 'Maksud Tanggal 3', 'Tujuan Tanggal 3', 'Kantor Stasiun KIPM Merak', 'Hasil Tanggal 3'),
(11, '2023-10-30 09:54:56', '2023-10-30 09:54:56', 19, '2023-01-04 09:00:00', '2023-01-04 14:13:00', 'Maksud Tanggal 4', 'Tujuan Tanggal 4', 'Kantor Stasiun KIPM Merak', 'Mikir Lagi Tanggal 4'),
(12, '2023-10-30 09:56:32', '2023-10-30 09:56:32', 19, '2023-01-09 09:00:00', '2023-01-09 10:03:00', 'Maksud Tanggal 9', 'Tujuan Tangal 9', 'Kantor Stasiun KIPM Merak', 'Mesti banyak Mikir'),
(13, '2023-10-30 10:19:30', '2023-10-30 10:19:30', 41, '2023-02-01 09:00:00', '2023-02-01 11:49:00', 'Melaksanakan kegiatan pemenuhan dokumen WBK/WBBM Zona Penguatan Akuntabilitas di Luar Jam Kerja', 'Memenuhi permintaan dokumen untuk mencapai WBK/WBBM', 'Kantor Stasiun KIPM Merak', 'Pemenuhan dokumen Zona Integritas WBK/WBBM Zona Penguatan Akuntablitas bagian Keterlibatan pimpinan sat Menyusun Perjanjian Kinerja meliputi meliputi :\r\n1.	Kegiatan Penyusunan Perjanjian Kinerja Tahun 2022 \r\n2.	Kegiatan Review Perjanjian Kinerja Tahun 2022\r\n3.	Koreksi pinpinan pada matriks peran hasil Stasiun KIPM Merak Tahun 2022'),
(14, '2023-10-30 10:21:11', '2023-10-30 10:21:11', 41, '2023-02-02 09:00:00', '2023-02-02 10:55:00', 'Melaksanakan kegiatan pemenuhan dokumen WBK/WBBM Zona Penguatan Akuntabilitas di Luar Jam Kerja', 'Memenuhi permintaan dokumen untuk mencapai WBK/WBBM', 'Kantor Stasiun KIPM Merak', 'Pemenuhan dokumen Zona Integritas WBK/WBBM Zona Penguatan Akuntablitas bagian Keterlibatan pimpinan secara langsung pada saat penyusunan perencanaan meliputi :\r\n1.	Kegiatan Review RENSTRA 2020-2024 \r\n2.	Kegiatan Penyusunan RKT Tahun 2022\r\n3.	Finalisasi RKAKL Tahun 2023'),
(15, '2023-10-30 10:23:07', '2023-10-30 10:23:07', 41, '2023-02-08 09:00:00', '2023-02-08 11:42:00', 'Melaksanakan kegiatan pemenuhan dokumen WBK/WBBM Zona Penguatan Akuntabilitas di Luar Jam Kerja', 'Memenuhi permintaan dokumen untuk mencapai WBK/WBBM', 'Kantor Stasiun KIPM Merak', 'Pemenuhan dokumen Zona Integritas WBK/WBBM Zona Penguatan Akuntablitas bagian Keterlibatan pimpinan memantau pencapaian kinerja secara berakala perencanaan meliputi :\r\n1.	Dashboard Aplikasi Kinerjaku Triwulan I \r\n2.	Kegiatan Review Capaian Kinerja Triwulan I\r\n3.	Dashboard Aplikasi Kinerjaku Triwulan II\r\n4.	Kegiatan Review Capaian Kinerja Triwulan II\r\n5.	Dashboard Aplikasi Kinerjaku Triwulan III\r\n6.	Kegiatan Review Capaian Kinerja Triwulan III\r\n7.	Dashboard Aplikasi Kinerjaku Triwulan IV'),
(16, '2023-10-30 10:24:36', '2023-10-30 10:24:36', 41, '2023-02-09 09:00:00', '2023-02-09 12:07:00', 'Melaksanakan kegiatan pemenuhan dokumen WBK/WBBM Zona Penguatan Akuntabilitas di Luar Jam Kerja', 'Memenuhi permintaan dokumen untuk mencapai WBK/WBBM', 'Kantor Stasiun KIPM Merak', 'Pemenuhan dokumen Zona Integritas WBK/WBBM Zona Penguatan Akuntablitas bagian Penyusunan Dokumen Perencanaan Akuntabilitas Kinerja dan Dokumen Rencana Telah Berorientasi Hasil meliputi :\r\n1.	PK Stasiun KIPM Merak Tahun 2022\r\n2.	PK Stasiun KIPM Merak Tahun 2022 Revisi\r\n3.	Renstra 2020-2024 Stasiun KIPM Merak\r\n4.	Renstra 2020-2024 Stasiun KIPM Merak Review 24102022\r\n5.	RKT 2022 Stasiun KIPM Merak\r\n6.	LKE Review SAKIP 2022 Stasiun KIPM Merak'),
(17, '2023-10-30 10:26:24', '2023-10-30 10:26:24', 41, '2023-02-13 09:00:00', '2023-02-13 12:44:00', 'Melaksanakan kegiatan pemenuhan dokumen WBK/WBBM Zona Penguatan Akuntabilitas di Luar Jam Kerja', 'Memenuhi permintaan dokumen untuk mencapai WBK/WBBM', 'Kantor Stasiun KIPM Merak', 'Pemenuhan dokumen Zona Integritas WBK/WBBM Zona Penguatan Akuntablitas bagian Terdapat Penetapan Indikator Kinerja Utama, Indikator Kinerja Telah Memenuhi Kriteria Smart, Penyusunan Laporan Kinerja mengenai ketepatan waktu pelaporan  meliputi :\r\n1.	SK Penetapan Indikator Kinerja Utama (IKU) Tahun 2022\r\n2.	SK Tim Pengelola Laporan Kinerja\r\n3.	PK Stasiun KIPM Merak Tahun 2022\r\n4.	PK Stasiun KIPM Merak Tahun 2022 Revisi\r\n5.	Kriteria SMART IKU Stasiun KIPM Merak Tahun 2022\r\n6.	LKj Triwulan I s/d IV 2022 Stasiun KIPM Merak.'),
(18, '2023-10-30 10:28:26', '2023-10-30 10:28:26', 41, '2023-02-14 09:00:00', '2023-02-14 10:19:00', 'Melaksanakan kegiatan pemenuhan dokumen WBK/WBBM Zona Penguatan Akuntabilitas di Luar Jam Kerja', 'Memenuhi permintaan dokumen untuk mencapai WBK/WBBM', 'Kantor Stasiun KIPM Merak', 'Pemenuhan dokumen Zona Integritas WBK/WBBM Zona Penguatan Akuntablitas bagian Penyusunan Laporan yang memberikan informasi kerja, Sistem informasi mekanisme informasi kinerja, Peningkatan kapasitas SDM yang menangani akuntabilitas kinerja   meliputi :\r\n1.	LKj Triwulan I s/d IV Tahun 2022\r\n2.	Dashboar Aplikasi Kinerjaku Triwulan I s/d IV Tahun 2022\r\n3.	Laporan dan Sertifikat mengikuti workshop'),
(19, '2023-10-30 10:29:55', '2023-10-30 10:29:55', 41, '2023-02-15 09:00:00', '2023-02-15 14:31:00', 'Melaksanakan kegiatan pemenuhan dokumen Audit Kinerja Inspektorat Jenderal KKP', 'Memenuhi permintaan RAW data aplikasi Sisterkaroline Tahun 2022', 'Kantor Stasiun KIPM Merak', 'Raw data  lalulintas produk perikanan aplikasi sisterkaroline  tahun 2022 meliputi :\r\n1.	Domestik Keluar\r\n2.	Domestik Masuk\r\n3.	Ekspor\r\n4.	Impor Transit'),
(20, '2023-10-30 10:31:21', '2023-10-30 10:31:21', 41, '2023-02-16 09:00:00', '2023-02-16 11:43:00', 'Melaksanakan kegiatan pemenuhan dokumen WBK/WBBM Zona Penguatan Akuntabilitas di Luar Jam Kerja', 'Memenuhi permintaan dokumen untuk mencapai WBK/WBBM', 'Kantor Stasiun KIPM Merak', 'Pemenuhan dokumen Reform Zona Integritas WBK/WBBM Zona Penguatan Akuntablitas bagian Meningkatkan capaian kerja unit kerja, Pemberian reward dan punishment, Kerangka logis kinerja   meliputi :\r\n1.	Dashboard Aplikasi Kinerjaku Triwulan I s/d IV Tahun 2022\r\n2.	Laporan Capaian Kinerja Triwlan I s/d IV Tahun 2022\r\n3.	Surat ucapan terima kasih kepada UPT Lingkup BKIPM\r\n4.	Matriks peran hasil Stasiun KIPM Merak Tahun 2022\r\n5.	Cascading Stasiun KIPM Merak Tahun 2022'),
(21, '2023-10-30 10:33:03', '2023-10-30 10:33:03', 41, '2023-02-20 09:00:00', '2023-02-20 12:26:00', 'Melaksanakan kegiatan pemenuhan dokumen Audit Kinerja Inspektorat Jenderal KKP diluar jam kerja', 'Memenuhi permintaan perbaikan laporan kinerja atas temuan Irjen KKP', 'Kantor Stasiun KIPM Merak', '1.	Perbaikan Target Indikator Kinerja (IK) 10 ”Sertifikasi Hazard Analysis Critical Control Point (HACCP) ruang lingkup produk pada UPI lingkup UPT Stasiun KIPM Merak (Produk) dari 10 menjadi 11\r\n2.	Perbaikan capaian IK 17 “Batas tertinggi nilai temuan LHP BPK atas LK lingkup BKIPM lingkup UPT Stasiun  KIPM Merak (%)” target <= 1% dengan realisasi 0%, perhitungan capain kinerja dari 100% menjadi 120%\r\n3.	Menyelaraskan 11 IK dengan Renstra 2020-2024 Stasiun KIPM Merak atas temuan Irjen sebagai berikut :'),
(22, '2023-10-30 10:34:27', '2023-10-30 10:34:27', 41, '2023-02-20 21:00:00', '2023-02-21 15:00:00', 'Melaksanakan kegiatan pemenuhan dokumen  kegiatan Uji Petik Reviu Laporan Kinerja Level II BKIPM Tahun 2022 diluar jam kerja', 'Memenuhi permintaan perbaikan LKj 2022 dan pemenuhan dokumen Uji Petik Reviu Laporan Kinerja Level II BKIPM Tahun 2022', 'Kantor Stasiun KIPM Merak', '1.	Perbaikan Rencana Aksi Tahun 2022\r\n2.	Penyusunan Rencana Aksi atas Perjanjian Kinerja Tahun 2023'),
(23, '2023-10-30 10:36:53', '2023-10-30 10:36:53', 19, '2023-02-23 09:00:00', '2023-02-23 15:00:00', 'Melaksanakan kegiatan pemenuhan dokumen  kegiatan Uji Petik Reviu Laporan Kinerja Level II BKIPM Tahun 2022 diluar jam kerja', 'Memenuhi permintaan perbaikan LKj 2022 dan pemenuhan dokumen Uji Petik Reviu Laporan Kinerja Level II BKIPM Tahun 2022', 'Kantor Stasiun KIPM Merak', 'Hasil yang dicapai berupa perbaikan Laporan Kinerja berupa perbandingan capaian tahun berjalan dengan capaian kinerja 5 tahun kebelakang, serta menambahkan kegiatan apa saja, sehingga target setiap Indikator Kinerja terpenuhi.'),
(24, '2023-10-30 10:38:58', '2023-10-30 10:38:58', 19, '2023-02-27 09:00:00', '2023-02-27 11:43:00', 'Melaksanakan kegiatan inovasi sertifikasi HACCP', 'Melaksanakan kegitan monitoring, stuffing produk perikanan yang akan diekspor untuk dapat dimonitoring online', 'Kantor Stasiun KIPM Merak', 'Menyiapkan perangkat untuk monitoring ekspor  online berupa penyiapkan :\r\n1.	Jaringan Internet\r\n2.	PC Controler\r\n3.	Display Monitor'),
(25, '2023-10-30 10:40:25', '2023-10-30 10:40:25', 41, '2023-02-28 09:00:00', '2023-02-28 13:12:00', 'Melaksanakan rekapitulasi transaksi keuangan Stasiun KIPM Merak bulan Februari 2023', 'Menyajikan laporan realisasi anggaran Stasiun KIPM Merak bulan Februari 2023', 'Kantor Stasiun KIPM Merak', 'Menyiapkan data untuk realisasi anggaran Stasiun KIPM Merak bulan Februari 2022 berupa :\r\n1.	Rekapitulasi Surat Perintah Pembayaran (SPP) aplikasi Sakti\r\n2.	Rekapitulasi transaksi kuitansi dari aplikasi Sakti\r\n3.	Laporan Realisasi Anggaran Stasiun KIPM Merak bulan Februari 2023.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lemburs`
--
ALTER TABLE `lemburs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lemburs`
--
ALTER TABLE `lemburs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
