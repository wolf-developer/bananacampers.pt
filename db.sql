/*
SQLyog Community v12.4.3 (32 bit)
MySQL - 10.1.37-MariaDB : Database - rental
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `admin_tb` */

DROP TABLE IF EXISTS `admin_tb`;

CREATE TABLE `admin_tb` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(30) DEFAULT NULL,
  `admin_first` varchar(30) DEFAULT NULL,
  `admin_last` varchar(30) DEFAULT NULL,
  `admin_password` varchar(50) DEFAULT NULL,
  `admin_img` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin_tb` */

insert  into `admin_tb`(`id`,`admin_email`,`admin_first`,`admin_last`,`admin_password`,`admin_img`,`created_at`) values 
(1,'admin','banana','campers','698d51a19d8a121ce581499d7b701668','1600394121.jpg','2020-09-12 01:09:21');

/*Table structure for table `ads_step` */

DROP TABLE IF EXISTS `ads_step`;

CREATE TABLE `ads_step` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) DEFAULT NULL,
  `vehicle_type` varchar(30) DEFAULT NULL,
  `chassis_brand` varchar(40) DEFAULT NULL,
  `chassis_model` varchar(40) DEFAULT NULL,
  `conversion_model` varchar(40) DEFAULT NULL,
  `seats` int(2) DEFAULT NULL,
  `seatbelts` int(2) DEFAULT NULL,
  `berth` int(2) DEFAULT NULL,
  `license_p` varchar(40) DEFAULT NULL,
  `reg_country` varchar(40) DEFAULT NULL,
  `license_p_year` varchar(30) DEFAULT NULL,
  `total_weight` varchar(30) DEFAULT NULL,
  `fuel` varchar(10) DEFAULT NULL,
  `consumption` varchar(20) DEFAULT NULL,
  `length` decimal(10,1) DEFAULT NULL,
  `width` decimal(10,1) DEFAULT NULL,
  `height` decimal(10,1) DEFAULT NULL,
  `acquisition_v` varchar(40) DEFAULT NULL,
  `intro` text,
  `cell_phone` varchar(30) DEFAULT NULL,
  `Street` varchar(50) DEFAULT NULL,
  `Number` varchar(50) DEFAULT NULL,
  `Flat_house` varchar(50) DEFAULT NULL,
  `Zip_code` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `District` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `deposit` varchar(30) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `assurance_doc` varchar(40) DEFAULT NULL,
  `assurance` varchar(50) DEFAULT NULL,
  `lics_plate_doc` varchar(40) DEFAULT NULL,
  `lics_plate` varchar(50) DEFAULT NULL,
  `tech_inspec_doc` varchar(40) DEFAULT NULL,
  `tech_inspec` varchar(40) DEFAULT NULL,
  `step` int(2) DEFAULT '0',
  `status` int(1) DEFAULT '0',
  `review` int(4) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `ads_step` */

insert  into `ads_step`(`id`,`email`,`vehicle_type`,`chassis_brand`,`chassis_model`,`conversion_model`,`seats`,`seatbelts`,`berth`,`license_p`,`reg_country`,`license_p_year`,`total_weight`,`fuel`,`consumption`,`length`,`width`,`height`,`acquisition_v`,`intro`,`cell_phone`,`Street`,`Number`,`Flat_house`,`Zip_code`,`City`,`District`,`price`,`deposit`,`Country`,`assurance_doc`,`assurance`,`lics_plate_doc`,`lics_plate`,`tech_inspec_doc`,`tech_inspec`,`step`,`status`,`review`,`created_at`) values 
(1,'qwe@qwe.qwe','Coachbuilt','22','11','22',3,5,2,'3','Angola','2020-10-07','12','Others','10~12L/100km',343.0,34.0,12.0,'54','343443','545','34','34','34','34','34','34',34,'4334','Barbados','2020-10-21','16016520553.jpg','344','16016520552.jpg','2020-10-21','16016520551.jpg',9,1,0,'2020-10-03 01:19:01'),
(2,'qwe@qwe.qwe','‘A’ class','8','8','8',5,4,3,'8','Angola','2020-10-15','8','Others','10~12L/100km',8.0,8.0,8.0,'8','888','8','8','8','8','8','8','8',8,'88','Barbados','2020-10-27','16017993813.jpg','88','16017993812.jpg','2020-10-27','16017993811.jpg',9,1,0,'2020-10-04 18:14:56');

/*Table structure for table `booking` */

DROP TABLE IF EXISTS `booking`;

CREATE TABLE `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ads_id` int(10) DEFAULT NULL,
  `startDate` date NOT NULL DEFAULT '0000-00-00',
  `endDate` date NOT NULL DEFAULT '0000-00-00',
  `owner_email` varchar(30) NOT NULL,
  `renter_email` varchar(30) NOT NULL,
  `reason` varchar(30) NOT NULL,
  `allday_pr` float NOT NULL,
  `service_pr` float NOT NULL,
  `deposit_pr` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '0',
  `ck_own` tinyint(4) DEFAULT '0',
  `ck_clt` tinyint(4) DEFAULT '0',
  `is_read_msg` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `booking` */

insert  into `booking`(`id`,`ads_id`,`startDate`,`endDate`,`owner_email`,`renter_email`,`reason`,`allday_pr`,`service_pr`,`deposit_pr`,`created_at`,`status`,`ck_own`,`ck_clt`,`is_read_msg`) values 
(4,1,'2020-10-05','2020-10-10','qwe@qwe.qwe','test@gmail.com','',100,26,4334,'2020-10-04 18:17:58',3,0,1,0);

/*Table structure for table `chat` */

DROP TABLE IF EXISTS `chat`;

CREATE TABLE `chat` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `bookid` int(20) DEFAULT NULL,
  `sender` varchar(30) DEFAULT NULL,
  `receiver` varchar(30) DEFAULT NULL,
  `msg` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `chat` */

insert  into `chat`(`id`,`bookid`,`sender`,`receiver`,`msg`,`created_at`) values 
(1,4,'qwe@qwe.qwe','test@gmail.com','what?','2020-10-04 18:18:34'),
(2,4,'qwe@qwe.qwe','test@gmail.com','what?\n','2020-10-04 18:18:39'),
(3,4,'qwe@qwe.qwe','test@gmail.com','what?\n\n','2020-10-04 18:18:44'),
(4,4,'qwe@qwe.qwe','test@gmail.com','what?\n\n\n','2020-10-04 18:18:50'),
(5,4,'qwe@qwe.qwe','test@gmail.com','what?\n\n\n\n','2020-10-04 18:18:55');

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) DEFAULT NULL,
  `first` varchar(30) DEFAULT NULL,
  `last` varchar(30) DEFAULT NULL,
  `deposit_amount` float DEFAULT NULL,
  `own_pr` float DEFAULT NULL,
  `owner_email` varchar(50) DEFAULT NULL,
  `firstday` date DEFAULT '0000-00-00',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(5) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `payment` */

insert  into `payment`(`id`,`email`,`first`,`last`,`deposit_amount`,`own_pr`,`owner_email`,`firstday`,`created_at`,`status`) values 
(6,'test@gmail.com','tst1','ee',126,100,'qwe@qwe.qwe','0000-00-00','2020-10-05 00:43:09',1),
(10,'test@gmail.com','qwe','dev',18,16,'qwe@qwe.qwe','2020-10-12','2020-10-05 03:28:12',0),
(11,'test@gmail.com','hhded','dfgd',126,100,'qwe@qwe.qwe','2020-10-05','2020-10-05 14:15:25',0);

/*Table structure for table `review` */

DROP TABLE IF EXISTS `review`;

CREATE TABLE `review` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ads_id` int(10) DEFAULT NULL,
  `renter_email` varchar(40) DEFAULT NULL,
  `comment` text,
  `rate` int(2) DEFAULT '0',
  `img` varchar(40) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `review` */

/*Table structure for table `rv_berth_tb` */

DROP TABLE IF EXISTS `rv_berth_tb`;

CREATE TABLE `rv_berth_tb` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `ads_id` int(12) DEFAULT NULL,
  `berth_num` int(2) DEFAULT NULL,
  `type_berth` varchar(30) DEFAULT NULL,
  `width_berth` decimal(5,1) DEFAULT NULL,
  `length_berth` decimal(5,1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `rv_berth_tb` */

insert  into `rv_berth_tb`(`id`,`ads_id`,`berth_num`,`type_berth`,`width_berth`,`length_berth`,`created_at`) values 
(1,1,1,'Twin bed',34.0,55.0,'2020-10-03 01:20:16'),
(2,2,1,'Build in/off bed',8.0,8.0,'2020-10-04 18:15:28');

/*Table structure for table `rv_photo_tb` */

DROP TABLE IF EXISTS `rv_photo_tb`;

CREATE TABLE `rv_photo_tb` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ads_id` int(5) DEFAULT NULL,
  `img_name` varchar(20) DEFAULT NULL,
  `photo_num` int(2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `rv_photo_tb` */

insert  into `rv_photo_tb`(`id`,`ads_id`,`img_name`,`photo_num`,`created_at`) values 
(7,1,'1601784740.jpg',1,'2020-10-04 14:12:20'),
(10,1,'1601785219.jpg',4,'2020-10-04 14:20:19'),
(11,1,'1601794563.png',3,'2020-10-04 16:56:03'),
(12,1,'1601794569.jpg',4,'2020-10-04 16:56:09'),
(13,1,'1601794576.png',5,'2020-10-04 16:56:16'),
(14,2,'16017993231.png',1,'2020-10-04 18:15:23'),
(15,2,'16017993232.png',2,'2020-10-04 18:15:23'),
(16,2,'16017993233.png',3,'2020-10-04 18:15:23');

/*Table structure for table `user_tb` */

DROP TABLE IF EXISTS `user_tb`;

CREATE TABLE `user_tb` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) DEFAULT NULL,
  `first` varchar(15) DEFAULT NULL,
  `last` varchar(15) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `driv_doc` varchar(50) DEFAULT NULL,
  `identity` varchar(50) DEFAULT NULL,
  `phone_num` varchar(30) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Street` varchar(50) DEFAULT NULL,
  `House_number` varchar(50) DEFAULT NULL,
  `Postal_Code` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `code` varchar(40) DEFAULT NULL,
  `iban` varchar(30) DEFAULT NULL,
  `presentation` text,
  `ident_num` varchar(40) DEFAULT NULL,
  `driv_num` varchar(40) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_picture` varchar(30) DEFAULT NULL,
  `balance` varchar(40) DEFAULT '0',
  `permit` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

/*Data for the table `user_tb` */

insert  into `user_tb`(`id`,`email`,`first`,`last`,`birth`,`driv_doc`,`identity`,`phone_num`,`Country`,`City`,`Street`,`House_number`,`Postal_Code`,`password`,`code`,`iban`,`presentation`,`ident_num`,`driv_num`,`created_at`,`user_picture`,`balance`,`permit`) values 
(51,'qwe@qwe.qwe','qwe','qwe','1998-04-04','1601799211.jpg','1601799211.jpg','123','Barbados','qwe','qwe','123','123','4297f44b13955235245b2497399d7a93',NULL,'eee','efswefsef','123','123','2020-09-23 14:18:25','1601652102.jpg','116',1),
(52,'test@gmail.com','tst1','dev','1997-05-04',NULL,NULL,'111','Bangladesh','qwe','3','111','111','4297f44b13955235245b2497399d7a93',NULL,NULL,NULL,NULL,NULL,'2020-10-04 04:38:49',NULL,'0',1);

/*Table structure for table `vehicle_equipements` */

DROP TABLE IF EXISTS `vehicle_equipements`;

CREATE TABLE `vehicle_equipements` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ads_id` int(10) DEFAULT NULL,
  `power_steering` int(2) DEFAULT NULL,
  `cruise_control` int(2) DEFAULT NULL,
  `wheel_drive` int(2) DEFAULT NULL,
  `gps` int(2) DEFAULT NULL,
  `parking_motion` int(2) DEFAULT NULL,
  `rear_camera` int(2) DEFAULT NULL,
  `cabin_heating` int(2) DEFAULT NULL,
  `ac` int(2) DEFAULT NULL,
  `central_lock` int(2) DEFAULT NULL,
  `baby_seat` int(2) DEFAULT NULL,
  `baby_car_chair` int(2) DEFAULT NULL,
  `winter_tires` int(2) DEFAULT NULL,
  `snow_chains` int(2) DEFAULT NULL,
  `wedge_levelers` int(2) DEFAULT NULL,
  `safety_kit` int(2) DEFAULT NULL,
  `Autoradio` int(2) DEFAULT NULL,
  `CD_Player` int(2) DEFAULT NULL,
  `MP3` int(2) DEFAULT NULL,
  `Audio_in` int(2) DEFAULT NULL,
  `Bluetooth` int(2) DEFAULT NULL,
  `TV` int(2) DEFAULT NULL,
  `DVD_Player` int(2) DEFAULT NULL,
  `Satellite_dish` int(2) DEFAULT NULL,
  `Sponge` int(2) DEFAULT NULL,
  `AC_life` int(2) DEFAULT NULL,
  `Bed_linen` int(2) DEFAULT NULL,
  `Swing_driver` int(2) DEFAULT NULL,
  `Swing_passenger` int(2) DEFAULT NULL,
  `Sink` int(2) DEFAULT NULL,
  `Stove` int(2) DEFAULT NULL,
  `Oven` int(2) DEFAULT NULL,
  `Fridge` int(2) DEFAULT NULL,
  `Freezer` int(2) DEFAULT NULL,
  `Extractor` int(2) DEFAULT NULL,
  `Pan_kit` int(2) DEFAULT NULL,
  `Dishes_kit` int(2) DEFAULT NULL,
  `Coffee_machine` int(2) DEFAULT NULL,
  `Inside_table` int(2) DEFAULT NULL,
  `dining_seats` int(2) DEFAULT NULL,
  `Inside_shower` int(2) DEFAULT NULL,
  `Outside_shower` int(2) DEFAULT NULL,
  `Integrated_bathroom` int(2) DEFAULT NULL,
  `Portable_toilet` int(2) DEFAULT NULL,
  `Sink_bath` int(2) DEFAULT NULL,
  `Bicycle_carrier` int(2) DEFAULT NULL,
  `Side_awning` int(2) DEFAULT NULL,
  `Outside_table` int(2) DEFAULT NULL,
  `Barbecue` int(2) DEFAULT NULL,
  `Towing_adaptor` int(2) DEFAULT NULL,
  `Outdoor_luggage_compartment` int(2) DEFAULT NULL,
  `Outside_chairs` int(2) DEFAULT NULL,
  `Solar_panels` int(2) DEFAULT NULL,
  `Outside_Eletric` int(2) DEFAULT NULL,
  `Auxiliary_battery` int(2) DEFAULT NULL,
  `Eletric_generator` int(2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `vehicle_equipements` */

insert  into `vehicle_equipements`(`id`,`ads_id`,`power_steering`,`cruise_control`,`wheel_drive`,`gps`,`parking_motion`,`rear_camera`,`cabin_heating`,`ac`,`central_lock`,`baby_seat`,`baby_car_chair`,`winter_tires`,`snow_chains`,`wedge_levelers`,`safety_kit`,`Autoradio`,`CD_Player`,`MP3`,`Audio_in`,`Bluetooth`,`TV`,`DVD_Player`,`Satellite_dish`,`Sponge`,`AC_life`,`Bed_linen`,`Swing_driver`,`Swing_passenger`,`Sink`,`Stove`,`Oven`,`Fridge`,`Freezer`,`Extractor`,`Pan_kit`,`Dishes_kit`,`Coffee_machine`,`Inside_table`,`dining_seats`,`Inside_shower`,`Outside_shower`,`Integrated_bathroom`,`Portable_toilet`,`Sink_bath`,`Bicycle_carrier`,`Side_awning`,`Outside_table`,`Barbecue`,`Towing_adaptor`,`Outdoor_luggage_compartment`,`Outside_chairs`,`Solar_panels`,`Outside_Eletric`,`Auxiliary_battery`,`Eletric_generator`,`created_at`) values 
(1,1,1,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,1,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2020-10-03 01:20:18'),
(2,2,NULL,1,NULL,NULL,1,NULL,NULL,1,NULL,1,NULL,1,NULL,NULL,1,NULL,NULL,NULL,1,1,NULL,NULL,NULL,1,NULL,1,NULL,NULL,1,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,5,NULL,1,NULL,NULL,1,NULL,NULL,1,NULL,NULL,1,NULL,1,NULL,NULL,1,'2020-10-04 18:15:33');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
