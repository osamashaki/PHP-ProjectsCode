-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Aug 01, 2013 at 08:50 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `painter`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `memoir`
-- 



CREATE TABLE `memoir` (
  `id` int(11) NOT NULL auto_increment,
  `text` text NOT NULL,
  `date_` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `memoir`
-- 

INSERT INTO `memoir` VALUES (2, 'hellooooooo', '2013-08-01 15:16:18');
INSERT INTO `memoir` VALUES (3, 'tyerterterterte ert\r\ner etert ert \r\nert erte rter ert e\r\nte terte rte rte trt er\r\ntert\r\ner \r\nert rte ', '2013-08-01 15:16:18');
