-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 05:48 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ontoso`
--

-- --------------------------------------------------------

--
-- Table structure for table `agen`
--

CREATE TABLE `agen` (
  `id_agen` varchar(11) NOT NULL,
  `nama_agen` varchar(50) NOT NULL,
  `wilayah_agen` varchar(100) NOT NULL,
  `agensi` varchar(25) NOT NULL,
  `perkenalan` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agen`
--

INSERT INTO `agen` (`id_agen`, `nama_agen`, `wilayah_agen`, `agensi`, `perkenalan`, `no_hp`, `foto`) VALUES
('A-01', 'Quin Maria', 'Makassar, Tanggerang, Jakarta', 'Remax Topaz', 'Saya adalah seorang profesional Agen Property (Sertifikasi AREBI), dengan latar belakang short course di Panagian School of Property Jakarta & Property Cash Machine by Joe Hartanto.<br>\r\nSaya dapat membantu Bapak/Ibu memilih properti yang \"benar\" di Jakar', '82110827890', 'agent1.jpg'),
('A-02', 'Bernhard Siregar', 'Bandung', 'Ray White Kemang Premier', 'Sy Bernhard Siregar, konsultan properti yang berpengalaman di bidangnya.\r\nBila butuh informasi tentang properti, baik apartemen, rumah, gedung, ruko, pabrik, gudang, lahan industri/komersial dll.', '0811964047', 'agent2.jpg'),
('A-03', 'Julius Rachman', 'Surabaya', 'Gplex Property', 'GPLEX PROPERTY (baca=jiplex), adalah perusahaan agency property ternama dan terbaik dari Malaysia. Kini hadir di Jakarta melayani kebutuhan investasi properti anda di area Malaysia dan Jabodetabek. GPLEX PROPERTY melayani investasi properti, Apartemen, Ru', '081271163384', 'agent3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `properti`
--

CREATE TABLE `properti` (
  `id_properti` varchar(11) NOT NULL,
  `nama_properti` varchar(100) NOT NULL,
  `jenis_properti` varchar(20) NOT NULL,
  `dijual_disewa` varchar(11) NOT NULL,
  `kota_properti` varchar(50) NOT NULL,
  `alamat_properti` varchar(200) NOT NULL,
  `deskripsi_properti` varchar(500) NOT NULL,
  `luas_min` int(11) NOT NULL,
  `luas_max` int(11) NOT NULL,
  `kamar_tidur` int(11) NOT NULL,
  `kamar_mandi` int(11) NOT NULL,
  `garasi` int(11) NOT NULL,
  `foto_1` varchar(100) DEFAULT NULL,
  `foto_2` varchar(100) DEFAULT NULL,
  `foto_3` varchar(100) DEFAULT NULL,
  `id_agen` varchar(11) NOT NULL,
  `harga_min` int(11) DEFAULT NULL,
  `harga_max` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properti`
--

INSERT INTO `properti` (`id_properti`, `nama_properti`, `jenis_properti`, `dijual_disewa`, `kota_properti`, `alamat_properti`, `deskripsi_properti`, `luas_min`, `luas_max`, `kamar_tidur`, `kamar_mandi`, `garasi`, `foto_1`, `foto_2`, `foto_3`, `id_agen`, `harga_min`, `harga_max`) VALUES
('P-01', 'Summarecon Mutiara Makassar', 'perumahan', 'Disewa', 'Makassar', 'Jl. Mutiara Boulevard, Exit Tol Ir. Sutami No.KM 8', 'Summarecon Mutiara Makassar dikembangkan oleh PT Summarecon Agung, Tbk dengan pengalaman hampir 45 tahun dalam mengembangkan kawasan dan perumahan. Summarecon Mutiara Makassar memiliki lokasi yang strategis dengan jarak 4 km dari Bandar Udara Internasiona', 71, 224, 3, 3, 2, 'property1a.jpg', 'property1b.jpg', 'property1c.jpg', 'A-01', 623, 932),
('P-02', 'Panorama Bintaro', 'Perumahan', 'Disewa', 'Tanggerang', 'JL Ki Hajar Dewantara, Kel. Sawah Lama –, Tangerang Selatan, Banten', 'Premium Townhouse, dilokasi strategis Ciputat / Bintaro dengan design mewah, namun harga terjangkau', 90, 100, 2, 2, 1, 'property2a.jpg', 'property2b.jpg', 'property2c.jpg', 'A-01', 688, 725),
('P-03', 'Apartemen City Home', 'Apartemen', 'Disewa', 'Jakarta', 'Jl. Arta Gading Timur No 132, Kelapa Gading, Jakut, Kelapa Gading, Jakarta Utara, DKI Jakarta', 'Condition: Fully furnished with comfy minimalist design style. Very comfortable and memorable unit. Bedroom set with wardrobe, 3 units AC, sofa, dining table and chairs, LCD TV, kitchen set, dispenser. Bathroom with water \r\nheater.<br>Facility: 24-hours Security, Parking Area, Swimming Pools, Fitness Center, Children Playground, Carrefour, Salon and Spa, Dentist, Indomaret, Jogging Track, Laundry, Business and Store Complex, ATM Center, Internet and TV Cable Provider. Hub : Indri Hioe', 42, 42, 2, 1, 1, 'property3a.jpg', 'property3b.jpg', 'property3c.jpg', 'A-01', 48, 48),
('P-04', 'Cluster Chyintia Summarecone', 'Rumah', 'Disewa', 'Bandung', 'Cluster Chyintia Summarecone Gedebage Bandung, Gedebage, Bandung, Jawa Barat', 'Lokasi Sangat Stretagis Dekat Mall Summarecone,Dekat Dengan Akses Tol<br>\r\nSummarecone Bandung kawasan elite dikota bandung (Non furnish)<br>\r\nSewa Rumah baru belum pernah digunakan<br>\r\n- 3 kmr tidur + 1 kamar tidur assiten rumah tangga<br>\r\n- 3 kamar mandi + kmr mandi asisten rumah tangga<br>\r\nkemanan 24 jam', 105, 130, 4, 2, 2, 'property4a.jpg', 'property4b.jpg', 'property4c.jpg', 'A-02', 50, 50),
('P-05', '4 Bedrooms House Coblong', 'Rumah', 'Dijual', 'Bandung', 'Coblong, Bandung, Jawa Barat', 'Hunian yang dekat dengan Taman, Kampus, ATM dan fasilitas olahraga (Futsal, Basket, Volley, dll), ditambah keamanan dan kebersihan lingkungan yang prima, adalah kelebihan-kelebihan lain dari properti bergaya Neo-Classic ini. Selain itu, baik transportasi umum, maupun gerai kuliner, tersedia selama 24 Jam penuh', 135, 200, 4, 2, 2, 'property5a.jpg', 'property5b.jpg', 'property5c.jpg', 'A-02', 576, 576),
('P-06', 'Rumah Minimalis Murah', 'Rumah', 'Dijual', 'Bandung', 'Pinus Regency, Gedebage, Bandung, Jawa Barat', 'INVESTASI YANG MENGUNTUNGKAN!!!<br>\r\nBELI DISAAT MURAH DAN JUAL DISAAT HARGA BOOMING, SAAT NYA MENGAMANKAN DANA ANDA, MENYIMPAN DANA ANDA DIPROPERTY DITENGAH KETIDAKPASTIAN EKONOMI DAN LEMBAGA KEUANGAN, RUPIAH DIPREDIKSI TERUS MELEMAH, DI SAAT KRISIS SEPERTI SAAT INI SAATNYA BERINVESTASI DIPROPERTY DILOKASI LOKASI STRATEGIS DIBANDUNG TIMUR GEDEBAGE SUNRISE', 100, 120, 3, 2, 1, 'property6a.jpg', 'property6b.jpg', 'property6c.jpg', 'A-02', 945, 945),
('P-07', 'Rumah Di Villa Valensia', 'Rumah', 'Dijual', 'Surabaya', 'Wiyung, Surabaya, Jawa Timur', 'Rumah di Villa valensia <br>\r\nLt. 96m2(6x16)<br>\r\nLb. +/1- 120 m2<br>\r\n3+1 kt<br>\r\n2+1 km<br>\r\nShm<br>\r\n2,5 M nego!!', 96, 120, 4, 3, 2, 'property7a.jpg', 'property7b.jpg', 'property7c.jpg', 'A-03', 1200, 1200),
('P-08', 'Rumah Sutorejo Selatan IV', 'Rumah', 'Dijual', 'Surabaya', 'Sutorejo Selatan IV, Mulyosari, Surabaya, Jawa Timur', 'Sutorejo Selatan IV<br>\r\nBelakang Giant, tembus Galaxy Mall<br>\r\nBangunan baru gress<br>\r\nLebar jalan 2 mobil.<br>\r\n1 lantai (jarang ada)<br>\r\nLT162 (9x18) LB150<br>\r\nHadap Timur<br>\r\nLantai granitile 80 x80<br>\r\n3KT+1, 2KM+1<br>\r\nCarport 1 mobil<br>\r\nSHM<br>', 150, 162, 3, 2, 1, 'property8a.jpg', 'property8b.jpg', 'property8c.jpg', 'A-03', 2350, 2350),
('P-09', 'Rumah Kertajaya Indah', 'Rumah', 'Disewa', 'Surabaya', 'Kertajaya Indah, Mulyorejo, Surabaya, Jawa Timur', 'Rumah Murah Mewah Kertajaya Indah<br>\r\n2Lantai<br>\r\nLT 600 (20*30)<br>\r\nLB 800<br>\r\nHadap Utara<br>\r\n4KT+1<br>\r\n2KM+1<br>\r\nSHM<br>\r\nSemi Furnished<br>\r\nGarasi 1', 600, 600, 4, 2, 2, 'property9a.jpg', 'property9b.jpg', 'property9c.jpg', 'A-03', 213, 290);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`id_agen`);

--
-- Indexes for table `properti`
--
ALTER TABLE `properti`
  ADD PRIMARY KEY (`id_properti`),
  ADD KEY `idx_agen` (`id_agen`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `properti`
--
ALTER TABLE `properti`
  ADD CONSTRAINT `fk_id_agen` FOREIGN KEY (`id_agen`) REFERENCES `agen` (`id_agen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
