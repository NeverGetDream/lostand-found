-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: lf2
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `barang_ditemukan`
--

DROP TABLE IF EXISTS `barang_ditemukan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barang_ditemukan` (
  `id_barang_ditemukan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `img_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id_barang_ditemukan`),
  KEY `id_barang` (`id_barang`),
  CONSTRAINT `barang_ditemukan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang_hilang` (`id_barang`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang_ditemukan`
--

LOCK TABLES `barang_ditemukan` WRITE;
/*!40000 ALTER TABLE `barang_ditemukan` DISABLE KEYS */;
/*!40000 ALTER TABLE `barang_ditemukan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `barang_hilang`
--

DROP TABLE IF EXISTS `barang_hilang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barang_hilang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `des_barang` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `temp_titip` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `img_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id_barang`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `barang_hilang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang_hilang`
--

LOCK TABLES `barang_hilang` WRITE;
/*!40000 ALTER TABLE `barang_hilang` DISABLE KEYS */;
INSERT INTO `barang_hilang` VALUES (3,14,'Dompet 1','sulsel','Dompet 1 bfsa flaj fapi faishf aihsf aihsf aoihf aoisf aosfaiosgf aig aiosf aoibsfa iosf aoibs faibiabfiajbsfa fai sfa','PNUP','Tempat 1','Kota 1','Sulawesi Selatan','3.jpg'),(4,14,'Dompet 2','sulsel','Dompet 2','PNUP','Tempat 2','Kota 2','Sulawesi Selatan','4.jpg'),(5,14,'Dompet 3','sulsel','Dompet 3','PNUP','Tempat 3','Kota 3','Sulawesi Selatan','5.jpg'),(6,14,'Dompet 4','sulsel','Dompet 4','PNUP','Tempat 4','Kota 4','Sulawesi Selatan','6.jpg'),(7,14,'Dompet 5','sulsel','Dompet 5','PNUP','Tempat 5','Kota 5','Sulawesi Selatan','7.jpg'),(8,14,'Dompet 6','sulsel','Dompet 6','PNUP','Tempat 6','Kota 6','Sulawesi Selatan','8.jpg'),(9,14,'Dompet 7','sulsel','Dompet 7','PNUP','Tempat 7','Kota 7','Sulawesi Selatan','9.jpg');
/*!40000 ALTER TABLE `barang_hilang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history_barang_ditemukan`
--

DROP TABLE IF EXISTS `history_barang_ditemukan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history_barang_ditemukan` (
  `log_id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tgl_ditemukan` date DEFAULT NULL,
  `pemilik_asli` varchar(255) NOT NULL,
  `img_name` varchar(100) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `id_barang` (`id_barang`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `history_barang_ditemukan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `menemukan` (`id_barang`),
  CONSTRAINT `history_barang_ditemukan_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history_barang_ditemukan`
--

LOCK TABLES `history_barang_ditemukan` WRITE;
/*!40000 ALTER TABLE `history_barang_ditemukan` DISABLE KEYS */;
/*!40000 ALTER TABLE `history_barang_ditemukan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history_barang_hilang`
--

DROP TABLE IF EXISTS `history_barang_hilang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history_barang_hilang` (
  `id_history` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `des_barang` varchar(255) NOT NULL,
  `temp_titip` varchar(255) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_history`),
  KEY `id_barang` (`id_barang`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `history_barang_hilang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang_hilang` (`id_barang`) ON UPDATE CASCADE,
  CONSTRAINT `history_barang_hilang_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history_barang_hilang`
--

LOCK TABLES `history_barang_hilang` WRITE;
/*!40000 ALTER TABLE `history_barang_hilang` DISABLE KEYS */;
/*!40000 ALTER TABLE `history_barang_hilang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (1,'Kunci'),(2,'Dompet'),(3,'Buku'),(4,'Handphone');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menemukan`
--

DROP TABLE IF EXISTS `menemukan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menemukan` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_ditemukan` date DEFAULT NULL,
  `lokasi` varchar(255) NOT NULL,
  `pemilik_asli` varchar(255) NOT NULL,
  PRIMARY KEY (`item_id`),
  KEY `id_barang` (`id_barang`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `menemukan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang_hilang` (`id_barang`) ON UPDATE CASCADE,
  CONSTRAINT `menemukan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menemukan`
--

LOCK TABLES `menemukan` WRITE;
/*!40000 ALTER TABLE `menemukan` DISABLE KEYS */;
/*!40000 ALTER TABLE `menemukan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prov`
--

DROP TABLE IF EXISTS `prov`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prov` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provinsi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prov`
--

LOCK TABLES `prov` WRITE;
/*!40000 ALTER TABLE `prov` DISABLE KEYS */;
INSERT INTO `prov` VALUES (1,'Sulawesi Selatan'),(2,'Sulawesi Utara'),(3,'Sulawesi Barat'),(4,'Sulawesi Tengah'),(5,'Sulawesi Tenggara'),(6,'Gorontalo');
/*!40000 ALTER TABLE `prov` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(80) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) CHARACTER SET utf8 NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `image` varchar(128) CHARACTER SET utf8 NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (11,'aa','aa','goawayb1tchh@gmail.com','$2y$10$ed.UJsoAlNiQD9nK/4qfFeI9coPGxX.Ux/lcWMGCFePxGQKYIFmVO','aaa','aaa','aaaa','default.jpg',1,1,1670408665),(12,'aaa','aaa','azwarkusumah711@gmail.com','$2y$10$HjX5D26jCXMNqXJ1QxIQ8exJqqyrH2iEzZFklV/Poq.fUYqVlMi1W','aaa','makassaar','aaaa','default.jpg',2,1,1670408769),(13,'zaedil','febriansyah','zaedilfebriansyah@gmail.com','$2y$10$nCG2LYalm7zYVzNtex5zl.HFmi3.bLRTeUrTx2soVLF.iYU9ZhG0G','Sulawesi Selatan','Makassar','Makassar','default.jpg',1,1,1670417524),(14,'aedil','slebew','aedil@gmail.com','$2y$10$asRPgbCfur/Yrhdb0u9to.Xu9YFUx/Yj4fc/kBQ8oqAyvbWgpAOpa','Sulawesi Selatan','Makassar','Makassar','user.png',2,1,1670852460);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-16  8:32:46
