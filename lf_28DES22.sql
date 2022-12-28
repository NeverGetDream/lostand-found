-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: lf5
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
  `id_kategori` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `id_prov` int(11) NOT NULL,
  `des_barang` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `temp_titip` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `img_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id_barang`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `barang_hilang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang_hilang`
--

LOCK TABLES `barang_hilang` WRITE;
/*!40000 ALTER TABLE `barang_hilang` DISABLE KEYS */;
INSERT INTO `barang_hilang` VALUES (1,11,2,'Dompet Hitam',0,'Dompet hilang ditemukan di jalan paccerakkang','paccerakkang','indomar paccerakkang','','dompet.jpeg'),(2,11,3,'Kunci Motor',0,'Ditemukan kunci di jalan abdesir','jalan abdesir','indomart abdesir','','kunci.jpg'),(3,11,4,'Buku Hacker',0,'Buku Hacker hilang ditemukan di gazebo','PNUP','Perpus PNUP','','heker.jpeg'),(12,27,1,'Mobil terbang',0,'Bone','Bengkel','Bone','4','12.jpg'),(13,27,1,'Cewek',30,'Cewek ini cakep bener cuyy','Bone','Hotel','Makassar','13.jpg'),(14,27,1,'Mobil terbang',30,'Mobil ini sangat gegeh','Bone','Bengkel','Makassar','14.jpg');
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
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nomor` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (1,1,'Handphone'),(2,2,'Dompet'),(3,3,'Kunci'),(4,4,'Buku');
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
  `nomor` int(11) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prov`
--

LOCK TABLES `prov` WRITE;
/*!40000 ALTER TABLE `prov` DISABLE KEYS */;
INSERT INTO `prov` VALUES (1,1,'Nanggroe Aceh Darussalam'),(2,2,'Sumatera Utara'),(3,3,'Sumatera Selatan'),(4,4,'Sumatera Barat'),(5,5,'Bengkulu'),(6,6,'Riau'),(7,7,'Kepulauan Riau'),(8,8,'Jambi'),(9,9,'Lampung'),(10,10,'Bangka Belitung'),(11,11,'Kalimantan Barat'),(12,12,'Kalimantan Timur'),(13,13,'Kalimantan Selatan'),(14,14,'Kalimantan Tengah'),(15,15,'Kalimantan Utara'),(16,16,'Banten'),(17,17,'DKI Jakarta'),(18,18,'Jawa Barat'),(19,19,'Jawa Tengah'),(20,20,'Daerah Istimewa Yogyakarta'),(21,21,'Jawa Timur'),(22,22,'Bali'),(23,23,'Nusa Tenggara Timur'),(24,24,'Nusa Tenggara Barat'),(25,25,'Gorontalo'),(26,26,'Sulawesi Barat'),(27,27,'Sulawesi Tengah'),(28,28,'Sulawesi Utara'),(29,29,'Sulawesi Tenggara'),(30,30,'Sulawesi Selatan'),(31,31,'Maluku Utara'),(32,32,'Maluku'),(33,33,'Papua Barat'),(34,34,'Papua'),(35,35,'Papua Tengah'),(36,36,'Papua Pegunungan'),(37,37,'Papua Selatan'),(38,38,'Papua Barat Daya');
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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (11,'Azwar','Meizia','goawayb1tchh@gmail.com','$2y$10$ed.UJsoAlNiQD9nK/4qfFeI9coPGxX.Ux/lcWMGCFePxGQKYIFmVO','Sulawesi Selatan','Makassar','PNUP Kampus 2','unnamed.jpg',1,1,1670408665),(12,'Azwar','Kusumah','azwarkusumah711@gmail.com','$2y$10$HjX5D26jCXMNqXJ1QxIQ8exJqqyrH2iEzZFklV/Poq.fUYqVlMi1W','aaa','makassaar','aaaa','default.jpg',2,1,1670408769),(13,'Azwar','Kusumah','aa@gmail.com','$2y$10$ed.UJsoAlNiQD9nK/4qfFeI9coPGxX.Ux/lcWMGCFePxGQKYIFmVO','Sulawesi Selatan','Makassar','PNUP Kampus 2','user.jpg',1,1,1670408665),(14,'aaa','aaa','aaa@gmail.com','$2y$10$HjX5D26jCXMNqXJ1QxIQ8exJqqyrH2iEzZFklV/Poq.fUYqVlMi1W','aaa','makassaar','aaaa','default.jpg',2,1,1670408769),(15,'Azwar','Kusumah','aaaa@gmail.com','$2y$10$ed.UJsoAlNiQD9nK/4qfFeI9coPGxX.Ux/lcWMGCFePxGQKYIFmVO','Sulawesi Selatan','Makassar','PNUP Kampus 2','user.jpg',1,1,1670408665),(16,'aaa','aaa','aaaaa@gmail.com','$2y$10$HjX5D26jCXMNqXJ1QxIQ8exJqqyrH2iEzZFklV/Poq.fUYqVlMi1W','aaa','makassaar','aaaa','default.jpg',2,1,1670408769),(17,'Azwar','Kusumah','ss@gmail.com','$2y$10$ed.UJsoAlNiQD9nK/4qfFeI9coPGxX.Ux/lcWMGCFePxGQKYIFmVO','Sulawesi Selatan','Makassar','PNUP Kampus 2','user.jpg',1,1,1670408665),(18,'aaa','aaa','sss@gmail.com','$2y$10$HjX5D26jCXMNqXJ1QxIQ8exJqqyrH2iEzZFklV/Poq.fUYqVlMi1W','aaa','makassaar','aaaa','default.jpg',2,1,1670408769),(19,'Azwar','Kusumah','aaaaaa@gmail.com','$2y$10$ed.UJsoAlNiQD9nK/4qfFeI9coPGxX.Ux/lcWMGCFePxGQKYIFmVO','Sulawesi Selatan','Makassar','PNUP Kampus 2','user.jpg',1,1,1670408665),(20,'aaa','aaa','bbbbb@gmail.com','$2y$10$HjX5D26jCXMNqXJ1QxIQ8exJqqyrH2iEzZFklV/Poq.fUYqVlMi1W','aaa','makassaar','aaaa','default.jpg',2,1,1670408769),(21,'Azwar','Kusumah','aa@gmail.com','$2y$10$ed.UJsoAlNiQD9nK/4qfFeI9coPGxX.Ux/lcWMGCFePxGQKYIFmVO','Sulawesi Selatan','Makassar','PNUP Kampus 2','user.jpg',1,1,1670408665),(22,'aaa','aaa','aaa@gmail.com','$2y$10$HjX5D26jCXMNqXJ1QxIQ8exJqqyrH2iEzZFklV/Poq.fUYqVlMi1W','aaa','makassaar','aaaa','default.jpg',2,1,1670408769),(23,'Azwar','Kusumah','aaaa@gmail.com','$2y$10$ed.UJsoAlNiQD9nK/4qfFeI9coPGxX.Ux/lcWMGCFePxGQKYIFmVO','Sulawesi Selatan','Makassar','PNUP Kampus 2','user.jpg',1,1,1670408665),(24,'aaa','aaa','aaaaa@gmail.com','$2y$10$HjX5D26jCXMNqXJ1QxIQ8exJqqyrH2iEzZFklV/Poq.fUYqVlMi1W','aaa','makassaar','aaaa','default.jpg',2,1,1670408769),(25,'Azwar','Kusumah','ss@gmail.com','$2y$10$ed.UJsoAlNiQD9nK/4qfFeI9coPGxX.Ux/lcWMGCFePxGQKYIFmVO','Sulawesi Selatan','Makassar','PNUP Kampus 2','user.jpg',1,1,1670408665),(26,'aaa','aaa','sss@gmail.com','$2y$10$HjX5D26jCXMNqXJ1QxIQ8exJqqyrH2iEzZFklV/Poq.fUYqVlMi1W','aaa','makassaar','aaaa','default.jpg',2,1,1670408769),(27,'zaedil','slebew','aedil@gmail.com','$2y$10$gllzjZUOgEdkGK6dLczF6ueSfal6eahzRFYHOPU2DQc8T7.1KCdUS','Sulawesi Selatan','Makassar','Makassar','default.png',2,1,1672118537);
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

-- Dump completed on 2022-12-28 14:40:48
