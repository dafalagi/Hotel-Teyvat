CREATE DATABASE IF NOT EXISTS `hotel_teyvat`;

USE `hotel_teyvat`;

DROP TABLE IF EXISTS `akun`;

CREATE TABLE `akun` (
  `Username` varchar(20) NOT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `akun` VALUES (10119113,"dafa.10119113@dafarizky113.my.id","$2y$10$JU0cMXH034kiq8inaA8wou1bMmXCMQ/M6XYQ3/4.2AvRCXPt.6.HG"),
("admin","admin@admin.com","$2y$10$ramKjkH7nOf50iTNCflgl.gnmt.TsKKAgMg0DUoLY85U.T/pjt/5."),
("alifa6969","alifrahman@gmail.com","$2y$10$K.//NpieJoyazVdC2goY3.M7dsGHhodM56fxfJSXmttjZiOL1sHXy"),
("arif","arifabdan73@gmail.com","$2y$10$5mniO4g3w0F8.mwtV/i9WOSpfu2hoyCnB85ZxQ1qS7B0SJ2ebopZO"),
("arip1226","arifkhairul@gmail.com","$2y$10$4H3utF8nyw30Y4yLjE5APuTHcVJULGbL14YONpxc85cQdDRpeDCmO"),
("asepstalin","asepfairul@gmail.com","$2y$10$7UsKtNdq/1QyGLmtoN9YceZP485tJETJUIhuPIDJyC83.ec5633m."),
("badchannel","badchannel14@gmail.com","$2y$10$Hku3UiGXji/XGp6aLcCI/O.np.1QxMg4W6sFzWl2rwvtppSb6p.De"),
("bagoss12","bagasrizky@gmail.com","iwillhaveorder9"),
("dafa10119113","dafa@email.com","$2y$10$kYiZ1tDY/Gio/JNG/rq2eOeeWEK1r7WMAGl26i7VY6FsWz5mLyjpi"),
("dafalagi","dafa.unknown@gmail.com","$2y$10$rQtvYspL30V.sDTVznyaleyNIn7KxheBgsHaChUtdtA5BrFQIrVbS"),
("fannur123","irfannur@gmail.com","fannur6565"),
("fuadkho14","fuadkhoirul@gmail.com","fuadk111"),
("hussen001","husseinalhabib@gmail.com","hussen121212"),
("lutfa22","luthfifakhrudin@gmail.com","lf12345678"),
("maaya","dafa.10119113@dafarizky113.my.id","$2y$10$wmJGHq.zDXmTAQOU9a34a.YyZ1HoKtZzZeJ0baQOUOSqpL2886eXO"),
("satusatu","satusatu@email.com","$2y$10$yh/RUzHXXR2BU/0j/6jx3Onb0foneKmTfwwu.4ICX2ZSwKEHSx.xK"),
("yuardi1","yudhaardiyana@gmail.com","yuardi111");


DROP TABLE IF EXISTS `detailinap`;

CREATE TABLE `detailinap` (
  `IdInap` int(20) NOT NULL,
  `NoKamar` int(20) NOT NULL,
  KEY `IdInap` (`IdInap`),
  KEY `NoKamar` (`NoKamar`),
  CONSTRAINT `detinap_fk_1` FOREIGN KEY (`IdInap`) REFERENCES `inap` (`IdInap`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `detinap_fk_2` FOREIGN KEY (`NoKamar`) REFERENCES `kamar` (`NoKamar`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `detailinap` VALUES (10100001,101),
(10100002,102),
(10100003,103),
(10100004,104),
(10100005,105),
(10100006,106),
(10100007,107),
(10100009,109),
(10100010,110),
(10100013,104),
(10100013,105),
(10100013,106),
(10100017,110),
(10100018,110),
(10100019,110),
(10100020,110),
(10100021,110),
(10100022,110),
(10100023,110),
(10100024,110),
(10100025,110),
(10100026,110),
(10100026,113),
(10100029,106),
(10100029,116),
(10100030,108),
(10100030,123);


DROP TABLE IF EXISTS `detailtanggungjawab`;

CREATE TABLE `detailtanggungjawab` (
  `IdInap` int(20) NOT NULL,
  `IdPegawai` int(20) NOT NULL,
  KEY `IdPegawai` (`IdPegawai`),
  KEY `IdInap` (`IdInap`),
  CONSTRAINT `detjawab_fk_1` FOREIGN KEY (`IdInap`) REFERENCES `inap` (`IdInap`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `detjawab_fk_2` FOREIGN KEY (`IdPegawai`) REFERENCES `resepsionis` (`IdPegawai`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `detailtanggungjawab` VALUES (10100001,40030011),
(10100002,40030021),
(10100003,40030031),
(10100004,40030041),
(10100005,40030051),
(10100006,40030061),
(10100007,40030071),
(10100009,40030091),
(10100010,40030101);


DROP TABLE IF EXISTS `inap`;

CREATE TABLE `inap` (
  `IdInap` int(20) NOT NULL AUTO_INCREMENT,
  `NoTransaksi` int(20) NOT NULL,
  `NoId` varchar(20) NOT NULL,
  `JumlahTamu` int(10) DEFAULT NULL,
  `CheckIn` date DEFAULT NULL,
  `CheckOut` date DEFAULT NULL,
  PRIMARY KEY (`IdInap`),
  KEY `NoTransaksi` (`NoTransaksi`),
  KEY `NoId` (`NoId`),
  CONSTRAINT `inap_fk_1` FOREIGN KEY (`NoTransaksi`) REFERENCES `transaksi` (`NoTransaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `inap_fk_2` FOREIGN KEY (`NoId`) REFERENCES `tamu` (`NoId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10100031 DEFAULT CHARSET=latin1;

INSERT INTO `inap` VALUES (10100001,1800000001,3002001001,4,"2021-02-01","2021-02-02"),
(10100002,1800000002,3002001002,2,"2021-02-09","2021-02-10"),
(10100003,1800000003,3002001003,3,"2021-02-15","2021-02-20"),
(10100004,1800000004,3002001004,1,"2021-02-20","2021-02-25"),
(10100005,1800000005,3002001005,4,"2021-02-26","2021-02-27"),
(10100006,1800000006,3002001006,8,"2021-03-02","2021-03-03"),
(10100007,1800000007,3002001007,2,"2021-03-04","2021-03-05"),
(10100009,1800000009,3002001009,5,"2021-03-09","2021-03-12"),
(10100010,1800000010,3002001010,4,"2021-03-11","2021-03-12"),
(10100011,1800000010,3002001009,5,"2021-07-08","2021-07-15"),
(10100012,1800000006,3002001003,2,"2021-07-09","2021-07-11"),
(10100013,1800000013,830893170132,5,"2021-07-09","2021-07-10"),
(10100017,1800000017,9999999,2,"2021-07-30","2021-07-31"),
(10100018,1800000018,9999999,2,"2021-07-30","2021-07-31"),
(10100019,1800000019,9999999,2,"2021-07-30","2021-07-31"),
(10100020,1800000020,9999999,2,"2021-07-30","2021-07-31"),
(10100021,1800000021,9999999,2,"2021-07-30","2021-07-31"),
(10100022,1800000022,3645345345,2,"2021-07-30","2021-07-31"),
(10100023,1800000023,435343423,2,"2021-07-30","2021-07-31"),
(10100024,1800000024,12564574,2,"2021-07-30","2021-07-31"),
(10100025,1800000025,45645654,2,"2021-07-30","2021-07-31"),
(10100026,1800000026,563523432,2,"2021-07-30","2021-07-31"),
(10100029,1800000029,699696969969699969,4,"2021-08-10","2021-08-13"),
(10100030,1800000030,98989898989,4,"2021-08-10","2021-08-13");


DROP TABLE IF EXISTS `kamar`;

CREATE TABLE `kamar` (
  `NoKamar` int(20) NOT NULL AUTO_INCREMENT,
  `TipeKamar` varchar(20) DEFAULT NULL,
  `JumlahKasur` int(11) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`NoKamar`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

INSERT INTO `kamar` VALUES (101,"Standard Room",1,1000000),
(102,"Standard Room",2,2000000),
(103,"Standard Room",3,3000000),
(104,"Superior Room",1,2000000),
(105,"Superior Room",2,4000000),
(106,"Superior Room",3,6000000),
(107,"Deluxe Room",1,3000000),
(108,"Deluxe Room",2,6000000),
(109,"Suite",1,4000000),
(110,"Suite",2,8000000),
(111,"Suite",3,12000000),
(112,"Deluxe Room",3,9000000),
(113,"Suite",2,8000000),
(114,"Suite",2,8000000),
(115,"Deluxe Room",1,3000000),
(116,"Superior Room",3,6000000),
(117,"Standard Room",2,2000000),
(118,"Standard Room",3,3000000),
(119,"Standard Room",1,1000000),
(120,"Suite",3,12000000),
(121,"Suite",1,4000000),
(122,"Deluxe Room",3,9000000),
(123,"Deluxe Room",2,6000000);


DROP TABLE IF EXISTS `manajer`;

CREATE TABLE `manajer` (
  `IdManajer` int(20) NOT NULL AUTO_INCREMENT,
  `NamaManajer` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`IdManajer`)
) ENGINE=InnoDB AUTO_INCREMENT=80040102 DEFAULT CHARSET=latin1;

INSERT INTO `manajer` VALUES (80040011,"Arif Abdan"),
(80040021,"Dafa Rizky"),
(80040031,"Saeful Anwar"),
(80040041,"Muhammad Rojabi"),
(80040051,"Ikhsan Rizki"),
(80040061,"Angga Cahya"),
(80040071,"Reichan Muhammad"),
(80040081,"Primarazaq NoorShalih"),
(80040091,"Deny Farras"),
(80040101,"Rizky Septiana");


DROP TABLE IF EXISTS `resepsionis`;

CREATE TABLE `resepsionis` (
  `IdPegawai` int(20) NOT NULL AUTO_INCREMENT,
  `IdManajer` int(20) NOT NULL,
  `NamaPegawai` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IdPegawai`),
  KEY `IdManajer` (`IdManajer`),
  CONSTRAINT `res_fk_1` FOREIGN KEY (`IdManajer`) REFERENCES `manajer` (`IdManajer`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=40030102 DEFAULT CHARSET=latin1;

INSERT INTO `resepsionis` VALUES (12553434,80040051,"lily"),
(40030011,80040011,"Agus Dahlan R"),
(40030021,80040021,"Bahar Fakhri"),
(40030031,80040031,"Nur Faizdi"),
(40030041,80040041,"Nurul Aini"),
(40030051,80040051,"Harry Afandi"),
(40030061,80040061,"Wahyu Adi"),
(40030071,80040071,"Fairul Alam"),
(40030081,80040081,"Auliya Amalia"),
(40030091,80040091,"Putri Mahar"),
(40030101,80040101,"Rina Maharani");


DROP TABLE IF EXISTS `tamu`;

CREATE TABLE `tamu` (
  `NoId` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `TipeId` varchar(10) DEFAULT NULL,
  `Nama` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`NoId`),
  KEY `Username` (`Username`),
  CONSTRAINT `tamu_fk_1` FOREIGN KEY (`Username`) REFERENCES `akun` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tamu` VALUES (123123,"admin","sim","dafa"),
(123123123,"dafalagi","ktp","dafaf"),
(12564574,"admin","sh","asdas"),
(3002001001,"fuadkho14","KTP","Fuad Khoirul"),
(3002001002,"yuardi1","SIM","Yudha Ardiyana"),
(3002001003,"lutfa22","KTP","Luthfi Fakhrudin"),
(3002001004,"hussen001","KTP","Hussein Al Habib"),
(3002001005,"asepstalin","KTP","Asep Fairul"),
(3002001006,"bagoss12","SIM","Bagas Rizky"),
(3002001007,"arip1226","KTP","Arif Khairul"),
(3002001009,"alifa6969","KTP","Alif Rahman"),
(3002001010,"fannur123","KTP","Irfan Nur"),
(3645345345,"admin","sim","asdasdasdds"),
(435343423,"admin","sm","sfsdfa"),
(45645654,"admin","sh","asdasd"),
(563523432,"admin","asda","asdas"),
(699696969969699969,"admin","sim","epul"),
(78392817191,"badchannel","ktp","dafa"),
(78392817193,"badchannel","ktp","dafa"),
(830893170132,"admin","sim","dafa"),
(98989898989,"admin","test","test"),
(9999999,"admin","sim","FDFGD");


DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `NoTransaksi` int(20) NOT NULL AUTO_INCREMENT,
  `Nominal` int(20) DEFAULT NULL,
  `TipeBayar` varchar(10) DEFAULT NULL,
  `AtasNama` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`NoTransaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=1800000031 DEFAULT CHARSET=latin1;

INSERT INTO `transaksi` VALUES (1800000001,300000,"Kredit","Fuad Khoirul"),
(1800000002,300000,"Tunai","Yudha Ardiyana"),
(1800000003,1500000,"Debit","Luthfi Fakrudin"),
(1800000004,2750000,"Tunai","Hussein Al Habib"),
(1800000005,550000,"Kredit","Asep Fairul"),
(1800000006,550000,"Debit","Bagas Rizky"),
(1800000007,900000,"Tunai","Arif Khairul"),
(1800000008,4500000,"Tunai","Fathur Muhammad"),
(1800000009,3000000,"Debit","Alif Rahman"),
(1800000010,1500000,"Kredit","Irfan Nur"),
(1800000013,6000000,"tunai","dafa"),
(1800000017,16000000,"tunai","FDFGD"),
(1800000018,16000000,"tunai","FDFGD"),
(1800000019,16000000,"tunai","FDFGD"),
(1800000020,16000000,"tunai","FDFGD"),
(1800000021,16000000,"tunai","FDFGD"),
(1800000022,16000000,"tunai","asdasdasdds"),
(1800000023,16000000,"tunai","sfsdfa"),
(1800000024,16000000,"tunai","asdas"),
(1800000025,16000000,"tunai","asdasd"),
(1800000026,16000000,"tunai","asdas"),
(1800000027,20000000,"tunai","epul"),
(1800000028,20000000,"tunai","epul"),
(1800000029,20000000,"tunai","epul"),
(1800000030,15000000,"tunai","test");


