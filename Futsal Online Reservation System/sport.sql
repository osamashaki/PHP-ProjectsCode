-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jan 21, 2015 at 12:28 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `sport`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` VALUES (1, 'Mohd', 'moh@gmail.com', '123456');

-- --------------------------------------------------------

-- 
-- Table structure for table `company`
-- 

CREATE TABLE `company` (
  `id` int(11) NOT NULL auto_increment,
  `comname` varchar(25) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `city` varchar(33) NOT NULL,
  `password` varchar(25) NOT NULL,
  `regdate` varchar(22) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `company`
-- 

INSERT INTO `company` VALUES (2, 'Kajang company', '01224455', 'kajang@hotmail.com', 'Kajang', '123456', '04-01-2015');
INSERT INTO `company` VALUES (3, 'Serdang company', '0123456789', 'serdang@hotmail.com', 'Serdang ', '123456', '20-01-2015');
INSERT INTO `company` VALUES (4, 'Bangi company', '0987812727', 'bangi@hotmail.com', 'Bangi ', '123456', '12-1-2015');
INSERT INTO `company` VALUES (5, 'KL company', '01288282828', 'kl@hotmail.com', 'KL', '123456', '1-1-2015');

-- --------------------------------------------------------

-- 
-- Table structure for table `member`
-- 

CREATE TABLE `member` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `reg_date` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `member`
-- 

INSERT INTO `member` VALUES (3, 'Mohammad', 'Male', '01454545', 'moh@gmail.com', '123456', '12-12-2014');
INSERT INTO `member` VALUES (4, 'test', 'Male', '01224455', 'test@test.com', '123456', '21-01-2015');

-- --------------------------------------------------------

-- 
-- Table structure for table `msgs`
-- 

CREATE TABLE `msgs` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(45) default NULL,
  `mobile` varchar(45) default NULL,
  `msg` varchar(450) NOT NULL,
  `date_` varchar(45) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `msgs`
-- 

INSERT INTO `msgs` VALUES (1, 'test', '00000', 'test', '1-3-2014', 3);
INSERT INTO `msgs` VALUES (2, '6557', 'templogin@androidhive.info', 'test', '02-01-2015', 3);
INSERT INTO `msgs` VALUES (5, ' ', ' ', 'hello', '11-01-2015', 0);
INSERT INTO `msgs` VALUES (7, 'Putrajaya company', '012121212', 'putra@hotmail.com', 'please give me admin options to control my pl', 20);

-- --------------------------------------------------------

-- 
-- Table structure for table `payments`
-- 

CREATE TABLE `payments` (
  `id` int(11) NOT NULL auto_increment,
  `pay_date` date NOT NULL,
  `resid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `total` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `payments`
-- 

INSERT INTO `payments` VALUES (1, '2014-12-27', 3, 3, ' 100');
INSERT INTO `payments` VALUES (2, '2014-12-27', 4, 3, ' 100');
INSERT INTO `payments` VALUES (3, '2015-01-01', 5, 3, ' 100');
INSERT INTO `payments` VALUES (4, '2015-01-21', 7, 3, ' 100');

-- --------------------------------------------------------

-- 
-- Table structure for table `playground`
-- 

CREATE TABLE `playground` (
  `id` int(11) NOT NULL auto_increment,
  `playground_name` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `comid` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

-- 
-- Dumping data for table `playground`
-- 

INSERT INTO `playground` VALUES (1, 'Kajang foutsal 1 playground 1', 'Kajang', 2);
INSERT INTO `playground` VALUES (2, 'Kajang foutsal 1 playground 2', 'Kajang', 2);
INSERT INTO `playground` VALUES (3, 'Bangi foutsal 1 playground 1', 'Bangi', 4);
INSERT INTO `playground` VALUES (4, 'Bangi foutsal 1 playground 2', 'Bangi', 4);
INSERT INTO `playground` VALUES (5, 'Serdang foutsal 1 playground 1', 'Serdang ', 3);
INSERT INTO `playground` VALUES (6, 'KL foutsal 1 playground 1', 'KL', 5);
INSERT INTO `playground` VALUES (10, 'Serdang foutsal 1 playground 1', 'Serdang', 3);
INSERT INTO `playground` VALUES (11, 'Serdang foutsal 1 playground 2', 'Serdang ', 3);
INSERT INTO `playground` VALUES (12, 'Kajang foutsal 2 playground 1', 'Kajang', 2);
INSERT INTO `playground` VALUES (19, 'KL foutsal 1 playground 2', 'KL', 5);

-- --------------------------------------------------------

-- 
-- Table structure for table `reservation`
-- 

CREATE TABLE `reservation` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `date_` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `member_id` int(10) unsigned NOT NULL,
  `city` varchar(45) NOT NULL,
  `p_id` int(10) unsigned NOT NULL,
  `cost` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `reservation`
-- 

INSERT INTO `reservation` VALUES (1, '2014-12-26', '10:00:00', '12:00:00', 3, 'Kajang', 1, '200');
INSERT INTO `reservation` VALUES (3, '2014-12-27', '10:00:00', '11:00:00', 3, 'Kajang', 1, '100');
INSERT INTO `reservation` VALUES (4, '2014-12-27', '13:00:00', '14:00:00', 3, 'Kajang', 1, '100');
INSERT INTO `reservation` VALUES (6, '2015-01-22', '10:00:00', '11:00:00', 3, 'Kajang', 1, '100');
INSERT INTO `reservation` VALUES (7, '2015-01-22', '10:00:00', '11:00:00', 3, 'Kajang', 1, '100');
