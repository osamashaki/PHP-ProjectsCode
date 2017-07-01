-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jul 13, 2014 at 12:49 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `library`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `admin`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `authors`
-- 

CREATE TABLE `authors` (
  `id` int(11) NOT NULL auto_increment,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `authors`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `book`
-- 

CREATE TABLE `book` (
  `isbn` int(11) NOT NULL auto_increment,
  `title` varchar(45) NOT NULL,
  `publisher` varchar(45) NOT NULL,
  `author` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `copies` int(11) NOT NULL,
  `date_` varchar(25) NOT NULL,
  PRIMARY KEY  (`isbn`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45656889 ;

-- 
-- Dumping data for table `book`
-- 

INSERT INTO `book` VALUES (4565622, 'title', 'dar alsalam', 'ahmad', 'Art', 2, '12/2/1991');

-- --------------------------------------------------------

-- 
-- Table structure for table `book_authors`
-- 

CREATE TABLE `book_authors` (
  `id` int(11) NOT NULL auto_increment,
  `author_id` int(11) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `book_authors`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `book_copies`
-- 

CREATE TABLE `book_copies` (
  `id` int(11) NOT NULL auto_increment,
  `isbn` varchar(25) NOT NULL,
  `nocopies` varchar(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `book_copies`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `book_loan`
-- 

CREATE TABLE `book_loan` (
  `id` int(11) NOT NULL auto_increment,
  `isbn` varchar(25) NOT NULL,
  `user_id` varchar(25) NOT NULL,
  `date_loaned` varchar(25) NOT NULL,
  `due_date` varchar(25) NOT NULL,
  `return_date` varchar(25) NOT NULL,
  `days_late` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `book_loan`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `book_publisher`
-- 

CREATE TABLE `book_publisher` (
  `id` int(11) NOT NULL auto_increment,
  `pub_name` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `book_publisher`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `book_request`
-- 

CREATE TABLE `book_request` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(45) NOT NULL,
  `publisher` varchar(45) NOT NULL,
  `authors` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `copies` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `book_request`
-- 

INSERT INTO `book_request` VALUES (3, 'test', 'test', 'test', 'Art', 3);

-- --------------------------------------------------------

-- 
-- Table structure for table `message`
-- 

CREATE TABLE `message` (
  `id` int(11) NOT NULL auto_increment,
  `msgdate` varchar(25) NOT NULL,
  `from` varchar(25) NOT NULL,
  `title` varchar(25) NOT NULL,
  `text` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `message`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `college` varchar(25) NOT NULL,
  `role` varchar(25) NOT NULL,
  `regdate` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` VALUES (1, 'Ahmad sharifuddin', 'ahmad@gmail.com', '12345', '0102238756', 'COE', 'Lecturer', '23-06-2014');
INSERT INTO `user` VALUES (2, 'mashaan', 'mashaan_111@hotmail.com', '12345', '0132387335', 'COIT', 'Student', '23-06-2014');
INSERT INTO `user` VALUES (8, 'Mohd', 'mohd@gmail.com', '12345', '012121212', 'None', 'Librarian', '28-06-2014');
