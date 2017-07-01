-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.45-community-nt-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema dentistdb
--

CREATE DATABASE IF NOT EXISTS dentistdb;
USE dentistdb;

--
-- Definition of table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`,`password`,`email`,`name`) VALUES 
 (1,'123','admin','Taha');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


--
-- Definition of table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE `appointment` (
  `id` int(11) NOT NULL auto_increment,
  `date_` varchar(45) NOT NULL,
  `time_` varchar(45) NOT NULL,
  `treatment` varchar(45) NOT NULL,
  `pid` int(10) unsigned NOT NULL,
  `details` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

/*!40000 ALTER TABLE `appointment` DISABLE KEYS */;
INSERT INTO `appointment` (`id`,`date_`,`time_`,`treatment`,`pid`,`details`) VALUES 
 (1,'12/01/2012','09:00AM','braces exchange',1,'no'),
 (2,'01/06/2013','10:00AM','curing a teeth',1,'no'),
 (3,'01/06/2013','10:30AM','curing a teeth',1,'no'),
 (4,'01/14/2013','9:00AM','no.',2,'curing teeth'),
 (5,'01/15/2013','9:00AM','dfgdfgd',1,'no.'),
 (6,'01/15/2013','9:00AM','new',1,'');
/*!40000 ALTER TABLE `appointment` ENABLE KEYS */;


--
-- Definition of table `appreq`
--

DROP TABLE IF EXISTS `appreq`;
CREATE TABLE `appreq` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `date_` varchar(45) NOT NULL,
  `time_` varchar(45) NOT NULL,
  `treatments` varchar(45) NOT NULL,
  `pid` varchar(45) NOT NULL,
  `status` varchar(33) NOT NULL,
  `comment` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appreq`
--

/*!40000 ALTER TABLE `appreq` DISABLE KEYS */;
INSERT INTO `appreq` (`id`,`date_`,`time_`,`treatments`,`pid`,`status`,`comment`) VALUES 
 (7,'11/23/2012','10:00PM','Curing a teeth: 150RM','1','1','no.'),
 (8,'11/16/2012','10:00PM','','1','1',''),
 (9,'12/20/2012','14:30','','1','0',''),
 (10,'12/30/2012','16:30','Curing a teeth: 150RM','1','1',''),
 (11,'12/31/2012','16:30','Curing a teeth: 150RM','1','Waiting for acceptance..',''),
 (12,'12/31/2012','16:30','Curing a teeth: 150RM','1','Waiting for acceptance..',''),
 (14,'12/30/2012','9:00','Curing a teeth: 150RM','1','Waiting for acceptance..','');
/*!40000 ALTER TABLE `appreq` ENABLE KEYS */;


--
-- Definition of table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `message` varchar(45) NOT NULL,
  `date_` varchar(45) NOT NULL,
  `pid` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` (`id`,`name`,`mobile`,`email`,`message`,`date_`,`pid`) VALUES 
 (35,'taha ','0199999','taha.cr@gmail.com','ok thank you.','13-01-2013','1'),
 (50,'Ahmad','0102222','ahmad1234@hotmail.com','replyyyyyyyyyyyyy','13/01/2013','2'),
 (56,'Ahmad','0102222','ahmad1234@hotmail.com','yesssssssss','13/01/2013','2'),
 (58,'Ahmad','0102222','ahmad1234@hotmail.com','newwwwwwwwww','13/01/2013','2'),
 (59,'Ahmad','0102222','ahmad1234@hotmail.com','dfgdfgdfg','13/01/2013','2'),
 (60,'','','','fgfgfdg','13/01/2013','1');
/*!40000 ALTER TABLE `message` ENABLE KEYS */;


--
-- Definition of table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE `patient` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `dob` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  `date_` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` (`id`,`name`,`password`,`gender`,`mobile`,`email`,`dob`,`country`,`date_`) VALUES 
 (1,'taha ','1234','Male','0199999','taha.cr@gmail.com','1/3/1988','Saudi Arabia','16-10-2012'),
 (2,'Ahmad','123','Male','0102222','ahmad1234@hotmail.com','1/1/1989','Malaysia','16-10-2012');
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;


--
-- Definition of table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE `payments` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `date_` varchar(45) NOT NULL,
  `amount` varchar(45) NOT NULL,
  `details` varchar(45) NOT NULL,
  `comment` varchar(45) NOT NULL,
  `pid` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payments`
--

/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` (`id`,`date_`,`amount`,`details`,`comment`,`pid`) VALUES 
 (1,'12/07/2012','200','curing teeth','no',1),
 (2,'12/07/2012','222','curing teeth','',1),
 (3,'12/29/2012','200','curing teeth','no.',1),
 (4,'12/29/2012','200','curing teeth','no.',1),
 (5,'12/29/2012','330','braces exchange','no',2),
 (6,'12/29/2012','200','curing teeth','no',2),
 (7,'12/29/2012','200','braces exchange','no',1);
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;


--
-- Definition of table `treatments`
--

DROP TABLE IF EXISTS `treatments`;
CREATE TABLE `treatments` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `date_` varchar(45) NOT NULL,
  `cost` varchar(45) NOT NULL,
  `desc` varchar(45) NOT NULL,
  `comment` varchar(45) NOT NULL,
  `pid` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `treatments`
--

/*!40000 ALTER TABLE `treatments` DISABLE KEYS */;
INSERT INTO `treatments` (`id`,`date_`,`cost`,`desc`,`comment`,`pid`) VALUES 
 (1,'10/16/2012','200','curing teeth','none.',1),
 (2,'12/08/2012','200','curing teeth','no',2),
 (3,'01/08/2013','150','braces checking','',1),
 (4,'01/08/2013','200','braces checking','',2);
/*!40000 ALTER TABLE `treatments` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
