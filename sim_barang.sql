-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table sim_barang.barang: ~3 rows (approximately)
INSERT INTO `barang` (`id_barang`, `kode_barang`, `nama_barang`, `id_kategori`, `jumlah`, `harga_satuan`, `kondisi`) VALUES
	(1, 'BRG-001', 'Laptop ASUS ROG', 1, 5, 15000000.00, 'Baik'),
	(2, 'BRG-002', 'Meja Kantor Kayu', 2, 10, 750000.00, 'Baik'),
	(3, 'BRG-003', 'Mikroskop Digital', 3, 2, 4500000.00, 'Rusak Ringan'),
	(4, 'BRG-004', 'proyektor', 2, 2, 1250000.00, 'Baik'),
	(5, 'BRG-005', 'cpu', 1, 3, 250000.00, 'Rusak Ringan');

-- Dumping data for table sim_barang.kategori: ~6 rows (approximately)
INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
	(1, 'Elektronik'),
	(2, 'Furnitur'),
	(3, 'Alat Lab'),
	(4, 'Elektronik'),
	(5, 'Furnitur'),
	(6, 'Alat Lab'),
	(7, 'Elektronik'),
	(8, 'Furnitur'),
	(9, 'Alat Lab');

-- Dumping data for table sim_barang.users: ~4 rows (approximately)
INSERT INTO `users` (`id`, `username`, `password`) VALUES
	(1, 'admin', 'password123'),
	(2, 'petugas', 'simbarang2026'),
	(3, 'admin', 'password123'),
	(4, 'petugas', 'simbarang2026'),
	(5, 'admin', 'password123'),
	(6, 'petugas', 'simbarang2026');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
