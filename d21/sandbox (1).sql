-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2025 pada 15.01
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

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
-- Struktur dari tabel `challenges`
--

CREATE TABLE `challenges` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `challenges`
--

INSERT INTO `challenges` (`id`, `title`, `description`, `file_path`, `file_name`) VALUES
(1, 'Forensik Dasar 1', 'File ini terlihat rusak, tapi ada sesuatu yang berharga tersembunyi di dalamnya. Lakukan analisis dan temukan flag-nya.', 'files/challenge1.zip', 'challenge1.zip'),
(2, 'Analisis Jaringan', 'Kami merekam sebuah lalu lintas jaringan yang mencurigakan. Analisis file pcap ini dan temukan komunikasi rahasia.', 'files/challenge2.pcapng', 'challenge2.pcapng'),
(3, 'Steganografi Gambar', 'Sebuah gambar sederhana, namun menyimpan pesan tersembunyi. Apakah Anda bisa mengungkapnya?', 'files/challenge3.png', 'challenge3.png');

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
(13, 'qRGTIC7XGB98rL3K0yLZgG8J+NGpcgewrho/PSsmsRY=', 'FG6vpnWuqm9e42eHawoGcv9dMbWkjo0TQEzP/+bMMQc=', 'fogZEX+iFBGgLJGWqu8tHWellK18kIKmry2fMmHihwMKTUxBvqHan+2LqHBeVhT6nccqYVKHPKk/BLAu4BfHgAKYT390FGZZACgcpln/w67woiJ7AYH/5YGFHPAdsfVVzbcgUAcXpqjnXxBN3k6zQ/SfGor+H6i1Hr/T77MKuEXEVlilBBwIl7tQSNY8kEHhsPtAAslIZDR3RO2wHUCarkTrbrS0r4N+jPag5RfaEK/zUBlPvfifJND5n1JN3HwNvQi8f5nnmPt8sCAmMLZMW+hsJE03CR6syT/Ukg/0kRa195Jd/9LwLcHgUVLBFEeuJgRvd1aJxNkkrNLJ0fLypw==', '2025-06-18 02:51:12'),
(14, 'weC29rRznBBUaykTk++qFh6wM/m//ZNI4946bE5U1hY=', 'C3Vi4yMXHPMr4P2SHV+OA6R2la4Rgg3smonEqySpkc8=', 'u7hYxkWKQ7zLHOt1qSCgpiSKz7FW9KxIcuq8mRMZHlAj9h8meu/L0B8MFoIh9vo5LYhdaRay+bNcZ4o70NwpfElkNw4dTYjiMxEbT+fvrqimfR2H39QW+j00iphT6I1jYRapM2Hh4+QJBkx1ldGCBcgNClKtAKXPsCGBzdD74vOUPiBq+FIrMJ60FD9kO7pCuSCO3mG3DZsKQnfGPw4Lwk1dTKXisgF+chNtQnv5uTUkYx5R75IsGvLRXEYCpS3rbFqFLc27l+4v+0YbUsJXS4oQIGoWi7DMaU8KmpRRpu3WdUJH/wc/ErofHZFsC+xB6234HL5LzQDeo9cH8gtQvA==', '2025-06-18 03:32:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `flags`
--

CREATE TABLE `flags` (
  `id` int(11) NOT NULL,
  `challenge_id` int(11) NOT NULL,
  `flag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `flags`
--

INSERT INTO `flags` (`id`, `challenge_id`, `flag`) VALUES
(1, 1, 'STORM{File_Header_Magic}'),
(2, 2, 'STORM{HTTP_Packet_Secret}'),
(3, 3, 'STORM{LSB_Revealed_Me}');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `challenges`
--
ALTER TABLE `challenges`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_terenkripsi`
--
ALTER TABLE `data_terenkripsi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `flags`
--
ALTER TABLE `flags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `challenge_id` (`challenge_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `challenges`
--
ALTER TABLE `challenges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_terenkripsi`
--
ALTER TABLE `data_terenkripsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `flags`
--
ALTER TABLE `flags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
