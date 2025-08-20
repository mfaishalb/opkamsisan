-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2025 pada 05.30
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sandbox`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_terenkripsi`
--

CREATE TABLE `data_terenkripsi` (
  `id` int(11) NOT NULL,
  `nama_pengirim` text NOT NULL,
  `pesan` text NOT NULL,
  `kunci_aes_rsa` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_terenkripsi`
--

INSERT INTO `data_terenkripsi` (`id`, `nama_pengirim`, `pesan`, `kunci_aes_rsa`, `created_at`) VALUES
(12, 'Pjel87Qu+rbmI8wg6T+AyFXvKbMxByTNnmgQjrMwQ2U=', 'Wd7LVE5opAe/UIAtaqKxVFZdkYAFNS51GJG3uMDbCpw=', 'WSQAfUHkRSCf6NH5oYhbW+UTLtGeu5TRgx/DOyyikwypMf/owZlMKZ6mgUEc2ZExU0sLUv/gIFVwT8mRI8TUcER5zIha/A3IFDgGGTcmlZzxXZT37wEY0Rx2G1bneJGAIAAXe/EZlpK2ulnDxW41qbTuABe135Os6wCS4BGiZ5pbq5G0eQc+AYaSXDhcGMMMor2N9EXUZPAVrNvfJcYtB4Dkc2zo0T0PVvUKWZ4GSFx2V//NJOwTnAvYlCndTEyj9KV0itdcMuKiFkjhNu7eqUkI392ua0HvpgswMEGDLmgxmaTEt2BcolJgV0k73k+QCfVbYUc/X1nD3nzl/XR2ww==', '2025-06-18 02:50:46'),
(13, 'qRGTIC7XGB98rL3K0yLZgG8J+NGpcgewrho/PSsmsRY=', 'FG6vpnWuqm9e42eHawoGcv9dMbWkjo0TQEzP/+bMMQc=', 'fogZEX+iFBGgLJGWqu8tHWellK18kIKmry2fMmHihwMKTUxBvqHan+2LqHBeVhT6nccqYVKHPKk/BLAu4BfHgAKYT390FGZZACgcpln/w67woiJ7AYH/5YGFHPAdsfVVzbcgUAcXpqjnXxBN3k6zQ/SfGor+H6i1Hr/T77MKuEXEVlilBBwIl7tQSNY8kEHhsPtAAslIZDR3RO2wHUCarkTrbrS0r4N+jPag5RfaEK/zUBlPvfifJND5n1JN3HwNvQi8f5nnmPt8sCAmMLZMW+hsJE03CR6syT/Ukg/0kRa195Jd/9LwLcHgUVLBFEeuJgRvd1aJxNkkrNLJ0fLypw==', '2025-06-18 02:51:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_terenkripsi`
--
ALTER TABLE `data_terenkripsi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_terenkripsi`
--
ALTER TABLE `data_terenkripsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
