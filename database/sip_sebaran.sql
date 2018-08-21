-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2018 at 05:56 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sip_sebaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_akun` char(8) NOT NULL COMMENT 'id akun. konsisten',
  `kd_akun` varchar(3) NOT NULL COMMENT 'kode akun. sudah ditentukan',
  `username` varchar(15) NOT NULL COMMENT 'username. diisi oleh user',
  `password` text NOT NULL COMMENT 'password. dienkripsi oleh sistem'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabelyang menyimpan semua informasi akun pengguna';

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `kd_akun`, `username`, `password`) VALUES
('02e0159b', 'AKA', 'akamaulana', 'e45f357e55d6ec9202f897a660f8b2b2cd62b50abb84194f6a0909ea54d859af58c874f3b26408760f148e6d976464ae5a4eb757dcbc7f6955f0a45f6d5f469f'),
('1a53764c', 'AKA', 'n', '917148ec47923f2e0e3d73142ac4f94ec4c73078865ba6d29f0ea172cd6f4bf34db699af5c33535d3694d4aef91a11f916004d0382f794448a8550623d34c985'),
('1cd14532', 'AK', 'akmoel', 'e45f357e55d6ec9202f897a660f8b2b2cd62b50abb84194f6a0909ea54d859af58c874f3b26408760f148e6d976464ae5a4eb757dcbc7f6955f0a45f6d5f469f'),
('60a2cf06', 'AB', 'abmoel', 'e45f357e55d6ec9202f897a660f8b2b2cd62b50abb84194f6a0909ea54d859af58c874f3b26408760f148e6d976464ae5a4eb757dcbc7f6955f0a45f6d5f469f'),
('7b875790', 'IF', 'ifmul', 'e45f357e55d6ec9202f897a660f8b2b2cd62b50abb84194f6a0909ea54d859af58c874f3b26408760f148e6d976464ae5a4eb757dcbc7f6955f0a45f6d5f469f'),
('82797ba8', 'KA', 'moel123', 'e45f357e55d6ec9202f897a660f8b2b2cd62b50abb84194f6a0909ea54d859af58c874f3b26408760f148e6d976464ae5a4eb757dcbc7f6955f0a45f6d5f469f'),
('991fd47c', 'IF', 'ifmaulana', 'e45f357e55d6ec9202f897a660f8b2b2cd62b50abb84194f6a0909ea54d859af58c874f3b26408760f148e6d976464ae5a4eb757dcbc7f6955f0a45f6d5f469f'),
('b4a73340', 'AB', 'abmaulana', 'e1b414c110f22c8f4048435282c9b99a48ce4480a414e36de7f4fdc1645dfb29cae0f71b726711d794df4705a67b38febf70d30aa6174a8223c516ef554f3f89'),
('b6c7340d', 'AKA', 'akaprodi', 'eb4557f1507b57a5b86ec7efd3be68cb039002fe91dfc01f251f1be96fb34591e5109568e2b30fdf94736953cd332a6bb81c1f862d275c0a473097b2ff96637c'),
('bf5b1429', 'AK', 'akunmaulana', 'e45f357e55d6ec9202f897a660f8b2b2cd62b50abb84194f6a0909ea54d859af58c874f3b26408760f148e6d976464ae5a4eb757dcbc7f6955f0a45f6d5f469f'),
('c1ccbf30', 'AKA', 'akaemoel', 'f0dd3ce3b77ec7fc8ec0b0881dfee21d3cc54b8fbc4da28206ced70878b04e33be029949a6405a7d137e3a4fd3a55578a6c47992c61898daa126e1f86d91616e'),
('c3730f58', 'AK', 'akmaulana', 'e45f357e55d6ec9202f897a660f8b2b2cd62b50abb84194f6a0909ea54d859af58c874f3b26408760f148e6d976464ae5a4eb757dcbc7f6955f0a45f6d5f469f'),
('ee2a6b12', 'IF', 'ifmoel', 'f93e027943835bde524743485752b8787932738ffd40d8159ff2283801787fc83b0816748e6b9f4cbb6356893a3932eace1bfb67e2151b98289337f7103da546'),
('fd2dc785', 'AK', 'mul', 'e45f357e55d6ec9202f897a660f8b2b2cd62b50abb84194f6a0909ea54d859af58c874f3b26408760f148e6d976464ae5a4eb757dcbc7f6955f0a45f6d5f469f');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` varchar(8) NOT NULL COMMENT 'ID Dosen. Konsisten',
  `nama_dosen` varchar(50) NOT NULL COMMENT 'Nama Dosen.  Diisi oleh User',
  `nidn` varchar(10) DEFAULT NULL COMMENT 'NIDN. diisi oleh user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel data Dosen';

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nama_dosen`, `nidn`) VALUES
('001bb3c7', 'Rudi Simorangkir, M.Pd.', '0'),
('00b4f346', 'Dian Fitri, S.Pd', ''),
('0b59c44b', 'Abdullah, M.Pd.', ''),
('0b93d0b0', 'Yana Cahya Kirana, M.Pd.', '0416029202'),
('0d630f60', 'R. Evi Sopia, M.T.', ''),
('0f43bcca', 'Apit Yuliman E.,S.E.,M.M.,M.Ak.', '328075301'),
('12376585', 'Drs. Sueb, M.Si., M.Pd.', '0025035803'),
('12418dbe', 'Fajar Mutakin G. ST., S.ST', '0427067206'),
('12a71917', 'Sempa Ketaren, Dra.', '0402085902'),
('15d07e50', 'Ira Puspitasari, M.T.', '0403028901'),
('1777f6de', 'Linda Mauliani P., S.Pd.', '0'),
('185c01f6', 'Mulyana, S.ST', ''),
('195eb032', 'Ida Rosmawati, M.Pd', ''),
('1f6f940b', 'Dodo Suhanda, M.Pd.', ''),
('2622915b', 'Sukma Fitria Putri, S.ST., M.Si.', '0413068801'),
('284db105', 'Boyke Nugrahanto, SE., M.Ak.', '413017602'),
('2c3e8e94', 'Lilis Setiatin,S.E', '0'),
('2f250901', 'Achmad Dahlan, SH., M.Si.', '0'),
('3101f9ff', 'Avid Inang Rum, S.E., M.M.', '429087104'),
('358da381', 'Koharuddin, M.Si.', ''),
('3c5de954', 'Sisjono, BE., Drs.', ''),
('3ce33cb8', 'Drs. Hadi Soewito, Dipl.Ed.', ''),
('3f17ef8a', 'Badie Uddin, S.T., S.Kom., M.Kom.', '409057005'),
('468c1170', 'Retno Paryati, M.Ak., CA.', '415026603'),
('47f93515', 'Reni Raafidiani, S.ST', ''),
('4a28292c', 'Eko Prapto Nugroho, S.ST', ''),
('4c7dac29', 'Shandy Tresnawati, S.ST., M.Kom.', '0401059101'),
('4ffc6c18', 'Petrus Uty, M.Pd.', '0428075301'),
('551308ee', 'Aris H Rismayana, S.Si., M.Kom.', '410037904'),
('567aff0a', 'Herwadi, M.Pd.', ''),
('5c02119e', 'Sutrisno, M.T.', '0407086206'),
('74917f72', 'Rieky Agung Laksono, M.Pd.I.', '0'),
('796ea0c2', 'Drs. Sutomo, M.Ed.', ''),
('7d79550e', 'Firdhani Faujiyah, M.T.', '0421119001'),
('80aff637', 'Suharyanto, M.M.', '0'),
('810bf8f0', 'Ayu Yudiani Lestari, M.M.', '405037903'),
('811ea842', 'Harianto Zaidulfar, M.T.', '0431037601'),
('8a5195d8', 'Riri Damayanti A., S.T., M.Kom.', '0414038803'),
('94cfab94', 'Krish Madyono, M.T.', ''),
('9ad5e278', 'Unang Suherman, M.Pd.', ''),
('9c17a0c7', 'Soekandar, Drs., M.M.Pd.', ''),
('a0295198', 'Suharto, M.M.Kes.', '0409066001'),
('a157c5ca', 'Drs. Pangoedi R, M.Ed', ''),
('a379692c', 'maulana tester 123', '1234565778'),
('aa7f2371', 'Uum Sumirat, M.Pd., M.T.', ''),
('ac3e35ac', 'Dendin Supriadi, M.T.', '0418026701'),
('b1ff9b2a', 'Didid Dwi Santoso, M.T.', '0414077006'),
('b5be7f3d', 'Adhita Prasetya, M.T., M.Si.', ''),
('b83b937b', 'Wachidin, S.ST.', ''),
('b966d6df', 'Chrestian Mamesah, M.Pd.', ''),
('be644510', 'Lusi Marlina, Ir., M.T., M.M.Kes.', ''),
('c1591d10', 'Yoddy A. Nuhgraha, S.T., M.T.', '0424117602'),
('c1a5f4fb', 'Dedy Suryadi, SE., M.Ak., Ak., BKP., CA.', '0425017204'),
('cab0b74d', 'Usep Setialaksana, M.Pd.', ''),
('cafb31fa', 'Agus Saleh, M.T.', '0407087804'),
('d70ab118', 'Budi Upayarto, SE., M.Si., Ak., CA.', '0013037101'),
('dd690635', 'Deddy Misdarpon, S.Pd., M.T.', ''),
('ed0335b1', 'Uli Karo-karo, M.Pd.', ''),
('f109f13a', 'Indra Hermawan, SE., Ak., CA.', '403077902'),
('f191141c', 'Lussy Anggreini, M.Pd.', ''),
('f42abb79', 'Drs. Suparno', ''),
('fc3dac63', 'Darwinto, S.ST', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matakuliah`
--

CREATE TABLE `tb_matakuliah` (
  `id_matkul` varchar(8) NOT NULL COMMENT 'ID Matakuliah. Di generate oleh sistem',
  `kd_matkul` varchar(8) DEFAULT NULL COMMENT 'Kode Matakuliah. Diisi Oleh User',
  `nama_matkul` varchar(256) NOT NULL COMMENT 'Nama Matakuliah. Diisi Oleh User',
  `sks` int(1) NOT NULL COMMENT 'Jumlah SKS',
  `sks_teori` int(1) NOT NULL COMMENT 'Jumlah Jam SKS Teori',
  `sks_praktek` int(1) NOT NULL COMMENT 'Jumlah jam SKS Praktek',
  `kd_prodi` varchar(3) NOT NULL,
  `status` int(1) NOT NULL,
  `alasan_ditolak` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel data Matakuliah';

--
-- Dumping data for table `tb_matakuliah`
--

INSERT INTO `tb_matakuliah` (`id_matkul`, `kd_matkul`, `nama_matkul`, `sks`, `sks_teori`, `sks_praktek`, `kd_prodi`, `status`, `alasan_ditolak`) VALUES
('006c7235', 'D403411', 'Mesin Listrik', 3, 2, 1, 'TO', 1, ''),
('02070fbb', 'E404402', 'Etika Profesi', 2, 2, 0, 'TE', 1, ''),
('0222e3c8', 'E201203', 'Kewarganegaraan', 2, 2, 0, 'TM', 1, ''),
('0498c3f5', 'D103201', 'Komputer Grafis (Computer Image Design)', 3, 2, 1, 'IF', 1, ''),
('04c8206e', 'E513204', 'Sistem Roda dan Ban Grup B', 2, 1, 1, 'MO', 1, ''),
('05e87d12', 'D323523', 'Algoritma & Pemrograman ', 2, 0, 2, 'MK', 1, ''),
('064c0667', 'D105401', 'Lingkungan/K3LH (Environment)', 2, 2, 0, 'IF', 1, ''),
('070ebb90', 'E103406', 'Akuntansi Manajemen (P)', 0, 0, 0, 'AK', 0, ''),
('0753807b', 'E303619', 'Tugas Akhir', 0, 0, 0, 'TK', 1, ''),
('075ec398', 'D102209', 'Matematika Diskrit (Discrete Mathematics)', 2, 2, 0, 'IF', 1, ''),
('086a69e3', 'D303204', 'Gambar Teknik 2 Grup A', 3, 2, 1, 'MID', 1, ''),
('0b2c7b21', 'E502202', 'Matematika Terapan 2', 2, 2, 0, 'MO', 1, ''),
('0df5ec6a', 'E303410', 'Periperal Komputer & Antarmuka', 3, 2, 1, 'TK', 1, ''),
('0ededa69', '-', 'Pendidikan Agama', 0, 0, 0, 'KA', 0, ''),
('0ff061f1', 'E403835', 'Teknik Tenaga Listrik', 2, 1, 1, 'TE', 1, ''),
('10049f01', '-', 'Mentoring', 0, 0, 0, 'TE', 1, ''),
('11482dbe', 'D203301', 'Akuntansi Keuangan 1 + Praktikum', 3, 2, 1, 'KA', 0, ''),
('11748e07', 'E502203', 'Bahasa Inggris 1', 2, 2, 0, 'MO', 1, ''),
('16513ef5', 'E303208', 'Arsitektur & Organisasi Komputer', 3, 2, 1, 'TK', 1, ''),
('16ce46e8', 'E602419', 'Pilot Plan', 3, 2, 1, 'KIM', 1, ''),
('17acc347', 'E204409', 'Perencanaan & Pengendalian Produksi (PPC)', 2, 2, 0, 'TM', 1, ''),
('181d1133', 'E103409', 'Akuntansi Keuangan Lanjutan 1 (T)', 3, 2, 1, 'AK', 0, ''),
('1833a794', 'E705404', 'MIK - IV', 2, 1, 1, 'RM', 0, ''),
('183cdc0b', 'D323626', 'Kecerdasan Buatan/Artificial Intelligent', 2, 0, 2, 'MK', 1, ''),
('184cd04a', 'D401706', 'Aplikasi Sistem SCADA', 3, 2, 1, 'TO', 1, ''),
('1a9d25ca', 'D513514', 'Perancangan Geometrik Jalan', 2, 1, 1, 'KB', 1, ''),
('1b430f8a', 'E705202', 'Praktik Klinik Lapangan I', 0, 0, 0, 'RM', 0, ''),
('1cdbfb83', 'D203419', 'Penganggaran Bisnis', 2, 1, 1, 'KA', 0, ''),
('1d44e378', 'D124302', 'Tugas Akhir (Final Project)', 4, 4, 0, 'RM', 0, ''),
('1e3187bc', 'E602418', 'Teknologi Pangan & Fermentasi', 2, 1, 1, 'KIM', 1, ''),
('1e8bbf3e', 'E403417', 'Sensor dan Transducer', 2, 1, 1, 'TE', 1, ''),
('1eadafe5', 'E502203', 'Bahasa Inggris 1', 2, 2, 0, 'AB', 1, ''),
('1f3eb5c1', 'D405402', 'Psikologi Industri', 2, 2, 0, 'TO', 1, ''),
('1f7a9cd5', 'E502211', 'Elemen Mesin Otomotif', 2, 2, 0, 'MO', 1, ''),
('1fba5219', 'D303432', 'Teknik Produksi 2 (Grup A)', 3, 1, 1, 'MID', 1, ''),
('1fbd81fa', 'D313624', 'Teknik Desain 2 (Grup B)', 3, 1, 1, 'MID', 1, ''),
('205821cd', 'E703204', 'KKPMT II (Anatomi)', 2, 1, 1, 'RM', 0, ''),
('212707dc', 'D122102', 'MIK VIII (Manajemen Komunikasi dan Informasi Keseh', 3, 3, 0, 'RM', 0, ''),
('212e62b8', '-', 'Pendidikan Agama', 3, 3, 0, 'AK', 0, ''),
('22651384', 'D402719', 'Tata Tulis Laporan/Bhs. Indonesia', 2, 1, 1, 'TO', 1, ''),
('22ef5db6', 'D103625', 'Pengujian  Perangkat Lunak (Software Testing)', 2, 2, 0, 'IF', 1, ''),
('235aede4', 'D402210', 'Elektronika 2 (Teori/Praktik)', 3, 2, 1, 'TO', 1, ''),
('237177d7', 'D303402', 'CNC (Grup B)', 3, 1, 1, 'MID', 1, ''),
('23b479de', 'D305801', 'Ilmu Sosial Budaya Dasar ', 2, 2, 0, 'MID', 1, ''),
('23ba81a0', 'D402211', 'Teknik Digital 1 (Teori/Praktik)', 3, 2, 1, 'TO', 1, ''),
('23ec405d', 'E523409', 'Electronic Engine', 3, 2, 1, 'AB', 1, ''),
('244a66ae', 'E503412', 'Rangka Kendaraan 1 Grup B', 2, 1, 1, 'MO', 1, ''),
('24b995f9', 'E302207', 'Kalkulus II (Calculus II)', 2, 2, 0, 'TK', 1, ''),
('2509581f', 'D514506', 'Manajemen Konstruksi ', 2, 2, 0, 'KB', 1, ''),
('260fe813', 'D103621', 'Mata Kuliah Pilihan (Distributed System)', 3, 2, 1, 'IF', 1, ''),
('2935243b', 'D313626', 'Teknik Manufaktur 2 (Grup B)', 3, 1, 1, 'MID', 1, ''),
('29d86f65', 'D513613', 'Jalan Raya dan Kereta Api ', 2, 2, 0, 'KB', 1, ''),
('2b016da8', 'E402211', 'Teknik Digital 1', 3, 2, 1, 'TE', 1, ''),
('2b406fe0', 'D303612', 'Mekatronika', 3, 2, 1, 'MID', 1, ''),
('2dbfc58f', 'D512205', 'Matematika  Terapan 2', 2, 2, 0, 'KB', 1, ''),
('2defcf51', 'E602420', 'Kimia Polimer', 2, 2, 0, 'KIM', 1, ''),
('319dbae9', 'E503202', 'Kerja Bangku Grup B', 2, 1, 1, 'MO', 1, ''),
('350a913f', 'E2033616', 'Tugas Akhir', 0, 0, 0, 'TM', 1, ''),
('35a224f7', 'E503219', 'Kewarganegaraan kk', 9, 5, 4, 'IF', 0, 'jjjj'),
('3635ed7e', 'D201203', 'Pendidikan Kewarganegaraan', 2, 2, 0, 'KA', 0, ''),
('3787a11a', 'D122103', 'MIK IX (Manajemen Proyek SIK) (Health Project Mana', 3, 3, 0, 'RM', 0, ''),
('3834a2ef', 'D103406', 'Multimedia Authoring & Scripting ', 3, 2, 1, 'IF', 1, ''),
('387869ad', 'D103408', 'Desain Perangkat Lunak (Software Design)', 2, 2, 0, 'IF', 1, ''),
('398c5501', 'E303409', 'Jaringan Komputer', 3, 2, 1, 'TK', 1, ''),
('3a5562e6', 'E701105', 'Pendidikan Kewarganegaraan', 2, 2, 0, 'RM', 0, ''),
('3aae1503', 'D513303', 'Konstruksi Plastis', 2, 1, 1, 'KB', 1, ''),
('3bde704a', 'E503408', 'Engine Rebuild Grup A', 2, 1, 1, 'AB', 1, ''),
('3cea0b7b', 'E404205', 'Bahasa Indonesia', 2, 1, 1, 'TE', 1, ''),
('3d1871be', 'E703203', 'KKPMT II (Patofisiologi & Terminologi Medis)', 2, 1, 1, 'RM', 0, ''),
('3d372fcd', 'D122107', 'SIK VII (Sistem Informasi Kesehatan Nasional) (National Health Information System)', 2, 1, 1, 'RM', 0, ''),
('3d94d6ea', 'E503216', 'Dasar-Dasar sistem kelistrikan ( Kelistrikan 1 )', 2, 1, 1, 'AB', 1, ''),
('3da05458', 'D404701', 'Sistem Otomasi 4 (T/P)', 3, 2, 1, 'TO', 1, ''),
('3dce06d3', 'D302217', 'Thermodinamika Teknik 2', 2, 1, 1, 'MID', 1, ''),
('3e9009f9', 'E102207', 'Pengantar Ilmu Bisnis', 2, 2, 0, 'AK', 0, ''),
('3f1b05c3', 'D203213', 'Perpajakan 3 + Praktikum', 3, 2, 1, 'KA', 0, ''),
('40a71860', 'E403834', 'Perancangan Sistem', 2, 1, 1, 'TE', 1, ''),
('40fd2ad4', 'E302411', 'Probabilitas & Statistik', 2, 2, 0, 'TK', 1, ''),
('41094835', 'E512512', 'Dinamika Kendaraan', 2, 2, 0, 'MO', 1, ''),
('41a74480', 'E604439', 'Manajemen Industri & Kewirausahaan', 2, 2, 0, 'KIM', 1, ''),
('4363fd01', 'E523405', 'Intermediate Hydraulic system Grup A', 2, 1, 1, 'AB', 1, ''),
('43f9f97d', 'D202301', 'Bahasa Inggris 2', 2, 2, 0, 'KA', 0, ''),
('43fd50d3', 'E502210', 'Konversi Energi', 2, 2, 0, 'MO', 1, ''),
('4431ee2f', 'D302413', 'Teknik Listrik 3 ', 2, 1, 1, 'MK', 1, ''),
('449c59a8', 'E603223', 'Thermodinamika Kimia', 2, 1, 1, 'KIM', 1, ''),
('44f1e3ca', 'E603437', 'Pengantar Lingkungan', 2, 2, 0, 'KIM', 1, ''),
('4566c813', 'D303329', 'Teknik Pengelasan 2 ', 3, 2, 1, 'MK', 1, ''),
('45ac9418', 'E503216', 'Dasar-Dasar sistem kelistrikan ( Kelistrikan 1 )', 2, 1, 1, 'MO', 1, ''),
('45cb6e45', 'D323624', 'Programmable Logic Control (PLC) 2', 2, 0, 2, 'MK', 1, ''),
('45d397ab', 'D514508', 'Ekonomi Teknik', 2, 2, 0, 'KB', 1, ''),
('468d5459', 'E501404', 'Bahasa Indonesia', 3, 3, 0, 'AB', 1, ''),
('46dbc6de', 'D402209', 'Rangkaian Listrik 2', 3, 2, 1, 'TO', 1, ''),
('46ebfe6b', 'D313614', 'Mesin-Mesin Industri', 2, 2, 0, 'MID', 1, ''),
('473821a2', 'E505603', 'Project Work', 0, 0, 0, 'AB', 1, ''),
('473f3d67', 'D513417', 'Rekayasa Pondasi 1', 2, 1, 1, 'KB', 1, ''),
('47c79445', 'E703205', 'KKPMT II (Coding)', 2, 1, 1, 'RM', 0, ''),
('485b8918', 'D302209', 'Mekanika Teknik 2 ', 2, 2, 0, 'MID', 1, ''),
('4892b504', 'D402415', 'Sinyal & Sistem', 2, 2, 0, 'TO', 1, ''),
('495475bb', 'E501404', 'Bahasa Indonesia', 3, 3, 0, 'MO', 1, ''),
('49716542', 'E103413', 'Perpajakan 3 (PBB,BPHTB,Pajak Daerah) (T)', 3, 2, 1, 'AK', 0, ''),
('498169cf', 'D305704', 'Praktek Kerja Industri  & Seminar (PBK', 4, 4, 0, 'MK', 1, ''),
('49b3364c', 'D203522', 'Algoritma dan Pemograman', 3, 2, 1, 'KA', 0, ''),
('49c44ec1', 'D403731', 'Tugas Akhir', 0, 0, 0, 'TO', 1, ''),
('4a635086', 'E502207', 'Aplikasi Komputer', 2, 1, 1, 'AB', 1, ''),
('4aea0ba2', 'D202410', 'Kewirausahaan', 2, 2, 0, 'KA', 0, ''),
('4b1115e0', 'E503210', 'Dasar-Dasar Sistem Pemindah Tenaga ( SPT 1) Grup A', 2, 1, 1, 'AB', 1, ''),
('4b725a11', 'D204605', 'Komputer Akuntansi 4', 2, 1, 1, 'KA', 0, ''),
('4bbabf89', 'E103211', 'Perpajakan 1 (PPh & Metode Pemungutan) (P)', 0, 0, 0, 'AK', 0, ''),
('4ce395e6', 'D303405', 'Hidrolik & Pneumatik 1', 3, 2, 1, 'MID', 1, ''),
('4cf5178d', 'D202413', 'Statistik Ekonomi + Praktikum', 3, 2, 1, 'KA', 0, ''),
('4d906238', 'E601203', 'Kewarganegaraan', 2, 2, 0, 'KIM', 1, ''),
('4d9e4cb0', 'E603435', 'Perawatan Alat Industri', 2, 2, 0, 'KIM', 1, ''),
('4e7d3108', 'D102208', 'Dasar Basis Data (Database Fundamental)', 3, 2, 1, 'IF', 1, ''),
('4e817536', 'D305602', 'Manajemen Mutu ', 2, 1, 1, 'MK', 1, ''),
('4f5575cf', 'D103617', 'Komputansi Awan (Cloud Computing)', 3, 2, 1, 'IF', 1, ''),
('4f7b7f5c', 'D203304', 'Akuntansi Sektor Publik', 3, 3, 0, 'KA', 0, ''),
('4f818695', 'D505602', 'Utilitas Bangunan ', 2, 1, 1, 'KB', 1, ''),
('50a58531', 'E2032310', 'Elemen Mesin 1', 2, 2, 0, 'TM', 1, ''),
('51513c8a', 'E703411', 'KKPMT IV (Patofisiologi & Terminologi Medis)', 2, 1, 1, 'RM', 0, ''),
('52522b07', 'E603436', 'Perpindahan Massa Termal', 2, 1, 1, 'KIM', 1, ''),
('52a1cccb', 'D204708', 'Pemograman Visual Lanjutan', 2, 1, 1, 'KA', 0, ''),
('52e9e047', 'D501102', 'Kewarganegaraan', 2, 2, 0, 'KB', 1, ''),
('53561a0b', 'E103414', 'Akuntansi Pajak', 3, 2, 1, 'AK', 0, ''),
('536491e3', 'D204101', 'Komputer Dasar', 2, 1, 1, 'KA', 0, ''),
('540afdf4', 'E204203', 'Bahasa Inggris Teknik 1', 2, 2, 0, 'TM', 1, ''),
('55c6846f', 'D313727', 'Teknik Pelapisan', 2, 1, 1, 'MID', 1, ''),
('55f9bf3d', 'D313626', 'Teknik Manufaktur 2', 3, 2, 1, 'MID', 1, ''),
('56160b94', 'D205702', 'Etika Bisnis dan Profesi', 2, 2, 0, 'KA', 0, ''),
('56de0859', 'D303330', 'Teknik Pengujian dan Inspeksi', 2, 1, 1, 'MID', 1, ''),
('585f5d36', 'D303204', 'Gambar Teknik 2 ', 3, 2, 1, 'MID', 1, ''),
('59036a91', 'D513321', 'Struktur Beton ', 2, 1, 1, 'KB', 1, ''),
('5a093be4', 'D103621', 'Mata Kuliah Pilihan (Database Object)', 3, 2, 1, 'IF', 1, ''),
('5a5cc888', 'E503202', 'Kerja Bangku Grup A', 2, 1, 1, 'AB', 1, ''),
('5ad268bf', 'D402207', 'Matematika 2', 3, 3, 0, 'TO', 1, ''),
('5b83f189', 'E513408', 'Engine Rebuild (Engine 3) Grup B', 2, 1, 1, 'MO', 1, ''),
('5c9e86bc', 'D103620', 'Pemrograman Visual (Visual Programming)', 3, 2, 1, 'IF', 1, ''),
('5d61fb67', 'D303329', 'Teknik Pengelasan 2 (Grup B)', 3, 1, 1, 'MID', 1, ''),
('602e6e1b', 'E103218', 'Penganggaran Bisnis', 2, 1, 1, 'AK', 0, ''),
('60983a27', 'E204408', 'Kewirausahaan', 2, 2, 0, 'TM', 1, ''),
('60a86fb9', 'E202416', 'Teknologi Bahan 2', 2, 2, 0, 'TM', 1, ''),
('61665319', 'E303412', 'Troubleshooting I', 3, 2, 1, 'TK', 1, ''),
('62ad1937', 'D303615', 'Pemeliharaan dan Perbaikan Mesin', 2, 1, 1, 'MK', 1, ''),
('6323485a', 'D125303', 'PKMD (Development of Health Public / Job Training)', 3, 2, 1, 'RM', 0, ''),
('64ae683d', 'E105401', 'Etika Profesi', 2, 2, 0, 'AK', 0, ''),
('65b94948', 'E102201', 'Komputer Dasar', 2, 1, 1, 'AK', 0, ''),
('65c8a362', 'E101205', 'Bahasa Inggris 2', 2, 2, 0, 'AK', 0, ''),
('65fbe0bb', 'E503210', 'Dasar-Dasar Sistem Pemindah Tenaga ( SPT 1) Grup B', 2, 1, 1, 'MO', 1, ''),
('672b0648', 'D303833', 'Tugas Akhir', 0, 0, 0, 'MID', 1, ''),
('6830dbb7', 'D302413', 'Teknik Listrik 3 ', 2, 1, 1, 'MID', 1, ''),
('684b5514', 'E602213', 'Proses Kimia Terapan', 2, 1, 1, 'KIM', 1, ''),
('6923805e', 'D304303', 'Bahasa Inggris 2', 2, 1, 1, 'MID', 1, ''),
('6a1590da', 'E502210', 'Konversi Energi', 2, 2, 0, 'AB', 1, ''),
('6a23e4be', 'E703413', 'TIK V (Jarkom)', 2, 1, 1, 'RM', 0, ''),
('6b14db9b', 'E403836', 'Teknik Kontrol 2', 3, 2, 1, 'TE', 1, ''),
('6cecb7bb', 'E503223', 'Bagian-Bagian mesin Otomotif', 2, 1, 1, 'AB', 1, ''),
('6d3d1873', 'E303408', 'Sistem Mikroprosessor', 3, 2, 1, 'TK', 1, ''),
('6d3f0d80', 'E2032315', 'Kimia Terapan', 2, 1, 1, 'TM', 1, ''),
('6e287bdc', 'D303207', 'Kerja Bangku (Grup B)', 3, 1, 1, 'MID', 1, ''),
('6fd24363', 'D513206', 'Ilmu Ukur Tanah II', 3, 2, 1, 'KB', 1, ''),
('6fd7993f', 'D305801', 'Ilmu Sosial Budaya Dasar', 2, 2, 0, 'MK', 1, ''),
('704488a2', 'D203406', 'Akuntansi Manajemen + Praktikum', 3, 2, 1, 'KA', 0, ''),
('71ada755', 'E513409', 'Sistem Bahan Bakar Grup B', 2, 1, 1, 'MO', 1, ''),
('725309a6', 'D303417', 'Pengecoran Logam', 2, 1, 1, 'MK', 1, ''),
('739240fe', 'D202616', 'Manajemen Keuangan', 3, 3, 0, 'KA', 0, ''),
('73a49f7d', '-', 'Perkuliahan berbasis Kerja', 4, 4, 0, 'TO', 1, ''),
('73ec2dd9', 'D303610', 'Kontrol Proses 2', 2, 1, 1, 'MID', 1, ''),
('73f982c6', 'D404402', 'Metode Penelitian', 2, 2, 0, 'TO', 1, ''),
('7409dba2', 'D122209', 'MMIK V (Manajemen Resiko Klinik) (Clinics Risk Management)', 2, 1, 1, 'RM', 0, ''),
('75d7501d', 'D501204', 'Bahasa Inggris 2', 2, 2, 0, 'KB', 1, ''),
('75e1b989', 'D303432', 'Teknik Produksi 2 ', 3, 2, 1, 'MK', 1, ''),
('7646952b', 'E302209', 'Basis Data (Database)', 3, 2, 1, 'TK', 1, ''),
('765d3674', 'E504404', 'Lingkungan Hidup', 2, 2, 0, 'MO', 1, ''),
('76d111fe', 'D302211', 'Teknik Listrik 1', 2, 1, 1, 'MID', 1, ''),
('7752c277', 'E103404', 'Akuntansi Sektor Publik', 3, 3, 0, 'AK', 0, ''),
('77b22057', 'E523411', 'Intermediate Powertrain Grup B', 2, 1, 1, 'AB', 1, ''),
('77cd71a7', 'E503204', 'Sistem Hidrolik - Pneumatik 1', 2, 1, 1, 'AB', 1, ''),
('784530a0', '-', 'Mentoring', 0, 0, 0, 'KIM', 1, ''),
('786a7346', 'E602417', 'Analisis Air dan Bahan Makanan', 3, 2, 1, 'KIM', 1, ''),
('78a0e8dd', 'D513311', 'Rencana Anggaran Biaya', 2, 1, 1, 'KB', 1, ''),
('78d5057f', 'E401203', 'Pendidikan Agama', 3, 3, 0, 'TE', 1, ''),
('794deaad', 'D323522', 'Teknik Digital ', 2, 0, 2, 'MK', 1, ''),
('79837f03', 'E513414', 'Bodi Otomotif 1 Grup B', 2, 1, 1, 'MO', 1, ''),
('7a7f91d3', 'E705608', 'Tugas Akhir', 0, 0, 0, 'RM', 0, ''),
('7a9f9c03', 'E102223', 'Statistik Ekonomi', 3, 1, 1, 'AK', 0, ''),
('7afa7a55', 'D103621', 'Mata Kuliah Pilihan (Game Animation & Development)', 3, 2, 1, 'IF', 1, ''),
('7b889686', 'E203410', 'Teknik Pabrikasi Logam', 2, 1, 1, 'TM', 1, ''),
('7bb06cb2', 'E702410', 'SIK - III (Epideminologi)', 2, 1, 1, 'RM', 0, ''),
('7cf4b71a', 'D101204', 'Bahasa Inggris II (English II /TOEFL Like)', 2, 2, 0, 'IF', 1, ''),
('7dd882d9', 'D103202', 'Sistem Operasi (Operating System)', 3, 2, 1, 'IF', 1, ''),
('7dfcc3b5', 'E202210', 'Mekanika Teknik 1', 2, 2, 0, 'TM', 1, ''),
('7efc498d', 'E703411', 'KKPMT - IV (Coding)', 2, 1, 1, 'RM', 0, ''),
('7f963e18', '-', 'Mentoring', 0, 0, 0, 'TK', 1, ''),
('7fc073aa', 'E502207', 'Aplikasi Komputer Grup A', 2, 1, 1, 'MO', 1, ''),
('81a2c125', 'D505601', 'Ilmu Sosial Dasar', 2, 2, 0, 'KB', 1, ''),
('81aff315', 'E704201', 'Psikologi Terapan', 2, 2, 0, 'RM', 0, ''),
('8286b39a', 'D103616', 'Pengaksesan WAN (Accessing the WAN)', 3, 2, 1, 'IF', 1, ''),
('82a5b284', 'E513408', 'Engine Rebuild (Engine 3) Grup A', 2, 1, 1, 'MO', 1, ''),
('837a8b85', 'E503202', 'Kerja Bangku Grup B', 2, 1, 1, 'AB', 1, ''),
('837af64b', 'E502205', 'Kimia Terapan', 2, 2, 0, 'AB', 1, ''),
('849141dd', 'E203202', 'Proses Pemesinan 1', 3, 2, 1, 'TM', 1, ''),
('85092be8', 'D313727', 'Teknik Pelapisan', 2, 1, 1, 'MK', 1, ''),
('854b0ed4', 'D303608', 'Kerja Proyek dan Seminar', 3, 2, 1, 'MK', 1, ''),
('864e3df4', 'E402207', 'Matematika 2', 3, 3, 0, 'TE', 1, ''),
('87f1b0bc', 'E405801', 'Ilmu Sosial dan Budaya Dasar', 2, 2, 0, 'TE', 1, ''),
('880d035c', 'D203507', 'Auditing 1', 3, 2, 1, 'KA', 0, ''),
('888fd798', 'D302410', 'Mesin Bolak Balik', 2, 2, 0, 'MID', 1, ''),
('8c1c8955', 'D515602', 'Teknologi Tepat Guna', 2, 1, 1, 'KB', 1, ''),
('8d2cfe13', '-', 'Mentoring', 0, 0, 0, 'TO', 1, ''),
('8d67caeb', 'D302214', 'Teknologi bahan 1 ', 2, 2, 0, 'MID', 1, ''),
('8d6f3cb4', 'E601204', 'Bahasa Indonesia & Tata tulis', 3, 3, 0, 'KIM', 1, ''),
('8e07d4d9', 'E602214', 'Kimia Analitik', 2, 1, 1, 'KIM', 1, ''),
('8e3e1015', 'D303329', 'Teknik Pengelasan 2 (Grup A)', 3, 1, 1, 'MID', 1, ''),
('8f67f542', 'E601101', 'Pendidikan Agama', 3, 3, 0, 'KIM', 1, ''),
('8f6cf039', 'E404404', 'Ekonomi Industri', 2, 2, 0, 'TE', 1, ''),
('91f3a445', 'E203203', 'Teknik Pengelasan 1', 2, 1, 1, 'TM', 1, ''),
('923756ed', 'E503210', 'Dasar-Dasar Sistem Pemindah Tenaga ( SPT 1) Grup B', 2, 1, 1, 'AB', 1, ''),
('92e44d2d', 'D514502', 'Program Aplikasi 2 (SAP)', 3, 2, 1, 'KB', 1, ''),
('93090ca9', 'D202615', 'Metodologi Penelitian', 3, 3, 0, 'KA', 0, ''),
('9528c87f', '-', 'Mentoring', 0, 0, 0, 'KA', 0, ''),
('95cba5d8', 'E102410', 'Kewirausahaan', 2, 2, 0, 'AK', 0, ''),
('970946c6', 'E403414', 'Teknik Kontrol 1', 3, 2, 1, 'TE', 1, ''),
('97221e54', 'E602421', 'Pengendalian Proses', 2, 1, 1, 'KIM', 1, ''),
('978fe520', 'D202213', 'Matematika Keuangan dan Bisnis', 2, 2, 0, 'KA', 0, ''),
('97c3929c', 'D202108', 'Pengantar Ilmu Bisnis', 2, 2, 0, 'KA', 0, ''),
('97eb3aef', 'E204204', 'Teknologi Lingkungan', 2, 2, 0, 'TM', 1, ''),
('98297db8', 'D103409', 'Pemrograman Web (Web Programming)', 3, 2, 1, 'IF', 1, ''),
('99c0d9b2', 'D402203', 'Pemrograman Komputer 1', 3, 2, 1, 'TO', 1, ''),
('9a025463', 'D123203', 'KKPMT IX (Terminologi Medis) (Medical Terminology)', 2, 1, 1, 'RM', 0, ''),
('9a45be0c', 'E523405', 'Intermediate Hydraulic system Grup B', 2, 1, 1, 'AB', 1, ''),
('9a586fbc', 'E203409', 'Pengecoran Logam', 3, 2, 1, 'TM', 1, ''),
('9aaedfac', 'E403203', 'Pemrograman Komputer 1', 3, 2, 1, 'TE', 1, ''),
('9d6fded5', 'D303405', 'Hidrolik & Pneumatik 1', 3, 2, 1, 'MK', 1, ''),
('9e338d28', 'D123206', 'TIK XIII - Pemrograman Web (Web Programming)', 2, 1, 1, 'RM', 0, ''),
('9e83aa33', 'E703202', 'TIK - III (Algoritma & Pemrograman)', 2, 1, 1, 'RM', 0, ''),
('9f540636', 'E302412', 'Etika Profesi (Ethic & Law in ICT)', 2, 2, 0, 'TK', 1, ''),
('9f69b623', 'D401203', 'Pendidikan Agama', 3, 3, 0, 'TO', 1, ''),
('a0a53c0e', 'E513414', 'Bodi Otomotif 1 Grup A', 2, 1, 1, 'MO', 1, ''),
('a16c31a1', 'D513204', 'Rekayasa Hidrolika', 2, 1, 1, 'KB', 1, ''),
('a1eb8ae8', 'D204303', 'Komputer Akuntansi 2', 2, 1, 1, 'KA', 0, ''),
('a32ead00', 'E702206', 'TIK II (Aplikasi Perangkat Lunak di sarana Yankes)', 2, 1, 1, 'RM', 0, ''),
('a37fce37', 'E403413', 'Rekayasa Perangkat Lunak', 3, 2, 1, 'TE', 1, ''),
('a43a5d3c', 'D124201', 'Kerja Proyek dan Seminar (Project Work and Seminar', 2, 0, 2, 'RM', 0, ''),
('a43aa6aa', 'E502205', 'Kimia Terapan', 2, 2, 0, 'MO', 1, ''),
('a449ea12', 'E303411', 'Pemodelan & Simulasi', 3, 2, 1, 'TK', 1, ''),
('a501b2b8', 'E202206', 'CAD', 3, 2, 1, 'TM', 1, ''),
('a6384dce', 'E401202', 'Pendidikan Kewarganegaraan', 2, 2, 0, 'TE', 1, ''),
('a697126b', 'E605646', 'Tugas Akhir', 0, 0, 0, 'KIM', 1, ''),
('a6e630a7', 'E502207', 'Aplikasi Komputer Grup B', 2, 1, 1, 'MO', 1, ''),
('a7eeec37', 'E303201', 'Rangkaian Analog (Analog Circuit)', 3, 2, 1, 'TK', 1, ''),
('a88be458', 'E513409', 'Sistem Bahan Bakar Grup A', 2, 1, 1, 'MO', 1, ''),
('a908a367', 'E705405', 'Praktik Klinik Lapangan II', 0, 0, 0, 'RM', 0, ''),
('a9eaafec', 'E402208', 'Fisika 2', 3, 3, 0, 'TE', 1, ''),
('aba0d749', 'E103407', 'Audit 1', 3, 2, 1, 'AK', 0, ''),
('acb9f7c9', 'D513229', 'Laboratorium Konstruksi 1', 3, 2, 1, 'KB', 1, ''),
('ad7efe50', 'E603224', 'Pengenalan Industri', 2, 2, 0, 'KIM', 1, ''),
('ae2f9fd5', 'E103406', 'Akuntansi Manajemen (T)', 3, 2, 1, 'AK', 0, ''),
('ae94635a', 'E523411', 'Intermediate Powertrain Grup A', 2, 1, 1, 'AB', 1, ''),
('aef6ba59', 'D514401', 'Mekanika Bahan', 2, 2, 0, 'KB', 1, ''),
('af65c5db', 'D303615', 'Pemeliharaan dan Perbaikan Mesin', 2, 1, 1, 'MID', 1, ''),
('af799ee1', 'E202209', 'Matematika Terapan 2', 2, 2, 0, 'TM', 1, ''),
('b0917f4f', 'E505601', 'Praktek Kerja Lapangan', 4, 4, 0, 'MO', 1, ''),
('b13c3576', 'E103409', 'Akuntansi Keuangan Lanjutan 1 (P)', 0, 0, 0, 'AK', 0, ''),
('b207ea01', 'D514611', 'K3 dan Lingkungan Hidup', 2, 2, 0, 'KB', 1, ''),
('b5e18aec', 'E305603', 'Praktek Kerja Lapangan', 4, 4, 0, 'TK', 1, ''),
('b64a54ed', 'D303402', 'CNC', 3, 2, 1, 'MK', 1, ''),
('b6d86713', 'E402209', 'Rangkaian Listrik 2', 3, 2, 1, 'TE', 1, ''),
('b82df7bf', 'E2034403', 'Bahasa Indonesia/Tata Tulis Laporan', 3, 3, 0, 'TM', 1, ''),
('ba17d0c5', 'D203615', 'Akuntansi Perbankan + Praktikum', 2, 1, 1, 'KA', 0, ''),
('ba76e238', 'E703415', 'MMIK - II', 2, 1, 1, 'RM', 0, ''),
('ba91fe95', 'D402208', 'Fisika 2', 2, 2, 0, 'TO', 1, ''),
('ba922e39', 'D303608', 'Kerja Proyek & Seminar', 3, 2, 1, 'MK', 1, ''),
('bb258cbe', '-', 'Komputerisasi Akuntansi 3', 2, 1, 1, 'KA', 0, ''),
('bb6b3938', 'D313716', 'Pemipaan', 2, 1, 1, 'MID', 1, ''),
('bb98fee2', 'E202211', 'Teknik Listrik 1', 2, 1, 1, 'TM', 1, ''),
('bbd6f122', 'D512409', 'Mekanika Rekayasa 4', 2, 1, 1, 'KB', 1, ''),
('bcc7f81c', 'E402210', 'Elektronika 2', 3, 2, 1, 'TE', 1, ''),
('bcdda3b6', 'E503210', 'Dasar-Dasar Sistem Pemindah Tenaga ( SPT 1) Grup A', 2, 1, 1, 'MO', 1, ''),
('bd209028', 'D104602', 'Metodologi Penelitian (Research Methodology)', 2, 2, 0, 'IF', 1, ''),
('bd54ee16', 'D302410', 'Mesin Bolak Balik', 2, 2, 0, 'MK', 1, ''),
('bd7790ae', 'D303207', 'Kerja Bangku (Grup A)', 3, 1, 1, 'MID', 1, ''),
('be5c8dd9', 'E102201', 'Akuntansi Keuangan 1', 3, 2, 1, 'AK', 0, ''),
('bfbcbaf9', 'D104401', 'Cyber-Preneurship', 2, 2, 0, 'IF', 1, ''),
('c02d8480', 'E603222', 'Aplikasi Komputer Teknik Kimia', 3, 2, 1, 'KIM', 1, ''),
('c0a75304', 'E503223', 'Bagian-Bagian Mesin Otomotif', 2, 1, 1, 'MO', 1, ''),
('c0cc0d36', 'E602416', 'Biokimia', 3, 2, 1, 'KIM', 1, ''),
('c128aa39', 'D313211', 'Mekanik Mesin', 2, 2, 0, 'MID', 1, ''),
('c22fce24', 'D101205', 'Kewarganegaraan (Civilization)', 2, 2, 0, 'IF', 1, ''),
('c29825ba', 'D513209', 'Konstruksi Bang. Gedung 1', 2, 2, 0, 'KB', 1, ''),
('c42a6e11', 'E705607', 'Praktek Kerja Lapangan', 0, 0, 0, 'RM', 0, ''),
('c55d0fda', 'D102413', 'Kecerdasan Buatan (Artificial Intelligence)', 3, 2, 1, 'IF', 1, ''),
('c5af8869', 'D512207', 'Mekanika Rekayasa 2', 2, 1, 1, 'KB', 1, ''),
('c62edd5a', 'E303202', 'Struktur Data (Data Structure)', 3, 2, 1, 'TK', 1, ''),
('c631e3fb', 'E305201', 'Lingkungan/K3LH (Environment)', 2, 2, 0, 'TK', 1, ''),
('c6bff423', 'D513616', 'Konstruksi Bangunan Air/ Jalan', 2, 2, 0, 'KB', 1, ''),
('c6c91c63', 'D305702', 'Manajemen Mutu ', 2, 1, 1, 'MID', 1, ''),
('c76f59be', 'D203211', 'Perpajakan 1 + Praktikum', 3, 2, 1, 'KA', 0, ''),
('c7d216cd', 'E202417', 'Kelistrikan Mesin Perkakas', 2, 1, 1, 'TM', 1, ''),
('c7d955d5', 'D305704', 'Praktek Kerja Industri  & Seminar (PBK)', 4, 4, 0, 'MID', 1, ''),
('c80c77dc', 'E501202', 'Kewarganegaraan', 2, 2, 0, 'AB', 1, ''),
('cace4d9c', 'E704403', 'MUK - II (Ergonomi )', 2, 1, 1, 'RM', 0, ''),
('cb1cab79', 'D303330', 'Teknik Pengujian dan Inspeksi', 2, 1, 1, 'MK', 1, ''),
('cb211994', 'D303610', 'Kontrol Proses 2', 2, 1, 1, 'MK', 1, ''),
('cbfabccf', 'D105803', 'Praktek Kerja Lapangan (Internship)', 4, 4, 0, 'IF', 1, ''),
('cce26a88', 'D313624', 'Teknik Desain 2 (Grup A)', 3, 1, 1, 'MID', 1, ''),
('cce5b96b', 'D303432', 'Teknik Produksi 2 (Grup B)', 3, 1, 1, 'MID', 1, ''),
('cce922e6', 'D513211', 'Mekanika Tanah 1', 2, 2, 0, 'KB', 1, ''),
('cd02564d', 'DKBKB042', 'Tugas Akhir', 0, 0, 0, 'KB', 1, ''),
('cdf7e954', 'E301102', 'Pendidikan Agama', 3, 3, 0, 'TK', 1, ''),
('ce225d20', 'E701205', 'Bahasa Inggris II', 2, 2, 0, 'RM', 0, ''),
('ce864fa9', 'E405802', 'Tugas Akhir', 0, 0, 0, 'TE', 1, ''),
('cf09c844', 'D203417', 'Pasar Modal', 3, 3, 0, 'KA', 0, ''),
('cf8a2266', 'E403415', 'Sistem Otomasi', 3, 2, 1, 'TE', 1, ''),
('d027a756', 'E505602', 'On Job Training 2', 3, 2, 1, 'AB', 1, ''),
('d14c2aee', 'D303204', 'Gambar Teknik 2 Grup B', 3, 2, 1, 'MID', 1, ''),
('d1515915', 'D401202', 'Pendidikan Kewarganegaraan', 2, 2, 0, 'TO', 1, ''),
('d16ccb3d', 'D513415', 'Rekayasa Gempa', 2, 2, 0, 'KB', 1, ''),
('d3018994', 'E402417', 'Mesin Listrik', 3, 2, 1, 'TE', 1, ''),
('d38154e9', 'E702205', 'SIK - I', 2, 1, 1, 'RM', 0, ''),
('d3b2f9cf', 'D313624', 'Teknik Desain 2', 3, 2, 1, 'MID', 1, ''),
('d4af8c53', 'D303608', 'Kerja Proyek & Seminar', 3, 2, 1, 'MID', 1, ''),
('d7a9e543', 'E301204', 'Bahasa Inggris II (English/TOEFL Like)', 2, 2, 0, 'TK', 1, ''),
('d88f4caf', 'D513617', 'Struktur Jembatan 2', 2, 1, 1, 'KB', 1, ''),
('d8bcef27', 'D512203', 'Gambar Teknik 2-Autocad', 3, 2, 1, 'KB', 1, ''),
('d8f0ac11', 'E504402', 'Kewirausahaan', 2, 2, 0, 'MO', 1, ''),
('d92da4ac', 'D305703', 'Psikologi Industri', 2, 2, 0, 'MID', 1, ''),
('d949e97f', 'E603226', 'Kimia Industri', 2, 2, 0, 'KIM', 1, ''),
('da0cf0d3', 'D513422', 'Lab. Rekayasa Beton ', 3, 2, 1, 'KB', 1, ''),
('dab5ad7f', 'E20351', 'CNC 1', 2, 1, 1, 'TM', 1, ''),
('db1de56a', 'D123207', 'TIK XII - Pemrograman Visual (Visual Programming)', 2, 1, 1, 'RM', 0, ''),
('db2dc565', 'E101203', 'Kewarganegaraan', 2, 2, 0, 'AK', 0, NULL),
('dc72589c', 'D403414', 'Mikrokontroler 1', 3, 2, 1, 'TO', 1, ''),
('ddee6363', 'E513204', 'Sistem Roda dan Ban Grup A', 2, 1, 1, 'MO', 1, ''),
('dff38aad', 'E304401', 'Cyberpreneurship', 2, 2, 0, 'TK', 1, ''),
('e0504107', 'E103413', 'Perpajakan 3 (PBB,BPHTB,Pajak Daerah) (P)', 0, 0, 0, 'AK', 0, ''),
('e1e4b7d5', 'E501202', 'Kewarganegaraan', 2, 2, 0, 'MO', 1, ''),
('e29b9bcc', 'E103211', 'Perpajakan 1 (PPh & Metode Pemungutan) (T)', 3, 2, 1, 'AK', 0, ''),
('e2e505e8', 'E104403', 'Komputer Akuntansi 2', 2, 1, 1, 'AK', 0, ''),
('e2f83347', 'E503408', 'Engine Rebuild Grup B', 2, 1, 1, 'AB', 1, ''),
('e30e3e49', 'E505603', 'Tugas Akhir', 0, 0, 0, 'MO', 1, ''),
('e310b38b', 'D103407', 'Konsep Routing Protokol (Routing Protocol and Concept)', 3, 2, 1, 'IF', 1, ''),
('e35cb29d', 'D323834', 'Teknik Robotik 1 ', 3, 2, 1, 'MK', 1, ''),
('e38dd533', 'D313620', 'Pesawat Angkat & Angkut ', 3, 2, 1, 'MID', 1, ''),
('e3a93868', 'D205803', 'Praktik Kerja Lapangan', 4, 4, 0, 'KA', 0, ''),
('e53f9674', 'E603225', 'Teknik Reaksi Kimia', 2, 1, 1, 'KIM', 1, ''),
('e5a593a2', 'E2033060', 'Praktek Kerja Lapangan', 4, 4, 0, 'TM', 1, ''),
('e5b66f55', 'D205804', 'Tugas Akhir', 0, 0, 0, 'KA', 0, ''),
('e6795b0e', 'E301205', 'Kewarganegaraan (Civilization)', 2, 2, 0, 'TK', 1, ''),
('e6cf5434', 'D302204', 'Kimia Teknik', 2, 2, 0, 'MID', 1, ''),
('e80656c8', 'D303417', 'Pengecoran Logam ', 3, 1, 1, 'MID', 1, ''),
('e8bbf9e4', 'E503202', 'Kerja Bangku Grup A', 2, 1, 1, 'MO', 1, ''),
('e947514a', 'E703411', 'KKPMT - IV (Lab Klinik)', 2, 1, 1, 'RM', 0, ''),
('ea6dd650', 'D303612', 'Mekatronika', 3, 2, 1, 'MK', 1, ''),
('eac4262b', 'E403412', 'Mikrokontroller 2', 3, 2, 1, 'TE', 1, ''),
('ed058324', 'D204607', 'Pemograman Visual', 2, 1, 1, 'KA', 0, ''),
('ef896898', 'D403732', 'Ilmu Sosial Budaya Dasar', 2, 2, 0, 'TO', 1, ''),
('efc348d5', 'D303833', 'Tugas Akhir', 0, 0, 0, 'MK', 1, ''),
('f02e9ca5', 'D303402', 'CNC (Grup A)', 3, 1, 1, 'MID', 1, ''),
('f033c64f', 'E105803', 'Praktik Kerja Lapangan', 4, 4, 0, 'AK', 0, ''),
('f31d80f7', 'D302206', 'Matematika  2', 3, 3, 0, 'MID', 1, ''),
('f543fbb2', 'E203408', 'Hidrolik & Pneumatik 2', 2, 1, 1, 'TM', 1, ''),
('f5b7dc29', 'D403413', 'Sistem Otomasi 1 (T/P)', 3, 2, 1, 'TO', 1, ''),
('f6f1a7cc', 'D102414', 'Dasar Pemrograman (Programming  Fundamental)', 3, 2, 1, 'IF', 1, ''),
('f74e1ae0', 'E703412', 'Metodologi Penelitian Kesehatan', 2, 1, 1, 'RM', 0, ''),
('f8c33589', 'E502202', 'Matematika Terapan 2', 2, 2, 0, 'AB', 1, ''),
('f8f4a6ab', 'E102216', 'Matematika Bisnis', 2, 1, 1, 'AK', 0, ''),
('f90c72da', 'D102207', 'Algoritma dan Pemrograman (Algorithm &Programming)', 3, 2, 1, 'IF', 1, ''),
('fa1bbe15', 'D204509', 'Jaringan Komputer', 2, 1, 1, 'KA', 0, ''),
('fa6acf49', 'D313626', 'Teknik Manufaktur 2 (Grup A)', 3, 1, 1, 'MID', 1, ''),
('fad71f98', 'D103619', 'Administrasi Jaringan (Network Adminstration)', 2, 1, 1, 'IF', 1, ''),
('fb137379', 'E405402', 'Psikolog Industri', 2, 2, 0, 'TE', 1, ''),
('fc81d3fd', 'E105804', 'Tugas Akhir', 4, 0, 0, 'AK', 0, ''),
('fc9dca80', 'D203509', 'Akuntansi Keuangan Lanjutan 1 + Praktikum', 3, 2, 1, 'KA', 0, ''),
('fd2677bb', 'D203414', 'Akuntansi Perpajakan + Praktikum', 3, 2, 1, 'KA', 0, ''),
('fd6c25a3', 'E503412', 'Rangka Kendaraan 1 Grup A', 2, 1, 1, 'MO', 1, ''),
('fdd6f010', 'D302201', 'Elemen Mesin 1', 2, 2, 0, 'MID', 1, ''),
('fe22775f', 'D323727', 'Elektronika Daya', 2, 0, 2, 'MK', 1, ''),
('fe252bb7', 'D104804', 'Tugas Akhir (Final Projects)', 0, 0, 0, 'IF', 1, ''),
('feb158a3', 'D103615', 'Teknologi Web 2.0 (Web 2.0 Technology)', 3, 2, 1, 'IF', 1, ''),
('feb6c461', 'D512610', 'Statistika dan Probabilitas', 2, 2, 0, 'KB', 1, ''),
('fee82a34', 'E503421', 'Desain Otomotif 1/Cadecam', 3, 2, 1, 'MO', 1, ''),
('ff0cb7ac', 'D403413', 'Teknik Kontrol 1', 3, 2, 1, 'TO', 1, ''),
('ff33cbf9', 'E703206', 'MIK - II', 2, 1, 1, 'RM', 0, ''),
('ffb0fcf0', 'E504402', 'Kewirausahaan', 2, 2, 0, 'AB', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` varchar(8) NOT NULL COMMENT 'ID Prodi. konsisten',
  `kd_prodi` varchar(3) DEFAULT NULL COMMENT 'Kode Prodi. Ditentukan oleh Sistem',
  `nama_prodi` varchar(50) DEFAULT NULL COMMENT 'Nama Program Studi'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel kumpulan data Program Studi';

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`id_prodi`, `kd_prodi`, `nama_prodi`) VALUES
('04909306', 'MK', 'Mekanik Industri & Desain / Mekatronik '),
('098d5adb', 'TE', 'Teknik Elektronika'),
('2c587fca', 'AB', 'MO / Alat Berat'),
('719f6c9a', 'TM', 'Teknik Mesin'),
('7df4b83d', 'MO', 'Mekanik Otomotif'),
('8add29d4', 'TO', 'Teknik Otomasi'),
('9ca37c45', 'IF', 'Teknik Informatika'),
('a0c06b90', 'MID', 'Mekanik Industri & Desain'),
('a5c4bd3f', 'TK', 'Teknik Komputer'),
('aecd1898', 'KIM', 'Teknik Kimia'),
('d96b301c', 'KB', 'Konstruksi Bangunan'),
('e5ee5440', 'RM', 'Rekam Medik & Informasi Kesehatan'),
('ef5ecb55', 'AK', 'Akuntansi'),
('f130e954', 'KA', 'Komputerisasi Akuntansi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sebaran`
--

CREATE TABLE `tb_sebaran` (
  `id_sebaran` varchar(8) NOT NULL,
  `kd_kelas` varchar(6) NOT NULL,
  `tipe_kelas` char(1) NOT NULL,
  `kd_prodi` varchar(3) NOT NULL,
  `smt` int(1) NOT NULL,
  `kd_matkul` varchar(8) NOT NULL,
  `nama_matkul` varchar(256) NOT NULL,
  `sks` int(1) NOT NULL,
  `sks_teori` int(1) NOT NULL,
  `sks_praktek` int(1) NOT NULL,
  `jam` int(11) NOT NULL,
  `dosen` char(90) NOT NULL,
  `ket` char(48) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='ini adalah tabel sebaran matakuliah yang sudah di setujui oleh pihak kademik';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tb_matakuliah`
--
ALTER TABLE `tb_matakuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tb_sebaran`
--
ALTER TABLE `tb_sebaran`
  ADD PRIMARY KEY (`id_sebaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
