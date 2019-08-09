/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.3.15-MariaDB : Database - db_uas_ecomers
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_uas_ecomers` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_uas_ecomers`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `barang` */

insert  into `barang`(`id`,`nama_barang`,`deskripsi`,`kategori_id`,`harga`,`stok`,`gambar`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Selang 50 m','Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dolore recusandae saepe sunt, tempora voluptatibus! Aut quam sint ut voluptas? Dolore esse hic porro quas repellendus sint voluptatum. At, dolore!','1,2,3',75000,25,'Selang-1564747022.jpg','2019-08-02 09:51:06','2019-08-05 14:43:22',NULL),
(2,'Sendok','Sendok untuk makan','2',10000,1000,'Sendok-1564747234.jpg','2019-08-02 10:23:09','2019-08-02 12:00:34',NULL),
(5,'Markisa','Lorem ipsum dolor sit amet','3,4',600000,90,'Markisa-1565269634.jpg','2019-08-05 15:52:04','2019-08-08 13:07:15',NULL),
(6,'asdasdas','assadsad','2',1231232,123,'asdasdas-1565269687.jpg','2019-08-08 13:08:07','2019-08-08 13:08:20','2019-08-08 13:08:20');

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cart` */

/*Table structure for table `delivery` */

DROP TABLE IF EXISTS `delivery`;

CREATE TABLE `delivery` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_pos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `delivery` */

insert  into `delivery`(`id`,`user_id`,`nama`,`email`,`alamat`,`kode_pos`,`no_telp`) values 
(1,'1','John Doe','john.doe@gmail.com','Komp. Ciperna no. 18','40921','087822193321'),
(2,'2','Budi Doremi','budi.doremi@gmail.com','Komp. Ciperna no. 19','40921','087822193321'),
(3,'2','Bude Budi','budi.doremi@gmail.com','Komp. Ciperna no. 20','40921','087822193321'),
(4,'6','John Snow','john.snow@gmail.com','Komp. Panghegar No. 17','40293','081232918821');

/*Table structure for table `detail_transaksi` */

DROP TABLE IF EXISTS `detail_transaksi`;

CREATE TABLE `detail_transaksi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `transaksi_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `detail_transaksi` */

insert  into `detail_transaksi`(`id`,`transaksi_id`,`barang_id`,`qty`) values 
(1,1,1,5),
(2,1,2,3),
(3,11,2,7),
(4,11,4,4),
(5,12,2,2),
(6,12,4,2),
(7,13,2,3),
(8,13,5,2),
(9,13,1,3),
(10,14,1,3),
(11,14,5,2),
(12,15,1,3),
(13,15,2,2),
(14,16,5,4),
(15,17,5,3),
(16,18,5,4),
(17,19,1,3),
(18,19,2,3),
(19,19,5,2);

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kategori` */

insert  into `kategori`(`id`,`nama_kategori`,`deleted_at`) values 
(1,'Ruang Tamu',NULL),
(2,'Dapur',NULL),
(3,'Taman',NULL),
(4,'Kamar Mandi',NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(2,'2014_10_12_000000_create_users_table',1),
(3,'2019_08_02_074841_create_barang_table',1),
(4,'2019_08_02_074952_create_transaksi_table',1),
(5,'2019_08_02_075722_create_detail_transaksi_table',1),
(6,'2019_08_02_075939_create_kategori_table',1),
(7,'2019_08_02_092920_alter_table_barang',2),
(8,'2019_08_02_093106_alter_table_transaksi',3),
(9,'2019_08_02_114637_alter_table_barang',4),
(10,'2019_08_02_123913_alter_table_user',5),
(12,'2019_08_03_010906_create_table_cart',6),
(13,'2019_08_03_045315_create_delivery',7),
(14,'2019_08_03_054528_alter_table_delivery',8),
(15,'2019_08_03_060435_alter_table_transaksi',9),
(16,'2019_08_05_164522_alter_table_barang',10),
(17,'2019_08_05_213723_alter_table_kategori',11);

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `delivery_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `total_harga` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id`,`user_id`,`delivery_id`,`status`,`total_harga`,`created_at`,`updated_at`) values 
(15,2,3,1,245000,'2019-08-05 19:44:57','2019-08-05 19:44:57'),
(17,2,3,1,1800000,'2019-08-06 04:43:21','2019-08-06 04:43:21'),
(18,2,3,4,2400000,'2019-08-06 04:44:15','2019-08-08 12:05:34'),
(19,2,3,2,1455000,'2019-08-08 10:21:26','2019-08-08 12:02:24');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`nama`,`email`,`password`,`level`,`remember_token`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Admin','admin@gmail.com','admin',1,NULL,'2019-08-02 15:16:39','2019-08-05 22:45:05',NULL),
(2,'Budi Doremi','budi.doremi@gmail.com','12345678',2,NULL,'2019-08-02 15:16:39','2019-08-03 04:25:37',NULL),
(3,'John Does','john.doe@gmail.com','12345678',2,NULL,'2019-08-02 12:48:04','2019-08-05 06:34:58',NULL),
(4,'asdasdas','aasdasd@gmail.com','13123123123',1,NULL,'2019-08-02 12:48:49','2019-08-02 12:48:58','2019-08-02 12:48:58'),
(5,'Junaedis','junaedi@gmail.com','12345678',2,NULL,'2019-08-03 08:14:32','2019-08-05 22:45:18',NULL),
(6,'John Snow','john.snow@gmail.com','12345678',2,NULL,'2019-08-05 16:49:19','2019-08-05 16:49:19',NULL),
(7,'Fahrudin','fahrudin@gmail.com','12345678',2,NULL,'2019-08-05 20:48:03','2019-08-05 20:48:03',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
