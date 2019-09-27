-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 05:07 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sismo_smkit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `kode_absensi` varchar(50) NOT NULL,
  `nipd` varchar(5) DEFAULT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `npsn` int(10) DEFAULT NULL,
  `id_kelas` varchar(50) DEFAULT NULL,
  `id_jurusan` varchar(20) DEFAULT NULL,
  `jam_mapel` varchar(12) DEFAULT NULL,
  `keterangan` char(1) DEFAULT NULL,
  `tanggal` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_absensi`
--

INSERT INTO `tb_absensi` (`kode_absensi`, `nipd`, `kode_mapel`, `npsn`, `id_kelas`, `id_jurusan`, `jam_mapel`, `keterangan`, `tanggal`) VALUES
('20533660MPUA0717494', '17494', 'MPUA07', 20533660, 'KL1', '20533660MIPA1', '5', 'I', '06/25/18'),
('20533660MPUA0717582', '17582', 'MPUA07', 20533660, 'KL1', '20533660MIPA1', '5', 'S', '06/25/18'),
('20533660MPUA1317494', '17494', 'MPUA13', 20533660, 'KL1', '20533660MIPA1', '2', 'M', '06/25/18'),
('20533660MPUA1317582', '17582', 'MPUA13', 20533660, 'KL1', '20533660MIPA1', '2', 'M', '06/25/18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` varchar(50) DEFAULT NULL,
  `nama_admin` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `password`, `foto`) VALUES
('1', 'Iwan', 'e10adc3949ba59abbe56e057f20f883e', 'Foto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_info_sekolah`
--

CREATE TABLE `tb_info_sekolah` (
  `id` varchar(50) NOT NULL,
  `npsn` int(10) NOT NULL,
  `informasi` longtext,
  `tanggal` varchar(10) DEFAULT NULL,
  `foto` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_info_sekolah`
--

INSERT INTO `tb_info_sekolah` (`id`, `npsn`, `informasi`, `tanggal`, `foto`) VALUES
('20533660061118044527', 20533660, 'oj', '06/11/18 0', ''),
('20533660070918024521', 20533660, 'sksk', '07/09/18 0', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `kode_jadwal` varchar(25) DEFAULT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `jam_ke` char(2) DEFAULT NULL,
  `jam_mulai` varchar(5) DEFAULT NULL,
  `jam_akhir` varchar(5) DEFAULT NULL,
  `hari` varchar(5) DEFAULT NULL,
  `id_kelas` varchar(50) DEFAULT NULL,
  `id_jurusan` varchar(20) DEFAULT NULL,
  `npsn` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`kode_jadwal`, `kode_mapel`, `jam_ke`, `jam_mulai`, `jam_akhir`, `hari`, `id_kelas`, `id_jurusan`, `npsn`) VALUES
('X20533660MIPA1MPUA254', 'MPUA25', '4', '07:00', '09:00', 'Senin', 'KL1', '20533660MIPA1', 20533660),
('KL220533660MIPA2MPUA198', 'MPUA19', '8', '00:00', '00:00', 'Rabu', 'KL2', '20533660MIPA2', 20533660),
('KL120533660MIPA2MPUB074', 'MPUB07', '4', '00:00', '00:00', 'Selas', 'KL1', '20533660MIPA2', 20533660);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` varchar(20) NOT NULL,
  `nama_jurusan` varchar(50) DEFAULT NULL,
  `npsn` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama_jurusan`, `npsn`) VALUES
('20533660BHS1', 'BHS1', 20533665),
('20533660MIPA1', 'MIPA1', 20533660),
('20533660MIPA2', 'MIPA2', 20533660),
('20533660MIPA3', 'MIPA3', 20533660),
('20533660MIPA4', 'MIPA4', 20533660);

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `kode_guru` varchar(4) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `npsn` int(10) NOT NULL,
  `nama_karyawan` varchar(50) DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `status_kepegawaian` varchar(20) DEFAULT NULL,
  `bidang` varchar(10) DEFAULT NULL,
  `telefon` varchar(12) DEFAULT NULL,
  `alamat` longtext,
  `foto` longtext,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`kode_guru`, `nip`, `npsn`, `nama_karyawan`, `jk`, `status_kepegawaian`, `bidang`, `telefon`, `alamat`, `foto`, `password`) VALUES
('E0', '195807121981111004', 20533660, 'H. Musoddaqul Umam, S.Pd, M.Si', 'L', 'Kepala Sekolah', 'Matematika', '08164290215', 'Jl. Danau Kerinci VI/05 Malang', 'sman1malang.png', '1234'),
('G23', '197507122009032002', 20533665, 'Diah Purwaningtyas', 'P', 'Wali Kelas', '', 'X1', 'Dirgantara Permai B III/35 718102', NULL, '1234'),
('P1', '19506101986032009', 20533660, 'Dra. Asfa Choirwati', 'P', 'Guru', 'BK', '085755981059', 'Jl. Danau Sentani II Blok E 3D No.9 Malang', 'sman1malang.png', '1234'),
('PTT1', '', 20533665, 'Susilo Mardi Wahyuni, SE.', 'L', 'Adminsitrasi Keuanga', 'SPP', '(0341)329386', 'Jl. Taman Agung 14', NULL, '1234'),
('S1', '196803291999032000', 20533660, 'Titis Kurniawati, Amd', 'P', 'Tata Usaha', '', '088227117028', 'Jl. Ikan Arwan 16 Malang', '17th.png', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` varchar(50) NOT NULL,
  `nama_kelas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`) VALUES
('KL1', 'X'),
('KL2', 'XI'),
('KL3', 'XII');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konseling`
--

CREATE TABLE `tb_konseling` (
  `id_konseling` varchar(20) NOT NULL,
  `nipd` varchar(5) DEFAULT NULL,
  `kode_guru` varchar(4) DEFAULT NULL,
  `kode_pelanggaran` varchar(5) DEFAULT NULL,
  `keterangan` longtext,
  `tanggal` varchar(10) DEFAULT NULL,
  `npsn` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konseling`
--

INSERT INTO `tb_konseling` (`id_konseling`, `nipd`, `kode_guru`, `kode_pelanggaran`, `keterangan`, `tanggal`, `npsn`) VALUES
('A117433061018091714', '17433', 'P1', 'A1', 's', '06/10/18 0', 20533660),
('A117433061018091728', '17433', 'P1', 'A1', 'a', '06/10/18 0', 20533660),
('A117433061018091906', '17433', 'P1', 'A1', 'a', '06/10/18 0', 20533660),
('A117433061018091923', '17433', 'P1', 'A1', 'a', '06/10/18 0', 20533660),
('A117433061018091950', '17433', 'P1', 'A1', 'a', '06/10/18 0', 20533660),
('A117433061018092334', '17433', 'P1', 'A1', 'aa', '06/10/18 0', 20533660);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai_akademik`
--

CREATE TABLE `tb_nilai_akademik` (
  `id_nilai` varchar(24) NOT NULL,
  `nipd` varchar(5) DEFAULT NULL,
  `kode_mapel` varchar(12) DEFAULT NULL,
  `npsn` int(12) DEFAULT NULL,
  `id_kelas` varchar(50) DEFAULT NULL,
  `id_jurusan` varchar(20) DEFAULT NULL,
  `nilai` int(4) DEFAULT NULL,
  `bobot` char(1) DEFAULT NULL,
  `semester` varchar(2) DEFAULT NULL,
  `keterangan` varchar(25) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai_akademik`
--

INSERT INTO `tb_nilai_akademik` (`id_nilai`, `nipd`, `kode_mapel`, `npsn`, `id_kelas`, `id_jurusan`, `nilai`, `bobot`, `semester`, `keterangan`, `tahun`) VALUES
('1820533660MPUA0717494', '17494', 'MPUA07', 20533660, 'KL1', '20533660MIPA1', 80, 'B', '1', 'Tugas Harian', 2018),
('1820533660MPUA0717582', '17582', 'MPUA07', 20533660, 'KL1', '20533660MIPA1', 87, 'B', '1', 'Tugas Harian', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelajaran`
--

CREATE TABLE `tb_pelajaran` (
  `kode_mapel` varchar(12) NOT NULL,
  `nama_pelajaran` varchar(50) DEFAULT NULL,
  `semester` char(1) DEFAULT NULL,
  `seri` char(1) DEFAULT NULL,
  `beban_balajar` char(2) DEFAULT NULL,
  `npsn` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelajaran`
--

INSERT INTO `tb_pelajaran` (`kode_mapel`, `nama_pelajaran`, `semester`, `seri`, `beban_balajar`, `npsn`) VALUES
('MPUA07', 'PPKn', '1', '1', '2', 20533660),
('MPUA13', 'Bahasa Indonesia', '1', '1', '4', 20533660),
('MPUA19', 'Matematika', '1', '1', '4', 20533660),
('MPUA25', 'Sejarah Indonesia', '1', '1', '2', 20533660),
('MPUA31', 'Bahasa Inggris', '1', '1', '2', 20533660),
('MPUB01', 'Seni Budaya', '1', '1', '2', 20533660),
('MPUB013', 'Prakarya dan Kewirausahaan', '1', '1', '2', 20533660),
('MPUB07', 'Panjas Orkes', '1', '1', '3', 20533660);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggaran`
--

CREATE TABLE `tb_pelanggaran` (
  `kode_pelanggaran` varchar(5) NOT NULL,
  `nama_pelanggaran` longtext,
  `jenis_pelanggaran` varchar(50) DEFAULT NULL,
  `bobot` int(3) DEFAULT NULL,
  `npsn` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelanggaran`
--

INSERT INTO `tb_pelanggaran` (`kode_pelanggaran`, `nama_pelanggaran`, `jenis_pelanggaran`, `bobot`, `npsn`) VALUES
('A1', 'Mencuri/merampas barang milik orang lain', 'Tanggung Jawab', 100, 20533660),
('A2', 'Membawa dan  mengggunakan senjata api atau senjata tajam', 'Tanggung Jawab', 100, 20533660),
('C1', 'Memakai pakaian seragam sekolah tidak sesuai dengan ketentuan', 'Kebersihan', 5, 20533660);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` varchar(25) NOT NULL,
  `id_tagihan` varchar(20) DEFAULT NULL,
  `nipd` varchar(5) DEFAULT NULL,
  `nominal_pembayaran` int(20) DEFAULT NULL,
  `tanggal_pembayaran` varchar(10) DEFAULT NULL,
  `keterangan_bayar` varchar(20) DEFAULT NULL,
  `npsn` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `id_tagihan`, `nipd`, `nominal_pembayaran`, `tanggal_pembayaran`, `keterangan_bayar`, `npsn`) VALUES
('1', 'SP205336600610180820', '17433', 200000, '12/12/2000', '19800000', 20533660),
('SP20533660061018082017433', 'SP205336600610180820', '17433', 20000000, '12/12/2000', 'Lunas', 20533660),
('SP20533660070918010129174', 'SP205336600709180101', '17433', 200000, '09/07/2018', 'Lunas', 20533660),
('SP20533660070918010129175', 'SP205336600709180101', '17582', 0, '', '200000', 20533660),
('SP20533660070918010428174', 'SP205336600709180104', '17433', 0, '', '200000', 20533660),
('SP20533660070918010428175', 'SP205336600709180104', '17582', 0, '', '200000', 20533660);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` varchar(12) NOT NULL,
  `pengirim` varchar(50) DEFAULT NULL,
  `penerima` varchar(50) DEFAULT NULL,
  `pesan` longtext,
  `tanggal` varchar(8) DEFAULT NULL,
  `npsn` int(10)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `pengirim`, `penerima`, `pesan`, `tanggal`, `npsn`) VALUES
('061118012711', 'SMA N 1 MALANG', 'ABADILA BARASMARA BIAS DEWANDRA', 'akaka', '06/11/18', 20533660),
('061118081748', 'ABADILA BARASMARA BIAS DEWANDRA', 'Titis Kurniawati, Amd', 'asas', '06/11/18', 20533660),
('061118081749', 'Dra. Asfa Choirwati', 'SMA N 1 MALANG', 'okkok', '06/11/18', 20533660),
('061118081750', 'Dra. Asfa Choirwati', 'SMA N 1 MALANG', 'llll', '06/11/18', 20533660),
('070818034635', 'Dra. Asfa Choirwati', 'SMA N 1 MALANG', 'apa kabar\r\n', '07/08/18', 20533660),
('070818041726', 'SMA N 1 MALANG', 'Dra. Asfa Choirwati', 'Baik', '07/08/18', 20533660),
('070818042332', 'SMA N 1 MALANG', 'Dra. Asfa Choirwati', 'mohon maaf bu pembayarn spp anak ibu kurang 2 bulan\r\n', '07/08/18', 20533660),
('070818044010', 'SMA N 1 MALANG', 'ABADILA BARASMARA BIAS DEWANDRA', 'Ada apa', '07/08/18', 20533660),
('070818044946', 'SMA N 3 MALANG', 'ASA RAHMATILLAH MAANA', 'bagaimana kabarnya', '07/08/18', 20533665),
('070918033535', 'Titis Kurniawati, Amd', 'ABADILA BARASMARA BIAS DEWANDRA', 'OKOK', '07/09/18', 20533660),
('070918033803', 'Titis Kurniawati, Amd', 'ABADILA BARASMARA BIAS DEWANDRA', 'why', '07/09/18', 20533660),
('070918033804', 'SMA N 1 MALANG', 'Iwan', 'Ok', '07/09/18', NULL),
('070918050520', 'Iwan', 'SMA N 1 MALANG', 's', '07/09/18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `npsn` int(10) NOT NULL,
  `nss` varchar(15) DEFAULT NULL,
  `nama_sekolah` varchar(20) DEFAULT NULL,
  `jalan` varchar(40) DEFAULT NULL,
  `desa` varchar(10) DEFAULT NULL,
  `kecamatan` varchar(20) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `provinsi` varchar(20) DEFAULT NULL,
  `telefon` varchar(12) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `kode_pos` varchar(6) DEFAULT NULL,
  `tahun_berdiri` varchar(4) DEFAULT NULL,
  `foto` longtext,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`npsn`, `nss`, `nama_sekolah`, `jalan`, `desa`, `kecamatan`, `kota`, `provinsi`, `telefon`, `email`, `kode_pos`, `tahun_berdiri`, `foto`, `password`) VALUES
(1, '1', 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20533660, '301056101001', 'SMA N 1 MALANG', 'Jl Tugu Utara No 1', 'Klojen', 'Klojen', 'Kota Malang', 'Jawa Timur', '0341-366454', 'tu_sman1malang@yahoo.com', '65111', '1947', 'sman1malang.png', 'e10adc3949ba59abbe56e057f20f883e'),
(20533665, '301056101003', 'SMA N 3 MALANG', 'Jl. Sultan Agung Utara No. 7', 'Klojen', 'Klojen', 'Kota Malang', 'Jawa Timur', '0341-324768', 'humas@sman3-malang.sch.id', '65111', '0000', 'sman3malang.jpg', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nipd` varchar(5) NOT NULL,
  `nisn` varchar(20) DEFAULT NULL,
  `npsn` int(10) DEFAULT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `tmp_lahir` varchar(10) DEFAULT NULL,
  `tgl_lahir` varchar(10) DEFAULT NULL,
  `alamat` longtext,
  `telefon` varchar(12) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `negara` varchar(20) DEFAULT NULL,
  `nama_ayah` varchar(20) DEFAULT NULL,
  `pekerjaan_ayah` varchar(20) DEFAULT NULL,
  `nama_ibu` varchar(20) DEFAULT NULL,
  `pekerjaan_ibu` varchar(20) DEFAULT NULL,
  `nama_wali` varchar(20) DEFAULT NULL,
  `pekerjaan_wali` varchar(20) DEFAULT NULL,
  `anak_ke` char(1) DEFAULT NULL,
  `id_kelas` varchar(50) DEFAULT NULL,
  `id_jurusan` varchar(20) DEFAULT NULL,
  `asal_sekolah` varchar(20) DEFAULT NULL,
  `status_sekolah` varchar(10) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `password_siswa` varchar(20) DEFAULT NULL,
  `password_wali` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nipd`, `nisn`, `npsn`, `nama_siswa`, `jk`, `tmp_lahir`, `tgl_lahir`, `alamat`, `telefon`, `agama`, `negara`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `nama_wali`, `pekerjaan_wali`, `anak_ke`, `id_kelas`, `id_jurusan`, `asal_sekolah`, `status_sekolah`, `foto`, `password_siswa`, `password_wali`) VALUES
('1', '1', 20533660, 's', 'L', 'Malang', '03/12/2000', 'Malang', '087567900', 'Islam', 'WNI', 'Budi', 'Guru', 'Ana', 'Guru', '-', '-', '3', 'KL1', '20533660MIPA1', 'SMP N 4 Tanggul', 'Aktif', 'b3.png', '81dc9bdb52d04dc20036', '202cb962ac59075b964b'),
('17433', '0022038081', 20533660, 'ABADILA BARASMARA BIAS DEWANDRA', 'P', 'RANTAUPRAP', '07/05/2002', 'JL. KAPISRABA IX BLOK 10D NO.34 Rt 2 Rw 16 Kel. Mangliawan Kec. Pakis 65154\r\n\r\n', '081357081146', 'Islam', 'WNI', 'I WAYAN ARIANTO', 'Karyawan Swasta', 'DENNY TRISNASARI', 'PNS/TNI/Polri', '-', '-', '2', 'KL1', '20533660MIPA3', 'MTs NEGERI 1 RANTAUP', 'Aktif', 'e807151a379cf57c396dd15b1a582c9a--ooh-sehun-sehun-exo-cute.jpg', 'e10adc3949ba59abbe56', 'e10adc3949ba59abbe56'),
('17494', '0023977529', 20533665, 'ASA RAHMATILLAH MAANA', 'P', 'Malang', '15/01/2002', 'JL. ACALIPHA NO.2 Rt 1 Rw  1 Kec. Lowokwaru 65141 ', '082338121153', 'Islam', 'WNI', 'ACHABBA KHAIRUDDIN', 'Wiraswasta', 'NUNUK ANDRIANI', 'Tidak bekerja', '-', '-', '1', 'KL1', '20533660MIPA1', 'SMP NEGERI 3 MALANG', 'Aktif', '686ab100dddd65fc0ea71e7bb4c3db6f-lady-teacher-cartoon-by-vexels.jpg', 'e10adc3949ba59abbe56', 'e10adc3949ba59abbe56'),
('17582', '0014977755\r\n', 20533660, 'IFFAH AINUL HANIFAH\r\n', 'P', 'MALANG\r\n', '03/10/2001', 'JL. SELOREJO MASJID NO.21 Rt 8 Rw 8 Kec. Lowokwaru 65141\r\n', '089690469477', 'Islam', 'WNI', 'SUGENG HARIYONO\r\n', 'Sudah Meninggal\r\n', 'ERNI ZULIATI\r\n', 'Karyawan Swasta\r\n', '-', '-', '5', 'KL1', '20533660MIPA1', 'SMP NEGERI 5 MALANG', 'Aktif', NULL, 'e10adc3949ba59abbe56', 'e10adc3949ba59abbe56');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tagihan`
--

CREATE TABLE `tb_tagihan` (
  `id_tagihan` varchar(20) NOT NULL,
  `nama_tagihan` varchar(50) DEFAULT NULL,
  `nominal_tagihan` int(20) DEFAULT NULL,
  `id_kelas` varchar(50) DEFAULT NULL,
  `keterangan` varchar(20) DEFAULT NULL,
  `tanggal_terbit` varchar(10) DEFAULT NULL,
  `tanggal_akhir` varchar(10) DEFAULT NULL,
  `npsn` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tagihan`
--

INSERT INTO `tb_tagihan` (`id_tagihan`, `nama_tagihan`, `nominal_tagihan`, `id_kelas`, `keterangan`, `tanggal_terbit`, `tanggal_akhir`, `npsn`) VALUES
('SP205336600610180820', 'a', 20000000, 'KL1', 'oko', '12/12/2000', '12/01/2001', 20533660),
('SP205336600709180101', 'SPP Bulan Maret', 200000, 'KL1', 'Pembayaran SPP Bulan', '09/07/2018', '03/07/2018', 20533660),
('SP205336600709180104', 'SPP Bulan Desember 2018', 200000, 'KL1', 'Pembayaran SPP Bulan', '09/07/2018', '31/07/2018', 20533660),
('SP205336650611181238', 'a', 20000000, 'KL1', 'oko\r\n', '12/12/2000', '12/12/2000', 20533665);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`kode_absensi`),
  ADD KEY `FK_tb_absensi_tb_siswa` (`nipd`),
  ADD KEY `FK_tb_absensi_tb_pelajaran` (`kode_mapel`),
  ADD KEY `FK_tb_absensi_tb_sekolah` (`npsn`),
  ADD KEY `FK_tb_absensi_tb_jurusan` (`id_jurusan`),
  ADD KEY `FK_tb_absensi_tb_kelas` (`id_kelas`);

--
-- Indexes for table `tb_info_sekolah`
--
ALTER TABLE `tb_info_sekolah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tb_info_sekolah_tb_sekolah` (`npsn`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD KEY `FK_tb_jadwal_tb_pelajaran` (`kode_mapel`),
  ADD KEY `FK_tb_jadwal_tb_sekolah` (`npsn`),
  ADD KEY `FK_tb_jadwal_tb_kelas` (`id_kelas`),
  ADD KEY `FK_tb_jadwal_tb_jurusan` (`id_jurusan`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`),
  ADD KEY `FK_tb_jurusan_tb_sekolah` (`npsn`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`kode_guru`),
  ADD KEY `FK_tb_karyawan_tb_sekolah` (`npsn`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_konseling`
--
ALTER TABLE `tb_konseling`
  ADD PRIMARY KEY (`id_konseling`),
  ADD KEY `FK_tb_konseling_tb_siswa` (`nipd`),
  ADD KEY `FK_tb_konseling_tb_karyawan` (`kode_guru`),
  ADD KEY `FK_tb_konseling_tb_pelanggaran` (`kode_pelanggaran`),
  ADD KEY `FK_tb_konseling_tb_sekolah_2` (`npsn`);

--
-- Indexes for table `tb_nilai_akademik`
--
ALTER TABLE `tb_nilai_akademik`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `FK_tb_nilai_akademik_tb_kelas` (`id_kelas`),
  ADD KEY `FK_tb_nilai_akademik_tb_siswa` (`nipd`),
  ADD KEY `FK_tb_nilai_akademik_tb_pelajaran` (`kode_mapel`),
  ADD KEY `FK_tb_nilai_akademik_tb_jurusan` (`id_jurusan`),
  ADD KEY `FK_tb_nilai_akademik_tb_sekolah` (`npsn`);

--
-- Indexes for table `tb_pelajaran`
--
ALTER TABLE `tb_pelajaran`
  ADD PRIMARY KEY (`kode_mapel`),
  ADD KEY `FK_tb_pelajaran_tb_sekolah` (`npsn`);

--
-- Indexes for table `tb_pelanggaran`
--
ALTER TABLE `tb_pelanggaran`
  ADD PRIMARY KEY (`kode_pelanggaran`),
  ADD KEY `FK_tb_pelanggaran_tb_sekolah` (`npsn`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `FK_tb_pembayaran_tb_tagihan` (`id_tagihan`),
  ADD KEY `FK_tb_pembayaran_tb_siswa` (`nipd`),
  ADD KEY `FK_tb_pembayaran_tb_sekolah` (`npsn`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `FK_tb_pesan_tb_sekolah` (`npsn`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`npsn`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nipd`),
  ADD KEY `FK_tb_siswa_tb_kelas` (`id_kelas`),
  ADD KEY `FK_tb_siswa_tb_sekolah` (`npsn`),
  ADD KEY `FK_tb_siswa_tb_jurusan` (`id_jurusan`);

--
-- Indexes for table `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  ADD PRIMARY KEY (`id_tagihan`),
  ADD KEY `FK_tb_tagihan_tb_kelas` (`id_kelas`),
  ADD KEY `FK_tb_tagihan_tb_sekolah` (`npsn`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD CONSTRAINT `FK_tb_absensi_tb_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `tb_jurusan` (`id_jurusan`),
  ADD CONSTRAINT `FK_tb_absensi_tb_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`),
  ADD CONSTRAINT `FK_tb_absensi_tb_pelajaran` FOREIGN KEY (`kode_mapel`) REFERENCES `tb_pelajaran` (`kode_mapel`),
  ADD CONSTRAINT `FK_tb_absensi_tb_sekolah` FOREIGN KEY (`npsn`) REFERENCES `tb_sekolah` (`npsn`),
  ADD CONSTRAINT `FK_tb_absensi_tb_siswa` FOREIGN KEY (`nipd`) REFERENCES `tb_siswa` (`nipd`);

--
-- Constraints for table `tb_info_sekolah`
--
ALTER TABLE `tb_info_sekolah`
  ADD CONSTRAINT `FK_tb_info_sekolah_tb_sekolah` FOREIGN KEY (`npsn`) REFERENCES `tb_sekolah` (`npsn`);

--
-- Constraints for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD CONSTRAINT `FK_tb_jadwal_tb_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `tb_jurusan` (`id_jurusan`),
  ADD CONSTRAINT `FK_tb_jadwal_tb_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`),
  ADD CONSTRAINT `FK_tb_jadwal_tb_pelajaran` FOREIGN KEY (`kode_mapel`) REFERENCES `tb_pelajaran` (`kode_mapel`),
  ADD CONSTRAINT `FK_tb_jadwal_tb_sekolah` FOREIGN KEY (`npsn`) REFERENCES `tb_sekolah` (`npsn`);

--
-- Constraints for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD CONSTRAINT `FK_tb_jurusan_tb_sekolah` FOREIGN KEY (`npsn`) REFERENCES `tb_sekolah` (`npsn`);

--
-- Constraints for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD CONSTRAINT `FK_tb_karyawan_tb_sekolah` FOREIGN KEY (`npsn`) REFERENCES `tb_sekolah` (`npsn`);

--
-- Constraints for table `tb_konseling`
--
ALTER TABLE `tb_konseling`
  ADD CONSTRAINT `FK_tb_konseling_tb_karyawan` FOREIGN KEY (`kode_guru`) REFERENCES `tb_karyawan` (`kode_guru`),
  ADD CONSTRAINT `FK_tb_konseling_tb_pelanggaran` FOREIGN KEY (`kode_pelanggaran`) REFERENCES `tb_pelanggaran` (`kode_pelanggaran`),
  ADD CONSTRAINT `FK_tb_konseling_tb_sekolah_2` FOREIGN KEY (`npsn`) REFERENCES `tb_sekolah` (`npsn`),
  ADD CONSTRAINT `FK_tb_konseling_tb_siswa` FOREIGN KEY (`nipd`) REFERENCES `tb_siswa` (`nipd`);

--
-- Constraints for table `tb_nilai_akademik`
--
ALTER TABLE `tb_nilai_akademik`
  ADD CONSTRAINT `FK_tb_nilai_akademik_tb_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `tb_jurusan` (`id_jurusan`),
  ADD CONSTRAINT `FK_tb_nilai_akademik_tb_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`),
  ADD CONSTRAINT `FK_tb_nilai_akademik_tb_pelajaran` FOREIGN KEY (`kode_mapel`) REFERENCES `tb_pelajaran` (`kode_mapel`),
  ADD CONSTRAINT `FK_tb_nilai_akademik_tb_sekolah` FOREIGN KEY (`npsn`) REFERENCES `tb_sekolah` (`npsn`),
  ADD CONSTRAINT `FK_tb_nilai_akademik_tb_siswa` FOREIGN KEY (`nipd`) REFERENCES `tb_siswa` (`nipd`);

--
-- Constraints for table `tb_pelajaran`
--
ALTER TABLE `tb_pelajaran`
  ADD CONSTRAINT `FK_tb_pelajaran_tb_sekolah` FOREIGN KEY (`npsn`) REFERENCES `tb_sekolah` (`npsn`);

--
-- Constraints for table `tb_pelanggaran`
--
ALTER TABLE `tb_pelanggaran`
  ADD CONSTRAINT `FK_tb_pelanggaran_tb_sekolah` FOREIGN KEY (`npsn`) REFERENCES `tb_sekolah` (`npsn`);

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `FK_tb_pembayaran_tb_sekolah` FOREIGN KEY (`npsn`) REFERENCES `tb_sekolah` (`npsn`),
  ADD CONSTRAINT `FK_tb_pembayaran_tb_siswa` FOREIGN KEY (`nipd`) REFERENCES `tb_siswa` (`nipd`),
  ADD CONSTRAINT `FK_tb_pembayaran_tb_tagihan` FOREIGN KEY (`id_tagihan`) REFERENCES `tb_tagihan` (`id_tagihan`);

--
-- Constraints for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD CONSTRAINT `FK_tb_pesan_tb_sekolah` FOREIGN KEY (`npsn`) REFERENCES `tb_sekolah` (`npsn`);

--
-- Constraints for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `FK_tb_siswa_tb_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `tb_jurusan` (`id_jurusan`),
  ADD CONSTRAINT `FK_tb_siswa_tb_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`),
  ADD CONSTRAINT `FK_tb_siswa_tb_sekolah` FOREIGN KEY (`npsn`) REFERENCES `tb_sekolah` (`npsn`);

--
-- Constraints for table `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  ADD CONSTRAINT `FK_tb_tagihan_tb_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`),
  ADD CONSTRAINT `FK_tb_tagihan_tb_sekolah` FOREIGN KEY (`npsn`) REFERENCES `tb_sekolah` (`npsn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
