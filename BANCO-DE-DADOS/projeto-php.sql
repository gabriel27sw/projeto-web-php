/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.24-MariaDB : Database - test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`test` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `test`;

/*Table structure for table `categorias_produtos` */

DROP TABLE IF EXISTS `categorias_produtos`;

CREATE TABLE `categorias_produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `categorias_produtos` */

insert  into `categorias_produtos`(`id`,`nome_categoria`,`created`,`modified`) values (4,'Engenharia Elétrica','2022-06-09 02:46:06','2022-06-09 02:46:06'),(5,'Engenharia da Computação','2022-06-09 02:46:18','2022-06-09 02:46:18'),(3,'Engenharia Mecânica','2022-06-09 02:45:37','2022-06-09 02:45:37');

/*Table structure for table `produtos` */

DROP TABLE IF EXISTS `produtos`;

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `categorias_produto_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `produtos` */

insert  into `produtos`(`id`,`nome_produto`,`categorias_produto_id`,`created`,`modified`) values (1,'Curso de CakePHP',1,'2018-09-02 14:12:07','2018-09-02 14:12:07'),(2,'Curso básico de mecatrônica',2,'2018-09-02 14:15:01','2018-09-02 14:15:01'),(5,'ssss',3,'2022-06-09 03:41:39','2022-06-09 03:41:39');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
