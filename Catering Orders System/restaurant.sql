-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 29, 2015 at 02:14 PM
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

INSERT INTO `admin` VALUES (1, 'abd', 'sh', '123', 'admin@hotmail.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `feedback`
-- 

CREATE TABLE `feedback` (
  `id` int(12) NOT NULL auto_increment,
  `name` varchar(25) NOT NULL,
  `email` varchar(250) NOT NULL,
  `text` varchar(250) NOT NULL,
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

-- 
-- Dumping data for table `menu`
-- 

INSERT INTO `menu` VALUES (4, 'Kabab Meat', 0, 'Kabab  is a dish of pieces of meat grilled on a skewer', 'kabab.jpg', 11, 'L');
INSERT INTO `menu` VALUES (5, 'Kabsa Laham', 0, 'These dishes are mainly made from a mixture of spices, rice, meat and vegetables.', 'kabsa.jpg', 9, 'L');
INSERT INTO `menu` VALUES (19, 'White Rice', 0, 'White Rice', 'rice.JPG', 4, 'L');
INSERT INTO `menu` VALUES (20, 'Kabsa Chicken', 0, 'These dishes are mainly made from a mixture of spices, rice, meat and vegetables.These dishes are mainly made from a mixture of spices, rice, Chicken and vegetables.', 'KabsaChicken.jpg', 10, 'L');
INSERT INTO `menu` VALUES (24, 'Salad Bar', 0, 'Mix 3 type''s: Orange, Apple and Syrap', 'Salad-bar-healthy-food-crew-catering.jpg', 1, 'D');
INSERT INTO `menu` VALUES (25, 'Three in One', 0, 'Three type of juices ( Apple, Orange, Mix fruit )', 'th3.jpg', 24, 'L');
INSERT INTO `menu` VALUES (26, 'Apple Juice', 0, 'Fresh Apple Juice', '22.jpg', 21, 'L');
INSERT INTO `menu` VALUES (27, 'Orange Juice ', 0, 'Fresh Orange Juice ', '12.jpg', 22, 'L');
INSERT INTO `menu` VALUES (28, 'Mix Fruit', 0, 'Mix a 4 type of fresh fruit.', '11.jpg', 23, 'L');
INSERT INTO `menu` VALUES (29, 'Greek salad ', 0, 'is a salad in Greek cuisine. Greek salad is made with pieces of tomatoes, sliced cucumbers, onion, feta cheese, and olives', 'Greek Salad.jpg', 2, 'D');
INSERT INTO `menu` VALUES (30, 'Nasi Lemak', 0, 'Nasi Lemak is a fragrant rice dish cooked in coconut milk and "pandan" leaf', 'Nasi-Lemak.jpg', 3, 'L');

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

INSERT INTO `orders` VALUES (4, '01/20/2014', 'Launch', '10', 'Outside', '1500', '0', '20', '2', 'Kabab Kabsa Lahim White Rice Kabsa Chicken ', '2400', 3, 'Cat_4', '');
INSERT INTO `orders` VALUES (5, '01/19/2014', 'Launch', '10', 'Inside', '1500', '0', '20', '2', 'Kabab Kabsa Lahim White Rice Kabsa Chicken ', '2388', 3, 'Cat_5', '');
INSERT INTO `orders` VALUES (6, '01/19/2014', 'Breakfast', '12', 'Inside', '0', '2500', '20', '0', 'Kabab Kabsa Lahim ', '3498', 3, 'Cat_6', '');
INSERT INTO `orders` VALUES (7, '02/14/2014', 'Breakfast', '12', 'Inside', '0', '0', '0', '0', ', Kabsa Chicken', '780', 3, 'Cat_7', '');
INSERT INTO `orders` VALUES (14, '02/12/2014', 'Breakfast', '22', 'Outside', '0', '0', '0', '0', ', Salad Bar, Greek salad , Western Breakfast, White Rice, Three in One', '1430', 3, 'Cat_8', '');
INSERT INTO `orders` VALUES (15, '02/21/2014', 'Breakfast', '22', 'Inside', '0', '0', '0', '0', ', Salad Bar, Greek salad , Western Breakfast, Kabsa Laham', '1430', 3, 'Cat_15', '');
INSERT INTO `orders` VALUES (18, '02/21/2014', 'Breakfast', '23', 'Outside', '0', '0', '0', '0', ', Salad Bar, Nasi Lemak, Western Breakfast, White Rice, Three in One', '1495', 4, 'C100016', '');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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

INSERT INTO `promotion` VALUES (10, 'Open buffet for 50 persons ', 'All for RM 2500 only', '2500', 'adam-makaira-14.jpg');
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

INSERT INTO `promotionorders` VALUES (8, '01/25/2014', 'Inside', '20', '0', '10', '2520', '3');
INSERT INTO `promotionorders` VALUES (9, '02/13/2014', 'Inside', '0', '0', '10', '2399', '3');
INSERT INTO `promotionorders` VALUES (10, '02/14/2014', 'Inside', '20', '0', '10', '2520', '3');
INSERT INTO `promotionorders` VALUES (11, '02/14/2014', 'Inside', '20', '0', '10', '2520', '3');
INSERT INTO `promotionorders` VALUES (12, '02/14/2014', 'Inside', '20', '0', '10', '2520', '3');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

-- 
-- Dumping data for table `review`
-- 

INSERT INTO `review` VALUES (7, 'Good Restaurant..', '06-01-2014', '3');
INSERT INTO `review` VALUES (15, 'HELLO DEAR ', '04-02-2014', '4');
INSERT INTO `review` VALUES (16, 'test', '24-04-2015', '3');

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

INSERT INTO `user` VALUES (3, 'abd', 'sharari', '0122112111', '123456', 'abd@hotmail.com', 'Male', 'Serdang, Selangor');
INSERT INTO `user` VALUES (4, 'ali ', 'mohamed', '0143322335', '1234', 'ali21@gmail.com', 'Male', 'East lake apartment - A-12-2');
