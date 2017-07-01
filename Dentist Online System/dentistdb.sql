-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 25, 2015 at 09:56 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `dentistdb`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` VALUES (1, '123', 'admin@hotmail.com', 'Adnan');

-- --------------------------------------------------------

-- 
-- Table structure for table `appointment`
-- 

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL auto_increment,
  `date_` varchar(45) NOT NULL,
  `time_` varchar(45) NOT NULL,
  `treatment` varchar(45) NOT NULL,
  `pid` int(10) unsigned NOT NULL,
  `details` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `appointment`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `appreq`
-- 

CREATE TABLE `appreq` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `date_` varchar(45) NOT NULL,
  `time_` varchar(45) NOT NULL,
  `treatments` varchar(45) NOT NULL,
  `pid` varchar(45) NOT NULL,
  `status` varchar(33) NOT NULL,
  `comment` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

-- 
-- Dumping data for table `appreq`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `message`
-- 

CREATE TABLE `message` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `message` varchar(45) NOT NULL,
  `date_` varchar(45) NOT NULL,
  `pid` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

-- 
-- Dumping data for table `message`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `patient`
-- 

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `patient`
-- 

INSERT INTO `patient` VALUES (2, 'Adnan', '123', 'Male', '0102222', 'adnan@hotmail.com', '1/1/1989', 'Malaysia', '22-6-2015');

-- --------------------------------------------------------

-- 
-- Table structure for table `payments`
-- 

CREATE TABLE `payments` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `date_` varchar(45) NOT NULL,
  `amount` varchar(45) NOT NULL,
  `details` varchar(45) NOT NULL,
  `comment` varchar(45) NOT NULL,
  `pid` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `payments`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `treatments`
-- 

CREATE TABLE `treatments` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `date_` varchar(45) NOT NULL,
  `cost` varchar(45) NOT NULL,
  `desc` varchar(45) NOT NULL,
  `comment` varchar(45) NOT NULL,
  `pid` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `treatments`
-- 

