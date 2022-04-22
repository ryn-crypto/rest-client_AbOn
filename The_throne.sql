/*
SQLyog Ultimate
MySQL - 10.4.21-MariaDB : Database - the_throne
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `daftar_game` */

DROP TABLE IF EXISTS `daftar_game`;

CREATE TABLE `daftar_game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `daftar_game` */

insert  into `daftar_game`(`id`,`nama`,`gambar`) values 
(1,'DOTA','dota.png'),
(2,'Mobile Legend','mobilelegend.png'),
(3,'Free Fire','ff.png'),
(4,'PUBG PC','pubg.png'),
(5,'Valorant','valorant.png'),
(6,'PUBG Mobile','pubg2.png'),
(7,'Call Of Duty Mobile','cod.png'),
(8,'Genshin Impact','genshin.png');

/*Table structure for table `game_rank` */

DROP TABLE IF EXISTS `game_rank`;

CREATE TABLE `game_rank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) DEFAULT NULL,
  `tier` varchar(50) DEFAULT NULL,
  `bintang_point` int(10) DEFAULT NULL,
  `harga` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;

/*Data for the table `game_rank` */

insert  into `game_rank`(`id`,`game_id`,`tier`,`bintang_point`,`harga`) values 
(1,1,'Archon 2',1,1000),
(2,1,'Archon 3',1,1500),
(3,1,'Archon 4',1,1800),
(4,1,'Legend 1',1,2000),
(5,1,'Legend 2',1,2500),
(6,1,'Legend 3',1,2800),
(7,1,'Ancient',1,3000),
(8,2,'Legend 5',1,1000),
(9,2,'Legend 4',1,1500),
(10,2,'Legend 3',1,1800),
(11,2,'Mythic 5',1,2000),
(12,2,'Mythic 4',1,2500),
(13,2,'Mythic 3',1,2800),
(14,3,'Gold 2',1,2000),
(15,3,'Gold 3',1,2500),
(16,3,'Gold 4',1,2800),
(17,3,'Platinum 2',1,3000),
(18,3,'Platinum 3',1,3500),
(19,3,'Platinum 4',1,3800),
(20,3,'Diamond',1,4000),
(21,4,'Platinum 3',1,1000),
(22,4,'Platinum 4',1,1500),
(23,4,'Platinum 5',1,1800),
(24,4,'Diamond 3',1,2000),
(25,4,'Diamond 4',1,2500),
(26,4,'Diamond 5',1,2800),
(27,4,'Crown',1,3000),
(28,5,'Platinum 1',1,1000),
(29,5,'Platinum 2',1,1500),
(30,5,'Platinum 3',1,1800),
(31,5,'Diamond 1',1,2000),
(32,5,'Diamond 2',1,2500),
(33,5,'Diamond 3',1,2800),
(34,5,'Imortal',1,3000),
(35,6,'Platinum 3',1,2000),
(36,6,'Platinum 4',1,2500),
(37,6,'Platinum 5',1,2800),
(38,6,'Diamond 3',1,3000),
(39,6,'Diamond 4',1,3500),
(40,6,'Diamond 5',1,3800),
(41,6,'Crown',1,4000),
(42,7,'Elite 3',1,1000),
(43,7,'Elite 4',1,1500),
(44,7,'Elite 5',1,1800),
(45,7,'Pro 3',1,2000),
(46,7,'Pro 4',1,2500),
(47,7,'Pro 5',1,2800),
(48,7,'Master',1,3000);

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_harga` int(11) DEFAULT NULL,
  `no_pesanan` varchar(11) DEFAULT NULL,
  `pemesan` varchar(50) DEFAULT NULL,
  `id_game` varchar(10) DEFAULT NULL,
  `id_server` varchar(10) DEFAULT NULL,
  `qty` int(2) DEFAULT NULL,
  `kode_bayar` varchar(8) DEFAULT NULL,
  `waktu_order` int(10) DEFAULT NULL,
  `total` int(50) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `id_horseman` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id`,`id_harga`,`no_pesanan`,`pemesan`,`id_game`,`id_server`,`qty`,`kode_bayar`,`waktu_order`,`total`,`status`,`id_horseman`) values 
(20,20,'tMBmDWabPjI','joko@mail.com','12314','43214',3,'NRZKHhFY',1638971165,9000,'3',10),
(25,1,'IBJ5CQDxOn1','joko@mail.com','12314','43214',1,'QlhmvJdH',1639059166,1000,'2',0),
(27,3,'w0mRxVIufQD','erik@gmail.com','12314','43214',4,'sihIlLgK',1639060621,7200,'3',4),
(28,7,'1234','joko@mail.com','12314','43214',3,'NRZKHhFY',1638971165,9000,'2',0),
(29,7,'321','joko@mail.com','12314','43214',3,'NRZKHhFY',1638971165,9000,'2',0);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `role_id` int(1) DEFAULT NULL,
  `waktu_gabung` int(11) DEFAULT NULL,
  `aktif` int(1) DEFAULT NULL,
  `tentang` varchar(128) DEFAULT NULL,
  `tempat_tinggal` varchar(128) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`id`,`nama`,`email`,`gambar`,`password`,`role_id`,`waktu_gabung`,`aktif`,`tentang`,`tempat_tinggal`,`no_hp`) values 
(4,'Riyan First Tiyanto','riyandotianto2@gmail.com','3600_9_10.jpg','$2y$10$GLfBiFU0YHTEQ3xh2gaxZem0hJASvDrOWuBMhxZcPFJw0dX0q6jbG',1,1635650970,1,'  Web Designer / UX / Graphic Artist  ','Demo Street 123, Demo City 04312, NJ','081311011567'),
(9,'bobon','bobon@mail.com','assts.png','$2y$10$M3.miyiKs/Hg5O/abDlbue6Ya8EdZg/RHg3j/iraM3PI5L/NfoRke',3,1635673334,1,' ini catatan   ','coba','coba'),
(10,'Riyan first Tiyanto','19200366@bsi.ac.id','3600_9_10.jpg','$2y$10$GLfBiFU0YHTEQ3xh2gaxZem0hJASvDrOWuBMhxZcPFJw0dX0q6jbG',2,1635673334,1,'catatan','cek','cek'),
(11,'Ilham Alhapis','19201124@bsi.ac.id','assts.png','$2y$10$M3.miyiKs/Hg5O/abDlbue6Ya8EdZg/RHg3j/iraM3PI5L/NfoRke',2,1635673334,1,'catatan','cek','cek'),
(12,'Aryoso Bimo','19200125@bsi.ac.id','assts.png','$2y$10$M3.miyiKs/Hg5O/abDlbue6Ya8EdZg/RHg3j/iraM3PI5L/NfoRke',2,1635673334,1,'catatan','cek','cek'),
(13,'Anggi Indra Pratama','19200429@bsi.ac.id','assts.png','$2y$10$M3.miyiKs/Hg5O/abDlbue6Ya8EdZg/RHg3j/iraM3PI5L/NfoRke',2,1635673334,1,'catatan','cek','cek');

/*Table structure for table `user_akses_menu` */

DROP TABLE IF EXISTS `user_akses_menu`;

CREATE TABLE `user_akses_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_akses_menu` */

insert  into `user_akses_menu`(`id`,`role_id`,`menu_id`) values 
(1,1,1),
(2,1,2),
(3,2,2);

/*Table structure for table `user_menu` */

DROP TABLE IF EXISTS `user_menu`;

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_menu` */

insert  into `user_menu`(`id`,`nama_menu`) values 
(1,'Admin'),
(2,'User');

/*Table structure for table `user_role` */

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_role` */

insert  into `user_role`(`id`,`role`) values 
(1,'Admin'),
(2,'Worker'),
(3,'Client');

/*Table structure for table `user_sub_menu` */

DROP TABLE IF EXISTS `user_sub_menu`;

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) DEFAULT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_sub_menu` */

insert  into `user_sub_menu`(`id`,`menu_id`,`judul`,`url`,`icon`,`is_active`) values 
(1,1,'Dasboard','admin','fas fa-tachometer-alt',1),
(2,1,'Daftar User','admin/list','fas fa-hat-cowboy-side',1),
(3,2,'Profile','user','fas fa-user',1),
(4,2,'Edit Profile','user/edit','fas fa-user-edit',1),
(5,1,'Pesanan','admin/pesanan','fas fa-shopping-cart',1),
(6,2,'Ubah Password','user/ubahpassword','fas fa-key',1),
(7,2,'Daftar Pekerjaan','user/pekerjaan','fas fa-gamepad',1),
(10,2,'Sedang Raid','user/raid','fab fa-battle-net',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
