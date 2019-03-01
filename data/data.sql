/*
SQLyog Community v12.09 (64 bit)
MySQL - 10.1.37-MariaDB : Database - boilerplate
*********************************************************************
*/
CREATE DATABASE /*!32312 IF NOT EXISTS*/`boilerplate` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`) values (2,'admin','21232f297a57a5a743894a0e4a801fc3');
