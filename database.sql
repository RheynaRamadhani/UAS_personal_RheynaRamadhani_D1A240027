-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2025 at 07:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rheynaramadhani_d1a240027`
--
CREATE DATABASE IF NOT EXISTS `db_rheynaramadhani_d1a240027` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_rheynaramadhani_d1a240027`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id_about` int(2) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id_about`, `about`) VALUES
(0, 'Halo, aku Rheyna Ramadhani. Aku lulusan SMK Bani Ma\'sum, jurusan Rekayasa Perangkat Lunak (RPL). Saat di RPL, aku mulai belajar logika pemrograman, Python, HTML, CSS, JavaScript, dan dasar-dasar basis data. Meskipun masih dasar, pengalaman itu sangat seru karena aku mulai memahami cara membuat program dan website sederhana. Sekarang, aku melanjutkan studi di Universitas Subang, Fakultas Ilmu Komputer, Program Studi Sistem Informasi. Aku bersemangat untuk terus belajar dan mengembangkan kemampuan di bidang teknologi informasi!'),
(0, '\"Sukses bukan tentang seberapa cepat kita mencapai tujuan, tetapi tentang seberapa konsisten kita berusaha untuk terus maju meski rintangan menghadang.\"');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(5) NOT NULL,
  `nama_artikel` text NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `nama_artikel`, `isi_artikel`) VALUES
(0, 'Artikel Wisata (Cara Membuat Visa Korea Selatan 2024, Kini Ada Layanan Express!)', 'Korea, salah satu negara yang kerap dikunjungi wisatawan mancanegara. Nah, untuk kamu yang pengin pergi berlibur ke luar negeri, tentunya ada beberapa hal yang perlu kamu perhatikan ya!\r\n\r\nDi samping mengurus paspor, ada juga visa nih yang perlu kamu persiapkan. Nah, buat kamu yang akan liburan ke negerinya para oppa alias Korea Selatan, kamu udah tahu belum cara membuat visa Korea Selatan 2024 yang mudah dan cepat? Tenang, cek info lengkapnya di sini!\r\n\r\nCara Membuat Visa Korea Selatan yang Simpel dan Cepat\r\n\r\nVisa adalah tanda bukti izin berkunjung ke suatu negara. Persyaratan ini perlu kamu miliki sebelum pergi ke beberapa negara yang mewajibkannya seperti Korea Selatan. Nah, biar kunjunganmu makin tenang, cek dulu langkah dan syarat visa Korea Selatan ini ya!\r\n\r\n1. KVAC, Bikin Proses Membuat Visa Korea-mu Makin Mudah\r\n\r\nMengurus visa Korea Selatan tidak lagi bisa dilakukan di Kedutaan Besar Republik Korea Selatan ya, sobat tiket. Melainkan, kamu bisa mengurusnya di Korea Visa Application Center (KVAC) yang berada di lantai 5, Mall Lotte Shopping Avenue, Kuningan, Jakarta.\r\n\r\nSelain berpindah tempat, fasilitas loket juga ditambah nih, dari 5 menjadi 12. Tentunya pelayanan dan penanganan pengajuan visa akan lebih cepat. Waktu buka layanan penerimaan pengajuan visa di KVAC pun diperpanjang menjadi mulai dari 09.00 WIB – 15.00 WIB lho.\r\n\r\n2. Memilih Jenis Visa Korea yang Tepat. Butuh Cepat? Ada Express Visa!\r\n\r\nCara membuat visa Korea Selatan 2024 yang pertama adalah menentukan jenis visa yang kamu butuhkan. Untuk pilihan jenis visa Korea ada beberapa, di antaranya adalah:\r\n\r\nSingle Visa (Kunjungan di bawah 90 hari) Rp856.000\r\nSingle Visa Express (Kunjungan di bawah 90 hari) Rp1.318.000\r\nSingle Visa Khusus (Kunjungan di atas 91 hari) Rp1.164.000\r\nDouble Visa (Kunjungan sebanyak 2x dan berlaku hingga 6 bulan) Rp1.318.000\r\nDouble Visa Express (Kunjungan sebanyak 2x dan berlaku hingga 6 bulan) Rp1.934.000\r\nMultiple Visa (Kunjungan berkali-kali dengan masa berlaku selama 5 tahun) Rp1.626.000\r\nMultiple Visa Express (Kunjungan berkali-kali dengan masa berlaku selama 5 tahun) Rp2.242.000\r\nGrup Visa (Grup wisatawan minimal 5 orang dan maksimal 50 orang dengan jadwal keberangkatan dan kepulangan yang sama, khusus pengajuan travel agen yang terdaftar di Kedubes Korea di Indonesia)\r\n3. Melengkapi Syarat Visa Korea\r\n\r\nPenting banget, sebelum mengajukan pendaftaran dan mengisi formulir visa Korea, kamu harus banget melakukan pengecekan ulang mengenai kelengkapan data yang dibutuhkan. Dengan begitu, proses pengajuan visamu dijamin akan berjalan lancar deh.\r\n\r\nBerikut ini adalah syarat visa Korea 2024 yang diperlukan.\r\n\r\nMengunduh formulir pendaftaran dengan foto yang sudah ditempel. (Foto ukuran 35mm x 45mm dengan background putih). Bawalah cadangan foto untuk antisipasi.\r\nPaspor Asli dan Fotokopi Paspor (berupa halaman identitas/cap negara yang telah dikunjungi)\r\nDokumen Bukti Kekeluargaan atau KK\r\nSurat Keterangan Kerja dan Fotokopi SIUP Tempat Bekerja\r\nSurat Keterangan Mahasiswa/Pelajar (bagi yang masih sekolah)\r\nFotokopi Bukti Keuangan (SPT PPh 21 / Rekening Koran 3 bulan terakhir dan Surat Referensi Bank)\r\nLainnya :\r\n\r\nPelajar/Mahasiswa wajib melampirkan Surat Keterangan Mahasiswa/Pelajar dan Bukti Keuangan Orang Tua.\r\nIbu Rumah Tangga dan tidak memiliki penghasilan, maka wajib melampirkan Bukti Keuangan Suami/Keluarga.\r\nSedangkan untuk kamu yang ingin membawa Asisten Rumah Tangga, wajib melampirkan Surat Sponsor dari Employer berupa Surat Keterangan Kerja dan Kartu Keluarga.\r\n4. Mengisi Formulir Pendaftaran\r\n\r\nSetelah cara membuat visa ke Korea Selatan di poin 1 dan 2 sudah kamu penuhi, maka selanjutnya adalah mengisi formulir pendaftaran yang sudah kamu unduh sebelumnya. Isi sesuai dengan instruksi yang tertulis di lembar formulir pendaftaran dengan data sebenar-benarnya.\r\n\r\n5. Melakukan Proses Pendaftaran dan Pembayaran\r\n\r\nSetelah melengkapi persyaratan dan mengisi formulir, langkah selanjutnya adalah menyerahkan berkas pengajuan visa Korea. Jangan lupa mengenai jam bukanya ya, sobat tiket. Pengajuan visa bisa kamu lakukan di hari kerja yakni Senin-Jumat mulai pukul 10.00-15.00 WIB.\r\n\r\nJangan sampai kamu datang terlalu sore. Lalu proses yang akan kamu lakukan selama di KVAC adalah sebagai berikut:\r\n\r\nMembayar biaya visa yang sudah kamu pilih. Setelah kamu membayar biaya visa yang dipilih, kamu akan mendapatkan materai untuk ditempel di formulir aplikasi.\r\nSetelah membayar dan mendapatkan materai, kamu akan diarahkan untuk menuju tempat pendaftaran visa. Jangan lupa untuk siapkan identitas seperti KTP untuk pengecekan awal.\r\nMengambil nomor antrian sesuai dengan jenis visa yang kamu pilih dan menunggu hingga nomor antrian kamu dipanggil.\r\nSetelah itu, kamu tinggal menyerahkan dokumen dan tanda terima yang wajib kamu bawa saat pengambilan paspor dan visa nantinya.\r\nVisa yang diajukan akan diproses dalam waktu 6 hari kerja. Jadi, kamu baru bisa mengambil visa yang sudah di-approved setelah 6 hari kerja, terhitung sejak 1 hari setelah tanggal pengajuan.\r\n\r\n6. Cek Status Visa Secara Online\r\n\r\nKamu bisa melakukan pengecekan secara berkala melalui website https://www.visa.go.kr/ dan isi menu yang dibutuhkan. Ada 3 keterangan status, yaitu under review, approved, dan rejected. Kalau status pengajuan visa kamu tertulis approved, berarti kamu bisa mengambil paspor beserta visa setelah masa 6 hari tadi selesai.\r\n\r\nSelain itu kamu juga bisa mengetahui status pengajuan visa melalui pesan singkat. KVAC menyediakan layanan SMS sebanyak tiga kali kepada semua pemohon visa. Ketiga SMS tersebut adalah penerimaan dokumen di KVAC, pemeriksaan dokumen oleh Kedubes, serta persiapan pengambilan visa. Atau kamu juga bisa mengakses ke situs KVAC.\r\n\r\n7. Proses Akhir dari Cara Membuat Visa Korea, Mengambil Paspor dan Visa!\r\n\r\nYep, setelah pengajuan visa kamu diterima, maka kamu bisa mengambil paspor dan juga visa yang kamu ajukan. Berbeda dengan saat penyerahan formulir, pengambilan paspor dan visa hanya berlangsung pada pukul 11.00 WIB – 16.00 WIB.\r\n\r\nJangan lupa untuk membawa tanda terima yang diberikan saat proses pengajuan aplikasi pendaftaran. Kamu hanya perlu menaruh tanda terima tersebut di sebuah keranjang dan menunggu giliran kamu dipanggil. Sekarang, tinggal waktunya mempersiapkan diri untuk terbang ke Korea!\r\n\r\nYeay! Bagaimana nih? Cara membuat visa Korea di atas lengkap dan mudah banget kan? Kamu hanya perlu teliti dalam mempersiapkan dokumen yang dibutuhkan agar proses penyetujuan visa kamu menjadi lebih mudah, cepat, dan lancar.  Nah, kalau visa udah di tangan, kini persiapkan diri untuk mencari beberapa destinasi menarik yang bisa kamu eksplor selama di Korea'),
(0, 'Artikel Kesehatan (Bahaya Konsumsi Antibiotik Tanpa Resep Dokter)', 'Antibiotik merupakan jenis obat yang sering digunakan untuk mengatasi berbagai penyakit yang disebabkan karena infeksi bakteri. Biasanya, jika infeksi yang terjadi masih dalam kategori ringan, dokter tidak perlu meresepkan obat antibiotik. \r\n\r\nSementara untuk kasus infeksi bakteri yang sudah parah, dokter baru akan meresepkan penggunaan obat antibiotik. Kondisi lain yang membutuhkan obat antibiotik, yaitu orang-orang dengan kondisi imun tubuh yang lemah, contohnya seperti pengidap HIV atau kanker. \r\n\r\nHal yang perlu ditegaskan, antibiotik harus dikonsumsi berdasarkan resep dan anjuran dokter. Sebab, obat ini bisa menimbulkan berbagai efek samping bila digunakan secara sembarangan.\r\n\r\nDampak Konsumsi Antibiotik Tanpa Resep Dokter\r\n\r\nSupaya obat ini bisa bekerja lebih aman dan efektif, tentu ada pertimbangan dari dokter sebelum meresepkannya. Contohnya, kondisi medis pengidap, jenis antibiotik yang hendak diresepkan, jenis bakteri yang menjadi penyebab infeksi, hingga dosis dan durasi konsumsinya. \r\n\r\nSetiap jenis antibiotik akan memicu terjadinya efek samping yang berbeda. Efeknya bisa ringan atau justru lebih parah. Menggunakan resep dokter pun tak akan menghindarkan kamu dari efek samping saat mengkonsumsi obat ini, apalagi jika kamu mengonsumsinya tanpa pertimbangan dari pakarnya.\r\n\r\nMau tahu apa saja dampak bila obat ini digunakan secara asal? Berikut ulasannya!\r\n\r\n1. Mempengaruhi kerja otak\r\n\r\nAntibiotik menjadi jenis obat yang memiliki efek keras, tetapi tetap efektif untuk menekan sekaligus mematikan bakteri yang menjadi penyebab munculnya penyakit.\r\n\r\nMeski begitu, kamu tetap perlu tahu bahwa obat satu ini juga mempengaruhi kerja otak sebagai organ penting dalam tubuh. Sangat rentan terjadi depresi dan kecemasan berlebihan hanya dengan satu antibiotik.\r\n\r\n2. Risiko obesitas\r\n\r\nPenggunaan obat antibiotik pada anak tak hanya berdampak pada kenaikan berat badan saja, tetapi ada juga ada efek yang bisa terjadi dalam jangka panjang. Kondisi ini lantas turut dihubungkan dengan masalah diabetes tipe 2. Pasalnya, seseorang dengan kondisi kegemukan atau obesitas memang memiliki risiko lebih tinggi mengalami diabetes tipe 2.\r\n\r\n3. Masalah kesehatan pada usus\r\n\r\nAntibiotik memang efektif untuk membasmi bakteri. Namun, apabila obat ini dikonsumsi dengan dosis berlebihan, bakteri baik yang terdapat dalam tubuh pun akan ikut hilang. \r\n\r\nBeberapa orang mendapati kondisi perut menjadi lebih baik setelah minum antibiotik. Meski begitu, ada pula yang mengalami gangguan perut setelah mengkonsumsinya. \r\n\r\nDalam beberapa kasus, konsumsi antibiotik berlebihan akan meningkatkan risiko terjadinya masalah pada usus, misalnya penyakit Crohn, iritasi pada pencernaan, dan kolitis ulseratif.\r\n\r\n4. Terjadi resistensi antibiotik\r\n\r\nTerjadinya resistensi antibiotik atau kebal juga bisa terjadi saat kamu mengonsumsi antibiotik dalam dosis yang tidak sesuai dengan anjuran dokter. Jadi, pastikan kamu tidak mengkonsumsi obat ini tanpa resep ya. Dokter tentu lebih mengetahui jenis dan takaran obat sesuai dengan kondisimu.\r\n\r\nYuk, konsumsi antibiotik secara bijak agar infeksi bakteri teratasi tanpa menimbulkan efek samping pada tubuh. Bagi kamu yang memiliki masalah kesehatan, tanyakan saja langsung pada dokter ya!'),
(0, 'Artikel Lingkungan (Cara Mengatasi Pencemaran Tanah dan Panduannya)', 'Penting sekali untuk mengetahui cara mengatasi pencemaran tanah di era modern. Ini mengingat kondisi lingkungan kita yang semakin tercemar, terancam oleh pencemaran tanah, yang mencapai tingkat memprihatinkan. Data terbaru menunjukkan bahwa sebagian besar wilayah di seluruh dunia menghadapi masalah serius akibat pencemaran tanah.\r\n\r\nPencemaran tanah sendiri dapat menimbulkan gangguan terhadap kesehatan manusia, bahkan di tingkat yang sangat berbahaya. Beberapa dampak pencemaran tanah bisa menimbulkan beberapa penyakit jangka pendek sampai panjang. Selain pada kesehatan manusia, pencemaran tanah juga berdampak pada ekosistem, baik flora maupun fauna di sekitar kita. Jadi jelas sekali kalau kita harus mengetahui cara mengatasi pencemaran tanah yang tepat untuk mengurangi kerusakan alam ini.\r\n\r\nBeberapa dampak pencemaran tanah terhadap ekosistem mulai dari perubahan dalam struktur dan kandungan tanah hingga memutus rantai makanan. Selanjutnya, mari kita simak beberapa cara mengatasi pencemaran tanah akibat pestisida dan kontaminan lainnya.\r\n\r\nCara Mengatasi Pencemaran Tanah\r\n\r\n1. Meningkatkan Kesadaran akan Konsep “Reduce, Reuse, Recycle”\r\n\r\nMemberikan pemahaman yang kuat terkait konsep reduce, reuse, dan recycle dapat menjadi kunci untuk meminimalkan dampak negatif terhadap lingkungan. Kampanye, workshop, dan program pendidikan lingkungan di sekolah atau komunitas dapat memotivasi orang untuk mengurangi limbah sekaligus meningkatkan praktek daur ulang.\r\n\r\n2. Mengurangi Penggunaan Barang Kemasan\r\n\r\nMengurangi penggunaan barang kemasan juga dapat membantu mengurangi sampah dan polutan di tanah. Penggunaan wadah pribadi saat membeli produk yang dikemas dapat membantu mengurangi limbah.\r\n\r\nSelain itu, kita juga dapat mendorong pembelian produk yang mudah terurai (biodegradable). Produk yang terbuat dari bahan-bahan alami yang dapat diurai oleh proses alam dapat membantu mengurangi akumulasi sampah yang sulit terurai. Selain menjadi cara mengatasi pencemaran tanah yang ampuh, hal ini juga dapat mengurangi beban pada tempat pembuangan sampah.\r\n\r\n3. Pengelolaan Aktivitas Pertanian\r\n\r\nMeskipun penting, pertanian harus dikelola dengan hati-hati untuk mencegah perubahan komposisi tanah dan erosi. Penggunaan pupuk kimia dan pestisida harus dikontrol secara ketat, karena penggunaannya secara berlebihan dapat menyebabkan menyebabkan pencemaran tanah. Langkah di atas bisa menjadi cara mengatasi pencemaran tanah akibat pestisida.\r\n\r\n4. Memelihara Lapisan Humus\r\n\r\nMencegah lebih baik mengobati, itulah esensi dari cara mengatasi pencemaran tanah ini. Pemeliharaan lapisan humus penting untuk keberlanjutan tanah, dengan melibatkan praktik-praktik seperti rotasi tanaman, pengomposan, dan pertanian tanpa olah tanah.\r\n\r\nMelibatkan sisa tanaman dan penggunaan pupuk hijau membantu memasukkan nutrisi dan bahan organik ke dalam tanah. Sementara itu, pengurangan pestisida kimia mendukung keragaman mikroorganisme tanah.\r\n\r\n5. Membuang Sampah di Tempat Khusus\r\n\r\nTerakhir, membuang sampah di tempat pembuangan yang jauh dari permukiman menjadi langkah penting lainnya untuk menghindari pencemaran tanah dekat permukiman. Kampanye komunitas dan penegakan aturan yang ketat terkait pembuangan sampah harus digaungkan. Hal ini demi membentuk perilaku masyarakat yang lebih bertanggung jawab dan peduli terhadap lingkungan sekitar\r\n\r\nItulah tadi langkah dan cara mengatasi pencemaran tanah yang bisa dicoba demi lingkungan yang lebih sehat di masa mendatang. Semoga dengan membaca penjelasan di atas, kita dapat membentuk pola pikir dan perilaku yang lebih berkelanjutan dalam kehidupan sehari-hari.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(5) NOT NULL,
  `judul` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `judul`, `foto`) VALUES
(0, 'ℱ𝓇𝒾𝑒𝓃𝒹 🤍', 'WhatsApp Image 2025-07-01 at 21.08.37_c10926b6.jpg'),
(0, '𝒢𝓇𝑒𝑒𝓃 🌿', 'WhatsApp Image 2025-07-01 at 21.08.38_b181c569.jpg'),
(0, 'ℱ𝑜𝑜𝒹 🍱', 'WhatsApp Image 2025-07-01 at 21.08.38_ed89215f.jpg'),
(0, '𝒞𝑜𝓁𝒹 ❄️', 'WhatsApp Image 2025-07-01 at 21.08.38_5cc20ed2.jpg'),
(0, 'ℳ𝑒𝑒 👤', 'poto3.jpg'),
(0, 'ℰ𝒾𝒹 🌙', 'WhatsApp Image 2025-07-01 at 21.08.39_0faef2df.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`) VALUES
('admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
