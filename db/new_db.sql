-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table db_profita.berkas: ~1 rows (approximately)
REPLACE INTO `berkas` (`id_berkas`, `kk`, `akta`, `ijazah`, `kip`, `profile`, `kelakuan`, `ortu`, `sehat`, `pas_foto`, `lulus`) VALUES
	(-1, '667ac7afc4f72.png', '66798954d6608.jpg', '66a4b09d9e1a3.png', '66a4b2e7a9ec0.png', '66a4bad28f6df.png', '66a4b09d9fdcb.png', '66a4b09da0811.png', '66a4b09da13d0.png', '66a4b672b3018.png', '66a4b09da281b.png');

-- Dumping data for table db_profita.master_message: ~0 rows (approximately)

-- Dumping data for table db_profita.parents: ~0 rows (approximately)
REPLACE INTO `parents` (`id_parent`, `id_siswa`, `nik_ayah`, `nama_ayah`, `lhir_ayah`, `tgl_lhr_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `status_ayah`, `nik_ibu`, `nama_ibu`, `lhir_ibu`, `tgl_lhr_ibu`, `no_ibu`, `pendidikan_ibu`, `penghasilan_ibu`, `name_wali`, `no_wali`, `hubungan_wali`, `pekerjaan_wali`, `alamat_wali`) VALUES
	(162, 3692, '', 'Robert', 'Bandung', '2024-07-27', 'D3', 'Pengusaha', '1.000.000 - 2.000.000', 'Hidup', '', 'Cindy', 'Canada', '2024-06-26', '764656546456', 'S3', '1.000.000 - 2.000.000', 'Aul', '234234234', 'Sodara', 'Wiraswasta', 'Alamat isi');

-- Dumping data for table db_profita.person: ~2 rows (approximately)
REPLACE INTO `person` (`id_person`, `nama`, `no_telp`, `email`, `tipe`, `agama`, `alamat`, `desa`, `kecamatan`, `kab_kota`, `provinsi`, `kode_pos`, `kewarganegaraan`, `tempat_lhir`, `jk`, `tanggal_lahir`, `rt`, `rw`, `id_berkas`, `created_at`, `updated_at`) VALUES
	(6, 'Administrator', '', 'profita.admin@gmail.com', 1, '', '', '', '', '', '', '', '', '', '', '2024-06-25', '', '', 0, '2024-06-25 07:17:32', '2024-06-25 07:17:32'),
	(192, 'Rizkan Ramdani', '098787867878', 'rizkan@gmail.com', 3, 'Islam                                             ', 'Jl. Soekarno Hatta 2039', 'Gumuruh', 'Batununggal', 'Kota Bandung', 'Jawa Barat', '40866', 'Indonesia', 'Bandung', 'Laki-laki', '2024-06-25', '12', '32', -1, '2024-05-25 06:02:52', '2024-07-27 10:31:08');

-- Dumping data for table db_profita.siswa: ~1 rows (approximately)
REPLACE INTO `siswa` (`id_siswa`, `id_person`, `no_pendaftaran`, `asal_sekolah`, `npsn_sekolah_asal`, `nisn`, `nik`, `biaya_sekolah`, `sd`, `smp`, `kip`, `cita_cita`, `hobi`, `anak_ke`, `transportasi`, `jarak_sekolah`, `waktu_tempuh`, `jml_saudara`, `no_kk`, `kepala_keluarga`, `st`, `jurusan`, `created_at`, `updated_at`) VALUES
	(3692, 192, '38', 'SMP 12 Jakarta                                                                                      ', '', '03945032945', '', '', '', '', '-', 'Penyanyi                                          ', 'Baca, Tidur                                       ', '2                                                 ', 'Mobil', '2 Km', '2 Jam', '2', '', '', 2, 'Akuntansi', '2024-05-25 18:15:10', '2024-07-27 10:31:08');

-- Dumping data for table db_profita.user: ~2 rows (approximately)
REPLACE INTO `user` (`id_user`, `id_person`, `password`, `created_at`, `updated_at`) VALUES
	(6, 6, '240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9', '2024-06-25 00:17:32', '2024-06-25 00:17:32'),
	(192, 192, 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', '2024-05-25 06:02:52', '2024-05-25 06:02:52');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
