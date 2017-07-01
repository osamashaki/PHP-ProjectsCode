-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Sep 15, 2015 at 09:20 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `restaurant`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `id` int(12) NOT NULL auto_increment,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` VALUES (1, 'Moteeb', '', '123', 'admin@gmail.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `feedback`
-- 

CREATE TABLE `feedback` (
  `id` int(12) NOT NULL auto_increment,
  `name` varchar(25) NOT NULL,
  `email` varchar(250) NOT NULL,
  `text` varchar(500) NOT NULL,
  `date_` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `feedback`
-- 

INSERT INTO `feedback` VALUES (5, 'ali', 'ali@hotmail.com', 'hi \r\nmay i now how much is the price per had \r\n\r\nthanks ', '04-02-2014');
INSERT INTO `feedback` VALUES (6, 'husam', 'husam@gmail.com', 'hello ', '04-02-2014');

-- --------------------------------------------------------

-- 
-- Table structure for table `menu`
-- 

CREATE TABLE `menu` (
  `meal_id` int(12) NOT NULL auto_increment,
  `meal_name` varchar(25) NOT NULL,
  `meal_price` int(25) NOT NULL,
  `meal_desc` varchar(250) NOT NULL,
  `photo_path` varchar(45) NOT NULL,
  `disporder` int(12) NOT NULL,
  `type` varchar(25) NOT NULL,
  PRIMARY KEY  (`meal_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

-- 
-- Dumping data for table `menu`
-- 

INSERT INTO `menu` VALUES (4, 'Kabab Lamb', 0, 'Kabab  is a dish of pieces of meat grilled on a skewer', 'kabab.jpg', 11, 'L');
INSERT INTO `menu` VALUES (5, 'Kabsa Laham', 0, 'These dishes are mainly made from a mixture of spices, rice, meat and vegetables.', 'kabsalahm.jpg', 9, 'L');
INSERT INTO `menu` VALUES (20, 'Chicken Kabsa', 0, 'These dishes are mainly made from a mixture of spices, rice, meat and vegetables.These dishes are mainly made from a mixture of spices, rice, Chicken and vegetables.', 'KabsaChicken.jpg', 10, 'L');
INSERT INTO `menu` VALUES (24, 'Salad Bar', 0, 'Mix 3 type''s: Orange, Apple and Syrap', 'Salad-bar-healthy-food-crew-catering.jpg', 1, 'D');
INSERT INTO `menu` VALUES (35, 'Mix fruit', 10, 'Mix fruit', 'mixf.jpg', 0, 'des');
INSERT INTO `menu` VALUES (36, 'baqlawa', 3, 'baqlawa sweet', 'baqlawa.jpg', 0, 'des');
INSERT INTO `menu` VALUES (26, 'Apple Juice', 0, 'Fresh Apple Juice', '22.jpg', 21, 'dr');
INSERT INTO `menu` VALUES (27, 'Orange Juice ', 0, 'Fresh Orange Juice ', '12.jpg', 22, 'dr');
INSERT INTO `menu` VALUES (28, 'Mix Fruit', 0, 'Mix a 4 type of fresh fruit.', '11.jpg', 23, 'dr');
INSERT INTO `menu` VALUES (29, 'Greek salad ', 0, 'is a salad in Greek cuisine. Greek salad is made with pieces of tomatoes, sliced cucumbers, onion, feta cheese, and olives', 'Greek Salad.jpg', 2, 'D');
INSERT INTO `menu` VALUES (32, 'Green Salad', 0, 'Salad', '7.jpg', 0, 'L');
INSERT INTO `menu` VALUES (33, 'Yogurt', 0, 'Yogurt', '8.jpg', 0, 'L');
INSERT INTO `menu` VALUES (34, 'Chicken Madghut', 0, 'Chicken Madghut', '9.jpg', 0, 'L');

-- --------------------------------------------------------

-- 
-- Table structure for table `news`
-- 

CREATE TABLE `news` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(45) NOT NULL,
  `newstext` varchar(45) NOT NULL,
  `photo_path` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `news`
-- 

INSERT INTO `news` VALUES (9, 'New Brunch At KL Sentral', 'Good News for our customers we are going to o', 'new.jpg');
INSERT INTO `news` VALUES (10, 'New Meun', 'Good News for our customers, wait for our new', 'newmenu-thumb.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `orders`
-- 

CREATE TABLE `orders` (
  `order_id` int(12) NOT NULL auto_increment,
  `order_date` varchar(25) NOT NULL,
  `meal` varchar(25) NOT NULL,
  `nopeople` varchar(25) NOT NULL,
  `place` varchar(45) NOT NULL,
  `wedding` varchar(25) NOT NULL,
  `photographer` varchar(25) NOT NULL,
  `furniture` varchar(45) NOT NULL,
  `crew` varchar(25) NOT NULL,
  `food` varchar(250) NOT NULL,
  `cost` varchar(45) NOT NULL,
  `user_id` int(12) NOT NULL,
  `seq` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY  (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

-- 
-- Dumping data for table `orders`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `payment`
-- 

CREATE TABLE `payment` (
  `id` int(11) NOT NULL auto_increment,
  `date_` varchar(45) NOT NULL,
  `cost` varchar(45) NOT NULL,
  `orderid` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `payment`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `promotion`
-- 

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(45) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` varchar(25) NOT NULL,
  `photo_path` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- 
-- Dumping data for table `promotion`
-- 

INSERT INTO `promotion` VALUES (10, 'Open buffet for 50 persons ', 'All for RM 2000 only', '2000', 'adam-makaira-14.jpg');
INSERT INTO `promotion` VALUES (12, 'Chinese New Year Promotion', 'A catering for 33 - 40 people. Five main type of delicious food. Two Appetizers. Two drink ', '2399', 'chinesefood1.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `promotionorders`
-- 

CREATE TABLE `promotionorders` (
  `id` int(12) NOT NULL auto_increment,
  `date_` varchar(25) NOT NULL,
  `place` varchar(25) NOT NULL,
  `furniture` varchar(25) NOT NULL,
  `crew` varchar(25) NOT NULL,
  `promotionid` varchar(25) NOT NULL,
  `cost` varchar(25) NOT NULL,
  `uid` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `promotionorders`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `review`
-- 

CREATE TABLE `review` (
  `id` int(12) NOT NULL auto_increment,
  `comment` varchar(250) NOT NULL,
  `date_` varchar(25) NOT NULL,
  `uid` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

-- 
-- Dumping data for table `review`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `id` int(12) NOT NULL auto_increment,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `phone_no` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `address` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` VALUES (4, 'Moteeb', 'Moteeb', '0143322335', '123', 'moteeb@gmail.com', 'Male', 'East lake apartment - A-12-2');
